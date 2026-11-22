<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class SalesTaxExemptionsCancelPartnersResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var string $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var array<string> $reasons
     */
    #[JsonProperty('reasons'), ArrayType(['string'])]
    public array $reasons;

    /**
     * @var ?string $otherReason
     */
    #[JsonProperty('otherReason')]
    public ?string $otherReason;

    /**
     * @var ?string $reasonDetail
     */
    #[JsonProperty('reasonDetail')]
    public ?string $reasonDetail;

    /**
     * @var string $businessType
     */
    #[JsonProperty('businessType')]
    public string $businessType;

    /**
     * @var ?string $otherBusinessType
     */
    #[JsonProperty('otherBusinessType')]
    public ?string $otherBusinessType;

    /**
     * @var string $idNumber
     */
    #[JsonProperty('idNumber')]
    public string $idNumber;

    /**
     * @var string $idIssuedBy
     */
    #[JsonProperty('idIssuedBy')]
    public string $idIssuedBy;

    /**
     * @var ?string $singlePurchaseReference
     */
    #[JsonProperty('singlePurchaseReference')]
    public ?string $singlePurchaseReference;

    /**
     * @var ?string $signedBy
     */
    #[JsonProperty('signedBy')]
    public ?string $signedBy;

    /**
     * @var ?string $signerTitle
     */
    #[JsonProperty('signerTitle')]
    public ?string $signerTitle;

    /**
     * @var ?string $signedOn
     */
    #[JsonProperty('signedOn')]
    public ?string $signedOn;

    /**
     * @var string $receivedOn
     */
    #[JsonProperty('receivedOn')]
    public string $receivedOn;

    /**
     * @var ?string $cancelledOn
     */
    #[JsonProperty('cancelledOn')]
    public ?string $cancelledOn;

    /**
     * @param array{
     *   id: string,
     *   partnerId: string,
     *   state: string,
     *   reasons: array<string>,
     *   businessType: string,
     *   idNumber: string,
     *   idIssuedBy: string,
     *   receivedOn: string,
     *   otherReason?: ?string,
     *   reasonDetail?: ?string,
     *   otherBusinessType?: ?string,
     *   singlePurchaseReference?: ?string,
     *   signedBy?: ?string,
     *   signerTitle?: ?string,
     *   signedOn?: ?string,
     *   cancelledOn?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerId = $values['partnerId'];
        $this->state = $values['state'];
        $this->reasons = $values['reasons'];
        $this->otherReason = $values['otherReason'] ?? null;
        $this->reasonDetail = $values['reasonDetail'] ?? null;
        $this->businessType = $values['businessType'];
        $this->otherBusinessType = $values['otherBusinessType'] ?? null;
        $this->idNumber = $values['idNumber'];
        $this->idIssuedBy = $values['idIssuedBy'];
        $this->singlePurchaseReference = $values['singlePurchaseReference'] ?? null;
        $this->signedBy = $values['signedBy'] ?? null;
        $this->signerTitle = $values['signerTitle'] ?? null;
        $this->signedOn = $values['signedOn'] ?? null;
        $this->receivedOn = $values['receivedOn'];
        $this->cancelledOn = $values['cancelledOn'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
