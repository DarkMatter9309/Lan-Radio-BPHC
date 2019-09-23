<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPLv3)
 * Copyright 2001 - 2017 Ampache.org
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

?>
                </div>
                <div style="clear:both;">
                </div>
            </div>
        </div> <!-- end id="maincontainer"-->

       
        <?php if (AmpConfig::get('ajax_load') && (!isset($_SESSION['login']) || !$_SESSION['login'])) {
            ?>
        <div id="webplayer-minimize">
          <a href="javascript:TogglePlayerVisibility();" title="Show/Hide Player"><img src="<?php echo AmpConfig::get('web_path') ?>/images/minimize.png" border="0" /></a>
        </div>
        <div id="webplayer"></div>
        <?php
            require_once AmpConfig::get('prefix') . UI::find_template('uberviz.inc.php');
        }
        ?>
    </body>
</html>