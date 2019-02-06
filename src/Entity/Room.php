<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date: 06.02.2019 15:20
 */

namespace App\Entity;

/**
 * Class Room
 * @package App\Entity
 *
 * Номер в гостинице
 */
class Room
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Номер
     * @var int
     */
    protected $number;

    /**
     * Число мест
     * @var int
     */
    protected $placeCount;

    /**
     * Room constructor.
     * @param int $id
     * @param int $number
     * @param int $placeCount
     */
    public function __construct($number, $placeCount)
    {
        $this->number = $number;
        $this->placeCount = $placeCount;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return int
     */
    public function getPlaceCount()
    {
        return $this->placeCount;
    }

}