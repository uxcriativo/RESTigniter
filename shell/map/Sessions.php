<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sessions
 *
 * @Table(name="_sessions")
 * @Entity
 */
class Sessions
{
    /**
     * @var string $id
     *
     * @Column(name="id", type="string", length=40, nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $ipAddress
     *
     * @Column(name="ip_address", type="string", length=45, nullable=false)
     */
    private $ipAddress;

    /**
     * @var integer $timestamp
     *
     * @Column(name="timestamp", type="integer", nullable=false)
     */
    private $timestamp;

    /**
     * @var blob $data
     *
     * @Column(name="data", type="blob", nullable=false)
     */
    private $data;


}