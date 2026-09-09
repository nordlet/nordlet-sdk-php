# Reference
## Reference
<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceExchangeRatesSync($request) -> ?PostV1ReferenceExchangeRatesSyncResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceExchangeRatesSync(
    new PostV1ReferenceExchangeRatesSyncRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceExchangeRatesList($request) -> ?PostV1ReferenceExchangeRatesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceExchangeRatesList(
    new PostV1ReferenceExchangeRatesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceExchangeRatesSet($request) -> ?PostV1ReferenceExchangeRatesSetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceExchangeRatesSet(
    new PostV1ReferenceExchangeRatesSetRequest([
        'currency' => 'currency',
        'date' => 'date',
        'rate' => 'rate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$currency:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$rate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceExchangeRatesOverridesList($request) -> ?PostV1ReferenceExchangeRatesOverridesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceExchangeRatesOverridesList(
    new PostV1ReferenceExchangeRatesOverridesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceExchangeRatesOverridesDelete($request) -> ?PostV1ReferenceExchangeRatesOverridesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceExchangeRatesOverridesDelete(
    new PostV1ReferenceExchangeRatesOverridesDeleteRequest([
        'currency' => 'currency',
        'date' => 'date',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$currency:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceCountriesList($request) -> ?PostV1ReferenceCountriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceCountriesList(
    new PostV1ReferenceCountriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceLtCountiesList($request) -> ?PostV1ReferenceLtCountiesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceLtCountiesList(
    new PostV1ReferenceLtCountiesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceLtMunicipalitiesList($request) -> ?PostV1ReferenceLtMunicipalitiesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceLtMunicipalitiesList(
    new PostV1ReferenceLtMunicipalitiesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countyCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceLtCitiesList($request) -> ?PostV1ReferenceLtCitiesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceLtCitiesList(
    new PostV1ReferenceLtCitiesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$municipalityCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$q:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceBanksList($request) -> ?PostV1ReferenceBanksListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceBanksList(
    new PostV1ReferenceBanksListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceBanksUpsert($request) -> ?PostV1ReferenceBanksUpsertResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceBanksUpsert(
    new PostV1ReferenceBanksUpsertRequest([
        'countryCode' => 'countryCode',
        'name' => 'name',
        'bic' => 'bic',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceLtRegionsList($request) -> ?PostV1ReferenceLtRegionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceLtRegionsList(
    new PostV1ReferenceLtRegionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceCurrenciesList($request) -> ?PostV1ReferenceCurrenciesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceCurrenciesList(
    new PostV1ReferenceCurrenciesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceVatClassifiersList($request) -> ?PostV1ReferenceVatClassifiersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceVatClassifiersList(
    new PostV1ReferenceVatClassifiersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceVatClassifiersUpsert($request) -> ?PostV1ReferenceVatClassifiersUpsertResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceVatClassifiersUpsert(
    new PostV1ReferenceVatClassifiersUpsertRequest([
        'rows' => [
            new PostV1ReferenceVatClassifiersUpsertRequestRowsItem([
                'code' => 'code',
                'name' => 'name',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rows:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceEuVatRatesList($request) -> ?PostV1ReferenceEuVatRatesListResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Effective EU VAT rate mapping for this company: EC TEDB defaults, replaced per country by any company overrides. Verify the mapping fits the goods and services you sell before relying on it.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceEuVatRatesList(
    new PostV1ReferenceEuVatRatesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceEuVatRatesSetOverrides($request) -> ?PostV1ReferenceEuVatRatesSetOverridesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replace the VAT rate mapping this company uses for one EU country. Pass an empty rates array to drop the overrides and return to the TEDB defaults. Overrides feed rate suggestions (vat/resolve) and OSS/IOSS return rate classification.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceEuVatRatesSetOverrides(
    new PostV1ReferenceEuVatRatesSetOverridesRequest([
        'countryCode' => 'countryCode',
        'rates' => [
            new PostV1ReferenceEuVatRatesSetOverridesRequestRatesItem([
                'category' => PostV1ReferenceEuVatRatesSetOverridesRequestRatesItemCategory::Standard->value,
                'ratePercent' => 'ratePercent',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$rates:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceVatResolve($request) -> ?PostV1ReferenceVatResolveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceVatResolve(
    new PostV1ReferenceVatResolveRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$customerCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$customerIsBusiness:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$supplyType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$belowDistanceSalesThreshold:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$facilitatedByMarketplace:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$actingAsMarketplace:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sellerEstablishedInEu:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$importedConsignmentValueEur:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceCnCodesList($request) -> ?PostV1ReferenceCnCodesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceCnCodesList(
    new PostV1ReferenceCnCodesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceCnCodesUpsert($request) -> ?PostV1ReferenceCnCodesUpsertResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceCnCodesUpsert(
    new PostV1ReferenceCnCodesUpsertRequest([
        'rows' => [
            new PostV1ReferenceCnCodesUpsertRequestRowsItem([
                'code' => 'code',
                'name' => 'name',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rows:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceComplianceVersionsList($request) -> ?PostV1ReferenceComplianceVersionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceComplianceVersionsList(
    new PostV1ReferenceComplianceVersionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceIntrastatThresholdsList($request) -> ?PostV1ReferenceIntrastatThresholdsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceIntrastatThresholdsList(
    new PostV1ReferenceIntrastatThresholdsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceUnitsList($request) -> ?PostV1ReferenceUnitsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceUnitsList(
    new PostV1ReferenceUnitsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceSeriesCreate($request) -> ?PostV1ReferenceSeriesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceSeriesCreate(
    new PostV1ReferenceSeriesCreateRequest([
        'documentType' => 'documentType',
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$startAt:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reference-&gt;postV1ReferenceSeriesList($request) -> ?PostV1ReferenceSeriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reference->postV1ReferenceSeriesList(
    new PostV1ReferenceSeriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Partners
<details><summary><code>$client-&gt;partners-&gt;postV1PartnersAddressesCreate($request) -> ?PostV1PartnersAddressesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersAddressesCreate(
    new PostV1PartnersAddressesCreateRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$street:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersAddressesUpdate($request) -> ?PostV1PartnersAddressesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersAddressesUpdate(
    new PostV1PartnersAddressesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$street:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersAddressesDelete($request) -> ?PostV1PartnersAddressesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersAddressesDelete(
    new PostV1PartnersAddressesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersAddressesList($request) -> ?PostV1PartnersAddressesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersAddressesList(
    new PostV1PartnersAddressesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersContactsCreate($request) -> ?PostV1PartnersContactsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersContactsCreate(
    new PostV1PartnersContactsCreateRequest([
        'name' => 'name',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersContactsUpdate($request) -> ?PostV1PartnersContactsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersContactsUpdate(
    new PostV1PartnersContactsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersContactsDelete($request) -> ?PostV1PartnersContactsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersContactsDelete(
    new PostV1PartnersContactsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersContactsList($request) -> ?PostV1PartnersContactsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersContactsList(
    new PostV1PartnersContactsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersBankAccountsCreate($request) -> ?PostV1PartnersBankAccountsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersBankAccountsCreate(
    new PostV1PartnersBankAccountsCreateRequest([
        'iban' => 'iban',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$iban:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersBankAccountsUpdate($request) -> ?PostV1PartnersBankAccountsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersBankAccountsUpdate(
    new PostV1PartnersBankAccountsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersBankAccountsDelete($request) -> ?PostV1PartnersBankAccountsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersBankAccountsDelete(
    new PostV1PartnersBankAccountsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersBankAccountsList($request) -> ?PostV1PartnersBankAccountsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersBankAccountsList(
    new PostV1PartnersBankAccountsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersFilesList($request) -> ?PostV1PartnersFilesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersFilesList(
    new PostV1PartnersFilesListRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;remindersTheOvernightDebtReminderJobWouldSendTodayForThisCompany($request) -> ?PostV1PartnersDebtRemindersPreviewResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->remindersTheOvernightDebtReminderJobWouldSendTodayForThisCompany(
    new PostV1PartnersDebtRemindersPreviewRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersDebtRemindersList($request) -> ?PostV1PartnersDebtRemindersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersDebtRemindersList(
    new PostV1PartnersDebtRemindersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersValidateVat($request) -> ?PostV1PartnersValidateVatResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersValidateVat(
    new PostV1PartnersValidateVatRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersVatReviewsList($request) -> ?PostV1PartnersVatReviewsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersVatReviewsList(
    new PostV1PartnersVatReviewsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersVatReviewsResolve($request) -> ?PostV1PartnersVatReviewsResolveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersVatReviewsResolve(
    new PostV1PartnersVatReviewsResolveRequest([
        'id' => 'id',
        'resolution' => PostV1PartnersVatReviewsResolveRequestResolution::ConfirmedValid->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$resolution:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$note:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersCreate($request) -> ?PostV1PartnersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersCreate(
    new PostV1PartnersCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1PartnersCreateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?PostV1PartnersCreateRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersFindOrCreate($request) -> ?PostV1PartnersFindOrCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersFindOrCreate(
    new PostV1PartnersFindOrCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1PartnersFindOrCreateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?PostV1PartnersFindOrCreateRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersGet($request) -> ?PostV1PartnersGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersGet(
    new PostV1PartnersGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersUpdate($request) -> ?PostV1PartnersUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersUpdate(
    new PostV1PartnersUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$selfEmploymentCertNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isCustomer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentTermDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$creditLimit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$statusId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1PartnersUpdateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$correspondenceAddress:** `?PostV1PartnersUpdateRequestCorrespondenceAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shortName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fax:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eoriCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$otherCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$foreignTaxNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoDebtReminder:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lateInterestPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$nextCallDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$rating:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isEmployee:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isGroupMember:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$legalCountryClass:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersDelete($request) -> ?PostV1PartnersDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersDelete(
    new PostV1PartnersDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;blankAPartnersPersonalDataAndHideTheRecord($request) -> ?PostV1PartnersAnonymizeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes birth date, self-employment certificate number, email, phone, address, notes, contacts, addresses and bank accounts, then hides the partner. The name, code and VAT number stay because issued invoices must keep identifying the counterparty for the statutory retention period.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->blankAPartnersPersonalDataAndHideTheRecord(
    new PostV1PartnersAnonymizeRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersList($request) -> ?PostV1PartnersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersList(
    new PostV1PartnersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersGroupsCreate($request) -> ?PostV1PartnersGroupsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersGroupsCreate(
    new PostV1PartnersGroupsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersGroupsUpdate($request) -> ?PostV1PartnersGroupsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersGroupsUpdate(
    new PostV1PartnersGroupsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersGroupsDelete($request) -> ?PostV1PartnersGroupsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersGroupsDelete(
    new PostV1PartnersGroupsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersGroupsList($request) -> ?PostV1PartnersGroupsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersGroupsList(
    new PostV1PartnersGroupsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersStatusesCreate($request) -> ?PostV1PartnersStatusesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersStatusesCreate(
    new PostV1PartnersStatusesCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersStatusesUpdate($request) -> ?PostV1PartnersStatusesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersStatusesUpdate(
    new PostV1PartnersStatusesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersStatusesDelete($request) -> ?PostV1PartnersStatusesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersStatusesDelete(
    new PostV1PartnersStatusesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersStatusesList($request) -> ?PostV1PartnersStatusesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersStatusesList(
    new PostV1PartnersStatusesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersInquiriesCreate($request) -> ?PostV1PartnersInquiriesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersInquiriesCreate(
    new PostV1PartnersInquiriesCreateRequest([
        'subject' => 'subject',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactEmail:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactPhone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersInquiriesUpdate($request) -> ?PostV1PartnersInquiriesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersInquiriesUpdate(
    new PostV1PartnersInquiriesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersInquiriesGet($request) -> ?PostV1PartnersInquiriesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersInquiriesGet(
    new PostV1PartnersInquiriesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersInquiriesList($request) -> ?PostV1PartnersInquiriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersInquiriesList(
    new PostV1PartnersInquiriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1PartnersCreditCheck($request) -> ?PostV1PartnersCreditCheckResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1PartnersCreditCheck(
    new PostV1PartnersCreditCheckRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$additionalAmount:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsCreate($request) -> ?PostV1LeadsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsCreate(
    new PostV1LeadsCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsGet($request) -> ?PostV1LeadsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsGet(
    new PostV1LeadsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsUpdate($request) -> ?PostV1LeadsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsUpdate(
    new PostV1LeadsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contactName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignedUserId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsDelete($request) -> ?PostV1LeadsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsDelete(
    new PostV1LeadsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsList($request) -> ?PostV1LeadsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsList(
    new PostV1LeadsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsNotesCreate($request) -> ?PostV1LeadsNotesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsNotesCreate(
    new PostV1LeadsNotesCreateRequest([
        'leadId' => 'leadId',
        'body' => 'body',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$body:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsNotesDelete($request) -> ?PostV1LeadsNotesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsNotesDelete(
    new PostV1LeadsNotesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsNotesList($request) -> ?PostV1LeadsNotesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsNotesList(
    new PostV1LeadsNotesListRequest([
        'leadId' => 'leadId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsFilesList($request) -> ?PostV1LeadsFilesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsFilesList(
    new PostV1LeadsFilesListRequest([
        'leadId' => 'leadId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$leadId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsSourcesCreate($request) -> ?PostV1LeadsSourcesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsSourcesCreate(
    new PostV1LeadsSourcesCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsSourcesUpdate($request) -> ?PostV1LeadsSourcesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsSourcesUpdate(
    new PostV1LeadsSourcesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsSourcesDelete($request) -> ?PostV1LeadsSourcesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsSourcesDelete(
    new PostV1LeadsSourcesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsSourcesList($request) -> ?PostV1LeadsSourcesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsSourcesList(
    new PostV1LeadsSourcesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsSourcesOptions($request) -> ?PostV1LeadsSourcesOptionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsSourcesOptions(
    new PostV1LeadsSourcesOptionsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;partners-&gt;postV1LeadsConvert($request) -> ?PostV1LeadsConvertResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Create a customer partner from the lead, move the lead files to the partner, copy the lead notes into the partner notes and mark the lead as converted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->partners->postV1LeadsConvert(
    new PostV1LeadsConvertRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Catalog
<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsCreate($request) -> ?PostV1CatalogItemsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsCreate(
    new PostV1CatalogItemsCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tracking:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$barcode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$salePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cnCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$originCountry:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$netMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryQtyPerUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$components:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$kindId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$manufacturer:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$grossMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isFreePrice:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isReturnable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$commentRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$priceFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maxDiscountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loyaltyPoints:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$department:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$ageRestriction:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$packageQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$taraCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$posFlags:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsGet($request) -> ?PostV1CatalogItemsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsGet(
    new PostV1CatalogItemsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsUpdate($request) -> ?PostV1CatalogItemsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsUpdate(
    new PostV1CatalogItemsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$tracking:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$barcode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$salePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cnCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$originCountry:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$netMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplementaryQtyPerUnit:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$components:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$kindId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$manufacturer:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$grossMassKg:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isFreePrice:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isReturnable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$commentRequired:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$priceFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minPrice:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maxDiscountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loyaltyPoints:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$department:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$ageRestriction:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$packageQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$taraCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$certificateDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$posFlags:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsDelete($request) -> ?PostV1CatalogItemsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsDelete(
    new PostV1CatalogItemsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsList($request) -> ?PostV1CatalogItemsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsList(
    new PostV1CatalogItemsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsFilesList($request) -> ?PostV1CatalogItemsFilesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsFilesList(
    new PostV1CatalogItemsFilesListRequest([
        'itemId' => 'itemId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsKindsCreate($request) -> ?PostV1CatalogItemsKindsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsKindsCreate(
    new PostV1CatalogItemsKindsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$saftType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantityAccounting:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsKindsUpdate($request) -> ?PostV1CatalogItemsKindsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsKindsUpdate(
    new PostV1CatalogItemsKindsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saftType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantityAccounting:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsKindsDelete($request) -> ?PostV1CatalogItemsKindsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsKindsDelete(
    new PostV1CatalogItemsKindsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsKindsList($request) -> ?PostV1CatalogItemsKindsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsKindsList(
    new PostV1CatalogItemsKindsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogUnitsCreate($request) -> ?PostV1CatalogUnitsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogUnitsCreate(
    new PostV1CatalogUnitsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogUnitsUpdate($request) -> ?PostV1CatalogUnitsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogUnitsUpdate(
    new PostV1CatalogUnitsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogUnitsDelete($request) -> ?PostV1CatalogUnitsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogUnitsDelete(
    new PostV1CatalogUnitsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogUnitsList($request) -> ?PostV1CatalogUnitsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogUnitsList(
    new PostV1CatalogUnitsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogUnitsOptions($request) -> ?PostV1CatalogUnitsOptionsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogUnitsOptions(
    new PostV1CatalogUnitsOptionsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemGroupsCreate($request) -> ?PostV1CatalogItemGroupsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemGroupsCreate(
    new PostV1CatalogItemGroupsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemGroupsUpdate($request) -> ?PostV1CatalogItemGroupsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemGroupsUpdate(
    new PostV1CatalogItemGroupsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemGroupsDelete($request) -> ?PostV1CatalogItemGroupsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemGroupsDelete(
    new PostV1CatalogItemGroupsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemGroupsList($request) -> ?PostV1CatalogItemGroupsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemGroupsList(
    new PostV1CatalogItemGroupsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsSuppliersUpsert($request) -> ?PostV1CatalogItemsSuppliersUpsertResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsSuppliersUpsert(
    new PostV1CatalogItemsSuppliersUpsertRequest([
        'itemId' => 'itemId',
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$supplierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchasePriceExclVat:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsSuppliersList($request) -> ?PostV1CatalogItemsSuppliersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsSuppliersList(
    new PostV1CatalogItemsSuppliersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogItemsSuppliersDelete($request) -> ?PostV1CatalogItemsSuppliersDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogItemsSuppliersDelete(
    new PostV1CatalogItemsSuppliersDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsCreate($request) -> ?PostV1CatalogPriceListsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsCreate(
    new PostV1CatalogPriceListsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsUpdate($request) -> ?PostV1CatalogPriceListsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsUpdate(
    new PostV1CatalogPriceListsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsList($request) -> ?PostV1CatalogPriceListsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsList(
    new PostV1CatalogPriceListsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsItemsSet($request) -> ?PostV1CatalogPriceListsItemsSetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsItemsSet(
    new PostV1CatalogPriceListsItemsSetRequest([
        'priceListId' => 'priceListId',
        'items' => [
            new PostV1CatalogPriceListsItemsSetRequestItemsItem([
                'itemId' => 'itemId',
                'unitPriceExclVat' => 'unitPriceExclVat',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsItemsList($request) -> ?PostV1CatalogPriceListsItemsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsItemsList(
    new PostV1CatalogPriceListsItemsListRequest([
        'priceListId' => 'priceListId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;postV1CatalogPriceListsItemsDelete($request) -> ?PostV1CatalogPriceListsItemsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->postV1CatalogPriceListsItemsDelete(
    new PostV1CatalogPriceListsItemsDeleteRequest([
        'priceListId' => 'priceListId',
        'itemId' => 'itemId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$priceListId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Sales
<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesCreate($request) -> ?PostV1SalesInvoicesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesCreate(
    new PostV1SalesInvoicesCreateRequest([
        'partnerId' => 'partnerId',
        'lines' => [
            new PostV1SalesInvoicesCreateRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatScheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deemedSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentSeriesId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$seriesLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesGet($request) -> ?PostV1SalesInvoicesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesGet(
    new PostV1SalesInvoicesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPdf($request) -> ?PostV1SalesInvoicesPdfResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPdf(
    new PostV1SalesInvoicesPdfRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesSend($request) -> ?PostV1SalesInvoicesSendResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesSend(
    new PostV1SalesInvoicesSendRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPeppolXml($request) -> ?PostV1SalesInvoicesPeppolXmlResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPeppolXml(
    new PostV1SalesInvoicesPeppolXmlRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPeppolSend($request) -> ?PostV1SalesInvoicesPeppolSendResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPeppolSend(
    new PostV1SalesInvoicesPeppolSendRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesEinvoiceXml($request) -> ?PostV1SalesInvoicesEinvoiceXmlResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render an issued invoice as the national e-invoicing payload for the company country: FatturaPA (IT), KSeF FA(3) (PL) or UBL CIUS-RO (RO). Review the warnings - data the invoice does not carry is flagged, never invented.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesEinvoiceXml(
    new PostV1SalesInvoicesEinvoiceXmlRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesEinvoiceSend($request) -> ?PostV1SalesInvoicesEinvoiceSendResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Build the national e-invoicing payload and deliver it to the bridge endpoint configured for the country gateway in compliance settings. The bridge (an accredited intermediary or connector) handles the certified national channel - SdI accreditation, KSeF sessions or ANAF SPV OAuth.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesEinvoiceSend(
    new PostV1SalesInvoicesEinvoiceSendRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesUpdate($request) -> ?PostV1SalesInvoicesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesUpdate(
    new PostV1SalesInvoicesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatScheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deemedSupplier:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentSeriesId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$seriesLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$discountPercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$receivedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesDelete($request) -> ?PostV1SalesInvoicesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesDelete(
    new PostV1SalesInvoicesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesIssue($request) -> ?PostV1SalesInvoicesIssueResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesIssue(
    new PostV1SalesInvoicesIssueRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesLock($request) -> ?PostV1SalesInvoicesLockResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesLock(
    new PostV1SalesInvoicesLockRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesUnlock($request) -> ?PostV1SalesInvoicesUnlockResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesUnlock(
    new PostV1SalesInvoicesUnlockRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPaymentLink($request) -> ?PostV1SalesInvoicesPaymentLinkResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPaymentLink(
    new PostV1SalesInvoicesPaymentLinkRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPaymentSettingsGet($request) -> ?PostV1SalesInvoicesPaymentSettingsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPaymentSettingsGet(
    new PostV1SalesInvoicesPaymentSettingsGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesPaymentSettingsUpdate($request) -> ?PostV1SalesInvoicesPaymentSettingsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesPaymentSettingsUpdate(
    new PostV1SalesInvoicesPaymentSettingsUpdateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$paymentLinkTemplate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionSchedulesList($request) -> ?PostV1SalesRecognitionSchedulesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionSchedulesList(
    new PostV1SalesRecognitionSchedulesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesApplyAdvance($request) -> ?PostV1SalesInvoicesApplyAdvanceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesApplyAdvance(
    new PostV1SalesInvoicesApplyAdvanceRequest([
        'advanceId' => 'advanceId',
        'invoiceId' => 'invoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$advanceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesInvoicesList($request) -> ?PostV1SalesInvoicesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesInvoicesList(
    new PostV1SalesInvoicesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsCreate($request) -> ?PostV1SalesActsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsCreate(
    new PostV1SalesActsCreateRequest([
        'partnerId' => 'partnerId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsUpdate($request) -> ?PostV1SalesActsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsUpdate(
    new PostV1SalesActsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transferredByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptedByTitle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsIssue($request) -> ?PostV1SalesActsIssueResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsIssue(
    new PostV1SalesActsIssueRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsCancel($request) -> ?PostV1SalesActsCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsCancel(
    new PostV1SalesActsCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsGet($request) -> ?PostV1SalesActsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsGet(
    new PostV1SalesActsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsList($request) -> ?PostV1SalesActsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsList(
    new PostV1SalesActsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesActsPdf($request) -> ?PostV1SalesActsPdfResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesActsPdf(
    new PostV1SalesActsPdfRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1OperationTypesCreate($request) -> ?PostV1OperationTypesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1OperationTypesCreate(
    new PostV1OperationTypesCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debitAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incomeAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchase:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isWriteOff:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isInternalMovement:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchaseReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSalesReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isConsignment:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isProduction:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetIn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetOut:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isCashRegisterSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInVatRegister:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInSaft:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1OperationTypesUpdate($request) -> ?PostV1OperationTypesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1OperationTypesUpdate(
    new PostV1OperationTypesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debitAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$incomeAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchase:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isWriteOff:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isInternalMovement:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isPurchaseReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isSalesReturn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isConsignment:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isProduction:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetIn:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isAssetOut:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isCashRegisterSale:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInVatRegister:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$includeInSaft:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$sortOrder:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1OperationTypesGet($request) -> ?PostV1OperationTypesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1OperationTypesGet(
    new PostV1OperationTypesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1OperationTypesDelete($request) -> ?PostV1OperationTypesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1OperationTypesDelete(
    new PostV1OperationTypesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1OperationTypesList($request) -> ?PostV1OperationTypesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1OperationTypesList(
    new PostV1OperationTypesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1DocumentSeriesCreate($request) -> ?PostV1DocumentSeriesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1DocumentSeriesCreate(
    new PostV1DocumentSeriesCreateRequest([
        'prefix' => 'prefix',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$documentType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$numberLength:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$nextNumber:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$printSeries:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1DocumentSeriesUpdate($request) -> ?PostV1DocumentSeriesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1DocumentSeriesUpdate(
    new PostV1DocumentSeriesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$numberLength:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$nextNumber:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$printSeries:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1DocumentSeriesGet($request) -> ?PostV1DocumentSeriesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1DocumentSeriesGet(
    new PostV1DocumentSeriesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1DocumentSeriesDelete($request) -> ?PostV1DocumentSeriesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1DocumentSeriesDelete(
    new PostV1DocumentSeriesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1DocumentSeriesList($request) -> ?PostV1DocumentSeriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1DocumentSeriesList(
    new PostV1DocumentSeriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionCompute($request) -> ?PostV1SalesRecognitionComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionCompute(
    new PostV1SalesRecognitionComputeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionRun($request) -> ?PostV1SalesRecognitionRunResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionRun(
    new PostV1SalesRecognitionRunRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postingDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduleIds:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionProgress($request) -> ?PostV1SalesRecognitionProgressResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionProgress(
    new PostV1SalesRecognitionProgressRequest([
        'invoiceLineId' => 'invoiceLineId',
        'percentComplete' => 'percentComplete',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceLineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$percentComplete:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionModify($request) -> ?PostV1SalesRecognitionModifyResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Apply an IFRS 15 contract modification to a deferred invoice line. Prospective: cancel the pending schedule and respread the unrecognized remainder over the new terms. Cumulative catch-up (ratable only): recompute revenue as if the new terms applied from the start and post the difference immediately.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionModify(
    new PostV1SalesRecognitionModifyRequest([
        'invoiceLineId' => 'invoiceLineId',
        'approach' => PostV1SalesRecognitionModifyRequestApproach::Prospective->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceLineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$approach:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$newEndDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$newMilestones:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionRunsList($request) -> ?PostV1SalesRecognitionRunsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionRunsList(
    new PostV1SalesRecognitionRunsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRecognitionSummary($request) -> ?PostV1SalesRecognitionSummaryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRecognitionSummary(
    new PostV1SalesRecognitionSummaryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRefundLiabilityList($request) -> ?PostV1SalesRefundLiabilityListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRefundLiabilityList(
    new PostV1SalesRefundLiabilityListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;sales-&gt;postV1SalesRefundLiabilityTrueUp($request) -> ?PostV1SalesRefundLiabilityTrueUpResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->sales->postV1SalesRefundLiabilityTrueUp(
    new PostV1SalesRefundLiabilityTrueUpRequest([
        'invoiceId' => 'invoiceId',
        'estimatedTotal' => 'estimatedTotal',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedTotal:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Purchases
<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesCreate($request) -> ?PostV1PurchasesInvoicesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesCreate(
    new PostV1PurchasesInvoicesCreateRequest([
        'partnerId' => 'partnerId',
        'documentNumber' => 'documentNumber',
        'documentDate' => 'documentDate',
        'lines' => [
            new PostV1PurchasesInvoicesCreateRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$creditedInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesGet($request) -> ?PostV1PurchasesInvoicesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesGet(
    new PostV1PurchasesInvoicesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesUpdate($request) -> ?PostV1PurchasesInvoicesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesUpdate(
    new PostV1PurchasesInvoicesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesDelete($request) -> ?PostV1PurchasesInvoicesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesDelete(
    new PostV1PurchasesInvoicesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesRegister($request) -> ?PostV1PurchasesInvoicesRegisterResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesRegister(
    new PostV1PurchasesInvoicesRegisterRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesList($request) -> ?PostV1PurchasesInvoicesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesList(
    new PostV1PurchasesInvoicesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersCreate($request) -> ?PostV1PurchasesOrdersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersCreate(
    new PostV1PurchasesOrdersCreateRequest([
        'partnerId' => 'partnerId',
        'orderDate' => 'orderDate',
        'lines' => [
            new PostV1PurchasesOrdersCreateRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersUpdate($request) -> ?PostV1PurchasesOrdersUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersUpdate(
    new PostV1PurchasesOrdersUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$orderDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersGet($request) -> ?PostV1PurchasesOrdersGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersGet(
    new PostV1PurchasesOrdersGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersList($request) -> ?PostV1PurchasesOrdersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersList(
    new PostV1PurchasesOrdersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersSubmit($request) -> ?PostV1PurchasesOrdersSubmitResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersSubmit(
    new PostV1PurchasesOrdersSubmitRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersApprove($request) -> ?PostV1PurchasesOrdersApproveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersApprove(
    new PostV1PurchasesOrdersApproveRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersReject($request) -> ?PostV1PurchasesOrdersRejectResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersReject(
    new PostV1PurchasesOrdersRejectRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersCancel($request) -> ?PostV1PurchasesOrdersCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersCancel(
    new PostV1PurchasesOrdersCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersClose($request) -> ?PostV1PurchasesOrdersCloseResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersClose(
    new PostV1PurchasesOrdersCloseRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesOrdersDelete($request) -> ?PostV1PurchasesOrdersDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesOrdersDelete(
    new PostV1PurchasesOrdersDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesReceiptsCreate($request) -> ?PostV1PurchasesReceiptsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesReceiptsCreate(
    new PostV1PurchasesReceiptsCreateRequest([
        'orderId' => 'orderId',
        'receiptDate' => 'receiptDate',
        'lines' => [
            new PostV1PurchasesReceiptsCreateRequestLinesItem([
                'orderLineId' => 'orderLineId',
                'quantity' => 'quantity',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$receiptDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesReceiptsGet($request) -> ?PostV1PurchasesReceiptsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesReceiptsGet(
    new PostV1PurchasesReceiptsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesReceiptsList($request) -> ?PostV1PurchasesReceiptsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesReceiptsList(
    new PostV1PurchasesReceiptsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;purchases-&gt;postV1PurchasesInvoicesMatch($request) -> ?PostV1PurchasesInvoicesMatchResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->purchases->postV1PurchasesInvoicesMatch(
    new PostV1PurchasesInvoicesMatchRequest([
        'invoiceId' => 'invoiceId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$invoiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceTolerancePercent:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Capture
<details><summary><code>$client-&gt;capture-&gt;postV1CaptureSettingsGet($request) -> ?PostV1CaptureSettingsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureSettingsGet(
    new PostV1CaptureSettingsGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;postV1CaptureSettingsUpdate($request) -> ?PostV1CaptureSettingsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureSettingsUpdate(
    new PostV1CaptureSettingsUpdateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$intakeEnabled:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$captureAutoExtract:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;postV1CaptureSettingsRegenerateIntake($request) -> ?PostV1CaptureSettingsRegenerateIntakeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureSettingsRegenerateIntake(
    new PostV1CaptureSettingsRegenerateIntakeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;receiveAnInboundEmailWithSupplierDocumentsAttachedPostmarkStyleOrGenericJson($request) -> ?PostV1CaptureInboundEmailResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->receiveAnInboundEmailWithSupplierDocumentsAttachedPostmarkStyleOrGenericJson(
    new PostV1CaptureInboundEmailRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$postmarkTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$toFull:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkSubject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postmarkAttachments:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `string|array|null` 
    
</dd>
</dl>

<dl>
<dd>

**$from:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attachments:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;readAVendorBillOrReceiptAndReturnAnEditablePurchaseInvoiceDraft($request) -> ?PostV1CaptureDocumentsUploadResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->readAVendorBillOrReceiptAndReturnAnEditablePurchaseInvoiceDraft(
    new PostV1CaptureDocumentsUploadRequest([
        'fileName' => 'fileName',
        'mimeType' => 'mimeType',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fileName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$mimeType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Base64-encoded scan, photo or PDF of the supplier document
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;reReadAStoredCaptureReplacingThePreviousDraft($request) -> ?PostV1CaptureDocumentsExtractResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->reReadAStoredCaptureReplacingThePreviousDraft(
    new PostV1CaptureDocumentsExtractRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;postV1CaptureDocumentsGet($request) -> ?PostV1CaptureDocumentsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureDocumentsGet(
    new PostV1CaptureDocumentsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;postV1CaptureDocumentsList($request) -> ?PostV1CaptureDocumentsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureDocumentsList(
    new PostV1CaptureDocumentsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;postV1CaptureDocumentsDelete($request) -> ?PostV1CaptureDocumentsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->postV1CaptureDocumentsDelete(
    new PostV1CaptureDocumentsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;capture-&gt;saveTheReviewedDraftAsAPurchaseInvoiceAndAttachTheOriginalDocument($request) -> ?PostV1CaptureDocumentsConfirmResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->capture->saveTheReviewedDraftAsAPurchaseInvoiceAndAttachTheOriginalDocument(
    new PostV1CaptureDocumentsConfirmRequest([
        'id' => 'id',
        'documentNumber' => 'documentNumber',
        'documentDate' => 'documentDate',
        'lines' => [
            new PostV1CaptureDocumentsConfirmRequestLinesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$newSupplier:** `?PostV1CaptureDocumentsConfirmRequestNewSupplier` 
    
</dd>
</dl>

<dl>
<dd>

**$documentNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Declarations
<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtIntrastatCompute($request) -> ?PostV1DeclarationsLtIntrastatComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtIntrastatCompute(
    new PostV1DeclarationsLtIntrastatComputeRequest([
        'year' => 1000000,
        'month' => 1000000,
        'flow' => PostV1DeclarationsLtIntrastatComputeRequestFlow::Arrivals->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$flow:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transactionNature:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deliveryTerms:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transportMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtIvazGenerate($request) -> ?PostV1DeclarationsLtIvazGenerateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtIvazGenerate(
    new PostV1DeclarationsLtIvazGenerateRequest([
        'waybillIds' => [
            'waybillIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$waybillIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtIntrastatObligation($request) -> ?PostV1DeclarationsLtIntrastatObligationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtIntrastatObligation(
    new PostV1DeclarationsLtIntrastatObligationRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtIsafGenerate($request) -> ?PostV1DeclarationsLtIsafGenerateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtIsafGenerate(
    new PostV1DeclarationsLtIsafGenerateRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtFr0600Compute($request) -> ?PostV1DeclarationsLtFr0600ComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtFr0600Compute(
    new PostV1DeclarationsLtFr0600ComputeRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$deductionPercent:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtGpm313Compute($request) -> ?PostV1DeclarationsLtGpm313ComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtGpm313Compute(
    new PostV1DeclarationsLtGpm313ComputeRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutTiming:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$paymentDay:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtSamCompute($request) -> ?PostV1DeclarationsLtSamComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtSamCompute(
    new PostV1DeclarationsLtSamComputeRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtSdGenerate($request) -> ?PostV1DeclarationsLtSdGenerateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtSdGenerate(
    new PostV1DeclarationsLtSdGenerateRequest([
        'type' => PostV1DeclarationsLtSdGenerateRequestType::OneSd->value,
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsLtSaftGenerate($request) -> ?PostV1DeclarationsLtSaftGenerateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsLtSaftGenerate(
    new PostV1DeclarationsLtSaftGenerateRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$persist:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuOssCompute($request) -> ?PostV1DeclarationsEuOssComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuOssCompute(
    new PostV1DeclarationsEuOssComputeRequest([
        'year' => 1000000,
        'quarter' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$quarter:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuIossCompute($request) -> ?PostV1DeclarationsEuIossComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuIossCompute(
    new PostV1DeclarationsEuIossComputeRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuDistanceSalesThresholdGet($request) -> ?PostV1DeclarationsEuDistanceSalesThresholdGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuDistanceSalesThresholdGet(
    new PostV1DeclarationsEuDistanceSalesThresholdGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuUnionTurnoverGet($request) -> ?PostV1DeclarationsEuUnionTurnoverGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuUnionTurnoverGet(
    new PostV1DeclarationsEuUnionTurnoverGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuSmeCrossBorderReportCompute($request) -> ?PostV1DeclarationsEuSmeCrossBorderReportComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuSmeCrossBorderReportCompute(
    new PostV1DeclarationsEuSmeCrossBorderReportComputeRequest([
        'year' => 1000000,
        'quarter' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$quarter:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuSmeThresholdsList($request) -> ?PostV1DeclarationsEuSmeThresholdsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuSmeThresholdsList(
    new PostV1DeclarationsEuSmeThresholdsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuSmeThresholdGet($request) -> ?PostV1DeclarationsEuSmeThresholdGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuSmeThresholdGet(
    new PostV1DeclarationsEuSmeThresholdGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuVatReturnPacksList($request) -> ?PostV1DeclarationsEuVatReturnPacksListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuVatReturnPacksList(
    new PostV1DeclarationsEuVatReturnPacksListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsEuVatReturnCompute($request) -> ?PostV1DeclarationsEuVatReturnComputeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsEuVatReturnCompute(
    new PostV1DeclarationsEuVatReturnComputeRequest([
        'countryCode' => 'countryCode',
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$countryCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsPlJpkV7MGenerate($request) -> ?PostV1DeclarationsPlJpkV7MGenerateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Generate the Polish JPK_V7M(3) file (VAT declaration with evidence) for a month, per the MF schema in force since February 2026. Amounts must already be in PLN; rows are marked BFK until a KSeF integration supplies invoice numbers. Review the warnings before submitting via e-dokumenty.mf.gov.pl.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsPlJpkV7MGenerate(
    new PostV1DeclarationsPlJpkV7MGenerateRequest([
        'year' => 1000000,
        'month' => 1000000,
        'kodUrzedu' => 'kodUrzedu',
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$kodUrzedu:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$celZlozenia:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsConfigsList($request) -> ?PostV1DeclarationsConfigsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsConfigsList(
    new PostV1DeclarationsConfigsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsConfigsUpdate($request) -> ?PostV1DeclarationsConfigsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsConfigsUpdate(
    new PostV1DeclarationsConfigsUpdateRequest([
        'system' => 'system',
        'config' => [
            'key' => 'value',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$system:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$config:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsSubmissionsCreate($request) -> ?PostV1DeclarationsSubmissionsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsSubmissionsCreate(
    new PostV1DeclarationsSubmissionsCreateRequest([
        'obligation' => PostV1DeclarationsSubmissionsCreateRequestObligation::LtIsaf->value,
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$obligation:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$dataType:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsSubmissionsMark($request) -> ?PostV1DeclarationsSubmissionsMarkResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsSubmissionsMark(
    new PostV1DeclarationsSubmissionsMarkRequest([
        'id' => 'id',
        'status' => PostV1DeclarationsSubmissionsMarkRequestStatus::Submitted->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$message:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;declarations-&gt;postV1DeclarationsSubmissionsList($request) -> ?PostV1DeclarationsSubmissionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->declarations->postV1DeclarationsSubmissionsList(
    new PostV1DeclarationsSubmissionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Ledger
<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerAccountsList($request) -> ?PostV1LedgerAccountsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerAccountsList(
    new PostV1LedgerAccountsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerAccountsCreate($request) -> ?PostV1LedgerAccountsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerAccountsCreate(
    new PostV1LedgerAccountsCreateRequest([
        'code' => 'code',
        'name' => 'name',
        'type' => PostV1LedgerAccountsCreateRequestType::Asset->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?PostV1LedgerAccountsCreateRequestTranslations` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPostable:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerAccountsUpdate($request) -> ?PostV1LedgerAccountsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerAccountsUpdate(
    new PostV1LedgerAccountsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?PostV1LedgerAccountsUpdateRequestTranslations` 
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isPostable:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerAccountsApplyTemplate($request) -> ?PostV1LedgerAccountsApplyTemplateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerAccountsApplyTemplate(
    new PostV1LedgerAccountsApplyTemplateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerPeriodsList($request) -> ?PostV1LedgerPeriodsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerPeriodsList(
    new PostV1LedgerPeriodsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerPeriodsLock($request) -> ?PostV1LedgerPeriodsLockResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerPeriodsLock(
    new PostV1LedgerPeriodsLockRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerPeriodsUnlock($request) -> ?PostV1LedgerPeriodsUnlockResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerPeriodsUnlock(
    new PostV1LedgerPeriodsUnlockRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerJournalTransactionsList($request) -> ?PostV1LedgerJournalTransactionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerJournalTransactionsList(
    new PostV1LedgerJournalTransactionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCentersCreate($request) -> ?PostV1LedgerCostCentersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCentersCreate(
    new PostV1LedgerCostCentersCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCentersUpdate($request) -> ?PostV1LedgerCostCentersUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCentersUpdate(
    new PostV1LedgerCostCentersUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCentersList($request) -> ?PostV1LedgerCostCentersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCentersList(
    new PostV1LedgerCostCentersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCenterGroupsCreate($request) -> ?PostV1LedgerCostCenterGroupsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCenterGroupsCreate(
    new PostV1LedgerCostCenterGroupsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCenterGroupsUpdate($request) -> ?PostV1LedgerCostCenterGroupsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCenterGroupsUpdate(
    new PostV1LedgerCostCenterGroupsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCenterGroupsDelete($request) -> ?PostV1LedgerCostCenterGroupsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCenterGroupsDelete(
    new PostV1LedgerCostCenterGroupsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerCostCenterGroupsList($request) -> ?PostV1LedgerCostCenterGroupsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerCostCenterGroupsList(
    new PostV1LedgerCostCenterGroupsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerPostingRulesList($request) -> ?PostV1LedgerPostingRulesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerPostingRulesList(
    new PostV1LedgerPostingRulesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerPostingRulesUpdate($request) -> ?PostV1LedgerPostingRulesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerPostingRulesUpdate(
    new PostV1LedgerPostingRulesUpdateRequest([
        'rules' => [
            new PostV1LedgerPostingRulesUpdateRequestRulesItem([
                'key' => PostV1LedgerPostingRulesUpdateRequestRulesItemKey::SalesReceivable->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$rules:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerOwnersCreate($request) -> ?PostV1LedgerOwnersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerOwnersCreate(
    new PostV1LedgerOwnersCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$equityAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAcquisitionDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1LedgerOwnersCreateRequestAddress` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerOwnersUpdate($request) -> ?PostV1LedgerOwnersUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerOwnersUpdate(
    new PostV1LedgerOwnersUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$equityAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sharesAcquisitionDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1LedgerOwnersUpdateRequestAddress` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerOwnersDelete($request) -> ?PostV1LedgerOwnersDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerOwnersDelete(
    new PostV1LedgerOwnersDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerOwnersList($request) -> ?PostV1LedgerOwnersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerOwnersList(
    new PostV1LedgerOwnersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerJournalTransactionsGet($request) -> ?PostV1LedgerJournalTransactionsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerJournalTransactionsGet(
    new PostV1LedgerJournalTransactionsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ledger-&gt;postV1LedgerJournalTransactionsCreate($request) -> ?PostV1LedgerJournalTransactionsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ledger->postV1LedgerJournalTransactionsCreate(
    new PostV1LedgerJournalTransactionsCreateRequest([
        'date' => 'date',
        'entries' => [
            new PostV1LedgerJournalTransactionsCreateRequestEntriesItem([
                'accountCode' => 'accountCode',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$entries:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Migration
<details><summary><code>$client-&gt;migration-&gt;checkAHistoricalBooksPackageWithoutWritingAnything($request) -> ?PostV1MigrationBooksValidateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Runs every check the import runs (accounts, partners, balances, open invoices, assets, stock) and returns the same summary and warnings, then rolls everything back. Nothing is stored.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->migration->checkAHistoricalBooksPackageWithoutWritingAnything(
    new PostV1MigrationBooksValidateRequest([
        'cutoverDate' => 'cutoverDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cutoverDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accounts:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$partners:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openingBalances:** `?PostV1MigrationBooksValidateRequestOpeningBalances` 
    
</dd>
</dl>

<dl>
<dd>

**$journal:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openReceivables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openPayables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$assetGroups:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssets:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$stock:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;migration-&gt;importHistoricalBooksFromAPreviousAccountingSystem($request) -> ?PostV1MigrationBooksImportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Brings a company over from another system in one call: chart of accounts, partners, items, opening balances (or the full journal history), open customer and supplier invoices, fixed assets with their accumulated depreciation, and stock on hand. The whole package is written in one database transaction — if any row fails, nothing is stored.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->migration->importHistoricalBooksFromAPreviousAccountingSystem(
    new PostV1MigrationBooksImportRequest([
        'cutoverDate' => 'cutoverDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cutoverDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accounts:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$partners:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openingBalances:** `?PostV1MigrationBooksImportRequestOpeningBalances` 
    
</dd>
</dl>

<dl>
<dd>

**$journal:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openReceivables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$openPayables:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$assetGroups:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssets:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$stock:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Assets
<details><summary><code>$client-&gt;assets-&gt;postV1AssetsGroupsCreate($request) -> ?PostV1AssetsGroupsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsGroupsCreate(
    new PostV1AssetsGroupsCreateRequest([
        'code' => 'code',
        'name' => 'name',
        'assetAccountCode' => 'assetAccountCode',
        'depreciationAccountCode' => 'depreciationAccountCode',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultUsefulLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$assetAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$depreciationAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsGroupsList($request) -> ?PostV1AssetsGroupsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsGroupsList(
    new PostV1AssetsGroupsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsAssetsCreate($request) -> ?PostV1AssetsAssetsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsAssetsCreate(
    new PostV1AssetsAssetsCreateRequest([
        'groupId' => 'groupId',
        'code' => 'code',
        'name' => 'name',
        'acquisitionDate' => 'acquisitionDate',
        'acquisitionCost' => 'acquisitionCost',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$depreciationStartDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionCost:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$salvageValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$usefulLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsAssetsGet($request) -> ?PostV1AssetsAssetsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsAssetsGet(
    new PostV1AssetsAssetsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsAssetsList($request) -> ?PostV1AssetsAssetsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsAssetsList(
    new PostV1AssetsAssetsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsAssetsModernize($request) -> ?PostV1AssetsAssetsModernizeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsAssetsModernize(
    new PostV1AssetsAssetsModernizeRequest([
        'id' => 'id',
        'date' => 'date',
        'amount' => 'amount',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$addedLifeMonths:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsDepreciationPreview($request) -> ?PostV1AssetsDepreciationPreviewResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsDepreciationPreview(
    new PostV1AssetsDepreciationPreviewRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;assets-&gt;postV1AssetsDepreciationPost($request) -> ?PostV1AssetsDepreciationPostResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->assets->postV1AssetsDepreciationPost(
    new PostV1AssetsDepreciationPostRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Hr
<details><summary><code>$client-&gt;hr-&gt;postV1HrPositionsCreate($request) -> ?PostV1HrPositionsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrPositionsCreate(
    new PostV1HrPositionsCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrPositionsUpdate($request) -> ?PostV1HrPositionsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrPositionsUpdate(
    new PostV1HrPositionsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$translations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrPositionsList($request) -> ?PostV1HrPositionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrPositionsList(
    new PostV1HrPositionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesCreate($request) -> ?PostV1HrEmployeesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesCreate(
    new PostV1HrEmployeesCreateRequest([
        'firstName' => 'firstName',
        'lastName' => 'lastName',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1HrEmployeesCreateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceStart:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hireDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$applyNpd:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$npdOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesUpdate($request) -> ?PostV1HrEmployeesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesUpdate(
    new PostV1HrEmployeesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$firstName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$personalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$birthDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1HrEmployeesUpdateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$socialInsuranceStart:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hireDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$applyNpd:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$npdOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$terminationDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesGet($request) -> ?PostV1HrEmployeesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesGet(
    new PostV1HrEmployeesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesList($request) -> ?PostV1HrEmployeesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesList(
    new PostV1HrEmployeesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesDelete($request) -> ?PostV1HrEmployeesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesDelete(
    new PostV1HrEmployeesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;blankAnEmployeesPersonalDataAndHideTheRecord($request) -> ?PostV1HrEmployeesAnonymizeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replaces the name with a placeholder and removes personal code, birth date, contact details, address, bank account, social-insurance number, notes and sick-leave reasons. Payroll and contract rows stay linked to the record for the statutory retention period.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->blankAnEmployeesPersonalDataAndHideTheRecord(
    new PostV1HrEmployeesAnonymizeRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrContractsCreate($request) -> ?PostV1HrContractsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrContractsCreate(
    new PostV1HrContractsCreateRequest([
        'employeeId' => 'employeeId',
        'startDate' => 'startDate',
        'baseSalary' => 'baseSalary',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$positionId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$departmentId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduleId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$agreementId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$contractNo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$baseSalary:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$salaryType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$workHours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrContractsEnd($request) -> ?PostV1HrContractsEndResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrContractsEnd(
    new PostV1HrContractsEndRequest([
        'id' => 'id',
        'endDate' => 'endDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endReason:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrContractsList($request) -> ?PostV1HrContractsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrContractsList(
    new PostV1HrContractsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrLeaveBalancesSet($request) -> ?PostV1HrLeaveBalancesSetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrLeaveBalancesSet(
    new PostV1HrLeaveBalancesSetRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'entitledDays' => 'entitledDays',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$entitledDays:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$usedDays:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrLeaveBalancesList($request) -> ?PostV1HrLeaveBalancesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrLeaveBalancesList(
    new PostV1HrLeaveBalancesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrIncapacityCertificatesCreate($request) -> ?PostV1HrIncapacityCertificatesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrIncapacityCertificatesCreate(
    new PostV1HrIncapacityCertificatesCreateRequest([
        'employeeId' => 'employeeId',
        'number' => 'number',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$number:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrIncapacityCertificatesList($request) -> ?PostV1HrIncapacityCertificatesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrIncapacityCertificatesList(
    new PostV1HrIncapacityCertificatesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesRecordsCreate($request) -> ?PostV1HrEmployeesRecordsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesRecordsCreate(
    new PostV1HrEmployeesRecordsCreateRequest([
        'employeeId' => 'employeeId',
        'type' => PostV1HrEmployeesRecordsCreateRequestType::Education->value,
        'title' => 'title',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$institution:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedAt:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validUntil:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fileId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesRecordsUpdate($request) -> ?PostV1HrEmployeesRecordsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesRecordsUpdate(
    new PostV1HrEmployeesRecordsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$institution:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issuedAt:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validUntil:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fileId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesRecordsDelete($request) -> ?PostV1HrEmployeesRecordsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesRecordsDelete(
    new PostV1HrEmployeesRecordsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesRecordsList($request) -> ?PostV1HrEmployeesRecordsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesRecordsList(
    new PostV1HrEmployeesRecordsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrEmployeesAttachmentsList($request) -> ?PostV1HrEmployeesAttachmentsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrEmployeesAttachmentsList(
    new PostV1HrEmployeesAttachmentsListRequest([
        'employeeId' => 'employeeId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrTimesheetsGenerate($request) -> ?PostV1HrTimesheetsGenerateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrTimesheetsGenerate(
    new PostV1HrTimesheetsGenerateRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrTimesheetsUpsert($request) -> ?PostV1HrTimesheetsUpsertResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrTimesheetsUpsert(
    new PostV1HrTimesheetsUpsertRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'month' => 1000000,
        'days' => [
            new PostV1HrTimesheetsUpsertRequestDaysItem([
                'day' => 1000000,
                'hours' => 'hours',
                'type' => PostV1HrTimesheetsUpsertRequestDaysItemType::Work->value,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$days:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrTimesheetsGet($request) -> ?PostV1HrTimesheetsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrTimesheetsGet(
    new PostV1HrTimesheetsGetRequest([
        'employeeId' => 'employeeId',
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrTimesheetsList($request) -> ?PostV1HrTimesheetsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrTimesheetsList(
    new PostV1HrTimesheetsListRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;hr-&gt;postV1HrTimesheetsDelete($request) -> ?PostV1HrTimesheetsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->hr->postV1HrTimesheetsDelete(
    new PostV1HrTimesheetsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Fleet
<details><summary><code>$client-&gt;fleet-&gt;postV1FleetVehiclesCreate($request) -> ?PostV1FleetVehiclesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetVehiclesCreate(
    new PostV1FleetVehiclesCreateRequest([
        'plateNumber' => 'plateNumber',
        'make' => 'make',
        'model' => 'model',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$plateNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$make:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$vin:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fuelType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$marketValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssetId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$technicalInspectionDue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$insuranceDue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documents:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetVehiclesUpdate($request) -> ?PostV1FleetVehiclesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetVehiclesUpdate(
    new PostV1FleetVehiclesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$plateNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$make:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$year:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$vin:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fuelType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acquisitionDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$marketValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedAssetId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$technicalInspectionDue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$insuranceDue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetVehiclesGet($request) -> ?PostV1FleetVehiclesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetVehiclesGet(
    new PostV1FleetVehiclesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetVehiclesList($request) -> ?PostV1FleetVehiclesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetVehiclesList(
    new PostV1FleetVehiclesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetAssignmentsCreate($request) -> ?PostV1FleetAssignmentsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetAssignmentsCreate(
    new PostV1FleetAssignmentsCreateRequest([
        'vehicleId' => 'vehicleId',
        'employeeId' => 'employeeId',
        'fromDate' => 'fromDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$vehicleId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$privateUse:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$employerPaysFuel:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetAssignmentsEnd($request) -> ?PostV1FleetAssignmentsEndResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetAssignmentsEnd(
    new PostV1FleetAssignmentsEndRequest([
        'id' => 'id',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetAssignmentsList($request) -> ?PostV1FleetAssignmentsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetAssignmentsList(
    new PostV1FleetAssignmentsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;fleet-&gt;postV1FleetNaturaPreview($request) -> ?PostV1FleetNaturaPreviewResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->fleet->postV1FleetNaturaPreview(
    new PostV1FleetNaturaPreviewRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Payroll
<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollDepartmentsCreate($request) -> ?PostV1PayrollDepartmentsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollDepartmentsCreate(
    new PostV1PayrollDepartmentsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollDepartmentsList($request) -> ?PostV1PayrollDepartmentsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollDepartmentsList(
    new PostV1PayrollDepartmentsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollSchedulesCreate($request) -> ?PostV1PayrollSchedulesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollSchedulesCreate(
    new PostV1PayrollSchedulesCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$hoursPerWeek:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollSchedulesList($request) -> ?PostV1PayrollSchedulesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollSchedulesList(
    new PostV1PayrollSchedulesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollCalc($request) -> ?PostV1PayrollCalcResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollCalc(
    new PostV1PayrollCalcRequest([
        'taxableBase' => 'taxableBase',
        'date' => 'date',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$taxableBase:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$applyNpd:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$npdOverride:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pensionAccumulation:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$fixedTerm:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollRunsCreate($request) -> ?PostV1PayrollRunsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollRunsCreate(
    new PostV1PayrollRunsCreateRequest([
        'year' => 1000000,
        'month' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$month:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$includeNatura:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollRunsGet($request) -> ?PostV1PayrollRunsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollRunsGet(
    new PostV1PayrollRunsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollRunsList($request) -> ?PostV1PayrollRunsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollRunsList(
    new PostV1PayrollRunsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollRunsApprove($request) -> ?PostV1PayrollRunsApproveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollRunsApprove(
    new PostV1PayrollRunsApproveRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$wageAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employerAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payableAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$gpmAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sodraAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$deductionAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollRunsCancel($request) -> ?PostV1PayrollRunsCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollRunsCancel(
    new PostV1PayrollRunsCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payroll-&gt;postV1PayrollPaymentsExport($request) -> ?PostV1PayrollPaymentsExportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payroll->postV1PayrollPaymentsExport(
    new PostV1PayrollPaymentsExportRequest([
        'runId' => 'runId',
        'bankAccountId' => 'bankAccountId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$runId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$executionDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Agreements
<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsTypesCreate($request) -> ?PostV1AgreementsTypesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsTypesCreate(
    new PostV1AgreementsTypesCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsTypesList($request) -> ?PostV1AgreementsTypesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsTypesList(
    new PostV1AgreementsTypesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsCreate($request) -> ?PostV1AgreementsAgreementsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsCreate(
    new PostV1AgreementsAgreementsCreateRequest([
        'number' => 'number',
        'startDate' => 'startDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$typeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$number:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoRenew:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billingPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$items:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsGet($request) -> ?PostV1AgreementsAgreementsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsGet(
    new PostV1AgreementsAgreementsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsUpdate($request) -> ?PostV1AgreementsAgreementsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsUpdate(
    new PostV1AgreementsAgreementsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$typeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$kind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$autoRenew:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billingPeriod:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsDelete($request) -> ?PostV1AgreementsAgreementsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsDelete(
    new PostV1AgreementsAgreementsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsList($request) -> ?PostV1AgreementsAgreementsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsList(
    new PostV1AgreementsAgreementsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsGenerateInvoice($request) -> ?PostV1AgreementsAgreementsGenerateInvoiceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsGenerateInvoice(
    new PostV1AgreementsAgreementsGenerateInvoiceRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOfDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsAgreementsBillingRun($request) -> ?PostV1AgreementsAgreementsBillingRunResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsAgreementsBillingRun(
    new PostV1AgreementsAgreementsBillingRunRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOfDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsInsurancePoliciesCreate($request) -> ?PostV1AgreementsInsurancePoliciesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsInsurancePoliciesCreate(
    new PostV1AgreementsInsurancePoliciesCreateRequest([
        'policyNumber' => 'policyNumber',
        'insuredObject' => 'insuredObject',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$insurerPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$policyNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$insuredObject:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$premium:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsInsurancePoliciesList($request) -> ?PostV1AgreementsInsurancePoliciesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsInsurancePoliciesList(
    new PostV1AgreementsInsurancePoliciesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;agreements-&gt;postV1AgreementsInsurancePoliciesDelete($request) -> ?PostV1AgreementsInsurancePoliciesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->agreements->postV1AgreementsInsurancePoliciesDelete(
    new PostV1AgreementsInsurancePoliciesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Inventory
<details><summary><code>$client-&gt;inventory-&gt;postV1InventorySettingsGet($request) -> ?PostV1InventorySettingsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventorySettingsGet(
    new PostV1InventorySettingsGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventorySettingsUpdate($request) -> ?PostV1InventorySettingsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventorySettingsUpdate(
    new PostV1InventorySettingsUpdateRequest([
        'negativeStockPolicy' => PostV1InventorySettingsUpdateRequestNegativeStockPolicy::Reject->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$negativeStockPolicy:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryWarehousesCreate($request) -> ?PostV1InventoryWarehousesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryWarehousesCreate(
    new PostV1InventoryWarehousesCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isDefault:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryWarehousesList($request) -> ?PostV1InventoryWarehousesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryWarehousesList(
    new PostV1InventoryWarehousesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockReceive($request) -> ?PostV1InventoryStockReceiveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockReceive(
    new PostV1InventoryStockReceiveRequest([
        'warehouseId' => 'warehouseId',
        'itemId' => 'itemId',
        'date' => 'date',
        'quantity' => 'quantity',
        'unitCost' => 'unitCost',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$unitCost:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiryDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockWriteOff($request) -> ?PostV1InventoryStockWriteOffResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockWriteOff(
    new PostV1InventoryStockWriteOffRequest([
        'warehouseId' => 'warehouseId',
        'itemId' => 'itemId',
        'date' => 'date',
        'quantity' => 'quantity',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockTransfer($request) -> ?PostV1InventoryStockTransferResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockTransfer(
    new PostV1InventoryStockTransferRequest([
        'fromWarehouseId' => 'fromWarehouseId',
        'toWarehouseId' => 'toWarehouseId',
        'itemId' => 'itemId',
        'date' => 'date',
        'quantity' => 'quantity',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromWarehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toWarehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$lotNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockTake($request) -> ?PostV1InventoryStockTakeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockTake(
    new PostV1InventoryStockTakeRequest([
        'warehouseId' => 'warehouseId',
        'date' => 'date',
        'lines' => [
            new PostV1InventoryStockTakeRequestLinesItem([
                'countedQty' => 'countedQty',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expenseAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockLevels($request) -> ?PostV1InventoryStockLevelsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockLevels(
    new PostV1InventoryStockLevelsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryStockMovementsList($request) -> ?PostV1InventoryStockMovementsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryStockMovementsList(
    new PostV1InventoryStockMovementsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLotsList($request) -> ?PostV1InventoryLotsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLotsList(
    new PostV1InventoryLotsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLotsGet($request) -> ?PostV1InventoryLotsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLotsGet(
    new PostV1InventoryLotsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLotsUpdate($request) -> ?PostV1InventoryLotsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLotsUpdate(
    new PostV1InventoryLotsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiryDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLandedCostsCreate($request) -> ?PostV1InventoryLandedCostsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLandedCostsCreate(
    new PostV1InventoryLandedCostsCreateRequest([
        'date' => 'date',
        'amount' => 'amount',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$method:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$goodsReceiptId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$movementIds:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$sourceInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLandedCostsGet($request) -> ?PostV1InventoryLandedCostsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLandedCostsGet(
    new PostV1InventoryLandedCostsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryLandedCostsList($request) -> ?PostV1InventoryLandedCostsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryLandedCostsList(
    new PostV1InventoryLandedCostsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryReorderRulesCreate($request) -> ?PostV1InventoryReorderRulesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryReorderRulesCreate(
    new PostV1InventoryReorderRulesCreateRequest([
        'itemId' => 'itemId',
        'minQty' => 'minQty',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$itemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQty:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reorderQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryReorderRulesUpdate($request) -> ?PostV1InventoryReorderRulesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryReorderRulesUpdate(
    new PostV1InventoryReorderRulesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$minQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$reorderQty:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryReorderRulesDelete($request) -> ?PostV1InventoryReorderRulesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryReorderRulesDelete(
    new PostV1InventoryReorderRulesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryReorderRulesList($request) -> ?PostV1InventoryReorderRulesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryReorderRulesList(
    new PostV1InventoryReorderRulesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inventory-&gt;postV1InventoryReorderRulesCheck($request) -> ?PostV1InventoryReorderRulesCheckResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inventory->postV1InventoryReorderRulesCheck(
    new PostV1InventoryReorderRulesCheckRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Production
<details><summary><code>$client-&gt;production-&gt;postV1ProductionWorkCentersCreate($request) -> ?PostV1ProductionWorkCentersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionWorkCentersCreate(
    new PostV1ProductionWorkCentersCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPerHour:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maintenanceIntervalDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionWorkCentersUpdate($request) -> ?PostV1ProductionWorkCentersUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionWorkCentersUpdate(
    new PostV1ProductionWorkCentersUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costPerHour:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$costAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$maintenanceIntervalDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionWorkCentersList($request) -> ?PostV1ProductionWorkCentersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionWorkCentersList(
    new PostV1ProductionWorkCentersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionRoutingsCreate($request) -> ?PostV1ProductionRoutingsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionRoutingsCreate(
    new PostV1ProductionRoutingsCreateRequest([
        'code' => 'code',
        'name' => 'name',
        'operations' => [
            new PostV1ProductionRoutingsCreateRequestOperationsItem([
                'sequence' => 1000000,
                'name' => 'name',
                'workCenterId' => 'workCenterId',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$operations:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionRoutingsGet($request) -> ?PostV1ProductionRoutingsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionRoutingsGet(
    new PostV1ProductionRoutingsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionRoutingsList($request) -> ?PostV1ProductionRoutingsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionRoutingsList(
    new PostV1ProductionRoutingsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionMaintenanceCreate($request) -> ?PostV1ProductionMaintenanceCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionMaintenanceCreate(
    new PostV1ProductionMaintenanceCreateRequest([
        'workCenterId' => 'workCenterId',
        'type' => PostV1ProductionMaintenanceCreateRequestType::Preventive->value,
        'plannedDate' => 'plannedDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$workCenterId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$plannedDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionMaintenanceComplete($request) -> ?PostV1ProductionMaintenanceCompleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionMaintenanceComplete(
    new PostV1ProductionMaintenanceCompleteRequest([
        'id' => 'id',
        'completedDate' => 'completedDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$completedDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$downtimeHours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cost:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionMaintenanceCancel($request) -> ?PostV1ProductionMaintenanceCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionMaintenanceCancel(
    new PostV1ProductionMaintenanceCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionMaintenanceList($request) -> ?PostV1ProductionMaintenanceListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionMaintenanceList(
    new PostV1ProductionMaintenanceListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionBomsCreate($request) -> ?PostV1ProductionBomsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionBomsCreate(
    new PostV1ProductionBomsCreateRequest([
        'code' => 'code',
        'name' => 'name',
        'finishedItemId' => 'finishedItemId',
        'lines' => [
            new PostV1ProductionBomsCreateRequestLinesItem([
                'componentItemId' => 'componentItemId',
                'quantity' => 'quantity',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$finishedItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$outputQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$routingId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionBomsGet($request) -> ?PostV1ProductionBomsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionBomsGet(
    new PostV1ProductionBomsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionBomsList($request) -> ?PostV1ProductionBomsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionBomsList(
    new PostV1ProductionBomsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionOrdersCreate($request) -> ?PostV1ProductionOrdersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionOrdersCreate(
    new PostV1ProductionOrdersCreateRequest([
        'bomId' => 'bomId',
        'warehouseId' => 'warehouseId',
        'quantity' => 'quantity',
        'date' => 'date',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bomId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$routingId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$quantity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionOrdersRecordOperation($request) -> ?PostV1ProductionOrdersRecordOperationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionOrdersRecordOperation(
    new PostV1ProductionOrdersRecordOperationRequest([
        'id' => 'id',
        'actualMinutes' => 'actualMinutes',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$actualMinutes:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionQualityChecksAdd($request) -> ?PostV1ProductionQualityChecksAddResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionQualityChecksAdd(
    new PostV1ProductionQualityChecksAddRequest([
        'orderId' => 'orderId',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionQualityChecksRecord($request) -> ?PostV1ProductionQualityChecksRecordResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionQualityChecksRecord(
    new PostV1ProductionQualityChecksRecordRequest([
        'id' => 'id',
        'result' => PostV1ProductionQualityChecksRecordRequestResult::Passed->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$result:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionQualityChecksList($request) -> ?PostV1ProductionQualityChecksListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionQualityChecksList(
    new PostV1ProductionQualityChecksListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionOrdersComplete($request) -> ?PostV1ProductionOrdersCompleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionOrdersComplete(
    new PostV1ProductionOrdersCompleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scrappedQuantity:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$componentsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$finishedAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionOrdersGet($request) -> ?PostV1ProductionOrdersGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionOrdersGet(
    new PostV1ProductionOrdersGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;production-&gt;postV1ProductionOrdersList($request) -> ?PostV1ProductionOrdersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->production->postV1ProductionOrdersList(
    new PostV1ProductionOrdersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Ecommerce
<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersCreate($request) -> ?PostV1EcommerceOrdersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersCreate(
    new PostV1EcommerceOrdersCreateRequest([
        'lines' => [
            new PostV1EcommerceOrdersCreateRequestLinesItem([
                'description' => 'description',
                'quantity' => 'quantity',
                'unitPriceExclVat' => 'unitPriceExclVat',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$channel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalRef:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partner:** `?PostV1EcommerceOrdersCreateRequestPartner` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shipToCountryCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$marketplace:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersGet($request) -> ?PostV1EcommerceOrdersGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersGet(
    new PostV1EcommerceOrdersGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersList($request) -> ?PostV1EcommerceOrdersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersList(
    new PostV1EcommerceOrdersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersReserve($request) -> ?PostV1EcommerceOrdersReserveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersReserve(
    new PostV1EcommerceOrdersReserveRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersFulfill($request) -> ?PostV1EcommerceOrdersFulfillResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersFulfill(
    new PostV1EcommerceOrdersFulfillRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cogsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceOrdersCancel($request) -> ?PostV1EcommerceOrdersCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceOrdersCancel(
    new PostV1EcommerceOrdersCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceProductsList($request) -> ?PostV1EcommerceProductsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceProductsList(
    new PostV1EcommerceProductsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$priceListId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$updatedSince:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;postV1EcommerceStockList($request) -> ?PostV1EcommerceStockListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->postV1EcommerceStockList(
    new PostV1EcommerceStockListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Cash
<details><summary><code>$client-&gt;cash-&gt;postV1CashOrdersCreate($request) -> ?PostV1CashOrdersCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->postV1CashOrdersCreate(
    new PostV1CashOrdersCreateRequest([
        'type' => PostV1CashOrdersCreateRequestType::Receipt->value,
        'date' => 'date',
        'amount' => 'amount',
        'purpose' => 'purpose',
        'counterAccountCode' => 'counterAccountCode',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$purpose:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$counterAccountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;postV1CashOrdersGet($request) -> ?PostV1CashOrdersGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->postV1CashOrdersGet(
    new PostV1CashOrdersGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;postV1CashOrdersList($request) -> ?PostV1CashOrdersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->postV1CashOrdersList(
    new PostV1CashOrdersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;postV1CashBalance($request) -> ?PostV1CashBalanceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->postV1CashBalance(
    new PostV1CashBalanceRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOf:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;cash-&gt;postV1CashAdvanceHoldersBalances($request) -> ?PostV1CashAdvanceHoldersBalancesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->cash->postV1CashAdvanceHoldersBalances(
    new PostV1CashAdvanceHoldersBalancesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Projects
<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsCreate($request) -> ?PostV1ProjectsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsCreate(
    new PostV1ProjectsCreateRequest([
        'code' => 'code',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsUpdate($request) -> ?PostV1ProjectsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsUpdate(
    new PostV1ProjectsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsGet($request) -> ?PostV1ProjectsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsGet(
    new PostV1ProjectsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsList($request) -> ?PostV1ProjectsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsList(
    new PostV1ProjectsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsTimeEntriesCreate($request) -> ?PostV1ProjectsTimeEntriesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsTimeEntriesCreate(
    new PostV1ProjectsTimeEntriesCreateRequest([
        'projectId' => 'projectId',
        'date' => 'date',
        'hours' => 'hours',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$employeeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$hours:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsTimeEntriesUpdate($request) -> ?PostV1ProjectsTimeEntriesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsTimeEntriesUpdate(
    new PostV1ProjectsTimeEntriesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hours:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$billable:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsTimeEntriesDelete($request) -> ?PostV1ProjectsTimeEntriesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsTimeEntriesDelete(
    new PostV1ProjectsTimeEntriesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsTimeEntriesList($request) -> ?PostV1ProjectsTimeEntriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsTimeEntriesList(
    new PostV1ProjectsTimeEntriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsTimeEntriesBill($request) -> ?PostV1ProjectsTimeEntriesBillResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsTimeEntriesBill(
    new PostV1ProjectsTimeEntriesBillRequest([
        'projectId' => 'projectId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hourlyRate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatClassifierCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$issueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$groupBy:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;projects-&gt;postV1ProjectsReport($request) -> ?PostV1ProjectsReportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->projects->postV1ProjectsReport(
    new PostV1ProjectsReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$projectId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Transport
<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsCreate($request) -> ?PostV1TransportWaybillsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsCreate(
    new PostV1TransportWaybillsCreateRequest([
        'consigneePartnerId' => 'consigneePartnerId',
        'dispatchAt' => new DateTime('2024-01-15T09:30:00Z'),
        'loadAddress' => 'loadAddress',
        'unloadAddress' => 'unloadAddress',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$consigneePartnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transporterPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dispatchAt:** `DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedArrivalAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$vehiclePlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$trailerPlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverSurname:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadWarehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadAddress:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$unloadAddress:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$valueEur:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsUpdate($request) -> ?PostV1TransportWaybillsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsUpdate(
    new PostV1TransportWaybillsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$consigneePartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$transporterPartnerId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dispatchAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$estimatedArrivalAt:** `?DateTime` 
    
</dd>
</dl>

<dl>
<dd>

**$vehiclePlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$trailerPlate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$driverSurname:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadWarehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$loadAddress:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$unloadAddress:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$valueEur:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$series:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsIssue($request) -> ?PostV1TransportWaybillsIssueResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsIssue(
    new PostV1TransportWaybillsIssueRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsCancel($request) -> ?PostV1TransportWaybillsCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsCancel(
    new PostV1TransportWaybillsCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsGet($request) -> ?PostV1TransportWaybillsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsGet(
    new PostV1TransportWaybillsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transport-&gt;postV1TransportWaybillsList($request) -> ?PostV1TransportWaybillsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transport->postV1TransportWaybillsList(
    new PostV1TransportWaybillsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Pos
<details><summary><code>$client-&gt;pos-&gt;postV1PosDevicesCreate($request) -> ?PostV1PosDevicesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosDevicesCreate(
    new PostV1PosDevicesCreateRequest([
        'name' => 'name',
        'serialNumber' => 'serialNumber',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$serialNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;postV1PosDevicesUpdate($request) -> ?PostV1PosDevicesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosDevicesUpdate(
    new PostV1PosDevicesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$serialNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$model:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$registrationNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;postV1PosDevicesList($request) -> ?PostV1PosDevicesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosDevicesList(
    new PostV1PosDevicesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;postV1PosReportsCreate($request) -> ?PostV1PosReportsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosReportsCreate(
    new PostV1PosReportsCreateRequest([
        'reportNumber' => 'reportNumber',
        'date' => 'date',
        'vatLines' => [
            new PostV1PosReportsCreateRequestVatLinesItem([
                'vatRatePercent' => 'vatRatePercent',
                'netAmount' => 'netAmount',
                'vatAmount' => 'vatAmount',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reportNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$deviceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatLines:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cardAmount:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemLines:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$cashAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cardAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$revenueAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$cogsAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$inventoryAccountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;postV1PosReportsGet($request) -> ?PostV1PosReportsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosReportsGet(
    new PostV1PosReportsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;pos-&gt;postV1PosReportsList($request) -> ?PostV1PosReportsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->pos->postV1PosReportsList(
    new PostV1PosReportsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Calendar
<details><summary><code>$client-&gt;calendar-&gt;postV1CalendarList($request) -> ?PostV1CalendarListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->postV1CalendarList(
    new PostV1CalendarListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$from:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$includeDone:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;postV1CalendarGet($request) -> ?PostV1CalendarGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->postV1CalendarGet(
    new PostV1CalendarGetRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;postV1CalendarCreate($request) -> ?PostV1CalendarCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->postV1CalendarCreate(
    new PostV1CalendarCreateRequest([
        'title' => 'title',
        'dueDate' => 'dueDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$title:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;postV1CalendarUpdate($request) -> ?PostV1CalendarUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->postV1CalendarUpdate(
    new PostV1CalendarUpdateRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$title:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dueDate:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;calendar-&gt;postV1CalendarDelete($request) -> ?PostV1CalendarDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->calendar->postV1CalendarDelete(
    new PostV1CalendarDeleteRequest([
        'key' => 'key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$key:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Audit
<details><summary><code>$client-&gt;audit-&gt;postV1AuditList($request) -> ?PostV1AuditListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->audit->postV1AuditList(
    new PostV1AuditListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Webhooks
<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksSubscriptionsCreate($request) -> ?PostV1WebhooksSubscriptionsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksSubscriptionsCreate(
    new PostV1WebhooksSubscriptionsCreateRequest([
        'url' => 'url',
        'events' => [
            'events',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$url:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$events:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$secret:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksSubscriptionsList($request) -> ?PostV1WebhooksSubscriptionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksSubscriptionsList(
    new PostV1WebhooksSubscriptionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksSubscriptionsUpdate($request) -> ?PostV1WebhooksSubscriptionsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksSubscriptionsUpdate(
    new PostV1WebhooksSubscriptionsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$events:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksSubscriptionsDelete($request) -> ?PostV1WebhooksSubscriptionsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksSubscriptionsDelete(
    new PostV1WebhooksSubscriptionsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksDeliveriesList($request) -> ?PostV1WebhooksDeliveriesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksDeliveriesList(
    new PostV1WebhooksDeliveriesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;postV1WebhooksDeliveriesRedeliver($request) -> ?PostV1WebhooksDeliveriesRedeliverResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->postV1WebhooksDeliveriesRedeliver(
    new PostV1WebhooksDeliveriesRedeliverRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Bank
<details><summary><code>$client-&gt;bank-&gt;postV1BankAccountsCreate($request) -> ?PostV1BankAccountsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankAccountsCreate(
    new PostV1BankAccountsCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$currency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentRef:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankAccountsList($request) -> ?PostV1BankAccountsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankAccountsList(
    new PostV1BankAccountsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankAccountsUpdate($request) -> ?PostV1BankAccountsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankAccountsUpdate(
    new PostV1BankAccountsUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$accountCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankTransactionsImport($request) -> ?PostV1BankTransactionsImportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankTransactionsImport(
    new PostV1BankTransactionsImportRequest([
        'bankAccountId' => 'bankAccountId',
        'transactions' => [
            new PostV1BankTransactionsImportRequestTransactionsItem([
                'date' => 'date',
                'amount' => 'amount',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transactions:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankStatementsImport($request) -> ?PostV1BankStatementsImportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankStatementsImport(
    new PostV1BankStatementsImportRequest([
        'bankAccountId' => 'bankAccountId',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$format:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$transfersCsv:** `?string` — Stripe transfers export (plain CSV or base64) used to post lender payouts and commissions
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankTransactionsList($request) -> ?PostV1BankTransactionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankTransactionsList(
    new PostV1BankTransactionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankTransactionsMatch($request) -> ?PostV1BankTransactionsMatchResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankTransactionsMatch(
    new PostV1BankTransactionsMatchRequest([
        'transactionId' => 'transactionId',
        'documentType' => PostV1BankTransactionsMatchRequestDocumentType::SaleInvoice->value,
        'documentId' => 'documentId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$transactionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankTransactionsRecord($request) -> ?PostV1BankTransactionsRecordResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankTransactionsRecord(
    new PostV1BankTransactionsRecordRequest([
        'bankAccountId' => 'bankAccountId',
        'date' => 'date',
        'amount' => 'amount',
        'documentType' => PostV1BankTransactionsRecordRequestDocumentType::SaleInvoice->value,
        'documentId' => 'documentId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankPaymentsExport($request) -> ?PostV1BankPaymentsExportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankPaymentsExport(
    new PostV1BankPaymentsExportRequest([
        'bankAccountId' => 'bankAccountId',
        'purchaseInvoiceIds' => [
            'purchaseInvoiceIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$purchaseInvoiceIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$executionDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;createABankImportTemplateFieldsDefaultToTheTypesStandardFieldList($request) -> ?PostV1BankImportTemplatesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->createABankImportTemplateFieldsDefaultToTheTypesStandardFieldList(
    new PostV1BankImportTemplatesCreateRequest([
        'name' => 'name',
        'type' => PostV1BankImportTemplatesCreateRequestType::Stripe->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$metaFields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceVatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$companyMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceInvoices:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lenderMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partialRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fullRefundLabel:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankImportTemplatesUpdate($request) -> ?PostV1BankImportTemplatesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankImportTemplatesUpdate(
    new PostV1BankImportTemplatesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$metaFields:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceVatRatePercent:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$companyMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$advanceInvoices:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$authorizationOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionOperationTypeId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lenderMetaField:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$partialRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fullRefundLabel:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankImportTemplatesDelete($request) -> ?PostV1BankImportTemplatesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankImportTemplatesDelete(
    new PostV1BankImportTemplatesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankImportTemplatesGet($request) -> ?PostV1BankImportTemplatesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankImportTemplatesGet(
    new PostV1BankImportTemplatesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankImportTemplatesList($request) -> ?PostV1BankImportTemplatesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankImportTemplatesList(
    new PostV1BankImportTemplatesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMatchRulesCreate($request) -> ?PostV1BankMatchRulesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMatchRulesCreate(
    new PostV1BankMatchRulesCreateRequest([
        'name' => 'name',
        'pattern' => 'pattern',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pattern:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutIdPrefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateWindowDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMatchRulesUpdate($request) -> ?PostV1BankMatchRulesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMatchRulesUpdate(
    new PostV1BankMatchRulesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pattern:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payoutIdPrefix:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateWindowDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMatchRulesDelete($request) -> ?PostV1BankMatchRulesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMatchRulesDelete(
    new PostV1BankMatchRulesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMatchRulesList($request) -> ?PostV1BankMatchRulesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMatchRulesList(
    new PostV1BankMatchRulesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMandatesCreate($request) -> ?PostV1BankMandatesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMandatesCreate(
    new PostV1BankMandatesCreateRequest([
        'partnerId' => 'partnerId',
        'iban' => 'iban',
        'signatureDate' => 'signatureDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$scheme:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sequenceType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$signatureDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reference:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debtorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMandatesUpdate($request) -> ?PostV1BankMandatesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMandatesUpdate(
    new PostV1BankMandatesUpdateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bic:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$debtorName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMandatesCancel($request) -> ?PostV1BankMandatesCancelResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMandatesCancel(
    new PostV1BankMandatesCancelRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMandatesGet($request) -> ?PostV1BankMandatesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMandatesGet(
    new PostV1BankMandatesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankMandatesList($request) -> ?PostV1BankMandatesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankMandatesList(
    new PostV1BankMandatesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankDirectDebitsExport($request) -> ?PostV1BankDirectDebitsExportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankDirectDebitsExport(
    new PostV1BankDirectDebitsExportRequest([
        'bankAccountId' => 'bankAccountId',
        'saleInvoiceIds' => [
            'saleInvoiceIds',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$saleInvoiceIds:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$collectionDate:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankTransactionsSuggestMatches($request) -> ?PostV1BankTransactionsSuggestMatchesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankTransactionsSuggestMatches(
    new PostV1BankTransactionsSuggestMatchesRequest([
        'transactionId' => 'transactionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$transactionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsImport($request) -> ?PostV1BankSettlementsImportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsImport(
    new PostV1BankSettlementsImportRequest([
        'bankAccountId' => 'bankAccountId',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bankAccountId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$provider:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsList($request) -> ?PostV1BankSettlementsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsList(
    new PostV1BankSettlementsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsGet($request) -> ?PostV1BankSettlementsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsGet(
    new PostV1BankSettlementsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsMatch($request) -> ?PostV1BankSettlementsMatchResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsMatch(
    new PostV1BankSettlementsMatchRequest([
        'lineId' => 'lineId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$lineId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invoiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsLink($request) -> ?PostV1BankSettlementsLinkResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Attach the incoming bank-statement line that carries this payout to the settlement batch.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsLink(
    new PostV1BankSettlementsLinkRequest([
        'id' => 'id',
        'bankTransactionId' => 'bankTransactionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankTransactionId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsUnlink($request) -> ?PostV1BankSettlementsUnlinkResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Detach the bank-statement line from the settlement batch and return the line to unmatched.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsUnlink(
    new PostV1BankSettlementsUnlinkRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankSettlementsPost($request) -> ?PostV1BankSettlementsPostResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankSettlementsPost(
    new PostV1BankSettlementsPostRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$commissionPercent:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;listThePsd2BanksAspsPsAvailableToConnect($request) -> ?PostV1BankFeedsBanksListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->listThePsd2BanksAspsPsAvailableToConnect(
    new PostV1BankFeedsBanksListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;beginBankAuthorizationRedirectTheUserToTheReturnedUrl($request) -> ?PostV1BankFeedsConnectionsStartResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->beginBankAuthorizationRedirectTheUserToTheReturnedUrl(
    new PostV1BankFeedsConnectionsStartRequest([
        'aspspName' => 'aspspName',
        'aspspCountry' => 'aspspCountry',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$aspspName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$aspspCountry:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$psuType:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$redirectUrl:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$validForDays:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$language:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;exchangeTheRedirectCodeForASessionAndStoreTheBankAccountsItExposes($request) -> ?PostV1BankFeedsConnectionsCompleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->exchangeTheRedirectCodeForASessionAndStoreTheBankAccountsItExposes(
    new PostV1BankFeedsConnectionsCompleteRequest([
        'reference' => 'reference',
        'code' => 'code',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reference:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankFeedsConnectionsGet($request) -> ?PostV1BankFeedsConnectionsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankFeedsConnectionsGet(
    new PostV1BankFeedsConnectionsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;postV1BankFeedsConnectionsList($request) -> ?PostV1BankFeedsConnectionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->postV1BankFeedsConnectionsList(
    new PostV1BankFeedsConnectionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;revokeTheConsentAtTheBankAndDropTheStoredConnection($request) -> ?PostV1BankFeedsConnectionsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->revokeTheConsentAtTheBankAndDropTheStoredConnection(
    new PostV1BankFeedsConnectionsDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;pointABankFeedAccountAtALedgerBankAccountSoItsTransactionsCanBeSynced($request) -> ?PostV1BankFeedsAccountsLinkResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->pointABankFeedAccountAtALedgerBankAccountSoItsTransactionsCanBeSynced(
    new PostV1BankFeedsAccountsLinkRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$createBankAccount:** `?PostV1BankFeedsAccountsLinkRequestCreateBankAccount` 
    
</dd>
</dl>

<dl>
<dd>

**$syncFrom:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;chooseTheImportTemplateAppliedOnSyncAndHowOftenTheAccountIsSyncedAutomatically($request) -> ?PostV1BankFeedsAccountsConfigureResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->chooseTheImportTemplateAppliedOnSyncAndHowOftenTheAccountIsSyncedAutomatically(
    new PostV1BankFeedsAccountsConfigureRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$importTemplateId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$syncSchedule:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;bank-&gt;pullNewTransactionsFromTheBankIntoTheLedgerEmitsBankFeedSynced($request) -> ?PostV1BankFeedsSyncResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->bank->pullNewTransactionsFromTheBankIntoTheLedgerEmitsBankFeedSynced(
    new PostV1BankFeedsSyncRequest([
        'connectionId' => 'connectionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$connectionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$feedAccountId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Files
<details><summary><code>$client-&gt;files-&gt;postV1FilesUpload($request) -> ?PostV1FilesUploadResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->postV1FilesUpload(
    new PostV1FilesUploadRequest([
        'entity' => 'entity',
        'fileName' => 'fileName',
        'mimeType' => 'mimeType',
        'content' => 'content',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$entity:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$entityId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$fileName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$mimeType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$content:** `string` — Base64-encoded file content
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;postV1FilesGet($request) -> ?PostV1FilesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->postV1FilesGet(
    new PostV1FilesGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;postV1FilesList($request) -> ?PostV1FilesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->postV1FilesList(
    new PostV1FilesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;postV1FilesDelete($request) -> ?PostV1FilesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->postV1FilesDelete(
    new PostV1FilesDeleteRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Reports
<details><summary><code>$client-&gt;reports-&gt;postV1ReportsTrialBalance($request) -> ?PostV1ReportsTrialBalanceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsTrialBalance(
    new PostV1ReportsTrialBalanceRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsSizeCategory($request) -> ?PostV1ReportsSizeCategoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsSizeCategory(
    new PostV1ReportsSizeCategoryRequest([
        'year' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$year:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsFinancialStatements($request) -> ?PostV1ReportsFinancialStatementsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsFinancialStatements(
    new PostV1ReportsFinancialStatementsRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$category:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsGeneralJournal($request) -> ?PostV1ReportsGeneralJournalResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsGeneralJournal(
    new PostV1ReportsGeneralJournalRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsGlDetail($request) -> ?PostV1ReportsGlDetailResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsGlDetail(
    new PostV1ReportsGlDetailRequest([
        'accountCode' => 'accountCode',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$accountCode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsPartnerBalances($request) -> ?PostV1ReportsPartnerBalancesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsPartnerBalances(
    new PostV1ReportsPartnerBalancesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsDebtAging($request) -> ?PostV1ReportsDebtAgingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsDebtAging(
    new PostV1ReportsDebtAgingRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$asOf:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsMonthlySummary($request) -> ?PostV1ReportsMonthlySummaryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsMonthlySummary(
    new PostV1ReportsMonthlySummaryRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$months:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsStockBalance($request) -> ?PostV1ReportsStockBalanceResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsStockBalance(
    new PostV1ReportsStockBalanceRequest([
        'asOf' => 'asOf',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOf:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsStockMovement($request) -> ?PostV1ReportsStockMovementResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsStockMovement(
    new PostV1ReportsStockMovementRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$itemId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsVatSummary($request) -> ?PostV1ReportsVatSummaryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsVatSummary(
    new PostV1ReportsVatSummaryRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsCashFlow($request) -> ?PostV1ReportsCashFlowResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsCashFlow(
    new PostV1ReportsCashFlowRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsStockAging($request) -> ?PostV1ReportsStockAgingResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsStockAging(
    new PostV1ReportsStockAgingRequest([
        'asOf' => 'asOf',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$asOf:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsStockShortage($request) -> ?PostV1ReportsStockShortageResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsStockShortage(
    new PostV1ReportsStockShortageRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsEuPurchases($request) -> ?PostV1ReportsEuPurchasesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsEuPurchases(
    new PostV1ReportsEuPurchasesRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsVatDetail($request) -> ?PostV1ReportsVatDetailResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsVatDetail(
    new PostV1ReportsVatDetailRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$side:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsPosSales($request) -> ?PostV1ReportsPosSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsPosSales(
    new PostV1ReportsPosSalesRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsOnlineSales($request) -> ?PostV1ReportsOnlineSalesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsOnlineSales(
    new PostV1ReportsOnlineSalesRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsOss($request) -> ?PostV1ReportsOssResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsOss(
    new PostV1ReportsOssRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsAdvanceReconciliation($request) -> ?PostV1ReportsAdvanceReconciliationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsAdvanceReconciliation(
    new PostV1ReportsAdvanceReconciliationRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsWriteOffActs($request) -> ?PostV1ReportsWriteOffActsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsWriteOffActs(
    new PostV1ReportsWriteOffActsRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$warehouseId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsCostCenters($request) -> ?PostV1ReportsCostCentersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsCostCenters(
    new PostV1ReportsCostCentersRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsCostCenterActivity($request) -> ?PostV1ReportsCostCenterActivityResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsCostCenterActivity(
    new PostV1ReportsCostCenterActivityRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
        'costCenterId' => 'costCenterId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$costCenterId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsCostCenterItems($request) -> ?PostV1ReportsCostCenterItemsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsCostCenterItems(
    new PostV1ReportsCostCenterItemsRequest([
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$costCenterId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsJobsCreate($request) -> ?PostV1ReportsJobsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsJobsCreate(
    new PostV1ReportsJobsCreateRequest([
        'reportType' => 'reportType',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$reportType:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$formats:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsJobsGet($request) -> ?PostV1ReportsJobsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsJobsGet(
    new PostV1ReportsJobsGetRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reports-&gt;postV1ReportsJobsList($request) -> ?PostV1ReportsJobsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reports->postV1ReportsJobsList(
    new PostV1ReportsJobsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$page:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$totals:** `?array` — Numeric fields to sum over every row matching the filter (not only the current page)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Consolidation
<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationGroupsCreate($request) -> ?PostV1ConsolidationGroupsCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationGroupsCreate(
    new PostV1ConsolidationGroupsCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$presentationCurrency:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationGroupsList($request) -> ?PostV1ConsolidationGroupsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationGroupsList(
    new PostV1ConsolidationGroupsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationGroupsGet($request) -> ?PostV1ConsolidationGroupsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationGroupsGet(
    new PostV1ConsolidationGroupsGetRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationGroupsUpdate($request) -> ?PostV1ConsolidationGroupsUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationGroupsUpdate(
    new PostV1ConsolidationGroupsUpdateRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$presentationCurrency:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationGroupsDelete($request) -> ?PostV1ConsolidationGroupsDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationGroupsDelete(
    new PostV1ConsolidationGroupsDeleteRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationMembersAdd($request) -> ?PostV1ConsolidationMembersAddResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationMembersAdd(
    new PostV1ConsolidationMembersAddRequest([
        'groupId' => 'groupId',
        'memberCompanyId' => 'memberCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberCompanyId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$ownershipPercent:** `?float` 
    
</dd>
</dl>

<dl>
<dd>

**$method:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationMembersRemove($request) -> ?PostV1ConsolidationMembersRemoveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationMembersRemove(
    new PostV1ConsolidationMembersRemoveRequest([
        'groupId' => 'groupId',
        'memberCompanyId' => 'memberCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberCompanyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationIntercompanyCandidates($request) -> ?PostV1ConsolidationIntercompanyCandidatesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Partners in member companies that look like other members of the same group (matched on company code or VAT code), with any existing intercompany link. Confirming a candidate via intercompany/links/set enables invoice mirroring.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationIntercompanyCandidates(
    new PostV1ConsolidationIntercompanyCandidatesRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationIntercompanyLinksSet($request) -> ?PostV1ConsolidationIntercompanyLinksSetResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Confirm that a partner record in one member company represents another member company of the group. Once links exist in both directions, issuing an intercompany sale invoice automatically creates the matching draft purchase invoice in the counterparty.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationIntercompanyLinksSet(
    new PostV1ConsolidationIntercompanyLinksSetRequest([
        'groupId' => 'groupId',
        'partnerId' => 'partnerId',
        'counterpartyCompanyId' => 'counterpartyCompanyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$partnerId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$counterpartyCompanyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationIntercompanyLinksList($request) -> ?PostV1ConsolidationIntercompanyLinksListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationIntercompanyLinksList(
    new PostV1ConsolidationIntercompanyLinksListRequest([
        'groupId' => 'groupId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationIntercompanyLinksRemove($request) -> ?PostV1ConsolidationIntercompanyLinksRemoveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationIntercompanyLinksRemove(
    new PostV1ConsolidationIntercompanyLinksRemoveRequest([
        'groupId' => 'groupId',
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationIntercompanyReport($request) -> ?PostV1ConsolidationIntercompanyReportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Intercompany reconciliation for a period: every issued intercompany sale invoice with its mirrored or manually recorded counterpart, unmatched documents on both sides, and per-currency totals with differences. Confirmed pairs are the basis for consolidation eliminations.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationIntercompanyReport(
    new PostV1ConsolidationIntercompanyReportRequest([
        'groupId' => 'groupId',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;consolidation-&gt;postV1ConsolidationReport($request) -> ?PostV1ConsolidationReportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->consolidation->postV1ConsolidationReport(
    new PostV1ConsolidationReportRequest([
        'groupId' => 'groupId',
        'fromDate' => 'fromDate',
        'toDate' => 'toDate',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fromDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$toDate:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$category:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$eliminations:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Public_
<details><summary><code>$client-&gt;public_-&gt;postV1PublicIntegrationRequests($request) -> ?PostV1PublicIntegrationRequestsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->public->postV1PublicIntegrationRequests(
    new PostV1PublicIntegrationRequestsRequest([
        'integration' => 'integration',
        'name' => 'name',
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$integration:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$company:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$details:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$website:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;public_-&gt;getV1PublicPayToken($token)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->public->getV1PublicPayToken(
    'token',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Billing
<details><summary><code>$client-&gt;billing-&gt;postV1BillingAccountGet($request) -> ?PostV1BillingAccountGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingAccountGet(
    new PostV1BillingAccountGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;postV1BillingAccountSetPlan($request) -> ?PostV1BillingAccountSetPlanResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingAccountSetPlan(
    new PostV1BillingAccountSetPlanRequest([
        'plan' => PostV1BillingAccountSetPlanRequestPlan::Starter->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$plan:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;postV1BillingTopupCreate($request) -> ?PostV1BillingTopupCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingTopupCreate(
    new PostV1BillingTopupCreateRequest([
        'amountCents' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$amountCents:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;postV1BillingPortalCreate($request) -> ?PostV1BillingPortalCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingPortalCreate(
    new PostV1BillingPortalCreateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;postV1BillingTransactionsList($request) -> ?PostV1BillingTransactionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingTransactionsList(
    new PostV1BillingTransactionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;billing-&gt;postV1BillingUsageList($request) -> ?PostV1BillingUsageListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->billing->postV1BillingUsageList(
    new PostV1BillingUsageListRequest([
        'from' => 'from',
        'to' => 'to',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$from:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$to:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Account
<details><summary><code>$client-&gt;account-&gt;postV1AccountLoginLinkRequest($request) -> ?PostV1AccountLoginLinkRequestResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountLoginLinkRequest(
    new PostV1AccountLoginLinkRequestRequest([
        'email' => 'email',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptTerms:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$referralCode:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountLoginLinkConsume($request) -> ?PostV1AccountLoginLinkConsumeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountLoginLinkConsume(
    new PostV1AccountLoginLinkConsumeRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountLogout($request) -> ?PostV1AccountLogoutResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountLogout(
    new PostV1AccountLogoutRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountMe($request) -> ?PostV1AccountMeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountMe(
    new PostV1AccountMeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountMembersList($request) -> ?PostV1AccountMembersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountMembersList(
    new PostV1AccountMembersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountMembersSetRole($request) -> ?PostV1AccountMembersSetRoleResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountMembersSetRole(
    new PostV1AccountMembersSetRoleRequest([
        'userId' => 'userId',
        'role' => PostV1AccountMembersSetRoleRequestRole::Admin->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountMembersRemove($request) -> ?PostV1AccountMembersRemoveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountMembersRemove(
    new PostV1AccountMembersRemoveRequest([
        'userId' => 'userId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$userId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountInvitesCreate($request) -> ?PostV1AccountInvitesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountInvitesCreate(
    new PostV1AccountInvitesCreateRequest([
        'email' => 'email',
        'role' => PostV1AccountInvitesCreateRequestRole::Admin->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountInvitesList($request) -> ?PostV1AccountInvitesListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountInvitesList(
    new PostV1AccountInvitesListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountInvitesRevoke($request) -> ?PostV1AccountInvitesRevokeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountInvitesRevoke(
    new PostV1AccountInvitesRevokeRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountInvitesGet($request) -> ?PostV1AccountInvitesGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountInvitesGet(
    new PostV1AccountInvitesGetRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountInvitesAccept($request) -> ?PostV1AccountInvitesAcceptResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountInvitesAccept(
    new PostV1AccountInvitesAcceptRequest([
        'token' => 'token',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$token:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptTerms:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountLocaleSet($request) -> ?PostV1AccountLocaleSetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountLocaleSet(
    new PostV1AccountLocaleSetRequest([
        'locale' => PostV1AccountLocaleSetRequestLocale::Lt->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$locale:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesCreate($request) -> ?PostV1AccountCompaniesCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesCreate(
    new PostV1AccountCompaniesCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$smeExemptionNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isVatPayer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1AccountCompaniesCreateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sepaCreditorId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultInvoiceCurrency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?string` — Jurisdiction the company is registered in (immutable after creation)
    
</dd>
</dl>

<dl>
<dd>

**$isSandbox:** `?bool` — Sandbox companies hold test data and are purged immediately on delete (immutable after creation)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesSelect($request) -> ?PostV1AccountCompaniesSelectResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesSelect(
    new PostV1AccountCompaniesSelectRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesProfile($request) -> ?PostV1AccountCompaniesProfileResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesProfile(
    new PostV1AccountCompaniesProfileRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesUpdate($request) -> ?PostV1AccountCompaniesUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesUpdate(
    new PostV1AccountCompaniesUpdateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$vatCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$smeExemptionNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$isVatPayer:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?PostV1AccountCompaniesUpdateRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$iban:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$bankName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$peppolId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sepaCreditorId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$defaultInvoiceCurrency:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$logo:** `?PostV1AccountCompaniesUpdateRequestLogo` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesArchive($request) -> ?PostV1AccountCompaniesArchiveResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesArchive(
    new PostV1AccountCompaniesArchiveRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesDelete($request) -> ?PostV1AccountCompaniesDeleteResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesDelete(
    new PostV1AccountCompaniesDeleteRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountCompaniesActivate($request) -> ?PostV1AccountCompaniesActivateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountCompaniesActivate(
    new PostV1AccountCompaniesActivateRequest([
        'companyId' => 'companyId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountApiKeysCreate($request) -> ?PostV1AccountApiKeysCreateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountApiKeysCreate(
    new PostV1AccountApiKeysCreateRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scopes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountApiKeysList($request) -> ?PostV1AccountApiKeysListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountApiKeysList(
    new PostV1AccountApiKeysListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountApiKeysRevoke($request) -> ?PostV1AccountApiKeysRevokeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountApiKeysRevoke(
    new PostV1AccountApiKeysRevokeRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountConsentAccept($request) -> ?PostV1AccountConsentAcceptResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountConsentAccept(
    new PostV1AccountConsentAcceptRequest([
        'acceptTerms' => true,
        'acceptDpa' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$acceptTerms:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$acceptDpa:** `bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountProfileUpdate($request) -> ?PostV1AccountProfileUpdateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountProfileUpdate(
    new PostV1AccountProfileUpdateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountEmailChangeRequest($request) -> ?PostV1AccountEmailChangeRequestResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountEmailChangeRequest(
    new PostV1AccountEmailChangeRequestRequest([
        'newEmail' => 'newEmail',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$newEmail:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locale:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountSessionsList($request) -> ?PostV1AccountSessionsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountSessionsList(
    new PostV1AccountSessionsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountSessionsRevoke($request) -> ?PostV1AccountSessionsRevokeResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountSessionsRevoke(
    new PostV1AccountSessionsRevokeRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountSessionsRevokeOthers($request) -> ?PostV1AccountSessionsRevokeOthersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountSessionsRevokeOthers(
    new PostV1AccountSessionsRevokeOthersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;downloadEverythingNordletStoresAboutTheSignedInUser($request) -> ?PostV1AccountExportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->downloadEverythingNordletStoresAboutTheSignedInUser(
    new PostV1AccountExportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;deleteTheSignedInUserAccount($request) -> ?PostV1AccountDeleteResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Removes the user: sessions, sign-in links, memberships and pending invitations are deleted at once; the email and name are replaced by an anonymous placeholder immediately and the remaining row is removed after 30 days. Refused while the user still owns or pays for a company that is not deleted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->deleteTheSignedInUserAccount(
    new PostV1AccountDeleteRequest([
        'confirmEmail' => 'confirmEmail',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$confirmEmail:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountReferralGet($request) -> ?PostV1AccountReferralGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountReferralGet(
    new PostV1AccountReferralGetRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountTableSettingsGet($request) -> ?PostV1AccountTableSettingsGetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountTableSettingsGet(
    new PostV1AccountTableSettingsGetRequest([
        'tableKey' => 'tableKey',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tableKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountTableSettingsSet($request) -> ?PostV1AccountTableSettingsSetResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountTableSettingsSet(
    new PostV1AccountTableSettingsSetRequest([
        'tableKey' => 'tableKey',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tableKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$columns:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$pageSize:** `?float` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;postV1AccountTableSettingsList($request) -> ?PostV1AccountTableSettingsListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->postV1AccountTableSettingsList(
    new PostV1AccountTableSettingsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

