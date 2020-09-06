---
layout: docs
title: Popovers
description: Use popovers to indicate extra content for your users when clicking on an element
group: components
toc: true
---

## Popover example

Use the following popover markup to indicate extra content to your users when clicking on certain elements:

{{< example >}}
<button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" title="Popover text" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Popover
</button>
{{< /example >}}

## Popover placement

By specifying `data-placement` you can set the placement of the popover when it shows up.

{{< example >}}
<button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="top" title="Popover on top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Popover on top
</button>
<button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="right" title="Popover on right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Popover on right
</button>
<button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="bottom" title="Popover on bottom" data-content="Vivamus
    sagittis lacus vel augue laoreet rutrum faucibus.">
    Popover on bottom
</button>
<button type="button" class="btn btn-secondary btn-sm" data-container="body" data-toggle="popover" data-placement="left" title="Popover on left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
    Popover on left
</button>
{{< /example >}}

