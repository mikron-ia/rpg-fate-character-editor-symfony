<?php

namespace AppBundle\Model;

/**
 * Class Stunt
 * @package AppBundle\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="stunt")
 */
class Stunt
{
    /**
     * @var string
     * @ORM Column(type="string", length=80)
     */
    private $name;

    /**
     * @var string
     * @ORM Column(type="text")
     */
    private $description;

    /**
     * Aspect constructor.
     * @param string $name
     * @param string $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
