<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kesehatan</title>
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
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .reminder-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
        }
        .activity-card, .history-card, .stats-card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
        }
        .footer {
            background-color: #0056b3;
            color: white;
            padding: 20px 0;
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

    <div class="container mt-4">
        <div class="reminder-card">
            <h4>My Reminder</h4>
            <ul class="list-unstyled mt-3">
                <li class="d-flex align-items-center mb-3">
                    <img src="https://i.pinimg.com/564x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" class="rounded-circle me-3" alt="Profile" style="width: 50px; height: 50px;">
                    <div>
                        <strong>John Adams</strong> - Pemeriksaan Medis <span class="text-danger">Hari ini!</span>
                    </div>
                </li>
                <li class="d-flex align-items-center mb-3">
                    <img src="https://i.pinimg.com/564x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" class="rounded-circle me-3" alt="Profile" style="width: 50px; height: 50px;">
                    <div>
                        <strong>John Adams</strong> - Vaksinasi <span class="text-warning">2 Hari lagi!</span>
                    </div>
                </li>
                <li class="d-flex align-items-center">
                    <img src="https://i.pinimg.com/564x/8d/ff/49/8dff49985d0d8afa53751d9ba8907aed.jpg" class="rounded-circle me-3" alt="Profile" style="width: 50px; height: 50px;">
                    <div>
                        <strong>John Adams</strong> - Konsultasi <span class="text-primary">4 Hari lagi!</span>
                    </div>
                </li>
            </ul>
            <div class="text-center">
                <a class="btn btn-primary mt-3" href="{{ route('jadwal') }}" >Lihat Jadwal</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="activity-card">
                    <h5>Kegiatan yang Akan Datang</h5>
                    <ul class="list-group mt-3">
                        <li class="list-group-item d-flex justify-content-between">
                            <span>7 - Pemeriksaan Medis</span>
                            <span>10:00-11:30</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>9 - Vaksinasi</span>
                            <span>18:00-19:30</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>11 - Konsultasi Dokter</span>
                            <span>10:00-11:30</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>23 - Pemeriksaan Laboratorium</span>
                            <span>10:00-11:30</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="history-card mb-4">
                    <h5>Past Visit History</h5>
                    <table class="table table-bordered mt-3">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>Tanggal</th>
                                <th>Dokter</th>
                                <th>Treatment</th>
                                <th>Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2 Jan 2023</td>
                                <td>Dr. John Smith</td>
                                <td>Checkup</td>
                                <td>$120</td>
                            </tr>
                            <tr>
                                <td>9 Jan 2023</td>
                                <td>Dr. Jane Doe</td>
                                <td>Vaksinasi</td>
                                <td>$75</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="stats-card mb-4">
                    <h5>Statistik Kesehatan</h5>
                    <ul class="list-unstyled mt-3">
                        <li>Heart Beat: <span class="text-success">80</span></li>
                        <li>Blood Pressure: <span class="text-warning">120/80</span></li>
                        <li>Sugar: <span class="text-danger">150</span></li>
                        <li>Hemoglobin: <span class="text-success">14 g/dL</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                <p>© 2021 Medicare+ All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
