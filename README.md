# pug-filter-markdown

Implement parsers from https://github.com/cebe/markdown to make **markdown**
available as a Pug-php filter.

[![Latest Stable Version](https://poser.pugx.org/pug-php/pug-filter-markdown/v/stable.png)](https://packagist.org/packages/pug-php/pug-filter-markdown)
[![Build Status](https://travis-ci.org/pug-php/pug-filter-markdown.svg?branch=master)](https://travis-ci.org/pug-php/pug-filter-markdown)
[![Code Climate](https://codeclimate.com/github/pug-php/pug-filter-markdown/badges/gpa.svg)](https://codeclimate.com/github/pug-php/pug-filter-markdown)
[![Test Coverage](https://codeclimate.com/github/pug-php/pug-filter-markdown/badges/coverage.svg)](https://codeclimate.com/github/pug-php/pug-filter-markdown/coverage)
[![StyleCI](https://styleci.io/repos/61810069/shield?branch=master)](https://styleci.io/repos/61810069)

```pug
section
  :markdown
    ![example image](example-image.jpg "An exemplary image")
```

Filters:
 - :markdown
 - :github-markdown
 - :inline-github-markdown
 - :markdown-extra
