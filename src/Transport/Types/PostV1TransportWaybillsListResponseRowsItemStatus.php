<?php

namespace Nordlet\Transport\Types;

enum PostV1TransportWaybillsListResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
