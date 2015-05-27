
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="main-wrap">
        <div class="aside">
            <?php $this->load->view('advertisement/power_ads'); ?>
        </div>
        <div class="main-content" id="results">
            
                <?php $this->load->view("advertisement/search_partial", array("ads" => $ads)); ?>
        </div>

    </div>
    <?php if ($ads && !empty($ads)) { ?>
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
    <?php } ?> 
</div>
<?php $this->load->view('include/footer'); ?>