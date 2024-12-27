<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf4fc;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: white;
        }
        .forum-card {
            background-color: #f8f9fa;
            border: 1px solid #007bff;
            border-radius: 10px;
        }
        .forum-card:hover {
            background-color: #d8eafd;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .btn-edit {
            background-color: #ffc107;
            color: black;
        }
        .btn-edit:hover {
            background-color: #e0a800;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <button class="btn btn-light me-3" type="button" onclick="location.href='{{ route('dashboard') }}'">
                    Back
                </button>
                <a class="navbar-brand mb-0" href="#">Forum Diskusi</a>
            </div>
            <div class="ms-auto">
                <a href="{{ route('forums.create') }}" class="btn btn-custom">Buat Diskusi Baru</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Diskusi Terbaru</h2>
        <div class="row g-4">
            @forelse ($forums as $forum)
            <div class="col-md-4">
                <div class="forum-card p-3">
                    <h5>{{ $forum->title }}</h5>
                    <p class="text-muted">Oleh: {{ $forum->user->name }}</p>
                    <p>{{ \Illuminate\Support\Str::limit($forum->content, 100) }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('forums.show', $forum->id) }}" class="btn btn-sm btn-custom">Lihat Diskusi</a>
                        @if (auth()->id() === $forum->user_id)
                        <div>
                            <a href="{{ route('forums.edit', $forum->id) }}" class="btn btn-sm btn-edit">Edit</a>
                            <form action="{{ route('forums.destroy', $forum->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus diskusi ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-delete">Hapus</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center">Belum ada diskusi.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
