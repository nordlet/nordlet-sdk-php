<?php

namespace Nordlet\Purchases\Types;

enum InvoicesGetPurchasesResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
