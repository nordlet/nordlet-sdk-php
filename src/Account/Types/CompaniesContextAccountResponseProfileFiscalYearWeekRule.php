<?php

namespace Nordlet\Account\Types;

enum CompaniesContextAccountResponseProfileFiscalYearWeekRule: string
{
    case Last = "last";
    case Nearest = "nearest";
}
