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
     * @Column(name="IDattribute", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idattribute;

    /**
     * @var text $translations
     *
     * @Column(name="translations", type="text", precision=0, scale=0, nullable=false, unique=false)
     */
    private $translations;

    /**
     * @var integer $lojaid
     *
     * @Column(name="lojaID", type="integer", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lojaid;

    /**
     * @var integer $parent
     *
     * @Column(name="parent", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $parent;

    /**
     * @var integer $hash
     *
     * @Column(name="hash", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $hash;


    /**
     * Get idattribute
     *
     * @return integer 
     */
    public function getIdattribute()
    {
        return $this->idattribute;
    }

    /**
     * Set translations
     *
     * @param text $translations
     * @return ShopAttributes
     */
    public function setTranslations($translations)
    {
        $this->translations = $translations;
        return $this;
    }

    /**
     * Get translations
     *
     * @return text 
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Set lojaid
     *
     * @param integer $lojaid
     * @return ShopAttributes
     */
    public function setLojaid($lojaid)
    {
        $this->lojaid = $lojaid;
        return $this;
    }

    /**
     * Get lojaid
     *
     * @return integer 
     */
    public function getLojaid()
    {
        return $this->lojaid;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return ShopAttributes
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
     * Set hash
     *
     * @param integer $hash
     * @return ShopAttributes
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * Get hash
     *
     * @return integer 
     */
    public function getHash()
    {
        return $this->hash;
    }
}