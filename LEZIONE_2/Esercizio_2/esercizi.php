<?php

// Es. 1

class Company
{

    public $name;
    public $location;
    public $staff;
    public static $avg_monthly_salary = 1500;
    public static $total = 0;

    public function __construct(string $name, string $location, int $staff = 0)
    {
        $this->name = $name;
        $this->location = $location;
        $this->staff = $staff;
    }


    // Es.3
    public function companyData()
    {
        if ($this->staff > 0) {
            echo "L'ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->staff . " dipendenti. \n";
        } else {
            echo "L'ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti. \n";
        }
    }


    // Es. 4
    public function totYear()
    {
        $tot = $this->staff * (self::$avg_monthly_salary * 12);
        echo "Il costo annuale dell'Ufficio " . $this->name . " è di " . $tot . " Euro\n";
    }

    // Es. 5
    public function incrementalTot()
    {
        $tot = $this->staff * (self::$avg_monthly_salary * 12);
        self::$total += $tot;
        echo "Il costo annuale dell'Ufficio " . $this->name . " è di " . $tot . " Euro\n";
        echo "Il costo totale per l'azienda HP3 attualmente è di: " . self::$total . " Euro\n";
    }

    // Es. 6
    public static function tot()
    {
        return self::$total;
    }
}

/* Es. 2

$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

var_dump($company1); */

$companies = [
    new Company('Apple', 'USA', 3),
    new Company('Barilla', 'ITA', 3),
    new Company('Nintendo', 'JAP', 5),
    new Company('Nokia', 'FIN', 10),
    new Company('Xioami', 'CHI', 3),
];

foreach ($companies as $company) {
    $company->companyData();
    $company->incrementalTot();
}

echo "Il totale per l'HP3 ammonta a: " . Company::tot() . " euro.";
