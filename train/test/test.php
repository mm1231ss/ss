<!DOCTYPE html>
<html>
<head>
    <title>Measurement Converter</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Measurement Converter</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="inputUnit">Input Unit</label>
                <select class="form-control" id="inputUnit" name="inputUnit">
                    <option value="km">Kilometers (km)</option>
                    <option value="ft">Feet (ft)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputValue">Input Value</label>
                <input type="text" class="form-control" id="inputValue" name="inputValue">
            </div>
            <div class="form-group">
                <label for="outputUnit">Output Unit</label>
                <select class="form-control" id="outputUnit" name="outputUnit">
                    <option value="km">Kilometers (km)</option>
                    <option value="ft">Feet (ft)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convert</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $inputUnit = $_POST["inputUnit"];
            $inputValue = floatval($_POST["inputValue"]);
            $outputUnit = $_POST["outputUnit"];
            $result = "";

            if ($inputUnit == "km" && $outputUnit == "ft") {
                $result = $inputValue * 3280.84;
            } elseif ($inputUnit == "ft" && $outputUnit == "km") {
                $result = $inputValue * 0.0003048;
            }

            echo "<h3>Result: $result $outputUnit</h3>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>