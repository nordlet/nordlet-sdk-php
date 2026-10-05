<?php

namespace Nordlet\Agreements\Types;

enum AgreementsUpdateAgreementsRequestStatus: string
{
    case Draft = "draft";
    case Active = "active";
    case Expired = "expired";
    case Terminated = "terminated";
}
