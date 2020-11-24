<?php

namespace App\Entity;

use App\Repository\ForumRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
  * @ORM\Entity(repositoryClass=ForumRepository::class)
 */
class Forum
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @Assert\NotNull
     * @ORM\ManyToOne(targetEntity=ForumCategories::class, inversedBy="forum")
     * @ORM\Column(type="integer")
     */
    private $categoryId;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotNull
     */
    private $description;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberSubjects = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberResponses = 0;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastPost;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastAuthor;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $right = 0;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $background;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $guilde;

     /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $position = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;
        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNumberSubjects(): ?int
    {
        return $this->numberSubjects;
    }

    public function setNumberSubjects(int $numberSubjects): self
    {
        $this->numberSubjects = $numberSubjects;

        return $this;
    }

    public function getNumberResponses(): ?int
    {
        return $this->numberResponses;
    }

    public function setNumberResponses(int $numberResponses): self
    {
        $this->numberResponses = $numberResponses;

        return $this;
    }

    public function getLastPost(): ?string
    {
        return $this->lastPost;
    }

    public function setLastPost(string $lastPost): self
    {
        $this->lastPost = $lastPost;

        return $this;
    }

    public function getLastAuthor(): ?string
    {
        return $this->lastAuthor;
    }

    public function setLastAuthor(string $lastAuthor): self
    {
        $this->lastAuthor = $lastAuthor;

        return $this;
    }

    public function getRight(): ?int
    {
        return $this->right;
    }

    public function setRight(int $right): self
    {
        $this->right = $right;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

    public function getGuilde(): ?string
    {
        return $this->guilde;
    }

    public function setGuilde(string $guilde): self
    {
        $this->guilde = $guilde;

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

}
