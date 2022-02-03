<?php

namespace App\Entity;

use DateInterval;
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Tricks;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
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
    private $content;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creation_date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity=tricks::class, inversedBy="comments", cascade={"remove"})
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $trick;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    { 
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {   
        $timeNow = new \DateTime('now');
        $timeNow->add(new DateInterval('PT1H'));
        $this->creation_date = $timeNow;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getTrick(): ?tricks
    {
        return $this->trick;
    }

    public function setTrick(?tricks $trick): self
    {
        $this->trick = $trick;

        return $this;
    }
}
