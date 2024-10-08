<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>One Tap</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="public/assets/css/app.min.css">
    <link rel="stylesheet" href="public/assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="public/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='public/assets/img/favicon.ico' />
</head>
<style>
    .card-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 20px;
    padding-bottom: 20px;
}

.card-header img {
    max-width: 100px;

}

.card-header h4 {
    font-weight: bold;
}
.card .card-header{
    border-bottom-color: #161515;

}
</style>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <img src="public/assets/img/OneTap1.png" alt="Logo"
                                    style="max-width: 470px; margin-bottom: -60px; margin-top: -70px;">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="<?= base_url('auth_login') ?>" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required autofocus>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                    <div class="mt-5 text-muted text-center">
                                        Don't have an account? <a href="<?= base_url('register') ?>">Create One</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="public/assets/js/app.min.js"></script>
    <script src="public/assets/js/scripts.js"></script>
    <script src="public/assets/js/custom.js"></script>
</body>

</html>