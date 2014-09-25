<?php
/**
 * Created by PhpStorm.
 * User: mg
 * Date: 22.09.2014
 * Time: 04:45
 */
?>

<form>
    <fieldset>
        <legend>Installationsdaten</legend>
        <label for="setup-db-databasename">Datenbankname</label>
        <input type="text" name="setup-db-databasename" id="setup-db-databasename" required="required">

        <label for="setup-db-databaseuser">Datenbankbenutzer</label>
        <input type="text" name="setup-db-databaseuser" id="setup-db-databaseuser" required="required">

        <label for="setup-db-databasepassword">Datenbankpasswort</label>
        <input type="text" name="setup-db-databasepassword" id="setup-db-databasepassword" required="required">

        <label for="setup-db-databasehost">Datenbank Host</label>
        <input type="text" name="setup-db-databasehost" id="setup-db-databasehost" required="required">

        <input type="submit" name="setup-db-submit" id="setup-db-submit" value="Weiter">
    </fieldset>
</form>
