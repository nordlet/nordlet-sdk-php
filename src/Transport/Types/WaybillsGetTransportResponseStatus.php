<?php

namespace Nordlet\Transport\Types;

enum WaybillsGetTransportResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
