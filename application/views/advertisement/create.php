
<?php $this->load->view('include/header'); ?>
<div class="wrapper">
    <div class="container">
        <h1>
            <input type="search" class="input-group" name="name" />
            <input type="button"  value="search" />
        </h1>
        <div id="body">
            <form action="#">
                <input type="text" placeholder="Name" name="name" />
                <input type="text" placeholder="Email" name="email" />
                <input type="submit" name="Save" />
            </form>    
        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p></div>
</div>
<?php $this->load->view('include/footer'); ?>