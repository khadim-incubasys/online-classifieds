<div class="modal fade register-popup" id="resgiterModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Register <center><span class="pop-error"></span></center></h4>
            </div>

            <div class="modal-body">
                <form id="register_form" action="<?= base_url(); ?>user/register" method="post" class="form-horizontal">

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Name</label>
                        <div class="col-xs-5">
                            <input name="name" type="text" required="" data-parsley-minlength="3" data-parsley-mazlength="20" class="form-control" placeholder="Name" />
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="email" data-parsley-type="email" class="form-control" required="" name="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Phone</label>
                        <div class="col-xs-5">
                            <input name="phone" type="tel" required="" data-parsley-minlength="6" data-parsley-mazlength="20" class="form-control" placeholder="Phone Number"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Country</label>
                        <div class="col-xs-5">
                            <input name="country" type="text" required="" data-parsley-minlength="6" data-parsley-mazlength="20" class="form-control" placeholder="Country" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">City</label>
                        <div class="col-xs-5">
                            <input name="city" type="text" required="" data-parsley-minlength="6" data-parsley-mazlength="20" class="form-control" placeholder="City" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Address</label>
                        <div class="col-xs-5">
                            <input name="address" type="text" required="" data-parsley-minlength="6" data-parsley-mazlength="20" class="form-control" placeholder="Address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Picture</label>
                         <div class="col-xs-5">
                             <input type="file" id="pict1" name="files[]" class="fileupload">
                        <input type="hidden" id="image1" name="image1" class="image" />
                        <img class="dp-browse" src="" alt="image" />
                         </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" id="register-btn" class="btn btn-primary">Register</button>
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
