<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="es-ES" dir="ltr">
	<head>
		<title>Buscar - Jessocks</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Jessocks Inc" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.1.16 - www.websitex5.com" />
		<meta property="og:locale" content="es" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://jessocks.com/imsearch.php" />
		<meta property="og:title" content="Buscar" />
		<meta property="og:site_name" content="Jessocks" />
		<meta name="viewport" content="width=960" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-1-16" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-1-16" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-1-16" media="screen" />
		<link rel="stylesheet" type="text/css" href="appsresources/css/style.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="imHeader_pluginAppObj_07/css/custom.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-0-1-16-637077378373134798" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-1-16"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-1-16" data-files-version="13-0-1-16"></script>
		<script type="text/javascript" src="appsresources/js/main.js"></script>
		
		
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('El Explorador que estás usando no es compatible con las funciones requeridas para mostrar este Sitio web.','El Navegador que estás utilizando podría no ser compatible con las funciones requeridas para poder ver este Sitio web.','[1]Actualiza tu explorador [/1] o [2]continuar de todos modos[/2].','http://outdatedbrowser.com/'); };
		</script>
		<link rel="icon" href="favicon.png?13-0-1-16-637077378373114803" type="image/png" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Buscar - Jessocks</h1>
				<div id="imHeaderObjects"><div id="imHeader_imObjectImage_06_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_6" class="" > <div id="imHeader_imCellStyleGraphics_6"></div><div id="imHeader_imCellStyle_6" ><img id="imHeader_imObjectImage_06" src="images/Grey_no.circle_mail.png" title="" alt="" /></div></div></div><div id="imHeader_pluginAppObj_07_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_7" class="" > <div id="imHeader_imCellStyleGraphics_7"></div><div id="imHeader_imCellStyle_7" ><div id="imHeader_pluginAppObj_07">

	  <section class="cd-intro"><p class="cd-headline letters rotate-2"><span>Be&nbsp;</span><span class="cd-words-wrapper"><b class="is-visible">Yourself</b><b>Jessocks</b></span>&nbsp;<span></span></p></section>
   </div></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Salta el menu principal">Vaya al Contenido</a>
			<a id="imGoToMenu"></a><p class="imHidden">Menu Principal:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class="imMnMnFirst imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página de inicio</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class="imMnMnMiddle imPage">
						<a href="pagina-1.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página 1</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode4" class="imMnMnMiddle imPage">
						<a href="pagina-2.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página 2</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class="imMnMnMiddle imPage">
						<a href="pagina-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página 3</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode6" class="imMnMnLast imPage">
						<a href="pagina-4.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Página 4</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Resultados de búsqueda</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><img id="imFooter_imObjectImage_01" src="images/White_twitter.png" title="" alt="" /></div></div></div><div id="imFooter_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_2" class="" > <div id="imFooter_imCellStyleGraphics_2"></div><div id="imFooter_imCellStyle_2" ><img id="imFooter_imObjectImage_02" src="images/youtube.png" title="" alt="" /></div></div></div><div id="imFooter_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_3" class="" > <div id="imFooter_imCellStyleGraphics_3"></div><div id="imFooter_imCellStyle_3" ><img id="imFooter_imObjectImage_03" src="images/White_facebook.png" title="Fcebook" alt="¡Siguenos!" /></div></div></div><div id="imFooter_imTextObject_04_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_4" class="" > <div id="imFooter_imCellStyleGraphics_4"></div><div id="imFooter_imCellStyle_4" ><div id="imFooter_imTextObject_04">
	<div class="text-tab-content"  id="imFooter_imTextObject_04_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="cf1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo sapien et dapibus consequat. Phasellus a sagittis massa.</span></div>
		</div>
	</div>

</div>
</div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lea esta página de nuevo">Regreso al contenido</a> | <a href="#imGoToMenu" title="Lea este sitio de nuevo">Regreso al menu principal</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Para utilizar este sitio tienes que habilitar JavaScript.</div></noscript>
	</body>
</html>
