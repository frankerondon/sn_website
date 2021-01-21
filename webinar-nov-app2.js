console.log('Si sirve, aspiremos que los datos sean leidos desde PHP');

var webinar_form= document.getElementById('mc-embedded-subscribe-form');
webinar_form.addEventListener('submit', function(e){
	e.preventDefault();
	var dataa= new FormData(webinar_form);			//Esto es una instancia de formData
	var fname= dataa.get('FNAME');
	var lname= dataa.get('LNAME');
	var company= dataa.get('COMPANY');
	var jtitle= dataa.get('JOBTITLE');
	var email= dataa.get('EMAIL');
	
	console.log(fname);
	console.log(lname);
	console.log(company);
	console.log(jtitle);
	console.log(email);
	
	console.log(dataa);
	//debugger;
	
	
	//Creando el JSON 
	var suscriber= new Object();
	suscriber.ffname= fname;
	suscriber.llname= lname;
	suscriber.ccompany= company;
	suscriber.jjtitle= jtitle;
	suscriber.eemail= email;
	
	var yeison_suscriber= JSON.stringify(suscriber);
	
	console.log(yeison_suscriber);
	//Si sirve el parseo a JSON.
	
	
	
	//Fetch para ser usando en mi servidor local localhost
	/*
	fetch('/snintegrity/sntestbdd_ver_0.1/handlebdd2.php',{		
	method: 'POST',
	
	body: dataa,
	cache: 'no-cache'
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(dataa) {
        console.log('data = ', dataa);			
    })											
    .catch(function(err) {
        console.error(err);
    });
	*/
	
	//Fetch para ser usando en mi servidor de pruebas en la nube
	fetch('/handlebdd2.php',{		
	method: 'POST',
	
	body: dataa,
	cache: 'no-cache'
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(dataa) {
        console.log('data = ', dataa);			
    })											
    .catch(function(err) {
        console.error(err);
    });
	
	
	/*
	setTimeout(function () {
       window.location.href = '/snintegrity/sntestbdd_ver_0.1/handlebdd2.php'; 
    }, 6000); 
	*/
	//location.href='/snintegrity/sntestbdd_ver_0.1/handlebdd2.php';
	
});