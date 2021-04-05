<?php

namespace App\Entity;

use App\Repository\PostingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostingRepository::class)
 */
class Posting
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $meuble;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_pieces;

    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
     * @ORM\Column(type="integer")
     */
    private $loyer;

    /**
     * @ORM\Column(type="integer")
     */
    private $caution;

    /**
     * @ORM\Column(type="date")
     */
    private $date_debut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duree_bail;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cave;

    /**
     * @ORM\Column(type="boolean")
     */
    private $place_parking;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ascenseur;

    /**
     * @ORM\Column(type="boolean")
     */
    private $gardien;

    /**
     * @ORM\Column(type="boolean")
     */
    private $balcon;

    /**
     * @ORM\Column(type="boolean")
     */
    private $cuisine_equipee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $toilette_separee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo4;

    /**
     * @ORM\Column(type="string", length=255)
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
        return $this->nombre_pieces;
    }

    public function setNombrePieces(int $nombre_pieces): self
    {
        $this->nombre_pieces = $nombre_pieces;

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
        return $this->date_debut;
    }

    public function setDateDebut(\DateTimeInterface $date_debut): self
    {
        $this->date_debut = $date_debut;

        return $this;
    }

    public function getDureeBail(): ?int
    {
        return $this->duree_bail;
    }

    public function setDureeBail(?int $duree_bail): self
    {
        $this->duree_bail = $duree_bail;

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
        return $this->place_parking;
    }

    public function setPlaceParking(bool $place_parking): self
    {
        $this->place_parking = $place_parking;

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
        return $this->cuisine_equipee;
    }

    public function setCuisineEquipee(bool $cuisine_equipee): self
    {
        $this->cuisine_equipee = $cuisine_equipee;

        return $this;
    }

    public function getToiletteSeparee(): ?bool
    {
        return $this->toilette_separee;
    }

    public function setToiletteSeparee(bool $toilette_separee): self
    {
        $this->toilette_separee = $toilette_separee;

        return $this;
    }

    public function getphoto1(): ?string
    {
        return $this->photo1;
    }

    public function setphoto1(string $photo1): self
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
