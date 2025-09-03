@assignsubmission @assignsubmission_forms
Feature: In an assignment, students start a new forms assignment submission
  In order to add my forms submission
  As a student
  I need to submit my forms submission, receive feedback, and then improve my submission.

  Background:
    Given the following "courses" exist:
      | fullname | shortname | category | groupmode |
      | Course 1 | C1 | 0 | 1 |
    And the following "activity" exists:
      | activity                            | assign                  |
      | course                              | C1                      |
      | name                                | Test assignment name    |
      | intro                               | Submit your online text |
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
  Scenario: Teacher can setup a forms assignment
    When I am on the "Test assignment name" "assign activity editing" page logged in as teacher1
    And I expand all fieldsets
    And I should see "Form"
    And I set the field name for field "1" to "textarea 1"
    And I add a new form field
    And I set the field name for field "2" to "input 1"
    And I set the field type for field "2" to "Text input single line"
    And I click on "Save and display" "button"
    And I am on the "Test assignment name" "assign activity editing" page logged in as teacher1
    And I expand all fieldsets
    And I am on the "Test assignment name" "assign activity" page logged in as student1
    And I press "Add submission"
    Then I should see "textarea 1"
    And I set the field "textarea 1" to "This is my textarea text"
    And I should see "input 1"
    And I set the field "input 1" to "This is my input text"
    And I press "Save changes"
    And I should see "Submitted for grading"
