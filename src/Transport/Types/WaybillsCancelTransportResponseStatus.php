<?php

namespace Nordlet\Transport\Types;

enum WaybillsCancelTransportResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
