<?php
namespace BlackBoxCode\Pando\Bundle\FileBundle\Model;

use BlackBoxCode\Pando\Bundle\BaseBundle\Model\IdInterface;

interface FileInterface extends IdInterface
{
    /**
     * @return string
     */
    public function getLocation();

    /**
     * @param string $location
     * @return $this
     */
    public function setLocation($location);

    /**
     * @return MimeTypeInterface
     */
    public function getType();

    /**
     * @param MimeTypeInterface $type
     * @return $this
     */
    public function setType(MimeTypeInterface $type);
}
