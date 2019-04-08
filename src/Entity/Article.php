<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
    private $title;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imalgesAlt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $updatedAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $isPublished;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbViews;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImalgesAlt(): ?string
    {
        return $this->imalgesAlt;
    }

    public function setImalgesAlt(string $imalgesAlt): self
    {
        $this->imalgesAlt = $imalgesAlt;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?bool
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(bool $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getIsPublished(): ?int
    {
        return $this->isPublished;
    }

    public function setIsPublished(int $isPublished): self
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    public function getNbViews(): ?string
    {
        return $this->nbViews;
    }

    public function setNbViews(string $nbViews): self
    {
        $this->nbViews = $nbViews;

        return $this;
    }
}
