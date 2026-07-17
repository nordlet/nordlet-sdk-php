<?php

namespace Nordlet\Production\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1ProductionOrdersCompleteRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $componentsAccountCode
     */
    #[JsonProperty('componentsAccountCode')]
    public ?string $componentsAccountCode;

    /**
     * @var ?string $finishedAccountCode
     */
    #[JsonProperty('finishedAccountCode')]
    public ?string $finishedAccountCode;

    /**
     * @param array{
     *   id: string,
     *   componentsAccountCode?: ?string,
     *   finishedAccountCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->componentsAccountCode = $values['componentsAccountCode'] ?? null;
        $this->finishedAccountCode = $values['finishedAccountCode'] ?? null;
    }
}
