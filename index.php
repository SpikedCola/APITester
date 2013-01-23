<?php
// http://stubhubapi.stubhub.com/index.php/Anatomy_of_a_Listing_Catalog_Service_HTTP_Request
?>
<html>
	<head>
		<script src="js/jquery.1.8.3-min.js"></script>
		<script src="js/main.js"></script>
		<style>
			#request {
				width: 400px;
				height: 100px;
			}
		</style>
	</head>
	<body>
		<textarea id="request">stubhubDocumentType:ticket</textarea>
		<br />
		<button id="requestButton">Request</button>
		<hr />
		<pre id="response"></pre>
	</body>
</html>