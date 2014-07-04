<?php 

class FaqBootstrap extends \Dsc\Bootstrap{
	protected $dir = __DIR__;
	protected $namespace = 'Faq';

	protected function runAdmin(){

		parent::runAdmin();
	}
	protected function runSite(){
		
	 \Dsc\System::instance()->get('theme')->registerViewPath( __dir__ . '/Site/Views/', 'Faq/Site/Views' );

		parent::runSite();
	}
}
$app = new FaqBootstrap();