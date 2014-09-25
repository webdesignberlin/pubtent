<?php
/**
 * Created by PhpStorm.
 * User: mg
 * Date: 24.09.2014
 * Time: 23:45
 */
?>

<form>
    <fieldset>
        <legend>Systemkonfiguration</legend>
        <label for="setup-system-sitename">Seitenname</label>
        <input type="text" name="setup-system-sitename" id="setup-system-sitename">

        <label for="setup-system-user--admin">Administrationsbenutzer</label>
        <input type="text" name="setup-system-user--admin" id="setup-system-user--admin" required="required">

        <label for="setup-system-user--admin__password">Administrationspasswort</label>
        <input type="password" name="setup-system-user--admin__password" id="setup-system-user--admin__password" required="required">

        <label for="setup-system-user--admin__email">Administrator Email</label>
        <input type="email" name="setup-system-user--admin__email" id="setup-system-user--admin__email" required="required">

        <input type="submit" name="setup-system-submit" id="setup-system-submit" value="Installation abschließen">
    </fieldset>
</form>
