<html>
    <head>
        <title>Manage Wisata -TiketSaya</title>
        <meta charset="UTF-8">
        <meta name="description" content="Manage Wisata TiketSaya Admin">
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
                        Candi
                    </H1>
                    <nav aria-label="breadcrumb" >
                        <ol class="breadcrumb" style="background: none; margin-left: -13px;">
                          <li class="breadcrumb-item"><a style="color: #C7C7C7;" href="wisata.html">Wisata</a></li>
                          <li class="breadcrumb-item active"  style="color: #21272C;" aria-current="page">Detail Wisata</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row report-group">
                <div class="col-md-12">
                    <div class="item-big-report col-md-12">
                        
                        <div class="row">
                            <div class="overlay-box col-md-4">
                                <a href="#" id="open_file" class="btn btn-secondary btn-third btn-primary-saya btn-secondary-saya">Replace</a>
                            </div>
                            <div style="padding-left: 50px; " class="col-md-6">
                                <p class="lable-thumb">
                                    Thumbnail Wisata
                                </p>
                                <img class="thumb-wisata" src="images/admin_images.png" alt="">
                            </div>

                            <div class="col-md-5">
                                <form>

                                    <div class="form-group form-user">
                                      <label class="title-input-primary-saya" for="exampleInputEmail1">Nama Wisata</label>
                                      <input type="text" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Wisata">
                                    </div>
                                    <div class="form-group">
                                      <label class="title-input-primary-saya" for="exampleInputPassword1">Lokasi</label>
                                      <input type="text" class="form-control input-type-primary-saya" id="exampleInputPassword1" placeholder="Magelang, Yogyakarta">
                                    </div>
                                    <div class="form-group form-user">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="title-input-primary-saya" for="exampleInputEmail1">Harga Tiket (US$)</label>
                                                <input type="number" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="209"> 
                                            </div>

                                            <div class="col-md-6">
                                                <label class="title-input-primary-saya" for="exampleInputEmail1">Tanggal</label>
                                                <input type="date" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 22, 2019"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" style="margin-top: -20px;">
                                        <label class="title-input-primary-saya" for="exampleFormControlTextarea1" class="form-label">Ketentuan</label>
                                        <textarea class="input-type-primary-saya form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group" >
                                        <label class="title-input-primary-saya" for="exampleFormControlTextarea1" class="form-label">Short Description</label>
                                        <textarea class="input-type-primary-saya form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group form-user">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="title-input-primary-saya" for="exampleInputEmail1">has wifi?</label>
                                                <input type="text" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No"> 
                                            </div>

                                            <div class="col-md-4">
                                                <label class="title-input-primary-saya" for="exampleInputEmail1">has Spot?</label>
                                                <input type="number" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12"> 
                                            </div>

                                            <div class="col-md-4">
                                                <label class="title-input-primary-saya" for="exampleInputEmail1">has Festival?</label>
                                                <input type="text" class="form-control input-type-primary-saya" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Festival"> 
                                            </div>
                                        </div>
                                    </div>

                                    <div style="visibility: hidden;margin-top: -40px;" class="from-group content-sign-in">
                                        <input id="image_file" type="file"/>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-primary-saya">Update</button>
                                    <button style="margin-left: 10px;" type="reset" class="btn btn-secondary btn-primary-saya btn-secondary-saya">Cancel</button>
                                </form>
                            </div>
                        </div>


                    </div>
                    

                </div>
                
            </div>

            

        </div>
        

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/main.js"></script>


    </body>


</html>