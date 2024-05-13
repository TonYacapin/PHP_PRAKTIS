<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .scroll-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Guestbook</h1>
        <h2 class="text-xl font-semibold mb-2">Data Table</h2>
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="px-4 py-2 bg-green-500">Index</th>
                    <th class="px-4 py-2 bg-green-500">Guest Name</th>
                    <th class="px-4 py-2 bg-green-500">Message</th>
                    <th class="px-4 py-2 bg-green-500">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "guestbook");
                if ($conn->connect_error)
                    die('Could not connect: ' . $conn->connect_error);

                $result = $conn->query("SELECT `index`, `guestname`, `message`, `dateposted` FROM messages");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='border border-gray-200'>";
                        echo "<td class='px-4 py-2'>" . $row['index'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['guestname'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['message'] . "</td>";
                        echo "<td class='px-4 py-2'>" . $row['dateposted'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='px-4 py-2 text-center'>No records found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>

        <h2 class="text-xl font-semibold mt-8 mb-2">Scroll View</h2>
        <div class="scroll-container">
            <?php
            $conn = new mysqli("localhost", "root", "", "guestbook");
            if ($conn->connect_error)
                die('Could not connect: ' . $conn->connect_error);

            $result = $conn->query("SELECT `index`, `guestname`, `message`, `dateposted` FROM messages");
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="border border-gray-200 mb-4">
                        <div class="flex px-4 py-2 bg-green-500">
                            <div class="font-bold mr-2">Index:</div>
                            <div><?php echo $row['index']; ?></div>
                            <div class="ml-4 font-bold mr-2">Guest Name:</div>
                            <div><?php echo $row['guestname']; ?></div>
                            <div class="ml-4 font-bold mr-2">Datestamp:</div>
                            <div><?php echo $row['dateposted']; ?></div>
                        </div>
                        <div class="px-4 py-2 bg-white">
                            <?php echo $row['message']; ?>
                        </div>
                    </div>


                    <?php
                }
            } else {
                echo "<p>No records found</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>

</html>