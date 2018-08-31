<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta name="robots">
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no" />
    <title>LEADS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">
   <style type="text/css">body {

            font-size:14px;
            font-size:.875rem;
            line-height:24px;
            line-height:1.5rem;
            padding-top: 30px;
            padding-right: 60px;
            padding-left: 60px;
            padding-bottom: 30px;
            font-family:Arial,Helvetica,sans-serif;
        }

        @font-face {
            font-family: 'arial-black';
            src: local('Arial Black');
        }

        #columns *[contenteditable="true"], #header *[contenteditable="true"] {
            padding: 10px;
        }

        #header {
            overflow: hidden;
            background-color: #00722a;
            color: #fff;
            font-family: "Arial Black", arial-black;
            font-size: 3.6em;
            line-height: 1.1;
            text-transform: uppercase;
            text-align: right;
            padding: 15px;
        }


        #image{
            height: 500px;
            width: 100%;
        }

        #bluesection{
            background-color: #012f7a; 
            color: white; 
            text-align: center; 
            padding: 10px
        }
     
       
        #columns {
            color: #fff;
            overflow: auto;
            font-size: 0.9em;
            text-align: center;
        }

        #columns > div {
            float: left;
            width: 33.3%;
        }

        #columns #column1 > div {
            margin: 1px;
            background-color: #6f0091;
        }
        
        #column1 h4 {
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2px;
            overflow: hidden;
            font-weight: bold;
            color: white;
        }

        #column2 h4 {
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2px;
            overflow: hidden;
            font-weight: bold;
            color: white;
        }

        #column3 h4 {
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2px;
            overflow: hidden;
            font-weight: bold;
            color: white;
        }

        #columns #column3 > div {
            margin: 1px;
            background-color: #6f0091;
        }

        #columns #column2 > div {
            margin: 1px;
            background-color: #6f0091;
        }

        #columns > div > div {
            margin: 0px 10px;
        }

        #columns blockquote {
            margin-left: 15px;
        }

        hr {
            background-color: white;
            display: block;
            height: 4px;
            border: 0;
            border-top: 2px solid #fff;
            margin: 1em 0;
            padding: 0;
        }

         #row1 {
            
            width: 100%;
            height: 80%;            
            background-position: center;
               
        }

         #row1 h1 {
            margin-bottom: 2px;
            overflow: hidden;
            font-weight: bold;
            color: white;
        }

         #row1 p {
            color: white;
        }

         #row1 img {
            height: 200px;
            width: 200px;  
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        #image4{
            margin-left: auto;
            margin-right: auto;            
            height: 300px;
            width: 300px;      
        }

         #image3{
            position: absolute;
            max-width:100%;
            max-height:80%;
        }

        #row4 img {
            height: 130px;
            width: 130px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        #row5 img {
            height: 90px;
            width: 90px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

         #row6 h2 {
            overflow: hidden;
            font-weight: bold;
            color: white;
            text-align: center;
        }

         #row6 p {
            overflow: hidden;
            color: white;
            text-align: center;
        }

        #row6 img {
            height: 50px;
            width: 50px;
     
        }

       .button {
              font: bold 20px Arial;
              text-decoration: none;
              background-color: #F9AF04;
              color: #fff;
              padding: 10px 45px 10px 45px;
              border-top: 1px solid #CCCCCC;
              border-right: 1px solid #333333;
              border-bottom: 1px solid #333333;
              border-left: 1px solid #CCCCCC;
              height:55px;
        }

        .button2 {
              font: bold 14px Arial;
              text-decoration: none;
              background-color: #F9AF04;
              color: #fff;
              padding: 10px 10px 10px 10px;
              border-top: 1px solid #CCCCCC;
              border-right: 1px solid #333333;
              border-bottom: 1px solid #333333;
              border-left: 1px solid #CCCCCC;
              height:55px;
        }

        input[type=submit] {
            font-weight: bold;
              font-size: 15px;
              text-decoration: none;
              text-transform: uppercase;
              background-color:#f9af04;
              color:#fff;
              padding: 9px 45px 9px 45px;
              border-top: 1px solid #CCCCCC;
              border-right: 1px solid #333333;
              border-bottom: 1px solid #333333;
              border-left: 1px solid #CCCCCC;
        }

        input[type=text]{
          -webkit-transition: all 0.30s ease-in-out;
          -moz-transition: all 0.30s ease-in-out;
          -ms-transition: all 0.30s ease-in-out;
          -o-transition: all 0.30s ease-in-out;
          outline: none;
          padding: 3px 0px 3px 3px;
          margin: 5px 1px 3px 0px;
          border: 1px solid #DDDDDD;
        }

        input[type=text]:focus{
          box-shadow: 0 0 5px #ffe506;
          padding: 3px 0px 3px 3px;
          margin: 5px 1px 3px 0px;
          border: 1px solid #f9af04;
        }

       select{
          -webkit-transition: all 0.30s ease-in-out;
          -moz-transition: all 0.30s ease-in-out;
          -ms-transition: all 0.30s ease-in-out;
          -o-transition: all 0.30s ease-in-out;
          outline: none;
          padding: 3px 0px 3px 3px;
          margin: 5px 1px 3px 0px;
          border: 1px solid #DDDDDD;
        }

        select:focus {
          box-shadow: 0 0 5px #ffe506;
          padding: 3px 0px 3px 3px;
          margin: 5px 1px 3px 0px;
          border: 1px solid #f9af04;
        }

        select:focus > option:checked { 
            background: #ffec6a !important;
        }
        
                select:focus > option:hover { 
            background: #ffec6a !important;
        }
        @media only screen and (max-width: 600px) {
            body {
                padding: 0;
        		margin: 0;
            }
        	.button{
        		font: bold 12px Arial;
        		padding:10px 20px;
        	}
        	.img-fluid{
        		margin:auto;
        		top:15% !important;
        	}
        	.footer{
        		padding-top:100px;
        	}
                #row6 h2{
                    font-size: 24px;
                    padding-top: 10px;
                }
                #columns > div {
                    width: 100%;
                    padding-top: 10px;
                }
                .land2_banner{
                    height: 600px;
                }
                .land2_logo1{
                    height: 40%;
                    width: 40%;
                }
                .land2-subfooter{
                    margin-left:-10px;
                    margin-right:-150px;
                }
                #row1 h1{
                    font-size: 30px;
                }
                #row1 p{
                    font-size: 20px;
                }
                
                #img_pasos img{
                    width: 60%;
                    height: 70%;
                    margin: auto !important;
                }
                #notas{
                    padding: 0 !important;
                }
                #preguntas{
                    padding: 0 !important;
                }
                #plant4_banner{
                    width: 100% !important;
                    height: 800px !important;
                }
                .plant4_cont{
                    margin-top: 360px;
                    margin-left: 10px;
                }
                .pl4_paso{
                    font-size: 24px;
                }
                .plan3_banner{
                    width: 80%;
                }
                #pla3_contenedor{
                    padding: 0 !important;
                }
                #pla3_cont1{
                    height: 670px;
                }
                #pla3_cont2{
                    height: 1000px;
                }
                #naranja{
            	    height:260px !important;
            	}
        }
 </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script>
        $(document).ready(function() { 
            var id=$("input[name=CodLanding]").val();
            $.ajax({
                data:{id:id},
                url:"http://dechali.com/lead/public/coneccion/actualiza_contador.php",
                type:"post",
                success:  function (contador) {
                    $("input[name=ContadorVisitas]").html(contador);
                }
            });

            $(".button").click(function() {
                var id=$("input[name=CodLanding]").val();
                $.ajax({
                    data:{id:id},
                    url:"http://dechali.com/lead/public/coneccion/actualiza_clics.php",
                    type:"post",
                    success:  function (contador) {
                        $("input[name=ContadorClics]").html(contador);
                    }
                });
            });
            
            <?php date_default_timezone_set("America/La_Paz"); ?>
            var today = new Date();
            var dd = today.getDate();

            var mm = today.getMonth()+1; 
            var yyyy = today.getFullYear();
            if(dd<10) 
            {
                dd="0"+dd;
            } 

            if(mm<10) 
            {
                mm="0"+mm;
            } 
            today = yyyy+"-"+mm+"-"+dd;
            
            var desde = document.getElementsByName("Desde")[0].value;
            var hasta = document.getElementsByName("Hasta")[0].value;
            if (today >= desde && today <= hasta){
                
                document.getElementsByName("Enviar")[0].disabled = false;
            }else{
                
                document.getElementsByName("Enviar")[0].disabled = true;
            }
        });
    </script>

    <script>
        function mensaje() {
              alert("¡Muchas gracias!\n\nNos pondremos en contacto con usted!");
            
        }
    </script>
	<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,"script",
        "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", ""); 
        fbq("track", "PageView");
    </script>
    <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id=&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body><p><input name="PixeFormulario" type="hidden" value="" /></p>

