<?php

function social_login($provider) {

    $CI = & get_instance();
    $CI->load->library('HybridAuthLib');
    if ($CI->hybridauthlib->providerEnabled($provider)) {
        $service = $CI->hybridauthlib->authenticate($provider);
        if ($service->isUserConnected()) {
            $user_profile = $service->getUserProfile();
            return $user_profile;
        } else {
            show_error('Cannot authenticate user');
            return false;
        }
    }
}
