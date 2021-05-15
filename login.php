

<html>

<head>
    <title>Sign In Admin TiketSaya</title>
    <meta charset="UTF-8">
    <meta name="description" content="Login TiketSaya Admin">
    <meta name="keywords" content="tiketsaya, Web Dashboard, Login Tiket Saya">
    <meta name="author" content="dotdesain">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>

<body>

    <div class="container">
        <div class="row header-sign-in">
            <div class="col-12">
                <img class="logo-header animate__animated animate__bounce" height="80" src="images/applogocolored.png"
                    alt="" />
            </div>
        </div>
        <div class="row ">
            <div class="col-10 offset-md-1 form-sign-in">
                <div class="row">
                    <div class="col-md-7 d-none d-sm-block">
                        <img class="gambar-header animate__bounceIn my-elements" height="276"
                            src="images/illustration_login.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <p class="title-form">
                            Sign In
                        </p>
                        <p class="subtitle-form">
                            Let's make a report today
                        </p>

                        <form method="POST" action="includes/data_model.php">
                            <div class="form-group form-user">
                                <label class="title-input-primary-saya" for="exampleInputEmail1">Username</label>
                                <input name="username" type="text" class="form-control input-type-primary-saya"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label class="title-input-primary-saya" for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control input-type-primary-saya"
                                    id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" name="signin" class="btn btn-primary btn-primary-saya">Sign
                                In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


</body>


</html>