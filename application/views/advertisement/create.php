
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
                            <input class="form-control"  name="price" placeholder="Price" type="number"  min="0" data-parsley-required autofocus />
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

                    <br />
                    <div class="row">
                        <div class="col-xs-8 col-md-12 form-group">
                            <button class="btn btn-primary pull-right " id="custom-btn" type="submit">Post</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="main-content-new-ad">
                <h2></h2>
                <div class="holder">
                    <!--<input id="browse-img" type="file" name="image" class="form-control" />-->
                    <input type="file" id="pict1" name="files[]" class="fileupload form-control">
                    <input type="hidden" id="image1" name="image1" class="image" />
                    <br>
                    <img id="pict1" src="" alt="image" />
                    <img id="pict2" src="" alt="image" />
                    <img id="pict3" src="" alt="image" />
                </div>
            </div>

        </div>

    </form>
</div>
<span style="display: none;" id="base_url"><?= base_url(); ?></span>

<script>
    var base_url = $("#base_url").text();
    var url = base_url + "advertisement/upload_image";
    console.log(url);
    $('.fileupload').fileupload({
        url: url,
        dataType: 'json',
        acceptFileTypes: /(\.|\/)(jpg|jpeg|png)$/i,
        autoUpload: true,
        add: function(e, data) {
            data.submit();
        },
        done: function(e, data) {
            $(this).siblings('input[type="hidden"]').val(data.result.files[0]['name']);
        },
        fail: function(e) {
            console.log(e);
        }
    }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');

</script>

<?php $this->load->view('include/footer'); ?>