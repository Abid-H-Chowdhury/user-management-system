<?php
include('connect.php');
class Crud
{
    public static function user_set($post)
    {
        // $eid =  (date("Ymdhis"));
        // $eid = $post['eid'];
        $fname = $post['fname'];
        $lname = $post['lname'];
        $faname = $post['faname'];
        $maname = $post['maname'];
        $gender = $post['gender'];
        $bday = $post['bday'];
        $blood = $post['blood'];
        $religion = $post['religion'];
        $ph = $post['ph'];
        $em = $post['em'];
        $nid = $post['nid'];
        $addr = $post['addr'];
        $city = $post['city'];
        $st = $post['st'];
        $dp = $post['dp'];
        $po = $post['po'];
        $edu = $post['edu'];
        $jd = $post['jd'];
        $ld = $post['ld'];
        $agr = $post['agr'];
        $userid =  Crud::userid();
        $id = $userid;
        $uid = ++$id;
        $settingdata = array(
            'value' =>  $uid
        );
        QB::table('setting')->where('username', 'Newuserid')->update($settingdata);
        $eid = generateUserId($agr) . 100 . $id;
        $sta = $post['sta'];
        // $pass = $post['pass'];
        $pwd = $post['pass'];
        $hash = password_hash($pwd, PASSWORD_DEFAULT);
        // $encrypted_pwd = md5($pwd);
        //@$photo = isset($_POST['photo'][0]) ? $_POST['photo'] : NULL;
        $photo = $_FILES['photo']['name'];
        $photocopy = $_FILES['photo']['tmp_name'];
        move_uploaded_file($photocopy, "images/$photo");
        $data = array(
            'eid' =>  $eid,
            'fname' => $fname,
            'lname' => $lname,
            'f_name' => $faname,
            'm_name' => $maname,
            'sex' => $gender,
            'birth_day' => $bday,
            'blood' => $blood,
            'religion' => $religion,
            'cell' => $ph,
            'email' => $em,
            'nid' => $nid,
            'address' => $addr,
            'per_address' => $addr,
            'city' => $city,
            'state' => $st,
            'department' => $dp,
            'position' => $po,
            'education' => $edu,
            'join_date' => $jd,
            'leave_date' => $ld,
            'access_group' => $agr,
            'status' => $sta,
            'image' => $photo,
            'password' => $hash
        );
        return $insertId = QB::table('user')->insert($data);
    }
    public static function userid()
    {
        $result = QB::query("SELECT value FROM setting WHERE username='Newuserid'")->first();
        return $result->value;
    }
    public static function user_list($data = NULL)
    {
        return QB::query("SELECT * FROM user ORDER BY id ASC")->get();
    }
    public static function user_update_list($data = NULL)
    {
        $id = base64_decode($_GET['id']);
        return QB::query("SELECT * FROM user WHERE id='$id'")->get();
    }
    public static function user_update($post)
    {
        $id = base64_decode($_GET['id']);
        $eid = $post['eid'];
        $fname = $post['fname'];
        $lname = $post['lname'];
        $faname = $post['faname'];
        $maname = $post['maname'];
        $gender = $post['gender'];
        $bday = $post['bday'];
        $blood = $post['blood'];
        $religion = $post['religion'];
        $ph = $post['ph'];
        $em = $post['em'];
        $nid = $post['nid'];
        $addr = $post['addr'];
        $city = $post['city'];
        $st = $post['st'];
        $dp = $post['dp'];
        $po = $post['po'];
        $edu = $post['edu'];
        $jd = $post['jd'];
        $ld = $post['ld'];
        $agr = $post['agr'];
        $sta = $post['sta'];
        $pass = $post['pass'];
        if (empty($_FILES['new-image']['name'])) {
            $photo = $_POST['old_image'];
        } else {
            $photo = $_FILES['new-image']['name'];
            $photocopy = $_FILES['new-image']['tmp_name'];
            move_uploaded_file($photocopy, "images/$photo");
        }
        $data1 = array(
            'eid' => $eid,
            'fname' => $fname,
            'lname' => $lname,
            'f_name' => $faname,
            'm_name' => $maname,
            'sex' => $gender,
            'birth_day' => $bday,
            'blood' => $blood,
            'religion' => $religion,
            'cell' => $ph,
            'email' => $em,
            'nid' => $nid,
            'address' => $addr,
            'per_address' => $addr,
            'city' => $city,
            'state' => $st,
            'department' => $dp,
            'position' => $po,
            'education' => $edu,
            'join_date' => $jd,
            'leave_date' => $ld,
            'access_group' => $agr,
            'status' => $sta,
            'image' => $photo,
            'password' => $pass
        );
        return QB::table('user')->where('id', $id)->update($data1);
    }
    public static function user_delete($data = NULL)
    {
        $id = base64_decode($_GET['id']);
        return QB::table('user')->where('id', '=', $id)->delete();
    }
    public static function user_search($data = NULL)
    {
        $gender =  !empty($_GET['gender']) ? $_GET['gender'] : NULL;
        $blood =  !empty($_GET['blood']) ? $_GET['blood'] : NULL;
        $religion =  !empty($_GET['religion']) ? $_GET['religion'] : NULL;
        $department =  !empty($_GET['department']) ? $_GET['department'] : NULL;
        $access =  !empty($_GET['access']) ? $_GET['access'] : NULL;
        return QB::table('user')
            ->where('sex', '=', $gender)
            ->where('blood', '=', $blood)
            ->where('religion', '=', $religion)
            ->where('department', '=', $department)
            ->where('access_group', '=', $access)
            ->first();
    }
}
