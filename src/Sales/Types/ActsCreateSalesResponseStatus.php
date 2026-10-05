<?php

namespace Nordlet\Sales\Types;

enum ActsCreateSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
