# Moodle Forms Submission Plugin

[![Moodle 4.5+](https://img.shields.io/badge/Moodle-4.5+-orange.svg)](https://moodle.org/)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
[![Version](https://img.shields.io/badge/Version-1.0-green.svg)](https://github.com/your-username/moodle-assignsubmission_forms/releases)

A flexible Moodle assignment submission plugin that allows teachers to create custom forms for student submissions. This plugin extends Moodle's assignment module with form building capabilities, enabling educators to collect data from students through customizable form fields.

## 🚀 Features

- **Form Builder**: Create custom forms with field management
- **Multiple Field Types**: Support for text, textarea, date, checkbox, and HTML content
- **Collapsible sections**: Organize form fields into logical groups using sections
- **Real-time Auto-save**: Automatic draft saving every 5 seconds to prevent data loss
- **Field Validation**: Built-in required field validation
- **Moodle 4.5+ Compatible**: Fully compatible with modern Moodle versions

## 📋 Supported Field Types

| Field Type | Description | Use Case |
|------------|-------------|----------|
| **Text** | Single-line text input | Names, titles, short answers |
| **Textarea** | Multi-line text input | Essays, descriptions, long-form content |
| **Date** | Date picker | Birth dates, deadlines, schedules |
| **Checkbox** | Selection boxes | Skills, interests, requirements |
| **HTML** | Static content display | Instructions, help text, formatting |

## 🛠️ Installation

### Prerequisites
- Moodle 4.5 or higher

### Installation Steps

1. **Download the Plugin**
   ```bash
   cd /path/to/moodle/mod/assign/submission/
   git clone https://github.com/your-username/moodle-assignsubmission_forms.git forms
   ```

2. **Install via Moodle Admin**
   - Log in as an administrator
   - Navigate to **Site administration** → **Notifications**
   - Follow the installation prompts
   - The plugin will be automatically installed

3. **Enable the Plugin**
   - Go to **Site administration** → **Plugins** → **Assignment submission plugins**
   - Enable "Form" submission plugin
   - Set as default if desired

## 📖 Usage

### For Teachers

#### Creating a Form-Based Assignment

1. **Create New Assignment**
   - Navigate to your course
   - Click **Add an activity or resource**
   - Select **Assignment**

2. **Configure Basic Settings**
   - Set assignment name, description, and due date
   - In **Submission types**, check **Form**
   - Save the assignment

3. **Design Your Form**
   - After saving, click **Edit assignment**
   - In the **Form** section, click **Configuration**
   - Use the field manager to add, remove, and configure fields
   - Organize fields into sections for better structure
   - Set required fields as needed

4. **Field Configuration Options**
   - **Field Name**: Descriptive label for students
   - **Field Type**: Choose from available field types
   - **Required**: Mark fields as mandatory
   - **Options**: Configure field-specific settings (e.g., text size, textarea dimensions)

#### Form Building Tips

- **Start Simple**: Begin with essential fields and add complexity later
- **Use Tabs**: Group related fields into logical sections
- **Clear Labels**: Use descriptive field names that students will understand
- **Required Fields**: Only mark truly essential fields as required
- **Test Your Form**: Submit a test response to ensure everything works as expected

### For Students

#### Submitting Assignments

1. **Access the Assignment**
   - Navigate to the assignment in your course
   - Click **Add submission**

2. **Fill Out the Form**
   - Complete all required fields (marked with *)
   - Use tabs to navigate between form sections
   - Your work is automatically saved every 5 seconds

3. **Submit Your Work**
   - Review your entries before final submission
   - Click **Save changes** to submit
   - You can edit your submission until the due date

## 🔧 Configuration

### Global Settings

Navigate to **Site administration** → **Plugins** → **Assignment submission plugins** → **Form**:

- **Enable by default**: Automatically enable forms for new assignments

### Assignment-Level Settings

Each assignment can have its own form configuration:

- **Field definitions**: Custom field types and properties
- **Tab organization**: Logical grouping of form sections
- **Validation rules**: Required fields and data constraints

## 🧪 Testing

Tests covered only by behat at the moment, [CI-auto testing features](https://github.com/bmbrands/moodle-assignsubmission_forms/actions) are installed on this repository

### Test Coverage

The plugin includes testing for:
- Form field creation and management
- Data validation and persistence
- User interface interactions

## 🐛 Bug Reports

Found a bug? Please [report it](https://github.com/bmbrands/moodle-assignsubmission_forms/issues)

## 🔄 Changelog

### Version 1.0 (2025-01-25)
- Initial release
- Basic form building capabilities
- Support for 5 field types
- Sectioned interface
- Auto-save functionality
- Moodle 4.5+ compatibility

---

**Made with ❤️ for the Moodle Community**

*This plugin enhances Moodle's assignment capabilities by providing flexible, user-friendly form creation tools for educators.*
