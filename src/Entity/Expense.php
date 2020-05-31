<?php

namespace App\Entity;

use App\Repository\ExpenseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExpenseRepository::class)
 */
class Expense
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $expense;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exp_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $exp_amount;

    /**
     * @ORM\Column(type="datetime")
     */
    private $exp_createdAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exp_cat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExpense(): ?string
    {
        return $this->expense;
    }

    public function setExpense(string $expense): self
    {
        $this->expense = $expense;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getExpName(): ?string
    {
        return $this->exp_name;
    }

    public function setExpName(string $exp_name): self
    {
        $this->exp_name = $exp_name;

        return $this;
    }

    public function getExpAmount(): ?int
    {
        return $this->exp_amount;
    }

    public function setExpAmount(int $exp_amount): self
    {
        $this->exp_amount = $exp_amount;

        return $this;
    }

    public function getExpCreatedAt(): ?\DateTimeInterface
    {
        return $this->exp_createdAt;
    }

    public function setExpCreatedAt(\DateTimeInterface $exp_createdAt): self
    {
        $this->exp_createdAt = $exp_createdAt;

        return $this;
    }

    public function getExpCat(): ?string
    {
        return $this->exp_cat;
    }

    public function setExpCat(string $exp_cat): self
    {
        $this->exp_cat = $exp_cat;

        return $this;
    }
}
