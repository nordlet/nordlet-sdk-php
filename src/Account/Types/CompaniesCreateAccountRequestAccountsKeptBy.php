<?php

namespace Nordlet\Account\Types;

enum CompaniesCreateAccountRequestAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
