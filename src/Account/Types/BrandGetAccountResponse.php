<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class BrandGetAccountResponse extends JsonSerializableType
{
    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $logoUrl
     */
    #[JsonProperty('logoUrl')]
    public ?string $logoUrl;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $footer
     */
    #[JsonProperty('footer')]
    public ?string $footer;

    /**
     * @param array{
     *   name?: ?string,
     *   logoUrl?: ?string,
     *   color?: ?string,
     *   footer?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->logoUrl = $values['logoUrl'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->footer = $values['footer'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
