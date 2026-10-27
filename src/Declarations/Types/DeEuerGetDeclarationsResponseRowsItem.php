<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class DeEuerGetDeclarationsResponseRowsItem extends JsonSerializableType
{
    /**
     * @var value-of<DeEuerGetDeclarationsResponseRowsItemAnlage> $anlage
     */
    #[JsonProperty('anlage')]
    public string $anlage;

    /**
     * @var int $zeile
     */
    #[JsonProperty('zeile')]
    public int $zeile;

    /**
     * @var ?string $kennzahl
     */
    #[JsonProperty('kennzahl')]
    public ?string $kennzahl;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   anlage: value-of<DeEuerGetDeclarationsResponseRowsItemAnlage>,
     *   zeile: int,
     *   label: string,
     *   value: string,
     *   kennzahl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->anlage = $values['anlage'];
        $this->zeile = $values['zeile'];
        $this->kennzahl = $values['kennzahl'] ?? null;
        $this->label = $values['label'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
