<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date: 06.02.2019 15:44
 */

namespace App\Repository;

use App\Entity\Order;
use App\Entity\Room;

/**
 * Class OrderRepository
 * @package App\Repository
 */
class OrderRepository
{
    /**
     * @param $guest
     * @param $number
     * @param $fromDate
     * @param $toDate
     * @return array
     */
    public function reserve($guest, $number, $fromDate, $toDate)
    {
        try {
            // begin transaction

            /**
             * 1. проверяем доступность номера для всех дат, цикл isRoomFree()
             * 2. проверяем цену для конкретной даты, getPrice()
             * 3. создаем массив Заказов Order App\Entity\Order[]
             * 4. пишем все дни в базу со всеми ценами
             */

            $date = $fromDate;
            $price = $this->getPrice($date);
            $reserve = [
                new Order($guest, new Room($number, 1), $date, $price),
                // ....
            ];

            // end transaction

        } catch (\Throwable $e) {
            throw new \LogicException('...');
        }
    }

    /**
     * Проверяем занятось номера на дату либо диапазон
     *
     * @param $number
     * @param $fromDate
     * @param $toDate
     * @return bool
     */
    public function isRoomFree($number, $fromDate, $toDate = null)
    {
        return true;
    }

    /**
     * Узнаем прайс на дату
     *
     * @param $date
     * @return float
     */
    public function getPrice($date)
    {
        return 1.0;
    }

}