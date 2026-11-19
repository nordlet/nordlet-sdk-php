<?php

namespace Nordlet\Declarations\Requests;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Declarations\Types\GbVatLiabilitiesListDeclarationsRequestDevice;
use Nordlet\Core\Json\JsonProperty;
use DateTime;
use Nordlet\Core\Types\Date;

class GbVatLiabilitiesListDeclarationsRequest extends JsonSerializableType
{
    /**
     * @var GbVatLiabilitiesListDeclarationsRequestDevice $device Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
     */
    #[JsonProperty('device')]
    public GbVatLiabilitiesListDeclarationsRequestDevice $device;

    /**
     * @var DateTime $from
     */
    #[JsonProperty('from'), Date(Date::TYPE_DATE)]
    public DateTime $from;

    /**
     * @var DateTime $to
     */
    #[JsonProperty('to'), Date(Date::TYPE_DATE)]
    public DateTime $to;

    /**
     * @param array{
     *   device: GbVatLiabilitiesListDeclarationsRequestDevice,
     *   from: DateTime,
     *   to: DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->device = $values['device'];
        $this->from = $values['from'];
        $this->to = $values['to'];
    }
}
