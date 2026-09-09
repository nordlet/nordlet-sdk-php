<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersFilesListResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @var string $storageKey
     */
    #[JsonProperty('storageKey')]
    public string $storageKey;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   entity: string,
     *   fileName: string,
     *   mimeType: string,
     *   sizeBytes: int,
     *   sha256: string,
     *   storageKey: string,
     *   createdAt: string,
     *   entityId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->entity = $values['entity'];
        $this->entityId = $values['entityId'] ?? null;
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->sizeBytes = $values['sizeBytes'];
        $this->sha256 = $values['sha256'];
        $this->storageKey = $values['storageKey'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
