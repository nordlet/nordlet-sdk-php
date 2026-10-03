<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AccountApiKeysRotateRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?int $overlapHours
     */
    #[JsonProperty('overlapHours')]
    public ?int $overlapHours;

    /**
     * @var ?int $expiresInDays
     */
    #[JsonProperty('expiresInDays')]
    public ?int $expiresInDays;

    /**
     * @param array{
     *   id: string,
     *   overlapHours?: ?int,
     *   expiresInDays?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->overlapHours = $values['overlapHours'] ?? null;
        $this->expiresInDays = $values['expiresInDays'] ?? null;
    }
}
