<?php

function social_login($provider) {

    $CI = & get_instance();
    $CI->load->library('HybridAuthLib');

    if ($CI->hybridauthlib->providerEnabled($provider)) {
        $service = $CI->hybridauthlib->authenticate($provider);
        if ($service->isUserConnected()) {
            $token = $service->getAccessToken();
            ///https://graph.facebook.com/userid/friends?fields=work&access_token=ACCESSTOKENHERE
            $api_url = 'me/taggable_friends'; //taggable_friends'); //('me?fields=id')
            $response = false;//$service->api()->api($api_url);
            //var_dump($response);
            //die;


            $fql = "SELECT  email FROM user "
                    . "WHERE id = AaIrcjVoR7RABQjP36bhr6ED-skj-R4AXso3bjOkThWj5KGCCsBYr4GIqhG2GCp_SODWNXB7fvdk6ZOHo2eXGLLkxnmhm7W6mfX7fFI4Izn-KA)";
            $friends = $service->api(array(
                'method' => 'fql.query',
                'access_token' => $token['access_token'],
                'query' => $fql,
            ));
            //  var_dump($friends);
            //  die;
            ////
            $user_profile = $service->getUserProfile();
            var_dump($user_profile);
            //  die;
            Hybrid_Auth::logoutAllProviders();
            return array($user_profile, $response);
        } else {
            show_error('Cannot authenticate user');
            return false;
        }
    }
}
