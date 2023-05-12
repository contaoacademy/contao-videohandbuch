<?php

/**
 *
 * *    Copyright: Contao Academy | Christian Feneberg
 *    Author: Michael Fleischmann (info@michael-fleischmann.com)
 *
 */

class Videohandbuch extends BackendModule
{
    protected $strTemplate = 'be_contao_academy_default';


    public function compile()
    {
            $arrResponse = @AcademyHelper::getVideoData();
            $this->Template->Titel = $arrResponse->title;
            $this->Template->VideoData = $arrResponse->chapters->chapter;
            //$this->Template->Banner = @base64_decode(AcademyRemote::sendRequest(array('action' => 'banner')));
    }
}