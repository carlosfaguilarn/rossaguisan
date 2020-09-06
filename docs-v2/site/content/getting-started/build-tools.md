---
layout: docs
title: Build tools
description: Learn about the gulp commands that will help you improve your development workflow with our theme
group: getting-started
toc: true
---

## Starting a local server

Developing with Rocket is very easy. All you have to do to run a local server is writing the following command in the folder where `gulpfile.js` is located:

{{< highlight bash >}}
gulp
{{< /highlight >}}

What does it do?

It watches for any change you will make in the project and compiles the code and refreshes your browser with the modified changes. We recommend using this command if you choose to use the awesome features of Sass.

## Compiling for production

We got you covered. All you have to do is write the following command:

{{< highlight bash >}}
gulp build:dist
{{< /highlight >}}

This command will generate a `dist/` folder where you'll get all the files necessary to go live with your awesome website. Images are automatically optimized and the files are minified.

## Getting only HTML, CSS & Javascript

Even if Sass has some awesome features, maybe you just need the plain old CSS, HTML and JS stack. We though about this, so run the following command:

{{< highlight bash >}}
gulp build:dev
{{< /highlight >}}

This command will generate a `html&css/` folder where you'll get all the required files to use without Sass, Gulp or npm. This code is beatified and the CSS is documented with commenting sections.