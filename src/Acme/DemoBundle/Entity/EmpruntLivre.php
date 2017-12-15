<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpruntLivre
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EmpruntLivre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="refEtudiant", type="integer")
     */
    private $refEtudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmprunt", type="datetime")
     */
    private $dateEmprunt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRetourEmprunt", type="datetime")
     */
    private $dateRetourEmprunt;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="refLivre", type="integer")
     */
    private $refLivre;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set refEtudiant
     *
     * @param integer $refEtudiant
     *
     * @return EmpruntLivre
     */
    public function setRefEtudiant($refEtudiant)
    {
        $this->refEtudiant = $refEtudiant;

        return $this;
    }

    /**
     * Get refEtudiant
     *
     * @return integer
     */
    public function getRefEtudiant()
    {
        return $this->refEtudiant;
    }

    /**
     * Set dateEmprunt
     *
     * @param \DateTime $dateEmprunt
     *
     * @return EmpruntLivre
     */
    public function setDateEmprunt($dateEmprunt)
    {
        $this->dateEmprunt = $dateEmprunt;

        return $this;
    }

    /**
     * Get dateEmprunt
     *
     * @return \DateTime
     */
    public function getDateEmprunt()
    {
        return $this->dateEmprunt;
    }

    /**
     * Set dateRetourEmprunt
     *
     * @param \DateTime $dateRetourEmprunt
     *
     * @return EmpruntLivre
     */
    public function setDateRetourEmprunt($dateRetourEmprunt)
    {
        $this->dateRetourEmprunt = $dateRetourEmprunt;

        return $this;
    }

    /**
     * Get dateRetourEmprunt
     *
     * @return \DateTime
     */
    public function getDateRetourEmprunt()
    {
        return $this->dateRetourEmprunt;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return EmpruntLivre
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set refLivre
     *
     * @param integer $refLivre
     *
     * @return EmpruntLivre
     */
    public function setRefLivre($refLivre)
    {
        $this->refLivre = $refLivre;

        return $this;
    }

    /**
     * Get refLivre
     *
     * @return integer
     */
    public function getRefLivre()
    {
        return $this->refLivre;
    }
}

