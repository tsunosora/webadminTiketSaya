<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

?>

<html>

<head>
    <title>Dashboard -TiketSaya</title>
    <meta charset="UTF-8">
    <meta name="description" content="Customers TiketSaya Admin">
    <meta name="keywords" content="tiketsaya, Web Customers, Customers Tiket Saya">
    <meta name="author" content="dotdesain">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



</head>

<body>

    <div class="side-left">
        <div class="shortcut" onmouseover="showAdminProfile()">
            <div class="emblemapp">
                <img src="images/emblem_app.png" height="25" alt="">
            </div>
            <div class="menus">

                <div class="item-menus inactive">

                    <a href="dashboard.html" class="">
                        <div class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="sales.html" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="wisata.html" class="">

                        <div class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus">

                    <a href="customers.html" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="setting.html" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-cog"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="logut.html" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-power-off"></i>
                        </div>
                    </a>

                </div>

            </div>

        </div>

        <div class="admin-profile" id="sl_ap" onmouseover="showAdminProfile()" onmouseout="hideAdminProfile()">
            <div class="admin-picture">
                <img src="images/admin_images.png" alt="">
            </div>

            <p class="admin-name">
                Faisal
            </p>

            <p class="admin-level">
                Super Admin
            </p>

            <ul class="admin-menu">
                <a href="dashboard.html">
                    <li>
                        My Dasboard
                    </li>
                </a>

                <a href="sales.html">
                    <li>
                        Ticket Sales
                    </li>
                </a>

                <a href="wisata.html">
                    <li>
                        Manage Wisata
                    </li>
                </a>

                <a href="customers.html">
                    <li class="active-link">
                        Customers <span class="badge-customers badge rounded-pill bg-primary">96</span>
                    </li>
                </a>

                <a href="setting.html">
                    <li>
                        Account Settings
                    </li>
                </a>

                <a href="#">
                    <li style="margin-top: 130px;">
                        Log Out
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="main-content col-md-12">
        <div class="header row">
            <div class="col-md-12">
                <H1 class="header-title">
                    All Customers
                </H1>
                <h2 class="sub-header-title">
                    They are your lovely users who love travelling
                </h2>
            </div>
        </div>

        <div class="row report-group ">

            <div class=" col-md-4">
                <div class=" item-unique-customer item-customers col-md-12">
                    <div class="row">

                        <div class="content col-md-12">

                            <div class="user-info">
                                <p class="text-customers">
                                    Wanna try to<br>create a customer<br>manually?
                                </p>

                                <a style=" float: left; margin-top: 10px !important; margin-bottom: 20px; width: 150px !important;"
                                    href="add_new_user.html"
                                    class="btn btn-primary-small btn-primary btn-primary-saya">Add new</a>

                            </div>





                        </div>

                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="item-customers col-md-12">
                    <div class="row">

                        <div class="content col-md-12">

                            <div style="float: none !important; margin: auto; " class="wrap-user-picture">
                                <img src="images/profile-2.png" alt="">
                            </div>


                            <div style=" float: none !important; text-align: center;" class="user-info">
                                <p style="float: none !important; margin: 0;" class="title">
                                    Julia Aulie
                                </p>
                                <p style="float: none !important; margin-bottom: 20px;" class="sub-title">
                                    Traveller
                                </p>

                                <a style="margin-top: 30px !important; margin-bottom: 20px; width: 150px;"
                                    href="user_detail.html"
                                    class="btn btn-small-sales btn-small-border btn-primary">View Profile</a>

                            </div>



                        </div>

                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="item-customers col-md-12">
                    <div class="row">

                        <div class="content col-md-12">

                            <div style="float: none !important; margin: auto; " class="wrap-user-picture">
                                <img src="images/profile-2.png" alt="">
                            </div>


                            <div style=" float: none !important; text-align: center;" class="user-info">
                                <p style="float: none !important; margin: 0;" class="title">
                                    Julia Aulie
                                </p>
                                <p style="float: none !important; margin-bottom: 20px;" class="sub-title">
                                    Traveller
                                </p>

                                <a style="margin-top: 30px !important; margin-bottom: 20px; width: 150px;" href="#"
                                    class="btn btn-small-sales btn-small-border btn-primary">View Profile</a>

                            </div>



                        </div>

                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="item-customers col-md-12">
                    <div class="row">

                        <div class="content col-md-12">

                            <div style="float: none !important; margin: auto; " class="wrap-user-picture">
                                <img src="images/profile-2.png" alt="">
                            </div>


                            <div style=" float: none !important; text-align: center;" class="user-info">
                                <p style="float: none !important; margin: 0;" class="title">
                                    Julia Aulie
                                </p>
                                <p style="float: none !important; margin-bottom: 20px;" class="sub-title">
                                    Traveller
                                </p>

                                <a style="margin-top: 30px !important; margin-bottom: 20px; width: 150px;"
                                    href="user_detail.html"
                                    class="btn btn-small-sales btn-small-border btn-primary">View Profile</a>

                            </div>



                        </div>

                    </div>
                </div>
            </div>








        </div>




    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


</body>


</html>