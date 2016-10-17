# Enables translation for the rest-api

This plugin allows you to translate rest-api plugin before merging into WordPress core.

## Requires

* https://ja.wordpress.org/plugins/rest-api/

`rest-api.pot` was generated from rest-api 2.0-beta15.

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

## Screenshot

![](https://www.evernote.com/l/ABXQsd5K3lJG0YSi1JHtif09y84p3NTv6s0B/image.png)
