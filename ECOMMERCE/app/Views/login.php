<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignUp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #6F61C0;
            padding: 50px;
        }

        /* Change the Login and Home button color to #6F61C0 */
        .btn-custom {
            background-color: #6F61C0;
        }

        /* Add hover effect to buttons */
        .btn-custom:hover {
            background-color: #A084E8;
        }

        /* Center the form */
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Change text color for class="text-muted" to black */
        .text-muted {
            color: black;
        }

        /* Change text color for custom class "text-black" to black */
        .text-black {
            color: black;
        }

        /* Add border to the card */
        .card {
            border: 3px solid #A084E8;
            border-radius: 40px;
        }
    </style>
</head>

<body>
    <?php if (session()->getFlashdata('msg')): ?>
    <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
    </div>
    <?php endif; ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Login</h5>
                        <form action="/authlog" method="post">
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <input class="form-control" type="text" name="username" id="username"
                                    placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password"
                                    placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-custom btn-block text-white" name="save">Login</button>
                            </div>
                            <div class="form-group text-center">
                                <a href="/home" class="btn btn-custom btn-sm text-white">
                                    <i class="fa fa-home"></i> Home
                                </a>
                            </div>
                            <div class="text-center">
                                <span class="text-black">Forgot</span>
                                <a class="text-black" href="#">Username / Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="text-black" href="/register">Create your Account <i
                                        class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
