<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Exception;

class GbP11DItemsCreateDeclarationsRequestItem extends JsonSerializableType
{
    /**
     * @var (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    GbP11DItemsCreateDeclarationsRequestItemAssetTransferred
     *   |GbP11DItemsCreateDeclarationsRequestItemPayment
     *   |GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments
     *   |GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards
     *   |GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation
     *   |GbP11DItemsCreateDeclarationsRequestItemMileageAllowance
     *   |GbP11DItemsCreateDeclarationsRequestItemCar
     *   |GbP11DItemsCreateDeclarationsRequestItemVans
     *   |GbP11DItemsCreateDeclarationsRequestItemLoan
     *   |GbP11DItemsCreateDeclarationsRequestItemMedical
     *   |GbP11DItemsCreateDeclarationsRequestItemRelocation
     *   |GbP11DItemsCreateDeclarationsRequestItemServices
     *   |GbP11DItemsCreateDeclarationsRequestItemAssetAvailable
     *   |GbP11DItemsCreateDeclarationsRequestItemOtherClass1A
     *   |GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A
     *   |GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesOther
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ),
     *   value: (
     *    GbP11DItemsCreateDeclarationsRequestItemAssetTransferred
     *   |GbP11DItemsCreateDeclarationsRequestItemPayment
     *   |GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments
     *   |GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards
     *   |GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation
     *   |GbP11DItemsCreateDeclarationsRequestItemMileageAllowance
     *   |GbP11DItemsCreateDeclarationsRequestItemCar
     *   |GbP11DItemsCreateDeclarationsRequestItemVans
     *   |GbP11DItemsCreateDeclarationsRequestItemLoan
     *   |GbP11DItemsCreateDeclarationsRequestItemMedical
     *   |GbP11DItemsCreateDeclarationsRequestItemRelocation
     *   |GbP11DItemsCreateDeclarationsRequestItemServices
     *   |GbP11DItemsCreateDeclarationsRequestItemAssetAvailable
     *   |GbP11DItemsCreateDeclarationsRequestItemOtherClass1A
     *   |GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A
     *   |GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsCreateDeclarationsRequestItemExpensesOther
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemAssetTransferred $assetTransferred
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function assetTransferred(GbP11DItemsCreateDeclarationsRequestItemAssetTransferred $assetTransferred): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'asset-transferred',
            'value' => $assetTransferred,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemPayment $payment
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function payment(GbP11DItemsCreateDeclarationsRequestItemPayment $payment): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'payment',
            'value' => $payment,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments $taxOnNotionalPayments
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function taxOnNotionalPayments(GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments $taxOnNotionalPayments): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'tax-on-notional-payments',
            'value' => $taxOnNotionalPayments,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards $vouchersOrCreditCards
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function vouchersOrCreditCards(GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards $vouchersOrCreditCards): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'vouchers-or-credit-cards',
            'value' => $vouchersOrCreditCards,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation $livingAccommodation
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function livingAccommodation(GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation $livingAccommodation): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'living-accommodation',
            'value' => $livingAccommodation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemMileageAllowance $mileageAllowance
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function mileageAllowance(GbP11DItemsCreateDeclarationsRequestItemMileageAllowance $mileageAllowance): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'mileage-allowance',
            'value' => $mileageAllowance,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemCar $car
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function car(GbP11DItemsCreateDeclarationsRequestItemCar $car): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'car',
            'value' => $car,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemVans $vans
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function vans(GbP11DItemsCreateDeclarationsRequestItemVans $vans): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'vans',
            'value' => $vans,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemLoan $loan
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function loan(GbP11DItemsCreateDeclarationsRequestItemLoan $loan): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'loan',
            'value' => $loan,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemMedical $medical
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function medical(GbP11DItemsCreateDeclarationsRequestItemMedical $medical): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'medical',
            'value' => $medical,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemRelocation $relocation
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function relocation(GbP11DItemsCreateDeclarationsRequestItemRelocation $relocation): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'relocation',
            'value' => $relocation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemServices $services
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function services(GbP11DItemsCreateDeclarationsRequestItemServices $services): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'services',
            'value' => $services,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemAssetAvailable $assetAvailable
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function assetAvailable(GbP11DItemsCreateDeclarationsRequestItemAssetAvailable $assetAvailable): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'asset-available',
            'value' => $assetAvailable,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemOtherClass1A $otherClass1A
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function otherClass1A(GbP11DItemsCreateDeclarationsRequestItemOtherClass1A $otherClass1A): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'other-class-1a',
            'value' => $otherClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A $otherNonClass1A
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function otherNonClass1A(GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A $otherNonClass1A): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'other-non-class-1a',
            'value' => $otherNonClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted $taxPaidNotDeducted
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function taxPaidNotDeducted(GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted $taxPaidNotDeducted): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'tax-paid-not-deducted',
            'value' => $taxPaidNotDeducted,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function expensesTravelAndSubsistence(GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'expenses-travel-and-subsistence',
            'value' => $expensesTravelAndSubsistence,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment $expensesEntertainment
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function expensesEntertainment(GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment $expensesEntertainment): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'expenses-entertainment',
            'value' => $expensesEntertainment,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone $expensesHomeTelephone
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function expensesHomeTelephone(GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone $expensesHomeTelephone): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'expenses-home-telephone',
            'value' => $expensesHomeTelephone,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function expensesNonQualifyingRelocation(GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'expenses-non-qualifying-relocation',
            'value' => $expensesNonQualifyingRelocation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsRequestItemExpensesOther $expensesOther
     * @return GbP11DItemsCreateDeclarationsRequestItem
     */
    public static function expensesOther(GbP11DItemsCreateDeclarationsRequestItemExpensesOther $expensesOther): GbP11DItemsCreateDeclarationsRequestItem
    {
        return new GbP11DItemsCreateDeclarationsRequestItem([
            'type' => 'expenses-other',
            'value' => $expensesOther,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssetTransferred(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemAssetTransferred && $this->type === 'asset-transferred';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemAssetTransferred
     */
    public function asAssetTransferred(): GbP11DItemsCreateDeclarationsRequestItemAssetTransferred
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemAssetTransferred && $this->type === 'asset-transferred')) {
            throw new Exception(
                "Expected asset-transferred; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPayment(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemPayment && $this->type === 'payment';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemPayment
     */
    public function asPayment(): GbP11DItemsCreateDeclarationsRequestItemPayment
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemPayment && $this->type === 'payment')) {
            throw new Exception(
                "Expected payment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxOnNotionalPayments(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments
     */
    public function asTaxOnNotionalPayments(): GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments')) {
            throw new Exception(
                "Expected tax-on-notional-payments; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVouchersOrCreditCards(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards
     */
    public function asVouchersOrCreditCards(): GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards')) {
            throw new Exception(
                "Expected vouchers-or-credit-cards; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLivingAccommodation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation && $this->type === 'living-accommodation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation
     */
    public function asLivingAccommodation(): GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation && $this->type === 'living-accommodation')) {
            throw new Exception(
                "Expected living-accommodation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMileageAllowance(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemMileageAllowance && $this->type === 'mileage-allowance';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemMileageAllowance
     */
    public function asMileageAllowance(): GbP11DItemsCreateDeclarationsRequestItemMileageAllowance
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemMileageAllowance && $this->type === 'mileage-allowance')) {
            throw new Exception(
                "Expected mileage-allowance; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCar(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemCar && $this->type === 'car';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemCar
     */
    public function asCar(): GbP11DItemsCreateDeclarationsRequestItemCar
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemCar && $this->type === 'car')) {
            throw new Exception(
                "Expected car; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVans(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemVans && $this->type === 'vans';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemVans
     */
    public function asVans(): GbP11DItemsCreateDeclarationsRequestItemVans
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemVans && $this->type === 'vans')) {
            throw new Exception(
                "Expected vans; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLoan(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemLoan && $this->type === 'loan';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemLoan
     */
    public function asLoan(): GbP11DItemsCreateDeclarationsRequestItemLoan
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemLoan && $this->type === 'loan')) {
            throw new Exception(
                "Expected loan; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMedical(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemMedical && $this->type === 'medical';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemMedical
     */
    public function asMedical(): GbP11DItemsCreateDeclarationsRequestItemMedical
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemMedical && $this->type === 'medical')) {
            throw new Exception(
                "Expected medical; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemRelocation && $this->type === 'relocation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemRelocation
     */
    public function asRelocation(): GbP11DItemsCreateDeclarationsRequestItemRelocation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemRelocation && $this->type === 'relocation')) {
            throw new Exception(
                "Expected relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isServices(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemServices && $this->type === 'services';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemServices
     */
    public function asServices(): GbP11DItemsCreateDeclarationsRequestItemServices
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemServices && $this->type === 'services')) {
            throw new Exception(
                "Expected services; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAssetAvailable(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemAssetAvailable && $this->type === 'asset-available';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemAssetAvailable
     */
    public function asAssetAvailable(): GbP11DItemsCreateDeclarationsRequestItemAssetAvailable
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemAssetAvailable && $this->type === 'asset-available')) {
            throw new Exception(
                "Expected asset-available; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemOtherClass1A && $this->type === 'other-class-1a';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemOtherClass1A
     */
    public function asOtherClass1A(): GbP11DItemsCreateDeclarationsRequestItemOtherClass1A
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemOtherClass1A && $this->type === 'other-class-1a')) {
            throw new Exception(
                "Expected other-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherNonClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A && $this->type === 'other-non-class-1a';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A
     */
    public function asOtherNonClass1A(): GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A && $this->type === 'other-non-class-1a')) {
            throw new Exception(
                "Expected other-non-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxPaidNotDeducted(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted
     */
    public function asTaxPaidNotDeducted(): GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted')) {
            throw new Exception(
                "Expected tax-paid-not-deducted; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesTravelAndSubsistence(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence
     */
    public function asExpensesTravelAndSubsistence(): GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence')) {
            throw new Exception(
                "Expected expenses-travel-and-subsistence; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesEntertainment(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment && $this->type === 'expenses-entertainment';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment
     */
    public function asExpensesEntertainment(): GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment && $this->type === 'expenses-entertainment')) {
            throw new Exception(
                "Expected expenses-entertainment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesHomeTelephone(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone
     */
    public function asExpensesHomeTelephone(): GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone')) {
            throw new Exception(
                "Expected expenses-home-telephone; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesNonQualifyingRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation
     */
    public function asExpensesNonQualifyingRelocation(): GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation')) {
            throw new Exception(
                "Expected expenses-non-qualifying-relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesOther(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesOther && $this->type === 'expenses-other';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsRequestItemExpensesOther
     */
    public function asExpensesOther(): GbP11DItemsCreateDeclarationsRequestItemExpensesOther
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsRequestItemExpensesOther && $this->type === 'expenses-other')) {
            throw new Exception(
                "Expected expenses-other; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'asset-transferred':
                $value = $this->asAssetTransferred()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'payment':
                $value = $this->asPayment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-on-notional-payments':
                $value = $this->asTaxOnNotionalPayments()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vouchers-or-credit-cards':
                $value = $this->asVouchersOrCreditCards()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'living-accommodation':
                $value = $this->asLivingAccommodation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mileage-allowance':
                $value = $this->asMileageAllowance()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'car':
                $value = $this->asCar()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vans':
                $value = $this->asVans()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'loan':
                $value = $this->asLoan()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'medical':
                $value = $this->asMedical()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'relocation':
                $value = $this->asRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'services':
                $value = $this->asServices()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'asset-available':
                $value = $this->asAssetAvailable()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-class-1a':
                $value = $this->asOtherClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-non-class-1a':
                $value = $this->asOtherNonClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-paid-not-deducted':
                $value = $this->asTaxPaidNotDeducted()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-travel-and-subsistence':
                $value = $this->asExpensesTravelAndSubsistence()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-entertainment':
                $value = $this->asExpensesEntertainment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-home-telephone':
                $value = $this->asExpensesHomeTelephone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-non-qualifying-relocation':
                $value = $this->asExpensesNonQualifyingRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-other':
                $value = $this->asExpensesOther()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'asset-transferred':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemAssetTransferred::jsonDeserialize($data);
                break;
            case 'payment':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemPayment::jsonDeserialize($data);
                break;
            case 'tax-on-notional-payments':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemTaxOnNotionalPayments::jsonDeserialize($data);
                break;
            case 'vouchers-or-credit-cards':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemVouchersOrCreditCards::jsonDeserialize($data);
                break;
            case 'living-accommodation':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemLivingAccommodation::jsonDeserialize($data);
                break;
            case 'mileage-allowance':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemMileageAllowance::jsonDeserialize($data);
                break;
            case 'car':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemCar::jsonDeserialize($data);
                break;
            case 'vans':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemVans::jsonDeserialize($data);
                break;
            case 'loan':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemLoan::jsonDeserialize($data);
                break;
            case 'medical':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemMedical::jsonDeserialize($data);
                break;
            case 'relocation':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemRelocation::jsonDeserialize($data);
                break;
            case 'services':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemServices::jsonDeserialize($data);
                break;
            case 'asset-available':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemAssetAvailable::jsonDeserialize($data);
                break;
            case 'other-class-1a':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemOtherClass1A::jsonDeserialize($data);
                break;
            case 'other-non-class-1a':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemOtherNonClass1A::jsonDeserialize($data);
                break;
            case 'tax-paid-not-deducted':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemTaxPaidNotDeducted::jsonDeserialize($data);
                break;
            case 'expenses-travel-and-subsistence':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemExpensesTravelAndSubsistence::jsonDeserialize($data);
                break;
            case 'expenses-entertainment':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemExpensesEntertainment::jsonDeserialize($data);
                break;
            case 'expenses-home-telephone':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemExpensesHomeTelephone::jsonDeserialize($data);
                break;
            case 'expenses-non-qualifying-relocation':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemExpensesNonQualifyingRelocation::jsonDeserialize($data);
                break;
            case 'expenses-other':
                $args['value'] = GbP11DItemsCreateDeclarationsRequestItemExpensesOther::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
