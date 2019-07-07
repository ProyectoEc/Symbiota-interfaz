<?php
include_once('config/symbini.php');
include_once('content/lang/index.'.$LANG_TAG.'.php');
header("Content-Type: text/html; charset=".$CHARSET);

?>
<html>
<head>
<title> Home - <?php echo $DEFAULT_TITLE;?></title>

	<!-- etiquetas requeridas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="SISBIO ECUADOR es la primera plataforma de Biodiversidad del Ecuador">
	<meta name="author" content="Consorcio IKIAM - Ecociencia ">

	<!-- CSS bootstrap -->
	<link href="css/card_hover.css" rel="stylesheet" type="text/css">

	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- css de la plataforma -->
	<link href="css/base.css?ver=<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<link href="css/main.css<?php echo (isset($CSS_VERSION_LOCAL)?'?ver='.$CSS_VERSION_LOCAL:''); ?>" type="text/css" rel="stylesheet" />

	<!-- Fuentes personalizadas -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="js/jquery-ui-1.12.1/jquery-ui.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
	<!--<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>-->
	<script src="js/jquery.slides.js"></script>

	<!--inicio favicon -->
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

	<script type="text/javascript">
		<?php include_once($SERVER_ROOT.'/config/googleanalytics.php'); ?>
	</script>
</head>

<body class="body_index">
	<?php
	include($SERVER_ROOT.'/header.php');
	?>

	<div id="dashboard" class="container dashboard">

		<div class="row text-center">
			<div class="col-lg-3 col-md-6 mb-4">
				<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >
				<div class="card">
					<img class="card-img-top-colecciones" src="images/colecciones.png" alt="">
					<div class="card-body">
						<h6 class="card-title text-uppercase"><?php echo (isset($LANG['H_COLLECTIONS'])?$LANG['H_COLLECTIONS']:'Collections'); ?></h6>
					</div>
				</div></a>
			</div>

			<div class="col-lg-3 col-md-6 mb-4">
				<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank">
				<div class="card">
					<img class="card-img-top-mapa" src="images/mapa.png" alt="mapa">
					<div class="card-body">
						<h6 class="card-title text-uppercase"><?php echo (isset($LANG['H_MAP'])?$LANG['H_MAP']:'Map'); ?></h6>
					</div>

				</div>
				</a>
			</div>

			<div class="col-lg-3 col-md-6 mb-4">
					<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >
				<div class="card">
					<img class="card-img-top-listados" src="images/georef.png" alt="">
					<div class="card-body">
						<h6 class="card-title text-uppercase"><?php echo (isset($LANG['H_DYN_LISTS'])?$LANG['H_DYN_LISTS']:'Dynamic Species List'); ?></h6>
					</div>
				</div></a>
			</div>

			<div class="col-lg-3 col-md-6 mb-4">
				<a href="<?php echo $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" >
				<div class="card">
					<img class="card-img-top-taxa" src="images/taxa.png" alt="">
					<div class="card-body">
						<h6 class="card-title text-uppercase"><?php echo (isset($LANG['H_TAXONOMIC_EXPLORER'])?$LANG['H_TAXONOMIC_EXPLORER']:'Taxonomic Explorer'); ?></h6>
					</div>
				</div></a>
			</div>
		</div>
	</div>
</body>
</html>
