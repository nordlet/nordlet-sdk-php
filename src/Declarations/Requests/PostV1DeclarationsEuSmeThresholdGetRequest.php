<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsEuSmeThresholdGetRequest extends JsonSerializableType
{
    /**
     * @var ?string $date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @param array{
     *   date?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->date = $values['date'] ?? null;
    }
}
