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
            $strAfter = '<li class="header_academy_container"><a class="icon-academy" href="contao?do=Videohandbuch" title="Videohandbuch">Videohandbuch</a></li>';
            $strBuffer = str_replace($strSearch, $strSearch . $strAfter, $strBuffer);
        }
        return $strBuffer;
    }

    public static function getVideoData()
    {
        //read json file and decode json to an array
        $path = TL_ROOT . '/system/modules/contao_academy_client/videos.json';
        if (file_exists($path)) {
            $jsonString = file_get_contents($path);
        }

        if (!strlen($jsonString)) {
            return false;
        }
        return json_decode($jsonString, false);
    }

    public static function COMParam(): array
    {
        return array('v' => academy_client, 'contao' => VERSION . '.' . BUILD, 'host' => Environment::get('httpHost'));
    }

}