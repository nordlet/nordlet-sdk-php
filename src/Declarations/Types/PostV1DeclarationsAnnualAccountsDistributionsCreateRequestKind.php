<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsDistributionsCreateRequestKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
