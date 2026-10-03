<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsRoEtransportStatusResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
