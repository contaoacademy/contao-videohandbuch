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

        //Check Contao 4
        if (version_compare(VERSION, '4.4', '<'))
        {
            // Code für Contao 3.5
            if ($strTemplate == 'be_main')
            {
                $strSearch = '<span class="header_user_container">';
                $strBefore = '<span class="header_academy_container"><a class="header_videohandbuch" href="contao/main.php?do=Videohandbuch" title="">Videohandbuch</a></span>';
                $strBuffer = str_replace($strSearch,$strBefore.$strSearch,$strBuffer);
            }
        }
        else
        {
            if ($strTemplate == 'be_main')
            {
                $strSearch = '<ul id="tmenu">';
                $strAfter = '<li class="header_academy_container"><a class="tmenu_videohandbuch" href="contao?do=Videohandbuch" title="">Videohandbuch</a></li>';
                $strBuffer = str_replace($strSearch,$strSearch.$strAfter,$strBuffer);
            }
        }


		return $strBuffer;
	}

	public static function COMParam()
	{
		return array('v'=> academy_client , 'contao'=> VERSION.'.'.BUILD,'host'=>\Environment::get('httpHost'));
	}

}