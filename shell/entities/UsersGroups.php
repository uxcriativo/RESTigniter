<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * UsersGroups
 *
 * @Table(name="users_groups")
 * @Entity
 */
class UsersGroups
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
     * @var Groups
     *
     * @ManyToOne(targetEntity="Groups")
     * @JoinColumns({
     *   @JoinColumn(name="group_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $group;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $user;


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
     * Set group
     *
     * @param Groups $group
     * @return UsersGroups
     */
    public function setGroup(\Groups $group = null)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Get group
     *
     * @return Groups 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set user
     *
     * @param Users $user
     * @return UsersGroups
     */
    public function setUser(\Users $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Users 
     */
    public function getUser()
    {
        return $this->user;
    }
}