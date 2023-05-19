<?php
session_start();
if (isset($_SESSION["LoginUser"])) {
    $userInfo = $_SESSION["LoginUser"];
    //   var_dump($userInfo);
} else {
    header("Location:register.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Community Links</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Hello
                <?php echo $userInfo["FirstName"]; ?> - Welcome to in our Community
            </h1>
            <p class="col-md-8 fs-4">My name is Bazed Gul and I am an experienced web developer with a passion for
                creating stunning websites and applications that are both beautiful and functional. I believe that a
                well-designed website can have a huge impact on a business, and that's why I strive to create sites that
                are not only visually appealing, but also optimized for performance and user experience.

                Whether you need a simple brochure site, an e-commerce platform, or a custom web application, I have the
                skills and expertise to bring your vision to life. I work closely with my clients to understand their
                needs and goals, and I am committed to delivering projects on time and within budget.

                In addition to my web development work, I also enjoy writing about technology and sharing my knowledge
                with others. I believe that technology can be a powerful tool for positive change, and I am excited to
                be a part of a community that is working to make the world a better place through technology.

                Thank you for visiting my page, and I look forward to connecting with you soon!</p>
            <button class="btn btn-primary btn-lg" type="button" id="logout">Log out</button>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="image/github.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">GitHub</h5>
                    <p class="card-text">GitHub is a web-based platform that is primarily used for version control and
                        collaboration on software development projects. It provides developers with a range of tools to
                        help them manage their code, track changes, and collaborate with other developers.</p>
                    <a href="https://github.com/bazedgul">Visit github</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="image/ldi.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">LinkedIn</h5>
                    <p class="card-text">LinkedIn is a professional networking platform that allows individuals and
                        businesses to connect, share information, and build relationships.LinkedIn allows users to
                        create a profile that highlights their professional experience, education, and skills. </p>
                    <a href="https://www.linkedin.com/in/bazedgul/">Visit Replit</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="image/replit.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Replit</h5>
                    <p class="card-text">Replit is a cloud-based integrated development environment (IDE) that allows
                        users to write, run, and share code in multiple programming languages. It was founded in 2016
                        and has quickly grown to become a popular platform for coding education and collaboration.</p>
                        <a href="https://replit.com/@bazedgul"> Visit Replit</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-black" href="https://github.com/bazedgul"> Bazed Gul</a>
    </div>
    <!-- Copyright -->


    <script src="JS/jquery-3.6.4.js"></script>
    <script>

        $(document).ready(function () {
            $("#logout").click(function (event) {
                $.get("php/logout.php", function (data) {
                    if (data === "200") {
                        window.location.href = "register.php";
                    } else {
                        alert(data);
                    }
                });
            });
        }); 
    </script>
</body>

</html>