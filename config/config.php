<?php

/**
 *
 * 	Author: Michael Fleischmann (info@michael-fleischmann.com)
 * 	Copyright: Contao Academy
 *
 */

define('academy_client', '1.1.7');

if(file_exists(TL_ROOT . '/system/modules/contao_academy_client/classes/AcademyHelper.php')):
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('AcademyHelper', 'HeaderVideohandbuch');
endif;

// CSS und JS fuer Backendview Academy
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/academy.css||static';

	if(\Input::get('id') && \Input::get('do') == 'Videohandbuch') // Detailseite
	{
		// jQuery no conflict
		if(!isset($GLOBALS['TL_JAVASCRIPT']['jquery'])) $GLOBALS['TL_JAVASCRIPT']['jquery'] = 'assets/jquery/js/jquery.min.js||static';
        	if(!isset($GLOBALS['TL_JAVASCRIPT']['jquery-noconflict'])) $GLOBALS['TL_JAVASCRIPT']['jquery-noconflict'] = 'system/modules/contao_academy_client/assets/jquery.noconflict.js||static';
		
		//Check Contao 4
		if (version_compare(VERSION, '4.4', '<'))
		{
		    // Code für Contao 3.5
		    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/colorbox/' . COLORBOX . '/js/colorbox.min.js||static';
		    $GLOBALS['TL_CSS'][] = 'assets/jquery/colorbox/' . COLORBOX . '/css/colorbox.min.css||static';
		}
		else
		{
		    // Code für Versionen ab 4.4
		    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/colorbox/js/colorbox.min.js||static';
		    $GLOBALS['TL_CSS'][] = 'assets/colorbox/css/colorbox.min.css||static';
		}
	}
}

array_insert($GLOBALS['BE_MOD'], 1, array
(
	'contao_academy' => array
	(
	  'Videohandbuch' => array
	  (
		    'callback'        => 'Videohandbuch',
		    'icon'      		=> 'system/modules/contao_academy_client/assets/icon.jpg',
	  ),
	)
));


$GLOBALS['CA']['SERVER'] = 'https://contao-academy.de/system/modules/contao_academy_server/public/index.php';
