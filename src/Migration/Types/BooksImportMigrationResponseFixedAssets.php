<?php

namespace Nordlet\Migration\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BooksImportMigrationResponseFixedAssets extends JsonSerializableType
{
    /**
     * @var int $created
     */
    #[JsonProperty('created')]
    public int $created;

    /**
     * @var string $costTotal
     */
    #[JsonProperty('costTotal')]
    public string $costTotal;

    /**
     * @var string $accumulatedDepreciationTotal
     */
    #[JsonProperty('accumulatedDepreciationTotal')]
    public string $accumulatedDepreciationTotal;

    /**
     * @param array{
     *   created: int,
     *   costTotal: string,
     *   accumulatedDepreciationTotal: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->costTotal = $values['costTotal'];
        $this->accumulatedDepreciationTotal = $values['accumulatedDepreciationTotal'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
