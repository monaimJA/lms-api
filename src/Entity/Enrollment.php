<?php

namespace App\Entity;

use App\Repository\EnrollmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EnrollmentRepository::class)
 */
class Enrollment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $progress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgress(): ?int
    {
        return $this->progress;
    }

    public function setProgress(int $progress): self
    {
        $this->progress = $progress;

        return $this;
    }
}
