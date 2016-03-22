# jade-filter-markdown

Implement parsers from https://github.com/cebe/markdown to make **markdown**
available as a jade-php filter.

```jade
section
  :markdown
    ![example image](example-image.jpg "An exemplary image")
```

Filters:
 - :markdown
 - :github-markdown
 - :inline-github-markdown
 - :markdown-extra
