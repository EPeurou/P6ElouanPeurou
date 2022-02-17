<?php

namespace App\Entity;

use App\Repository\TricksRepository;
use DateInterval;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TricksRepository::class)
 */
class Tricks
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idType;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;
    
    public function __toString() :string {
        return $this->name;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creation_date;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $Media = [];

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="trick")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $comments;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @ORM\Column(type="simple_array", nullable=true)
     */
    private $mainImage = [];

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $update_date;

    // /**
    //  * @ORM\Column(type="simple_array", nullable=true)
    //  */
    // private $embed = [];

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $embedsingle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    public function __construct()
    {
        $this->media = new ArrayCollection();
        $timeNow = new \DateTime('now');
        $timeNow->add(new DateInterval('PT1H'));
        $this->creation_date = $timeNow;
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdType(): ?int
    {
        return $this->idType;
    }

    public function setIdType(?int $idType): self
    {
        $this->idType = $idType;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getNameUrl(): ?string
    {
        $name = $this->name;
        $nameUrl = str_replace(" ", "-", $name);
        $this->slug = $nameUrl;
        return $this->slug;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creation_date;
    }

    public function setCreationDate(\DateTimeInterface $creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getMedia(): ?array
    {
        return $this->Media;
    }

    public function setMedia(array $Media): self
    {
        $this->Media = $Media;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setTrick($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getTrick() === $this) {
                $comment->setTrick(null);
            }
        }

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMainImage()
    {
        return $this->mainImage;
    }

    public function setMainImage($mainImage): self
    {
        $this->mainImage = $mainImage;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->update_date;
    }

    public function setUpdateDate(?\DateTimeInterface $update_date): self
    {
        $this->update_date = $update_date;

        return $this;
    }

    

    public function getEmbedsingle(): ?string
    {
        return $this->embedsingle;
    }

    public function setEmbedsingle(?string $embedsingle): self
    {
        $this->embedsingle = $embedsingle;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

}
