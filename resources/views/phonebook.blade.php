<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
  </head>
  <body>
    <div id="app">
      <myheader></myheader>
        <div class="container">
          <router-view></router-view>
        </div>
      <myfooter></myfooter>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
