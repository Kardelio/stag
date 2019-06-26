<?php
    $os = $_POST["os"];
	if(strpos($os,'android') !== false){
		echo file_get_contents("/Users/automation/emar-myvery_android.stag.json");
	} else {
		echo file_get_contents("/Users/automation/emar-myvery_ios.stag.json");
	}
?>
