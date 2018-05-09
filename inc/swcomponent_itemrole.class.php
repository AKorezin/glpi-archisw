<?php
/*
 * @version $Id: HEADER 2011-03-12 18:01:26 tsmr $
 -------------------------------------------------------------------------
 GLPI - Gestionnaire Libre de Parc Informatique
 Copyright (C) 2003-2010 by the INDEPNET Development Team.

 http://indepnet.net/   http://glpi-project.org
 -------------------------------------------------------------------------

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

if (!defined('GLPI_ROOT')) {
	die("Sorry. You can't access directly to this file");
}

class PluginArchiswSwcomponent_Itemrole extends CommonDropdown {

   static $rightname = "plugin_archisw";
   var $can_be_translated  = true;
   
   static function getTypeName($nb=0) {

      return _n('Link role','Link roles',$nb);
   }
   /**
    * {@inheritDoc}
    * @see CommonTreeDropdown::getAdditionalFields()
    */
   public function getAdditionalFields() {
      return [
            [
                  'name'      => 'itemtype',
                  'type'      => 'text',
                  'label'     => __('Type', 'archisw'),
                  'list'      => false
            ]
		];
   }
   function getSearchOptions() {
	  $opt = CommonDropdown::getSearchOptions();
//      $sopt['common'] = __("App structures", "archisw");

      $opt[2400]['table']       = $this->getTable();
      $opt[2400]['field']       = 'itemtype';
      $opt[2400]['name']        = __("Type");
      $opt[2400]['datatype']    = 'text';

      return $opt;
   }
}

?>