<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login - Budget Tracker</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" <?php echo base_url('assets/css/bootstrap.css');?>">
    <style>
        *{
            font-family: 'Open Sans', serif;
        }
    </style>
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                <div class="d-flex justify-content-center py-4 border"> <span class="d-none h2 d-lg-block">Student Management System</span></div>
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to your account</h5>
                                        <!-- <p class="text-center small">Enter your email & password to login</p> -->
                                    </div>
                                    <form method="post" class="row g-3">
                                        <div class="col-12"> <label for="email" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" value="john@gmail.com"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12"> <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" value="123" class="form-control"
                                                required>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check"> <input class="form-check-input" type="checkbox"
                                                    name="remember" value="true" id="rememberMe"> <label
                                                    class="form-check-label" for="rememberMe">Remember me</label></div>
                                        </div>
                                        <div class="col-12"> <button class="btn btn-primary w-100"
                                                type="submit">Login</button></div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Vendor JS Files -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>