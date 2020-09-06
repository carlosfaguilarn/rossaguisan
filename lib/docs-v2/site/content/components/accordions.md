---
layout: docs
title: Accordions
description: Use accordion elements to segment content and show/hide when clicking on tabs
group: components
aliases:
  - "/components/"
toc: true
---

## Accordion

Use the `.accordion-panel-header` element and add the id of the targeted element to href, data-target and aria-controls attributes. The element that will be toggled is the `.collapse` from the following example:

{{< example >}}
<div class="accordion" id="accordionExample1">
    <div class="card card-sm card-body border-light mb-0">
        <a href="#panel-1" data-target="#panel-1" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
            <span class="h6 mb-0 font-weight-bold">Our Company</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
        </a>
        <div class="collapse" id="panel-1">
            <div class="pt-3">
                <p class="mb-0">
                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                </p>
            </div>
        </div>
    </div>
    <div class="card card-sm card-body border-light mb-0">
        <a href="#panel-2" data-target="#panel-2" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
            <span class="h6 mb-0 font-weight-bold">Pixel Components</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
        </a>
        <div class="collapse" id="panel-2">
            <div class="pt-3">
                <p class="mb-0">
                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision. </p>
            </div>
        </div>
    </div>
    <div class="card card-sm card-body border-light">
        <a href="#panel-3" data-target="#panel-3" class="accordion-panel-header" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
            <span class="h6 mb-0 font-weight-bold">Licenses</span>
            <span class="icon"><i class="fas fa-plus"></i></span>
        </a>
        <div class="collapse" id="panel-3">
            <div class="pt-3">
                <p class="mb-0">
                    At Themesberg, our mission has always been focused on bringing openness and transparency to the design process. We've always believed that by providing a space where designers can share ongoing work not only empowers them to make better products, it also
                    helps them grow. We're proud to be a part of creating a more open culture and to continue building a product that supports this vision. </p>
            </div>
        </div>
    </div>
</div>
{{< /example >}}
