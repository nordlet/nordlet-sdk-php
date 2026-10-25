<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class InvoicesCardPaymentsConnectSalesRequest extends JsonSerializableType
{
    /**
     * @var string $returnUrl
     */
    #[JsonProperty('returnUrl')]
    public string $returnUrl;

    /**
     * @var string $refreshUrl
     */
    #[JsonProperty('refreshUrl')]
    public string $refreshUrl;

    /**
     * @param array{
     *   returnUrl: string,
     *   refreshUrl: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->returnUrl = $values['returnUrl'];
        $this->refreshUrl = $values['refreshUrl'];
    }
}
