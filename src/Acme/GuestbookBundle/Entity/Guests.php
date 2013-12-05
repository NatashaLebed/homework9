<?php
/**
 * Created by PhpStorm.
 * User: natasha
 * Date: 04.12.13
 * Time: 23:01
 */

namespace Acme\GuestbookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="guests")
 */
class Guests
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Regex(pattern="/^[a-z]+$/i", message="Dear Friend! Use only latin letters, please.")
     * @Assert\NotBlank(message = "Friend! This value should not be blank. Input your name, please.")
     */
    protected $user;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Email(message = "Friend! Enter a correct email, please.")
     */
    protected $mail;

    /**
     * @ORM\Column(type="text", length=255)
     * @Assert\NotBlank(message = "Friend! This field should not be blank. Input your email, please.")
     * @Assert\Length(min = 100, minMessage = "Friend! Write me more than {{ limit }} chars.")
     */
    protected $message;

 
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param string $user
     * @return Guests
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Guests
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Guests
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }
}
