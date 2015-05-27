
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user"><?= $title; ?></h2>
                <div id="contact" class="form-user" role="form">
                    <h1>Coming Soon......</h1>
                    <div class="part">
                        <div class="stars" data-percent="45"></div><br>
                    </div>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<script>
    $(window).load(function () {
        var val=45;
        var style = '<style>.stars[data-percent="'+val+'"]:BEFORE {width:'+val+'%;}</style>';
        $('.part').append(style);
    });
</script>
<?php $this->load->view('include/footer'); ?>
