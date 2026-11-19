<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ConfigsUpdateDeclarationsResponseFieldsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var ?string $label
     */
    #[JsonProperty('label')]
    public ?string $label;

    /**
     * @var value-of<ConfigsUpdateDeclarationsResponseFieldsItemKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var ?bool $multiline
     */
    #[JsonProperty('multiline')]
    public ?bool $multiline;

    /**
     * @var ?array<string> $options The allowed values of a `select` field
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * @var ?string $companyField The company profile field the value is taken from: `code`, `vatCode`, or `identifiers.<key>` for an entry of `identifiers`; change it with `account/companies/update`
     */
    #[JsonProperty('companyField')]
    public ?string $companyField;

    /**
     * @param array{
     *   key: string,
     *   kind: value-of<ConfigsUpdateDeclarationsResponseFieldsItemKind>,
     *   label?: ?string,
     *   multiline?: ?bool,
     *   options?: ?array<string>,
     *   companyField?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->label = $values['label'] ?? null;
        $this->kind = $values['kind'];
        $this->multiline = $values['multiline'] ?? null;
        $this->options = $values['options'] ?? null;
        $this->companyField = $values['companyField'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
