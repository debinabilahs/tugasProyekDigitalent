<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>My Portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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

<!-- mulai header section -->

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
      <a href="https://instagram.com/_debi_ns" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/debi-nabilah-sholihah-024172231" class="fab fa-linkedin"></a>
      <a href="https://github.com/debinabilahs" class="fab fa-github"></a>
   </div>

</header>

<!-- selesai header section -->

<!-- mulai home section -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, I am Debi Nabilah Sholihah</h3>
      <span data-aos="fade-up">content writer & web developer</span>
      <p data-aos="fade-up">Debi Nabilah Sholihah. Born 19 years ago, precisely on September 13 in Cirebon. Lives in Plumbon, Cirebon.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- selesai home section -->

<!-- mulai about section -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Graduated from SMA NEGERI 1 SUMBER in 2021. She is currently studying at the Indramayu State Polytechnic in class D3TI1B.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Debi Nabilah Sholihah </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> debinabilahs@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Plumbon, Cirebon </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 0822174000305 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 19 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 1+ years </h3>
      </div>

      <a href="pdf.php" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>Understand good writing format</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Communication</span> <span>60%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>40%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>45%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>web developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2021 - 2022 )</span>
               <h3>Digital Marketing</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2022 )</span>
               <h3>Writer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>(2022 )</span>
               <h3>front-end developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>Blogger</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>full-stack developer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- selesai about section -->

<!-- mulai services section -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <a href="website-e-commerce.php"><i class="fa fa-barcode"></i>
         <h3>Website E-commerce/Toko Online</h3>
         <p>Saatnya menambah target pasar lebih luas dengan membuat website E-commerce Anda.<br>
         <input type="button" value="Selengkapnya">
         </p></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="perbaikan-bug.php"><i class="fa fa-exclamation-triangle"></i>
         <h3>Perbaikan Bug Pada Website atau Software</h3>
         <p>Pengecekan dan perbaikan bug pada website atau website Anda.<br><br>
         <input type="button" value="Selengkapnya"></p></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="website-profil.php"><i class="fa fa-users"></i>
         <h3>Website Profil Perusahaan/Sekolah</h3>
         <p>Pembuatan website profesional dengan fitur dan desain sesuai prefensi Anda.<br><br>
         <input type="button" value="Selengkapnya"></p></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="penulisan-artikel.php"><i class="fa fa-pencil-square"></i>
         <h3>Penulisan Artikel Blog</h3>
         <p>Desain blog Anda dengan Artikel yang memukau.<br><br>
         <input type="button" value="Selengkapnya"></p></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="penulisan-konten.php"><i class="fa fa-edit"></i>
         <h3>Penulisan Konten Website</h3>
         <p>Lengkapi website Anda dengan konten - konten menarik.<br><br>
         <input type="button" value="Selengkapnya"></p></a>
      </div>

      <div class="box" data-aos="zoom-in">
         <a href="modifikasi-website.php"><i class="fa fa-window-maximize"></i>
         <h3>Modifikasi Website</h3>
         <p>Upgrade website Anda dengan mengembangkan fitur - fitur lama dan membuat fitur baru.<br>
         <input type="button" value="Selengkapnya"></p></a>
      </div>

   </div>

</section>

<!-- selesai services section -->

<!-- mulai portfolio section -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">
   <?php
   include("koneksi.php");
   $sql = "SELECT * FROM tb_portfolio";
   $hasil = mysqli_query($koneksi, $sql);

   $jmlPortfolio = mysqli_num_rows($hasil);
   if($jmlPortfolio > 0) {
      while($row = mysqli_fetch_assoc($hasil)) {   
   ?>
      <div class="box" data-aos="zoom-in">
         <a href="index.php"><img src="images/<?= $row["foto"];?>" alt=""></a>
         <h3><?= $row["judul"]; //echo $row["judul"]?></h3>
         <span><?= $row["isi"];?></span>
      </div>
      <?php
         }
      }
      ?>
   </div>

</section>

<!-- selesai portfolio section -->

<!-- mulai contact section -->

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
         <p>082217400305</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>debinabilahs@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Cirebon, West Java - 45155</p>
      </div>

   </div>

</section>

<!-- selesai contact section -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Debi Nabilah Sholihah</span> </div>


<!-- custom js file link  -->
<script src="js/script.js"></script>

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