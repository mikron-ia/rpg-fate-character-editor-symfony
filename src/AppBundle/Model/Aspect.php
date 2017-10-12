<?php

namespace AppBundle\Model;

/**
 * Class Aspect
 * @package AppBundle\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="aspect")
 */
class Aspect
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
     * @var string
     * @ORM Column(type="text")
     */
    private $invoked;

    /**
     * @var string
     * @ORM Column(type="text")
     */
    private $compelled;

    /**
     * Aspect constructor.
     * @param string $name
     * @param string $description
     * @param string $invoked
     * @param string $compelled
     */
    public function __construct($name, $description, $invoked, $compelled)
    {
        $this->name = $name;
        $this->description = $description;
        $this->invoked = $invoked;
        $this->compelled = $compelled;
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

    /**
     * @return string
     */
    public function getInvoked(): string
    {
        return $this->invoked;
    }

    /**
     * @return string
     */
    public function getCompelled(): string
    {
        return $this->compelled;
    }
}
