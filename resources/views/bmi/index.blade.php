<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Medicare+ BMI Calculator</title>
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
            font-weight: bold;
            color: white;
            font-size: 1.5rem; /* Increase font size */
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .hero-section {
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px 0;
        }
        .hero-section img {
            max-width: 100%;
            height: auto;
        }
        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1a2a6c;
        }
        .hero-section p {
            font-size: 1.1rem;
            color: #333;
        }
        .hero-section .btn {
            background-color: #1a2a6c;
            color: white;
            font-weight: bold;
        }
        .calculator-section {
            background-color: #e0e0e0;
            padding: 50px 0;
        }
        .calculator-section h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #1a2a6c;
            text-align: center;
        }
        .calculator-section p {
            font-size: 1rem;
            color: #333;
            text-align: center;
        }
        .calculator-form {
            background-color: #1a2a6c;
            padding: 30px;
            border-radius: 10px;
            color: white;
        }
        .calculator-form .form-control {
            margin-bottom: 20px;
        }
        .calculator-form .btn {
            background-color: #ffcc00;
            color: #1a2a6c;
            font-weight: bold;
        }
        .footer {
            background-color: #1a2a6c;
            color: white;
            padding: 30px 0;
        }
        .footer a {
            color: white;
        }
        .footer .social-icons a {
            margin: 0 10px;
            color: white;
        }
        .profile-icon {
            font-size: 1.5rem; /* Medium size for profile icon */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">MEDICARE+</a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kita</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('artikel') }}">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                <li class="nav-item"><a class="nav-link profile -icon" href="{{ route('edit') }}"><i class="fas fa-user"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="hero-section">
    <img alt="Health and wellness illustration" height="400" src="https://storage.googleapis.com/a1aa/image/enrrm4Fi8qW0Ayj7lEDwWiIwR9m6NUW0g72yYnRmqSQarueTA.jpg" width="500"/>
    <h1>WELCOME TO BMI CALCULATOR</h1>
    <p>Kalkulator BMI untuk kesehatan Anda</p>
</div>

<div class="calculator-section">
    <div class="container">
        <h2>Kalkulator BMI</h2>
        <p>Masukkan berat badan dan tinggi badan Anda untuk menghitung BMI.</p>
        <div class="calculator-form">
            <form action="{{ route('bmi.calculate') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="weight" class="form-label">Berat Badan (kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight" required/>
                </div>
                <div class="mb-3">
                    <label for="height" class="form-label">Tinggi Badan (cm)</label>
                    <input type="number" class="form-control" id="height" name="height" required/>
                </div>
                <button type="submit" class="btn">Hitung BMI</button>
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container text-center">
        <p>&copy; 2024 Medicare+. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</body>
</html>
