<?php

namespace Nordlet\Sales\Types;

enum ActsIssueSalesResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
