<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class SpecificDateEnum extends BaseEnum
{
    final const TODAY = 'today';
    final const YESTERDAY = 'yesterday';
    final const LAST_7_DAYS = 'last_7_days';
    final const LAST_30_DAYS = 'last_30_days';
    final const THIS_WEEK = 'this_week';
    final const LAST_WEEK = 'last_week';
    final const THIS_MONTH = 'this_month';
    final const LAST_MONTH = 'last_month';

    /**
     * @return bool
     */
    public function isMultiple()
    {
        return false;
    }


    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            self::TODAY,
            self::YESTERDAY,
            self::LAST_7_DAYS,
            self::LAST_30_DAYS,
            self::THIS_WEEK,
            self::LAST_WEEK,
            self::THIS_MONTH,
            self::LAST_MONTH,
        ];
    }


    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return $this->value;
    }
}
