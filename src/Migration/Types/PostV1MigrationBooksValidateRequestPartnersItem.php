<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1MigrationBooksValidateRequestPartnersItem extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?value-of<PostV1MigrationBooksValidateRequestPartnersItemType> $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

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
     * @var ?bool $isCustomer
     */
    #[JsonProperty('isCustomer')]
    public ?bool $isCustomer;

    /**
     * @var ?bool $isSupplier
     */
    #[JsonProperty('isSupplier')]
    public ?bool $isSupplier;

    /**
     * @var ?int $paymentTermDays
     */
    #[JsonProperty('paymentTermDays')]
    public ?int $paymentTermDays;

    /**
     * @var ?PostV1MigrationBooksValidateRequestPartnersItemAddress $address
     */
    #[JsonProperty('address')]
    public ?PostV1MigrationBooksValidateRequestPartnersItemAddress $address;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   type?: ?value-of<PostV1MigrationBooksValidateRequestPartnersItemType>,
     *   vatCode?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   isCustomer?: ?bool,
     *   isSupplier?: ?bool,
     *   paymentTermDays?: ?int,
     *   address?: ?PostV1MigrationBooksValidateRequestPartnersItemAddress,
     *   notes?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->type = $values['type'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->isCustomer = $values['isCustomer'] ?? null;
        $this->isSupplier = $values['isSupplier'] ?? null;
        $this->paymentTermDays = $values['paymentTermDays'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->notes = $values['notes'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
