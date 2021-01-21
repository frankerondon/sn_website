<?php
if($_REQUEST['recaptcha']){
    $url='https://www.google.com/recaptcha/api/siteverify';
    $post_data = http_build_query(
        array(
            'secret' => '6Lfkc4gUAAAAAGTBs-1qEOdnVq106hp5yBbGL5Nw',
            'response' => $_REQUEST['recaptcha'],
            'remoteip' => $_SERVER['REMOTE_ADDR']
        )
    );

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $post_data
        )
    );
    $context  = stream_context_create($opts);
    $response = file_get_contents($url, false, $context);
    $result = json_decode($response);
    print_r($result->success);
}