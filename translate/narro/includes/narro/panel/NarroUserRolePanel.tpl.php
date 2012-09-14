<?php
    /**
     * Narro is an application that allows online software translation and maintenance.
     * Copyright (C) 2008-2011 Alexandru Szasz <alexxed@gmail.com>
     * http://code.google.com/p/narro/
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
     * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any
     * later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
     * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
     * more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the
     * Free Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
     */

    $_CONTROL->dtgUserRole->Render();
    if ($_CONTROL->blnCanManageSomeRoles) {
    ?>
        <hr />
        <?php echo t('Language') . ':'; $_CONTROL->lstLanguage->Render() ?>
        <?php echo t('Project') . ':'; $_CONTROL->lstProject->Render() ?>
        <?php echo t('Role') . ':'; $_CONTROL->lstRole->Render() ?>
        <?php $_CONTROL->btnAddRole->Render() ?>
    <?php
    }