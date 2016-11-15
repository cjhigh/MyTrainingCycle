<?php
include 'vendor/autoload.php';
use Strava\API\OAuth;
use Strava\API\Exception;

try {
    $options = array(
        'clientId'     => 14614,
        'clientSecret' => 'APP-TOKEN',
        'redirectUri'  => 'http://cjhigh.com/trainingcycle.php'
    );
    $oauth = new OAuth($options);

    if (!isset($_GET['code'])) {
        print '<a href="'.$oauth->getAuthorizationUrl().'">connect</a>';
    } else {
        $token = $oauth->getAccessToken('authorization_code', array(
            'code' => $_GET['code']
        ));
        print $token;
    }
} catch(Exception $e) {
    print $e->getMessage();
}
?>
