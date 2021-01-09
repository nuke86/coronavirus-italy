import pandas as pd
import numpy as np
from datetime import datetime, timedelta
from sklearn.metrics import mean_squared_error
from scipy.optimize import curve_fit
from scipy.optimize import fsolve
import matplotlib.pyplot as plt

url = "https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-andamento-nazionale/dpc-covid19-ita-andamento-nazionale.csv"
df = pd.read_csv(url)

df = df.loc[:, ['data', 'totale_casi']]

FMT = '%Y-%m-%dT%H:%M:%S'
date = df['data']
df['data'] = date.map(lambda x2: (datetime.strptime(x2, FMT) - datetime.strptime("2020-01-01T00:00:00", FMT)).days)


def logistic_model(x3, a3, b3, c3):
    return c3/(1+np.exp(-(x3-b3)/a3))


x = list(df.iloc[:, 0])
y = list(df.iloc[:, 1])

initial_values = [4, 1000, 2500000]
fit = curve_fit(logistic_model, x, y, p0=initial_values)

a = fit[0][0]
b = fit[0][1]
c = fit[0][2]

first_january = datetime.strptime('2020/01/01', "%Y/%m/%d")
infection_peak_date = first_january + timedelta(days=int(b))
print('{"status": "ok","previsioni": [{ "piccoContagio": "',datetime.strftime(infection_peak_date,"%d/%m/%Y"),'",')
errors = [np.sqrt(fit[1][i][i]) for i in [0, 1, 2]]
print('"totaleInfetti": "{}", "minInfetti": "{}", "maxInfetti": "{}",'.format(float(c), float(c-errors[2]),float(c+errors[2])))

sol = int(fsolve(lambda x : logistic_model(x, a, b, c) - int(c),b))

infection_end_date = first_january + timedelta(days=int(sol))
print('"fineContagio": "',datetime.strftime(infection_end_date,"%d/%m/%Y"),'",')


def add_real_data(df, label, color=None):
    x = df['data'].tolist()
    y = df['totale_casi'].tolist()
    plt.scatter(x, y, label="Dati reali (" + label + ")", c=color)


pred_x = list(range(max(x), sol))
plt.rcParams['figure.figsize'] = [7, 7]
plt.rc('font', size=14)
# Real data
add_real_data(df[-1:], "oggi")
add_real_data(df[-2:-1], "ieri")
add_real_data(df[:-2], "2 giorni fa")
# Predicted curve of today
plt.plot(x+pred_x, [logistic_model(i,fit[0][0],fit[0][1],fit[0][2]) for i in x+pred_x], label="Previsione dati oggi")

# Predicted curve of yesterday
x = list(df[:-1].iloc[:, 0])
y = list(df[:-1].iloc[:, 1])
pred_x = list(range(max(x), sol))
fit = curve_fit(logistic_model, x, y, p0=[2, 1000, 2500000])
plt.plot(x+pred_x, [logistic_model(i,fit[0][0],fit[0][1],fit[0][2]) for i in x+pred_x],
         label="Previsione dati ieri", dashes=[4, 4])

# Predicted curve of 2 days ago curve
x = list(df[:-2].iloc[:, 0])
y = list(df[:-2].iloc[:, 1])
pred_x = list(range(max(x), sol))
fit = curve_fit(logistic_model, x, y, p0=[2, 1000, 2500000])
plt.plot(x+pred_x, [logistic_model(i,fit[0][0],fit[0][1],fit[0][2]) for i in x+pred_x],
         label="Previsione dati 2 giorni fa",dashes=[8, 8])

today_date = datetime.today().strftime('%Y-%m-%d')
plt.title("Previsioni per casi accertati in Italia del " + today_date)

plt.legend()
plt.xlabel("Giorni da 1 gennaio 2020")
plt.ylabel("Numero totale persone infette")
plt.ylim((min(y)*0.9,c*1.1))

filename = 'plot-' + today_date + '.png'
plt.savefig('img/plots/'+filename, bbox_inches="tight")

y_pred_logistic = [logistic_model(i,fit[0][0],fit[0][1],fit[0][2]) for i in x]
print('"erroreModello": "', mean_squared_error(y,y_pred_logistic),'"}]}')


