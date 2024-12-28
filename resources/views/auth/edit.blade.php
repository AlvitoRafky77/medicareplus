<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #2c3e50;
            height: 100vh;
            padding: 20px;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }
        .sidebar a.active {
            font-weight: bold;
        }
        .sidebar a:hover {
            background-color: #34495e;
        }
        .sidebar i {
            margin-right: 10px;
        }
        .content {
            padding: 20px;
        }
        .form-control:focus {
            box-shadow: none;
        }
        .btn-cancel {
            border: 1px solid #ff6f00;
            color: #ff6f00;
        }
        .btn-cancel:hover {
            background-color: #ff6f00;
            color: white;
        }
        .btn-save {
            background-color: #007bff;
            color: white;
        }
        .btn-save:hover {
            background-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="text-center mb-4">
                <button class="btn btn-light" type="button" onclick="location.href='{{ route('dashboard') }}'">
                    Back
                </button>
            </div>
            <a class="active" href="#">
                <i class="fas fa-pencil-alt"></i>
                Edit profile
            </a>
            <!-- Tombol Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger w-100 mt-3">Logout</button>
            </form>
        </div>
        <div class="content flex-grow-1">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Edit Profile</h2>
                <div class="d-flex align-items-center">
                    <i class="fas fa-bell me-3"></i>
                    <div class="profile-pic">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
            <form action="{{ route('edit') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label" for="name">Nama</label>
                        <input class="form-control" name="name" type="text" value="{{ old('name', auth()->user()->name) }}" required />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" name="email" type="email" value="{{ old('email', auth()->user()->email) }}" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Leave blank to keep current password" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input class="form-control" name="password_confirmation" type="password" placeholder="Re-enter new password" />
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="d-flex justify-content-end">
                    <button class="btn btn-cancel me-2" type="button" onclick="location.href='{{ route('dashboard') }}'">Cancel</button>
                    <button class="btn btn-save" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
