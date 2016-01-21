<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ShopAttributes
 *
 * @Table(name="shop_attributes")
 * @Entity
 */
class ShopAttributes
{
    /**
     * @var integer $idattribute
     *
     * @Column(name="IDattribute", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idattribute;

    /**
     * @var text $translations
     *
     * @Column(name="translations", type="text", nullable=false)
     */
    private $translations;

    /**
     * @var integer $lojaid
     *
     * @Column(name="lojaID", type="integer", nullable=true)
     */
    private $lojaid;

    /**
     * @var integer $parent
     *
     * @Column(name="parent", type="integer", nullable=false)
     */
    private $parent;

    /**
     * @var integer $hash
     *
     * @Column(name="hash", type="integer", nullable=false)
     */
    private $hash;


}