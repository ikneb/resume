<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="education")
 */
class Education
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
     * @ORM\Column(type="string", length=100)
     */
    protected $summary;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $faculty;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $university;

    /**
     * @ORM\Column(type="date")
     */
    protected $andYear;

    /**
     * @ORM\Column(type="date")
     */
    protected $finishYear;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="education")
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
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param mixed $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return mixed
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * @param mixed $faculty
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;
    }

    /**
     * @return mixed
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param mixed $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }

    /**
     * @return mixed
     */
    public function getAndYear()
    {
        return $this->andYear;
    }

    /**
     * @param mixed $andYear
     */
    public function setAndYear($andYear)
    {
        $this->andYear = $andYear;
    }

    /**
     * @return mixed
     */
    public function getFinishYear()
    {
        return $this->finishYear;
    }

    /**
     * @param mixed $finishYear
     */
    public function setFinishYear($finishYear)
    {
        $this->finishYear = $finishYear;
    }



}