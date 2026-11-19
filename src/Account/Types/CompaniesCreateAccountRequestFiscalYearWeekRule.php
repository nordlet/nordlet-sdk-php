<?php

namespace Nordlet\Account\Types;

enum CompaniesCreateAccountRequestFiscalYearWeekRule: string
{
    case Last = "last";
    case Nearest = "nearest";
}
