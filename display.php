<DOCTYPE html>
    <head>
        <title>Display Records</title>
        <style>
            .result, .result td, .result th{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 8px;
                margin:auto;
                background-color: lightblue;

            }
            .result th{
                background-color: lightskyblue;
            }
        </style>    
    </head>
<body>   
<a href="<?=base_url('register/student/')?>">Go to Registration Form</a>
<?php
    if(isset($editdata)){
       # print_r($editdata);
        ?>
    <form action='<?=base_url("register/change")?>' method='post'>
        <table cellspacing='20'>
            <tr>
                <td>ID</td>
                <td><input name='stid' value='<?=$editdata[0]->student_id?>' readonly=' '></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input name='stname' value='<?=$editdata[0]->student_name?>'></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input name='stage' value='<?=$editdata[0]->student_age?>'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name='stemail' value='<?=$editdata[0]->student_email?>'></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input name='stphone' value='<?=$editdata[0]->student_phone?>'></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input name='staddress' value='<?=$editdata[0]->student_address?>'></td>
            </tr>
            <tr>
                <td><button>Update</button></td>
                <td></td>
            </tr>


    </table>
    </form>

        <?php
    } else{
?>

    <table class='result'> 
        <tr>
            <th>Action</th>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
    <?php
    if (isset($table)) {
        foreach($table as $row) {
            ?>
            <tr>
                <td><a href="<?=base_url('register/edit/'.$row->student_id)?>">Edit</a></td>
                <td><?=$row->student_id ?></td>
                <td><?=$row->student_name ?></td>
                <td><?=$row->student_age ?></td>
                <td><?=$row->student_email ?></td>
                <td><?=$row->student_phone ?></td>
                <td><?=$row->student_address ?></td>
                
           <?php /*
            echo $row->student_id.'<br>';
            echo $row->student_name.'<br>';
            echo $row->student_age.'<br>';
            echo $row->student_email.'<br>';
            echo $row->student_phone.'<br>';
            echo $row->student_address.'<br><br>';
            */ ?>
            </tr>
            <?php
        }
    }
    

    ?>
    </table>
    <?php
    }
    ?>
</body>
</html>