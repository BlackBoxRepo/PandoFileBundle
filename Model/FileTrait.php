<?php
namespace BlackBoxCode\Pando\FileBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\IdTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait FileTrait
{
    use IdTrait;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $location;

    /**
     * @var MimeTypeInterface
     *
     * @ORM\ManyToOne(targetEntity="MimeType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;


    /**
     * {@inheritdoc}
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    public function setType(MimeTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }
}
