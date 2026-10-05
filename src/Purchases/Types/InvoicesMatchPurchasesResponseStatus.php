<?php

namespace Nordlet\Purchases\Types;

enum InvoicesMatchPurchasesResponseStatus: string
{
    case Matched = "matched";
    case Mismatched = "mismatched";
}
