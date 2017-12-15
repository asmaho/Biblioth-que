<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
 $user = $this->container->get('security.context')->getToken()->getUser();
 
 
 if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')===true)
 {
     return $this->redirect($this->generateUrl('admin'));
    
 }
 
 if($this->get('security.authorization_checker')->isGranted('ROLE_ADHERENT')===true)
 {
      return $this->redirect($this->generateUrl('adherent'));
 }
 
 
 
 
 
 
 
 
        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }
    
    public function connexionAction()
    {
        
         return $this->render('AcmeDemoBundle:Welcome:connexion.html.twig');
    }
}
