<?php
namespace Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFiles extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/file-library/files';

    private ?\Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles\GetFilesSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles\GetFilesSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\FileLibrary\Files\GetFiles\GetFilesFields $fields = null;


    /**
     * @return string
     */
    public function buildUrlFromTemplate()
    {
        return self::METHOD_URL;
    }


    /**
     * @return $this
     */
    public function setQuery(GetFilesSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetFilesSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
    }


    /**
     * @return $this
     */
    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
        return $this;
    }


    /**
     * @return $this
     */
    public function setFields(GetFilesFields $fields)
    {
        $this->fields = $fields;
        return $this;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        $extra = array_merge(
           $this->getPaginationParametersArray($this->pagination),
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
