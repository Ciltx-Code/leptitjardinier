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
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=false)
     */
    public $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    public $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=5, scale=2, nullable=false)
     */
    public $prix;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    public $categorie;

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
    public $numDevis;

    /**
     * @ORM\OneToMany(targetEntity=Devis::class, mappedBy="typeHaie")
     */
    private $devis;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrix(): string
    {
        return $this->prix;
    }

    /**
     * @param string $prix
     */
    public function setPrix(string $prix): void
    {
        $this->prix = $prix;
    }


    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNumDevis()
    {
        return $this->numDevis;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $numDevis
     */
    public function setNumDevis($numDevis): void
    {
        $this->numDevis = $numDevis;
    }

    public function __toString()
    {
        return $this->nom;
    }


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->numDevis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->devis = new ArrayCollection();
    }

    /**
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setTypeHaie($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getTypeHaie() === $this) {
                $devi->setTypeHaie(null);
            }
        }

        return $this;
    }

}
