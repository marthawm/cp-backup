PHP CODING CONVENTION DOCUMENTATION

1. LINE BREAKS
-adding a line break after most statements is common practice.Variable definitions, if blocks, array items and so on should be on separate lines.*

$my_value = 'Me';
$your_value = 'You';
$their_value = 'Them';

if ( $my_value == 'You' ) {
  echo 'It seems like you are mixed up with me
}

2. BRACES
Braces should always be placed on a line on their own; again there are no exceptions to this rule. Braces should also align properly (use two spaces to achieve this) so a closing brace is always in the same column as the corresponding opening brace. For example:

if ( condition )
{
  while ( condition )
  {
    foo();
  }
}

3. INDENTATION
Use tabs at the beginning of lines, and use spaces for mid-line indentation.

4. SPACE USAGE
Remove all trailing spaces from line endings. Empty lines with tabbed or non-breaking spaces is also common.Use spaces to make your code readable, most commonly within parentheses and Insert a break after an opening brace and before a closing brace, except when typecasting.

5. QUOTES
Quotes are mostly used when placing attributes and their values. You are free to use single or double quotes. Be consistent, though. 

6. CLOSING TAGS
The XHTML specification requires that you close all tags. Void (or self-closing) elements must be closed by adding a forward slash just before the last angled bracket.Exactly one space must precede the forward slash, according to the official specification.

7. NAMING CONVENTIONS
Use lowercase characters only.
Separate words within a selector with a hyphen.
Give your selectors human-readable names.

8. PROPERTIES AND VALUES
Use shorthand versions of properties wherever possible, except when overwriting a previously defined property.
Use lowercase HEX code for colors wherever possible. If appropriate, use the shorter version.
Insert a space after the colon following a property.
Always use lowercase characters, except when an uppercase character is required, such as with font names and vendor-specific properties.

9. PLUGINS 
9.1 Naming 
Plugins may be named whatever you’d like, but obviously it should bear some relevance to what the plugin does. Try to choose a unique name.

9.2 Plugin FIles
Your plugin requires at least a main file with a unique name (i.e. unique across the plugin repository), related to the plugin’s function. 

9.3 Information About Your Plugin 
A bit of information about your plugin is needed. Without it, your plugin wouldn’t be detected in the administration section. While only the “Plugin Name” field needs to be filled in, filling in the other fields will make your plugin look nicer and more complete.
/*
Plugin Name: The Missing Task Manager
Plugin URI: http://tmtm.com
Description: A simple task manager for your WordPress website
Version: 1.2
Author: Good Guy Greg
Author URI: http://imtheauthor.com
License: GPL2
*/

9.4 Handling Data
There are three methods of storing and retrieving data in a plugin:
-Store website-specific data via the options mechanism;
-Store post-specific data using the post meta mechanism (i.e. custom fields);
-Store data not associated directly with the installation or with individual posts in a separate database table.

10. CREATING NEW DATABASE TABLES
Make sure to secure the queries to this table just as you do with regular queries.
Use the $wpdb class and the functions that it makes available. 

11. NAMING
Class names should typically be nouns, functions should typically be verbs, and variables, attributes, and arguments should explain the purpose that they serve within the context of the class or function in which they are to be defined. It's all about making the code as readable as possible.
For example, you have a *class* called Local_File_Operations
According to the WordPress Coding Standards, classes should follow the following conventions:

11.1 Classes
Class names should use capitalized words separated by underscores.
Any acronyms should be all uppercase.

// The class definition
class Local_File_Manager {
 
    public function open_file( $filename ) {
        // Function implementation
    }
}
// How we'd use this code
$file_manager = new Local_File_Manager();
$file_manager->open_file( 'foo.txt' );

11.2 Functions
how *functions* should be written within the context of WordPress development. The Coding Standards state:
Use lowercase letters in variable, action, and function names (never camelCase). 	
Separate words via underscores. Don't abbreviate variable names un-necessarily; let the code be unambiguous and self-documenting.
Code comments should be used liberally.

