<?php

class Person
{

    private string $name;
    private string $first_name;
    private string $address;
    private string $date_of_birth;
    private string $today_date;

    public function __construct(string $name, string $first_name, string $address, string $date_of_birth)
    {
        $this->name = $name;
        $this->first_name = $first_name;
        $this->address = $address;
        $this->date_of_birth = $date_of_birth;
    }

    public function get_info_person(): string
    {
        return 'Nom: ' . $this->name . "\n" . 'Prénom: ' . $this->first_name . "\n" . 'Adresse: ' . $this->address . "\n" . 'Date de naissance: ' . $this->date_of_birth;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAge()
    {
        $birthDate = $this->date_of_birth;
        $currentDate = date("d-m-Y");
        $age = date_diff(date_create($birthDate), date_create($currentDate));
        return 'Vous avez ' . $age->format('%y') . ' ' . 'ans.';
    }
}
