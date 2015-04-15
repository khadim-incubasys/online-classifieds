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
