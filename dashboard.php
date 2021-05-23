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
    $path_sale_fb = 'MyTickets';
    $checkdata_sale = $database->getReference($path_sale_fb)->getValue();
    
    //data Sales/tiket
    $path_wisata_fb = 'Wisata';
    $checkdata_wisata = $database->getReference($path_wisata_fb)->getValue();

    // cetak data admin
    $nama_admin_f = $checkdata['nama_admin'];
    
    // cetak data admin
    $role_admin_f = $checkdata['role_admin'];

?>


<html>

<head>
    <title>Dashboard - TiketSaya</title>
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

                    <a href="dashboard.php" class="">
                        <div class="icon-item-menu">
                            <i class="fab fa-delicious"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="sale.php" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-ticket-alt"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="wisata.php" class="">

                        <div class="icon-item-menu">
                            <i class="fas fa-globe"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="customers.php" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-users"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="setting.php" class="">
                        <div class="icon-item-menu">
                            <i class="fas fa-cog"></i>
                        </div>
                    </a>

                </div>

                <div class="item-menus inactive">

                    <a href="logut.php" class="">
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
                <?php echo($role_admin_f)  ?>
            </p>

            <ul class="admin-menu">
                <a href="dashboard.php">
                    <li class="active-link">
                        My Dasboard
                    </li>
                </a>

                <a href="sales.php">
                    <li>
                        Ticket Sales
                    </li>
                </a>

                <a href="wisata.php">
                    <li>
                        Manage Wisata
                    </li>
                </a>

                <a href="customers.php">
                    <li>
                        Customers <span class="badge-customers badge rounded-pill bg-primary">96</span>
                    </li>
                </a>

                <a href="setting.php">
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
                                <?php echo count($checkdata_sale); ?>
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
                            <?php echo count($checkdata_wisata); ?>
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

                    <?php
                        foreach($checkdata_turis as $value_data_turis)
                        {
                        
                    ?>

                        <div class="user-item">
                            <div class="user-picture">
                                <img src="images/admin_images.png" alt="">
                            </div>
                            <div class="user-info">
                                <p class="title">
                                    <?php echo $value_data_turis['nama_engkap']; ?>
                                </p>
                                <p class="sub-title">
                                    <?php echo $value_data_turis['bio']; ?>

                                </p>
                            </div>
                            <a href="#" class="btn btn-small-border btn-primary ">Profile</a>
                        </div>

                    <?php } ?>

                    
                   


                </div>


            </div>

            <div class="col-md-6">
                <div class="item-big-report col-md-12">
                    <p class="title">
                        <span class="title-blue">NEWEST</span> SOLD
                    </p>

                    <p class="sub-title">
                        USERS JUST BOUGHT TICKET
                    </p>

                    <a href="#" class="btn btn-primary-small btn-primary btn-primary-saya">See More</a>

                    <div class="divider-line"></div>

                    <?php
                        
                            foreach($checkdata_sale as $data_sale_final => $data_print_sale) {
                                $path_data_based_on_username = 'Users/'.$data_print_sale['username'];
                                $print_data_user_profile = $database->getReference($path_data_based_on_username)->getValue();

                                foreach($print_data_user_profile as $print_data_user_profile_final => $value_data_user_profile)
                                {}

                                


                            


                    ?>

                    <div class="user-item">
                        <div class="user-picture">
                            <img src="images/profile-2.png" alt="">
                        </div>
                        <div class="user-info">
                            <p class="title">
                                <?php echo $print_data_user_profile['nama_engkap']; ?>
                            </p>
                            <p class="sub-title">
                                <?php echo $print_data_user_profile['bio']; ?>
                            </p>
                        </div>
                        <a href="#" class="btn btn-small-border btn-primary ">Details</a>
                    </div>


                            <?php }?>




                </div>


            </div>


        </div>



    </div>


    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/main.js"></script>


</body>


</html>