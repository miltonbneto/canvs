<?php 
	#teste Git HUB
	include('admin/apps/canvs/controller/canvs.class.php');


	$C_CCT = new CanvsCONTROLLER('localhost','root','root');
	

$doctypes=<<<C_CCT_004
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"><!--<![endif]-->\n
C_CCT_004;

$head=<<<C_CCT_005
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.1.min.js"></script>
</head>\n
C_CCT_005;

$body=<<<C_CCT_006
<body>
	<!##bodycontent##!>\n
C_CCT_006;

$scripts=<<<C_CCT_007
	<!##scripts##!>
</body>
</html>
C_CCT_007;

	$C_CCT_001=array($doctypes,$head,$body,$scripts);

	$C_CCT_002=array(0=>array('CL_MCX_003' => $C_CCT_001));
	$C_CCT->CL_MCX_04($C_CCT_002);
	echo "string<br />";

 ?>