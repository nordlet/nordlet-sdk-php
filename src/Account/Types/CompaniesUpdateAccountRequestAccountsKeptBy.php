<?php

namespace Nordlet\Account\Types;

enum CompaniesUpdateAccountRequestAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
