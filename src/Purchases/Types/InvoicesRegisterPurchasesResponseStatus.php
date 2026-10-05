<?php

namespace Nordlet\Purchases\Types;

enum InvoicesRegisterPurchasesResponseStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
