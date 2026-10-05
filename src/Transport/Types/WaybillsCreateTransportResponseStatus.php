<?php

namespace Nordlet\Transport\Types;

enum WaybillsCreateTransportResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
