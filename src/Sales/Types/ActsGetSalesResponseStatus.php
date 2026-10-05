<?php

namespace Nordlet\Sales\Types;

enum ActsGetSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
