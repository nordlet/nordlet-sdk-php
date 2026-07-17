<?php

namespace Nordlet\Purchases\Types;

enum PostV1PurchasesInvoicesListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
