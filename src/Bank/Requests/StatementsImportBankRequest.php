<?php

namespace Nordlet\Bank\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Bank\Types\StatementsImportBankRequestFormat;

class StatementsImportBankRequest extends JsonSerializableType
{
    /**
     * @var string $bankAccountId
     */
    #[JsonProperty('bankAccountId')]
    public string $bankAccountId;

    /**
     * @var ?string $templateId
     */
    #[JsonProperty('templateId')]
    public ?string $templateId;

    /**
     * @var ?value-of<StatementsImportBankRequestFormat> $format
     */
    #[JsonProperty('format')]
    public ?string $format;

    /**
     * @var string $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var ?string $transfersCsv Stripe transfers export (plain CSV or base64) used to post lender payouts and commissions
     */
    #[JsonProperty('transfersCsv')]
    public ?string $transfersCsv;

    /**
     * @param array{
     *   bankAccountId: string,
     *   content: string,
     *   templateId?: ?string,
     *   format?: ?value-of<StatementsImportBankRequestFormat>,
     *   transfersCsv?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bankAccountId = $values['bankAccountId'];
        $this->templateId = $values['templateId'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->content = $values['content'];
        $this->transfersCsv = $values['transfersCsv'] ?? null;
    }
}
