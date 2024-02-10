<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <title>Login</title>

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-soft-blue">

    <div class="container">
        <div class="row align-items-center justify-content-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center gap-1 mb-4">
                            <img src="assets/images/logo.png" style="width: 40px" alt="Logo">
                            <p class="mb-0 text-dark fw-bold fs-5">TaskOnlen</p>
                        </div>

                        <h5 class="text-dark fw-bold mb-4">Sign In</h5>
                        <form action="{{ route('login') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="mb-1">Alamat Email</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Tulis alamat email kamu">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="mb-1">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Masukkan password kamu">
                            </div>
                            <button class="btn btn-primary d-block w-100" type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
