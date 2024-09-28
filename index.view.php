<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Management System</title>
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <!-- System title -->
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <!-- Navigation links for different actions -->
            <li><a href="/index.php">List contacts</a></li>
            <li><a href="/add.php">Add contacts</a></li>
            
        </ul>
    </nav>
</header>

<main class="container">
    <h1>My Contacts:</h1>
    <table>
        <thead>
            <tr>
                <th>#</th> 
                <th>Name</th> 
                <th>Email</th> 
                <th>Phone No.</th> 
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through each contact row and display in the table -->
            <?php foreach ($rows as $row) : ?>
            <tr>
                <td><?=$row->id; ?></td> 
                <td><?=$row->name; ?></td> 
                <td><?=$row->email; ?></td> 
                <td><?=$row->phone; ?></td> 
                <td>
                    <!-- Form for deleting a contact -->
                    <form method="post" action="delete.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?=$row->id; ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
</body>
</html>

    


