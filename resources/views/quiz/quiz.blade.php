<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Kesehatan</title>
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
                        <a class="nav-link text-white" href="{{ route('forums.index') }}">Forum</a>
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
   
        <div class="row">
            <div class="col-md-8 mt-4">
                <h2>Quiz Kesehatan</h2>
                <div class="card">
                    <div class="card-body">
                        <video controls class="w-100 mb-3">
                            <source src="https://via.placeholder.com/placeholder-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <h5>Tes Kebugaran Tubuh: Seberapa Fit Kamu?</h5>
                        <div class="d-flex align-items-center mt-2">
                            <p class="mb-0 me-3"><i class="bi bi-hand-thumbs-up"></i> 145</p>
                            <p class="mb-0"><i class="bi bi-hand-thumbs-down"></i> 6</p>
                        </div>
                        <p class="mt-3">Apakah tubuhmu sudah dalam kondisi terbaiknya? Tes ini dirancang untuk membantu kamu mengetahui tingkat kebugaran tubuhmu dengan cara yang sederhana dan cepat. Jawab beberapa pertanyaan singkat tentang aktivitas fisik, pola makan, dan gaya hidupmu. Hasilnya akan memberikan gambaran tentang seberapa fit kamu saat ini dan langkah-langkah yang bisa kamu ambil untuk meningkatkan kebugaranmu. Yuk, mulai tesnya sekarang dan jadilah versi terbaik dari dirimu!</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4" style="margin-top: 67px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Details</h5>
                        <p><strong>Date:</strong> 16/12/2024</p>
                        <p><strong>Time Limit:</strong> 15 Mins</p>
                        <p><strong>Attempts:</strong> Twice</p>
                        <button class="btn btn-primary w-100">Start Quiz</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer py-4" style="background-color: #1F2B6C; color: white; margin-top: 40px;">
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
