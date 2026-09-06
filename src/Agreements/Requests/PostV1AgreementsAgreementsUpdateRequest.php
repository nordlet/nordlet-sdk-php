<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsUpdateRequestKind;
use Nordlet\Agreements\Types\PostV1AgreementsAgreementsUpdateRequestBillingPeriod;
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
     * @var ?value-of<PostV1AgreementsAgreementsUpdateRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

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
     * @var ?value-of<PostV1AgreementsAgreementsUpdateRequestBillingPeriod> $billingPeriod
     */
    #[JsonProperty('billingPeriod')]
    public ?string $billingPeriod;

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
     * @var ?string $documentRef
     */
    #[JsonProperty('documentRef')]
    public ?string $documentRef;

    /**
     * @param array{
     *   id: string,
     *   typeId?: ?string,
     *   kind?: ?value-of<PostV1AgreementsAgreementsUpdateRequestKind>,
     *   name?: ?string,
     *   endDate?: ?string,
     *   autoRenew?: ?bool,
     *   value?: ?string,
     *   billingPeriod?: ?value-of<PostV1AgreementsAgreementsUpdateRequestBillingPeriod>,
     *   status?: ?value-of<PostV1AgreementsAgreementsUpdateRequestStatus>,
     *   notes?: ?string,
     *   documentRef?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->typeId = $values['typeId'] ?? null;
        $this->kind = $values['kind'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->autoRenew = $values['autoRenew'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->billingPeriod = $values['billingPeriod'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->documentRef = $values['documentRef'] ?? null;
    }
}
