<?php

function test(string $url)
{
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$o = curl_exec($ch);
	curl_close($ch);
	if ($o !== "Hello World!") {
		print "Response does not match!\n";
		exit(1);
	}
}

for ($i=0; $i < 10; $i++) { 
	$start = microtime(true);
	test("http://127.0.0.1:8000/test/1");
	print "Test ".$i.": ".(microtime(true) - $start)."\n";
}
