<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posting
 *
 * @ORM\Table(name="posting")
 * @ORM\Entity
 */
class Posting
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
     * @ORM\Column(name="adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="meuble", type="boolean", nullable=false)
     */
    private $meuble;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_pieces", type="integer", nullable=false)
     */
    private $nombrePieces;

    /**
     * @var int
     *
     * @ORM\Column(name="superficie", type="integer", nullable=false)
     */
    private $superficie;

    /**
     * @var int
     *
     * @ORM\Column(name="loyer", type="integer", nullable=false)
     */
    private $loyer;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer", nullable=false)
     */
    private $caution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree_bail", type="integer", nullable=true)
     */
    private $dureeBail;

    /**
     * @var bool
     *
     * @ORM\Column(name="cave", type="boolean", nullable=false)
     */
    private $cave;

    /**
     * @var bool
     *
     * @ORM\Column(name="place_parking", type="boolean", nullable=false)
     */
    private $placeParking;

    /**
     * @var bool
     *
     * @ORM\Column(name="ascenseur", type="boolean", nullable=false)
     */
    private $ascenseur;

    /**
     * @var bool
     *
     * @ORM\Column(name="gardien", type="boolean", nullable=false)
     */
    private $gardien;

    /**
     * @var bool
     *
     * @ORM\Column(name="balcon", type="boolean", nullable=false)
     */
    private $balcon;

    /**
     * @var bool
     *
     * @ORM\Column(name="cuisine_equipee", type="boolean", nullable=false)
     */
    private $cuisineEquipee;

    /**
     * @var bool
     *
     * @ORM\Column(name="toilette_separee", type="boolean", nullable=false)
     */
    private $toiletteSeparee;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="string", length=255, nullable=false)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="string", length=255, nullable=false)
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="string", length=255, nullable=false)
     */
    private $photo3;

    /**
     * @var string
     *
     * @ORM\Column(name="photo4", type="string", length=255, nullable=false)
     */
    private $photo4;

    /**
     * @var string
     *
     * @ORM\Column(name="photo5", type="string", length=255, nullable=false)
     */
    private $photo5;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMeuble(): ?bool
    {
        return $this->meuble;
    }

    public function setMeuble(bool $meuble): self
    {
        $this->meuble = $meuble;

        return $this;
    }

    public function getNombrePieces(): ?int
    {
        return $this->nombrePieces;
    }

    public function setNombrePieces(int $nombrePieces): self
    {
        $this->nombrePieces = $nombrePieces;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getLoyer(): ?int
    {
        return $this->loyer;
    }

    public function setLoyer(int $loyer): self
    {
        $this->loyer = $loyer;

        return $this;
    }

    public function getCaution(): ?int
    {
        return $this->caution;
    }

    public function setCaution(int $caution): self
    {
        $this->caution = $caution;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDureeBail(): ?int
    {
        return $this->dureeBail;
    }

    public function setDureeBail(?int $dureeBail): self
    {
        $this->dureeBail = $dureeBail;

        return $this;
    }

    public function getCave(): ?bool
    {
        return $this->cave;
    }

    public function setCave(bool $cave): self
    {
        $this->cave = $cave;

        return $this;
    }

    public function getPlaceParking(): ?bool
    {
        return $this->placeParking;
    }

    public function setPlaceParking(bool $placeParking): self
    {
        $this->placeParking = $placeParking;

        return $this;
    }

    public function getAscenseur(): ?bool
    {
        return $this->ascenseur;
    }

    public function setAscenseur(bool $ascenseur): self
    {
        $this->ascenseur = $ascenseur;

        return $this;
    }

    public function getGardien(): ?bool
    {
        return $this->gardien;
    }

    public function setGardien(bool $gardien): self
    {
        $this->gardien = $gardien;

        return $this;
    }

    public function getBalcon(): ?bool
    {
        return $this->balcon;
    }

    public function setBalcon(bool $balcon): self
    {
        $this->balcon = $balcon;

        return $this;
    }

    public function getCuisineEquipee(): ?bool
    {
        return $this->cuisineEquipee;
    }

    public function setCuisineEquipee(bool $cuisineEquipee): self
    {
        $this->cuisineEquipee = $cuisineEquipee;

        return $this;
    }

    public function getToiletteSeparee(): ?bool
    {
        return $this->toiletteSeparee;
    }

    public function setToiletteSeparee(bool $toiletteSeparee): self
    {
        $this->toiletteSeparee = $toiletteSeparee;

        return $this;
    }

    public function getPhoto1(): ?string
    {
        return $this->photo1;
    }

    public function setPhoto1(string $photo1): self
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?string
    {
        return $this->photo2;
    }

    public function setPhoto2(string $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?string
    {
        return $this->photo3;
    }

    public function setPhoto3(string $photo3): self
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getPhoto4(): ?string
    {
        return $this->photo4;
    }

    public function setPhoto4(string $photo4): self
    {
        $this->photo4 = $photo4;

        return $this;
    }

    public function getPhoto5(): ?string
    {
        return $this->photo5;
    }

    public function setPhoto5(string $photo5): self
    {
        $this->photo5 = $photo5;

        return $this;
    }


}
