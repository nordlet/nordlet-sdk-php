<?php

namespace Nordlet\Sales\Types;

enum ActsUpdateSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
