<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100vh;
            width: 100%;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .domain-search {
            margin: 0;
            padding: 105px 0;
        }

        .domain-search .form-title {
            margin-top: 0;
            margin-bottom: 2px;
            color: #fff;
            font-family: "Poppins", sans-serif;
            font-weight: 100;
        }

        .domain-search p {
            color: #B0E7FF;
            margin: 0;
        }

        .domain-search .input-group {
            box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
        }

        .domain-search .form-control {
            height: 60px;
            border-radius: 0;
            border: none;
        }

        .domain-search .btn-primary {
            padding: 0 28px;
            line-height: 54px;
            background: #ff6726;
            color: #fff;
        }

        .domain-search .btn-primary:hover {
            background: #e65a22;
        }

        .imgg {
            background-image: url("img/bg-choose-book.jpg");
            background-size: cover;
            background-position: center;
            opacity: 0.9;
            height: 50vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Enhanced Book Card Styling */
        .book-card {
            position: relative;
            margin: 20px;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            background: linear-gradient(45deg, #ffffff 0%, #f8f9fa 100%);
        }

        .book-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(0,0,0,0) 50%, rgba(0,0,0,0.7) 100%);
            z-index: 1;
        }

        .book-card img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            transition: all 0.3s ease;
            filter: grayscale(20%);
        }

        .book-details {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            color: white;
            padding: 25px;
            transform: translateY(100%);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            opacity: 0;
            z-index: 2;
        }

        .book-card:hover .book-details {
            transform: translateY(0);
            opacity: 1;
        }

        .book-card:hover img {
            transform: scale(1.05);
            filter: grayscale(0%);
        }

        .book-title {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-size: 1.8rem;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            z-index: 2;
            transition: all 0.3s ease;
        }

        .book-card:hover .book-title {
            opacity: 0;
        }

        .rating-stars {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .genre-tag {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 5px 15px;
            border-radius: 20px;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .book-info {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .book-card:hover {
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Search Section -->
    <div class="imgg">
        <form class="row domain-search bg-pblue" action="" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h2 class="form-title">Find Your <strong>Favourite Books</strong></h2>
                        <p>“Today a reader, tomorrow a leader.”</p>
                    </div>
                    <div class="col-md-9">
                        <div class="input-group">
                            <input type="text" name="BookName" placeholder="“If you don't like to read, you haven't found the right book.”" list="books" class="form-control">
                            <span class="input-group-addon">
                                <input type="submit" value="Search" class="btn btn-primary">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Book Cards Section -->
    <div class="container books-container">
        <div class="row">
            <!-- Book Card 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="book-card">
                    <img src="img/The_Catcher_in_the_Rye_(1951,_first_edition_cover).jpg" alt="Book Cover">
                    <div class="book-title">The Catcher in the Rye</div>
                    <div class="book-details">
                        <div class="genre-tag">Classic Fiction</div>
                        <div class="rating-stars">★★★★☆</div>
                        <p>Author: J.D. Salinger</p>
                        <p>Published: 1951</p>
                        <div class="book-info">
                            <span>Pages: 234</span>
                            <span>Language: EN</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Card 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="book-card">
                    <img src="img/To_Kill_a_Mockingbird_(first_edition_cover).jpg" alt="Book Cover">
                    <div class="book-title">To Kill a Mockingbird</div>
                    <div class="book-details">
                        <div class="genre-tag">Classic Fiction</div>
                        <div class="rating-stars">★★★★★</div>
                        <p>Author: Harper Lee</p>
                        <p>Published: 1960</p>
                        <div class="book-info">
                            <span>Pages: 281</span>
                            <span>Language: EN</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Card 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="book-card">
                    <img src="img/The_Great_Gatsby_Cover_1925_Retouched.jpg" alt="Book Cover">
                    <div class="book-title">The Great Gatsby</div>
                    <div class="book-details">
                        <div class="genre-tag">Classic Fiction</div>
                        <div class="rating-stars">★★★★☆</div>
                        <p>Author: F. Scott Fitzgerald</p>
                        <p>Published: 1925</p>
                        <div class="book-info">
                            <span>Pages: 180</span>
                            <span>Language: EN</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>