<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class AccountsListBankResponseRowsItemPaymentFileSettings extends JsonSerializableType
{
    /**
     * @var ?string $serviceUserNumber Bacs: the service user number (SUN) of the company for this account
     */
    #[JsonProperty('serviceUserNumber')]
    public ?string $serviceUserNumber;

    /**
     * @var ?string $serviceUserName Bacs: the service user's short name; defaults to the company name
     */
    #[JsonProperty('serviceUserName')]
    public ?string $serviceUserName;

    /**
     * @var ?string $odfiRoutingNumber Nacha: the routing number of the bank that receives the file; defaults to the account's bankCode
     */
    #[JsonProperty('odfiRoutingNumber')]
    public ?string $odfiRoutingNumber;

    /**
     * @var ?string $immediateOrigin Nacha: the Immediate Origin the bank gave the company
     */
    #[JsonProperty('immediateOrigin')]
    public ?string $immediateOrigin;

    /**
     * @var ?string $immediateDestinationName Nacha: the name of the bank that receives the file
     */
    #[JsonProperty('immediateDestinationName')]
    public ?string $immediateDestinationName;

    /**
     * @var ?string $companyIdentification Nacha: the Company Identification the bank gave the company
     */
    #[JsonProperty('companyIdentification')]
    public ?string $companyIdentification;

    /**
     * @var ?string $companyName Nacha: the company name shown to the receiver; defaults to the company name
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $companyDiscretionaryData Nacha: the Company Discretionary Data the bank asks for
     */
    #[JsonProperty('companyDiscretionaryData')]
    public ?string $companyDiscretionaryData;

    /**
     * @param array{
     *   serviceUserNumber?: ?string,
     *   serviceUserName?: ?string,
     *   odfiRoutingNumber?: ?string,
     *   immediateOrigin?: ?string,
     *   immediateDestinationName?: ?string,
     *   companyIdentification?: ?string,
     *   companyName?: ?string,
     *   companyDiscretionaryData?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->serviceUserNumber = $values['serviceUserNumber'] ?? null;
        $this->serviceUserName = $values['serviceUserName'] ?? null;
        $this->odfiRoutingNumber = $values['odfiRoutingNumber'] ?? null;
        $this->immediateOrigin = $values['immediateOrigin'] ?? null;
        $this->immediateDestinationName = $values['immediateDestinationName'] ?? null;
        $this->companyIdentification = $values['companyIdentification'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->companyDiscretionaryData = $values['companyDiscretionaryData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
