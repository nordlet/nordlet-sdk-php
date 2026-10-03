<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1DeclarationsAutomationUpdateResponseRowsItem extends JsonSerializableType
{
    /**
     * @var string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public string $ruleKey;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var string $country
     */
    #[JsonProperty('country')]
    public string $country;

    /**
     * @var string $system
     */
    #[JsonProperty('system')]
    public string $system;

    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var bool $applies
     */
    #[JsonProperty('applies')]
    public bool $applies;

    /**
     * @var bool $configured
     */
    #[JsonProperty('configured')]
    public bool $configured;

    /**
     * @var value-of<PostV1DeclarationsAutomationUpdateResponseRowsItemCertificate> $certificate
     */
    #[JsonProperty('certificate')]
    public string $certificate;

    /**
     * @param array{
     *   ruleKey: string,
     *   title: string,
     *   country: string,
     *   system: string,
     *   enabled: bool,
     *   applies: bool,
     *   configured: bool,
     *   certificate: value-of<PostV1DeclarationsAutomationUpdateResponseRowsItemCertificate>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ruleKey = $values['ruleKey'];
        $this->title = $values['title'];
        $this->country = $values['country'];
        $this->system = $values['system'];
        $this->enabled = $values['enabled'];
        $this->applies = $values['applies'];
        $this->configured = $values['configured'];
        $this->certificate = $values['certificate'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
