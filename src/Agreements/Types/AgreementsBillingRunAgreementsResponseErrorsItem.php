<?php

namespace Nordlet\Agreements\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AgreementsBillingRunAgreementsResponseErrorsItem extends JsonSerializableType
{
    /**
     * @var string $agreementId
     */
    #[JsonProperty('agreementId')]
    public string $agreementId;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   agreementId: string,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->agreementId = $values['agreementId'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
