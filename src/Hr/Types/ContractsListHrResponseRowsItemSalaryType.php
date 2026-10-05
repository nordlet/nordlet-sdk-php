<?php

namespace Nordlet\Hr\Types;

enum ContractsListHrResponseRowsItemSalaryType: string
{
    case Monthly = "monthly";
    case Hourly = "hourly";
    case Weekly = "weekly";
    case Daily = "daily";
    case Yearly = "yearly";
}
