<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AutomationUpdateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public string $ruleKey;

    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @param array{
     *   ruleKey: string,
     *   enabled: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleKey = $values['ruleKey'];
        $this->enabled = $values['enabled'];
    }
}
