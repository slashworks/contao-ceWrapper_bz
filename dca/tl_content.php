<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  borowiakziehe KG 2012
 * @author     Joe Ray Gregory <jrgregory@borowiakziehe.de>
 * @package    Backend
 * @license    LGPL
 * @filesource
 */


array_insert($GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'],1,'ceWrapperType');

$GLOBALS['TL_DCA']['tl_content']['palettes']['ceWrapper_bzbegin'] = '{type_legend},type,ceWrapperType,ceWrapperTag;{expert_legend:hide},guests,invisible,cssID';
$GLOBALS['TL_DCA']['tl_content']['palettes']['ceWrapper_bzend'] = '{type_legend},type,ceWrapperType';


$GLOBALS['TL_DCA']['tl_content']['fields']['ceWrapperType'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['ceWrapperType'],
    'default'                 => 'begin',
    'exclude'                 => true,
    'inputType'               => 'radio',
    'options'                 => array('begin', 'end'),
    'reference'               => &$GLOBALS['TL_LANG']['tl_content']['ceWrapperType'],
    'eval'                    => array('submitOnChange'=>true)
);


