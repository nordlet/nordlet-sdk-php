<?php

namespace Nordlet\Declarations\Types;

enum GbP11DItemsCreateDeclarationsResponseItemAssetAvailableAsset: string
{
    case HolidayAccommodation = "holiday accommodation";
    case TimeshareAccommodation = "timeshare accommodation";
    case Aircraft = "aircraft";
    case Boat = "boat";
    case CorporateHospitality = "corporate hospitality";
    case Multiple = "multiple";
    case Other = "other";
}
