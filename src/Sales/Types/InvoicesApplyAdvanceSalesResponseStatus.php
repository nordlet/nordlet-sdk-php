<?php

namespace Nordlet\Sales\Types;

enum InvoicesApplyAdvanceSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
