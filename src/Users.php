<?php
// src/Users.php

use Doctrine\ORM\Mapping as ORM; 

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class Users
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int $id;
    #[ORM\nom]
    #[ORM\Column(type: 'string')]
    private string $nom;
    #[ORM\prenom]
    #[ORM\Column(type: 'string')]
    private string $prenom;
    #[ORM\ManyToOne(targetEntity: Villes::class, inversedBy:'users')]
    #[ORM\JoinColumn(name: 'ville_id', referencedColumnName: 'id')]
    private Villes|null $ville=null;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set ville.
     *
     * @param \Villes|null $ville
     *
     * @return Users
     */
    public function setVille(\Villes $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return \Villes|null
     */
    public function getVille()
    {
        return $this->ville;
    }
}
