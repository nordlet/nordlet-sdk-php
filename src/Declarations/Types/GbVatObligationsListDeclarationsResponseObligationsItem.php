<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbVatObligationsListDeclarationsResponseObligationsItem extends JsonSerializableType
{
    /**
     * @var string $periodKey
     */
    #[JsonProperty('periodKey')]
    public string $periodKey;

    /**
     * @var string $start
     */
    #[JsonProperty('start')]
    public string $start;

    /**
     * @var string $end
     */
    #[JsonProperty('end')]
    public string $end;

    /**
     * @var string $due
     */
    #[JsonProperty('due')]
    public string $due;

    /**
     * @var value-of<GbVatObligationsListDeclarationsResponseObligationsItemStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $received
     */
    #[JsonProperty('received')]
    public ?string $received;

    /**
     * @param array{
     *   periodKey: string,
     *   start: string,
     *   end: string,
     *   due: string,
     *   status: value-of<GbVatObligationsListDeclarationsResponseObligationsItemStatus>,
     *   received?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->periodKey = $values['periodKey'];
        $this->start = $values['start'];
        $this->end = $values['end'];
        $this->due = $values['due'];
        $this->status = $values['status'];
        $this->received = $values['received'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
