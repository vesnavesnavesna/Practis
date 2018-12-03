<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Persons</title>

  
 


<style type="text/css">

            table.persons {
                width: 100%;
            }
             
            table.persons thead {
                background-color: #eee;
                text-align: left;
            }
             
            table.persons thead th {
                border: solid 1px #fff;
                padding: 3px;
            }
             
            table.persons tbody td {
                border: solid 1px #eee;
                padding: 3px;
            }
             
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
        </style>


    </head>
    <body>


        <a href="logout.php">Logout</a><br/>
        <div><a href="index.php?op=new">Add new person</a></div>
      <!-- <div><a href="index.php?op=list">View list</a></div> -->
      <table id="user_data" class="persons" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                  
                    <th>State</th>
                   <th>Education</th>
                    <th>Occupation</th> 
                  
                </tr>
            </thead>
            <tbody>
            <?php
              if(is_array($persons)) {         
              foreach ($persons as $person){			  ?>
                <tr>
                    <td><a href="index.php?op=show&id=<?php print $person->id;?>"><?php print htmlentities($person->name);?></a></td>
                   
                    <td><?php echo htmlentities($person->phone); ?></td>
                    <td><?php print htmlentities($person->email); ?></td>
                    <!-- <td><?php print htmlentities($person->address); ?></td> -->
                    <td><?php print htmlentities($person->state_name); ?></td>
                     <td><?php print htmlentities($person->education); ?></td>
                     <td><?php print htmlentities($person->occupation); ?></td>

                </tr>
			  <?php }}
else{ die("Error.");	}		  ?>


            </tbody>
        </table>

 </body>



</html>