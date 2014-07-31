# SilverStripe Docuements Module

Adds document upload support for pages.

## Usage

Install via Composer (`plumpss/documents`), as a Git submodule or download the repo and export into a directory within your project. Run `dev/build` to update the database.

Add the `DocumentsPageExtension` to any Page classes you want documents to be uploaded to. E.g. to add to all pages:

```
Page
  extensions:
    - DocumentsPageExtension
```

The extension adds a 'Documents' tab in the CMS with a sortable grid field of documents that can be added to.

Documents are added as a `has_many` so can be accessed in PHP as `$page->Documents()` and in templates as `$Documents`.