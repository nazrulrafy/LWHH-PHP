<?php 
define("DB_NAME","C:\\wamp64\\www\\hasin\\08_crud\\data\\db.txt");
function seed($filename){
    $data=array(
        array(
            "id"=>1,
            "fname" =>"janantul",
            "lname" =>"mawa",
            "roll"  =>10,
            "sub"   =>"economics",
        ),
        array(
            "id"=>2,
            "fname" =>"marzana",
            "lname" =>"manni",
            "roll"  =>11,
            "sub"   =>"mathmatics",
        ),
        array(
            "id"=>3,
            "fname" =>"sahera",
            "lname" =>"pritu",
            "roll"  =>12,
            "sub"   =>"statistics",
        ),
        array(
            "id"=>4,
            "fname" =>"mejbah",
            "lname" =>"uddin",
            "roll"  =>13,
            "sub"   =>"chemisty",
        ),
        array(
            "id"=>5,
            "fname" =>"bubbul",
            "lname" =>"akter",
            "roll"  =>14,
            "sub"   =>"physics",
        ),
        array(
            "id"=>6,
            "fname" =>"rasel",
            "lname" =>"mahmud",
            "roll"  =>15,
            "sub"   =>"pholitical",
        ),
    );
    $serialize=serialize($data);
    file_put_contents($filename,$serialize,LOCK_EX);
}

function generateReports(){
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
?>
<table class="table">
    <tr>
        <td>Name</td>
        <td>Roll</td>
        <td>Action</td>
    </tr>
    <?php 
        foreach($students as $student){
    ?>
        <tr>
            <td><?php printf("%s %s",$student["fname"],$student["lname"])?></td>
            <td><?php printf("%s",$student["roll"])?></td>
            <td><?php printf('<a href="index.php?task=edit&id=%1$s">Edit</a> | <a class="delete" href="index.php?task=delete&id=%1$s">Delete</a>',$student["id"])?></td>
        </tr>
    
    <?php
        }
    ?>
</table>
<?php
}

function addStudent($fname,$lname,$roll,$subject){
    $found=false;
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
    foreach($students as $_student){
        if ($_student['roll'] == $roll) {
            $found=true;
            break;
        }
    }
    if (!$found) {
        $newId=getNewId($students);
        $student=array(
            "id"    =>$newId,
            "fname" =>$fname,
            "lname" =>$lname,
            "roll"  =>$roll,
            "sub"   =>$subject,
        );
        array_push($students,$student);
        $serialize=serialize($students);
        file_put_contents(DB_NAME,$serialize,LOCK_EX);
        return true;
    }
    return false;
}

function getStudent($id){
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
    foreach($students as $student){
        if ($student['id'] == $id) {
            return $student;
        }
    }
    return false;
}

function updateStudent($id,$fname,$lname,$roll,$subject){
    $found=false;
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
    foreach($students as $_student){
        if ($_student['roll'] == $roll && $_student['id']!=$id) {
            $found=true;
            break;
        }
    }
    if (!$found) {
        $students[$id-1]['fname']   =$fname;
        $students[$id-1]['lname']   =$lname;
        $students[$id-1]['roll']    =$roll;
        $students[$id-1]['sub']     =$subject;
        $serializeData=serialize($students);
        file_put_contents(DB_NAME,$serializeData,LOCK_EX);
        return true;
    }
    return false;
}

function deleteStudent($id){
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
    foreach($students as $offset=>$student){
        if($student['id']==$id){
            unset($students[$offset]);
        }
    }
    $serializeData=serialize($students);
    file_put_contents(DB_NAME,$serializeData,LOCK_EX);
}

function printArray(){
    $serialize=file_get_contents(DB_NAME);
    $students=unserialize($serialize);
    print_r($students);
}

function getNewId($students){
    $maxId=max(array_column($students,'id'));
    return $maxId+1;
}
?>




