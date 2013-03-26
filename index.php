<?php
	$defaultUrl = 'http://svcs.sandbox.ebay.com/services/search/FindingService/v1';
	$defaultParameters = "OPERATION-NAME=findItemsByCategory
SERVICE-VERSION=1.0.0
SECURITY-APPNAME=JordanSk-c3e5-453f-9b3b-738c24d34778
RESPONSE-DATA-FORMAT=JSON
REST-PAYLOAD
categoryId=20081
paginationInput.entriesPerPage=2";
?>
<html>
	<head>
		<script src="js/jquery.1.8.3-min.js"></script>
		<script src="js/main.js"></script>
		<style>
			#request {
				width: 500px;
				height: 300px;
			}
			#url {
				width: 500px;
			}
		</style>
	</head>
	<body>
		API URL:<br />
		<input name="url" id="url" value="<?php echo $defaultUrl; ?>" /><br /><br />
		Parameters:<br />
		<textarea id="request"><?php echo $defaultParameters; ?></textarea><br />
		<em>New Lines are treated as separate parameters.</em><br /><br />
		Method: <label><input name="method" value="get" type="radio" checked /> GET</label> <label><input name="method" value="post" type="radio" /> POST</label><br /><br />
		<button id="requestButton">Request</button>
		<hr />
		<pre id="response"></pre>
	</body>
</html>