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
 * Behat custom steps and configuration for assignsubmission_forms.
 *
 * @package   assignsubmission_forms
 * @category  test
 * @copyright 2025 Bas Brands <bas@sonsbeekmedia.nl>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../../../../lib/behat/behat_base.php');

/**
 * Behat custom steps and configuration for assignsubmission_forms.
 *
 * @package   assignsubmission_forms
 * @category  test
 * @copyright 2025 Bas Brands <bas@sonsbeekmedia.nl>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class behat_assignsubmission_forms extends behat_base {

    /**
     * Set the field name for a specific form field by its field ID.
     *
     * @Given /^I set the field name for field "([^"]*)" to "([^"]*)"$/
     * @param string $fieldid The field ID (data-fieldid attribute)
     * @param string $value The value to set
     */
    public function i_set_the_field_name_for_field($fieldid, $value) {
        $xpath = "//div[@data-fieldid='{$fieldid}']//input[@name='fieldname']";
        $element = $this->find('xpath', $xpath);
        $element->setValue($value);
    }

    /**
     * Set the field type for a specific form field by its field ID.
     *
     * @Given /^I set the field type for field "([^"]*)" to "([^"]*)"$/
     * @param string $fieldid The field ID (data-fieldid attribute)
     * @param string $value The value to set
     */
    public function i_set_the_field_type_for_field($fieldid, $value) {
        $xpath = "//div[@data-fieldid='{$fieldid}']//select[@name='fieldtype']";
        $element = $this->find('xpath', $xpath);
        $element->selectOption($value);
    }

    /**
     * Set the required checkbox for a specific form field by its field ID.
     *
     * @Given /^I set field "([^"]*)" as required$/
     * @param string $fieldid The field ID (data-fieldid attribute)
     */
    public function i_set_field_as_required($fieldid) {
        $xpath = "//div[@data-fieldid='{$fieldid}']//input[@name='fieldrequired']";
        $element = $this->find('xpath', $xpath);
        $element->check();
    }

    /**
     * Set the required checkbox for a specific form field by its field ID as not required.
     *
     * @Given /^I set field "([^"]*)" as not required$/
     * @param string $fieldid The field ID (data-fieldid attribute)
     */
    public function i_set_field_as_not_required($fieldid) {
        $xpath = "//div[@data-fieldid='{$fieldid}']//input[@name='fieldrequired']";
        $element = $this->find('xpath', $xpath);
        $element->uncheck();
    }

    /**
     * Add a new field to the form.
     *
     * @Given /^I add a new form field$/
     */
    public function i_add_a_new_form_field() {
        $xpath = "//button[@data-action='add-field']";
        $element = $this->find('xpath', $xpath);
        $element->click();
    }
}
