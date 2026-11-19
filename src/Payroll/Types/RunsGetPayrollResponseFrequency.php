<?php

namespace Nordlet\Payroll\Types;

enum RunsGetPayrollResponseFrequency: string
{
    case Monthly = "monthly";
    case Semimonthly = "semimonthly";
    case FourWeekly = "four_weekly";
    case Biweekly = "biweekly";
    case Weekly = "weekly";
}
