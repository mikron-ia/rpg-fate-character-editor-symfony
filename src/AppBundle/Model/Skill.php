<?php

namespace AppBundle\Model;

/**
 * Class Skill
 * @package AppBundle\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class Skill
{
    /**
     * @var string
     * @ORM Column(type="string", length=80)
     */
    private $name;

    /**
     * @var int
     * @ORM Column(type="int")
     */
    private $rank;

    /**
     * Aspect constructor.
     * @param string $name
     * @param int $rank
     */
    public function __construct($name, $rank)
    {
        $this->name = $name;
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }
}
