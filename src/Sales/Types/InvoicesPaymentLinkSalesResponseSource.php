<?php

namespace Nordlet\Sales\Types;

enum InvoicesPaymentLinkSalesResponseSource: string
{
    case Stripe = "stripe";
    case Template = "template";
}
