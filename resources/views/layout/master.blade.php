<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GMD</title>

  <!-- core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/font-awesome.min.css" rel="stylesheet">
  <link href="/css/animate.min.css" rel="stylesheet">
  <link href="/css/prettyPhoto.css" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">
  <link href="/css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="/js/html5shiv.js"></script>
  <script src="/js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="homepage">
@include('layout.header')

@yield('content')

@include('layout.footer')

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/wow.min.js"></script>
</body>
</html>