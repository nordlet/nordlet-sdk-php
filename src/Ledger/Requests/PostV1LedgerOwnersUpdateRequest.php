<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1LedgerOwnersUpdateRequestSharesType;
use Nordlet\Ledger\Types\PostV1LedgerOwnersUpdateRequestPartnerLiability;
use Nordlet\Ledger\Types\PostV1LedgerOwnersUpdateRequestAddress;

class PostV1LedgerOwnersUpdateRequest extends JsonSerializableType
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
     * @var ?value-of<PostV1LedgerOwnersUpdateRequestSharesType> $sharesType
     */
    #[JsonProperty('sharesType')]
    public ?string $sharesType;

    /**
     * @var ?string $sharesAcquisitionDate
     */
    #[JsonProperty('sharesAcquisitionDate')]
    public ?string $sharesAcquisitionDate;

    /**
     * @var ?string $withholdingTaxPercent
     */
    #[JsonProperty('withholdingTaxPercent')]
    public ?string $withholdingTaxPercent;

    /**
     * @var ?value-of<PostV1LedgerOwnersUpdateRequestPartnerLiability> $partnerLiability
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
     * @var ?PostV1LedgerOwnersUpdateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1LedgerOwnersUpdateRequestAddress $address;

    /**
     * @param array{
     *   id: string,
     *   name?: ?string,
     *   code?: ?string,
     *   equityAccountCode?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?value-of<PostV1LedgerOwnersUpdateRequestSharesType>,
     *   sharesAcquisitionDate?: ?string,
     *   withholdingTaxPercent?: ?string,
     *   partnerLiability?: ?value-of<PostV1LedgerOwnersUpdateRequestPartnerLiability>,
     *   specialBalanceRequired?: ?bool,
     *   supplementaryBalanceRequired?: ?bool,
     *   address?: ?PostV1LedgerOwnersUpdateRequestAddress,
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
