<?php

namespace Nordlet\Purchases\Types;

enum InvoicesUpdatePurchasesResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
