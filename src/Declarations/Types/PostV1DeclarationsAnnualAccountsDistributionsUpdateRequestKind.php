<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsDistributionsUpdateRequestKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
