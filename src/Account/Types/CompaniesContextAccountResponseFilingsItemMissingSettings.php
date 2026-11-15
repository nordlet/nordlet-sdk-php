<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class CompaniesContextAccountResponseFilingsItemMissingSettings extends JsonSerializableType
{
    /**
     * @var value-of<CompaniesContextAccountResponseFilingsItemMissingSettingsOperation> $operation
     */
    #[JsonProperty('operation')]
    public string $operation;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var array<string> $keys
     */
    #[JsonProperty('keys'), ArrayType(['string'])]
    public array $keys;

    /**
     * @var string $call
     */
    #[JsonProperty('call')]
    public string $call;

    /**
     * @param array{
     *   operation: value-of<CompaniesContextAccountResponseFilingsItemMissingSettingsOperation>,
     *   system: string,
     *   keys: array<string>,
     *   call: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->operation = $values['operation'];
        $this->system = $values['system'];
        $this->keys = $values['keys'];
        $this->call = $values['call'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
