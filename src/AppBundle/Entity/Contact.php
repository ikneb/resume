<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", length=11)
     */
    protected $id_user;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $skype;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $vc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $facebook;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $linkedin;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $github;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $stackowerflow;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * @param mixed $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * @return mixed
     */
    public function getVc()
    {
        return $this->vc;
    }

    /**
     * @param mixed $vc
     */
    public function setVc($vc)
    {
        $this->vc = $vc;
    }

    /**
     * @return mixed
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param mixed $linkedin
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @return mixed
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * @param mixed $github
     */
    public function setGithub($github)
    {
        $this->github = $github;
    }

    /**
     * @return mixed
     */
    public function getStackowerflow()
    {
        return $this->stackowerflow;
    }

    /**
     * @param mixed $stackowerflow
     */
    public function setStackowerflow($stackowerflow)
    {
        $this->stackowerflow = $stackowerflow;
    }


}