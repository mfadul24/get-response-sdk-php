<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldTypeEnum extends BaseEnum
{
    final const TEXT = 'text';
    final const TEXTAREA = 'textarea';
    final const RADIO = 'radio';
    final const CHECKBOX = 'checkbox';
    final const SINGLE_SELECT = 'single_select';
    final const MULTI_SELECT = 'multi_select';
    final const NUMBER = 'number';
    final const DATE = 'date';
    final const DATETIME = 'datetime';
    final const COUNTRY = 'country';
    final const CURRENCY = 'currency';
    final const PHONE = 'phone';
    final const GENDER = 'gender';
    final const IP = 'ip';
    final const URL = 'url';

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
            self::TEXT,
            self::TEXTAREA,
            self::RADIO,
            self::CHECKBOX,
            self::SINGLE_SELECT,
            self::MULTI_SELECT,
            self::NUMBER,
            self::DATE,
            self::DATETIME,
            self::COUNTRY,
            self::CURRENCY,
            self::PHONE,
            self::GENDER,
            self::IP,
            self::URL,
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
