<?php

namespace Nordlet\Bank\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class SecuritiesImportBankResponse extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var string $broker
     */
    #[JsonProperty('broker')]
    public string $broker;

    /**
     * @var string $brokerAccount
     */
    #[JsonProperty('brokerAccount')]
    public string $brokerAccount;

    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @var ?string $fileName
     */
    #[JsonProperty('fileName')]
    public ?string $fileName;

    /**
     * @var int $operationCount
     */
    #[JsonProperty('operationCount')]
    public int $operationCount;

    /**
     * @var int $duplicateCount
     */
    #[JsonProperty('duplicateCount')]
    public int $duplicateCount;

    /**
     * @var int $postedCount
     */
    #[JsonProperty('postedCount')]
    public int $postedCount;

    /**
     * @var int $notPostedCount
     */
    #[JsonProperty('notPostedCount')]
    public int $notPostedCount;

    /**
     * @var string $realizedTotal
     */
    #[JsonProperty('realizedTotal')]
    public string $realizedTotal;

    /**
     * @var DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @param array{
     *   id: string,
     *   bankAccountId: string,
     *   broker: string,
     *   brokerAccount: string,
     *   period: string,
     *   operationCount: int,
     *   duplicateCount: int,
     *   postedCount: int,
     *   notPostedCount: int,
     *   realizedTotal: string,
     *   createdAt: DateTime,
     *   fileName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->broker = $values['broker'];
        $this->brokerAccount = $values['brokerAccount'];
        $this->period = $values['period'];
        $this->fileName = $values['fileName'] ?? null;
        $this->operationCount = $values['operationCount'];
        $this->duplicateCount = $values['duplicateCount'];
        $this->postedCount = $values['postedCount'];
        $this->notPostedCount = $values['notPostedCount'];
        $this->realizedTotal = $values['realizedTotal'];
        $this->createdAt = $values['createdAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
