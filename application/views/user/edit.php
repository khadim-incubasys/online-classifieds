
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="row clearfix">
        <div class="main-wrap">
            <div class="user-content">
                <h2 class="form-header-user"><?= $title;?>
                <?php $this->load->view('message'); ?>
                </h2>
                <div id="contact" class="form-user" role="form">
                    <form action="<?= base_url(); ?>user/edit_me" method="post" id="form">
                        <input type="hidden" name="id" value="<?= $user->id ?>" />
                        <div class="row">
                            <div class="col-xs-4 form-group">
                                <img class="dp-img img-responsive" src="<?= base_url() . UPLOAD_PATH . $user->image_url; ?>" alt="" >
                                <input type="file" id="pict2" name="files[]" class="fileupload" >
                                <input type="hidden" id="image2" name="image1" class="image" />
                            </div>
                            <input class="edit-me"  name="name" placeholder="Name" value="<?= $user->name; ?>" type="text" data-parsley-required />
                            <input class="edit-me" disabled="disabled"  name="email" placeholder="Email" value="<?= $user->email; ?>" type="text" data-parsley-required />
                            <input class="edit-me"  name="phone" placeholder="Phone" value="<?= $user->phone; ?>" type="text" data-parsley-required />
                            <input class="edit-me"  name="city" placeholder="City" value="<?= $user->city; ?>" type="text" data-parsley-required />
                            <input class="edit-me"  name="country" placeholder="Country" value="<?= $user->country; ?>" type="text" data-parsley-required />
                            <input class="edit-me"  name="address" placeholder="Address" value="<?= $user->address; ?>" type="text" data-parsley-required />
                        </div>


                        <br />
                        <div class="row">
                            <div class="col-xs-10 form-group">
                                <input type="submit" class="btn btn-primary pull-right " id="custom-btn" value="Save"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php $this->load->view('user/side-bar'); ?>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer'); ?>
