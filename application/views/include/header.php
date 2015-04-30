<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/sweet-alert.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweet-alert.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.iframe-transport.js" charset="UTF-8"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.fileupload.js" charset="UTF-8"></script>
    </head>

    <body>
        <input type="hidden" id="base_url" name="base_url" value="<?= base_url(); ?>" />
        <?php
        $categories = get_categories();
        $locations = get_locations();
        ?>
        <div class="container">
            <div class="row clearfix h-holder">
                <div class="col-md-12 column">
                    <div class="jumbotron header">

                        <div class="top-bar">
                            <ul class="nav navbar-nav navbar-right">

                                <?php
                                if (is_logged_in()) {
                                    $this->load->view("include/user_drop_down");
                                } else {
                                    ?>
                                    <div id="enter_links" class="text-center">
                                        <a href="<?= base_url(); ?>user/register">Register</a>
                                        <span id="devider" >|</span>
                                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                                    </div>
                                    <?php
                                }
                                ?>
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
                                    <a class="new-link" href="<?= base_url(); ?>advertisement/submit_ad"><span class="plus-icon">+</span> Submit Ad</a>
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
                            <form method="get" action="<?= base_url(); ?>advertisement/search">
                                <div class="navbar-form navbar" role="search">
                                    <div class="form-group form-inline">
                                        <label for="below-range">Price Range:</label>
                                        <input type="number" class="form-control price-range"  min="0"
                                               value="<?= (isset($below_range) && !empty($below_range)) ? $below_range : "" ?>"
                                               placeholder="From" name="below-range" />
                                        --
                                        <input type="number" name="up-range" min="0"
                                               value="<?= (isset($up_range) && !empty($up_range)) ? $up_range : "" ?>"
                                               placeholder="To" class="form-control price-range"/>
                                    </div>      
                                    <div class="form-group">
                                        <label for="location">Location:</label>
                                        <select name="location" class="form-control form-inline">
                                            <option value="">Select</option>
                                            <?php
                                            if (isset($locations) && !empty($locations)) {
                                                foreach ($locations as $key => $val) {
                                                    ?>
                                                    <option value="<?= $val['title']; ?>" <?= (isset($location) && $location == $val['title']) ? 'selected="selected"' : "" ?> ><?= $val['title']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category:</label>
                                        <select name="category" class="form-control form-inline">
                                            <option value="">Select</option>
                                            <?php
                                            if (isset($categories) && !empty($categories)) {
                                                foreach ($categories as $key => $val) {
                                                    ?>
                                                    <option value="<?= $val['title']; ?>" <?= (isset($category) && $category == $val['title']) ? 'selected="selected"' : "" ?>><?= $val['title']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="search-text"
                                               value="<?= (isset($search_text) && !empty($search_text)) ? $search_text : "" ?>"
                                               placeholder="Search Ad here" class="form-control search-text">
                                    </div>
                                    <button type="submit" class="btn btn-default search-btn" >Search</button>
                                </div>
                            </form>
                        </div>

                    </nav>

                </div>
            </div>