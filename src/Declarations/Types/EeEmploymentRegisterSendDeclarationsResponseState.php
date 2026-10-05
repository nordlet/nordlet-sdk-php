<?php

namespace Nordlet\Declarations\Types;

enum EeEmploymentRegisterSendDeclarationsResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
