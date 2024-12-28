<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Medicare+ Live Chat Consultation
  </title>
  <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background-color: #0B185E;
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
            background-color: #f0f8ff;
            padding: 2rem 0;
            text-align: center;
        }
        .hero-section img {
            max-width: 50%;
            height: auto;
        }
        .hero-section h1 {
            color: #1a3b6b;
            margin-top: 1rem;
        }
        .hero-section p {
            color: #333;
        }
        .highlight {
            color: #1a3b6b;
            font-weight: bold;
        }
        .chat-section {
            background: linear-gradient(to bottom, #e0e7ff, #1a3b6b);
            padding: 2rem;
            text-align: center;
            color: #fff;
            border-radius: 15px;
            margin: 2rem 0;
        }
        .chat-section h2 {
            font-weight: bold;
        }
        .chat-section p {
            margin: 1rem 0;
        }
        .chat-section .btn {
            background-color: #d1e0ff;
            color: #1a3b6b;
            border: none;
            padding: 0.5rem 2rem;
            border-radius: 25px;
        }
        .footer {
            background-color: #1a3b6b;
            color: #fff;
            padding: 2rem 0;
        }
        .footer a {
            color: #fff;
        }
        .footer .social-icons a {
            margin: 0 0.5rem;
        }
  </style>
 </head>
 <body>
  <nav class="navbar navbar-expand-lg">
   <div class="container">
    <a class="navbar-brand" href="{{ route('dashboard') }}">
     MEDICARE+
    </a>
    <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
     <span class="navbar-toggler-icon">
     </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
     <ul class="navbar-nav ms-auto">
      <li class="nav-item">
       <a class="nav-link" href="{{ route('dashboard') }}">
        Home
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('about') }}">
        Tentang Kita
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('layanan') }}">
        Layanan
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('forums.index') }}">
        Forum
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="{{ route('artikel') }}">
        Artikel
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="#">
        Kontak
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
  <section class="hero-section">
   <div class="container">
    <img alt="Medical tools and symbols illustration" height="200" src="https://storage.googleapis.com/a1aa/image/JHhVGmqgGN4fIKfbiecf7JERVWt9hVCinJBcA0fgWJFv4B5fE.jpg" width="600"/>
    <h1>
     WELCOME TO LIVE CHAT CONSULTATION
    </h1>
    <h2>
     KONSULTASI LIVE CHAT
    </h2>
    <p>
     <span class="highlight">
      Konsultasi Langsung dengan Ahli Kesehatan
     </span>
    </p>
    <p>
     Punya pertanyaan kesehatan yang membutuhkan jawaban cepat? Dengan fitur Konsultasi Live Chat di MediCare+, kamu dapat berbicara langsung dengan para ahli kesehatan kapan saja dan di mana saja.
    </p>
    <p>
     Dapatkan solusi kesehatan secara cepat, akurat, dan terpercaya tanpa perlu keluar rumah. Baik itu masalah kesehatan umum, tips pola hidup sehat, atau pertanyaan lainnya, semuanya bisa kamu diskusikan di sini.
    </p>
    <p class="highlight">
     Kesehatanmu, Prioritas Kami.
    </p>
   </div>
  </section>
  <section class="chat-section">
   <div class="container">
    <h2>
     CHAT DENGAN DOKTER ONLINE
    </h2>
    <p>
     Konsultasikan keluhan kesehatanmu secara langsung dengan dokter terpercaya melalui fitur live chat kami. Mudah, cepat, dan kapan saja!
    </p>
    <a class="btn" href = "{{ route('chat.index') }}">
     Mulai Chat Sekarang
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
       Email: filidinesoe@gmail.com
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
        <i class="fab fa-facebook-f">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-twitter">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-linkedin-in">
        </i>
       </a>
       <a href="#">
        <i class="fab fa-instagram">
        </i>
       </a>
      </div>
     </div>
    </div>
    <div class="text-center mt-3">
     <p>
      © 2021 Hospital's name All Rights Reserved by PNTEC-LTD
     </p>
    </div>
   </div>
  </footer>
