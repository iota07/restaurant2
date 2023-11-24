<?php

require_once('config/db.php');
$query = "select * from form_entries";
$result = mysqli_query($con,$query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ...">
    <div class="flex ...">
        <div class="grow h-14 ...">
            <h1 class="text-3xl font-bold underline text-clifford">Admin Dashboard</h1>
        </div>
    </div>

    <div class="flex ... shadow-md rounded-md p-6">
        <table class="table-auto max-w-fit border-collapse border border-slate-400 ...">
        
            <tr>
                <th class="border border-slate-300 ...">Form ID</th>
                <th class="border border-slate-300 ...">Date Created</th>
                <th class="border border-slate-300 ...">Name</th>
                <th class="border border-slate-300 ...">Surname</th>
                <th class="border border-slate-300 ...">Email</th>
                <th class="border border-slate-300 ...">Reservations</th>
                <th class="border border-slate-300 ...">Events</th>
                <th class="border border-slate-300 ...">Customer Services</th>
                            
            </tr>        
                    
            <?php
            while($ligne = $result->fetch_assoc()){
                echo "<tr>";
                foreach ($ligne as $query) {
                    echo '<td class="border border-slate-300 ...">'.$query.'</td>';
                }
                echo "</tr>";
            }
            ?>            
        
        </table>
    </div>
</body>
</html>
