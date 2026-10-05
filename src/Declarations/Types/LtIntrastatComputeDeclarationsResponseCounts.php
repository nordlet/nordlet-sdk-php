<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class LtIntrastatComputeDeclarationsResponseCounts extends JsonSerializableType
{
    /**
     * @var int $invoices
     */
    #[JsonProperty('invoices')]
    public int $invoices;

    /**
     * @var int $linesIncluded
     */
    #[JsonProperty('linesIncluded')]
    public int $linesIncluded;

    /**
     * @var int $linesSkipped
     */
    #[JsonProperty('linesSkipped')]
    public int $linesSkipped;

    /**
     * @param array{
     *   invoices: int,
     *   linesIncluded: int,
     *   linesSkipped: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoices = $values['invoices'];
        $this->linesIncluded = $values['linesIncluded'];
        $this->linesSkipped = $values['linesSkipped'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
