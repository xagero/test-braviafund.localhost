<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date: 06.02.2019 15:27
 */

namespace App\Controller;

use App\Repository\OrderRepository;
use App\Repository\RoomRepository;

/**
 * Class HotelController
 * @package App\Controller
 */
class HotelController
{
    /**
     * @var RoomRepository
     */
    protected $roomRepository;

    /**
     * @var OrderRepository
     */
    protected $orderRepository;

    /**
     * Узнать число мест в этом Номере
     *
     * @param $number
     * @return int
     */
    public function roomPlaceCountAction($number)
    {
        return $this->roomRepository->getRoomPlaceCount($number);
    }

    /**
     * Забронировать Номер для Гостя на определенный диапазон дат
     *
     * @param $number
     * @param $fromDate
     * @param $toDate
     */
    public function orderRoomAction($number, $fromDate, $toDate)
    {
        // гость который делать бронь номера
        $guest = 1;

        /** @var array Список забронированных дней для номера $dateList */
        $dateList = $this->orderRepository->reserve($guest, $number, $fromDate, $toDate);

    }

    /**
     * Проверить, свободен ли Номер в определенный день
     *
     * @param $number
     * @param $date
     */
    public function isRoomFree($number, $date)
    {
        $this->orderRepository->isRoomFree($number, $number);
    }
}
