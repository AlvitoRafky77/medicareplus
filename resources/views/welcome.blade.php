<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Medicare+
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #2c3e50;
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .hero-section {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
        }
        .hero-section .btn {
            background-color: #0072ff;
            color: #fff;
            border: none;
        }
        .info-cards {
            margin-top: -30px;
        }
        .info-cards .card {
            border: none;
            border-radius: 0;
        }
        .info-cards .card-body {
            padding: 20px;
        }
        .info-cards .card-title {
            font-size: 1rem;
            font-weight: bold;
        }
        .info-cards .card-text {
            font-size: 0.9rem;
        }
        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            text-align: center;
            margin-top: 40px;
        }
        .services-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .services-list li {
            display: inline-block;
            margin: 10px 20px;
            font-size: 1rem;
        }
        .services-list li i {
            color: #0072ff;
            margin-right: 10px;
        }
        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 40px 0;
        }
        .footer a {
            color: #fff;
        }
        .footer .social-icons i {
            font-size: 1.5rem;
            margin: 0 10px;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
   <div class="container">
    <a class="navbar-brand" href="#">
     MEDICARE+
    </a>
    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="#">
        Home
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Tentang Kita
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Layanan
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Forum
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Artikel
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Kontak
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link btn btn-outline-light" href="{{ route('login') }}" method="POST">
        Login
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
  <section class="hero-section">
   <div class="container">
    <h1>
     Leading the Way in Medical Excellence
    </h1>
    <p>
     Caring for Life
    </p>
    <button class="btn btn-primary">
     Layanan Kami
    </button>
   </div>
  </section>
  <section class="info-cards">
   <div class="container">
    <div class="row">
     <div class="col-md-4">
      <div class="card text-center">
       <div class="card-body">
        <h5 class="card-title">
         Artikel Kesehatan Terbaru
        </h5>
       </div>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card text-center">
       <div class="card-body">
        <h5 class="card-title">
         Forum Komunitas Diskusi
        </h5>
       </div>
      </div>
     </div>
     <div class="col-md-4">
      <div class="card text-center">
       <div class="card-body">
        <h5 class="card-title">
         Konsultasi Live Chat
        </h5>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>
  <section class="text-center my-5">
   <div class="container">
    <h2 class="section-title">
     Selamat Datang di Medicare+
    </h2>
    <p>
     Tempat yang Tepat untuk Menerima Perawatan
    </p>
    <p>
     MediCare+ adalah platform kesehatan terpercaya yang memudahkan Anda menjaga kesehatan fisik dan mental. Nikmati akses mudah ke informasi, layanan kesehatan, dan konsultasi ahli kapan saja. Mulai perjalanan sehat Anda bersama kami! Hidup sehat lebih mudah dengan MediCare+!
    </p>
    <a class="btn btn-link" href="#">
     Learn More
    </a>
   </div>
  </section>
  <section class="text-center my-5">
   <div class="container">
    <img alt="Medical professional writing on a clipboard" class="img-fluid" height="400" src="https://storage.googleapis.com/a1aa/image/Qm41FhyfnOVLBiNPXEassIWaGbH8QSK6328Mzoenz54doc9TA.jpg" width="1200"/>
   </div>
  </section>
  <section class="text-center my-5">
   <div class="container">
    <h2 class="section-title">
     Layanan Kami
    </h2>
    <p>
     Semangat untuk mengutamakan pasien.
    </p>
    <ul class="services-list">
     <li>
      <i class="fas fa-check-circle">
      </i>
      Pencarian Layanan Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Pengingat Jadwal Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Konsultasi Live Chat
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Kuis Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Kalender Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Forum Diskusi Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Artikel Edukasi Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Video Edukasi Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Kalkulator Kesehatan
     </li>
     <li>
      <i class="fas fa-check-circle">
      </i>
      Poin Kuis Kesehatan
     </li>
    </ul>
    <p>
     Kami berkomitmen untuk mendukung kesehatan Anda dengan layanan yang mudah diakses, informatif, dan terpercaya. Bersama MediCare+, jadikan perjalanan kesehatan Anda lebih terarah dan bermakna.
    </p>
    <a class="btn btn-link" href="#">
     Learn More
    </a>
   </div>
  </section>
  <section class="text-center my-5">
   <div class="container">
    <h2 class="section-title">
     ARTICLES &amp; VIDEO
    </h2>
    <p>
     Temukan Informasi Kesehatan yang Anda Butuhkan
    </p>
    <p>
     Kami percaya bahwa pengetahuan adalah langkah awal menuju kesehatan yang lebih baik. Di MediCare+, Anda akan menemukan berbagai artikel informatif yang dirancang untuk membantu Anda memahami lebih banyak tentang kesehatan tubuh, pola hidup sehat, hingga tips praktis untuk menjaga kesejahteraan Anda sehari-hari.
    </p>
    <p>
     Jelajahi koleksi artikel dan video terbaru kami oleh para ahli dan disesuaikan untuk kebutuhan Anda. Temukan jawaban atas pertanyaan kesehatan Anda dan jadilah lebih percaya diri dalam menjaga kesehatan diri sendiri dan keluarga.
    </p>
    <a class="btn btn-link" href="#">
     Learn More
    </a>
   </div>
  </section>
  <footer class="footer">
   <div class="container">
    <div class="row">
     <div class="col-md-4">
      <h5>
       MEDICARE+
      </h5>
      <p>
       Leading the Way in Medical Excellence, Trusted Care.
      </p>
     </div>
     <div class="col-md-2">
      <h5>
       Important Links
      </h5>
      <ul class="list-unstyled">
       <li>
        <a href="#">
         Appointment
        </a>
       </li>
       <li>
        <a href="#">
         Doctors
        </a>
       </li>
       <li>
        <a href="#">
         Services
        </a>
       </li>
       <li>
        <a href="#">
         About Us
        </a>
       </li>
      </ul>
     </div>
     <div class="col-md-3">
      <h5>
       Contact Us
      </h5>
      <p>
       Call: (237) 681-812-255
      </p>
      <p>
       Email:
       <a href="mailto:filidieneseo@gmail.com">
        filidieneseo@gmail.com
       </a>
      </p>
      <p>
       Address: 0123 Some place, Some country
      </p>
     </div>
     <div class="col-md-3">
      <h5>
       Newsletter
      </h5>
      <form>
       <div class="input-group">
        <input class="form-control" placeholder="Enter your email address" type="email"/>
        <button class="btn btn-primary" type="submit">
         <i class="fas fa-paper-plane">
         </i>
        </button>
       </div>
      </form>
      <div class="social-icons mt-3">
       <a href="#">
        <i class="fab fa-linkedin">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-facebook">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-twitter">
        </i>
       </a>
      </div>
     </div>
    </div>
    <div class="text-center mt-4">
     <p>
      © 2021 Hospital's name All Rights Reserved by PNTEC-LTD
     </p>
    </div>
   </div>
  </footer>
 </body>
</html>
