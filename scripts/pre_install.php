<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

function pre_install()
{
	$cacheupgradedir = 'cache/upgrades/temp';

	if (!($handle = opendir($cacheupgradedir)))
		sugar_die ('scanning for temporary cache installation directory "'. $cacheupgradedir .'" failed: module not installed');

	$latest_hash = '';
	$latest_hash_timestamp = 0;

	while (false !== ($entry = readdir($handle)))
	{
		if ($entry != '.' && $entry != '..')
		{
			$entry = $cacheupgradedir . '/' . $entry;

			$stat_result = stat($entry);
			if (($timestamp = $stat_result['ctime']) > $latest_hash_timestamp)
			{
				$latest_hash = $entry;
				$latest_hash_timestamp = $timestamp;
			}
		}
	}

	closedir($handle);

	if (!strlen($latest_hash))
		sugar_die('no installation directory in cache directory "'.$cacheupgradedir.'" found: module not installed');


	if (!file_exists($latest_hash . '/include/securimage/securimage.php'))
		sugar_die('securimage library not found in installation package under include/securimage - module not installed');


	return true;
}

