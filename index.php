<?php
//determine CORAL main path so we can check each module below to know which to display
$pagePath = $_SERVER["DOCUMENT_ROOT"];

$currentFile = $_SERVER["SCRIPT_NAME"];
$parts = Explode('/', $currentFile);
for($i=0; $i<count($parts) - 1; $i++){
	$pagePath .= $parts[$i] . '/';
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eRM - eResource Management</title>
<link rel="stylesheet" href="indexstyle.css" type="text/css" media="screen" />
<link rel="SHORTCUT ICON" href="images/favicon.ico" />
<script type="text/javascript" src="js/plugins/jquery.js"></script>
<script type="text/javascript" src="js/common.js"></script>
</head>
<body>

<div id="wrapper-main">

	<div id="title-main"><img src='images/title-main.png' id="title-big"><img src='images/title-main-small.png' id="title-small"></div>

		<div class="icons">

			<?php if (file_exists($pagePath . "resources/index.php")) {?>
				<a href='resources/'><img src='images/icon-resources.png' hover="images/icon-resources-hover.png" class="rollover" /></a>
			<?php } else { ?>
				<img src='images/icon-resources-off.png'>
			<?php } ?>

			<?php if (file_exists($pagePath . "licensing/index.php")) {?>
				<a href='licensing/'><img src='images/icon-licensing.png' hover="images/icon-licensing-hover.png" class="rollover" /></a>
			<?php } else { ?>
				<div><img src='images/icon-licensing-off.png' /></div>
			<?php } ?>

			<?php if (file_exists($pagePath . "organizations/index.php")) {?>
				<a href='organizations/'><img src='images/icon-organizations.png' hover="images/icon-organizations-hover.png" class="rollover" /></a>
			<?php } else { ?>
				<img src='images/icon-organizations-off.png' />
			<?php } ?>

			<?php if (file_exists($pagePath . "usage/index.php")) {?>
				<a href='usage/'><img src='images/icon-usage.png' hover="images/icon-usage-hover.png" class="rollover" /></a>
			<?php } else { ?>
				<img src='images/icon-usage-off.png' />
			<?php } ?>
			
			<?php if (file_exists($pagePath . "management/index.php")) {?>
				<a href='management/'><img src='images/icon-management.png' hover="images/icon-management-hover.png" class="rollover" /></a>
			<?php } else { ?>
				<img src='images/icon-usage-off.png' />
			<?php } ?>

		</div>
		
		<img src="images/logo-powered-by.jpg" id="powered-by" />

</div>

</body>
</html>