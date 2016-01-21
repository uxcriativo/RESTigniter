<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @Table(name="users")
 * @Entity
 */
class Users
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $ipAddress
     *
     * @Column(name="ip_address", type="string", length=15, precision=0, scale=0, nullable=false, unique=false)
     */
    private $ipAddress;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @Column(name="salt", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $salt;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var string $activationCode
     *
     * @Column(name="activation_code", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    private $activationCode;

    /**
     * @var string $forgottenPasswordCode
     *
     * @Column(name="forgotten_password_code", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    private $forgottenPasswordCode;

    /**
     * @var integer $forgottenPasswordTime
     *
     * @Column(name="forgotten_password_time", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $forgottenPasswordTime;

    /**
     * @var string $rememberCode
     *
     * @Column(name="remember_code", type="string", length=40, precision=0, scale=0, nullable=true, unique=false)
     */
    private $rememberCode;

    /**
     * @var integer $createdOn
     *
     * @Column(name="created_on", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $createdOn;

    /**
     * @var integer $lastLogin
     *
     * @Column(name="last_login", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lastLogin;

    /**
     * @var boolean $active
     *
     * @Column(name="active", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $active;

    /**
     * @var string $firstName
     *
     * @Column(name="first_name", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @Column(name="last_name", type="string", length=50, precision=0, scale=0, nullable=true, unique=false)
     */
    private $lastName;

    /**
     * @var string $company
     *
     * @Column(name="company", type="string", length=100, precision=0, scale=0, nullable=true, unique=false)
     */
    private $company;

    /**
     * @var string $phone
     *
     * @Column(name="phone", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $phone;


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
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return Users
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Users
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set activationCode
     *
     * @param string $activationCode
     * @return Users
     */
    public function setActivationCode($activationCode)
    {
        $this->activationCode = $activationCode;
        return $this;
    }

    /**
     * Get activationCode
     *
     * @return string 
     */
    public function getActivationCode()
    {
        return $this->activationCode;
    }

    /**
     * Set forgottenPasswordCode
     *
     * @param string $forgottenPasswordCode
     * @return Users
     */
    public function setForgottenPasswordCode($forgottenPasswordCode)
    {
        $this->forgottenPasswordCode = $forgottenPasswordCode;
        return $this;
    }

    /**
     * Get forgottenPasswordCode
     *
     * @return string 
     */
    public function getForgottenPasswordCode()
    {
        return $this->forgottenPasswordCode;
    }

    /**
     * Set forgottenPasswordTime
     *
     * @param integer $forgottenPasswordTime
     * @return Users
     */
    public function setForgottenPasswordTime($forgottenPasswordTime)
    {
        $this->forgottenPasswordTime = $forgottenPasswordTime;
        return $this;
    }

    /**
     * Get forgottenPasswordTime
     *
     * @return integer 
     */
    public function getForgottenPasswordTime()
    {
        return $this->forgottenPasswordTime;
    }

    /**
     * Set rememberCode
     *
     * @param string $rememberCode
     * @return Users
     */
    public function setRememberCode($rememberCode)
    {
        $this->rememberCode = $rememberCode;
        return $this;
    }

    /**
     * Get rememberCode
     *
     * @return string 
     */
    public function getRememberCode()
    {
        return $this->rememberCode;
    }

    /**
     * Set createdOn
     *
     * @param integer $createdOn
     * @return Users
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return integer 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     * @return Users
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return integer 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Users
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Users
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return Users
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Users
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }
}