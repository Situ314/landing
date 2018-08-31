<?php
date_default_timezone_set('America/La_Paz');

$timestamp = time();
$date_time = date("Y-m-d H:i:s", $timestamp);

$now = new DateTime();
$hoy = $now->format('Y-m-d H:i:s');    // MySQL datetime format


$data = json_decode(file_get_contents('php://input'));
echo "JSON--------------------";
echo json_encode($data);
$body = $data->editabledata;
echo "\n";
echo $body;

$part1 = explode("name=\"CodLanding\" type=\"hidden\" value=\"", $body);
$part2 = explode("\" />", $part1[1]);
$cod = $part2[0];

$part3 = explode("<input name=\"Nombre\" type=\"hidden\" value=\"", $body);
$part4 = explode("\" />", $part3[1]);
$carpeta = $part4[0];

//echo "HOLAAAAAAAAAAAAAAAA........... ".$cod;
echo "PARTESSSSSSSSSSSSSSSS \n";
echo $cod;
echo $carpeta;
//create an html file and redirect to it
//set some basic html content

$d1 = explode("name=\"Desde\" type=\"hidden\" value=\"", $body);
$d2 = explode("\" />", $d1[1]);
$desde = $d2[0];

$d3 = explode("name=\"Hasta\" type=\"hidden\" value=\"", $body);
$d4 = explode("\" />", $d3[1]);
$hasta = $d4[0]." 23:59:59";

$date = new DateTime($desde);
//$date2 = Datetime::createFromFormat('Y-m-d h:i:s', $hasta)->format('Y-m-d H:i:s');

$p1 = explode("name=\"PixeFormulario\" type=\"hidden\" value=\"", $body);
$p2 = explode("\" />", $p1[1]);
$pixer = $p2[0];    

//$ff = Datetime::createFromFormat('Y-m-d h:i:s', $hoy)->format('Y-m-d H:i:s'); 

$date44 = new DateTime($hasta);
$now = new DateTime();

$diff=date_diff($date44,$now);

echo "FECHAAAAAAAAAAAAA----";
echo "Current date and local time on this server is $hoy ------";
echo $desde."----"."hasta----".$hasta;

echo "FECHAAAAAAAAAAAAA".$diff->format("%d days, %h hours and %i minuts");

$dias = $diff->format("%d");
$horas = $diff->format("%h");
$minutos = $diff->format("%i");
$segundos = $diff->format("%s");


$sHTML_Header = '<!DOCTYPE html><html><head>
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
            font-family: \'arial-black\';
            src: local(\'Arial Black\');
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
        fbq("init", "'.$pixer.'"); 
        fbq("track", "PageView");
    </script>
    <noscript>
        <img height="1" width="1" 
        src="https://www.facebook.com/tr?id='.$pixer.'&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>';


$bodynew = str_replace("href=\"#\"","data-toggle=\"modal\" data-target=\"#myModal\" href=\"#\"",$body);

$reemplazarD = ">D</span>";
$diasn = " id=\"tdias\">".$dias."</span>";

$reemplazarH = ">H</span>";
$horasn = "id=\"thoras\">".$horas."</span>";

$reemplazarM = ">M</span>";
$minutosn = "id=\"tminutos\">".$minutos."</span>";

$reemplazarS = ">S</span>";
$segundosn = "id=\"tsegundos\">".$segundos."</span>";


$bodynew2 = str_replace($reemplazarD, $diasn, $bodynew);
$bodynew3 = str_replace($reemplazarH, $horasn, $bodynew2);
$bodynew4 = str_replace($reemplazarM, $minutosn, $bodynew3);
$bodynew5 = str_replace($reemplazarS, $segundosn, $bodynew4);

$reemplazarForm = "<form";
$formn = "<form onsubmit=\"mensaje()\"";

$bodynew6 = str_replace($reemplazarForm, $formn, $bodynew5);

$sHTML_Content = $bodynew6;
$sHTML_Footer = '
<script>
// Set the date we\'re counting down to
var countDownDate = new Date("'.$hasta.'").getTime();

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

</html>';



$filename = "./landings/".$carpeta."/landing".$cod.".php";
// Let's make sure the file exists and is writable first.
if (IS_WRITABLE($filename)) {
    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!($handle = FOPEN($filename, 'w'))) {
        echo "Cannot open file ({$filename})";
        exit;
    }
    // Write $somecontent to our opened file.
    if (FWRITE($handle, $sHTML_Header) === FALSE) {
        echo "Cannot write to file ({$filename})";
        exit;
    } else {
        //file is ok so write the other elements to it
        FWRITE($handle, $sHTML_Content);
        FWRITE($handle, $sHTML_Footer);
    }
    FCLOSE($handle);
} else {
    echo "The file {$filename} is not writable";
}

//redirect the user to the html page
header("location:javascript://history.go(-1)");