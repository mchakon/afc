<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $this->getThemePath(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $this->getThemePath(); ?>/css/default.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Concrete5 with Twitter Bootstrap</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                    <a href="/login" class="navbar-link">Login</a>
                </p>
                <ul class="nav">
                    <?php
                    $a = new Area('Main Navigation');
                    $a->display($c);
                    ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span12">
                <?php
                    $a = new Area('Main Content');
                    $a->display($c);
                ?>
        </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
        <p>&copy; 2012</p>
    </footer>

</div><!--/.-container-->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo $this->getThemePath(); ?>/js/bootstrap.min.js"></script>

<?php Loader::element('footer_required'); ?>
</body>
</html>
