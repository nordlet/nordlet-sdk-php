<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersFilesListRequest extends JsonSerializableType
{
    /**
     * @var string $partnerId
     */
    #[JsonProperty('partnerId')]
    public string $partnerId;

    /**
     * @param array{
     *   partnerId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->partnerId = $values['partnerId'];
    }
}
