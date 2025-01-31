<!DOCTYPE html>
<html>

<head>
    <title>Number Calculator</title>
</head>

<body>
    <h2>Number Calculator</h2>
    <form action="process.php" method="POST">
        <div class="form-group">
            <label for="a">Value A:</label>
            <input type="number" id="a" name="a" required step="any">
        </div>
        <div class="form-group">
            <label for="b">Value B:</label>
            <input type="number" id="b" name="b" required step="any">
        </div>
        <div class="form-group">
            <label for="c">Value C:</label>
            <input type="number" id="c" name="c" required step="any">
        </div>
        <input type="submit" value="Calculate" class="submit-btn">
    </form>
</body>

</html>