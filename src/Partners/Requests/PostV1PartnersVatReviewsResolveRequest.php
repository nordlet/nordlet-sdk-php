<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1PartnersVatReviewsResolveRequestResolution;

class PostV1PartnersVatReviewsResolveRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var value-of<PostV1PartnersVatReviewsResolveRequestResolution> $resolution
     */
    #[JsonProperty('resolution')]
    public string $resolution;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @param array{
     *   id: string,
     *   resolution: value-of<PostV1PartnersVatReviewsResolveRequestResolution>,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->resolution = $values['resolution'];
        $this->note = $values['note'] ?? null;
    }
}
