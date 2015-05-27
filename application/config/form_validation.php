<?php

$config = array(
    
    'create_user' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_eamil'
        ),
        array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'phone',
            'label' => 'phone',
            'rules' => 'trim|required'
        ),
        
    )
);
