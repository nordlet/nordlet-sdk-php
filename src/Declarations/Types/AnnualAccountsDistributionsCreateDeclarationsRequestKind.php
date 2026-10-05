<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsDistributionsCreateDeclarationsRequestKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
