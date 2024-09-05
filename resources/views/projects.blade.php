<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('work-experiences') }}">Work Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('projects') }}">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Projects</h1>

        @foreach ($data as $project)
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="card-title">{{ $project['title'] }}</h2>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $project['description'] }}</p>
                    <a href="{{ route('project-detail', $project['id']) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        @endforeach
    </div>

    <footer class="text-center mt-5 mb-4">
        <p>&copy; {{ date('Y') }} My Portfolio. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
