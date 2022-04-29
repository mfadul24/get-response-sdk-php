<?php
namespace Getresponse\Sdk\Operation\Model;

use Getresponse\Sdk\Client\Operation\BaseModel;

class NewFile extends BaseModel
{
    /**
     * @param string $content
     * @param string $name
     * @param string $extension
     * @param FolderShort $folder
     */
    public function __construct(private $content, private $name, private $extension, private readonly FolderShort $folder = null)
    {
    }


    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'content' => $this->content,
            'name' => $this->name,
            'extension' => $this->extension,
            'folder' => $this->folder,
        ];

        return $this->filterUnsetFields($data);
    }
}
