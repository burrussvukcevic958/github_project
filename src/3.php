<?php
$url = 'https://api.github.com/repos/' . $_GET['user'] . '/' . $_GET['repo'] . '/contents/';
$client_id = 'YOUR_CLIENT_ID';
$client_secret = 'YOUR_CLIENT_SECRET';
$redirect_uri = 'https://example.com/callback';
$code = $_GET['code'];

// Exchange the auth code for an access token
$token_url = 'https://github.com/login/oauth/access_token';
$post_data = array(
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'redirect_uri' => $redirect_uri,
    'code' => $code,
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($post_data)
    )
);
$context  = stream_context_create($options);
$response = file_get_contents($token_url, false, $context);

// Parse the access token from the response
parse_str($response, $params);
$access_token = $params['access_token'];

// Use the access token to make a request to the GitHub API
$api_url = 'https://api.github.com/user';
$headers = array(
    'Authorization: token ' . $access_token,
);
$options = array(
    'http' => array(
        'method' => 'GET',
        'header' => implode("\r\n", $headers)
    )
);
$context  = stream_context_create($options);
$response = file_get_contents($api_url, false, $context);
echo $response;
?>