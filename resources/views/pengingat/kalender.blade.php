<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Kesehatan Internasional</title>
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
        .calendar {
            border: 1px solid #dee2e6;
            border-radius: 0.375rem;
            background-color: #fff;
            padding: 20px;
            margin-top: 30px;
        }
        .btn-primary {
            font-size: 16px;
            padding: 10px 20px;
        }
        footer {
            background-color: #0056b3;
            color: white;
            padding: 20px 0;
            margin-top: 30px;
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
    <!-- Calendar Section -->
    <div class="container">
        <div class="calendar">
            <h2 class="text-center">Kalender Hari Kesehatan Internasional</h2>
            <p class="text-center text-muted">Jadwal Penting Sepanjang Tahun</p>
            <div class="row">
                <div class="col-md-3">
                    <!-- Sidebar -->
                    <div class="bg-light p-3 rounded">
                        <h5>Peringatan Penting</h5>
                        <ul class="list-unstyled">
                            <li>✔ Hari Kesehatan Dunia (7 April)</li>
                            <li>✔ Hari Malaria Sedunia (25 April)</li>
                            <li>✔ Hari Tanpa Tembakau Sedunia (31 Mei)</li>
                        </ul>
                        <h5>Bulan Khusus</h5>
                        <p>✔ Oktober: Bulan Kesadaran Kanker Payudara</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <!-- Calendar -->
                    <table class="table table-bordered">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>Bulan</th>
                                <th>Hari</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Januari</td>
                                <td>4</td>
                                <td>Hari Braille Sedunia</td>
                            </tr>
                            <tr>
                                <td>Februari</td>
                                <td>4</td>
                                <td>Hari Kanker Sedunia</td>
                            </tr>
                            <tr>
                                <td>Maret</td>
                                <td>24</td>
                                <td>Hari Tuberkulosis Sedunia</td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td>7</td>
                                <td>Hari Kesehatan Dunia</td>
                            </tr>
                            <tr>
                                <td>Mei</td>
                                <td>31</td>
                                <td>Hari Tanpa Tembakau Sedunia</td>
                            </tr>
                            <tr>
                                <td>Juni</td>
                                <td>14</td>
                                <td>Hari Donor Darah Sedunia</td>
                            </tr>
                            <tr>
                                <td>Juli</td>
                                <td>28</td>
                                <td>Hari Hepatitis Sedunia</td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td>29</td>
                                <td>Hari Jantung Sedunia</td>
                            </tr>
                            <tr>
                                <td>Oktober</td>
                                <td>10</td>
                                <td>Hari Kesehatan Mental Sedunia</td>
                            </tr>
                            <tr>
                                <td>Desember</td>
                                <td>1</td>
                                <td>Hari AIDS Sedunia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="gradient-line" style="margin-bottom: 0; margin-top: 30px;"></div>
    <div class="text-center mt-5">
        <h3>Kelola Pengingat dan Jadwal Kesehatan Anda</h3>
        <a href="{{ route('pengingat') }}" class="btn btn-primary mt-3">Atur Pengingat</a>
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
                <p>© 2021 Hospital's name All Rights Reserved by PNTEC-LTD</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
