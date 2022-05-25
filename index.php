<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tax Calculator - PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scale=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

    <?php
        //check if the "Calculate" button was pressed, then get the data from inputs
        if (isset($_POST['monetaryAmount']) && isset($_POST['taxPercentage'])) {
            $monetaryAmount = (float) $_POST['monetaryAmount'];
            $taxPercentage =(float) $_POST['taxPercentage'];
        } else{
            $monetaryAmount = 0;
            $taxPercentage = 0;
        }
        //Make the calculations
        $taxAmount = round($monetaryAmount * $taxPercentage / 100, 2);
        $finnalAmount = round($monetaryAmount - $taxAmount, 2);
    ?>
    
    <div class="content">
        <h1>Tax Calculator - PHP</h1>
        <form action="" method="POST" id="myForm">
            <label for="monetary">Monetary Amount</label>
            <br>
            <input type="number" id="taxPercentage" name="taxPercentage"
            value="<?=$taxPercentage?>" required pattern="[0-9]" step="0.01" min="0" max="100">
            <br>
            <lable for="tax">Tax percentage</lable>
            <br>
            <input type="number" id="taxPercentage" name="taxPercentage"
            value="<?=$taxpercentage ?>" require pattern="[0-9]" step="0.01" min="0" max="100">
            <br>
            <input type="Submit" value="Calculate" id="calculateBtn">
        </form>
        <div id="summary">
            <p>Tax Amoount:
                <span id="taxAmount">
                    <?=$taxAmount?>
                </span>
            </p>
            <p>Final Amount
                <span id="finalAmount">
                    <?=$finalAmount ?>
                </span>
            </p>
        </div>
    </div>
</body>
</html>