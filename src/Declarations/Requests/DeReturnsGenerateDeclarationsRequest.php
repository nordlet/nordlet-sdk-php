<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\DeReturnsGenerateDeclarationsRequestRuleKey;
use Nordlet\Core\Json\JsonProperty;

class DeReturnsGenerateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var value-of<DeReturnsGenerateDeclarationsRequestRuleKey> $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public string $ruleKey;

    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @param array{
     *   ruleKey: value-of<DeReturnsGenerateDeclarationsRequestRuleKey>,
     *   period: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleKey = $values['ruleKey'];
        $this->period = $values['period'];
    }
}
