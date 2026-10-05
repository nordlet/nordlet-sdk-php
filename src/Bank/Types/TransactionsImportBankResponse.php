<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsImportBankResponse extends JsonSerializableType
{
    /**
     * @var int $imported
     */
    #[JsonProperty('imported')]
    public int $imported;

    /**
     * @var int $skipped
     */
    #[JsonProperty('skipped')]
    public int $skipped;

    /**
     * @param array{
     *   imported: int,
     *   skipped: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imported = $values['imported'];
        $this->skipped = $values['skipped'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
