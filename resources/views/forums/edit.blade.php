<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3>Edit Forum</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('forums.update', $forum->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $forum->title) }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Konten</label>
                        <textarea name="content" id="content" rows="5" class="form-control" required>{{ old('content', $forum->content) }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('forums.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Update Forum</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
