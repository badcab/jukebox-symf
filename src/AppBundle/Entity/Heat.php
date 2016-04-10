<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heat
 *
 * @ORM\Table(name="heat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HeatRepository")
 */
class Heat
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
     * @var array
     *
     * @ORM\Column(name="song_ids", type="simple_array")
     */
    private $songIds;


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
     * Set songIds
     *
     * @param array $songIds
     *
     * @return Heat
     */
    public function setSongIds($songIds)
    {
        $this->songIds = $songIds;

        return $this;
    }

    /**
     * Get songIds
     *
     * @return array
     */
    public function getSongIds()
    {
        return $this->songIds;
    }
}

