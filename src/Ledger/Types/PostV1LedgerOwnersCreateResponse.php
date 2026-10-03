<?php

namespace Nordlet\Ledger\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1LedgerOwnersCreateResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

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
     * @var string $equityAccountCode
     */
    #[JsonProperty('equityAccountCode')]
    public string $equityAccountCode;

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
     * @var ?string $sharesType
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
     * @var ?value-of<PostV1LedgerOwnersCreateResponsePartnerLiability> $partnerLiability
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
     * @var ?PostV1LedgerOwnersCreateResponseAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1LedgerOwnersCreateResponseAddress $address;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   equityAccountCode: string,
     *   createdAt: string,
     *   code?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?string,
     *   sharesAcquisitionDate?: ?string,
     *   withholdingTaxPercent?: ?string,
     *   partnerLiability?: ?value-of<PostV1LedgerOwnersCreateResponsePartnerLiability>,
     *   specialBalanceRequired?: ?bool,
     *   supplementaryBalanceRequired?: ?bool,
     *   address?: ?PostV1LedgerOwnersCreateResponseAddress,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->equityAccountCode = $values['equityAccountCode'];
        $this->sharesQuantity = $values['sharesQuantity'] ?? null;
        $this->sharesAmount = $values['sharesAmount'] ?? null;
        $this->sharesType = $values['sharesType'] ?? null;
        $this->sharesAcquisitionDate = $values['sharesAcquisitionDate'] ?? null;
        $this->withholdingTaxPercent = $values['withholdingTaxPercent'] ?? null;
        $this->partnerLiability = $values['partnerLiability'] ?? null;
        $this->specialBalanceRequired = $values['specialBalanceRequired'] ?? null;
        $this->supplementaryBalanceRequired = $values['supplementaryBalanceRequired'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
