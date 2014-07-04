<?php 
namespace Faq\Site\Controllers;

class Faq extends \Dsc\Controller 
{
    public function index()
    {   
   	
        $this->app->set('pagetitle', 'Frequently Asked Questions');
        $this->app->set('subtitle', '');
		
       // $dash = (New \Finances\Models\Dashboard)->setCondition('type','stripe')->getItem();
        
       // $this->app->set('dash', $dash);
        
         
        echo $this->theme->render('Faq/Site/Views::faq/index.php');
    }
    
    public function ask()
    {
    
    	$this->app->set('pagetitle', 'About');
    	$this->app->set('subtitle', '');
    
    	$view = \Dsc\System::instance()->get( 'theme' );
    	echo $view->render('Faq/Site/Views::faq/ask.php');
    }
    
    public function saveAsk()
    {
    
    	$this->app->set('pagetitle', 'About');
    	$this->app->set('subtitle', '');
    
    	$view = \Dsc\System::instance()->get( 'theme' );
    	echo $view->render('Faq/Site/Views::faq/index.php');
    }

}
