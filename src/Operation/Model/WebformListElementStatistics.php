<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class WebformListElementStatistics extends BaseModel
{
    /**
     * @param string $opened
     * @param string $subscribed
     */
    public function __construct(private $opened, private $subscribed)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'opened' => $this->opened,
            'subscribed' => $this->subscribed,
        ];

        return $this->filterUnsetFields($data);
    }
}
