<?php

namespace Api\PayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/queue/", name="default_index")
     */
    public function indexAction()
    {
        
        $Q=$this->get('queue');
        print_r($Q->executeQueuedOperation());
        die;
      
    }
}
