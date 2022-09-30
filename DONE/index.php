<?php
 
 require('./php/conn.php');

 $stmt = mysqli_query($conn, "SELECT * FROM  lucidmusic ORDER BY id DESC LIMIT 3 ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/index.css" />
    <title>LUCID MUSIC </title>
</head>
<body>
    <div class="container">
        <section id="intro">
        <div class="logo-c">
            <div class="logo" style="border: 10px double black;  font-size: 30px; border-radius: 7px; width:270px; text-align: center;">  LUCID MUSIC  </div> 
            <div class="search"> 
                <i class="fas fa-search"></i>  <input type="search" name="" id="search">
          </div>
        </div>

            <div class="info"> 
                <h1> The Best  Music <br> Downloader </h1> <img src="./image.png" alt="image">
            </div>

            <div class="note">
              <b>Whatever music you search for you'll find here <i class="fas fa-hand-point-down"></i> </b>
                
            </div>
        </section>
        <section id="audio">
            
        </section>
        <section id="suggestions">
           <b> Trending Hot Now!!</b> 
           <?php 
                while( $res = mysqli_fetch_assoc($stmt) ){

           ?>
           <a href="<?php echo $res['path'] ?> " style="color:black"  download="<?php $res['artist'] .' - '. $res['title'] ?>" >
                   <p> <?php echo $res['artist'] .'  -  '. $res['title'];  ?> <i class="fas fa-download"></i> </p>
            </a>
            <?php } ?>
        </section>
    </div>
</body>
<script src="./search.js"></script>
<footer> 
    <div class="links">
          &copy; 2022 - LUCIDITY
    </div>
</footer>
</html>