<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare+ Dashboard</title>
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
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <img src="https://i.pinimg.com/564x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" class="rounded-circle me-3" alt="Profile" style="width: 150px; height: 150px;">
                <h2>Selamat Datang, Fadel Adzandika!</h2>
                <div class="progress my-3" style="height: 10px;">
                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3>27</h3>
                        <p>Quiz Passed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3>27min</h3>
                        <p>Fastest Time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h3>3</h3>
                        <p>Achievements</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h4>Featured Quizzes</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://www.telkomsel.com/sites/default/files/2023-10/article-01%20%283%29.png" class="card-img-top" alt="Quiz 1">
                            <div class="card-body">
                                <h5 class="card-title">Tes Kebugaran Tubuh</h5>
                                <p class="card-text">15 min</p>
                                <a href="{{ route('quiz.form') }}" class="btn btn-primary">Take Quiz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p3/23/2023/12/25/IMG_20231225_044505-2295083804.jpg" class="card-img-top" alt="Quiz 2">
                            <div class="card-body">
                                <h5 class="card-title">Tes Makanan Sehat</h5>
                                <p class="card-text">15 min</p>
                                <a href="#" class="btn btn-primary">Take Quiz</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1623207171/attached_image/memaksimalisasi-manfaat-fitness-di-gym.jpg" class="card-img-top" alt="Quiz 3">
                            <div class="card-body">
                                <h5 class="card-title">Keeping Debt Safe</h5>
                                <p class="card-text">15 min</p>
                                <a href="#" class="btn btn-primary">Take Quiz</a>
                            </div>
                        </div>
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
