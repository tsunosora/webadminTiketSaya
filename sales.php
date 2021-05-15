<html>
    <head>
        <title>Sales -TiketSaya</title>
        <meta charset="UTF-8">
        <meta name="description" content="Sales TiketSaya Admin">
        <meta name="keywords" content="tiketsaya, Web Sales, Login Tiket Saya">
        <meta name="author" content="dotdesain">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">



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

                    <div class="item-menus">

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

                        <a href="customer.html" class="">
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
                    <a href="dashboard.html" >
                        <li>
                            My Dasboard
                        </li>
                    </a>

                    <a href="sales.html">
                        <li class="active-link">
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
                        Ticket Sales
                    </H1>
                    <h2 class="sub-header-title">
                        The items are bought around the world
                    </h2>
                </div>
            </div>

            <div class="row report-group">
                <div class="col-md-12">
                    <div class="item-big-report col-md-12">
                        <table class="table-tiketsaya table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Nama User</th>
                                    <th scope="col">Jumlah Wisata</th>
                                    <th scope="col">Sisa Balance</th>
                                    <th scope="col">Menu</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td scope="row">
                                        <div class="user-table-item">
                                            <img src="images/profile-2.png" alt="">
                                        </div>
                                    </td>
                                    <td>Mark balley</td>
                                    <td>2 Place</td>
                                    <td>US$ 109</td>
                                    <td>
                                        <a href="sales_detail.html" class="btn btn-small-sales btn-small-border btn-primary">Details</a>
                                    </td>
                                </tr>

                                

                            </tbody>
                        </table>
                    </div>
                    

                </div>
                
            </div>

            

        </div>
        

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/main.js"></script>


    </body>


</html>