<?php

namespace Nordlet\Account\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class ConsentAcceptAccountRequest extends JsonSerializableType
{
    /**
     * @var bool $acceptTerms
     */
    #[JsonProperty('acceptTerms')]
    public bool $acceptTerms;

    /**
     * @var bool $acceptDpa
     */
    #[JsonProperty('acceptDpa')]
    public bool $acceptDpa;

    /**
     * @param array{
     *   acceptTerms: bool,
     *   acceptDpa: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->acceptTerms = $values['acceptTerms'];
        $this->acceptDpa = $values['acceptDpa'];
    }
}
