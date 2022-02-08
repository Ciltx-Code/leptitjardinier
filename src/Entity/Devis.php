<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis", indexes={@ORM\Index(name="IDX_8B27C52BDD997971", columns={"cif2_id"})})
 * @ORM\Entity
 */
class Devis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    public $date;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cif2_id", referencedColumnName="id")
     * })
     */
    public $client;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Haie", mappedBy="numDevis")
     */
    public $numHaie;

    /**
     * @var int
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=true)
     */
    public $Hauteur;


    /**
     * @var int
     *
     * @ORM\Column(name="longeur", type="integer", nullable=true)
     */
    public $Longeur;

    /**
     * @ORM\ManyToOne(targetEntity=haie::class, inversedBy="devis")
     */
    public $typeHaie;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numHaie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getTypeHaie(): ?haie
    {
        return $this->typeHaie;
    }

    public function setTypeHaie(?haie $typeHaie): self
    {
        $this->typeHaie = $typeHaie;

        return $this;
    }

}
