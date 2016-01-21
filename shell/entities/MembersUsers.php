<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * MembersUsers
 *
 * @Table(name="members_users")
 * @Entity
 */
class MembersUsers
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
     * @var string $username
     *
     * @Column(name="username", type="string", length=50, precision=0, scale=0, nullable=false, unique=false)
     */
    private $username;

    /**
     * @var string $password
     *
     * @Column(name="password", type="string", length=128, precision=0, scale=0, nullable=false, unique=false)
     */
    private $password;

    /**
     * @var integer $permis
     *
     * @Column(name="permis", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $permis;

    /**
     * @var integer $type
     *
     * @Column(name="type", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $type;

    /**
     * @var integer $parent
     *
     * @Column(name="parent", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $parent;

    /**
     * @var text $info
     *
     * @Column(name="info", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $info;


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
     * Set username
     *
     * @param string $username
     * @return MembersUsers
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
     * @return MembersUsers
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
     * Set permis
     *
     * @param integer $permis
     * @return MembersUsers
     */
    public function setPermis($permis)
    {
        $this->permis = $permis;
        return $this;
    }

    /**
     * Get permis
     *
     * @return integer 
     */
    public function getPermis()
    {
        return $this->permis;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return MembersUsers
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return MembersUsers
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set info
     *
     * @param text $info
     * @return MembersUsers
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Get info
     *
     * @return text 
     */
    public function getInfo()
    {
        return $this->info;
    }
}