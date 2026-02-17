<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-bg: rgba(123,108,90,255);
            --accent-color: #ff6219;
            --form-radius: 1rem;
        }

        body {
            background-color: var(--primary-bg);
            min-height: 100vh;
        }

        .login-card {
            border-radius: var(--form-radius);
            overflow: hidden;
        }

        .login-image {
            border-radius: var(--form-radius) 0 0 var(--form-radius);
            object-fit: cover;
        }

        .brand-icon {
            color: var(--accent-color);
            font-size: 2rem;
        }

        .form-label {
            letter-spacing: 0.5px;
        }

        .login-btn {
            background-color: #212529;
            transition: opacity 0.3s ease;
        }

        .login-btn:hover {
            opacity: 0.9;
        }

        .auth-links a {
            color: #393f81;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .auth-links a:hover {
            color: var(--accent-color);
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card login-card">
                        <div class="row g-0">
                            <!-- Image Column -->
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="img/login_img.jpg" 
                                     alt="Library interior" 
                                     class="img-fluid login-image">
                            </div>

                            <!-- Form Column -->
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5">
                                    <form action="login.php" method="POST" class="text-black">
                                        <!-- Brand Header -->
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-book-open brand-icon me-3"></i>
                                            <span class="h1 fw-bold mb-0">Library Portal</span>
                                        </div>

                                        <!-- Form Title -->
                                        <h5 class="fw-normal mb-3 pb-3">
                                            Sign into your account
                                        </h5>

                                        <!-- Username Input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" 
                                                   name="username" 
                                                   id="usernameInput" 
                                                   class="form-control form-control-lg"
                                                   required>
                                            <label class="form-label" for="usernameInput">
                                                Username
                                            </label>
                                        </div>

                                        <!-- Password Input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" 
                                                   name="password" 
                                                   id="passwordInput" 
                                                   class="form-control form-control-lg"
                                                   required>
                                            <label class="form-label" for="passwordInput">
                                                Password
                                            </label>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="pt-1 mb-4">
                                            <button type="submit" 
                                                    class="btn login-btn btn-lg w-100 text-white">
                                                Login
                                            </button>
                                        </div>

                                        <!-- Helper Links -->
                                        <div class="auth-links">
                                            <div class="mb-3">
                                                <a href="#!" class="small">
                                                    Forgot password?
                                                </a>
                                            </div>
                                            
                                            <p class="mb-5 pb-lg-2">
                                                Don't have an account? 
                                                <a href="register.html">Register here</a>
                                            </p>

                                            <div class="d-flex gap-3">
                                                <a href="#!" class="small">Terms of use</a>
                                                <a href="#!" class="small">Privacy policy</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>