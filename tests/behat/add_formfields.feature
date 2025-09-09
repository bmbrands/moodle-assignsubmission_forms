@assignsubmission @assignsubmission_forms
Feature: Testing all form field types in assignsubmission_forms
  In order to test all available form field types
  As a teacher
  I need to be able to create and configure different field types in a forms assignment

  Background:
    Given the following "courses" exist:
      | fullname | shortname | category | groupmode |
      | Course 1 | C1 | 0 | 1 |
    And the following "activity" exists:
      | activity                            | assign                  |
      | course                              | C1                      |
      | name                                | Test form fields        |
      | intro                               | Test all form field types |
      | assignsubmission_onlinetext_enabled | 0                       |
      | assignsubmission_file_enabled       | 0                       |
      | assignsubmission_forms_enabled      | 1                       |
      | maxattempts                         | -1                      |
      | attemptreopenmethod                 | manual                  |
      | hidegrader                          | 1                       |
      | submissiondrafts                    | 0                       |
    And the following "users" exist:
      | username  | firstname  | lastname  | email                 |
      | teacher1  | Teacher    | 1         | teacher1@example.com  |
      | student1  | Student    | 1         | student1@example.com  |
    And the following "course enrolments" exist:
      | user      | course  | role            |
      | teacher1  | C1      | editingteacher  |
      | student1  | C1      | student         |

  @javascript
  Scenario: Teacher can setup all form field types
    When I am on the "Test form fields" "assign activity editing" page logged in as teacher1
    And I expand all fieldsets
    And I should see "Form"
    # Configure first field (textarea - default)
    And I set the field name for field "1" to "Essay Question"
    # Add text field
    And I add a new form field
    And I set the field name for field "2" to "Short Answer"
    And I set the field type for field "2" to "Text input single line"
    # Add HTML field
    And I add a new form field
    And I set the field name for field "3" to "Instructions"
    And I set the field type for field "3" to "Text paragraph, no input"
    # Add date field
    And I add a new form field
    And I set the field name for field "4" to "Due Date"
    And I set the field type for field "4" to "Date"
    # Add checkbox field
    And I add a new form field
    And I set the field name for field "5" to "Agreement"
    And I set the field type for field "5" to "Checkbox"
    And I set field "5" as required
    And I click on "Save and display" "button"
    Then I should see "Test form fields"
    And I am on the "Test form fields" "assign activity" page logged in as student1
    And I press "Add submission"
    Then I should see "Essay Question"
    And I set the field "Essay Question" to "This is my essay response with multiple paragraphs and detailed analysis."
    And I should see "Short Answer"
    And I set the field "Short Answer" to "Brief answer"
    And I should see "Instructions"
    And I should see "Due Date"
    And I should see "Agreement"
