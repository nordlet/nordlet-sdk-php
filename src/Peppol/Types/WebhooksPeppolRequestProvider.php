<?php

namespace Nordlet\Peppol\Types;

enum WebhooksPeppolRequestProvider: string
{
    case Recommand = "recommand";
    case Storecove = "storecove";
    case EInvoiceBe = "e-invoice-be";
}
