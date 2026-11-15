<?php

namespace Nordlet\Account\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class CompaniesContextAccountResponseFilingsItem extends JsonSerializableType
{
    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @var string $ruleKey
     */
    #[JsonProperty('ruleKey')]
    public string $ruleKey;

    /**
     * @var string $period
     */
    #[JsonProperty('period')]
    public string $period;

    /**
     * @var string $title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var DateTime $dueDate
     */
    #[JsonProperty('dueDate'), Date(Date::TYPE_DATE)]
    public DateTime $dueDate;

    /**
     * @var ?string $system
     */
    #[JsonProperty('system')]
    public ?string $system;

    /**
     * @var bool $canDownload
     */
    #[JsonProperty('canDownload')]
    public bool $canDownload;

    /**
     * @var bool $canSubmit
     */
    #[JsonProperty('canSubmit')]
    public bool $canSubmit;

    /**
     * @var ?CompaniesContextAccountResponseFilingsItemMissingSettings $missingSettings
     */
    #[JsonProperty('missingSettings')]
    public ?CompaniesContextAccountResponseFilingsItemMissingSettings $missingSettings;

    /**
     * @param array{
     *   key: string,
     *   ruleKey: string,
     *   period: string,
     *   title: string,
     *   dueDate: DateTime,
     *   canDownload: bool,
     *   canSubmit: bool,
     *   system?: ?string,
     *   missingSettings?: ?CompaniesContextAccountResponseFilingsItemMissingSettings,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->key = $values['key'];
        $this->ruleKey = $values['ruleKey'];
        $this->period = $values['period'];
        $this->title = $values['title'];
        $this->dueDate = $values['dueDate'];
        $this->system = $values['system'] ?? null;
        $this->canDownload = $values['canDownload'];
        $this->canSubmit = $values['canSubmit'];
        $this->missingSettings = $values['missingSettings'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
