<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $departure = null;

    #[ORM\Column(length: 255)]
    private ?string $destination = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    public ?\DateTimeInterface $departure_time = null;

    #[ORM\Column]
    private ?int $seats_available = null;

    #[ORM\Column]
    public ?float $price_per_seat = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeparture(): ?string
    {
        return $this->departure;
    }

    public function setDeparture(string $departure): static
    {
        $this->departure = $departure;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): static
    {
        $this->destination = $destination;

        return $this;
    }

    public function getDepartureTime(): ?\DateTimeInterface
    {
        return $this->departure_time;
    }

    public function setDepartureTime(\DateTimeInterface $departure_time): static
    {
        $this->departure_time = $departure_time;

        return $this;
    }

    public function getSeatsAvailable(): ?int
    {
        return $this->seats_available;
    }

    public function setSeatsAvailable(int $seats_available): static
    {
        $this->seats_available = $seats_available;

        return $this;
    }

    public function getPricePerSeat(): ?float
    {
        return $this->price_per_seat;
    }

    public function setPricePerSeat(float $price_per_seat): static
    {
        $this->price_per_seat = $price_per_seat;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
