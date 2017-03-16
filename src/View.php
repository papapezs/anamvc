<?php
/**
 * View PHP version 5.4
 *
 * MVC Base View
 *
 * @category Views
 * @package  View
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version  non-version
 */
namespace AnaMvc;

/**
 * View Class
 *
 * @category Views
 * @package  View
 * @author   Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
 */
class View {

	/**
		* On construct View
		*
		* @author Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
		*
		* @return void
		*/
	function __construct() { }
	
	/**
		* Rendering of views
		*
		* @author Ana Azevedo <ana.rodrigues.azevedo@gmail.com>
		*
		* @return void
		*/
	public function render($name)
	{
		// show always the header -> content -> footer
		require BASE_PATH . 'views/header.php';
		require BASE_PATH . 'views/' . $name . '.php';
		require BASE_PATH . 'views/footer.php';
	}

}