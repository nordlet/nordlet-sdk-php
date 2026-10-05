<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BooksValidateMigrationRequestPartnersItem extends JsonSerializableType
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
     * @var ?value-of<BooksValidateMigrationRequestPartnersItemType> $type
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
     * @var ?BooksValidateMigrationRequestPartnersItemAddress $address
     */
    #[JsonProperty('address')]
    public ?BooksValidateMigrationRequestPartnersItemAddress $address;

    /**
     * @var ?string $notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   type?: ?value-of<BooksValidateMigrationRequestPartnersItemType>,
     *   vatCode?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   isCustomer?: ?bool,
     *   isSupplier?: ?bool,
     *   paymentTermDays?: ?int,
     *   address?: ?BooksValidateMigrationRequestPartnersItemAddress,
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
