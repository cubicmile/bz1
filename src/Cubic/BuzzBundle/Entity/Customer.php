<?php

namespace Cubic\BuzzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Cubic\BuzzBundle\Entity\CustomerRepository")
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="customername", type="string", length=100)
     */
    private $customername;

    /**
     * @var string
     *
     * @ORM\Column(name="customeremail", type="string", length=255)
     */
    private $customeremail;

    /**
     * @var integer
     *
     * @ORM\Column(name="nremployees", type="smallint")
     */
    private $nremployees;


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
     * Set customername
     *
     * @param string $customername
     * @return Customer
     */
    public function setCustomername($customername)
    {
        $this->customername = $customername;

        return $this;
    }

    /**
     * Get customername
     *
     * @return string 
     */
    public function getCustomername()
    {
        return $this->customername;
    }

    /**
     * Set customeremail
     *
     * @param string $customeremail
     * @return Customer
     */
    public function setCustomeremail($customeremail)
    {
        $this->customeremail = $customeremail;

        return $this;
    }

    /**
     * Get customeremail
     *
     * @return string 
     */
    public function getCustomeremail()
    {
        return $this->customeremail;
    }

    /**
     * Set nremployees
     *
     * @param integer $nremployees
     * @return Customer
     */
    public function setNremployees($nremployees)
    {
        $this->nremployees = $nremployees;

        return $this;
    }

    /**
     * Get nremployees
     *
     * @return integer 
     */
    public function getNremployees()
    {
        return $this->nremployees;
    }
}
