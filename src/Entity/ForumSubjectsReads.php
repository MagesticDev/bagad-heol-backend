<?php

namespace App\Entity;

use App\Repository\ForumSubjectsReadsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ForumSubjectsReadsRepository::class)
 */
class ForumSubjectsReads
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @Assert\NotNull
     * 
     */
    private $subjectId;

    /**
     * @ORM\Column(type="string", length=15)
     * @Assert\NotNull
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotNull
     */
    private $ip;

    public function __construct(){
        $this->ip(new Assert\Ip());
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

}
