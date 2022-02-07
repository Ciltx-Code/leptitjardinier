<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cif2_id", referencedColumnName="id")
     * })
     */
    private $cif2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Haie", mappedBy="numDevis")
     */
    private $numHaie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numHaie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCif2(): ?Client
    {
        return $this->cif2;
    }

    public function setCif2(?Client $cif2): self
    {
        $this->cif2 = $cif2;

        return $this;
    }

    /**
     * @return Collection|Haie[]
     */
    public function getNumHaie(): Collection
    {
        return $this->numHaie;
    }

    public function addNumHaie(Haie $numHaie): self
    {
        if (!$this->numHaie->contains($numHaie)) {
            $this->numHaie[] = $numHaie;
            $numHaie->addNumDevi($this);
        }

        return $this;
    }

    public function removeNumHaie(Haie $numHaie): self
    {
        if ($this->numHaie->removeElement($numHaie)) {
            $numHaie->removeNumDevi($this);
        }

        return $this;
    }

}
