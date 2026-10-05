<?php

namespace Nordlet\Declarations\Types;

enum AnnualAccountsSetDeclarationsResponseDistributionsItemKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
