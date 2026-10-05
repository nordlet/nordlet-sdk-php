<?php

namespace Nordlet\Transport\Types;

enum WaybillsUpdateTransportResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
