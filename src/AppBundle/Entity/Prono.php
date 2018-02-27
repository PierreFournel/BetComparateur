<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prono
 *
 * @ORM\Table(name="prono")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PronoRepository")
 */
class Prono
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=255)
     */
    private $sport;

    /**
     * @var bool
     *
     * @ORM\Column(name="isSimple", type="boolean")
     */
    private $isSimple;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="odd", type="float")
     */
    private $odd;

    /**
     * @var float
     *
     * @ORM\Column(name="bet", type="float")
     */
    private $bet;

    /**
     * @var bool
     *
     * @ORM\Column(name="isWon", type="boolean")
     */
    private $isWon;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Prono
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sport
     *
     * @param string $sport
     *
     * @return Prono
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * Get sport
     *
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set isSimple
     *
     * @param boolean $isSimple
     *
     * @return Prono
     */
    public function setIsSimple($isSimple)
    {
        $this->isSimple = $isSimple;

        return $this;
    }

    /**
     * Get isSimple
     *
     * @return bool
     */
    public function getIsSimple()
    {
        return $this->isSimple;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Prono
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
     * Set odd
     *
     * @param float $odd
     *
     * @return Prono
     */
    public function setOdd($odd)
    {
        $this->odd = $odd;

        return $this;
    }

    /**
     * Get odd
     *
     * @return float
     */
    public function getOdd()
    {
        return $this->odd;
    }

    /**
     * Set bet
     *
     * @param float $bet
     *
     * @return Prono
     */
    public function setBet($bet)
    {
        $this->bet = $bet;

        return $this;
    }

    /**
     * Get bet
     *
     * @return float
     */
    public function getBet()
    {
        return $this->bet;
    }

    /**
     * Set isWon
     *
     * @param boolean $isWon
     *
     * @return Prono
     */
    public function setIsWon($isWon)
    {
        $this->isWon = $isWon;

        return $this;
    }

    /**
     * Get isWon
     *
     * @return bool
     */
    public function getIsWon()
    {
        return $this->isWon;
    }
}

