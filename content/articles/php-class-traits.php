---
kind: article
title: Using class traits in PHP 5.4
tags: [ 'php', 'object-oriented', 'traits', 'horizontal', 'new features' ]
created_at: Time.parse( "August 20, 2011" )
author_name: Ryan
excerpt: Although PHP allows classes to implement more than one interface, it does not support multiple inheritance. Unfortunately, lack of support for multiple inheritance can lead to code duplication in certain situations; this is contrary to the goals of reusable object-oriented programming. In this article, I explore a couple of these situations and traits, a new language-level feature in PHP 5.4 that has been added to address this concern.
---

!=/images/articles/traits/basic.png!

!=/images/articles/traits/duplication.png!

<script src="https://gist.github.com/1155168.js?file=duplicate-code-in-subclasses.php"></script>

!=/images/articles/traits/inheritance.png!

<script src="https://gist.github.com/1155168.js?file=refactor-into-superclass.php"></script>

!=/images/articles/traits/trait.png!

<script src="https://gist.github.com/1155168.js?file=use-trait-for-duplication.php"></script>