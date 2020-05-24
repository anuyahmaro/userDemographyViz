<?php
/**
 * Created by IntelliJ IDEA.
 * User: maroanuyah
 * Date: 1/10/19
 * Time: 11:44 PM
 */
include ('db_adapter.php');
session_start();
$isSuccessful =false;
$adapter = new dbadapter();

$question3 = $adapter->getQuestion3();
$question4 = $adapter->getQuestion4();
$question6 = $adapter->getQuestion6();
$question7 = $adapter->getQuestion7();
$question8 = $adapter->getQuestion8();
$question9 = $adapter->getQuestion9();
$question10 = $adapter->getQuestion10();
$question11 = $adapter->getQuestion11();
$question12 = $adapter->getQuestion12();
$question15 = $adapter->getQuestion15();

if ($_GET){
    $min_age = $_GET["minimum_age"];
    $max_age = $_GET["maximum_age"];
    $gender_info = $_GET["gender_info"];
    $race_info = $_GET["race_info"];
    $zip_code = $_GET["zip_code"];
    $deg_qual = $_GET["degree_qual_info"];
    $house_income = $_GET["income_info"];
    $health_cond = $_GET["health_cond_info"];
    $out_eng = $_GET["outdoor_engagement_info"];
    $out_freq = $_GET["outdoor_frequency_info"];
    $air_qual_not = $_GET["air_quality_info"];
    $wild_smoke_not = $_GET["wildfire_smoke_notification_info"];
    $wild_smoke_red = $_GET["wildfire_and_smoke_reduction_info"];
    $smoke_rel_illness = $_GET["smoke_illness_info"];

    $q13_data = $adapter->Question13Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q14_data = $adapter->Question14Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q16_data = $adapter->Question16Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q17_data = $adapter->Question17Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q18_data = $adapter->Question18Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q19_data = $adapter->Question19Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q20_data = $adapter->Question20Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q21_data = $adapter->Question21Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q22_data = $adapter->Question22Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q23_data = $adapter->Question23Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q24_data = $adapter->Question24Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);


    $q25_data = $adapter->Question25Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q26_data = $adapter->Question26Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q28_data = $adapter->Question28Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

    $q29_data = $adapter->Question29Data($min_age,$max_age,$gender_info,
        $race_info,$zip_code,$deg_qual,$house_income,$health_cond,
        $out_eng,$out_freq,$air_qual_not,$wild_smoke_not,$wild_smoke_red,$smoke_rel_illness);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/mdi/css/materialdesignicons.min.css">

    <!--    <link rel="stylesheet" href="css/style.css">-->
    <!-- endinject -->
    <!--    <link rel="shortcut icon" type="image/png" href="images/favicon/ll_logo.png"/>-->

    <!-- Required meta tags -->
    <!--    <meta charset="utf-8">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <!--    <title>Children Data Form</title>-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="assets/bootstrap-4.0.0/dist/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon/ll_logo.png"/>
    <!-- <link rel="stylesheet" href="css/materialize.css">-->
<style>
    .hidden {
        display: none;
    }

     #myDIV {
         width: 100%;
         padding: 50px 0;
         text-align: center;
         background-color: lightblue;
         margin-top: 20px;
     }

</style>

</head>

<body>
<!--<script type="text/javascript" src="js/materialize.min.js"></script>-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="QuestionInfo.js" type="text/javascript"></script>


<div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
        <nav class="mdc-persistent-drawer__drawer">
            <div class="mdc-persistent-drawer__toolbar-spacer">
                <a href="dashboard.php" class="brand-logo">
                    <!--                    <img src="images/logo.svg" alt="logo">-->
                </a>
            </div>
            <div class="mdc-list-group">
                <nav class="mdc-list mdc-drawer-menu">
                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="dashboard.php">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">text_fields</i>
                            InPerson Data
                        </a>
                    </div>


                    <div class="mdc-list-item mdc-drawer-item">
                        <a class="mdc-drawer-link" href="online_data.php">
                            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">laptop</i>
                            Online Data
                        </a>
                    </div>



                </nav>
            </div>
        </nav>
    </aside>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
        <div class="mdc-toolbar__row">
            <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
                <span class="mdc-toolbar__input">
            <div class="mdc-text-field">
