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
     * @Column(name="id", type="string", length=40, precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $ipAddress
     *
     * @Column(name="ip_address", type="string", length=45, precision=0, scale=0, nullable=false, unique=false)
     */
    private $ipAddress;

    /**
     * @var integer $timestamp
     *
     * @Column(name="timestamp", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $timestamp;

    /**
     * @var blob $data
     *
     * @Column(name="data", type="blob", precision=0, scale=0, nullable=false, unique=false)
     */
    private $data;


    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return Sessions
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
     * Set timestamp
     *
     * @param integer $timestamp
     * @return Sessions
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return integer 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set data
     *
     * @param blob $data
     * @return Sessions
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Get data
     *
     * @return blob 
     */
    public function getData()
    {
        return $this->data;
    }
}