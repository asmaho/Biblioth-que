<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Livre;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Entity\Categorie;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdherentController extends Controller
{
    
    public function indexAction()
    {
        
        return $this->render('AcmeDemoBundle:Adherent:index.html.twig');
    }
    public function livreAction()
    {
        
        
        /*$user = $this->container->get('security.context')->getToken()->getUser();

        var_dump($user);
        var_dump($user->getRoles());

         $em = $this->getDoctrine()->getManager();
         $user->addRole('ROLE_ADMIN');
         $em->persist($user);
                            $em->flush();
           var_dump($user->getRoles());                 
          var_dump($user);*/                
                $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
                $livres = $em->findAll();
        
        return $this->render('AcmeDemoBundle:Adherent:livre.html.twig',array('livres'=>$livres));
    }
    public function categorieAction()
    {
        
        
         
                $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Categorie');
                $categories = $em->findAll();
        
        return $this->render('AcmeDemoBundle:Admin:categorie.html.twig',array('categories'=>$categories));
    }
    

}
