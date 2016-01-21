<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * LoginAttempts
 *
 * @Table(name="login_attempts")
 * @Entity
 */
class LoginAttempts
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
     * @var string $login
     *
     * @Column(name="login", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $login;

    /**
     * @var integer $time
     *
     * @Column(name="time", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $time;


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
     * @return LoginAttempts
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
     * Set login
     *
     * @param string $login
     * @return LoginAttempts
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set time
     *
     * @param integer $time
     * @return LoginAttempts
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return integer 
     */
    public function getTime()
    {
        return $this->time;
    }
}