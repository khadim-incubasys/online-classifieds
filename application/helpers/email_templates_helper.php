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

function email_contact_us($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = $body . '<h1><strong> Mr./Ms. ' . $email_data['name'] . '</strong> contacted you. </h1>';
    $body = $body . '<h2>Contact details are:</h2>';
    $body = $body . '<h3>Name:  ' . $email_data['name'] . '</h3>';
    $body = $body . '<h3>Username:  ' . $email_data['username'] . '</h3>';
    $body = $body . '<h3>Email: ' . $email_data['email'] . '</h3>';
    $body = $body . '<h3>Phone: ' . $email_data['phone'] . '</h3>';
    $body = $body . '<h4>Comment    :' . $email_data['comments'] . '</h4>';
    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] =(isset($email_data['email_to'])?$email_data['email_to']:ADMIN_EMAIL);
    $data['to_name'] = ADMIN_NAME;

    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = 'Notification';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}

function email_log_ticket($email_data) {
    $CI = & get_instance();
    $CI->load->helper('email_sender');

    $body = $body . '<h1><strong> Mr./Ms. ' . $email_data['name'] . '</strong> logged a new ticket.  </h1>';
    $body = $body . '<h2>Ticket details are:</h2>';
    $body = $body . '<h3>Name:  ' . $email_data['name'] . '</h3>';
    $body = $body . '<h3>Username:  ' . $email_data['username'] . '</h3>';
    $body = $body . '<h3>Email: ' . $email_data['email'] . '</h3>';
    $body = $body . '<h3>Phone: ' . $email_data['phone'] . '</h3>';
    $body = $body . '<h3><strong>Severity:  ' . $email_data['severity'] . '</strong> </h3>';
    $body = $body . '<h4>Comment    :' . $email_data['comments'] . '</h4>';
    $body = $body . '<br>For more information clicke here  ' . base_url();
    $body = $body . '<hr>';
    $body = $body . 'You have received this notification because you have either subscribed to it, or are involved in it.
            To change your notification preferences, please click here: http://hostname/my/account';
    // setting parameters in array
    $data = array();
    $data['to'] = (isset($email_data['email_to'])?$email_data['email_to']:ADMIN_EMAIL);
    $data['to_name'] = ADMIN_NAME;

    $data['from'] = ADMIN_EMAIL;
    $data['from_name'] = ADMIN_NAME;
    $data['from_pass'] = ADMIN_EMAIL_PASSWORD;
    $data['subject'] = APP_NAME . ' Ticket';
    $data['body'] = $body;
    // calling function in email_sender_helper
    mail_me($data);
    return TRUE;
}
