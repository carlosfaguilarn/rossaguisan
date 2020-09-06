---
layout: docs
title: jQuery Counters
description: Use counters to showcase numbers with an increase animation
group: plugins
toc: true
---

## Counters

Change the numbers inside the `.counter` element to update the content of the counter.

{{< example >}}
<div class="row">
    <!--Counter-->
    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="counter display-3 text-dark d-block">500</span>
        <span class="h5 text-gray">Happy people</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="counter display-3 text-dark d-block">1560</span>
        <span class="h5 text-gray">Units Ordered</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="counter display-3 text-dark d-block">5478</span>
        <span class="h5 text-gray">Subscribers</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="counter display-3 text-dark d-block">12031</span>
        <span class="h5 text-gray">Lines of Code</span>
    </div>
    <!--End of Counter-->
</div>
{{< /example >}}

## Icons

Examples of counters with icons:

{{< example >}}
<div class="row">
    <!--Counter-->
    <div class="col-12 col-sm-6 mb-3 col-lg-3 mb-5 mb-lg-0">
        <div class="icon icon-shape icon-shape-primary rounded-circle mr-2 mr-md-0 mb-2">
            <i class="far fa-grin-hearts"></i>
        </div>
        <span class="counter display-3 text-primary d-block">500</span>
        <span class="h5 text-gray">Happy people</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-12 col-sm-6 mb-3 col-lg-3 mb-5 mb-lg-0">
        <div class="icon icon-shape icon-shape-secondary mr-2 mr-md-0 mb-2">
            <i class="fas fa-box-open"></i>
        </div>
        <span class="counter display-3 text-secondary d-block">1560</span>
        <span class="h5 text-gray">Units Ordered</span>
    </div>
    <!--End of Counter-->
    <!--Counter-->
    <div class="col-12 col-sm-6 mb-3 col-lg-3">
        <div class="icon icon-primary mr-2 mr-md-0 mb-4">
            <i class="fas fa-brain"></i>
        </div>
        <span class="counter display-3 text-primary d-block">12031</span>
        <span class="h5 text-gray">Lines of Code</span>
    </div>
    <!--End of Counter-->
</div>
{{< /example >}}

## Javascript

Here's an example of how to initialize the counter functionality for the `.counter` element:

{{< highlight javascript >}}
$('.counter').counterUp({
    delay: 10,
    time: 1000,
    offset: 70,
    beginAt: 100,
    formatter: function (n) {
        return n.replace(/,/g, '.');
    }
});
{{< /highlight >}}

Read more about [jQuery CounterUp](https://github.com/bfintal/Counter-Up) from the official plugin website.