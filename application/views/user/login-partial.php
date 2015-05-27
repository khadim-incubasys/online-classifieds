<div class="modal fade login-popup" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Login<?php $this->load->view('message'); ?></h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="login_form" action="<?= base_url(); ?>user/login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email</label>
                        <div class="col-xs-5">
                            <input type="email" data-parsley-type="email" class="form-control" required="" name="email" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" required="" data-parsley-minlength="6" data-parsley-mazlength="20" class="form-control" name="password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" id="login-btn" class="btn btn-primary">Login</button>
                            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

