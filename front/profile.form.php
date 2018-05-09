<?php
/*
 LICENSE

 This file is part of GLPI.

 GLPI is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 GLPI is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with GLPI; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 --------------------------------------------------------------------------
// ----------------------------------------------------------------------
// Original Author of file: CAILLAUD Xavier
// Adapted by Eric Feron
// Purpose of file: plugin archisw v1.0.0 - GLPI 0.80
// ----------------------------------------------------------------------
 */

include ('../../../inc/includes.php');

checkRight("profile","r");

$prof=new PluginArchiswProfile();
//Save profile
if (isset ($_POST['update'])) {
	$prof->update($_POST);
	glpi_header($_SERVER['HTTP_REFERER']);
}

?>