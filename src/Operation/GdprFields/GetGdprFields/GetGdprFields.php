<?php
namespace Getresponse\Sdk\Operation\GdprFields\GetGdprFields;

use Getresponse\Sdk\Client\Operation\Pagination;
use Getresponse\Sdk\Client\Operation\QueryOperation;
use Getresponse\Sdk\OperationVersionTrait;

class GetGdprFields extends QueryOperation
{
    use OperationVersionTrait;

    final const METHOD_URL = '/v3/gdpr-fields';

    private ?\Getresponse\Sdk\Operation\GdprFields\GetGdprFields\GetGdprFieldsSortParams $sort = null;

    private ?\Getresponse\Sdk\Client\Operation\Pagination $pagination = null;

    private ?\Getresponse\Sdk\Operation\GdprFields\GetGdprFields\GetGdprFieldsFields $fields = null;


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
    public function setSort(GetGdprFieldsSortParams $sort)
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
    public function setFields(GetGdprFieldsFields $fields)
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

        return $this->buildUrlFromTemplate() . $this->buildQueryString(null, $this->sort, $extra);
    }
}
