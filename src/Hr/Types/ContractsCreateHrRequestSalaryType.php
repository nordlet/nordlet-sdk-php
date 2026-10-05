<?php

namespace Nordlet\Hr\Types;

enum ContractsCreateHrRequestSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
    case Weekly = "weekly";
    case Daily = "daily";
    case Yearly = "yearly";
}
