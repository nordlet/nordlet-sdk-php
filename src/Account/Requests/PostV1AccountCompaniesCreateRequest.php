<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Account\Types\PostV1AccountCompaniesCreateRequestAddress;
use Nordlet\Account\Types\PostV1AccountCompaniesCreateRequestCountryCode;

class PostV1AccountCompaniesCreateRequest extends JsonSerializableType
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
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?string $smeExemptionNumber
     */
    #[JsonProperty('smeExemptionNumber')]
    public ?string $smeExemptionNumber;

    /**
     * @var ?bool $isVatPayer
     */
    #[JsonProperty('isVatPayer')]
    public ?bool $isVatPayer;

    /**
     * @var ?PostV1AccountCompaniesCreateRequestAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1AccountCompaniesCreateRequestAddress $address;

    /**
     * @var ?string $email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

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
     * @var ?string $peppolId
     */
    #[JsonProperty('peppolId')]
    public ?string $peppolId;

    /**
     * @var ?string $defaultInvoiceCurrency
     */
    #[JsonProperty('defaultInvoiceCurrency')]
    public ?string $defaultInvoiceCurrency;

    /**
     * @var ?value-of<PostV1AccountCompaniesCreateRequestCountryCode> $countryCode Jurisdiction the company is registered in (immutable after creation)
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?bool $isSandbox Sandbox companies hold test data and are purged immediately on delete (immutable after creation)
     */
    #[JsonProperty('isSandbox')]
    public ?bool $isSandbox;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   vatCode?: ?string,
     *   smeExemptionNumber?: ?string,
     *   isVatPayer?: ?bool,
     *   address?: ?PostV1AccountCompaniesCreateRequestAddress,
     *   email?: ?string,
     *   phone?: ?string,
     *   iban?: ?string,
     *   bankName?: ?string,
     *   peppolId?: ?string,
     *   defaultInvoiceCurrency?: ?string,
     *   countryCode?: ?value-of<PostV1AccountCompaniesCreateRequestCountryCode>,
     *   isSandbox?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->smeExemptionNumber = $values['smeExemptionNumber'] ?? null;
        $this->isVatPayer = $values['isVatPayer'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->iban = $values['iban'] ?? null;
        $this->bankName = $values['bankName'] ?? null;
        $this->peppolId = $values['peppolId'] ?? null;
        $this->defaultInvoiceCurrency = $values['defaultInvoiceCurrency'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->isSandbox = $values['isSandbox'] ?? null;
    }
}
