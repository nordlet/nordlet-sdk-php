<?php

namespace Nordlet\Peppol\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class WebhooksPeppolResponse extends JsonSerializableType
{
    /**
     * @var bool $handled
     */
    #[JsonProperty('handled')]
    public bool $handled;

    /**
     * @param array{
     *   handled: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->handled = $values['handled'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
