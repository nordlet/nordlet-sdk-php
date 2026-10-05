<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Declarations\Types\AnnualAccountsDistributionsUpdateDeclarationsRequestKind;

class AnnualAccountsDistributionsUpdateDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var DateTime $decidedOn
     */
    #[JsonProperty('decidedOn'), Date(Date::TYPE_DATE)]
    public DateTime $decidedOn;

    /**
     * @var value-of<AnnualAccountsDistributionsUpdateDeclarationsRequestKind> $kind
     */
    #[JsonProperty('kind')]
    public string $kind;

    /**
     * @var string $amount
     */
    #[JsonProperty('amount')]
    public string $amount;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   id: string,
     *   decidedOn: DateTime,
     *   kind: value-of<AnnualAccountsDistributionsUpdateDeclarationsRequestKind>,
     *   amount: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->decidedOn = $values['decidedOn'];
        $this->kind = $values['kind'];
        $this->amount = $values['amount'];
        $this->description = $values['description'] ?? null;
    }
}
