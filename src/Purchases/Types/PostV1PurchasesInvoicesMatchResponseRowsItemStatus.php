<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesMatchResponseRowsItemStatus: string
{
    case Matched = "matched";
    case NotReceived = "not_received";
    case OverInvoiced = "over_invoiced";
    case PriceMismatch = "price_mismatch";
    case NotOnOrder = "not_on_order";
    case NotInvoiced = "not_invoiced";
}
