<?php
namespace Getresponse\Sdk\Operation\Model;

class RssNewsletterSendDailySettings extends RssNewsletterSendSettings
{
    /**
     * @param string $filter
     * @param int $sendAtHour
     */
    public function __construct($filter, private $sendAtHour)
    {
        parent::__construct('daily', $filter);
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'sendAtHour' => $this->sendAtHour,
        ];

        return array_merge(parent::jsonSerialize(), $this->filterUnsetFields($data));
    }
}
