<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PositionsCreateHrRequestTranslationsValue;
use Nordlet\Core\Types\ArrayType;

class PositionsCreateHrRequest extends JsonSerializableType
{
    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string, PositionsCreateHrRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PositionsCreateHrRequestTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   translations?: ?array<string, PositionsCreateHrRequestTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'];
        $this->translations = $values['translations'] ?? null;
    }
}
