<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Calculation Result</title>
</head>

<body>
    <h2>Calculation Result</h2>
    <?php
    try {
        $data = json_encode($_POST);
        $cmd = "python3 /var/www/html/calculate.py " . escapeshellarg($data) . " 2>&1";

        $output = shell_exec($cmd);

        if ($output === null) {
            throw new Exception("Failed to execute Python script");
        }

        echo "<div class='result'>$output</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Error: " . htmlspecialchars($e->getMessage()) . "</div>";
    }
    ?>
    <div class="back-link">
        <a href="form.php">Back to Calculator</a>
    </div>
</body>

</html>