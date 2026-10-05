<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ConfigsUpdateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var array<string, string> $config
     */
    #[JsonProperty('config'), ArrayType(['string' => 'string'])]
    public array $config;

    /**
     * @param array{
     *   system: string,
     *   config: array<string, string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->system = $values['system'];
        $this->config = $values['config'];
    }
}
