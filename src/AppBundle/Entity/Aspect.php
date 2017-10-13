<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspect
 *
 * @ORM\Table(name="aspect")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AspectRepository")
 */
class Aspect
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="invoked", type="text")
     */
    private $invoked;

    /**
     * @var string
     *
     * @ORM\Column(name="compelled", type="text")
     */
    private $compelled;


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
     * Set name
     *
     * @param string $name
     *
     * @return Aspect
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
     * Set description
     *
     * @param string $description
     *
     * @return Aspect
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set invoked
     *
     * @param string $invoked
     *
     * @return Aspect
     */
    public function setInvoked($invoked)
    {
        $this->invoked = $invoked;

        return $this;
    }

    /**
     * Get invoked
     *
     * @return string
     */
    public function getInvoked()
    {
        return $this->invoked;
    }

    /**
     * Set compelled
     *
     * @param string $compelled
     *
     * @return Aspect
     */
    public function setCompelled($compelled)
    {
        $this->compelled = $compelled;

        return $this;
    }

    /**
     * Get compelled
     *
     * @return string
     */
    public function getCompelled()
    {
        return $this->compelled;
    }
}
