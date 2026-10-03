<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\PostV1DeclarationsDeReturnsGenerateRequestRuleKey;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsDeReturnsGenerateRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostV1DeclarationsDeReturnsGenerateRequestRuleKey> $ruleKey
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
     *   ruleKey: value-of<PostV1DeclarationsDeReturnsGenerateRequestRuleKey>,
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
