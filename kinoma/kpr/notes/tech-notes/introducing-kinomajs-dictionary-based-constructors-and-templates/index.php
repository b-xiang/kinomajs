<!DOCTYPE html>
<html lang="en">
<head>
<?php $path = "/includes/shared-meta.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?>
<title>Introducing KinomaJS Dictionary-Based Constructors and Templates - Tech Notes</title>
<meta name="description" content="">
<?php $path = "/includes/shared-head.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?>
<script src="//cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
<!-- Flatdoc -->
<script src="/libs/flatdoc.js"></script>
<!--[if lt IE 9]>
<script src='https://cdn.rawgit.com/rstacruz/flatdoc/v0.9.0/legacy.js'></script>
<![endif]-->
<!-- Highlight.js -->
<script src="//cdn.jsdelivr.net/highlight.js/8.6/highlight.min.js"></script>
<!-- run highlighter script after code has been loaded by Flatdoc -->
<!-- must be inside the <head> instead of <body> -->
<script src="/libs/highlight/flatdocHighlight.js"></script>
<!-- Flatdoc Initializer -->
<script>
	Flatdoc.run({
		fetcher: Flatdoc.file("introducing-kinomajs-dictionary-based-constructors-and-templates.md")
	});
</script>
<!-- Custom CSS for this page -->
<style type="text/css">
	.flatdocContentArea table td {
    	padding: 0px;
	}
	.flatdocContentArea img{
		display: block;
		margin-left: auto;
		margin-right: auto;
		max-width: 200px;
	}
</style>
</head>

<body role="flatdoc">
<?php $path = "/includes/navbar.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?>
<section id="page-content">
    <div class="container">
        <div class="breadCrumb">
        	<?php $path = "/includes/technotebreadcrumb.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?> / Introducing KinomaJS Dictionary-Based Constructors and Templates
        </div>      
        <div class="row">
            <!--Main Content -->
            <div class="word-docs col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div role="flatdoc-content" class="flatdocContentArea technoteContent"></div>
                <div class="copyRight">
                	<?php $path = "/includes/copy-right.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?>
                </div>
            </div>
            <!--Nav Bar--> 
            <nav class="bs-docs-sidebar col-lg-3 col-md-3 col-sm-4 hidden-xs">
                <div id="sidebar" class="nav nav-stacked">
                    <div role="flatdoc-menu" id="flatdoc-menuStyle" class="nav"></div>
                </div>
            </nav>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<!-- FOOTER -->
<?php $path = "/includes/footer.php"; include_once($_SERVER['DOCUMENT_ROOT'] . $path); ?>
<script src="/libs/jquery.velocity.min.js"></script>
<script src="/libs/scrollOffset.js"></script>
<script src="/libs/scrollspy-shortmenu.js"></script>
</body>
</html>