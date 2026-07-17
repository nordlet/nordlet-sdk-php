<?php

namespace Nordlet\Sales\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;

class PostV1SalesInvoicesPeppolXmlResponse extends JsonSerializableType
{
    /**
     * @var string $fileName
     */
    #[JsonProperty('fileName')]
    public string $fileName;

    /**
     * @var string $contentType
     */
    #[JsonProperty('contentType')]
    public string $contentType;

    /**
     * @var string $data
     */
    #[JsonProperty('data')]
    public string $data;

    /**
     * @var string $senderId
     */
    #[JsonProperty('senderId')]
    public string $senderId;

    /**
     * @var string $receiverId
     */
    #[JsonProperty('receiverId')]
    public string $receiverId;

    /**
     * @param array{
     *   fileName: string,
     *   contentType: string,
     *   data: string,
     *   senderId: string,
     *   receiverId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fileName = $values['fileName'];
        $this->contentType = $values['contentType'];
        $this->data = $values['data'];
        $this->senderId = $values['senderId'];
        $this->receiverId = $values['receiverId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
