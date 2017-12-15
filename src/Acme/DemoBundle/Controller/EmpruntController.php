<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Livre;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Entity\EmpruntLivre;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EmpruntController extends Controller {

    public function indexAction() {


        $user = $this->container->get('security.context')->getToken()->getUser();
        /* var_dump($user);
          $r = $user->getRoles();
          var_dump($r);
          var_dump($user); */


        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livres = $em->findALL();


        return $this->render('AcmeDemoBundle:Emprunt:index.html.twig', array('livres' => $livres));
    }

    public function empruntAction($id) {


        $user = $this->container->get('security.context')->getToken()->getUser();
        /* var_dump($user);
          $r = $user->getRoles();
          var_dump($r);
          var_dump($user); */


        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livres = $em->find($id);

       
        
        $em1 = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:EmpruntLivre');
       
        $existlivre = $em1->findBy(array('refEtudiant'=>$user->getId(),'etat'=>0));
        
        //  var_dump($existlivre);
        // exit;
        
        if(sizeof($existlivre)==0)
        {
        $em = $this->getDoctrine()->getManager();
        
        $empliv = new EmpruntLivre();
        $empliv->setRefEtudiant($user->getId());
        $empliv->setRefLivre($id);
        $date = date('Y-m-d H:i:s');
        
        $date1 = new \Datetime($date);
        $date1 = $date1->modify('+15 days');
        
      
        
     
        $empliv->setDateEmprunt(new \Datetime($date));
        $empliv->setDateRetourEmprunt($date1);
        ////fonction add 10 jours
        $empliv->setEtat(0);
        var_dump($empliv);
        $em->persist($empliv);
        $em->flush();
        return $this->redirect($this->generateUrl('adherentlivreliste'));
        }
        else
        {
            echo 'nooooo';
            exit;
        }
        
        
        
        
        
    }

    public function listeAction() {


        $user = $this->container->get('security.context')->getToken()->getUser();


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT p.refEtudiant,p.dateEmprunt,p.dateRetourEmprunt,p.etat,l.nom,l.photo,l.id
                            FROM AcmeDemoBundle:EmpruntLivre p
                            JOIN AcmeDemoBundle:Livre l
                            WHERE l.id = p.refLivre
                            AND p.refEtudiant = :refEtudiant
    '
                )->setParameter('refEtudiant', $user->getId());

        $emprunts = $query->getResult();


     //   var_dump($emprunts);



       
        return $this->render('AcmeDemoBundle:Adherent:emprunt.html.twig', array('emprunts' => $emprunts));
    }

}
