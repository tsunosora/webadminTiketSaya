<html>
    <head>
        <title>Add New User -TiketSaya</title>
        <meta charset="UTF-8">
        <meta name="description" content="Sales Detail TiketSaya Admin">
        <meta name="keywords" content="tiketsaya, Web Sales Detail, Login Tiket Saya">
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

                    <div class="item-menus inactive">

                        <a href="wisata.html" class="">

                            <div class="icon-item-menu">
                                <i class="fas fa-globe"></i>
                            </div>
                        </a>
                        
                    </div>

                    <div class="item-menus">

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
                        <li >
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
                        Details
                    </H1>
                    <nav aria-label="breadcrumb" >
                        <ol class="breadcrumb" style="background: none; margin-left: -13px;">
                          <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="customers.html">Customers</a></li>
                          <li class="breadcrumb-item active"  style="color: #21272C;" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row report-group">
                <div class="col-md-12">
                    <div class="item-big-report col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-bottom: 30px;" class="wrap-user-picture">
                                    <img src="images/icon_nopic.png" alt="">
                                </div>
                            </div>

                            <div class="col-md-10">
                                <form>

                                    <div class="form-group form-user">
                                      <label class="title-input-primary-saya" for="form-user">Nama Pengguna</label>
                                      <input type="text" class="form-control input-type-primary-saya" id="form-user" aria-describedby="emailHelp" placeholder="Nama Wisata">
                                    </div>
                                    <div class="form-group">
                                      <label class="title-input-primary-saya" for="exampleInputEmail1">Email Address</label>
                                      <input type="email" class="form-control input-type-primary-saya" id="exampleInputEmail1" placeholder="email@gmail.com">
                                    </div>
                                    <div class="form-group">
                                      <label class="title-input-primary-saya" for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control input-type-primary-saya" id="exampleInputPassword1" placeholder="123">
                                    </div>
                                    <div class="form-group form-user">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="title-input-primary-saya" for="textarea">Bio</label>
                                                <input type="text" class="form-control input-type-primary-saya" id="textarea" aria-describedby="emailHelp" placeholder="Olahraga"> 
                                            </div>
                                            <div class="col-md-6">
                                                <label class="title-input-primary-saya" for="number">Balance (US$)</label>
                                                <input type="number" class="form-control input-type-primary-saya" id="number" aria-describedby="emailHelp" placeholder="209"> 
                                            </div>
                                        </div>
                                    </div>


                                    

                                    <div style="visibility: hidden;margin-top: -40px;" class="from-group content-sign-in">
                                        <input id="image_file" type="file"/>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-primary-saya">Update</button>
                                    <button style="margin-left: 10px; width: 50px;" type="reset" class="btn btn-secondary btn-primary-saya btn-secondary-saya"><i class="fas fa-undo-alt"></i></button>
                                    <a href="customers.html" style="margin-left: 10px;" class="btn btn-secondary btn-primary-saya btn-secondary-saya">Cancel</a>
                                </form>
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