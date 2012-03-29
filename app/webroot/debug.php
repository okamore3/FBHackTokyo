<?php
$proxy = array(
	"http" => array(
		"proxy" => "192.168.20.8:8080",
		"request_fulluri" => true,
	)
);
$proxy_context = stream_context_create($proxy);
var_dump(file_get_contents('https://www.facebook.com', false, $proxy_context));
