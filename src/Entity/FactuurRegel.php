<?php

namespace App\Entity;

use App\Repository\FactuurRegelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRegelRepository::class)
 */
class FactuurRegel
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
    private $aantal;

    /**
     * @ORM\ManyToOne(targetEntity=Factuur::class, inversedBy="factuurRegels")
     */
    private $Factuur_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAantal(): ?int
    {
        return $this->aantal;
    }

    public function setAantal(int $aantal): self
    {
        $this->aantal = $aantal;

        return $this;
    }

    public function getFactuurId(): ?Factuur
    {
        return $this->Factuur_id;
    }

    public function setFactuurId(?Factuur $Factuur_id): self
    {
        $this->Factuur_id = $Factuur_id;

        return $this;
    }
    public function __toString()
    {
        return $this->id.' -> '.$this->getAantal();
    }
}
