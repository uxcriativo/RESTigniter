<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MembersShop
 *
 * @Table(name="members_shop")
 * @Entity
 */
class MembersShop
{
    /**
     * @var integer $idshop
     *
     * @Column(name="IDshop", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idshop;

    /**
     * @var integer $memberid
     *
     * @Column(name="memberID", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $memberid;

    /**
     * @var string $slug
     *
     * @Column(name="slug", type="string", length=128, precision=0, scale=0, nullable=false, unique=false)
     */
    private $slug;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=128, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string $logotipo
     *
     * @Column(name="logotipo", type="string", length=128, precision=0, scale=0, nullable=false, unique=false)
     */
    private $logotipo;


    /**
     * Get idshop
     *
     * @return integer 
     */
    public function getIdshop()
    {
        return $this->idshop;
    }

    /**
     * Set memberid
     *
     * @param integer $memberid
     * @return MembersShop
     */
    public function setMemberid($memberid)
    {
        $this->memberid = $memberid;
        return $this;
    }

    /**
     * Get memberid
     *
     * @return integer 
     */
    public function getMemberid()
    {
        return $this->memberid;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return MembersShop
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return MembersShop
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set logotipo
     *
     * @param string $logotipo
     * @return MembersShop
     */
    public function setLogotipo($logotipo)
    {
        $this->logotipo = $logotipo;
        return $this;
    }

    /**
     * Get logotipo
     *
     * @return string 
     */
    public function getLogotipo()
    {
        return $this->logotipo;
    }
}