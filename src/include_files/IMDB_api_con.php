<?php

//Makes calls to api based on url given as paramurl. Returns JSON as response
function imdb_api_call($imdb_id){

	$curl = curl_init();

	$APIKey = "k_rg8j0aoo"; #"k_c4586ape";
     
	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://imdb-api.com/en/API/Title/" . $APIKey . "/" .  $imdb_id,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
	));
	
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);

	
	if ($err) {
		return "cURL Error #:" . $err;
	}else{
		return $response;
	}
}

?>
