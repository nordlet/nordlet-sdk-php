<?php

namespace Nordlet\Agreements\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1AgreementsAgreementsGenerateInvoiceRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $asOfDate
     */
    #[JsonProperty('asOfDate')]
    public ?string $asOfDate;

    /**
     * @param array{
     *   id: string,
     *   asOfDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->asOfDate = $values['asOfDate'] ?? null;
    }
}
