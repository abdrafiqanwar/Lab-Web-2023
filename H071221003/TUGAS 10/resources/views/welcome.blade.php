<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            /* Panggil gambar latar belakang dari direktori public menggunakan asset() */
            background-image: url('{{ asset('images/background_home.jpg') }}');
            /* Set properti-properti latar belakang lainnya sesuai kebutuhan */
            background-size: cover;
            background-position: center;
            min-height: 100vh;
        }
        /* Gaya konten di dalam body */
        .content {
            color: #fff;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="text-center content">
        <h1 class="display-4 font-weight-bold mb-4">Care About Your Skin Here</h1>
        <p class="lead mb-4">NICE TO SEE YOU</p>

        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">
            Login now
        </a>
    </div>

    <!-- Tambahkan script Bootstrap di sini -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
