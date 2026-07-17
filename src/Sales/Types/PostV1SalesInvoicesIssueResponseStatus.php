<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesIssueResponseStatus: string
{
    case Draft = "draft";
    case Issued = "issued";
}