<!--              <input type="text" class="mdc-text-field__input card-panel teal lighten-2" id="css-only-text-field-box" placeholder="Search anything...">-->
            </div>
          </span>
            </section>
            <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
                <div class="mdc-menu-anchor">

                </div>


            </section>
        </div>
    </header>
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <div class="mdc-layout-grid__inner">
                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-7">
                                    <section class="purchase__card_section">
                                        <h5 class="text-center">Queries for In-Person Data</h5>
                                    </section>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card">
                            <form method="get" class="new_class">
                                <div class="mdc-layout-grid__inner">

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >


                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <h6>Age range (Q2) </h6>
                                                                    <input placeholder="Min." id="min_age"
                                                                           value="<?php echo isset($_GET["minimum_age"])?$_GET["minimum_age"]:"" ?>"  name="minimum_age" type="text" class="form-control" >

                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <h6><br></h6>
                                                                    <input placeholder="Max." id="max_age"
                                                                           value="<?php echo isset($_GET["maximum_age"])?$_GET["maximum_age"]:"" ?>"
                                                                           name="maximum_age" type="text" class="form-control" ></div>

                                                            </div>



                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Gender (Q3) </h6>
                                                                    <select name="gender_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $gender_info = $adapter->getQuestion3();
                                                                        foreach ($gender_info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["gender_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >
                                                            <form method="post" class="new_class">
                                                                <div class="row">

                                                                    <div class="input-field col s12">
                                                                        <h6>Race (Q4) </h6>

                                                                        <select name="race_info" class="form-control">
                                                                            <option value="">No Selection</option>
                                                                            <?PHP
                                                                            $gender_info = $adapter->getQuestion4();
                                                                            foreach ($gender_info as $gi){
                                                                                echo "<option  value='".$gi["id"]."' ".
                                                                                    ($_GET["race_info"] === $gi["id"]?"selected":"")
                                                                                    ." >".$gi["details"]."</option>";

                                                                            }
                                                                            ?>

                                                                        </select>
                                                                    </div>
                                                                </div>




                                                            </form>
                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Zip code (Q5)  </h6>
                                                                    <input placeholder="Zip code" id="zip_code"
                                                                           value="<?php echo isset($_GET["zip_code"])?$_GET["zip_code"]:"" ?>"
                                                                           name="zip_code" type="text" class="form-control" >
                                                                </div>
                                                            </div>





                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >


                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Degree qualification (Q6) </h6>
                                                                    <select name="degree_qual_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion6();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["degree_qual_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>

                                                            </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >


                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Household income (Q7) </h6>
                                                                    <!--                                                                    <input placeholder="dropdown" id="max_age"  name="maximum_age" type="text" class="validate" required="" aria-required="true">-->
                                                                    <select name="income_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion7();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["income_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>
                                                                </div>


                                                            </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Health condition (Q8) </h6>
                                                                    <select name="health_cond_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion8();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["health_cond_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>


                                                            </div>

                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >


                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Outdoor engagement (Q9)</h6>
                                                                    <select name="outdoor_engagement_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion9();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["outdoor_engagement_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Outdoor frequency (Q10) <br></h6>
                                                                    <select name="outdoor_frequency_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion10();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["outdoor_frequency_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Air quality notification (Q11)</h6>
                                                                    <select name="air_quality_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion11();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["air_quality_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>

                                                            </div>



                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>


                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >


                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Wildfire / smoke notification (Q12) <br></h6>
                                                                    <select name="wildfire_smoke_notification_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion12();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["wildfire_smoke_notification_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>

                                                            </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>



                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Wildfire / smoke reduction (Q15)</h6>
                                                                    <select name="wildfire_and_smoke_reduction_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion15();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["wildfire_and_smoke_reduction_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>

                                                            </div>


                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <h6>Smoke-related illness (Q27)</h6>
                                                                    <select name="smoke_illness_info" class="form-control">
                                                                        <option value="">No Selection</option>
                                                                        <?PHP
                                                                        $info = $adapter->getQuestion27();
                                                                        foreach ($info as $gi){
                                                                            echo "<option  value='".$gi["id"]."' ".
                                                                                ($_GET["smoke_illness_info"] === $gi["id"]?"selected":"")
                                                                                ." >".$gi["details"]."</option>";

                                                                        }
                                                                        ?>

                                                                    </select>

                                                                </div>

                                                            </div>

                                                        </section>
                                                    </div>
                                                </div>
                                        </section>

                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-card">
                                                        <section class="mdc-card__primary bg-white <?php echo $isSuccessful?"hide":"" ?>" >
                                                            <h6 style="text-align: center">Select Questions to be Visualized (Max 4)</h6>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input  class="single-checkbox" <?php echo isset($_GET["q13"]) && $_GET["q13"]==="on"? "checked":"" ?> type="checkbox" name="q13" id="q13"/> <label for="q13">Q13 (Notification source)</label>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input class="single-checkbox" <?php echo isset($_GET["q14"]) && $_GET["q14"]==="on"? "checked":"" ?> type="checkbox" name="q14" id="q14"/> <label  for="q14">Q14 (Frequency of AQ search)</label>
                                                                </div>


                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input class="single-checkbox" <?php echo isset($_GET["q16"]) &&$_GET["q16"]==="on"? "checked":"" ?> type="checkbox" name="q16" id="q16"/> <label  for="q16">Q16 (Days to reduce activities)</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q17"]) && $_GET["q17"]==="on"? "checked":"" ?>  name="q17" id="q17"/> <label  for="q17">Q17 (Min AQI to reduce activity)</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" name="q18" <?php echo isset($_GET["q18"]) &&$_GET["q18"]==="on"? "checked":"" ?> id="q18"/> <label  for="q18">Q18 (Min AQI to eliminate activity)</label>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q19"]) && $_GET["q19"]==="on"? "checked":"" ?> name="q19" id="q19"/> <label  for="q19">Q19 (Motivating info)</label>
                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox"  class="single-checkbox" <?php echo isset($_GET["q20"]) &&$_GET["q20"]==="on"? "checked":"" ?> name="q20" id="q20"/> <label  for="q20">Q20 (Motivating medium)</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q21"]) &&$_GET["q21"]==="on"? "checked":"" ?> name="q21" id="q21"/> <label  for="q21">Q21 (Motivating content)</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q22"]) && $_GET["q22"]==="on"? "checked":"" ?> name="q22" id="q22"/> <label  for="q22">Q22 (When to receive info)</label>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q23"]) &&$_GET["q23"]==="on"? "checked":"" ?> name="q23" id="q23"/> <label  for="q23">Q23 (Future preventive actions?)</label>
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q24"]) &&$_GET["q24"]==="on"? "checked":"" ?> name="q24" id="q24"/> <label  for="q24">Q24 (Is smoke hazard?)</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" name="q25"  <?php echo isset($_GET["q25"]) &&$_GET["q25"]==="on"? "checked":"" ?> id="q25"/> <label  for="q25">Q25 (Compare to other disasters)</label>
                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox"  <?php echo isset($_GET["q26"]) &&$_GET["q26"]==="on"? "checked":"" ?> name="q26" id="q26"/> <label  for="q26">Q26 (Evacuate?)</label>
                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox" <?php echo isset($_GET["q28"]) && $_GET["q28"]==="on"? "checked":"" ?> name="q28" id="q28"/> <label  for="q28">Q28 (Symptom?)</label>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="input-field col s12">
                                                                    <input type="checkbox" class="single-checkbox"  <?php echo isset($_GET["q29"]) && $_GET["q29"]==="on"? "checked":"" ?> name="q29" id="q29"/> <label  for="q29">Q29 (Alleviate measure)</label>
                                                                </div>


                                                            </div>


                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                    </div>

                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                                        <section class="purchase__card_section">
                                            <div class="mdc-layout-grid__inner">
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                </div>
                                                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="row">
                                                        <div class="input-field col s12">

                                                            <input type="submit" class="btn btn-primary" value="submit">

                                                        </div>


                                                    </div>
                                                </div>
                                            </div></section>

                                    </div>
                                </div>
                            </form>






                        </div>

                    </div>



                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q13"]) && $_GET["q13"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-10 <?php echo isset($_GET["q13"]) && $_GET["q13"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 13</h1>
                                    <center>

                                        <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg')"/><br><br>
                                        <div id="divMsg" style="background-color: #00a9f4; color: white; opacity: .6; width: 800px; text-align: center; display:none">
                                            <p>Which source do you use to find wildfire smoke notifications?</p>
                                        </div>
                                    </center>


                            </section>
                            <section class="row">
                                <canvas id="q13_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q13"]) && $_GET["q13"]==="on"? "":"hidden" ?> " >
                    </div>



                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q14"]) && $_GET["q14"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q14"]) && $_GET["q14"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 14</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg2')"/><br><br>
                                    <div id="divMsg2" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> In a smoky week in summer 2018, about how many days did you look online (either on a computer, tablet, or smartphone) for smoke-related information,
                                            such as air quality, smoke forecasts, or health notices?</p>
                                    </div>
                                </center>

                            </section>
                            <section class="row">
                                <canvas id="q14_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q14"]) && $_GET["q14"]==="on"? "":"hidden" ?> " >
                    </div>



                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q16"]) && $_GET["q16"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q16"]) && $_GET["q16"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 16</h1>

                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg3')"/><br><br>
                                    <div id="divMsg3" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> During summer of 2018, think of the longest period of consecutive days you reduced or eliminated your outdoor activities due to a smoke event.
                                            How many consecutive days did you reduce or eliminate activity?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q16_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q16"]) && $_GET["q16"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q17"]) && $_GET["q17"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q17"]) && $_GET["q17"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 17</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg4')"/><br><br>
                                    <div id="divMsg4" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> What is the minimum air quality index rating that would cause you to reduce your outdoor activity on a particular day?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q17_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q17"]) && $_GET["q17"]==="on"? "":"hidden" ?> " ></div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q18"]) && $_GET["q18"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q18"]) && $_GET["q18"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 18</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg5')"/><br><br>
                                    <div id="divMsg5" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> What is the minimum air quality index rating that would cause you to eliminate your outdoor activity on a particular day?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q18_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q18"]) && $_GET["q18"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q19"]) && $_GET["q19"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-10 <?php echo isset($_GET["q19"]) && $_GET["q19"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 19</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg6')"/><br><br>
                                    <div id="divMsg6" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> If you decided to limit your outdoor activity during a smoke event, what type of information motivated
                                            your decision to do so?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q19_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q19"]) && $_GET["q19"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q20"]) && $_GET["q20"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q20"]) && $_GET["q20"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 20</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg7')"/><br><br>
                                    <div id="divMsg7" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> What type of message could motivate / motivated you to take action to mitigate the risk of issues related to wildfire smoke, such as staying
                                            indoors or leaving the area?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q20_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q20"]) && $_GET["q20"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q21"]) && $_GET["q21"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-10 <?php echo isset($_GET["q21"]) && $_GET["q21"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 21</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg8')"/><br><br>
                                    <div id="divMsg8" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> What was the content of the message(s) that motivated you to take this action to mitigate the negative
                                            health impacts of wildfire smoke?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q21_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q21"]) && $_GET["q21"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q22"]) && $_GET["q22"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q22"]) && $_GET["q22"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 22</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg9')"/><br><br>
                                    <div id="divMsg9" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> When would receiving a smoke warning message be most likely to impact your decision
                                            to limit or avoid outdoor activities that same day?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q22_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q22"]) && $_GET["q22"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q23"]) && $_GET["q23"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q23"]) && $_GET["q23"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 23</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg10')"/><br><br>
                                    <div id="divMsg10" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> Will you take preventive actions to reduce smoke-related health impacts in the future?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q23_chart2" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q23"]) && $_GET["q23"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q24"]) && $_GET["q24"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q24"]) && $_GET["q24"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 24</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg11')"/><br><br>
                                    <div id="divMsg11" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> Do you consider wildfire smoke events a natural hazard?</p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q24_chart2" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q24"]) && $_GET["q24"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q25"]) && $_GET["q25"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q25"]) && $_GET["q25"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 25</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg12')"/><br><br>
                                    <div id="divMsg12" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> As a public health threat, are wildfire smoke events more important, less important, or about as important as
                                            other natural disasters, such as hurricanes or tornadoes? </p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q25_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q25"]) && $_GET["q25"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q26"]) && $_GET["q26"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-8 <?php echo isset($_GET["q26"]) && $_GET["q26"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 26</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg13')"/><br><br>
                                    <div id="divMsg13" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> Would you consider evacuating your home only because of the wildfire smoke? </p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q26_chart2" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-2" <?php echo isset($_GET["q26"]) && $_GET["q26"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q28"]) && $_GET["q28"]==="on"? "":"hidden" ?> " >

                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-10 <?php echo isset($_GET["q28"]) && $_GET["q28"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 28</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg14')"/><br><br>
                                    <div id="divMsg14" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> Did you have any of the following symptoms during or a few days after one of the smoke events in the summer of 2018 in the Boise area /
                                            Treasure Valley?  </p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q28_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q28"]) && $_GET["q28"]==="on"? "":"hidden" ?> " >
                    </div>


                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q29"]) && $_GET["q29"]==="on"? "":"hidden" ?> " >
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-10 <?php echo isset($_GET["q29"]) && $_GET["q29"]==="on"? "":"hidden" ?> "  >
                        <div class="mdc-card">
                            <section class="mdc-card__primary">
                                <h1 class="mdc-card__title mdc-card__title--large">Question 29</h1>
                                <center>

                                    <input type="button" value="Show / Hide Question" onClick="showHideDiv('divMsg15')"/><br><br>
                                    <div id="divMsg15" style="background-color: #00a9f4; opacity: .6; color: white; width: 800px; text-align: center; display:none">
                                        <p> Did you use/do any of the following to help with any symptoms during the smoke event?  </p>
                                    </div>
                                </center>
                            </section>
                            <section class="row">
                                <canvas id="q29_chart" style="height:11.8vh; padding: 30px"></canvas>
                            </section>
                        </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-1" <?php echo isset($_GET["q29"]) && $_GET["q29"]==="on"? "":"hidden" ?> " >
                    </div>




<!--                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">-->
<!--                        <div class="mdc-card">-->
<!--                            <section class="mdc-card__primary">-->
<!--                                <h1 class="mdc-card__title mdc-card__title--large">Studying Abroad Information</h1>-->
<!--                            </section>-->
<!--                            <section class="mdc-card__supporting-text">-->
<!--                                <canvas id="barChart_StudyAbroad" style="height:11.8vh"></canvas>-->
<!--                            </section>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">-->
<!--                        <div class="mdc-card">-->
<!--                            <section class="mdc-card__primary">-->
<!--                                <h1 class="mdc-card__title mdc-card__title--large">Studying Abroad Information</h1>-->
<!--                            </section>-->
<!--                            <section class="mdc-card__supporting-text">-->
<!--                                <canvas id="barChart_StudyAbroad" style="height:11.8vh"></canvas>-->
<!--                            </section>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6">-->
<!--                        <div class="mdc-card">-->
<!--                            <section class="mdc-card__primary">-->
<!--                                <h1 class="mdc-card__title mdc-card__title--large">Studying Abroad Information</h1>-->
<!--                            </section>-->
<!--                            <section class="mdc-card__supporting-text">-->
<!--                                <canvas id="barChart_StudyAbroad" style="height:11.8vh"></canvas>-->
<!--                            </section>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>


    </div>
</div>






<!--                %%%%%%%%%% End of Chart-->



</main>
<!-- partial:partials/_footer.html -->
<footer>
    <div class="mdc-layout-grid">
        <div class="mdc-layout-grid__inner">
<!--            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6">-->
<!--                <span class="text-muted">Copyright � 2019 <a class="text-green" href="http://coen.boisestate.edu/cs/" target="_blank">Boise State University CS Department</a>. All rights reserved.</span>-->
<!--            </div>-->
            <!--                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 d-flex justify-content-end">-->
            <!--                        <span class="mt-0 text-right">Hand-crafted &amp; made with <i class="mdi mdi-heart text-red"></i></span>-->
            <!--                    </div>-->
        </div>
    </div>
</footer>
<!-- partial -->
</div>
</div>




<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/dashboard.js"></script>


<script src="assets/material-components-web/dist/material-components-web.min.js"></script>
<script src="assets/jquery/dist/jquery.min.js"></script>
<script src="assets/bootstrap-4.0.0/popper.min.js"></script>
<script src="assets/chart.js/dist/Chart.min.js"></script>

<script src="assets/progressbar.js/dist/progressbar.min.js"></script>
<script type="application/javascript">
    $(function(){
        console.log("loaded");
        var limit = 4;
        $('input.single-checkbox').on('change', function(evt) {
            console.log("changed");
            if($('input.single-checkbox:checked').length > limit) {
                this.checked = false;
            }
        });
    })


</script>

<script type="application/javascript">
    $(function () {
        var colors = [

            <?php

            function rand_color() {
                return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            }

            foreach ($q13_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q13_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q13_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q13_chart").length) {
            var barChartCanvas_study_abroad = $("#q13_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroad = new Chart(barChartCanvas_study_abroad, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });

</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q14_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q14_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q14_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q14_chart").length) {
            var barChartCanvas_study_abroadB = $("#q14_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadB = new Chart(barChartCanvas_study_abroadB, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q16_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q16_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q16_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q16_chart").length) {
            var barChartCanvas_study_abroadC = $("#q16_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadC = new Chart(barChartCanvas_study_abroadC, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>



<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q17_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q17_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q17_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q17_chart").length) {
            var barChartCanvas_study_abroadD = $("#q17_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadD = new Chart(barChartCanvas_study_abroadD, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q18_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q18_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q18_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q18_chart").length) {
            var barChartCanvas_study_abroadE = $("#q18_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q19_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q19_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q19_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q19_chart").length) {
            var barChartCanvas_study_abroadE = $("#q19_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q20_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q20_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q20_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q20_chart").length) {
            var barChartCanvas_study_abroadE = $("#q20_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q21_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q21_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q21_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q21_chart").length) {
            var barChartCanvas_study_abroadE = $("#q21_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>

<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q22_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q22_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q22_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q22_chart").length) {
            var barChartCanvas_study_abroadE = $("#q22_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q23_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q23_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q23_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q23_chart").length) {
            var barChartCanvas_study_abroadE = $("#q23_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q26_data as $ns) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var NativeEnglishPieData = {
            datasets: [{
                data: [
                    <?php
                    foreach ($q26_data as $ns) {
                        echo "" . $ns["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                <?php
                foreach ($q26_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
        };

        var NativeEnglishPieOptions = {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };


        if ($("#q26_chart2").length) {
            var NativeEnglishpieChartCanvas = $("#q26_chart2").get(0).getContext("2d");
            var NativeEnglishpieChart = new Chart(NativeEnglishpieChartCanvas, {
                type: 'pie',
                data: NativeEnglishPieData,
                options: NativeEnglishPieOptions
            });
        }



    });


</script>







<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q24_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q24_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q24_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q24_chart").length) {
            var barChartCanvas_study_abroadE = $("#q24_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q23_data as $ns) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var NativeEnglishPieData = {
            datasets: [{
                data: [
                    <?php
                    foreach ($q23_data as $ns) {
                        echo "" . $ns["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                <?php
                foreach ($q23_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
        };

        var NativeEnglishPieOptions = {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };


        if ($("#q23_chart2").length) {
            var NativeEnglishpieChartCanvas = $("#q23_chart2").get(0).getContext("2d");
            var NativeEnglishpieChart = new Chart(NativeEnglishpieChartCanvas, {
                type: 'pie',
                data: NativeEnglishPieData,
                options: NativeEnglishPieOptions
            });
        }



    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q25_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q25_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q25_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q25_chart").length) {
            var barChartCanvas_study_abroadE = $("#q25_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>

<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q26_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q26_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q26_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q26_chart").length) {
            var barChartCanvas_study_abroadE = $("#q26_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q24_data as $ns) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var NativeEnglishPieData = {
            datasets: [{
                data: [
                    <?php
                    foreach ($q24_data as $ns) {
                        echo "" . $ns["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
            }],

            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                <?php
                foreach ($q24_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
        };

        var NativeEnglishPieOptions = {
            responsive: true,
            animation: {
                animateScale: true,
                animateRotate: true
            }
        };


        if ($("#q24_chart2").length) {
            var NativeEnglishpieChartCanvas = $("#q24_chart2").get(0).getContext("2d");
            var NativeEnglishpieChart = new Chart(NativeEnglishpieChartCanvas, {
                type: 'pie',
                data: NativeEnglishPieData,
                options: NativeEnglishPieOptions
            });
        }



    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q28_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q28_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q28_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q28_chart").length) {
            var barChartCanvas_study_abroadE = $("#q28_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>


<script type="application/javascript">
    $(function () {
        var colors = [

            <?php
            foreach ($q29_data as $sa) {
                $r = rand(0, 255);
                $b = rand(0, 255);
                $g = rand(0, 255);
                $a = 0.5;
                echo "'rgba($r, $g, $b, $a)',";
            }
            ?>

        ];


        var data = {
            labels: [
                <?php
                foreach ($q29_data as $sa) {
                    echo "'" . $sa["details"] . "',";
                }
                ?>
            ],
            datasets: [{
                label: '# of Participants',
                data: [
                    <?php
                    foreach ($q29_data as $sa) {
                        echo "" . $sa["total"] . ",";
                    }
                    ?>
                ],

                backgroundColor: colors,
                borderColor: colors,
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: false
            },
            elements: {
                point: {
                    radius: 0
                }
            }

        };


        if ($("#q29_chart").length) {
            var barChartCanvas_study_abroadE = $("#q29_chart").get(0).getContext("2d");
            // This will get the first returned node in the jQuery collection.
            var barChart_studyabroadE = new Chart(barChartCanvas_study_abroadE, {
                type: 'bar',
                data: data,
                options: options
            });
        }
    });


</script>

<script type="text/javascript">

</script>


    <!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="assets/chart.js/dist/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="js/misc.js"></script>
<script src="js/material.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="js/chart.js"></script>
<!-- End custom js for this page-->
</body>

</html>
