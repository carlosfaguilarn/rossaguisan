---
layout: docs
title: Badges
description: Use badges to add extra labeling to alongside titles or to categorize items
group: components
toc: true
---

## Badge

The following are the default badge styles. Use the color variables to add preferred colors (ie. `badge-primary`, `badge-secondary`):

{{< example >}}
<h1>Example heading <span class="badge badge-primary">New</span></h1>
<h2>Example heading <span class="badge badge-secondary">New</span></h2>
<h3>Example heading <span class="badge badge-tertiary">New</span></h3>
<h4>Example heading <span class="badge badge-info">New</span></h4>
<h5>Example heading <span class="badge badge-danger">New</span></h5>
<h6>Example heading <span class="badge badge-warning">New</span></h6>
{{< /example >}}

## Sizing with badges

Fancy larger or smaller badges? Add `.badge-md` or `.badge-lg` for additional sizes.

{{< example >}}
<span class="badge badge-primary text-uppercase">Badge</span>
<span class="badge badge-md badge-primary text-uppercase">Badge md</span>
<span class="badge badge-lg badge-primary text-uppercase">Badge lg</span>
{{< /example >}}

## Notification badges

You can also use the badges as a counter indicator in buttons or alongside text:

{{< example >}}
<button type="button" class="btn btn-primary">
    Messages <span class="badge badge-danger">9</span>
</button>
{{< /example >}}
