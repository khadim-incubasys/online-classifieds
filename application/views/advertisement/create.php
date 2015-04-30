
<?php $this->load->view('include/header'); ?>
<div class="wrapper">

    <form id="form" action="<?= base_url("advertisement/submit_ad"); ?>" method="post"  enctype="multipart/form-data" >
        <div class="main-wrap">
            <?php
            $categories = get_categories();
            $locations = get_locations();
            ?> 
            <div class="aside-new-ad">
                <h2>Ad Information</h2>
                <div class="holder">

                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <input class="form-control"  name="title" placeholder="Title" type="text" data-parsley-required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <select name="category" data-parsley-required class="form-control">
                                <option value="">Select Category</option>
                                <?php
                                if (isset($categories) && !empty($categories)) {
                                    foreach ($categories as $key => $val) {
                                        ?>
                                        <option value="<?= $val['title']; ?>"><?= $val['title']; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <input class="form-control"  name="price" placeholder="Price" type="number"  min="0" data-parsley-required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <select name="location" data-parsley-required class="form-control">
                                <option value="">Select Location</option>
                                <?php
                                if (isset($locations) && !empty($locations)) {
                                    foreach ($locations as $key => $val) {
                                        ?>
                                        <option value="<?= $val['title']; ?>"><?= $val['title']; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <input class="form-control"  name="stock" placeholder="Items in Stock" type="number"  min="0" data-parsley-required />
                        </div>
                    </div>
                    <textarea class="col-xs-8 col-md-12 form-group" id="message" name="description" placeholder="Description" rows="8" required=""></textarea>
                    <br />
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <button class="btn btn-primary pull-right " id="custom-btn" type="submit">Post</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="main-content-new-ad">
                <h2>Ad Images</h2>
                <div class="holder">
                    <div class="images-browse">
                        <input type="file" id="pict1" name="files[]" class="fileupload" >
                        <input type="hidden" id="image1" name="image1" class="image" />
                        <img class="image-view" src="" alt="image" />
                    </div>
                    <div class="images-browse">
                        <input type="file" id="pict2" name="files[]" class="fileupload" >
                        <input type="hidden" id="image2" name="image2" class="image" />
                        <img class="image-view" src="" alt="image" />
                    </div>
                    <div class="images-browse">
                        <input type="file" id="pict3" name="files[]" class="fileupload">
                        <input type="hidden" id="image3" name="image3" class="image" />
                        <img class="image-view" src="" alt="image" />
                    </div>
                    <div class="images-browse">
                        <input type="file" id="pict4" name="files[]" class="fileupload">
                        <input type="hidden" id="image4" name="image4" class="image" />
                        <img class="image-view" src="" alt="image" />
                    </div>
                    <br>
                </div>
            </div>

        </div>

    </form>
</div>

<script>
   

</script>

<?php $this->load->view('include/footer'); ?>