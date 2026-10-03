<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsPlJpkKrGenerateRequest extends JsonSerializableType
{
    /**
     * @var string $dateFrom
     */
    #[JsonProperty('dateFrom')]
    public string $dateFrom;

    /**
     * @var string $dateTo
     */
    #[JsonProperty('dateTo')]
    public string $dateTo;

    /**
     * @param array{
     *   dateFrom: string,
     *   dateTo: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dateFrom = $values['dateFrom'];
        $this->dateTo = $values['dateTo'];
    }
}
