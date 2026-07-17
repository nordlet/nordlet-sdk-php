<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsIssueResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
    case Cancelled = "cancelled";
}
