<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HealthProfile
 *
 * @ORM\Table(name="health_profile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HealthProfileRepository")
 */
class HealthProfile
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
     * @var float
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="pulse", type="integer")
     */
    private $pulse;

    /**
     * @var float
     *
     * @ORM\Column(name="muscle", type="float")
     */
    private $muscle;

    /**
     * @var float
     *
     * @ORM\Column(name="fat", type="float")
     */
    private $fat;

    /**
     * @var float
     *
     * @ORM\Column(name="sleepTime", type="float")
     */
    private $sleepTime;

    /**
     * @var bool
     *
     * @ORM\Column(name="alcohol", type="boolean")
     */
    private $alcohol;

    /**
     * @var bool
     *
     * @ORM\Column(name="cigarettes", type="boolean")
     */
    private $cigarettes;


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
     * Set weight
     *
     * @param float $weight
     *
     * @return HealthProfile
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set pulse
     *
     * @param integer $pulse
     *
     * @return HealthProfile
     */
    public function setPulse($pulse)
    {
        $this->pulse = $pulse;

        return $this;
    }

    /**
     * Get pulse
     *
     * @return int
     */
    public function getPulse()
    {
        return $this->pulse;
    }

    /**
     * Set muscle
     *
     * @param float $muscle
     *
     * @return HealthProfile
     */
    public function setMuscle($muscle)
    {
        $this->muscle = $muscle;

        return $this;
    }

    /**
     * Get muscle
     *
     * @return float
     */
    public function getMuscle()
    {
        return $this->muscle;
    }

    /**
     * Set fat
     *
     * @param float $fat
     *
     * @return HealthProfile
     */
    public function setFat($fat)
    {
        $this->fat = $fat;

        return $this;
    }

    /**
     * Get fat
     *
     * @return float
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * Set sleepTime
     *
     * @param float $sleepTime
     *
     * @return HealthProfile
     */
    public function setSleepTime($sleepTime)
    {
        $this->sleepTime = $sleepTime;

        return $this;
    }

    /**
     * Get sleepTime
     *
     * @return float
     */
    public function getSleepTime()
    {
        return $this->sleepTime;
    }

    /**
     * Set alcohol
     *
     * @param boolean $alcohol
     *
     * @return HealthProfile
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * Get alcohol
     *
     * @return bool
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set cigarettes
     *
     * @param boolean $cigarettes
     *
     * @return HealthProfile
     */
    public function setCigarettes($cigarettes)
    {
        $this->cigarettes = $cigarettes;

        return $this;
    }

    /**
     * Get cigarettes
     *
     * @return bool
     */
    public function getCigarettes()
    {
        return $this->cigarettes;
    }
}

