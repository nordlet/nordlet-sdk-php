<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsUpdateResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
