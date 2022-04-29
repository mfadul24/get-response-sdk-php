<?php
namespace Getresponse\Sdk\Operation\Imports\GetImports;

use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetImports extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/imports';

    private ?\Getresponse\Sdk\Operation\Imports\GetImports\GetImportsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\Imports\GetImports\GetImportsSortParams $sort = null;

    private ?\Getresponse\Sdk\Operation\Imports\GetImports\GetImportsFields $fields = null;


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
    public function setQuery(GetImportsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetImportsSortParams $sort)
    {
        $this->sort = $sort;
        return $this;
    }


    /**
     * @return $this
     */
    public function setFields(GetImportsFields $fields)
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
           $this->getFieldsParameterArray($this->fields)
        );

        return $this->buildUrlFromTemplate() . $this->buildQueryString($this->query, $this->sort, $extra);
    }
}
