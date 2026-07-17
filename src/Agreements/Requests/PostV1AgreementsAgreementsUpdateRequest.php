<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsUpdateRequestStatus;

class PostV1AgreementsAgreementsUpdateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $typeId
     */
    #[JsonProperty('typeId')]
    public ?string $typeId;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * @var ?bool $autoRenew
     */
    #[JsonProperty('autoRenew')]
    public ?bool $autoRenew;

    /**
     * @var ?string $value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var ?value-of<PostV1AgreementsAgreementsUpdateRequestStatus> $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   id: string,
     *   typeId?: ?string,
     *   name?: ?string,
     *   endDate?: ?string,
     *   autoRenew?: ?bool,
     *   value?: ?string,
     *   status?: ?value-of<PostV1AgreementsAgreementsUpdateRequestStatus>,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->typeId = $values['typeId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->autoRenew = $values['autoRenew'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }
}
