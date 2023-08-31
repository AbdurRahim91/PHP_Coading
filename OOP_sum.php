<!DOCTYPE html>
<html>
<head>
    <title>Calculator Form</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post" action="">
        Enter value for 'a': <input type="number" name="a" step="0.01" required><br>
        Enter value for 'b': <input type="number" name="b" step="0.01" required><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    class Calculator {
        private $a;
        private $b;
        private $c;

        public function setValues($a, $b) {
            $this->a = $a;
            $this->b = $b;
        }

        public function calculateSum() {
            $this->c = $this->a + $this->b;
        }

        public function getResult() {
            return $this->c;
        }
    }

    if(isset($_POST['a']) && isset($_POST['b'])) {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);

        $calculator = new Calculator();
        $calculator->setValues($a, $b);
        $calculator->calculateSum();
        $result = $calculator->getResult();

        echo "<p>The result of $a + $b is: $result</p>";
    }
    ?>
</body>
</html>
