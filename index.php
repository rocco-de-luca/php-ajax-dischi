<?php
include __DIR__ .'/index2.php'
?>

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
       <?php if (!empty($db)) { ?>
       <div class="container_dischi">
           <?php foreach ($db as $k => $dischi) { ?>
             <div class="info_dischi">
               <img class="image_dischi" src="<?php echo $dischi['poster']; ?>" alt="">
               <h3><?php echo $dischi['title']; ?></h3>
               <h4><?php echo $dischi['author']; ?></h4>
               <p><?php echo $dischi['year']; ?></p>
             </div>
           <?php } ?>
          <?php } else { ?>
          <h2>Non ci sono risultati</h2>
        <?php } ?>
       </div>
     </div>
   </main>

   <!--JS-->
    <script src="dist/main.js"></script>

</body>
</html>