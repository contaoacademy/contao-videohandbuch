<?php

/**
 *
 * *    Copyright: Contao Academy | Christian Feneberg
 *    Author: Michael Fleischmann (info@michael-fleischmann.com)
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
        if ($strTemplate == 'be_main') {
            $strSearch = '<ul id="tmenu">';
            $strAfter = '<li class="header_academy_container"><a class="tmenu_videohandbuch" href="contao?do=Videohandbuch" title="">Videohandbuch</a></li>';
            $strBuffer = str_replace($strSearch, $strSearch . $strAfter, $strBuffer);
        }
        return $strBuffer;
    }

    public static function COMParam(): array
    {
        return array('v' => academy_client, 'contao' => VERSION . '.' . BUILD, 'host' => Environment::get('httpHost'));
    }

}