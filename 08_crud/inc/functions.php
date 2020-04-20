<?php
    define("DB_NAME","C:\\wamp64\\www\\hasin\\practice\\data\\db.txt");
    function seed(){
        $data=array(
            array(
                "id"=>1,
                "fname" =>"janantul",
                "lname" =>"mawa",
                "roll"  =>10,
                "sub"   =>"economics",
                "email" =>"mawa@gmail.com",
            ),
            array(
                "id"=>2,
                "fname" =>"marzana",
                "lname" =>"manni",
                "roll"  =>11,
                "sub"   =>"mathmatics",
                "email" =>"manni@gmail.com",
            ),
            array(
                "id"=>3,
                "fname" =>"sahera",
                "lname" =>"pritu",
                "roll"  =>12,
                "sub"   =>"statistics",
                "email" =>"pritu@gmail.com",
            ),
            array(
                "id"=>4,
                "fname" =>"mejbah",
                "lname" =>"uddin",
                "roll"  =>13,
                "sub"   =>"chemisty",
                "email" =>"meju@gmail.com",
            ),
            array(
                "id"=>5,
                "fname" =>"bubbul",
                "lname" =>"akter",
                "roll"  =>14,
                "sub"   =>"physics",
                "email" =>"setu@gmail.com",
            ),
            array(
                "id"=>6,
                "fname" =>"rasel",
                "lname" =>"mahmud",
                "roll"  =>15,
                "sub"   =>"pholitical",
                "email" =>"rasel@gmail.com",
            ),
        );
        $serialize=serialize($data);
        file_put_contents(DB_NAME,$serialize);
    }

    function generateReports(){
        $getData=file_get_contents(DB_NAME);
        $students=unserialize($getData);
?>
<table class="table table-info">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php foreach($students as $student){?>
    <tr>
        <td><?php printf("%s",$student["id"])?></td>
        <td><?php printf("%s %s",$student["fname"],$student["lname"])?></td>
        <td><?php printf("%s",$student["roll"])?></td>
        <td><?php printf("%s",$student["sub"])?></td>
        <td><?php printf("%s",$student["email"])?></td>
        <td><?php printf('<a class="btn btn-success" href="index.php?task=edit&id=%1$s">Edit</a><a class="btn btn-danger delete" href="index.php?task=delete&id=%1$s">Delete</a>',$student["id"])?></td>
    </tr>
<?php }?> 
    </tbody>
</table>

<?php 
    }

function addStudent($fname,$lname,$roll,$subject,$email){
    $found=false;
    $getData=file_get_contents(DB_NAME);
    $students=unserialize($getData);
    foreach($students as $student){
        if ($student['roll']==$roll) {
            $found=true;
        }
    }
    if (!$found) {
        $newStudent=array(
            "id"    =>getNewId($students),
            "fname" =>$fname,
            "lname" =>$lname,
            "roll"  =>$roll,
            "sub"   =>$subject,
            "email" =>$email,
        );
    array_push($students,$newStudent);
    $serialze=serialize($students);
    file_put_contents(DB_NAME,$serialze);
    return true;
    }
   return false;
}
function getNewId($students){
    $maxId=max(array_column($students,"id"));
    return $maxId+1;
}
function getStudent($id){
    $getData=file_get_contents(DB_NAME);
    $students=unserialize($getData);
    foreach($students as $student){
        if ($student['id']==$id) {
            return $student;
        }
    }
    return false;
}

function updateStudent($id,$fname,$lname,$roll,$subject,$email){
    $found=false;
    $getData=file_get_contents(DB_NAME);
    $students=unserialize($getData);
    foreach($students as $_student){
        if ($_student['roll']==$roll && $_student['id'] !=$id) {
            $found=true;
            break;
        }
    }
    if (!$found) {
        $students[$id-1]['fname']   =$fname;
        $students[$id-1]['lname']   =$lname;
        $students[$id-1]['roll']    =$roll;
        $students[$id-1]['sub']     =$subject;
        $students[$id-1]['email']   =$email;
        $serialize=serialize($students);
        file_put_contents(DB_NAME,$serialize,LOCK_EX);
        return true;
    }
    return false;
}

function deleteStudent($id){
    $getData=file_get_contents(DB_NAME);
    $students=unserialize($getData);
    foreach($students as $key =>$student){
        if ($student['id'] == $id) {
            unset($students[$key]);
        }
    }
    $serialize=serialize($students);
    file_put_contents(DB_NAME,$serialize,LOCK_EX);
}
?>