<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
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
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Admin;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\News", mappedBy="Author", cascade={"persist", "remove"})
     */
    private $news;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getAdmin(): ?int
    {
        return $this->Admin;
    }

    public function setAdmin(int $Admin): self
    {
        $this->Admin = $Admin;

        return $this;
    }

    public function getNews(): ?News
    {
        return $this->news;
    }

    public function setNews(News $news): self
    {
        $this->news = $news;

        // set the owning side of the relation if necessary
        if ($this !== $news->getAuthor()) {
            $news->setAuthor($this);
        }

        return $this;
    }
}
