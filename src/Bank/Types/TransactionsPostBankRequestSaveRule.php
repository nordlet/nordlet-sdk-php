<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsPostBankRequestSaveRule extends JsonSerializableType
{
    /**
     * @var ?string $counterpartyContains
     */
    #[JsonProperty('counterpartyContains')]
    public ?string $counterpartyContains;

    /**
     * @var ?string $descriptionContains
     */
    #[JsonProperty('descriptionContains')]
    public ?string $descriptionContains;

    /**
     * @param array{
     *   counterpartyContains?: ?string,
     *   descriptionContains?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->counterpartyContains = $values['counterpartyContains'] ?? null;
        $this->descriptionContains = $values['descriptionContains'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
