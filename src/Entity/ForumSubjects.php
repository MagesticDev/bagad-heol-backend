<?php

namespace App\Entity;

use App\Repository\ForumSubjectsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ForumSubjectsRepository::class)
 */
class ForumSubjects
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $forumId;

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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotNull
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondAuthor;

    /**
     * @ORM\Column(type="string")
     */
    private $lastPost;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $lastAuthor;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     * @Assert\NotNull
     */
    private $creatAt;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $lastTime;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $numberReads = 0;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull 
     */
    private $numberResponses = 0;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasClosed = false; 

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasRule = false; 

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotNull
     */
    private $type = 1;

    public function __construct(){
        $this->creatAt(new Assert\DateTime());
        $this->ip(new Assert\Ip());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getForumId(): ?int
    {
        return $this->forumId;
    }

    public function setForumId(int $forumId): self
    {
        $this->forumId = $forumId;

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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getSecondAuthor(): ?string
    {
        return $this->secondAuthor;
    }

    public function setSecondAuthor(string $secondAuthor): self
    {
        $this->secondAuthor = $secondAuthor;

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

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creatAt;
    }

    public function setCreatAt(\DateTimeInterface $creatAt): self
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    public function getLastTime(): ?\DateTimeInterface
    {
        return $this->lastTime;
    }

    public function setLastTime(\DateTimeInterface $lastTime): self
    {
        $this->lastTime = $lastTime;

        return $this;
    }

    public function getNumberReads(): ?int
    {
        return $this->numberReads;
    }

    public function setNumberReads(int $numberReads): self
    {
        $this->numberReads = $numberReads;

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

    public function getHasClosed(): ?bool
    {
        return $this->hasClosed;
    }

    public function setHasClosed(bool $hasClosed): self
    {
        $this->hasClosed = $hasClosed;

        return $this;
    }

    public function getHasRule(): ?bool
    {
        return $this->hasRule;
    }

    public function setHasRule(bool $hasRule): self
    {
        $this->hasRule = $hasRule;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    } 

}
