<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #eaf4fc; }
        .result-container { max-width: 600px; margin: auto; background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        .medal { font-size: 50px; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="result-container text-center">
            <h2>Hasil Quiz</h2>
            <p>Benar: {{ $correct }} / {{ $total }}</p>
            <p>Salah: {{ $wrong }}</p>
            <p>Medali:
                <span class="medal {{ $medal }}">{{ $medal }}</span>
            </p>
            <a href="{{ route('quiz.index') }}" class="btn btn-primary">Ulangi Quiz</a>
            <a href="{{ route('quiz.poin') }}" class="btn btn-success">Lihat Poin</a>
        </div>
    </div>
</body>
</html>
