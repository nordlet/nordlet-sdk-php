<?php

namespace Nordlet\Payroll\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;
use Nordlet\Payroll\Types\PaymentsExportPayrollRequestLocale;

class PaymentsExportPayrollRequest extends JsonSerializableType
{
    /**
     * @var string $runId
     */
    #[JsonProperty('runId')]
    public string $runId;

    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?DateTime $executionDate
     */
    #[JsonProperty('executionDate'), Date(Date::TYPE_DATE)]
    public ?DateTime $executionDate;

    /**
     * @var ?value-of<PaymentsExportPayrollRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   runId: string,
     *   bankAccountId: string,
     *   executionDate?: ?DateTime,
     *   locale?: ?value-of<PaymentsExportPayrollRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->runId = $values['runId'];
        $this->bankAccountId = $values['bankAccountId'];
        $this->executionDate = $values['executionDate'] ?? null;
        $this->locale = $values['locale'] ?? null;
    }
}
