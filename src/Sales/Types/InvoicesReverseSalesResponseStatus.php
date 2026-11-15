<?php

namespace Nordlet\Sales\Types;

enum InvoicesReverseSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Reversed = "reversed";
}
