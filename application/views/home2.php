
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="col-md-3 column">
            <h2>
                <a href="<?= base_url() . 'category/view/laptop' ?>" >Title </a>
            </h2>
            <div class="image-wrap">
                <a href="#" >
                    <img class="ad-img" src="<?= base_url() . UPLOAD_PATH . 'laptop1.jpg'; ?>" alt="" class="img-responsive">
                </a>
            </div>
            <p>
                Details, this is sample <a class="btn" href="#">View details »</a>
            </p>
        </div>

    </div>
    <div class="pagination">
        <ul>
            <li><a href="#">Prev</a></li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">Next</a></li>
        </ul>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
