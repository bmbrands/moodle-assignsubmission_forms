# Moodle Forms Submission Plugin

[![Moodle 4.5+](https://img.shields.io/badge/Moodle-4.5+-orange.svg)](https://moodle.org/)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)
[![Version](https://img.shields.io/badge/Version-1.0-green.svg)](https://github.com/your-username/moodle-assignsubmission_forms/releases)

A flexible Moodle assignment submission plugin that allows teachers to create custom forms for student submissions. This plugin extends Moodle's assignment module with form building capabilities, enabling educators to collect structured data from students through customizable form fields.

## 🚀 Features

- **Form Builder**: Create custom forms with field management
- **Multiple Field Types**: Support for text, textarea, date, checkbox, and HTML content
- **Tabbed Interface**: Organize form fields into logical groups using tabs
- **Real-time Auto-save**: Automatic draft saving every 5 seconds to prevent data loss
- **Field Validation**: Built-in required field validation
- **Moodle 4.5+ Compatible**: Fully compatible with modern Moodle versions

## 📋 Supported Field Types

| Field Type | Description | Use Case |
|------------|-------------|----------|
| **Text** | Single-line text input | Names, titles, short answers |
| **Textarea** | Multi-line text input | Essays, descriptions, long-form content |
| **Date** | Date picker | Birth dates, deadlines, schedules |
| **Checkbox** | Multiple selection boxes | Skills, interests, requirements |
| **HTML** | Static content display | Instructions, help text, formatting |

## 🛠️ Installation

### Prerequisites
- Moodle 4.5 or higher
- PHP 8.0 or higher
- MySQL 5.7+ or PostgreSQL 10+

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
   - Organize fields into tabs for better structure
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

## 🏗️ Architecture

The plugin follows Moodle's standard architecture patterns:

```
assignsubmission_forms/
├── classes/                    # PHP classes with namespacing
│   ├── external/              # Web service endpoints
│   └── local/                 # Local plugin classes
│       ├── api/               # API functions
│       └── persistent/        # Data models
├── db/                        # Database schema and migrations
├── lang/                      # Internationalization files
├── templates/                 # Mustache templates
├── amd/                       # JavaScript modules
├── tests/                     # Unit and integration tests
├── backup/                    # Backup and restore functionality
├── version.php                # Plugin version information
├── locallib.php              # Main plugin logic
└── settings.php               # Admin settings
```

### Key Components

- **`assign_submission_forms`**: Main plugin class extending `assign_submission_plugin`
- **`forms` API class**: Manages field types and form operations
- **Persistent classes**: Handle data storage and retrieval
- **Mustache templates**: Render form interfaces
- **AMD modules**: Client-side form management and validation

## 🧪 Testing

### Running Tests

```bash
# Navigate to Moodle root
cd /path/to/moodle

# Run PHPUnit tests
vendor/bin/phpunit mod/assign/submission/forms/tests/
```

### Test Coverage

The plugin includes testing for:
- Form field creation and management
- Data validation and persistence
- User interface interactions
- Integration with Moodle core

## 🔒 Security Features

- **Input Validation**: All user input is validated and sanitized
- **Capability Checks**: Proper permission verification for all operations
- **CSRF Protection**: Built-in protection against cross-site request forgery
- **Data Escaping**: Output is properly escaped to prevent XSS attacks
- **Access Control**: Role-based access to form configuration and submission data

## 🌐 Internationalization

The plugin supports multiple languages through Moodle's standard internationalization system:

- **English**: Complete language pack included
- **German**: German translations available
- **Custom Languages**: Easy to add new language packs

## 📱 Browser Compatibility

- **Desktop**: Chrome 90+, Firefox 88+, Safari 14+, Edge 90+
- **Mobile**: iOS Safari 14+, Chrome Mobile 90+, Samsung Internet 15+
- **Tablet**: iPadOS Safari 14+, Chrome Tablet 90+

## 🤝 Contributing

We welcome contributions! Here's how you can help:

### Development Setup

1. **Fork the Repository**
   ```bash
   git clone https://github.com/your-username/moodle-assignsubmission_forms.git
   cd moodle-assignsubmission_forms
   ```

2. **Create a Feature Branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```

3. **Make Your Changes**
   - Follow Moodle coding standards
   - Add tests for new functionality
   - Update documentation as needed

4. **Submit a Pull Request**
   - Describe your changes clearly
   - Include test results
   - Reference any related issues

### Coding Standards

- Follow [Moodle Coding Guidelines](https://docs.moodle.org/dev/Coding_style)
- Use PSR-12 for PHP code formatting
- Include PHPDoc comments for all functions and classes
- Write unit tests for new functionality

## 🐛 Bug Reports

Found a bug? Please report it:

1. **Check Existing Issues**: Search [GitHub Issues](https://github.com/your-username/moodle-assignsubmission_forms/issues)
2. **Create New Issue**: Use the bug report template
3. **Provide Details**: Include Moodle version, PHP version, and steps to reproduce

## 📄 License

This project is licensed under the GNU General Public License v3.0 - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- **Moodle Community**: For the excellent platform and documentation
- **Contributors**: All developers who have contributed to this project
- **Testers**: Users who have provided feedback and bug reports

## 📞 Support

### Documentation
- [Moodle Documentation](https://docs.moodle.org/)
- [Plugin Wiki](https://github.com/your-username/moodle-assignsubmission_forms/wiki)

### Community Support
- [Moodle Forums](https://moodle.org/mod/forum/view.php?id=55)
- [GitHub Discussions](https://github.com/your-username/moodle-assignsubmission_forms/discussions)

### Professional Support
- **Bas Brands**: bas@sonsbeekmedia.nl
- **Jonas Rehkopp**: jonas.rehkopp@polizei.nrw.de

## 🔄 Changelog

### Version 1.0 (2025-01-25)
- Initial release
- Basic form building capabilities
- Support for 5 field types
- Tabbed interface
- Auto-save functionality
- Moodle 4.5+ compatibility

---

**Made with ❤️ for the Moodle Community**

*This plugin enhances Moodle's assignment capabilities by providing flexible, user-friendly form creation tools for educators.*
