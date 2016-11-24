<?php

/**
 *
 * 	Author: Michael Fleischmann (info@michael-fleischmann.com)
 * 	Copyright: Contao Academy
 *
 */

define('academy_client', '1.0');

if(file_exists(TL_ROOT . '/system/modules/contao_academy_client/classes/AcademyHelper.php')):
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('AcademyHelper', 'HeaderVideohandbuch');
endif;

// CSS und JS fuer Backendview Academy
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'system/modules/contao_academy_client/assets/academy.css?v10||static';

	if(\Input::get('id') && \Input::get('do') == 'Videohandbuch') // Detailseite
	{
		// jQuery
		if (!is_array($GLOBALS['TL_JAVASCRIPT']))
		{
			$GLOBALS['TL_JAVASCRIPT'] = array();
		}
		array_unshift($GLOBALS['TL_JAVASCRIPT'], 'system/modules/contao_academy_client/assets/jquery.noconflict.js');
		$jquery_src = 'assets/jquery/core/' . JQUERY . '/jquery.min.js';
		array_unshift($GLOBALS['TL_JAVASCRIPT'], $jquery_src);

		//Colorbox
		$GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/colorbox/' . COLORBOX . '/js/colorbox.min.js';
		$GLOBALS['TL_CSS'][] = 'assets/jquery/colorbox/' . COLORBOX . '/css/colorbox.min.css||static';
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
