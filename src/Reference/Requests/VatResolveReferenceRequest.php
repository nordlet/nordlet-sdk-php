<?php

namespace Nordlet\Reference\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Reference\Types\VatResolveReferenceRequestSupplyType;
use DateTime;
use Nordlet\Core\Types\Date;

class VatResolveReferenceRequest extends JsonSerializableType
{
    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $customerCountryCode
     */
    #[JsonProperty('customerCountryCode')]
    public ?string $customerCountryCode;

    /**
     * @var ?bool $customerIsBusiness
     */
    #[JsonProperty('customerIsBusiness')]
    public ?bool $customerIsBusiness;

    /**
     * @var ?value-of<VatResolveReferenceRequestSupplyType> $supplyType
     */
    #[JsonProperty('supplyType')]
    public ?string $supplyType;

    /**
     * @var ?DateTime $date
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATE)]
    public ?DateTime $date;

    /**
     * @var ?bool $belowDistanceSalesThreshold
     */
    #[JsonProperty('belowDistanceSalesThreshold')]
    public ?bool $belowDistanceSalesThreshold;

    /**
     * @var ?bool $facilitatedByMarketplace
     */
    #[JsonProperty('facilitatedByMarketplace')]
    public ?bool $facilitatedByMarketplace;

    /**
     * @var ?bool $actingAsMarketplace
     */
    #[JsonProperty('actingAsMarketplace')]
    public ?bool $actingAsMarketplace;

    /**
     * @var ?bool $sellerEstablishedInEu
     */
    #[JsonProperty('sellerEstablishedInEu')]
    public ?bool $sellerEstablishedInEu;

    /**
     * @var ?string $importedConsignmentValueEur
     */
    #[JsonProperty('importedConsignmentValueEur')]
    public ?string $importedConsignmentValueEur;

    /**
     * @param array{
     *   partnerId?: ?string,
     *   customerCountryCode?: ?string,
     *   customerIsBusiness?: ?bool,
     *   supplyType?: ?value-of<VatResolveReferenceRequestSupplyType>,
     *   date?: ?DateTime,
     *   belowDistanceSalesThreshold?: ?bool,
     *   facilitatedByMarketplace?: ?bool,
     *   actingAsMarketplace?: ?bool,
     *   sellerEstablishedInEu?: ?bool,
     *   importedConsignmentValueEur?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->partnerId = $values['partnerId'] ?? null;
        $this->customerCountryCode = $values['customerCountryCode'] ?? null;
        $this->customerIsBusiness = $values['customerIsBusiness'] ?? null;
        $this->supplyType = $values['supplyType'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->belowDistanceSalesThreshold = $values['belowDistanceSalesThreshold'] ?? null;
        $this->facilitatedByMarketplace = $values['facilitatedByMarketplace'] ?? null;
        $this->actingAsMarketplace = $values['actingAsMarketplace'] ?? null;
        $this->sellerEstablishedInEu = $values['sellerEstablishedInEu'] ?? null;
        $this->importedConsignmentValueEur = $values['importedConsignmentValueEur'] ?? null;
    }
}
