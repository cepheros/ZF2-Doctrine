<?php
namespace Core\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Doctrine\ORM\EntityManager;


abstract class CoreController extends AbstractActionController
{
	/**
	 * @var EntityManager
	 */
	protected $em;
	
	
    /**
     * Returns a Service
     *
     * @param  string $service
     * @return Service
     */
    protected function getService($service)
    {
        return $this->getServiceLocator()->get($service);
    }
   

    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;
    }    
    /**
     * Return a EntityManager
     *
     * @return EntityManager
     */
    protected function getEntityManager()
    {
    	if ($this->em === null) {
    		$this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    	}
    
    	return $this->em;
    }
    
    
    
    
    
    
    
    
    
}