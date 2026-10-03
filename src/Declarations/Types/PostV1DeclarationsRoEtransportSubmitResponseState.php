<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsRoEtransportSubmitResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
