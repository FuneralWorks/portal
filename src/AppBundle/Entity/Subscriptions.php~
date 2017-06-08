<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SubscriptionsRepository")
 */
class Subscriptions
{

    /**
    * @var int $products
    * @ORM\OneToMany(targetEntity="SubscriptionsProducts", mappedBy="subscriptions", cascade={"persist"})
    */
    private $products;

    /**
    * @var int $client
    * @ORM\ManyToOne(targetEntity="Clients")
    * @ORM\JoinColumn(name="client", referencedColumnName="id")
    */
  private $client;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date")
     */
    private $startDate;

    /**
     * @var int
     *
     * @ORM\Column(name="monthDuration", type="integer")
     */
    private $monthDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="sapContractNumber", type="string", length=20)
     */
    private $sapContractNumber;


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
     * Set name
     *
     * @param string $name
     * @return Subscriptions
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
     * Set monthDuration
     *
     * @param integer $monthDuration
     * @return Subscriptions
     */
    public function setMonthDuration($monthDuration)
    {
        $this->monthDuration = $monthDuration;

        return $this;
    }

    /**
     * Get monthDuration
     *
     * @return integer 
     */
    public function getMonthDuration()
    {
        return $this->monthDuration;
    }

    /**
     * Set sapContractNumber
     *
     * @param string $sapContractNumber
     * @return Subscriptions
     */
    public function setSapContractNumber($sapContractNumber)
    {
        $this->sapContractNumber = $sapContractNumber;

        return $this;
    }

    /**
     * Get sapContractNumber
     *
     * @return string 
     */
    public function getSapContractNumber()
    {
        return $this->sapContractNumber;
    }

    /**
     * Set client
     *
     * @param \AppBundle\Entity\Clients $client
     * @return Subscriptions
     */
    public function setClient(\AppBundle\Entity\Clients $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AppBundle\Entity\Clients 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Subscriptions
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add products
     *
     * @param \AppBundle\Entity\Products $products
     * @return Subscriptions
     */
    public function addProduct(\AppBundle\Entity\Products $products)
    {
        $products->addSubscriptions($this);
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove products
     *
     * @param \AppBundle\Entity\Products $products
     */
    public function removeProduct(\AppBundle\Entity\Products $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
