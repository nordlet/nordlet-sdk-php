<?php

namespace Nordlet\Transport\Types;

enum WaybillsIssueTransportResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
