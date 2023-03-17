<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{isset ($title) ? $title: 'Nel nome di Nettuno'}}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    
      <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/media/favicon.svg" type="image/x-icon">
    
@vite(['resources/css/app.css', 'resources/js/app.js'])
  
  </head>
  <body>

<x-navbar/>
    {{$slot}}


  </body>
</html>