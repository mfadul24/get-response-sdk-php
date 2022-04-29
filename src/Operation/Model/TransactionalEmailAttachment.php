<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class TransactionalEmailAttachment extends BaseModel
{
    /**
     * @param string $fileName
     * @param string $mimeType
     * @param string $content
     */
    public function __construct(private $fileName, private $mimeType, private $content)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'fileName' => $this->fileName,
            'mimeType' => $this->mimeType,
            'content' => $this->content,
        ];

        return $this->filterUnsetFields($data);
    }
}
