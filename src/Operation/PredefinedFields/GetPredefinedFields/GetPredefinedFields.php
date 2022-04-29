<?php
namespace Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetPredefinedFields extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/predefined-fields';

    private ?\Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields\GetPredefinedFieldsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields\GetPredefinedFieldsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\PredefinedFields\GetPredefinedFields\GetPredefinedFieldsFields $fields = null;


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
    public function setQuery(GetPredefinedFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetPredefinedFieldsSortParams $sort)
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
    public function setFields(GetPredefinedFieldsFields $fields)
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
