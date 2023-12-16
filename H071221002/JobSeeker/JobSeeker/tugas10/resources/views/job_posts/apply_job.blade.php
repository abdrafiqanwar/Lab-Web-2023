<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5>Job Applied Successfully!</h5>
            </div>
            <div class="card-body">
                <h2>{{ $jobPost->position }}</h2>
                <p>Location: {{ $jobPost->location }}</p>
                <p>Job Type: {{ $jobPost->job_type }}</p>
                <!-- Tampilkan informasi lainnya dari job post -->
            </div>
        </div>
    </div>
</body>
</html>
