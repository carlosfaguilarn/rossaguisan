---
layout: docs
title: Forms
description: Use form elements such as text inputs, textareas, file uploads and many more to get input from you users
group: components
toc: true
---

## Form example

The following example is a classical form for login or register pages:

{{< example >}}
<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{{< /example >}}

### Input with icon

Create input elements with icons using the following morkup:

{{< example >}}
<div class="form-group">
    <div class="input-group mb-4">
        <input class="form-control" placeholder="Icon Right" type="text">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
        </div>
        <input class="form-control" placeholder="Password" type="password">
    </div>
</div>
{{< /example >}}

### Validation

Use the following modifier classes to add success or error states to form elements:

{{< example >}}
<div class="form-group has-success">
    <input type="text" placeholder="Success Input" class="form-control is-valid" />
</div>
<div class="form-group has-danger mb-4">
    <input type="email" placeholder="Error Input" class="form-control is-invalid" />
</div>
{{< /example >}}

## Select input

The following example is how the select inputs look and can be used:

{{< example >}}
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="custom-select" id="exampleFormControlSelect1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    </select>
</div>
{{< /example >}}


## Multiple select

The following example is how the select inputs look and can be used:

{{< example >}}
<div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="custom-select" id="exampleFormControlSelect2">
    <option>Bootstrap</option>
    <option>VueJs</option>
    <option>Angular</option>
    <option>React</option>
    <option>NodeJs</option>
    </select>
</div>
{{< /example >}}

## Textarea

The following example is how textareas can be used:

{{< example >}}
<div class="form-group">
    <label for="exampleFormControlTextarea2">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
</div>
{{< /example >}}


## File upload

The following example is how file uploads can be used:

{{< example >}}
<div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div>
{{< /example >}}

## Checkboxes

### Round style

Use the `.form-check` modifier class to make checkboxes rounded:

{{< example >}}
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
    <label class="form-check-label" for="defaultCheck10">
        Default checkbox
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck20" disabled>
    <label class="form-check-label" for="defaultCheck20">
        Disabled checkbox
    </label>
</div>
{{< /example >}}

## Radio buttons

Here are a few radio button examples with a variety of stateS:

{{< example >}}
<fieldset>
    <legend class="h6">Radios</legend>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
            Default radio
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
            Second default radio
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
        <label class="form-check-label" for="exampleRadios3">
            Disabled radio
        </label>
        </div>
    <!-- End of Radio -->
</fieldset>
{{< /example >}}

## Switches

Use these custom switches to add toggle functionality for your website:

{{< example >}}
<div class="mb-3">
    <span class="h6 font-weight-bold">Switches</span>
</div>
<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" id="customSwitch1">
    <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
</div>
<div class="custom-control custom-switch">
    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
    <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
</div>
{{< /example >}}