<div class="container-fluid">
<div class="row row-eq-height" id="row1">
<div class="col-md-12" style="padding-left:0px; padding-right:0px; position:relative; text-align:center; width:100%"><img class="land2_banner" id="land2_banner" src="http://dechali.com/lead/public/img/images/para%20landing-fb.jpg" style="height:660px; overflow:visible; width:100%" />
<div style="left:20px; position:absolute; top:20px"><img class="img-responsive" id="land2_logo1" src="http://dechali.com/lead/public/img/images/logo%20dechali%20full%20color%20-%202017.png" style="height:168px; width:200px" />
<h1><span style="color:null"><strong>VENDE </strong></span><span style="color:#f1c40f"><strong>M&Aacute;S </strong></span><span style="color:null"><strong>Y LOGRA </strong></span><span style="color:#f1c40f"><strong>M&Aacute;S</strong></span><span style="color:null"><strong> CLIENTES</strong></span></h1>

<h1><span style="color:#f1c40f"><strong>UTILIZANDO FACEBOOK</strong></span></h1>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><span style="font-size:12px">Aprovecha el 10% de descuento en todos nuestros planes</span></p>

<p><span style="font-size:12px">Nos encargamos de implementar una campa&ntilde;a publicitaria que de resultados concretos: M&aacute;s ventas</span></p>
<br />
<input name="PixeBoton" type="hidden" value="" /> <a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">QUIERO VENDER M&Aacute;S</a></div>
</div>
</div>

