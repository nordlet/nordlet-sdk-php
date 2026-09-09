<?php

namespace Nordlet\Partners\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Partners\Types\PostV1LeadsConvertRequestPartnerType;

class PostV1LeadsConvertRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<PostV1LeadsConvertRequestPartnerType> $partnerType
     */
    #[JsonProperty('partnerType')]
    public ?string $partnerType;

    /**
     * @var ?string $code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $vatCode
     */
    #[JsonProperty('vatCode')]
    public ?string $vatCode;

    /**
     * @param array{
     *   id: string,
     *   partnerType?: ?value-of<PostV1LeadsConvertRequestPartnerType>,
     *   code?: ?string,
     *   vatCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->partnerType = $values['partnerType'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->vatCode = $values['vatCode'] ?? null;
    }
}
