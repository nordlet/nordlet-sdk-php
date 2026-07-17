<?php

namespace Nordlet\Ledger\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Ledger\Types\PostV1LedgerOwnersCreateRequestSharesType;
use Nordlet\Ledger\Types\PostV1LedgerOwnersCreateRequestAddress;

class PostV1LedgerOwnersCreateRequest extends JsonSerializableType
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
     * @var ?value-of<PostV1LedgerOwnersCreateRequestSharesType> $sharesType
     */
    #[JsonProperty('sharesType')]
    public ?string $sharesType;

    /**
     * @var ?string $sharesAcquisitionDate
     */
    #[JsonProperty('sharesAcquisitionDate')]
    public ?string $sharesAcquisitionDate;

    /**
     * @var ?PostV1LedgerOwnersCreateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1LedgerOwnersCreateRequestAddress $address;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   equityAccountCode?: ?string,
     *   sharesQuantity?: ?string,
     *   sharesAmount?: ?string,
     *   sharesType?: ?value-of<PostV1LedgerOwnersCreateRequestSharesType>,
     *   sharesAcquisitionDate?: ?string,
     *   address?: ?PostV1LedgerOwnersCreateRequestAddress,
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
        $this->address = $values['address'] ?? null;
    }
}
