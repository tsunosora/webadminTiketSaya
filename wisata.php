<html>
    <head>
        <title>Wisata -TiketSaya</title>
        <meta charset="UTF-8">
        <meta name="description" content="Wisata TiketSaya Admin">
        <meta name="keywords" content="tiketsaya, Web Wisata, Login Tiket Saya">
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

                    <div class="item-menus inactive">

                        <a href="sales.html" class="">
                            <div class="icon-item-menu">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                        </a>
                        
                    </div>

                    <div class="item-menus">

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
                        <li>
                            Ticket Sales
                        </li>
                    </a>

                    <a href="wisata.html">
                        <li class="active-link">
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
                        Manage Wisata
                    </H1>
                    <h2 class="sub-header-title">
                        The place where the products were born
                    </h2>
                </div>
            </div>

            <div class="row report-group">
                <div class="col-md-12">
                    <div class="item-big-report col-md-12">
                        <table class="table-wisata table-tiketsaya table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Wisata</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Harga Tiket</th>
                                    <th scope="col">Menu</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Monas</td>
                                    <td>Jakarta, Indonesia</td>
                                    <td>January 22, 2019</td>
                                    <td>US$ 20</td>
                                    <td>
                                        <a href="manage_wisata.html" class="btn btn-small-sales btn-small-border btn-primary">Details</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Candi</td>
                                    <td>Magelang, Indonesia</td>
                                    <td>november 22, 2021</td>
                                    <td>US$ 220</td>
                                    <td>
                                        <a href="manage_wisata.html" class="btn btn-small-sales btn-small-border btn-primary">Details</a>
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