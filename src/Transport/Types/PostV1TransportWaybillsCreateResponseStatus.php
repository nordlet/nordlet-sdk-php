<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsCreateResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
