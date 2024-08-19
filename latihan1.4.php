abstract class Car {
    public $name;
    public function _construct($name) {
        $this->name = $name;
    }
    abstract public function intro() ;
}

class Audi extends Car {
    public function intro() {
        return "Choose German quality! I'm an $this->name!";
    }
}
class Volvo extends Car {
    public function intro() {
        return "Pround to be Swedish! I'm an $this->name!";
    }
}

class Citroen extends Car {
    public function intro() {
        return "French extravagance! I'm an $this->name!";
    }
}