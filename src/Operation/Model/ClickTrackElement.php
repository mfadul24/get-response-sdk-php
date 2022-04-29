<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ClickTrackElement extends BaseModel
{
    private string $amount = self::FIELD_NOT_SET;


    /**
     * @param string $clickTrackId
     * @param string $name
     * @param string $url
     */
    public function __construct(private $clickTrackId, private $name, private $url)
    {
    }


    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'clickTrackId' => $this->clickTrackId,
            'name' => $this->name,
            'url' => $this->url,
            'amount' => $this->amount,
        ];

        return $this->filterUnsetFields($data);
    }
}
