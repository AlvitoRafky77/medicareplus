<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point and Badges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f8fc;
        }
        .custom-header {
            background-color: #001f3f;
            color: white;
            padding: 1rem 0;
        }
        .custom-section {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .custom-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #001f3f;
        }
        .leaderboard-table th, .leaderboard-table td {
            vertical-align: middle;
            text-align: center;
        }

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

<div class="container my-5">
    <section class="custom-section">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="https://via.placeholder.com/150" alt="Avatar" class="rounded-circle mb-3">
                <h5>Nama User</h5>
                <p>Level: Advanced</p>
            </div>
            <div class="col-md-4 text-center">
                <h5 class="custom-title">Statistik</h5>
                <p>Anda telah menyelesaikan 24 Quiz bulan ini!</p>
                <div class="row">
                    <div class="col-6">
                        <h6>Total Points</h6>
                        <p>37/50</p>
                    </div>
                    <div class="col-6">
                        <h6>Quiz Dikerjakan</h6>
                        <p>5</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <h5 class="custom-title">Medali</h5>
                <div class="d-flex justify-content-center">
                    <img src="https://via.placeholder.com/80" alt="Medal 1" class="me-2">
                    <img src="https://via.placeholder.com/80" alt="Medal 2" class="me-2">
                    <img src="https://via.placeholder.com/80" alt="Medal 3">
                </div>
            </div>
        </div>
    </section>


    <section class="mt-5">
        <div class="text-center mb-4">
            <h5 class="custom-title">LEADERBOARDS</h5>
            <p>TOP 10 TERATAS</p>
        </div>
        <div class="custom-section">
            <table class="table leaderboard-table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Nama</th>
                        <th>Medali</th>
                        <th>Total Poin</th>
                        <th>Posisi Aktif</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>Karl Rah</td>
                        <td><img src="https://via.placeholder.com/40" alt="Medal"></td>
                        <td>1000</td>
                        <td>500</td>
                    </tr>
                    <tr>
                        <td>#2</td>
                        <td>Karl Rah</td>
                        <td><img src="https://via.placeholder.com/40" alt="Medal"></td>
                        <td>900</td>
                        <td>450</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
