<?php
/**
 * Config class
 *
 * This file is the config class of the application
 * here you can change environments and system variables
 * such as the language you will use and the time zone you want to use.
 * 
 * Here you can configure the database and a long types of configurations
 *
 * AnunnakiPHP: A simple framework for all kind of projects (https://anunnakiphp.wordpress.com)
 * Copyright (c) Anunnaki software foundation. (https://anunnakiphp.wordpress.com)
 *
 * Licensed under the MIT license
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright	Copyright (c) Anunnaki software foundation. (https://anunnakiphp.wordpress.com)
 * @link		https://anunnakiphp.wordpress.com AnunnakiPHP
 * @since		AnunnakiPHP v 2.1
 * @license		http://www.opensource.org/licenses/mit-license.php MIT License
 * @package		Environment
 */

namespace Environment;

use Anunnaki\Front\App;

/**
 * Configuration class
 * 
 * @package		Environment
 * @author		Andre Naves
 */
abstract class Config
{
	/**
	 * Holds the time zone of the application
	 * 
	 * @example	'America/Sao_Paulo'
	 * @access	public
	 * @var		string
	 */
	public $timeZone = 'America/Sao_Paulo';
	
	/**
	 * Holds the layout file
	 * 
	 * @access	public
	 * @var		string
	 */
	public $layoutFile = 'Modules/[module]/views/layout/layout.phtml';
	
	
	/**
	 * Holds the root path of the application
	 * 
	 * @access	public
	 * @var		string
	 */
	public $root = '/';
}