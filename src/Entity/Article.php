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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Title;

    /**
     * @ORM\Column(type="text")
     */
    private $Content;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $MoreContent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $TitleEN;

    /**
     * @ORM\Column(type="text")
     */
    private $ContentEN;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $MoreContentEN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $File;

    /**
     * @ORM\Column(type="date")
     */
    private $PublishedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="article", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Author;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $Priority;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getMoreContent(): ?string
    {
        return $this->MoreContent;
    }

    public function setMoreContent(?string $MoreContent): self
    {
        $this->MoreContent = $MoreContent;

        return $this;
    }

    public function getTitleEN(): ?string
    {
        return $this->TitleEN;
    }

    public function setTitleEN(string $TitleEN): self
    {
        $this->TitleEN = $TitleEN;

        return $this;
    }

    public function getContentEN(): ?string
    {
        return $this->ContentEN;
    }

    public function setContentEN(string $ContentEN): self
    {
        $this->ContentEN = $ContentEN;

        return $this;
    }

    public function getMoreContentEN(): ?string
    {
        return $this->MoreContentEN;
    }

    public function setMoreContentEN(?string $MoreContentEN): self
    {
        $this->MoreContentEN = $MoreContentEN;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->File;
    }

    public function setFile(?string $File): self
    {
        $this->File = $File;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->PublishedAt;
    }

    public function setPublishedAt(\DateTimeInterface $PublishedAt): self
    {
        $this->PublishedAt = $PublishedAt;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->Author;
    }

    public function setAuthor(User $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->Priority;
    }

    public function setPriority(?int $Priority): self
    {
        $this->Priority = $Priority;

        return $this;
    }
}
