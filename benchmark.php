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

$arr = [];
for ($i=0; $i < 100; $i++) {
	$start = microtime(true);
	test("http://127.0.0.1:8000/test/1");
	$time = microtime(true) - $start;
	print "Test ".$i.": ".$time."\n";
	$arr[] = $tme;
}

print "Average: ". (array_sum($arr) / count($arr))."\n";
