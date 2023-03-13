<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin - Maju Berkah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('style2/admin/images/logo_sekolah.jpeg') }}">

    <!-- App css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="account-body">

    <!-- Log In page -->
    <div class="row vh-100">
        <div class="col-lg-3  pr-0">
            <div class="card mb-0 shadow-none">
                <div class="card-body">

                    <div class="px-3">
                        <div class="media">
                            <a href="#" class="logo logo-admin"><img
                                    src="{{ asset('admin/images/users/user-1.jpg') }}" height="120" alt="logo"
                                    class="my-3"></a>
                            <div class="media-body ml-3 align-self-center">
                                <h4 class="mt-0 mb-1">Login</h4>
                                <p class="text-muted mb-0">Sign in to continue.</p>
                            </div>
                        </div>

                        <form class="form-horizontal my-4" action="{{ route('login.proses') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="username">Email</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="mdi mdi-account-outline font-16"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="mdi mdi-key font-16"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter password">
                                </div>
                            </div>

                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2">
                                    <button class="btn btn-primary btn-block waves-effect waves-light"
                                        type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 p-0 d-flex justify-content-center">
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-white text-center">
                    <h4 class="mt-3">Admin Jaya Berkah Makmur</h4>
                    <div class="border w-25 mx-auto border-primary"></div>
                    <h1 class="">Let's Get Started</h1>

                </div>
            </div>
        </div>
    </div>
    <!-- End Log In page -->

    <!-- jQuery  -->
    <script src="admin/js/jquery.min.js"></script>
    <script src="admin/js/bootstrap.bundle.min.js"></script>
    <script src="admin/js/metisMenu.min.js"></script>
    <script src="admin/js/waves.min.js"></script>
    <script src="admin/js/jquery.slimscroll.min.js"></script>

    <!-- App js -->
    <script src="admin/js/app.js"></script>

</body>

</html>
