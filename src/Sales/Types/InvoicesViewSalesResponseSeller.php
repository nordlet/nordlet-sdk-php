<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesViewSalesResponseSeller extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $countryCode
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var InvoicesViewSalesResponseSellerAddress $address
     */
    #[JsonProperty('address')]
    public InvoicesViewSalesResponseSellerAddress $address;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $iban
     */
    #[JsonProperty('iban')]
    public ?string $iban;

    /**
     * @var ?string $bankName
     */
    #[JsonProperty('bankName')]
    public ?string $bankName;

    /**
     * @var ?string $bankBic
     */
    #[JsonProperty('bankBic')]
    public ?string $bankBic;

    /**
     * @var ?string $bankCode
     */
    #[JsonProperty('bankCode')]
    public ?string $bankCode;

    /**
     * @var ?string $bankBranchCode
     */
    #[JsonProperty('bankBranchCode')]
    public ?string $bankBranchCode;

    /**
     * @var ?string $bankAccountNumber
     */
    #[JsonProperty('bankAccountNumber')]
    public ?string $bankAccountNumber;

    /**
     * @param array{
     *   name: string,
     *   address: InvoicesViewSalesResponseSellerAddress,
     *   vatCode?: ?string,
     *   countryCode?: ?string,
     *   email?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   bankBic?: ?string,
     *   bankCode?: ?string,
     *   bankBranchCode?: ?string,
     *   bankAccountNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->vatCode = $values['vatCode'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->address = $values['address'];
        $this->email = $values['email'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->bankBic = $values['bankBic'] ?? null;
        $this->bankCode = $values['bankCode'] ?? null;
        $this->bankBranchCode = $values['bankBranchCode'] ?? null;
        $this->bankAccountNumber = $values['bankAccountNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
