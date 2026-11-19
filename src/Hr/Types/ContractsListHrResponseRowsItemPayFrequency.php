<?php

namespace Nordlet\Hr\Types;

enum ContractsListHrResponseRowsItemPayFrequency: string
{
    case Monthly = "monthly";
    case Semimonthly = "semimonthly";
    case FourWeekly = "four_weekly";
    case Biweekly = "biweekly";
    case Weekly = "weekly";
}
