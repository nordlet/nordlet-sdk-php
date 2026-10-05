<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\EmployeesRecordsCreateHrRequestType;
use DateTime;
use Nordlet\Core\Types\Date;

class EmployeesRecordsCreateHrRequest extends JsonSerializableType
{
    /**
     * @var string $employeeId
     */
    #[JsonProperty('employeeId')]
    public string $employeeId;

    /**
     * @var value-of<EmployeesRecordsCreateHrRequestType> $type
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
    #[JsonProperty('issuedAt'), Date(Date::TYPE_DATE)]
    public ?DateTime $issuedAt;

    /**
     * @var ?DateTime $validUntil
     */
    #[JsonProperty('validUntil'), Date(Date::TYPE_DATE)]
    public ?DateTime $validUntil;

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
     *   type: value-of<EmployeesRecordsCreateHrRequestType>,
     *   title: string,
     *   institution?: ?string,
     *   issuedAt?: ?DateTime,
     *   validUntil?: ?DateTime,
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
