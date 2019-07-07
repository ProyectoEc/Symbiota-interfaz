<?php
include_once($SERVER_ROOT.'/content/lang/header.'.$LANG_TAG.'.php');
?>

<html>
<head>
	<!--script para cambio de lenguaje-->
	<script type="text/javascript" src="<?php echo $CLIENT_ROOT; ?>/js/symb/base.js?ver=171023"></script>
</head>
<body>
	<div class="container1">
		<div id="right_navbarlinks">
			<?php
			if($USER_DISPLAY_NAME){
				?>
				<span style="">
					<?php echo (isset($LANG['H_WELCOME'])?$LANG['H_WELCOME']:'Welcome').' '.$USER_DISPLAY_NAME; ?>!
				</span>
				<span style="margin-left:5px;">
					<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php"><?php echo (isset($LANG['H_MY_PROFILE'])?$LANG['H_MY_PROFILE']:'My Profile')?></a>
				</span>
				<span style="margin-left:5px;">
					<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout"><?php echo (isset($LANG['H_LOGOUT'])?$LANG['H_LOGOUT']:'Logout')?></a>
				</span>
				<?php
				$LANG['H_LOGIN'] = 'Login';
				$LANG['H_NEW_ACCOUNT'] = 'New Account';
			}
			else{
				?>
				<span style=""><a href="<?php echo $CLIENT_ROOT."/profile/index.php?refurl=".$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING']; ?>"><?php echo (isset($LANG['H_LOGIN'])?$LANG['H_LOGIN']:'Login')?></a></span>
				<span style="margin-left:5px;"><a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php"><?php echo (isset($LANG['H_NEW_ACCOUNT'])?$LANG['H_NEW_ACCOUNT']:'New Account')?></a></span>
				<?php
			}
			?>
			<span style="margin-left:5px;margin-right:5px;">
				<select onchange="setLanguage(this)">
					<option value="en">English</option>
					<option value="es" <?php echo ($LANG_TAG=='es'?'SELECTED':''); ?>>Espa&ntilde;ol</option>
				</select>
				<?php
				if($IS_ADMIN){
					echo '<a href="'.$CLIENT_ROOT.'/content/lang/admin/langmanager.php?refurl='.$_SERVER['PHP_SELF'].'"></a>';
				}
				?>
			</span>
		</div>
		<!-- Fin div right nav -->
			<!-- DIV DEL LOGO -->

	</div>

	<!-- Fin div logo -->
	<!-- Navbar -->
<div role="navigation" class="nav navbar-index justify-content-center menu_main_nav_area">
	<div class="logo-center"><a href="<?php echo $clientRoot; ?>/index.php" ><img src="<?php echo $clientRoot; ?>/images/logo_bndb.png" class="img-fluid rounded about-heading-img mb-3 mb-lg-0 col-md-7"  alt="logo BNDB"></a></div>
	<div class="col-md-8">
		<ul class="nav flex-column flex-md-row">
        <li><a href="<?php echo $clientRoot; ?>/index.php" class="nav-link active"><?php echo (isset($LANG['H_HOME'])?$LANG['H_HOME']:'Home'); ?></a></li>
        <li><a href="http://testbiodiversidad.ikiam.edu.ec/" class="nav-link" target="_new">SISBIO</a></li>

				<li>
					<a class="nav-link" href="#" ><?php echo (isset($LANG['H_IMAGES'])?$LANG['H_IMAGES']:'Images'); ?></a>
					<ul>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" class="nav-link"><?php echo (isset($LANG['H_IMAGE_BROWSER'])?$LANG['H_IMAGE_BROWSER']:'Image Browser'); ?></a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" class="nav-link"><?php echo (isset($LANG['H_IMAGE_SEARCH'])?$LANG['H_IMAGE_SEARCH']:'Search Images'); ?></a></li>
						<li><a href="<?php echo $CLIENT_ROOT; ?>/imagelib/contributors.php" class="nav-link"><?php echo (isset($LANG['H_CONTRIBUTORS'])?$LANG['H_CONTRIBUTORS']:'Contributors'); ?></a></li>
					</ul>
				</li>

				<li><a href='<?php echo $CLIENT_ROOT; ?>/projects/index.php' class="nav-link"><?php echo (isset($LANG['H_PROJECTS'])?$LANG['H_PROJECTS']:'Projects'); ?></a></a></li>

        <li><a href='http://testbiodiversidad.ikiam.edu.ec/?page_id=440' class="nav-link"><?php echo (isset($LANG['H_PARTNERS'])?$LANG['H_PARTNERS']:'Partners'); ?></a></li>
        <li><a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php' class="nav-link"><?php echo (isset($LANG['H_SITEMAP'])?$LANG['H_SITEMAP']:'Sitemap'); ?></a></li>
        <li><a href='<?php echo $CLIENT_ROOT; ?>/help.php' class="nav-link"><?php echo (isset($LANG['H_HELP'])?$LANG['H_HELP']:'Ayuda'); ?></a></li>
    </ul>
	</div>


</div>


</body>
</html>