11.3 Variable Names
Variable names actually aren't much different from function names other than they represent a single value or a reference to a particular object.
Don't abbreviate variable names un-necessarily. Let the code be unambiguous and self-documenting.
The naming conventions still follow what you'd expect:
-Lower case (versus camelCase)
-Separate spaces with underscores
-One other convention that some developers use is what's known as Hungarian Notation which is where the type of value the variable stores is prefixed in front of the variable.

For example:
Strings will often be represented as $str_firstname
Numbers will be written as $i_tax or $num_tax
Arrays may be written as $arr_range
...and so on

11.4 File Names
In keeping consistent with the theme of making our code as readable and self-documenting as possible, it makes sense that we pull this through our source code all the way to the files that we're going to make up our theme, plugin, or application.

According to the Coding Standards:
Files should be named descriptively using lowercase letters. Hyphens should separate words.
In keeping consistent with our previous example, let's say that we're working with Local_File_Operations then the file would be named class-local-file-operations.php.

11.5 Function Arguments
When it comes to passing function arguments, it's important to remember that if function names describe the actions that are being taken by the class, then the argument should represent on what the function is actually operating.

From the Coding Standards:
Prefer string values to just true and false when calling functions.
Since boolean values can be unclear when passing values into a function, it makes it difficult to ascertain exactly what the function is doing.

For example, let's use the above example in a slightly different manner:

// The class definition
class Local_File_Manager {
 
    public function manage_file( $filename, true ) {
 
        if ( true ) {
            // Open the file
        } else {
            // Delete the file
        }
    }
}
 
// How we'd use this code
$file_manager = new Local_File_Manager();
$file_manager->manage_file( 'foo.txt', true );
Is more difficult to understand than, say, something like this:

// The class definition
class Local_File_Manager {
 
    public function open_file( $filename ) {
        // open the file
    }
 
    public function delete_file( $filename ) {
        // delete the file
    }
 
}
 
// How we'd use this code
$file_manager = new Local_File_Manager();
$file_manager->open_file( 'foo.txt' );
$file_manager->delete_file( 'foo.txt' );
On top of that, remember that arguments being passed into functions are still variables in and of themselves so they are subject to the variable naming conventions that we've detailed above.

12. INLINE / INDEPENDENT DOCUMENTATION
What Should Be Documented
PHP documentation in WordPress mostly takes the form of either formatted blocks of documentation or inline comments.
The following is a list of what should be documented in WordPress files:
Functions and class methods
Classes
Class members (including properties and constants)
Requires and includes
Hooks (actions and filters)
Inline comments
File headers
Constants

Code Refactoring: It is permissible to space out the specific action or filter lines being documented to meet the coding standards, but do not refactor other code in the file.

DocBlock Formatting
The examples provided in each section below show the expected DocBlock content and tags, as well as the exact formatting. Use spaces inside the DocBlock, not tabs, and ensure that items in each tag group are aligned according to the examples.

-Functions & Class Methods #
Functions and class methods should be formatted as follows:
Summary: A brief, one sentence explanation of the purpose of the function spanning a maximum of two lines. Use a period at the end.
Description: A supplement to the summary, providing a more detailed description. Use a period at the end of sentences.

-Requires and Includes
Files required or included should be documented with a summary description DocBlock. Optionally, this may apply to inline get_template_part() calls as needed for clarity.

-Hooks (Actions and Filters) 
Both action and filter hooks should be documented on the line immediately preceding the call to do_action() or do_action_ref_array(), or apply_filters() or apply_filters_ref_array(), and formatted as follows:
Summary: A brief, one line explanation of the purpose of the hook. Use a period at the end.
Description: A supplemental description to the summary, if warranted.

If a hook is in the middle of a block of HTML or a long conditional, the DocBlock should be placed on the line immediately before the start of the HTML block or conditional, even if it means forcing line-breaks/PHP tags in a continuous line of HTML.
Tools to use when searching for the version a hook was added are svn blame, or the WordPress Hooks Database for older hooks. If, after using these tools, the version number cannot be determined, use @since Unknown.
Top ?

