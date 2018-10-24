<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Homepage Class
 *
 * This Controller is responsible of the Langing page
 *  @author     Original Author <hammourihab@gmail.com>
 * @copyright  2018 Ouedknissed
 * @version    Release: 0.0.1
 * @since      Class available since Release 0.0.1
 */
class Home extends CI_Controller {
	public function index()
	{
		view('home');
	}
}
