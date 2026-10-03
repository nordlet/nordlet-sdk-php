<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsEeEmploymentRegisterSendResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
