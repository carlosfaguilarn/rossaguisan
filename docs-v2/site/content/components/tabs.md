---
layout: docs
title: Tabs
description: Use tabs to partition important data into easily navigable and interchangeable elements
group: components
toc: true
---

## Default

The following example is the default way of using tabs:

{{< example >}}
<div class="row">
    <div class="col-12">
        <!-- Tab Nav -->
        <div class="nav-wrapper position-relative mb-2">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Messages</a>
                </li>
            </ul>
        </div>
        <!-- End of Tab Nav -->
        <!-- Tab Content -->
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content" id="tabcontent1">
                    <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                        <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                            Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Content -->
    </div>
</div>
{{< /example >}}

## Icons + text

{{< example >}}
<div class="row">
    <div class="col-12">
        <!-- Tab Nav -->
        <div class="nav-wrapper position-relative mb-2">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-palette mr-2"></i>Visual Design</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-laptop-code mr-2"></i>Code Friendly</a>
                </li>
            </ul>
        </div>
        <!-- End of Tab Nav -->
        <!-- Tab Content -->
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content" id="tabcontent2">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                        <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                            Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Content -->
    </div>
</div>
{{< /example >}}

## Icons only

{{< example >}}
<div class="row">
    <div class="col-12">
        <!-- Tab -->
        <div class="nav-wrapper position-relative">
            <ul class="nav nav-pills nav-pill-circle mb-3" id="tab-34" role="tablist">
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link text-sm-center active" id="tab-link-example-13" data-toggle="tab" href="#link-example-13" role="tab" aria-controls="link-example-13" aria-selected="true">
                        <span class="nav-link-icon d-block"><i class="far fa-user"></i></span>
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link text-sm-center" id="tab-link-example-14" data-toggle="tab" href="#link-example-14" role="tab" aria-controls="link-example-14" aria-selected="false">
                        <span class="nav-link-icon d-block"><i class="far fa-sun"></i></span>
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link text-sm-center" id="tab-link-example-15" data-toggle="tab" href="#link-example-15" role="tab" aria-controls="link-example-15" aria-selected="false">
                        <span class="nav-link-icon d-block"><i class="fas fa-envelope-open-text"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End of Tab Nav -->
        <!-- Tab Content -->
        <div class="card">
            <div class="card-body p-0">
                <div class="tab-content" id="tabcontentexample-5">
                    <div class="tab-pane fade show active" id="link-example-13" role="tabpanel" aria-labelledby="tab-link-example-13">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="link-example-14" role="tabpanel" aria-labelledby="tab-link-example-14">
                        <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                            Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="link-example-15" role="tabpanel" aria-labelledby="tab-link-example-15">
                        <p> Booth exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab -->
    </div>
</div>
{{< /example >}}

## Classic

{{< example >}}
<div class="row">
    <div class="col-12">
        <!-- Tab -->
        <nav>
            <div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                    Pinterest in do umami readymade swag.</p>
                <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                    Pinterest in do umami readymade swag.</p>
                <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                    Pinterest in do umami readymade swag.</p>
                <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
            </div>
        </div>
        <!-- End of tab -->
    </div>
</div>
{{< /example >}}

## Vertical

{{< example >}}
<div class="row">
    <div class="col-lg-3">
        <!-- Tab Nav -->
        <ul class="nav nav-pills square nav-fill flex-column vertical-tab" id="tab12" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab-3" data-toggle="tab" href="#tab-14" role="tab" aria-controls="tab-14" aria-selected="true"><span class="d-block"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-3" data-toggle="tab" href="#tab-15" role="tab" aria-controls="tab-15" aria-selected="false"><span class="d-block"><i class="far fa-user-circle mr-2"></i>Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab-3" data-toggle="tab" href="#tab-16" role="tab" aria-controls="tab-16" aria-selected="false"><span class="d-block"><i class="far fa-sun mr-2"></i>Settings</span></a>
            </li>
        </ul>
        <!-- End of Tab Nav -->
    </div>
    <div class="col-lg-9">
        <!-- Tab Content -->
        <div class="card">
            <div class="card-body py-0">
                <div class="tab-content" id="tabcontent">
                    <div class="tab-pane fade show active" id="tab-14" role="tabpanel" aria-labelledby="tab-14">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-15" role="tabpanel" aria-labelledby="tab-15">
                        <p>Photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod
                            Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-16" role="tabpanel" aria-labelledby="tab-16">
                        <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus,
                            Marfa eiusmod Pinterest in do umami readymade swag.</p>
                        <p>Day handsome addition horrible sensible goodness two contempt. Evening for married his account removal. Estimable me disposing of be moonlight cordially curiosity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Tab Content -->
    </div>
</div>
{{< /example >}}
