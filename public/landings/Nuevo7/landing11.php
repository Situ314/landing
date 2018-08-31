<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta name="robots">
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no" />
    <title>LEADS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   <style type="text/css">
        body {
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
                    font: bold 17px Arial;
                    padding:10px 15px !important;
                    margin:0 -40px;
        	}
        	.img-fluid{
        		margin:auto;
        		top:15% !important;
        	}
        	.footer{
        		padding-top:100px;
        	}
        	#naranja{
        	    height:260px !important;
        	}
                #row6 h2{
                    font-size: 24px;
                    padding-top: 10px;
                }
                #columns > div {
                    width: 100%;
                    padding-top: 10px;
                }
                .crop{
                    float:left;
                    overflow:hidden; /* IMPORTANTE */
                }                
                .crop img{
                    margin:0 -481px 0 -481px !important;
                }
                #land2_logo1{
                    height: 40% !important;
                    width: 40% !important;
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
        }
 </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script>
        $(document).ready(function() { 
            var id=$("input[name=CodLanding]").val();
            $.ajax({
                data:{id:id},
                url:"http://localhost:8080/landing/public/coneccion/actualiza_contador.php",
                type:"post",
                success:  function (contador) {
                    $("input[name=ContadorVisitas]").html(contador);
                }
            });

            $(".button").click(function() {
                var id=$("input[name=CodLanding]").val();
                $.ajax({
                    data:{id:id},
                    url:"http://localhost:8080/landing/public/coneccion/actualiza_clics.php",
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
<body><div class="container-fluid"><input name="PixeFormulario" type="hidden" value="" />
<div class="row">
<div class="col-md-5" style="overflow:hidden"><img alt="CKEditor logo" class="img-fluid" src="http://punchmobility.com/wp-content/uploads/2014/07/girl-phone.png" /></div>

<div class="col-md-7">
<div style="color:white; font-size:20px; font-style:bold; position:relative; text-transform:uppercase"><img src="https://http2.mlstatic.com/fondo-pantalla-verde-chromakey-para-estudio-fotografico-D_NQ_NP_18551-MLM20157874753_092014-F.jpg" style="height:200px; width:100%" />
<div style="left:50%; position:absolute; top:50%; transform:translate(-50%,-50%); width:90%">
<h3>COMIENZA A</h3>

<h2>VENDER M&Aacute;S EN FACEBOOK!</h2>
</div>
</div>

<div style="font-size:20px; font-style:bold; padding:30px; text-align:center">
<h2><strong><span style="color:#33cc00">Te regalamos una campa&ntilde;a gratuita en Facebook para tu empresa.</span></strong></h2>

<h2><strong><span style="color:#33cc00">Puedes promocionar el producto o servicio que m&aacute;s desees.</span></strong></h2>

<h2><strong><span style="color:#33cc00">Y s&iacute;, es 100% gratuito, sin ning&uacute;n costo adicional.</span></strong></h2>

<h2><span style="color:#33cc00"><strong>S&oacute;lo debes cumplir algunos requisitos para facilitar nuestro trabajo</strong>.</span></h2>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div id="bluesection">
<p>Haz clic abajo para acceder a nuestro regalo.</p>

<p><input name="PixeBoton" type="hidden" value="" /></p>

<p><a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">SI, ME INTERESA LA PROMOCI&Oacute;N</a></p>
<!--<a data-toggle="modal" data-target="#myModal" href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal" onclick="modal(11)" id="landing-11">SI, DESEO ACCEDER A LA CAMPAÑA GRATUITA</a>-->

<p>&nbsp;</p>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div style="padding-top:50px">
<p>Para acceder a la campa&ntilde;a gratuita debes cumplir con los siguientes requisitos</p>
</div>
</div>
</div>

<div class="row row-eq-height" id="columns">
<div class="col-md-4 col-sm-12 col-xs-12">
<div style="color:white; position:relative"><img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="height:150px; width:100%" />
<div style="left:50%; position:absolute; top:50%; transform:translate(-50%,-50%); width:90%">
<h4>CONTAR CON UNA FAN PAGE</h4>

<p>Tu empresa debe tener una p&aacute;gina coorporativa en Facebook.</p>
</div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div style="color:white; position:relative"><img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="height:150px; width:100%" />
<div style="left:50%; position:absolute; top:50%; transform:translate(-50%,-50%); width:90%">
<h4>HACERNOS ADMINISTRADORES</h4>

<p>Para poder iniciar la campa&ntilde;a necesitamos ser administradores durante la publicidad.</p>
</div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div style="color:white; position:relative"><img src="https://i.pinimg.com/originals/bc/1f/f0/bc1ff0a42a0f0ea265938ef9f4e8309d.jpg" style="height:150px; max-height:100%; width:100%" />
<div style="left:50%; position:absolute; top:50%; transform:translate(-50%,-50%); width:90%">
<h4>INFORMACI&Oacute;N DE TU PRODUCTO/SERCVICIO</h4>

<p>Debes proporcionarnos del producto o servicio que deseas publicitar.</p>
</div>
</div>
</div>
</div>

<div style="background-color:#00722a; color:white; margin-top:20px; padding:10px; position:relative; text-align:center"><img class="img-fluid" src="http://localhost:8080/landing/public/img/images/Leads.png" style="height:69px; left:10%; position:absolute; top:50%; transform:translate(-10%, -50%); width:200px" />
<div class="footer" id="footer">
<p>Esta Promoci&oacute;n finaliza el 14/06/2018</p>

<p>De Chali 2018 ll Todos los derechos reservados<br />
Visita nuestro sitio web<br />
<a href="www.dechali.com">www.dechali.com</a></p>
</div>
</div>
</div>

<p><input name="CodLanding" type="hidden" value="11" /> <input name="Nombre" type="hidden" value="Nuevo7" /> <input name="Desde" type="hidden" value="2018-06-01" /> <input name="Hasta" type="hidden" value="2018-06-14" /> <input name="ContadorVisitas" type="hidden" value="" /> <input name="ContadorClics" type="hidden" value="" /> <!--modal--></p>

<div class="fade modal" id="myModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body">
<div class="container-fluid">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<h2>D&eacute;janos tus datos de contacto</h2>

<form onsubmit="mensaje()" action="http://localhost/lad/public/index.php/guardar" method="POST"><input name="_token" type="hidden" value="mUs6HZoLsVcggYOH5vU6g8GX3uoe0WCdjENbRSXZ" /> <input name="id_landing" type="hidden" value="11" />
<div class="form-group">
<div class="col-md-12">Version:</div>

<div class="col-md-12"><input name="campo1" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-12">Due&ntilde;o*:</div>

<div class="col-md-12"><input name="campo2" required="" type="text" /></div>
</div>
<br />
<br />
<input name="num_campos" type="hidden" value="2" />
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
var countDownDate = new Date("2018-06-14 23:59:59").getTime();

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