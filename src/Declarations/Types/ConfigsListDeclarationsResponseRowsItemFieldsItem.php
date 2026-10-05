<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ConfigsListDeclarationsResponseRowsItemFieldsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var value-of<ConfigsListDeclarationsResponseRowsItemFieldsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?bool $multiline
     */
    #[JsonProperty('multiline')]
    public ?bool $multiline;

    /**
     * @var ?array<string> $options
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * @param array{
     *   key: string,
     *   kind: value-of<ConfigsListDeclarationsResponseRowsItemFieldsItemKind>,
     *   multiline?: ?bool,
     *   options?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->kind = $values['kind'];
        $this->multiline = $values['multiline'] ?? null;
        $this->options = $values['options'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
