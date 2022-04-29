<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class ErrorResponse extends BaseModel
{
    /**
     * @param string $httpStatus
     * @param string $code
     * @param string $codeDescription
     * @param string $message
     * @param string $moreInfo
     * @param array $context
     * @param string $uuid
     */
    public function __construct(private $httpStatus, private $code, private $codeDescription, private $message, private $moreInfo, private readonly array $context, private $uuid)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'httpStatus' => $this->httpStatus,
            'code' => $this->code,
            'codeDescription' => $this->codeDescription,
            'message' => $this->message,
            'moreInfo' => $this->moreInfo,
            'context' => $this->context,
            'uuid' => $this->uuid,
        ];

        return $this->filterUnsetFields($data);
    }
}
