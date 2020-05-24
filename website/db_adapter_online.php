<?php
/**
 * Created by IntelliJ IDEA.
 * User: maroanuyah
 * Date: 12/29/18
 * Time: 4:57 PM
 */


class dbadapter
{

    public $conn = null;


    function __construct(){
        date_default_timezone_set("America/Boise");
        $this-> conn = mysqli_connect("localhost:8889","root","root","OnlineData");

    }

    function clear (){

    }

    function getconnection()
    {
        return $this->conn;
    }
    function __destruct(){
        $this->clear ();
    }





//    %%%%%%%%%%%%%%%%%%%%%%% NEW INFO %%%%%%%%%%%%%%%%%%%%%%%%%%%%%







    function getQuestion3(){
        $query = "SELECT * FROM `question3`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        // echo $details;
        return $details;
    }

    function getQuestion4(){
        $query = "SELECT * FROM `racial_group_q4`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }

        return $details;

    }




    function getQuestion6(){
        $query = "SELECT * FROM `question6`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function getQuestion7(){
        $query = "SELECT * FROM `question7`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function getQuestion8(){
        $query = "SELECT * FROM `question8`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function getQuestion9(){
        $query = "SELECT * FROM `question9`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function getQuestion10(){
        $query = "SELECT * FROM `question10`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }


    function getQuestion11(){
        $query = "SELECT * FROM `question11`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function getQuestion12(){
        $query = "SELECT * FROM `question12`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }


    function getQuestion15(){
        $query = "SELECT * FROM `question15`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }


    function getQuestion27(){
        $query = "SELECT * FROM `question27`;";
        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'id' => $row ['id'],
                'details' => $row ['details']
            );
        }
        return $details;
    }

    function Question13Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select wi.details, COUNT(*) as total from `userInfo` as ui JOIN `racial_group_q4_user` as ra ON ui.userid = ra.userid 
                    JOIN `wildfire_notification_q13_user` as wiu ON ui.userid = wiu.userid 
                    JOIN `wildfire_notification_q13` as wi ON wi.id = wiu.wildfire_notification_q13_id
                    GROUP by wi.id";

        } else {
            $query = "select wildfire_notification_q13.details, IFNULL(my_res.total, 0) as total from `wildfire_notification_q13` left JOIN (
                select wi.details, wi.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                JOIN wildfire_notification_q13_user as wiu ON ui.userid = wiu.userid 
                JOIN wildfire_notification_q13 as wi ON wi.id = wiu.wildfire_notification_q13_id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id ) `my_res` ON wildfire_notification_q13.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question14Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" &&$zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select question14.details, IFNULL(my_res.total, 0) as total from question14 left JOIN 
            (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
            JOIN question14 as ques on ui.question14_id = ques.id GROUP by ques.id) `my_res` ON question14.id = my_res.id;";

        } else {
            $query = "select question14.details, IFNULL(my_res.total, 0) as total from question14 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                JOIN question14 as ques on ui.question14_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question14.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question16Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" &&$zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select question16.details, IFNULL(my_res.total, 0) as total from question16 left JOIN 
            (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
            JOIN question16 as ques on ui.question16_id = ques.id GROUP by ques.id) `my_res` ON question16.id = my_res.id;";

        } else {
            $query = "select question16.details, IFNULL(my_res.total, 0) as total from question16 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid
                JOIN question16 as ques on ui.question16_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question16.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question17Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" &&$zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select question17.details, IFNULL(my_res.total, 0) as total from question17 left JOIN 
            (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
            JOIN question17 as ques on ui.question17_id = ques.id GROUP by ques.id) `my_res` ON question17.id = my_res.id;";

        } else {
            $query = "select question17.details, IFNULL(my_res.total, 0) as total from question17 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid
                JOIN question17 as ques on ui.question17_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question17.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }



    function Question18Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" &&$zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select question18.details, IFNULL(my_res.total, 0) as total from question18 left JOIN 
                    (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                    JOIN question18 as ques on ui.question18_id = ques.id GROUP by ques.id) `my_res` ON question18.id = my_res.id;";

        } else {
            $query = "select question18.details, IFNULL(my_res.total, 0) as total from question18 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid
                JOIN question18 as ques on ui.question18_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question18.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question19Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select wi.details, COUNT(*) as total from userInfo as ui
                    JOIN smoke_event_info_q19_user as wiu ON ui.userid = wiu.userid
                    JOIN smoke_event_info_q19 as wi ON wi.id = wiu.smoke_event_info_q19_id
                    GROUP by wi.id";

        } else {
            $query = "select smoke_event_info_q19.details, IFNULL(my_res.total, 0) as total from smoke_event_info_q19 left JOIN 
                (select wi.details, wi.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                JOIN smoke_event_info_q19_user as wiu ON ui.userid = wiu.userid 
                JOIN smoke_event_info_q19 as wi ON wi.id = wiu.smoke_event_info_q19_id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id) `my_res` ON smoke_event_info_q19.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }




    function Question20Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" &&$zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" &&$smoke_rel_illness==="" ){
            $query = "select wi.details, COUNT(*) as total from userInfo as ui
              JOIN motivation_wild_fire_smoke_q20_user as wiu ON ui.userid = wiu.userid
             JOIN motivation_wild_fire_smoke_q20 as wi ON wi.id = wiu.motivation_wild_fire_smoke_q20_id
            GROUP by wi.id";
//            echo $query;

        } else {
            $query = "select motivation_wild_fire_smoke_q20.details, IFNULL(my_res.total, 0) as total from motivation_wild_fire_smoke_q20 left JOIN 
                (select wi.details, wi.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                JOIN motivation_wild_fire_smoke_q20_user as wiu ON ui.userid = wiu.userid 
                JOIN motivation_wild_fire_smoke_q20 as wi ON wi.id = wiu.motivation_wild_fire_smoke_q20_id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id) my_res ON motivation_wild_fire_smoke_q20.id = my_res.id;";

        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question21Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select wi.details, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                    JOIN negative_impact_wildfire_smoke_q21_user as wiu ON ui.userid = wiu.userid 
                    JOIN negative_impact_wildfire_smoke_q21 as wi ON wi.id = wiu.negative_impact_wildfire_smoke_q21_id
                    GROUP by wi.id";

        } else {
            $query = "select negative_impact_wildfire_smoke_q21.details, IFNULL(my_res.total, 0) as total from negative_impact_wildfire_smoke_q21 left JOIN 
                (select wi.details, wi.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid 
                JOIN negative_impact_wildfire_smoke_q21_user as wiu ON ui.userid = wiu.userid 
                JOIN negative_impact_wildfire_smoke_q21 as wi ON wi.id = wiu.negative_impact_wildfire_smoke_q21_id 
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id) `my_res` ON negative_impact_wildfire_smoke_q21.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function Question22Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select question22.details, IFNULL(my_res.total, 0) as total from question22 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                JOIN question22 as ques on ui.question22_id = ques.id GROUP by ques.id) `my_res` ON question22.id = my_res.id;";

        } else {
            $query = "select question22.details, IFNULL(my_res.total, 0) as total from question22 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN 
                question22 as ques on ui.question22_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question22.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function question23Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select question23.details, IFNULL(my_res.total, 0) as total from question23 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                JOIN question23 as ques on ui.question23_id = ques.id GROUP by ques.id) `my_res` ON question23.id = my_res.id;";

        } else {
            $query = "select question23.details, IFNULL(my_res.total, 0) as total from question23 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN 
                question23 as ques on ui.question23_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question23.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }



    function question24Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select question24.details, IFNULL(my_res.total, 0) as total from question24 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                JOIN question24 as ques on ui.question24_id = ques.id GROUP by ques.id) `my_res` ON question24.id = my_res.id;";

        } else {
            $query = "select question24.details, IFNULL(my_res.total, 0) as total from question24 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN 
                question24 as ques on ui.question24_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question24.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function question25Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select question25.details, IFNULL(my_res.total, 0) as total from question25 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                JOIN question25 as ques on ui.question25_id = ques.id GROUP by ques.id) `my_res` ON question25.id = my_res.id;";

        } else {
            $query = "select question25.details, IFNULL(my_res.total, 0) as total from question25 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN 
                question25 as ques on ui.question25_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question25.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function question26Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select question26.details, IFNULL(my_res.total, 0) as total from question26 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui  
                JOIN question26 as ques on ui.question26_id = ques.id GROUP by ques.id) `my_res` ON question26.id = my_res.id;";

        } else {
            $query = "select question26.details, IFNULL(my_res.total, 0) as total from question26 left JOIN 
                (select ques.details, ques.id, COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN 
                question26 as ques on ui.question26_id = ques.id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by ques.id) `my_res` ON question26.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function question28Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select symptom_smoke_event_q28.details, IFNULL(my_res.total, 0) as total from symptom_smoke_event_q28 left JOIN (select wi.details, wi.id, COUNT(*) as 
                    total from userInfo as ui JOIN symptom_smoke_event_q28_user as wiu ON ui.userid = wiu.userid JOIN symptom_smoke_event_q28 as wi ON wi.id = wiu.symptom_smoke_event_q28_id 
                    GROUP by wi.id) my_res ON symptom_smoke_event_q28.id = my_res.id;";

        } else {
            $query = "select symptom_smoke_event_q28.details, IFNULL(my_res.total, 0) as total from symptom_smoke_event_q28 left JOIN (select wi.details, wi.id, COUNT(*) 
                as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN symptom_smoke_event_q28_user as wiu ON ui.userid = wiu.userid 
                JOIN symptom_smoke_event_q28 as wi ON wi.id = wiu.symptom_smoke_event_q28_id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id) my_res ON symptom_smoke_event_q28.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }


    function question29Data($min_age,$max_age,$gender_info,
                            $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
                            $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness){

        if ($min_age==="" && $max_age==="" &&$gender_info==="" &&$race_info==="" && $zip_code==="" &&$deg_qual==="" &&$house_income==="" &&
            $health_cond==="" &&$out_eng==="" &&$out_freq==="" && $air_qual_not==="" &&$wild_smoke_not==="" &&$wild_smoke_red==="" && $smoke_rel_illness==="" ){
            $query = "select help_symptoms_q29.details, IFNULL(my_res.total, 0) as total from help_symptoms_q29 left JOIN (select wi.details, wi.id, COUNT(*) as 
            total from userInfo as ui JOIN help_symptoms_q29_user as wiu ON ui.userid = wiu.userid JOIN help_symptoms_q29 as wi ON wi.id = wiu.help_symptoms_q29_id 
            GROUP by wi.id) my_res ON help_symptoms_q29.id = my_res.id;";

        } else {
            $query = "select help_symptoms_q29.details, IFNULL(my_res.total, 0) as total from help_symptoms_q29 left JOIN (select wi.details, wi.id, 
                COUNT(*) as total from userInfo as ui JOIN racial_group_q4_user as ra ON ui.userid = ra.userid JOIN help_symptoms_q29_user as wiu ON ui.userid = wiu.userid 
                JOIN help_symptoms_q29 as wi ON wi.id = wiu.help_symptoms_q29_id
                where 1=1 ".
                ($min_age !== ""?" and ui.question2_age >=".$min_age:" ").
                ($max_age !== ""?" and ui.question2_age <=".$max_age:" ").
                ($gender_info !== ""?" and ui.question3_id <=".$gender_info:" ").
                ($race_info !== ""?" and ra.racial_group_q4_id =".$race_info:" ").
                ($zip_code !== ""?" and ui.question5_zip =".$zip_code:" ").
                ($deg_qual !== ""?" and ui.question6_id =".$deg_qual:" ").
                ($house_income !== ""?" and ui.question7_id =".$house_income:" ").
                ($health_cond !== ""?" and ui.question8_id =".$health_cond:" ").
                ($out_eng !== ""?" and ui.question9_id =".$out_eng:" ").
                ($out_freq !== ""?" and ui.question10_id =".$out_freq:" ").
                ($air_qual_not !== ""?" and ui.question11_id =".$air_qual_not:" ").
                ($wild_smoke_not !== ""?" and ui.question12_id =".$wild_smoke_not:" ").
                ($wild_smoke_red !== ""?" and ui.question15_id =".$wild_smoke_red:" ").
                ($smoke_rel_illness !== ""?" and ui.question27_id =".$smoke_rel_illness:" ").
                " GROUP by wi.id) my_res ON help_symptoms_q29.id = my_res.id;";
//            echo $query;
        }

        $result = $this->conn->query ($query);
        $details = array ();

        while ($row = $result->fetch_assoc()){

            $details[] = array (
                'details' => $row ['details'],
                'total' => $row ['total']
            );
        }
        return $details;

    }








}








?>
