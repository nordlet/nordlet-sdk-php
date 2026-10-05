<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class StatusesCreatePartnersRequest extends JsonSerializableType
{
    /**
     * @var string $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public ?int $sortOrder;

    /**
     * @param array{
     *   code: string,
     *   name: string,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->name = $values['name'];
        $this->sortOrder = $values['sortOrder'] ?? null;
    }
}
