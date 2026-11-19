<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Nordlet\Core\Json\JsonProperty;
use Nordlet\Core\Types\ArrayType;

/**
 * Facts of the browser the user files from, which HMRC requires with every VAT (MTD) API call: `navigator.userAgent`, a UUID the browser keeps for the device, every screen (width, height, scaling factor, colour depth in bits), the window size in pixels and the time zone as `UTC±hh:mm`.
 */
class GbVatPaymentsListDeclarationsRequestDevice extends JsonSerializableType
{
    /**
     * @var string $userAgent
     */
    #[JsonProperty('userAgent')]
    public string $userAgent;

    /**
     * @var string $deviceId
     */
    #[JsonProperty('deviceId')]
    public string $deviceId;

    /**
     * @var array<GbVatPaymentsListDeclarationsRequestDeviceScreensItem> $screens
     */
    #[JsonProperty('screens'), ArrayType([GbVatPaymentsListDeclarationsRequestDeviceScreensItem::class])]
    public array $screens;

    /**
     * @var GbVatPaymentsListDeclarationsRequestDeviceWindowSize $windowSize
     */
    #[JsonProperty('windowSize')]
    public GbVatPaymentsListDeclarationsRequestDeviceWindowSize $windowSize;

    /**
     * @var string $timezone
     */
    #[JsonProperty('timezone')]
    public string $timezone;

    /**
     * @param array{
     *   userAgent: string,
     *   deviceId: string,
     *   screens: array<GbVatPaymentsListDeclarationsRequestDeviceScreensItem>,
     *   windowSize: GbVatPaymentsListDeclarationsRequestDeviceWindowSize,
     *   timezone: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userAgent = $values['userAgent'];
        $this->deviceId = $values['deviceId'];
        $this->screens = $values['screens'];
        $this->windowSize = $values['windowSize'];
        $this->timezone = $values['timezone'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
