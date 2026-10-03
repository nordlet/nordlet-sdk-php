<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesUpdateRequestAccountsKeptBy: string
{
    case Company = "company";
    case External = "external";
}
