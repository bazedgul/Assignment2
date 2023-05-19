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
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form action="#" name="login" method="post" id="register_form">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="FirstName">First Name</label>
                                        <input type="text" name="FirstName" class="form-control form-control-lg"
                                           required  />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="LastName">Last Name</label>
                                        <input type="text" name="LastName" class="form-control form-control-lg"
                                            required />
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Email">Your Email</label>
                                        <input type="text" name="Email" class="form-control form-control-lg"
                                            required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Password">Password</label>
                                        <input type="Password" name="Password" class="form-control form-control-lg"
                                            required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="repassword">Repeat your Password</label>
                                        <input type="Password" name="repassword" class="form-control form-control-lg"
                                            required />
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body "
                                            name="btn">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="register.php"
                                            class="fw-bold text-body"><u>Login here</u></a></p>

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
            $("#register_form").submit(function (event) {

                event.preventDefault();
                let formdata = $(this).serialize();
                $.post("php/signUp.php", formdata, function (data) {
                    if (data === "200") {
                       window.location.href = "register.php?msg=success";
                    } else {
                        alert(data);
                    }
                });
            });
        }); 
    </script>

</body>

</html>