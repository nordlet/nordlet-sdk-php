<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Agreements\Types\AgreementsUpdateAgreementsRequestKind;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Agreements\Types\AgreementsUpdateAgreementsRequestBillingPeriod;
use Nordlet\Agreements\Types\AgreementsUpdateAgreementsRequestStatus;

class AgreementsUpdateAgreementsRequest extends JsonSerializableType
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
     * @var ?value-of<AgreementsUpdateAgreementsRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public ?string $kind;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?DateTime $endDate
     */
    #[JsonProperty('endDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $endDate;

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
     * @var ?value-of<AgreementsUpdateAgreementsRequestBillingPeriod> $billingPeriod
     */
    #[JsonProperty('billingPeriod')]
    public ?string $billingPeriod;

    /**
     * @var ?value-of<AgreementsUpdateAgreementsRequestStatus> $status
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
     *   kind?: ?value-of<AgreementsUpdateAgreementsRequestKind>,
     *   name?: ?string,
     *   endDate?: ?DateTime,
     *   autoRenew?: ?bool,
     *   value?: ?string,
     *   billingPeriod?: ?value-of<AgreementsUpdateAgreementsRequestBillingPeriod>,
     *   status?: ?value-of<AgreementsUpdateAgreementsRequestStatus>,
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
