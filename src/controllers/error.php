<?php
/**
 * Error PHP version 5.4
 *
 * MVC Base Error Controller
 *
 * @category Controllers
 * @package  Error
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version  non-version
 */
namespace AnaMvc\Controllers;

use AnaMvc\Controller;

/**
 * Error Class
 *
 * @category Controllers
 * @package  Error
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 */
class Error extends Controller {

	/**
		* On construct Error
		*
		* @author Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
		*
		* @return void
		*/
	function __construct() {
		parent::__construct();
	}
  
	/**
		* For when user tries to access a controller that does not exist
		*
		* @author Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
		*
		* @return void
		*/
	function controllerDoesNotExist(){
		echo 'Controller doesn\'t exists';
		// do other stuff...
	}

}