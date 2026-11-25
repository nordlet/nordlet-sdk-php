<?php

namespace Nordlet\Files\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class UploadLinksCreateFilesRequest extends JsonSerializableType
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
     * @var ?string $mimeType
     */
    #[JsonProperty('mimeType')]
    public ?string $mimeType;

    /**
     * @var ?int $expiresInMinutes
     */
    #[JsonProperty('expiresInMinutes')]
    public ?int $expiresInMinutes;

    /**
     * @param array{
     *   entity: string,
     *   fileName: string,
     *   entityId?: ?string,
     *   mimeType?: ?string,
     *   expiresInMinutes?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->entity = $values['entity'];
        $this->entityId = $values['entityId'] ?? null;
        $this->fileName = $values['fileName'];
        $this->mimeType = $values['mimeType'] ?? null;
        $this->expiresInMinutes = $values['expiresInMinutes'] ?? null;
    }
}
