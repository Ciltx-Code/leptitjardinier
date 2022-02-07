<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Haie
 *
 * @ORM\Table(name="haie", indexes={@ORM\Index(name="IDX_1F24E4DEBCF5E72D", columns={"categorie_id"})})
 * @ORM\Entity
 */
class Haie
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Devis", inversedBy="numHaie")
     * @ORM\JoinTable(name="tailler",
     *   joinColumns={
     *     @ORM\JoinColumn(name="num_haie", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="num_devis", referencedColumnName="id")
     *   }
     * )
     */
    private $numDevis;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numDevis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection|Devis[]
     */
    public function getNumDevis(): Collection
    {
        return $this->numDevis;
    }

    public function addNumDevi(Devis $numDevi): self
    {
        if (!$this->numDevis->contains($numDevi)) {
            $this->numDevis[] = $numDevi;
        }

        return $this;
    }

    public function removeNumDevi(Devis $numDevi): self
    {
        $this->numDevis->removeElement($numDevi);

        return $this;
    }

}
