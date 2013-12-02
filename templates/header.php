<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Блог</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  </head>

  <body>


    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="?">Блог за хакери</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="?">Начало</a></li>
              <?php if (IS_ADMIN): ?>
                <li><a href="?act=logout">Админ (излез)</a></li>
              <?php else: ?>
                <li><a href="?act=login">Влез</a></li>
              <?php endif ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
      
    <div class="container">

<script src="bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>