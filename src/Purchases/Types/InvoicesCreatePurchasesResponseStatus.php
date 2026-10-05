<?php

namespace Nordlet\Purchases\Types;

enum InvoicesCreatePurchasesResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
