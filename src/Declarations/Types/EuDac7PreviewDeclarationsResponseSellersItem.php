<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

class EuDac7PreviewDeclarationsResponseSellersItem extends JsonSerializableType
{
    /**
     * @var string $sellerId
     */
    #[JsonProperty('sellerId')]
    public string $sellerId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var bool $reportable
     */
    #[JsonProperty('reportable')]
    public bool $reportable;

    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @var string $consideration
     */
    #[JsonProperty('consideration')]
    public string $consideration;

    /**
     * @var int $activities
     */
    #[JsonProperty('activities')]
    public int $activities;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   sellerId: string,
     *   name: string,
     *   reportable: bool,
     *   consideration: string,
     *   activities: int,
     *   warnings: array<string>,
     *   reason?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sellerId = $values['sellerId'];
        $this->name = $values['name'];
        $this->reportable = $values['reportable'];
        $this->reason = $values['reason'] ?? null;
        $this->consideration = $values['consideration'];
        $this->activities = $values['activities'];
        $this->warnings = $values['warnings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
