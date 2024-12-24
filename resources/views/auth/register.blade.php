<html>
<head>
    <title>Register Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .register-container h2 {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .register-container p {
            color: #6c757d;
            margin-bottom: 30px;
        }
        .form-control {
            margin-bottom: 20px;
            height: 50px;
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            height: 50px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="register-container text-center">
        <h2>Register Akun</h2>
        <p>Silahkan Isi Data Dibawah</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Nama">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
</body>
</html>
