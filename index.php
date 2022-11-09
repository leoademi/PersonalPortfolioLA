<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Leonard Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-image.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am leonard ademi</h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis labore recusandae minima molestias aliquam nostrum.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis tenetur amet ab optio minus est error libero adipisci numquam ratione.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Leonard Ademi  </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> leonardademi126@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> prishtine, kosovo </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +383-45-888-983 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>

   <div class="skills" data-aos="fade-up">

<h1 class="heading"> <span>skills</span> </h1>

<div class="progress">
   <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
   <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>90%</span></h3> </div>
   <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>80%</span></h3> </div>
   <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>85%</span></h3> </div>
   
</div>

</div>

<div class="edu-exp">

<h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

<div class="row">

   <div class="box-container">

      <h3 class="title" data-aos="fade-right">education</h3>

      <div class="box" data-aos="fade-right">
         <span>( 2017 - 2020 )</span>
         <h3>College</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
      </div>

      <div class="box" data-aos="fade-right">
         <span>( 2020 - 2023 )</span>
         <h3>Bachelor's Degree</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
      </div>

      
      </div>

<div class="box-container">

   <h3 class="title" data-aos="fade-left">experience</h3>

   <div class="box" data-aos="fade-left">
      <span>( 2019 - 2020 )</span>
      <h3>front-end developer</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
   </div>

   <div class="box" data-aos="fade-left">
      <span>( 2021 - 2022 )</span>
      <h3>full-stack developer</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
   </div>

</div>

</div>

</div>

</section>