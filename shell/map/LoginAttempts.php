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
     * @var string $login
     *
     * @Column(name="login", type="string", length=100, nullable=false)
     */
    private $login;

    /**
     * @var integer $time
     *
     * @Column(name="time", type="integer", nullable=true)
     */
    private $time;


}