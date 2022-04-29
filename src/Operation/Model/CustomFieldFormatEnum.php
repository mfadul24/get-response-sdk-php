<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class CustomFieldFormatEnum extends BaseEnum
{
    final const TEXT = 'text';
    final const TEXTAREA = 'textarea';
    final const RADIO = 'radio';
    final const CHECKBOX = 'checkbox';
    final const SINGLE_SELECT = 'single_select';
    final const MULTI_SELECT = 'multi_select';

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
