<?php


class Colaborator {
    private float $salary;
    private float $adjustmentPercentage;

    public function __construct(float $salary) {
        $this->salary = $salary;
        $this->adjustmentPercentage = $this->calculateAdjustmentPercentage();
    }

    private function calculateAdjustmentPercentage(): float {
        if ($this->salary <= 280.00) {
            return 20.0;
        } elseif ($this->salary <= 700.00) {
            return 15.0;
        } elseif ($this->salary <= 1500.00) {
            return 10.0;
        } else {
            return 5.0;
        }
    }

    public function makeAdjustment(): string {
        $adjustmentValue = ($this->salary * $this->adjustmentPercentage) / 100;
        $newSalary = $this->salary + $adjustmentValue;

        return "Salário antes do reajuste: R$ " . $this->salary . "\n" .
               "Percentual de aumento aplicado: " . $this->adjustmentPercentage . "%\n" .
               "Valor do aumento: R$ " . $adjustmentValue . "\n" .
               "Novo salário, após o aumento: R$ " . $newSalary;
    }

   }