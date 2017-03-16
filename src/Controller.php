<?php
/**
 * Controller PHP version 5.4
 *
 * MVC Base Controller
 *
 * @category Controllers
 * @package  Controller
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version  non-version
 */
namespace AnaMvc;

use AnaMvc\View;

/**
 * Controller Class
 *
 * @category Controllers
 * @package  Controller
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 */
class Controller {

	/**
		* On construct Controller
		*
		* @author Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
		*
		* @return void
		*/
	function __construct() {
		$this->view = new View();
	}

}