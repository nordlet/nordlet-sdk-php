<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrEmployeesRecordsCreateRequestType;

class PostV1HrEmployeesRecordsCreateRequest extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var value-of<PostV1HrEmployeesRecordsCreateRequestType> $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $institution
     */
    #[JsonProperty('institution')]
    public ?string $institution;

    /**
     * @var ?string $issuedAt
     */
    #[JsonProperty('issuedAt')]
    public ?string $issuedAt;

    /**
     * @var ?string $validUntil
     */
    #[JsonProperty('validUntil')]
    public ?string $validUntil;

    /**
     * @var ?string $fileId
     */
    #[JsonProperty('fileId')]
    public ?string $fileId;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   employeeId: string,
     *   type: value-of<PostV1HrEmployeesRecordsCreateRequestType>,
     *   title: string,
     *   institution?: ?string,
     *   issuedAt?: ?string,
     *   validUntil?: ?string,
     *   fileId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->employeeId = $values['employeeId'];
        $this->type = $values['type'];
        $this->title = $values['title'];
        $this->institution = $values['institution'] ?? null;
        $this->issuedAt = $values['issuedAt'] ?? null;
        $this->validUntil = $values['validUntil'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
