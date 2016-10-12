# Enables translation to the rest-api

This plugin allows you to translate rest-api plugin before merging into WordPress core.

## How to add translation

Create a `.po` file for your locale.

```
$ cp languages/rest-api.pot languages/rest-api-$locale.po
```

Translate it and generate `.mo`.

```
$ msgfmt languages/rest-api-$locale.po -o languages/rest-api-$locale.mo
```

`$locale` should be your locale like `de_DE`.
