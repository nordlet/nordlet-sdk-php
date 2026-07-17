<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsGetResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
