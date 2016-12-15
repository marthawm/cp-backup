# Conventions for CodePamoja website

To make sure the front-end is as DRY as possible we discussed some conventions. 

### SASS (folder) structure:

The SASS folder structure that will be used in the CodePamoja project will be according to the directory structure used on http://thesassway.com/beginner/how-to-structure-a-sass-project:
```
- The *modules* directory is reserved for Sass code that doesn't cause Sass to actually output CSS. Things like mixin declarations, functions, and variables.

- The *partials* directory is where the meat of the CSS is constructed. A lot of folks like to break their stylesheets into header, content, sidebar, and footer components (and a few others).

- The *vendor* directory is for third-party CSS. jQuery UI and a color picker are examples of CSS that you place in the vendor directory. As a general rule I make it a point not to modify files in my vendor directory.
```

All SASS files should meet the following requirements: 
- All files will be imported into the style.sccs file using @import.
- File names should start with an underscore (i.e. _header.scss)
- File names should be clear and descriptive and not too many words
- Code inside the files should be clean: No out-commented (old) code or unnecessary comments
- Code should be readable for others: use spaces and breaks.

### Naming conventions
As a naming convention the noun-adjective naming will be used according to http://thesassway.com/advanced/modular-css-naming-conventions#nouns-and-adjectives:

```
Objects traditionally are nouns. They take the form of:

.noun {}            // examples: .button, .menu, .textbox, .header

Parent-Child relationships are also nouns:

.noun {}            // parent: .post
.noun-noun {}       // child:  .post-title

Subclasses are often preceeded by a adjective describing the type of object:

.adjective-noun {}  // example: .dropdown-button

And Modifiers are almost always adjectives (or are used descriptively):

.is-state {}        // state: is-selected, is-hidden
.adjective {}       // examples: .left, .right, .block, .inline
```

Names should also meet the following requirements: 
- Names used in HTML/CSS/SASS should be in snake-case
- Names used in JavaScript should be in camel case
- Names should descriptive
- Names should be as short as possible (.button = .btn), but should remain clear (see point above)
- (Names should not be used twice)

General practices: 
- Always check for Definition of Done (DoD)
- Use git structure properly
- Do not get stuck on one task too long, ask help if needed
- Review each other's code extensively to avoid too much refactoring afterwards (this is time consuming)

