<?php
namespace BlackBoxCode\Pando\Bundle\FileBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\TypeTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
trait MimeTypeTrait
{
    use TypeTrait;
}
