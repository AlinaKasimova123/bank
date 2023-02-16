<?php
require_once('../config//DBConnection.php');
try {

    if($_POST['fio'] == "" && $_POST['person_inn']) {
        exit;
    }
        $fio = htmlspecialchars($_POST['fio']);
        $person_inn = htmlspecialchars($_POST['person_inn']);
        if($_POST['birth_date']){
            $birth_date = htmlspecialchars($_POST['birth_date']);
        }
        else {
            $birth_date = null;
        }
        $series = htmlspecialchars($_POST['series']);
        $number = htmlspecialchars($_POST['number']);
        if($_POST['issue_date']){
        $issue_date = htmlspecialchars($_POST['issue_date']);
        }
        else {
            $issue_date = null;
        }
        $organization_name = htmlspecialchars($_POST['organization_name']);
        $address = htmlspecialchars($_POST['address']);
        $ogrn = htmlspecialchars($_POST['ogrn']);
        $organization_inn = htmlspecialchars($_POST['organization_inn']);
        $kpp = htmlspecialchars($_POST['kpp']);
        $opening_date = htmlspecialchars($_POST['opening_date']);
        $closing_date = htmlspecialchars($_POST['closing_date']);
        $term = htmlspecialchars($_POST['term']);
        $sum = htmlspecialchars($_POST['sum']);
        $bet = htmlspecialchars($_POST['bet']);
        $capitalization_frequency = htmlspecialchars($_POST['capitalization_frequency']);
        $stmt = DBConnClass::run()->prepare("INSERT INTO project (fio, person_inn, birth_date, series, number, issue_date,
        organization_name, address, ogrn, organization_inn, kpp, opening_date, closing_date, term, sum, bet, capitalization_frequency) 
        VALUES (:fio, :person_inn, :birth_date, :series, :number, :issue_date, :organization_name, :address, :ogrn, :organization_inn, 
        :kpp, :opening_date, :closing_date, :term, :sum, :bet, :capitalization_frequency)");
        $stmt->bindParam(":fio", $fio);
        $stmt->bindParam(":person_inn", $person_inn);
        $stmt->bindParam(":birth_date", $birth_date);
        $stmt->bindParam(":series", $series);
        $stmt->bindParam(":number", $number);
        $stmt->bindParam(":issue_date", $issue_date);
        $stmt->bindParam(":organization_name", $organization_name);
        $stmt->bindParam(":address", $address);
        $stmt->bindParam(":ogrn", $ogrn);
        $stmt->bindParam(":organization_inn", $organization_inn);
        $stmt->bindParam(":kpp", $kpp);
        $stmt->bindParam(":opening_date", $opening_date);
        $stmt->bindParam(":closing_date", $closing_date);
        $stmt->bindParam(":term", $term);
        $stmt->bindParam(":sum", $sum);
        $stmt->bindParam(":bet", $bet);
        $stmt->bindParam(":capitalization_frequency", $capitalization_frequency);
        $stmt->execute();
        header("Location:../index.php");
}
catch(Exception $exc){
    echo 'Выброшено исключение: ',  $exc->getMessage(), "\n";
}
