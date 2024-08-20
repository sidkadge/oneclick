<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>One Click</title>
    <link rel="stylesheet" href="public/assets/css/app.min.css">
    <link rel="stylesheet" href="public/assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/components.css">
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
    margin-bottom: 10px;
}

.card-header h4 {
    font-weight: bold;
}

.card .card-header {
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
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <div class="card-header text-center">
                                <img src="public/assets/img/One_click.png" alt="Logo"
                                    style="max-width: 100px; margin-bottom: 10px;">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                            <form method="POST" action="<?= base_url('register') ?>">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name">First Name</label>
                                            <input id="frist_name" type="text" class="form-control" name="frist_name"
                                                autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Last Name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select id="role" name="role" class="form-control">
                                            <option value="admin">Admin</option>
                                            <option value="contractor">Contractor</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Password</label>
                                            <input id="password" type="password" class="form-control pwstrength"
                                                data-indicator="pwindicator" name="password">
                                            <div id="pwindicator" class="pwindicator">
                                                <div class="bar"></div>
                                                <div class="label"></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="password2" class="d-block">Password Confirmation</label>
                                            <input id="password2" type="password" class="form-control"
                                                name="password-confirm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="mb-4 text-muted text-center">
                                Already Registered? <a href="<?= base_url('login') ?>">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="public/assets/js/app.min.js"></script>
    <script src="public/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="public/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="public/assets/js/page/auth-register.js"></script>
    <script src="public/assets/js/scripts.js"></script>
    <script src="public/assets/js/custom.js"></script>
</body>

</html>