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
    <h1>Add Contacts</h1>

    <!-- Display confirmation message -->
    <?php if (!empty($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post" action="add.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" required pattern="[0-9]{10}">
        
        <!-- Submit button -->
        <input type="submit" value="Add Contact">
    </form>
</main>
</body>
</html>
