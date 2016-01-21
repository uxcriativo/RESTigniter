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
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $ipAddress
     *
     * @Column(name="ip_address", type="string", length=15, nullable=false)
     */
    private $ipAddress;

    /**
     * @var string $username
     *
     * @Column(name="username", type="string", length=100, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string $salt
     *
     * @Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string $activationCode
     *
     * @Column(name="activation_code", type="string", length=40, nullable=true)
     */
    private $activationCode;

    /**
     * @var string $forgottenPasswordCode
     *
     * @Column(name="forgotten_password_code", type="string", length=40, nullable=true)
     */
    private $forgottenPasswordCode;

    /**
     * @var integer $forgottenPasswordTime
     *
     * @Column(name="forgotten_password_time", type="integer", nullable=true)
     */
    private $forgottenPasswordTime;

    /**
     * @var string $rememberCode
     *
     * @Column(name="remember_code", type="string", length=40, nullable=true)
     */
    private $rememberCode;

    /**
     * @var integer $createdOn
     *
     * @Column(name="created_on", type="integer", nullable=false)
     */
    private $createdOn;

    /**
     * @var integer $lastLogin
     *
     * @Column(name="last_login", type="integer", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean $active
     *
     * @Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string $firstName
     *
     * @Column(name="first_name", type="string", length=50, nullable=true)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @Column(name="last_name", type="string", length=50, nullable=true)
     */
    private $lastName;

    /**
     * @var string $company
     *
     * @Column(name="company", type="string", length=100, nullable=true)
     */
    private $company;

    /**
     * @var string $phone
     *
     * @Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;


}