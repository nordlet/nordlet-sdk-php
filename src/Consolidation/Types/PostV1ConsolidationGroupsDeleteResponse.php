<?php

namespace Nordlet\Consolidation\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ConsolidationGroupsDeleteResponse extends JsonSerializableType
{
    /**
     * @var bool $ok
     */
    #[JsonProperty('ok')]
    public bool $ok;

    /**
     * @param array{
     *   ok: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ok = $values['ok'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
