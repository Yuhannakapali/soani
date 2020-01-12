<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>dashboard</title>
  @include('admin.layout.css')
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('admin.layout.topnav')
  @include('admin.layout.sidebar')
  

 
  @include('admin.layout.main')

 
  @include('admin.layout.footer')
</div>

@include('admin.layout.js')
</body>
</html>
