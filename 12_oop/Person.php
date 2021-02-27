<?php


class Person {
    public string $name;
    public string $surname;
    protected ?int $age;
    public static int $counter = 0;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = null;
        self::$counter++;
    }

    public function __toString(): string
    {
        $beginning = 'Name: '.$this->name.', Surname: '.$this->surname;
        return $this->age ? $beginning.', Age: '.$this->age : $beginning;
    }

    public function setAge($age)
    {
        $this->age = $age;
        echo '<span style="color:#cc0000;">'.'SET AGE '.$age.'</span><br>';
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function iterateVisible()
    {
        foreach($this as $key => $value) {
            echo '<span style="color:#0000cc">'."$key".'</span>'." => $value".'<br>';
        }
    }

    public static function getCount(): int
    {
        return self::$counter;
    }
}