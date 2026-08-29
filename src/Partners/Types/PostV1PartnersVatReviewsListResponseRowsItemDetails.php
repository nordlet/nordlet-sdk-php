<?php

namespace Nordlet\Partners\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1PartnersVatReviewsListResponseRowsItemDetails extends JsonSerializableType
{
    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $partnerName
     */
    #[JsonProperty('partnerName')]
    public ?string $partnerName;

    /**
     * @var ?string $viesName
     */
    #[JsonProperty('viesName')]
    public ?string $viesName;

    /**
     * @var ?string $viesAddress
     */
    #[JsonProperty('viesAddress')]
    public ?string $viesAddress;

    /**
     * @var ?string $requestIdentifier
     */
    #[JsonProperty('requestIdentifier')]
    public ?string $requestIdentifier;

    /**
     * @param array{
     *   message?: ?string,
     *   partnerName?: ?string,
     *   viesName?: ?string,
     *   viesAddress?: ?string,
     *   requestIdentifier?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
        $this->partnerName = $values['partnerName'] ?? null;
        $this->viesName = $values['viesName'] ?? null;
        $this->viesAddress = $values['viesAddress'] ?? null;
        $this->requestIdentifier = $values['requestIdentifier'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
