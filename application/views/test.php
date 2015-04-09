<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Redirect after a time</title>
        <link href="<?= base_url(); ?>assets/css/sweet-alert.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/fine-uploader.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/fine-uploader.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>Hello, there!</h1>
        <h2>This is some content</h2>
        <p>The popup will open in <span id="seconds">5</span> seconds</p>

        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/jquery-lightbox.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweet-alert.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.fine-uploader.min.js"></script>
        <script>
            $(document).ready(function() {
                window.setInterval(function() {
                    var timeLeft = $("#timeLeft").html();
                    if (eval(timeLeft) == 0) {
                        // window.location = ("<?= base_url() ?>welcome");
                        $("#save").attr("disabled", true);
                    }
                    else if (eval(timeLeft) == 1) {
                        //           sweetAlert("Oops...", "Time expired", "error");
                        $("#timeLeft").html(eval(timeLeft) - eval(1));
                    }
                    else {
                        $("#timeLeft").html(eval(timeLeft) - eval(1));
                    }
                }, 1000);
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#restricted-fine-uploader').fineUploader({
                    request: {
                        endpoint: 'server/success.html'
                    },
                    multiple: false,
                    validation: {
                        allowedExtensions: ['jpeg', 'jpg', 'txt'],
                        sizeLimit: 1012000 // 50 kB = 50 * 1024 bytes
                    },
                    showMessage: function(message) {
                        // Using Bootstrap's classes
                        $('#restricted-fine-uploader').append('<div class="alert alert-error">' + message + '</div>');
                    }
                });
            });
        </script>
    <center>
        <h1>

            Time left:<span id="timeLeft">10</span>
            <form>
                <input type="text" name="a" /><br>
                <input type="text" name="b" /><br>
                <input type="text" name="c" /><br>
                <input id="save" type="submit" name="btn" value="Save"/>
            </form>

        </h1>
        <!--<p><img class='lightbox' src="<?= base_url() . UPLOAD_PATH; ?>laptop.jpg" > </p>-->
    </center>

</body>
</html>

<!-- Fine Uploader JS
====================================================================== -->
<script src="assets/fine-uploader.js"></script>


<!-- Fine Uploader DOM Element
====================================================================== -->
<div id="restricted-fine-uploader"></div>
<div class="restricted-fine-uploader"></div>
<div class="restricted-fine-uploader"></div>
<div class="restricted-fine-uploader"></div>

<!-- Fine Uploader template
====================================================================== -->
<script type="text/template" id="qq-template">
    <div class="qq-uploader-selector qq-uploader">
    <div class="qq-upload-drop-area-selector qq-upload-drop-area" qq-hide-dropzone>
    <span>Drop files here to upload</span>
    </div>
    <div class="qq-upload-button-selector qq-upload-button">
    <div>Upload a file</div>
    </div>
    <span class="qq-drop-processing-selector qq-drop-processing">
    <span>Processing dropped files...</span>
    <span class="qq-drop-processing-spinner-selector qq-drop-processing-spinner"></span>
    </span>
    <ul class="qq-upload-list-selector qq-upload-list">
    <li>
    <div class="qq-progress-bar-container-selector">
    <div class="qq-progress-bar-selector qq-progress-bar"></div>
    </div>
    <span class="qq-upload-spinner-selector qq-upload-spinner"></span>
    <span class="qq-edit-filename-icon-selector qq-edit-filename-icon"></span>
    <span class="qq-upload-file-selector qq-upload-file"></span>
    <input class="qq-edit-filename-selector qq-edit-filename" tabindex="0" type="text">
    <span class="qq-upload-size-selector qq-upload-size"></span>
    <a class="qq-upload-cancel-selector qq-upload-cancel" href="#">Cancel</a>
    <a class="qq-upload-retry-selector qq-upload-retry" href="#">Retry</a>
    <a class="qq-upload-delete-selector qq-upload-delete" href="#">Delete</a>
    <span class="qq-upload-status-text-selector qq-upload-status-text"></span>
    </li>
    </ul>
    </div>
</script>