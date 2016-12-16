<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GMD</title>

  <link href="/css/styles.css" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="/js/polyfills.js"></script>
  <![endif]-->
</head>

<body class="homepage">
@include('layout.header')

@yield('content')

@include('layout.footer')

<script src="/js/main.js"></script>
</body>
</html>