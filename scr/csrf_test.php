<?php
session_start();

// Generate CSRF token if it doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token'])) {
        die('Error: CSRF token is missing.');
    }
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die('Error: Invalid CSRF token.');
    }
    // If token is valid
    echo "Success! CSRF token is valid.<br>";
    echo "You submitted: " . htmlspecialchars($_POST['data']);
    // Regenerate token after successful submission (optional)
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protection Demo</title>
</head>
<body>
    <h2>CSRF Protection Demo</h2>
    <form method="POST" action="">
        <label>Enter some data:</label><br>
        <input type="text" name="data" required><br><br>

        <!-- Include CSRF token as hidden field -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

        <button type="submit">Submit</button>
    </form>

    <hr>
    <h3>How to test CSRF protection:</h3>
    <ul>
        <li>Submit the form normally — it should succeed.</li>
        <li>Try deleting or modifying the hidden <code>csrf_token</code> field in browser dev tools and submit — it should show an error.</li>
        <li>Try submitting the form after opening it in a different browser or after clearing cookies/session — token mismatch will cause an error.</li>
    </ul>
</body>
</html>
