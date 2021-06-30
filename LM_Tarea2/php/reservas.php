<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ENV&Iacute;NDO DATOS DE RESERVA</title>
</head>

<body>
<?php
	$cabecera = "MIME-Version: 1.0\r\n";
	$cabecera .= "Content-type: text/html; charset=utf-8\r\n";	
	$nom=trim($HTTP_POST_VARS['nombre']);
	$ape=trim($HTTP_POST_VARS['apellidos']);
	$tel=trim($HTTP_POST_VARS['telefono']);
	$ema=trim($HTTP_POST_VARS['email']);
	$noc=trim($HTTP_POST_VARS['noches']);
	$dme=trim($HTTP_POST_VARS['diaMes']);
	$mdi=trim($HTTP_POST_VARS['mesDia']);
	$hab=trim($HTTP_POST_VARS['habitacion']);
	$des=trim($HTTP_POST_VARS['desayuno']);
	$des==true?$des="SI":$des="NO";
	$com=trim($HTTP_POST_VARS['comida']);
	$com==true?$com="SI":$com="NO";
	$cen=trim($HTTP_POST_VARS['cena']);
	$cen==true?$cen="SI":$cen="NO";
	$sup=trim($HTTP_POST_VARS['supletoria']);
	$sup==true?$sup="SI":$sup="NO";
	$obs=trim($HTTP_POST_VARS['comentarios']);
	$cor="reservas@mihotel.com";
	$cabecera .= "From: ".utf8_decode($nom)." ".utf8_decode($ape)." <".utf8_decode($ema).">"."\r\n";
	$cabecera .= "Bcc: jl@sitiolibre.com\r\n";
	$datos="<span style='color:#0033CC; font-weight:bold; font-size:2em'><u><i>MIHOTEL</i></u></span><br />";
	$datos.="<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Nombre: </span>".$nom."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Apellidos: </span>".$ape."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Tel&eacute;fono: </span>".$tel."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>eMail: </span>".$ema."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Noches: </span>".$noc."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>D&iacute;a: </span>".$dme."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Mes: </span>".$mdi."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Tipo de habitaci&oacute;n: </span>".$hab."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Desayuno: </span>".$des."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Comida: </span>".$com."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Cena: </span>".$cen."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Supletoria: </span>".$sup."<br />";
	$datos.="<span style='color:#0033CC; font-weight:bold; font-size:1.2em'>Cometarios: </span>".$obs."<br />";
	echo "
	<div>
		<br />
		<h2>
			Petici&oacute;n de informaci&oacute;n enviada con &eacute;xito
		</h2>
		<br />
		<p style='margin-left:20px'>
			".$datos."
		</p>
		<br />
	</div>";
	mail($cor,"Inscripción en WWW.MIHOTEL.COM",$datos,$cabecera);
	?>
</body>
</html>
