<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Hasil BMI</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            padding: 50px;
        }
        .result-card {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #1a2a6c;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="result-card">
    <h2>Hasil BMI Anda</h2>
    <p>BMI Anda adalah: <strong>{{ number_format($bmi, 2) }}</strong></p>
    <p>
        @if ($bmi < 18.5)
            Anda termasuk kategori kurang berat badan.
        @elseif ($bmi < 24.9)
            Anda termasuk kategori berat badan normal.
        @elseif ($bmi < 29.9)
            Anda termasuk kategori kelebihan berat badan.
        @else
            Anda termasuk kategori obesitas.
        @endif
    </p>
    <a href="{{ route('bmi.index') }}" class="btn btn-primary">Hitung Lagi</a>
</div>
</body>
</html>
