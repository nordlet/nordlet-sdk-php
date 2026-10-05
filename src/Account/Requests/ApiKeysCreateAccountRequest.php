<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class ApiKeysCreateAccountRequest extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string> $scopes
     */
    #[JsonProperty('scopes'), ArrayType(['string'])]
    public ?array $scopes;

    /**
     * @var ?int $expiresInDays
     */
    #[JsonProperty('expiresInDays')]
    public ?int $expiresInDays;

    /**
     * @param array{
     *   name: string,
     *   scopes?: ?array<string>,
     *   expiresInDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->scopes = $values['scopes'] ?? null;
        $this->expiresInDays = $values['expiresInDays'] ?? null;
    }
}
