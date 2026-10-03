<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsDistributionsCreateResponseKind: string
{
    case Dividend = "dividend";
    case InterimDividend = "interim_dividend";
    case Other = "other";
}
