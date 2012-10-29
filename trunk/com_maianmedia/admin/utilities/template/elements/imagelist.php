<?php
/**
 * @version		$Id: imagelist.php 10707 2008-08-21 09:52:47Z eddieajau $
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
 * Renders a imagelist element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JElementImageList
{
	/**
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'ImageList';

	function fetchElement($name, $value, &$node, $control_name)
	{
		$filter = '\.png$|\.gif$|\.jpg$|\.bmp$|\.ico$';
		$node->addAttribute('filter', $filter);

		$parameter =& $this->_parent->loadElement('filelist');

		return $parameter->fetchElement($name, $value, $node, $control_name);
	}
}
