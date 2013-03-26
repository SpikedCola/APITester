<?php
	if (isset($_GET['url']) && isset($_GET['data']) && isset($_GET['method'])) {
		$url = urldecode($_GET['url']);
		$data = urldecode($_GET['data']);
		$method = $_GET['method'];
		$response = null;
		switch ($method) {
			case 'get':
				$response = curl($url.'?'.$data);
				break;
			case 'post':
				$response = curl($url, $data);
				break;
		}
		if (!empty($response)) {
			echo json_encode(json_decode($response), JSON_PRETTY_PRINT);
		}
	}
	die;
	
	function curl($url, $data = null) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if ($data) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		$response = curl_exec($ch);
		curl_close($ch);
		return $response;
	}
?>