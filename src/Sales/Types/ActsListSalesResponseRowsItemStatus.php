<?php

namespace Nordlet\Sales\Types;

enum ActsListSalesResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
