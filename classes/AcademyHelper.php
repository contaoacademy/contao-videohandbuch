<?php

/**
 *
 * * 	Copyright: Contao Academy | Christian Feneberg
 * 	Author: Michael Fleischmann (info@michael-fleischmann.com)
 *
 */

class AcademyHelper extends System
{

	public function __construct()
	{
		parent::__construct();
	}

	public function HeaderVideohandbuch($strBuffer, $strTemplate)
	{
		if ($strTemplate == 'be_main')
		{
			$strSearch = '<span class="header_user_container">';
			$strBefore = '<span class="header_academy_container"><a class="header_videohandbuch" href="contao/main.php?do=Videohandbuch" title="">Videohandbuch</a></span>';
			$strBuffer = str_replace($strSearch,$strBefore.$strSearch,$strBuffer);
		}

		return $strBuffer;
	}

	public static function COMParam()
	{
		return array('v'=> academy_client , 'contao'=> VERSION.'.'.BUILD,'host'=>\Environment::get('httpHost'));
	}

}