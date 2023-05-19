 <?php
 error_reporting(E_ERROR | E_PARSE);
$msg = $_REQUEST["msg"];
session_start();
if (!$msg && isset($_SESSION["LoginUser"])) {
    header("Location:welcome.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>

    <section class="vh-100 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                
                                <p class="text-primary text-center"><?php echo $msg ?  "Account Created Successfully!!": ""?></p>
                                
                                <h2 class="text-uppercase text-center mb-5">Log In Here</h2>

                                <form action="register.php" name="login" method="post" id="login_form" >


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Email">Your Email</label>
                                        <input type="Email" name="Email" class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Password">Password</label>
                                        <input type="Password" name="Password"
                                            class="form-control form-control-lg" required/>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body " name ="btn">log in</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Create a account? <a href="index.php"
                                            class="fw-bold text-body"><u>Sign Up here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="JS/jquery-3.6.4.js"></script>
    <script>

        $(document).ready(function () {
            $("#login_form").submit(function (event) {

                event.preventDefault();
                let formdata = $(this).serialize();
                $.post("php/login.php", formdata, function (data) {
                    if (data === "200") {
                       window.location.href = "welcome.php";
                    } else {
                        alert(data);
                    }
                });
            });
        }); 
    </script>

</body>

</html>