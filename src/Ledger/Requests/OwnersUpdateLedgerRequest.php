<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\OwnersUpdateLedgerRequestSharesType;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Ledger\Types\OwnersUpdateLedgerRequestPartnerLiability;
use Nordlet\Ledger\Types\OwnersUpdateLedgerRequestAddress;

class OwnersUpdateLedgerRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?value-of<OwnersUpdateLedgerRequestSharesType> $sharesType
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
     * @var ?value-of<OwnersUpdateLedgerRequestPartnerLiability> $partnerLiability
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
     * @var ?OwnersUpdateLedgerRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?OwnersUpdateLedgerRequestAddress $address;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   code?: ?string,
     *   equityAccountCode?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?value-of<OwnersUpdateLedgerRequestSharesType>,
     *   sharesAcquisitionDate?: ?DateTime,
     *   withholdingTaxPercent?: ?string,
     *   partnerLiability?: ?value-of<OwnersUpdateLedgerRequestPartnerLiability>,
     *   specialBalanceRequired?: ?bool,
     *   supplementaryBalanceRequired?: ?bool,
     *   address?: ?OwnersUpdateLedgerRequestAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'] ?? null;
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
