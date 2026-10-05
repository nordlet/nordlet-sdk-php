<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class RoEtransportStatusDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @param array{
     *   reference: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reference = $values['reference'];
    }
}
