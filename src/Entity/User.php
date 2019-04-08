<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields="email", message="This e-mail is already used")
 * @uniqueEntity(fields="username", message="This username is already used")
 * @ORM\Table(name="gotmy_users")
 */
class User implements UserInterface,\Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer") 
     */
    private $id;

     /**
     * @ORM\Column(type="string", length=50, unique=true,name="user_username")
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=50)
     */
    private $username;

    /**
     * @ORM\Column(type="string",name="user_password")
     */
    private $password;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min=8, max=4096)
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=30, unique=true,name="user_email")
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true,name="user_name")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true,name="user_surname_1")   
     */
    private $surname_1;
      /**
     * @ORM\Column(type="string", nullable=true,name="user_surname_2") 
     
     */
    private $surname_2;

     /**
     * @ORM\Column(type="datetime", nullable=true,name="user_birth_date")
    
     */
      

    public function getRoles()
    {
        return [
            'ROLE_USER'
        ];
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function eraseCredentials()
    {
    }

    public function serialize()
    {
        return serialize([
            $this->id,
            $this->username,
            $this->password
        ]);
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password) = unserialize($serialized);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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
    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
      /**
        * @param mixed $plainPassword
        */
    public function setPlainPassword($plainPassword): void
    {
        $this->plainPassword = $plainPassword;
    }

    public function getSurname1(): ?string
    {
        return $this->surname_1;
    }

    public function setSurname1(string $surname_1): self
    {
        $this->surname_1 = $surname_1;

        return $this;
    }

    public function getSurname2(): ?string
    {
        return $this->surname_2;
    }

    public function setSurname2(string $surname_2): self
    {
        $this->surname_2 = $surname_2;

        return $this;
    }

    

   
}
