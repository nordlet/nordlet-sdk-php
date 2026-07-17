<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrEmployeesRecordsListResponseRowsItem extends JsonSerializableType
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
     * @var value-of<PostV1HrEmployeesRecordsListResponseRowsItemType> $type
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
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   employeeId: string,
     *   type: value-of<PostV1HrEmployeesRecordsListResponseRowsItemType>,
     *   title: string,
     *   createdAt: string,
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
