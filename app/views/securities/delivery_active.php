<?php
include(APP_ROOT . '/views/inc/security_side_nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT . '/css/security_style.css'; ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body onload="randerDate()">
    <div class="main-content">
        <div class="acive-visitor-container">
            <div class="onsite-visitor-heading">
            Pending Deliveries
            </div>
            <div class="add-new-visitor">
            <a href="<?php echo URL_ROOT . '/securities/deliveryAdd'; ?>" style="text-decoration: none; color: inherit;"><button class="add-btn"><i class="fa-solid fa-plus"></i> <b>Add</b></button></a>
            </div>
           
            <div class="table-body">
                <table>
                
                    <thead>
                        <tr class="onsite-visitor-head">
                            <th>delivery_id</th>
                            <th>Door Number</th>
                            <th>Floor Number</th>
                            <th>Notes</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php foreach ($data['deliveries'] as $index => $delivery) : ?>
                    <tbody>
                        <tr>
                            <td></p><?php echo $delivery->delivery_id; ?></td>
                            <td><?php echo $delivery->doorNumber; ?></td>
                            <td><?php echo $delivery->floorNumber; ?></td>
                            <td><?php echo $delivery->notes; ?></td>
                            <td><button type="button" onclick="fetchExitTime()">Complete deilivery</button></td>
                        </tr>
                        
                        <!-- Add more rows as needed -->
                    </tbody>
                    <?php endforeach; ?>
                </table>
            </div>
           

        </div>
    </div>
</body>