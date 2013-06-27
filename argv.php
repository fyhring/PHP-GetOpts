#!/usr/bin/php
<?php
	

	$argv = $_SERVER['argv'];
	$_argv = array();
	$file = basename(__FILE__);
	$_argv['options'] = null;
	$_argv['all'] = null;

	foreach($argv as $k => $v) {
		if($v[0] == '-') {
			//$_argv[] = array($v => (isset($argv[$k+1]) ? $argv[$k+1] : null) );
			$_argv[$v] = (isset($argv[$k+1]) ? $argv[$k+1] : null );
			$_argv['options'][] = $v;
		}

		$_argv['all'][] = $v;
	}

	print_r($_argv);
?>