<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap');
         
        :root {
        --yellow: #0dbaff;
        --black: rgb(74, 71, 71);
        --white: #fff;
        --light-bg: rgb(232, 228, 228);
        --border-bold: 0.5rem solid var(--black);
        --border-light: 0.2rem solid var(--black);
        }

        * {
        font-family: 'Rubik', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
        text-transform: capitalize;
        color: var(--black);
        }

        *::selection {
        background-color: var(--black);
        color: var(--yellow);
        }

        *::-webkit-scrollbar {
        height: 0.5rem;
        width: 1rem;
        }

        *::-webkit-scrollbar-track {
        background-color: transparent;
        }

        *::-webkit-scrollbar-thumb {
        background-color: var(--yellow);
        }

        html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        }

        body {
        overflow: hidden;
        transition: 0.2s linear !important;
        }

        body.active {
        padding-left: 35rem;
        }

        section {
        padding: 3rem 2rem;
        margin: 0 auto;
        max-width: 1200px;
        text-align: center;
        }

        section p{
        text-align: left;
        }

        .heading {
        margin-bottom: 3rem;
        text-align: center;
        }

        .heading span {
        text-transform: uppercase;
        font-size: 6rem;
        }

        .services .box-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(40rem, 1fr));
        gap: 1.5rem;
        align-items: flex-start;
        }

        .services .box-container .box {
        padding: 3rem 2rem;
        border: var(--border-light);
        }

        .services .box-container .box i {
        font-size: 4rem;
        margin-bottom: 2rem;
        }

        .services .box-container .box h3 {
        margin: 1rem 0;
        font-size: 2rem;
        padding: 1.5rem;
        background-color: var(--yellow);
        font-weight: normal;
        }

        .services .box-container .box p {
        line-height: 2;
        font-size: 1.7rem;
        }

        .services .box-container .box:hover {
        background-color: var(--black);
        }

        .services .box-container .box:hover i {
        color: var(--white);
        }

        .services .box-container .box:hover p {
        color: var(--white);
        }

    </style>
</head>
<body>
<section class="services" id="services">

<h1 class="heading" data-aos="fade-up"> <span>Paket Perbaikan Bug Pada Website atau Software</span> </h1>
<div class="box-container">

   <div class="box" data-aos="zoom-in">
      <a href="https://wa.me/082217400305">
      <h3>Standard</h3>
      <h2><b>Rp 1.500.000</b></h2><br>
      <p>* Waktu pengerjaan : 1 - 5 hari kerja
         <br>* Eror atau bug sedikit
         <br>* "Free maintenance Garansi Hack/rusak" 1 year/low priority
         <br>* Payment : Transfer Manual
      </p><input type="button" value="Pesan Paket"></a>
   </div>

   <div class="box" data-aos="zoom-in">
      <a href="https://wa.me/082217400305">
      <h3>Exlusive</h3>
      <h2><b>Rp 5.500.000</b></h2><br>
      <p>* Waktu pengerjaan : 15 - 20 hari kerja
         <br>* Eror atau bug complex
         <br>* "Free maintenance Garansi Hack/rusak" 1 year/Medium priority
         <br>* Payment : Transfer Manual & Virtual Account
      </p><input type="button" value="Pesan Paket"></a>
   </div>

</div>

</section>
</body>
</html>