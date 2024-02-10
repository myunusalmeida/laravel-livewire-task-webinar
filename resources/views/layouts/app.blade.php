<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Task</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-soft-blue">
    <nav class="py-5 navbar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-center gap-1 mb-4 w-100">
                <img src="assets/images/logo.png" style="width: 40px" alt="Logo">
                <p class="mb-0 text-dark fw-bold fs-5">TaskOnlen</p>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
