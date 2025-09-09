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

/**
 * Provides the information to restore forms submissions
 *
 * @package    assignsubmission_forms
 * @copyright  2025 Bas Brands <bas@sonsbeekmedia.nl>, Jonas Rehkopp <jonas.rehkopp@polizei.nrw.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class restore_assignsubmission_forms_subplugin extends restore_subplugin {

    /**
     * Returns array the paths to be handled by the subplugin at assignment level
     * @return array
     */
    protected function define_submission_subplugin_structure() {
        $paths = [];

        $elename = $this->get_namefor('forms_value');
        $elepath = $this->get_pathfor('/submission_forms/forms_value');
        $paths[] = new restore_path_element($elename, $elepath);

        return $paths;
    }

    /**
     * Processes one assignsubmission_forms_value element
     *
     * @param mixed $data
     */
    public function process_assignsubmission_forms_forms_value($data) {
        global $DB;

        $data = (object)$data;
        $oldid = $data->id;

        $data->assignment = $this->get_new_parentid('assign');
        $oldsubmissionid = $data->submissionid;
        // The mapping is set in the restore for the core assign activity
        // when a submission node is processed.
        $data->submissionid = $this->get_mappingid('submission', $data->submissionid);

        // Update usermodified if user mapping exists.
        if (!empty($data->usermodified)) {
            $data->usermodified = $this->get_mappingid('user', $data->usermodified);
        }

        $newitemid = $DB->insert_record('assignsubmission_forms_value', $data);

        // Set mapping for potential file areas (if any are added in future).
        $this->set_mapping('assignsubmission_forms_value', $oldid, $newitemid, false, null, $this->task->get_old_contextid());
    }
}
