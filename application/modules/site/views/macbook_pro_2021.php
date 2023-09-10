<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="version:build" content="1.0.21">
  <style>
    .channel-html {
      font-weight: normal;
      -webkit-text-size-adjust: 100%;
      text-size-adjust: 100%;
    }

    .channel-html,
    .channel-html:before,
    .channel-html:after,
    .channel-html *,
    .channel-html *:before,
    .channel-html *:after {
      box-sizing: content-box;
      margin: 0;
      padding: 0;
      float: initial;
      pointer-events: auto;
      letter-spacing: normal;
    }

    .channel-html *,
    .channel-html *:before,
    .channel-html *:after {
      float: inherit;
      font-size: 1em;
      font-family: inherit;
      font-weight: inherit;
      line-height: inherit;
      letter-spacing: inherit;
      text-align: inherit;
    }

    .channel-html div,
    .channel-html figure,
    .channel-html footer,
    .channel-html nav,
    .channel-html section {
      display: block;
    }

    .channel-html img {
      border: 0;
      vertical-align: middle;
    }

    .channel-html ul {
      list-style: none;
    }

    .channel-html,
    .channel-html button {
      font-synthesis: none;
      -moz-font-feature-settings: "kern";
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      direction: ltr;
      text-align: left;
    }

    .channel-html,
    .channel-html button {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html sup {
      font-size: 0.6em;
      vertical-align: top;
      position: relative;
      bottom: -0.2em;
    }

    h1 .channel-html sup,
    h2 .channel-html sup,
    h3 .channel-html sup {
      font-size: 0.4em;
    }

    .channel-html sup a {
      vertical-align: inherit;
      color: inherit;
    }

    .channel-html sup a:hover {
      color: #0066cc;
      text-decoration: none;
    }

    .channel-html html {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    .channel-html body {
      margin: 0;
      padding: 0;
    }

    .channel-html ul,
    .channel-html li,
    .channel-html dd,
    .channel-html h1,
    .channel-html h2,
    .channel-html h3,
    .channel-html h4,
    .channel-html h5,
    .channel-html h6,
    .channel-html p,
    .channel-html figure,
    .channel-html button {
      margin: 0;
      padding: 0;
    }

    .channel-html code,
    .channel-html caption {
      font-size: 1em;
      font-weight: normal;
      font-style: normal;
    }

    .channel-html caption {
      text-align: left;
    }

    .channel-html table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    .channel-html audio,
    .channel-html video {
      vertical-align: baseline;
    }

    .channel-html button {
      background: none;
      border: 0;
      box-sizing: content-box;
      color: inherit;
      cursor: pointer;
      font: inherit;
      line-height: inherit;
      overflow: visible;
      vertical-align: inherit;
    }

    .channel-html button:disabled {
      cursor: default;
    }

    .channel-html :focus {
      outline: 4px solid rgba(0, 125, 250, 0.6);
      outline-offset: 1px;
    }

    .channel-html :focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
    .channel-html :focus[data-focus-method=touch]:not(input):not(textarea):not(select) {
      outline: none;
    }

    .channel-html ::-moz-focus-inner {
      border: 0;
      padding: 0;
    }

    .channel-html html {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-size: 106.25%;
      quotes: "“""”";
    }

    .channel-html body {
      font-size: 17px;
      line-height: 1.4705882353;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      background-color: white;
      color: #1d1d1f;
      font-style: normal;
    }

    .channel-html body,
    .channel-html button {
      font-synthesis: none;
      -moz-font-feature-settings: "kern";
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      direction: ltr;
      text-align: left;
    }

    .channel-html h1,
    .channel-html h2,
    .channel-html h3,
    .channel-html h4,
    .channel-html h5,
    .channel-html h6 {
      font-weight: 600;
      color: #1d1d1f;
    }

    .channel-html h1 img,
    .channel-html h2 img,
    .channel-html h3 img,
    .channel-html h4 img,
    .channel-html h5 img,
    .channel-html h6 img {
      display: block;
      margin: 0;
    }

    .channel-html h1+*,
    .channel-html h2+*,
    .channel-html h3+*,
    .channel-html h4+*,
    .channel-html h5+*,
    .channel-html h6+* {
      margin-top: 0.8em;
    }

    .channel-html h1+h1,
    .channel-html h1+h2,
    .channel-html h1+h3,
    .channel-html h1+h4,
    .channel-html h1+h5,
    .channel-html h1+h6,
    .channel-html h2+h1,
    .channel-html h2+h2,
    .channel-html h2+h3,
    .channel-html h2+h4,
    .channel-html h2+h5,
    .channel-html h2+h6,
    .channel-html h3+h1,
    .channel-html h3+h2,
    .channel-html h3+h3,
    .channel-html h3+h4,
    .channel-html h3+h5,
    .channel-html h3+h6,
    .channel-html h4+h1,
    .channel-html h4+h2,
    .channel-html h4+h3,
    .channel-html h4+h4,
    .channel-html h4+h5,
    .channel-html h4+h6,
    .channel-html h5+h1,
    .channel-html h5+h2,
    .channel-html h5+h3,
    .channel-html h5+h4,
    .channel-html h5+h5,
    .channel-html h5+h6,
    .channel-html h6+h1,
    .channel-html h6+h2,
    .channel-html h6+h3,
    .channel-html h6+h4,
    .channel-html h6+h5,
    .channel-html h6+h6 {
      margin-top: 0.4em;
    }

    p+.channel-html h1,
    ul+.channel-html h1,
    p+.channel-html h2,
    ul+.channel-html h2,
    p+.channel-html h3,
    ul+.channel-html h3,
    p+.channel-html h4,
    ul+.channel-html h4,
    p+.channel-html h5,
    ul+.channel-html h5,
    p+.channel-html h6,
    ul+.channel-html h6 {
      margin-top: 1.6em;
    }

    .channel-html p+*,
    .channel-html ul+* {
      margin-top: 0.8em;
    }

    .channel-html ul {
      margin-left: 1.1764705882em;
    }

    .channel-html ul ul {
      margin-top: 0;
      margin-bottom: 0;
    }

    nav .channel-html ul {
      margin: 0;
      list-style: none;
    }

    .channel-html li li {
      font-size: 1em;
    }

    .channel-html a,
    .channel-html .link {
      color: #0066cc;
      letter-spacing: inherit;
    }

    .channel-html a:link,
    .channel-html a:visited,
    .channel-html .link:link,
    .channel-html .link:visited {
      text-decoration: none;
    }

    .channel-html a:hover,
    .channel-html .link:hover {
      text-decoration: underline;
    }

    .channel-html a:active,
    .channel-html .link:active {
      text-decoration: none;
    }

    .channel-html a:disabled,
    .channel-html .link:disabled {
      opacity: 0.32;
    }

    .channel-html b {
      font-weight: 600;
    }

    .channel-html em,
    .channel-html i {
      font-style: italic;
    }

    .channel-html sup {
      position: relative;
      font-size: 0.6em;
      vertical-align: baseline;
    }

    .channel-html sup {
      top: -0.5em;
    }

    .channel-html .footnote a {
      vertical-align: inherit;
      color: inherit;
    }

    .channel-html .footnote a:hover {
      color: #0066cc;
      text-decoration: none;
    }

    .channel-html .footnote-reduced {
      font-size: 0.45em;
    }

    sup.channel-html .footnote-reduced {
      top: -0.86em;
    }

    .channel-html .footnote-diamond {
      position: relative;
      vertical-align: baseline;
      font-size: 0.6em;
      top: -0.5em;
    }

    .channel-html .footnote-diamond.footnote-reduced {
      font-size: 0.45em;
      top: -0.86em;
    }

    .channel-html .align-items-end {
      align-items: flex-end;
    }

    .channel-html .large-align-items-end {
      align-items: flex-end;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .medium-align-items-end {
        align-items: flex-end;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .small-align-items-end {
        align-items: flex-end;
      }
    }

    .channel-html .visuallyhidden {
      position: absolute;
      clip: rect(1px, 1px, 1px, 1px);
      -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
      clip-path: inset(0px 0px 99.9% 99.9%);
      overflow: hidden;
      height: 1px;
      width: 1px;
      padding: 0;
      border: 0;
    }

    .channel-html .nowrap {
      display: inline-block;
      text-decoration: inherit;
      white-space: nowrap;
    }

    .channel-html .clear {
      clear: both;
    }

    .channel-html .row {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      width: 100%;
    }

    .channel-html .column {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      min-width: 0px;
    }

    .channel-html .large-1 {
      flex-basis: 8.3333333333%;
      max-width: 8.3333333333%;
    }

    .channel-html .large-2 {
      flex-basis: 16.6666666667%;
      max-width: 16.6666666667%;
    }

    .channel-html .large-3 {
      flex-basis: 25%;
      max-width: 25%;
    }

    .channel-html .large-4 {
      flex-basis: 33.3333333333%;
      max-width: 33.3333333333%;
    }

    .channel-html .large-5 {
      flex-basis: 41.6666666667%;
      max-width: 41.6666666667%;
    }

    .channel-html .large-6 {
      flex-basis: 50%;
      max-width: 50%;
    }

    .channel-html .large-7 {
      flex-basis: 58.3333333333%;
      max-width: 58.3333333333%;
    }

    .channel-html .large-8 {
      flex-basis: 66.6666666667%;
      max-width: 66.6666666667%;
    }

    .channel-html .large-9 {
      flex-basis: 75%;
      max-width: 75%;
    }

    .channel-html .large-10 {
      flex-basis: 83.3333333333%;
      max-width: 83.3333333333%;
    }

    .channel-html .large-11 {
      flex-basis: 91.6666666667%;
      max-width: 91.6666666667%;
    }

    .channel-html .large-12 {
      flex-basis: 100%;
      max-width: 100%;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .medium-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .medium-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .medium-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .medium-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .medium-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .medium-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .medium-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .medium-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .medium-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .medium-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .medium-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .medium-12 {
        flex-basis: 100%;
        max-width: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .small-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .small-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .small-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .small-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .small-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .small-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .small-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .small-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .small-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .small-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .small-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .small-12 {
        flex-basis: 100%;
        max-width: 100%;
      }
    }

    .channel-html .large-span-0 {
      grid-column: span 0;
    }

    .channel-html .large-span-1 {
      grid-column: span 1;
    }

    .channel-html .large-span-2 {
      grid-column: span 2;
    }

    .channel-html .large-span-3 {
      grid-column: span 3;
    }

    .channel-html .large-span-4 {
      grid-column: span 4;
    }

    .channel-html .large-span-5 {
      grid-column: span 5;
    }

    .channel-html .large-span-6 {
      grid-column: span 6;
    }

    .channel-html .large-span-7 {
      grid-column: span 7;
    }

    .channel-html .large-span-8 {
      grid-column: span 8;
    }

    .channel-html .large-span-9 {
      grid-column: span 9;
    }

    .channel-html .large-span-10 {
      grid-column: span 10;
    }

    .channel-html .large-span-11 {
      grid-column: span 11;
    }

    .channel-html .large-span-12 {
      grid-column: span 12;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .medium-span-0 {
        grid-column: span 0;
      }

      .channel-html .medium-span-1 {
        grid-column: span 1;
      }

      .channel-html .medium-span-2 {
        grid-column: span 2;
      }

      .channel-html .medium-span-3 {
        grid-column: span 3;
      }

      .channel-html .medium-span-4 {
        grid-column: span 4;
      }

      .channel-html .medium-span-5 {
        grid-column: span 5;
      }

      .channel-html .medium-span-6 {
        grid-column: span 6;
      }

      .channel-html .medium-span-7 {
        grid-column: span 7;
      }

      .channel-html .medium-span-8 {
        grid-column: span 8;
      }

      .channel-html .medium-span-9 {
        grid-column: span 9;
      }

      .channel-html .medium-span-10 {
        grid-column: span 10;
      }

      .channel-html .medium-span-11 {
        grid-column: span 11;
      }

      .channel-html .medium-span-12 {
        grid-column: span 12;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .small-span-0 {
        grid-column: span 0;
      }

      .channel-html .small-span-1 {
        grid-column: span 1;
      }

      .channel-html .small-span-2 {
        grid-column: span 2;
      }

      .channel-html .small-span-3 {
        grid-column: span 3;
      }

      .channel-html .small-span-4 {
        grid-column: span 4;
      }

      .channel-html .small-span-5 {
        grid-column: span 5;
      }

      .channel-html .small-span-6 {
        grid-column: span 6;
      }

      .channel-html .small-span-7 {
        grid-column: span 7;
      }

      .channel-html .small-span-8 {
        grid-column: span 8;
      }

      .channel-html .small-span-9 {
        grid-column: span 9;
      }

      .channel-html .small-span-10 {
        grid-column: span 10;
      }

      .channel-html .small-span-11 {
        grid-column: span 11;
      }

      .channel-html .small-span-12 {
        grid-column: span 12;
      }
    }

    .channel-html .icon::before,
    .channel-html .icon::after,
    .channel-html .more::before,
    .channel-html .more::after {
      font-family: "SF Pro Icons";
      color: inherit;
      display: inline-block;
      font-style: normal;
      font-weight: inherit;
      font-size: inherit;
      line-height: 1;
      text-decoration: underline;
      position: relative;
      z-index: 1;
      alt: "";
    }

    .channel-html .icon::before,
    .channel-html .icon::after,
    .channel-html .more::before,
    .channel-html .more::after {
      text-decoration: none;
    }

    .channel-html .icon::before,
    .channel-html .more::before {
      display: none;
    }

    .channel-html .more::after {
      padding-left: 0.3em;
      top: 0;
    }

    .channel-html .icon-before::before {
      padding-right: 0.3em;
      display: inline-block;
      top: 0;
    }

    .channel-html .icon-before::after {
      display: none;
    }

    .channel-html .icon-before.icon-apple::before {
      padding-right: 0;
      display: inline-block;
      top: 0;
    }

    .channel-html .icon-before.icon-apple::after {
      display: none;
    }

    .channel-html .icon-apple::before,
    .channel-html .icon-apple::after {
      content: "\f8ff";
    }

    .channel-html .icon-external::before,
    .channel-html .icon-external::after {
      content: "\f32d";
    }

    .channel-html .icon-plus::before,
    .channel-html .icon-plus::after {
      content: "\f309";
    }

    .channel-html .more::before,
    .channel-html .more::after {
      content: "\f301";
    }

    .channel-html .icon-wrapper .icon,
    .channel-html .icon-wrapper .more::after,
    .channel-html .icon-wrapper .icon-before::before {
      display: inline;
      position: static;
    }

    .channel-html a.icon-wrapper {
      text-decoration: none;
    }

    .channel-html a.icon-wrapper:hover .icon-copy {
      text-decoration: underline;
    }

    .channel-html .icon-external::before,
    .channel-html .icon-external::after {
      content: "\f333";
    }

    .channel-html .icon-wrapper {
      unicode-bidi: bidi-override;
    }

    .channel-html .icon-copy {
      unicode-bidi: embed;
    }

    .channel-html body {
      min-width: 320px;
    }

    .channel-html .large-hide {
      display: none;
    }

    .channel-html .large-show {
      display: block;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .medium-hide {
        display: none;
      }

      .channel-html .medium-show {
        display: block;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .small-hide {
        display: none;
      }

      .channel-html .small-show {
        display: block;
      }
    }

    .channel-html .typography-headline-super {
      font-size: 80px;
      line-height: 1.05;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-headline-super {
        font-size: 64px;
        line-height: 1.0625;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-headline-super {
        font-size: 48px;
        line-height: 1.0834933333;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-headline-elevated {
      font-size: 64px;
      line-height: 1.0625;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-headline-elevated {
        font-size: 48px;
        line-height: 1.0834933333;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-headline-elevated {
        font-size: 40px;
        line-height: 1.1;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-headline {
      font-size: 48px;
      line-height: 1.0834933333;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-headline {
        font-size: 40px;
        line-height: 1.1;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-headline {
        font-size: 32px;
        line-height: 1.125;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-headline-reduced {
      font-size: 40px;
      line-height: 1.1;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-headline-reduced {
        font-size: 32px;
        line-height: 1.125;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-headline-reduced {
        font-size: 28px;
        line-height: 1.1428571429;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-eyebrow-super {
      font-size: 32px;
      line-height: 1.125;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-eyebrow-super {
        font-size: 28px;
        line-height: 1.1428571429;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-eyebrow-super {
        font-size: 24px;
        line-height: 1.1666666667;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-eyebrow-elevated {
      font-size: 28px;
      line-height: 1.1428571429;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-eyebrow-elevated {
        font-size: 24px;
        line-height: 1.1666666667;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-eyebrow-elevated {
        font-size: 21px;
        line-height: 1.1904761905;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-eyebrow {
      font-size: 24px;
      line-height: 1.1666666667;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-eyebrow {
        font-size: 21px;
        line-height: 1.1904761905;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-eyebrow-reduced {
      font-size: 21px;
      line-height: 1.1904761905;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-eyebrow-reduced {
        font-size: 19px;
        line-height: 1.2105263158;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-intro-elevated {
      font-size: 24px;
      line-height: 1.3334133333;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-intro-elevated {
        font-size: 21px;
        line-height: 1.381002381;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-intro {
      font-size: 21px;
      line-height: 1.381002381;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-intro {
        font-size: 19px;
        line-height: 1.4211026316;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-callout {
      font-size: 32px;
      line-height: 1.125;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-callout {
        font-size: 28px;
        line-height: 1.1428571429;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .typography-callout {
        font-size: 24px;
        line-height: 1.1666666667;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-label {
      font-size: 24px;
      line-height: 1.1666666667;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .typography-label {
        font-size: 21px;
        line-height: 1.1904761905;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-html .typography-tout {
      font-size: 19px;
      line-height: 1.2105263158;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-body {
      font-size: 17px;
      line-height: 1.4705882353;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-body-tight {
      font-size: 17px;
      line-height: 1.2353641176;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-body-reduced {
      font-size: 14px;
      line-height: 1.4285914286;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-body-reduced-tight {
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-caption {
      font-size: 12px;
      line-height: 1.3333733333;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .typography-sosumi {
      font-size: 12px;
      line-height: 1.3333733333;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html [class*=typography-eyebrow] {
      display: block;
      margin-bottom: 0.4em;
    }

    .channel-html [class*=typography-eyebrow]+* {
      margin-top: 0;
    }

    .channel-html .typography-headline+.typography-intro {
      margin-top: 1.2em;
    }

    .channel-html .typography-headline-super+.typography-intro-elevated {
      margin-top: 1.6em;
    }

    .channel-html .typography-headline-elevated+.typography-intro-elevated {
      margin-top: 1.4em;
    }

    .channel-html .typography-headline-reduced+p,
    .channel-html .typography-headline-reduced+ul,
    .channel-html .typography-headline-reduced+.typography-body {
      margin-top: 1em;
    }

    .channel-html .button {
      cursor: pointer;
      display: inline-block;
      text-align: center;
      white-space: nowrap;
      font-size: 17px;
      line-height: 1.1764805882;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      min-width: 28px;
      padding-left: 16px;
      padding-right: 16px;
      padding-top: 8px;
      padding-bottom: 8px;
      border-radius: 980px;
      background: #0071e3;
      color: white;
    }

    .channel-html .button:hover {
      text-decoration: none;
    }

    .channel-html .button:focus {
      box-shadow: 0 0 0 4px rgba(0, 125, 250, 0.6);
      outline: none;
    }

    .channel-html .button:focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
    .channel-html .button:focus[data-focus-method=touch]:not(input):not(textarea):not(select) {
      box-shadow: none;
    }

    .channel-html .button:active {
      outline: none;
    }

    .channel-html .button:disabled {
      cursor: default;
    }

    .channel-html .button:hover {
      background: #0077ED;
    }

    .channel-html .button:active {
      background: #006EDB;
    }

    .channel-html .button:disabled {
      background: #0071e3;
      color: white;
      opacity: 0.32;
    }

    .channel-html .button-super {
      font-size: 17px;
      line-height: 1.1764805882;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      min-width: 28px;
      padding-left: 31px;
      padding-right: 31px;
      padding-top: 18px;
      padding-bottom: 18px;
    }

    .channel-html .button-elevated {
      font-size: 17px;
      line-height: 1.1764805882;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      min-width: 26px;
      padding-left: 22px;
      padding-right: 22px;
      padding-top: 12px;
      padding-bottom: 12px;
    }

    .channel-html .button-reduced {
      font-size: 12px;
      line-height: 1.3333733333;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      min-width: 23px;
      padding-left: 11px;
      padding-right: 11px;
      padding-top: 4px;
      padding-bottom: 4px;
    }

    .channel-html .badge {
      margin-right: 2em;
      box-sizing: border-box;
      display: inline-block;
      font-size: 20px;
      min-width: 5em;
      position: relative;
      z-index: 1;
      color: #1d1d1f;
    }

    .channel-html .badge .badge-content {
      margin: 1em 0;
      padding-top: 4px;
      padding-bottom: 2px;
      position: relative;
      z-index: 1;
    }

    .channel-html .badge .badge-value {
      left: -2px;
      display: block;
      white-space: nowrap;
      position: relative;
      z-index: 1;
    }

    .channel-html .badge .badge-caption {
      left: 0;
      box-sizing: border-box;
      display: block;
      position: absolute;
      top: 100%;
      width: 100%;
      z-index: 1;
    }

    .channel-html .badge .badge-caption:first-child {
      top: auto;
      bottom: 100%;
    }

    .channel-html .badge .badge-unit-plus {
      position: relative;
      z-index: 1;
    }

    .channel-html .badge .badge-caption {
      color: #1d1d1f;
    }

    .channel-html .badge .badge-value {
      font-size: 48px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge .badge-caption {
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge .badge-unit,
    .channel-html .badge .badge-unit-plus {
      font-size: 32px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 600;
    }

    .channel-html .badge .badge-unit-plus {
      top: -0.25em;
    }

    .channel-html .badge-right {
      margin-right: 2em;
      text-align: right;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .badge-right {
        margin-right: 1em;
      }
    }

    .channel-html .badge-right .badge-caption {
      margin-left: -0.3em;
    }

    .channel-html .badge-super .badge-value {
      font-size: 80px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-super .badge-caption {
      font-size: 17px;
      line-height: 1.2353641176;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-super .badge-unit,
    .channel-html .badge-super .badge-unit-plus {
      font-size: 56px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 600;
    }

    .channel-html .badge-super .badge-unit-plus {
      top: -0.25em;
    }

    .channel-html .badge-elevated .badge-value {
      font-size: 64px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-elevated .badge-caption {
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-elevated .badge-unit,
    .channel-html .badge-elevated .badge-unit-plus {
      font-size: 40px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 600;
    }

    .channel-html .badge-elevated .badge-unit-plus {
      top: -0.22em;
    }

    .channel-html .badge-reduced .badge-value {
      font-size: 40px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-reduced .badge-caption {
      font-size: 14px;
      line-height: 1.2857742857;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-reduced .badge-unit,
    .channel-html .badge-reduced .badge-unit-plus {
      font-size: 28px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 600;
    }

    .channel-html .badge-reduced .badge-unit-plus {
      top: -0.29em;
    }

    .channel-html .badge-tiny {
      min-width: 2em;
    }

    .channel-html .badge-tiny .badge-value {
      font-size: 28px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    .channel-html .badge-tiny .badge-unit,
    .channel-html .badge-tiny .badge-unit-plus {
      font-size: 19px;
      line-height: 1;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 600;
    }

    .channel-html .badge-tiny .badge-unit-plus {
      top: -0.25em;
    }

    .channel-html .colornav {
      display: inline-block;
      text-align: center;
    }

    .channel-html .colornav-items {
      display: inline-block;
      list-style: none;
      margin: 0 -1px;
      padding-top: 17px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .colornav-items {
        margin-left: 2px;
        margin-right: 2px;
        padding-top: 13px;
      }
    }

    .channel-html .colornav-item {
      float: left;
      margin: -1px 5px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .colornav-item {
        margin-left: 4px;
        margin-right: 4px;
      }
    }

    .channel-html .colornav-value {
      position: absolute;
      clip: rect(1px, 1px, 1px, 1px);
      -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
      clip-path: inset(0px 0px 99.9% 99.9%);
      overflow: hidden;
      height: 1px;
      width: 1px;
      padding: 0;
      border: 0;
    }

    .channel-html .colornav-link {
      border: 2px solid transparent;
      border-radius: 50%;
      box-sizing: border-box;
      color: #1d1d1f;
      cursor: pointer;
      float: left;
      margin-bottom: 2.4705882353em;
      padding: 3px;
      position: relative;
      width: 42px;
      height: 42px;
      z-index: 1;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .colornav-link {
        margin-bottom: 2.5882352941em;
        padding: 2px;
        width: 36px;
        height: 36px;
      }
    }

    .channel-html .colornav-value:checked~.colornav-link {
      border-color: #0071e3;
      cursor: default;
    }

    .channel-html .colornav-link:focus,
    .channel-html .colornav-value:focus~.colornav-link {
      box-shadow: 0 0 0 4px rgba(0, 125, 250, 0.6);
      outline: none;
    }

    .channel-html .colornav-link:focus[data-focus-method=mouse]:not(input):not(textarea):not(select),
    .channel-html .colornav-link:focus[data-focus-method=touch]:not(input):not(textarea):not(select),
    .channel-html .colornav-value:focus~.colornav-link[data-focus-method=mouse]:not(input):not(textarea):not(select),
    .channel-html .colornav-value:focus~.colornav-link[data-focus-method=touch]:not(input):not(textarea):not(select) {
      box-shadow: none;
    }

    .channel-html .colornav-swatch {
      background: #f5f5f7 center center;
      border-radius: 50%;
      display: block;
      width: 32px;
      height: 32px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .colornav-swatch {
        width: 28px;
        height: 28px;
      }
    }

    .channel-html .colornav-swatch:after {
      border-radius: inherit;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
      content: "";
      display: block;
      height: inherit;
      position: absolute;
      width: inherit;
    }

    .channel-html .colornav-label,
    .channel-html .colornav-label-hidden {
      position: absolute;
      clip: rect(1px, 1px, 1px, 1px);
      -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
      clip-path: inset(0px 0px 99.9% 99.9%);
      overflow: hidden;
      height: 1px;
      width: 1px;
      padding: 0;
      border: 0;
    }

    .channel-html .colornav-label {
      overflow: visible;
    }

    .channel-html .colornav-value:checked~.colornav-link .colornav-label {
      font-size: 12px;
      line-height: 1.3333733333;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      clip: auto;
      -webkit-clip-path: none;
      clip-path: none;
      margin-left: -50px;
      padding-top: 7px;
      position: absolute;
      top: 100%;
      left: 50%;
      text-align: center;
      white-space: nowrap;
      width: 100px;
      height: auto;
      z-index: 1;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .colornav-value:checked~.colornav-link .colornav-label {
        padding-top: 4px;
      }
    }

    .channel-html [copy-type=h1]+*,
    .channel-html [copy-type=h2]+*,
    .channel-html [copy-type=h3]+*,
    .channel-html [copy-type=h4]+*,
    .channel-html [copy-type=h5]+*,
    .channel-html [copy-type=h6]+* {
      margin-top: 0.8em;
    }

    .channel-html .section-background {
      position: relative;
    }

    .channel-html .badge {
      white-space: normal;
      margin: 0;
    }

    .channel-html .badge .badge-value .unit--text-gradient {
      background: transparent;
    }

    .channel-html .badge .badge-content {
      margin: 0 !important;
    }

    .channel-html .badge-caption-up {
      word-wrap: break-word;
      bottom: 0.3em !important;
      position: relative !important;
      display: inline-block !important;
    }

    .channel-html .badge-caption-bottom {
      top: 0.2em !important;
      position: relative !important;
      display: block !important;
    }

    .channel-html .badge .badge-caption-up.helvetica-neue,
    .channel-html .badge .badge-caption-bottom.helvetica-neue {
      font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      letter-spacing: normal;
    }

    .channel-html .bento-box {
      margin-left: 0;
    }

    @media only screen and (min-width: 1069px) {
      .channel-html .bento-box.large-hide {
        display: none;
      }
    }

    @media only screen and (min-width: 735px) and (max-width: 1068px) {
      .channel-html .bento-box.medium-hide {
        display: none;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bento-box.small-hide {
        display: none;
      }
    }

    .channel-html .bentobox-item {
      display: flex;
      flex-direction: column;
    }

    .channel-html .button {
      padding-left: 19px;
      padding-top: 7px;
      padding-bottom: 7px;
      padding-right: 19px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .button {
        padding-left: 19px;
        padding-top: 7px;
        padding-bottom: 7px;
        padding-right: 19px;
      }
    }

    .channel-html .button-channel {
      background: transparent;
      border: 1px solid #1d1d1f;
      color: #1d1d1f;
    }

    .channel-html .button-channel:hover {
      background: transparent;
      border: 1px solid #6e6e73;
      color: #6e6e73;
    }

    .channel-html .colornav-items {
      margin-left: 0;
      padding-top: 0;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .colornav-items {
        max-width: 83px;
      }
    }

    .channel-html .colornav-swatch {
      position: relative;
    }



    /*
When you have two images of a different size, this function will
allow you to align the smaller one to the bottom of the column.

@example scss
	.bigger-image {
		@include picture(image_bigger);
	}

	.smaller-image {
		@include picture(image_smaller);

		@each $viewport in viewport-list() {
			@include viewport($viewport) {
				@include techspecs-image-bottom-align(image_bigger, image_smaller, $viewport);
			}
		}
	}
*/

    /*
When you have two images of a different size, this function will
allow you to align the smaller one to the vertical center of the bigger one.

@example scss
	.bigger-image {
		@include picture(image_bigger);
	}

	.smaller-image {
		@include picture(image_smaller);

		@each $viewport in viewport-list() {
			@include viewport($viewport) {
				@include techspecs-image-middle-align(image_bigger, image_smaller, $viewport);
			}
		}
	}
*/

    /*
This will generate unique classes for all provided built-in app images.

@example scss
	.section-apps, .section-freeapps {
		@include techspecs-appicon-classes();
	}

@example html
	<figure class="techspecs-app">
		<div class="techspecs-app-icon techspecs-app-icon-camera"></div>
		<figcaption>Camera</figcaption>
	</figure>
*/

    .channel-compare .compare-wrapper {
      position: relative;
    }

    .channel-compare .compare-section,
    .channel-compare .selector-table {
      position: relative;
    }

    .channel-compare sup * {
      vertical-align: inherit;
      font-weight: 400;
    }

    .channel-compare ul {
      margin: 0;
      list-style: none;
    }

    .channel-compare .compare-section {
      padding-top: 39px;
      border: 0;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-section {
        padding-top: 53px;
        padding-bottom: 25px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-section {
        padding-top: 20px;
        padding-bottom: 14px;
      }
    }

    .channel-compare .compare-section.no-padding-top {
      padding: 0;
    }

    .channel-compare .compare-row {
      --column-gap: 31px;
      display: grid;
      column-gap: var(--column-gap);
      grid-template-columns: repeat(var(--grid-column), calc((100% - var(--column-gap) * (var(--grid-column) - 1)) / var(--grid-column)));
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-row {
        --column-gap: 28px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-row {
        --column-gap: 18px;
      }
    }

    .channel-compare .compare-row {
      margin-bottom: 55px;
    }

    .channel-compare .compare-row.compare-template-border-bottom .compare-column {
      border-bottom: 1px solid #d6d6d6;
      margin-bottom: 30px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-row.compare-template-border-bottom .compare-column {
        margin-bottom: 25px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-row.compare-template-border-bottom .compare-column {
        margin-bottom: 20px;
      }
    }

    .channel-compare .compare-row.compare-template-space-bottom .compare-column {
      margin-bottom: 48px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-row.compare-template-space-bottom .compare-column {
        margin-bottom: 34px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-row.compare-template-space-bottom .compare-column {
        margin-bottom: 23px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-row {
        margin-bottom: 38px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-row {
        margin-bottom: 34px;
      }
    }

    .channel-compare .compare-row:last-child {
      margin-bottom: 0;
    }

    .channel-compare .compare-rowheader {
      order: -1;
    }

    .channel-compare .compare-rowheader,
    .channel-compare .compare-rowheader-style {
      grid-column: 1/var(--grid-column) span;
    }

    .channel-compare .compare-column {
      display: none;
      box-sizing: border-box;
    }

    .channel-compare .compare.with-fullwidthrowheader .compare-rowheader {
      width: 100%;
    }

    .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
      font-size: 24px;
      line-height: 1.1666666667;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      padding-bottom: 27px;
      border-bottom: 1px solid #d6d6d6;
      margin-bottom: 33px;
      padding-bottom: 27px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
        font-size: 21px;
        line-height: 1.1904761905;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
        font-size: 17px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
        margin-bottom: 28px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare.with-fullwidthrowheader .compare-rowheader-style {
        margin-bottom: 17px;
        padding-bottom: 13px;
      }
    }

    .channel-compare .compare.with-fullwidthrowheader .compare-column {
      text-align: center;
      justify-content: center;
    }

    .channel-compare .compare.with-fullwidthrowheader .compare-column-span {
      width: 100%;
    }

    .channel-compare .compare .copy.helvetica-neue {
      font-weight: 500;
      line-height: 1.235;
    }

    .compare-wrapper {
      width: 100%;
    }



    .channel-compare .selector-table {
      padding-top: 10px;
      margin-bottom: 60px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .selector-table {
        margin-bottom: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .selector-table {
        margin-bottom: 24px;
      }
    }

    .channel-compare .selector-table .compare-row {
      margin: 0;
    }

    .channel-compare .selector-table .compare-rowheader {
      height: 0;
    }

    .channel-compare .selector-dropdown {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      font-size: 19px;
      line-height: 1.4737642105;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      width: 100%;
      margin: 0;
      background: transparent;
      border: 0;
      border-radius: 0;
      overflow: hidden;
      -webkit-appearance: none;
      appearance: none;
      cursor: pointer;
      outline: none;
      padding: 16px;
      color: black;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .selector-dropdown {
        font-size: 17px;
        line-height: 1.3529611765;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .selector-dropdown {
        font-size: 14px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-compare .selector-dropdown:focus {
      border-radius: 12px;
      box-shadow: 0 0 0 4px rgba(131, 192, 253, 0.5);
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .selector-dropdown {
        font-size: 100%;
        padding-bottom: 11px;
        padding-left: 0px;
        padding-top: 11px;
        color: black;
      }

      .channel-compare .selector-dropdown:focus {
        border-radius: 5px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .selector-dropdown {
        color: black;
      }
    }

    .channel-compare .selector-icon {
      display: block;
      position: absolute;
      top: 4px;
      right: 0;
      font-size: 20px;
      line-height: 1;
      color: #0066cc;
      padding-right: 10px;
      padding-top: 15px;
      pointer-events: none;
      right: 6px;
    }

    .channel-compare .selector-icon:after {
      pointer-events: none;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .selector-icon {
        top: 2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .selector-icon {
        font-size: 24px;
        top: -8px;
        padding-right: 0;
        right: 0px;
      }
    }

    .channel-compare .static-dropdown {
      border-bottom: 1px solid #d6d6d6;
      text-align: center;
      font-size: 19px;
      line-height: 1.4737642105;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      width: 100%;
      margin: 0;
      padding-bottom: 7px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .static-dropdown {
        font-size: 17px;
        line-height: 1.3529611765;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .static-dropdown {
        font-size: 14px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }



    .channel-compare .badge {
      min-width: 0;
      margin: 0 auto;
    }

    .channel-compare .badge .badge-content {
      margin: 0;
      padding: 0;
    }

    .channel-compare .badge-content {
      margin: 0;
      padding: 0;
    }

    .channel-compare .badge-content .badge-caption {
      position: static;
      margin-bottom: 0;
      font-size: 17px;
      line-height: 1.4705882353;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .badge-content .badge-caption {
        font-size: 14px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .badge-content .badge-caption {
        font-size: 12px;
        line-height: 1.3333733333;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .badge-content .badge-caption {
        font-size: 12px;
      }
    }

    .channel-compare .badge-content .badge-caption p {
      color: #1d1d1f;
      font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    }

    .channel-compare .badge-content .badge-caption.copy {
      font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      font-weight: 500;
      line-height: 1.235;
    }

    .channel-compare .badge-content .badge-value {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      font-size: 64px;
      line-height: 1.0625;
      font-weight: 600;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      line-height: 0.74em;
      margin-bottom: -6px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .badge-content .badge-value {
        font-size: 48px;
        line-height: 1.0834933333;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .badge-content .badge-value {
        font-size: 32px;
        line-height: 1.125;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }
    }

    .channel-compare .compare-section .badge-content .badge-value {
      font-size: 60px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-section .badge-content .badge-value {
        font-size: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-section .badge-content .badge-value {
        font-size: 28px;
      }
    }

    .channel-compare .badge-content .badge-elevated .badge-caption p {
      color: #86868b;
    }

    .channel-compare .badge-content .image-icon-wrapper {
      position: relative;
      text-align: center;
    }

    .channel-compare .badge-content .image-icon-wrapper figure {
      display: block;
      margin: auto;
    }

    .channel-compare .badge-content .badge-row {
      padding: 0 50px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .badge-content .badge-row {
        padding: 0 22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .badge-content .badge-row {
        padding: 0 0;
      }
    }

    .channel-compare .badge-content .badge-row:first-child .badge-caption {
      margin-bottom: -10px;
    }

    .channel-compare .badge-content .badge-row:not(:last-child) {
      margin-bottom: 22px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .badge-content .badge-row:not(:last-child) {
        margin-bottom: 14px;
      }
    }

    .channel-compare .compare-template-border-bottom .button-container {
      margin-bottom: 30px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-template-border-bottom .button-container {
        margin-bottom: 25px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-template-border-bottom .button-container {
        margin-bottom: 20px;
      }
    }

    .channel-compare .button {
      background: transparent;
      border: 1px solid #1d1d1f;
      color: #1d1d1f;
      font-family: "SF Pro Text", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      padding-left: 19px;
      padding-right: 19px;
      padding-top: 7px;
      padding-bottom: 7px;
      font-size: 17px;
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .button {
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 4px;
        padding-bottom: 4px;
        font-size: 12px;
      }
    }

    .channel-compare .button:hover {
      background: transparent;
      border: 1px solid #6e6e73;
      color: #6e6e73;
    }

    .channel-compare .button-container {
      margin-bottom: 73px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .button-container {
        margin-bottom: 47px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .button-container {
        margin-bottom: 37px;
      }
    }

    .channel-compare .button-container .copy.helvetica-neue {
      font-weight: 400;
    }

    .channel-compare .compare-template-border-bottom .row-colors {
      margin-bottom: 0;
    }

    .channel-compare .multi-row .compare-template-preview-item-color-nav {
      margin-bottom: 41px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .multi-row .compare-template-preview-item-color-nav {
        margin-bottom: 36px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .multi-row .compare-template-preview-item-color-nav {
        margin-bottom: 27px;
      }
    }

    .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
      margin-bottom: 75px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
        margin-bottom: 60px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
        margin-bottom: 41px;
      }
    }

    .channel-compare .multi-row .row-colors {
      padding-bottom: 0;
      margin-bottom: 0;
      margin-top: 0;
    }

    .channel-compare .row-colors {
      width: 100%;
      text-align: center;
      padding-bottom: 27px;
      margin-bottom: 27px;
      margin-top: 29px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .row-colors {
        padding-bottom: 22px;
        margin-bottom: 22px;
        margin-top: 22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .row-colors {
        padding-bottom: 17px;
        margin-bottom: 18px;
        margin-top: 18px;
      }
    }

    .channel-compare .colornav-item {
      display: inline-block;
      margin: 0 0 0 9px;
    }

    .channel-compare .colornav-item:first-child {
      margin-left: 0;
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .colornav-item:nth-of-type(-n+4) {
        margin-bottom: 18px;
      }

      .channel-compare .colornav-item:nth-of-type(5) {
        margin-left: 11.5px;
      }
    }

    .channel-compare .colornav-swatch {
      width: 22px;
      height: 22px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .colornav-swatch {
        width: 20px;
        height: 20px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .colornav-swatch {
        width: 14px;
        height: 14px;
      }
    }

    .channel-compare .swatch-image {
      position: relative;
      left: calc(100% + 5px);
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .swatch-image {
        left: calc(100% + 3px);
      }
    }

    .channel-compare .embed-image {
      align-self: flex-end;
    }



    .channel-compare .compare-template-preview-item-pricing {
      margin-bottom: 33px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-template-preview-item-pricing {
        margin-bottom: 26px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-template-preview-item-pricing {
        margin-bottom: 19px;
      }
    }

    .channel-compare .compare-template-preview-item-pricing:last-child {
      margin-bottom: 41px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-compare .compare-template-preview-item-pricing:last-child {
        margin-bottom: 36px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-compare .compare-template-preview-item-pricing:last-child {
        margin-bottom: 27px;
      }
    }



    .channel-html .copy {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    }

    .channel-html .copy.helvetica-neue {
      font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      letter-spacing: normal;
    }

    .channel-html .typography-partner-pricing {
      font-size: 17px;
      line-height: 1.4705882353;
      font-weight: 400;
      letter-spacing: 0em;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      font-weight: 500;
    }

    .channel-html .typography-caption li {
      padding-bottom: 10px;
    }

    .channel-html a.footer-link {
      color: #555555;
    }

    .visually-hidden-text {
      font-size: 0.0001em;
      text-indent: -9999px;
      line-height: 0;
    }

    .channel-html .link-wrapper {
      display: inline-flex;
    }

    body {
      margin: 0;
      overflow-x: hidden;
    }



    @media only screen and (min-width: 1069px) {
      .channel-html .row.large-display-bleed {
        position: relative;
      }

      .channel-html .row.large-display-bleed .column {
        z-index: 1;
      }

      .channel-html .row.large-display-bleed::after,
      .channel-html .row.large-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 44px;
        left: -44px;
      }

      .channel-html .row.large-display-bleed::after {
        left: initial;
        right: -44px;
      }
    }

    @media only screen and (min-width: 735px) and (max-width: 1068px) {
      .channel-html .row.medium-display-bleed {
        position: relative;
      }

      .channel-html .row.medium-display-bleed .column {
        z-index: 1;
      }

      .channel-html .row.medium-display-bleed::after,
      .channel-html .row.medium-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 22px;
        left: -22px;
      }

      .channel-html .row.medium-display-bleed::after {
        left: initial;
        right: -22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .row.small-display-bleed {
        position: relative;
      }

      .channel-html .row.small-display-bleed .column {
        z-index: 1;
      }

      .channel-html .row.small-display-bleed::after,
      .channel-html .row.small-display-bleed::before {
        display: block;
        content: " ";
        position: absolute;
        top: 0;
        height: 100%;
        width: 20px;
        left: -20px;
      }

      .channel-html .row.small-display-bleed::after {
        left: initial;
        right: -20px;
      }
    }

    .channel-html .section {
      display: flex;
    }

    .channel-html .section .section-content {
      margin-left: auto;
      margin-right: auto;
      width: 980px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .section .section-content {
        width: 692px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .section .section-content {
        width: 280px;
      }
    }

    .channel-html .section.large-show {
      display: flex;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .section.medium-show {
        display: flex !important;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .section.small-show {
        display: flex !important;
      }
    }

    .channel-html .section.large-hide {
      display: none;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .section.medium-hide {
        display: none;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .section.small-hide {
        display: none !important;
      }
    }

    .image-accessories_airpods {
      width: 381px;
      height: 235px;
      background-size: 381px 235px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_large.png?1633983728732);
    }

    .image-m1_icon_max {
      width: 84px;
      height: 84px;
      background-size: 84px 84px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_large.png?1633983728732);
    }

    .image-why_icon_performance {
      width: 91px;
      height: 52px;
      background-size: 91px 52px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_large.png?1633983728733);
    }

    .image-compare_macbook_pro_m1_14_spacegray {
      width: 261px;
      height: 158px;
      background-size: 261px 158px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_large.png?1633983728735);
    }

    .image-apps {
      width: 597px;
      height: 365px;
      background-size: 597px 365px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_large.png?1633983728736);
    }

    .image-hero {
      width: 900px;
      height: 305px;
      background-size: 900px 305px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_large.png?1633983728736);
    }

    .image-display {
      width: 697px;
      height: 227px;
      background-size: 697px 227px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_large.png?1633983728737);
    }

    .image-compare_macbook_air_m1_gold {
      width: 264px;
      height: 153px;
      background-size: 264px 153px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_large.png?1633983728737);
    }

    .image-connectivity_magsafe {
      width: 408px;
      height: 230px;
      background-size: 408px 230px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_large.png?1633983728738);
    }

    .image-icon_M1_chip {
      width: 70px;
      height: 70px;
      background-size: 70px 70px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_large.png?1633983728741);
    }

    .image-m1_max {
      width: 241px;
      height: 148px;
      background-size: 241px 148px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_max_large.png?1633983728742);
    }

    .image-why_icon_connectivity {
      width: 94px;
      height: 52px;
      background-size: 94px 52px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_large.png?1633983728743);
    }

    .image-m1_pro {
      width: 241px;
      height: 148px;
      background-size: 241px 148px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_pro_large.png?1633983728745);
    }

    .image-m1_icon_pro {
      width: 84px;
      height: 84px;
      background-size: 84px 84px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_large.png?1633983728745);
    }

    .image-icon_M1_Max_M1_Pro {
      width: 158px;
      height: 70px;
      background-size: 158px 70px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_large.png?1633983728749);
    }

    .image-accessories_applecare {
      width: 389px;
      height: 232px;
      background-size: 389px 232px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_large.png?1633983728749);
    }

    .image-camera {
      width: 408px;
      height: 408px;
      background-size: 408px 408px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_large.png?1633983728750);
    }

    .image-compare_macbook_pro_m1_16_spacegray {
      width: 287px;
      height: 176px;
      background-size: 287px 176px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_large.png?1633983728750);
    }

    .image-why_icon_m1_chips {
      width: 122px;
      height: 52px;
      background-size: 122px 52px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_large.png?1633983728752);
    }

    .image-connectivity_icon_monitors {
      width: 35px;
      height: 22px;
      background-size: 35px 22px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_large.png?1633983728752);
    }

    .image-accessories_icon_applecare {
      width: 15px;
      height: 15px;
      background-size: 15px 15px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_large.png?1633983728753);
    }

    .image-connectivity_port {
      width: 408px;
      height: 230px;
      background-size: 408px 230px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_large.png?1633983728753);
    }

    .image-camera_icon_video {
      width: 31px;
      height: 21px;
      background-size: 31px 21px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_large.png?1633983728754);
    }

    .image-hero_wordmark {
      width: 256px;
      height: 33px;
      background-size: 256px 33px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_large.png?1633983728756);
    }

    .image-performance {
      width: 596px;
      height: 365px;
      background-size: 596px 365px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_large.png?1633983728757);
    }

    .image-icon_touch_id {
      width: 67px;
      height: 67px;
      background-size: 67px 67px;
      background-repeat: no-repeat;
      background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_large.png?1633983728761);
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-m1_icon_max {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_large_2x.png?1633983728730);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-compare_macbook_air_m1_gold {
        width: 264px;
        height: 153px;
        background-size: 264px 153px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_large_2x.png?1633983728732);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-why_icon_performance {
        width: 91px;
        height: 52px;
        background-size: 91px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_large_2x.png?1633983728734);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-compare_macbook_pro_m1_14_spacegray {
        width: 261px;
        height: 158px;
        background-size: 261px 158px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_large_2x.png?1633983728735);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-camera_icon_video {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_large_2x.png?1633983728735);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-why_icon_connectivity {
        width: 94px;
        height: 52px;
        background-size: 94px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_large_2x.png?1633983728739);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-connectivity_icon_monitors {
        width: 35px;
        height: 22px;
        background-size: 35px 22px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_large_2x.png?1633983728740);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-icon_M1_Max_M1_Pro {
        width: 158px;
        height: 70px;
        background-size: 158px 70px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_large_2x.png?1633983728741);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-compare_macbook_pro_m1_16_spacegray {
        width: 287px;
        height: 176px;
        background-size: 287px 176px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_large_2x.png?1633983728743);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-connectivity_magsafe {
        width: 408px;
        height: 230px;
        background-size: 408px 230px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_large_2x.png?1633983728745);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-m1_max {
        width: 241px;
        height: 148px;
        background-size: 241px 148px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_max_large_2x.png?1633983728745);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-accessories_airpods {
        width: 381px;
        height: 235px;
        background-size: 381px 235px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_large_2x.png?1633983728745);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-why_icon_m1_chips {
        width: 122px;
        height: 52px;
        background-size: 122px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_large_2x.png?1633983728749);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-camera {
        width: 408px;
        height: 408px;
        background-size: 408px 408px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_large_2x.png?1633983728752);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-performance {
        width: 596px;
        height: 365px;
        background-size: 596px 365px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_large_2x.png?1633983728752);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-hero_wordmark {
        width: 256px;
        height: 33px;
        background-size: 256px 33px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_large_2x.png?1633983728755);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-icon_M1_chip {
        width: 70px;
        height: 70px;
        background-size: 70px 70px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_large_2x.png?1633983728756);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-accessories_icon_applecare {
        width: 15px;
        height: 15px;
        background-size: 15px 15px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_large_2x.png?1633983728756);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-accessories_applecare {
        width: 389px;
        height: 232px;
        background-size: 389px 232px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_large_2x.png?1633983728756);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-apps {
        width: 597px;
        height: 365px;
        background-size: 597px 365px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_large_2x.png?1633983728757);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-hero {
        width: 900px;
        height: 305px;
        background-size: 900px 305px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_large_2x.png?1633983728757);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-display {
        width: 697px;
        height: 227px;
        background-size: 697px 227px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_large_2x.png?1633983728758);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-m1_pro {
        width: 241px;
        height: 148px;
        background-size: 241px 148px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_pro_large_2x.png?1633983728759);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-connectivity_port {
        width: 408px;
        height: 230px;
        background-size: 408px 230px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_large_2x.png?1633983728759);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-m1_icon_pro {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_large_2x.png?1633983728759);
      }
    }

    @media (-webkit-min-device-pixel-ratio:1.5),
    (min-resolution:144dpi),
    only screen and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (min-resolution:1.5dppx) {
      .image-icon_touch_id {
        width: 69px;
        height: 70px;
        background-size: 69px 70px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_large_2x.png?1633983728762);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-apps {
        width: 367px;
        height: 225px;
        background-size: 367px 225px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_medium.png?1633983728732);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-icon_M1_chip {
        width: 52px;
        height: 52px;
        background-size: 52px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_medium.png?1633983728738);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-accessories_icon_applecare {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_medium.png?1633983728739);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-performance {
        width: 414px;
        height: 255px;
        background-size: 414px 255px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_medium.png?1633983728740);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-hero_wordmark {
        width: 173px;
        height: 23px;
        background-size: 173px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_medium.png?1633983728741);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-hero {
        width: 640px;
        height: 217px;
        background-size: 640px 217px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_medium.png?1633983728742);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-compare_macbook_pro_m1_14_spacegray {
        width: 195px;
        height: 118px;
        background-size: 195px 118px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_medium.png?1633983728748);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-camera_icon_video {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_medium.png?1633983728748);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-connectivity_magsafe {
        width: 289px;
        height: 163px;
        background-size: 289px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_medium.png?1633983728748);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-why_icon_performance {
        width: 91px;
        height: 52px;
        background-size: 91px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_medium.png?1633983728749);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-icon_M1_Max_M1_Pro {
        width: 112px;
        height: 52px;
        background-size: 112px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_medium.png?1633983728750);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-camera {
        width: 288px;
        height: 288px;
        background-size: 288px 288px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_medium.png?1633983728750);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-compare_macbook_air_m1_gold {
        width: 191px;
        height: 111px;
        background-size: 191px 111px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_medium.png?1633983728750);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-icon_touch_id {
        width: 52px;
        height: 52px;
        background-size: 52px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_medium.png?1633983728751);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-connectivity_icon_monitors {
        width: 33px;
        height: 20px;
        background-size: 33px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_medium.png?1633983728751);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-connectivity_port {
        width: 289px;
        height: 163px;
        background-size: 289px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_medium.png?1633983728751);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-why_icon_connectivity {
        width: 94px;
        height: 52px;
        background-size: 94px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_medium.png?1633983728752);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-accessories_applecare {
        width: 284px;
        height: 171px;
        background-size: 284px 171px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_medium.png?1633983728753);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-compare_macbook_pro_m1_16_spacegray {
        width: 215px;
        height: 132px;
        background-size: 215px 132px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_medium.png?1633983728757);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-m1_icon_max {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_medium.png?1633983728757);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-m1_icon_pro {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_medium.png?1633983728757);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-accessories_airpods {
        width: 291px;
        height: 181px;
        background-size: 291px 181px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_medium.png?1633983728758);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-display {
        width: 506px;
        height: 163px;
        background-size: 506px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_medium.png?1633983728760);
      }
    }

    @media only screen and (max-width:1068px) {
      .image-why_icon_m1_chips {
        width: 112px;
        height: 52px;
        background-size: 112px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_medium.png?1633983728760);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-performance {
        width: 414px;
        height: 255px;
        background-size: 414px 255px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_medium_2x.png?1633983728731);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-why_icon_m1_chips {
        width: 112px;
        height: 52px;
        background-size: 112px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_medium_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-camera_icon_video {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_medium_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-accessories_airpods {
        width: 291px;
        height: 181px;
        background-size: 291px 181px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_medium_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-icon_touch_id {
        width: 52px;
        height: 52px;
        background-size: 52px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_medium_2x.png?1633983728738);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-compare_macbook_pro_m1_14_spacegray {
        width: 195px;
        height: 118px;
        background-size: 195px 118px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_medium_2x.png?1633983728739);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-accessories_icon_applecare {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_medium_2x.png?1633983728740);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-compare_macbook_air_m1_gold {
        width: 191px;
        height: 111px;
        background-size: 191px 111px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_medium_2x.png?1633983728741);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-icon_M1_chip {
        width: 52px;
        height: 52px;
        background-size: 52px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_medium_2x.png?1633983728741);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-connectivity_magsafe {
        width: 289px;
        height: 163px;
        background-size: 289px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_medium_2x.png?1633983728742);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-icon_M1_Max_M1_Pro {
        width: 112px;
        height: 52px;
        background-size: 112px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_medium_2x.png?1633983728742);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-why_icon_connectivity {
        width: 94px;
        height: 52px;
        background-size: 94px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_medium_2x.png?1633983728742);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-camera {
        width: 288px;
        height: 288px;
        background-size: 288px 288px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_medium_2x.png?1633983728742);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-hero_wordmark {
        width: 173px;
        height: 23px;
        background-size: 173px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_medium_2x.png?1633983728743);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-m1_icon_max {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_medium_2x.png?1633983728746);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-accessories_applecare {
        width: 284px;
        height: 171px;
        background-size: 284px 171px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_medium_2x.png?1633983728747);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-apps {
        width: 367px;
        height: 225px;
        background-size: 367px 225px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_medium_2x.png?1633983728747);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-connectivity_port {
        width: 289px;
        height: 163px;
        background-size: 289px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_medium_2x.png?1633983728747);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-m1_icon_pro {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_medium_2x.png?1633983728747);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-display {
        width: 506px;
        height: 163px;
        background-size: 506px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_medium_2x.png?1633983728749);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-why_icon_performance {
        width: 91px;
        height: 52px;
        background-size: 91px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_medium_2x.png?1633983728750);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-connectivity_icon_monitors {
        width: 33px;
        height: 20px;
        background-size: 33px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_medium_2x.png?1633983728751);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-compare_macbook_pro_m1_16_spacegray {
        width: 215px;
        height: 132px;
        background-size: 215px 132px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_medium_2x.png?1633983728752);
      }
    }

    @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:1068px) and (min-resolution:1.5dppx),
    only screen and (max-width:1068px) and (min-resolution:144dpi) {
      .image-hero {
        width: 640px;
        height: 217px;
        background-size: 640px 217px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_medium_2x.png?1633983728756);
      }
    }

    @media only screen and (max-width:734px) {
      .image-display {
        width: 667px;
        height: 217px;
        background-size: 667px 217px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_small.png?1633983728730);
      }
    }

    @media only screen and (max-width:734px) {
      .image-m1_icon_pro {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_small.png?1633983728731);
      }
    }

    @media only screen and (max-width:734px) {
      .image-m1_icon_max {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_small.png?1633983728731);
      }
    }

    @media only screen and (max-width:734px) {
      .image-compare_macbook_air_m1_gold {
        width: 118px;
        height: 69px;
        background-size: 118px 69px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_small.png?1633983728733);
      }
    }

    @media only screen and (max-width:734px) {
      .image-camera_icon_video {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_small.png?1633983728734);
      }
    }

    @media only screen and (max-width:734px) {
      .image-why_icon_m1_chips {
        width: 112px;
        height: 50px;
        background-size: 112px 50px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_small.png?1633983728735);
      }
    }

    @media only screen and (max-width:734px) {
      .image-hero_wordmark {
        width: 149px;
        height: 20px;
        background-size: 149px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_small.png?1633983728736);
      }
    }

    @media only screen and (max-width:734px) {
      .image-performance {
        width: 399px;
        height: 244px;
        background-size: 399px 244px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_small.png?1633983728737);
      }
    }

    @media only screen and (max-width:734px) {
      .image-connectivity_magsafe {
        width: 280px;
        height: 158px;
        background-size: 280px 158px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_small.png?1633983728741);
      }
    }

    @media only screen and (max-width:734px) {
      .image-compare_macbook_pro_m1_16_spacegray {
        width: 133px;
        height: 82px;
        background-size: 133px 82px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_small.png?1633983728741);
      }
    }

    @media only screen and (max-width:734px) {
      .image-icon_M1_chip {
        width: 43px;
        height: 43px;
        background-size: 43px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_small.png?1633983728743);
      }
    }

    @media only screen and (max-width:734px) {
      .image-camera {
        width: 280px;
        height: 280px;
        background-size: 280px 280px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_small.png?1633983728745);
      }
    }

    @media only screen and (max-width:734px) {
      .image-why_icon_performance {
        width: 91px;
        height: 52px;
        background-size: 91px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_small.png?1633983728745);
      }
    }

    @media only screen and (max-width:734px) {
      .image-accessories_icon_applecare {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_small.png?1633983728746);
      }
    }

    @media only screen and (max-width:734px) {
      .image-icon_touch_id {
        width: 43px;
        height: 43px;
        background-size: 43px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_small.png?1633983728749);
      }
    }

    @media only screen and (max-width:734px) {
      .image-apps {
        width: 406px;
        height: 251px;
        background-size: 406px 251px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_small.png?1633983728751);
      }
    }

    @media only screen and (max-width:734px) {
      .image-connectivity_icon_monitors {
        width: 36px;
        height: 22px;
        background-size: 36px 22px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_small.png?1633983728754);
      }
    }

    @media only screen and (max-width:734px) {
      .image-accessories_applecare {
        width: 285px;
        height: 172px;
        background-size: 285px 172px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_small.png?1633983728755);
      }
    }

    @media only screen and (max-width:734px) {
      .image-hero {
        width: 312px;
        height: 106px;
        background-size: 312px 106px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_small.png?1633983728756);
      }
    }

    @media only screen and (max-width:734px) {
      .image-accessories_airpods {
        width: 283px;
        height: 177px;
        background-size: 283px 177px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_small.png?1633983728758);
      }
    }

    @media only screen and (max-width:734px) {
      .image-icon_M1_Max_M1_Pro {
        width: 96px;
        height: 43px;
        background-size: 96px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_small.png?1633983728759);
      }
    }

    @media only screen and (max-width:734px) {
      .image-compare_macbook_pro_m1_14_spacegray {
        width: 121px;
        height: 74px;
        background-size: 121px 74px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_small.png?1633983728760);
      }
    }

    @media only screen and (max-width:734px) {
      .image-why_icon_connectivity {
        width: 94px;
        height: 52px;
        background-size: 94px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_small.png?1633983728761);
      }
    }

    @media only screen and (max-width:734px) {
      .image-connectivity_port {
        width: 280px;
        height: 158px;
        background-size: 280px 158px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_small.png?1633983728762);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-performance {
        width: 399px;
        height: 244px;
        background-size: 399px 244px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/performance_small_2x.png?1633983728731);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-compare_macbook_pro_m1_16_spacegray {
        width: 133px;
        height: 82px;
        background-size: 133px 82px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_16_spacegray_small_2x.png?1633983728732);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-connectivity_magsafe {
        width: 280px;
        height: 158px;
        background-size: 280px 158px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_magsafe_small_2x.png?1633983728732);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-hero_wordmark {
        width: 149px;
        height: 20px;
        background-size: 149px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_wordmark_small_2x.png?1633983728732);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-m1_icon_max {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_max_small_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-connectivity_icon_monitors {
        width: 36px;
        height: 22px;
        background-size: 36px 22px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_icon_monitors_small_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-icon_M1_Max_M1_Pro {
        width: 96px;
        height: 43px;
        background-size: 96px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_Max_M1_Pro_small_2x.png?1633983728734);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-hero {
        width: 312px;
        height: 106px;
        background-size: 312px 106px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/hero_small_2x.png?1633983728738);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-icon_touch_id {
        width: 43px;
        height: 43px;
        background-size: 43px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_touch_id_small_2x.png?1633983728738);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-why_icon_m1_chips {
        width: 112px;
        height: 50px;
        background-size: 112px 50px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_m1_chips_small_2x.png?1633983728741);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-compare_macbook_pro_m1_14_spacegray {
        width: 121px;
        height: 74px;
        background-size: 121px 74px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_pro_m1_14_spacegray_small_2x.png?1633983728741);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-icon_M1_chip {
        width: 43px;
        height: 43px;
        background-size: 43px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/icon_M1_chip_small_2x.png?1633983728743);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-accessories_icon_applecare {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_icon_applecare_small_2x.png?1633983728743);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-connectivity_port {
        width: 280px;
        height: 158px;
        background-size: 280px 158px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/connectivity_port_small_2x.png?1633983728743);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-why_icon_performance {
        width: 91px;
        height: 52px;
        background-size: 91px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_performance_small_2x.png?1633983728748);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-accessories_airpods {
        width: 283px;
        height: 177px;
        background-size: 283px 177px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_airpods_small_2x.png?1633983728749);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-camera {
        width: 280px;
        height: 280px;
        background-size: 280px 280px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_small_2x.png?1633983728749);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-display {
        width: 667px;
        height: 217px;
        background-size: 667px 217px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/display_small_2x.png?1633983728750);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-accessories_applecare {
        width: 285px;
        height: 172px;
        background-size: 285px 172px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/accessories_applecare_small_2x.png?1633983728751);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-why_icon_connectivity {
        width: 94px;
        height: 52px;
        background-size: 94px 52px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/why_icon_connectivity_small_2x.png?1633983728752);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-m1_icon_pro {
        width: 84px;
        height: 84px;
        background-size: 84px 84px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/m1_icon_pro_small_2x.png?1633983728753);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-camera_icon_video {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/camera_icon_video_small_2x.png?1633983728755);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-apps {
        width: 406px;
        height: 251px;
        background-size: 406px 251px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/apps_small_2x.png?1633983728756);
      }
    }

    @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
    only screen and (max-width:734px) and (min-resolution:1.5dppx),
    only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-compare_macbook_air_m1_gold {
        width: 118px;
        height: 69px;
        background-size: 118px 69px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbook_pro_2021/compare_macbook_air_m1_gold_small_2x.png?1633983728757);
      }
    }

    .w6b801e {
      /* But you can break out of scoping via SCSS "@at-root" feature */
    }

    .channel-html .channel-custom-font-custom-80-headline-super {
      font-size: 80px;
      line-height: 84px;
      letter-spacing: -0.015rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-80-headline-super {
        font-size: 64px;
        line-height: 68px;
        letter-spacing: -0.009rem;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-80-headline-super {
        font-size: 32px;
        line-height: 36px;
        letter-spacing: 0.004rem;
      }
    }

    .channel-html .channel-custom-font-custom-48-headline {
      font-size: 48px;
      line-height: 52px;
      letter-spacing: -0.003rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-48-headline {
        font-size: 40px;
        line-height: 44px;
        letter-spacing: 0rem;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-48-headline {
        font-size: 32px;
        line-height: 36px;
        letter-spacing: 0.004rem;
      }
    }

    .channel-html .channel-custom-font-custom-40-headline-reduced {
      font-size: 40px;
      line-height: 44px;
      letter-spacing: 0rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-40-headline-reduced {
        font-size: 32px;
        line-height: 36px;
        letter-spacing: 0.004rem;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-40-headline-reduced {
        font-size: 28px;
        line-height: 32px;
        letter-spacing: 0.007rem;
      }
    }

    .channel-html .channel-custom-font-custom-32-headline-hero {
      font-size: 32px;
      line-height: 36px;
      letter-spacing: 0.004rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-32-headline-hero {
        font-size: 28px;
        line-height: 32px;
        letter-spacing: 0.007rem;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-32-headline-hero {
        font-size: 19px;
        line-height: 23px;
        letter-spacing: 0.012rem;
      }
    }

    .channel-html .channel-custom-font-custom-28-headline-callout {
      font-size: 28px;
      line-height: 32px;
      letter-spacing: 0.007rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-28-headline-callout {
        font-size: 24px;
        line-height: 28px;
        letter-spacing: 0.009rem;
      }
    }

    .channel-html .channel-custom-font-custom-24-eyebrow {
      font-size: 24px;
      line-height: 28px;
      letter-spacing: 0.009rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-24-eyebrow {
        font-size: 21px;
        line-height: 25px;
        letter-spacing: 0.011rem;
      }
    }

    .channel-html .channel-custom-font-custom-24-intro-elevated {
      font-size: 24px;
      line-height: 32px;
      letter-spacing: 0.009rem;
      font-weight: 400;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-24-intro-elevated {
        font-size: 21px;
        line-height: 29px;
        letter-spacing: 0.011rem;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-24-intro-elevated {
        font-size: 19px;
        line-height: 27px;
        letter-spacing: 0.012rem;
      }
    }

    .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
      font-size: 21px;
      line-height: 25px;
      letter-spacing: 0.011rem;
      font-weight: 600;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-21-eyebrow-reduced {
        font-size: 19px;
        line-height: 23px;
        letter-spacing: 0.012rem;
      }
    }

    .channel-html .channel-custom-font-custom-21-intro {
      font-size: 21px;
      line-height: 29px;
      letter-spacing: 0.011rem;
      font-weight: 400;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .channel-custom-font-custom-21-intro {
        font-size: 19px;
        line-height: 27px;
        letter-spacing: 0.012rem;
      }
    }

    .channel-html .channel-custom-font-custom-17-body-reduced {
      font-size: 17px;
      line-height: 25px;
      letter-spacing: -0.022rem;
      font-weight: 400;
    }

    .channel-html .channel-custom-font-custom-17-body-reduced-flex-subhead {
      font-size: 17px;
      line-height: 25px;
      letter-spacing: -0.022rem;
      font-weight: 500;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-17-body-reduced-flex-subhead {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -0.016rem;
      }
    }

    .channel-html .channel-custom-font-custom-17-body-reduced-flex {
      font-size: 17px;
      line-height: 25px;
      letter-spacing: -0.022rem;
      font-weight: 400;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-17-body-reduced-flex {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -0.016rem;
      }
    }

    .channel-html .channel-custom-font-custom-17-body-tight {
      font-size: 17px;
      line-height: 21px;
      font-weight: 500;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .channel-custom-font-custom-17-body-tight {
        font-size: 17px;
        line-height: 25px;
      }
    }

    .channel-html .channel-custom-font-custom-14-body-reduced-subhead {
      font-size: 14px;
      line-height: 20px;
      letter-spacing: -0.016rem;
      font-weight: 500;
    }

    .channel-html .channel-custom-font-custom-14-body-reduced {
      font-size: 14px;
      line-height: 20px;
      letter-spacing: -0.016rem;
      font-weight: 400;
    }

    .channel-html .channel-custom-font-custom-12-sosumi-subhead {
      font-size: 12px;
      line-height: 16px;
      font-weight: 500;
    }

    .channel-html .channel-custom-font-custom-12-sosumi {
      font-size: 12px;
      line-height: 16px;
      font-weight: 400;
    }

    .channel-html .fa908b4 {
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .z9a22bc {
      /** alignment */
      /** Margin */
      margin-top: 64px;
      margin-bottom: 79px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9a22bc {
        margin-top: 54px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9a22bc {
        margin-top: 43px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9a22bc {
        margin-bottom: 59px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9a22bc {
        margin-bottom: 45px;
      }
    }

    .channel-html .x746c32 {
      /** Margin */
      /** Padding */
      /** Align text*/
      text-align: center;
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .v5af1c5 {
      /** alignment */
      justify-content: center;
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .adb5135 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .y8d5222 {
      /** Margin */
      margin-bottom: 38px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y8d5222 {
        margin-bottom: 31px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y8d5222 {
        margin-bottom: 12px;
      }
    }

    .channel-html .pAC640B {
      /** Margin */
      margin-top: 21px;
      margin-left: 38px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pAC640B {
        margin-top: 22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pAC640B {
        margin-top: 27px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pAC640B {
        margin-left: 24px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pAC640B {
        margin-left: -16px;
      }
    }

    .channel-html .l4F9CB9 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .k2E036B {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .z9b16b1 {
      color: #1d1d1f;
      margin-top: 48px;
      margin-bottom: 40px;
      padding-left: 82px;
      padding-right: 82px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9b16b1 {
        margin-top: 41px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9b16b1 {
        margin-bottom: 44px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9b16b1 {
        margin-bottom: 27px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9b16b1 {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9b16b1 {
        padding-right: 0px;
      }
    }

    .channel-html .lA07199 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .lD8E4FF {
      color: #1d1d1f;
      margin-top: 48px;
      margin-bottom: 40px;
      padding-left: 82px;
      padding-right: 82px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .lD8E4FF {
        margin-top: 30px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .lD8E4FF {
        margin-bottom: 41px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .lD8E4FF {
        margin-bottom: 22px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .lD8E4FF {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .lD8E4FF {
        padding-right: 0px;
      }
    }

    .channel-html .w6fd73a {
      color: #1d1d1f;
      margin-top: 0px;
      margin-bottom: 30px;
      padding-left: 90px;
      padding-right: 90px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w6fd73a {
        margin-bottom: 22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w6fd73a {
        margin-bottom: 17px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w6fd73a {
        padding-left: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w6fd73a {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w6fd73a {
        padding-right: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w6fd73a {
        padding-right: 0px;
      }
    }

    .channel-html .e3364d1 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-bottom: 22px;
      padding-left: 164px;
      padding-right: 164px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .e3364d1 {
        margin-bottom: 13px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e3364d1 {
        margin-bottom: 9px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .e3364d1 {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .e3364d1 {
        padding-right: 0px;
      }
    }

    .channel-html .bb2da7f {
      /** Color */
      color: #6e6e73;
      border: solid 1px #6e6e73;
    }

    .channel-html .h805F02 {
      background-color: #000000;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .yBCE646 {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 74px;
      margin-bottom: 74px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .yBCE646 {
        justify-content: center;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .yBCE646 {
        margin-top: 54px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .yBCE646 {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .yBCE646 {
        margin-bottom: 54px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .yBCE646 {
        margin-bottom: 10px;
      }
    }

    .channel-html .j52A182 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .h5A83EC {
      /** Margin */
      margin-left: -103px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .h5A83EC {
        margin-left: -123px;
      }
    }

    .channel-html .f5D65F1 {
      /** Margin */
      /** Padding */
      padding-left: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f5D65F1 {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f5D65F1 {
        padding-left: 0px;
      }
    }

    .channel-html .z9623A9 {
      color: #f5f5f7;
      margin-left: -1.5px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9623A9 {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9623A9 {
        margin-bottom: 7px;
      }
    }

    .channel-html .u14C8FB {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u14C8FB {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u14C8FB {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u14C8FB {
        margin-bottom: 24px;
      }
    }

    .channel-html .h4CC61A {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -1.5px;
      margin-bottom: 29px;
      padding-right: 11px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .h4CC61A {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .h4CC61A {
        margin-bottom: 24px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .h4CC61A {
        margin-bottom: 19px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .h4CC61A {
        padding-right: 9px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .h4CC61A {
        padding-right: 0px;
      }
    }

    .channel-html .j6C9A83 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .b362818 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .l329F94 .badge-caption-up {
      color: #f5f5f7;
    }

    .channel-html .l329F94 .badge-caption-bottom {
      color: #f5f5f7;
    }

    .channel-html .l329F94 span.badge-value {
      white-space: normal;
    }

    .channel-html .l329F94 .badge-value {
      color: #f5f5f7;
      margin: 2px 0 -4px;
    }

    .channel-html .l329F94 .unit {
      font-weight: 600;
    }

    .channel-html .uB232EC {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uB232EC {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uB232EC {
        margin-left: -117px;
      }
    }

    .channel-html .uF03551 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .s55205C {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s55205C {
        margin-bottom: 35px;
      }
    }

    .channel-html .pF5A48F {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .e8DDDC4 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .u453B06 .badge-caption-up {
      color: #f5f5f7;
    }

    .channel-html .u453B06 .badge-caption-bottom {
      color: #f5f5f7;
    }

    .channel-html .u453B06 span.badge-value {
      white-space: normal;
    }

    .channel-html .u453B06 .badge-value {
      color: #f5f5f7;
      margin: 0 0 -4px;
    }

    .channel-html .u453B06 .unit {
      font-weight: 600;
    }

    .channel-html .k59447B {
      background-color: #000000;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .oAC1DBC {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 80px;
      margin-bottom: 80px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oAC1DBC {
        justify-content: center;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oAC1DBC {
        margin-top: 53px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oAC1DBC {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oAC1DBC {
        margin-bottom: 53px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oAC1DBC {
        margin-bottom: 45px;
      }
    }

    .channel-html .m62D095 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m62D095 {
        margin-bottom: 54px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m62D095 {
        margin-bottom: 37px;
      }
    }

    .channel-html .x156540 {
      /** alignment */
      /** Margin */
      margin-top: 0px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .h24CD30 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .h24CD30 {
        margin-bottom: 24px;
      }
    }

    .channel-html .fF3C70A {
      color: #f5f5f7;
      margin-left: -1.5px;
      margin-bottom: 10px;
      padding-right: 50%;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fF3C70A {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .fF3C70A {
        margin-bottom: 7px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fF3C70A {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .fF3C70A {
        padding-right: 0px;
      }
    }

    .channel-html .j1FB18D {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -3px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j1FB18D {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j1FB18D {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j1FB18D {
        padding-right: 37px;
      }
    }

    .channel-html .n97F45E {
      /** Margin */
      margin-top: 22px;
      /** Padding */
      padding-left: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .n97F45E {
        margin-top: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .n97F45E {
        margin-top: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .n97F45E {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .n97F45E {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .n97F45E {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .n97F45E {
        padding-right: 5px;
      }
    }

    .channel-html .kB4ABE1 {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -1.5px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .kB4ABE1 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .kB4ABE1 {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .kB4ABE1 {
        padding-right: 3px;
      }
    }

    .channel-html .i2E8A0B {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .i2E8A0B {
        padding-right: 58px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .i2E8A0B {
        padding-right: 0px;
      }
    }

    .channel-html .i70FFAF {
      color: #f5f5f7;
      margin-left: -1.5px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .i70FFAF {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .i70FFAF {
        margin-bottom: 7px;
      }
    }

    .channel-html .zF4FFC3 {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
      padding-right: 42px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .zF4FFC3 {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .zF4FFC3 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .zF4FFC3 {
        margin-bottom: 24px;
      }
    }

    .channel-html .r94F405 {
      color: #f5f5f7;
      margin-top: 0px;
      margin-left: -1.5px;
      padding-right: 64px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r94F405 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r94F405 {
        margin-bottom: 38px;
      }
    }

    .channel-html .jA03DD5 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .cF4C8F4 {
      /** alignment */
      justify-content: space-between;
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .c1BE632 {
      /** Margin */
      /** Padding */
      padding-right: 6px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c1BE632 {
        margin-bottom: 10px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c1BE632 {
        padding-right: 66px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c1BE632 {
        padding-right: 0px;
      }
    }

    .channel-html .d6DD068 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .i0D7C50 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .n205A5D {
      /** Margin */
      margin-left: 19px;
      margin-bottom: 19px;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .p2C52DF {
      /** Background **/
      background: linear-gradient(140deg, #051D39 0%, #000000 100%);
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 280px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p2C52DF {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p2C52DF {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p2C52DF {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p2C52DF {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p2C52DF {
        grid-template-columns: repeat(1, 280px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p2C52DF {
        grid-template-columns: repeat(1, 280px);
      }
    }

    .channel-html .p2C52DF .bentobox-item {
      border-radius: 0px;
      overflow: hidden;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p2C52DF .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p2C52DF .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p2C52DF .bentobox-item {
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p2C52DF .bentobox-item {
        overflow: hidden;
      }
    }

    .channel-html .d290350 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 0;
      grid-row-end: 0;
      position: relative;
      overflow: hidden;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d290350 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d290350 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d290350 {
        grid-row-start: 0;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d290350 {
        grid-row-end: 0;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d290350 {
        overflow: hidden;
      }
    }

    .channel-html .d290350:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      border-style: solid;
    }

    .channel-html .oD6CBF2 {
      /** alignment */
      /** Margin */
      /** Padding */
      padding-top: 19px;
      padding-bottom: 19px;
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .iADFF0F {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .yF92509 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .v8E414C {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-bottom: 19px;
      padding-right: 27px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .z8D33A5 {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
      pointer-events: none;
    }

    .channel-html .y8162A0 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .hB629CD {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .hB629CD {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .hB629CD {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .hB629CD {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .hB629CD {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .hB629CD {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .hB629CD {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .hB629CD {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .hB629CD {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .hB629CD .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .hB629CD .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .hB629CD .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .aE9B0F7 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    .channel-html .aE9B0F7:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #031223 0%, #2f65ff 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    .channel-html .iA26A95 {
      /** Margin */
      /** Padding */
      padding-top: 23px;
      padding-left: 27px;
      padding-bottom: 17px;
      padding-right: 16px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .e6A6FBE {
      color: #f5f5f7;
    }

    .channel-html .b4C0CC0 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .b4C0CC0 {
      background: linear-gradient(90deg, #68BAE3 0%, #25A5E6 50%, #2F65FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .b4C0CC0 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .b4C0CC0 * {
      background: inherit;
    }

    .channel-html .pF3E7DA {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .k4553B8 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .bC0ADD4 {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-right: 20px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .p65CFA3 {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 1px;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(3, 33.33%);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p65CFA3 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p65CFA3 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p65CFA3 {
        grid-template-rows: 2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p65CFA3 {
        grid-template-rows: 2px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .p65CFA3 {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p65CFA3 {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    .channel-html .f379BFD {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD {
        overflow: hidden;
      }
    }

    .channel-html .f379BFD:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f379BFD:before {
        border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f379BFD:before {
        border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .w951FB1 {
      grid-column-start: 2;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1 {
        grid-row-end: 1;
      }
    }

    .channel-html .w951FB1:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w951FB1:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w951FB1:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .d807B79 {
      grid-column-start: 3;
      grid-column-end: 3;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79 {
        grid-row-end: 1;
      }
    }

    .channel-html .d807B79:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d807B79:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d807B79:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0 stretch;
      }
    }

    .channel-html .tC31E1A {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .s362401 {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 20px;
      padding-bottom: 17px;
      padding-right: 27px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .c922028 {
      color: #f5f5f7;
    }

    .channel-html .jBA76A7 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .jBA76A7 {
      background: linear-gradient(90deg, #68BAE3 0%, #25A5E6 50%, #2F65FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .jBA76A7 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .jBA76A7 * {
      background: inherit;
    }

    .channel-html .gFADE6A {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .x8C800A {
      /** Margin */
      margin-left: 2px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .u24A64C {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u24A64C {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u24A64C {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u24A64C {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u24A64C {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u24A64C {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u24A64C {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u24A64C {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u24A64C {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .u24A64C .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u24A64C .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u24A64C .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .n941EEE {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    .channel-html .n941EEE:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #2f65ff 0%, #2f65ff 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    .channel-html .cD0FFCD {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .v9C3E9D {
      min-height: 100%;
      /** alignment */
      align-items: center;
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .nE9662D {
      /** Margin */
      /** Padding */
      padding-left: 27px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .i082A20 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .i082A20 {
      background: linear-gradient(90deg, #68BAE3 0%, #25A5E6 50%, #2F65FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .i082A20 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .i082A20 * {
      background: inherit;
    }

    .channel-html .v1F91BC {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .x6452DD {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .k1E38E3 {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-right: 20px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .m03AF5E {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 1px;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(3, 33.33%);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m03AF5E {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m03AF5E {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m03AF5E {
        grid-template-rows: 2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m03AF5E {
        grid-template-rows: 2px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m03AF5E {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m03AF5E {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    .channel-html .aB22422 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422 {
        overflow: hidden;
      }
    }

    .channel-html .aB22422:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .aB22422:before {
        border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .aB22422:before {
        border-image: linear-gradient(90deg, #031223 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .z257CBE {
      grid-column-start: 2;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE {
        grid-row-end: 1;
      }
    }

    .channel-html .z257CBE:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z257CBE:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z257CBE:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #2f65ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .u320754 {
      grid-column-start: 3;
      grid-column-end: 3;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754 {
        grid-row-end: 1;
      }
    }

    .channel-html .u320754:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u320754:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u320754:before {
        border-image: linear-gradient(90deg, #2f65ff 0%, #031223 100%) 1/1px 0px 0px 0px/0 stretch;
      }
    }

    .channel-html .l51895A {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .mE10E2C {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 20px;
      padding-right: 12px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .rCBC62F {
      color: #f5f5f7;
    }

    .channel-html .q48E487 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .q48E487 {
      background: linear-gradient(90deg, #68BAE3 0%, #25A5E6 50%, #2F65FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .q48E487 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .q48E487 * {
      background: inherit;
    }

    .channel-html .q1782E0 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .p9037C0 {
      /** Margin */
      margin-left: 6px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .iB09970 {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iB09970 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iB09970 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iB09970 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iB09970 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iB09970 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iB09970 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iB09970 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iB09970 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .iB09970 .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iB09970 .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iB09970 .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .a6731C1 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1 {
        grid-row-end: 1;
      }
    }

    .channel-html .a6731C1:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #2f65ff 0%, #031223 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a6731C1:before {
        border-image: linear-gradient(180deg, #2f65ff 0%, #031223 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a6731C1:before {
        border-image: linear-gradient(180deg, #2f65ff 0%, #031223 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    .channel-html .rFE2899 {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 27px;
      padding-right: 5px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .f9FBEC6 {
      color: #f5f5f7;
    }

    .channel-html .h055D40 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .h055D40 {
      background: linear-gradient(90deg, #68BAE3 0%, #25A5E6 50%, #2F65FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .h055D40 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .h055D40 * {
      background: inherit;
    }

    .channel-html .j77A378 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .xC82A9E {
      /** Margin */
      /** Padding */
      padding-left: 6px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .xC82A9E {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .xC82A9E {
        padding-right: 66px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .xC82A9E {
        padding-right: 0px;
      }
    }

    .channel-html .aCE41EA {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .n5E4271 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .mFEFBF6 {
      /** Margin */
      margin-left: 19px;
      margin-bottom: 19px;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .g8DA484 {
      /** Background **/
      background: linear-gradient(140deg, #1D0A34 0%, #000000 100%);
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 280px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g8DA484 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g8DA484 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g8DA484 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g8DA484 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g8DA484 {
        grid-template-columns: repeat(1, 280px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g8DA484 {
        grid-template-columns: repeat(1, 280px);
      }
    }

    .channel-html .g8DA484 .bentobox-item {
      border-radius: 0px;
      overflow: hidden;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g8DA484 .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g8DA484 .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g8DA484 .bentobox-item {
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g8DA484 .bentobox-item {
        overflow: hidden;
      }
    }

    .channel-html .vDA106A {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 0;
      grid-row-end: 0;
      position: relative;
      overflow: hidden;
    }

    .channel-html .vDA106A:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      border-style: solid;
    }

    .channel-html .nFAAFA8 {
      /** alignment */
      /** Margin */
      /** Padding */
      padding-top: 19px;
      padding-bottom: 19px;
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .j2E9171 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .e91CBB8 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .kB4A3EA {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-bottom: 19px;
      padding-right: 27px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .x56C51E {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .p434C1C {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .t7265FE {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7265FE {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7265FE {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7265FE {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7265FE {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7265FE {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7265FE {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7265FE {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7265FE {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .t7265FE .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7265FE .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7265FE .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .n63FDD6 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    .channel-html .n63FDD6:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #120620 0%, #8727ff 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    .channel-html .k2D00AF {
      /** Margin */
      /** Padding */
      padding-top: 30px;
      padding-left: 27px;
      padding-bottom: 17px;
      padding-right: 16px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .dF4DEBD {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .dF4DEBD {
      background: linear-gradient(90deg, #D777EB 0%, #8727FF 80%, #8727FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .dF4DEBD [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .dF4DEBD * {
      background: inherit;
    }

    .channel-html .m562F76 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .t57D6EA {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .w28A2F2 {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-right: 20px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .sA64AE3 {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 1px;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(3, 33.33%);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .sA64AE3 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .sA64AE3 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .sA64AE3 {
        grid-template-rows: 1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .sA64AE3 {
        grid-template-rows: 1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .sA64AE3 {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .sA64AE3 {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    .channel-html .m76F414 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414 {
        grid-row-end: 1;
      }
    }

    .channel-html .m76F414:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m76F414:before {
        border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .m76F414:before {
        border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .u9F8311 {
      grid-column-start: 2;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311 {
        grid-row-end: 1;
      }
    }

    .channel-html .u9F8311:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u9F8311:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u9F8311:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .d5E6C40 {
      grid-column-start: 3;
      grid-column-end: 3;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40 {
        grid-row-end: 1;
      }
    }

    .channel-html .d5E6C40:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d5E6C40:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d5E6C40:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .z67FB6B {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .oCF9B33 {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 20px;
      padding-bottom: 17px;
      padding-right: 25px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .xE0362E {
      color: #f5f5f7;
    }

    .channel-html .m082DE0 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .m082DE0 {
      background: linear-gradient(90deg, #D777EB 0%, #8727FF 80%, #8727FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .m082DE0 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .m082DE0 * {
      background: inherit;
    }

    .channel-html .f62FE27 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .r569740 {
      /** Margin */
      margin-left: 2px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .g775E08 {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g775E08 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g775E08 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g775E08 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g775E08 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g775E08 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g775E08 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g775E08 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g775E08 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .g775E08 .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .g775E08 .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .g775E08 .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .bC41B7A {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A {
        grid-row-end: 1;
      }
    }

    .channel-html .bC41B7A:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #8727ff 0%, #8727ff 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .bC41B7A:before {
        border-image: linear-gradient(180deg, #8727ff 0%, #8727ff 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC41B7A:before {
        border-image: linear-gradient(180deg, #8727ff 0%, #8727ff 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    .channel-html .f7B42BF {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .g475CAA {
      min-height: 100%;
      /** alignment */
      align-items: center;
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .p786394 {
      /** Margin */
      /** Padding */
      padding-left: 27px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .rFC9C99 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .rFC9C99 {
      background: linear-gradient(90deg, #D777EB 0%, #8727FF 80%, #8727FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .rFC9C99 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .rFC9C99 * {
      background: inherit;
    }

    .channel-html .n04770C {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .i8A2BF8 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      z-index: 1;
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .k365A82 {
      /** Margin */
      /** Padding */
      padding-left: 20px;
      padding-right: 20px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q7D67BA {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      grid-gap: 0px;
      grid-template-rows: 1px;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(3, 33.33%);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q7D67BA {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q7D67BA {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q7D67BA {
        grid-template-rows: 1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q7D67BA {
        grid-template-rows: 1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q7D67BA {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q7D67BA {
        grid-template-columns: repeat(3, 33.33%);
      }
    }

    .channel-html .oEAF079 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079 {
        grid-row-end: 1;
      }
    }

    .channel-html .oEAF079:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .oEAF079:before {
        border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .oEAF079:before {
        border-image: linear-gradient(90deg, #120620 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .j9585E7 {
      grid-column-start: 2;
      grid-column-end: 2;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7 {
        grid-column-start: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7 {
        grid-column-end: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7 {
        grid-row-end: 1;
      }
    }

    .channel-html .j9585E7:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .j9585E7:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j9585E7:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #8727ff 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .c8AC444 {
      grid-column-start: 3;
      grid-column-end: 3;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444 {
        grid-column-start: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444 {
        grid-column-end: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444 {
        grid-row-end: 1;
      }
    }

    .channel-html .c8AC444:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8AC444:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8AC444:before {
        border-image: linear-gradient(90deg, #8727ff 0%, #120620 100%) 1/1px 0px 0px 0px/0px stretch;
      }
    }

    .channel-html .zD6C3AA {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .u5020D4 {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 20px;
      padding-right: 12px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .nE8317E {
      color: #f5f5f7;
    }

    .channel-html .u11B7E0 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .u11B7E0 {
      background: linear-gradient(90deg, #D777EB 0%, #8727FF 80%, #8727FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .u11B7E0 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .u11B7E0 * {
      background: inherit;
    }

    .channel-html .o9CE6F2 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .kCE252A {
      /** Margin */
      margin-left: 6px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .pFC9292 {
      /** Background **/
      background: undefined;
      /** Grid */
      display: grid;
      height: 100%;
      grid-gap: 0px;
      grid-template-rows: 100%;
      grid-auto-rows: 1fr;
      grid-template-columns: repeat(1, 3px);
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pFC9292 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pFC9292 {
        height: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pFC9292 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pFC9292 {
        grid-gap: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pFC9292 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pFC9292 {
        grid-template-rows: 100%;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pFC9292 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pFC9292 {
        grid-template-columns: repeat(1, 3px);
      }
    }

    .channel-html .pFC9292 .bentobox-item {
      border-radius: 0px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pFC9292 .bentobox-item {
        border-radius: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pFC9292 .bentobox-item {
        border-radius: 0px;
      }
    }

    .channel-html .w902A98 {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 1;
      grid-row-end: 1;
      position: relative;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98 {
        grid-column-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98 {
        grid-column-end: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98 {
        grid-row-start: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98 {
        grid-row-end: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98 {
        grid-row-end: 1;
      }
    }

    .channel-html .w902A98:before {
      display: block;
      position: absolute;
      pointer-events: none;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      content: "";
      border-image: linear-gradient(180deg, #8727ff 0%, #120620 100%) 1/0px 0px 0px 1px/0px stretch;
      border-style: solid;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98:before {
        content: "";
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98:before {
        content: "";
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w902A98:before {
        border-image: linear-gradient(180deg, #8727ff 0%, #120620 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w902A98:before {
        border-image: linear-gradient(180deg, #8727ff 0%, #120620 100%) 1/0px 0px 0px 1px/0px stretch;
      }
    }

    .channel-html .v1DC824 {
      /** Margin */
      /** Padding */
      padding-top: 17px;
      padding-left: 27px;
      padding-right: 5px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .y9FDC91 {
      color: #f5f5f7;
    }

    .channel-html .r18BCC4 {
      color: #ffffff;
      margin-top: 2px;
      margin-bottom: 1px;
    }

    .channel-html .r18BCC4 {
      background: linear-gradient(90deg, #D777EB 0%, #8727FF 80%, #8727FF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .channel-html .r18BCC4 [data-no-gradient] {
      background: none;
      -webkit-text-fill-color: #1d1d1f;
    }

    .channel-html .r18BCC4 * {
      background: inherit;
    }

    .channel-html .p0C3F24 {
      color: #f5f5f7;
      margin-top: 0px;
    }

    .channel-html .aF64FB2 {
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .o3664F9 {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 74px;
      margin-bottom: 53px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .o3664F9 {
        align-items: center;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .o3664F9 {
        justify-content: space-between;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .o3664F9 {
        margin-top: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .o3664F9 {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .o3664F9 {
        margin-bottom: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .o3664F9 {
        margin-bottom: 10px;
      }
    }

    .channel-html .n1A0E99 {
      /** Margin */
      margin-left: -182px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .n1A0E99 {
        margin-left: -158px;
      }
    }

    .channel-html .v4A1F9E {
      /** alignment */
      align-items: center;
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .q22AC69 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .fC86D89 {
      /** Margin */
      margin-left: 2px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fC86D89 {
        margin-left: 11px;
      }
    }

    .channel-html .pB5C39E {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .z14D056 {
      /** Margin */
      margin-top: -310px;
      margin-left: 185px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z14D056 {
        margin-top: -200px;
      }
    }

    @media only screen and (max-width: 1068px) {
        {
        margin-left: 213px;
      }
    }

    .channel-html .pB5C39E .typography-headline-reduced {
      font-size: 36px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pB5C39E .typography-headline-reduced {
        font-size: 28px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pB5C39E .typography-headline-reduced {
        font-size: 24px;
      }
    }

    .channel-html .k04417B {
      /** Margin */
      margin-top: -280px;
      margin-left: 406px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .b5367FF {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .b5367FF {
        margin-top: -230px;
        margin-left: 130px;
      }
    }



    .channel-html .pB5C39E .typography-callout {
      font-size: 36px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pB5C39E .typography-callout {
        font-size: 28px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .pB5C39E .typography-callout {
        font-size: 24px;
      }
    }

    /* 
@media only screen and (max-width: 734px) {
	.channel-html .o3664F9 .typography-headline-reduced{
	font-size: 22px;}
	}
 */
    .channel-html .m67B60D {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m67B60D {
        margin-top: -210px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .m67B60D {
        margin-left: 307px;
      }
    }

    .channel-html .x55AAB4 {
      /** Margin */
      margin-left: 18px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .x55AAB4 {
        margin-left: 2px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .x55AAB4 {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .x55AAB4 {
        padding-left: 0px;
      }
    }

    .channel-html .y19DED0 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y19DED0 {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y19DED0 {
        margin-bottom: 7px;
      }
    }

    .channel-html .w3DBDB0 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
      padding-right: 15px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w3DBDB0 {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w3DBDB0 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w3DBDB0 {
        margin-bottom: 24px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w3DBDB0 {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w3DBDB0 {
        padding-right: 54px;
      }
    }

    .channel-html .t7AC559 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -1.5px;
      padding-right: 38px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7AC559 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t7AC559 {
        padding-right: 1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t7AC559 {
        padding-right: 0px;
      }
    }

    .channel-html .b958B79 {
      /** alignment */
      /** Margin */
      margin-top: 31px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .b958B79 {
        margin-top: 22px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .b958B79 {
        margin-top: 20px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .b958B79 {
        margin-bottom: 100px;
      }
    }

    .channel-html .q9D3B9E {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q4C0E39 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .sBE502C {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .b4C55FF .badge-caption-up {
      color: #86868b;
    }

    .channel-html .b4C55FF .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .b4C55FF span.badge-value {
      white-space: normal;
    }

    .channel-html .b4C55FF .badge-value {
      font-weight: 600;
      margin: 0 0 -2px;
    }

    .channel-html .s6F0FDE {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .f8FE573 .badge-caption-up {
      color: #86868b;
    }

    .channel-html .f8FE573 .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .f8FE573 span.badge-value {
      white-space: normal;
    }

    .channel-html .f8FE573 .badge-value {
      font-weight: 600;
      margin: 0 0 -2px;
    }

    .channel-html .d2DC969 {
      /** Margin */
      margin-top: 26px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d2DC969 {
        margin-left: 48px;
      }
    }

    .channel-html .p4167DD .badge-caption-up {
      color: #86868b;
    }

    .channel-html .p4167DD .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .p4167DD span.badge-value {
      white-space: normal;
    }

    .channel-html .p4167DD .badge-value {
      font-weight: 600;
    }

    .channel-html .lB031CA {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .rC4BF75 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .o49A853 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .dEE4197 .badge-caption-up {
      color: #86868b;
    }

    .channel-html .dEE4197 .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .dEE4197 span.badge-value {
      white-space: normal;
    }

    .channel-html .dEE4197 .badge-value {
      font-weight: 600;
      margin: 4px 0 -2px;
    }

    .channel-html .c9CB1F4 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c9CB1F4 {
        padding-left: 28px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c9CB1F4 {
        padding-left: 22px;
      }
    }

    .channel-html .u5A533C .badge-caption-up {
      color: #86868b;
    }

    .channel-html .u5A533C .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .u5A533C span.badge-value {
      white-space: normal;
    }

    .channel-html .u5A533C .badge-value {
      font-weight: 600;
      margin: 4px 0 -2px;
    }

    .channel-html .uA8397B {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .uA8397B {
        margin-top: 22px;
      }
    }

    .channel-html .b96366E .badge-caption-up {
      color: #86868b;
    }

    .channel-html .b96366E .badge-caption-bottom {
      color: #86868b;
    }

    .channel-html .b96366E span.badge-value {
      white-space: normal;
    }

    .channel-html .b96366E .badge-value {
      font-weight: 600;
      margin: 0 0 -1px;
    }

    .channel-html .jF8E236 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .bC7BEEE {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .bC7BEEE {
        margin-left: -213px;
      }
    }

    .channel-html .v5B1D0C {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .v5B1D0C {
        margin-bottom: 35px;
      }
    }

    .channel-html .dF68B81 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .z36FB6A {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .p804F79 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p804F79 {
        margin-top: -315px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .p804F79 {
        margin-left: -10px;
      }
    }

    .channel-html .c6FC44D {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c6FC44D {
        margin-top: -320px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c6FC44D {
        margin-left: 171px;
      }
    }

    .channel-html .h1C91E0 {
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .eC415BF {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 52px;
      margin-bottom: 52px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .eC415BF {
        justify-content: center;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .eC415BF {
        margin-top: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .eC415BF {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .eC415BF {
        margin-bottom: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .eC415BF {
        margin-bottom: 45px;
      }
    }

    .channel-html .iA1910F {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .iA1910F {
        padding-right: 53px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .iA1910F {
        padding-right: 0px;
      }
    }

    .channel-html .eED3F21 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 10px;
      padding-right: 82px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .eED3F21 {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .eED3F21 {
        margin-bottom: 7px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .eED3F21 {
        padding-right: 0px;
      }
    }

    .channel-html .u6F404E {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
      padding-right: 85px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u6F404E {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u6F404E {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u6F404E {
        margin-bottom: 24px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u6F404E {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u6F404E {
        padding-right: 0px;
      }
    }

    .channel-html .uB18175 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -1.5px;
      padding-right: 142px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uB18175 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uB18175 {
        margin-bottom: 20px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .uB18175 {
        padding-right: 5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uB18175 {
        padding-right: 1px;
      }
    }

    .channel-html .lF891E2 {
      /** alignment */
      /** Margin */
      margin-top: 30px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .lF891E2 {
        margin-top: 27px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .lF891E2 {
        margin-top: 0px;
      }
    }

    .channel-html .pD18192 {
      /** Margin */
      /** Padding */
      padding-top: 5px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pD18192 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pD18192 {
        padding-top: 5px;
      }
    }

    .channel-html .c691832 {
      /** Margin */
      margin-top: 1px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c691832 {
        margin-top: 2px;
      }
    }

    .channel-html .wF2A7B7 {
      /** Margin */
      /** Padding */
      padding-right: 30px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .wF2A7B7 {
        padding-left: 19px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .wF2A7B7 {
        padding-right: 3px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f37C3B3 {
        margin-top: 1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f37C3B3 {
        padding-right: 7px;
      }
    }

    .channel-html .s25981F {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .s25981F {
        margin-left: 19px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .nBDA2F3 {
        padding-top: 3px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .nBDA2F3 {
        padding-left: 7px;
      }
    }

    .channel-html .e1BDA9E {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e1BDA9E {
        margin-top: 39px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e1BDA9E {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .e1BDA9E {
        padding-left: 1px;
      }
    }

    .channel-html .j2FC75D {
      /** Margin */
      margin-left: -1px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .j2FC75D {
        margin-left: 0px;
      }
    }

    .channel-html .pA9E173 {
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .y2759C0 {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 52px;
      margin-bottom: 52px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y2759C0 {
        margin-top: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y2759C0 {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y2759C0 {
        margin-bottom: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y2759C0 {
        margin-bottom: 40px;
      }
    }

    .channel-html .zBFD9BC {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .l47D3DD {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .l47D3DD {
        padding-left: 1px;
      }
    }

    .channel-html .i98898B {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q43EF08 {
      /** Margin */
      margin-left: -1px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q43EF08 {
        margin-left: 0px;
      }
    }

    .channel-html .sFECF70 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .e70DECE {
      /** Margin */
      margin-left: -1px;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .dF89FCA {
      /** Margin */
      /** Padding */
      padding-left: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .dF89FCA {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .dF89FCA {
        padding-left: 0px;
      }
    }

    .channel-html .z5C62ED {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z5C62ED {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z5C62ED {
        margin-bottom: 7px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z5C62ED {
        padding-right: 120px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z5C62ED {
        padding-right: 94px;
      }
    }

    .channel-html .t168187 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t168187 {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t168187 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t168187 {
        margin-bottom: 24px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t168187 {
        padding-right: 60px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t168187 {
        padding-right: 0px;
      }
    }

    .channel-html .r5AB11F {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -1.5px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r5AB11F {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .r5AB11F {
        padding-right: 10px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r5AB11F {
        padding-right: 7px;
      }
    }

    .channel-html .kFA518D {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .kFA518D {
        margin-top: 37px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .kFA518D {
        margin-bottom: 38px;
      }
    }

    .channel-html .mCB2F9A {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .r28D22F {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r28D22F {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r28D22F {
        margin-bottom: 35px;
      }
    }

    .channel-html .mF3FC53 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .mF3FC53 {
        margin-top: -26px;
      }
    }

    .channel-html .a087BE8 {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a087BE8 {
        margin-left: -1px;
      }
    }

    .channel-html .u72D2B2 {
      /** alignment */
      /** Margin */
      margin-top: 30px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .n81924A {
      /** Margin */
      /** Padding */
      padding-top: 7px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .yC5FB62 {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .yC5FB62 {
        margin-left: -1px;
      }
    }

    .channel-html .m7BFB58 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .yF91453 {
      padding-left: 18px;
      padding-right: 35px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .yF91453 {
        padding-left: 24px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .yF91453 {
        padding-left: 17px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .yF91453 {
        padding-right: 15px;
      }
    }

    .channel-html .e5F91EE {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e5F91EE {
        padding-top: 1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e5F91EE {
        padding-left: 11px;
      }
    }

    .channel-html .b9F05F2 {
      padding-left: 6px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .b9F05F2 {
        padding-top: 2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .b9F05F2 {
        padding-left: 19px;
      }
    }

    .channel-html .f1390a8 {
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .t3eaab6 {
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 80px;
      margin-bottom: 58px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t3eaab6 {
        justify-content: center;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t3eaab6 {
        margin-top: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t3eaab6 {
        margin-top: 40px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t3eaab6 {
        margin-bottom: 55px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t3eaab6 {
        margin-bottom: 45px;
      }
    }

    .channel-html .q0bfc78 {
      /** Margin */
      /** Padding */
      padding-right: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q0bfc78 {
        padding-right: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0bfc78 {
        padding-right: 0px;
      }
    }

    .channel-html .r1eb62f {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .r1eb62f {
        margin-bottom: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r1eb62f {
        margin-bottom: 7px;
      }
    }

    .channel-html .ca83cac {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -3px;
      margin-bottom: 26px;
      padding-right: 11px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .ca83cac {
        margin-left: -2.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ca83cac {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ca83cac {
        margin-bottom: 24px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .ca83cac {
        padding-right: 58px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ca83cac {
        padding-right: 0px;
      }
    }

    .channel-html .z9721c4 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -1.5px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9721c4 {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9721c4 {
        margin-bottom: 36px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9721c4 {
        padding-right: 24px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9721c4 {
        padding-right: 0px;
      }
    }

    .channel-html .ddb6fd4 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .z9459bf {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z9459bf {
        margin-left: -1px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9459bf {
        margin-left: -122px;
      }
    }

    .channel-html .w6c736d {
      background-color: #f5f5f7;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q0a3e94 {
      background-color: #ffffff;
      /** alignment */
      /** Margin */
      margin-top: 60px;
      /** Padding */
      padding-top: 60px;
      padding-bottom: 58px;
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q0a3e94 {
        margin-top: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        margin-top: 48px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        margin-left: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        margin-right: -50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q0a3e94 {
        padding-top: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        padding-top: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        padding-left: 50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q0a3e94 {
        padding-bottom: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q0a3e94 {
        padding-right: 50vw;
      }
    }

    .channel-html .q0a3e94.large-display-bleed::before,
    .channel-html .q0a3e94.large-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .q0a3e94.medium-display-bleed::before,
    .channel-html .q0a3e94.medium-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .q0a3e94.small-display-bleed::before,
    .channel-html .q0a3e94.small-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .q02c985 {
      /** Margin */
      margin-bottom: 43px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q02c985 {
        margin-bottom: 35px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .q02c985 {
        margin-bottom: 30px;
      }
    }

    .channel-html .f89a263 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 8px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f89a263 {
        margin-bottom: 6px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f89a263 {
        margin-bottom: 7px;
      }
    }

    .channel-html .a0c7426 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -2.5px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .a0c7426 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .a0c7426 {
        margin-left: -1.5px;
      }
    }

    .channel-html .c3c737c {
      /** Margin */
      /** Padding */
      padding-right: 50px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c3c737c {
        margin-bottom: 30px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c3c737c {
        padding-left: 0px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c3c737c {
        padding-right: 29px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c3c737c {
        padding-right: 0px;
      }
    }

    .channel-html .x7471c6 {
      /** Margin */
      margin-left: -1px;
      margin-bottom: 10px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .x7471c6 {
        margin-bottom: 10px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .x7471c6 {
        margin-bottom: 14px;
      }
    }

    .channel-html .aA4F2D2 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .l66380B {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .h8251CE {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .h8251CE {
        margin-bottom: 0px;
      }
    }

    .channel-html .o98BC6A {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .o98BC6A {
        padding-right: 1px;
      }
    }

    .channel-html .q950DD2 {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .d34A33A {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q05c363 {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .q05c363 {
        margin-bottom: 0px;
      }
    }

    .channel-html .t3cf362 {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t3cf362 {
        padding-right: 15px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t3cf362 {
        padding-right: 0px;
      }
    }

    .channel-html .ec88939 {
      /** Margin */
      /** Padding */
      padding-right: 60px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ec88939 {
        margin-bottom: 30px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .ec88939 {
        padding-right: 20px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ec88939 {
        padding-right: 0px;
      }
    }

    .channel-html .t34db34 {
      /** Margin */
      margin-left: -1px;
      margin-bottom: 10px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t34db34 {
        margin-bottom: 10px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t34db34 {
        margin-bottom: 14px;
      }
    }

    .channel-html .y74EA5D {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .x4C6E17 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .fF83A4E {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fF83A4E {
        margin-bottom: 0px;
      }
    }

    .channel-html .pD5BF6C {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
      margin-bottom: -2px;
      padding-right: 3px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .pD5BF6C {
        padding-right: 19px;
      }
    }

    .channel-html .fD17AFF {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .m8B545A {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .ea02c4b {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .ea02c4b {
        margin-bottom: 0px;
      }
    }

    .channel-html .c8278a9 {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
      margin-bottom: -2px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .c8278a9 {
        padding-right: 19px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c8278a9 {
        padding-right: 0px;
      }
    }

    .channel-html .ecd1114 {
      /** Margin */
      /** Padding */
      padding-right: 58px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .ecd1114 {
        padding-right: 29px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .ecd1114 {
        padding-right: 0px;
      }
    }

    .channel-html .w6189bf {
      /** Margin */
      margin-left: -1px;
      margin-bottom: 10px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .w6189bf {
        margin-bottom: 10px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .w6189bf {
        margin-bottom: 14px;
      }
    }

    .channel-html .t05C45A {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .sC883BD {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .b742836 {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .b742836 {
        margin-bottom: 0px;
      }
    }

    .channel-html .g3C3424 {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
    }

    .channel-html .y5EDF6A {
      /** alignment */
      /** Margin */
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .k9D7282 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .s2fd10f {
      color: #1d1d1f;
      margin-left: -1px;
      margin-bottom: 1px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .s2fd10f {
        margin-bottom: 0px;
      }
    }

    .channel-html .z9a22cb {
      color: #86868b;
      margin-top: 0px;
      margin-left: -1px;
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z9a22cb {
        padding-right: 0px;
      }
    }

    .channel-html .nA1B087 {
      background-color: #f5f5f7;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .uA18331 {
      background-color: #ffffff;
      /** alignment */
      /** Margin */
      margin-top: 10px;
      /** Padding */
      padding-top: 60px;
      padding-bottom: 60px;
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        margin-left: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        margin-right: -50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .uA18331 {
        padding-top: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        padding-top: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        padding-left: 50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .uA18331 {
        padding-bottom: 50px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        padding-bottom: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .uA18331 {
        padding-right: 50vw;
      }
    }

    .channel-html .uA18331.large-display-bleed::before,
    .channel-html .uA18331.large-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .uA18331.medium-display-bleed::before,
    .channel-html .uA18331.medium-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .uA18331.small-display-bleed::before,
    .channel-html .uA18331.small-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .u393B9B {
      /** Margin */
      margin-bottom: 35px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u393B9B {
        margin-bottom: 35px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u393B9B {
        margin-bottom: 30px;
      }
    }

    .channel-html .kE26746 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 8px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .kE26746 {
        margin-bottom: 6px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .kE26746 {
        margin-bottom: 7px;
      }
    }

    .channel-html .f01CE91 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -2.5px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .f01CE91 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f01CE91 {
        margin-left: -1.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .f01CE91 {
        padding-right: 9px;
      }
    }

    .jEEA60A {
      width: 100%;
      --columns: 3;
      --grid-column: 3;
    }

    .jEEA60A .compare-column-0 {
      display: flex;
      order: 1;
    }

    .jEEA60A .compare-column-1 {
      display: flex;
      order: 2;
    }

    .jEEA60A .compare-column-2 {
      display: flex;
      order: 3;
    }

    @media only screen and (max-width: 1068px) {
      .jEEA60A {
        --columns: 3;
        --grid-column: 3;
      }
    }

    @media only screen and (max-width: 1068px) {
      .jEEA60A .compare-column-0 {
        display: flex;
        order: 1;
      }
    }

    @media only screen and (max-width: 1068px) {
      .jEEA60A .compare-column-1 {
        display: flex;
        order: 2;
      }
    }

    @media only screen and (max-width: 1068px) {
      .jEEA60A .compare-column-2 {
        display: flex;
        order: 3;
      }
    }

    @media only screen and (max-width: 734px) {
      .jEEA60A {
        --columns: 3;
        --grid-column: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .jEEA60A .compare-column-0 {
        display: none;
        order: 1;
      }
    }

    @media only screen and (max-width: 734px) {
      .jEEA60A .compare-column-1 {
        display: flex;
        order: 2;
      }
    }

    @media only screen and (max-width: 734px) {
      .jEEA60A .compare-column-2 {
        display: flex;
        order: 3;
      }
    }

    .channel-html .b119e5c {
      background-color: #f5f5f7;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .r141783 {
      background-color: #ffffff;
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 10px;
      /** Padding */
      padding-top: 42.5px;
      padding-bottom: 42.5px;
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        margin-left: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        margin-right: -50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .r141783 {
        padding-top: 48.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        padding-top: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        padding-left: 50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .r141783 {
        padding-bottom: 48.5px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        padding-bottom: 45px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r141783 {
        padding-right: 50vw;
      }
    }

    .channel-html .r141783.large-display-bleed::before,
    .channel-html .r141783.large-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .r141783.medium-display-bleed::before,
    .channel-html .r141783.medium-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .r141783.small-display-bleed::before,
    .channel-html .r141783.small-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .v5e2af6 {
      /** Margin */
      margin-top: 1px;
      /** Padding */
      padding-right: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .v5e2af6 {
        margin-top: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .v5e2af6 {
        margin-bottom: 38px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .v5e2af6 {
        padding-right: 57px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .v5e2af6 {
        padding-right: 0px;
      }
    }

    .channel-html .u456640 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 8px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u456640 {
        margin-bottom: 6px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u456640 {
        margin-bottom: 7px;
      }
    }

    .channel-html .fbb49d7 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -2.5px;
      margin-bottom: 18px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fbb49d7 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .fbb49d7 {
        margin-left: -1.5px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .fbb49d7 {
        margin-bottom: 19px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .fbb49d7 {
        margin-bottom: 13px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .fbb49d7 {
        padding-right: 112px;
      }
    }

    .channel-html .z932417 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -1px;
      padding-right: 86px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z932417 {
        padding-right: 40px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z932417 {
        padding-right: 4px;
      }
    }

    .channel-html .w61f29d {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .u4c4a2f {
      /** Margin */
      margin-left: 10px;
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u4c4a2f {
        margin-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u4c4a2f {
        margin-left: -1px;
      }
    }

    .channel-html .c333372 {
      background-color: #f5f5f7;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .y863eb8 {
      background-color: #ffffff;
      /** alignment */
      align-items: center;
      /** Margin */
      margin-top: 10px;
      /** Padding */
      padding-top: 53px;
      padding-bottom: 53px;
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        margin-left: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        margin-right: -50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y863eb8 {
        padding-top: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        padding-top: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        padding-left: 50vw;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .y863eb8 {
        padding-bottom: 42px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        padding-bottom: 45px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .y863eb8 {
        padding-right: 50vw;
      }
    }

    .channel-html .y863eb8.large-display-bleed::before,
    .channel-html .y863eb8.large-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .y863eb8.medium-display-bleed::before,
    .channel-html .y863eb8.medium-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .y863eb8.small-display-bleed::before,
    .channel-html .y863eb8.small-display-bleed::after {
      background-color: #ffffff;
    }

    .channel-html .s2cff78 {
      /** Margin */
      margin-top: 1px;
      /** Padding */
      padding-right: 82px;
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s2cff78 {
        margin-top: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s2cff78 {
        margin-bottom: 36px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .s2cff78 {
        padding-right: 58px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s2cff78 {
        padding-right: 0px;
      }
    }

    .channel-html .z92eeb6 {
      color: #1d1d1f;
      margin-left: -1.5px;
      margin-bottom: 8px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .z92eeb6 {
        margin-bottom: 6px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .z92eeb6 {
        margin-bottom: 7px;
      }
    }

    .channel-html .d6c9ea4 {
      color: #1d1d1f;
      margin-top: 0px;
      margin-left: -2.5px;
      margin-bottom: 18px;
      padding-right: 32px;
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d6c9ea4 {
        margin-left: -2px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d6c9ea4 {
        margin-left: -1.5px;
      }
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d6c9ea4 {
        margin-bottom: 19px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d6c9ea4 {
        margin-bottom: 14px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d6c9ea4 {
        padding-right: 0px;
      }
    }

    .channel-html .e921941 {
      margin-top: 0px;
      margin-left: 0px;
    }

    .channel-html .b5eff07 {
      /** alignment */
      /** Margin */
      margin-top: 0px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .s231ad5 {
      /** Margin */
      margin-top: 5.5px;
      margin-left: -1.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s231ad5 {
        margin-top: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s231ad5 {
        margin-left: -1px;
      }
    }

    .channel-html .s22ffc8 {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .afa91ee {
      /** Margin */
      margin-left: 7.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .afa91ee {
        margin-left: 9px;
      }
    }

    .channel-html .v5483bc {
      margin-left: -1px;
    }

    .channel-html .fc0bf7e {
      /** alignment */
      /** Margin */
      margin-top: 0px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .s2cbe54 {
      /** Margin */
      margin-top: 5.5px;
      margin-left: -1.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s2cbe54 {
        margin-top: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s2cbe54 {
        margin-left: -1px;
      }
    }

    .channel-html .dae9b5a {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .u47f958 {
      /** Margin */
      margin-left: 7.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .u47f958 {
        margin-left: 9px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .u47f958 {
        margin-left: 9px;
      }
    }

    .channel-html .r11b234 {
      margin-left: -1px;
    }

    .channel-html .r117b31 {
      /** alignment */
      /** Margin */
      margin-top: 0px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .r117b31 {
        margin-bottom: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r117b31 {
        margin-bottom: 0px;
      }
    }

    .channel-html .r1fda65 {
      /** Margin */
      margin-top: 5.5px;
      margin-left: -1.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r1fda65 {
        margin-top: 8px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .r1fda65 {
        margin-left: -1px;
      }
    }

    .channel-html .x7a783a {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .d7edb58 {
      /** Margin */
      margin-left: 7.5px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .d7edb58 {
        margin-left: 9px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .d7edb58 {
        margin-left: 9px;
      }
    }

    .channel-html .q09c6e0 {
      margin-left: -1px;
    }

    .channel-html .x7b6000 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .t3f263f {
      /** Margin */
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .t3f263f {
        margin-left: 6px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .t3f263f {
        margin-left: -2px;
      }
    }

    .channel-html .q7ABA85 {
      background-color: #f5f5f7;
      /** Margin */
      /** Padding */
      /** Overflow */
      overflow: hidden;
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .c0ADE54 {
      background-color: #f5f5f7;
      /** alignment */
      /** Margin */
      margin-top: 16px;
      margin-bottom: 7px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c0ADE54 {
        margin-left: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c0ADE54 {
        margin-right: -50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c0ADE54 {
        padding-left: 50vw;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .c0ADE54 {
        padding-right: 50vw;
      }
    }

    .channel-html .c0ADE54.large-display-bleed::before,
    .channel-html .c0ADE54.large-display-bleed::after {
      background-color: #f5f5f7;
    }

    .channel-html .c0ADE54.medium-display-bleed::before,
    .channel-html .c0ADE54.medium-display-bleed::after {
      background-color: #f5f5f7;
    }

    .channel-html .c0ADE54.small-display-bleed::before,
    .channel-html .c0ADE54.small-display-bleed::after {
      background-color: #f5f5f7;
    }

    .channel-html .s185A56 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    @media only screen and (max-width: 1068px) {
      .channel-html .s185A56 {
        margin-left: 0;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s185A56 {
        margin-left: 0px;
      }
    }

    @media only screen and (max-width: 734px) {
      .channel-html .s185A56 {
        margin-right: 0px;
      }
    }

    .channel-html .x67B730 {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .n22495C {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .kA26997 {
      color: #6E6E73;
      margin-left: -1px;
    }

    .channel-html .nBAAB83 {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .w076B92 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .rF00FC0 {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .e233D21 {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    @media only screen and (max-width: 734px) {
      .channel-html .e233D21 {
        margin-top: 10px;
      }
    }

    .channel-html .qE02E87 {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .lBE15A8 {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .yDA4BEB {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .eC3E4D8 {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .zC40A79 {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .o455EC2 {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .s031E5F {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .fF8A16C {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .s6198AB {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .uC32CBA {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .zFE10C4 {
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .eEE4F3E {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .uA2F29E {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .jF4A30C {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .q0AA5A4 {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .y0699DE {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .uB44E3B {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .uC41EC5 {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .wC82909 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .q734FD5 {
      color: #6E6E73;
      margin-left: -0.5px;
    }

    .channel-html .u8B52BF {
      /** alignment */
      /** Margin */
      margin-bottom: 9px;
      /** Padding */
      /** Layer controls */
      /** Interaction controls */
      /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
    }

    .channel-html .k29A416 {
      /** Margin */
      /** Padding */
      /** Align text*/
      /** Flexbox order*/
      /** Layer controls */
      /** Interaction controls */
    }

    .channel-html .tBED2F5 {
      color: #6E6E73;
      margin-left: -0.5px;
    }
  </style>
</head>

<body>
  <div class="channel-html">
    <!--BEGIN > SECTION 1 - HERO-->
    <div class="section fa908b4">
      <div class="section-content">
        <div class="row z9a22bc">
          <div class="column large-12 x746c32">
            <div class="row v5af1c5">
              <div class="column adb5135">
                <h2 class="visually-hidden-text"> Apple Macbook Pro <figure aria-hidden="true" class="image image-hero_wordmark y8d5222"></figure>
                </h2>
              </div>
            </div>
            <figure aria-label="Two MacBook Pros positioned back to back." role="img" class="image image-hero pAC640B"></figure>
            <div class="row l4F9CB9">
              <div class="column large-12 small-hide k2E036B">
                <p class="copy z9b16b1 channel-custom-font-custom-80-headline-super">Supercharged for pros.</p>
              </div>
              <div class="column large-12 large-hide small-show lA07199">
                <p class="copy lD8E4FF typography-headline-elevated">Supercharged for pros.</p>
              </div>
            </div>
            <p class="copy helvetica-neue w6fd73a channel-custom-font-custom-24-intro-elevated">The blazing-fast M1&nbsp;Pro or M1&nbsp;Max chip for groundbreaking performance and amazing battery life. A stunning Liquid Retina&nbsp;XDR display and all the ports you need. This is the notebook you’ve been waiting&nbsp;for.</p>
            <!-- <p class="copy helvetica-neue e3364d1 channel-custom-font-custom-17-body-tight">[Your Message]</p> -->
            <!--BEGIN CHANNEL-BUTTON-->
            <!-- <a href="#" aria-label="Buy MacBook Pro now." class="button button-channel button-base bb2da7f"> Buy now </a> -->
            <!--END CHANNEL-BUTTON-->
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 1 - HERO-->
    <!--BEGIN > SECTION 2 - CAPABILITY-->
    <div class="section h805F02">
      <div class="section-content">
        <div class="row yBCE646">
          <div class="column large-6 small-12 small-hide j52A182">
            <figure aria-label="MacBook Pro with a vivid on screen picture illustrating powerful performance and long battery life." role="img" class="image image-performance h5A83EC"></figure>
          </div>
          <div class="column large-6 small-12 f5D65F1">
            <h3 class="copy z9623A9 channel-custom-font-custom-24-eyebrow">Capability</h3>
            <p class="copy u14C8FB channel-custom-font-custom-48-headline">Powerful performance. Not&nbsp;power-hungry.</p>
            <p class="copy helvetica-neue h4CC61A channel-custom-font-custom-21-intro">
              The incredible efficiency of the M1&nbsp;Pro or M1&nbsp;Max chip delivers game-changing performance and next-level battery life. So&nbsp;you can easily handle 8K video editing, compiling code or rendering complex scenes in&nbsp;3D,&nbsp;anywhere.</p>
            <div class="row large-hide medium-show j6C9A83">
              <div class="column large-12 b362818">
                <figure role="presentation" class="badge badge-tiny badge-left l329F94">
                  <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up l329F94 channel-custom-font-custom-14-body-reduced">Up to</span><span class="badge-value"><span class="unit badge-unit-degree"> 21 hours</span></span><span data-no-gradient="" class="badge-caption-bottom wider l329F94 channel-custom-font-custom-14-body-reduced">of battery life<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊<span class="visuallyhidden">Refer legal disclaimers</span></span></span></div>
                </figure>
              </div>
            </div>
            <div class="row large-hide small-show uB232EC">
              <div class="column large-12 uF03551">
                <figure aria-label="MacBook Pro with a vivid on screen picture illustrating powerful performance and long battery life." role="img" class="image image-performance s55205C"></figure>
              </div>
            </div>
            <div class="row medium-hide pF5A48F">
              <div class="column large-12 e8DDDC4">
                <figure role="presentation" class="badge badge-reduced badge-left u453B06">
                  <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up u453B06 channel-custom-font-custom-14-body-reduced">Up to</span><span class="badge-value"><span class="unit badge-unit-degree"> 21 hours</span></span><span data-no-gradient="" class="badge-caption-bottom wider u453B06 channel-custom-font-custom-14-body-reduced">of battery life<sup>◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span></div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 2 - CAPABILITY-->
    <!--BEGIN > SECTION 3 - APPLE SILICON-->
    <div class="section k59447B">
      <div class="section-content">
        <div class="row oAC1DBC">
          <div class="column large-12 large-hide medium-show m62D095">
            <div class="row x156540">
              <div class="column large-6 small-12 h24CD30">
                <h3 class="copy fF3C70A channel-custom-font-custom-24-eyebrow">Apple Silicon</h3>
                <p class="copy j1FB18D channel-custom-font-custom-48-headline">Pro to the Max.</p>
              </div>
              <div class="column large-6 small-12 n97F45E">
                <p class="copy helvetica-neue kB4ABE1 channel-custom-font-custom-21-intro">Up to 4x faster graphics performance<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> and up to 5x faster machine learning<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> on the <span style="white-space: nowrap;">41.05-centimetre (16.2-inch) model</span>. Up to 13x faster graphics performance<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> and up to 11x faster machine learning<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> on the <span style="white-space: nowrap;">35.97-centimetre (14.2-inch) model.</span></p>
              </div>
            </div>
          </div>
          <div class="column large-5 medium-hide small-12 i2E8A0B">
            <h3 class="copy i70FFAF channel-custom-font-custom-24-eyebrow">Apple Silicon</h3>
            <p class="copy zF4FFC3 channel-custom-font-custom-48-headline">Pro to the Max.</p>
            <p class="copy helvetica-neue r94F405 channel-custom-font-custom-21-intro">Up to 4x faster graphics performance<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> and up to 5x faster machine learning<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> on the <span style="white-space: nowrap;">41.05-centimetre (16.2-inch) model</span>. Up to 13x faster graphics performance<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> and up to 11x faster machine learning<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span> on the <span style="white-space: nowrap;">35.97-centimetre (14.2-inch) model.</span></p>
          </div>
          <div class="column large-7 medium-12 small-12 jA03DD5">
            <div class="row cF4C8F4">
              <div class="column large-6 small-12 c1BE632">
                <div class="row medium-hide d6DD068">
                  <div class="column large-12 i0D7C50">
                    <figure aria-hidden="true" class="image image-m1_pro n205A5D"></figure>
                  </div>
                </div>
                <div class="bento-box p2C52DF">
                  <div class="bentobox-item d290350">
                    <div class="row oD6CBF2">
                      <div class="column large-12 iADFF0F">
                        <div class="row yF92509">
                          <div class="column large-0 medium-0 v8E414C">
                            <h4 class="visually-hidden-text"> M1 Pro chip. <figure aria-hidden="true" class="image image-m1_icon_pro z8D33A5"></figure>
                            </h4>
                          </div>
                          <div class="column large-0 medium-0 y8162A0">
                            <div class="bento-box hB629CD">
                              <div class="bentobox-item aE9B0F7"></div>
                            </div>
                          </div>
                          <div class="column large-6 medium-6 iA26A95">
                            <p class="copy helvetica-neue e6A6FBE typography-caption">Up to</p>
                            <p class="copy b4C0CC0 typography-tout">10-core</p>
                            <p class="copy helvetica-neue pF3E7DA typography-caption">CPU</p>
                          </div>
                        </div>
                        <div class="row k4553B8">
                          <div class="column large-12 bC0ADD4">
                            <div class="bento-box p65CFA3">
                              <div class="bentobox-item f379BFD"></div>
                              <div class="bentobox-item w951FB1"></div>
                              <div class="bentobox-item d807B79"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row tC31E1A">
                          <div class="column large-5 s362401">
                            <p class="copy helvetica-neue c922028 typography-caption">Up to</p>
                            <p class="copy jBA76A7 typography-tout">16-core</p>
                            <p class="copy helvetica-neue gFADE6A typography-caption">GPU</p>
                          </div>
                          <div class="column large-0 x8C800A">
                            <div class="bento-box u24A64C">
                              <div class="bentobox-item n941EEE"></div>
                            </div>
                          </div>
                          <div class="column large-6 cD0FFCD">
                            <div class="row v9C3E9D">
                              <div class="column large-12 nE9662D">
                                <p class="copy i082A20 typography-tout">16-core</p>
                                <p class="copy helvetica-neue v1F91BC typography-caption">Neural Engine</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row x6452DD">
                          <div class="column large-12 k1E38E3">
                            <div class="bento-box m03AF5E">
                              <div class="bentobox-item aB22422"></div>
                              <div class="bentobox-item z257CBE"></div>
                              <div class="bentobox-item u320754"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row l51895A">
                          <div class="column large-4 mE10E2C">
                            <p class="copy helvetica-neue rCBC62F typography-caption">Up to</p>
                            <p class="copy q48E487 typography-tout">32GB</p>
                            <p class="copy helvetica-neue q1782E0 typography-caption">of unified memory</p>
                          </div>
                          <div class="column large-0 p9037C0">
                            <div class="bento-box iB09970">
                              <div class="bentobox-item a6731C1"></div>
                            </div>
                          </div>
                          <div class="column large-7 rFE2899">
                            <p class="copy helvetica-neue f9FBEC6 typography-caption">Up to</p>
                            <p class="copy h055D40 typography-tout">20 streams</p>
                            <p class="copy helvetica-neue j77A378 typography-caption">4K ProRes video playback<span aria-hidden="true"><sup>◊</sup></span><span class="visuallyhidden">Refer legal disclaimers</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column large-6 small-12 xC82A9E">
                <div class="row medium-hide aCE41EA">
                  <div class="column large-12 n5E4271">
                    <figure aria-hidden="true" class="image image-m1_max mFEFBF6"></figure>
                  </div>
                </div>
                <div class="bento-box g8DA484">
                  <div class="bentobox-item vDA106A">
                    <div class="row nFAAFA8">
                      <div class="column large-12 j2E9171">
                        <div class="row e91CBB8">
                          <div class="column large-0 kB4A3EA">
                            <h4 class="visually-hidden-text"> M1 Max chip. <figure aria-hidden="true" class="image image-m1_icon_max x56C51E"></figure>
                            </h4>
                          </div>
                          <div class="column large-0 p434C1C">
                            <div class="bento-box t7265FE">
                              <div class="bentobox-item n63FDD6"></div>
                            </div>
                          </div>
                          <div class="column large-6 k2D00AF">
                            <p class="copy dF4DEBD typography-tout">10-core</p>
                            <p class="copy helvetica-neue m562F76 typography-caption">CPU</p>
                          </div>
                        </div>
                        <div class="row t57D6EA">
                          <div class="column large-12 w28A2F2">
                            <div class="bento-box sA64AE3">
                              <div class="bentobox-item m76F414"></div>
                              <div class="bentobox-item u9F8311"></div>
                              <div class="bentobox-item d5E6C40"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row z67FB6B">
                          <div class="column large-5 oCF9B33">
                            <p class="copy helvetica-neue xE0362E typography-caption">Up to</p>
                            <p class="copy m082DE0 typography-tout">32-core</p>
                            <p class="copy helvetica-neue f62FE27 typography-caption">GPU</p>
                          </div>
                          <div class="column large-0 r569740">
                            <div class="bento-box g775E08">
                              <div class="bentobox-item bC41B7A"></div>
                            </div>
                          </div>
                          <div class="column large-6 f7B42BF">
                            <div class="row g475CAA">
                              <div class="column large-12 p786394">
                                <p class="copy rFC9C99 typography-tout">16-core</p>
                                <p class="copy helvetica-neue n04770C typography-caption">Neural Engine</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row i8A2BF8">
                          <div class="column large-12 k365A82">
                            <div class="bento-box q7D67BA">
                              <div class="bentobox-item oEAF079"></div>
                              <div class="bentobox-item j9585E7"></div>
                              <div class="bentobox-item c8AC444"></div>
                            </div>
                          </div>
                        </div>
                        <div class="row zD6C3AA">
                          <div class="column large-4 u5020D4">
                            <p class="copy helvetica-neue nE8317E typography-caption">Up to</p>
                            <p class="copy u11B7E0 typography-tout">64GB</p>
                            <p class="copy helvetica-neue o9CE6F2 typography-caption">of unified memory</p>
                          </div>
                          <div class="column large-0 kCE252A">
                            <div class="bento-box pFC9292">
                              <div class="bentobox-item w902A98"></div>
                            </div>
                          </div>
                          <div class="column large-7 v1DC824">
                            <p class="copy helvetica-neue y9FDC91 typography-caption">Up to</p>
                            <p class="copy r18BCC4 typography-tout">7 streams</p>
                            <p class="copy helvetica-neue p0C3F24 typography-caption">8K ProRes video playback<span aria-hidden="true"><sup>◊</sup></span><span class="visuallyhidden">Refer legal disclaimers</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 3 - APPLE SILICON-->
    <!--BEGIN > SECTION 4 - DISPLAY-->
    <div class="section aF64FB2">
      <div class="section-content">
        <div class="row o3664F9">
          <div class="column large-9 medium-8 small-12 small-hide n1A0E99">
            <div class="row v4A1F9E">
              <div class="column large-12 q22AC69">
                <figure aria-label="MacBook Pro showing the size difference between the 16-in. and 14-in. models." role="img" class="image image-display fC86D89"></figure>
              </div>
            </div>
            <div class="row pB5C39E">
              <div class="column large-12 medium-hide z14D056">
                <p class="copy q73637C typography-headline-reduced">41.05 cm <br>(16.2″)</p>
              </div>
              <div class="column large-12 medium-hide k04417B">
                <p class="copy p25CBBC typography-headline-reduced">35.97 cm <br>(14.2″)</p>
              </div>
              <div class="column large-12 large-hide medium-show b5367FF">
                <p class="copy hDF8A82 typography-callout">41.05 cm <br>(16.2″)</p>
              </div>
              <div class="column large-12 large-hide medium-show small-hide m67B60D">
                <p class="copy xCB4C17 typography-callout">35.97 cm <br>(14.2″)</p>
              </div>
            </div>
          </div>
          <div class="column large-5 medium-5 small-12 x55AAB4">
            <h3 class="copy y19DED0 channel-custom-font-custom-24-eyebrow">Display</h3>
            <p class="copy w3DBDB0 channel-custom-font-custom-48-headline">Feast your eyes on XDR.</p>
            <p class="copy helvetica-neue t7AC559 channel-custom-font-custom-21-intro">
              A Liquid Retina&nbsp;XDR display delivers extreme dynamic range and incredible contrast ratio. Get unbelievable detail in shadows, deeper blacks and more vibrant colours than ever before.</p>
            <div class="row b958B79">
              <div class="column large-12 medium-5 medium-hide q9D3B9E">
                <div class="row q4C0E39">
                  <div class="column large-6 sBE502C">
                    <figure role="presentation" class="badge badge-reduced badge-left b4C55FF">
                      <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up b4C55FF typography-body-reduced">Up to</span><span class="badge-value">1,000 nits
                          <!---->
                        </span><span data-no-gradient="" class="badge-caption-bottom wider b4C55FF typography-body-reduced">nits sustained brightness</span></div>
                    </figure>
                  </div>
                  <div class="column large-6 s6F0FDE">
                    <figure role="presentation" class="badge badge-reduced badge-left f8FE573">
                      <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up f8FE573 typography-body-reduced">Up to</span><span class="badge-value">1,600 nits
                          <!---->
                        </span><span data-no-gradient="" class="badge-caption-bottom wider f8FE573 typography-body-reduced">peak brightness</span></div>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="column large-12 medium-5 medium-hide d2DC969">
                <figure role="presentation" class="badge badge-reduced badge-left p4167DD">
                  <div role="text" class="badge-content">
                    <!----><span class="badge-value"><span class="unit badge-unit-degree"> 1 million:1</span></span><span data-no-gradient="" class="badge-caption-bottom wider p4167DD typography-body-reduced">contrast ratio</span>
                  </div>
                </figure>
              </div>
              <div class="column large-12 large-hide medium-show lB031CA">
                <div class="row rC4BF75">
                  <div class="column large-12 medium-6 small-6 o49A853">
                    <figure role="presentation" class="badge badge-tiny badge-left dEE4197">
                      <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up dEE4197 typography-body-reduced">Up to</span><span class="badge-value">1,000 nits
                          <!---->
                        </span><span data-no-gradient="" class="badge-caption-bottom wider dEE4197 typography-body-reduced">sustained&nbsp;brightness</span></div>
                    </figure>
                  </div>
                  <div class="column large-12 medium-6 small-6 c9CB1F4">
                    <figure role="presentation" class="badge badge-tiny badge-left u5A533C">
                      <div role="text" class="badge-content"><span data-no-gradient="" class="badge-caption-up u5A533C typography-body-reduced">Up to</span><span class="badge-value">1,600&nbsp;nits
                          <!---->
                        </span><span data-no-gradient="" class="badge-caption-bottom wider u5A533C typography-body-reduced">peak brightness</span></div>
                    </figure>
                  </div>
                </div>
              </div>
              <div class="column large-12 large-hide medium-show uA8397B">
                <figure role="presentation" class="badge badge-tiny badge-left b96366E">
                  <div role="text" class="badge-content">
                    <!----><span class="badge-value"><span class="unit badge-unit-degree"> 1 million:1</span></span><span data-no-gradient="" class="badge-caption-bottom wider b96366E typography-body-reduced">contrast ratio</span>
                  </div>
                </figure>
              </div>
            </div>
            <div class="row large-hide small-show jF8E236">
              <div class="column large-12 bC7BEEE">
                <figure aria-label="MacBook Pro showing the size difference between the 16-in. and 14-in. models." role="img" class="image image-display v5B1D0C"></figure>
              </div>
              <div class="column large-12 dF68B81">
                <div class="row z36FB6A">
                  <div class="column large-12 p804F79">
                    <p class="copy n79E72E typography-headline-reduced">41.05 cm <br>(16.2″)</p>
                  </div>
                  <div class="column large-12 c6FC44D">
                    <p class="copy z9BDF05 typography-headline-reduced">35.97 cm <br>(14.2″)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 4 - DISPLAY-->
    <!--BEGIN > SECTION 5 - CAMERA, MICS, AND SPEAKERS-->
    <div class="section h1C91E0">
      <div class="section-content">
        <div class="row eC415BF">
          <div class="column large-7 small-12 iA1910F">
            <h3 class="copy eED3F21 channel-custom-font-custom-24-eyebrow">Camera, Mics and Speakers</h3>
            <p class="copy u6F404E channel-custom-font-custom-48-headline">Sharper video calls. Crystal-clear&nbsp;audio.</p>
            <p class="copy helvetica-neue uB18175 channel-custom-font-custom-21-intro">Enhanced 1080p FaceTime HD camera. A&nbsp;powerful six-speaker sound system with spatial audio. And a studio-quality mic array. So&nbsp;you always look and sound your&nbsp;best.</p>
            <div class="row lF891E2">
              <div class="column large-1 pD18192">
                <figure aria-hidden="true" class="image image-camera_icon_video c691832"></figure>
              </div>
              <div class="column large-8 medium-11 small-hide wF2A7B7">
                <p class="copy helvetica-neue f37C3B3 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">1080p FaceTime HD camera</span> <span style="color: #86868b;"><br>Double the resolution for sharper video calls.<span aria-hidden="true"><sup>◊</sup></span><span class="visuallyhidden">Refer legal disclaimers</span></span></p>
              </div>
              <div class="column large-7 large-hide medium-9 small-10 small-show s25981F">
                <p class="copy helvetica-neue nBDA2F3 channel-custom-font-custom-17-body-reduced-flex"><span style="font-weight: 500;">1080p FaceTime HD camera</span> <span style="color: #86868b;"><br>Double the resolution for sharper video calls.<span aria-hidden="true"><sup>◊</sup></span><span class="visuallyhidden">Refer legal disclaimers</span> </span></p>
              </div>
            </div>
          </div>
          <div class="column large-5 small-12 e1BDA9E">
            <figure aria-label="MacBook Pro illustrating collaboration between two people using music creation software while simultaneously using FaceTime to show the quality of MacBook Pro's camera, speakers, and microphones." role="img" class="image image-camera j2FC75D"></figure>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 5 - CAMERA, MICS, AND SPEAKERS-->
    <!--BEGIN > SECTION 6 - CONNECTIVITY-->
    <div class="section pA9E173">
      <div class="section-content">
        <div class="row y2759C0">
          <div class="column large-6 small-12 small-hide zBFD9BC">
            <div class="row l47D3DD">
              <div class="column large-12 i98898B">
                <figure aria-label="Side view of MacBook Pro showcasing an array of new ports for a wider range of connectivity." role="img" class="image image-connectivity_port q43EF08"></figure>
              </div>
              <div class="column large-12 sFECF70">
                <figure aria-label="Top view of MacBook Pro with the MagSafe charger." role="img" class="image image-connectivity_magsafe e70DECE"></figure>
              </div>
            </div>
          </div>
          <div class="column large-6 small-12 dF89FCA">
            <h3 class="copy z5C62ED channel-custom-font-custom-24-eyebrow">Connectivity</h3>
            <p class="copy t168187 channel-custom-font-custom-48-headline">More plugged in than ever.</p>
            <p class="copy helvetica-neue r5AB11F channel-custom-font-custom-21-intro">More ports for pros, including SDXC, HDMI, Thunderbolt&nbsp;4 and headphone jack. And power up with MagSafe&nbsp;3.</p>
            <div class="row large-hide small-show kFA518D">
              <div class="column large-12 mCB2F9A">
                <figure aria-label="Side view of MacBook Pro showcasing an array of new ports for a wider range of connectivity." role="img" class="image image-connectivity_port r28D22F"></figure>
              </div>
              <div class="column large-12 mF3FC53">
                <figure aria-label="Top view of MacBook Pro with the MagSafe charger." role="img" class="image image-connectivity_magsafe a087BE8"></figure>
              </div>
            </div>
            <div class="row u72D2B2">
              <div class="column large-1 n81924A">
                <figure aria-hidden="true" class="image image-connectivity_icon_monitors yC5FB62"></figure>
              </div>
              <div class="column large-11 small-hide m7BFB58">
                <p class="copy helvetica-neue yF91453 channel-custom-font-custom-17-body-reduced"><span style="font-weight: 500;">External displays</span> <span style="color: #86868b;"><br>Power up to three Pro Display XDRs and a 4K&nbsp;TV.</span></p>
              </div>
              <div class="column large-11 large-hide small-show e5F91EE">
                <p class="copy helvetica-neue b9F05F2 channel-custom-font-custom-17-body-reduced-flex"><span style="font-weight: 500;">External displays</span> <span style="color: #86868b;"><br>Power up to three Pro Display XDRs and a 4K TV.</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 6 - CONNECTIVITY-->
    <!--BEGIN > SECTION 7 - APPS-->
    <div class="section f1390a8">
      <div class="section-content">
        <div class="row t3eaab6">
          <div class="column large-6 small-12 q0bfc78">
            <h3 class="copy r1eb62f channel-custom-font-custom-24-eyebrow">macOS and Pro Apps</h3>
            <p class="copy ca83cac channel-custom-font-custom-48-headline">Unleash the power of M1&nbsp;Pro and M1&nbsp;Max.</p>
            <p class="copy helvetica-neue z9721c4 channel-custom-font-custom-21-intro">Over 10,000 apps and plug-ins are already&nbsp;optimised for Apple silicon with macOS&nbsp;Monterey, including Final&nbsp;Cut&nbsp;Pro, Logic&nbsp;Pro, Cinema&nbsp;4D and&nbsp;Microsoft&nbsp;365.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer legal disclaimers</span></p>
          </div>
          <div class="column large-6 small-12 ddb6fd4">
            <figure aria-label="MacBook Pro running pro apps." role="img" class="image image-apps z9459bf"></figure>
          </div>
        </div>
      </div>
    </div>
    <!--END > SECTION 7 - APPS-->
    <!--BEGIN > FLEX 1 - WHY MAC-->
    <div class="section w6c736d">
      <div class="section-content">
        <div class="row large-display-bleed medium-display-bleed q0a3e94">
          <div class="column large-12 q02c985">
            <h3 class="copy f89a263 channel-custom-font-custom-21-eyebrow-reduced">Why Mac</h3>
            <p class="copy a0c7426 channel-custom-font-custom-40-headline-reduced">There’s more to love in every Mac.</p>
          </div>
          <div class="column large-4 small-12 c3c737c">
            <figure aria-hidden="true" class="image image-why_icon_m1_chips x7471c6"></figure>
            <div class="row small-hide aA4F2D2">
              <div class="column large-12 l66380B">
                <h4 class="copy helvetica-neue h8251CE typography-partner-pricing">Everything is powerful.</h4>
                <p class="copy helvetica-neue o98BC6A typography-body">
                  The combination of Apple&nbsp;silicon and macOS means Mac delivers incredible performance and phenomenal battery&nbsp;life.</p>
              </div>
            </div>
            <div class="row large-hide small-show q950DD2">
              <div class="column large-12 d34A33A">
                <p class="copy helvetica-neue q05c363 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is powerful.</p>
                <p class="copy helvetica-neue t3cf362 channel-custom-font-custom-17-body-reduced-flex">The combination of Apple&nbsp;silicon and macOS means Mac delivers incredible performance and phenomenal battery&nbsp;life.</p>
              </div>
            </div>
          </div>
          <div class="column large-4 small-12 ec88939">
            <figure aria-hidden="true" class="image image-why_icon_connectivity t34db34"></figure>
            <div class="row small-hide y74EA5D">
              <div class="column large-12 x4C6E17">
                <h4 class="copy helvetica-neue fF83A4E typography-partner-pricing">Everything works together.</h4>
                <p class="copy helvetica-neue pD5BF6C typography-body">When you combine Mac with other Apple devices, connectivity is seamless and effortless.</p>
              </div>
            </div>
            <div class="row large-hide small-show fD17AFF">
              <div class="column large-12 m8B545A">
                <p class="copy helvetica-neue ea02c4b channel-custom-font-custom-17-body-reduced-flex-subhead">Everything works together.</p>
                <p class="copy helvetica-neue c8278a9 channel-custom-font-custom-17-body-reduced-flex">
                  When you combine Mac with other Apple&nbsp;devices, connectivity is seamless and&nbsp;effortless.</p>
              </div>
            </div>
          </div>
          <div class="column large-4 small-12 ecd1114">
            <figure aria-hidden="true" class="image image-why_icon_performance w6189bf"></figure>
            <div class="row small-hide t05C45A">
              <div class="column large-12 sC883BD">
                <h4 class="copy helvetica-neue b742836 typography-partner-pricing">Everything is easy.</h4>
                <p class="copy helvetica-neue g3C3424 typography-body">Starting projects is simple. Sign in to your iCloud account to access your existing photos, videos, music libraries and&nbsp;more.</p>
              </div>
            </div>
            <div class="row large-hide small-show y5EDF6A">
              <div class="column large-12 k9D7282">
                <p class="copy helvetica-neue s2fd10f channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is easy.</p>
                <p class="copy helvetica-neue z9a22cb channel-custom-font-custom-17-body-reduced-flex">
                  Starting projects is simple. Sign in to your iCloud account to access your existing photos, videos, music libraries and&nbsp;more.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX 1 - WHY MAC-->
    <!--BEGIN > FLEX 2 - COMPARE-->
    <div class="section nA1B087">
      <div class="section-content">
        <div class="row large-display-bleed medium-display-bleed uA18331">
          <div class="column large-12 u393B9B">
            <h3 class="copy kE26746 channel-custom-font-custom-21-eyebrow-reduced">Compare</h3>
            <p class="copy f01CE91 channel-custom-font-custom-40-headline-reduced">Choose the right Mac for you.</p>
          </div>
          <div class="jEEA60A">
            <div class="channel-compare">
              <!---->
              <!---->
              <div class="section section-compare-table">
                <div class="compare-wrapper">
                  <div role="table" aria-label="Compare models" class="compare compare-table with-fullwidthrowheader">
                    <div role="rowgroup" class="compare selector-table with-fullwidthrowheader">
                      <div role="row" class="compare-row">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Product name</div>
                        </div>
                        <div role="cell" class="static-dropdown compare-column compare-column-0  first-child">
                          <div>MacBook Air 13‑in.</div>
                        </div>
                        <div role="cell" class="static-dropdown compare-column compare-column-1 ">
                          <div>MacBook Pro 14‑in.</div>
                        </div>
                        <div role="cell" class="static-dropdown compare-column compare-column-2 ">
                          <div>MacBook Pro 16‑in.</div>
                        </div>
                      </div>
                    </div>
                    <!--BEGIN > CATEGORY > IMAGES-->
                    <div role="rowgroup" class="compare-section section-images no-padding-top" usestatic="true">
                      <!--BEGIN > CATEGORY > IMAGES > FEATURE > IMAGES-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-default">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Images</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <div class="b061310 embed-image" index="0">
                            <figure role="img" aria-label="MacBook Air 13‑in." class="compare-image image-compare_macbook_air_m1_gold"></figure>
                          </div>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <div class="d378430 embed-image" index="1">
                            <figure role="img" aria-label="MacBook Pro 14‑in." class="compare-image image-compare_macbook_pro_m1_14_spacegray"></figure>
                          </div>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <div class="m70B12B embed-image" index="2">
                            <figure role="img" aria-label="MacBook Pro 16‑in." class="compare-image image-compare_macbook_pro_m1_16_spacegray"></figure>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > IMAGES > FEATURE > IMAGES-->
                    </div>
                    <!--END > CATEGORY > IMAGES-->
                    <!--BEGIN > CATEGORY > FINISH-->
                    <div role="rowgroup" class="compare-section section-finish no-padding-top" usestatic="true">
                      <!--BEGIN > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                      <div role="row" data-column-group="" class="compare-row compare-template-border-bottom compare-template-preview-item-color-nav">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Finish</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <div class="row-colors" index="0" productname="MacBook Air 13‑in.">
                            <!---->
                            <div class="colornav">
                              <div>
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(171, 174, 179);"></figure>
                                  </div>
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                  </div>
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Gold" class="colornav-swatch" style="background-color: rgb(223, 204, 183);"></figure>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <div class="row-colors" index="1" productname="MacBook Pro 14‑in.">
                            <!---->
                            <div class="colornav">
                              <div>
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(171, 174, 179);"></figure>
                                  </div>
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <div class="row-colors" index="2" productname="MacBook Pro 16‑in.">
                            <!---->
                            <div class="colornav">
                              <div>
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(171, 174, 179);"></figure>
                                  </div>
                                  <div role="listitem" class="colornav-item">
                                    <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--END > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                    </div>
                    <!--END > CATEGORY > FINISH-->
                    <!--BEGIN > CATEGORY > BUY-->
                    <div role="rowgroup" class="compare-section section-buy no-padding-top" usestatic="true">
                      <!--BEGIN > CATEGORY > BUY > FEATURE > BUY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-button">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Buy</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <!-- <div class="button-container" index="0" productname="MacBook Air 13‑in."><a href="#" aria-label="Buy MacBook Air 13-in. now" class="button">Buy now</a></div> -->
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <!-- <div class="button-container" index="1" productname="MacBook Pro 14‑in."><a href="#" aria-label="Buy MacBook Pro 14-in. now" class="button">Buy now</a></div> -->
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <!-- <div class="button-container" index="2" productname="MacBook Pro 16‑in."><a href="#" aria-label="Buy MacBook Pro 16-in. now" class="button">Buy now</a></div> -->
                        </div>
                      </div>
                      <!--END > CATEGORY > BUY > FEATURE > BUY-->
                    </div>
                    <!--END > CATEGORY > BUY-->
                    <!--BEGIN > CATEGORY > QUICK-LOOK-->
                    <div role="rowgroup" class="compare-section section-quick-look no-padding-top multi-row" usestatic="true">
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Quick look</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-value">33.74 cm <span class="visuallyhidden">"in."</span></span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">(13.3″) Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-value"> 35.97 cm <span class="visuallyhidden">"in."</span></span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">(14.2″) Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-value">41.05 cm <span class="visuallyhidden">"in."</span></span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">(16.2″) Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Chip</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper u46924f embed-image">
                                  <figure class="compare-image image-icon_M1_chip"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Apple M1 chip</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper y855231 embed-image">
                                  <figure class="compare-image image-icon_M1_Max_M1_Pro"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Apple M1 Pro chip or<br>Apple M1 Max chip</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper a71891d embed-image">
                                  <figure class="compare-image image-icon_M1_Max_M1_Pro"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Apple M1 Pro chip or<br>Apple M1 Max chip</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CPU-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">CPU</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">&nbsp;</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">8-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">CPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">10-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">CPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">&nbsp;</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">10-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">CPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CPU-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > GPU-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">GPU</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">8-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">GPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">32-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">GPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">32-core</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">GPU</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > GPU-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > MEMORY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Memory</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">16GB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">unified memory</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">64GB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">unified memory</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">64GB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">unified memory</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > MEMORY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > HD-CAPACITY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">HD Capacity</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">2TB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">8TB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">8TB</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > HD-CAPACITY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > BATTERY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Battery</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">18 hours</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">17 hours</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Up to</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-value">21 hours</span>
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer legal disclaimers</span></span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > BATTERY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CONNECTIVITY-->
                      <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                        <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                          <div class="visuallyhidden">Connectivity</div>
                        </div>
                        <div role="cell" class="first-child compare-column compare-column-0 product-0">
                          <figure role="presentation" class="badge" index="0">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper nA4FDD7 embed-image">
                                  <figure class="compare-image image-icon_touch_id"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Touch ID</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-1 product-1">
                          <figure role="presentation" class="badge" index="1">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper i8ABCFC embed-image">
                                  <figure class="compare-image image-icon_touch_id"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Touch ID</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                        <div role="cell" class="compare-column compare-column-2 product-2">
                          <figure role="presentation" class="badge" index="2">
                            <div class="badge-content">
                              <div class="badge-row">
                                <div aria-hidden="true" class="image-icon-wrapper z62349E embed-image">
                                  <figure class="compare-image image-icon_touch_id"></figure>
                                </div>
                                <!---->
                                <!---->
                                <!---->
                              </div>
                              <div class="badge-row">
                                <!----><span class="badge-caption copy">Touch ID</span>
                                <!---->
                                <!---->
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                      <!--END > CATEGORY > QUICK-LOOK > FEATURE > CONNECTIVITY-->
                    </div>
                    <!--END > CATEGORY > QUICK-LOOK-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX 2 - COMPARE-->
    <!--BEGIN > FLEX 3 - AIRPODS-->
    <div class="section b119e5c">
      <div class="section-content">
        <div class="row large-display-bleed medium-display-bleed r141783">
          <div class="column large-7 small-12 v5e2af6">
            <h3 class="copy u456640 channel-custom-font-custom-21-eyebrow-reduced">AirPods</h3>
            <p class="copy fbb49d7 channel-custom-font-custom-40-headline-reduced">Magic runs in the family.</p>
            <p class="copy helvetica-neue z932417 channel-custom-font-custom-17-body-reduced">AirPods deliver an unparalleled listening experience. They switch seamlessly between Mac and iPhone. And every model packs rich, high-fidelity audio into an innovative wireless&nbsp;design.</p>
          </div>
          <div class="column large-5 small-12 w61f29d">
            <figure aria-label="AirPods, AirPods Pro, and AirPods Pro Max." role="img" class="image image-accessories_airpods u4c4a2f"></figure>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX 3 - AIRPODS-->
    <!--BEGIN > FLEX 4 - APPLECARE+-->
    <div class="section c333372">
      <div class="section-content">
        <div class="row large-display-bleed medium-display-bleed y863eb8">
          <div class="column large-7 small-12 s2cff78">
            <h3 class="copy z92eeb6 channel-custom-font-custom-21-eyebrow-reduced">AppleCare+</h3>
            <p class="copy d6c9ea4 channel-custom-font-custom-40-headline-reduced">Expert support, enhanced coverage.</p>
            <ul role="list" aria-label="Apple Care plus support and coverage." class="list e921941">
              <li role="listitem" class="list-item e2B6980">
                <div class="row b5eff07">
                  <div class="column large-0 s231ad5">
                    <figure aria-hidden="true" class="image image-accessories_icon_applecare s22ffc8"></figure>
                  </div>
                  <div class="column large-11 afa91ee">
                    <p class="copy helvetica-neue v5483bc channel-custom-font-custom-17-body-reduced">Apple-certified service</p>
                  </div>
                </div>
              </li>
              <li role="listitem" class="list-item dE0F5C2">
                <div class="row fc0bf7e">
                  <div class="column large-0 s2cbe54">
                    <figure aria-hidden="true" class="image image-accessories_icon_applecare dae9b5a"></figure>
                  </div>
                  <div class="column large-11 u47f958">
                    <p class="copy helvetica-neue r11b234 channel-custom-font-custom-17-body-reduced">
                      Priority access to Apple&nbsp;experts</p>
                  </div>
                </div>
              </li>
              <li role="listitem" class="list-item kF2EBB9">
                <div class="row r117b31">
                  <div class="column large-0 r1fda65">
                    <figure aria-hidden="true" class="image image-accessories_icon_applecare x7a783a"></figure>
                  </div>
                  <div class="column large-11 d7edb58">
                    <p class="copy helvetica-neue q09c6e0 channel-custom-font-custom-17-body-reduced">Accidental damage coverage</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="column large-5 small-12 x7b6000">
            <figure aria-label="MacBook Pro with Apple Care plus logo." role="img" class="image image-accessories_applecare t3f263f"></figure>
          </div>
        </div>
      </div>
    </div>
    <!--END > FLEX 4 - APPLECARE+-->
    <!--BEGIN > LEGAL-->
    <div class="section q7ABA85">
      <div class="section-content">
        <div class="row large-display-bleed medium-display-bleed c0ADE54">
          <div class="column large-12 medium-12 s185A56">
            <div class="row x67B730">
              <div class="column large-12 n22495C">
                <p class="copy helvetica-neue kA26997 channel-custom-font-custom-12-sosumi"><span id="footnote-diamond-1">◊</span> Legal Disclaimers</p>
              </div>
            </div>
            <div class="row nBAAB83">
              <div class="column large-12 w076B92">
                <p class="copy helvetica-neue rF00FC0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">
                    Power and Battery:</span> Testing conducted by Apple in&nbsp;September 2021 using pre-production <span style="white-space: nowrap;">16-inch MacBook&nbsp;Pro</span> systems with Apple&nbsp;M1&nbsp;Pro, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">16-core GPU</span>, 16GB of RAM and 1TB SSD. The Apple&nbsp;TV app movie playback test measures battery life by playing back 1080p&nbsp;HD content with display brightness set to 8 clicks from the bottom. Battery life varies by use and configuration. See <a href="https://www.apple.com/in/batteries" class="footer-link"><span style="color: #424245">apple.com/in/batteries</span></a> for more information.</p>
              </div>
            </div>
            <div class="row e233D21">
              <div class="column large-12 qE02E87">
                <p class="copy helvetica-neue lBE15A8 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Performance: </span> Performance claims are based on comparison with the previous generation.</p>
              </div>
              <div class="column large-12 yDA4BEB">
                <p class="copy helvetica-neue eC3E4D8 channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production 16-inch MacBook&nbsp;Pro systems with Apple&nbsp;M1&nbsp;Max, <span style="white-space: nowrap;">10-core CPU</span> and <span style="white-space: nowrap;">32-core GPU</span>, as well as production <span style="white-space: nowrap;">2.4GHz 8-core Intel Core i9–based</span> 16-inch MacBook&nbsp;Pro systems with Radeon&nbsp;Pro 5600M graphics with 8GB of HBM2, all&nbsp;configured with 64GB of RAM and 8TB SSD. Pre-release Cinema&nbsp;4D S25 and pre-release Redshift v3.0.54 tested using a 1.32GB scene. Performance tests are conducted using specific computer systems and reflect the approximate performance of MacBook&nbsp;Pro.</p>
              </div>
              <div class="column large-12 zC40A79">
                <p class="copy helvetica-neue o455EC2 channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production <span style="white-space: nowrap;">16-inch MacBook Pro</span> systems with Apple&nbsp;M1&nbsp;Max, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">32-core GPU</span> and 64GB of RAM, as well as production 2.4GHz <span style="white-space: nowrap;">8‑core</span> Intel Core i9–based <span style="white-space: nowrap;">16-inch MacBook Pro</span> systems with Radeon&nbsp;Pro 5600M graphics with 8GB of HBM2 and 64GB of RAM, all configured with 8TB SSD. Pre-release Final Cut Pro 10.6 tested using an 18-second project with 8K&nbsp;ProRes 422 media, at 8192x4320 resolution and 23.98 frames per&nbsp;second. Performance tests are conducted using specific computer systems and reflect the approximate performance of&nbsp;MacBook&nbsp;Pro.</p>
              </div>
              <div class="column large-12 s031E5F">
                <p class="copy helvetica-neue fF8A16C channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production 14-inch MacBook&nbsp;Pro systems with Apple&nbsp;M1&nbsp;Max, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">32-core GPU</span>, 64GB of RAM and 8TB SSD, as&nbsp;well as production 2.3GHz quad-core Intel Core <span style="white-space: nowrap;">i7–based</span> 13-inch MacBook&nbsp;Pro systems with Intel Iris&nbsp;Plus&nbsp;Graphics, 32GB of RAM and 4TB SSD. <span style="white-space: nowrap;">Pre-release Final Cut Pro 10.6</span> tested using a complex 2-minute project with 4K&nbsp;ProRes 422 media. Performance tests are conducted using specific computer systems and reflect the approximate performance of&nbsp;MacBook&nbsp;Pro. </p>
              </div>
              <div class="column large-12 s6198AB">
                <p class="copy helvetica-neue uC32CBA channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production 14-inch MacBook&nbsp;Pro systems with Apple&nbsp;M1&nbsp;Max, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">32-core GPU</span>, 64GB of RAM and 8TB SSD, as&nbsp;well as production 2.3GHz quad-core Intel Core <span style="white-space: nowrap;">i7–based</span> 13-inch MacBook&nbsp;Pro systems with Intel Iris&nbsp;Plus&nbsp;Graphics, 32GB of RAM and 4TB SSD. <span style="white-space: nowrap;">Pre-release Final Cut Pro</span> 10.6 tested using an <span style="white-space: nowrap;">18-second</span> project with 8K&nbsp;ProRes 422 media, at 8192x4320 resolution and 23.98 frames per second. Performance tests are conducted using specific computer systems and reflect the approximate performance of MacBook&nbsp;Pro.</p>
              </div>
              <div class="column large-12 zFE10C4">
                <p class="copy helvetica-neue eEE4F3E channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production 16-inch MacBook&nbsp;Pro systems with Apple&nbsp;M1&nbsp;Pro, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">16-core GPU</span>, 32GB of RAM and 8TB SSD. <span style="white-space: nowrap;">Pre-release Final&nbsp;Cut&nbsp;Pro</span> 10.6 tested using a <span style="white-space: nowrap;">1-minute</span> <span style="white-space: nowrap;">picture-in-picture</span> project with 20 streams of Apple&nbsp;ProRes 422 video at 3840x2160 resolution and 29.97 frames per second. Performance tests are conducted using specific computer systems and&nbsp;reflect the approximate performance of&nbsp;MacBook&nbsp;Pro.</p>
              </div>
              <div class="column large-12 uA2F29E">
                <p class="copy helvetica-neue jF4A30C channel-custom-font-custom-12-sosumi">
                  Testing conducted by Apple in September 2021 using pre-production 16-inch MacBook&nbsp;Pro systems with Apple&nbsp;M1&nbsp;Max, <span style="white-space: nowrap;">10-core CPU</span>, <span style="white-space: nowrap;">32-core GPU</span>, 64GB of RAM and 8TB SSD. <span style="white-space: nowrap;">Pre-release Final&nbsp;Cut&nbsp;Pro</span> 10.6 tested using a <span style="white-space: nowrap;">1-minute</span> <span style="white-space: nowrap;">picture-in-picture</span> project with 7 streams of Apple&nbsp;ProRes 422 video at 8192x4320 resolution and 30 frames per second. Performance tests are conducted using specific computer systems and&nbsp;reflect the approximate performance of&nbsp;MacBook&nbsp;Pro.</p>
              </div>
            </div>
            <div class="row q0AA5A4">
              <div class="column large-12 y0699DE">
                <p class="copy helvetica-neue uB44E3B channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">App Store: </span>Apps are available on the App Store. </p>
              </div>
            </div>
            <div class="row uC41EC5">
              <div class="column large-12 wC82909">
                <p class="copy helvetica-neue q734FD5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Display: </span> Screen size is measured diagonally. The display on the 14-inch MacBook&nbsp;Pro has rounded corners at the top. When measured as a standard rectangular shape, the screen is <span style="white-space: nowrap;">35.97 centimetres (14.2 inches)</span> diagonally (actual viewable area is less). The display on the <span style="white-space: nowrap;">16-inch MacBook Pro</span> has rounded corners at the top. When measured as a standard rectangular shape, the screen is <span style="white-space: nowrap;">41.05 centimetres (16.2 inches)</span> diagonally (actual viewable area is less).</p>
              </div>
            </div>
            <div class="row u8B52BF">
              <div class="column large-12 k29A416">
                <p class="copy helvetica-neue tBED2F5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Storage: </span>1GB = 1 billion bytes and 1TB = 1 trillion bytes; actual formatted capacity less.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END > LEGAL-->
  </div>


</body>

</html>