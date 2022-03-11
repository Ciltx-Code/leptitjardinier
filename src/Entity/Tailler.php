<?php

namespace App\Entity;

use App\Repository\TaillerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaillerRepository::class)
 */
class Tailler
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $hauteur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $longueur;

    /**
     * @ORM\ManyToOne(targetEntity=haie::class, inversedBy="taillers")
     */
    private $haie;

    /**
     * @ORM\ManyToOne(targetEntity=devis::class, inversedBy="taillers")
     */
    private $devis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    public function setHauteur(?int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getLongueur(): ?int
    {
        return $this->longueur;
    }

    public function setLongueur(?int $longueur): self
    {
        $this->longueur = $longueur;

        return $this;
    }

    public function getHaie(): ?haie
    {
        return $this->haie;
    }

    public function setHaie(?haie $haie): self
    {
        $this->haie = $haie;

        return $this;
    }

    public function getDevis(): ?devis
    {
        return $this->devis;
    }

    public function setDevis(?devis $devis): self
    {
        $this->devis = $devis;

        return $this;
    }
}
