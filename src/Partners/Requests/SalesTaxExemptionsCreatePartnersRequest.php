<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\SalesTaxExemptionsCreatePartnersRequestState;
use Nordlet\Partners\Types\SalesTaxExemptionsCreatePartnersRequestReasonsItem;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Partners\Types\SalesTaxExemptionsCreatePartnersRequestBusinessType;
use DateTime;
use Nordlet\Core\Types\Date;

class SalesTaxExemptionsCreatePartnersRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @var value-of<SalesTaxExemptionsCreatePartnersRequestState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var array<value-of<SalesTaxExemptionsCreatePartnersRequestReasonsItem>> $reasons
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
     * @var value-of<SalesTaxExemptionsCreatePartnersRequestBusinessType> $businessType
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
     * @var ?DateTime $signedOn
     */
    #[JsonProperty('signedOn'), Date(Date::TYPE_DATE)]
    public ?DateTime $signedOn;

    /**
     * @var DateTime $receivedOn
     */
    #[JsonProperty('receivedOn'), Date(Date::TYPE_DATE)]
    public DateTime $receivedOn;

    /**
     * @param array{
     *   partnerId: string,
     *   state: value-of<SalesTaxExemptionsCreatePartnersRequestState>,
     *   reasons: array<value-of<SalesTaxExemptionsCreatePartnersRequestReasonsItem>>,
     *   businessType: value-of<SalesTaxExemptionsCreatePartnersRequestBusinessType>,
     *   idNumber: string,
     *   idIssuedBy: string,
     *   receivedOn: DateTime,
     *   otherReason?: ?string,
     *   reasonDetail?: ?string,
     *   otherBusinessType?: ?string,
     *   singlePurchaseReference?: ?string,
     *   signedBy?: ?string,
     *   signerTitle?: ?string,
     *   signedOn?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
    }
}
