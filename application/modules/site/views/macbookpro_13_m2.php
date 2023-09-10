<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="version:build" content="0.0.16">
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
      .channel-html aside,
      .channel-html figure,
      .channel-html footer,
      .channel-html header,
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
      .channel-html select,
      .channel-html button {
        font-synthesis: none;
        -moz-font-feature-settings: "kern";
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        direction: ltr;
        text-align: left;
      }

      .channel-html,
      .channel-html select,
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
      .channel-html h1,
      .channel-html h2,
      .channel-html h3,
      .channel-html h4,
      .channel-html h5,
      .channel-html h6,
      .channel-html p,
      .channel-html figure,
      .channel-html form,
      .channel-html button {
        margin: 0;
        padding: 0;
      }

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
      .channel-html select,
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

      .channel-html .footnote-number {
        position: relative;
        vertical-align: baseline;
        font-size: 0.6em;
        top: -0.5em;
      }

      .channel-html .footnote-number.footnote-reduced {
        font-size: 0.45em;
        top: -0.86em;
      }

      .channel-html .align-items-start {
        align-items: flex-start;
      }

      .channel-html .align-items-end {
        align-items: flex-end;
      }

      .channel-html .large-align-items-start {
        align-items: flex-start;
      }

      .channel-html .large-align-items-end {
        align-items: flex-end;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-align-items-start {
          align-items: flex-start;
        }

        .channel-html .medium-align-items-end {
          align-items: flex-end;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-align-items-start {
          align-items: flex-start;
        }

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

      .channel-html .clear {
        clear: both;
      }

      .channel-html .row {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        width: 100%;
      }

      .channel-html .row-reverse {
        flex-direction: row-reverse;
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

      .channel-html .large-order-0 {
        order: 0;
      }

      .channel-html .large-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .large-offset-1 {
        margin-left: 8.3333333333%;
      }

      .channel-html .large-order-1 {
        order: 1;
      }

      .channel-html .large-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .large-offset-2 {
        margin-left: 16.6666666667%;
      }

      .channel-html .large-order-2 {
        order: 2;
      }

      .channel-html .large-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .large-offset-3 {
        margin-left: 25%;
      }

      .channel-html .large-order-3 {
        order: 3;
      }

      .channel-html .large-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .large-offset-4 {
        margin-left: 33.3333333333%;
      }

      .channel-html .large-order-4 {
        order: 4;
      }

      .channel-html .large-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .large-offset-5 {
        margin-left: 41.6666666667%;
      }

      .channel-html .large-order-5 {
        order: 5;
      }

      .channel-html .large-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .large-offset-6 {
        margin-left: 50%;
      }

      .channel-html .large-order-6 {
        order: 6;
      }

      .channel-html .large-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .large-offset-7 {
        margin-left: 58.3333333333%;
      }

      .channel-html .large-order-7 {
        order: 7;
      }

      .channel-html .large-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .large-offset-8 {
        margin-left: 66.6666666667%;
      }

      .channel-html .large-order-8 {
        order: 8;
      }

      .channel-html .large-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .large-offset-9 {
        margin-left: 75%;
      }

      .channel-html .large-order-9 {
        order: 9;
      }

      .channel-html .large-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .large-offset-10 {
        margin-left: 83.3333333333%;
      }

      .channel-html .large-order-10 {
        order: 10;
      }

      .channel-html .large-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .large-offset-11 {
        margin-left: 91.6666666667%;
      }

      .channel-html .large-order-11 {
        order: 11;
      }

      .channel-html .large-12 {
        flex-basis: 100%;
        max-width: 100%;
      }

      .channel-html .large-offset-12 {
        margin-left: 100%;
      }

      .channel-html .large-order-12 {
        order: 12;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-offset-0 {
          margin-left: 0;
        }

        .channel-html .medium-order-0 {
          order: 0;
        }

        .channel-html .medium-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .medium-offset-1 {
          margin-left: 8.3333333333%;
        }

        .channel-html .medium-order-1 {
          order: 1;
        }

        .channel-html .medium-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .medium-offset-2 {
          margin-left: 16.6666666667%;
        }

        .channel-html .medium-order-2 {
          order: 2;
        }

        .channel-html .medium-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .medium-offset-3 {
          margin-left: 25%;
        }

        .channel-html .medium-order-3 {
          order: 3;
        }

        .channel-html .medium-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .medium-offset-4 {
          margin-left: 33.3333333333%;
        }

        .channel-html .medium-order-4 {
          order: 4;
        }

        .channel-html .medium-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .medium-offset-5 {
          margin-left: 41.6666666667%;
        }

        .channel-html .medium-order-5 {
          order: 5;
        }

        .channel-html .medium-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .medium-offset-6 {
          margin-left: 50%;
        }

        .channel-html .medium-order-6 {
          order: 6;
        }

        .channel-html .medium-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .medium-offset-7 {
          margin-left: 58.3333333333%;
        }

        .channel-html .medium-order-7 {
          order: 7;
        }

        .channel-html .medium-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .medium-offset-8 {
          margin-left: 66.6666666667%;
        }

        .channel-html .medium-order-8 {
          order: 8;
        }

        .channel-html .medium-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .medium-offset-9 {
          margin-left: 75%;
        }

        .channel-html .medium-order-9 {
          order: 9;
        }

        .channel-html .medium-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .medium-offset-10 {
          margin-left: 83.3333333333%;
        }

        .channel-html .medium-order-10 {
          order: 10;
        }

        .channel-html .medium-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .medium-offset-11 {
          margin-left: 91.6666666667%;
        }

        .channel-html .medium-order-11 {
          order: 11;
        }

        .channel-html .medium-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .medium-offset-12 {
          margin-left: 100%;
        }

        .channel-html .medium-order-12 {
          order: 12;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-offset-0 {
          margin-left: 0;
        }

        .channel-html .small-order-0 {
          order: 0;
        }

        .channel-html .small-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .small-offset-1 {
          margin-left: 8.3333333333%;
        }

        .channel-html .small-order-1 {
          order: 1;
        }

        .channel-html .small-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .small-offset-2 {
          margin-left: 16.6666666667%;
        }

        .channel-html .small-order-2 {
          order: 2;
        }

        .channel-html .small-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .small-offset-3 {
          margin-left: 25%;
        }

        .channel-html .small-order-3 {
          order: 3;
        }

        .channel-html .small-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .small-offset-4 {
          margin-left: 33.3333333333%;
        }

        .channel-html .small-order-4 {
          order: 4;
        }

        .channel-html .small-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .small-offset-5 {
          margin-left: 41.6666666667%;
        }

        .channel-html .small-order-5 {
          order: 5;
        }

        .channel-html .small-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .small-offset-6 {
          margin-left: 50%;
        }

        .channel-html .small-order-6 {
          order: 6;
        }

        .channel-html .small-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .small-offset-7 {
          margin-left: 58.3333333333%;
        }

        .channel-html .small-order-7 {
          order: 7;
        }

        .channel-html .small-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .small-offset-8 {
          margin-left: 66.6666666667%;
        }

        .channel-html .small-order-8 {
          order: 8;
        }

        .channel-html .small-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .small-offset-9 {
          margin-left: 75%;
        }

        .channel-html .small-order-9 {
          order: 9;
        }

        .channel-html .small-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .small-offset-10 {
          margin-left: 83.3333333333%;
        }

        .channel-html .small-order-10 {
          order: 10;
        }

        .channel-html .small-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .small-offset-11 {
          margin-left: 91.6666666667%;
        }

        .channel-html .small-order-11 {
          order: 11;
        }

        .channel-html .small-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .small-offset-12 {
          margin-left: 100%;
        }

        .channel-html .small-order-12 {
          order: 12;
        }
      }

      .channel-html .row-reverse .column {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        min-width: 0px;
      }

      .channel-html .row-reverse .large-offset-0 {
        margin-right: 0;
      }

      .channel-html .row-reverse .large-offset-1 {
        margin-right: 8.3333333333%;
      }

      .channel-html .row-reverse .large-offset-2 {
        margin-right: 16.6666666667%;
      }

      .channel-html .row-reverse .large-offset-3 {
        margin-right: 25%;
      }

      .channel-html .row-reverse .large-offset-4 {
        margin-right: 33.3333333333%;
      }

      .channel-html .row-reverse .large-offset-5 {
        margin-right: 41.6666666667%;
      }

      .channel-html .row-reverse .large-offset-6 {
        margin-right: 50%;
      }

      .channel-html .row-reverse .large-offset-7 {
        margin-right: 58.3333333333%;
      }

      .channel-html .row-reverse .large-offset-8 {
        margin-right: 66.6666666667%;
      }

      .channel-html .row-reverse .large-offset-9 {
        margin-right: 75%;
      }

      .channel-html .row-reverse .large-offset-10 {
        margin-right: 83.3333333333%;
      }

      .channel-html .row-reverse .large-offset-11 {
        margin-right: 91.6666666667%;
      }

      .channel-html .row-reverse .large-offset-12 {
        margin-right: 100%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .row-reverse .medium-offset-0 {
          margin-right: 0;
        }

        .channel-html .row-reverse .medium-offset-1 {
          margin-right: 8.3333333333%;
        }

        .channel-html .row-reverse .medium-offset-2 {
          margin-right: 16.6666666667%;
        }

        .channel-html .row-reverse .medium-offset-3 {
          margin-right: 25%;
        }

        .channel-html .row-reverse .medium-offset-4 {
          margin-right: 33.3333333333%;
        }

        .channel-html .row-reverse .medium-offset-5 {
          margin-right: 41.6666666667%;
        }

        .channel-html .row-reverse .medium-offset-6 {
          margin-right: 50%;
        }

        .channel-html .row-reverse .medium-offset-7 {
          margin-right: 58.3333333333%;
        }

        .channel-html .row-reverse .medium-offset-8 {
          margin-right: 66.6666666667%;
        }

        .channel-html .row-reverse .medium-offset-9 {
          margin-right: 75%;
        }

        .channel-html .row-reverse .medium-offset-10 {
          margin-right: 83.3333333333%;
        }

        .channel-html .row-reverse .medium-offset-11 {
          margin-right: 91.6666666667%;
        }

        .channel-html .row-reverse .medium-offset-12 {
          margin-right: 100%;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .row-reverse .small-offset-0 {
          margin-right: 0;
        }

        .channel-html .row-reverse .small-offset-1 {
          margin-right: 8.3333333333%;
        }

        .channel-html .row-reverse .small-offset-2 {
          margin-right: 16.6666666667%;
        }

        .channel-html .row-reverse .small-offset-3 {
          margin-right: 25%;
        }

        .channel-html .row-reverse .small-offset-4 {
          margin-right: 33.3333333333%;
        }

        .channel-html .row-reverse .small-offset-5 {
          margin-right: 41.6666666667%;
        }

        .channel-html .row-reverse .small-offset-6 {
          margin-right: 50%;
        }

        .channel-html .row-reverse .small-offset-7 {
          margin-right: 58.3333333333%;
        }

        .channel-html .row-reverse .small-offset-8 {
          margin-right: 66.6666666667%;
        }

        .channel-html .row-reverse .small-offset-9 {
          margin-right: 75%;
        }

        .channel-html .row-reverse .small-offset-10 {
          margin-right: 83.3333333333%;
        }

        .channel-html .row-reverse .small-offset-11 {
          margin-right: 91.6666666667%;
        }

        .channel-html .row-reverse .small-offset-12 {
          margin-right: 100%;
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

      .channel-html .icon-share::before,
      .channel-html .icon-share::after {
        content: "\f32e";
      }

      .channel-html .icon-check::before,
      .channel-html .icon-check::after {
        content: "\f30b";
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

      .channel-html .viewport-content {
        margin-left: auto;
        margin-right: auto;
        width: 980px;
      }

      @media only screen and (min-width: 1441px) {
        .channel-html .viewport-content {
          margin-left: auto;
          margin-right: auto;
          width: 980px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .viewport-content {
          margin-left: auto;
          margin-right: auto;
          width: 692px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .viewport-content {
          margin-left: auto;
          margin-right: auto;
          width: 87.5%;
        }
      }

      .channel-html .theme-dark {
        background-color: black;
        color: #f5f5f7;
      }

      .channel-html .theme-dark h1,
      .channel-html .theme-dark h2,
      .channel-html .theme-dark h3,
      .channel-html .theme-dark h4,
      .channel-html .theme-dark h5,
      .channel-html .theme-dark h6 {
        color: #f5f5f7;
      }

      .channel-html .theme-dark a,
      .channel-html .theme-dark .link {
        color: #2997ff;
      }

      .channel-html .theme-dark .footnote a {
        color: inherit;
      }

      .channel-html .theme-dark .footnote a:hover {
        color: #2997ff;
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

      .channel-html .colornav {
        display: inline-block;
        text-align: center;
      }

      .channel-html .colornav-title {
        font-size: 17px;
        line-height: 1.2353641176;
        font-weight: 400;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        border-bottom: 1px solid #d2d2d7;
        margin: 0;
        padding: 12px 0;
        width: 100%;
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

      .channel-html .colornav-link.current,
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

      .channel-html .colornav-link.current .colornav-label,
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

        .channel-html .colornav-link.current .colornav-label,
        .channel-html .colornav-value:checked~.colornav-link .colornav-label {
          padding-top: 4px;
        }
      }

      .channel-html .theme-dark .colornav .colornav-title {
        border-color: #424245;
      }

      .channel-html .theme-dark .colornav .colornav-link {
        color: #f5f5f7;
      }

      .channel-html .theme-dark .colornav .colornav-link.current,
      .channel-html .theme-dark .colornav .colornav-value:checked~.colornav-link {
        border-color: #0071e3;
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
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
      }

      .channel-html .badge {
        white-space: normal;
        margin: 0;
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

      /**
Mixin to define gaps per viewport and column number
@see Compare.vue: computed.columnRange()
 */

      /**
Mixin to define padding per viewport and column number
@see Compare.vue: computed.columnRange()
 */

      .channel-compare .compare-wrapper {
        position: relative;
        overflow: hidden;
      }

      .channel-compare .compare-section,
      .channel-compare .selector-table {
        position: relative;
      }

      .channel-compare select {
        box-sizing: border-box;
      }

      .channel-compare sup * {
        vertical-align: inherit;
        font-weight: 400;
      }

      .channel-compare ul {
        margin: 0;
        list-style: none;
      }

      .channel-compare .icon-check {
        position: relative;
        top: -5px;
      }

      .channel-compare .icon-check:after {
        font-size: 38px;
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

      .channel-compare .compare.compare-column-range-large-5 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-5 .compare-row {
        padding: 0 16px;
      }

      .channel-compare .compare.compare-column-range-large-4 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-4 .compare-row {
        padding: 0 42px;
      }

      .channel-compare .compare.compare-column-range-large-3 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-3 .compare-row {
        padding: 0 144px;
      }

      .channel-compare .compare.compare-column-range-large-2 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-2 .compare-row {
        padding: 0 0px;
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-5 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-4 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-3 .compare-row {
          padding: 0 58px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-2 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-5 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-4 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-3 .compare-row {
          padding: 0 0px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-2 .compare-row {
          padding: 0 0;
        }
      }

      .channel-compare .compare.compare-column-range-large-5 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-5 .compare-row {
        --column-gap: 32px;
      }

      .channel-compare .compare.compare-column-range-large-4 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-4 .compare-row {
        --column-gap: 80px;
      }

      .channel-compare .compare.compare-column-range-large-3 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-3 .compare-row {
        --column-gap: 100px;
      }

      .channel-compare .compare.compare-column-range-large-2 .compare-header-row,
      .channel-compare .compare.compare-column-range-large-2 .compare-row {
        --column-gap: 16px;
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-5 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-4 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-3 .compare-row {
          --column-gap: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare.compare-column-range-medium-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-medium-2 .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-5 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-5 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-4 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-4 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-3 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-3 .compare-row {
          --column-gap: 18px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.compare-column-range-small-2 .compare-header-row,
        .channel-compare .compare.compare-column-range-small-2 .compare-row {
          --column-gap: 18px;
        }
      }

      .channel-compare .compare-header-row,
      .channel-compare .compare-row {
        --column-gap: 16px;
        display: grid;
        column-gap: var(--column-gap);
        grid-template-columns: repeat(var(--grid-column), calc((100% - var(--column-gap) * (var(--grid-column) - 1)) / var(--grid-column)));
      }

      @media only screen and (max-width: 1068px) {

        .channel-compare .compare-header-row,
        .channel-compare .compare-row {
          --column-gap: 28px;
        }
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare-header-row,
        .channel-compare .compare-row {
          --column-gap: 18px;
        }
      }

      .channel-compare .compare-row {
        margin-bottom: 40px;
      }

      .channel-compare .compare-row.compare-template-border-top .compare-column {
        border-top: 1px solid #d6d6d6;
        padding-top: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-row.compare-template-border-top .compare-column {
          padding-top: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-row.compare-template-border-top .compare-column {
          padding-top: 20px;
        }
      }

      .channel-compare .compare-row.compare-template-border-bottom .compare-column {
        border-bottom: 1px solid #d6d6d6;
        margin-bottom: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin-bottom: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-row.compare-template-border-bottom .compare-column {
          margin-bottom: 20px;
        }
      }

      .channel-compare .compare-row.compare-template-space-bottom .compare-column {
        margin-bottom: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-row.compare-template-space-bottom .compare-column {
          margin-bottom: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-row.compare-template-space-bottom .compare-column {
          margin-bottom: 20px;
        }
      }

      .channel-compare .compare-row:last-child {
        margin-bottom: 0;
      }

      .channel-compare .compare-header-row {
        margin: 0;
      }

      .channel-compare .compare-rowheader {
        order: -1;
      }

      .channel-compare .compare-rowheader,
      .channel-compare .compare-rowheader-style {
        grid-column: 1/var(--grid-column) span;
      }

      .channel-compare .compare-columnheader,
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

      .channel-compare .compare.with-fullwidthrowheader .compare-columnheader,
      .channel-compare .compare.with-fullwidthrowheader .compare-column {
        text-align: center;
        justify-content: center;
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-columnheader-span,
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
        margin-bottom: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-table {
          margin-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-table {
          margin-bottom: 25px;
        }
      }

      .channel-compare .selector-table .compare-row {
        margin: 0;
      }

      .channel-compare .selector-table .compare-rowheader {
        height: 0;
      }

      .channel-compare .selector-table .compare-column-interactive {
        padding: 0 4px;
      }

      .channel-compare .selector-element {
        position: relative;
        width: 100%;
        transition: border-color 200ms ease;
        border: solid 1px #d6d6d6;
        border-radius: 12px;
      }

      .channel-compare .selector-element:hover {
        border: solid 1px #666;
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-element {
          border: none;
          border-bottom: 1px solid #d6d6d6;
          border-radius: 0px;
        }

        .channel-compare .selector-element:hover {
          border: none;
          border-radius: 0px;
          border-bottom: 1px solid #d6d6d6;
        }
      }

      .channel-compare .selector-element::before {
        content: "";
        width: 44px;
        position: absolute;
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, white 50%, white 100%);
        top: 0;
        height: 100%;
        right: 5px;
        z-index: 0;
        pointer-events: none;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-element::before {
          width: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-element::before {
          width: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-element {
          margin-right: 0;
        }
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
        font-size: 12px;
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

      @media only screen and (max-width: 1068px) {
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
        line-height: 1.4;
      }

      .channel-compare .badge-content .badge-value {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-size: 64px;
        line-height: 1.0625;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        font-size: 21px;
        line-height: 0.74em;
        white-space: unset;
        overflow-wrap: break-word;
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

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-value {
          font-size: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .badge-content .badge-value {
          font-size: 21px;
        }
      }

      .channel-compare .badge-content .badge-elevated .badge-caption p {
        color: #86868b;
      }

      .channel-compare .badge-content .image-icon-wrapper {
        position: relative;
        text-align: center;
        margin-bottom: -4px;
      }

      .channel-compare .badge-content .image-icon-wrapper figure {
        display: block;
        margin: auto;
      }

      .channel-compare .badge-content .badge-row {
        padding: 0 16px;
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

      .channel-compare .badge-content .badge-row:not(:last-child) {
        margin-bottom: 15px;
      }

      .channel-compare .badge-content .badge-row:first-child .copy {
        margin-bottom: -4px;
      }

      .channel-compare .badge-content .badge-row:first-child .badge-value:not(.copy) {
        margin-bottom: -3px;
      }

      .channel-compare .compare-template-border-bottom .button-container {
        margin-bottom: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare-template-border-bottom .button-container {
          margin-bottom: 30px;
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
        margin-bottom: 55px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .button-container {
          margin-bottom: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .button-container {
          margin-bottom: 32px;
        }
      }

      .channel-compare .button-container .copy.helvetica-neue {
        font-weight: 400;
      }

      .channel-compare .multi-row .compare-template-preview-item-color-nav {
        margin-bottom: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav {
          margin-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav {
          margin-bottom: 20px;
        }
      }

      .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
        margin-bottom: 40px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
          margin-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .multi-row .compare-template-preview-item-color-nav:last-child {
          margin-bottom: 40px;
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
        margin-top: 27px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .row-colors {
          padding-bottom: 27px;
          margin-top: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .row-colors {
          padding-bottom: 17px;
          margin-top: 17px;
        }
      }

      .channel-compare .row-colors.row-colors-none {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .channel-compare .row-colors.row-colors-none .colornav-items {
        display: block;
      }

      .channel-compare .colornav-item-row {
        display: flex;
        justify-content: center;
      }

      .channel-compare .colornav-item-row:not(:first-child) {
        margin-top: 10px;
      }

      .channel-compare .colornav-item-row .colornav-item {
        margin-left: 0;
        margin-right: 6px;
      }

      .channel-compare .colornav-item-row .colornav-item:last-child {
        margin-right: 0;
      }

      .channel-compare .colornav-swatch {
        width: 12px;
        height: 12px;
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





      .channel-html .copy {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        word-break: break-word;
      }

      .channel-html .copy.helvetica-neue {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        letter-spacing: normal;
      }

      .channel-html .typography-caption li {
        padding-bottom: 10px;
      }

      .channel-html a.footer-link {
        color: #555555;
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

      .channel-html .key-line {
        display: flex;
        width: 100%;
        height: 20px;
      }

      .channel-html .key-line .liner {
        align-self: center;
      }

      .channel-html .link-wrapper {
        display: inline-flex;
      }

      body {
        margin: 0;
        overflow-x: hidden;
      }

      @media (inverted-colors) {
        body .double-invert {
          filter: invert(1);
        }
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

      .image-hero_logo {
        width: 264px;
        height: 34px;
        background-size: 264px 34px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_large.png?1654209468714);
      }

      .image-camera {
        width: 931px;
        height: 541px;
        background-size: 931px 541px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_large.png?1654209468714);
      }

      .image-compare_macbook_air_m1_spacegray {
        width: 155px;
        height: 90px;
        background-size: 155px 90px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m1_spacegray_large.png?1654209468715);
      }

      .image-why_icon_easy {
        width: 74px;
        height: 42px;
        background-size: 74px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_large.png?1654209468715);
      }

      .image-icon_M1_Max_M1_Pro {
        width: 94px;
        height: 42px;
        background-size: 94px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M1_Max_M1_Pro_large.png?1654209468715);
      }

      .image-icon_M2_chip {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M2_chip_large.png?1654209468715);
      }

      .image-connectivity_icon_thunderbolt {
        width: 12px;
        height: 25px;
        background-size: 12px 25px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_large.png?1654209468716);
      }

      .image-compare_macbook_pro_m1_16_spacegray {
        width: 167px;
        height: 104px;
        background-size: 167px 104px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_16_spacegray_large.png?1654209468716);
      }

      .image-icon_touch_bar_id {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_touch_bar_id_large.png?1654209468716);
      }

      .image-flex_applecare {
        width: 424px;
        height: 240px;
        background-size: 424px 240px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_large.png?1654209468716);
      }

      .image-keyboard_icon_apple_pay {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_large.png?1654209468716);
      }
      
      .image-app_store {
        width: 26px;
        height: 23px;
        background-size: 26px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/app_store_large.png);
      }

      .image-display {
        width: 931px;
        height: 541px;
        background-size: 931px 541px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_large.png?1654209468717);
      }

      .image-flex_checkmark_apple_care {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_large.png?1654209468717);
      }

      .image-keyboard_icon_unlock {
        width: 20px;
        height: 27px;
        background-size: 20px 27px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_large.png?1654209468717);
      }

      .image-icon_touch_id {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_touch_id_large.png?1654209468717);
      }

      .image-hero {
        width: 1785px;
        height: 1202px;
        background-size: 1785px 1202px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_large.png?1654209468718);
      }

      .image-camera_icon_mic {
        width: 20px;
        height: 29px;
        background-size: 20px 29px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_large.png?1654209468718);
      }

      .image-compare_macbook_pro_m2_13_spacegray {
        width: 151px;
        height: 89px;
        background-size: 151px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m2_13_spacegray_large.png?1654209468718);
      }

      .image-compare_macbook_pro_m1_14_spacegray {
        width: 152px;
        height: 94px;
        background-size: 152px 94px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_14_spacegray_large.png?1654209468719);
      }

      .image-icon_M1_chip {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M1_chip_large.png?1654209468719);
      }

      .image-performance_icon_battery {
        width: 31px;
        height: 17px;
        background-size: 31px 17px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_large.png?1654209468719);
      }

      .image-compare_macbook_air_m2_13_midnight {
        width: 146px;
        height: 89px;
        background-size: 146px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m2_13_midnight_large.png?1654209468720);
      }

      .image-flex_accessories {
        width: 626px;
        height: 284px;
        background-size: 626px 284px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_large.png?1654209468720);
      }

      .image-performance_icon_swirl {
        width: 28px;
        height: 26px;
        background-size: 28px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_large.png?1654209468720);
      }

      .image-connectivity_icon_wi-fi {
        width: 27px;
        height: 20px;
        background-size: 27px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_large.png?1654209468720);
      }

      .image-display_icon_color {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_large.png?1654209468720);
      }

      .image-keyboard_icon_touch_id {
        width: 41px;
        height: 40px;
        background-size: 41px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_large.png?1654209468721);
      }

      .image-keyboard_icon_apple_tv {
        width: 25px;
        height: 25px;
        background-size: 25px 25px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_large.png?1654209468721);
      }

      .image-display_icon_true_tone {
        width: 44px;
        height: 44px;
        background-size: 44px 44px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_large.png?1654209468721);
      }

      .image-keyboard {
        width: 1366px;
        height: 797px;
        background-size: 1366px 797px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_large.png?1654209468721);
      }

      .image-why_icon_powerful {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_large.png?1654209468721);
      }

      .image-keyboard_icon_password {
        width: 21px;
        height: 27px;
        background-size: 21px 27px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_large.png?1654209468721);
      }

      .image-connectivity_icon_headphone {
        width: 26px;
        height: 26px;
        background-size: 26px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_large.png?1654209468722);
      }

      .image-camera_icon_facetime {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_large.png?1654209468722);
      }

      .image-connectivity {
        width: 3008px;
        height: 340px;
        background-size: 3008px 340px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_large.png?1654209468723);
      }

      .image-display_icon_brightness {
        width: 44px;
        height: 44px;
        background-size: 44px 44px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_large.png?1654209468723);
      }

      .image-hero_m2 {
        width: 132px;
        height: 105px;
        background-size: 132px 105px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_large.png?1654209468723);
      }

      .image-why_icon_connected {
        width: 76px;
        height: 42px;
        background-size: 76px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_large.png?1654209468723);
      }

      .image-performance_m2 {
        width: 452px;
        height: 451px;
        background-size: 452px 451px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_large.png?1654209468723);
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera {
          width: 931px;
          height: 541px;
          background-size: 931px 541px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_large_2x.png?1654209468714);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m2_13_spacegray {
          width: 151px;
          height: 89px;
          background-size: 151px 89px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m2_13_spacegray_large_2x.png?1654209468714);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_connected {
          width: 76px;
          height: 42px;
          background-size: 76px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_large_2x.png?1654209468714);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_touch_bar_id {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_touch_bar_id_large_2x.png?1654209468714);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_M1_chip {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M1_chip_large_2x.png?1654209468714);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_large_2x.png?1654209468715);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_true_tone {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_large_2x.png?1654209468715);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_applecare {
          width: 424px;
          height: 240px;
          background-size: 424px 240px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_large_2x.png?1654209468715);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity {
          width: 3008px;
          height: 340px;
          background-size: 3008px 340px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_large_2x.png?1654209468715);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_large_2x.png?1654209468716);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_air_m2_13_midnight {
          width: 146px;
          height: 89px;
          background-size: 146px 89px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m2_13_midnight_large_2x.png?1654209468716);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_password {
          width: 21px;
          height: 27px;
          background-size: 21px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_large_2x.png?1654209468716);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_large_2x.png?1654209468717);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_large_2x.png?1654209468717);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_large_2x.png?1654209468718);
        }
      }
      
      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_large_2x.png?1653935003477);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_wi-fi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_large_2x.png?1654209468718);
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
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_large_2x.png?1654209468718);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_brightness {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_large_2x.png?1654209468718);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 40px;
          background-size: 41px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_large_2x.png?1654209468719);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_air_m1_spacegray {
          width: 155px;
          height: 90px;
          background-size: 155px 90px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m1_spacegray_large_2x.png?1654209468719);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_color {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_large_2x.png?1654209468719);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_m2 {
          width: 132px;
          height: 105px;
          background-size: 132px 105px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_large_2x.png?1654209468719);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_large_2x.png?1654209468719);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_tv {
          width: 25px;
          height: 25px;
          background-size: 25px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_large_2x.png?1654209468720);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_large_2x.png?1654209468720);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 167px;
          height: 104px;
          background-size: 167px 104px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_16_spacegray_large_2x.png?1654209468720);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_icon_swirl {
          width: 28px;
          height: 26px;
          background-size: 28px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_large_2x.png?1654209468720);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_easy {
          width: 74px;
          height: 42px;
          background-size: 74px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_large_2x.png?1654209468720);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_accessories {
          width: 626px;
          height: 284px;
          background-size: 626px 284px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_large_2x.png?1654209468721);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard {
          width: 1366px;
          height: 797px;
          background-size: 1366px 797px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_large_2x.png?1654209468721);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_m2 {
          width: 452px;
          height: 451px;
          background-size: 452px 451px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_large_2x.png?1654209468721);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m1_14_spacegray {
          width: 152px;
          height: 94px;
          background-size: 152px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_14_spacegray_large_2x.png?1654209468721);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display {
          width: 931px;
          height: 541px;
          background-size: 931px 541px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_large_2x.png?1654209468722);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_touch_id {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_touch_id_large_2x.png?1654209468722);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_M2_chip {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M2_chip_large_2x.png?1654209468723);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_logo {
          width: 264px;
          height: 34px;
          background-size: 264px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_large_2x.png?1654209468723);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_large_2x.png?1654209468723);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_M1_Max_M1_Pro {
          width: 94px;
          height: 42px;
          background-size: 94px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/icon_M1_Max_M1_Pro_large_2x.png?1654209468723);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero {
          width: 1785px;
          height: 1202px;
          background-size: 1785px 1202px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_large_2x.png?1654209468724);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_true_tone {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_medium.png?1654209468714);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_medium.png?1654209468714);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_medium.png?1654209468714);
        }
      }
      
      @media only screen and (max-width:1068px) {
        .image-app_store {
          width: 26px;
          height: 23px;
          background-size: 26px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/app_store_medium.png);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display {
          width: 563px;
          height: 373px;
          background-size: 563px 373px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_medium.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_medium.png?1654209468716);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity {
          width: 1068px;
          height: 243px;
          background-size: 1068px 243px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_medium.png?1654209468717);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_medium.png?1654209468717);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_color {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_medium.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_logo {
          width: 213px;
          height: 28px;
          background-size: 213px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_medium.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_password {
          width: 22px;
          height: 27px;
          background-size: 22px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_medium.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_wi-fi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_medium.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_medium.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_medium.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_m2 {
          width: 70px;
          height: 70px;
          background-size: 70px 70px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_medium.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_brightness {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_medium.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_swirl {
          width: 28px;
          height: 26px;
          background-size: 28px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_medium.png?1654209468720);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_medium.png?1654209468720);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_medium.png?1654209468720);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_m2 {
          width: 322px;
          height: 322px;
          background-size: 322px 322px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_medium.png?1654209468720);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard {
          width: 603px;
          height: 366px;
          background-size: 603px 366px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_medium.png?1654209468721);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero {
          width: 1068px;
          height: 897px;
          background-size: 1068px 897px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_medium.png?1654209468721);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_tv {
          width: 25px;
          height: 25px;
          background-size: 25px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_medium.png?1654209468721);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera {
          width: 567px;
          height: 373px;
          background-size: 567px 373px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_medium.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_medium.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_applecare {
          width: 288px;
          height: 164px;
          background-size: 288px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_medium.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_medium.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 40px;
          background-size: 41px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_medium.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_connected {
          width: 75px;
          height: 42px;
          background-size: 75px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_medium.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_medium.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_m2 {
          width: 70px;
          height: 70px;
          background-size: 70px 70px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_medium_2x.png?1654209468714);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera {
          width: 567px;
          height: 373px;
          background-size: 567px 373px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_medium_2x.png?1654209468714);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_medium_2x.png?1654209468715);
        }
      }
      
      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-app_store {
          width: 26px;
          height: 23px;
          background-size: 26px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/app_store_medium_2x.png);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_medium_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_medium_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_medium_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_medium_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 213px;
          height: 28px;
          background-size: 213px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_medium_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_color {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_medium_2x.png?1654209468716);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 40px;
          background-size: 41px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_medium_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_medium_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_password {
          width: 22px;
          height: 27px;
          background-size: 22px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_medium_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_medium_2x.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_medium_2x.png?1654209468718);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 1068px;
          height: 243px;
          background-size: 1068px 243px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_medium_2x.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_icon_swirl {
          width: 28px;
          height: 26px;
          background-size: 28px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_medium_2x.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_medium_2x.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display {
          width: 563px;
          height: 373px;
          background-size: 563px 373px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_medium_2x.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_m2 {
          width: 322px;
          height: 322px;
          background-size: 322px 322px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_medium_2x.png?1654209468719);
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
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_medium_2x.png?1654209468719);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_connected {
          width: 75px;
          height: 42px;
          background-size: 75px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_medium_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_true_tone {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_medium_2x.png?1654209468721);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero {
          width: 1068px;
          height: 897px;
          background-size: 1068px 897px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_medium_2x.png?1654209468721);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 288px;
          height: 164px;
          background-size: 288px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_medium_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard {
          width: 603px;
          height: 366px;
          background-size: 603px 366px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_medium_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_medium_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_wi-fi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_medium_2x.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_medium_2x.png?1654209468723);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 25px;
          height: 25px;
          background-size: 25px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_medium_2x.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero {
          width: 547px;
          height: 392px;
          background-size: 547px 392px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_small.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_small.png?1654209468716);
        }
      }
      
      @media only screen and (max-width:734px) {
        .image-app_store {
          width: 26px;
          height: 23px;
          background-size: 26px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/app_store_small.png);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_applecare {
          width: 282px;
          height: 160px;
          background-size: 282px 160px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_small.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_small.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_small.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity {
          width: 734px;
          height: 144px;
          background-size: 734px 144px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_small.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_password {
          width: 22px;
          height: 27px;
          background-size: 22px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_small.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_small.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m2_13_midnight {
          width: 118px;
          height: 72px;
          background-size: 118px 72px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m2_13_midnight_small.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_small.png?1654209468718);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_true_tone {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_small.png?1654209468718);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_tv {
          width: 25px;
          height: 25px;
          background-size: 25px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_small.png?1654209468718);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_small.png?1654209468719);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display {
          width: 402px;
          height: 234px;
          background-size: 402px 234px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_small.png?1654209468719);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_small.png?1654209468719);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_small.png?1654209468719);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 133px;
          height: 83px;
          background-size: 133px 83px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_16_spacegray_small.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera {
          width: 402px;
          height: 234px;
          background-size: 402px 234px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_small.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_connected {
          width: 76px;
          height: 42px;
          background-size: 76px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_small.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_small.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_wi-fi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_small.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_brightness {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_small.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_m2 {
          width: 66px;
          height: 65px;
          background-size: 66px 65px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_small.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_logo {
          width: 137px;
          height: 19px;
          background-size: 137px 19px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_small.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard {
          width: 508px;
          height: 195px;
          background-size: 508px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_small.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_14_spacegray {
          width: 121px;
          height: 74px;
          background-size: 121px 74px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_14_spacegray_small.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_small.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_swirl {
          width: 28px;
          height: 26px;
          background-size: 28px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m2_13_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m2_13_spacegray_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 40px;
          background-size: 41px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_m2 {
          width: 196px;
          height: 196px;
          background-size: 196px 196px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_color {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_small.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m1_spacegray {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m1_spacegray_small.png?1654209468724);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_facetime_small_2x.png?1654209468714);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_color {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_color_small_2x.png?1654209468714);
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
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_14_spacegray_small_2x.png?1654209468714);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 40px;
          background-size: 41px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_touch_id_small_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 133px;
          height: 83px;
          background-size: 133px 83px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m1_16_spacegray_small_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_true_tone {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_true_tone_small_2x.png?1654209468715);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_pay_small_2x.png?1654209468715);
        }
      }
      
      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-app_store {
          width: 26px;
          height: 23px;
          background-size: 26px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/app_store_small_2x.png);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_password {
          width: 22px;
          height: 27px;
          background-size: 22px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_password_small_2x.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_unlock_small_2x.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 282px;
          height: 160px;
          background-size: 282px 160px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_applecare_small_2x.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_air_m2_13_midnight {
          width: 118px;
          height: 72px;
          background-size: 118px 72px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m2_13_midnight_small_2x.png?1654209468716);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_easy_small_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard {
          width: 508px;
          height: 195px;
          background-size: 508px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_small_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera {
          width: 402px;
          height: 234px;
          background-size: 402px 234px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_small_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_icon_swirl {
          width: 28px;
          height: 26px;
          background-size: 28px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_swirl_small_2x.png?1654209468717);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 44px;
          height: 44px;
          background-size: 44px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_icon_brightness_small_2x.png?1654209468718);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 25px;
          height: 25px;
          background-size: 25px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/keyboard_icon_apple_tv_small_2x.png?1654209468718);
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
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_checkmark_apple_care_small_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/camera_icon_mic_small_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_m2 {
          width: 66px;
          height: 65px;
          background-size: 66px 65px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_m2_small_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero {
          width: 547px;
          height: 392px;
          background-size: 547px 392px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_small_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 137px;
          height: 19px;
          background-size: 137px 19px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/hero_logo_small_2x.png?1654209468720);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_m2_13_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_pro_m2_13_spacegray_small_2x.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 734px;
          height: 144px;
          background-size: 734px 144px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_small_2x.png?1654209468721);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_connected {
          width: 76px;
          height: 42px;
          background-size: 76px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_connected_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/why_icon_powerful_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_icon_battery_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display {
          width: 402px;
          height: 234px;
          background-size: 402px 234px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/display_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_air_m1_spacegray {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/compare_macbook_air_m1_spacegray_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_thunderbolt_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_headphone_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_accessories {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/flex_accessories_small_2x.png?1654209468722);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_m2 {
          width: 196px;
          height: 196px;
          background-size: 196px 196px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/performance_m2_small_2x.png?1654209468723);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_wi-fi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookpro_13_m2/connectivity_icon_wi-fi_small_2x.png?1654209468723);
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

      .channel-html .channel-custom-font-custom-96-headline-super {
        font-size: 96px;
        line-height: 106px;
        letter-spacing: -0.014rem;
        font-weight: 700;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-96-headline-super {
          font-size: 72px;
          line-height: 79px;
          letter-spacing: -0.012rem;
          font-weight: 600;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-96-headline-super {
          font-size: 40px;
          line-height: 44px;
          letter-spacing: 0rem;
          font-weight: 600;
        }
      }

      .channel-html .channel-custom-font-custom-64-badge {
        font-size: 64px;
        line-height: 64px;
        letter-spacing: -0.009rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-64-badge {
          font-size: 40px;
          line-height: 40px;
          letter-spacing: 0rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-64-badge {
          font-size: 40px;
          line-height: 40px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .channel-custom-font-custom-24-callout {
        font-size: 32px;
        line-height: 36px;
        letter-spacing: 0rem;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-24-callout {
          font-size: 24px;
          line-height: 28px;
          letter-spacing: 0rem;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-24-callout {
          font-size: 21px;
          line-height: 25px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .channel-custom-font-custom-48-badge {
        font-size: 48px;
        line-height: 52px;
        letter-spacing: -0.003rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-48-badge {
          font-size: 40px;
          line-height: 44px;
          letter-spacing: 0rem;
        }
      }

      .channel-html .r506029 {
        background-color: #000000;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .d22ECA2 {
        /** alignment */
        /** Margin */
        margin-top: 75px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d22ECA2 {
          margin-top: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d22ECA2 {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d22ECA2 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d22ECA2 {
          margin-bottom: 45px;
        }
      }

      .channel-html .d946572 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d946572 {
          order: 2;
        }
      }

      .channel-html .g480D87 {
        /** alignment */
        justify-content: center;
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .fA6C9AF {
        /** Margin */
        margin-top: -644px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fA6C9AF {
          margin-top: -482px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fA6C9AF {
          margin-top: -185px;
        }
      }

      .channel-html .f5C14E0 {
        /** Margin */
        margin-bottom: 25px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f5C14E0 {
          margin-bottom: 31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f5C14E0 {
          margin-bottom: 12px;
        }
      }

      .channel-html .r7B011E {
        color: #ffffff;
        margin-top: -600px;
        margin-bottom: 40px;
        padding-left: 82px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r7B011E {
          margin-top: -448px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r7B011E {
          margin-top: -157px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r7B011E {
          margin-bottom: 32px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r7B011E {
          margin-bottom: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r7B011E {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r7B011E {
          padding-right: 0px;
        }
      }

      .channel-html .r7B011E {
        background: radial-gradient(ellipse 30% 100% at 50% 16%, #EFF1FF 0%, #5F6065 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .r7B011E [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .r7B011E * {
        background: inherit;
      }

      .channel-html .w7CCF40 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-bottom: 15px;
        padding-left: 116px;
        padding-right: 116px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7CCF40 {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7CCF40 {
          margin-bottom: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7CCF40 {
          margin-bottom: 17px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7CCF40 {
          padding-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7CCF40 {
          padding-left: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7CCF40 {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7CCF40 {
          padding-right: 5px;
        }
      }

      .channel-html .t981FA3 {
        /** alignment */
        /** Margin */
        margin-bottom: 15px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t981FA3 {
          margin-bottom: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t981FA3 {
          margin-bottom: 22px;
        }
      }

      .channel-html .cA66D50 {
        /** Margin */
        margin-left: 20px;
        /** Padding */
        padding-top: 35px;
        padding-right: 0px;
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cA66D50 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cA66D50 {
          padding-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cA66D50 {
          padding-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cA66D50 {
          padding-right: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cA66D50 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cA66D50 {
          text-align: center;
        }
      }

      .channel-html .u2C4D62 {
        color: #f5f5f7;
      }

      .channel-html .k2E2D8C {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k2E2D8C {
          margin-left: -12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2E2D8C {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2E2D8C {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2E2D8C {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2E2D8C {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2E2D8C {
          text-align: center;
        }
      }

      .channel-html .q1B004B {
        /** Margin */
        margin-top: 0px;
        margin-left: -16px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q1B004B {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q1B004B {
          margin-left: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q1B004B {
          margin-left: 109px;
        }
      }

      .channel-html .l368A1D {
        color: #f5f5f7;
        margin-top: 0px;
        margin-bottom: 21px;
        padding-left: 164px;
        padding-right: 164px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l368A1D {
          margin-bottom: 16px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l368A1D {
          margin-bottom: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l368A1D {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l368A1D {
          padding-right: 0px;
        }
      }

      .channel-html .t6F9378 {
        /** Color */
        color: #86868b;
        border: solid 1px #6e6e73;
      }

      .channel-html .v1FFC18 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v1FFC18 {
          order: 1;
        }
      }

      .channel-html .v6C4D7F {
        /** Margin */
        margin-top: -74px;
        margin-left: -402px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v6C4D7F {
          margin-top: -54px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v6C4D7F {
          margin-top: -45px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v6C4D7F {
          margin-left: -190px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v6C4D7F {
          margin-left: -133px;
        }
      }

      .channel-html .hCD1BA9 {
        background-color: #000;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .b9586CB {
        /** alignment */
        /** Margin */
        margin-top: 103px;
        margin-bottom: 135px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b9586CB {
          margin-top: 129px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b9586CB {
          margin-top: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b9586CB {
          margin-bottom: 80px;
        }
      }

      .channel-html .u0BC10E {
        /** Margin */
        /** Padding */
        padding-left: 200px;
        padding-right: 200px;
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        z-index: 10;
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0BC10E {
          padding-left: 105px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0BC10E {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0BC10E {
          padding-right: 105px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0BC10E {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0BC10E {
          text-align: center;
        }
      }

      .channel-html .a34913F {
        color: #f5f5f7;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a34913F {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a34913F {
          margin-bottom: 7px;
        }
      }

      .channel-html .tEA5493 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEA5493 {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tEA5493 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tEA5493 {
          margin-bottom: 24px;
        }
      }

      .channel-html .p3E250A {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p3E250A {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p3E250A {
          margin-bottom: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p3E250A {
          padding-left: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p3E250A {
          padding-left: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p3E250A {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p3E250A {
          padding-right: 5px;
        }
      }

      .channel-html .e4DDF6B {
        /** Margin */
        margin-top: -20px;
        /** Padding */
        padding-left: 163px;
        padding-right: 163px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        z-index: 1;
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e4DDF6B {
          margin-top: -10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e4DDF6B {
          padding-left: 129px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4DDF6B {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e4DDF6B {
          padding-right: 129px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4DDF6B {
          padding-right: 0px;
        }
      }

      .channel-html .w405161 {
        /** alignment */
        align-items: center;
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .h387478 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .pC8A756 {
        /** Margin */
        margin-left: -20px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pC8A756 {
          margin-top: -18px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pC8A756 {
          margin-left: -34px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pC8A756 {
          margin-left: 41px;
        }
      }

      .channel-html .qC093D6 {
        /** Margin */
        /** Padding */
        padding-top: 20px;
        padding-left: 81px;
        padding-bottom: 22px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qC093D6 {
          margin-top: -10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qC093D6 {
          padding-top: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qC093D6 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qC093D6 {
          padding-left: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qC093D6 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qC093D6 {
          padding-bottom: 12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qC093D6 {
          padding-bottom: 0px;
        }
      }

      .channel-html .g55E334 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .n77B354 {
        /** Margin */
        /** Padding */
        padding-right: 50px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n77B354 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n77B354 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n77B354 {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n77B354 {
          text-align: center;
        }
      }

      .channel-html .eA45CAC {
        color: #f5f5f7;
        margin-bottom: 2px;
      }

      .channel-html .l1A4653 {
        color: #f5f5f7;
        margin-top: -2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l1A4653 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l1A4653 {
          margin-top: 3px;
        }
      }

      .channel-html .t72D1CB {
        color: #f5f5f7;
        margin-top: -2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t72D1CB {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t72D1CB {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t72D1CB {
          padding-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t72D1CB {
          padding-right: 10px;
        }
      }

      .channel-html .r1B9617 {
        /** Margin */
        /** Padding */
        padding-top: 32px;
        padding-right: 50px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r1B9617 {
          padding-top: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1B9617 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r1B9617 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1B9617 {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1B9617 {
          text-align: center;
        }
      }

      .channel-html .r1AAE2D {
        color: #f5f5f7;
        margin-bottom: 2px;
      }

      .channel-html .q1FAB32 {
        color: #f5f5f7;
        margin-top: -2px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q1FAB32 {
          margin-top: 3px;
        }
      }

      .channel-html .iB92DC8 {
        color: #f5f5f7;
        margin-top: -2px;
        padding-right: 80px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iB92DC8 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iB92DC8 {
          padding-left: 5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iB92DC8 {
          padding-right: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iB92DC8 {
          padding-right: 0px;
        }
      }

      .channel-html .p0838D1 {
        /** Margin */
        margin-top: -22px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        z-index: 10;
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p0838D1 {
          margin-top: -12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p0838D1 {
          margin-top: 16px;
        }
      }

      .channel-html .fB2961F {
        justify-content: center;
        /** Margin */
        margin-bottom: 15px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fB2961F {
          margin-bottom: 18px;
        }
      }

      .channel-html .fB2961F .liner {
        background-color: #424245;
        width: 582px;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fB2961F .liner {
          width: 462px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fB2961F .liner {
          width: 206px;
        }
      }

      .channel-html .n25F53C {
        /** alignment */
        align-items: center;
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .lFFA951 {
        /** Margin */
        /** Padding */
        padding-left: 36px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lFFA951 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lFFA951 {
          padding-left: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lFFA951 {
          padding-right: 37px;
        }
      }

      .channel-html .oC34507 {
        /** alignment */
        align-items: center;
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .p8FEAD9 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .kCC2258 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tFAE91A {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .f842E88 {
        color: #f5f5f7;
        padding-left: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f842E88 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f842E88 {
          padding-left: 30px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f842E88 {
          padding-right: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f842E88 {
          padding-right: 0px;
        }
      }

      .channel-html .n5C296B {
        /** Margin */
        /** Padding */
        padding-left: 36px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n5C296B {
          margin-top: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n5C296B {
          padding-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n5C296B {
          padding-left: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n5C296B {
          padding-right: 37px;
        }
      }

      .channel-html .wEE0300 {
        /** alignment */
        align-items: center;
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .v740A9B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .jDF9BFB {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .i19CE2D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v9152FB {
        color: #f5f5f7;
        padding-left: 22px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v9152FB {
          padding-left: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v9152FB {
          padding-left: 30px;
        }
      }

      .channel-html .v59f41d {
        background-color: #000000;
        align-items: center;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c5cf767 {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 124px;
        margin-bottom: 130px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c5cf767 {
          align-items: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c5cf767 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c5cf767 {
          margin-top: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c5cf767 {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c5cf767 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c5cf767 {
          margin-bottom: 102px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c5cf767 {
          margin-bottom: 45px;
        }
      }

      .channel-html .r126012 {
        /** Margin */
        /** Padding */
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r126012 {
          padding-right: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r126012 {
          padding-right: 0px;
        }
      }

      .channel-html .t37940b {
        color: #f5f5f7;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t37940b {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t37940b {
          margin-bottom: 7px;
        }
      }

      .channel-html .u4c22d3 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u4c22d3 {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4c22d3 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4c22d3 {
          margin-bottom: 24px;
        }
      }

      .channel-html .e9a1c4b {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9a1c4b {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9a1c4b {
          margin-bottom: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e9a1c4b {
          padding-right: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9a1c4b {
          padding-right: 45px;
        }
      }

      .channel-html .y58B5B3 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .d282A93 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .u26DFCC {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u26DFCC {
          margin-bottom: 20px;
        }
      }

      .channel-html .t3F0C2A {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 33px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3F0C2A {
          margin-top: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3F0C2A {
          margin-top: 25px;
        }
      }

      .channel-html .o701C73 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r809D94 {
        /** Margin */
        margin-top: 5px;
        margin-left: -2px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r809D94 {
          margin-left: -1px;
        }
      }

      .channel-html .w87B907 {
        /** Margin */
        /** Padding */
        padding-left: 25px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w87B907 {
          padding-left: 34px;
        }
      }

      .channel-html .fBF5A41 {
        color: #f5f5f7;
      }

      .channel-html .a9430B1 {
        color: #f5f5f7;
        margin-top: 0px;
      }

      .channel-html .i5AEC7B {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 21px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i5AEC7B {
          margin-top: 23px;
        }
      }

      .channel-html .g7FDD9A {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tEA29B5 {
        /** Margin */
        margin-top: 5px;
        margin-left: -2px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEA29B5 {
          margin-left: 0px;
        }
      }

      .channel-html .y50EF16 {
        /** Margin */
        /** Padding */
        padding-left: 25px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y50EF16 {
          padding-left: 34px;
        }
      }

      .channel-html .b703CCD {
        color: #f5f5f7;
      }

      .channel-html .pA9D5AE {
        color: #f5f5f7;
        margin-top: 0px;
      }

      .channel-html .s8D8C62 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 21px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s8D8C62 {
          margin-top: 23px;
        }
      }

      .channel-html .oC6E84F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t3AD723 {
        /** Margin */
        margin-top: 5px;
        margin-left: -2px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3AD723 {
          margin-left: -1px;
        }
      }

      .channel-html .hC22AA2 {
        /** Margin */
        /** Padding */
        padding-left: 25px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hC22AA2 {
          padding-left: 34px;
        }
      }

      .channel-html .iCDA7B5 {
        color: #f5f5f7;
      }

      .channel-html .hF3FF45 {
        color: #f5f5f7;
        margin-top: 0px;
      }

      .channel-html .df53568 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w63a149 {
        /** Margin */
        margin-top: 17px;
        margin-left: -6px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w63a149 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w63a149 {
          margin-left: -31px;
        }
      }

      .channel-html .fd78a97 {
        background-color: #000000;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r17d58c {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 135px;
        margin-bottom: 130px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r17d58c {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r17d58c {
          margin-top: 67px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r17d58c {
          margin-top: 75px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r17d58c {
          margin-bottom: 102px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r17d58c {
          margin-bottom: 38px;
        }
      }

      .channel-html .q09f05b {
        /** Margin */
        /** Padding */
        padding-left: 84px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q09f05b {
          padding-left: 58px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q09f05b {
          padding-left: 0px;
        }
      }

      .channel-html .t303709 {
        color: #f5f5f7;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t303709 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t303709 {
          margin-bottom: 7px;
        }
      }

      .channel-html .r101c0b {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r101c0b {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r101c0b {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r101c0b {
          margin-bottom: 25px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r101c0b {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r101c0b {
          padding-right: 0px;
        }
      }

      .channel-html .be63cc8 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .be63cc8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .be63cc8 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .be63cc8 {
          padding-right: 35px;
        }
      }

      .channel-html .y8de7c8 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8de7c8 {
          margin-top: 40px;
        }
      }

      .channel-html .y8bcc40 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q01ed66 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q01ed66 {
          margin-left: -120px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q01ed66 {
          margin-bottom: 30px;
        }
      }

      .channel-html .a7EC102 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 37px;
        margin-left: -2px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a7EC102 {
          margin-top: 31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a7EC102 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a7EC102 {
          margin-left: -1px;
        }
      }

      .channel-html .a4E425E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .cFE2362 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wEF562B {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .cC166C5 {
        color: #f5f5f7;
        padding-left: 15px;
        padding-right: 110px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC166C5 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC166C5 {
          padding-left: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC166C5 {
          padding-right: 0px;
        }
      }

      .channel-html .y1AB16A {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 27px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y1AB16A {
          margin-top: 26px;
        }
      }

      .channel-html .r328E2E {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .l201EF1 {
        /** Margin */
        margin-left: 3px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l201EF1 {
          margin-left: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l201EF1 {
          margin-left: 5px;
        }
      }

      .channel-html .fA8A099 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .eB182FA {
        color: #f5f5f7;
        padding-left: 14px;
        padding-right: 125px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eB182FA {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eB182FA {
          padding-left: 25px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eB182FA {
          padding-right: 0px;
        }
      }

      .channel-html .b08bd26 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v5bd97d {
        /** Margin */
        margin-left: -389px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5bd97d {
          margin-left: -188px;
        }
      }

      .channel-html .v5c3f55 {
        background-color: #000000;
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w6a5c91 {
        /** alignment */
        /** Margin */
        margin-top: 133px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6a5c91 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6a5c91 {
          margin-top: 67px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6a5c91 {
          margin-top: 82px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6a5c91 {
          margin-bottom: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6a5c91 {
          margin-bottom: 65px;
        }
      }

      .channel-html .q0695ee {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v5a8bdc {
        color: #f5f5f7;
        margin-left: -1.5px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5a8bdc {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5a8bdc {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5a8bdc {
          padding-right: 0px;
        }
      }

      .channel-html .s2f5189 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 57px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2f5189 {
          margin-bottom: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2f5189 {
          margin-bottom: 38px;
        }
      }

      .channel-html .r1983ae {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1983ae {
          margin-bottom: 24px;
        }
      }

      .channel-html .w69826b {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -3px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w69826b {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w69826b {
          margin-left: -2px;
        }
      }

      .channel-html .f2b03b0 {
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
        .channel-html .f2b03b0 {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f2b03b0 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f2b03b0 {
          padding-left: 58px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f2b03b0 {
          padding-left: 0px;
        }
      }

      .channel-html .y8138e3 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8138e3 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8138e3 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8138e3 {
          padding-right: 35px;
        }
      }

      .channel-html .e715C93 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .x0CE7AD {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .q0d8498 {
        /** Margin */
        margin-left: -787px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0d8498 {
          margin-top: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0d8498 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0d8498 {
          margin-left: -188px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0d8498 {
          margin-left: -227px;
        }
      }

      .channel-html .o5BF56B {
        /** Margin */
        /** Padding */
        padding-top: 47px;
        padding-left: 2px;
        padding-bottom: 60px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o5BF56B {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o5BF56B {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o5BF56B {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o5BF56B {
          padding-bottom: 0px;
        }
      }

      .channel-html .a1459F0 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 33px;
        margin-left: -2px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a1459F0 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a1459F0 {
          margin-top: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a1459F0 {
          margin-left: 0px;
        }
      }

      .channel-html .f850DE5 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .aA4A4D7 {
        /** Margin */
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aA4A4D7 {
          margin-left: -1px;
        }
      }

      .channel-html .h2357E1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .i6CD3E3 {
        color: #f5f5f7;
        padding-left: 24px;
        padding-right: 175px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i6CD3E3 {
          padding-left: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i6CD3E3 {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i6CD3E3 {
          padding-right: 50px;
        }
      }

      .channel-html .c6F9D0D {
        justify-content: flex-start;
        /** Margin */
        margin-top: 7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c6F9D0D {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c6F9D0D {
          margin-top: 5px;
        }
      }

      .channel-html .c6F9D0D .liner {
        background-color: #424245;
        width: 225px;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c6F9D0D .liner {
          width: 280px;
        }
      }

      .channel-html .b3EDDDB {
        margin-left: 0px;
      }

      .channel-html .x63EFBA {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 15px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x63EFBA {
          margin-top: 16px;
        }
      }

      .channel-html .bB90769 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .zF65F47 {
        /** Margin */
        margin-left: 7px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zF65F47 {
          margin-left: 10px;
        }
      }

      .channel-html .k6EF9AA {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .s03B7A6 {
        color: #f5f5f7;
        padding-left: 22px;
        padding-right: 175px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s03B7A6 {
          padding-left: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s03B7A6 {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s03B7A6 {
          padding-right: 50px;
        }
      }

      .channel-html .s58E7A6 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 19px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s58E7A6 {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s58E7A6 {
          margin-top: 19px;
        }
      }

      .channel-html .xB8AAEA {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j3CFCD6 {
        /** Margin */
        margin-left: 7px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j3CFCD6 {
          margin-left: 7px;
        }
      }


      .channel-html .v365069 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .vEC1907 {
        color: #f5f5f7;
        padding-left: 22px;
        padding-right: 240px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vEC1907 {
          padding-left: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vEC1907 {
          padding-right: 120px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vEC1907 {
          padding-right: 115px;
        }
      }

      .channel-html .oB51986 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 23px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB51986 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB51986 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB51986 {
          margin-left: -1px;
        }
      }

      .channel-html .i7548EE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .r9F1209 {
        /** Margin */
        margin-left: 6px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r9F1209 {
          margin-left: 10px;
        }
      }

      .channel-html .hB9F449 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .i2F9955 {
        color: #f5f5f7;
        padding-left: 22px;
        padding-right: 190px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i2F9955 {
          padding-left: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i2F9955 {
          padding-right: 90px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i2F9955 {
          padding-right: 60px;
        }
      }

      .channel-html .k1AA34D {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 23px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k1AA34D {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k1AA34D {
          margin-top: 23px;
        }
      }

      .channel-html .yCC1E17 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .eDEE889 {
        /** Margin */
        margin-left: 4px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eDEE889 {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eDEE889 {
          margin-left: 6px;
        }
      }

      .channel-html .h29F2AD {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v47F6B4 {
        color: #f5f5f7;
        padding-left: 22px;
        padding-right: 205px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v47F6B4 {
          padding-left: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v47F6B4 {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v47F6B4 {
          padding-right: 80px;
        }
      }

      .channel-html .p87BA8D {
        background-color: #000000;
        /** Margin */
        margin-top: -59px;
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p87BA8D {
          margin-top: -80px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p87BA8D {
          margin-top: -35px;
        }
      }

      .channel-html .v19664A {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 132px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v19664A {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v19664A {
          margin-top: 93px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v19664A {
          margin-top: 93px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v19664A {
          margin-bottom: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v19664A {
          margin-bottom: 71px;
        }
      }

      .channel-html .w15DFEE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wC8231A {
        color: #f5f5f7;
        margin-top: -177px;
        margin-left: -1.5px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wC8231A {
          margin-top: -109px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wC8231A {
          margin-top: -60px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wC8231A {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wC8231A {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wC8231A {
          padding-right: 0px;
        }
      }

      .channel-html .i050DB3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .x8F0573 {
        /** Margin */
        margin-left: -1016px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x8F0573 {
          margin-left: -188px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x8F0573 {
          margin-left: -226px;
        }
      }

      .channel-html .h9FEA77 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .g9312AE {
        /** alignment */
        /** Margin */
        margin-top: -137px;
        margin-bottom: 71px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g9312AE {
          margin-top: -73px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g9312AE {
          margin-top: -27px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g9312AE {
          margin-bottom: 53px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g9312AE {
          margin-bottom: 38px;
        }
      }

      .channel-html .dCCCE10 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dCCCE10 {
          margin-bottom: 27px;
        }
      }

      .channel-html .f7392AA {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -3px;
        margin-bottom: 26px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f7392AA {
          margin-left: -2.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7392AA {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f7392AA {
          margin-bottom: 25px;
        }
      }

      .channel-html .rC72CB8 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -1.5px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rC72CB8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rC72CB8 {
          padding-right: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rC72CB8 {
          padding-right: 20px;
        }
      }

      .channel-html .o716959 {
        /** Margin */
        margin-top: 29px;
        /** Padding */
        padding-left: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o716959 {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o716959 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o716959 {
          padding-left: 58px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o716959 {
          padding-left: 0px;
        }
      }

      .channel-html .wA1A37E {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .qB09B79 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j5EFE7B {
        /** Margin */
        margin-left: px;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .aE08E5F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .jA83036 {
        color: #f5f5f7;
        padding-left: 11px;
        padding-right: 175px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jA83036 {
          padding-left: 20px;
        }
      }

      .channel-html .vDF72F3 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 24px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vDF72F3 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vDF72F3 {
          margin-top: 25px;
        }
      }

      .channel-html .yF012D3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .a1B43A1 {
        /** Margin */
        margin-left: 8px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a1B43A1 {
          margin-left: 6px;
        }
      }

      .channel-html .o581BB9 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z5FA7E8 {
        color: #f5f5f7;
        padding-left: 11px;
        padding-right: 175px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z5FA7E8 {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z5FA7E8 {
          padding-right: 50px;
        }
      }

      .channel-html .b460D8B {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 19px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b460D8B {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b460D8B {
          margin-top: 19px;
        }
      }

      .channel-html .m45EF0F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .mC66A54 {
        /** Margin */
        margin-left: 1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mC66A54 {
          margin-left: 0px;
        }
      }

      .channel-html .kB8FA42 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .p0AFF10 {
        color: #f5f5f7;
        padding-left: 11px;
        padding-right: 175px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p0AFF10 {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p0AFF10 {
          padding-right: 50px;
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
        margin-top: 50px;
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
          margin-top: 50px;
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
        margin-bottom: 36px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q02c985 {
          margin-bottom: 36px;
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

      .channel-html .ecd1114 {
        /** Margin */
        /** Padding */
        padding-right: 50px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          margin-bottom: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ecd1114 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          padding-right: 10px;
        }
      }

      .channel-html .w6189bf {
        /** Margin */
        margin-bottom: 14px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-bottom: 12px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-bottom: 14px;
        }
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

      .channel-html .c3c737c {
        /** Margin */
        /** Padding */
        padding-right: 65px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3c737c {
          margin-bottom: 44px;
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
          padding-right: 5px;
        }
      }

      .channel-html .x7471c6 {
        /** Margin */
        margin-bottom: 15px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-bottom: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7471c6 {
          margin-bottom: 14px;
        }
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
          padding-right: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          padding-right: 20px;
        }
      }

      .channel-html .ec88939 {
        /** Margin */
        /** Padding */
        padding-right: 41px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ec88939 {
          padding-right: 35px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          padding-right: 10px;
        }
      }

      .channel-html .t34db34 {
        /** Margin */
        margin-bottom: 14px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-bottom: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-bottom: 15px;
        }
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
        padding-right: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          padding-right: 0px;
        }
      }

      .channel-html .rAA6C6D {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tB87813 {
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
        .channel-html .tB87813 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB87813 {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tB87813 {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB87813 {
          padding-top: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB87813 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tB87813 {
          padding-bottom: 62px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB87813 {
          padding-bottom: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB87813 {
          padding-right: 50vw;
        }
      }

      .channel-html .tB87813.large-display-bleed::before,
      .channel-html .tB87813.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .tB87813.medium-display-bleed::before,
      .channel-html .tB87813.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .tB87813.small-display-bleed::before,
      .channel-html .tB87813.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .w1AAB6D {
        /** Margin */
        margin-bottom: 48px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w1AAB6D {
          margin-bottom: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w1AAB6D {
          margin-bottom: 18px;
        }
      }

      .channel-html .c135C2C {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c135C2C {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c135C2C {
          margin-bottom: 7px;
        }
      }

      .channel-html .iA7E434 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iA7E434 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA7E434 {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA7E434 {
          padding-right: 60px;
        }
      }

      .kC58739 {
        width: 100%;
        --columns: 5;
        --grid-column: 5;
        --static-enabled: true;
        --column-data: 0, 21, 22, 1, 2, 0, 21, 22, 21, 22;
        --allowed-columns: 5, 3, 2;
      }

      .kC58739 .compare-column-0 {
        display: flex;
        order: 1;
      }

      .kC58739 .compare-column-1 {
        display: flex;
        order: 2;
      }

      .kC58739 .compare-column-2 {
        display: flex;
        order: 3;
      }

      .kC58739 .compare-column-3 {
        display: flex;
        order: 4;
      }

      .kC58739 .compare-column-4 {
        display: flex;
        order: 5;
      }

      .kC58739 .compare-static-0 {
        display: flex;
        order: 1;
      }

      .kC58739 .compare-static-21 {
        display: flex;
        order: 2;
      }

      .kC58739 .compare-static-22 {
        display: flex;
        order: 3;
      }

      .kC58739 .compare-static-1 {
        display: flex;
        order: 4;
      }

      .kC58739 .compare-static-2 {
        display: flex;
        order: 5;
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 {
          --columns: 3;
          --grid-column: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 .compare-column-2 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 1068px) {
        .kC58739 {
          --static-enabled: true;
        }

        .kC58739 .compare-static-1 {
          display: none;
        }

        .kC58739 .compare-static-2 {
          display: none;
        }

        .kC58739 .compare-static-0 {
          display: flex;
          order: 1;
        }

        .kC58739 .compare-static-21 {
          display: flex;
          order: 2;
        }

        .kC58739 .compare-static-22 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 {
          --columns: 2;
          --grid-column: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 .compare-column-2 {
          display: none;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 734px) {
        .kC58739 {
          --static-enabled: true;
        }

        .kC58739 .compare-static-0 {
          display: none;
        }

        .kC58739 .compare-static-1 {
          display: none;
        }

        .kC58739 .compare-static-2 {
          display: none;
        }

        .kC58739 .compare-static-0 {
          display: none;
        }

        .kC58739 .compare-static-21 {
          display: flex;
          order: 1;
        }

        .kC58739 .compare-static-22 {
          display: flex;
          order: 2;
        }
      }

      .channel-html .e49985d {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .bebb53d {
        background-color: #ffffff;
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        padding-top: 60px;
        padding-bottom: 69px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          padding-top: 72px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-top: 33px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          padding-bottom: 63px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-bottom: 46px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-right: 50vw;
        }
      }

      .channel-html .bebb53d.large-display-bleed::before,
      .channel-html .bebb53d.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bebb53d.medium-display-bleed::before,
      .channel-html .bebb53d.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bebb53d.small-display-bleed::before,
      .channel-html .bebb53d.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .ab27272 {
        /** Margin */
        margin-top: 1px;
        /** Padding */
        padding-top: 22px;
        padding-bottom: 10px;
        padding-right: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          margin-bottom: 35px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ab27272 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          padding-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ab27272 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ab27272 {
          padding-right: 0px;
        }
      }

      .channel-html .s2d1062 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2d1062 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2d1062 {
          margin-bottom: 7px;
        }
      }

      .channel-html .c41b14d {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
        margin-bottom: 18px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-left: -1.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-bottom: 13px;
        }
      }

      .channel-html .ca33ec8 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
        margin-bottom: 13px;
        padding-right: 81px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          padding-right: 35px;
        }
      }

      .channel-html .f917494 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .c58aa7e {
        /** Margin */
        margin-left: -1.5px;
        /** Padding */
        padding-right: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c58aa7e {
          padding-right: 42px;
        }
      }

      .channel-html .b1e8cb9 {
        color: #0066cc;
      }

      .channel-html .u4c208c {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4c208c {
          margin-left: -47px;
        }
      }

      .channel-html .y8aa809 {
        /** Margin */
        margin-top: 3px;
        margin-left: 72px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-top: -8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8aa809 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8aa809 {
          margin-left: -78px;
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
        padding-top: 55px;
        padding-bottom: 70px;
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
          padding-top: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-top: 38px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y863eb8 {
          padding-bottom: 59px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-bottom: 47px;
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
        padding-top: 26px;
        padding-bottom: 10px;
        padding-right: 82px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          margin-bottom: 45px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2cff78 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2cff78 {
          padding-right: 0px;
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
          margin-bottom: 11px;
        }
      }

      .channel-html .uC80FC7 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-bottom: 13px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC80FC7 {
          margin-bottom: 17px;
        }
      }

      .channel-html .n9392EA {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .l829F71 {
        margin-left: 0px;
      }

      .channel-html .r662F4F {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .gB87DB1 {
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
        .channel-html .gB87DB1 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          margin-left: -1px;
        }
      }

      .channel-html .sD81520 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .wDE5C0D {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDE5C0D {
          margin-left: 9px;
        }
      }

      .channel-html .eDF67E3 {
        margin-left: -1px;
      }

      .channel-html .e6D011D {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .v925DA3 {
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
        .channel-html .v925DA3 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v925DA3 {
          margin-left: -1px;
        }
      }

      .channel-html .h011405 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .oF11AA6 {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oF11AA6 {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF11AA6 {
          margin-left: 9px;
        }
      }

      .channel-html .h594938 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h594938 {
          padding-right: 0px;
        }
      }

      .channel-html .d96DCA4 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .w44500F {
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
        .channel-html .w44500F {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w44500F {
          margin-left: -1px;
        }
      }

      .channel-html .r5B274C {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .lCA6884 {
        /** Margin */
        margin-left: 7.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lCA6884 {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCA6884 {
          margin-left: 9px;
        }
      }

      .channel-html .a7D7BA1 {
        margin-left: -1px;
      }

      .channel-html .q381EBA {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .zAEA783 {
        /** Margin */
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zAEA783 {
          padding-right: 44px;
        }
      }

      .channel-html .y00CBF9 {
        color: #0066cc;
      }

      .channel-html .x7b6000 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7b6000 {
          margin-top: -5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7b6000 {
          margin-left: 0px;
        }
      }

      .channel-html .t3f263f {
        /** Margin */
        margin-top: 15px;
        margin-left: 35px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3f263f {
          margin-top: -3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3f263f {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3f263f {
          margin-left: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3f263f {
          margin-left: 0px;
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
        margin-top: 46px;
        margin-bottom: 10px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0ADE54 {
          margin-top: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-top: 43px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c0ADE54 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0ADE54 {
          margin-bottom: 10px;
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

      .channel-html .gD2723B {
        margin-left: 0px;
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

      .channel-html .kF41620 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .bB18953 {
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

      .channel-html .s5D1805 {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .y756975 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .u4E2410 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w5550FC {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .d886E04 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .m2DF68D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .d947353 {
        color: #6E6E73;
        margin-left: -0.5px;
      }
    </style>
  </head>

  <body>
    <div class="channel-html">
      <!--BEGIN > SECTION 1 - HERO-->
      <div class="section r506029">
        <div class="section-content">
          <div class="row d22ECA2">
            <div class="column large-12 d946572">
              <div class="row g480D87">
                <div class="column fA6C9AF">
                  <h2 class="visually-hidden-text"> MacBook Pro <figure aria-hidden="true" class="image image-hero_logo f5C14E0"></figure>
                  </h2>
                </div>
              </div>
              <p class="copy r7B011E channel-custom-font-custom-96-headline-super">Pro anywhere.</p>
              <p class="copy helvetica-neue w7CCF40 channel-custom-font-custom-24-intro-elevated">Apple’s most portable pro laptop is even more capable with the new M2&nbsp;chip — and the same compact design. Power through demanding workflows all day long with up to 20 hours of battery life and&nbsp;<br>an active cooling system to sustain enhanced performance.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
              <div class="row t981FA3">
                <div class="column large-7 medium-7 small-12 cA66D50">
                  <p class="copy helvetica-neue u2C4D62 channel-custom-font-custom-24-callout">Supercharged by </p>
                </div>
                <div class="column large-4 medium-4 small-12 k2E2D8C">
                  <figure aria-label="M2 chip" role="img" class="image image-hero_m2 double-invert q1B004B"></figure>
                </div>
              </div>
              <p class="copy helvetica-neue l368A1D channel-custom-font-custom-17-body-tight">Available next month</p>
            </div>
            <div class="column large-12 v1FFC18">
              <figure aria-label="MacBook Pro" role="img" class="image image-hero v6C4D7F"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 1 - HERO-->
      <!--BEGIN SECTION 2 - PERFORMANCE-->
      <div class="section theme-dark hCD1BA9">
        <div class="section-content">
          <div class="row b9586CB">
            <div class="column large-12 u0BC10E">
              <h3 class="copy a34913F channel-custom-font-custom-24-eyebrow">Performance</h3>
              <p class="copy tEA5493 channel-custom-font-custom-48-headline">Level up.</p>
              <p class="copy helvetica-neue p3E250A channel-custom-font-custom-21-intro">The M2 chip begins the next generation of fast and <span style="white-space: nowrap;">power-efficient</span> Apple silicon. Edit, stream, share, play and run&nbsp;multiple apps, from Microsoft&nbsp;365 to Final&nbsp;Cut&nbsp;Pro.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
            </div>
            <div class="column large-12 e4DDF6B">
              <div class="row w405161">
                <div class="column large-6 small-12 h387478">
                  <figure aria-label="M2 chip" role="img" class="image image-performance_m2 double-invert pC8A756"></figure>
                </div>
                <div class="column large-6 small-12 qC093D6">
                  <div class="row g55E334">
                    <div class="column large-12 small-6 n77B354">
                      <p class="copy helvetica-neue eA45CAC typography-body-reduced">Up to</p>
                      <p class="copy l1A4653 channel-custom-font-custom-64-badge">1.4x</p>
                      <p class="copy helvetica-neue t72D1CB typography-body-reduced">faster than M1 model<span aria-hidden="true" style="top: 0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                    </div>
                    <div class="column large-12 small-6 r1B9617">
                      <p class="copy helvetica-neue r1AAE2D typography-body-reduced">Up to</p>
                      <p class="copy q1FAB32 channel-custom-font-custom-64-badge">6x</p>
                      <p class="copy helvetica-neue iB92DC8 typography-body-reduced">faster than&nbsp;<br>Intel‑based model<span aria-hidden="true" style="top: 0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-12 p0838D1">
              <div class="key-line fB2961F">
                <div class="liner"></div>
              </div>
              <div class="row n25F53C">
                <div class="column large-4 large-offset-2 medium-4 small-12 small-offset-0 lFFA951">
                  <div class="row oC34507">
                    <div class="column large-1 p8FEAD9">
                      <figure aria-hidden="true" class="image image-performance_icon_battery kCC2258"></figure>
                    </div>
                    <div class="column large-11 tFAE91A">
                      <p class="copy helvetica-neue f842E88 typography-body-reduced">Up to 20 hours battery life<span aria-hidden="true" style="top: 0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                    </div>
                  </div>
                </div>
                <div class="column large-4 small-12 n5C296B">
                  <div class="row wEE0300">
                    <div class="column large-1 v740A9B">
                      <figure aria-hidden="true" class="image image-performance_icon_swirl jDF9BFB"></figure>
                    </div>
                    <div class="column large-11 i19CE2D">
                      <p class="copy helvetica-neue v9152FB typography-body-reduced">Active cooling for demanding&nbsp;workloads</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END SECTION 2 - PERFORMANCE-->
      <!--BEGIN > SECTION 3 - DISPLAY-->
      <div class="section v59f41d">
        <div class="section-content">
          <div class="row c5cf767">
            <div class="column large-6 small-12 r126012">
              <h3 class="copy t37940b channel-custom-font-custom-24-eyebrow">Display</h3>
              <p class="copy u4c22d3 channel-custom-font-custom-48-headline">See the better&nbsp;picture.</p>
              <p class="copy helvetica-neue e9a1c4b channel-custom-font-custom-21-intro">The brilliant Retina&nbsp;display delivers incredible detail and realism. Bright LED backlighting and P3 wide colour provide exceptional contrast and vibrancy.</p>
              <div class="row large-hide small-show y58B5B3">
                <div class="column large-12 d282A93">
                  <figure aria-label="Showcasing 13.3-inch Retina display" role="img" class="image image-display double-invert u26DFCC"></figure>
                </div>
              </div>
              <div class="row t3F0C2A">
                <div class="column large-1 o701C73">
                  <figure aria-hidden="true" class="image image-display_icon_brightness r809D94"></figure>
                </div>
                <div class="column large-11 w87B907">
                  <p class="copy fBF5A41 channel-custom-font-custom-48-badge">500</p>
                  <p class="copy helvetica-neue a9430B1 typography-body-reduced">nits of brightness</p>
                </div>
              </div>
              <div class="row i5AEC7B">
                <div class="column large-1 g7FDD9A">
                  <figure aria-hidden="true" class="image image-display_icon_color tEA29B5"></figure>
                </div>
                <div class="column large-11 y50EF16">
                  <p class="copy b703CCD channel-custom-font-custom-48-badge">P3 colour</p>
                  <p class="copy helvetica-neue pA9D5AE typography-body-reduced">25% more colours than sRGB</p>
                </div>
              </div>
              <div class="row s8D8C62">
                <div class="column large-1 oC6E84F">
                  <figure aria-hidden="true" class="image image-display_icon_true_tone t3AD723"></figure>
                </div>
                <div class="column large-11 hC22AA2">
                  <p class="copy iCDA7B5 channel-custom-font-custom-48-badge">True&nbsp;Tone</p>
                  <p class="copy helvetica-neue hF3FF45 typography-body-reduced">A more natural viewing experience</p>
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 small-hide df53568">
              <figure aria-label="Showcasing 13.3-inch Retina display" role="img" class="image image-display double-invert w63a149"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 3 - DISPLAY-->
      <!--BEGIN > SECTION 4 - CAMERA AND MICS-->
      <div class="section fd78a97">
        <div class="section-content">
          <div class="row r17d58c">
            <div class="column large-6 small-12 q09f05b">
              <h3 class="copy t303709 channel-custom-font-custom-24-eyebrow">Camera and Mics</h3>
              <p class="copy r101c0b channel-custom-font-custom-48-headline">Be seen. Be heard.</p>
              <p class="copy helvetica-neue be63cc8 channel-custom-font-custom-21-intro">M2 enhances image quality during video calls, and studio-quality mics minimise background noise.</p>
              <div class="row large-hide small-show y8de7c8">
                <div class="column large-12 y8bcc40">
                  <figure aria-label="Showcasing FaceTime video call on MacBook Pro" role="img" class="image image-camera double-invert q01ed66"></figure>
                </div>
              </div>
              <div class="row a7EC102">
                <div class="column large-1 a4E425E">
                  <figure aria-hidden="true" class="image image-camera_icon_facetime cFE2362"></figure>
                </div>
                <div class="column large-11 wEF562B">
                  <p class="copy helvetica-neue cC166C5 typography-body-reduced">FaceTime&nbsp;HD for improved contrast and more natural-looking skin tones</p>
                </div>
              </div>
              <div class="row y1AB16A">
                <div class="column large-1 r328E2E">
                  <figure aria-hidden="true" class="image image-camera_icon_mic l201EF1"></figure>
                </div>
                <div class="column large-11 fA8A099">
                  <p class="copy helvetica-neue eB182FA typography-body-reduced">Studio-quality three-mic array for crystal-clear audio</p>
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 small-hide b08bd26">
              <figure aria-label="Showcasing FaceTime video call on MacBook Pro" role="img" class="image image-camera double-invert v5bd97d"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 4 - CAMERA AND MICS-->
      <!--BEGIN > SECTION 5 - MAGIC KEYBOARD-->
      <div class="section v5c3f55">
        <div class="section-content">
          <div class="row w6a5c91">
            <div class="column large-12 q0695ee">
              <h3 class="copy v5a8bdc channel-custom-font-custom-24-eyebrow">Magic&nbsp;Keyboard</h3>
              <div class="row s2f5189">
                <div class="column large-6 small-12 r1983ae">
                  <p class="copy w69826b channel-custom-font-custom-48-headline">Just your type.</p>
                </div>
                <div class="column large-6 small-12 f2b03b0">
                  <p class="copy helvetica-neue y8138e3 channel-custom-font-custom-21-intro">Magic&nbsp;Keyboard provides a more comfortable typing experience, while Touch&nbsp;Bar and Touch&nbsp;ID allow you to work more efficiently. </p>
                </div>
              </div>
              <div class="row e715C93">
                <div class="column large-7 small-12 x0CE7AD">
                  <figure aria-label="Pointer showcasing Touch ID key on the Magic Keyboard." role="img" class="image image-keyboard double-invert q0d8498"></figure>
                </div>
                <div class="column large-5 small-12 o5BF56B">
                  <div class="row a1459F0">
                    <div class="column large-1 f850DE5">
                      <figure aria-hidden="true" class="image image-keyboard_icon_touch_id aA4A4D7"></figure>
                    </div>
                    <div class="column large-11 h2357E1">
                      <h4 id="id1" class="copy helvetica-neue i6CD3E3 typography-body-reduced">Touch&nbsp;ID</h4>
                    </div>
                  </div>
                  <div class="key-line c6F9D0D">
                    <div class="liner"></div>
                  </div>
                  <ul role="list" aria-labelledby="id1" class="list b3EDDDB">
                    <li role="listitem" class="list-item a5D6345">
                      <div class="row x63EFBA">
                        <div class="column large-1 bB90769">
                          <figure aria-hidden="true" class="image image-keyboard_icon_unlock zF65F47"></figure>
                        </div>
                        <div class="column large-11 k6EF9AA">
                          <p class="copy helvetica-neue s03B7A6 typography-body-reduced">Unlock your Mac</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item m9E47AF">
                      <div class="row s58E7A6">
                        <div class="column large-1 xB8AAEA">
                          <figure aria-hidden="true" class="image image-app_store j3CFCD6"></figure>
                        </div>
                        <div class="column large-11 v365069">
                          <p class="copy helvetica-neue vEC1907 typography-body-reduced">Make purchases on the App&nbsp;Store</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item d98E370">
                      <div class="row oB51986">
                        <div class="column large-1 i7548EE">
                          <figure aria-hidden="true" class="image image-keyboard_icon_password r9F1209"></figure>
                        </div>
                        <div class="column large-11 hB9F449">
                          <p class="copy helvetica-neue i2F9955 typography-body-reduced">Open password-protected documents</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item sBE086C">
                      <div class="row k1AA34D">
                        <div class="column large-1 yCC1E17">
                          <figure aria-hidden="true" class="image image-keyboard_icon_apple_tv eDEE889"></figure>
                        </div>
                        <div class="column large-11 h29F2AD">
                          <p class="copy helvetica-neue v47F6B4 typography-body-reduced">Make purchases on the Apple&nbsp;TV app</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 5 - MAGIC KEYBOARD-->
      <!--BEGIN > SECTION 6 - CONNECTIVITY-->
      <div class="section p87BA8D">
        <div class="section-content">
          <div class="row v19664A">
            <div class="column large-12 w15DFEE">
              <h3 class="copy wC8231A channel-custom-font-custom-24-eyebrow">Connectivity</h3>
            </div>
            <div class="column large-12 i050DB3">
              <figure aria-label="Side view of Headphone Jack and two Thunderbolt ports on MacBook Pro" role="img" class="image image-connectivity double-invert x8F0573"></figure>
            </div>
            <div class="column large-12 h9FEA77">
              <div class="row g9312AE">
                <div class="column large-6 small-12 dCCCE10">
                  <p class="copy f7392AA channel-custom-font-custom-48-headline">Make connections. Faster than ever.</p>
                  <p class="copy helvetica-neue rC72CB8 channel-custom-font-custom-21-intro">The Thunderbolt ports make charging, video&nbsp;output and data transfer lightning fast. </p>
                </div>
                <div class="column large-6 small-12 o716959">
                  <div class="row wA1A37E">
                    <div class="column large-1 qB09B79">
                      <figure aria-hidden="true" class="image image-connectivity_icon_wi-fi j5EFE7B"></figure>
                    </div>
                    <div class="column large-11 aE08E5F">
                      <p class="copy helvetica-neue jA83036 typography-body-reduced">Wi-Fi 6</p>
                    </div>
                  </div>
                  <div class="row vDF72F3">
                    <div class="column large-1 yF012D3">
                      <figure aria-hidden="true" class="image image-connectivity_icon_thunderbolt a1B43A1"></figure>
                    </div>
                    <div class="column large-11 o581BB9">
                      <p class="copy helvetica-neue z5FA7E8 typography-body-reduced">Two Thunderbolt ports</p>
                    </div>
                  </div>
                  <div class="row b460D8B">
                    <div class="column large-1 m45EF0F">
                      <figure aria-hidden="true" class="image image-connectivity_icon_headphone mC66A54"></figure>
                    </div>
                    <div class="column large-11 kB8FA42">
                      <p class="copy helvetica-neue p0AFF10 typography-body-reduced">3.5 mm headphone jack</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 6 - CONNECTIVITY-->
      <!--BEGIN > FLEX 1 - WHY MAC-->
      <div class="section w6c736d">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed q0a3e94">
            <div class="column large-12 q02c985">
              <h2 class="copy f89a263 channel-custom-font-custom-21-eyebrow-reduced">Why Mac</h2>
              <p class="copy a0c7426 channel-custom-font-custom-40-headline-reduced">There’s more to love in every Mac.</p>
            </div>
            <div class="column large-4 small-12 ecd1114">
              <figure aria-hidden="true" class="image image-why_icon_powerful w6189bf"></figure>
              <h3 class="copy helvetica-neue s2fd10f channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is powerful.</h3>
              <p class="copy helvetica-neue z9a22cb channel-custom-font-custom-17-body-reduced-flex">The combination of Apple silicon and macOS means Mac delivers incredible performance and phenomenal battery life.</p>
            </div>
            <div class="column large-4 small-12 c3c737c">
              <figure aria-hidden="true" class="image image-why_icon_connected x7471c6"></figure>
              <h3 class="copy helvetica-neue q05c363 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything works together.</h3>
              <p class="copy helvetica-neue t3cf362 channel-custom-font-custom-17-body-reduced-flex">When you combine Mac with other Apple devices, connectivity is seamless and effortless.</p>
            </div>
            <div class="column large-4 small-12 ec88939">
              <figure aria-hidden="true" class="image image-why_icon_easy t34db34"></figure>
              <h3 class="copy helvetica-neue ea02c4b channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is easy.</h3>
              <p class="copy helvetica-neue c8278a9 channel-custom-font-custom-17-body-reduced-flex">Starting projects is simple. Sign in to&nbsp;your iCloud account to access your photos, videos and music.</p>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 1 - WHY MAC-->
      <!--BEGIN > FLEX 2 - COMPARE-->
      <div class="section rAA6C6D">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed tB87813">
            <div class="column large-12 w1AAB6D">
              <h2 class="copy c135C2C channel-custom-font-custom-21-eyebrow-reduced">Compare</h2>
              <h3 class="copy iA7E434 channel-custom-font-custom-40-headline-reduced">Find the right Mac for you.</h3>
            </div>
            <div class="kC58739">
              <div data-channel-html-compare="{&quot;order&quot;:{&quot;small&quot;:[21,22,0,1,2],&quot;medium&quot;:[0,21,22,1,2],&quot;large&quot;:[0,21,22,1,2],&quot;max&quot;:{&quot;large&quot;:5,&quot;medium&quot;:3,&quot;small&quot;:2}},&quot;useStatic&quot;:true,&quot;selectorEls&quot;:&quot;[selector-dropdown]&quot;,&quot;labelEls&quot;:&quot;[compare-column-interactive]&quot;,&quot;swapEls&quot;:&quot;[data-column-group]&quot;,&quot;headerEl&quot;:&quot;[compare-header-row]&quot;,&quot;staticEl&quot;:&quot;[compare-column-header-static]&quot;}" class="channel-compare">
                <div class="section section-compare-table">
                  <div class="compare-wrapper">
                    <div role="table" aria-label="Compare models" class="compare compare-table with-fullwidthrowheader compare-column-range-large-5 compare-column-range-medium-3 compare-column-range-small-2">
                      <div>
                        <!---->
                        <div role="rowgroup" aria-hidden="true" class="compare selector-table with-fullwidthrowheader">
                          <div role="row" data-column-group="" class="compare-row">
                            <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                              <div class="visuallyhidden">Choose models to compare.</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-0 first-child">
                              <div index="0">MacBook Air (M1)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-1">
                              <div index="1">MacBook Pro <br>35 cm</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-2">
                              <div index="2">MacBook Pro <br>41 cm</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-3">
                              <div index="3">MacBook Air (Retina, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-4">
                              <div index="4">MacBook Air (2017)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-5">
                              <div index="5">MacBook Pro (M2 Chip) (M1, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-6">
                              <div index="6">MacBook Pro (M2 Chip). (Two Thunderbolt 3 ports, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-7">
                              <div index="7">MacBook Pro (M2 Chip). (Two Thunderbolt 3 ports, 2016)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-8">
                              <div index="8">MacBook Pro (M2 Chip). (Four Thunderbolt 3 ports, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-9">
                              <div index="9">MacBook Pro 41 cm. (2019)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-10">
                              <div index="10">iMac 21.5-in.</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-11">
                              <div index="11">iMac 21.5-in. (4K Retina)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-12">
                              <div index="12">iMac 24-in. (M1, Two ports, 2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-13">
                              <div index="13">iMac 24-in. (M1, Four ports, 2021)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-14">
                              <div index="14">iMac 27-in. (5K Retina)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-15">
                              <div index="15">iMac Pro</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-16">
                              <div index="16">Mac mini (M1, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-17">
                              <div index="17">Mac mini (2018)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-18">
                              <div index="18">Mac mini (Late 2014)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-19">
                              <div index="19">Mac Studio (2022)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-20">
                              <div index="20">Mac Pro</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-21">
                              <div index="21">MacBook Air (M2)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-22">
                              <div index="22">MacBook Pro <br>(M2 Chip)</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--BEGIN > CATEGORY > PRODUCT-IMAGES-->
                      <div role="rowgroup" class="compare-section section-product-images no-padding-top">
                        <!--BEGIN > CATEGORY > PRODUCT-IMAGES > FEATURE > IMAGES-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-default">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Product Images</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <div class="b061310 embed-image" index="0">
                              <figure role="img" aria-label="MacBook Air (M1)" class="compare-image image-compare_macbook_air_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <div class="u63D12F embed-image" index="21">
                              <figure role="img" aria-label="MacBook Air (M2)" class="compare-image image-compare_macbook_air_m2_13_midnight"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <div class="k9BA736 embed-image" index="22">
                              <figure role="img" aria-label="MacBook Pro 13&amp;#8209;in." class="compare-image image-compare_macbook_pro_m2_13_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <div class="d378430 embed-image" index="1">
                              <figure role="img" aria-label="MacBook Pro 14&amp;#8209;in." class="compare-image image-compare_macbook_pro_m1_14_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <div class="m70B12B embed-image" index="2">
                              <figure role="img" aria-label="MacBook Pro 16&amp;#8209;in." class="compare-image image-compare_macbook_pro_m1_16_spacegray"></figure>
                            </div>
                          </div>
                        </div>
                        <!--END > CATEGORY > PRODUCT-IMAGES > FEATURE > IMAGES-->
                      </div>
                      <!--END > CATEGORY > PRODUCT-IMAGES-->
                      <!--BEGIN > CATEGORY > FINISH-->
                      <div role="rowgroup" class="compare-section section-finish no-padding-top">
                        <!--BEGIN > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                        <div role="row" data-column-group="" class="compare-row compare-template-border-bottom compare-template-preview-item-color-nav">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Finish</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <div class="row-colors" index="0" product-name="MacBook Air (M1)">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Gold" class="colornav-swatch" style="background-color: rgb(223, 204, 183);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <div class="row-colors" index="21" product-name="MacBook Air (M2)">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Midnight" class="colornav-swatch" style="background-color: rgb(46, 54, 66);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Starlight" class="colornav-swatch" style="background-color: rgb(240, 228, 211);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <div class="row-colors" index="22" product-name="MacBook Pro 13&amp;#8209;in.">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <div class="row-colors" index="1" product-name="MacBook Pro 14&amp;#8209;in.">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <div class="row-colors" index="2" product-name="MacBook Pro 16&amp;#8209;in.">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="available colors" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--END > CATEGORY > FINISH > FEATURE > COLOR-NAV-->
                      </div>
                      <!--END > CATEGORY > FINISH-->
                      
                      <!--BEGIN > CATEGORY > QUICK-LOOK-->
                      <div role="rowgroup" class="compare-section section-quick-look no-padding-top multi-row">
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Quick look</div>
                          </div>
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm <span class="visuallyhidden">"in."</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">(13.3″) Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">34.46 cm <span class="visuallyhidden">"in."</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">(13.6″) Liquid Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm <span class="visuallyhidden">"in."</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">(13.3″) Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">35.97 cm <span class="visuallyhidden">"in."</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">(14.2″) Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">41.05 cm <span class="visuallyhidden">"in."</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">(16.2″) Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper u46924f embed-image">
                                    <figure class="compare-image image-icon_M1_chip"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper yD79749 embed-image">
                                    <figure class="compare-image image-icon_M2_chip"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M2 chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper yEC18FD embed-image">
                                    <figure class="compare-image image-icon_M2_chip"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M2 chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper y855231 embed-image">
                                    <figure class="compare-image image-icon_M1_Max_M1_Pro"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 Pro chip or<br>Apple M1 Max chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper a71891d embed-image">
                                    <figure class="compare-image image-icon_M1_Max_M1_Pro"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 Pro chip or<br>Apple M1 Max chip</span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">CPU</span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">7-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">32-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">32-core</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">16GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">24GB </span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">24GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">64GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">64GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">unified memory</span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">storage<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">18 hours</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">18 hours</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">20 hours</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">17 hours</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">21 hours</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">battery life<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
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
                          <div role="cell" class="first-child compare-column compare-static-0 product-0">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper nA4FDD7 embed-image">
                                    <figure class="compare-image image-icon_touch_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-21 product-1">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper g0CA37A embed-image">
                                    <figure class="compare-image image-icon_touch_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-22 product-2">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper d6E8F99 embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and<br>Touch ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-1 product-3">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper i8ABCFC embed-image">
                                    <figure class="compare-image image-icon_touch_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column compare-static-2 product-4">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper z62349E embed-image">
                                    <figure class="compare-image image-icon_touch_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch ID</span>
                                  <!---->
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
      <!--BEGIN > FLEX 3 - ACCESSORIES-->
      <div class="section e49985d">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed bebb53d">
            <div class="column large-4 small-12 ab27272">
              <h2 class="copy s2d1062 channel-custom-font-custom-21-eyebrow-reduced">Accessories</h2>
              <p class="copy c41b14d channel-custom-font-custom-40-headline-reduced">Explore Mac accessories.</p>
              <p class="copy helvetica-neue ca33ec8 channel-custom-font-custom-17-body-reduced">Explore keyboards, devices <br>and other essentials.</p>
              <div class="row f917494">
<!--                <div class="column large-12 c58aa7e"><a href="#" aria-label="Shop Apple accessories" class="link-wrapper"><span class="b1e8cb9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Shop Apple accessories</span></span></a></div>-->
              </div>
            </div>
            <div class="column large-8 small-12 u4c208c">
              <figure aria-label="Top view of Air Pods, Studio display, Magic Keyboard, Magic Mouse and Magic Track Pad" role="img" class="image image-flex_accessories double-invert y8aa809"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 3 - ACCESSORIES-->
      <!--BEGIN > FLEX 4 - APPLECARE-->
      <div class="section c333372">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed y863eb8">
            <div class="column large-6 small-12 s2cff78">
              <h2 class="copy z92eeb6 channel-custom-font-custom-21-eyebrow-reduced">AppleCare+</h2>
              <p class="copy d6c9ea4 channel-custom-font-custom-40-headline-reduced">Expert support, enhanced coverage.</p>
              <div class="row uC80FC7">
                <div class="column large-12 n9392EA">
                  <ul role="list" aria-label="Apple care plus support and coverage" class="list l829F71">
                    <li role="listitem" class="list-item iD8441F">
                      <div class="row r662F4F">
                        <div class="column large-0 gB87DB1">
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care sD81520"></figure>
                        </div>
                        <div class="column large-11 wDE5C0D">
                          <p class="copy helvetica-neue eDF67E3 channel-custom-font-custom-17-body-reduced">Apple-certified service</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item x13CE33">
                      <div class="row e6D011D">
                        <div class="column large-0 v925DA3">
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care h011405"></figure>
                        </div>
                        <div class="column large-11 oF11AA6">
                          <p class="copy helvetica-neue h594938 channel-custom-font-custom-17-body-reduced">Priority access to Apple experts</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item w018B0F">
                      <div class="row d96DCA4">
                        <div class="column large-0 w44500F">
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care r5B274C"></figure>
                        </div>
                        <div class="column large-11 lCA6884">
                          <p class="copy helvetica-neue a7D7BA1 channel-custom-font-custom-17-body-reduced">Accidental damage coverage</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row q381EBA">
<!--                <div class="column large-12 zAEA783"><a href="#" aria-label="Learn more about AppleCare+&nbsp;for Mac" class="link-wrapper"><span class="y00CBF9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more about AppleCare+&nbsp;for Mac</span></span></a></div>-->
              </div>
            </div>
            <div class="column large-6 small-12 x7b6000">
              <figure aria-label="MacBook Pro and Apple Care plus." role="img" class="image image-flex_applecare double-invert t3f263f"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 4 - APPLECARE-->
      <!--BEGIN > LEGAL-->
      <div class="section q7ABA85">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed c0ADE54">
            <aside aria-label="Legal disclaimers" role="complimentary" class="column large-12 medium-12 s185A56">
              <div class="row x67B730">
                <div class="column large-12 n22495C">
                  <h2 id="comp" class="copy helvetica-neue kA26997 channel-custom-font-custom-12-sosumi"><span id="footnote-diamond-1">◊</span>Legal Disclaimers</h2>
                </div>
              </div>
              <ul role="list" class="list gD2723B">
                <li role="listitem" class="list-item s1911BD">
                  <div class="row nBAAB83">
                    <div class="column large-12 w076B92">
                      <p class="copy helvetica-neue rF00FC0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Power and Battery:</span> Testing conducted by Apple in May 2022 using pre-production MacBook&nbsp;Pro (M2 chip) systems with Apple&nbsp;M2, 8-core CPU, 10-core GPU, 8GB of RAM and 256GB&nbsp;SSD. The wireless web test measures battery life by wirelessly browsing 25 popular websites with display brightness set to 8 clicks from the bottom. The Apple&nbsp;TV app movie&nbsp;playback test measures battery life by playing back 1080p HD content with display brightness set to 8 clicks from the bottom. Battery life varies by use and configuration. See&nbsp;<a href="https://www.apple.com/in/batteries" class="footer-link"><span style="color: #424245">apple.com/in/batteries</span></a> for more information.</p>
                        
                        
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item nA9A20D">
                  <div class="row e233D21">
                    <div class="column large-12 kF41620">
                      <p class="copy helvetica-neue bB18953 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">App&nbsp;Store:</span> Apps are available on the App&nbsp;Store. Title availability is subject to change. </p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item xCCD1D8">
                  <div class="row u8B52BF">
                    <div class="column large-12 k29A416">
                      <p class="copy helvetica-neue tBED2F5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Performance:</span> Performance claims are based on comparison with the previous generation.</p>
					  <p class="copy helvetica-neue s5D1805 channel-custom-font-custom-12-sosumi">Testing conducted by Apple in May 2022 using pre-production MacBook Pro (M2 chip) systems with Apple M2, 8-core CPU, 10-core GPU and 24GB of RAM, and production MacBook Pro (M2 chip) systems with Apple M1, 8-core CPU, 8-core GPU and 16GB of RAM, all configured with 2TB SSD, as well as production 1.7GHz quad-core Intel Core i7–based MacBook Pro (M2 chip) systems with Intel Iris Plus Graphics 645, 16GB of RAM and 2TB SSD. Final Cut Pro 10.6.2 tested using a complex 2-minute project with 4K ProRes 422 media. Performance tests are conducted using specific computer systems and reflect the approximate performance of MacBook Pro.</p>
                        
                     
                        
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item y187019">
                  <div class="row y756975">
                    <div class="column large-12 u4E2410">
                      <p class="copy helvetica-neue w5550FC channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Display:</span> Screen size is measured diagonally. The displays on MacBook&nbsp;Air (M2 chip) and MacBook&nbsp;Pro 41 cm and MacBook Pro 35 cm have rounded corners at the top. When measured&nbsp;as a standard rectangular shape, the screens are 34.46&nbsp;centimetres, 35.97&nbsp;centimetres and 41.05&nbsp;centimetres diagonally (actual viewable area is less).</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item tADD4C1">
                  <div class="row d886E04">
                    <div class="column large-12 m2DF68D">
                      <p class="copy helvetica-neue d947353 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Storage:</span> 1GB = 1 billion bytes and 1TB = 1 trillion bytes; actual formatted capacity less.</p>
                    </div>
                  </div>
                </li>
              </ul>
            </aside>
          </div>
        </div>
      </div>
      <!--END > LEGAL-->
    </div>


    <script type="text/javascript">
      "use strict";
      /**
       * Injects elements into the DOM based on a data set
       */
      const reorderDOM = {
        // Variables
        selectorEls: null,
        headerEl: null,
        capturedEls: null,
        capturedElsQuery: null,
        clonedEls: [],
        cOrder: null,
        cMax: null,
        useStatic: null,
        selectorElsQuery: null,
        staticEl: null,
        staticElQuery: null,
        // Listens for event from manager(s)
        addListeners() {
          window.addEventListener('channel:reorder-dom', (event) => {
            this.useStatic = event.detail.useStatic;
            this.cOrder = event.detail.order;
            this.cMax = event.detail.max;
            this.updateElements();
          });
        },
        // Run update on elements
        updateElements() {
          // Dynamic actions
          (!this.useStatic) && this.updateSelectors();
          (!this.useStatic) && this.updateHeadersAX();
          (!this.useStatic) && this.updateRows();
          // Static actions
          (this.useStatic) && this.updateStatic();
        },
        // Alias for Array.form()
        arrayFromNodeList(els) {
          const arr = [];
          els.forEach(el => {
            arr.push(el);
          });
          return arr;
        },
        // Sorts elements by their flex:order
        // updateDOM
        updateStatic() {
          // (skip header +1)
          this.clonedEls.forEach((clonedEl, cloneIndex) => {
            // Make a copy of the original clone (skip header +1)
            const capturedEl = this.capturedEls[cloneIndex];
            const cloneEl = clonedEl.cloneNode(true);
            const headerEl = cloneEl.querySelector('[role=rowheader]');
            let cellEls = [];
            // Pluck the cells based on cOrder
            this.cOrder.forEach((cItem, cIndex) => {
              // Find by internal index and select container
              const indexQuery = `[index="${cItem}"]`;
              const indexedCell = cloneEl.querySelector(indexQuery);
              const indexOuter = indexedCell.parentElement;
              // Add to prepends
              cellEls.push(indexOuter);
            });
            // Prepend cells by order to each row
            cellEls.reverse().forEach((cellEl, index) => {
              cellEl.setAttribute('added', true);
              cloneEl.prepend(cellEl);
            });
            // Show/hide based on viewport length
            // Skip header
            for (let i = 0; i < cloneEl.children.length; i++) {
              const _celEl = cloneEl.children[i];
              _celEl.style.order = 'unset';
              this.toggleVisibility(_celEl, (i < this.cMax));
            }
            // Float rowheader to top
            cloneEl.prepend(headerEl);
            cloneEl.setAttribute('added', true);
            // Replace content
            capturedEl.innerHTML = cloneEl.innerHTML;
          });
        },
        // Update AX headers
        updateHeadersAX() {
          // AX requires this prefix element
          let updatedHTML = '<div role="columnheader">&nbsp;</div>';
          let selectors = document.querySelectorAll(this.selectorElsQuery);
          // Loop selected and populate rowheader
          selectors.forEach((selectorEl, index) => {
            const selectedOption = selectorEl.querySelector('[selected=true]');
            const labelText = selectedOption.innerText.trim();
            const shown = selectorEl.parentElement.parentElement.style.display === 'flex';
            // Only populates what's visible
            if (shown)
              updatedHTML += `<div role="columnheader">${labelText}</div>`;
          });
          // Update DOMs
          this.headerEl.innerHTML = updatedHTML;
        },
        // Update selector values to match data
        updateSelectors() {
          // Take what is on the stage and replace with those from memory
          // To restore listener states which get replaced on re-render
          const existingSelectors = document.querySelectorAll(this.selectorElsQuery);
          existingSelectors.forEach((existingSelector, index) => {
            existingSelector.replaceWith(this.selectorEls[index]);
          });
          // Update selectors attributes and state
          this.cOrder.forEach((order, index) => {
            // Capture selector
            const selectorEl = this.selectorEls[index];
            // Will select the dropdown
            let selectedIndex = 0;
            // Figure out what should be selected and update attr
            for (let i = 0; i < selectorEl.options.length; i++) {
              const option = selectorEl.options[i];
              const value = Number(option.value);
              const isActive = value === order;
              if (isActive)
                selectedIndex = i;
              // AX
              option.removeAttribute('selected');
              option.setAttribute('selected', isActive);
              option.removeAttribute('aria-selected');
              option.setAttribute('aria-selected', isActive);
            }
            // Update visual selection
            selectorEl.selectedIndex = selectedIndex;
          });
          // Update selectors visibility
          for (var selIndex = 0; selIndex < this.selectorEls.length; selIndex++) {
            const selectorEl = this.selectorEls[selIndex];
            const selectorBool = selIndex < this.cMax;
            // Select the parent column
            this.toggleVisibility(selectorEl.parentElement.parentElement, selectorBool);
          }
        },
        // Update row element order and visibility
        updateRows() {
          this.clonedEls.forEach((clonedEl, cloneIndex) => {
            // Make a copy of the original clone
            const capturedEl = this.capturedEls[cloneIndex];
            const cloneEl = clonedEl.cloneNode(true);
            const headerEl = cloneEl.querySelector('[role=rowheader]');
            const swapEls = [];
            // Create an array queue based on order
            this.cOrder.forEach((cItem) => {
              const indexQuery = `[index="${cItem}"]`;
              const indexedCell = cloneEl.querySelector(indexQuery);
              const indexOuter = indexedCell.parentElement;
              swapEls.push(indexOuter);
            });
            // Prepend cloneEl with ordered
            swapEls.reverse().forEach(swappedEl => {
              cloneEl.prepend(swappedEl);
            });
            // Show/hide based on viewport length
            // Skip header
            for (let i = 0; i < cloneEl.children.length; i++) {
              const _celEl = cloneEl.children[i];
              _celEl.style.order = 'unset';
              this.toggleVisibility(_celEl, (i < this.cMax));
            }
            // Float header to top
            cloneEl.prepend(headerEl);
            // Update document DOM
            capturedEl.innerHTML = cloneEl.innerHTML;
          });
        },
        // Toggles the visibility for an element
        toggleVisibility(element, bool) {
          element.style.visibility = (bool) ? 'visible' : 'hidden';
          element.style.display = (bool) ? 'flex' : 'none';
          element.style.order = 'unset';
        },
        // Prepare selectors and clones (onload only)
        init(swapEls, selectorEls, headerEl, staticEl, useStatic) {
          // Static flag (must be first)
          this.useStatic = useStatic;
          // Rows to manipulate
          this.capturedEls = document.querySelectorAll(swapEls);
          this.capturedElsQuery = swapEls;
          // AX header
          this.headerEl = document.querySelector(headerEl);
          // Non-static headers
          this.selectorEls = document.querySelectorAll(selectorEls);
          this.selectorElsQuery = selectorEls;
          // Populate the static header array
          this.staticElQuery = staticEl;
          this.staticEl = (this.useStatic) && document.querySelector(this.staticElQuery).cloneNode(true);
          // Static flag
          this.useStatic = useStatic;
          // Cache elements for reflow later
          this.clonedEls = this.arrayFromNodeList(this.capturedEls);
          // Enable listeners
          this.addListeners();
        }
      };
      /**
       * Manages the viewport state and emits viewport change events
       */
      const viewportManager = {
        // Next state
        nState: null,
        // Current state
        cState: null,
        init: function() {
          this.addListeners();
          this.viewportObserve();
        },
        // Listen for window resize
        addListeners: function() {
          window.addEventListener('resize', (event) => {
            this.viewportObserve();
          });
        },
        // Set the state of the window based on constraints
        viewportObserve: function() {
          // Fetch window size and setup vars
          const width = window.innerWidth;
          // Determine state of size
          if (width <= 734)
            this.nState = 'small';
          if (width > 734 && width <= 1068)
            this.nState = 'medium';
          if (width > 1068)
            this.nState = 'large';
          // Check for change & dispatch
          if (this.cState !== this.nState) {
            this.cState = this.nState;
            this.dispatch(this.cState);
          }
        },
        // Dispatches event to manager(s)
        dispatch: function(detail) {
          const event = new CustomEvent('channel:viewport-change', {
            detail
          });
          window.dispatchEvent(event);
        }
      };
      /**
       * Manages selector state and emits user change events
       */
      const selectorManager = {
        init: function(selectorElsQuery, headerEl) {
          // Find selector types
          const selectorEls = document.querySelectorAll(selectorElsQuery);
          // Track user selections
          selectorEls.forEach((selectorEl, elIndex) => {
            selectorEl.addEventListener('change', () => {
              const sIndex = selectorEl.selectedIndex;
              const value = selectorEl.value;
              const selectedIndex = Number(selectorEl.options[sIndex].getAttribute('value'));
              // Emit to the rest of the manager(s)
              this.dispatch({
                elIndex,
                selectedIndex,
                value
              });
            });
          });
        },
        // Dispatches a custom event
        dispatch: function(detail) {
          const event = new CustomEvent('channel:user-select', {
            detail
          });
          window.dispatchEvent(event);
        },
      };
      /**
       * Manages state based on viewport & select events
       */
      const dataManager = {
        // Variables
        order: null,
        viewportKey: null,
        viewportOrder: null,
        viewportMax: null,
        // Initialize with config
        init: function(config, useStatic) {
          // Init data
          this.order = config;
          // Store static mode
          this.useStatic = useStatic;
          // Listeners
          this.addListeners();
        },
        // Listens for viewport change event from manager(s)
        viewportChange(viewportKey) {
          this.viewportKey = viewportKey;
          // Determine order for viewport
          this.viewportOrder = this.order[this.viewportKey];
          this.viewportMax = this.order.max[this.viewportKey];
          // Notify manager(s)
          this.dispatch({
            order: this.viewportOrder,
            max: this.viewportMax,
            useStatic: this.useStatic
          });
        },
        // Make the current viewport order override all
        flattenOrders() {
          this.viewportOrder = this.order[this.viewportKey];
          this.viewportMax = this.order.max[this.viewportKey];
          // Make all viewports the same value of currently loaded one
          ['small', 'medium', 'large'].forEach((viewport) => {
            this.order[viewport] = this.viewportOrder;
          });
        },
        // Listens for user select event from manager(s)
        userSelect(state) {
          // Extract event info vars
          const {
            elIndex,
            selectedIndex
          } = state;
          // Store values for swap
          const currValue = this.viewportOrder[elIndex];
          // Offset order to match values
          const existingValue = this.viewportOrder.find(existingItem => {
            return existingItem === selectedIndex;
          });
          const existingValueIndex = this.viewportOrder.indexOf(existingValue);
          // If exists swap it around or just overwrite
          if (undefined !== existingValue) {
            this.viewportOrder[existingValueIndex] = currValue;
            this.viewportOrder[elIndex] = existingValue;
          } else {
            this.viewportOrder[elIndex] = selectedIndex;
          }
          // Flatten orders
          this.flattenOrders();
          this.dispatch({
            order: this.viewportOrder,
            max: this.viewportMax,
            useStatic: this.useStatic
          });
        },
        // Listeners for events from manager(s)
        addListeners: function() {
          window.addEventListener('channel:user-select', (event) => {
            this.userSelect(event.detail);
          });
          window.addEventListener('channel:user-refresh', (event) => {
            this.dispatch({
              order: this.viewportOrder,
              max: this.viewportMax,
              useStatic: this.useStatic
            });
          });
          window.addEventListener('channel:viewport-change', (event) => {
            this.viewportChange(event.detail);
          });
        },
        // Dispatches event to manager(s)
        dispatch: function(detail) {
          const reorderEvt = new CustomEvent('channel:reorder-dom', {
            detail
          });
          window.dispatchEvent(reorderEvt);
        }
      };
      // Bootstrapper
      const channelCompare = {
        inited: false,
        init: function(config = null) {
          // bf-cache buster
          if (this.inited)
            return;
          this.isDev = window.location.host.indexOf('127.0.0.1') > -1;
          let configData;
          // If `config` exists, use it and start the manager(s) else
          // Try to find element [data-channel-html-compare] or report invalid
          // Attempt to parse or report invalid
          // If successful start the manager(s)
          if (!!config) {
            configData = config;
          } else if (!config) {
            const dataEl = document.querySelector("[data-channel-html-compare]");
            if (!dataEl) {
              console.warn('channelCompare: element[data-channel-html-compare not found]');
              return;
            }
            try {
              const attribute = dataEl.getAttribute("data-channel-html-compare");
              configData = JSON.parse(attribute);
            } catch (e) {
              console.warn('channelCompare: error parsing JSON', e);
              return;
            }
          }
          console.log('channelCompare.init.configData', configData);
          // Extract props for manager(s)
          const order = configData.order;
          const headerEl = configData.headerEl;
          const selectorEls = configData.selectorEls;
          const swapEls = configData.swapEls;
          const staticEl = configData.staticEl;
          const useStatic = configData.useStatic;
          // Start managers (the order matters)
          reorderDOM.init(swapEls, selectorEls, headerEl, staticEl, useStatic);
          // Only attach listeners in non-static mode
          (!useStatic) && selectorManager.init(selectorEls);
          dataManager.init(order, useStatic);
          viewportManager.init();
          // Init once
          this.inited = true;
        }
      };
      const compareEl = document.querySelector('.compare');
      compareEl.style.visibility = 'hidden';
      // Wait for page to load
      window.addEventListener('pageshow', (event) => {
        // Check if we're using back-forward caching
        const {
          persisted
        } = event;
        // Init if not cached
        if (!persisted) {
          channelCompare.init();
          compareEl.style.visibility = 'visible';
        } else {
          // Refresh render
          window.addEventListener('scroll', () => {
            const reorderEvt = new CustomEvent('channel:user-refresh');
            window.dispatchEvent(reorderEvt);
          });
        }
      });
    </script>
  </body>

</html>