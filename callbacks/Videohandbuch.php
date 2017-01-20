<?php

/**
 *
 * * 	Copyright: Contao Academy | Christian Feneberg
 * 	Author: Michael Fleischmann (info@michael-fleischmann.com)
 *
 */

  class Videohandbuch extends \BackendModule
{
	protected $strTemplate = 'be_contao_academy_default';


	public function compile()
	{
		$intID = \Input::get('id');

		// Standardansicht | Listet alle Kategorien auf
		if(!$intID)
		{
			$arrResponse = @AcademyRemote::sendRequest(array('action'=>'list'));
			$this->Template->Kategorien = $arrResponse;
			$this->Template->Banner = @base64_decode(AcademyRemote::sendRequest(array('action'=>'banner')));

		}

		// Kategorie gewählt | Liste alle Videos auf
		if($intID)
		{
            if (version_compare(VERSION, '3.5', '<'))
            {
                // Code für Versionen < 3.5
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/contao_academy_client/assets/academy_vimeo.js';
            }
            else
            {
                // Code für Versionen ab 3.5
                $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/contao_academy_client/assets/academy_vimeo.js|static';
            }

			$this->Template = new \BackendTemplate('be_contao_academy_details');
			$arrResponse = @AcademyRemote::sendRequest(array('action'=>'details','id'=>$intID));
			$this->Template->Videos = $arrResponse;
			$this->Template->Kategoriename = \Input::get('catname');
		}
	}
}