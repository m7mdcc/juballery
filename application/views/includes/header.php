<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Simple Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Le styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <?=HTML::style('css/bootstrap.css'); ?>
  <style>
    body {
      padding-top: 60px;
      padding-bottom: 20px;
    }
  </style>
  <?=HTML::style('css/bootstrap-responsive.css'); ?>
  <?=HTML::style('css/juballery.css'); ?>
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Fav and touch icons -->
  <?=HTML::script('js/jquery.js'); ?>
  <?=HTML::script('js/bootstrap.js'); ?>
  <link rel="shortcut icon" href="<?=URL::to_asset('favicon.ico'); ?>">
</head>
<body>