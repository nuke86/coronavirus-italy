<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Calcolo R0 o Rt - Monitoraggio situazione in tempo reale</h1>
  </div>

  <!-- Content Row -->
  
  <h3>Analisi preliminare sui dati</h3>
	<p>Gli algoritmi utilizzati sono spiegati da Kevin Systrom <a href="http://systrom.com/blog/the-metric-we-need-to-manage-covid-19/" target="_realR0">qui</a>.
	Per la mia ricerca ho adattato i suoi algoritmi, ai dati forniti dalla Protezione Civile e generato dei grafici per la situazione italiana dell'indice di contagio</p>
  <h2>Premessa sulla ricerca di R0 o Rt</h2>
  
	<span class="small">tratto da Kevin Systrom 12 Aprile 2020</span><br />
	<p>
	In ogni epidemia, <b>𝑅𝑡</b> è la misura nota come numero di riproduzione efficace. È il numero di persone che si infettano per ogni persona 
	infetta alla volta <b>𝑡</b>. <br />
	La versione più nota di questo numero è il numero di riproduzione di base: <b>𝑅0</b> quando <code>𝑡 = 0</code>. Tuttavia, <b>𝑅0</b> è 
	una singola misura che non si adatta ai cambiamenti nel comportamento e nelle restrizioni.</p>
	<br />
	<p>Man mano che una pandemia si evolve, le crescenti restrizioni (o il potenziale rilascio di restrizioni) cambiano 𝑅𝑡. Conoscere 
	l'attuale 𝑅𝑡 è essenziale. Quando <code>𝑅> 1</code>, la pandemia si diffonderà in tutta la popolazione. <br />
	Se <code>𝑅𝑡 <1</code>, la pandemia crescerà fino a 
	un numero fisso inferiore alla popolazione. Più è basso, più è gestibile la situazione. Il valore di 𝑅𝑡 ci aiuta (1) a comprendere 
	l'efficacia delle nostre misure di controllo di un focolaio e (2) ci fornisce informazioni vitali sull'opportunità di aumentare o ridurre 
	le restrizioni basate sui nostri obiettivi concorrenti di prosperità economica e sicurezza umana. 
	<a href="https://www.nytimes.com/2020/04/06/opinion/coronavirus-end-social-distancing.html" taregt="nytime">Epidemiologi molto rispettati</a> 
	sostengono che il monitoraggio 𝑅𝑡 è l'unico modo per gestire questa crisi.</p>
	<br />
	<p>Tuttavia, oggi, per quanto ne so, non esiste un monitoraggio in tempo reale di 𝑅𝑡 in Italia. In effetti, l'unica misura 
	in tempo reale che ho visto è stata per <a href="https://covid19.sph.hku.hk/dashboard" target="hk">Hong Kong</a>.<br /> 
	Ancora più importante, 
	non è utile comprendere <b>𝑅𝑡</b> a livello nazionale. Invece, per gestire efficacemente questa crisi, abbiamo bisogno di una granularità 
	a livello locale (provincia/città) di <b>𝑅𝑡</b>.
	</p>
	
	<h2>Il caso Italia <br />
	[Sardegna, Lombardia e Piemonte]</h2><br />
	
	<h3>08 maggio 2020</h3>
	<div class="row">
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/SS-r0-08-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/MI-r0-08-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/TO-r0-08-05-2020.png" width="100%" class="lineeOms" />
		</div>
	</div>
	<h3>06 maggio 2020</h3>
	<div class="row">
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/CA-r0-06-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/MI-r0-06-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/TO-r0-06-05-2020.png" width="100%" class="lineeOms" />
		</div>
	</div>
	<h3>05 maggio 2020</h3>
	<div class="row">
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/CA-r0-05-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/MI-r0-05-05-2020.png" width="100%" class="lineeOms" />
		</div>
		<div class="col-xl-4 col-md-8 mb-4">
			<img src="img/R0/TO-r0-05-05-2020.png" width="100%" class="lineeOms" />
		</div>
	</div>
</div>