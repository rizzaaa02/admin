<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | GestoCom-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('/assets/css/style.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');

        * {
            font-family: "Plus Jakarta Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 20;
            font-style: normal;
        }

        /* Positioning for the top-right image */
        .top-right-image {
            position: fixed;
            top: 0;
            right: 0;
            z-index: 1;
            /* Set a low z-index to send it to the background */
        }

        /* Positioning for the bottom-left image */
        .bottom-left-image {
            position: fixed;
            bottom: 0;
            left: 0;
            z-index: 1;
            /* Set a low z-index to send it to the background */
        }

        body {
            background-color: #f0f4fc;
            font-family: Arial, sans-serif;
            height: 100vh;
            /* Ensure body takes full viewport height */
            margin: 0;
        }

        .login-container {
            height: 100vh;
            /* Full height container */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 5;
            /* Ensure the content is above the background images */
        }

        .login-box,
        .welcome-box {
            width: 100%;
            padding: 3rem;
            height: 100%;
            /* Ensure boxes take full height */
            position: relative;
            /* Make sure the content stays on top */
            z-index: 5;
            /* Content boxes should be above the background images */
        }

        .login-box {
            background-color: rgba(143, 170, 215, 0.8);
            /* Slightly transparent */
            border-radius: 0 10px 10px 0;
            box-shadow: 10px 0 20px rgba(0, 0, 0, 0.1);
        }

        .welcome-box {
            background-color: rgba(255, 255, 255, 0.8);
            /* Slightly transparent */
            border-radius: 10px 0 0 10px;
            box-shadow: -10px 0 20px rgba(0, 0, 0, 0.1);
        }

        .welcome-text {
            font-weight: 700;
            font-size: 2rem;
        }

        .login-form {
            background-color: #F1F6FF;
            padding: 2rem;
            border-radius: 10px;
        }

        .login-form input {
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: #2d5f9a;
            border: none;
        }

        .btn-primary:hover {
            background-color: #254d7b;
        }

        .box-wrapper {
            height: 100%;
            /* Full height for the box wrapper */
            display: flex;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .box {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            /* Full height for content alignment */
        }
    </style>
</head>
<!-- <div class="container">
    <form class="ms-auto me-auto mt-auto" style="width: 500px; background-color: blue; padding: 20px; border-radius: 10px;">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div> -->
<!-- Top-right background image -->
<div class="top-right-image">
    <img src="{{ URL::to('/assets/imgs/design.png') }}" alt="Design Image" width="300">
</div>

<!-- Bottom-left background image -->
<div class="bottom-left-image">
    <img src="{{ URL::to('/assets/imgs/design_left.png') }}" alt="Design Image" width="300">
</div>

<div class="container login-container">
    <div class="row w-100 g-0">

        <!-- Welcome Section with Box -->
        <div class="col-md-6 d-flex align-items-center">
            <div class="box-wrapper w-100">
                <div class="welcome-box box">
                    <img src="{{ URL::to('/assets/imgs/4.png') }}" alt="GESTOCOM Logo" class="mb-4">
                    <h1 class="welcome-text">WELCOME!</h1>
                    <p>To keep connected with us please login with your personal information.</p>
                </div>
            </div>
        </div>

        <!-- Login Form Section -->
        <div class="col-md-6 d-flex align-items-center">
            <div class="box-wrapper w-100">
                <div class="login-box box">
                    <div class="login-form">
                        <h2 class="mb-5">LOGIN</h2>
                        <form id="loginForm">
                            <div class="mb-4">
                                <input type="text" id="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="mb-4">
                                <input type="password" id="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="d-grid">
                                <a href="dashboard.html" class="btn btn-primary">LOGIN</a>
                            </div>
                            <div class="text-end mt-2">
                                <center>
                                    <a href="#" class="text-decoration-none">Forgot Password?</a>
                                </center>
                            </div>
                        </form>
                        <div id="error-message" class="text-danger mt-3" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>