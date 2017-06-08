<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubscriptionsProducts
 *
 * @ORM\Table(name="subscriptions_products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriptionsProductsRepository")
 */
class SubscriptionsProducts
{
    
   
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int subscriptions
     * @ORM\ManyToOne(targetEntity="Subscriptions", inversedBy="products")
     * @ORM\JoinColumn(name="subscription_id", referencedColumnName="id")
     */
    private $subscriptions;

    /**
     * @var int products
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="subscriptions")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $products;

  

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;


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
     * Set products
     *
     * @param integer $products
     * @return SubscriptionsProducts
     */
    public function setProducts($products)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return integer 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set subscriptions
     *
     * @param integer $subscriptions
     * @return SubscriptionsProducts
     */
    public function setSubscriptions($subscriptions)
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }

    /**
     * Get subscriptions
     *
     * @return integer 
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }


    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return SubscriptionsProducts
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
