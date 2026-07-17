<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;
use Nordlet\Core\Types\Union;

class PostV1HrPositionsCreateResponse extends JsonSerializableType
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
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string, ?PostV1HrPositionsCreateResponseTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => new Union(PostV1HrPositionsCreateResponseTranslationsValue::class, 'null')])]
    public ?array $translations;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   code?: ?string,
     *   translations?: ?array<string, ?PostV1HrPositionsCreateResponseTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->code = $values['code'] ?? null;
        $this->name = $values['name'];
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
