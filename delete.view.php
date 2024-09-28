<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Management System</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <!-- Navigation links -->
            <li><a href="/index.php">List Contacts</a></li>
            <li><a href="/add.php">Add Contacts</a></li>
            
        </ul>
    </nav>
</header>

<main class="container">
    <!-- Page Title -->
    <u><h2>Delete Contacts</h2></u>

    <!-- Display confirmation message -->
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Form to delete a contact by ID -->
    <form method="post" action="delete.php">
        <label for="id">Enter Contact ID to Delete:</label>
        <input type="number" name="id" id="id" required>
        <input type="submit" value="Delete Contact">
    </form>
</main>
</body>
</html>

