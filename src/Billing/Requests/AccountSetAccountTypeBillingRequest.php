<?php

namespace Nordlet\Billing\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Billing\Types\AccountSetAccountTypeBillingRequestAccountType;
use Nordlet\Core\Json\JsonProperty;

class AccountSetAccountTypeBillingRequest extends JsonSerializableType
{
    /**
     * @var value-of<AccountSetAccountTypeBillingRequestAccountType> $accountType
     */
    #[JsonProperty('accountType')]
    public string $accountType;

    /**
     * @param array{
     *   accountType: value-of<AccountSetAccountTypeBillingRequestAccountType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->accountType = $values['accountType'];
    }
}
