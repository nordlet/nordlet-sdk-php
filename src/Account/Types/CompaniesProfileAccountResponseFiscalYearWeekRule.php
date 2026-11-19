<?php

namespace Nordlet\Account\Types;

enum CompaniesProfileAccountResponseFiscalYearWeekRule: string
{
    case Last = "last";
    case Nearest = "nearest";
}
