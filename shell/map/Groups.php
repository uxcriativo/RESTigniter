<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @Table(name="groups")
 * @Entity
 */
class Groups
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
     * @var string $name
     *
     * @Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=100, nullable=false)
     */
    private $description;


}