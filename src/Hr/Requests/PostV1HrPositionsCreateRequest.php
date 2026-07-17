<?php

namespace Nordlet\Hr\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Hr\Types\PostV1HrPositionsCreateRequestTranslationsValue;
use Nordlet\Core\Types\ArrayType;

class PostV1HrPositionsCreateRequest extends JsonSerializableType
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
     * @var ?array<string, PostV1HrPositionsCreateRequestTranslationsValue> $translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PostV1HrPositionsCreateRequestTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   name: string,
     *   code?: ?string,
     *   translations?: ?array<string, PostV1HrPositionsCreateRequestTranslationsValue>,
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
