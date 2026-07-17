<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PostV1DeclarationsSubmissionsCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $obligation
     */
    #[JsonProperty('obligation')]
    public string $obligation;

    /**
     * @var int $periodYear
     */
    #[JsonProperty('periodYear')]
    public int $periodYear;

    /**
     * @var ?int $periodMonth
     */
    #[JsonProperty('periodMonth')]
    public ?int $periodMonth;

    /**
     * @var ?string $variant
     */
    #[JsonProperty('variant')]
    public ?string $variant;

    /**
     * @var value-of<PostV1DeclarationsSubmissionsCreateResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var ?string $fileId
     */
    #[JsonProperty('fileId')]
    public ?string $fileId;

    /**
     * @var ?string $externalRef
     */
    #[JsonProperty('externalRef')]
    public ?string $externalRef;

    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   id: string,
     *   obligation: string,
     *   periodYear: int,
     *   status: value-of<PostV1DeclarationsSubmissionsCreateResponseStatus>,
     *   fileName: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   warnings: array<string>,
     *   periodMonth?: ?int,
     *   variant?: ?string,
     *   fileId?: ?string,
     *   externalRef?: ?string,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->obligation = $values['obligation'];
        $this->periodYear = $values['periodYear'];
        $this->periodMonth = $values['periodMonth'] ?? null;
        $this->variant = $values['variant'] ?? null;
        $this->status = $values['status'];
        $this->fileName = $values['fileName'];
        $this->fileId = $values['fileId'] ?? null;
        $this->externalRef = $values['externalRef'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
