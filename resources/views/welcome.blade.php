<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Datanova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Welcome to My Leave Request Use Case for Datanova</h1>
        <p class="text-center mt-3">Explore and manage leave requests through our intuitive table interfaces.</p>
        <div class="text-center mt-4">
            <!-- Button to navigate to React table -->
            <a href="http://localhost:3000" class="btn btn-primary me-2">View React Table</a>
            <!-- Button to navigate to Laravel table -->
            <a href="{{ route('leave-requests.index') }}" class="btn btn-secondary">View Laravel Table</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
