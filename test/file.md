Seim's Markdown
===============

Overview
--------

Yet another "best Markdown modification".
With special characters for almost every language:
öäüß, 日本語, لوحة المفاتيح العربي

Every blank line (for coders `\n\n`) like the one right above this text, creates a new section. The Markdown parser will be run for each section separately. For e.g. the parser found out that this section is text only and wrapped it with a `<p>` tag. However it also found out that there are several `codes` within this section. These inline sections will be handled independently.

### Syntax

#### Strong and Emphasize 

- **strong** or __strong__ ( Cmd + B )
- *emphasize* or _emphasize_ ( Cmd + I )

**Sometimes I want a lot of text to be bold.
Like, seriously, a _LOT_ of text.
Make as many newlines as you want, but don't insert a blank line**

Did you know that this also works for **`code`**? Or this _`here`_. But you have to write it outside of the code, otherwise it will be handled as if those escape characters belong to the `_code_`.

#### Linebreak

End a line with two or more spaces will create a hard linebreak, called `<br />` in HTML.  
The line above ended with 2 spaces.
This one did without a space.

A blank line will put every text block in its own `<p>` element, depending on your CSS styles this has more spacing in between.



More than one blank line doesn't affect the appearance any further.

#### Blockquotes

> Right angle brackets `>` are used for block quotes.
> When you want to create a new line within a block quote,  
> just let the line above end with two or more spaces.

#### Links and Email

An E-Mail <example@example.com> link.

Simple inline link <http://chenluois.com>, another inline link [Smaller](http://smallerapp.com), one more inline link with title [Resize](http://resizesafari.com "a Safari extension").

A [reference style][id] link. Input id, then anywhere in the doc, define the link with corresponding id:

[id]: http://mouapp.com "Markdown editor on Mac OS X"

Titles ( or called tool tips ) in the links are optional.

#### Images

An inline image ![Smaller icon](http://smallerapp.com/favicon.ico "Title here"), title is optional.

A ![Resize icon][2] reference style image. When you leave the `!`, it becomes a [link][2], the reference style is the same.

Block line images are written in a separated line

![Block image](http://placehold.it/420x200)

If a block line image is smaller than the width of your page you can let the text be floating around the image. However this is more complex since it can mess up the layout when for e.g. the text is too short. Since there isn't "the one" solution, this has to be done with for e.g. JavaScript by your webpage.

![Block image][_plS]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu turpis, porta gravida sollicitudin eget, hendrerit nec felis. Aliquam eget magna a neque rutrum pellentesque ut ut dolor. Proin vehicula eget enim sed gravida. Cras vehicula placerat urna. Sed a massa molestie, fringilla dui nec, bibendum lorem. Nullam porttitor leo velit, vitae mattis elit semper eu. Nam libero leo, facilisis in magna sed, interdum vestibulum enim. Nulla facilisi. Maecenas eget erat id magna aliquam auctor ut non nisl. Nunc ultricies, lectus sit amet fermentum congue, sem diam tristique odio, vel viverra nibh ante ut magna. Praesent tempus feugiat felis eget pellentesque. Donec magna quam, eleifend eget lacus non, varius tristique neque.

![Block image][_plS]

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu turpis, porta gravida sollicitudin eget, hendrerit nec felis.

[2]: http://resizesafari.com/favicon.ico "Title"
[_plS]: http://placehold.it/100x100 "Small placeholder"

#### Inline code and Block code

Inline code are surround by `backtick` key. To create a block code:

	Indent each line by at least 1 tab,
    or 4 spaces.
	And there has to be a blank line before and after the code snippet!
	
For e.g. this code
    isn't working properly.

####  Ordered Lists

Ordered lists are created using "1." + Space:

1. Ordered list item
    1. Create subitems with 4 spaces `\s`
	2. Or one tab `\t`
2. Ordered list item
3. Ordered list item

#### Unordered Lists

Unordered list are created using "*" + Space:

* Unordered list item
    * Create subitems with 4 spaces `\s`
	* Or one tab `\t`
* Unordered list item
* Unordered list item 

Or using "-" + Space:

- Unordered list item
    - Create subitems with 4 spaces `\s`
	- Or one tab `\t`
- Unordered list item
- Unordered list item

And keep in mind:

- Do not insert a blank line between
- two elements, since

- this will create a new list, with just one item

#### Horizontal Rules

Three or more asterisks or dashes:

***

---

- - - 

#### Footnotes

Footnotes work mostly like reference-style links. A footnote is made of two things: a marker in the text that will become a superscript number; a footnote definition that will be placed in a list of footnotes at the end of the document. A footnote looks like this:

That's some text with a footnote[^1]. And another one[^2].

[^1]: And that's the footnote.
[^2]: That's the other footnote.

#### Strikethrough

Wrap with 2 tilde characters:

~~Strikethrough~~


#### Fenced Code Blocks

Start with a line containing 3 or more backticks, and ends with the first line with the same number of backticks:

```
Fenced code blocks are like Stardard Markdown’s regular code
blocks, except that they’re not indented and instead rely on
a start and end fence lines to delimit the code block.
```

#### Tables

A simple table looks like this:

First Header | Second Header | Third Header
------------ | ------------- | ------------
Content Cell | Content Cell  | Content Cell
Content Cell | Content Cell  | Content Cell

If you wish, you can add a leading and tailing pipe to each line of the table:

| First Header | Second Header | Third Header |
| ------------ | ------------- | ------------ |
| Content Cell | Content Cell  | Content Cell |
| Content Cell | Content Cell  | Content Cell |

Specify alignement for each column by adding colons to separator lines:

First Header | Second Header | Third Header
:----------- | :-----------: | -----------:
Left         | Center        | Right
Left         | Center        | Right

If you need just one column, you have to use the `|` signs at each end:

| Only Header |
| ----------- |
| Content     |

#### Headers

Setext-style:

This is H1
==========

This is H2
----------

atx-style:

# This is H1

## This is H2

### This is H3

#### This is H4

##### This is H5

###### This is H6

# This is H1
With a subtitle

## This is H2
With a subtitle

This is H2
----------
With a subtitle, as well

These headlines are embeded in a `<hgroup>`. The article has to start with a blank line as seperator beneath the headline.

If you want to have a big title and a smaller one just beneath it, like the very first headline of this document, you can also just write it into the next line without a seperator, it will be grouped within a `<hgroup>` element as well.