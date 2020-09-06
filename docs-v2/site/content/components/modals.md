---
layout: docs
title: Modals
description: Use modals to develop faster and more interactive user interfaces
group: components
toc: true
---

### Default

The following example is a simple way of toggling a modal based on clicking on an element:

{{< example >}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Default</button>
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Terms of Service</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
                <p>The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as
                    soon as possible of high-risk data breaches that could personally affect them.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary">I Got It</button>
                <button type="button" class="btn btn-link text-danger ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
{{< /example >}}

### Notification

{{< example >}}
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-notification">Notification</button>
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered" role="document">
        <div class="modal-content bg-gradient-secondary">
            <div class="modal-header">
                <p class="modal-title" id="modal-title-notification">A new experience, personalized for you.</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <span class="modal-icon display-1-lg"><i class="far fa-envelope-open"></i></span>
                    <h4 class="modal-title my-3">Important message!</h4>
                    <p>Do you know that you can assign status and relation to a company right in the visit list?.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-white">Go to Inbox</button>
            </div>
        </div>
    </div>
</div>
{{< /example >}}
