<?php
// Dodavanje knjige

    $error_msg = '';
    $success_msg = '';
    
    include('../init.php');
    
    if(isset($_GET['add'])){
        $sinopsis = $_GET['sinopsis'];
        $naziv_filma= $_GET['naziv_filma'];
        $tip = $_GET['tip'];
        $reditelj = $_GET['reditelj'];
        $uloge = $_GET['uloge'];
        $trajanje = $_GET['trajanje'];
        $termini = $_GET['termini'];
        
        if(empty($sinopsis = $_GET['sinopsis']) || empty($naziv_filma = $_GET['naziv_filma']) || empty($tip = $_GET['tip'] || empty($reditelj = $_GET['reditelj'])  || empty($uloge = $_GET['uloge'])  || empty($trajanje = $_GET['trajanje']) || empty($termini = $_GET['termini']))){
            
            $error_msg = "Input polja su obavezna, molimo da popunite ista.";
        
        }else{
            
            $sql_add = mysqli_query($db, "INSERT INTO filmovi(sinopsis, naziv_filma, tip, reditelj, uloge, trajanje, termini) VALUES ('$sinopsis', '$naziv_filma', '$tip', '$reditelj','$uloge','$trajanje','$termini') ");
            
            $success_msg = "Film uspjesno dodan.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
</head>
<body/>
 
 <!-- Glavna sekcija -->
<section>
    <div class="container">
        <div class="row text-center header">
            <hr />
            <p><?= $success_msg; ?></p>
            <p><?= $error_msg; ?></p>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3>Novi film</h3>
                <div class="service-wrapper">
                    <form method="get" action="create_film.php">
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Sinopsis</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <textarea class="form-control" type="text" name="sinopsis" rows="5" cols="60"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Naziv filma</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="naziv_filma">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Žanr</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="tip">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Reditelj</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="reditelj">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Uloge</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="uloge">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Trajanje</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="tranjanje">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="naslov" class="cols-sm-2 control-label">Termini</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="termini">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group ">
                            <input type="submit" name="add" value="Dodaj film">
                        </div>
                    </form>
                    <hr /> 
                    <p>Back to <a href="home.php">Admin panel</a></p>   
                </div>
            </div>
        </div>
    </div>
</section>