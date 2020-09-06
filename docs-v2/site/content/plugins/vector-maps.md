---
layout: docs
title: Vector Maps
description: Use this premium vector map plugin to use geographically delimited regions, countries and many more
group: plugins
toc: true
---

## Getting started

For vector maps we decided to use one of the most advanced plugin called [jVectorMap](https://jvectormap.com/). For a more detailed guide and options you can browse the official plugin page. In this guide we'll show you how to quickly get started using jVectorMap with Bootstrap.

{{< highlight html >}}
<script src="@@path/vendor/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="@@path/vendor/jqvmap/dist/maps/jquery.vmap.usa.js"></script>
{{< /highlight >}}

And the following stylesheet file in the `head` tag:

{{< highlight html >}}
<!-- VectorMap -->
<link rel="stylesheet" href="@@path/vendor/jqvmap/dist/jqvmap.min.css">
{{< /highlight >}}

## USA map with tooltips

Here's an example of a line chart:

{{< example >}}
<div id="vmap" style="width: 100%; height: 400px;"></div>
{{< /example >}}

**Javascript:**

{{< highlight javascript >}}
if($('#vmap').length) {
    $('#vmap').vectorMap(
        {
            map: 'usa_en',
            backgroundColor: '#ffffff',
            borderColor: '#ffffff',
            borderOpacity: 0,
            borderWidth: 1,
            color: '#e9ecef',
            enableZoom: false,
            hoverColor: '#0E1B48',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: '#0E1B48',
            selectedRegions: null,
            showTooltip: true,
            onLabelShow: function(event, label, code)
            {
            label.text(label.text() + ': ' + Math.floor((Math.random() * 10000) + 1) + ' session');
            }
        });
}
{{< /highlight >}}

## Other countries

If you want to add another map instead of the United States, you will need to include another Javascript file containing the vectorial data like this:

{{< highlight html >}}
<!-- VectorMap USA -->
<script src="@@path/vendor/jqvmap/dist/maps/jquery.vmap.usa.js"></script>

<!-- VectorMap Europe -->
<script src="@@path/vendor/jqvmap/dist/maps/jquery.vmap.europe"></script>

<!-- VectorMap Germany -->
<script src="@@path/vendor/jqvmap/dist/maps/jquery.vmap.germany.js"></script>
{{< /highlight >}}

Here's the full list of the available maps:

- jquery.vmap.algeria.js
- jquery.vmap.argentina.js
- jquery.vmap.brazil.js
- jquery.vmap.canada.js
- jquery.vmap.europe.js
- jquery.vmap.france.js
- jquery.vmap.germany.js
- jquery.vmap.greece.js
- jquery.vmap.iran.js
- jquery.vmap.iraq.js
- jquery.vmap.russia.js
- jquery.vmap.tunisia.js
- jquery.vmap.turkey.js
- jquery.vmap.usa.js
- jquery.vmap.world.js

If you would like to add additional options or maps you can learn more from the official plugin page from [jVectorMap](https://jvectormap.com/).