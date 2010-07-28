<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Formo_Driver_Password_Core class.
 * 
 * @extends Formo_Driver
 * @package Formo
 */
class Formo_Driver_Password_Core extends Formo_Driver {

	protected $view = 'text';

	public function html()
	{
		$this->render_field
			->set('tag', 'input')
			->attr('type', 'password')
			->attr('name', $this->field->alias());
	}

}