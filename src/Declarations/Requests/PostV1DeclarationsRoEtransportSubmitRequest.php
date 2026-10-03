<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsRoEtransportSubmitRequest extends JsonSerializableType
{
    /**
     * @var string $waybillId
     */
    #[JsonProperty('waybillId')]
    public string $waybillId;

    /**
     * @param array{
     *   waybillId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->waybillId = $values['waybillId'];
    }
}
