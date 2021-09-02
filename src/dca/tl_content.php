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

/**
 * Modify palettes
*/
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace (
  'customTpl',
  'customTpl,containerCssClass',
  $GLOBALS['TL_DCA']['tl_article']['palettes']['default']
);

$GLOBALS['TL_DCA']['tl_page']['fields'] += [
  'containerCssClass' => [
      'label' => &$GLOBALS['TL_LANG']['tl_article']['containerCssClass'],
      'exclude' => true,
      'search' => true,
      'inputType' => 'text',
      'eval' => [
          'maxlength' => 255,
          'tl_class' => 'w50',
      ],
      'sql' => "varchar(255) NOT NULL default ''",
  ],
];