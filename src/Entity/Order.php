<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date: 06.02.2019 15:37
 */

namespace App\Entity;

/**
 * Class Order
 * @package App\Entity
 *
 * Заказов номера в гостинной
 */
class Order
{
    /**
     * @var int
     */
    protected $id;

    /**
     * Номер в гостинице, который заказан
     * @var Room
     */
    protected $room;

    /**
     * Дата заказа
     * @var \DateTime
     */
    protected $date;

    /**
     * Цена даты заказа 1 дня для 1 номера гостинной
     * @var float
     */
    protected $price;

    /**
     * Некий гость, это его ID, для удобства пока что int
     *
     * @var int
     */
    protected $guest;

    /**
     * Order constructor.
     *
     * @param int $guest
     * @param Room $room
     * @param \DateTime $date
     * @param float $price
     */
    public function __construct($guest, Room $room, \DateTime $date, float $price)
    {
        $this->room = $room;
        $this->date = $date;
        $this->price = $price;
        $this->guest = $guest;
    }

    /**
     * @return Room
     */
    public function getRoom(): Room
    {
        return $this->room;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
