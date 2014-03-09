<?php

namespace Pointage\userBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pointage
 */
class Pointage
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $heureE;

    /**
     * @var \DateTime
     */
    private $heureS;

    /**
     * @var integer
     */
    private $userId;


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
     * Set heureE
     *
     * @param \DateTime $heureE
     * @return Pointage
     */
    public function setHeureE($heureE)
    {
        $this->heureE = $heureE;

        return $this;
    }

    /**
     * Get heureE
     *
     * @return \DateTime 
     */
    public function getHeureE()
    {
        return $this->heureE;
    }

    /**
     * Set heureS
     *
     * @param \DateTime $heureS
     * @return Pointage
     */
    public function setHeureS($heureS)
    {
        $this->heureS = $heureS;

        return $this;
    }

    /**
     * Get heureS
     *
     * @return \DateTime 
     */
    public function getHeureS()
    {
        return $this->heureS;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Pointage
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
