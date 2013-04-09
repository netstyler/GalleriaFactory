<?php
/**
* Galleria Init Object.
*
* PHP 5
*
* Galleria Factory (http://www.cakestyler.ch)
* Copyright 2013, Cake Styler (http://www.cakestyler.ch)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright 2013, Cake Styler (http://www.cakestyler.ch)
* @link          http://www.cakestyler.ch Galleria Factory
* @package       GalleriaFactory.View.Factory.Galleria.Objects
* @since         CakePHP(tm) v 2.2.1.0
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/

/**
 * Creates an object representing the initial Galleria Code.
 *
 * @package       GalleriaFactory.View.Factory.Galleria.Objects
 */
class GalleriaGallery extends CtkNode {

	/**
	 * The template to use for this object.
	 *
	 * @var string The name of the template.
	 */
	protected $_template = 'galleria_gallery';

	/**
	 * The configuration parameters used by the template for this object.
	 *
	 * @var array The template configuration parameters.
	 */
	protected $_params = array(
		'height' => '450',
		'width' => '600',
		'background' => '#fff'
	);

	/**
	 * The type of element this object represents.
	 *
	 * @var string The element type.
	 */
	protected $_nodeType = 'gallery';
}