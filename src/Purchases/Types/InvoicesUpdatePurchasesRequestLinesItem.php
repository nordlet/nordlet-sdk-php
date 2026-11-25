<?php

namespace Nordlet\Purchases\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\Union;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class InvoicesUpdatePurchasesRequestLinesItem extends JsonSerializableType
{
    /**
     * @var ?string $itemId
     */
    #[JsonProperty('itemId')]
    public ?string $itemId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var (
     *    float
     *   |string
     * )|null $quantity
     */
    #[JsonProperty('quantity'), Union('float', 'string', 'null')]
    public float|string|null $quantity;

    /**
     * @var ?string $unitPriceExclVat
     */
    #[JsonProperty('unitPriceExclVat')]
    public ?string $unitPriceExclVat;

    /**
     * @var ?string $unitPriceInclVat
     */
    #[JsonProperty('unitPriceInclVat')]
    public ?string $unitPriceInclVat;

    /**
     * @var ?string $vatRatePercent
     */
    #[JsonProperty('vatRatePercent')]
    public ?string $vatRatePercent;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var ?DateTime $deferralStartDate
     */
    #[JsonProperty('deferralStartDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $deferralStartDate;

    /**
     * @var ?DateTime $deferralEndDate
     */
    #[JsonProperty('deferralEndDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $deferralEndDate;

    /**
     * @var ?string $lotNumber
     */
    #[JsonProperty('lotNumber')]
    public ?string $lotNumber;

    /**
     * @var ?DateTime $expiryDate
     */
    #[JsonProperty('expiryDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $expiryDate;

    /**
     * @var ?int $deductiblePercent The share of the purchase used for the company's taxable supplies, in whole percent rounded up: required on a VAT type that deducts the line's own share (CZ-D21-P, CZ-D12-P, the poměrný koeficient of § 75 odst. 3 ZDPH) and refused on any other
     */
    #[JsonProperty('deductiblePercent')]
    public ?int $deductiblePercent;

    /**
     * @var ?array<string> $chassisNumbers The chassis numbers of the passenger cars bought on the line. A Hungarian company lists them on sheet 2665A-09 of the VAT return of the period when the line is an intra-Community acquisition or an import (Áfa tv. 4/A. számú melléklet II.)
     */
    #[JsonProperty('chassisNumbers'), ArrayType(['string'])]
    public ?array $chassisNumbers;

    /**
     * @param array{
     *   itemId?: ?string,
     *   description?: ?string,
     *   unit?: ?string,
     *   quantity?: (
     *    float
     *   |string
     * )|null,
     *   unitPriceExclVat?: ?string,
     *   unitPriceInclVat?: ?string,
     *   vatRatePercent?: ?string,
     *   vatClassifierCode?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   accountCode?: ?string,
     *   deferralStartDate?: ?DateTime,
     *   deferralEndDate?: ?DateTime,
     *   lotNumber?: ?string,
     *   expiryDate?: ?DateTime,
     *   deductiblePercent?: ?int,
     *   chassisNumbers?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->itemId = $values['itemId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->unitPriceExclVat = $values['unitPriceExclVat'] ?? null;
        $this->unitPriceInclVat = $values['unitPriceInclVat'] ?? null;
        $this->vatRatePercent = $values['vatRatePercent'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->accountCode = $values['accountCode'] ?? null;
        $this->deferralStartDate = $values['deferralStartDate'] ?? null;
        $this->deferralEndDate = $values['deferralEndDate'] ?? null;
        $this->lotNumber = $values['lotNumber'] ?? null;
        $this->expiryDate = $values['expiryDate'] ?? null;
        $this->deductiblePercent = $values['deductiblePercent'] ?? null;
        $this->chassisNumbers = $values['chassisNumbers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
