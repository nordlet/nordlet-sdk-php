<?php

namespace Nordlet\Sales\Types;

enum ActsCancelSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