-Duplicate Hooks #
Occasionally, hooks will be used multiple times in the same or separate core files. In these cases, rather than list the entire DocBlock every time, only the first-added or most logically-placed version of an action or filter will be fully documented. Subsequent versions should have a single-line comment.
For actions:
/** This action is documented in path/to/filename.php */

For filters:
/** This filter is documented in path/to/filename.php */
To determine which instance should be documented, search for multiples of the same hook tag, then use svn blame to find the first use of the hook in terms of the earliest revision. If multiple instances of the hook were added in the same release, document the one most logically-placed as the “primary”.
Top ?

-Inline Comments 
Inline comments inside methods and functions should be formatted as follows:

**new document from Mathenge**

The key words "MUST", "MUST NOT", "REQUIRED", "SHALL", "SHALL NOT", "SHOULD", "SHOULD NOT", "RECOMMENDED", "MAY", and "OPTIONAL" in this document are to be interpreted as described in RFC 2119.

1. Overview

Files MUST use only <?php and <?= tags.
Files MUST use only UTF-8 without BOM for PHP code.
Files SHOULD either declare symbols (classes, functions, constants, etc.) or cause side-effects (e.g. generate output, change .ini settings, etc.) but SHOULD NOT do both.
Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4].
Class names MUST be declared in StudlyCaps.
Class constants MUST be declared in all upper case with underscore separators.
Method names MUST be declared in camelCase.
2. Files

2.1. PHP Tags

PHP code MUST use the long <?php ?> tags or the short-echo <?= ?> tags; it MUST NOT use the other tag variations.

2.2. Character Encoding

PHP code MUST use only UTF-8 without BOM.

2.3. Side Effects

A file SHOULD declare new symbols (classes, functions, constants, etc.) and cause no other side effects, or it SHOULD execute logic with side effects, but SHOULD NOT do both.

The phrase "side effects" means execution of logic not directly related to declaring classes, functions, constants, etc., merely from including the file.

"Side effects" include but are not limited to: generating output, explicit use of require or include, connecting to external services, modifying ini settings, emitting errors or exceptions, modifying global or static variables, reading from or writing to a file, and so on.

The following is an example of a file with both declarations and side effects; i.e, an example of what to avoid:

<?php
// side effect: change ini settings
ini_set('error_reporting', E_ALL);

// side effect: loads a file
include "file.php";

// side effect: generates output
echo "<html>\n";

// declaration
function foo()
{
    // function body
}
The following example is of a file that contains declarations without side effects; i.e., an example of what to emulate:

<?php
// declaration
function foo()
{
    // function body
}

// conditional declaration is *not* a side effect
if (! function_exists('bar')) {
    function bar()
    {
        // function body
    }
}
3. Namespace and Class Names

Namespaces and classes MUST follow an "autoloading" PSR: [PSR-0, PSR-4].

This means each class is in a file by itself, and is in a namespace of at least one level: a top-level vendor name.

Class names MUST be declared in StudlyCaps.

Code written for PHP 5.3 and after MUST use formal namespaces.

For example:

<?php
// PHP 5.3 and later:
namespace Vendor\Model;

class Foo
{
}
Code written for 5.2.x and before SHOULD use the pseudo-namespacing convention of Vendor_ prefixes on class names.

<?php
// PHP 5.2.x and earlier:
class Vendor_Model_Foo
{
}
4. Class Constants, Properties, and Methods
The term "class" refers to all classes, interfaces, and traits.

4.1. Constants
Class constants MUST be declared in all upper case with underscore separators. For example:

<?php
namespace Vendor\Model;

class Foo
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
}

4.2. Properties
This guide intentionally avoids any recommendation regarding the use of $StudlyCaps, $camelCase, or $under_score property names.

Whatever naming convention is used SHOULD be applied consistently within a reasonable scope. That scope may be vendor-level, package-level, class-level, or method-level.

4.3. Methods
Method names MUST be declared in camelCase().
