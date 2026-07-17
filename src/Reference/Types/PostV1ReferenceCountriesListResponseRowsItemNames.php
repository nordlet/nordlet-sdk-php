<?php

namespace Nordlet\Reference\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ReferenceCountriesListResponseRowsItemNames extends JsonSerializableType
{
    /**
     * @var string $lt
     */
    #[JsonProperty('lt')]
    public string $lt;

    /**
     * @var string $en
     */
    #[JsonProperty('en')]
    public string $en;

    /**
     * @var string $ru
     */
    #[JsonProperty('ru')]
    public string $ru;

    /**
     * @param array{
     *   lt: string,
     *   en: string,
     *   ru: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->lt = $values['lt'];
        $this->en = $values['en'];
        $this->ru = $values['ru'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
