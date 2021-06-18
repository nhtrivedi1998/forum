
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coding Forums</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <style>
        body {
            font-family: 'Baloo Bhai 2', cursive;
            background-color: #f3f3f39c
                }
    </style>
</head>


    
        
    
    <body class="antialiased">
      <x-header />       

      {{$cat}}   
       
      
    </body>
</html>


