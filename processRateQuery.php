<?php
	$uri ="mongodb://<dbuser>:<dbpassword>@ds035617.mongolab.com:35617/contacts" ;
	$options = array("connectTimeoutMS" => 30000, "replicaSet" => "replicaSetName");
	$client = new MongoClient($uri, $options);
	if (is_ajax()) {
		$data = $_POST;
		echo $data;
		}
	function is_ajax() {
		return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
	}
?>