<div class="row">
<div style="background:white; height:80px">&nbsp;</div>
</div>

<div class="row">
<div class="col-md-7">

<h1><span style="font-size:16px"><span style="color:#e74c3c"><strong>&iquest;Qu&eacute; es lo que hacemos?</strong></span></span></h1>

<p><span style="font-size:14px">Nuestros beneficios:</span></p>

<ul>
	<li><span style="font-size:14px">Te asesoramos en los objetivos que quieras lograr</span></li>
	<li><span style="font-size:14px">Dise&ntilde;amos artes publicitarios impactantes con la informaci&oacute;n de tu empresa</span></li>
	<li><span style="font-size:14px">Implementamos tu Campa&ntilde;a Publicitaria en Facebook</span></li>
	<li><span style="font-size:14px">Atendemos a los comentarios y preguntas de tus seguidores</span></li>
	<li><span style="font-size:14px">Captamos los datos de tus posibles clientes</span></li>
	<li><span style="font-size:14px">Te brindamos una sesi&oacute;n de fotograf&iacute;a en tus ambientes</span></li>
	<li><span style="font-size:14px">Impulsamos tus ventas</span></li>
</ul>
<input name="PixeBoton" type="hidden" value="" /> <a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">QUIERO UNA CAMPA&Ntilde;A AS&Iacute; PARA MI EMPRESA</a><p>&nbsp;</p></div>

<div class="col-md-5"><img class="img-fluid" id="image4" src="http://dechali.com/lead/public/img/images/foto_1_8.jpg" style="height:338px; width:450px" /></div>
</div>
&nbsp;

<div class="row" id="row4">
<div class="col-md-4" style="color:green; text-align:center"><img class="img-fluid" id="image4" src="http://dechali.com/lead/public/img/images/Deviantart.png" style="height:128px; width:128px" />
<h4>Manejamos m&aacute;s de 20 marcas</h4>

<p><span style="font-size:16px">a nivel nacional</span></p>
</div>

<div class="col-md-4" style="text-align:center"><span style="color:#ffff00"><img class="img-fluid" id="image4" src="http://dechali.com/lead/public/img/images/Behance.png" style="height:128px; width:128px" /></span>

<h4><span style="color:#000033">Nos preocupamos por lograr resultados</span></h4>
</div>

<div class="col-md-4" style="color:red; text-align:center"><img class="img-fluid" id="image4" src="http://dechali.com/lead/public/img/images/Dribbble.png" style="height:128px; width:128px" />
<h4>Planes para todo tipo</h4>

<h4>presupuesto</h4>
</div>
</div>

<div class="row" id="row5">
<div class="col-md-6" style="padding:35px">
<div class="bg-white border mb-5 p-3 rounded shadow"><img class="img-fluid" id="image4" src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?resize=256%2C256&amp;quality=100" />
<p style="text-align:center">&ldquo;Desde que comenzamos la publicidad en Facebook con DeChaLi, vend&iacute; todas las calaminas que ten&iacute;a en Stock. Ahora hice un nuevo pedido&quot;</p>

<p style="text-align:center">Llevamos seis meses con la camapa&ntilde;a publicitaria y logramos incrementar nuestras ventas m&aacute;s del 20%</p>

<h4 style="text-align:center">Lic. Romel Ramirez<br />
CALAMINAS ACERMAX</h4>
</div>
</div>

<div class="col-md-6" style="padding:35px">
<div class="bg-white border mb-5 p-3 rounded shadow"><img class="img-fluid" id="image4" src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?resize=256%2C256&amp;quality=100" />
<p style="text-align:center">&ldquo;En tan solo seis meses, cerramos m&aacute;s de 10 contratos.</p>

