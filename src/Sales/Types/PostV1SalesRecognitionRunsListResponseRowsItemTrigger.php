<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesRecognitionRunsListResponseRowsItemTrigger: string
{
    case Manual = "manual";
    case ScheduleDue = "schedule_due";
    case PeriodClose = "period_close";
    case DeliveryAct = "delivery_act";
    case Progress = "progress";
    case Modification = "modification";
}
