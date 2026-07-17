<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsIssueResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
