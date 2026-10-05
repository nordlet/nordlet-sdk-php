<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class EmployeesRecordsCreateHrResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var value-of<EmployeesRecordsCreateHrResponseType> $type
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
     * @var ?DateTime $issuedAt
     */
    #[JsonProperty('issuedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $issuedAt;

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
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   type: value-of<EmployeesRecordsCreateHrResponseType>,
     *   title: string,
     *   createdAt: DateTime,
     *   institution?: ?string,
     *   issuedAt?: ?DateTime,
     *   validUntil?: ?string,
     *   fileId?: ?string,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->employeeId = $values['employeeId'];
        $this->type = $values['type'];
        $this->title = $values['title'];
        $this->institution = $values['institution'] ?? null;
        $this->issuedAt = $values['issuedAt'] ?? null;
        $this->validUntil = $values['validUntil'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->notes = $values['notes'] ?? null;
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
