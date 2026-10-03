<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsAnnualAccountsAttachmentsAddResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1DeclarationsAnnualAccountsAttachmentsAddResponseKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $fileId
     */
    #[JsonProperty('fileId')]
    public string $fileId;

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
     * @var string $storageKey
     */
    #[JsonProperty('storageKey')]
    public string $storageKey;

    /**
     * @param array{
     *   id: string,
     *   kind: value-of<PostV1DeclarationsAnnualAccountsAttachmentsAddResponseKind>,
     *   name: string,
     *   fileId: string,
     *   fileName: string,
     *   mimeType: string,
     *   sizeBytes: int,
     *   storageKey: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->kind = $values['kind'];
        $this->name = $values['name'];
        $this->fileId = $values['fileId'];
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'];
        $this->sizeBytes = $values['sizeBytes'];
        $this->storageKey = $values['storageKey'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
