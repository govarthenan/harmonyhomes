<?php 
include(APP_ROOT . '/views/inc/general_side_nav.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URL_ROOT . '/css/general_style.css' ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </head>
  <body>
    
    <div class="main-content">
    <div class="gm-amenity-content">
      <div class="amenity-request-heading"> Amenity Requests</div>
    <div class="table-body">
      
    <table>
                           <tr class="amenity-table-head">
                            <th>ID</th>
                            <th>Resident ID</th>
                            <th>Amenity Type</th>
                            <th>Date</th>
                            <th>View</th>
                            <!-- <th>checkbox</th> -->
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>S 2/4</td>
                                <td>Fitness Center</td>
                                <td>2024/01/28</td>
                                <td><button class="viewButton">View</button></td>
                                
                                
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>W 3/6</td>
                                <td>Swimming Pool</td>
                                <td>2024/02/03</td>
                                <td><button class="viewButton">View</button></td>
                                
                                
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>S 4/7</td>
                                <td>Common Area</td>
                                <td>2024/02/25</td>
                                <td><button class="viewButton">View</button></td>

                                
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>W 1/6</td>
                                <td>Common Area</td>
                                <td>2024/03/03</td>
                                <td><button class="viewButton">View</button></td>
                               
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>S 3/6</td>
                                <td>Fitness Center</td>
                                <td>2024/03/27</td>
                                <td><button class="viewButton">View</button></td>
                               
                            </tr>
                          </table>
            
    </div>
    </div>
  </body>
</html>
