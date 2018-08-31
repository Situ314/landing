<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta name="robots">
    <meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no" />
    <title>BLOG DE CHALI!</title>
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
              margin-top: 15px;
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
	<!-- Facebook Pixel Code -->
//	<script>
//	!function(f,b,e,v,n,t,s)
//	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
//	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
//	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";
//	n.queue=[];t=b.createElement(e);t.async=!0;
//	t.src=v;s=b.getElementsByTagName(e)[0];
//	s.parentNode.insertBefore(t,s)}(window,document,"script",
//	"https://connect.facebook.net/en_US/fbevents.js");
//	var pixe_form=document.getElementsByName("PixeFormulario")[0].value;
//	fbq("init", pixe_form); 
//	fbq("track", "PageView");
//	</script>
//	<noscript>
//	<img height="1" width="1" 
//	src="https://www.facebook.com/tr?id="+pixe_form+"&ev=PageView
//	&noscript=1"/>
//	</noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body><p><input name="PixeFormulario" type="hidden" value="" /></p>

<div class="container-fluid">
<div class="row">
<div class="col-md-6" style="color:white"><img src="http://www.printawallpaper.com/upload/designs/red_diamond_detail.jpg" style="height:332px; overflow:visible; position:absolute; width:200%" />
<div style="left:60px; position:absolute; top:60px">
<h1>Find your cycling tribe online!</h1>
&nbsp;

<p>You don&#39;t need to be part of a racing team to find fellow cyclists to challenge and inspire you. Download the app and join our community to ride farther, ride faster and have more fun.</p>
</div>
</div>

<div class="col-md-6" style="color:white; text-align:center">
<p>Sign up for instant access!</p>
&nbsp;

<div style="background:white; color:black; padding:20px">
<h2>Ingresa ahora</h2>

<p>Pay once, get access forever, if you don&#39;t absolutely love it, we&#39;ll refound your payment ASAP-no questions asked.</p>
<br />
<br />
<input name="PixeBoton" type="hidden" value="" /> <a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">GET ACCESS NOW</a></div>
</div>
</div>

<div class="row">
<div style="background:white; height:150px">&nbsp;</div>
</div>

<div class="row">
<div class="col-md-5"><img class="img-fluid" id="image4" src="http://icons.iconarchive.com/icons/xenatt/the-circle/512/App-Adobe-Update-icon.png" /></div>

<div class="col-md-7">&nbsp;
<h1>1. Download the app</h1>
&nbsp;

<p>Ass soon as you sign up, we&#39;ll send you an email with a download code. The, install the app on your IOS or Android in two clicks. (And don&#39;t worry - when you&#39;re not on the go, you can checl in from our browser-based version, too)</p>
</div>
</div>
&nbsp;

<div class="row">
<div class="col-md-7">&nbsp;
<h1>2. Choose your goals</h1>

<p>The first time you log in, we&#39;ll lead you through a simple setup process to define your goals and cycling history.<br />
<br />
From there, we&#39;ll do the work of sending you cycling challenges made just for you.</p>
</div>

<div class="col-md-5"><img class="img-fluid" id="image4" src="http://icons.iconarchive.com/icons/xenatt/the-circle/512/App-Adobe-Update-icon.png" /></div>
</div>
&nbsp;

<div class="row">
<div class="col-md-5"><img class="img-fluid" id="image4" src="http://icons.iconarchive.com/icons/xenatt/the-circle/512/App-Adobe-Update-icon.png" /></div>

<div class="col-md-7">&nbsp;
<h1>3. Set up a 1:1 onboarding session</h1>
&nbsp;

<p>Yep, we&#39;ve got real trainers on staff! Your membership comes with one onboarding and virtual training session, where you can talk thrpough your cycling goals and get technical pointers from a pro.<br />
<br />
Want to continue getting guidance? You can sign up for a series of additional training sessions the app whenever you&#39;d like.</p>
</div>
</div>
&nbsp;

<div class="row">
<div class="col-md-7">&nbsp;
<h1>Join the community</h1>
&nbsp;

<p>This isn&#39;t just an app. It&#39;s a community. Get advice from other cyclists in the forum, compete in riding challenges, and even buy and sell gear. Plus, use the Find My Ride feature to meet up with other users IRL -and even join long-distance group rides anywhere you please with route tracking.<br />
&nbsp;</p>
</div>

<div class="col-md-5"><img class="img-fluid" id="image4" src="http://icons.iconarchive.com/icons/xenatt/the-circle/512/App-Adobe-Update-icon.png" /></div>
</div>
&nbsp;

<div class="row" style="background:#cacaca; padding:10px 170px 10px 170px; text-align:center">
<div class="col-md-12">&nbsp;
<div style="color:red">
<h2>A Note from the Founder</h2>
</div>
&nbsp;

