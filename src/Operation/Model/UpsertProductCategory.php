<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class UpsertProductCategory extends BaseModel
{
    /**
     * @param UpsertSingleProductCategory[] $categories
     */
    public function __construct(private readonly array $categories)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'categories' => $this->categories,
        ];

        return $this->filterUnsetFields($data);
    }
}
