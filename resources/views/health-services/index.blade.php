<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Layanan Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eaf4fc;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-items-center">
            <button class="btn btn-light me-3" type="button" onclick="location.href='{{ route('dashboard') }}'">
                Back
            </button>
            <a class="navbar-brand mx-auto" href="#">Layanan Kesehatan</a>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Pencarian Layanan Kesehatan</h2>
        <form method="GET" action="{{ route('health-services.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Cari layanan..." value="{{ $query }}">
                <button class="btn btn-primary">Cari</button>
            </div>
        </form>
        <div class="row">
            @forelse ($healthServices as $service)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $service->category }}</h6>
                            <p class="card-text">{{ $service->description }}</p>
                            <p class="text-muted">Lokasi: {{ $service->location }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">Layanan kesehatan tidak ditemukan.</p>
            @endforelse
        </div>
    </div>
</body>
</html>
