--TEST--
CacheAPC::expires

--SKIPIF--
<?php
	if (!function_exists('apc_add')) print 'skip APC extension not available';
?>

--FILE--
<?php
	require_once dirname(__FILE__) . '/../cachecore.class.php';
	require_once dirname(__FILE__) . '/../cacheapc.class.php';
	$cache = new CacheAPC('test', null, 60);
	var_dump($cache->expires);
?>

--EXPECT--
int(60)