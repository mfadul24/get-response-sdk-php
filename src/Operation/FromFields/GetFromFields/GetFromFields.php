<?php
namespace Getresponse\Sdk\Operation\FromFields\GetFromFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetFromFields extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/from-fields';

    private ?\Getresponse\Sdk\Operation\FromFields\GetFromFields\GetFromFieldsSearchQuery $query = null;

    private ?\Getresponse\Sdk\Operation\FromFields\GetFromFields\GetFromFieldsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\FromFields\GetFromFields\GetFromFieldsFields $fields = null;


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
    public function setQuery(GetFromFieldsSearchQuery $query)
    {
        $this->query = $query;
        return $this;
    }


    /**
     * @return $this
     */
    public function setSort(GetFromFieldsSortParams $sort)
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
    public function setFields(GetFromFieldsFields $fields)
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
