<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="version:build" content="0.0.13">
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

      .channel-html th {
        font-size: 1em;
        font-weight: normal;
        font-style: normal;
      }

      .channel-html th {
        text-align: left;
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

      .channel-html .large-offset-0 {
        margin-left: 0;
      }

      .channel-html .large-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .large-offset-1 {
        margin-left: 8.3333333333%;
      }

      .channel-html .large-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .large-offset-2 {
        margin-left: 16.6666666667%;
      }

      .channel-html .large-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .large-offset-3 {
        margin-left: 25%;
      }

      .channel-html .large-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .large-offset-4 {
        margin-left: 33.3333333333%;
      }

      .channel-html .large-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .large-offset-5 {
        margin-left: 41.6666666667%;
      }

      .channel-html .large-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .large-offset-6 {
        margin-left: 50%;
      }

      .channel-html .large-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .large-offset-7 {
        margin-left: 58.3333333333%;
      }

      .channel-html .large-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .large-offset-8 {
        margin-left: 66.6666666667%;
      }

      .channel-html .large-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .large-offset-9 {
        margin-left: 75%;
      }

      .channel-html .large-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .large-offset-10 {
        margin-left: 83.3333333333%;
      }

      .channel-html .large-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .large-offset-11 {
        margin-left: 91.6666666667%;
      }

      .channel-html .large-12 {
        flex-basis: 100%;
        max-width: 100%;
      }

      .channel-html .large-offset-12 {
        margin-left: 100%;
      }

      .channel-html .large-centered {
        margin-left: auto;
        margin-right: auto;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-offset-0 {
          margin-left: 0;
        }

        .channel-html .medium-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .medium-offset-1 {
          margin-left: 8.3333333333%;
        }

        .channel-html .medium-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .medium-offset-2 {
          margin-left: 16.6666666667%;
        }

        .channel-html .medium-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .medium-offset-3 {
          margin-left: 25%;
        }

        .channel-html .medium-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .medium-offset-4 {
          margin-left: 33.3333333333%;
        }

        .channel-html .medium-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .medium-offset-5 {
          margin-left: 41.6666666667%;
        }

        .channel-html .medium-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .medium-offset-6 {
          margin-left: 50%;
        }

        .channel-html .medium-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .medium-offset-7 {
          margin-left: 58.3333333333%;
        }

        .channel-html .medium-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .medium-offset-8 {
          margin-left: 66.6666666667%;
        }

        .channel-html .medium-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .medium-offset-9 {
          margin-left: 75%;
        }

        .channel-html .medium-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .medium-offset-10 {
          margin-left: 83.3333333333%;
        }

        .channel-html .medium-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .medium-offset-11 {
          margin-left: 91.6666666667%;
        }

        .channel-html .medium-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .medium-offset-12 {
          margin-left: 100%;
        }

        .channel-html .medium-centered {
          margin-left: auto;
          margin-right: auto;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-offset-0 {
          margin-left: 0;
        }

        .channel-html .small-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .small-offset-1 {
          margin-left: 8.3333333333%;
        }

        .channel-html .small-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .small-offset-2 {
          margin-left: 16.6666666667%;
        }

        .channel-html .small-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .small-offset-3 {
          margin-left: 25%;
        }

        .channel-html .small-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .small-offset-4 {
          margin-left: 33.3333333333%;
        }

        .channel-html .small-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .small-offset-5 {
          margin-left: 41.6666666667%;
        }

        .channel-html .small-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .small-offset-6 {
          margin-left: 50%;
        }

        .channel-html .small-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .small-offset-7 {
          margin-left: 58.3333333333%;
        }

        .channel-html .small-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .small-offset-8 {
          margin-left: 66.6666666667%;
        }

        .channel-html .small-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .small-offset-9 {
          margin-left: 75%;
        }

        .channel-html .small-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .small-offset-10 {
          margin-left: 83.3333333333%;
        }

        .channel-html .small-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .small-offset-11 {
          margin-left: 91.6666666667%;
        }

        .channel-html .small-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .small-offset-12 {
          margin-left: 100%;
        }

        .channel-html .small-centered {
          margin-left: auto;
          margin-right: auto;
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

      .channel-html .icon-after::after,
      .channel-html .more::after {
        padding-left: 0.3em;
        top: 0;
      }

      .channel-html .icon-apple::before,
      .channel-html .icon-apple::after {
        content: "\f8ff";
      }

      .channel-html .icon-chevronright::before,
      .channel-html .icon-chevronright::after {
        content: "\f301";
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
      .channel-html .icon-wrapper .icon-after::after {
        display: inline;
        position: static;
      }

      .channel-html a.icon-wrapper {
        text-decoration: none;
      }

      .channel-html a.icon-wrapper:hover .icon-copy {
        text-decoration: underline;
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

      .channel-html [copy-type=h1]+*,
      .channel-html [copy-type=h2]+*,
      .channel-html [copy-type=h3]+*,
      .channel-html [copy-type=h4]+*,
      .channel-html [copy-type=h5]+*,
      .channel-html [copy-type=h6]+* {
        margin-top: 0.8em;
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

      /**
Mixin to define gaps per viewport and column number
@see Compare.vue: computed.columnRange()
 */

      /**
Mixin to define padding per viewport and column number
@see Compare.vue: computed.columnRange()
 */









      .channel-html .copy {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        word-break: break-word;
      }

      .channel-html .copy.helvetica-neue {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        letter-spacing: normal;
      }

      @font-face {
        font-family: "SF Pro Icons";
        /*Icon font file encoded in base64 format.*/
        /*It's a valid css code.*/
        src: url(data:font/truetype;charset=utf-8;base64,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AAIACv/XBjsHdABKAFgAAAEjBgcGBwYXFhcWFxYXFQYHBgcGBwYHBgcGJyYnJicmIyIHBgcGBwYHBicmJyYnJicmNTQ3PgE3NhcWFxYXFjMyNzY3Njc2FxYXFiU2NzYnDgIHBhcWNzYGCAEeIDwlMwEBQzBNJx0OFio5NCAwLzk+KigYLC8bLjM1MB0xKhYmJjw6MTUiNVk4PFFB13svOiE/LRQhFxMfEyxMK0tBV0d8/oM1HB0JSaFpHSAKT1FLBNwTHDZEXWyDZkkzGgsCLTJhU0wmOx0kAQELBxMVBw0NCBUSBwsCAiYfPilNgKe3qsCNb4MCAREJGRIGCwoGER4MEwQHHDHzQU9VUgNTektXTwYpJgAAAAAAACIBngABAAAAAAAAACYATgABAAAAAAABAAwAjwABAAAAAAACAAcArAABAAAAAAADAB0A8AABAAAAAAAEABQBOAABAAAAAAAFAA0BaQABAAAAAAAGABIBnQABAAAAAAAHACkCBAABAAAAAAAIAAkCQgABAAAAAAAJAAsCZAABAAAAAAAKBAsKiAABAAAAAAALABQOvgABAAAAAAAMABQO/QABAAAAAAANAL4QkAABAAAAAAAOADIRtQABAAAAAAAPAAwSAgABAAAAAAARAAcSHwADAAEECQAAAEwAAAADAAEECQABABgAdQADAAEECQACAA4AnAADAAEECQADADoAtAADAAEECQAEACgBDgADAAEECQAFABoBTQADAAEECQAGACQBdwADAAEECQAHAFIBsAADAAEECQAIABICLgADAAEECQAJABYCTAADAAEECQAKCBYCcAADAAEECQALACgOlAADAAEECQAMACgO0wADAAEECQANAXwPEgADAAEECQAOAGQRTwADAAEECQAPABgR6AADAAEECQARAA4SDwCpACAAMgAwADEANwAgAEEAcABwAGwAZQAgAEkAbgBjAC4AIABBAGwAbAAgAHIAaQBnAGgAdABzACAAcgBlAHMAZQByAHYAZQBkAC4AAKkgMjAxNyBBcHBsZSBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABTAEYAUABSAE8ASQBDAE8ATgBTACAANAA3ADAAOQAyAGMAYQAtADIAMAAxADYALgAwADMALgAyADIAAFNGUFJPSUNPTlMgNDcwOTJjYS0yMDE2LjAzLjIyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAFIAZQBnAHUAbABhAHIAAFNGIFBybyBJY29ucyBSZWd1bGFyAABWAGUAcgBzAGkAbwBuACAANAAuADIAMAAwAABWZXJzaW9uIDQuMjAwAABTAEYAUAByAG8ASQBjAG8AbgBzAC0AUgBlAGcAdQBsAGEAcgAAU0ZQcm9JY29ucy1SZWd1bGFyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGEAIAB0AHIAYQBkAGUAbQBhAHIAawAgAG8AZgAgAEEAcABwAGwAZQAgAEkAbgBjAC4AAFNGIFBybyBJY29ucyBpcyBhIHRyYWRlbWFyayBvZiBBcHBsZSBJbmMuAABBAHAAcABsAGUAIABJAG4AYwAAQXBwbGUgSW5jAABBAHAAcABsAGUAIABJAG4AYwAuAC4AAEFwcGxlIEluYy4uAABDAHIAZQBhAHQAZQBkACAAaQBuACAAMgAwADEANQAsACAAdABoAGUAIABvAHIAaQBnAGkAbgBhAGwAIABnAGwAeQBwAGgAIABmAG8AbgB0ACwAIABBAHAAcABsAGUAIABJAGMAbwBuAHMALAAgAHcAYQBzACAAcAByAG8AZAB1AGMAZQBkACAAdABvACAAdwBvAHIAawAgAGkAbgAgAHUAbgBpAHMAbwBuACAAdwBpAHQAaAAgAE0AeQByAGkAYQBkACAAUwBlAHQAIABQAHIAbwAgAGEAbgBkACAAcwBlAHIAdgBlAGQAIAB0AG8AIABzAHQAcgBlAG4AZwB0AGgAZQBuACAAaQBuAHQAZQByAGEAYwB0AGkAdgBlACAAbABpAG4AawBzACAAbwBuACAAdwBlAGIALgAgAEEAcABwAGwAZQAgAEkAYwBvAG4AcwAgAHcAbwB1AGwAZAAgAGwAYQB0AGUAcgAgAGIAZQBjAG8AbQBlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIAByAGUAZABlAHMAaQBnAG4AZQBkACAAdABvACAAYQBsAGkAZwBuACAAdABvACAAQQBwAHAAbABlACcAcwAgAG4AZQB3ACAAdAB5AHAAZQBmAGEAYwBlACwAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACwAIABpAG4AIAAyADAAMQA2AC4AIABUAGgAZQAgAHIAZQBkAGUAcwBpAGcAbgAgAGEAZABkAHIAZQBzAHMAZQBzACAAYQAgAG4AdQBtAGIAZQByACAAbwBmACAAaQBzAHMAdQBlAHMAIAB0AGgAYQB0ACAAdwBlAHIAZQAgAHAAcgBlAHMAZQBuAHQAIABpAG4AIABBAHAAcABsAGUAIABJAGMAbwBuAHMALgAgAEkAbQBwAHIAbwB2AGUAbQBlAG4AdABzACAAaQBuAGMAbAB1AGQAZQAgAG0AYQB0AGMAaABlAGQAIAB0AHkAcABlACAAbQBlAHQAcgBpAGMAcwAsACAAYgByAGEAbgBkACAASQBEACAAcwB0AGEAbgBkAGEAcgBkAGkAegBlAGQAIABBAHAAcABsAGUAIABsAG8AZwBvACAAYwBoAGEAcgBhAGMAdABlAHIALAAgAHcAZQBiACAAZgBvAG4AdAAgAG8AcAB0AGkAbQBpAHoAYQB0AGkAbwBuACwAIABjAHUAcwB0AG8AbQAgAGMAaABhAHIAYQBjAHQAZQByACAAcwBwAGEAYwBpAG4AZwAsACAAcABhAHIAZQBuAHQAIAB0AHkAcABlACAAYQBsAGkAZwBuAG0AZQBuAHQALAAgAGUAdABjAC4AIABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGQAZQBzAGkAZwBuAGUAZAAgAHQAbwAgAGIAZQAgAGEAZABhAHAAdABhAGIAbABlACAAdABvACAAdwBvAHIAawAgAHcAaQB0AGgAIABvAHUAcgAgAHQAdwBvACAAdwBlAGIAIABmAG8AbgB0ACAAZgBhAG0AaQBsAGkAZQBzACwAIABTAEYAIABQAHIAbwAgAEQAaQBzAHAAbABhAHkAIABhAG4AZAAgAFMARgAgAFAAcgBvACAAVABlAHgAdAAuACAAVABoAGUAIAB3AGUAYgAgAGYAbwBuAHQAIABmAGEAbQBpAGwAaQBlAHMAIABoAGEAdgBlACAAZABpAGYAZgBlAHIAaQBuAGcAIAB4AGgAZQBpAGcAaAB0AHMALAAgAGQAZQBzAGMAZQBuAGQAZQByACAAYQBuAGQAIABhAHMAYwBlAG4AZABlAHIAIABlAHgAdABlAG4AcwBpAG8AbgBzACwAIABhAGQAdgBhAG4AYwBlAG0AZQBuAHQALAAgAGMAbwB1AG4AdABlAHIAcwAsACAAYQBuAGQAIABiAG8AdwBsAHMALgAgAFQAaABlAHMAZQAgAGQAaQBmAGYAZQByAGUAbgBjAGUAcwAgAHcAZQByAGUAIABwAHUAcgBwAG8AcwBlAGwAeQAgAG0AYQBkAGUAIAB0AG8AIABvAHAAdABpAG0AaQB6AGUAIAB0AGgAZQAgAGwAZQBnAGkAYgBpAGwAaQB0AHkAIABvAGYAIABlAGEAYwBoACAAZgBhAG0AaQBsAHkAIABpAG4AIAB0AGgAZQAgAHQAeQBwAGUAIABzAGkAegBlACAAZgBvAHIAIAB3AGgAaQBjAGgAIAB0AGgAZQB5ACAAYQByAGUAIAB1AHQAaQBsAGkAegBlAGQALgAgAFQAaABlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIABjAGgAYQByAGEAYwB0AGUAcgAgAHMAZQB0ACAAaQBuAGMAbAB1AGQAZQBzACAAQwBUAEEAIABpAGMAbwBuAG8AZwByAGEAcABoAHkALAAgAFUASQAgAGUAbABlAG0AZQBuAHQAcwAsACAAYQBuAGQAIABpAG4AdABlAHIAbgBhAGwAIAB1AHMAZQAgAHMAcABlAGMAaQBhAGwAIABjAGgAYQByAGEAYwB0AGUAcgBzACAAYQBuAGQAIABpAHMAIABhAHYAYQBpAGwAYQBiAGwAZQAgAGEAcwAgAGEAIABmAGEAbQBpAGwAeQAgAG8AZgAgAHQAcgB1AGUAIAB0AHkAcABlACAAZgBvAG4AdABzACAAaQBuACAAZgBvAHUAcgAgAHcAZQBpAGcAaAB0AHMALgAAQ3JlYXRlZCBpbiAyMDE1LCB0aGUgb3JpZ2luYWwgZ2x5cGggZm9udCwgQXBwbGUgSWNvbnMsIHdhcyBwcm9kdWNlZCB0byB3b3JrIGluIHVuaXNvbiB3aXRoIE15cmlhZCBTZXQgUHJvIGFuZCBzZXJ2ZWQgdG8gc3RyZW5ndGhlbiBpbnRlcmFjdGl2ZSBsaW5rcyBvbiB3ZWIuIEFwcGxlIEljb25zIHdvdWxkIGxhdGVyIGJlY29tZSBTRiBQcm8gSWNvbnMgcmVkZXNpZ25lZCB0byBhbGlnbiB0byBBcHBsZSdzIG5ldyB0eXBlZmFjZSwgU2FuIEZyYW5jaXNjbywgaW4gMjAxNi4gVGhlIHJlZGVzaWduIGFkZHJlc3NlcyBhIG51bWJlciBvZiBpc3N1ZXMgdGhhdCB3ZXJlIHByZXNlbnQgaW4gQXBwbGUgSWNvbnMuIEltcHJvdmVtZW50cyBpbmNsdWRlIG1hdGNoZWQgdHlwZSBtZXRyaWNzLCBicmFuZCBJRCBzdGFuZGFyZGl6ZWQgQXBwbGUgbG9nbyBjaGFyYWN0ZXIsIHdlYiBmb250IG9wdGltaXphdGlvbiwgY3VzdG9tIGNoYXJhY3RlciBzcGFjaW5nLCBwYXJlbnQgdHlwZSBhbGlnbm1lbnQsIGV0Yy4gU0YgUHJvIEljb25zIGlzIGRlc2lnbmVkIHRvIGJlIGFkYXB0YWJsZSB0byB3b3JrIHdpdGggb3VyIHR3byB3ZWIgZm9udCBmYW1pbGllcywgU0YgUHJvIERpc3BsYXkgYW5kIFNGIFBybyBUZXh0LiBUaGUgd2ViIGZvbnQgZmFtaWxpZXMgaGF2ZSBkaWZmZXJpbmcgeGhlaWdodHMsIGRlc2NlbmRlciBhbmQgYXNjZW5kZXIgZXh0ZW5zaW9ucywgYWR2YW5jZW1lbnQsIGNvdW50ZXJzLCBhbmQgYm93bHMuIFRoZXNlIGRpZmZlcmVuY2VzIHdlcmUgcHVycG9zZWx5IG1hZGUgdG8gb3B0aW1pemUgdGhlIGxlZ2liaWxpdHkgb2YgZWFjaCBmYW1pbHkgaW4gdGhlIHR5cGUgc2l6ZSBmb3Igd2hpY2ggdGhleSBhcmUgdXRpbGl6ZWQuIFRoZSBTRiBQcm8gSWNvbnMgY2hhcmFjdGVyIHNldCBpbmNsdWRlcyBDVEEgaWNvbm9ncmFwaHksIFVJIGVsZW1lbnRzLCBhbmQgaW50ZXJuYWwgdXNlIHNwZWNpYWwgY2hhcmFjdGVycyBhbmQgaXMgYXZhaWxhYmxlIGFzIGEgZmFtaWx5IG9mIHRydWUgdHlwZSBmb250cyBpbiBmb3VyIHdlaWdodHMuAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABUAGgAaQBzACAAZgBvAG4AdAAgAHMAbwBmAHQAdwBhAHIAZQAgAGkAcwAgAHQAaABlACAAdgBhAGwAdQBhAGIAbABlACAAcAByAG8AcABlAHIAdAB5ACAAbwBmACAAQQBwAHAAbABlACAASQBuAGMALgAgAHwAIABJAG4AdABlAHIAYQBjAHQAaQB2AGUAIABNAEEAUgBDAE8ATQAuACAAUgBlAHAAbABpAGMAYQB0AGkAbwBuACwAIABhAGwAdABlAHIAYQB0AGkAbwBuACwAIABhAG4AZAAgAGQAaQBzAHQAcgBpAGIAdQB0AGkAbwBuACAAbwBmACAAdABoAGkAcwAgAGYAbwBuAHQAIABpAHMAIABzAHQAcgBpAGMAdABsAHkAIABwAHIAbwBoAGkAYgBpAHQAZQBkAC4AIABBAHAAcABsAGUAIABJAG4AYwAuACAAYQBsAGwAIAByAGkAZwBoAHQAcwAgAHIAZQBzAGUAcgB2AGUAZAAuAABUaGlzIGZvbnQgc29mdHdhcmUgaXMgdGhlIHZhbHVhYmxlIHByb3BlcnR5IG9mIEFwcGxlIEluYy4gfCBJbnRlcmFjdGl2ZSBNQVJDT00uIFJlcGxpY2F0aW9uLCBhbHRlcmF0aW9uLCBhbmQgZGlzdHJpYnV0aW9uIG9mIHRoaXMgZm9udCBpcyBzdHJpY3RseSBwcm9oaWJpdGVkLiBBcHBsZSBJbmMuIGFsbCByaWdodHMgcmVzZXJ2ZWQuAABoAHQAdABwAHMAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAGwAZQBnAGEAbAAvAGkAbgB0AGUAbABsAGUAYwB0AHUAYQBsAC0AcAByAG8AcABlAHIAdAB5AC8AAGh0dHBzOi8vd3d3LmFwcGxlLmNvbS9sZWdhbC9pbnRlbGxlY3R1YWwtcHJvcGVydHkvAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAAAAAAACAAAAAAAAABQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwAAAABAAIBAgEDAQQBBQEGAQcBCAEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYBFwEYARkBGgEbARwBHQEeAR8BIAEhASIBIwEkASUBJgEnASgBKQEqAA4A7wErASwAIgEtAS4BLwEwATEBMgEzATQBNQE2ATcBOAE5AToBOwE8AT0BPgE/AUABQQFCAUMBRAFFAUYBRwFIAUkBSgFLAUwBTQFOAU8BUAFRAVIBUwFUAVUBVgFXAVgBWQFaAVsBXAFdAV4BXwFgAWEBYgFjAWQBZQFmANIDZ2FwCWZ1bGxibG9jawV1RjMxQQV1RjMxQgV1RjMxQwV1RjMxRAV1RjMyMgV1RjMyMwV1RjMyNAV1RjMyNQV1RjMyNgV1RjMyNwV1RjMyOAV1RjMyOQV1RjMyRgV1RjMzNAV1RjMzNQV1RjMzNgV1RjMzNwV1RjMzOAV1RjMzOQV1RjMzQQV1RjMzQgV1RjMzQwV1RjMzRAV1RjMzRQV1RjMzRgV1RjM0MAV1RjM0MQV1RjM1NgV1RjM1RgV1RjM2NQtjaGV2cm9ubGVmdAxjaGV2cm9ucmlnaHQJY2hldnJvbnVwC2NoZXZyb25kb3duEWNoZXZyb25sZWZ0Y2lyY2xlEmNoZXZyb25yaWdodGNpcmNsZQ9jaGV2cm9udXBjaXJjbGURY2hldnJvbmRvd25jaXJjbGUFcmVzZXQFY2hlY2sLZXhjbGFtYXRpb24LcmVzZXRjaXJjbGUKcGx1c2NpcmNsZQttaW51c2NpcmNsZQtjaGVja2NpcmNsZRFleGNsYW1hdGlvbmNpcmNsZQ5xdWVzdGlvbmNpcmNsZQpyZXNldHNvbGlkCXBsdXNzb2xpZAptaW51c3NvbGlkCmNoZWNrc29saWQQZXhjbGFtYXRpb25zb2xpZA1xdWVzdGlvbnNvbGlkBHBsYXkFcGF1c2UEc3RvcAZyZXBsYXkEaW5mbwhkb3dubG9hZAZjaXJjbGUIZXh0ZXJuYWwFc2hhcmUTcXVlc3Rpb25fY2lyY2xlX3J0bBJxdWVzdGlvbl9zb2xpZF9ydGwMcXVlc3Rpb25fcnRsDGV4dGVybmFsX3J0bAlzZWN0aW9uMDEJc2VjdGlvbjAyCXNlY3Rpb24wMwlzZWN0aW9uMDQJc2VjdGlvbjA1CXNlY3Rpb24wNglzZWN0aW9uMDcJc2VjdGlvbjA4CXNlY3Rpb24wOQlzZWN0aW9uMTAJc2VjdGlvbjExCXNlY3Rpb24xMglzZWN0aW9uMTMJc2VjdGlvbjE0CXNlY3Rpb24xNQlzZWN0aW9uMTYJc2VjdGlvbjE3CXNlY3Rpb24xOAlzZWN0aW9uMTkJc2VjdGlvbjIwC3ZpZGVvcmVwbGF5CnZpZGVvcGF1c2UJdmlkZW9wbGF5CnBhZGRsZWxlZnQLcGFkZGxlcmlnaHQIcGFkZGxldXAKcGFkZGxlZG93bgptb2RhbGNsb3NlD3BhZGRsZWxlZnRzaG9ydBBwYWRkbGVyaWdodHNob3J0DXBhZGRsZXVwc2hvcnQPcGFkZGxlZG93bnNob3J0D21vZGFsY2xvc2VzaG9ydAAAAAAAAf//AAIAAQAAAAwAAAAWAAAAAgABAAMAawABAAQAAAACAAAAAAAAAAEAAAAA2pIEAQAAAADXPJGTAAAAANc8kZM=) format("truetype");
        font-weight: normal;
        font-style: normal;
      }

      .channel-html .icon-after {
        display: inline-block;
      }

      .channel-html .icon-after::after {
        background: inherit;
        background-size: 5em 100%;
        background-position: -60px center;
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
        position: relative;
        overflow-x: hidden;
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

      .image-accessories_keyboard {
        width: 832px;
        height: 288px;
        background-size: 832px 288px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_large.png?1645837933206);
      }

      .image-accessories_mouse {
        width: 116px;
        height: 229px;
        background-size: 116px 229px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_large.png?1645837933206);
      }

      .image-accessories_trackpad {
        width: 319px;
        height: 230px;
        background-size: 319px 230px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_large.png?1645837933206);
      }

      .image-connectivity_icon_usbc {
        width: 38px;
        height: 26px;
        background-size: 38px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_large.png?1645837933207);
      }

      .image-camera {
        width: 435px;
        height: 271px;
        background-size: 435px 271px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/camera_large.png?1645837933207);
      }

      .image-camera_video_apps {
        width: 118px;
        height: 33px;
        background-size: 118px 33px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_large.png?1645837933207);
      }

      .image-hero {
        width: 655px;
        height: 504px;
        background-size: 655px 504px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/hero_large.png?1645837933208);
      }

      .image-flex_mount_middle {
        width: 107px;
        height: 249px;
        background-size: 107px 249px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_large.png?1645837933208);
      }

      .image-compatibility_lineup {
        width: 203px;
        height: 29px;
        background-size: 203px 29px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_large.png?1645837933209);
      }

      .image-connectivity {
        width: 790px;
        height: 529px;
        background-size: 790px 529px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/connectivity_large.png?1645837933209);
      }

      .image-mics {
        width: 210px;
        height: 67px;
        background-size: 210px 67px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/mics_large.png?1645837933210);
      }

      .image-display {
        width: 792px;
        height: 552px;
        background-size: 792px 552px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/display_large.png?1645837933212);
      }

      .image-flex_mount_right {
        width: 129px;
        height: 186px;
        background-size: 129px 186px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_large.png?1645837933212);
      }

      .image-connectivity_icon_thunderbolt {
        width: 32px;
        height: 33px;
        background-size: 32px 33px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_large.png?1645837933212);
      }

      .image-flex_applecare {
        width: 411px;
        height: 307px;
        background-size: 411px 307px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_large.png?1645837933214);
      }

      .image-flex_checkmark_apple_care {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_large.png?1645837933214);
      }

      .image-flex_mount_left {
        width: 89px;
        height: 250px;
        background-size: 89px 250px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_large.png?1645837933215);
      }

      .image-compatibility {
        width: 492px;
        height: 380px;
        background-size: 492px 380px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/compatibility_large.png?1645837933215);
      }

      .image-hero_logo {
        width: 327px;
        height: 48px;
        background-size: 327px 48px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_large.png?1645837933215);
      }

      .image-speakers {
        width: 174px;
        height: 172px;
        background-size: 174px 172px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/speakers_large.png?1645837933216);
      }

      .image-flex_accessories {
        width: 384px;
        height: 282px;
        background-size: 384px 282px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_large.png?1645837933216);
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_logo {
          width: 327px;
          height: 48px;
          background-size: 327px 48px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_large_2x.png?1645837933206);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_mount_right {
          width: 129px;
          height: 186px;
          background-size: 129px 186px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_large_2x.png?1645837933207);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_video_apps {
          width: 118px;
          height: 33px;
          background-size: 118px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_large_2x.png?1645837933207);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_usbc {
          width: 38px;
          height: 26px;
          background-size: 38px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_large_2x.png?1645837933208);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_keyboard {
          width: 832px;
          height: 288px;
          background-size: 832px 288px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_large_2x.png?1645837933209);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_mount_left {
          width: 89px;
          height: 250px;
          background-size: 89px 250px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_large_2x.png?1645837933209);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_accessories {
          width: 384px;
          height: 282px;
          background-size: 384px 282px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_large_2x.png?1645837933210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity {
          width: 790px;
          height: 529px;
          background-size: 790px 529px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_large_2x.png?1645837933210);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-speakers {
          width: 174px;
          height: 172px;
          background-size: 174px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/speakers_large_2x.png?1645837933211);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera {
          width: 435px;
          height: 271px;
          background-size: 435px 271px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_large_2x.png?1645837933211);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compatibility {
          width: 492px;
          height: 380px;
          background-size: 492px 380px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_large_2x.png?1645837933211);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_applecare {
          width: 411px;
          height: 307px;
          background-size: 411px 307px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_large_2x.png?1645837933213);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_mount_middle {
          width: 107px;
          height: 249px;
          background-size: 107px 249px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_large_2x.png?1645837933213);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_thunderbolt {
          width: 32px;
          height: 33px;
          background-size: 32px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_large_2x.png?1645837933214);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_trackpad {
          width: 319px;
          height: 230px;
          background-size: 319px 230px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_large_2x.png?1645837933214);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compatibility_lineup {
          width: 203px;
          height: 29px;
          background-size: 203px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_large_2x.png?1645837933215);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-accessories_mouse {
          width: 116px;
          height: 229px;
          background-size: 116px 229px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_large_2x.png?1645837933215);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_large_2x.png?1645837933216);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-mics {
          width: 210px;
          height: 67px;
          background-size: 210px 67px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/mics_large_2x.png?1645837933217);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero {
          width: 655px;
          height: 504px;
          background-size: 655px 504px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_large_2x.png?1645837933217);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display {
          width: 792px;
          height: 552px;
          background-size: 792px 552px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/display_large_2x.png?1645837933217);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_logo {
          width: 232px;
          height: 35px;
          background-size: 232px 35px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_medium.png?1645837933206);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_mount_middle {
          width: 74px;
          height: 172px;
          background-size: 74px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_medium.png?1645837933206);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_usbc {
          width: 39px;
          height: 26px;
          background-size: 39px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_medium.png?1645837933207);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-compatibility_lineup {
          width: 182px;
          height: 26px;
          background-size: 182px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_medium.png?1645837933207);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_thunderbolt {
          width: 33px;
          height: 32px;
          background-size: 33px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_medium.png?1645837933208);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_mount_right {
          width: 89px;
          height: 129px;
          background-size: 89px 129px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_medium.png?1645837933208);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_mouse {
          width: 88px;
          height: 170px;
          background-size: 88px 170px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_medium.png?1645837933209);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-speakers {
          width: 105px;
          height: 104px;
          background-size: 105px 104px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/speakers_medium.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity {
          width: 465px;
          height: 359px;
          background-size: 465px 359px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_medium.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_mount_left {
          width: 62px;
          height: 172px;
          background-size: 62px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_medium.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_medium.png?1645837933212);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-compatibility {
          width: 290px;
          height: 223px;
          background-size: 290px 223px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_medium.png?1645837933212);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_video_apps {
          width: 110px;
          height: 33px;
          background-size: 110px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_medium.png?1645837933212);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero {
          width: 464px;
          height: 357px;
          background-size: 464px 357px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_medium.png?1645837933212);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-mics {
          width: 125px;
          height: 39px;
          background-size: 125px 39px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/mics_medium.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera {
          width: 243px;
          height: 156px;
          background-size: 243px 156px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_medium.png?1645837933214);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_keyboard {
          width: 538px;
          height: 231px;
          background-size: 538px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_medium.png?1645837933215);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display {
          width: 579px;
          height: 396px;
          background-size: 579px 396px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/display_medium.png?1645837933216);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories {
          width: 271px;
          height: 200px;
          background-size: 271px 200px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_medium.png?1645837933217);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_applecare {
          width: 290px;
          height: 218px;
          background-size: 290px 218px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_medium.png?1645837933217);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-accessories_trackpad {
          width: 236px;
          height: 170px;
          background-size: 236px 170px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_medium.png?1645837933217);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_video_apps {
          width: 110px;
          height: 33px;
          background-size: 110px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_medium_2x.png?1645837933208);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_thunderbolt {
          width: 33px;
          height: 32px;
          background-size: 33px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_medium_2x.png?1645837933208);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 290px;
          height: 218px;
          background-size: 290px 218px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_medium_2x.png?1645837933209);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_trackpad {
          width: 236px;
          height: 170px;
          background-size: 236px 170px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_medium_2x.png?1645837933209);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 465px;
          height: 359px;
          background-size: 465px 359px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_medium_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-compatibility_lineup {
          width: 182px;
          height: 26px;
          background-size: 182px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_medium_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_medium_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 232px;
          height: 35px;
          background-size: 232px 35px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_medium_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-compatibility {
          width: 290px;
          height: 223px;
          background-size: 290px 223px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_medium_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_keyboard {
          width: 538px;
          height: 231px;
          background-size: 538px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_medium_2x.png?1645837933211);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera {
          width: 243px;
          height: 156px;
          background-size: 243px 156px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_medium_2x.png?1645837933211);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_mount_left {
          width: 62px;
          height: 172px;
          background-size: 62px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_medium_2x.png?1645837933211);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display {
          width: 579px;
          height: 396px;
          background-size: 579px 396px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/display_medium_2x.png?1645837933212);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-speakers {
          width: 105px;
          height: 104px;
          background-size: 105px 104px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/speakers_medium_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-mics {
          width: 125px;
          height: 39px;
          background-size: 125px 39px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/mics_medium_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_mount_middle {
          width: 74px;
          height: 172px;
          background-size: 74px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_medium_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero {
          width: 464px;
          height: 357px;
          background-size: 464px 357px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_medium_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 271px;
          height: 200px;
          background-size: 271px 200px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_medium_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-accessories_mouse {
          width: 88px;
          height: 170px;
          background-size: 88px 170px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_medium_2x.png?1645837933214);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_usbc {
          width: 39px;
          height: 26px;
          background-size: 39px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_medium_2x.png?1645837933215);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_mount_right {
          width: 89px;
          height: 129px;
          background-size: 89px 129px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_medium_2x.png?1645837933217);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_thunderbolt {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_small.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity {
          width: 508px;
          height: 258px;
          background-size: 508px 258px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_small.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_video_apps {
          width: 100px;
          height: 29px;
          background-size: 100px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_small.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_applecare {
          width: 282px;
          height: 211px;
          background-size: 282px 211px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_small.png?1645837933208);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_mount_middle {
          width: 74px;
          height: 172px;
          background-size: 74px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_small.png?1645837933209);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compatibility {
          width: 282px;
          height: 217px;
          background-size: 282px 217px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_small.png?1645837933209);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display {
          width: 452px;
          height: 308px;
          background-size: 452px 308px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/display_small.png?1645837933210);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera {
          width: 236px;
          height: 151px;
          background-size: 236px 151px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_small.png?1645837933212);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero {
          width: 282px;
          height: 217px;
          background-size: 282px 217px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_small.png?1645837933212);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_usbc {
          width: 39px;
          height: 26px;
          background-size: 39px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_small.png?1645837933213);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_mouse {
          width: 71px;
          height: 139px;
          background-size: 71px 139px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_small.png?1645837933213);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_mount_left {
          width: 62px;
          height: 172px;
          background-size: 62px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_small.png?1645837933213);
        }
      }

      @media only screen and (max-width:734px) {
        .image-speakers {
          width: 102px;
          height: 101px;
          background-size: 102px 101px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/speakers_small.png?1645837933214);
        }
      }

      @media only screen and (max-width:734px) {
        .image-mics {
          width: 123px;
          height: 37px;
          background-size: 123px 37px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/mics_small.png?1645837933214);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_keyboard {
          width: 510px;
          height: 196px;
          background-size: 510px 196px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_small.png?1645837933215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compatibility_lineup {
          width: 182px;
          height: 26px;
          background-size: 182px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_small.png?1645837933215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_logo {
          width: 161px;
          height: 25px;
          background-size: 161px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_small.png?1645837933215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_mount_right {
          width: 87px;
          height: 128px;
          background-size: 87px 128px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_small.png?1645837933215);
        }
      }

      @media only screen and (max-width:734px) {
        .image-accessories_trackpad {
          width: 196px;
          height: 142px;
          background-size: 196px 142px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_small.png?1645837933217);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories {
          width: 263px;
          height: 194px;
          background-size: 263px 194px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_small.png?1645837933217);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_small.png?1645837933217);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_usbc {
          width: 39px;
          height: 26px;
          background-size: 39px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_usbc_small_2x.png?1645837933206);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera {
          width: 236px;
          height: 151px;
          background-size: 236px 151px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_small_2x.png?1645837933206);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 161px;
          height: 25px;
          background-size: 161px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_logo_small_2x.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_trackpad {
          width: 196px;
          height: 142px;
          background-size: 196px 142px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_trackpad_small_2x.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero {
          width: 282px;
          height: 217px;
          background-size: 282px 217px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/hero_small_2x.png?1645837933207);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 282px;
          height: 211px;
          background-size: 282px 211px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_applecare_small_2x.png?1645837933208);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_mount_middle {
          width: 74px;
          height: 172px;
          background-size: 74px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_middle_small_2x.png?1645837933208);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_mount_right {
          width: 87px;
          height: 128px;
          background-size: 87px 128px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_right_small_2x.png?1645837933209);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 263px;
          height: 194px;
          background-size: 263px 194px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_accessories_small_2x.png?1645837933209);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_keyboard {
          width: 510px;
          height: 196px;
          background-size: 510px 196px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_keyboard_small_2x.png?1645837933209);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_checkmark_apple_care_small_2x.png?1645837933210);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-speakers {
          width: 102px;
          height: 101px;
          background-size: 102px 101px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/speakers_small_2x.png?1645837933211);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compatibility_lineup {
          width: 182px;
          height: 26px;
          background-size: 182px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_lineup_small_2x.png?1645837933211);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display {
          width: 452px;
          height: 308px;
          background-size: 452px 308px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/display_small_2x.png?1645837933212);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-accessories_mouse {
          width: 71px;
          height: 139px;
          background-size: 71px 139px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/accessories_mouse_small_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 508px;
          height: 258px;
          background-size: 508px 258px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_small_2x.png?1645837933213);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_mount_left {
          width: 62px;
          height: 172px;
          background-size: 62px 172px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/flex_mount_left_small_2x.png?1645837933215);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_video_apps {
          width: 100px;
          height: 29px;
          background-size: 100px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/camera_video_apps_small_2x.png?1645837933216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-mics {
          width: 123px;
          height: 37px;
          background-size: 123px 37px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/mics_small_2x.png?1645837933216);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compatibility {
          width: 282px;
          height: 217px;
          background-size: 282px 217px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/compatibility_small_2x.png?1645837933217);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_thunderbolt {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/studio_display/connectivity_icon_thunderbolt_small_2x.png?1645837933217);
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

      .channel-html .channel-custom-font-custom-17-body-reduced-flex {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: -0.022rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 734px) {
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

      .channel-html .channel-custom-font-custom-14-body-reduced {
        font-size: 14px;
        line-height: 20px;
        letter-spacing: -0.016rem;
        font-weight: 400;
      }

      .channel-html .channel-custom-font-custom-12-sosumi {
        font-size: 12px;
        line-height: 16px;
        font-weight: 400;
      }

      .channel-html .channel-custom-font-custom-40-headline-callout {
        font-size: 40px;
        line-height: 40px;
        letter-spacing: 0rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-40-headline-callout {
          font-size: 28px;
          line-height: 32px;
          letter-spacing: NaNrem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-40-headline-callout {
          font-size: 28px;
          line-height: 32px;
          letter-spacing: NaNrem;
        }
      }

      .channel-html .channel-custom-font-custom-24-bento {
        font-size: 24px;
        line-height: 28px;
        letter-spacing: NaNrem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-24-bento {
          font-size: 14px;
          line-height: 18px;
          letter-spacing: NaNrem;
        }
      }

      .channel-html .channel-custom-font-Custom-17-callout-headline {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: 0rem;
        font-weight: 500;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-Custom-17-callout-headline {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .channel-custom-font-custom-17-callout-body {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: 0rem;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-17-callout-body {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .channel-custom-font-custom-19-hardware-names {
        font-size: 19px;
        line-height: 23px;
        letter-spacing: 0rem;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-19-hardware-names {
          font-size: 17px;
          line-height: 21px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .fa908b4 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9a22bc {
        /** alignment */
        /** Margin */
        margin-top: 63px;
        margin-bottom: 60px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-top: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22bc {
          margin-top: 45px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-bottom: 60px;
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
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v5af1c5 {
        /** alignment */
        justify-content: center;
        /** Margin */
        margin-top: 63px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5af1c5 {
          margin-top: 52px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5af1c5 {
          margin-top: 32px;
        }
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
        margin-bottom: 7px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8d5222 {
          margin-bottom: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8d5222 {
          margin-bottom: 6px;
        }
      }

      .channel-html .z9b16b1 {
        color: #1d1d1f;
        margin-bottom: 40px;
        padding-left: 82px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9b16b1 {
          margin-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9b16b1 {
          margin-bottom: 24px;
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

      .channel-html .p151A5F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z13977A {
        /** Margin */
        margin-left: 162px;
        margin-right: 162px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z13977A {
          margin-left: 114px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z13977A {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z13977A {
          margin-right: 114px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z13977A {
          margin-right: 0px;
        }
      }

      .channel-html .mC9FFFA {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .o80282B {
        color: #1d1d1f;
        margin-top: 0px;
        margin-bottom: 29px;
        padding-left: 130px;
        padding-right: 130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o80282B {
          margin-bottom: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o80282B {
          margin-bottom: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o80282B {
          padding-left: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o80282B {
          padding-left: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o80282B {
          padding-right: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o80282B {
          padding-right: 10px;
        }
      }

      .channel-html .q521158 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-bottom: 22px;
        padding-left: 164px;
        padding-right: 164px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q521158 {
          margin-bottom: 16px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q521158 {
          margin-bottom: 11px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q521158 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q521158 {
          padding-right: 0px;
        }
      }

      .channel-html .qC166EB {
        /** Color */
        color: #6e6e73;
        border: solid 1px #6e6e73;
      }

      .channel-html .f1390a8 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t3eaab6 {
        /** alignment */
        align-items: flex-end;
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        position: relative;
        z-index: 1;
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
          margin-top: 56px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3eaab6 {
          margin-top: 38px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3eaab6 {
          margin-bottom: 0px;
        }
      }

      .channel-html .q0bfc78 {
        /** Margin */
        margin-top: 55px;
        margin-bottom: 54px;
        /** Padding */
        padding-right: 76px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0bfc78 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0bfc78 {
          margin-bottom: 35px;
        }
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

      .channel-html .q8E17CF {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .w0F267F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .y9A71E8 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y9A71E8 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y9A71E8 {
          margin-bottom: 7px;
        }
      }

      .channel-html .e949BDF {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
        padding-right: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e949BDF {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e949BDF {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e949BDF {
          margin-bottom: 24px;
        }
      }

      .channel-html .u75C164 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j5AC9FC {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j5AC9FC {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j5AC9FC {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j5AC9FC {
          margin-bottom: 31px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j5AC9FC {
          padding-left: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j5AC9FC {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j5AC9FC {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j5AC9FC {
          padding-right: 23px;
        }
      }

      .channel-html .yE1B689 {
        /** alignment */
        /** Margin */
        margin-top: 36px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE1B689 {
          margin-top: 27px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yE1B689 {
          padding-left: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yE1B689 {
          padding-left: 0px;
        }
      }

      .channel-html .kDC316D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x764FE3 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .a8EA6D8 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a8EA6D8 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a8EA6D8 {
          padding-right: 20px;
        }
      }

      .channel-html .bB03C96 {
        color: #ff3b3b;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bB03C96 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bB03C96 {
          padding-right: 0px;
        }
      }

      .channel-html .s9BC0E5 {
        margin-top: 2px;
        margin-left: -1.5px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s9BC0E5 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s9BC0E5 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s9BC0E5 {
          padding-right: 0px;
        }
      }

      .channel-html .j350D65 {
        /** Margin */
        /** Padding */
        padding-left: 6px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j350D65 {
          padding-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j350D65 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j350D65 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j350D65 {
          padding-right: 20px;
        }
      }

      .channel-html .c8BAEE0 {
        color: #ea2790;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8BAEE0 {
          margin-bottom: 0px;
        }
      }

      .channel-html .d08875E {
        margin-top: 2px;
        margin-left: -1.5px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d08875E {
          margin-top: 0px;
        }
      }

      .channel-html .x717423 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .wEA27DF {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wEA27DF {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wEA27DF {
          padding-right: 20px;
        }
      }

      .channel-html .c3800B4 {
        color: #c22bce;
        margin-top: 30px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c3800B4 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3800B4 {
          margin-top: 32px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c3800B4 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3800B4 {
          padding-right: 0px;
        }
      }

      .channel-html .r7911AB {
        margin-top: 2px;
        margin-left: -1.5px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r7911AB {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r7911AB {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r7911AB {
          padding-right: 0px;
        }
      }

      .channel-html .u7DDD81 {
        /** Margin */
        /** Padding */
        padding-left: 6px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
        pointer-events: none;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7DDD81 {
          padding-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u7DDD81 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7DDD81 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u7DDD81 {
          padding-right: 20px;
        }
      }

      .channel-html .dCC9C01 {
        color: #547eff;
        margin-top: 30px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dCC9C01 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dCC9C01 {
          margin-top: 32px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dCC9C01 {
          margin-bottom: 0px;
        }
      }

      .channel-html .z73989B {
        margin-top: 2px;
        margin-left: -1.5px;
        margin-bottom: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z73989B {
          margin-top: 0px;
        }
      }

      .channel-html .ddb6fd4 {
        /** Margin */
        /** Padding */
        padding-top: 60px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
        pointer-events: none;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ddb6fd4 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ddb6fd4 {
          margin-top: 18px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ddb6fd4 {
          margin-left: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ddb6fd4 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ddb6fd4 {
          padding-top: 0px;
        }
      }

      .channel-html .z9459bf {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q0adc2a {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t3ea0f8 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 60px;
        margin-bottom: 60px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3ea0f8 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3ea0f8 {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3ea0f8 {
          margin-top: 45px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3ea0f8 {
          margin-bottom: 47px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3ea0f8 {
          margin-bottom: 45px;
        }
      }

      .channel-html .x7c41f1 {
        /** Margin */
        /** Padding */
        padding-left: 80px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7c41f1 {
          padding-left: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7c41f1 {
          padding-left: 0px;
        }
      }

      .channel-html .x7820e7 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 9px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7820e7 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7820e7 {
          margin-bottom: 7px;
        }
      }

      .channel-html .q04e205 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q04e205 {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q04e205 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q04e205 {
          margin-bottom: 24px;
        }
      }

      .channel-html .x738489 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .t3ec941 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .a69DEF2 {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 10px;
        grid-template-rows: 1fr 1fr;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(2, auto);
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a69DEF2 {
          grid-gap: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a69DEF2 {
          grid-template-rows: 200px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a69DEF2 {
          grid-template-rows: 163px 1fr;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a69DEF2 {
          grid-template-columns: repeat(1, 200px);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a69DEF2 {
          grid-template-columns: repeat(2, auto);
        }
      }

      .channel-html .a69DEF2 .bentobox-item {
        border-radius: 14px;
        overflow: hidden;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a69DEF2 .bentobox-item {
          border-radius: 9px;
        }
      }

      .channel-html .s66C2A8 {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 2;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s66C2A8 {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s66C2A8 {
          grid-column-end: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s66C2A8 {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s66C2A8 {
          grid-row-end: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s66C2A8 {
          overflow: hidden;
        }
      }

      .channel-html .s66C2A8:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .b63C73C {
        /** Margin */
        margin-top: 12px;
        margin-left: 22px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .n2D4EA8 {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 2;
        grid-row-end: 3;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2D4EA8 {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2D4EA8 {
          grid-column-end: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2D4EA8 {
          grid-row-start: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2D4EA8 {
          grid-row-end: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2D4EA8 {
          overflow: hidden;
        }
      }

      .channel-html .n2D4EA8:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .v5AF9C9 {
        /** Margin */
        margin-top: 37px;
        margin-right: 6px;
        margin-bottom: 37px;
        margin-left: 6px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j61960A {
        margin-top: -74px;
        padding-left: 20px;
        padding-bottom: 38px;
        padding-right: 20px;
      }

      .channel-html .g4A2576 {
        background-color: #f5f5f7;
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g4A2576 {
          grid-column-start: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g4A2576 {
          grid-column-end: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g4A2576 {
          grid-row-start: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g4A2576 {
          grid-row-end: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g4A2576 {
          overflow: hidden;
        }
      }

      .channel-html .g4A2576:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .oF8F733 {
        /** Margin */
        margin-top: 5px;
        margin-left: 17px;
        margin-bottom: 0px;
        margin-right: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c3EEF24 {
        margin-top: -68px;
        padding-left: 16px;
        padding-bottom: 32px;
        padding-right: 16px;
      }

      .channel-html .z97d36e {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 22px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z97d36e {
          margin-top: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z97d36e {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z97d36e {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z97d36e {
          padding-right: 0px;
        }
      }

      .channel-html .f2D6ACC {
        /** alignment */
        /** Margin */
        margin-top: 24px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f2D6ACC {
          margin-top: 29px;
        }
      }

      .channel-html .z3F4F3E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .l332A0F {
        /** Margin */
        margin-top: 5px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .m7A2803 {
        /** Margin */
        margin-top: -38px;
        /** Padding */
        padding-left: 4px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m7A2803 {
          padding-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m7A2803 {
          padding-left: 23px;
        }
      }

      .channel-html .v88F308 {
        color: #86868b;
        margin-top: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v88F308 {
          padding-right: 0px;
        }
      }

      .channel-html .r118b0c {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wDD219D {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 10px;
        grid-template-rows: 287px 1fr;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(2, auto);
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDD219D {
          grid-gap: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDD219D {
          grid-template-rows: 168px 1fr;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDD219D {
          grid-template-rows: 150px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDD219D {
          grid-template-columns: repeat(2, auto);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDD219D {
          grid-template-columns: repeat(1, 150px);
        }
      }

      .channel-html .wDD219D .bentobox-item {
        border-radius: 14px;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDD219D .bentobox-item {
          border-radius: 14px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDD219D .bentobox-item {
          overflow: hidden;
        }
      }

      .channel-html .tEF48B3 {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 2;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEF48B3 {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEF48B3 {
          grid-column-end: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEF48B3 {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEF48B3 {
          grid-row-end: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEF48B3 {
          overflow: hidden;
        }
      }

      .channel-html .tEF48B3:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .s222155 {
        /** Margin */
        margin-top: 16px;
        margin-left: 28px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s222155 {
          margin-top: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s222155 {
          margin-left: 22px;
        }
      }

      .channel-html .xBF0FD1 {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 2;
        grid-row-end: 3;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBF0FD1 {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBF0FD1 {
          grid-column-end: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBF0FD1 {
          grid-row-start: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBF0FD1 {
          grid-row-end: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBF0FD1 {
          overflow: hidden;
        }
      }

      .channel-html .xBF0FD1:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .vBBA798 {
        /** Margin */
        margin-top: 62px;
        margin-left: 16px;
        margin-bottom: 64px;
        margin-right: 16px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vBBA798 {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vBBA798 {
          margin-left: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vBBA798 {
          margin-bottom: 0px;
        }
      }

      .channel-html .u7A354F {
        margin-top: -124px;
        padding-left: 20px;
        padding-bottom: 70px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7A354F {
          margin-top: -40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7A354F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7A354F {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7A354F {
          padding-bottom: 39px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u7A354F {
          padding-right: 20px;
        }
      }

      .channel-html .r2CAD5F {
        background-color: #f5f5f7;
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 3;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2CAD5F {
          grid-column-start: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2CAD5F {
          grid-column-end: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2CAD5F {
          grid-row-start: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2CAD5F {
          grid-row-end: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2CAD5F {
          overflow: hidden;
        }
      }

      .channel-html .r2CAD5F:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .oD7CAD3 {
        /** Margin */
        margin-top: 12px;
        margin-left: 33px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oD7CAD3 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oD7CAD3 {
          margin-left: 17px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oD7CAD3 {
          margin-bottom: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oD7CAD3 {
          margin-right: 0px;
        }
      }

      .channel-html .g36FD01 {
        margin-top: -114px;
        padding-left: 40px;
        padding-bottom: 60px;
        padding-right: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          margin-top: -76px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          padding-left: 15px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          padding-bottom: 35px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g36FD01 {
          padding-right: 15px;
        }
      }

      .channel-html .s4D09B0 {
        /** alignment */
        /** Margin */
        margin-top: 28px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .a6FE5EE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .jB07E21 {
        /** Margin */
        margin-top: 6px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b9D244D {
        /** Margin */
        /** Padding */
        padding-left: 16px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b9D244D {
          margin-top: -38px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b9D244D {
          padding-left: 10px;
        }
      }

      .channel-html .c481F85 {
        color: #86868b;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c481F85 {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c481F85 {
          padding-right: 0px;
        }
      }

      .channel-html .p90B247 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j30681E {
        /** alignment */
        align-items: flex-end;
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j30681E {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j30681E {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j30681E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j30681E {
          margin-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j30681E {
          margin-bottom: 45px;
        }
      }

      .channel-html .mE17E3E {
        /** Margin */
        margin-top: 55px;
        margin-bottom: 55px;
        /** Padding */
        padding-right: 65px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mE17E3E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mE17E3E {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mE17E3E {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mE17E3E {
          padding-right: 58px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mE17E3E {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mE17E3E {
          order: 2;
        }
      }

      .channel-html .f93F4AE {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f93F4AE {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f93F4AE {
          margin-bottom: 7px;
        }
      }

      .channel-html .uC81880 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
        padding-right: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC81880 {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC81880 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC81880 {
          margin-bottom: 24px;
        }
      }

      .channel-html .mA5A886 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mA5A886 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mA5A886 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mA5A886 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mA5A886 {
          padding-right: 22px;
        }
      }

      .channel-html .lF4A6AB {
        /** alignment */
        /** Margin */
        margin-top: 20px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lF4A6AB {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lF4A6AB {
          margin-top: 24px;
        }
      }

      .channel-html .d1E37BB {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .fFF8577 {
        /** Margin */
        margin-top: 4px;
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .d52519C {
        /** Margin */
        /** Padding */
        padding-left: 25px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d52519C {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d52519C {
          padding-left: 28px;
        }
      }

      .channel-html .pA02D7A {
        color: #ea2790;
      }

      .channel-html .x57822C {
        color: #86868b;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x57822C {
          padding-right: 20px;
        }
      }

      .channel-html .uE8CDB0 {
        /** alignment */
        /** Margin */
        margin-top: 25px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uE8CDB0 {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uE8CDB0 {
          margin-top: 17px;
        }
      }

      .channel-html .i778C37 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j062A8B {
        /** Margin */
        margin-top: 4px;
        margin-left: 2px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .yAED3C0 {
        /** Margin */
        /** Padding */
        padding-left: 25px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yAED3C0 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yAED3C0 {
          padding-left: 28px;
        }
      }

      .channel-html .z896120 {
        color: #c22bce;
      }

      .channel-html .qEC0A18 {
        color: #86868b;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qEC0A18 {
          padding-right: 20px;
        }
      }

      .channel-html .q54E64E {
        /** Margin */
        /** Padding */
        padding-top: 60px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q54E64E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q54E64E {
          margin-bottom: 33px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q54E64E {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q54E64E {
          order: 1;
        }
      }

      .channel-html .lB0AF3E {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .m9DF6D5 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .vA24ADB {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 60px;
        margin-bottom: 60px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vA24ADB {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vA24ADB {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vA24ADB {
          margin-top: 39px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vA24ADB {
          margin-bottom: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vA24ADB {
          margin-bottom: 45px;
        }
      }

      .channel-html .t21FD89 {
        /** Margin */
        margin-top: -5px;
        /** Padding */
        padding-left: 82px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t21FD89 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t21FD89 {
          padding-left: 0px;
        }
      }

      .channel-html .tD481A4 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD481A4 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD481A4 {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD481A4 {
          padding-right: 70px;
        }
      }

      .channel-html .p459D84 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p459D84 {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p459D84 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p459D84 {
          margin-bottom: 24px;
        }
      }

      .channel-html .z4DD565 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .n7AE949 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .e8C5E18 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e8C5E18 {
          margin-bottom: 29px;
        }
      }

      .channel-html .n5913C7 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n5913C7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n5913C7 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n5913C7 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n5913C7 {
          padding-right: 8px;
        }
      }

      .channel-html .l9C1E7F {
        /** alignment */
        /** Margin */
        margin-top: 25px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l9C1E7F {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l9C1E7F {
          margin-top: 28px;
        }
      }

      .channel-html .f21C12A {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tC22BDE {
        /** Margin */
        margin-bottom: 12px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tC22BDE {
          margin-bottom: 10px;
        }
      }

      .channel-html .yF61207 {
        color: #547eff;
      }

      .channel-html .vACAB05 {
        color: #86868b;
        margin-top: 0px;
      }

      .channel-html .zD79E28 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z996692 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v53d694 {
        background-color: #ffffff;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t342e7d {
        /** alignment */
        /** Margin */
        margin-top: 54px;
        margin-bottom: 60px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t342e7d {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t342e7d {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t342e7d {
          margin-top: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t342e7d {
          margin-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t342e7d {
          margin-bottom: 51px;
        }
      }

      .channel-html .y84fe87 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v5d49b0 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5d49b0 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5d49b0 {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5d49b0 {
          padding-right: 0px;
        }
      }

      .channel-html .u48844a {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u48844a {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u48844a {
          margin-bottom: 0px;
        }
      }

      .channel-html .v54f91a {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v54f91a {
          margin-bottom: 24px;
        }
      }

      .channel-html .ba1360c {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -3px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ba1360c {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ba1360c {
          margin-left: -2px;
        }
      }

      .channel-html .v51a0f3 {
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
        .channel-html .v51a0f3 {
          margin-top: -34px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v51a0f3 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v51a0f3 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v51a0f3 {
          padding-left: 0px;
        }
      }

      .channel-html .q0bfc20 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0bfc20 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0bfc20 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0bfc20 {
          padding-right: 0px;
        }
      }

      .channel-html .yF826BB {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yF826BB {
          margin-top: 36px;
        }
      }

      .channel-html .k32189B {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .nD474D2 {
        /** Margin */
        margin-top: 69px;
        /** Padding */
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nD474D2 {
          margin-top: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .nD474D2 {
          margin-top: 0px;
        }
      }

      .channel-html .hFE9656 {
        margin-left: 189px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hFE9656 {
          margin-left: 126px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hFE9656 {
          margin-left: 96px;
        }
      }

      .channel-html .p4E7B55 {
        /** Margin */
        margin-top: 5px;
        margin-left: -341px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p4E7B55 {
          margin-top: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p4E7B55 {
          margin-top: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p4E7B55 {
          margin-left: -188px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p4E7B55 {
          margin-left: -228px;
        }
      }

      .channel-html .h1FBA54 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .qF53B87 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wB4FE82 {
        margin-top: 22px;
        margin-left: 0px;
        margin-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wB4FE82 {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wB4FE82 {
          margin-right: -1px;
        }
      }

      .channel-html .h4CF47E {
        /** Margin */
        margin-top: 158px;
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4CF47E {
          margin-top: 108px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4CF47E {
          margin-top: 27px;
        }
      }

      .channel-html .g9B1FD0 {
        /** Margin */
        margin-left: 80px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g9B1FD0 {
          margin-left: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g9B1FD0 {
          margin-left: 0px;
        }
      }

      .channel-html .g2CED41 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .u000E1A {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .s9C4F66 {
        margin-top: 22px;
        padding-left: 38px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s9C4F66 {
          margin-top: 17px;
        }
      }

      .channel-html .vEA71A7 {
        /** Margin */
        margin-top: 158px;
        /** Padding */
        padding-left: 2px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vEA71A7 {
          margin-top: 108px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vEA71A7 {
          margin-top: 26px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vEA71A7 {
          margin-left: 1px;
        }
      }

      .channel-html .b45C6A2 {
        /** Margin */
        margin-left: 29px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b45C6A2 {
          margin-left: 26px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b45C6A2 {
          margin-left: 14px;
        }
      }

      .channel-html .kDD0083 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .o5D7456 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .s77C5E3 {
        margin-top: 21px;
        margin-left: 31px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s77C5E3 {
          margin-top: 16px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s77C5E3 {
          margin-left: 26px;
        }
      }

      .channel-html .eCA63DA {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wA221BB {
        background-color: #ffffff;
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 41px;
        /** Padding */
        padding-top: 42px;
        padding-bottom: 44px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wA221BB {
          padding-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          padding-top: 47px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wA221BB {
          padding-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          padding-bottom: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wA221BB {
          padding-right: 50vw;
        }
      }

      .channel-html .wA221BB.large-display-bleed::before,
      .channel-html .wA221BB.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .wA221BB.medium-display-bleed::before,
      .channel-html .wA221BB.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .wA221BB.small-display-bleed::before,
      .channel-html .wA221BB.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bEDFFC9 {
        /** Margin */
        margin-top: 16px;
        /** Padding */
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bEDFFC9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bEDFFC9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bEDFFC9 {
          margin-bottom: 41px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bEDFFC9 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bEDFFC9 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bEDFFC9 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bEDFFC9 {
          padding-right: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bEDFFC9 {
          padding-right: 0px;
        }
      }

      .channel-html .u74E274 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u74E274 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u74E274 {
          margin-bottom: 7px;
        }
      }

      .channel-html .z939C07 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
        margin-bottom: 18px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z939C07 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z939C07 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z939C07 {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z939C07 {
          margin-bottom: 13px;
        }
      }

      .channel-html .m08DE42 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
        padding-right: 75px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m08DE42 {
          padding-right: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m08DE42 {
          padding-right: 35px;
        }
      }

      .channel-html .n3ABB3A {
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n3ABB3A {
          padding-right: 25px;
        }
      }

      .channel-html .gA17950 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .i42BC5C {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v40E24E {
        margin-left: -1px;
      }

      .channel-html .u4A6559 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .g68A0AB {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .a7C9163 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .o78FFC6 {
        margin-left: -1px;
      }

      .channel-html .o2F29B8 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .n003ACC {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .i8D8AD2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .mCA09AD {
        margin-left: -1px;
      }

      .channel-html .p5B90BC {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x668DF1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b5E593B {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 10px;
        grid-template-rows: 304px;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(1, undefined);
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b5E593B {
          grid-template-rows: 215px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5E593B {
          grid-template-rows: 209px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b5E593B {
          grid-template-columns: repeat(1, undefined);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5E593B {
          grid-template-columns: repeat(1, undefined);
        }
      }

      .channel-html .b5E593B .bentobox-item {
        border-radius: 14px;
      }

      .channel-html .oF9FA9C {
        grid-column-start: 1;
        grid-column-end: 1;
        grid-row-start: 1;
        grid-row-end: 1;
        position: relative;
      }

      .channel-html .oF9FA9C:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .pF9A8E4 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .tB49EC6 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .e7D8A17 {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 10px;
        grid-template-rows: 304px;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(2, 129px);
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e7D8A17 {
          height: 209px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e7D8A17 {
          grid-gap: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e7D8A17 {
          grid-gap: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e7D8A17 {
          grid-template-rows: 215px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e7D8A17 {
          grid-template-rows: 209px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e7D8A17 {
          grid-template-columns: repeat(2, 89px);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e7D8A17 {
          grid-template-columns: repeat(2, 87px);
        }
      }

      .channel-html .e7D8A17 .bentobox-item {
        border-radius: 14px;
      }

      .channel-html .oB3153D {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 1;
        grid-row-start: 1;
        grid-row-end: 1;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB3153D {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB3153D {
          grid-column-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB3153D {
          grid-column-end: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB3153D {
          grid-column-end: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB3153D {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB3153D {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB3153D {
          grid-row-end: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB3153D {
          grid-row-end: 1;
        }
      }

      .channel-html .oB3153D:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .xBB9863 {
        /** Margin */
        margin-top: 33px;
        margin-left: 19px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBB9863 {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xBB9863 {
          margin-top: 18px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xBB9863 {
          margin-left: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xBB9863 {
          margin-left: 12px;
        }
      }

      .channel-html .f7FBA03 {
        background-color: #f5f5f7;
        grid-column-start: 2;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 1;
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f7FBA03 {
          grid-column-start: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7FBA03 {
          grid-column-start: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f7FBA03 {
          grid-column-end: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7FBA03 {
          grid-column-end: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f7FBA03 {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7FBA03 {
          grid-row-start: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f7FBA03 {
          grid-row-end: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7FBA03 {
          grid-row-end: 1;
        }
      }

      .channel-html .f7FBA03:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .vCC5549 {
        /** Margin */
        margin-top: 33px;
        margin-left: 10px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vCC5549 {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vCC5549 {
          margin-top: 18px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vCC5549 {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vCC5549 {
          margin-left: 6px;
        }
      }

      .channel-html .m6C4807 {
        grid-column-start: 2;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 1;
        position: relative;
      }

      .channel-html .m6C4807:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .j242E34 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .x4284F5 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .s78E949 {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 10px;
        grid-template-rows: 304px;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(1, 130px);
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s78E949 {
          grid-template-rows: 215px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s78E949 {
          grid-template-rows: 209px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s78E949 {
          grid-template-columns: repeat(1, 90px);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s78E949 {
          grid-template-columns: repeat(1, 86px);
        }
      }

      .channel-html .s78E949 .bentobox-item {
        border-radius: 14px;
      }

      .channel-html .y07CCFE {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 1;
        grid-row-start: 1;
        grid-row-end: 1;
        position: relative;
        overflow: hidden;
      }

      .channel-html .y07CCFE:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .v3CB5A3 {
        /** Margin */
        margin-top: 64px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v3CB5A3 {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v3CB5A3 {
          margin-top: 39px;
        }
      }

      .channel-html .n8AE0B3 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .g0A22CD {
        background-color: #ffffff;
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 44px;
        padding-bottom: 44px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g0A22CD {
          padding-top: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          padding-top: 43px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g0A22CD {
          padding-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          padding-bottom: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g0A22CD {
          padding-right: 50vw;
        }
      }

      .channel-html .g0A22CD.large-display-bleed::before,
      .channel-html .g0A22CD.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .g0A22CD.medium-display-bleed::before,
      .channel-html .g0A22CD.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .g0A22CD.small-display-bleed::before,
      .channel-html .g0A22CD.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .sB69020 {
        /** Margin */
        margin-top: 1px;
        /** Padding */
        padding-top: 24px;
        padding-bottom: 10px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sB69020 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sB69020 {
          margin-bottom: 41px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sB69020 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sB69020 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sB69020 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sB69020 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sB69020 {
          padding-right: 0px;
        }
      }

      .channel-html .a4D046B {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a4D046B {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a4D046B {
          margin-bottom: 7px;
        }
      }

      .channel-html .v6B0C4A {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
        margin-bottom: 18px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v6B0C4A {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v6B0C4A {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v6B0C4A {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v6B0C4A {
          margin-bottom: 13px;
        }
      }

      .channel-html .e3F7E02 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
        margin-bottom: 13px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3F7E02 {
          padding-right: 125px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3F7E02 {
          padding-right: 35px;
        }
      }

      .channel-html .p60B396 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .dB74C39 {
        /** Margin */
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .cA92397 {
        color: #0066cc;
      }

      .channel-html .m8FC09B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r960D2F {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 5px;
        grid-template-rows: 304px;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(1, 408px);
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r960D2F {
          grid-template-rows: 215px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r960D2F {
          grid-template-rows: 209px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r960D2F {
          grid-template-columns: repeat(1, 288px);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r960D2F {
          grid-template-columns: repeat(1, 280px);
        }
      }

      .channel-html .r960D2F .bentobox-item {
        border-radius: 14px;
      }

      .channel-html .mB7AAF8 {
        background-color: #f5f5f7;
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 2;
        position: relative;
        overflow: hidden;
      }

      .channel-html .mB7AAF8:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .lFD9ACD {
        /** Margin */
        margin-top: 26px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lFD9ACD {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lFD9ACD {
          margin-top: 16px;
        }
      }

      .channel-html .q2C3199 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w43E8AB {
        background-color: #ffffff;
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 44px;
        padding-bottom: 44px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w43E8AB {
          padding-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          padding-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w43E8AB {
          padding-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          padding-bottom: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w43E8AB {
          padding-right: 50vw;
        }
      }

      .channel-html .w43E8AB.large-display-bleed::before,
      .channel-html .w43E8AB.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .w43E8AB.medium-display-bleed::before,
      .channel-html .w43E8AB.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .w43E8AB.small-display-bleed::before,
      .channel-html .w43E8AB.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .z2B4BA0 {
        /** Margin */
        margin-top: 1px;
        /** Padding */
        padding-top: 24px;
        padding-bottom: 10px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2B4BA0 {
          margin-top: -8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z2B4BA0 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z2B4BA0 {
          margin-bottom: 41px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2B4BA0 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2B4BA0 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z2B4BA0 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2B4BA0 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z2B4BA0 {
          padding-right: 0px;
        }
      }

      .channel-html .gF22185 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gF22185 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gF22185 {
          margin-bottom: 7px;
        }
      }

      .channel-html .b5879F5 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
        margin-bottom: 18px;
        padding-right: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b5879F5 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5879F5 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b5879F5 {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5879F5 {
          margin-bottom: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5879F5 {
          padding-right: 0px;
        }
      }

      .channel-html .sCE718A {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 18px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sCE718A {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sCE718A {
          margin-bottom: 17px;
        }
      }

      .channel-html .h8412DE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b0A3AC9 {
        margin-left: 0px;
      }

      .channel-html .i2E36FA {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .uF2A8D1 {
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
        .channel-html .uF2A8D1 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uF2A8D1 {
          margin-left: -1px;
        }
      }

      .channel-html .r0AFAD0 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .h6C391F {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h6C391F {
          margin-left: 9px;
        }
      }

      .channel-html .d635012 {
        margin-left: -1px;
      }

      .channel-html .o307C73 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .q282B86 {
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
        .channel-html .q282B86 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q282B86 {
          margin-left: -1px;
        }
      }

      .channel-html .fBCF77C {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .m4090FD {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m4090FD {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m4090FD {
          margin-left: 9px;
        }
      }

      .channel-html .mB9D5F2 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mB9D5F2 {
          padding-right: 40px;
        }
      }

      .channel-html .o5125B6 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .v6134EC {
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
        .channel-html .v6134EC {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v6134EC {
          margin-left: -1px;
        }
      }

      .channel-html .u7ADB97 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .gDED1C8 {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gDED1C8 {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gDED1C8 {
          margin-left: 9px;
        }
      }

      .channel-html .t121C7A {
        margin-left: -1px;
      }

      .channel-html .hDEC513 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .p3FB5B4 {
        /** Margin */
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p3FB5B4 {
          padding-right: 60px;
        }
      }

      .channel-html .r9A865F {
        color: #0066cc;
      }

      .channel-html .c0B6B79 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0B6B79 {
          margin-top: -10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0B6B79 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0B6B79 {
          margin-left: 0px;
        }
      }

      .channel-html .y96DD0E {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
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
        margin-top: 46px;
        margin-bottom: 20px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0ADE54 {
          margin-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-top: 42px;
        }
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

      .channel-html .o47EC5B {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .u22AD02 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r356CC2 {
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
                  <h2 class="visually-hidden-text"> Studio Display <figure aria-hidden="true" class="image image-hero_logo y8d5222"></figure>
                  </h2>
                </div>
              </div>
              <p class="copy z9b16b1 channel-custom-font-custom-80-headline-super">A sight to be bold.</p>
            </div>
            <div class="column large-12 p151A5F">
              <figure aria-label="Studio Display" role="img" class="image image-hero z13977A"></figure>
            </div>
            <div class="column large-12 mC9FFFA">
              <p class="copy helvetica-neue o80282B channel-custom-font-custom-24-intro-elevated">An expansive 68.29-centimetre 5K Retina&nbsp;display.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> 12MP&nbsp;Ultra&nbsp;Wide&nbsp;camera with Centre Stage. Six-speaker sound system with Spatial Audio. And studio-quality mics. The perfect Mac partner — it’s so much more than a display.</p>
              <!-- <p class="copy helvetica-neue q521158 channel-custom-font-custom-17-body-tight">[Your Message]</p> -->
              <!--BEGIN CHANNEL-BUTTON-->
              <!-- <a href="#" aria-label="Buy Studio Display now" class="button button-channel button-base qC166EB"> Buy now </a> -->
              <!--END CHANNEL-BUTTON-->
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 1 - HERO-->
      <!--BEGIN > SECTION 2 - DISPLAY-->
      <div class="section f1390a8">
        <div class="section-content">
          <div class="row t3eaab6">
            <div class="column large-6 medium-12 small-12 q0bfc78">
              <div class="row q8E17CF">
                <div class="column large-12 medium-5 small-12 w0F267F">
                  <h3 class="copy y9A71E8 channel-custom-font-custom-24-eyebrow">68.29 cm 5K Retina&nbsp;display</h3>
                  <p class="copy e949BDF channel-custom-font-custom-48-headline">See what you can&nbsp;do.</p>
                </div>
                <div class="column large-12 medium-7 small-12 u75C164">
                  <p class="copy helvetica-neue j5AC9FC channel-custom-font-custom-21-intro">Studio Display draws you in from the moment you turn it on. True&nbsp;Tone ensures a more natural viewing experience. An anti-reflective coating ensures better visual comfort and readability. And optional nano-texture glass further minimises glare.</p>
                  <div class="row yE1B689">
                    <div class="column large-12 medium-12 small-12 kDC316D">
                      <div class="row x764FE3">
                        <div class="column large-6 medium-5 small-7 a8EA6D8">
                          <p class="copy bB03C96 channel-custom-font-custom-40-headline-callout">14.7 million</p>
                          <p class="copy s9BC0E5 typography-body-reduced">pixels</p>
                        </div>
                        <div class="column large-5 large-offset-1 medium-5 medium-offset-0 small-5 j350D65">
                          <p class="copy c8BAEE0 channel-custom-font-custom-40-headline-callout">1 billion</p>
                          <p class="copy d08875E typography-body-reduced">colours</p>
                        </div>
                      </div>
                      <div class="row x717423">
                        <div class="column large-6 medium-5 small-7 wEA27DF">
                          <p class="copy c3800B4 channel-custom-font-custom-40-headline-callout">600</p>
                          <p class="copy r7911AB typography-body-reduced">nits of brightness</p>
                        </div>
                        <div class="column large-5 large-offset-1 medium-5 medium-offset-0 small-5 u7DDD81">
                          <p class="copy dCC9C01 channel-custom-font-custom-40-headline-callout">P3</p>
                          <p class="copy z73989B typography-body-reduced">wide colour</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-6 large-show medium-12 medium-show small-12 small-show ddb6fd4">
              <figure aria-label="27-inch 5K Retina display." role="img" class="image image-display z9459bf"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 2 - DISPLAY-->
      <!--BEGIN > SECTION 3 - CAMERA, MICS, AND SPAEKERS-->
      <div class="section q0adc2a">
        <div class="section-content">
          <div class="row t3ea0f8">
            <div class="column large-6 medium-7 small-12 x7c41f1">
              <h3 class="copy x7820e7 channel-custom-font-custom-24-eyebrow">Cameras, Mics and Speakers</h3>
              <p class="copy q04e205 channel-custom-font-custom-48-headline">Sensational camera and audio. Now we’re talking.</p>
              <div class="row large-hide small-show x738489">
                <div class="column large-12 t3ec941">
                  <div class="bento-box a69DEF2">
                    <div class="bentobox-item s66C2A8">
                      <figure aria-label="12MP Ultra Wide camera with Center Stage." role="img" class="image image-camera b63C73C"></figure>
                    </div>
                    <div class="bentobox-item n2D4EA8">
                      <figure aria-hidden="true" class="image image-mics v5AF9C9"></figure>
                      <p class="copy j61960A channel-custom-font-custom-24-bento">Studio-<br>quality mics</p>
                    </div>
                    <div class="bentobox-item g4A2576">
                      <figure aria-hidden="true" class="image image-speakers oF8F733"></figure>
                      <p class="copy c3EEF24 channel-custom-font-custom-24-bento">Six-speaker sound system</p>
                    </div>
                  </div>
                </div>
              </div>
              <p class="copy helvetica-neue z97d36e channel-custom-font-custom-21-intro">The 12MP Ultra Wide camera with Centre&nbsp;Stage keeps you centred in the frame as you move around. The studio-quality three-mic array lets them hear you — and only you. And six speakers with Spatial Audio deliver cinematic sound.</p>
              <div class="row large-show medium-hide small-show f2D6ACC">
                <div class="column large-4 small-5 z3F4F3E">
                  <figure aria-label="Center Stage works with FaceTime, Webex, and Zoom." role="img" class="image image-camera_video_apps l332A0F"></figure>
                </div>
                <div class="column large-7 large-offset-4 small-8 m7A2803">
                  <p class="copy t793848 channel-custom-font-Custom-17-callout-headline">Centre Stage</p>
                  <p class="copy v88F308 channel-custom-font-custom-17-callout-body">Works with your go-to video conferencing apps</p>
                </div>
              </div>
            </div>
            <div class="column large-6 medium-5 small-12 small-hide r118b0c">
              <div class="bento-box wDD219D">
                <div class="bentobox-item tEF48B3">
                  <figure aria-label="12MP Ultra Wide camera with Center Stage." role="img" class="image image-camera s222155"></figure>
                </div>
                <div class="bentobox-item xBF0FD1">
                  <figure aria-hidden="true" class="image image-mics vBBA798"></figure>
                  <p class="copy u7A354F channel-custom-font-custom-24-bento">Studio-<br>quality mics</p>
                </div>
                <div class="bentobox-item r2CAD5F">
                  <figure aria-hidden="true" class="image image-speakers oD7CAD3"></figure>
                  <p class="copy g36FD01 channel-custom-font-custom-24-bento">Six-speaker sound system</p>
                </div>
              </div>
              <div class="row large-hide medium-show small-hide s4D09B0">
                <div class="column large-5 medium-5 a6FE5EE">
                  <figure aria-label="Center Stage works with FaceTime, Webex, and Zoom." role="img" class="image image-camera_video_apps jB07E21"></figure>
                </div>
                <div class="column large-7 large-offset-5 medium-7 medium-offset-5 b9D244D">
                  <p class="copy sAE537B channel-custom-font-Custom-17-callout-headline">Centre Stage</p>
                  <p class="copy c481F85 channel-custom-font-custom-17-callout-body">Works with your go-to video conferencing apps</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 3 - CAMERA, MICS, AND SPAEKERS-->
      <!--BEGIN > SECTION 4 - CONNECTIVITY-->
      <div class="section p90B247">
        <div class="section-content">
          <div class="row j30681E">
            <div class="column large-6 medium-7 small-12 mE17E3E">
              <h3 class="copy f93F4AE channel-custom-font-custom-24-eyebrow">Connectivity</h3>
              <p class="copy uC81880 channel-custom-font-custom-48-headline">Take charge of your studio.</p>
              <p class="copy helvetica-neue mA5A886 channel-custom-font-custom-21-intro">Three USB-C ports let you connect,&nbsp;power and charge devices. The Thunderbolt port connects Studio Display to your Mac with a single cable. The same port can charge compatible Mac notebooks — and fast-charge a 36 cm MacBook&nbsp;Pro.</p>
              <div class="row lF4A6AB">
                <div class="column large-1 d1E37BB">
                  <figure aria-hidden="true" class="image image-connectivity_icon_usbc fFF8577"></figure>
                </div>
                <div class="column large-11 d52519C">
                  <p class="copy pA02D7A channel-custom-font-Custom-17-callout-headline">3x USB-C ports</p>
                  <p class="copy x57822C channel-custom-font-custom-17-callout-body">Connect and charge devices</p>
                </div>
              </div>
              <div class="row uE8CDB0">
                <div class="column large-1 i778C37">
                  <figure aria-hidden="true" class="image image-connectivity_icon_thunderbolt j062A8B"></figure>
                </div>
                <div class="column large-11 yAED3C0">
                  <p class="copy z896120 channel-custom-font-Custom-17-callout-headline">1x Thunderbolt&nbsp;port</p>
                  <p class="copy qEC0A18 channel-custom-font-custom-17-callout-body">Connect and charge any compatible Mac</p>
                </div>
              </div>
            </div>
            <div class="column large-6 large-show medium-5 medium-show small-12 small-show q54E64E">
              <figure aria-label="Studio display back ports" role="img" class="image image-connectivity lB0AF3E"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 4 - CONNECTIVITY-->
      <!--BEGIN > SECTION 5 - WORKS WITH MAC-->
      <div class="section m9DF6D5">
        <div class="section-content">
          <div class="row vA24ADB">
            <div class="column large-6 small-12 t21FD89">
              <h3 class="copy tD481A4 channel-custom-font-custom-24-eyebrow">Mac Studio and Studio Display</h3>
              <p class="copy p459D84 channel-custom-font-custom-48-headline">Dream team.</p>
              <div class="row large-hide small-show z4DD565">
                <div class="column large-12 n7AE949">
                  <figure aria-label="Studio display and mac studio" role="img" class="image image-compatibility e8C5E18"></figure>
                </div>
              </div>
              <p class="copy helvetica-neue n5913C7 channel-custom-font-custom-21-intro">Studio Display is the ultimate partner for the astonishingly powerful Mac Studio. And it pairs perfectly with Mac notebooks and desktops — from MacBook&nbsp;Pro and MacBook&nbsp;Air to Mac&nbsp;mini.</p>
              <div class="row large-show medium-show small-show l9C1E7F">
                <div class="column large-12 f21C12A">
                  <figure aria-label="Studio Display pairs with Mac Studio, Mac mini, MacBook Pro, Macbook Air, and iMac." role="img" class="image image-compatibility_lineup tC22BDE"></figure>
                  <p class="copy yF61207 channel-custom-font-Custom-17-callout-headline">The perfect Mac partner</p>
                  <p class="copy vACAB05 channel-custom-font-custom-17-callout-body">Pairs with your Mac<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 small-hide zD79E28">
              <figure aria-label="Studio display and mac studio" role="img" class="image image-compatibility z996692"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 5 - WORKS WITH MAC-->
      <!--BEGIN > SECTION 6 - ACCESSORIES-->
      <div class="section v53d694 mb-5">
        <div class="section-content">
          <div class="row t342e7d">
            <div class="column large-12 y84fe87">
              <h3 class="copy v5d49b0 channel-custom-font-custom-24-eyebrow">Magic Accessories</h3>
              <div class="row u48844a">
                <div class="column large-6 small-12 v54f91a">
                  <p class="copy ba1360c channel-custom-font-custom-48-headline">Work your magic.</p>
                </div>
                <div class="column large-6 small-12 v51a0f3">
                  <p class="copy helvetica-neue q0bfc20 channel-custom-font-custom-21-intro">Wireless, rechargeable, precise, comfortable — and now in a silver-and-black option to complete your&nbsp;studio.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                </div>
                <div class="column large-12 yF826BB">
                  <div class="row k32189B">
                    <div class="column large-6 small-12 nD474D2">
                      <p class="copy hFE9656 channel-custom-font-custom-17-callout-body">Touch&nbsp;ID</p>
                      <figure aria-label="Pointer showcasing touch id key on the Magic keyboard" role="img" class="image image-accessories_keyboard p4E7B55"></figure>
                      <div class="row h1FBA54">
                        <div class="column large-12 small-hide qF53B87">
                          <p class="copy wB4FE82 channel-custom-font-custom-19-hardware-names">Magic&nbsp;Keyboard</p>
                        </div>
                      </div>
                    </div>
                    <div class="column large-3 h4CF47E">
                      <figure aria-label="Magic Mouse" role="img" class="image image-accessories_mouse g9B1FD0"></figure>
                      <div class="row g2CED41">
                        <div class="column large-12 small-hide u000E1A">
                          <p class="copy s9C4F66 channel-custom-font-custom-19-hardware-names">Magic&nbsp;Mouse</p>
                        </div>
                      </div>
                    </div>
                    <div class="column large-3 vEA71A7">
                      <figure aria-label="Magic Trackpad" role="img" class="image image-accessories_trackpad b45C6A2"></figure>
                      <div class="row kDD0083">
                        <div class="column large-12 small-hide o5D7456">
                          <p class="copy s77C5E3 channel-custom-font-custom-19-hardware-names">Magic&nbsp;Trackpad</p>
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
      <!--END > SECTION 6 - ACCESSORIES-->
      <!--BEGIN > FLEX 1 - MOUNTS-->
        <!-- <div class="section eCA63DA">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed wA221BB">
              <div class="column large-7 small-12 bEDFFC9">
                <h2 class="copy u74E274 channel-custom-font-custom-21-eyebrow-reduced">Choice of stands</h2>
                <p class="copy z939C07 channel-custom-font-custom-40-headline-reduced">Stands. And delivers.</p>
                <p class="copy helvetica-neue m08DE42 channel-custom-font-custom-17-body-reduced">Studio Display comes with your choice of two stands or a mount adapter so you can find the right angle.</p>
                <ul role="list" aria-label="Type of mounts and stands" class="list n3ABB3A">
                  <li role="listitem" class="list-item q7AD0DC">
                    <div class="row gA17950">
                      <div class="column large-0 i42BC5C"><span class="copy v40E24E typography-body">•&nbsp;</span></div>
                      <div class="column large-11 u4A6559"><span class="copy v872FAB typography-body">Tilt-adjustable stand</span></div>
                    </div>
                  </li>
                  <li role="listitem" class="list-item x79C5F8">
                    <div class="row g68A0AB">
                      <div class="column large-0 a7C9163"><span class="copy o78FFC6 typography-body">•&nbsp;</span></div>
                      <div class="column large-11 o2F29B8"><span class="copy x47009A typography-body">Tilt- and height-adjustable stand option</span></div>
                    </div>
                  </li>
                  <li role="listitem" class="list-item uFCBB0F">
                    <div class="row n003ACC">
                      <div class="column large-0 i8D8AD2"><span class="copy mCA09AD typography-body">•&nbsp;</span></div>
                      <div class="column large-11 p5B90BC"><span class="copy d1C7787 typography-body">VESA mount adapter option</span></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="column large-5 small-12 x668DF1">
                <div class="bento-box b5E593B">
                  <div class="bentobox-item oF9FA9C">
                    <div class="row pF9A8E4">
                      <div class="column large-12 tB49EC6">
                        <div class="bento-box e7D8A17">
                          <div class="bentobox-item oB3153D">
                            <figure aria-label="Tilt-adjustable stand." role="img" class="image image-flex_mount_left xBB9863"></figure>
                          </div>
                          <div class="bentobox-item f7FBA03">
                            <figure aria-label="Tilt-and height-adjustable stand." role="img" class="image image-flex_mount_middle vCC5549"></figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bentobox-item m6C4807">
                    <div class="row j242E34">
                      <div class="column large-12 x4284F5">
                        <div class="bento-box s78E949">
                          <div class="bentobox-item y07CCFE">
                            <figure aria-label="VESA mount adapter." role="img" class="image image-flex_mount_right v3CB5A3"></figure>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > FLEX 1 - MOUNTS-->
      <!--BEGIN > FLEX 2 - MAC ACCESSORIES-->
        <!-- <div class="section n8AE0B3">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed g0A22CD">
              <div class="column large-7 small-12 sB69020">
                <h2 class="copy a4D046B channel-custom-font-custom-21-eyebrow-reduced">Accessories</h2>
                <p class="copy v6B0C4A channel-custom-font-custom-40-headline-reduced">Explore Mac accessories.</p>
                <p class="copy helvetica-neue e3F7E02 channel-custom-font-custom-17-body-reduced">Explore keyboards, devices and other essentials.</p>
                <div class="row p60B396">
                  <div class="column large-12 dB74C39"><a href="#" aria-label="Learn more about Mac Accessories" class="link-wrapper"><span class="cA92397 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more</span></span></a></div>
                </div>
              </div>
              <div class="column large-5 small-12 m8FC09B">
                <div class="bento-box r960D2F">
                  <div class="bentobox-item mB7AAF8">
                    <figure aria-label="Multiple accessores like Magic Keyboard, Magic Mouse, USB-C cable, Air Pods and Track Pad." role="img" class="image image-flex_accessories lFD9ACD"></figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > FLEX 2 - MAC ACCESSORIES-->
      <!--BEGIN > FLEX 3 - APPLECARE-->
        <!-- <div class="section q2C3199">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed w43E8AB">
              <div class="column large-7 small-12 z2B4BA0">
                <h2 class="copy gF22185 channel-custom-font-custom-21-eyebrow-reduced">AppleCare+</h2>
                <p class="copy b5879F5 channel-custom-font-custom-40-headline-reduced">Expert support, enhanced coverage.</p>
                <div class="row sCE718A">
                  <div class="column large-12 h8412DE">
                    <ul role="list" aria-label="Apple care plus support and coverage" class="list b0A3AC9">
                      <li role="listitem" class="list-item iD1B2D6">
                        <div class="row i2E36FA">
                          <div class="column large-0 uF2A8D1">
                            <figure aria-hidden="true" class="image image-flex_checkmark_apple_care r0AFAD0"></figure>
                          </div>
                          <div class="column large-11 h6C391F">
                            <p class="copy helvetica-neue d635012 channel-custom-font-custom-17-body-reduced">Apple-certified service</p>
                          </div>
                        </div>
                      </li>
                      <li role="listitem" class="list-item w99426C">
                        <div class="row o307C73">
                          <div class="column large-0 q282B86">
                            <figure aria-hidden="true" class="image image-flex_checkmark_apple_care fBCF77C"></figure>
                          </div>
                          <div class="column large-11 m4090FD">
                            <p class="copy helvetica-neue mB9D5F2 channel-custom-font-custom-17-body-reduced">Priority access to Apple experts</p>
                          </div>
                        </div>
                      </li>
                      <li role="listitem" class="list-item j29AD27">
                        <div class="row o5125B6">
                          <div class="column large-0 v6134EC">
                            <figure aria-hidden="true" class="image image-flex_checkmark_apple_care u7ADB97"></figure>
                          </div>
                          <div class="column large-11 gDED1C8">
                            <p class="copy helvetica-neue t121C7A channel-custom-font-custom-17-body-reduced">Accidental damage coverage</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row hDEC513">
                  <div class="column large-12 p3FB5B4"><a href="#" class="link-wrapper"><span class="r9A865F icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more about AppleCare+ for Mac</span></span></a></div>
                </div>
              </div>
              <div class="column large-5 small-12 c0B6B79">
                <figure aria-label="Studio Display and Apple care plus" role="img" class="image image-flex_applecare y96DD0E"></figure>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > FLEX 3 - APPLECARE-->
      <!--BEGIN > LEGAL-->
        <!-- <div class="section q7ABA85">
          <div class="section-content">
            <div class="row large-display-bleed medium-display-bleed c0ADE54">
              <div class="column large-12 medium-12 s185A56">
                <div class="row x67B730">
                  <div class="column large-12 n22495C">
                    <h2 class="copy helvetica-neue kA26997 channel-custom-font-custom-12-sosumi"><span id="footnote-diamond-1">◊</span> Legal Disclaimers</h2>
                  </div>
                </div>
                <div class="row nBAAB83">
                  <div class="column large-12 w076B92">
                    <p class="copy helvetica-neue rF00FC0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Display:</span> Screen size is measured diagonally. </p>
                  </div>
                </div>
                <div class="row u8B52BF">
                  <div class="column large-12 k29A416">
                    <p class="copy helvetica-neue tBED2F5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Compatibility:</span> Studio Display is compatible with the following Mac models running macOS&nbsp;Monterey&nbsp;12.3&nbsp;or later:<br>
            Mac Studio (2022)<br>
            16-inch MacBook&nbsp;Pro (2019 or later)<br>
            14-inch MacBook&nbsp;Pro (2021)<br>
            13-inch MacBook&nbsp;Pro (2016 or later)<br>
            15-inch MacBook&nbsp;Pro (2016 or later)<br>
            MacBook&nbsp;Air (2018 or later)<br>
            Mac&nbsp;mini (2018 or later)<br>
            Mac&nbsp;Pro (2019 or later)<br>
            24-inch iMac (2021)<br>
            27-inch iMac (2017 or later)<br>
            21.5-inch iMac (2017 or later)<br>
            iMac&nbsp;Pro (2017)<br><br>
            Studio Display is compatible with the following iPad models running iPadOS 15.4 or later:<br>
            iPad&nbsp;Pro 12.9-inch (3rd&nbsp;generation or later)<br>
            iPad&nbsp;Pro 11-inch<br>
            iPad&nbsp;Air (5th&nbsp;generation)<br>
            </p>
          </div>
                </div>
                <div class="row o47EC5B">
                  <div class="column large-12 u22AD02">
                    <p class="copy helvetica-neue r356CC2 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Accessories:</span> Sold separately.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      <!--END > LEGAL-->
    </div>


  </body>

</html>