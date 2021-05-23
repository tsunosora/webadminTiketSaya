<?php
    include 'includes/user_token.php';
    include 'includes/myfirebase.php';

    //data admin
    $reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();

    //data turis
    $path_turis_fb = 'Users';
    $checkdata_turis = $database->getReference($path_turis_fb)->getValue();
    
    //data Sales/tiket
    $path_tiket_fb = 'MyTickets/';
    $checkdata_tiket = $database->getReference($path_tiket_fb)->getValue();

    // cetak data admin
    $nama_admin_f = $checkdata['nama_admin'];

?>


<html>

<head>
    <title>Dashboard -TiketSaya</title>
    <meta charset="UTF-8">
    <meta name="description" content="Dashboard TiketSaya Admin">
    <meta name="keywords" content="tiketsaya, Web Dashboard, Login Tiket Saya">
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

                <div class="item-menus">

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

                <div class="item-menus inactive">

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
                <?php echo($nama_admin_f); ?>
            </p>

            <p class="admin-level">
                Super Admin
            </p>

            <ul class="admin-menu">
                <a href="dashboard.html">
                    <li class="active-link">
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
                    <li>
                        Customers <span class="badge-customers badge rounded-pill bg-primary">96</span>
                    </li>
                </a>

                <a href="setting.html">
                    <li>
                        Account Settings
                    </li>
                </a>

                <a href="includes/user_destroy.php">
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
                    My Dashboard
                </H1>
                <h2 class="sub-header-title">
                    Latest report updated this week and on
                </h2>
            </div>
        </div>

        <div class="row report-group ">

            <div class=" col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_pengguna.png" alt="">
                            <h3>
                                TOURIST
                            </h3>
                            <H4>
                                USERS LIFETIME
                            </H4>

                            <p class="value-item">
                                <?php echo count($checkdata_turis); ?>
                            </p>

                            <p class="desc-item">
                                Around the earth
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_sales.png" alt="">
                            <h3>
                                SALES
                            </h3>
                            <H4>
                                TICKETS BEING SOLD
                            </H4>

                            <p class="value-item">
                                <?php echo count($checkdata_tiket); ?>
                            </p>

                            <p class="desc-item">
                                around the world
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" col-md-4">
                <div class="item-report col-md-12">
                    <div class="row">
                        <div class="content col-md-12">
                            <img src="images/icon_total_wisata.png" alt="">
                            <h3>
                                WISATA
                            </h3>
                            <H4>
                                PLACE THAT AVAILABLE
                            </H4>

                            <p class="value-item">
                                6
                            </p>

                            <p class="desc-item">
                                around the Indonesia
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row report-group">
            <div class="col-md-6">
                <div class="item-big-report col-md-12">
                    <p class="title">
                        <span class="title-blue">NEWEST</span> USERS
                    </p>

                    <p class="sub-title">
                        USER THAT SIGN UP NOWADAYS
                    </p>

                    <a href="#" class="btn btn-primary-small btn-primary btn-primary-saya">See More</a>

                    <div class="divider-line"></div>

                    <div class="user-item">
                        <div class="user-picture">
                            <img src="images/admin_images.png" alt="">
                        </div>
                        <div class="user-info">
                            <p class="title">
                                Julia Aulie
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>
                        </div>
                        <a href="#" class="btn btn-small-border btn-primary ">Profile</a>
                    </div>

                    <div class="user-item">
                        <div class="user-picture">
                            <img src="images/admin_images.png" alt="">
                        </div>
                        <div class="user-info">
                            <p class="title">
                                Julia Aulie
                            </p>
                            <p class="sub-title">
                                Traveller
                            </p>
                        </div>
                        <a href="#" class="btn btn-small-border btn-primary ">Profile</a>
                    </div>


                </div>


            </div>

            <div class="col-md-6">
                <div class="item-big-report col-md-12">
                    <p class="title">
                        <span class="title-blue">NEWEST</span> USERS
                    </p>

                    <p class="sub-title">
                        USERS JUST BOUGHT TICKET
                    </p>

                    <a href="#" class="btn btn-primary-small btn-primary btn-primary-saya">See More</a>

                    <div class="divider-line"></div>

                    <div class="user-item">
                        <div class="user-picture">
                            <img src="images/profile-2.png" alt="">
                        </div>
                        <div class="user-info">
                            <p class="title">
                                Samantha Lin
                            </p>
                            <p class="sub-title">
                                Membeli 1 Tiket Pagoda
                            </p>
                        </div>
                        <a href="#" class="btn btn-small-border btn-primary ">Details</a>
                    </div>




                </div>


            </div>


        </div>



    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


</body>


</html>