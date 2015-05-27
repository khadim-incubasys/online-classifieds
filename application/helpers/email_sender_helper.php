<?php
use PhpAmqpLib\Connection\AMQPConnection;
use PhpAmqpLib\Message\AMQPMessage;

function mail_me($email_data) {
    $exchange = 'emailer';
    $queue = 'classifieds_emails';

    $conn = new AMQPConnection(RMQHOST, RMQPORT, RMQUSER, RMQPASS, RMQVHOST);
    $ch = $conn->channel();
    
    $ch->queue_declare($queue, false, true, false, false);


    $ch->exchange_declare($exchange, 'direct', false, true, false);

    $ch->queue_bind($queue, $exchange);

    $msg_body = json_encode($email_data);
    $msg = new AMQPMessage($msg_body, array('content_type' => 'text/plain', 'delivery_mode' => 2));
    $ch->basic_publish($msg, $exchange);

    $ch->close();
    $conn->close();
}





