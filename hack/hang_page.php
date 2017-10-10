<?php
	//echo 'some';
	$UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://www.lagou.com/");
	curl_setopt($curl, CURLOPT_HEADER, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_ENCODING, '');
	curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
	$data = curl_exec($curl);
	echo $data;
	curl_close($curl);
	

?>