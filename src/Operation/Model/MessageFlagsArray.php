<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseEnum;

class MessageFlagsArray extends BaseEnum
{
    final const OPENRATE = 'openrate';
    final const CLICKTRACK = 'clicktrack';
    final const GOOGLE_ANALYTICS = 'google_analytics';

    /**
     * @return bool
     */
    public function isMultiple()
    {
        return true;
    }


    /**
     * @return array
     */
    public function getAllowedValues()
    {
        return [
            self::OPENRATE,
            self::CLICKTRACK,
            self::GOOGLE_ANALYTICS,
        ];
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->value;
    }
}
