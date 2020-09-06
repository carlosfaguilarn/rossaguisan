---
layout: docs
title: Typography
description: Learn more about the typography that is used in Pixel Bootstrap UI Kit
group: foundation
toc: true
---

Pixel uses Nunito Sans from Google fonts by default. You can change the font by importing another font from Google Fonts and changing the `$font-family-base` Sass variable value from `_variables.scss`.

## Headings

{{< example >}}
<h1>h1. Bootstrap heading</h1>
<h2>h2. Bootstrap heading</h2>
<h3>h3. Bootstrap heading</h3>
<h4>h4. Bootstrap heading</h4>
<h5>h5. Bootstrap heading</h5>
<h6>h6. Bootstrap heading</h6>
{{< /example >}}

### Display headings

Use `.display-1-*`, `.display-2-*` (eg. `.display-1-lg`, `.display-2-sm`) to increase the font size of text elements based on screen size.

{{< example >}}
<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>
{{< /example >}}

## Paragraphs

{{< example >}}
<p>Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</p>
<p>My favorite things in life don’t cost any money. It’s really clear that the most precious resource we all have is time.</p>
{{< /example >}}

### Lead Paragraphs

{{< example >}}
<p class="lead">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</p>
{{< /example >}}

## Inline modifiers

{{< example >}}
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
{{< /example >}}

## Blockquotes

{{< example >}}
<blockquote class="blockquote text-center">
    "Themesberg makes beautiful products to help people with creative ideas succeed. Our company empowers millions of people."
<footer class="blockquote-footer mt-3 text-primary">Jason Doe</footer>
</blockquote>
{{< /example >}}

## Lists

### Unordered list

{{< example >}}
<ul>
    <li>Minutes of the last meeting</li>
    <li>Do we need yet more meetings?</li>
    <li>Any other business
        <ul>
            <li>Programming</li>
            <li>Web Design</li>
            <li>Database</li>
        </ul>
    </li>    
    <li>Something funny</li>
</ul>
{{< /example >}}

### Ordered list

{{< example >}}
<ol>
    <li>Minutes of the last meeting</li>
    <li>Do we need yet more meetings?</li>
    <li>Any other business
        <ol>
            <li>Programming</li>
            <li>Web Design</li>
            <li>Database</li>
        </ol>
    </li>    
    <li>Something funny</li>
</ol>
{{< /example >}}
