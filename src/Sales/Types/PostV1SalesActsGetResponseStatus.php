<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsGetResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
