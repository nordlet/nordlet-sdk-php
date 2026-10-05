<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class MembersRemoveAccountResponse extends JsonSerializableType
{
    /**
     * @var bool $removed
     */
    #[JsonProperty('removed')]
    public bool $removed;

    /**
     * @param array{
     *   removed: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->removed = $values['removed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
