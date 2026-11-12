<?php

namespace Nordlet\Purchases\Types;

enum InvoicesReversePurchasesResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
    case Reversed = "reversed";
}
