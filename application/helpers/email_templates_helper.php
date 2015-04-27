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

    $body = '<h2>Registration</h2>';
    $body = $body . '<h3>You have been registered in <strong>'.APP_TITLE.'</strong> </h3>';
      $body = $body . '<h3>Your Login passsword: <strong>'.$email_data['password'].'</strong> </h3>';
    $body = $body . '<h3>Please verify your registrations <a href="'.  base_url("user/verify_registration").'/'.$email_data['token'].'"><strong>Verify here</strong></a> </h3>';
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
