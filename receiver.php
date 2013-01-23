<?php
	if (isset($_GET['url'])) {
		$json = file_get_contents(base64_decode($_GET['url']));
		if (!empty($json)) {
			echo json_encode(json_decode($json), JSON_PRETTY_PRINT);
		}
	}
	die;
?>