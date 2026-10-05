<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsDistributionsUpdateDeclarationsRequestKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
