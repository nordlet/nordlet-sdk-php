<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class GbP45GetDeclarationsResponseEmployer extends JsonSerializableType
{
    /**
     * @var string $officeNumber
     */
    #[JsonProperty('officeNumber')]
    public string $officeNumber;

    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<string> $address
     */
    #[JsonProperty('address'), ArrayType(['string'])]
    public array $address;

    /**
     * @var ?string $postcode
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @param array{
     *   officeNumber: string,
     *   reference: string,
     *   name: string,
     *   address: array<string>,
     *   postcode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->officeNumber = $values['officeNumber'];
        $this->reference = $values['reference'];
        $this->name = $values['name'];
        $this->address = $values['address'];
        $this->postcode = $values['postcode'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
