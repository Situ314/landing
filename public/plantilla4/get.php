<?php

$data = json_decode(file_get_contents('php://input'));
echo "JSON--------------------";
echo json_encode($data);
$body = $data->editabledata;
echo "\n";
echo $body;

$part1 = explode("value=\"", $body);
$part2 = explode("\" />", $part1[1]);
$cod = $part2[0];

$part3 = explode("\" />", $part1[2]);
$carpeta = $part3[0];


echo "PARTESSSSSSSSSSSSSSSS \n";
echo $cod;
echo $carpeta;
//create an html file and redirect to it
//set some basic html content
$sHTML_Header = '<!DOCTYPE html><html><head>
    <meta charset="utf-8">
    <meta name="robots">
    <title>BLOG DE CHALI!</title>
    <script src="http://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="{{ asset(\'vendor/unisharp/laravel-ckeditor/ckeditor.js\') }}"></script>	
	
	<script type="text/javascript">
		function modal(id){
			var ruta = $(\'#ruta\').val()+\'/\'+id;
			document.getElementById(\'landing-\'+id).setAttribute(\'href\', ruta);
		} 		
	</script>
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
        }        </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>';
$sHTML_Content = $body;
$sHTML_Footer = '</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>  

</html>';
$filename = "./landings/".$carpeta."/landing".$cod.".html";
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