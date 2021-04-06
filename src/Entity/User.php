<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="justif_domicile", type="text", length=65535, nullable=false)
     */
    private $justifDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="justif_ressource", type="text", length=65535, nullable=false)
     */
    private $justifRessource;

    /**
     * @var string
     *
     * @ORM\Column(name="justif_situation", type="text", length=65535, nullable=false)
     */
    private $justifSituation;

    /**
     * @var int
     *
     * @ORM\Column(name="note_individuelle", type="integer", nullable=false)
     */
    private $noteIndividuelle;

    /**
     * @var int
     *
     * @ORM\Column(name="note_annonce", type="integer", nullable=false)
     */
    private $noteAnnonce;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getJustifDomicile(): ?string
    {
        return $this->justifDomicile;
    }

    public function setJustifDomicile(string $justifDomicile): self
    {
        $this->justifDomicile = $justifDomicile;

        return $this;
    }

    public function getJustifRessource(): ?string
    {
        return $this->justifRessource;
    }

    public function setJustifRessource(string $justifRessource): self
    {
        $this->justifRessource = $justifRessource;

        return $this;
    }

    public function getJustifSituation(): ?string
    {
        return $this->justifSituation;
    }

    public function setJustifSituation(string $justifSituation): self
    {
        $this->justifSituation = $justifSituation;

        return $this;
    }

    public function getNoteIndividuelle(): ?int
    {
        return $this->noteIndividuelle;
    }

    public function setNoteIndividuelle(int $noteIndividuelle): self
    {
        $this->noteIndividuelle = $noteIndividuelle;

        return $this;
    }

    public function getNoteAnnonce(): ?int
    {
        return $this->noteAnnonce;
    }

    public function setNoteAnnonce(int $noteAnnonce): self
    {
        $this->noteAnnonce = $noteAnnonce;

        return $this;
    }


}
