
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="aside">
                <?php $this->load->view('advertisement/power_ads'); ?>
            </div>
            <div class="main-content">
                <h2 class="form-header">Contact Us</h2>
                    <form id="contact" action="#" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                            </div>
                        </div>
                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
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
