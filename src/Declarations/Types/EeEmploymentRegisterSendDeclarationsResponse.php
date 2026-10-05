<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Core\Types\ArrayType;

class EeEmploymentRegisterSendDeclarationsResponse extends JsonSerializableType
{
    /**
     * @var string $reference
     */
    #[JsonProperty('reference')]
    public string $reference;

    /**
     * @var value-of<EeEmploymentRegisterSendDeclarationsResponseState> $state
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?string $detail
     */
    #[JsonProperty('detail')]
    public ?string $detail;

    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var DateTime $entryDate
     */
    #[JsonProperty('entryDate'), Date(Date::TYPE_DATE)]
    public DateTime $entryDate;

    /**
     * @var string $xml
     */
    #[JsonProperty('xml')]
    public string $xml;

    /**
     * @var array<string> $warnings
     */
    #[JsonProperty('warnings'), ArrayType(['string'])]
    public array $warnings;

    /**
     * @param array{
     *   reference: string,
     *   state: value-of<EeEmploymentRegisterSendDeclarationsResponseState>,
     *   fileName: string,
     *   entryDate: DateTime,
     *   xml: string,
     *   warnings: array<string>,
     *   detail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->reference = $values['reference'];
        $this->state = $values['state'];
        $this->detail = $values['detail'] ?? null;
        $this->fileName = $values['fileName'];
        $this->entryDate = $values['entryDate'];
        $this->xml = $values['xml'];
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
