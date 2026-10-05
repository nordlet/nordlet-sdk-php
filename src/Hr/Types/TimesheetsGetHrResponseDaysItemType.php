<?php

namespace Nordlet\Hr\Types;

enum TimesheetsGetHrResponseDaysItemType: string
{
    case Work = "work";
    case BusinessTrip = "business_trip";
    case Vacation = "vacation";
    case Sick = "sick";
    case Holiday = "holiday";
    case Unpaid = "unpaid";
}
