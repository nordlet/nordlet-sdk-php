<?php

namespace Nordlet\Hr\Types;

enum PostV1HrTimesheetsGetResponseDaysItemType: string
{
    case Work = "work";
    case BusinessTrip = "business_trip";
    case Vacation = "vacation";
    case Sick = "sick";
    case Holiday = "holiday";
    case Unpaid = "unpaid";
}
