<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $forum->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf4fc;
        }
        .forum-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">{{ $forum->title }}</h2>
        <div class="forum-content mx-auto" style="max-width: 800px;">
            <p class="text-muted">Oleh: {{ $forum->user->name }}</p>
            <p>{{ $forum->content }}</p>
            <a href="{{ route('forums.index') }}" class="btn btn-custom">Kembali</a>
        </div>
    </div>
</body>
</html>
