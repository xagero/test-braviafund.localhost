<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date: 06.02.2019 15:24
 */

namespace App\Repository;

use App\Entity\Room;
use RuntimeException;

/**
 * Class RoomRepository
 * @package App\Repository
 */
class RoomRepository
{

    /**
     * Узнать число мест в этом Номере
     *
     * @param $number
     * @return int
     */
    public function getRoomPlaceCount($number): int
    {
        $room = $this->findByNumber($number);
        if ($room instanceof Room) {
            return $room->getPlaceCount();
        }

        throw new RuntimeException('not found');
    }

    /**
     * Найти Номер в отеле по его идентификатору
     * @param $number
     * @return Room|null
     */
    protected function findByNumber($number)
    {
        /** @todo поиск номера по базе, считаем что он найден, возвращаем сущность с 1 местом */
        return new Room($number, 1);
    }
}
