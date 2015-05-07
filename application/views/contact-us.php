
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="aside">
                <?php $this->load->view('advertisement/power_ads'); ?>
            </div>
            <div class="main-content">
                <h2 class="form-header">Contact Us</h2>
                <form id="contact" action="<?= base_url(); ?>welcome/contact_us" method="post" class="form" role="form">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <input class="form-control" id="email" name="phone" placeholder="Phone Number" type="text" required />
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Message" required rows="8"></textarea>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit">Send</button>
                            </form>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>










<?php $this->load->view('include/footer'); ?>
