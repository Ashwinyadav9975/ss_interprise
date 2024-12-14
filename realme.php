<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Images</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand img {
            height: 40px;
        }
        .carousel-item img {
            width: 100%;
            height: auto;
            background-color: black;
        }
        .image-table img {
            width: 300px;
            height: 450px;
            margin-bottom: 10px;
        }
        .image-table td {
            padding: 15px;
            text-align: center;
        }
        .center-table {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="rahul.jpg" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#signup">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNewReleases" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    New Releases
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownNewReleases">
                    <a class="dropdown-item" href="oppo.php">Oppo</a>
                    <a class="dropdown-item" href="vivo.php">Vivo</a>
                    <a class="dropdown-item" href="realme.php">Realme</a>
                    <a class="dropdown-item" href="apple.php">Apple</a>
                    <a class="dropdown-item" href="samsung.php">Samsung</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHandset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Handset
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownHandset">
                    <a class="dropdown-item" href="#earbud">Earbud</a>
                    <a class="dropdown-item" href="#earphone">Earphone</a>
                    <a class="dropdown-item" href="#speaker">Speaker</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Apple-Cases-Banner-D.avif" class="d-block w-100" alt="Apple Cases Banner">
        </div>
        <div class="carousel-item">
            <img src="OnePlus-Nord-3-Lite-5G-Banners-D.avif" class="d-block w-100" alt="OnePlus Nord 3 Lite 5G Banner">
        </div>
        <div class="carousel-item">
            <img src="Oppo-Find-X8-Series-Banner-D-rev-1.avif" class="d-block w-100" alt="Oppo Find X8 Series Banner">
        </div>
        <div class="carousel-item">
            <img src="Samsung-Galaxy-A55-A35-5G-Onam-Payasam-Carousal-Banner.avif" class="d-block w-100" alt="Samsung Galaxy A55 A35 5G Onam Payasam Carousal Banner">
        </div>
        <div class="carousel-item">
            <img src="Pixel-9-Pro-Fold-HPMC-Banner-D.avif" class="d-block w-100" alt="Pixel 9 Pro Fold HPMC Banner">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5 center-table">
    <table class="table image-table">
        <tbody>
            <tr>
                <td><img src="./brand/download (1).jpeg" alt="Image 1"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>
                <td><img src="./brand/download (2).jpeg" alt="Image 2"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>
                <td><img src="./brand/download (3).jpeg" alt="Image 3"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>
                <td><img src="./brand/download.jpeg" alt="Image 4"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>

            </tr>
            <tr>
                <td><img src="./brand/download.jpeg" alt="Image 4"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>
                <td><img src="./brand/OIP (1).jpeg" alt="Image 5"><br><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>                <td><img src="./brand/OIP (2).jpeg" alt="Image 6"><br><button class="btn btn-primary mt-2">View More</button></td>
                <td><img src="./brand/download (3).jpeg" alt="Image 3"><a href="view.php"><button class="btn btn-primary mt-2">View More</button></a></td>

            </tr>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
