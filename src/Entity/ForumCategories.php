<?php

namespace App\Entity;

use App\Repository\ForumCategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ForumCategoriesRepository::class)
 */
class ForumCategories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity=Forum::class, mappedBy="categoryId", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $forum;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotNull
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $position = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasAdmin = false;

    public function __construct()
    {
        $this->forum = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getHasAdmin(): ?bool
    {
        return $this->hasAdmin;
    }

    public function setHasAdmin(bool $hasAdmin): self
    {
        $this->hasAdmin = $hasAdmin;

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }
    public function setCategory(?Category $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return Collection|Forum[]
     */
    public function getForum(): Collection
    {
        return $this->forum;
    }

    public function addForum(Forum $forum): self
    {
        if (!$this->forum->contains($forum)) {
            $this->forum[] = $forum;
            $forum->setCategory($this);
        }

        return $this;
    }

    public function removeForum(Forum $forum): self
    {
        if ($this->forum->removeElement($forum)) {
            // set the owning side to null (unless already changed)
            if ($forum->getCategory() === $this) {
                $forum->setCategory(null);
            }
        }

        return $this;
    }

    
}
