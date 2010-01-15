<?php
/*
* $Id: apply_changes.php 40 2009-04-13 14:59:22Z iulia_bublea $
* Copyright (C) 2008 Voice Sistem SRL
*
* This file is part of opensips-cp, a free Web Control Panel Application for
* OpenSIPS SIP server.
*
* opensips-cp is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* opensips-cp is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
*/

require("../../../../config/tools/system/domains/local.inc.php");
require("../../../common/mi_comm.php");
require("lib/functions.inc.php");

$xmlrpc_host="";
$xmlrpc_port="";
$fifo_file="";
$comm_type="";


$mi_connectors=get_proxys_by_assoc_id($talk_to_this_assoc_id);

$command="domain_reload";


for ($i=0;$i<count($mi_connectors);$i++){


	$comm_type=params($mi_connectors[$i]);

	$message=mi_command($command, $errors, $status);
}



if ($errors) {

	echo($errors[0]);

	return;

} else {

	echo "Command successfully executed.";

	return;

}


?>
