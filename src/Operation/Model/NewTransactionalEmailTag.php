<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewTransactionalEmailTag extends BaseModel
{
    /**
     * @param string $tagId
     */
    public function __construct(private $tagId)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'tagId' => $this->tagId,
        ];

        return $this->filterUnsetFields($data);
    }
}
