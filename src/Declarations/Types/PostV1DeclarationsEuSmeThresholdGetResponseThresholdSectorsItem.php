<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuSmeThresholdGetResponseThresholdSectorsItem extends JsonSerializableType
{
    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @param array{
     *   label: string,
     *   amount: string,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->label = $values['label'];
        $this->amount = $values['amount'];
        $this->note = $values['note'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
