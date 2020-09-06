---
layout: docs
title: Charts
description: Use charts to present complex data with the help of bar charts, pie charts, line charts and many more
group: plugins
toc: true
---

## Getting started

We made sure to use the most advanced and beautiful charts for your business. Spaces makes use of the great [Chartist JS](https://gionkunz.github.io/chartist-js/examples.html) library and we customized some of the looks to match with the UI that we offer.

You need to include the following two javascript files before the end of the `body` tag:

{{< highlight html >}}
<script src="@@path/vendor/chartist/dist/chartist.min.js"></script>
<script src="@@path/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
{{< /highlight >}}

## Line chart

Here's an example of a line chart:

{{< example >}}
<div class="line-chart"></div>
{{< /example >}}

**Javascript:**

{{< highlight javascript >}}
new Chartist.Line('.line-chart', {
    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
    series: [
        [12, 9, 7, 8, 5],
        [2, 1, 3.5, 7, 3],
        [1, 3, 4, 5, 6]
    ]
    }, {
    fullWidth: true,
    chartPadding: {
        right: 40
    },
    plugins: [
        Chartist.plugins.tooltip()
    ]
});
{{< /highlight >}}

## Line chart filled

Here's an example of a line chart filled:

{{< example >}}
<div class="line-chart-filled"></div>
{{< /example >}}

**Javascript:**

{{< highlight javascript >}}
new Chartist.Line('.line-chart-filled', {
  labels: [1, 2, 3, 4, 5, 6, 7, 8],
  series: [
    [5, 9, 7, 8, 5, 3, 5, 4]
  ]
}, {
  low: 0,
  showArea: true
});
{{< /highlight >}}

## Bar chart

Here's an example of a bar chart:

{{< example >}}
<div class="bar-chart"></div>
{{< /example >}}

**Javascript:**

{{< highlight javascript >}}
new Chartist.Bar('.bar-chart', {
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    series: [
        [5, 4, 3, 7, 5, 10, 3],
        [3, 2, 9, 5, 4, 6, 4]
    ]
    }, {
    low: 0,
    showArea: true,
    plugins: [
        Chartist.plugins.tooltip()
    ],
    axisX: {
        // On the x-axis start means top and end means bottom
        position: 'end'
    },
    axisY: {
        // On the y-axis start means left and end means right
        showGrid: false,
        showLabel: false,
        offset: 0
    }
});
{{< /highlight >}}

## Pie chart

Here's an example of a pie chart:

{{< example >}}
<div class="pie-chart"></div>
{{< /example >}}

**Javascript:**

{{< highlight javascript >}}
var data = {
    series: [30, 40, 10, 20]
};
    
var sum = function(a, b) { return a + b };

new Chartist.Pie('.pie-chart', data, {
labelInterpolationFnc: function(value) {
    return Math.round(value / data.series.reduce(sum) * 100) + '%';
},            
low: 0,
high: 8,
fullWidth: false,
plugins: [
    Chartist.plugins.tooltip()
],
{{< /highlight >}}

## Examples and settings

See more usage examples and the options API on the official [Chartist JS](https://gionkunz.github.io/chartist-js/examples.html) page.