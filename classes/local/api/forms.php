<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace assignsubmission_forms\local\api;

/**
 * Class forms
 *
 * @package    assignsubmission_forms
 * @copyright  2025 Bas Brands <bas@sonsbeekmedia.nl>, Jonas Rehkopp <jonas.rehkopp@polizei.nrw.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class forms {

    /**
     * Get all the valid assignment field types
     *
     * @return array
     */
    public static function get_valid_fieldtypes() {
        return [
            [
                'name' => 'html',
                'label' => get_string('fieldtype_html', 'assignsubmission_forms'),
                'options' => []
            ],
            [
                'name' => 'text',
                'label' => get_string('fieldtype_text', 'assignsubmission_forms'),
                'options' => ['size' => '140']
            ],
            [
                'name' => 'textarea',
                'label' => get_string('fieldtype_textarea', 'assignsubmission_forms'),
                'options' => ['rows' => 10, 'cols' => 50]
            ],
            [
                'name' => 'date_selector',
                'label' => get_string('fieldtype_date', 'assignsubmission_forms'),
                'options' => ['startyear' => 2000, 'stopyear' => 2030]
            ],
            [
                'name' => 'advcheckbox',
                'label' => get_string('fieldtype_checkbox', 'assignsubmission_forms'),
                'options' => []
            ],
        ];
    }
}
