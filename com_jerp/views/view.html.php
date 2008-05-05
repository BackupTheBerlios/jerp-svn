<?php
/**
* @package		HelloWorld
* @license		GNU/GPL, see LICENSE.php
*/

jimport( 'joomla.application.component.view');

/**
 * HTML View class for the JERP Component
 *
 * @package		JERP
 */
class HelloViewHello extends JView
{
	function display($tpl = null)
	{		
		$greeting = "TEST JERP";
		$this->assignRef( 'greeting',	$greeting );

		parent::display($tpl);
	}
}
?>
