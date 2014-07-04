<?php

namespace Faq\Site;

/**
 * Group class is used to keep track of a group of routes with similar aspects (the same controller, the same f3-app and etc)
 */
class Routes extends \Dsc\Routes\Group{
	
	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 * Initializes all routes for this group
	 * NOTE: This method should be overriden by every group
	 */
	public function initialize(){

		$this->setDefaults(
				array(
					'namespace' => '\Faq\Site\Controllers',
					'url_prefix' => '/faq'
				)
		);
		
		$this->add( '', 'GET', array(
								'controller' => 'Faq',
								'action' => 'index'
								));
		$this->add( '/ask', 'GET', array(
				'controller' => 'Faq',
				'action' => 'ask'
		));
		
		$this->add( '/ask', 'POST', array(
				'controller' => 'Faq',
				'action' => 'saveAsk'
		));
	}
}