<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\Livre;
use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Entity\Categorie;
use Acme\DemoBundle\Entity\Etudiant;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdminController extends Controller {

    public function indexAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();


        /* $userManager = $this->container->get('fos_user.user_manager');

          $userAdmin = $userManager->createUser();

          $userAdmin->setUsername('Sysddsdsdcqsdsdqsddddtssem');
          $userAdmin->setEmail('sysssqadqdztem@example.com');
          $userAdmin->setPlainPassword('test');
          $userAdmin->setEnabled(true);
          $user->getRoles()

          //$userManager->updateUser($userAdmin, true);

          var_dump($userAdmin);
          //exit;


          $user->addRole('ROLE_ADMIN');
          // $em->persist($user);
          // $em->flush();
          var_dump($user->getRoles());
          var_dump($user); */
        return $this->render('AcmeDemoBundle:Admin:index.html.twig');
    }

    public function etudiantAction() {
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Etudiant');
        $Etudiants = $em->findAll();

        return $this->render('AcmeDemoBundle:Admin:etudiant.html.twig', array('etudiants' => $Etudiants));
    }

    public function ajouteretudiantAction() {


        if (isset($_POST)) {
            if (!empty($_POST)) {

                $matricule = $_POST['matricule'];
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $cin = $_POST['cin'];
                $classe = $_POST['classe'];
                $numtel = $_POST['numtel'];
                $email = $_POST['email'];
                $em = $this->getDoctrine()->getManager();

                //////////////////////////Ajouter adherent////////////////////////////////////////////!!!!!!!
                $userManager = $this->container->get('fos_user.user_manager');

                $adherent = $userManager->createUser();

                $adherent->setUsername($matricule);
                $adherent->setEmail($email);
                $adherent->setPlainPassword($cin);
                $adherent->setEnabled(true);
                $adherent->setRoles(array('ROLE_ADHERENT'));

                // var_dump($adherent);
                $userManager->updateUser($adherent, true);
                ////////////////////////////// fin ajouter adherent
                $etudiant = new Etudiant();

                $etudiant->setMatricule($matricule);
                $etudiant->setNom($nom);
                $etudiant->setPrenom($prenom);
                $etudiant->setCin($cin);
                $etudiant->setClasse($classe);
                $etudiant->setNumtel($numtel);
                $etudiant->setRefuser($adherent->getId());

                $em->persist($etudiant);
                $em->flush();
                return $this->redirect($this->generateUrl('adminetudiantliste'));
            }
        }


        return $this->render('AcmeDemoBundle:Admin:ajoutertudiant.html.twig', array());
    }

    public function voireetudiantAction($id) {




        $em = $this->getDoctrine()->getEntityManager()->getRepository('AcmeDemoBundle:Etudiant');
        $etudiant = $em->findOneBy(array('refuser' => $id));

        $em = $this->getDoctrine()->getEntityManager()->getRepository('AcmeDemoBundle:User');
        $user_etu = $em->find($id);



        return $this->render('AcmeDemoBundle:Admin:voiretudiant.html.twig', array('etudiant' => $etudiant, 'euser' => $user_etu));
    }

    public function listeempruntetudiantAction($id) {




        $user = $this->container->get('security.context')->getToken()->getUser();


        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                        'SELECT p.refEtudiant,p.dateEmprunt,p.dateRetourEmprunt,p.etat,l.nom,l.photo,l.id
                            FROM AcmeDemoBundle:EmpruntLivre p
                            JOIN AcmeDemoBundle:Livre l
                            WHERE l.id = p.refLivre
                            AND p.refEtudiant = :refEtudiant
    '
                )->setParameter('refEtudiant', $id);

        $emprunts = $query->getResult();

         return $this->render('AcmeDemoBundle:Admin:livreetudiant.html.twig', array('livres' => $emprunts));
    }

    public function desactiveretudiantAction($id) {




        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:User');


        $user = $em->find($id);

        $user->setEnabled(false);

        $em->persist($user);
        $em->flush();
        return $this->redirect($this->generateUrl('adminetudiantliste'));
    }

    public function livreAction() {
        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Livre');
        $livres = $em->findAll();

        return $this->render('AcmeDemoBundle:Admin:livre.html.twig', array('livres' => $livres));
    }

    public function categorieAction() {



        $em = $this->getDoctrine()->getManager()->getRepository('AcmeDemoBundle:Categorie');
        $categories = $em->findAll();

        return $this->render('AcmeDemoBundle:Admin:categorie.html.twig', array('categories' => $categories));
    }

}
