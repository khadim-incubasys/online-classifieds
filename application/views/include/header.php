<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="jumbotron header">
                        
                        <div class="top-bar">
                            <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="<?= base_url() ?>user/settings" class="dropdown-toggle" data-toggle="dropdown"><img class="profile-img" src="<?= base_url() . UPLOAD_PATH . 'laptop.jpg' ?>" alt=""><strong class="user-name">Khadim Raath </strong></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?= base_url() ?>user/me">me</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>user/my_ads">My ADs</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>user/settings">Settings</a>
                                    </li>
                                    <li class="divider">
                                    </li>
                                    <li>
                                        <a href="<?= base_url() ?>user/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        </div>
                        
                        <div class="holder">
                                <h1>
                               <a href="<?= base_url() ?>welcome">
                               Online Classifieds
                               </a>
                           </h1>
                           <p>
                               Nice way to sale and purchase goods 
                           </p>
                           <ul class="nav navbar-nav new-ad">
                               <li>
                                   <a class="new-link" href="#"><span class="plus-icon">+</span> Submit Ad</a>
                               </li>
                           </ul>
                        </div>
                       

                    </div>
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> 

                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group form-inline">
                                    <label for="below-range">Price Range:</label>
                                    <input type="number" class="form-control price-range" name="below-range" />
                                    --
                                    <input type="number" name="up-range" class="form-control price-range"/>
                                </div>      
                                <div class="form-group">
                                    <label for="location">Location:</label>
                                    <select name="location" id="select-location" class="form-control form-inline">
                                        <option value="1">Lahore</option>
                                        <option value="2">Islamabad</option>
                                        <option value="3">Peshawar</option>
                                        <option value="4">Karachi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category:</label>
                                    <select name="category" id="select-category" class="form-control form-inline">
                                        <option value="1">Laptops</option>
                                        <option value="2">Mobiles</option>
                                        <option value="3">Accessories</option>
                                        <option value="4">Cats</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="search-text" class="form-control search-text">
                                </div>
                                <button type="submit" class="btn btn-default">Search</button>
                            </form>

                        </div>

                    </nav>

                </div>
            </div>