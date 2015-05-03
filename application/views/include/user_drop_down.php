<li class="dropdown">
    <?php
    $user = $this->session->userdata("user");
    ?>
    <a href="<?= base_url(); ?>user/me" class="dropdown-toggle" data-toggle="dropdown"><img class="profile-img" src="<?= base_url() . UPLOAD_PATH . $user->image_url; ?>" alt=""><strong class="user-name"><?= $user->name; ?></strong> <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li>
            <a href="<?= base_url() ?>user/me">me</a>
        </li>
        <li>
            <a href="<?= base_url() ?>user/my_ads">My ADs</a>
        </li>
        <li>
            <a href="<?= base_url() ?>user/settings">Settings</a>
        </li>
        <li>
            <a href="<?= base_url() ?>user/change_password">Change Password</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="<?= base_url() ?>user/logout">Logout</a>
        </li>
    </ul>
</li>