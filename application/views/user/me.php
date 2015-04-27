
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user">ME</h2>
                <?php 
                $user=$this->session->userdata("user");
                ?>
                <div id="contact" class="form-user" role="form">
                    <div class="row">
                        <div class="col-xs-6 form-group">

                            <ul class="demo-2 effect">
                                <li>
                                    <input type="button" class="btn-primary btn upload" value="upload" name="upload profile" />
                                </li>
                                <li><img class="dp-img img-responsive"  src="<?= base_url() . UPLOAD_PATH . 'me.jpg'; ?>" alt=""/></li>
                            </ul>


<!--                            <img class="dp-img img-responsive" src="<?= base_url() . UPLOAD_PATH . 'cat.jpg'; ?>" alt="" >-->
                        </div>
                      
                            <h2> <?= $user->name;?></h2>
                            <h5> <?= $user->email;?> </h5>
                            <h5><?= $user->phone?></h5>
                     
                    </div>
                    
                    <h5><?= $user->city?> , <?= $user->country?></h5>
                    <h5><?= $user->address?></h5>
                    <br />
                    <div class="row">
                        <div class="col-xs-6 col-md-10 form-group">
                            <button class="btn btn-primary pull-right " id="custom-btn">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
