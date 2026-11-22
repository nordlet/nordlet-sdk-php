<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class GbP11DItemsDeleteDeclarationsResponse extends JsonSerializableType
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
