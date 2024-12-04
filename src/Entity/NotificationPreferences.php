<?php

namespace App\Entity;

use App\Repository\NotificationPreferencesRepository;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: NotificationPreferencesRepository::class)]
class NotificationPreferences
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Relation ManyToOne, car chaque NotificationPreferences appartient à un seul User
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'notificationPreferences')]
    #[ORM\JoinColumn(nullable: false)]  // Si vous souhaitez que la relation soit obligatoire
    private ?User $user = null;

    #[ORM\Column]
    private ?bool $receiveBookingReminders = null;

    #[ORM\Column]
    private ?bool $receiveNewTripAlerts = null;

    public function __construct()
    {
        // Pas besoin de Collection ici, car il ne s'agit pas d'une relation OneToMany
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function isReceiveBookingReminders(): ?bool
    {
        return $this->receiveBookingReminders;
    }

    public function setReceiveBookingReminders(bool $receiveBookingReminders): self
    {
        $this->receiveBookingReminders = $receiveBookingReminders;

        return $this;
    }

    public function isReceiveNewTripAlerts(): ?bool
    {
        return $this->receiveNewTripAlerts;
    }

    public function setReceiveNewTripAlerts(bool $receiveNewTripAlerts): self
    {
        $this->receiveNewTripAlerts = $receiveNewTripAlerts;

        return $this;
    }
}
