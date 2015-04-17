<?php
namespace BlackBoxCode\Pando\Bundle\FileBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\BaseTrait;
use Doctrine\ORM\Mapping as ORM;

trait FileTrait
{
    use BaseTrait;

    /**
     * @ORM\Column(type="string")
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="MimeType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;
}