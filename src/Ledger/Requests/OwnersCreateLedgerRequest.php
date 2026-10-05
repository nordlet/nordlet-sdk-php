<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\OwnersCreateLedgerRequestSharesType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Ledger\Types\OwnersCreateLedgerRequestPartnerLiability;
use Nordlet\Ledger\Types\OwnersCreateLedgerRequestAddress;

class OwnersCreateLedgerRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $equityAccountCode
     */
    #[JsonProperty('equityAccountCode')]
    public ?string $equityAccountCode;

    /**
     * @var ?string $sharesQuantity
     */
    #[JsonProperty('sharesQuantity')]
    public ?string $sharesQuantity;

    /**
     * @var ?string $sharesAmount
     */
    #[JsonProperty('sharesAmount')]
    public ?string $sharesAmount;

    /**
     * @var ?value-of<OwnersCreateLedgerRequestSharesType> $sharesType
     */
    #[JsonProperty('sharesType')]
    public ?string $sharesType;

    /**
     * @var ?DateTime $sharesAcquisitionDate
     */
    #[JsonProperty('sharesAcquisitionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $sharesAcquisitionDate;

    /**
     * @var ?string $withholdingTaxPercent
     */
    #[JsonProperty('withholdingTaxPercent')]
    public ?string $withholdingTaxPercent;

    /**
     * @var ?value-of<OwnersCreateLedgerRequestPartnerLiability> $partnerLiability
     */
    #[JsonProperty('partnerLiability')]
    public ?string $partnerLiability;

    /**
     * @var ?bool $specialBalanceRequired
     */
    #[JsonProperty('specialBalanceRequired')]
    public ?bool $specialBalanceRequired;

    /**
     * @var ?bool $supplementaryBalanceRequired
     */
    #[JsonProperty('supplementaryBalanceRequired')]
    public ?bool $supplementaryBalanceRequired;

    /**
     * @var ?OwnersCreateLedgerRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?OwnersCreateLedgerRequestAddress $address;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   equityAccountCode?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?value-of<OwnersCreateLedgerRequestSharesType>,
     *   sharesAcquisitionDate?: ?DateTime,
     *   withholdingTaxPercent?: ?string,
     *   partnerLiability?: ?value-of<OwnersCreateLedgerRequestPartnerLiability>,
     *   specialBalanceRequired?: ?bool,
     *   supplementaryBalanceRequired?: ?bool,
     *   address?: ?OwnersCreateLedgerRequestAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->equityAccountCode = $values['equityAccountCode'] ?? null;
        $this->sharesQuantity = $values['sharesQuantity'] ?? null;
        $this->sharesAmount = $values['sharesAmount'] ?? null;
        $this->sharesType = $values['sharesType'] ?? null;
        $this->sharesAcquisitionDate = $values['sharesAcquisitionDate'] ?? null;
        $this->withholdingTaxPercent = $values['withholdingTaxPercent'] ?? null;
        $this->partnerLiability = $values['partnerLiability'] ?? null;
        $this->specialBalanceRequired = $values['specialBalanceRequired'] ?? null;
        $this->supplementaryBalanceRequired = $values['supplementaryBalanceRequired'] ?? null;
        $this->address = $values['address'] ?? null;
    }
}
