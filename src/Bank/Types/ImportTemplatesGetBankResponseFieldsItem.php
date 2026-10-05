<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ImportTemplatesGetBankResponseFieldsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $accountCode
     */
    #[JsonProperty('accountCode')]
    public ?string $accountCode;

    /**
     * @var bool $createPartner
     */
    #[JsonProperty('createPartner')]
    public bool $createPartner;

    /**
     * @param array{
     *   name: string,
     *   createPartner: bool,
     *   accountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->accountCode = $values['accountCode'] ?? null;
        $this->createPartner = $values['createPartner'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
