<?php

namespace Nordlet\Sales\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Sales\Types\PostV1SalesInvoicesSendRequestLocale;

class PostV1SalesInvoicesSendRequest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $to
     */
    #[JsonProperty('to')]
    public ?string $to;

    /**
     * @var ?value-of<PostV1SalesInvoicesSendRequestLocale> $locale
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @param array{
     *   id: string,
     *   to?: ?string,
     *   locale?: ?value-of<PostV1SalesInvoicesSendRequestLocale>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->to = $values['to'] ?? null;
        $this->locale = $values['locale'] ?? null;
    }
}
