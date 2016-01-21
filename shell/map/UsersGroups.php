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
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var Groups
     *
     * @ManyToOne(targetEntity="Groups")
     * @JoinColumns({
     *   @JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var Users
     *
     * @ManyToOne(targetEntity="Users")
     * @JoinColumns({
     *   @JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}