<p style="text-align:center">El &uacute;nico medio donde notamos los resultados desde el primer mes</p>

<p style="text-align:center">Gracias a todo el equipo de DeChaLi</p>

<h4 style="text-align:center">Sra. Claudia Conde<br />
My Dream</h4>
</div>
</div>
</div>

<div class="row" id="row6">
<div class="col-md-12" style="padding-left:0px; padding-right:0px; position:relative; text-align:center"><img src="https://i.pinimg.com/originals/91/27/db/9127db783da0fb31b36f24fd5b4195a2.jpg" id="naranja" style="height:180px; max-height:100%; width:100%" />
<div class="land2-subfooter" style="color:black; left:50%; position:absolute; top:50%; transform:translate(-50%, -50%)">
<h2>&iquest;Qu&eacute; est&aacute;s esperando para ver a tu empresa crecer como nunca?</h2>
<br />
<a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">SI, QUIERO UNA CAMPA&Ntilde;A PARA MI EMPRESA</a></div>
</div>
</div>

<div class="row" id="row6" style="background-color:#00722a; color:white; padding-left:0px; padding-right:0px; padding:10px; position:relative; text-align:center"><img class="img-fluid" src="http://dechali.com/lead/public/img/images/Leads.png" style="height:69px; left:10%; position:absolute; top:50%; transform:translate(-10%, -50%); width:200px" />
<div class="footer" id="footer" style="text-align:center; width:100%">
<p>Esta Promoci&oacute;n finaliza el 31/05/2018</p>

<p>De Chali 2018 ll Todos los derechos reservados<br />
Visita nuestro sitio web para ver m&aacute;s servicios<br />
<a href="www.dechali.com">www.dechali.com</a></p>
<a href="https://www.facebook.com/AsesorEspecial/" target="_blank"><img src="http://dechali.com/lead/public/img/images/Facebook.png" /></a> <a href="www.twitter.com/DeChaLi2013" target="_blank"><img src="http://dechali.com/lead/public/img/images/Twitter.png" /></a> <img src="http://dechali.com/lead/public/img/images/Whatsapp.png" /></div>
</div>
</div>

<p><input name="CodLanding" type="hidden" value="18" /> <input name="Nombre" type="hidden" value="DeChaLi" /> <input name="Desde" type="hidden" value="2018-05-09" /> <input name="Hasta" type="hidden" value="2018-05-31" /> <input name="ContadorVisitas" type="hidden" value="" /> <input name="ContadorClics" type="hidden" value="" /> <!--Modal--></p>

<div class="fade modal" id="myModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body">
<div class="container-fluid">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h2>D&eacute;janos tus datos de contacto</h2>

<form onsubmit="mensaje()" action="http://dechali.com/lead/public/index.php/guardar" method="POST"><input name="_token" type="hidden" value="3Fhq6jbj5AvPxaSJpCEsBNnGFq18YWlUJ2wm71nn" /> <input name="id_landing" type="hidden" value="18" />
<div class="form-group">
<div class="col-md-12">Nombre*:</div>

<div class="col-md-12"><input name="campo1" required="" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-12">&iquest;Cu&aacute;l es el nombre de tu empresa?*:</div>

<div class="col-md-12"><input name="campo2" required="" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-12">&iquest;Cu&aacute;l es tu n&uacute;mero de WhatsApp?*:</div>

<div class="col-md-12"><input name="campo3" required="" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-12">&iquest;Cu&aacute;l es tu correo electr&oacute;nico?:</div>

<div class="col-md-12"><input name="campo4" type="text" /></div>
</div>
<br />
<br />
<input name="num_campos" type="hidden" value="4" />
<div class="col-md-12" style="padding:0 60px"><!--<center><a type="submit" name='Enviar' id='Enviar' class="button" style="background-color:#F9AF04;color:#fff;height:55px;">Enviar</a></center>-->
<p><input name="Enviar" style="height:55px" type="submit" value="Enviar" /></p>
</div>
</form>

<p>(*) No compartimos tu informaci&oacute;n con nadie.</p>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("2018-05-31 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
       
    // If the count down is over, write some text 
    if (distance > 0) {
        // Output the result in an element with id="demo"
        document.getElementById("tdias").innerHTML = days;
        document.getElementById("thoras").innerHTML = hours;
        document.getElementById("tminutos").innerHTML = minutes;
        document.getElementById("tsegundos").innerHTML = seconds;
    }
    else {

        clearInterval(x);

        document.getElementById("tdias").innerHTML = "00";
        document.getElementById("thoras").innerHTML = "00";
        document.getElementById("tminutos").innerHTML = "00";
        document.getElementById("tsegundos").innerHTML = "00";    

    }
}, 1000);
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

</html>