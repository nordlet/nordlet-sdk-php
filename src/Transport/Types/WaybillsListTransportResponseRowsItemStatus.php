<?php

namespace Nordlet\Transport\Types;

enum WaybillsListTransportResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
