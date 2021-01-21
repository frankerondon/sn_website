console.log('Espero que se vea');


// Codigo de: https://medium.com/nubeden-desarrollo-web/php-envió-de-datos-y-obtener-respuesta-mediante-ajax-de-juery-para-luego-trabajarlos-con-javascript-161f54c79a9f
/*
var btn= document.getElementById('mc-embedded-subscribe');
btn.addEventListener('click', () => {
	var fname= document.getElementById('mce-FNAME').value;
	var lname= document.getElementById('mce-LNAME').value;
	var company= document.getElementById('mce-COMPANY').value;
	var jtitle= document.getElementById('mce-JOBTITLE').value;
	var email= document.getElementById('mce-EMAIL').value;
	
	$.ajax({
		url: 'handlebdd.php',
		method: 'POST',
		data: {
			ffname:fname,
			llname:lname,
			ccompany:company,
			jjtitle:jtitle,
			eemail:email
		},	
	}).done(function(res){
		var result = JSON.parse(res);
		console.log(result);
	});
	
	console.log(fname);
	console.log(lname);
	console.log(company);
	console.log(jtitle);
	console.log(email);
	
	//location.href="http://192.168.36.103/snintegrity/sntestbdd_ver_0.1/handlebdd.php";
	
});
*/



//Codigo de: https://www.youtube.com/watch?v=nLrL9Ip3tWI				//Enviar datos por método POST a PHP con Formulario HTML/JAVASCRIPT (#4 Fetch API)

/*
var webinar_form= document.getElementById('mc-embedded-subscribe-form');
webinar_form.addEventListener('submit', function(e){
	e.preventDefault();
	var dataa= new FormData(webinar_form);
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
	
	
	fetch('handlebdd.php', {
		method: 'POST',
		body: dataa,
	})
	.then(res => res.text())
	.then(dataa => console.log(dataa));
	);
});
*/

//location.href="http://192.168.36.103/snintegrity/sntestbdd_ver_0.1/handlebdd.php";

