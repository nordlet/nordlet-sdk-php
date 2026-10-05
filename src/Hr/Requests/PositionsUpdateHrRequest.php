<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PositionsUpdateHrRequestTranslationsValue;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class PositionsUpdateHrRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, ?PositionsUpdateHrRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(PositionsUpdateHrRequestTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @param array{
     *   id: string,
     *   code?: ?string,
     *   name?: ?string,
     *   translations?: ?array<string, ?PositionsUpdateHrRequestTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
