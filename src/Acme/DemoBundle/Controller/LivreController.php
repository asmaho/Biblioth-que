<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Livre;
use Acme\DemoBundle\Entity\User;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LivreController extends Controller
{
    
    public function indexAction()
    {
        
        
        $user = $this->container->get('security.context')->getToken()->getUser();

var_dump($user);
var_dump($user->getRoles());

 $em = $this->getDoctrine()->getManager();
 $user->removeRole('ROLE_EPI');
 $em->persist($user);
                    $em->flush();
   var_dump($user->getRoles());                 
  var_dump($user);                 
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livres = $em->findAll();
        
        return $this->render('AcmeDemoBundle:Livre:index.html.twig',array('livres'=>$livres));
    }
    public function ajoutAction()
    {
       
        
        
        
        
        if(isset($_POST))
        {
           if(!empty($_POST))
            {
               if(isset($_FILES['photo'])){
                        $photo=$_FILES['photo']['name'];
                        $dossier = 'C:\wamp\www\Biblio\web\images\\';
                        $r=rand(0,10000);
                        move_uploaded_file($_FILES['photo']['tmp_name'],$dossier.$r.$photo);
               
                }
        
                    $em             = $this->getDoctrine()->getManager();
                    $nom            = $_POST['nom'];
                    $auteur         = $_POST['auteur'];
                    $isbn           = $_POST['isbn'];
                    $date           = $_POST['date'];
                    $nbrexemplaire  = $_POST['nbrexemplaire'];
                    
                    
                    $livre = new Livre();
                    $livre->setNom($nom);
                    $livre->setAuteur($auteur);
                    $livre->setiSBN($isbn);
                    $livre->setDate(new \Datetime($date));
                    $livre->setPhoto($r.$photo);
                    $livre->setNbrexemplaire($nbrexemplaire);
                    $em->persist($livre);
                    $em->flush();
                     
                   return $this->redirect($this->generateUrl('listlivre'));
            } 
        }
        $em = $this->getDoctrine()->getManager();
        
        
        return $this->render('AcmeDemoBundle:Livre:ajouter.html.twig');
    }
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livre = $em->find($id);
        
        if(isset($_POST))
        {
           if(!empty($_POST))
            {
                    $em = $this->getDoctrine()->getManager();
                    $nom = $_POST['nom'];
                    $auteur = $_POST['auteur'];
                    $isbn = $_POST['isbn'];
                    $date = $_POST['date'];
                    
                    
                    $livre->setNom($nom);
                    $livre->setAuteur($auteur);
                    $livre->setiSBN($isbn);
                    $livre->setDate(new \Datetime($date));
                    $em->persist($livre);
                    $em->flush();
                     return $this->redirect($this->generateUrl('listlivre'));
            } 
        }
       
        
        
        return $this->render('AcmeDemoBundle:Livre:editer.html.twig',array('liv'=>$livre));
    }
    public function suppAction($id)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livre = $em->find($id);
         $em = $this->getDoctrine()->getManager();
        
                    $em->remove($livre);
                    $em->flush();
        
        
        
       return $this->redirect($this->generateUrl('listlivre'));
    }
    public function voirAction($id)
    {
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livre = $em->find($id);
        
        
               return $this->render('AcmeDemoBundle:Livre:voir.html.twig',array('livre'=>$livre));
    }

}
