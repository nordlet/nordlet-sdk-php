<?php

namespace Nordlet\Reports\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class PeriodChecklistReportsResponseItemsItem extends JsonSerializableType
{
    /**
     * @var value-of<PeriodChecklistReportsResponseItemsItemCode> $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var int $count
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var array<string> $ids
     */
    #[JsonProperty('ids'), ArrayType(['string'])]
    public array $ids;

    /**
     * @param array{
     *   code: value-of<PeriodChecklistReportsResponseItemsItemCode>,
     *   count: int,
     *   message: string,
     *   ids: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->count = $values['count'];
        $this->message = $values['message'];
        $this->ids = $values['ids'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
