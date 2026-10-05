<?php

namespace Nordlet\Account\Types;

enum CompaniesUpdateAccountResponseAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
