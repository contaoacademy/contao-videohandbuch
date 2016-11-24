<?php

/**
 *
 * * 	Copyright: Contao Academy | Christian Feneberg
 * 	Author: Michael Fleischmann (info@michael-fleischmann.com)
 *
 */

class AcademyRemote extends \System
{
	public function __construct()
	{
		parent::__construct();
	}

	public static function sendRequest($arrData=array())
	{
		$request_url = '';
		foreach(array_merge($arrData,AcademyHelper::COMParam()) as $key => $val) {
			if(is_array($val)) foreach($val as $i => $val1) {
				$request_url.="&".$key."[".$i."]=".urlencode($val1);
			}
			else {
				$request_url.="&".$key."=".urlencode($val);
			}
		}
		$request_url=$GLOBALS['CA']['SERVER']."?".substr($request_url,1);

		$url_array=parse_url($request_url);

		if(function_exists("curl_init"))
		{
			$ch = curl_init($url_array['scheme']."://".$url_array['host'].$url_array['path']);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $url_array['query']);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_TIMEOUT, 45);
			$strResponse = curl_exec($ch);

			if(!strlen($strResponse))
				return false;
			return json_decode($strResponse);
		}
	}

}