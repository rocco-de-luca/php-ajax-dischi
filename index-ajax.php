
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-AJAX-DISCHI</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
<header>
<div class="header_img">
       <div class="logo_nav">
         <img class="logo" src="dist/img/spotify-logo.png" alt="logo">
       </div>
     </div>
   </header>
   <main>
     <div class="container">
     </div>
   </main>
   <!--TEMPLATE HANDLEBARS-->
   <script id = "album-template" type="text/x-handlebars-template">
    <div class="container_dischi">
    <img class="image_dischi" src="{{poster}}"alt="">
                <h3>{{title}}</h3>
                <h4 class="author">{{author}}</h4>
                <p class="year">{{year}}</p>
    </div>
    </script>
    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.5.0.min.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="dist/js/main.js"></script>

</body>
</html>