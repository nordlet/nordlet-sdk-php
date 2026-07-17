<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsUpdateResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
