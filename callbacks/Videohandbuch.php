<?php

/**
 *
 * *    Copyright: Contao Academy | Christian Feneberg
 *    Author: Michael Fleischmann (info@michael-fleischmann.com)
 *
 */

class Videohandbuch extends BackendModule
{
    protected $strTemplate = 'be_videohandbuch';


    public function compile()
    {
            $arrResponse = @AcademyHelper::getVideoData();
            $this->Template->Titel = $arrResponse->title;
            $this->Template->VideoData = $arrResponse->chapters->chapter;
    }
}