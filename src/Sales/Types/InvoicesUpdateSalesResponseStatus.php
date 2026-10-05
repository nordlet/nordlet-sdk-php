<?php

namespace Nordlet\Sales\Types;

enum InvoicesUpdateSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
