<?php

namespace Nordlet\Account\Types;

enum CompaniesUpdateAccountRequestFiscalYearWeekRule: string
{
    case Last = "last";
    case Nearest = "nearest";
}
