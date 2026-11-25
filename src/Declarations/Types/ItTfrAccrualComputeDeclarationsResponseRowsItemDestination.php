<?php

namespace Nordlet\Declarations\Types;

enum ItTfrAccrualComputeDeclarationsResponseRowsItemDestination: string
{
    case Azienda = "azienda";
    case FondoTesoreria = "fondo-tesoreria";
    case PrevidenzaComplementare = "previdenza-complementare";
}
