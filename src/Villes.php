<?php
// src/User.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'villes_france_free')]
class Villes
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\nom]
    #[ORM\Column(name: 'ville_nom',type: 'string')]
    private string $nom;
    #[ORM\Dpt]
    #[ORM\Column(name: 'ville_departement',type: 'string')]
    private string $dpt;
    #[ORM\cp]
    #[ORM\Column(name: 'ville_code_postal',type: 'string')]
    private string $cp;
    #[ORM\pop_2012]
    #[ORM\Column(name: 'ville_population_2012',type: 'integer')]
    private int $pop_2012;


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
     * @return Villes
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
     * Set dpt.
     *
     * @param string $dpt
     *
     * @return Villes
     */
    public function setDpt($dpt)
    {
        $this->dpt = $dpt;

        return $this;
    }

    /**
     * Get dpt.
     *
     * @return string
     */
    public function getDpt()
    {
        return $this->dpt;
    }

    /**
     * Set cp.
     *
     * @param string $cp
     *
     * @return Villes
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp.
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }
}
