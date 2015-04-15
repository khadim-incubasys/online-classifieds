<?php

$config = array(
    'add_edit_default' => array(
        array(
            'field' => 'vehicle_make',
            'label' => 'vehicle make',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'currency',
            'label' => 'currency',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'red_warning',
            'label' => 'red warning',
            'rules' => 'trim|required|integer|min_length[' . NUM_FIELDS_LIMIT_MIN . ']|max_length[' . NUM_FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'call_back_days',
            'label' => 'call back days',
            'rules' => 'trim|required|integer|min_length[' . NUM_FIELDS_LIMIT_MIN . ']|max_length[' . NUM_FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'language',
            'label' => 'language',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'country',
            'label' => 'country',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'amber_warning',
            'label' => 'amber warning',
            'rules' => 'trim|required|integer|min_length[' . NUM_FIELDS_LIMIT_MIN . ']|max_length[' . NUM_FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'mpi_options',
            'label' => 'mpi options',
            'rules' => 'trim|required'
        )
    ),
    'add_site' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[' . TITLE_LIMIT_MIN . ']|max_length[' . TITLE_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'address',
            'label' => 'address',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'street',
            'label' => 'street',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'area',
            'label' => 'area',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'city',
            'label' => 'city',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'state',
            'label' => 'state',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'zip',
            'label' => 'zip',
            'rules' => 'trim|required|integer|greater_than[' . NUMBER_MIN . ']|less_than[' . NUMBER_MAX . ']|min_length[' . ZIP_LIMIT_MIN . ']|max_length[' . ZIP_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'country',
            'label' => 'country',
            'rules' => 'trim|required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'phone',
            'label' => 'phone',
            'rules' => 'trim|required|min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|numeric'
        ),
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'trim|required|valid_eamil|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        )
    ),
    "add_dealer" => array(
        array(
            'field' => 'name',
            'label' => 'Dealer Name',
            'rules' => 'required|trim|max_length[' . TITLE_LIMIT_MAX . ']|callback_dealername_check'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'street',
            'label' => 'Street',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'area',
            'label' => 'Area',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'zip',
            'label' => 'Zip',
            'rules' => 'min_length[' . ZIP_LIMIT_MIN . ']|max_length[' . ZIP_LIMIT_MAX . ']|required|numeric|trim'
        ),
        array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|required|trim|numeric'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim'
        )
    ),
    "edit_user" => array(
        array(
            'field' => 'dealer_id',
            'label' => 'Dealer ID',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'id',
            'label' => 'id',
            'rules' => 'required|trim|numeric'
        ),
        array(
            'field' => 'user_group',
            'label' => 'User Group',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|valid_email||min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'preferred_language',
            'label' => 'Preferred Language',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'site_name',
            'label' => 'Site Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'employee_id',
            'label' => 'Employee Id',
            'rules' => 'required|trim|alpha_numeric|min_length[' . EMPLOYEE_ID_LIMIT_MIN . ']|max_length[' . EMPLOYEE_ID_LIMIT_MAX . ']'
        )
    ),
    "add_user" => array(
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'required|trim|is_unique[users.username]|regex_match[/^[a-zA-Z0-9]+$/]'
        ),
        array(
            'field' => 'user_group',
            'label' => 'User Group',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim'
        ),
        array(
            'field' => 'preferred_language',
            'label' => 'Preferred Language',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'employee_id',
            'label' => 'Employee Id',
            'rules' => 'required|trim|alpha_numeric|is_unique[users.employee_id]'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[' . PASSWORD_MIN_LEN . ']|max_length[' . PASSWORD_MAX_LEN . ']'
        )
    ),
    "contact-us" => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'require|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|trim|min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|numeric'
        ),
        array(
            'field' => 'comments',
            'label' => 'Comments',
            'rules' => 'required|trim|min_length[' . COMMENT_LIMIT_MIN . ']|max_length[' . COMMENT_LIMIT_MAX . ']'
        )
    )
    ,
    "log_ticket" => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']|trim'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|trim|min_length[' . FIELDS_LIMIT_MIN . ']|max_length[' . FIELDS_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|trim|min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|numeric'
        ),
        array(
            'field' => 'comments',
            'label' => 'Comments',
            'rules' => 'required|trim|min_length[' . COMMENT_LIMIT_MIN . ']|max_length[' . COMMENT_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'severity',
            'label' => 'Severity',
            'rules' => 'required|trim'
        )
    ), "add_customer" => array(
        array(
            'field' => 'name',
            'label' => 'Customer Name',
            'rules' => 'required|trim|max_length[' . TITLE_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'preferred_language',
            'label' => 'Preferred Language',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'area',
            'label' => 'Area',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'zip',
            'label' => 'Zip',
            'rules' => 'min_length[' . ZIP_LIMIT_MIN . ']|max_length[' . ZIP_LIMIT_MAX . ']|required|numeric|trim'
        ),
        array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|required|trim|is_unique[customers.phone]|numeric'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim'
        ),
        array(
            'field' => 'make',
            'label' => 'Make',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'model',
            'label' => 'Model',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'fuel_type',
            'label' => 'Fuel Type',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'registration_no',
            'label' => 'Plate No',
            'rules' => 'required|trim|is_unique[vehicles.registration]'
        ),
        array(
            'field' => 'chassis_no',
            'label' => 'Chassis No',
            'rules' => 'required|trim|is_unique[vehicles.chassis_no]'
        ),
        array(
            'field' => 'engine_size',
            'label' => 'Engine Size',
            'rules' => 'required|trim|numeric'
        )
    ), "edit_customer" => array(
        array(
            'field' => 'name',
            'label' => 'Customer Name',
            'rules' => 'required|trim|max_length[' . TITLE_LIMIT_MAX . ']'
        ),
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'area',
            'label' => 'Area',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'city',
            'label' => 'City',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'state',
            'label' => 'State',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'zip',
            'label' => 'Zip',
            'rules' => 'min_length[' . ZIP_LIMIT_MIN . ']|max_length[' . ZIP_LIMIT_MAX . ']|required|numeric|trim'
        ),
        array(
            'field' => 'country',
            'label' => 'Country',
            'rules' => 'max_length[' . FIELDS_LIMIT_MAX . ']|required|trim'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'min_length[' . PHONE_LIMIT_MIN . ']|max_length[' . PHONE_LIMIT_MAX . ']|required|trim|numeric'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email|trim'
        ), array(
            'field' => 'preferred_language',
            'label' => 'Preferred Language',
            'rules' => 'required|trim'
        )
    ), "add_vehicle" => array(
        array(
            'field' => 'make',
            'label' => 'Make',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'model',
            'label' => 'Model',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'fuel_type',
            'label' => 'Fuel Type',
            'rules' => 'required|trim'
        ),
        array(
            'field' => 'registration_no',
            'label' => 'Plate No',
            'rules' => 'required|trim|is_unique[vehicles.registration]|regex_match[/^[a-zA-Z0-9]+$/]'
        ),
        array(
            'field' => 'chassis_no',
            'label' => 'Chassis No',
            'rules' => 'required|trim|is_unique[vehicles.chassis_no]'
        ),
        array(
            'field' => 'engine_size',
            'label' => 'Engine Size',
            'rules' => 'required|trim|numeric'
        )
    ), "search" => array(
        array(
            'field' => 'registration',
            'label' => 'Plate NO',
            'rules' => 'trim|alpha_numeric'
        ),
        array(
            'field' => 'phone',
            'label' => 'Phone',
            'rules' => 'trim|numeric'
        )
    )
);
