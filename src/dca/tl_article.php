<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   ArticleContainerClass
 * @author    EDsolution.si
 * @license   LGPL
 * @copyright 2015
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/**
 * Modify palettes
*/
PaletteManipulator::create()
  ->addField('containerClass', 'customTpl')
  ->applyToPalette('default', 'tl_article')
;

// Fields
$GLOBALS['TL_DCA']['tl_article']['fields']['containerClass'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['containerClass'],
    'exclude'   => true,
    'filter'    => true,
    'inputType' => 'text',
    'eval' => [
        'maxlength' => 255,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(255) NOT NULL default ''",
);