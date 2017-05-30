<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @UniqueEntity(fields="email", message="This email address is already in use")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id;
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=40)
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $role;

    /**
     * @Assert\Length(max=4096)
     */
    protected $plainPassword;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;

    /**
    * @ORM\Column(type="string", length=64)
    */
    protected $city;

    /**
    * @ORM\Column(type="string", length=64)
    */
    protected $country;


    /**
    * @ORM\Column(type="date", length=64, nullable=true )
    */
    protected $birthDay;

    /**
    * @ORM\Column(type="string", length=64)
    */
    protected $phone;
/**
    * @ORM\Column(type="string", length=100)
    */
    protected $position;

    /**
    * @ORM\Column(type="string", length=255)
    */
    protected $img;

    /**
    * @ORM\Column(type="text")
    */
    protected $objective;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Certificate", mappedBy="user")
     */
    private $certificate;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Cources", mappedBy="user")
     */
    private $cources;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Education", mappedBy="user")
     */
    private $education;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Hobby", mappedBy="user")
     */
    private $hobby;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Language", mappedBy="user")
     */
    private $language;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Practic", mappedBy="user")
     */
    private $practic;

    /**
     * @var int
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Skill", mappedBy="user")
     */
    private $skill;

    public function __construct() {
        $this->certificate = new ArrayCollection();
        $this->cources = new ArrayCollection();
        $this->education = new ArrayCollection();
        $this->hobby = new ArrayCollection();
        $this->language = new ArrayCollection();
        $this->practic = new ArrayCollection();
        $this->skill = new ArrayCollection();
    }
    
    public function getCertificate() {
        return $this->certificate;
    }
    
    public function setCertificate($certificate = null) {
        $this->certificate = $certificate;
    }

    /**
     * @return int
     */
    public function getCources()
    {
        return $this->cources;
    }

    /**
     * @param int $cources
     */
    public function setCources($cources)
    {
        $this->cources = $cources;
    }

    /**
     * @return int
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * @param int $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * @return int
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * @param int $hobby
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }

    /**
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param int $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return int
     */
    public function getPractic()
    {
        return $this->practic;
    }

    /**
     * @param int $practic
     */
    public function setPractic($practic)
    {
        $this->practic = $practic;
    }

    /**
     * @return int
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * @param int $skill
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
    }

    
    public function eraseCredentials()
    {
        return null;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role = null)
    {
        $this->role = $role;
    }

    public function getRoles()
    {
        return [$this->getRole()];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUsername()
    {
        return $this->email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    public function getSalt()
    {
        return null;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * @param mixed $objective
     */
    public function setObjective($objective)
    {
        $this->objective = $objective;
    }


}
