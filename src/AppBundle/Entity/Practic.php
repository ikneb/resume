<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="practic")
 */
class Practic
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", length=50)
     */
    protected $id_user;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $position;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $value;
    /**
     * @ORM\Column(type="date")
     */
    protected $startDate;

    /**
     * @ORM\Column(type="date")
     */
    protected $finishDate;
    
    /**
     * ORM\Column(type="string")
     */
    protected $responsibilities;
    
    /**
     * ORM\Column(type="string")
     */
    protected $demo;
    
    /**
     * ORM\Column(type="string")
     */
    protected $src;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="practic")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $user;

    /**
     * @return mixed
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param $user
     * @return $this
     */
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }

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
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * @param mixed $finishDate
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
    }

    /**
     * @return mixed
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * @param mixed $responsibilities
     */
    public function setResponsibilities($responsibilities)
    {
        $this->responsibilities = $responsibilities;
    }

    /**
     * @return mixed
     */
    public function getDemo()
    {
        return $this->demo;
    }

    /**
     * @param mixed $demo
     */
    public function setDemo($demo)
    {
        $this->demo = $demo;
    }

    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }
    
    

}
