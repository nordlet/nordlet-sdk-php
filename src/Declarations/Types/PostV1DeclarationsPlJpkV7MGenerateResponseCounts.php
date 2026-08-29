<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkV7MGenerateResponseCounts extends JsonSerializableType
{
    /**
     * @var int $salesRows
     */
    #[JsonProperty('salesRows')]
    public int $salesRows;

    /**
     * @var int $purchaseRows
     */
    #[JsonProperty('purchaseRows')]
    public int $purchaseRows;

    /**
     * @param array{
     *   salesRows: int,
     *   purchaseRows: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->salesRows = $values['salesRows'];
        $this->purchaseRows = $values['purchaseRows'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
