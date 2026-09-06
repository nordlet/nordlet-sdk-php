<?php

namespace Nordlet\Files\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1FilesUploadRequest extends JsonSerializableType
{
    /**
     * @var string $entity
     */
    #[JsonProperty('entity')]
    public string $entity;

    /**
     * @var ?string $entityId
     */
    #[JsonProperty('entityId')]
    public ?string $entityId;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $mimeType
     */
    #[JsonProperty('mimeType')]
    public string $mimeType;

    /**
     * @var string $content Base64-encoded file content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   entity: string,
     *   fileName: string,
     *   mimeType: string,
     *   content: string,
     *   entityId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->entity = $values['entity'];
        $this->entityId = $values['entityId'] ?? null;
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->content = $values['content'];
    }
}
