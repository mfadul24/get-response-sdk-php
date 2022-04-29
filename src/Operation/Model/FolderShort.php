<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class FolderShort extends BaseModel
{
    /**
     * @param string $folderId
     */
    public function __construct(private $folderId)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'folderId' => $this->folderId,
        ];

        return $this->filterUnsetFields($data);
    }
}
