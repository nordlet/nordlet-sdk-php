<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsCancelResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
