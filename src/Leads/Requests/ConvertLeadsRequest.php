<?php

namespace Nordlet\Leads\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Leads\Types\ConvertLeadsRequestPartnerType;

class ConvertLeadsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?value-of<ConvertLeadsRequestPartnerType> $partnerType
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
     *   partnerType?: ?value-of<ConvertLeadsRequestPartnerType>,
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
