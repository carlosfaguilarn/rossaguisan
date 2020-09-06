---
layout: docs
title: Toasts
description: Use toasts to indicate messages
group: components
toc: true
---

## Default

The following example is the basic pagination style:

{{< example >}}
<div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-primary">
        <i class="fab fa-bootstrap"></i>
        <strong class="mr-auto ml-2">Themesberg</strong>
        <small class="text-muted">11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>
{{< /example >}}

## Default

You can also use the `.bg-primary` or `.bg-tertiary` modifier classes to update the colors:

{{< example >}}
<div class="toast bg-primary text-white fade show" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-primary">
        <i class="fab fa-bootstrap"></i>
        <strong class="mr-auto ml-2">Themesberg</strong>
        <small>11 mins ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="toast-body">
        Hello, world! This is a toast message.
    </div>
</div>
{{< /example >}}
