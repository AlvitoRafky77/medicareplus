<html>
<head>
    <title>Login Page</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .login-container h2 {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .login-container p {
            color: #6c757d;
            margin-bottom: 30px;
        }
        .form-control {
            margin-bottom: 20px;
            height: 45px;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            height: 45px;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        .social-login {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .social-login img {
            width: 40px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .divider {
            display: block;
            text-align: center;
            margin: 10px 0;
            font-size: 1rem;
            color: #0072ff;
            text-decoration: none;
        }
        .divider:hover {
            text-decoration: underline;
        }
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }
        .divider:not(:empty)::before {
            margin-right: .25em;
        }
        .divider:not(:empty)::after {
            margin-left: .25em;
        }
    </style>
    <script>
        function validateLogin() {
            // Ambil nilai dari input
            var email = document.querySelector('input[type="email"]').value;
            var password = document.querySelector('input[type="password"]').value;

            // Validasi sederhana
            if (email === "" || password === "") {
                alert("Email dan Password harus diisi!");
                return false; // Mencegah form dari pengiriman
            }

            // Jika validasi berhasil, form akan dikirim
            return true;
        }
    </script>
</head>
<body>
    <div class="login-container">
        <h2>Login Akun Anda</h2>
        <p>Silahkan Isi Data Dibawah</p>
        <form action="{{ route('login') }}" method="POST" onsubmit="return validateLogin()">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="Email" required/>
            <input type="password" name="password" class="form-control" placeholder="Password" required/>
            <button class="btn btn-primary" type="submit">Login</button>
        </form>
        <a href="{{ route('register') }}" class="divider">Create an account</a>
        <div class="divider">Or continue with</div>
        <div class="social-login">
            <img alt="Google logo" height="40" src="https://storage.googleapis.com/a1aa/image/shNvZKklE857AxHxPSeaixpHOZVdlBfXHwRzEE8UBCqQe56nA.jpg" width="40"/>
            <img alt="Meta logo" height="40" src="https://storage.googleapis.com/a1aa/image/9ALPSA8wR7ZqLFO3jm43bsOfqGwYbl26xQus0meThBQMe56nA.jpg" width="40"/>
            <img alt="Apple logo" height="40" src="https://storage.googleapis.com/a1aa/image/TrySgCNlGFagC1f3UybdJUAFEJpDIwfsfgRNw09SiIhd856nA.jpg" width="40"/>
