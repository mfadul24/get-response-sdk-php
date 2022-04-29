<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFile;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFile extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/file-library/files/{fileId}';

    private ?\Getresponse\Sdk\Operation\FileLibrary\Files\GetFile\GetFileFields $fields = null;


    /**
     * @param string $fileId
     */
    public function __construct(private $fileId)
    {
    }


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return str_ireplace(
            ['{fileId}'],
            [$this->fileId],
            self::METHOD_URL
        );
    }


    /**
     * @return $this
     */
    public function setFields(GetFileFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = $this->getFieldsParameterArray($this->fields);
        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, null, $extra);
    }
}
