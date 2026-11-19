<?php

namespace Nordlet\Account\Types;

enum CompaniesUpdateAccountResponseFiscalYearWeekRule: string
{
    case Last = "last";
    case Nearest = "nearest";
}
