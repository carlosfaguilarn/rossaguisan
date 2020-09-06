---
layout: docs
title: Headroom
description: Use Headroom.js library to add sticky navigation menu functionality to the navbar
group: plugins
toc: true
---

## Getting started

You need to include the following two javascript files before the end of the `body` tag:

{{< highlight html >}}
<script src="@@path/vendor/headroom.js/dist/headroom.min.js"></script>
{{< /highlight >}}

## Usage

In order to enable headroom for the navbar add the class `.headroom` to the main `.navbar` element. You can update the options of Headroom.js in `js/rocket.js`.

{{< highlight javascript >}}
if ($('.headroom')[0]) {
    var headroom = new Headroom(document.querySelector("#navbar-main"), {
        offset: 0,
        tolerance: {
            up: 0,
            down: 0
        },
    });
    headroom.init();
}
{{< /highlight >}}