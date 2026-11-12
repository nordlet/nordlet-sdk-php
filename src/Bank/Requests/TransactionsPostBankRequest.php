<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class TransactionsPostBankRequest extends JsonSerializableType
{
    /**
     * @var string $transactionId
     */
    #[JsonProperty('transactionId')]
    public string $transactionId;

    /**
     * @var string $accountCode
     */
    #[JsonProperty('accountCode')]
    public string $accountCode;

    /**
     * @var ?string $taxPaymentId
     */
    #[JsonProperty('taxPaymentId')]
    public ?string $taxPaymentId;

    /**
     * @var ?string $partnerId
     */
    #[JsonProperty('partnerId')]
    public ?string $partnerId;

    /**
     * @var ?string $costCenterId
     */
    #[JsonProperty('costCenterId')]
    public ?string $costCenterId;

    /**
     * @var ?string $projectId
     */
    #[JsonProperty('projectId')]
    public ?string $projectId;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $vatClassifierCode
     */
    #[JsonProperty('vatClassifierCode')]
    public ?string $vatClassifierCode;

    /**
     * @param array{
     *   transactionId: string,
     *   accountCode: string,
     *   taxPaymentId?: ?string,
     *   partnerId?: ?string,
     *   costCenterId?: ?string,
     *   projectId?: ?string,
     *   description?: ?string,
     *   vatClassifierCode?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->transactionId = $values['transactionId'];
        $this->accountCode = $values['accountCode'];
        $this->taxPaymentId = $values['taxPaymentId'] ?? null;
        $this->partnerId = $values['partnerId'] ?? null;
        $this->costCenterId = $values['costCenterId'] ?? null;
        $this->projectId = $values['projectId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->vatClassifierCode = $values['vatClassifierCode'] ?? null;
    }
}
