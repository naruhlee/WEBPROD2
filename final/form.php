<?php


// $host = 'sql111.epizy.com';
// $dbname = 'epiz_34166226_contact_db';
// $username = 'epiz_34166226';
// $password = '1VBylDD660behb';

// $conn = mysqli_connect ($host,$username,$password,$dbname);

// if (mysqli_connect_errno()){
//    die("Connection error " . mysqli_connect_errno());
// }


// if(isset($_POST['send'])){

//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $number = mysqli_real_escape_string($conn, $_POST['number']);
//    $msg = mysqli_real_escape_string($conn, $_POST['message']);

//    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
//    if(mysqli_num_rows($select_message) > 0){
//       $message[] = 'message sent already!';
//    }else{
//       mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
//       $message[] = 'message sent successfully!';
//    }

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Naraly Ortega</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>




<?php

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

<!-- header section starts  -->

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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="selfie.jpeg">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Naraly Ortega</h3>
      <span data-aos="fade-up">marketing media graduate</span>
      <p data-aos="fade-up"> Actively looking for opportunities to enhance my marketing skill set. </p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">
         Born and Raised in the City of New York. 
         My passion for art and analytics has helped me excel in my field of study and in the marketing field. 
      </p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Naraly Ortega </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Naraly.ortega71@myhunter.cuny.edu</h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Queens, New York </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +1234-567-0923 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">Jump to top</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Graphic Design</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Marketing</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Videography</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2023 )</span>
               <h3>Media Studies @ Hunter College </h3>
               <p>Relevant Coursework: Public Relatios, Digital Design, Marketing, Film, and Web Programming</p>
            </div>

            <!-- <div class="box" data-aos="fade-right">
               <span>( 2020 - 2021 )</span>
               <h3>web developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div> -->

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2022 )</span>
               <h3>social media manager</h3>
               <p>Built a brand folder for a fammily owned bakery. Helped drive sales to the business by managing social media accounts 
                  and interacting with consumers on Instagram.  </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - 2023 )</span>
               <h3>Marketing Intern</h3>
               <p>Managed 40+ negative/positive social media comments. Managed monthly budget sheets and social analytics on Excel.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - 2023 )</span>
               <h3>Public Relations Officer</h3>
               <p>Designed flyers for club events. Increased following by 40% by increasing posting frequency.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Graphic Design</h3>
         <p> 3+ years experience working with Adobe Illustrator, Photoshop and Canva</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-paint-brush"></i>
         <h3>Social Media Management</h3>
         <p> 7 months working with Sprout Social and Social Analytics</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-bootstrap"></i>
         <h3>Copy Writing</h3>
         <p> 3+ years in content creating 
         </p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>Videography</h3>
         <p> My personal interests include videography. Experience with DSLR cameras and video editing using Adobe Premiere.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-bullhorn"></i>
         <h3>email marketing</h3>
         <p> 7 months of experience in creating content for email/SMS. Mentored weekly for 2 months by Senior Digital Marketer. </p>
      </div>

      <!-- <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p>
      </div> -->

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="img1.png" alt="">
         <h3>digital design </h3>
         <span>(  2021 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="img2.png" alt="">
         <h3> Planned Parenthood Campaign </h3>
         <span>( 2021 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="img3.jpg" width="" alt="">
         <h3> Interactive Story</h3>
         <span>( 2020 )</span>
      </div>

     
   

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+123-456-7890</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>naraly.ortega71@myhunter.cuny.edu</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>queens, new york - 00000</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; designed <?php echo date('Y'); ?> by <span> naruhlee </span> </div>










<script src="script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>