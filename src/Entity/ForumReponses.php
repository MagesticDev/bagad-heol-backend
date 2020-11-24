<?php

namespace App\Entity;

use App\Repository\ForumReponsesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ForumReponsesRepository::class)
 */
class ForumReponses
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotNull
     */
    private $subjectId;

    /**
     * @ORM\Column(type="text", length=65535)
     * @Assert\NotNull
     */
    private $content;

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
     * @ORM\Column(type="string", length=255)
     */
    private $authorModif;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     * @Assert\NotNull
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\DateTime
     */
    private $modifAt;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Ip()
     * @Assert\NotNull
     */
    private $ip;

    /**
     * @ORM\Column(type="boolean")
     */
    private $firstResponses = false;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imgNew;

    public function __construct(){
        $this->creatAt(new Assert\DateTime());
        $this->ip(new Assert\Ip());
    }

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

    public function getAuthorModif(): ?string
    {
        return $this->authorModif;
    }

    public function setAuthorModif(string $authorModif): self
    {
        $this->authorModif = $authorModif;

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

    public function getModifAt(): ?\DateTimeInterface
    {
        return $this->modifAt;
    }

    public function setModifAt(\DateTimeInterface $modifAt): self
    {
        $this->modifAt = $modifAt;

        return $this;
    }

    public function getIp(): ?int
    {
        return $this->ip;
    }

    public function setIp(int $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getFirstResponses(): ?bool
    {
        return $this->firstResponses;
    }

    public function setFirstResponses(bool $firstResponses): self
    {
        $this->firstResponses = $firstResponses;

        return $this;
    }

    public function getImgNew(): ?string
    {
        return $this->imgNew;
    }

    public function setImgNew(string $imgNew): self
    {
        $this->imgNew = $imgNew;

        return $this;
    }

    public function getSubjectId(): ?ForumSubjects
    {
        return $this->subjectId;
    }

    public function setSubjectId(?ForumSubjects $subjectId): self
    {
        $this->subjectId = $subjectId;

        return $this;
    }

}
