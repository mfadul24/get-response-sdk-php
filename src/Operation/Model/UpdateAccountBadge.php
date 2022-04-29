<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpdateAccountBadge extends BaseModel
{
    /**
     * @param string $status
     */
    public function __construct(private $status)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'status' => $this->status,
        ];

        return $this->filterUnsetFields($data);
    }
}
