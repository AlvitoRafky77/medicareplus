<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Medicare+</title>
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
            color: #fff;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-nav .nav-link .fas {
            font-size: 1.5rem; /* Increase the size of the profile icon */
        }
        .header-image {
            width: 100%;
            height: auto;
        }
        .services-section {
            text-align: center;
            padding: 50px 20px;
        }
        .services-section h2 {
            color: #2c3e50;
            font-weight: bold;
        }
        .services-section p {
            color: #333;
        }
        .services-section .subheading {
            color: #3498db;
            font-weight: bold;
        }
        .services-grid {
            background-color: #2c3e50;
            padding: 50px 20px;
            border-radius: 15px;
        }
        .service-item {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .service-item h5 {
            color: #2c3e50;
            font-weight: bold;
        }
        .service-item i {
            font-size: 2rem;
            color: #3498db;
        }
        .footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
        }
        .footer a {
            color: #fff;
        }
        .footer .newsletter input {
            border: none;
            padding: 10px;
            border-radius: 5px;
        }
        .footer .newsletter button {
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #3498db;
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">MEDICARE+</a>
            <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <img alt="Doctor holding a clipboard" class="header-image" height="600" src="https://storage.googleapis.com/a1aa/image/XxpAevYDq4SHLSGTeusKRtQOV3IXRPowc4nsyn4pWEMCsDenA.jpg" width="1920"/>
    </header>
    <section class="services-section">
        <h3 class="subheading">WELCOME TO OUR SERVICES</h3>
        <h2>LAYANAN KAMI</h2>
        <p>Di MediCare+, kami menghadirkan berbagai layanan yang dirancang khusus untuk mendukung perjalanan kesehatan Anda. Mulai dari pencarian fasilitas kesehatan hingga konsultasi langsung dengan ahli, kami berkomitmen memberikan kemudahan dan kenyamanan bagi Anda.</p>
        <p>Jelajahi fitur-fitur kami yang interaktif dan informatif, termasuk forum diskusi, kuis kesehatan, kalkulator kesehatan, dan masih banyak lagi. Semua ini kami sediakan untuk membantu Anda mengambil langkah proaktif dalam menjaga dan meningkatkan kualitas hidup.</p>
        <h2>Kesehatan Anda, Prioritas Kami.</h2>
    </section>
    <section class="services-grid container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-calendar-alt"></i>
                    <h5>Pengingat Jadwal Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-search"></i>
                    <h5>Pencarian Layanan Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-comments"></i>
                    <h5>Konsultasi Live Chat</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-users"></i>
                    <h5>Forum Diskusi Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-book"></i>
                    <h5>Artikel Edukasi Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-video"></i>
                    <h5>Video Edukasi Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-question-circle"></i>
                    <h5>Kuis Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-calendar"></i>
                    <h5>Kalender Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-calculator"></i>
                    <h5>Kalkulator BMI Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service-item">
                    <i class="fas fa-medal"></i>
                    <h5>Poin dan Badges Kesehatan</h5>
                    <a class="btn btn-link" href="#">→</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>MEDICARE+</h5>
                    <p>Leading the Way in Medical Excellence, Trusted Care.</p>
                </div>
                <div class="col-md-2">
                    <h5>Important Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Appointment</a></li>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Contact Us</h5>
                    <p>Call: (237) 681-812-255</p>
                    <p>Email: filidieneseo@gmail.com</p>
                    <p>Address: 0123 Some place, Some country</p>
                </div>
                <div class="col-md-3">
                    <h5>Newsletter</h5>
                    <div class="newsletter">
                        <input placeholder="Enter your email address" type="email"/>
                        <button type="button"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>© 2021 Hospital's name All Rights Reserved by PNTEC-LTD</p>
                <div>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>
