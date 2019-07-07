<?php
include_once('config/symbini.php');
include_once($SERVER_ROOT.'/content/lang/help.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);

?>

<html>
<head>
	<title>Ayuda - <?php echo $DEFAULT_TITLE;?></title>
	<link href="css/base.css?ver=<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<link href="css/main.css<?php echo (isset($CSS_VERSION_LOCAL)?'?ver='.$CSS_VERSION_LOCAL:''); ?>" type="text/css" rel="stylesheet" />
	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<!--inicio favicon -->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>

<body class="body_index">
	<!-- Llama al header -->
	<?php include($SERVER_ROOT.'/header.php'); ?>

	<!-- Contenido -->
		<div id="container" class="container search">
			<div id="site-map">
				<center><h3><?php echo $LANG['BNDB'];?></h3></center>
					<p><b><?php echo $LANG['W_BNDB'];?></b></p>
					<p align="justify"><?php echo $LANG['W_LEGEND'];?> </br>

					<?php echo $LANG['LEGEND_BNDB'];?></br>
					<?php echo $LANG['S_BNDB'];?></br>

					<?php echo $LANG['ULTI'];?> <a target="blanck" href="http://symbiota.org/docs/symbiota-introduction/symbiota-help-pages/">symbiota.</a>
					</br>
					</p>

					<p><u><?php echo $LANG['B_DETAILS'];?></u></p>

					<p align="justify"><b><?php echo $LANG['P_REG'];?></b>
					<?php echo $LANG['DATA_USER'];?></p>

<p></p>

<p align="justify"><b><?php echo $LANG['VISIT_USER'];?></b> <?php echo $LANG['VISIT_LEGEND'];?></p>



<p></p>

<p align="justify"><b><?php echo $LANG['USER_SADMIN'];?></b> <?php echo $LANG['SADMIN_LEGEND'];?></p>




<p></p>

<p align="justify"><b><?php echo $LANG['USER_TAX'];?></b> <?php echo $LANG['USER_TAX_LEGEND'];?></p>





<p></p>


<p></p>

<center><a href="download/referenciaFormatosPlantilla.xlsx" download="referenciaFormatosPlantilla.xlsx">Descargar Formato Darwing Core</a></center>






</div>
</div>
</body>
</html>
