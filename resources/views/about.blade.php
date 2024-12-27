<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .gradient-line {
            height: 40px;
            background: linear-gradient(to left, #0B185E, #0B185E, lightblue);
            width: 100%;
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
        .navbar-nav .nav-link .fas {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0B185E;">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">MEDICARE+</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('about') }}">Tentang Kita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('layanan') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-light py-5">
        <div class="container text-center">
            <h5 style="color: #159EEC;">SELAMAT DATANG DI MEDICARE+</h5>
            <h1 class="display-4">Best Care for Your Good Health</h1>
            <p class="lead">Kami hadir untuk memberikan solusi digital di bidang kesehatan. Dengan layanan inovatif, kami mempermudah masyarakat mendapatkan informasi kesehatan kapan saja dan di mana saja.</p>
        </div>
    </header>

    <div class="gradient-line" style="margin-bottom: 0;"></div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="mb-4 text-center">Visi dan Misi Kami</h2>
                    <p><strong>Visi Kami:</strong> Menjadi platform digital kesehatan terdepan yang mendukung kehidupan sehat bagi semua orang.</p>
                    <p><strong>Misi Kami:</strong></p>
                    <ul>
                        <li>Menyediakan informasi kesehatan yang akurat dan mudah diakses.</li>
                        <li>Memberikan layanan kesehatan inovatif berbasis teknologi.</li>
                        <li>Memberdayakan pengguna untuk berpartisipasi untuk meningkatkan kesehatan mereka.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="gradient-line" style="margin-bottom: 0;"></div>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Mengapa Memilih MediCare+ ?</h2>
            <div class="row text-center">
                <div class="col-md-3">
                    <h5>Layanan Inovatif</h5>
                    <p>Fitur canggih mulai dari panduan hingga monitoring kesehatan.</p>
                </div>
                <div class="col-md-3">
                    <h5>Akses Mudah</h5>
                    <p>Platform yang dapat diakses kapan saja melalui perangkat Anda.</p>
                </div>
                <div class="col-md-3">
                    <h5>Informasi Terpercaya</h5>
                    <p>Artikel, layanan, dan dukungan berbasis data kesehatan aktual.</p>
                </div>
                <div class="col-md-3">
                    <h5>Fokus pada Pengguna</h5>
                    <p>Fitur dirancang untuk kebutuhan kesehatan individual Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer py-4" style="background-color: #1F2B6C; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 style="color: white;">MEDICARE+</h5>
                    <p>Leading the Way in Medical Excellence, Trusted Care.</p>
                </div>
                <div class="col-md-2">
                    <h5 style="color: white;">Important Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" style="color: white;">Appointment</a></li>
                        <li><a href="#" style="color: white;">Doctors</a></li>
                        <li><a href="#" style="color: white;">Services</a></li>
                        <li><a href="#" style="color: white;">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 style="color: white;">Contact Us</h5>
                    <p>Call: (237) 681-812-255</p>
                    <p>Email: <a href="mailto:filidieneseo@gmail.com" style="color: white;">filidieneseo@gmail.com</a></p>
                    <p>Address: 0123 Some place, Some country</p>
                </div>
                <div class="col-md-3">
                    <h5 style="color: white;">Newsletter</h5>
                    <form>
                        <div class="input-group">
                            <input class="form-control" placeholder="Enter your email address" type="email" />
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <div class="social-icons mt-3">
                        <a href="#" class="me-2" style="color: white;"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="me-2" style="color: white;"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="me-2" style="color: white;"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p>© 2021 Hospital's name All Rights Reserved by PNTEC-LTD</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
