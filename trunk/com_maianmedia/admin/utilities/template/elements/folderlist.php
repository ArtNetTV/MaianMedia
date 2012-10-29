<?php
/**
 * @version		$Id: folderlist.php 11670 2009-03-08 20:37:02Z willebil $
 * @package		Joomla.Framework
 * @subpackage	Parameter
 * @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Renders a filelist element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JElementFolderlist
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'Folderlist';

	function fetchElement($name, $value, &$node, $control_name)
	{
		jimport( 'joomla.filesystem.folder' );

		// path to images directory
		$path		= JPATH_ROOT.DS.$node->attributes('directory');
		$filter		= $node->attributes('filter');
		$exclude	= $node->attributes('exclude');
		$folders	= JFolder::folders($path, $filter);

		$options = array ();
		foreach ($folders as $folder)
		{
			if ($exclude)
			{
				if (preg_match( chr( 1 ) . $exclude . chr( 1 ), $folder )) {
					continue;
				}
			}
			$options[] = JHTML::_('select.option', $folder, $folder);
		}

		if (!$node->attributes('hide_none')) {
			array_unshift($options, JHTML::_('select.option', '-1', '- '.MaianText::_('Do not use').' -'));
		}

		if (!$node->attributes('hide_default')) {
			array_unshift($options, JHTML::_('select.option', '', '- '.MaianText::_('Use default').' -'));
		}

		return JHTML::_('select.genericlist',  $options, ''.$control_name.'['.$name.']', 'class="inputbox"', 'value', 'text', $value, $control_name.$name);
	}
}