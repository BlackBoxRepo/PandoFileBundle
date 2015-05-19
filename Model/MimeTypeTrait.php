<?php
namespace BlackBoxCode\Pando\FileBundle\Model;

use BlackBoxCode\Pando\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait MimeTypeTrait
{
    use TypeTrait;
}
