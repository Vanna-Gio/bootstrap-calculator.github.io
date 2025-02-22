<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(-45deg, #1e3c72, #2a5298); 
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1); 
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .form-control, .form-select {
            background: white;
            border: 1px solid #ccc;
            color: black;
        }
        .btn-primary {
            background: #0d6efd;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #0046b5;
        }
        .result-box {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h2><i class="bi bi-cpu-fill"></i> My PHP Calculator</h2>
        <form method="GET">
            <div class="mb-3">
                <input type="number" name="input1" placeholder="Enter Number 1" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="input2" placeholder="Enter Number 2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="operation" class="form-label"><i class="bi bi-check2-circle"></i> Select an Operation</label>
                <select name="operation" id="operation" class="form-select" required>
                    <option value="None">None</option>
                    <option value="Add">+ Add</option>
                    <option value="Subtract">- Subtract</option>
                    <option value="Multiply">× Multiply</option>
                    <option value="Divide">÷ Divide</option>
                </select>
            </div>
            <button   type="submit" class="btn btn-primary w-100" name="submit"> <i class="bi bi-calculator-fill"></i> Calculate</button>
        </form>

        <?php
        if (isset($_GET['submit'])) {
            $num1 = $_GET['input1'];
            $num2 = $_GET['input2'];
            $operation = $_GET['operation'];

            echo '<div class="result-box">';

            switch ($operation) {
                case 'None':
                    echo "Please select an operation.";
                    break;
                case 'Add':
                    echo "$num1 + $num2 = " . ($num1 + $num2);
                    break;
                case 'Subtract':
                    echo "$num1 - $num2 = " . ($num1 - $num2);
                    break;
                case 'Multiply':
                    echo "$num1 × $num2 = " . ($num1 * $num2);
                    break;
                case 'Divide':
                    if ($num2 == 0) {
                        echo "Cannot divide by zero!";
                    } else {
                        echo "$num1 ÷ $num2 = " . ($num1 / $num2);
                    }
                    break;
            }
            echo '</div>';
        }
        ?>
        
    </div>
</body>
</html>
