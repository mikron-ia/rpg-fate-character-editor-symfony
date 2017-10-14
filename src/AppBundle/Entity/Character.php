<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping as ORM;

/**
 * Character
 *
 * @ORM\Table(name="character")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CharacterRepository")
 */
class Character
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
     * @ORM\Column(name="name", type="string", length=80)
     */
    private $name;

    /**
     * @ManyToMany(targetEntity="Aspect")
     */
    private $aspects;

    /**
     * @ManyToMany(targetEntity="Skill")
     */
    private $skills;

    /**
     * @ManyToMany(targetEntity="Stunt")
     */
    private $stunts;

    /**
     * Character constructor.
     */
    public function __construct()
    {
        $this->aspects = new ArrayCollection();
        $this->skills = new ArrayCollection();
        $this->stunts = new ArrayCollection();
    }

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
     * @return Character
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
}
