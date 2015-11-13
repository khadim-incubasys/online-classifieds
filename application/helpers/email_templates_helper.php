<?php

function email_test($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = '<h3>Testing</h3>';
    $body = $body . 'Your have received a test email by Admin. <br>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;



    $data['subject'] = 'Test email';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_registration($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = "<h2>Dear Mr./Ms. " . $email_data['name'] . ",</h2>";
    $body = $body . '<h3 style="margin-left:150px;">You have been registered in <strong>' . APP_TITLE . '</strong> </h3>';
    $body = $body . '<h3>Your Login passsword: <strong>' . $email_data['password'] . '</strong> </h3>';
    $body = $body . '<h3>Please verify your registrations <a href="' . base_url("user/verify_registration") . '/' . $email_data['token'] . '"><strong>Verify here</strong></a> </h3>';
    $body = $body . 'For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;



    $data['subject'] = 'User Registration';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_contact_to_buy($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $seller = $email_data['seller'];
    $buyer = $email_data['buyer'];
    $ad = $email_data['ad'];
    $body = '<div style="font-size:20px">Mr./Ms. ' . $seller->name . ",</div>";
    $body = $body . '<div style="margin-left:150px;">As you posted AD in <strong>' . APP_TITLE . '</strong> </div>';
    $body = $body . '<div>Mr./Ms. <strong>' . $buyer->name . '</strong> has contacted you to purchase your following AD </div>';
    $body = $body . ' <div>AD Id#: <strong><a href="' . base_url() . 'advertisement/view/' . $ad['id'] . '">' . $ad['id'] . '</strong></a></div>';
    $body = $body . ' <div>AD Title: <strong>' . $ad['title'] . '</strong></div>';
    $body = $body . '<div style="font-size:19px">Buyer Contact Details:</div>';
    $body = $body . ' <div>Name: <strong>' . $buyer->name . '</strong></div>';
    $body = $body . ' <div>Email: <strong>' . $buyer->email . '</strong></div>';
    $body = $body . ' <div>Phone: <strong>' . $buyer->phone . '</strong></div';
    if (!empty($email_data['alt_email']))
        $body = $body . ' <div>Alternative Email: <strong>' . $email_data['alt_email'] . '</strong></div>';
    if (!empty($email_data['alt_phone']))
        $body = $body . ' <div>Message: <strong>' . $email_data['alt_phone'] . '</strong></div>';
    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $seller->email;
    $data['cc'] = $buyer->email;
    $data['to_name'] = $seller->email;
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Notification';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_password_changed($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<div style="font-size:20px"> Dear Mr./Ms. ' . $email_data['name'] . ",</div>";
    $body = $body . '<div style="margin-left:150px;">your <strong> password </strong> has been changed in <strong>' . APP_TITLE . '</strong> </div>';
    $body = $body . '<div style="margin-left:150px;">Your new password is :  <strong>' . $email_data['password'] . '</strong></div>';

    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = $email_data['email'];
    $data['to_name'] = $email_data['name'];
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;



    $data['subject'] = 'Password Changed';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_contact_us($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');
    $body = '<div style="font-size:20px"> Hi Admin!</div>';
    $body = $body . '<div style="margin-left:150px;">Mr./Ms <strong> ' . $email_data['name'] . ' </strong> has leave a message for you from your website <strong>' . APP_TITLE . '</strong> </div>';
    $body = $body . '<div style="margin-left:150px;"><strong>Message Details :</strong></div>';

    $body = $body . '<div style="margin-left:150px;">Name: <strong>' . $email_data['name'] . ' </strong></div>';
    $body = $body . '<div style="margin-left:150px;">Email:<strong>' . $email_data['email'] . ' </strong></div>';
    $body = $body . '<div style="margin-left:150px;">Phone:<strong>' . $email_data['phone'] . ' </strong></div>';
    $body = $body . '<div style="margin-left:150px;">Message:<strong>' . $email_data['message'] . ' </strong></div>';

    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = ADMIN_EMAIL;
    $data['to_name'] = ADMIN_NAME;
    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['cc'] = $email_data['cc'];



    $data['subject'] = 'New Message';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}
