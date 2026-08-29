<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesGetResponseVatEvidencePartner extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @var ?bool $vatValid
     */
    #[JsonProperty('vatValid')]
    public ?bool $vatValid;

    /**
     * @var ?string $vatValidatedAt
     */
    #[JsonProperty('vatValidatedAt')]
    public ?string $vatValidatedAt;

    /**
     * @param array{
     *   id: string,
     *   vatCode?: ?string,
     *   vatValid?: ?bool,
     *   vatValidatedAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->vatCode = $values['vatCode'] ?? null;
        $this->vatValid = $values['vatValid'] ?? null;
        $this->vatValidatedAt = $values['vatValidatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
