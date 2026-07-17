<?php

namespace Nordlet\Hr\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1HrTimesheetsGenerateResponse extends JsonSerializableType
{
    /**
     * @var int $generated
     */
    #[JsonProperty('generated')]
    public int $generated;

    /**
     * @param array{
     *   generated: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->generated = $values['generated'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
