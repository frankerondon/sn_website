console.log('Espero que se vea');

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
	
	
	/*
	fetch('/snintegrity/sntestbdd_ver_0.1/handlebdd.php', {
		method: 'POST',
		body: yeison_suscriber
	})
	.then(res => res.json())
	.then(yeison_suscriber => console.log(yeison_suscriber));
	*/
	//hoy 21/11/2020 Despues de unos pocos segundos me marca el error tipo:
	//Uncaught (in promise) SyntaxError: Unexpected token < in JSON at position 0 [Error unexpected token]
	
	
	//);
	//console.log(res);
	//console.log(dataa);
	
	
	
	
	//FetchApi de prueba pero en vez de enviar, recibe un JSON, y se ejecuto bien.
	/*
	fetch('https://httpbin.org/ip')
    .then(function(response) {
        return response.text();
    })
    .then(function(data) {
        console.log('data = ', data);
    })
    .catch(function(err) {
        console.error(err);
    });
	*/
	//Haciendo la 1era prueba recibiendo datos con FetchAPI si recibe bien los datos de prueba, ahora lo que falta es enviar datos.
	
	
	
	
	//FetchApi de prueba de envio de datos, veamos su respuesta.
	/*
	fetch('https://httpbin.org/post',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({"a": 1, "b": 2}),
        cache: 'no-cache'
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        console.log('data = ', data);
    })
    .catch(function(err) {
        console.error(err);
    });
	*/
	//Tambien funciona enviando datos con Fetch API.
	
	
	
	
	//Hoy 21/11/2020 Aun pasando el JSON que cree me sigue dando el mismo error y todo al hacer el envio, me sigue cayendo en el catch.
	//El patch del fetch si esta correcto
	
	fetch('/snintegrity/sntestbdd_ver_0.1/handlebdd.php',{		
	method: 'POST',
	/*
	headers: {
		'Content-Type': 'application/json'
	},
	*/
	body: yeison_suscriber,
	cache: 'no-cache'
    })
    .then(function(response) {
        return response.text();
    })
    .then(function(yeison_suscriber) {
        console.log('data = ', yeison_suscriber);
    })
    .catch(function(err) {
        console.error(err);
    });
	
	
	//location.href='/snintegrity/sntestbdd_ver_0.1/handlebdd2.php';
	
	//Aun con este codigo se me sigue ejecutando es en el catch.
	//SyntaxError: Unexpected token < in JSON at position 0 [Error unexpected token]
		//Ya se corrigio lo que hay que hacer es que al retornar en el promise, hacer un: return response.text(); en vez de: response.json()
	
	
	
});