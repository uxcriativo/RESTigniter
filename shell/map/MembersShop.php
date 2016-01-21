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
     * @Column(name="IDshop", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idshop;

    /**
     * @var integer $memberid
     *
     * @Column(name="memberID", type="integer", nullable=true)
     */
    private $memberid;

    /**
     * @var string $slug
     *
     * @Column(name="slug", type="string", length=128, nullable=false)
     */
    private $slug;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string $logotipo
     *
     * @Column(name="logotipo", type="string", length=128, nullable=false)
     */
    private $logotipo;


}