<p>When I first got serious about cycling, I had two options:<br />
<br />
a) Plan routes and go on long rides all alone in my exurban community (where bike community was pretty much inheard of), enjoying the exercise but missing any kind of positive reinforcement.<br />
<br />
b)Drop series money on racing gear and find a pack of Lycra-clad weekend warriors to ride with-totally fine, but not my style.<br />
<br />
I dreamed of a cycling community that wan&#39;t bound by geography, but where I could easily find other cyclists who shared my preferences. Where I could brag about my latest solo century, and then make plans for brewery tour ride over the weekend. Where I could pay as much attention to my goals and milestones as I wanted to.<br />
<br />
That&#39;s why I created this app and community. I hope you&#39;ll join us and see hoy we can make your cycling experience even better</p>
&nbsp;

<p><a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">JOINUS NOW</a></p>
</div>
</div>

<div class="row" style="padding:10px 80px 10px 80px">
<div class="col-md-12">&nbsp;
<div style="color:red; text-align:center">
<h2>Frequently Asked Questions</h2>
</div>
&nbsp;

<div class="row">
<div class="col-md-6"><strong>How much does it cost?</strong><br />
&nbsp;
<p>Your payment of $34,99 gets you the app dowload and lifetime access to the community plus a 1:1 onboarding session with a trainer. You may have the opportunity to upgrades as we release new versions of the app, but you don&#39;t have to pay anything more if you don&#39;t want to.</p>
<br />
<br />
<strong>Does my location matter?</strong><br />
&nbsp;
<p>Anyone can use the app and join the community. That said, the Find My Ride feature is currently available oonly for Canada and the U.S. We hopre to expand to other countries soon.</p>
</div>

<div class="col-md-6"><strong>Does it matter if I&#39;m new to cycling?</strong><br />
&nbsp;
<p>Nope! If you&#39;re just getting started, we think this is the best way to start logging more miles safely and comfortably. You&#39;ll learn a ton about cycling best practices, terminology, and even repairs in our forums.</p>
<br />
<br />
<strong>What kind of prizes can I earn?</strong><br />
&nbsp;
<p>We&#39;re adding new prizes almost every month as we partner with more sponsors. Expect to find chances to win gear, gift certificates, and even trips to bike-friendly locales.</p>
</div>
</div>
&nbsp;

<div style="text-align:center"><a class="button" data-toggle="modal" data-target="#myModal" href="#" style="background-color: #F9AF04;color: #fff;height:55px; text-decoration: none;">JOIN US NOW</a></div>
</div>
</div>

<div class="row">
<div class="col-md-12" style="padding-left:0px; padding-right:0px; position:relative; text-align:center"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAK0AAACtCAMAAAD1cQ9xAAAAA1BMVEXJ6fQMaO61AAAANElEQVR4nO3BAQ0AAADCoPdPbQ43oAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAngx1lgABvZA91QAAAABJRU5ErkJggg==" style="height:180px; max-height:100%; width:100%" />
<div style="color:red; left:50%; position:absolute; top:50%; transform:translate(-50%, -50%)">
<p>team@url home blog privacy</p>

<p><img src="http://localhost:8080/landing/public/img/images/Facebook.png" style="height:50px; width:50px" /> <img src="http://localhost:8080/landing/public/img/images/Instagram.png" style="height:50px; width:50px" /></p>
</div>
</div>
</div>

<div class="row" id="row6">
<div class="col-md-12" style="background:#00722a">&nbsp;
<p>Esta promoci&oacute;n finaliza el 12/05/2018<br />
<br />
DeChaLi 2018 II Todos los Derechos Reservados<br />
Visita nuestro sitio web<br />
<a href="www.dechali.com">www.dechali.com</a></p>
</div>
</div>
</div>

<p><input name="CodLanding" type="hidden" value="8" /> <input name="Nombre" type="hidden" value="ESM Hermanos" /> <input name="Desde" type="hidden" value="2018-05-02" /> <input name="Hasta" type="hidden" value="2018-05-12" /> <input name="ContadorVisitas" type="hidden" value="" /> <input name="ContadorClics" type="hidden" value="" /> <!--Modal--></p>

<div class="fade modal" id="myModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body">
<div class="container-fluid">
<div class="col-md-12 row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><img class="img-responsive" src="http://localhost:8080/landing/public/img/form.png" /></div>

<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<h2>D&eacute;janos tus datos de contacto</h2>

<form action="http://localhost:8080/landing/public/guardar" method="POST"><input name="_token" type="hidden" value="4Q3ZOWsxUZTb7UJ3FkIq3DQhB7eyV9ZU0akyhzjW" /> <input name="id_landing" type="hidden" value="8" />
<div class="form-group">
<div class="col-md-4">Nombre*:</div>

<div class="col-md-8"><input name="campo1" required="" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-4">Whatsapp*:</div>

<div class="col-md-8"><input name="campo2" required="" type="text" /></div>
</div>
&nbsp;

<div class="form-group">
<div class="col-md-4">Precio*:</div>

<div class="col-md-8"><select name="campo3" required=""><option>--Escoja Precio--</option><option value="5|26">Preventa 130</option><option value="5|27">Normal 150</option><option value="5|28">Descuento 110</option> </select></div>
</div>
<br />
<input name="num_campos" type="hidden" value="3" />
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
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date("2018-05-12 00:00:00").getTime();

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