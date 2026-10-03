<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsLtSaftSendResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
