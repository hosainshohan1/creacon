<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Contester</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="content">
      <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
        <div class="content-overlay"></div>
        <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
        <div class="content-details fadeIn-bottom">
          <h3 class="content-title">This is a title</h3>
          <p class="content-text">This is a short description</p>
        </div>
      </a>
    </div>
  </div>
</body>
</html>
