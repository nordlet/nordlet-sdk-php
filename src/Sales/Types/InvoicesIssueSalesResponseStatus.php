<?php

namespace Nordlet\Sales\Types;

enum InvoicesIssueSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
