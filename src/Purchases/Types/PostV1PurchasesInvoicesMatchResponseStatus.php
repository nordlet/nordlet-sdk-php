<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesMatchResponseStatus: string
{
    case Matched = "matched";
    case Mismatched = "mismatched";
}
