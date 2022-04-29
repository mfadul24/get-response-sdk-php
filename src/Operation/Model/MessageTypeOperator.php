<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageTypeOperator extends BaseEnum
{
    final const AUTORESPONDER = 'autoresponder';
    final const NEWSLETTER = 'newsletter';
    final const SPLITTEST = 'splittest';
    final const AUTOMATION = 'automation';

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
            self::AUTORESPONDER,
            self::NEWSLETTER,
            self::SPLITTEST,
            self::AUTOMATION,
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
