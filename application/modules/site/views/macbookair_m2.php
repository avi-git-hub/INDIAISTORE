<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="version:build" content="0.0.14">
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
      .channel-html dd,
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

      .channel-html .typography-headline-standalone {
        font-size: 96px;
        line-height: 1.0416666667;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .typography-headline-standalone {
          font-size: 80px;
          line-height: 1.05;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .typography-headline-standalone {
          font-size: 48px;
          line-height: 1.0834933333;
          font-weight: 600;
          letter-spacing: 0em;
          font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
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
        src: url(data:font/truetype;charset=utf-8;base64,AAEAAAAOAIAAAwBgRkZUTYkLJygAALSIAAAAHEdERUYAKQByAAC0aAAAAB5PUy8yhB1wagAAAWgAAABgY21hcPQGTV8AAAN4AAABkmN2dCAARAURAAAFDAAAAARnYXNw//8AAwAAtGAAAAAIZ2x5ZpE79VoAAAXsAACV3GhlYWQXJG3TAAAA7AAAADZoaGVhD6AOHwAAASQAAAAkaG10eDvKadUAAAHIAAABsGxvY2FmrEEEAAAFEAAAANptYXhwANMBWwAAAUgAAAAgbmFtZfvzgUcAAJvIAAATxXBvc3QvFPDYAACvkAAABM4AAQAAAAEAAD1TAUFfDzz1AAsIAAAAAADXPJGTAAAAANc8kZMAAP4SCYwHngAAAAgAAgAAAAAAAAABAAAGEv4SAAAPoAAAAAAJjAABAAAAAAAAAAAAAAAAAAAAbAABAAAAbAEqACUAAAAAAAIAAAABAAEAAABAAC4AAAAAAAMH1AGQAAUAAAnqBZkAAAEeCeoFmQAAA9cAZAIQAAACAAUDAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFBmRWQAQCAU+P8GEv4SALgHngHuAAAAAQAAAAAAAAAAAAAAIAABAuwARAAAAAACqgAAD6AAAAmMAAAJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMJjAJjCYwCYwmMAmMDIABEAyAAcwTGAC0ExgAtCJgAHwiYAB8ImAAfCJgAHwR+AC0ETAAmBEwAJgTGACsCWADIA4QAgwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwiYAB8ImAAfCJgAHwV4ACcImAAfCJgAHwiYAB8FRgBcBRQAOgiYAB8ImAAfA4QAhAVGAEQHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgdsAFoHbABaB2wAWgZeARwGXgHGBl4BxwTGARkExgEsB4AA1geAANYHgADNBMYBpQTGAbgHgAI/B4ACPweAAjYIngAKAAAAAwAAAAMAAAAcAAEAAAAAAIwAAwABAAAAHAAEAHAAAAAYABAAAwAIIBQliOoe8xnzIfMu8zPzVfNe82T4////AAAgFCWI6gHzAPMe8yrzMPNC81fzYPj////f79p8FgQNIw0fDRcNFg0IDQcNBgdsAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEGAAABAAAAAAAAAAECAAAAAgAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABrAAAAAAAAAAAAAAAAAAAAAAAARAURAAAALAAsACwALAA6AdwDfgUgBsAIYgoEC6QNRA7kEIYSKBPKFWwXDhiwGlIb9B2WHzgg2iJ+JCAlwidkKQYqqCxKLeovjDEuMUQxWDFsMYAx9DJmMtgzSjNsM4QzkjOmM8Q0DDSMNQI1cDXiNl43CDdUN5Y30DgOOFY4yDlSOcY6SDqWOxA7hjvqPAA8KjzSPUQ9ij2gPgg+iD8aP5ZAIEC0QR5BukJQQtxDUEPeRHxFAkWYRjpGsEdYR/hInkkGSThJdkmMSaJJtknKSexKAkoYSixKQEpiSu4AAAACAEQAAAJkBVUAAwAHAC6xAQAvPLIHBADtMrEGBdw8sgMCAO0yALEDAC88sgUEAO0ysgcGAfw8sgECAO0yMxEhESUhESFEAiD+JAGY/mgFVfqrRATNAAAAAQAA/hIJjAeeAAMAABEhESEJjPZ0B572dAAAACUCYwB1BykFOwAHAA8AIQAoACwANQBBAEsATwBTAFcAWwBlAHEAegCEAJQAmACcAKAApACpALkAvQDHAM8A2wDlAOkA8wD/AQcBDwEVARkBIQEpAAABIxUzPwE1JyUjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnJSMVMz8BNScGAQkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu/9jwkJBgIDAb4JCQYCAgUhRAMGMgYDRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAkQEBzIFAAAAJQJjAHUHKQU7AAcADwAXACkAMAA0AD0ASQBTAFcAWwBfAGMAbQB5AIIAjACcAKAApACoAKwAsQDBAMUAzwDXAOMA7QDxAPsBBwEPARcBHQEhASkAAAEjFTM/ATUnJSMVMz8BNScBIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwQ+CQkGAgMBvgkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgIFIUQDBjIGA0QDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgIGCQkGAgL+NwkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7wUhRAMGMgYDRAMGMgb7t0QEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAABIxUzPwE1JzchIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScGAQkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgIC/jcJCQYCAwUJCQYCAwUhRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFAkQEBzIFBE5EAwYyBgAlAmMAdQcpBTsABwAZACAAJAAtADkAQwBHAEsATwBTAF0AaQByAHwAjACQAJQAmACcAKEAsQC1AL8AxwDTAN0A4QDrAPcA/wEHAQ0BEQEZASEBKQAAJSMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBSMVMz8BNScDIxUzPwE1JyUjFTM/ATUnBgEJCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7/2PCQkGAgMFCQkGAgMBvgkJBgIC1UQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RT/RAQHMgUETkQDBjIGA0QDBjIGAAAAACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABJiMhIgcGFREUFjMhMjY1ETQHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBAyMVMz8BNScDIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScHBx8w/BwwICFDLgPkLUTVJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCAwUJCQYCAwUbICAiLPwbL0RELwPlLToZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIG+7dEBAcyBQJEBAcyBQRORAMGMgYAAAAAJQJjAHUHKQU7AAcADwAhACYANgA6AD4AQgBMAFQAYABqAG4AeACEAIwAkwCXAKAArAC2ALoAvgDCAMYA0ADcAOUA7wDzAQMBCQERARUBGQEhASkAACUjFTM/ATUnJSMVMz8BNScXMjY1ETQnJiMhIgcGFREUFjM3JicXJhcUBisBIj0BMxUfAT8BNTMvATUXMyMBPQIBIwcjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVEzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjARUBMyczFR8BPwE1MxUUBisBIjUHAQYHATYHNDcBBisBARUBIwEVASMJASMVMz8BNSclIxUzPwE1JwQ+CQkGAgMBvgkJBgICsS1EIh8w/BwwICFDLiUWBE0enAsKFRQXAgUHAxY2l92MRv7dAfZGgwc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0JxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLAu78zEVUFwIFBwMWCwoVFDgDegIR/GYXOwYDjw8PI/ysAw5G/TgCgUX9xAFhCQkGAgMBvgkJBgIC1UQEBzIFAkQEBzIFXkQvA+UtISAgIiz8Gy9ElxYeTgRaCw0XSUgGAwMGSA2WRtwBI0dGRv4KbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUD8RkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMz/QZGAzJuSAYCAgZISAsNFyL8hRwXA5wRWQ8Q/G8GA1VG/PECyUf9fgI9AfNEAwYyBgNEAwYyBgAAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAAlIxUzPwE1JwEiBwYVERQWMyEyNjURNCcmIwcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScEPgkJBgID/pEwICFDLgPkLUQiHzBkJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCA9VEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0U/0QEBzIFBE5EAwYyBgNEAwYyBgAlAmMAdQcpBTsABwAPACEAJgA2ADoAPgBCAEwAVABgAGoAbgB4AIQAjACTAJcAoACsALYAugC+AMIAxgDQANwA5QDvAPMBAwEJAREBFQEZASEBKQAAJSMVMz8BNScDIxUzPwE1JxMyNjURNCcmIyEiBwYVERQWMzcmJxcmFxQGKwEiPQEzFR8BPwE1My8BNRczIwE9AgEjByMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhUTMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMBFQEzJzMVHwE/ATUzFRQGKwEiNQcBBgcBNgc0NwEGKwEBFQEjARUBIwkBIxUzPwE1JwMjFTM/ATUnBgEJCQYCAgYJCQYCArEtRCIfMPwcMCAhQy4lFgRNHpwLChUUFwIFBwMWNpfdjEb+3QH2RoMHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3CwLu/MxFVBcCBQcDFgsKFRQ4A3oCEfxmFzsGA48PDyP8rAMORv04AoFF/cQBYQkJBgIDBQkJBgID1UQEBzIFBE5EAwYyBvtXRC8D5S0hICAiLPwbL0SXFh5OBFoLDRdJSAYDAwZIDZZG3AEjR0ZG/gptMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFQPxGRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzP9BkYDMm5IBgICBkhICw0XIvyFHBcDnBFZDxD8bwYDVUb88QLJR/1+Aj39p0QEBzIFBE5EAwYyBgAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAACUjFTM/ATUnASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzCQEjFTM/ATUnJSMVMz8BNScDIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgIGCQkGAgLVRAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FANNRAMGMgYDRAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAKQAwADQAPQBJAFMAVwBbAF8AYwBtAHkAggCMAJwAoACkAKgArACxAMEAxQDPANcA4wDtAPEA+wEHAQ8BFwEdASEBKQAAASMVMz8BNSclIxUzPwE1JwMjFTM/ATUnEyEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnBD4JCQYCAwG+CQkGAgIGCQkGAgKx/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu/9jwkJBgIDBSFEAwYyBgNEAwYyBvu3RAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQAAACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAAlIxUzPwE1JyUjFTM/ATUnASMVMz8BNSclIxUzPwE1JzchIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAv43CQkGAgMBvgkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv1UQEBzIFAkQEBzIFBE5EAwYyBgNEAwYyBh0gIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAAAAAJQJjAHUHKQU7AAcADwAXAB8AMQA4ADwARQBRAFsAXwBjAGcAawB1AIEAigCUAKQAqACsALAAtAC5AMkAzQDXAN8A6wD1APkBAwEPARcBHwElASkAAAEjFTM/ATUnASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQYBCQkGAgL+NwkJBgIDAb4JCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUCRAQHMgUETkQDBjIGHSAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FAAlAmMAdQcpBTsAEQAYABwAJQAxADsAPwBDAEcASwBVAGEAagB0AIQAiACMAJAAlACZAKkArQC3AL8AywDVANkA4wDvAPcA/wEFAQkBEQEZASEBKQAAASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnJSMVMz8BNScBIxUzPwE1JyUjFTM/ATUnBrj8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgNEAwYyBvu3RAQHMgUCRAQHMgUAACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAAlIxUzPwE1JyUjFTM/ATUnAyMVMz8BNSclIxUzPwE1JyUhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAgYJCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv1UQEBzIFAkQEBzIFBE5EAwYyBgNEAwYyBh0gIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAAAAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAAAEjFTM/ATUnJSEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQUjFTM/ATUnJSMVMz8BNScDIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgIGCQkGAgIFIUQDBjIGHSAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQJEBAcyBQRORAMGMgYAAAAlAmMAdQcpBTsAEQAYABwAJQAxADsAPwBDAEcASwBVAGEAagB0AIQAiACMAJAAlACZAKkArQC3AL8AywDVANkA4wDvAPcA/wEFAQkBEQEZASEBKQAAASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnBrj8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBvu3RAQHMgUCRAQHMgUETkQDBjIGACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBByMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScGuPwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgIC/jcJCQYCAwG+CQkGAgL+NwkJBgIDBTsgIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RT/RAQHMgUCRAQHMgUETkQDBjIGA0QDBjIGAAAAJQJjAHUHKQU7AAcADwAhACgALAA1AEEASwBPAFMAVwBbAGUAcQB6AIQAlACYAJwAoACkAKkAuQC9AMcAzwDbAOUA6QDzAP8BBwEPARUBGQEhASkAACUjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMJASMVMz8BNSclIxUzPwE1JwYBCQkGAgL+NwkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7/2PCQkGAgMBvgkJBgIC1UQEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIGA0QDBjIGAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNScBIxUzPwE1JwMjFTM/ATUnASMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBgEJCQYCAv43CQkGAgMFCQkGAgMBvgkJBgICsfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UACUCYwB1BykFOwAHAA8AFwAfADEAOAA8AEUAUQBbAF8AYwBnAGsAdQCBAIoAlACkAKgArACwALQAuQDJAM0A1wDfAOsA9QD5AQMBDwEXAR8BJQEpAAABIxUzPwE1JwEjFTM/ATUnAyMVMz8BNScBIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEEPgkJBgIDAb4JCQYCAgYJCQYCAv43CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvBSFEAwYyBvu3RAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UAAAAACUCYwB1BykFOwAHABkAIAAkAC0AOQBDAEcASwBPAFMAXQBpAHIAfACMAJAAlACYAJwAoQCxALUAvwDHANMA3QDhAOsA9wD/AQcBDQERARkBIQEpAAAlIxUzPwE1JwEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEHIxUzPwE1JwMjFTM/ATUnJSMVMz8BNScEPgkJBgIDAnX8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC764JCQYCAgYJCQYCAv43CQkGAgPVRAQHMgUEaCAiLPwbL0RELwPlLSEgexkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMzYEgGAgIGSEgLDRfl/PECyUf9fgI9jUb+CgEjR/6xFh5OBFoLDRdJSAYDAwZIDZZG3G0zM2AwMEgYYQEVBhwNGw1gDxwNKGBgYGAzM2AwMA8cDRsNYEgYYQEVIgNVIw8Q/G8GJAOcEQH8hRxiAzL9FP9EBAcyBQRORAMGMgYDRAMGMgYAAAAAJQJjAHUHKQU7AAcAGQAgACQALQA5AEMARwBLAE8AUwBdAGkAcgB8AIwAkACUAJgAnAChALEAtQC/AMcA0wDdAOEA6wD3AP8BBwENAREBGQEhASkAACUjFTM/ATUnASEiBwYVERQWMyEyNjURNCcmBzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjJzMVHwE/ATUzFRQGKwEiNQcBIwEVASMBFTUBKwIBNRMmJxcmFxQGKwEiPQEzFR8BPwE1My8BNR8BIycVIzUzFzUzFxQrATUXMhU3IxUzFSMVMxUjNTMXIxUzFSMVIzUzFyM1MxcjJxUjNTMXNTMXIxUzFSMVMxUjNTMXFCsBNRcyFTcjATU0NwEGNwE2NwEGNwEzAQMjFTM/ATUnAyMVMz8BNScBIxUzPwE1JwQ+CQkGAgMCdfwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLvrgkJBgICBgkJBgIC/jcJCQYCA9VEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBvu3RAQHMgUETkQDBjIGAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAJSMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNSc3ISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC79VEBAcyBQJEBAcyBQRORAMGMgYDRAMGMgYdICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UAAAAACUCYwB1BykFOwARABgAHAAlADEAOwA/AEMARwBLAFUAYQBqAHQAhACIAIwAkACUAJkAqQCtALcAvwDLANUA2QDjAO8A9wD/AQUBCQERARkBIQEpAAABISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMJASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScGuPwcMCAhQy4D5C1EIh+UJxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLVRcCBQcDFgsKFRSPAw5G/TgCgUX9xAH2RkdG/t0cFgRNHpwLChUUFwIFBwMWNpfdUAc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0I/ysBgOPDzj8ZhccA3oCA/zMRQLv/Y8JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCAgU7ICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgNEAwYyBvu3RAQHMgUCRAQHMgUAJQJjAHUHKQU7ABEAGAAcACUAMQA7AD8AQwBHAEsAVQBhAGoAdACEAIgAjACQAJQAmQCpAK0AtwC/AMsA1QDZAOMA7wD3AP8BBQEJAREBGQEhASkAAAEhIgcGFREUFjMhMjY1ETQnJgcyFxYdAScXFSUzJzMyHQEUBisBJzMVIxUzFSMVMxUjJzMXNTMVIycVIxcBFQkBFQEzARUBMzczFSMnMxUjFTMVIxUjJzMVIxUzFSMVMxUjJzMyHQEUBisBJzMXNTMVIycVIyczFR8BPwE1MxUUBisBIjUHASMBFQEjARU1ASsCATUTJicXJhcUBisBIj0BMxUfAT8BNTMvATUfASMnFSM1Mxc1MxcUKwE1FzIVNyMVMxUjFTMVIzUzFyMVMxUjFSM1MxcjNTMXIycVIzUzFzUzFyMVMxUjFTMVIzUzFxQrATUXMhU3IwE1NDcBBjcBNjcBBjcBMwEDIxUzPwE1JwMjFTM/ATUnASMVMz8BNScDIxUzPwE1Jwa4/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgIGCQkGAgL+NwkJBgIDBQkJBgIDBTsgIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQDTUQDBjIG+7dEBAcyBQRORAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScTISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBD4JCQYCAwG+CQkGAgL+NwkJBgIDAb4JCQYCArH8HDAgIUMuA+QtRCIflCcZG3V1/v9GEioUCgoqSzQcExMcNGAGNA0GNgsxAUf+cwGN/eRJAdP9WEW6GBhGNR4VFRdNNRwTExw1VCoUCgoqXgY2DQc3C1UXAgUHAxYLChUUjwMORv04AoFF/cQB9kZHRv7dHBYETR6cCwoVFBcCBQcDFjaX3VAHNwsGNg1TFCoqFEscExMcNTVNHhUVFzUpGBhgBjYLBjQNTRwTExw0NFUUKikVNCP8rAYDjw84/GYXHAN6AgP8zEUC7wUhRAMGMgYDRAMGMgb7t0QEBzIFAkQEBzIFBGggIiz8Gy9ERC8D5S0hIHsZGyMacbdG/W4VMwsNYA0bDRwPYDAwYDMzDv69RwGK/jBJAhn9oUcCpm5gYg8bDSleDRsNHA9gFTMLDWAwMGAzM2BIBgICBkhICw0X5fzxAslH/X4CPY1G/goBI0f+sRYeTgRaCw0XSUgGAwMGSA2WRtxtMzNgMDBIGGEBFQYcDRsNYA8cDShgYGBgMzNgMDAPHA0bDWBIGGEBFSIDVSMPEPxvBiQDnBEB/IUcYgMy/RQAACUCYwB1BykFOwARABYAJgAqAC4AMgA8AEQAUABaAF4AaAB0AHwAgwCHAJAAnACmAKoArgCyALYAwADMANUA3wDjAPMA+QEBAQUBCQERARkBIQEpAAAlMjY1ETQnJiMhIgcGFREUFjM3JicXJhcUBisBIj0BMxUfAT8BNTMvATUXMyMBPQIBIwcjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVEzIXFh0BJxcVJTMnMzIdARQGKwEnMxUjFTMVIxUzFSMnMxc1MxUjJxUjFwEVCQEVATMBFQEzNzMVIyczFSMVMxUjFSMnMxUjFTMVIxUzFSMnMzIdARQGKwEnMxc1MxUjJxUjARUBMyczFR8BPwE1MxUUBisBIjUHAQYHATYHNDcBBisBARUBIwEVASMJASMVMz8BNScDIxUzPwE1JyUjFTM/ATUnAyMVMz8BNScGuC1EIh8w/BwwICFDLiUWBE0enAsKFRQXAgUHAxY2l92MRv7dAfZGgwc3CwY2DVMUKioUSxwTExw1NU0eFRUXNSkYGGAGNgsGNA1NHBMTHDQ0VRQqKRU0JxkbdXX+/0YSKhQKCipLNBwTExw0YAY0DQY2CzEBR/5zAY395EkB0/1YRboYGEY1HhUVF001HBMTHDVUKhQKCipeBjYNBzcLAu78zEVUFwIFBwMWCwoVFDgDegIR/GYXOwYDjw8PI/ysAw5G/TgCgUX9xAFhCQkGAgMFCQkGAgMBvgkJBgICBgkJBgICdUQvA+UtISAgIiz8Gy9ElxYeTgRaCw0XSUgGAwMGSA2WRtwBI0dGRv4KbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUD8RkbIxpxt0b9bhUzCw1gDRsNHA9gMDBgMzMO/r1HAYr+MEkCGf2hRwKmbmBiDxsNKV4NGw0cD2AVMwsNYDAwYDMz/QZGAzJuSAYCAgZISAsNFyL8hRwXA5wRWQ8Q/G8GA1VG/PECyUf9fgI9/adEBAcyBQRORAMGMgYDRAMGMgb7t0QEBzIFAAAlAmMAdQcpBTsABwAPABcAHwAxADgAPABFAFEAWwBfAGMAZwBrAHUAgQCKAJQApACoAKwAsAC0ALkAyQDNANcA3wDrAPUA+QEDAQ8BFwEfASUBKQAAASMVMz8BNSclIxUzPwE1JwEjFTM/ATUnJSMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBBgEJCQYCAv43CQkGAgMBvgkJBgIC/jcJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu8FIUQDBjIGA0QDBjIG+7dEBAcyBQJEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UACUCYwB1BykFOwAHAA8AFwApADAANAA9AEkAUwBXAFsAXwBjAG0AeQCCAIwAnACgAKQAqACsALEAwQDFAM8A1wDjAO0A8QD7AQcBDwEXAR0BIQEpAAAlIxUzPwE1JwEjFTM/ATUnAyMVMz8BNScBISIHBhURFBYzITI2NRE0JyYHMhcWHQEnFxUlMyczMh0BFAYrASczFSMVMxUjFTMVIyczFzUzFSMnFSMXARUJARUBMwEVATM3MxUjJzMVIxUzFSMVIyczFSMVMxUjFTMVIyczMh0BFAYrASczFzUzFSMnFSMnMxUfAT8BNTMVFAYrASI1BwEjARUBIwEVNQErAgE1EyYnFyYXFAYrASI9ATMVHwE/ATUzLwE1HwEjJxUjNTMXNTMXFCsBNRcyFTcjFTMVIxUzFSM1MxcjFTMVIxUjNTMXIzUzFyMnFSM1Mxc1MxcjFTMVIxUzFSM1MxcUKwE1FzIVNyMBNTQ3AQY3ATY3AQY3ATMBAyMVMz8BNScGAQkJBgIC/jcJCQYCAwUJCQYCAwJ1/BwwICFDLgPkLUQiH5QnGRt1df7/RhIqFAoKKks0HBMTHDRgBjQNBjYLMQFH/nMBjf3kSQHT/VhFuhgYRjUeFRUXTTUcExMcNVQqFAoKKl4GNg0HNwtVFwIFBwMWCwoVFI8DDkb9OAKBRf3EAfZGR0b+3RwWBE0enAsKFRQXAgUHAxY2l91QBzcLBjYNUxQqKhRLHBMTHDU1TR4VFRc1KRgYYAY2CwY0DU0cExMcNDRVFCopFTQj/KwGA48POPxmFxwDegID/MxFAu+uCQkGAgLVRAQHMgUETkQDBjIG+7dEBAcyBQRoICIs/BsvREQvA+UtISB7GRsjGnG3Rv1uFTMLDWANGw0cD2AwMGAzMw7+vUcBiv4wSQIZ/aFHAqZuYGIPGw0pXg0bDRwPYBUzCw1gMDBgMzNgSAYCAgZISAsNF+X88QLJR/1+Aj2NRv4KASNH/rEWHk4EWgsNF0lIBgMDBkgNlkbcbTMzYDAwSBhhARUGHA0bDWAPHA0oYGBgYDMzYDAwDxwNGw1gSBhhARUiA1UjDxD8bwYkA5wRAfyFHGIDMv0UA01EAwYyBgAAAQBE/+ECrQRMAAUAAAkCNwkBAjH+EwHtfP5xAY8ETP3K/ctrAcoBywAAAAABAHP/4QLcBEwABQAANxcJAQcBc3wB7f4TfAGPTGsCNQI2a/41AAAAAQAtAPoEmQNiAAUAAAkBNwkBFwJjAcps/cr9ymwCif5xewHt/hN7AAEALQDLBJkDMwAFAAATBwkBJwGZbAI2AjZs/jYDM3v+EwHte/5xAAADAB/+jwh5BuoAGABAAEYAAAEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUlJwkBNwEETNrGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRf1ofP5AAcB8/p0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT8iVq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaOJbP39/f1rAZgAAAAAAwAf/o8IeQbqABcAPwBFAAAAIDc2ADc2ECcmACcmIAcGAAcGEBcWABcBJjQ3PgU3NjIXHgUXFhQHDgUHBiInLgUFFwkBBwEDcgG0xsABKFFUVFH+2MDG/kzGwP7YUVRUUQEowP4pEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQKYfAHA/kB8AWP+j1RSASi/xwGzx8ABKFFUVFH+2MDH/k3Hv/7YUgMjWrlaWKORe2NFERMTEUVifJGjWFq5WlejkntiRRITExJFYnuSo4prAgMCA2z+aQAAAwAf/o8IeQbqABcAPwBFAAAAIAcGAAcGEBcWABcWIDc2ADc2ECcmACcBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUBFwkBNwEFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfqYbAGXAZds/f0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRo/6gewFi/p57AcEAAwAf/o8IeQbqABcAPwBFAAAAIAcGAAcGEBcWABcWIDc2ADc2ECcmACcBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUJAQcJAScFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfyb/mlsAgMCA2wG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRo/5cAWN8/j8BwXwAAQAtAAUEUQQoAAsAAAkCBwkBFwkBNwkBA93+Yv5idAGe/mJ0AZ4BnnT+YgGeBCj+YgGec/5i/mFzAZ7+YnMBnwGeAAABACYAFwQmBBcACwAAJREhNSERIxEhFSERAngBrv5SpP5SAa4XAa6kAa7+UqT+UgABACYBxQQmAmkAAwAAEyEVISYEAPwAAmmkAAAAAQArAHQEmwOFAAUAABMHCQEnAZtwAasCxXD9qgJ5eP5zApl4/c8AAAIAyAAJAZEEJAAFAA0AABM7ARMjEwIWMjYuASIG2R6ICbgJETpVOgE5VToBQwLh/Tz+4zo6VTo6AAAAAAIAgwAJAwAEJAAlAC4AAAE2NTQuAiMiBwYHDgEPATM3PgEzMhYVFAYHBgcGFxUzNTQ2NzYDIgYUFjI2NCYCZZsuVXNESj06KictAwGhAgVRRUJRLDhMJCUBpAkKFnsqOjpVOTkCFV2jOWRKKBYVKSZoPhcUQkpGODBBIi40OEpVQhokDx/+4TpVOjpVOgAAAAMAH/6PCHkG6gALACQATAAACQIHCQEXCQE3CQIiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUFgf7L/st0ATX+y3QBNQE1dP7LATX+V9rGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQRm/ssBNXT+y/7LdAE1/st0ATUBNQL4VFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVPyJWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowADAB/+jwh5BuoACwAjAEsAAAEjESEVIREzESE1IRIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQSepP5FAbukAbv+RYj+TMbA/thRVFRRASjAxgG0xsABKFFUVFH+2MAB1xISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkUEyv5FpP5FAbukA9tUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaMAAAMAH/6PCHkG6gADABwARAAAASEVIQEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgUCbwO6/EYB3drGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQMPpAR/VFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVPyJWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowAAAAADAB/+kAh5BuoABQAdAEUAAAkBBwkBJwIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQO//sZwAaoCxHDu/k7HwP7YUVRUUQEowMcBssfAAShRVFRR/tjAAdcSEhJFYnyRo1daulpXo5F8YkUSEhISRWJ8kaNXWrpaV6ORfGJFAfMBJHn+dAKYeALIVFL+2cDH/k3GwP7YUVRUUQEowMYBs8fAASdS/N1auVpXo5J7YkUSEhISRWJ7kqNXWrlaWKORe2JFEhMTEkVie5GjAAAEAB/+jwh5BuoAFwA/AEUATgAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FARUzEyMVEyIOARYyNjQmBSb+TMbA/thRVFRRASjAxgG0xsABKFFUVFH+2MAB1xISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkX8SaQJtlsqOgE7VTo6BupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaP+PRwC3h38yzpUOzpVOgAAAAQAH/6PCHkG6gAYAEEASQBwAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYXFhQHDgUHBiInLgUnJjQ3PgU3NjIXHgQAIgYUFjI2NBMuASMiBwYHDgEPATM3PgEzMhYVFAYHBgcGFxUzNTQ2NzY3NjU0JgRM2sbA/thRVFRRASjAxgGzx8ABKFFUVFH+2MDHAnAkEhISEkZjfZKlWFu7Wlmkk3xjRhISEhJGY3yTpFlau1tYpZJ9Y/zvVDo6VDqVKnNESj06KicsBAGhAQVSRUJRLDhMIyYBowoKFT2aLQbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShRVP02U1hbu1tYpJN8Y0YSExMSRmN8k6RYW7tbWKWSfWNFEhMTEkVjfZL9BjlVOjpVAz8lKBYVKSZoPRcUQkpGOTBBIi41N0pVQhokDx8kXaM5ZAAAAAACAB/+jwh5BuoAGAAkAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmEwcJAScJATcJARcBBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMfQdP7L/st0ATX+y3QBNQE1dP7LBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFFU+p50ATX+y3QBNQE1dP7LATV0/ssAAAIAH/6PCHkG6gAXACMAAAAgBwYABwYQFxYAFxYgNzYANzYQJyYAJxMhESMRITUhETMRIQUm/kzGwP7YUVRUUQEowMYBtMbAAShRVFRR/tjAbf5FpP5FAbukAbsG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfvV/kUBu6QBu/5FAAIAH/6PCHkG6gAYABwAAAEiBwYABwYQFxYAFxYgNzYANzYQJyYAJyYBITUhBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcBBPxGA7oG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT7gaQAAAAAAgAf/pAIeQbqABcAHQAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnCQE3CQEXBSX+TsfA/thRVFRRASjAxwGyx8ABKFFUVFH+2MD90/5WcAE6AlRwBupUUv7ZwMf+TcbA/thRVFRRASjAxgGzx8ABJ1L6fAGMef7cAi94AAMAH/6PCHkG6gAXAB0AJQAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnATsBAyMDEgYiJj4BMhYFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwP4ifB0JpAnAOlU7ATpVOgbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShR/jT9IgLe/B86OlU6OgAAAAMAH/6PCHkG6gAYACAARgAAASIHBgAHBhAXFgAXFiA3NgA3NhAnJgAnJgIGIiY0NjIWEwYHDgEdASM1Jjc2Nz4BNTQmIyIGDwEjNz4BNzY3NjMyHgIVFARM2sbA/thRVFRRASjAxgGzx8ABKFFUVFH+2MDHiTpUOjpUOlM9FQoKowEmI0w4LFFCRVIFAaEBBCwnKjo9SkRzVS0G6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT6ADo6VTk5AX0kHw8kGkJVSjc1LiJBMDlGSkIUFz1oJikVFihKZDmjAAAAAAQAH/6PCHkG6gAYAEAAUgBVAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FBQEmIg4BFREUHgEyNwE+ATQmAREBBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcCnhISEkVifJGjV1q6WlejkXxiRRISEhJFYnyRo1daulpXo5F8YkX+UP2MFzcvGxsvNhkCchgbG/2BAbwG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT8iVq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaO3AX0OGy8b/QYbLxwPAXwNMDUv/qkCG/7zAAAAAAQAH/6PCHkG6gAYAEAARABIAAABMjc2ADc2ECcmACcmIAcGAAcGEBcWABcWASY0Nz4FNzYyFx4FFxYUBw4FBwYiJy4FATMRIwEzESMETNnHwAEoUVRUUf7YwMf+TcbA/thRVFRRASjAxv1jEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQQtpKT9zKSk/o9UUgEov8cBs8fAAShRVFRR/tjAx/5Nx7/+2FJUA3dauVpYo5F8YkURExMRRWJ8kaNYWrlaV6OSe2JFEhMTEkVie5KjAs78gAOA/IAAAAAEAB/+jwh5BuoAFwA/AE8AUwAAACAHBgAHBhAXFgAXFiA3NgA3NhAnJgAnARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FJSEiBhURFBYzITI2NRE0JgMhESEFJv5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRf33/UgpOzspArgpOztp/cgCOAbqVFH+2MDH/k3Hv/7YUlRUUgEov8cBs8fAAShR/N1auVpXo5J7YkUSExMSRWJ7kqNXWrlaWKORfGJFERMTEUVifJGjsjsp/UgqOjoqArgpO/0kAjgAAAEAJwAnBVEGQQAvAAABDgEHBiInLgEnJjQ3PgE3NjMyFwcXCQEHFyMiBw4BBwYQFx4BFxYgNz4BNzY1IxQEhiWKWV3KXVmKJScnJYpZXWUWFod8ASP+3XxzGId6d7cyNDQyt3d6AQ56d7cyNKQB+1mKJicnJopZXMtcWYomJwKbawFNAU5rhDQyt3d7/vN7drgyNDQyuHZ7h2YAAAQAH/6PCHkG6gAYAEAASABOAAABIgcGAAcGEBcWABcWIDc2ADc2ECcmACcmARYUBw4FBwYiJy4FJyY0Nz4FNzYyFx4FACIGFBYyNjQHIxEzESMETNrGwP7YUVRUUQEowMYBs8fAAShRVFRR/tjAxwKeEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRfzDUDo5UTqPJaQlBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFFU/IlauVpXo5J7YkUSExMSRWJ7kqNXWrlaWKORfGJFERMTEUVifJGjAP84UTk5UNT88gMOAAADAB/+jwh5BuoACAAgAEgAAAERIxElBwkBJwIgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQSepP7lawHYAdhrk/5MxsD+2FFUVFEBKMDGAbTGwAEoUVRUUf7YwAHXEhISRWJ8kaNXWrpaV6ORfGJFEhISEkVifJGjV1q6WlejkXxiRQHMAv79AvZ7/mQBnHsEKFRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUfzdWrlaV6OSe2JFEhMTEkVie5KjV1q5WlijkXxiRRETExFFYnyRowAAAAIAH/6PCHkG6gAXAD8AAAAgBwYABwYQFxYAFxYgNzYANzYQJyYAJwEWFAcOBQcGIicuBScmNDc+BTc2MhceBQUm/kzGwP7YUVRUUQEowMYBtMbAAShRVFRR/tjAAdcSEhJFYnyRo1daulpXo5F8YkUSEhISRWJ8kaNXWrpaV6ORfGJFBupUUf7YwMf+Tce//thSVFRSASi/xwGzx8ABKFH83Vq5WlejkntiRRITExJFYnuSo1dauVpYo5F8YkURExMRRWJ8kaMAAQBc/9AFAgR2AAgAABcBETMRIRUhAdADjqT8TgKa/HIwA479ZQOzpPxxAAACADr/kATaBkMACwAUAAABFTMRIREzNSERIREBETMRFzcJARcDiqz8qKz+sASg/V6ktHT+hv6GdAPvpPzpAxek+6EEXwEa/SgC2LR0AXr+hnQAAAAEAB/+jwh5BuoAGABBAEkAbwAAASIHBgAHBhAXFgAXFiA3NgA3NhAnJgAnJgEOBAcGIicuBScmNDc+BTc2MhceBRcWFAcGBBYUBiImNDYBFyMnLgEjIgYVFBYXFhcWHQEjNTQmJyYnJjU0PgIzMhcWFx4BBEzaxsD+2FFUVFEBKMDGAbPHwAEoUVRUUf7YwMcCcCJjfZKlWFu7Wlmkk3xjRhISEhJGY3yTpFlau1tYpZJ9Y0YSEhIS/NE6OlU5OQFUAqEBBVJFQlItOEwjJaQJChU9my5Vc0RKPToqJywG6lRR/tjAx/5Nx7/+2FJUVFIBKL/HAbPHwAEoUVT6b1GTfGNGEhMTEkZjfJOkWFu7W1ilkn1jRRITExJFY32SpVhbu1tYNDpUOjpVOQI0FxRCSkY5MEEiLjU3SlVCGiQPHyRdozlkSigWFSkmaAAAAAADAB/+jwh5BuoAGAAhAEcAABMUFxYAFxYgNzYANzYQJyYAJyYgBwYABwYBNDYyFhQGIiYDND4CMzIXFhceAR8BIycuASMiBhUUFhcWFxYdASM1NCYnJicmH1RRASjAxgGzx8ABKFFUVFH+2MDH/k3GwP7YUVQD3TlVOjpVOe4uVXNESj06KicsAwKhAQVSRUJSLThMIyWkCQoVPZsCvdrHv/7YUlRUUgEov8cBs8fAAShRVFRR/tjAx/1+Kzk6VDo6AtI5ZEooFhUpJmg9FxRCSkY5MEEiLjU3SlVCGiQPHyRdAAACAIQACQMBBCQABwAtAAAkFhQGIiY0NgEuAScmJyYjIg4CFRQXFhceAR0BMzU2JyYnLgE1NDYzMhYfATMCADo6VTk5AVUDLScqOj1KRHNVLps8FgoJpAElJEw4LFFCRVEFAqHSOlU6OlU6AjI+aCYpFRYoSmQ5o10kHw8kGkJVSjg0LiJBMDhGSkIUAAEARP/QBOoEdgAIAAAlASE1IREzEQEE6vxyApr8TqQDjkMDj6T8TQKb/HIAAwBa/3YHEgYuABcAOQBBAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf8gYoDpqYGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjQAAAMAWv92BxIGLgAXADkAVAAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUFNzY3NjQuASIOAR0BMzU0NjIWFAYPARUhNSMEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/1VhSYVJDZkiGg5lyk/JBod4gG/6gYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOk3UhHTJlTiswWDkDBB4oHy8rGshvfQADAFr/dgcSBi4AFwA5AGQAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJTU+ATU0LgEjIg4BFTM0NjIWFAYrARUzMhYUBiMiJicjHgIzMj4BNTQmBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf9sDRCNWJDRGk5lSlDJyYhREQjJyghJCoBngM7aERKbzxKBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY4QAwlGMjBGJi9VOB4lHzUgbiA2IiEcOVYuKk40OUcABABa/3YHEgYuABcAOQBHAE8AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVASMGBwYHFSEVMzUzNSMHIzU2NzY3MwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/fLlSS8uJwEWnENDmJAgIhoxAwYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOASBvUE1LiVRUfwcFRDssTAAAAAADAFr/dgcSBi4AFwA5AFsAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJSIGByM3ITUhAzM+ATMyFhQGIyImJyMUHgEzMj4BNTQuAQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/YYsQQ8DCAEL/nYZkQwpGCMrKyMfLgWVO2hDRWs6L1QGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjmslIH19/rMTFi1JLCEaNVQvNF4+N1YxAAAEAFr/dgcSBi4AFwA4AFkAYgAABCA3PgE3NhAnLgEnJiAHDgEHBhAXHgEXATQ3PgM3NiAXHgMXFhAHDgMHBiAnLgMnJgUyPgE1NC4BIgcGByMmPgEzMhYXMy4CIyIOARUUHgITMhYUBiImNDYDBwFeoJruQUREQe6aoP6ioJruQUREQe6a/pc3GktfcD6BARyBPnBfSxo3NxpLX3A+gf7kgT5wX0saNwLGQ2s7MFVqJiQPAwQWLyAYJQagBj9jO0xzPyNBYDkhLCxBLCyKQ0Hum6ABXaCb7kFEREHum6D+o6Cb7kEDGY2BPnBfTBo2NhpMX3A+gf7lgT5wX0waNjYaTF9wPoGWNF47NVUwGhgqM04qFxIwSytIh1tCcE4pARMrPywsPysAAAMAWv92BxIGLgAXADkAQQAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlIRUDMxM1IQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/IMBDuat3P5PBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY6jA/5MAbh8AAAABQBa/3YHEgYuABcAOQBVAF4AZwAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlNT4BNTQuASIOARUUFhcVDgEVFB4BMj4BNTQmJzIWFAYiJjQ2EyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf9tzREOmiHaDpENUBQPnKYcj9PrRwmJjklJR0jKytFKysGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjhUDCUkwK0QnJ0QrMEkJAwZPOzJMKipMMjpQsyQ1JCQ1JP6JKD0oKD0oAAAABABa/3YHEgYuABcAOQBbAGMAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVASIOARUUHgEzMjc2NzMWDgEjIiYnIx4CMzI+ATU0LgICIiY0NjIWFARl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/UpDaz0yVTQ4JiQNAwQVLh8aJwahBz9kO09zPSJBYhlALS1ALAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOATA0Xjs1VTAaGCo1TSkXEjBLK0iGXEJwTin+7StAKytAAAAABQBa/3YHEgYuABcAOQBBAE4AWgAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIyUiDgEUHgEyPgE0LgECIicmNDc2MhcWFAcEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uBigOmpgIQTHA9PXCXcD09cCdIFhYWFUkVFhYGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjQQRoa5hkhIh7mFRv4sKi6oLCkpLKguAAQAWv92BxIGLgAXADkAQQBJAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjBRU3MxEzESMEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/u1igOmpgEYiwOlpQYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNF6LW/5aAjQAAAAEAFr/dgcSBi4AFwA5AEEAXQAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIwE3Njc2NC4BIg4BHQEzNTQ2MhYUBg8BFSE1IzUEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uFigOmpgHxhSYVJDZjiWg5lyk/JBod4gG/6QYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNP5NdSEdMmVOKzBYOQMEHigfLysayG99BAAAAAQAWv92BxIGLgAXADkAQQBsAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjATU+ATU0LgEjIg4BFTM0NjIWFAYrARUzMhYUBiMiJicjHgIzMj4BNTQmBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7hooDpqYCaTRBNWJCRWk5lSlDJyYgRUQjJyghJCoBngM7aERKbzxKBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY7Ci1v+WgI0/vADCUYyMEYmL1U4HiUfNSBuIDYiIRw5Vi4qTjQ5RwAFAFr/dgcSBi4AFwA5AEEATwBXAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjISMGBwYHFSEVMzUzNSMHIzU2NzY3MwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+4GLA6WlAsXlSTAuJgEVnUNDmJAgIhkyAwYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNG9QTUuJVFR/BwVEOyxMAAAABABa/3YHEgYuABcAOQBBAGMAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMFIgYHIzchNSEDMz4BMzIWFAYjIiYnIx4CMzI+ATU0LgEEZf6ioJruQUREQe6aoAFeoJruQUREQe6aAWk3GktfcD6B/uSBPnBfSxo3NxpLX3A+gQEcgT5wX0saN/uHigOmpgI+LUAQAwgBC/52GZEMKRgjLCwjHy4FlQE6aUJGajswVAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNLUlIH19/rMTFi1JLCEaNVQvNF4+N1YxAAAABQBa/3YHEgYuABcAOQBBAGMAbAAAACAHDgEHBhAXHgEXFiA3PgE3NhAnLgEnARQHDgMHBiAnLgMnJhA3PgM3NiAXHgMXFhUlFTczETMRIwUiBwYHIyY+ATMyFhczLgIjIg4BFRQeAjMyPgE1NC4BAyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7g4oDpqYCRjYmJA8DBBYvIBglBqEHP2M7THM/I0FhOkRqPDFVZiAsLEEsLAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNLwaGCozTioXEjBLK0iHW0JwTik0Xjs1VTD+9iw/Kys/LAAABABa/3YHEgYuABcAOQBBAEkAAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMFIRUDMxM1IQRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+5+KBKWlAQ0BDuau3P5OBi5EQe6boP6joJvuQUNDQe6boAFdoJvuQfzojoE+cF9MGjY2GkxfcD6BARuBPnBfTBo2NhpMX3A+gY7Ci1v+WgI0fQP+TAG4fAAAAAAGAFr/dgcSBi4AFwA5AEEAXQBmAG8AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVJRU3MxEzESMBNT4BNTQuASIOARUUFhcVDgEVFB4BMj4BNTQmJzIWFAYiJjQ2EyImNDYyFhQGBGX+oqCa7kFEREHumqABXqCa7kFEREHumgFpNxpLX3A+gf7kgT5wX0saNzcaS19wPoEBHIE+cF9LGjf7dosDpaUCgTREOmiHaTpFNUBQPnKXcz9QrR0mJjkmJhwiLCxFKysGLkRB7pug/qOgm+5BQ0NB7pugAV2gm+5B/OiOgT5wX0waNjYaTF9wPoEBG4E+cF9MGjY2GkxfcD6BjsKLW/5aAjT+9QMJSTArRCcnRCswSQkDBk87MkwqKkwyOlCzJDUkJDUk/okoPSgoPSgAAAAFAFr/dgcSBi4AFwA5AEEAYwBrAAAAIAcOAQcGEBceARcWIDc+ATc2ECcuAScBFAcOAwcGICcuAycmEDc+Azc2IBceAxcWFSUVNzMRMxEjJSIOARUUHgEzMjc2NzMWDgEjIiYnIx4CMzI+ATU0LgICIiY0NjIWFARl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3+5WKA6amAgBDaz0yVTQ4JiQNAwUWLh8aJwWiB0BjPE5zPiNBYhlALS1ALAYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOwotb/loCNBA0Xjs1VTAaGCo1TSkXEjBLK0iGXEJwTin+7StAKytAAAUAWv92BxIGLgAXADkAVABhAG0AAAAgBw4BBwYQFx4BFxYgNz4BNzYQJy4BJwEUBw4DBwYgJy4DJyYQNz4DNzYgFx4DFxYVBTc2NzY0LgEiDgEdATM1NDYyFhQGDwEVITUjASIOARQeATI+ATQuAQIiJyY0NzYyFxYUBwRl/qKgmu5BRERB7pqgAV6gmu5BRERB7poBaTcaS19wPoH+5IE+cF9LGjc3GktfcD6BARyBPnBfSxo3/D2FJhUkNmSIaDmXKT8kGh3iAb/qAiNLcTw8cJhwPD1vKEgVFxcVSBUWFgYuREHum6D+o6Cb7kFDQ0Hum6ABXaCb7kH86I6BPnBfTBo2NhpMX3A+gQEbgT5wX0waNjYaTF9wPoGOk3UhHTJlTiswWDkDBB4oHy8rGshvfQHHRoa5hkhIh7mFRv4sKi6oLCkpLKguAAAAAQEcAKkFQgWNAEMAAAEHBhYfARY2PwE2NTQvAS4BDwEOAR8BBgcGBwYVFBceARcWMzI3Njc2NzYuAScmKwEiBgcGBwYHBiMiJyYnJjQ3Njc2AyZGEAMSKhIvD8kQEckQLxIqEgIQNIp1ckJEKiiTX2NsiXh0SUsJAQQNCw0POhUhAQYzMVBSXmJUUjAxMC5QUgQkThEvECYQAxLgExcZEt8SAhAmEC8ROgdKR3V5jGxiX5MoKkJAcHKIDxMSBwgeFV5OTSwuMi9SVMNTUTAyAAIBxgDFBJcE6wAPAB8AAAEzMhYVERQGKwEiJjURNDYFERQWOwEyNjURNCYrASIGA+xyFyIiF3IYISH98iIXchghIRhyFyIE6yIX/EwXIiIXA7QXIjn8TBciIhcDtBciIgAAAAABAccAlgVeBRoAIwAAASYnASQvAiYiBw4CBwYVERQXHgIXFjY3Nj8BNiUBPgE0BVYID/50/nsIBQ4HFAgGEA0DAwMDDRAGCBQHBQoECAGGAYsPEAL4DQoBAPsEAwcCAgIJEwoOK/xAKQ0LEgkCAwECAgUCBfsA/wodIQAAAQEZ/+cDmgW8AAUAAAkCNwkBA1v9vgJCP/3kAhwFvP0V/RYyArgCuQAAAAABASz/5wOtBbwABQAACQIXCQEBLAIc/eQ/AkL9vgWK/Uf9SDIC6gLrAAAAAAEA1gGaBqoEHAAFAAATFwkBNwHWMQK5Arkx/RYB2T8CHf3jPwJDAAABANYBhwaqBAkABQAACQEHCQEnA8D9RzEC6gLqMQHsAh0//b0CQz8AAQDN/94GswXFAAsAAAkCBwkBFwkBNwkBBnD9UP1QQwKv/VFDArACsEP9UQKvBcX9UAKwRP1R/VBEArD9UEQCsAKvAAABAaUBUQMOBFIABQAACQI3CQECz/7WASo//vwBBARS/n/+gDEBTwFQAAAAAAEBuAFRAyEEUgAFAAAJAhcJAQG4AQT+/D8BKv7WBCH+sP6xMQGAAYEAAAAAAQI/AiYFQQOQAAUAAAEXCQE3AQI/MgFPAU8y/n8CZkABBP78QAEqAAECPwITBUEDfQAFAAAJAQcJAScDwP6xMgGBAYEyAnkBBED+1gEqQAABAjYBSAVKBFsACwAACQIHCQEXCQE3CQEFBv66/rpEAUb+ukQBRgFGRP66AUYEW/66AUZD/rr+uUMBRv66QwFHAUYAAAIACv/XBjsHdABKAFgAAAEjBgcGBwYXFhcWFxYXFQYHBgcGBwYHBgcGJyYnJicmIyIHBgcGBwYHBicmJyYnJicmNTQ3PgE3NhcWFxYXFjMyNzY3Njc2FxYXFiU2NzYnDgIHBhcWNzYGCAEeIDwlMwEBQzBNJx0OFio5NCAwLzk+KigYLC8bLjM1MB0xKhYmJjw6MTUiNVk4PFFB13svOiE/LRQhFxMfEyxMK0tBV0d8/oM1HB0JSaFpHSAKT1FLBNwTHDZEXWyDZkkzGgsCLTJhU0wmOx0kAQELBxMVBw0NCBUSBwsCAiYfPilNgKe3qsCNb4MCAREJGRIGCwoGER4MEwQHHDHzQU9VUgNTektXTwYpJgAAAAAAACIBngABAAAAAAAAACYATgABAAAAAAABAAwAjwABAAAAAAACAAcArAABAAAAAAADAB0A8AABAAAAAAAEABQBOAABAAAAAAAFAA0BaQABAAAAAAAGABIBnQABAAAAAAAHACkCBAABAAAAAAAIAAkCQgABAAAAAAAJAAsCZAABAAAAAAAKBAsKiAABAAAAAAALABQOvgABAAAAAAAMABQO/QABAAAAAAANAL4QkAABAAAAAAAOADIRtQABAAAAAAAPAAwSAgABAAAAAAARAAcSHwADAAEECQAAAEwAAAADAAEECQABABgAdQADAAEECQACAA4AnAADAAEECQADADoAtAADAAEECQAEACgBDgADAAEECQAFABoBTQADAAEECQAGACQBdwADAAEECQAHAFIBsAADAAEECQAIABICLgADAAEECQAJABYCTAADAAEECQAKCBYCcAADAAEECQALACgOlAADAAEECQAMACgO0wADAAEECQANAXwPEgADAAEECQAOAGQRTwADAAEECQAPABgR6AADAAEECQARAA4SDwCpACAAMgAwADEANwAgAEEAcABwAGwAZQAgAEkAbgBjAC4AIABBAGwAbAAgAHIAaQBnAGgAdABzACAAcgBlAHMAZQByAHYAZQBkAC4AAKkgMjAxNyBBcHBsZSBJbmMuIEFsbCByaWdodHMgcmVzZXJ2ZWQuAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAABTAEYAUABSAE8ASQBDAE8ATgBTACAANAA3ADAAOQAyAGMAYQAtADIAMAAxADYALgAwADMALgAyADIAAFNGUFJPSUNPTlMgNDcwOTJjYS0yMDE2LjAzLjIyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAFIAZQBnAHUAbABhAHIAAFNGIFBybyBJY29ucyBSZWd1bGFyAABWAGUAcgBzAGkAbwBuACAANAAuADIAMAAwAABWZXJzaW9uIDQuMjAwAABTAEYAUAByAG8ASQBjAG8AbgBzAC0AUgBlAGcAdQBsAGEAcgAAU0ZQcm9JY29ucy1SZWd1bGFyAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGEAIAB0AHIAYQBkAGUAbQBhAHIAawAgAG8AZgAgAEEAcABwAGwAZQAgAEkAbgBjAC4AAFNGIFBybyBJY29ucyBpcyBhIHRyYWRlbWFyayBvZiBBcHBsZSBJbmMuAABBAHAAcABsAGUAIABJAG4AYwAAQXBwbGUgSW5jAABBAHAAcABsAGUAIABJAG4AYwAuAC4AAEFwcGxlIEluYy4uAABDAHIAZQBhAHQAZQBkACAAaQBuACAAMgAwADEANQAsACAAdABoAGUAIABvAHIAaQBnAGkAbgBhAGwAIABnAGwAeQBwAGgAIABmAG8AbgB0ACwAIABBAHAAcABsAGUAIABJAGMAbwBuAHMALAAgAHcAYQBzACAAcAByAG8AZAB1AGMAZQBkACAAdABvACAAdwBvAHIAawAgAGkAbgAgAHUAbgBpAHMAbwBuACAAdwBpAHQAaAAgAE0AeQByAGkAYQBkACAAUwBlAHQAIABQAHIAbwAgAGEAbgBkACAAcwBlAHIAdgBlAGQAIAB0AG8AIABzAHQAcgBlAG4AZwB0AGgAZQBuACAAaQBuAHQAZQByAGEAYwB0AGkAdgBlACAAbABpAG4AawBzACAAbwBuACAAdwBlAGIALgAgAEEAcABwAGwAZQAgAEkAYwBvAG4AcwAgAHcAbwB1AGwAZAAgAGwAYQB0AGUAcgAgAGIAZQBjAG8AbQBlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIAByAGUAZABlAHMAaQBnAG4AZQBkACAAdABvACAAYQBsAGkAZwBuACAAdABvACAAQQBwAHAAbABlACcAcwAgAG4AZQB3ACAAdAB5AHAAZQBmAGEAYwBlACwAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACwAIABpAG4AIAAyADAAMQA2AC4AIABUAGgAZQAgAHIAZQBkAGUAcwBpAGcAbgAgAGEAZABkAHIAZQBzAHMAZQBzACAAYQAgAG4AdQBtAGIAZQByACAAbwBmACAAaQBzAHMAdQBlAHMAIAB0AGgAYQB0ACAAdwBlAHIAZQAgAHAAcgBlAHMAZQBuAHQAIABpAG4AIABBAHAAcABsAGUAIABJAGMAbwBuAHMALgAgAEkAbQBwAHIAbwB2AGUAbQBlAG4AdABzACAAaQBuAGMAbAB1AGQAZQAgAG0AYQB0AGMAaABlAGQAIAB0AHkAcABlACAAbQBlAHQAcgBpAGMAcwAsACAAYgByAGEAbgBkACAASQBEACAAcwB0AGEAbgBkAGEAcgBkAGkAegBlAGQAIABBAHAAcABsAGUAIABsAG8AZwBvACAAYwBoAGEAcgBhAGMAdABlAHIALAAgAHcAZQBiACAAZgBvAG4AdAAgAG8AcAB0AGkAbQBpAHoAYQB0AGkAbwBuACwAIABjAHUAcwB0AG8AbQAgAGMAaABhAHIAYQBjAHQAZQByACAAcwBwAGEAYwBpAG4AZwAsACAAcABhAHIAZQBuAHQAIAB0AHkAcABlACAAYQBsAGkAZwBuAG0AZQBuAHQALAAgAGUAdABjAC4AIABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAgAGkAcwAgAGQAZQBzAGkAZwBuAGUAZAAgAHQAbwAgAGIAZQAgAGEAZABhAHAAdABhAGIAbABlACAAdABvACAAdwBvAHIAawAgAHcAaQB0AGgAIABvAHUAcgAgAHQAdwBvACAAdwBlAGIAIABmAG8AbgB0ACAAZgBhAG0AaQBsAGkAZQBzACwAIABTAEYAIABQAHIAbwAgAEQAaQBzAHAAbABhAHkAIABhAG4AZAAgAFMARgAgAFAAcgBvACAAVABlAHgAdAAuACAAVABoAGUAIAB3AGUAYgAgAGYAbwBuAHQAIABmAGEAbQBpAGwAaQBlAHMAIABoAGEAdgBlACAAZABpAGYAZgBlAHIAaQBuAGcAIAB4AGgAZQBpAGcAaAB0AHMALAAgAGQAZQBzAGMAZQBuAGQAZQByACAAYQBuAGQAIABhAHMAYwBlAG4AZABlAHIAIABlAHgAdABlAG4AcwBpAG8AbgBzACwAIABhAGQAdgBhAG4AYwBlAG0AZQBuAHQALAAgAGMAbwB1AG4AdABlAHIAcwAsACAAYQBuAGQAIABiAG8AdwBsAHMALgAgAFQAaABlAHMAZQAgAGQAaQBmAGYAZQByAGUAbgBjAGUAcwAgAHcAZQByAGUAIABwAHUAcgBwAG8AcwBlAGwAeQAgAG0AYQBkAGUAIAB0AG8AIABvAHAAdABpAG0AaQB6AGUAIAB0AGgAZQAgAGwAZQBnAGkAYgBpAGwAaQB0AHkAIABvAGYAIABlAGEAYwBoACAAZgBhAG0AaQBsAHkAIABpAG4AIAB0AGgAZQAgAHQAeQBwAGUAIABzAGkAegBlACAAZgBvAHIAIAB3AGgAaQBjAGgAIAB0AGgAZQB5ACAAYQByAGUAIAB1AHQAaQBsAGkAegBlAGQALgAgAFQAaABlACAAUwBGACAAUAByAG8AIABJAGMAbwBuAHMAIABjAGgAYQByAGEAYwB0AGUAcgAgAHMAZQB0ACAAaQBuAGMAbAB1AGQAZQBzACAAQwBUAEEAIABpAGMAbwBuAG8AZwByAGEAcABoAHkALAAgAFUASQAgAGUAbABlAG0AZQBuAHQAcwAsACAAYQBuAGQAIABpAG4AdABlAHIAbgBhAGwAIAB1AHMAZQAgAHMAcABlAGMAaQBhAGwAIABjAGgAYQByAGEAYwB0AGUAcgBzACAAYQBuAGQAIABpAHMAIABhAHYAYQBpAGwAYQBiAGwAZQAgAGEAcwAgAGEAIABmAGEAbQBpAGwAeQAgAG8AZgAgAHQAcgB1AGUAIAB0AHkAcABlACAAZgBvAG4AdABzACAAaQBuACAAZgBvAHUAcgAgAHcAZQBpAGcAaAB0AHMALgAAQ3JlYXRlZCBpbiAyMDE1LCB0aGUgb3JpZ2luYWwgZ2x5cGggZm9udCwgQXBwbGUgSWNvbnMsIHdhcyBwcm9kdWNlZCB0byB3b3JrIGluIHVuaXNvbiB3aXRoIE15cmlhZCBTZXQgUHJvIGFuZCBzZXJ2ZWQgdG8gc3RyZW5ndGhlbiBpbnRlcmFjdGl2ZSBsaW5rcyBvbiB3ZWIuIEFwcGxlIEljb25zIHdvdWxkIGxhdGVyIGJlY29tZSBTRiBQcm8gSWNvbnMgcmVkZXNpZ25lZCB0byBhbGlnbiB0byBBcHBsZSdzIG5ldyB0eXBlZmFjZSwgU2FuIEZyYW5jaXNjbywgaW4gMjAxNi4gVGhlIHJlZGVzaWduIGFkZHJlc3NlcyBhIG51bWJlciBvZiBpc3N1ZXMgdGhhdCB3ZXJlIHByZXNlbnQgaW4gQXBwbGUgSWNvbnMuIEltcHJvdmVtZW50cyBpbmNsdWRlIG1hdGNoZWQgdHlwZSBtZXRyaWNzLCBicmFuZCBJRCBzdGFuZGFyZGl6ZWQgQXBwbGUgbG9nbyBjaGFyYWN0ZXIsIHdlYiBmb250IG9wdGltaXphdGlvbiwgY3VzdG9tIGNoYXJhY3RlciBzcGFjaW5nLCBwYXJlbnQgdHlwZSBhbGlnbm1lbnQsIGV0Yy4gU0YgUHJvIEljb25zIGlzIGRlc2lnbmVkIHRvIGJlIGFkYXB0YWJsZSB0byB3b3JrIHdpdGggb3VyIHR3byB3ZWIgZm9udCBmYW1pbGllcywgU0YgUHJvIERpc3BsYXkgYW5kIFNGIFBybyBUZXh0LiBUaGUgd2ViIGZvbnQgZmFtaWxpZXMgaGF2ZSBkaWZmZXJpbmcgeGhlaWdodHMsIGRlc2NlbmRlciBhbmQgYXNjZW5kZXIgZXh0ZW5zaW9ucywgYWR2YW5jZW1lbnQsIGNvdW50ZXJzLCBhbmQgYm93bHMuIFRoZXNlIGRpZmZlcmVuY2VzIHdlcmUgcHVycG9zZWx5IG1hZGUgdG8gb3B0aW1pemUgdGhlIGxlZ2liaWxpdHkgb2YgZWFjaCBmYW1pbHkgaW4gdGhlIHR5cGUgc2l6ZSBmb3Igd2hpY2ggdGhleSBhcmUgdXRpbGl6ZWQuIFRoZSBTRiBQcm8gSWNvbnMgY2hhcmFjdGVyIHNldCBpbmNsdWRlcyBDVEEgaWNvbm9ncmFwaHksIFVJIGVsZW1lbnRzLCBhbmQgaW50ZXJuYWwgdXNlIHNwZWNpYWwgY2hhcmFjdGVycyBhbmQgaXMgYXZhaWxhYmxlIGFzIGEgZmFtaWx5IG9mIHRydWUgdHlwZSBmb250cyBpbiBmb3VyIHdlaWdodHMuAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABoAHQAdABwADoALwAvAHcAdwB3AC4AYQBwAHAAbABlAC4AYwBvAG0AAGh0dHA6Ly93d3cuYXBwbGUuY29tAABUAGgAaQBzACAAZgBvAG4AdAAgAHMAbwBmAHQAdwBhAHIAZQAgAGkAcwAgAHQAaABlACAAdgBhAGwAdQBhAGIAbABlACAAcAByAG8AcABlAHIAdAB5ACAAbwBmACAAQQBwAHAAbABlACAASQBuAGMALgAgAHwAIABJAG4AdABlAHIAYQBjAHQAaQB2AGUAIABNAEEAUgBDAE8ATQAuACAAUgBlAHAAbABpAGMAYQB0AGkAbwBuACwAIABhAGwAdABlAHIAYQB0AGkAbwBuACwAIABhAG4AZAAgAGQAaQBzAHQAcgBpAGIAdQB0AGkAbwBuACAAbwBmACAAdABoAGkAcwAgAGYAbwBuAHQAIABpAHMAIABzAHQAcgBpAGMAdABsAHkAIABwAHIAbwBoAGkAYgBpAHQAZQBkAC4AIABBAHAAcABsAGUAIABJAG4AYwAuACAAYQBsAGwAIAByAGkAZwBoAHQAcwAgAHIAZQBzAGUAcgB2AGUAZAAuAABUaGlzIGZvbnQgc29mdHdhcmUgaXMgdGhlIHZhbHVhYmxlIHByb3BlcnR5IG9mIEFwcGxlIEluYy4gfCBJbnRlcmFjdGl2ZSBNQVJDT00uIFJlcGxpY2F0aW9uLCBhbHRlcmF0aW9uLCBhbmQgZGlzdHJpYnV0aW9uIG9mIHRoaXMgZm9udCBpcyBzdHJpY3RseSBwcm9oaWJpdGVkLiBBcHBsZSBJbmMuIGFsbCByaWdodHMgcmVzZXJ2ZWQuAABoAHQAdABwAHMAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAGwAZQBnAGEAbAAvAGkAbgB0AGUAbABsAGUAYwB0AHUAYQBsAC0AcAByAG8AcABlAHIAdAB5AC8AAGh0dHBzOi8vd3d3LmFwcGxlLmNvbS9sZWdhbC9pbnRlbGxlY3R1YWwtcHJvcGVydHkvAABTAEYAIABQAHIAbwAgAEkAYwBvAG4AcwAAU0YgUHJvIEljb25zAABSAGUAZwB1AGwAYQByAABSZWd1bGFyAAAAAAACAAAAAAAAABQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwAAAABAAIBAgEDAQQBBQEGAQcBCAEJAQoBCwEMAQ0BDgEPARABEQESARMBFAEVARYBFwEYARkBGgEbARwBHQEeAR8BIAEhASIBIwEkASUBJgEnASgBKQEqAA4A7wErASwAIgEtAS4BLwEwATEBMgEzATQBNQE2ATcBOAE5AToBOwE8AT0BPgE/AUABQQFCAUMBRAFFAUYBRwFIAUkBSgFLAUwBTQFOAU8BUAFRAVIBUwFUAVUBVgFXAVgBWQFaAVsBXAFdAV4BXwFgAWEBYgFjAWQBZQFmANIDZ2FwCWZ1bGxibG9jawV1RjMxQQV1RjMxQgV1RjMxQwV1RjMxRAV1RjMyMgV1RjMyMwV1RjMyNAV1RjMyNQV1RjMyNgV1RjMyNwV1RjMyOAV1RjMyOQV1RjMyRgV1RjMzNAV1RjMzNQV1RjMzNgV1RjMzNwV1RjMzOAV1RjMzOQV1RjMzQQV1RjMzQgV1RjMzQwV1RjMzRAV1RjMzRQV1RjMzRgV1RjM0MAV1RjM0MQV1RjM1NgV1RjM1RgV1RjM2NQtjaGV2cm9ubGVmdAxjaGV2cm9ucmlnaHQJY2hldnJvbnVwC2NoZXZyb25kb3duEWNoZXZyb25sZWZ0Y2lyY2xlEmNoZXZyb25yaWdodGNpcmNsZQ9jaGV2cm9udXBjaXJjbGURY2hldnJvbmRvd25jaXJjbGUFcmVzZXQFY2hlY2sLZXhjbGFtYXRpb24LcmVzZXRjaXJjbGUKcGx1c2NpcmNsZQttaW51c2NpcmNsZQtjaGVja2NpcmNsZRFleGNsYW1hdGlvbmNpcmNsZQ5xdWVzdGlvbmNpcmNsZQpyZXNldHNvbGlkCXBsdXNzb2xpZAptaW51c3NvbGlkCmNoZWNrc29saWQQZXhjbGFtYXRpb25zb2xpZA1xdWVzdGlvbnNvbGlkBHBsYXkFcGF1c2UEc3RvcAZyZXBsYXkEaW5mbwhkb3dubG9hZAZjaXJjbGUIZXh0ZXJuYWwFc2hhcmUTcXVlc3Rpb25fY2lyY2xlX3J0bBJxdWVzdGlvbl9zb2xpZF9ydGwMcXVlc3Rpb25fcnRsDGV4dGVybmFsX3J0bAlzZWN0aW9uMDEJc2VjdGlvbjAyCXNlY3Rpb24wMwlzZWN0aW9uMDQJc2VjdGlvbjA1CXNlY3Rpb24wNglzZWN0aW9uMDcJc2VjdGlvbjA4CXNlY3Rpb24wOQlzZWN0aW9uMTAJc2VjdGlvbjExCXNlY3Rpb24xMglzZWN0aW9uMTMJc2VjdGlvbjE0CXNlY3Rpb24xNQlzZWN0aW9uMTYJc2VjdGlvbjE3CXNlY3Rpb24xOAlzZWN0aW9uMTkJc2VjdGlvbjIwC3ZpZGVvcmVwbGF5CnZpZGVvcGF1c2UJdmlkZW9wbGF5CnBhZGRsZWxlZnQLcGFkZGxlcmlnaHQIcGFkZGxldXAKcGFkZGxlZG93bgptb2RhbGNsb3NlD3BhZGRsZWxlZnRzaG9ydBBwYWRkbGVyaWdodHNob3J0DXBhZGRsZXVwc2hvcnQPcGFkZGxlZG93bnNob3J0D21vZGFsY2xvc2VzaG9ydAAAAAAAAf//AAIAAQAAAAwAAAAWAAAAAgABAAMAawABAAQAAAACAAAAAAAAAAEAAAAA2pIEAQAAAADXPJGTAAAAANc8kZM=) format("truetype");
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

      .image-connectivity_stroke_double {
        width: 95px;
        height: 62px;
        background-size: 95px 62px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_large.png?1653690473038);
      }

      .image-design_space_gray {
        width: 437px;
        height: 309px;
        background-size: 437px 309px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_large.png?1653690473038);
      }

      .image-compare_macbook_air_m1_spacegray {
        width: 155px;
        height: 90px;
        background-size: 155px 90px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m1_spacegray_large.png?1653690473039);
      }

      .image-camera_icon_facetime {
        width: 42px;
        height: 28px;
        background-size: 42px 28px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_large.png?1653690473039);
      }

      .image-design_starlight {
        width: 436px;
        height: 309px;
        background-size: 436px 309px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_large.png?1653690473039);
      }

      .image-display_icon_color {
        width: 40px;
        height: 40px;
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_large.png?1653690473040);
      }

      .image-keyboard_touch_id {
        width: 1520px;
        height: 545px;
        background-size: 1520px 545px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_large.png?1653690473041);
      }

      .image-display {
        width: 871px;
        height: 528px;
        background-size: 871px 528px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/display_large.png?1653690473042);
      }

      .image-display_icon_true_tone {
        width: 40px;
        height: 40px;
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_large.png?1653690473042);
      }

      .image-icon_touch_bar_id {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_touch_bar_id_large.png?1653690473042);
      }

      .image-icon_M1_chip {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M1_chip_large.png?1653690473043);
      }

      .image-hero_logo {
        width: 212px;
        height: 28px;
        background-size: 212px 28px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_large.png?1653690473044);
      }

      .image-audio_icon_mic {
        width: 29px;
        height: 34px;
        background-size: 29px 34px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_large.png?1653690473044);
      }

      .image-compare_macbook_pro_m1_16_spacegray {
        width: 167px;
        height: 104px;
        background-size: 167px 104px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_16_spacegray_large.png?1653690473044);
      }

      .image-connectivity_magsafe {
        width: 1326px;
        height: 80px;
        background-size: 1326px 80px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_large.png?1653690473046);
      }

      .image-flex_applecare {
        width: 419px;
        height: 244px;
        background-size: 419px 244px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_large.png?1653690473046);
      }

      .image-icon_M1_Max_M1_Pro {
        width: 94px;
        height: 42px;
        background-size: 94px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M1_Max_M1_Pro_large.png?1653690473046);
      }

      .image-hero {
        width: 624px;
        height: 595px;
        background-size: 624px 595px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_large.png?1653690473048);
      }

      .image-compare_macbook_air_m2_13_midnight {
        width: 146px;
        height: 89px;
        background-size: 146px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m2_13_midnight_large.png?1653690473048);
      }

      .image-keyboard_icon_unlock {
        width: 22px;
        height: 30px;
        background-size: 22px 30px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_large.png?1653690473049);
      }

      .image-compare_macbook_pro_m2_13_spacegray {
        width: 151px;
        height: 89px;
        background-size: 151px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m2_13_spacegray_large.png?1653690473050);
      }

      .image-why_icon_connected {
        width: 76px;
        height: 42px;
        background-size: 76px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_large.png?1653690473050);
      }

      .image-icon_M2_chip {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M2_chip_large.png?1653690473051);
      }

      .image-why_icon_easy {
        width: 74px;
        height: 42px;
        background-size: 74px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_large.png?1653690473051);
      }

      .image-design_icon_tapback {
        width: 33px;
        height: 32px;
        background-size: 33px 32px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_large.png?1653690473051);
      }

      .image-camera_macbook {
        width: 871px;
        height: 528px;
        background-size: 871px 528px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_large.png?1653690473051);
      }

      .image-display_icon_brightness {
        width: 40px;
        height: 40px;
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_large.png?1653690473052);
      }

      .image-design_midnight {
        width: 506px;
        height: 483px;
        background-size: 506px 483px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_large.png?1653690473052);
      }

      .image-keyboard_icon_touch_id {
        width: 41px;
        height: 41px;
        background-size: 41px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_large.png?1653690473053);
      }

      .image-hero_icon_m2 {
        width: 49px;
        height: 49px;
        background-size: 49px 49px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_large.png?1653690473053);
      }

      .image-keyboard_icon_apple_pay {
        width: 43px;
        height: 28px;
        background-size: 43px 28px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_large.png?1653690473054);
      }
      
      .image-app_store {
        width: 26px;
        height: 23px;
        background-size: 26px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_large.png);
      }

      .image-connectivity_stroke_single {
        width: 3px;
        height: 62px;
        background-size: 3px 62px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_large.png?1653690473055);
      }

      .image-keyboard_icon_apple_tv {
        width: 32px;
        height: 32px;
        background-size: 32px 32px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_large.png?1653690473055);
      }

      .image-keyboard_icon_password {
        width: 28px;
        height: 35px;
        background-size: 28px 35px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_large.png?1653690473056);
      }

      .image-performance {
        width: 1792px;
        height: 738px;
        background-size: 1792px 738px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_large.png?1653690473056);
      }

      .image-flex_accessories {
        width: 626px;
        height: 284px;
        background-size: 626px 284px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_large.png?1653690473057);
      }

      .image-icon_touch_id {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_touch_id_large.png?1653690473058);
      }

      .image-design_silver {
        width: 436px;
        height: 309px;
        background-size: 436px 309px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_large.png?1653690473059);
      }

      .image-compare_macbook_pro_m1_14_spacegray {
        width: 152px;
        height: 94px;
        background-size: 152px 94px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_14_spacegray_large.png?1653690473059);
      }

      .image-connectivity_headphone_jack {
        width: 1326px;
        height: 80px;
        background-size: 1326px 80px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_large.png?1653690473060);
      }

      .image-why_icon_powerful {
        width: 42px;
        height: 42px;
        background-size: 42px 42px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_large.png?1653690473061);
      }

      .image-audio_icon_spatial {
        width: 38px;
        height: 40px;
        background-size: 38px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_large.png?1653690473061);
      }

      .image-flex_checkmark_apple_care {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_large.png?1653690473062);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M2_chip_large_2x.png?1653690473038);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance {
          width: 1792px;
          height: 738px;
          background-size: 1792px 738px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_large_2x.png?1653690473040);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-audio_icon_mic {
          width: 29px;
          height: 34px;
          background-size: 29px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_large_2x.png?1653690473040);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_icon_facetime {
          width: 42px;
          height: 28px;
          background-size: 42px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_large_2x.png?1653690473040);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M1_Max_M1_Pro_large_2x.png?1653690473041);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_icon_m2 {
          width: 49px;
          height: 49px;
          background-size: 49px 49px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_large_2x.png?1653690473041);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m1_spacegray_large_2x.png?1653690473041);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_pay {
          width: 43px;
          height: 28px;
          background-size: 43px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_large_2x.png?1653690473042);
        }
      }
      
      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
      .image-app_store {
        width: 26px;
        height: 23px;
        background-size: 26px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_large_2x.png);
      }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 41px;
          background-size: 41px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_large_2x.png?1653690473042);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_16_spacegray_large_2x.png?1653690473042);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_applecare {
          width: 419px;
          height: 244px;
          background-size: 419px 244px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_large_2x.png?1653690473042);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design_midnight {
          width: 506px;
          height: 483px;
          background-size: 506px 483px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_large_2x.png?1653690473043);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display {
          width: 871px;
          height: 528px;
          background-size: 871px 528px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_large_2x.png?1653690473044);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_large_2x.png?1653690473044);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_unlock {
          width: 22px;
          height: 30px;
          background-size: 22px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_large_2x.png?1653690473044);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_14_spacegray_large_2x.png?1653690473044);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design_space_gray {
          width: 437px;
          height: 309px;
          background-size: 437px 309px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_large_2x.png?1653690473045);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_touch_id {
          width: 1520px;
          height: 545px;
          background-size: 1520px 545px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_large_2x.png?1653690473046);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_touch_id_large_2x.png?1653690473046);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m2_13_spacegray_large_2x.png?1653690473047);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m2_13_midnight_large_2x.png?1653690473048);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_large_2x.png?1653690473048);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_logo {
          width: 212px;
          height: 28px;
          background-size: 212px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_large_2x.png?1653690473049);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_stroke_single {
          width: 3px;
          height: 62px;
          background-size: 3px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_large_2x.png?1653690473049);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_touch_bar_id_large_2x.png?1653690473050);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_color {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_large_2x.png?1653690473050);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_brightness {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_large_2x.png?1653690473050);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_macbook {
          width: 871px;
          height: 528px;
          background-size: 871px 528px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_large_2x.png?1653690473050);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/icon_M1_chip_large_2x.png?1653690473053);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design_starlight {
          width: 436px;
          height: 309px;
          background-size: 436px 309px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_large_2x.png?1653690473053);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_true_tone {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_large_2x.png?1653690473054);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-audio_icon_spatial {
          width: 38px;
          height: 40px;
          background-size: 38px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_large_2x.png?1653690473054);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_large_2x.png?1653690473055);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_magsafe {
          width: 1326px;
          height: 80px;
          background-size: 1326px 80px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_large_2x.png?1653690473055);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design_icon_tapback {
          width: 33px;
          height: 32px;
          background-size: 33px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_large_2x.png?1653690473056);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_headphone_jack {
          width: 1326px;
          height: 80px;
          background-size: 1326px 80px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_large_2x.png?1653690473056);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_stroke_double {
          width: 95px;
          height: 62px;
          background-size: 95px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_large_2x.png?1653690473057);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_large_2x.png?1653690473058);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_large_2x.png?1653690473058);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_password {
          width: 28px;
          height: 35px;
          background-size: 28px 35px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_large_2x.png?1653690473059);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-design_silver {
          width: 436px;
          height: 309px;
          background-size: 436px 309px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_large_2x.png?1653690473062);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero {
          width: 624px;
          height: 595px;
          background-size: 624px 595px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_large_2x.png?1653690473062);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_tv {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_large_2x.png?1653690473062);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_medium.png?1653690473038);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design_space_gray {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_medium.png?1653690473039);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_touch_id {
          width: 504px;
          height: 596px;
          background-size: 504px 596px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_medium.png?1653690473042);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_macbook {
          width: 497px;
          height: 367px;
          background-size: 497px 367px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_medium.png?1653690473042);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_magsafe {
          width: 535px;
          height: 62px;
          background-size: 535px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_medium.png?1653690473042);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_true_tone {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_medium.png?1653690473043);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display {
          width: 498px;
          height: 367px;
          background-size: 498px 367px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_medium.png?1653690473044);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 41px;
          background-size: 41px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_medium.png?1653690473045);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero {
          width: 496px;
          height: 474px;
          background-size: 496px 474px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_medium.png?1653690473046);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design_midnight {
          width: 360px;
          height: 344px;
          background-size: 360px 344px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_medium.png?1653690473047);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_brightness {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_medium.png?1653690473047);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-audio_icon_spatial {
          width: 38px;
          height: 40px;
          background-size: 38px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_medium.png?1653690473047);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_stroke_single {
          width: 3px;
          height: 62px;
          background-size: 3px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_medium.png?1653690473048);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design_icon_tapback {
          width: 28px;
          height: 27px;
          background-size: 28px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_medium.png?1653690473049);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design_silver {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_medium.png?1653690473050);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_password {
          width: 28px;
          height: 35px;
          background-size: 28px 35px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_medium.png?1653690473051);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-design_starlight {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_medium.png?1653690473051);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-audio_icon_mic {
          width: 29px;
          height: 34px;
          background-size: 29px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_medium.png?1653690473052);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_medium.png?1653690473053);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_tv {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_medium.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_icon_m2 {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_medium.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_connected {
          width: 75px;
          height: 42px;
          background-size: 75px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_medium.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_medium.png?1653690473057);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_stroke_double {
          width: 73px;
          height: 62px;
          background-size: 73px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_medium.png?1653690473058);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_facetime {
          width: 41px;
          height: 28px;
          background-size: 41px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_medium.png?1653690473058);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_pay {
          width: 41px;
          height: 27px;
          background-size: 41px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_medium.png?1653690473059);
        }
      }
      @media only screen and (max-width:1068px) {
       .image-app_store {
        width: 26px;
        height: 23px;
        background-size: 26px 23px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_medium.png);
      	}
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_medium.png?1653690473059);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance {
          width: 1068px;
          height: 550px;
          background-size: 1068px 550px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_medium.png?1653690473059);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_applecare {
          width: 286px;
          height: 167px;
          background-size: 286px 167px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_medium.png?1653690473059);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_color {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_medium.png?1653690473060);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_headphone_jack {
          width: 479px;
          height: 62px;
          background-size: 479px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_medium.png?1653690473061);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_unlock {
          width: 22px;
          height: 30px;
          background-size: 22px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_medium.png?1653690473061);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_logo {
          width: 178px;
          height: 24px;
          background-size: 178px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_medium.png?1653690473062);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design_starlight {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_medium_2x.png?1653690473038);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-audio_icon_spatial {
          width: 38px;
          height: 40px;
          background-size: 38px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_medium_2x.png?1653690473039);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance {
          width: 1068px;
          height: 550px;
          background-size: 1068px 550px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_medium_2x.png?1653690473040);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_medium_2x.png?1653690473040);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_touch_id {
          width: 504px;
          height: 596px;
          background-size: 504px 596px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_medium_2x.png?1653690473043);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_medium_2x.png?1653690473043);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_medium_2x.png?1653690473044);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero {
          width: 496px;
          height: 474px;
          background-size: 496px 474px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_medium_2x.png?1653690473046);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_color {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_medium_2x.png?1653690473047);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_medium_2x.png?1653690473047);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design_silver {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_medium_2x.png?1653690473050);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 41px;
          height: 27px;
          background-size: 41px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_medium_2x.png?1653690473050);
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
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_medium_2x.png);
      	}
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design_space_gray {
          width: 310px;
          height: 220px;
          background-size: 310px 220px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_medium_2x.png?1653690473051);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 178px;
          height: 24px;
          background-size: 178px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_medium_2x.png?1653690473051);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_icon_m2 {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_medium_2x.png?1653690473052);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_medium_2x.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_headphone_jack {
          width: 479px;
          height: 62px;
          background-size: 479px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_medium_2x.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_medium_2x.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_unlock {
          width: 22px;
          height: 30px;
          background-size: 22px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_medium_2x.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_medium_2x.png?1653690473054);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_true_tone {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_medium_2x.png?1653690473055);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design_icon_tapback {
          width: 28px;
          height: 27px;
          background-size: 28px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_medium_2x.png?1653690473055);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 286px;
          height: 167px;
          background-size: 286px 167px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_medium_2x.png?1653690473056);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_magsafe {
          width: 535px;
          height: 62px;
          background-size: 535px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_medium_2x.png?1653690473056);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_password {
          width: 28px;
          height: 35px;
          background-size: 28px 35px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_medium_2x.png?1653690473056);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 41px;
          height: 41px;
          background-size: 41px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_medium_2x.png?1653690473057);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display {
          width: 498px;
          height: 367px;
          background-size: 498px 367px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_medium_2x.png?1653690473057);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_stroke_double {
          width: 73px;
          height: 62px;
          background-size: 73px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_medium_2x.png?1653690473058);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-audio_icon_mic {
          width: 29px;
          height: 34px;
          background-size: 29px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_medium_2x.png?1653690473058);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_icon_facetime {
          width: 41px;
          height: 28px;
          background-size: 41px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_medium_2x.png?1653690473058);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_stroke_single {
          width: 3px;
          height: 62px;
          background-size: 3px 62px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_medium_2x.png?1653690473059);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_macbook {
          width: 497px;
          height: 367px;
          background-size: 497px 367px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_medium_2x.png?1653690473059);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-design_midnight {
          width: 360px;
          height: 344px;
          background-size: 360px 344px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_medium_2x.png?1653690473059);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_connected {
          width: 76px;
          height: 42px;
          background-size: 76px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_small.png?1653690473038);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance {
          width: 577px;
          height: 359px;
          background-size: 577px 359px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_small.png?1653690473039);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design_silver {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_small.png?1653690473040);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_headphone_jack {
          width: 448px;
          height: 44px;
          background-size: 448px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_small.png?1653690473041);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_true_tone {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_small.png?1653690473041);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design_icon_tapback {
          width: 23px;
          height: 22px;
          background-size: 23px 22px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_small.png?1653690473041);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_tv {
          width: 28px;
          height: 28px;
          background-size: 28px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_small.png?1653690473041);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_small.png?1653690473042);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero {
          width: 292px;
          height: 278px;
          background-size: 292px 278px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_small.png?1653690473042);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 133px;
          height: 83px;
          background-size: 133px 83px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_16_spacegray_small.png?1653690473043);
        }
      }

      @media only screen and (max-width:734px) {
        .image-audio_icon_mic {
          width: 25px;
          height: 29px;
          background-size: 25px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_small.png?1653690473043);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_icon_m2 {
          width: 47px;
          height: 47px;
          background-size: 47px 47px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_small.png?1653690473043);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_easy {
          width: 73px;
          height: 42px;
          background-size: 73px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_small.png?1653690473044);
        }
      }

      @media only screen and (max-width:734px) {
        .image-audio_icon_spatial {
          width: 32px;
          height: 33px;
          background-size: 32px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_small.png?1653690473044);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_touch_id {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_small.png?1653690473044);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_magsafe {
          width: 494px;
          height: 44px;
          background-size: 494px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_small.png?1653690473046);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_unlock {
          width: 20px;
          height: 27px;
          background-size: 20px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_small.png?1653690473046);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_powerful {
          width: 42px;
          height: 42px;
          background-size: 42px 42px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_small.png?1653690473050);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_stroke_double {
          width: 51px;
          height: 71px;
          background-size: 51px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_small.png?1653690473050);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_touch_id {
          width: 302px;
          height: 210px;
          background-size: 302px 210px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_small.png?1653690473051);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_facetime {
          width: 35px;
          height: 24px;
          background-size: 35px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_small.png?1653690473051);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m1_spacegray {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m1_spacegray_small.png?1653690473051);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_brightness {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_small.png?1653690473052);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_applecare {
          width: 280px;
          height: 163px;
          background-size: 280px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_small.png?1653690473054);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_stroke_single {
          width: 3px;
          height: 34px;
          background-size: 3px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_small.png?1653690473054);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display {
          width: 303px;
          height: 184px;
          background-size: 303px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_small.png?1653690473054);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_password {
          width: 24px;
          height: 29px;
          background-size: 24px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_small.png?1653690473055);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_logo {
          width: 187px;
          height: 25px;
          background-size: 187px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_small.png?1653690473055);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design_midnight {
          width: 153px;
          height: 146px;
          background-size: 153px 146px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_small.png?1653690473055);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design_space_gray {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_small.png?1653690473056);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_macbook {
          width: 303px;
          height: 184px;
          background-size: 303px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_small.png?1653690473056);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_small.png?1653690473057);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_pay {
          width: 35px;
          height: 23px;
          background-size: 35px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_small.png?1653690473058);
        }
      }
      @media only screen and (max-width:734px) {
        .image-app_store {
        width: 22px;
        height: 20px;
        background-size: 22px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_small.png);
      	}
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m2_13_midnight {
          width: 118px;
          height: 72px;
          background-size: 118px 72px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m2_13_midnight_small.png?1653690473058);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_color {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_small.png?1653690473058);
        }
      }

      @media only screen and (max-width:734px) {
        .image-design_starlight {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_small.png?1653690473060);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m2_13_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m2_13_spacegray_small.png?1653690473061);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_14_spacegray {
          width: 121px;
          height: 74px;
          background-size: 121px 74px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_14_spacegray_small.png?1653690473061);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_touch_id {
          width: 302px;
          height: 210px;
          background-size: 302px 210px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_touch_id_small_2x.png?1653690473038);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-audio_icon_spatial {
          width: 32px;
          height: 33px;
          background-size: 32px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_spatial_small_2x.png?1653690473038);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design_silver {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_silver_small_2x.png?1653690473039);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m1_spacegray_small_2x.png?1653690473039);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_color {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_color_small_2x.png?1653690473040);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_14_spacegray_small_2x.png?1653690473041);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_magsafe {
          width: 494px;
          height: 44px;
          background-size: 494px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_magsafe_small_2x.png?1653690473042);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m2_13_spacegray_small_2x.png?1653690473042);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance {
          width: 577px;
          height: 359px;
          background-size: 577px 359px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/performance_small_2x.png?1653690473042);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_accessories_small_2x.png?1653690473044);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_icon_facetime {
          width: 35px;
          height: 24px;
          background-size: 35px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_icon_facetime_small_2x.png?1653690473046);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_true_tone {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_true_tone_small_2x.png?1653690473047);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 280px;
          height: 163px;
          background-size: 280px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_applecare_small_2x.png?1653690473047);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_unlock_small_2x.png?1653690473047);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 28px;
          height: 28px;
          background-size: 28px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_tv_small_2x.png?1653690473048);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 35px;
          height: 23px;
          background-size: 35px 23px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_apple_pay_small_2x.png?1653690473048);
        }
      }
      
      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
      .image-app_store {
        width: 22px;
        height: 20px;
        background-size: 22px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/landing_pages/macbookair_m2/app_store_small_2x.png);
      	}
      	}

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_stroke_single {
          width: 3px;
          height: 34px;
          background-size: 3px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_single_small_2x.png?1653690473049);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_pro_m1_16_spacegray_small_2x.png?1653690473049);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design_icon_tapback {
          width: 23px;
          height: 22px;
          background-size: 23px 22px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_icon_tapback_small_2x.png?1653690473049);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_connected_small_2x.png?1653690473049);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display {
          width: 303px;
          height: 184px;
          background-size: 303px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_small_2x.png?1653690473050);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design_starlight {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_starlight_small_2x.png?1653690473051);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_stroke_double {
          width: 51px;
          height: 71px;
          background-size: 51px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_stroke_double_small_2x.png?1653690473051);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/flex_checkmark_apple_care_small_2x.png?1653690473052);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design_space_gray {
          width: 132px;
          height: 94px;
          background-size: 132px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_space_gray_small_2x.png?1653690473053);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_easy_small_2x.png?1653690473053);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 187px;
          height: 25px;
          background-size: 187px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_logo_small_2x.png?1653690473053);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_icon_m2 {
          width: 47px;
          height: 47px;
          background-size: 47px 47px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_icon_m2_small_2x.png?1653690473056);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/compare_macbook_air_m2_13_midnight_small_2x.png?1653690473056);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-audio_icon_mic {
          width: 25px;
          height: 29px;
          background-size: 25px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/audio_icon_mic_small_2x.png?1653690473056);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero {
          width: 292px;
          height: 278px;
          background-size: 292px 278px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/hero_small_2x.png?1653690473057);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-design_midnight {
          width: 153px;
          height: 146px;
          background-size: 153px 146px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/design_midnight_small_2x.png?1653690473057);
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
          background-image: url(./files/uploads/landing_pages/macbookair_m2/why_icon_powerful_small_2x.png?1653690473059);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/display_icon_brightness_small_2x.png?1653690473059);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_headphone_jack {
          width: 448px;
          height: 44px;
          background-size: 448px 44px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/connectivity_headphone_jack_small_2x.png?1653690473060);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_macbook {
          width: 303px;
          height: 184px;
          background-size: 303px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/camera_macbook_small_2x.png?1653690473060);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_password {
          width: 24px;
          height: 29px;
          background-size: 24px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_password_small_2x.png?1653690473060);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 34px;
          height: 34px;
          background-size: 34px 34px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/landing_pages/macbookair_m2/keyboard_icon_touch_id_small_2x.png?1653690473061);
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
        line-height: 53px;
        letter-spacing: -0.003rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-48-headline {
          font-size: 40px;
          line-height: 46px;
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
        line-height: 21px;
        letter-spacing: -0.022rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-17-body-reduced {
          font-size: 14px;
          line-height: 20px;
        }
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

      .channel-html .channel-custom-font-custom-17-body-tight {
        font-size: 17px;
        line-height: 21px;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-17-body-tight {
          font-size: 17px;
          line-height: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-17-body-tight {
          font-size: 14px;
          line-height: 20px;
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

      .channel-html .channel-custom-font-custom-40-badge {
        font-size: 40px;
        line-height: 40px;
        letter-spacing: 0rem;
        font-weight: 600;
      }
      
      .channel-html .channel-custom-font-custom-22-badge {
        font-size: 22px;
        line-height: 22px;
        letter-spacing: 0rem;
        font-weight: 600;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-40-badge {
          font-size: 32px;
          line-height: 32px;
          letter-spacing: 0rem;
          font-weight: 600;
        }
      }

      .channel-html .channel-custom-font-custom-21-touch-id {
        font-size: 21px;
        line-height: 25px;
        letter-spacing: 0rem;
        font-weight: 500;
      }

      .channel-html .channel-custom-font-custom-17-body-reduced-flex-why-mac {
        font-size: 17px;
        line-height: 25px;
        letter-spacing: 0rem;
        font-weight: 400;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-17-body-reduced-flex-why-mac {
          font-size: 14px;
          line-height: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-17-body-reduced-flex-why-mac {
          font-size: 14px;
          line-height: 20px;
          letter-spacing: -0.016rem;
        }
      }

      .channel-html .channel-custom-font-custom-32-superchargedby {
        font-size: 32px;
        line-height: 36px;
        font-weight: 500;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .channel-custom-font-custom-32-superchargedby {
          font-size: 26px;
          line-height: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-32-superchargedby {
          font-size: 28px;
          line-height: 32px;
        }
      }

      .channel-html .fa908b4 {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9a22bc {
        /** alignment */
        justify-content: center;
        /** Margin */
        margin-top: 64px;
        margin-bottom: 10px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22bc {
          margin-top: 59px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22bc {
          margin-bottom: 10px;
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
        margin-top: 84px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5af1c5 {
          margin-top: 49px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5af1c5 {
          margin-top: 45px;
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
        margin-bottom: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8d5222 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8d5222 {
          margin-bottom: 0px;
        }
      }

      .channel-html .pB8542E {
        /** alignment */
        /** Margin */
        margin-top: 14px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB8542E {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pB8542E {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pB8542E {
          margin-bottom: 0px;
        }
      }

      .channel-html .qC0AB01 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .iE0ECFD {
        color: #1d1d1f;
        margin-bottom: 0px;
        padding-left: 82px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iE0ECFD {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE0ECFD {
          margin-bottom: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iE0ECFD {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iE0ECFD {
          padding-right: 0px;
        }
      }

      .channel-html .q6C6B54 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q6C6B54 {
          margin-top: 0px;
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
          margin-bottom: 0px;
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

      .channel-html .w6fd73a {
        color: #1d1d1f;
        margin-top: 39px;
        margin-bottom: 0px;
        padding-left: 46px;
        padding-right: 46px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          margin-right: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6fd73a {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6fd73a {
          padding-right: 0px;
        }
      }

      .channel-html .h093FB9 {
        /** alignment */
        align-items: center;
        justify-content: start;
        /** Margin */
        margin-top: 51px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h093FB9 {
          margin-top: 43px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h093FB9 {
          margin-top: 45px;
        }
      }

      .channel-html .z4FCF22 {
        /** Margin */
        margin-top: -6px;
        /** Padding */
        padding-right: 0px;
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4FCF22 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4FCF22 {
          padding-left: 8px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4FCF22 {
          padding-right: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4FCF22 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4FCF22 {
          text-align: center;
        }
      }

      .channel-html .p77D6CC {
        color: #1d1d1f;
        margin-top: -1px;
        margin-right: -19px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p77D6CC {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p77D6CC {
          padding-right: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p77D6CC {
          padding-right: 8px;
        }
      }

      .channel-html .u701388 {
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u701388 {
          margin-top: 9px;
        }
      }

      .channel-html .qC0E0AE {
        /** Margin */
        margin-top: -1px;
        margin-left: 27px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qC0E0AE {
          margin-left: -30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qC0E0AE {
          margin-left: 116px;
        }
      }

      .channel-html .e3364d1 {
        color: #1d1d1f;
        margin-top: 42px;
        margin-bottom: 22px;
        padding-left: 164px;
        padding-right: 164px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          margin-top: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3364d1 {
          margin-top: 39px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3364d1 {
          margin-bottom: 16px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3364d1 {
          margin-bottom: 11px;
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

      .channel-html .b9CE136 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .xE15EC2 {
        /** Margin */
        margin-top: 9px;
        margin-left: 178px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xE15EC2 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xE15EC2 {
          margin-left: 98px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xE15EC2 {
          margin-left: -6px;
        }
      }

      .channel-html .f1390a8 {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t3eaab6 {
        /** alignment */
        align-items: flex-start;
        justify-content: center;
        /** Margin */
        margin-top: 126px;
        margin-bottom: 0px;
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
          margin-top: 104px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3eaab6 {
          margin-top: 39px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3eaab6 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3eaab6 {
          margin-bottom: 0px;
        }
      }

      .channel-html .q0bfc78 {
        /** Margin */
        /** Padding */
        padding-right: 0px;
        /** Align text*/
        text-align: center;
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
        margin-left: 0px;
        margin-bottom: 10.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r1eb62f {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1eb62f {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r1eb62f {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1eb62f {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r1eb62f {
          margin-right: 0px;
        }
      }

      .channel-html .d7BBAAB {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .i3A0691 {
        /** Margin */
        /** Padding */
        padding-right: 23px;
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i3A0691 {
          padding-right: 44px;
        }
      }

      .channel-html .ca83cac {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca83cac {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca83cac {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca83cac {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca83cac {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca83cac {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca83cac {
          padding-left: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca83cac {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca83cac {
          padding-right: 12px;
        }
      }

      .channel-html .ca83cac {
        background: linear-gradient(90deg, #194BB5 32%, #009DE4 68%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .ca83cac [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .ca83cac * {
        background: inherit;
      }

      .channel-html .lCF6EB7 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z5E0652 {
        /** Margin */
        margin-top: 0px;
        margin-left: -26px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z5E0652 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z5E0652 {
          margin-top: -33px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z5E0652 {
          margin-left: -46px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z5E0652 {
          margin-left: 194px;
        }
      }

      .channel-html .o4A7DA7 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .g58D187 {
        /** Margin */
        /** Padding */
        padding-right: 23px;
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g58D187 {
          padding-right: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g58D187 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g58D187 {
          text-align: center;
        }
      }

      .channel-html .eE30D62 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eE30D62 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE30D62 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eE30D62 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE30D62 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE30D62 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE30D62 {
          padding-left: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eE30D62 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE30D62 {
          padding-right: 12px;
        }
      }

      .channel-html .eE30D62 {
        background: linear-gradient(90deg, #194BB5 32%, #009DE4 68%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .eE30D62 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .eE30D62 * {
        background: inherit;
      }

      .channel-html .hBD7028 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hBD7028 {
          text-align: end;
        }
      }

      .channel-html .kC0C97E {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: 0px;
        margin-right: -8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kC0C97E {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kC0C97E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kC0C97E {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kC0C97E {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kC0C97E {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kC0C97E {
          padding-left: 12px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kC0C97E {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kC0C97E {
          padding-right: 0px;
        }
      }

      .channel-html .kC0C97E {
        background: linear-gradient(90deg, #194BB5 40%, #009DE4 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .kC0C97E [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .kC0C97E * {
        background: inherit;
      }

      .channel-html .o12F71D {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .p4F313A {
        /** Margin */
        margin-top: 0px;
        margin-left: -26px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p4F313A {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p4F313A {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p4F313A {
          margin-left: -46px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p4F313A {
          margin-left: 6px;
        }
      }

      .channel-html .z9721c4 {
        color: #1d1d1f;
        margin-top: 25px;
        margin-left: 160px;
        margin-right: 160px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9721c4 {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9721c4 {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9721c4 {
          margin-right: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9721c4 {
          padding-right: 0px;
        }
      }

      .channel-html .w566ADD {
        /** alignment */
        justify-content: start;
        /** Margin */
        margin-top: 42px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w566ADD {
          margin-top: 33px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w566ADD {
          margin-top: 28px;
        }
      }

      .channel-html .hC70E18 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 350px;
        padding-right: 20px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hC70E18 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hC70E18 {
          padding-left: 205px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hC70E18 {
          padding-left: 35px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hC70E18 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hC70E18 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hC70E18 {
          text-align: start;
        }
      }

      .channel-html .h537AA6 {
        color: #009de4;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 0px;
      }

      .channel-html .yCA1644 {
        color: #1d1d1f;
        margin-top: 2px;
        margin-right: 0px;
        padding-left: 1px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yCA1644 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yCA1644 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yCA1644 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yCA1644 {
          padding-left: 1px;
        }
      }

      .channel-html .j967BCD {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 26px;
        padding-right: 200px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j967BCD {
          padding-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j967BCD {
          padding-left: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j967BCD {
          padding-right: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j967BCD {
          padding-right: 0px;
        }
      }

      .channel-html .lE81330 {
        color: #009de4;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lE81330 {
          padding-right: 0px;
        }
      }

      .channel-html .u17292B {
        color: #1d1d1f;
        margin-top: 2px;
        margin-right: 0px;
        padding-left: 2px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u17292B {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u17292B {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u17292B {
          padding-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u17292B {
          padding-left: 1px;
        }
      }
      
      @media only screen and (max-width: 734px) {
        .channel-html .u17292B {
          padding-right: 0px;
        }
      }

      .channel-html .e7364CB {
        /** alignment */
        justify-content: center;
        /** Margin */
        margin-top: 40px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e7364CB {
          margin-top: 39px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e7364CB {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e7364CB {
          margin-left: 0px;
        }
      }

      .channel-html .ddb6fd4 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9459bf {
        /** Margin */
        margin-left: -8px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9459bf {
          margin-left: -7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9459bf {
          margin-left: 63.5px;
        }
      }

      .channel-html .q0778E3 {
        color: #1d1d1f;
        margin-top: 11px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0778E3 {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0778E3 {
          margin-top: 7px;
        }
      }

      .channel-html .f8E1F92 {
        /** alignment */
        /** Margin */
        margin-top: 29px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f8E1F92 {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f8E1F92 {
          margin-top: 12px;
        }
      }

      .channel-html .l869F4C {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: end;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .o378B63 {
        /** Margin */
        margin-left: -190px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o378B63 {
          margin-left: -138px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o378B63 {
          margin-left: -65px;
        }
      }

      .channel-html .a9CA0CD {
        color: #1d1d1f;
        margin-top: 11px;
        padding-right: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a9CA0CD {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a9CA0CD {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a9CA0CD {
          padding-right: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a9CA0CD {
          padding-right: 4px;
        }
      }

      .channel-html .r70FAA9 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .vEC3C30 {
        /** Margin */
        margin-left: 27px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vEC3C30 {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vEC3C30 {
          margin-left: 4px;
        }
      }

      .channel-html .m5E4E31 {
        color: #1d1d1f;
        margin-top: 11px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m5E4E31 {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m5E4E31 {
          margin-top: 7px;
        }
      }

      .channel-html .sEC07CB {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sEC07CB {
          margin-right: 0px;
        }
      }

      .channel-html .nA1A265 {
        /** Margin */
        margin-left: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nA1A265 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .nA1A265 {
          margin-left: 3px;
        }
      }

      .channel-html .kA6E915 {
        color: #1d1d1f;
        margin-top: 11px;
        padding-left: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kA6E915 {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kA6E915 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kA6E915 {
          margin-right: -10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kA6E915 {
          padding-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kA6E915 {
          padding-left: 3px;
        }
      }

      .channel-html .w752BF3 {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .h8AB5EA {
        /** alignment */
        align-items: flex-start;
        justify-content: center;
        /** Margin */
        margin-top: 132px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h8AB5EA {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h8AB5EA {
          margin-top: 109.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h8AB5EA {
          margin-top: 80px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h8AB5EA {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h8AB5EA {
          margin-bottom: 0px;
        }
      }

      .channel-html .n06C15C {
        /** Margin */
        /** Padding */
        padding-right: 0px;
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n06C15C {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n06C15C {
          padding-right: 0px;
        }
      }

      .channel-html .g9ACBA4 {
        color: #1d1d1f;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g9ACBA4 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g9ACBA4 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g9ACBA4 {
          margin-bottom: 7px;
        }
      }

      .channel-html .f493179 {
        color: #1d1d1f;
        margin-top: 10px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f493179 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f493179 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f493179 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f493179 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f493179 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f493179 {
          margin-bottom: 0px;
        }
      }

      .channel-html .f493179 {
        background: linear-gradient(90deg, #194BB5 31%, #009DE4 69%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .f493179 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .f493179 * {
        background: inherit;
      }

      .channel-html .r2FA8AA {
        color: #1d1d1f;
        margin-top: 26px;
        margin-left: 0px;
        margin-right: 0px;
        padding-left: 32px;
        padding-right: 32px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2FA8AA {
          margin-top: 26px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2FA8AA {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          margin-right: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2FA8AA {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r2FA8AA {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r2FA8AA {
          padding-right: 0px;
        }
      }

      .channel-html .jC7CFB9 {
        /** alignment */
        /** Margin */
        margin-top: 40px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jC7CFB9 {
          margin-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jC7CFB9 {
          margin-top: 55px;
        }
      }

      .channel-html .g1916E1 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 218px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g1916E1 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g1916E1 {
          padding-left: 149px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g1916E1 {
          padding-left: 21px;
        }
      }

      .channel-html .iDA07F0 {
        color: #1d1d1f;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iDA07F0 {
          padding-left: 0px;
        }
      }

      .channel-html .t2E0F0E {
        color: #009de4;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t2E0F0E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t2E0F0E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t2E0F0E {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t2E0F0E {
          padding-right: 25px;
        }
      }

      .channel-html .uAA966D {
        color: #1d1d1f;
        margin-top: 2px;
        margin-right: 0px;
        padding-right: 78px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uAA966D {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uAA966D {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uAA966D {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uAA966D {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uAA966D {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uAA966D {
          padding-right: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uAA966D {
          padding-right: 20px;
        }
      }

      .channel-html .f518731 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 13px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f518731 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f518731 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f518731 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f518731 {
          padding-left: 21px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f518731 {
          padding-right: 0px;
        }
      }

      .channel-html .nC34DFB {
        color: #1d1d1f;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nC34DFB {
          margin-left: -4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .nC34DFB {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .nC34DFB {
          padding-right: 0px;
        }
      }

      .channel-html .p50B923 {
        color: #009de4;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p50B923 {
          margin-left: -4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p50B923 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p50B923 {
          padding-right: 0px;
        }
      }

      .channel-html .o606BCD {
        color: #1d1d1f;
        margin-top: 2px;
        margin-right: 0px;
        padding-right: 105px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o606BCD {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o606BCD {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o606BCD {
          margin-left: -4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o606BCD {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o606BCD {
          margin-right: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o606BCD {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o606BCD {
          padding-right: 0px;
        }
      }

      .channel-html .l637685 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        text-align: start;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l637685 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l637685 {
          padding-left: 32px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l637685 {
          padding-left: 21px;
        }
      }

      .channel-html .aE3D7B7 {
        color: #1d1d1f;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aE3D7B7 {
          padding-left: 1px;
        }
      }

      .channel-html .nA378C5 {
        color: #009de4;
        margin-top: 0px;
        margin-right: 0px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .nA378C5 {
          padding-right: 0px;
        }
      }

      .channel-html .mCE67A3 {
        color: #1d1d1f;
        margin-top: 2px;
        margin-right: 0px;
        padding-right: 60px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mCE67A3 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mCE67A3 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mCE67A3 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mCE67A3 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mCE67A3 {
          padding-right: 0px;
        }
      }

      .channel-html .w0F3AA4 {
        /** alignment */
        justify-content: center;
        /** Margin */
        margin-top: 27px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w0F3AA4 {
          margin-top: 79px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w0F3AA4 {
          margin-top: 44px;
        }
      }

      .channel-html .s1D6168 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .g88461D {
        /** Margin */
        margin-top: 61px;
        margin-left: -433px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g88461D {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g88461D {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g88461D {
          margin-left: -188px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g88461D {
          margin-left: -154px;
        }
      }

      .channel-html .uA824E6 {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .a3E86EF {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 138px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a3E86EF {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a3E86EF {
          margin-top: 102px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a3E86EF {
          margin-top: 65px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a3E86EF {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a3E86EF {
          margin-bottom: 0px;
        }
      }

      .channel-html .d79FC31 {
        /** Margin */
        /** Padding */
        padding-left: 82px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d79FC31 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d79FC31 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d79FC31 {
          padding-left: 0px;
        }
      }

      .channel-html .tA3B4A3 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .pB12CFC {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pB12CFC {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pB12CFC {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pB12CFC {
          order: 1;
        }
      }

      .channel-html .rD238D5 {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .aA8006A {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .i9BBC2E {
        color: #1d1d1f;
        margin-left: -1px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9BBC2E {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i9BBC2E {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9BBC2E {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i9BBC2E {
          margin-bottom: 0px;
        }
      }

      .channel-html .x59DA46 {
        color: #1d1d1f;
        margin-top: 10px;
        margin-left: -2px;
        margin-bottom: 0px;
        padding-right: 105px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x59DA46 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x59DA46 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x59DA46 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x59DA46 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x59DA46 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x59DA46 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x59DA46 {
          padding-right: 94px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x59DA46 {
          padding-right: 76px;
        }
      }

      .channel-html .x59DA46 {
        background: linear-gradient(90deg, #194BB5 0%, #009DE4 60%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .x59DA46 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .x59DA46 * {
        background: inherit;
      }

      .channel-html .dB6984D {
        /** alignment */
        /** Margin */
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .jDF7B26 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jDF7B26 {
          order: 3;
        }
      }

      .channel-html .iE51133 {
        color: #1d1d1f;
        margin-top: 25px;
        margin-left: -1px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE51133 {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iE51133 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE51133 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE51133 {
          margin-right: -6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iE51133 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iE51133 {
          padding-right: 0px;
        }
      }

      .channel-html .z8D0BBE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 3;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z8D0BBE {
          order: 4;
        }
      }

      .channel-html .q6B110D {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 28px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q6B110D {
          margin-top: 31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q6B110D {
          margin-top: 38px;
        }
      }

      .channel-html .gE50C0C {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .zE9B20E {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zE9B20E {
          margin-left: -1px;
        }
      }

      .channel-html .vC234BE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .h69445F {
        color: #1d1d1f;
        margin-left: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h69445F {
          margin-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h69445F {
          margin-left: 23px;
        }
      }

      .channel-html .a1E4039 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 14px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a1E4039 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a1E4039 {
          margin-top: 11px;
        }
      }

      .channel-html .v2D5FA1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .g64E87B {
        /** Margin */
        margin-top: 1px;
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g64E87B {
          margin-top: 0px;
        }
      }

      .channel-html .fEF31AF {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fEF31AF {
          margin-left: 0px;
        }
      }

      .channel-html .b029D1A {
        color: #1d1d1f;
        margin-left: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b029D1A {
          margin-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b029D1A {
          margin-left: 23px;
        }
      }

      .channel-html .pE56C19 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 14px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pE56C19 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pE56C19 {
          margin-top: 12px;
        }
      }

      .channel-html .xC2DCB3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .o13AE67 {
        /** Margin */
        margin-top: -0.5px;
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o13AE67 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o13AE67 {
          margin-top: -1px;
        }
      }

      .channel-html .n7A4254 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v4DCE83 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4DCE83 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v4DCE83 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4DCE83 {
          margin-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v4DCE83 {
          margin-left: 23px;
        }
      }

      .channel-html .t30DF41 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t30DF41 {
          margin-top: 34px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t30DF41 {
          order: 2;
        }
      }

      .channel-html .p7CA32D {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p7CA32D {
          margin-left: -11px;
        }
      }

      .channel-html .fA76746 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v0BE3E3 {
        /** Margin */
        margin-top: 0px;
        margin-left: -380px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v0BE3E3 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v0BE3E3 {
          margin-left: -188px;
        }
      }

      .channel-html .kE80BCE {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .oECCA25 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 157px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oECCA25 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oECCA25 {
          margin-top: 114px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oECCA25 {
          margin-top: 84px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oECCA25 {
          margin-bottom: 0px;
        }
      }

      .channel-html .j2143C3 {
        /** Margin */
        /** Padding */
        padding-top: 0px;
        padding-right: 50px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j2143C3 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j2143C3 {
          padding-right: 0px;
        }
      }

      .channel-html .n7B7F65 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n7B7F65 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n7B7F65 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n7B7F65 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n7B7F65 {
          margin-bottom: 7px;
        }
      }

      .channel-html .i2A6910 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2px;
        margin-bottom: 26px;
        padding-right: 58px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i2A6910 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i2A6910 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i2A6910 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i2A6910 {
          margin-bottom: 24px;
        }
      }

      .channel-html .i2A6910 {
        background: linear-gradient(90deg, #194BB5 0%, #009DE4 60%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .i2A6910 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .i2A6910 * {
        background: inherit;
      }

      .channel-html .tD3E45C {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD3E45C {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD3E45C {
          margin-top: 34px;
        }
      }

      .channel-html .g0ED212 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .d75CBDA {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d75CBDA {
          margin-left: -11px;
        }
      }

      .channel-html .tF10FEB {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 56px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tF10FEB {
          margin-top: 38px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tF10FEB {
          margin-top: 47px;
        }
      }

      .channel-html .h79965A {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .c9AEDEB {
        /** Margin */
        margin-top: 4px;
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c9AEDEB {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c9AEDEB {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c9AEDEB {
          margin-left: -1px;
        }
      }

      .channel-html .kDD5808 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 22px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kDD5808 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kDD5808 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kDD5808 {
          padding-right: 0px;
        }
      }

      .channel-html .zFDBADA {
        color: #1d1d1f;
        margin-left: 0px;
      }

      .channel-html .lB1FA63 {
        color: #86868B;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lB1FA63 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lB1FA63 {
          margin-top: 0px;
        }
      }

      .channel-html .cDE1D84 {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 25px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cDE1D84 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cDE1D84 {
          margin-top: 20px;
        }
      }

      .channel-html .c7A12F1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .w0846E9 {
        /** Margin */
        margin-top: 5px;
        margin-left: 5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w0846E9 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w0846E9 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w0846E9 {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w0846E9 {
          margin-left: 4px;
        }
      }

      .channel-html .rE00FB9 {
        /** Margin */
        /** Padding */
        padding-left: 22px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rE00FB9 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rE00FB9 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rE00FB9 {
          padding-right: 0px;
        }
      }

      .channel-html .nE12A19 {
        color: #1d1d1f;
        margin-left: 0px;
      }

      .channel-html .yB14C1E {
        color: #86868B;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yB14C1E {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yB14C1E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yB14C1E {
          padding-right: 3px;
        }
      }

      .channel-html .o7CA997 {
        /** alignment */
        align-items: flex-start;
        /** Margin */
        margin-top: 25px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o7CA997 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .o7CA997 {
          margin-top: 20px;
        }
      }

      .channel-html .l2CB1C8 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .l550E16 {
        /** Margin */
        margin-top: 4px;
        margin-left: 1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l550E16 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l550E16 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l550E16 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l550E16 {
          margin-left: 0px;
        }
      }

      .channel-html .b956951 {
        /** Margin */
        /** Padding */
        padding-left: 22px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b956951 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b956951 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b956951 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b956951 {
          padding-right: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b956951 {
          padding-right: 0px;
        }
      }

      .channel-html .h67E66D {
        color: #1d1d1f;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h67E66D {
          padding-right: 32px;
        }
      }

      .channel-html .q7A0509 {
        color: #86868B;
        margin-top: 1px;
        padding-right: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q7A0509 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q7A0509 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q7A0509 {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q7A0509 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q7A0509 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q7A0509 {
          padding-right: 32px;
        }
      }

      .channel-html .z0755BE {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .o77B131 {
        /** Margin */
        margin-left: -1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o77B131 {
          margin-left: 37px;
        }
      }

      .channel-html .a01498B {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .jB81943 {
        /** alignment */
        align-items: flex-start;
        justify-content: start;
        /** Margin */
        margin-top: 153px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jB81943 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jB81943 {
          margin-top: 110px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jB81943 {
          margin-top: 80px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jB81943 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jB81943 {
          margin-bottom: 0px;
        }
      }

      .channel-html .sF65741 {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        order: 2;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sF65741 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sF65741 {
          padding-left: 0px;
        }
      }

      .channel-html .cEF6E5C {
        color: #1d1d1f;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cEF6E5C {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cEF6E5C {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cEF6E5C {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cEF6E5C {
          margin-bottom: 0px;
        }
      }

      .channel-html .u94DF5C {
        color: #1d1d1f;
        margin-top: 10px;
        margin-left: -2px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u94DF5C {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u94DF5C {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u94DF5C {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u94DF5C {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u94DF5C {
          margin-bottom: 0px;
        }
      }

      .channel-html .u94DF5C {
        background: linear-gradient(90deg, #194BB5 0%, #009DE4 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .u94DF5C [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .u94DF5C * {
        background: inherit;
      }

      .channel-html .c1CC94D {
        color: #1d1d1f;
        margin-top: 25px;
        margin-left: 0px;
        padding-right: 38px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c1CC94D {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c1CC94D {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c1CC94D {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c1CC94D {
          padding-right: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c1CC94D {
          padding-right: 0px;
        }
      }

      .channel-html .dF6BDAD {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dF6BDAD {
          margin-top: 38px;
        }
      }

      .channel-html .x98EFBC {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x98EFBC {
          order: 2;
        }
      }

      .channel-html .hAA6A49 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .r703A52 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .b3AB509 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 39px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b3AB509 {
          margin-top: 32px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b3AB509 {
          margin-top: 41px;
        }
      }

      .channel-html .aD63E45 {
        /** Margin */
        margin-top: 1px;
        margin-left: -1px;
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aD63E45 {
          margin-top: 0px;
        }
      }

      .channel-html .f1FC02B {
        /** Margin */
        margin-left: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f1FC02B {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f1FC02B {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f1FC02B {
          margin-left: 0px;
        }
      }

      .channel-html .fF80C74 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .k191A76 {
        color: #1d1d1f;
        margin-left: 0px;
        padding-top: 1px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k191A76 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k191A76 {
          padding-left: 24px;
        }
      }

      .channel-html .h0FBFC7 {
        /** alignment */
        /** Margin */
        margin-top: 38px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h0FBFC7 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h0FBFC7 {
          margin-top: 31px;
        }
      }

      .channel-html .tA60939 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .s0596D3 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 10px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s0596D3 {
          margin-top: 0px;
        }
      }

      .channel-html .hC613C3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .iB6BED6 {
        /** Margin */
        margin-top: 0px;
        margin-left: 9px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iB6BED6 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iB6BED6 {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iB6BED6 {
          margin-left: 6px;
        }
      }

      .channel-html .o9ECBAB {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o9ECBAB {
          margin-top: 0px;
        }
      }

      .channel-html .x1BB37D {
        color: #1d1d1f;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x1BB37D {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x1BB37D {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x1BB37D {
          padding-left: 1px;
        }
      }

      .channel-html .s160C15 {
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
        .channel-html .s160C15 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s160C15 {
          margin-top: 16px;
        }
      }

      .channel-html .y9C6FF3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .hAC8BDD {
        /** Margin */
        margin-top: 1px;
        margin-left: 6px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hAC8BDD {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hAC8BDD {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hAC8BDD {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hAC8BDD {
          margin-left: 4px;
        }
      }

      .channel-html .x4E0989 {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .iC0E21E {
        color: #1d1d1f;
        margin-left: 0px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iC0E21E {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .iC0E21E {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iC0E21E {
          padding-left: 1px;
        }
      }

      .channel-html .k941F53 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 10px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k941F53 {
          padding-left: 0px;
        }
      }

      .channel-html .n2DDB75 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 4px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n2DDB75 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n2DDB75 {
          margin-top: 18px;
        }
      }

      .channel-html .eC50E71 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z9D89A0 {
        /** Margin */
        margin-top: 2px;
        margin-left: 8px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9D89A0 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9D89A0 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9D89A0 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9D89A0 {
          margin-left: 4px;
        }
      }

      .channel-html .f5BE498 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .v9B40AC {
        color: #1d1d1f;
        padding-left: 15px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v9B40AC {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v9B40AC {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v9B40AC {
          padding-left: 1px;
        }
      }

      .channel-html .v466EF3 {
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
        .channel-html .v466EF3 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v466EF3 {
          margin-top: 18px;
        }
      }

      .channel-html .mB46188 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .p8A63D7 {
        /** Margin */
        margin-top: 1px;
        margin-left: 13px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p8A63D7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p8A63D7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p8A63D7 {
          margin-left: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p8A63D7 {
          margin-left: 2px;
        }
      }

      .channel-html .eC8E4EE {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .p95B1FF {
        color: #1d1d1f;
        margin-left: 0px;
        padding-left: 15px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p95B1FF {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p95B1FF {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p95B1FF {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p95B1FF {
          padding-right: 58px;
        }
      }

      .channel-html .n1C9CD2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n1C9CD2 {
          margin-left: -20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n1C9CD2 {
          order: 1;
        }
      }

      .channel-html .m4E4BF0 {
        /** Background **/
        background: undefined;
        /** Grid */
        display: grid;
        grid-gap: 5px;
        grid-template-rows: 300px;
        grid-auto-rows: 1fr;
        grid-template-columns: repeat(1, 300px);
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m4E4BF0 {
          grid-template-rows: 200px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m4E4BF0 {
          grid-template-rows: 240px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m4E4BF0 {
          grid-template-columns: repeat(1, 200px);
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m4E4BF0 {
          grid-template-columns: repeat(1, 320px);
        }
      }

      .channel-html .m4E4BF0 .bentobox-item {
        border-radius: 20px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m4E4BF0 .bentobox-item {
          border-radius: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m4E4BF0 .bentobox-item {
          overflow: hidden;
        }
      }

      .channel-html .hED1235 {
        background-color: #fafafa;
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 2;
        position: relative;
      }

      .channel-html .hED1235:before {
        display: block;
        position: absolute;
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-style: solid;
      }

      .channel-html .rAD7FC9 {
        /** Margin */
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rAD7FC9 {
          margin-top: 30px;
        }
      }

      .channel-html .w136505 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w136505 {
          margin-top: 0px;
        }
      }

      .channel-html .tD41637 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .z949518 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .i8B2285 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .z99EF64 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 39px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z99EF64 {
          margin-top: 32px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z99EF64 {
          margin-top: 41px;
        }
      }

      .channel-html .p8E4340 {
        /** Margin */
        margin-top: 1px;
        margin-left: -1px;
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p8E4340 {
          margin-top: 0px;
        }
      }

      .channel-html .wB6AF26 {
        /** Margin */
        margin-left: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wB6AF26 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wB6AF26 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wB6AF26 {
          margin-left: 0px;
        }
      }

      .channel-html .o275A62 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .zFB5FB6 {
        color: #1d1d1f;
        margin-left: 0px;
        padding-top: 1px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zFB5FB6 {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zFB5FB6 {
          padding-left: 24px;
        }
      }

      .channel-html .vD50387 {
        /** alignment */
        /** Margin */
        margin-top: 38px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vD50387 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vD50387 {
          margin-top: 31px;
        }
      }

      .channel-html .u18F3D1 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .rC10E92 {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rC10E92 {
          margin-top: 0px;
        }
      }

      .channel-html .g2596CA {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .yB388FB {
        /** Margin */
        margin-top: 0px;
        margin-left: 9px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yB388FB {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yB388FB {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yB388FB {
          margin-left: 6px;
        }
      }

      .channel-html .aAB7DA7 {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aAB7DA7 {
          margin-top: 0px;
        }
      }

      .channel-html .m678D3F {
        color: #1d1d1f;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m678D3F {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m678D3F {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m678D3F {
          padding-left: 1px;
        }
      }

      .channel-html .b345F01 {
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
        .channel-html .b345F01 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b345F01 {
          margin-top: 16px;
        }
      }

      .channel-html .sC2CD50 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .cDC836E {
        /** Margin */
        margin-top: 1px;
        margin-left: 6px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cDC836E {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cDC836E {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cDC836E {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cDC836E {
          margin-left: 4px;
        }
      }

      .channel-html .p1CEC8F {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .oE48CE8 {
        color: #1d1d1f;
        margin-left: 0px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oE48CE8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oE48CE8 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oE48CE8 {
          padding-left: 1px;
        }
      }

      .channel-html .d31D717 {
        /** Margin */
        margin-left: 0px;
        /** Padding */
        padding-left: 10px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d31D717 {
          padding-left: 0px;
        }
      }

      .channel-html .y7507EC {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 4px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y7507EC {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y7507EC {
          margin-top: 18px;
        }
      }

      .channel-html .x419B24 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .uD76FD0 {
        /** Margin */
        margin-top: 0px;
        margin-left: 13px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uD76FD0 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uD76FD0 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uD76FD0 {
          margin-left: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uD76FD0 {
          margin-left: -1px;
        }
      }

      .channel-html .w7808F3 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .t42C63E {
        color: #1d1d1f;
        padding-left: 15px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t42C63E {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t42C63E {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t42C63E {
          padding-left: 1px;
        }
      }

      .channel-html .b19879B {
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
        .channel-html .b19879B {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b19879B {
          margin-top: 18px;
        }
      }

      .channel-html .rC6A9E2 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .y8188FA {
        /** Margin */
        margin-top: 1px;
        margin-left: 13px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8188FA {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8188FA {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8188FA {
          margin-left: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8188FA {
          margin-left: 2px;
        }
      }

      .channel-html .i3A3845 {
        /** Margin */
        /** Padding */
        padding-left: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .j9898B7 {
        color: #1d1d1f;
        margin-left: 0px;
        padding-left: 15px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j9898B7 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j9898B7 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j9898B7 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j9898B7 {
          padding-right: 58px;
        }
      }

      .channel-html .h9055FD {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        order: 1;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h9055FD {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h9055FD {
          padding-right: 0px;
        }
      }

      .channel-html .e89A54D {
        /** Margin */
        margin-top: 5px;
        margin-left: -1014px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e89A54D {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e89A54D {
          margin-left: -188px;
        }
      }

      .channel-html .f4B518F {
        /** Margin */
        /** Padding */
        /** Overflow */
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tC56E9B {
        /** alignment */
        align-items: center;
        /** Margin */
        margin-top: 138px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tC56E9B {
          justify-content: start;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tC56E9B {
          margin-top: 114px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tC56E9B {
          margin-top: 80px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tC56E9B {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tC56E9B {
          margin-bottom: 0px;
        }
      }

      .channel-html .zCD7C4C {
        /** Margin */
        /** Padding */
        padding-right: 0px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zCD7C4C {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zCD7C4C {
          padding-right: 0px;
        }
      }

      .channel-html .lD48473 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lD48473 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lD48473 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lD48473 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lD48473 {
          margin-bottom: 0px;
        }
      }

      .channel-html .fAC48FF {
        color: #1d1d1f;
        margin-top: 10px;
        margin-left: -2px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fAC48FF {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fAC48FF {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fAC48FF {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fAC48FF {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fAC48FF {
          margin-bottom: 0px;
        }
      }

      .channel-html .fAC48FF {
        background: linear-gradient(90deg, #194BB5 0%, #009DE4 70%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .fAC48FF [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .fAC48FF * {
        background: inherit;
      }

      .channel-html .eBA2E21 {
        color: #1d1d1f;
        margin-top: 25px;
        margin-left: -1.5px;
        padding-right: 44px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eBA2E21 {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBA2E21 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eBA2E21 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBA2E21 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBA2E21 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eBA2E21 {
          padding-right: 35px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eBA2E21 {
          padding-right: 16px;
        }
      }

      .channel-html .s30C019 {
        /** alignment */
        /** Margin */
        margin-top: 35px;
        margin-bottom: 99px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s30C019 {
          margin-top: 61px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s30C019 {
          margin-top: 53px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s30C019 {
          margin-bottom: 78px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s30C019 {
          margin-bottom: 50px;
        }
      }

      .channel-html .zA6A381 {
        /** Margin */
        margin-top: 97px;
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zA6A381 {
          margin-top: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zA6A381 {
          margin-top: 0px;
        }
      }

      .channel-html .qDCD7F7 {
        color: #1d1d1f;
        margin-left: 120px;
        margin-bottom: 0px;
        padding-left: 44px;
        padding-right: 44px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qDCD7F7 {
          margin-left: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qDCD7F7 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qDCD7F7 {
          padding-left: 52px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qDCD7F7 {
          padding-left: 54px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .qDCD7F7 {
          padding-right: 52px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .qDCD7F7 {
          padding-right: 52px;
        }
      }

      .channel-html .b076BF0 {
        /** Margin */
        margin-top: 8px;
        margin-left: 304px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b076BF0 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b076BF0 {
          margin-left: 178px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b076BF0 {
          margin-left: 140px;
        }
      }

      .channel-html .r628915 {
        /** Margin */
        margin-top: 18px;
        margin-left: -875px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r628915 {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r628915 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r628915 {
          margin-left: -188px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r628915 {
          margin-left: -227px;
        }
      }

      .channel-html .s7BB231 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s7BB231 {
          margin-top: 39px;
        }
      }

      .channel-html .yF401B9 {
        /** Margin */
        margin-left: 38px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yF401B9 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yF401B9 {
          margin-left: 13px;
        }
      }

      .channel-html .q323873 {
        /** alignment */
        /** Margin */
        margin-top: 19px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q323873 {
          margin-top: 11px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q323873 {
          margin-top: 8px;
        }
      }

      .channel-html .d48852E {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tEDFA2C {
        /** Margin */
        margin-left: 183px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tEDFA2C {
          margin-left: 110px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tEDFA2C {
          margin-left: 90px;
        }
      }

      .channel-html .tE05092 {
        color: #1d1d1f;
        margin-top: 19px;
        margin-left: 124px;
        padding-left: 18px;
        padding-right: 18px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tE05092 {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tE05092 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tE05092 {
          margin-left: 49px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tE05092 {
          margin-left: 45px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tE05092 {
          margin-right: -22px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tE05092 {
          padding-left: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tE05092 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tE05092 {
          padding-right: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tE05092 {
          padding-right: 0px;
        }
      }

      .channel-html .r32BEA9 {
        /** Margin */
        /** Padding */
        /** Align text*/
        text-align: center;
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .zEE6878 {
        /** Margin */
        margin-left: 51px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zEE6878 {
          margin-left: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zEE6878 {
          margin-left: 35px;
        }
      }

      .channel-html .q4D47C3 {
        color: #1d1d1f;
        margin-top: 19px;
        margin-right: 48px;
        padding-left: 28px;
        padding-right: 28px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q4D47C3 {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q4D47C3 {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q4D47C3 {
          margin-left: -5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q4D47C3 {
          margin-left: -16px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q4D47C3 {
          margin-right: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q4D47C3 {
          margin-right: 26px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q4D47C3 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q4D47C3 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q4D47C3 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q4D47C3 {
          padding-right: 0px;
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
        align-items: flex-start;
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
          margin-top: 45px;
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
          padding-top: 41px;
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
          padding-bottom: 40px;
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
        margin-bottom: 35px;
        /** Padding */
        padding-top: 0px;
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
          margin-bottom: 0px;
        }
      }

      .channel-html .f89a263 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f89a263 {
          margin-left: 0px;
        }
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
          margin-left: 0px;
        }
      }

      .channel-html .ecd1114 {
        /** Margin */
        /** Padding */
        padding-right: 41px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          margin-top: 30px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ecd1114 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ecd1114 {
          padding-right: 29px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ecd1114 {
          padding-right: 10px;
        }
      }

      .channel-html .w6189bf {
        /** Margin */
        margin-top: 0px;
        margin-left: -2px;
        margin-bottom: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w6189bf {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6189bf {
          margin-bottom: 0px;
        }
      }

      .channel-html .s2fd10f {
        color: #1d1d1f;
        margin-top: 14.5px;
        margin-left: -1px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2fd10f {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2fd10f {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2fd10f {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2fd10f {
          padding-left: 1px;
        }
      }

      .channel-html .z9a22cb {
        color: #86868b;
        margin-top: 1px;
        margin-left: -1px;
        padding-right: 6px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22cb {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z9a22cb {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z9a22cb {
          padding-right: 0px;
        }
      }

      .channel-html .c3c737c {
        /** Margin */
        /** Padding */
        padding-right: 41px;
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3c737c {
          margin-top: 44px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c3c737c {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c3c737c {
          margin-bottom: 0px;
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
        margin-top: 0px;
        margin-left: -1px;
        margin-bottom: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x7471c6 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7471c6 {
          margin-bottom: 14px;
        }
      }

      .channel-html .q05c363 {
        color: #1d1d1f;
        margin-top: 13.5px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q05c363 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q05c363 {
          margin-bottom: 0px;
        }
      }

      .channel-html .t3cf362 {
        color: #86868b;
        margin-top: 1px;
        margin-left: 0px;
        padding-right: 23px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3cf362 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3cf362 {
          padding-right: 26px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t3cf362 {
          padding-right: 30px;
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

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          margin-top: 44px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ec88939 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ec88939 {
          padding-right: 29px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ec88939 {
          padding-right: 10px;
        }
      }

      .channel-html .t34db34 {
        /** Margin */
        margin-top: 0px;
        margin-left: -2px;
        margin-bottom: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t34db34 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t34db34 {
          margin-bottom: 14px;
        }
      }

      .channel-html .ea02c4b {
        color: #1d1d1f;
        margin-top: 14.5px;
        margin-left: -1px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ea02c4b {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ea02c4b {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ea02c4b {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ea02c4b {
          margin-bottom: 0px;
        }
      }

      .channel-html .c8278a9 {
        color: #86868b;
        margin-top: 1px;
        margin-left: -1px;
        margin-bottom: -2px;
        padding-right: 6px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c8278a9 {
          padding-right: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c8278a9 {
          padding-right: 16px;
        }
      }

      .channel-html .c3669a0 {
        background-color: #f5f5f7;
        /** Margin */
        /** Padding */
        /** Overflow */
        overflow: hidden;
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .u4bd09c {
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
        .channel-html .u4bd09c {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u4bd09c {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u4bd09c {
          padding-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4bd09c {
          padding-right: 50vw;
        }
      }

      .channel-html .u4bd09c.large-display-bleed::before,
      .channel-html .u4bd09c.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .u4bd09c.medium-display-bleed::before,
      .channel-html .u4bd09c.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .u4bd09c.small-display-bleed::before,
      .channel-html .u4bd09c.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .q0d85cf {
        /** Margin */
        margin-bottom: 52px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0d85cf {
          margin-bottom: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0d85cf {
          margin-bottom: 19px;
        }
      }

      .channel-html .s2eea35 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2eea35 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2eea35 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2eea35 {
          margin-bottom: 7px;
        }
      }

      .channel-html .y81e5d6 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y81e5d6 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y81e5d6 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y81e5d6 {
          padding-right: 54px;
        }
      }

      .nA6DD06 {
        width: 100%;
        --columns: 5;
        --grid-column: 5;
        --static-enabled: true;
        --column-data: 0, 21, 22, 1, 2, 0, 21, 22, 21, 22;
        --allowed-columns: 5, 3, 2;
      }

      .nA6DD06 .compare-column-0 {
        display: flex;
        order: 1;
      }

      .nA6DD06 .compare-column-1 {
        display: flex;
        order: 2;
      }

      .nA6DD06 .compare-column-2 {
        display: flex;
        order: 3;
      }

      .nA6DD06 .compare-column-3 {
        display: flex;
        order: 4;
      }

      .nA6DD06 .compare-column-4 {
        display: flex;
        order: 5;
      }

      .nA6DD06 .compare-static-0 {
        display: flex;
        order: 1;
      }

      .nA6DD06 .compare-static-21 {
        display: flex;
        order: 2;
      }

      .nA6DD06 .compare-static-22 {
        display: flex;
        order: 3;
      }

      .nA6DD06 .compare-static-1 {
        display: flex;
        order: 4;
      }

      .nA6DD06 .compare-static-2 {
        display: flex;
        order: 5;
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 {
          --columns: 3;
          --grid-column: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 .compare-column-2 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 1068px) {
        .nA6DD06 {
          --static-enabled: true;
        }

        .nA6DD06 .compare-static-1 {
          display: none;
        }

        .nA6DD06 .compare-static-2 {
          display: none;
        }

        .nA6DD06 .compare-static-0 {
          display: flex;
          order: 1;
        }

        .nA6DD06 .compare-static-21 {
          display: flex;
          order: 2;
        }

        .nA6DD06 .compare-static-22 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 {
          --columns: 2;
          --grid-column: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 .compare-column-2 {
          display: none;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 734px) {
        .nA6DD06 {
          --static-enabled: true;
        }

        .nA6DD06 .compare-static-0 {
          display: none;
        }

        .nA6DD06 .compare-static-1 {
          display: none;
        }

        .nA6DD06 .compare-static-2 {
          display: none;
        }

        .nA6DD06 .compare-static-0 {
          display: none;
        }

        .nA6DD06 .compare-static-21 {
          display: flex;
          order: 1;
        }

        .nA6DD06 .compare-static-22 {
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
        padding-top: 65px;
        padding-bottom: 66px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          margin-top: 10px;
        }
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
          padding-top: 70px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bebb53d {
          padding-bottom: 72px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bebb53d {
          padding-bottom: 49px;
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
        margin-top: 4px;
        /** Padding */
        padding-top: 0px;
        padding-bottom: 0px;
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
          margin-bottom: 0px;
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
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2d1062 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2d1062 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s2d1062 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s2d1062 {
          margin-bottom: 7px;
        }
      }

      .channel-html .c41b14d {
        color: #1d1d1f;
        margin-top: 8px;
        margin-left: -1.5px;
        margin-bottom: 0px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c41b14d {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c41b14d {
          margin-bottom: 0px;
        }
      }

      .channel-html .ca33ec8 {
        color: #1d1d1f;
        margin-top: 18px;
        margin-left: -1px;
        margin-bottom: 13px;
        padding-right: 81px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .ca33ec8 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .ca33ec8 {
          padding-right: 34px;
        }
      }

      .channel-html .f917494 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        margin-left: 1px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .c58aa7e {
        /** Margin */
        margin-left: -1.5px;
        /** Padding */
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
          margin-top: 37px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u4c208c {
          margin-left: 0px;
        }
      }

      .channel-html .y8aa809 {
        /** Margin */
        margin-left: 71px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y8aa809 {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y8aa809 {
          margin-left: -125px;
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
        padding-top: 82px;
        padding-bottom: 80px;
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
          padding-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y863eb8 {
          padding-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y863eb8 {
          padding-bottom: 44px;
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
        margin-top: 0px;
        /** Padding */
        padding-top: 0px;
        padding-bottom: 0px;
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
          margin-bottom: 44px;
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
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z92eeb6 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z92eeb6 {
          margin-bottom: 7px;
        }
      }

      .channel-html .d6c9ea4 {
        color: #1d1d1f;
        margin-top: 8px;
        margin-left: -1px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d6c9ea4 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d6c9ea4 {
          margin-bottom: 0px;
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
        margin-top: 18px;
        margin-bottom: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC80FC7 {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC80FC7 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC80FC7 {
          margin-bottom: 0px;
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
        margin-top: 5px;
        margin-left: -1px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB87DB1 {
          margin-left: -1px;
        }
      }

      .channel-html .sD81520 {
        /** Margin */
        margin-top: 0px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sD81520 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sD81520 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sD81520 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sD81520 {
          margin-left: 0px;
        }
      }

      .channel-html .wDE5C0D {
        /** Margin */
        margin-left: 11px;
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

      @media only screen and (max-width: 734px) {
        .channel-html .wDE5C0D {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDE5C0D {
          padding-left: 10px;
        }
      }

      .channel-html .eDF67E3 {
        color: #1d1d1f;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eDF67E3 {
          margin-left: 0px;
        }
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

      @media only screen and (max-width: 1068px) {
        .channel-html .e6D011D {
          margin-top: 0px;
        }
      }

      .channel-html .v925DA3 {
        /** Margin */
        margin-top: 4px;
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v925DA3 {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v925DA3 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v925DA3 {
          margin-left: -1px;
        }
      }

      .channel-html .h011405 {
        /** Margin */
        margin-top: 1px;
        margin-left: 1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h011405 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h011405 {
          margin-left: 1px;
        }
      }

      .channel-html .oF11AA6 {
        /** Margin */
        margin-left: 9px;
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
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oF11AA6 {
          padding-left: 10px;
        }
      }

      .channel-html .h594938 {
        color: #1d1d1f;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h594938 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h594938 {
          padding-right: 0px;
        }
      }

      .channel-html .d96DCA4 {
        /** alignment */
        /** Margin */
        margin-top: 0px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d96DCA4 {
          margin-top: 0px;
        }
      }

      .channel-html .w44500F {
        /** Margin */
        margin-top: 4px;
        margin-left: -1.5px;
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w44500F {
          margin-top: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w44500F {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w44500F {
          margin-left: -1px;
        }
      }

      .channel-html .r5B274C {
        /** Margin */
        margin-top: 1px;
        margin-left: 1px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r5B274C {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r5B274C {
          margin-left: 1px;
        }
      }

      .channel-html .lCA6884 {
        /** Margin */
        margin-left: 10px;
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
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lCA6884 {
          padding-left: 10px;
        }
      }

      .channel-html .a7D7BA1 {
        color: #1d1d1f;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a7D7BA1 {
          margin-left: 0px;
        }
      }

      .channel-html .q381EBA {
        /** alignment */
        /** Margin */
        margin-top: 13px;
        /** Padding */
        padding-left: 1px;
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q381EBA {
          margin-top: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q381EBA {
          margin-top: 17px;
        }
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
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x7b6000 {
          margin-left: 0px;
        }
      }

      .channel-html .t3f263f {
        /** Margin */
        margin-top: -2px;
        margin-left: 46.5px;
        /** Layer controls */
        /** Interaction controls */
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t3f263f {
          margin-left: 33.5px;
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
        margin-left: 7px;
        margin-bottom: 7px;
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
          margin-top: 46px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c0ADE54 {
          margin-left: 0px;
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
        margin-left: 0px;
      }

      .channel-html .mDD0219 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .u86A4AE {
        margin-left: 0px;
        padding-left: 0px;
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

      .channel-html .d79B737 {
        color: #6E6E73;
      }

      .channel-html .b5193E8 {
        color: #6E6E73;
        margin-left: -0.5px;
        padding-right: 2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b5193E8 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b5193E8 {
          padding-right: 0px;
        }
      }

      .channel-html .p073F6A {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .k77AA8F {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .tB8D724 {
        color: #6E6E73;
        margin-left: -0.5px;
        padding-right: 2px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tB8D724 {
          padding-right: 0px;
        }
      }

      .channel-html .q0A3EF3 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .bF0BB83 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .aC90B8D {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aC90B8D {
          padding-right: 9px;
        }
      }

      .channel-html .qB256B6 {
        /** alignment */
        /** Margin */
        margin-bottom: 9px;
        /** Padding */
        /** Layer controls */
        /** Interaction controls */
        /** Display Bleed L/M/S (When true, it must match the BG color of the row) */
      }

      .channel-html .pA74251 {
        /** Margin */
        /** Padding */
        /** Align text*/
        /** Flexbox order*/
        /** Layer controls */
        /** Interaction controls */
      }

      .channel-html .qF8C7E0 {
        color: #6E6E73;
        margin-left: -0.5px;
      }
    </style>
  </head>

  <body>
    <div class="channel-html">
      <!--BEGIN S1 HERO-->
      <div class="section fa908b4">
        <div class="section-content">
          <div class="row z9a22bc">
            <div class="column large-12 x746c32">
              <div class="row v5af1c5">
                <div class="column adb5135">
                  <h2 class="visually-hidden-text"> MacBook Air <figure aria-hidden="true" class="image image-hero_logo y8d5222"></figure>
                  </h2>
                </div>
              </div>
              <div class="row pB8542E">
                <div class="column large-12 small-hide qC0AB01">
                  <p class="copy iE0ECFD channel-custom-font-custom-80-headline-super">Don’t take it lightly.</p>
                </div>
                <div class="column large-12 large-hide small-show q6C6B54">
                  <p class="copy z9b16b1 typography-headline-standalone">Don’t take it lightly.</p>
                </div>
              </div>
              <p class="copy helvetica-neue w6fd73a channel-custom-font-custom-24-intro-elevated">Redesigned around the next-generation M2 chip, MacBook&nbsp;Air is strikingly thin and brings exceptional speed and power efficiency within its durable all-aluminium enclosure. It’s the ultra-portable, ultra-capable laptop that lets you work, play or create just about anything — anywhere.<span aria-hidden="true" style="top: -0.4em; position: relative; font-size: .6em;vertical-align: top;">◊</span></p>
              <div class="row h093FB9">
                <div class="column large-7 medium-8 small-12 z4FCF22">
                  <p class="copy helvetica-neue p77D6CC channel-custom-font-custom-32-superchargedby">Supercharged by</p>
                </div>
                <div class="column large-5 medium-4 small-12 u701388">
                  <figure aria-label="M2 chip" role="img" class="image image-hero_icon_m2 qC0E0AE"></figure>
                </div>
              </div>
<!--              <p class="copy helvetica-neue e3364d1 channel-custom-font-custom-17-body-tight">Available next month</p>-->
            </div>
            <div class="column large-12 b9CE136">
              <figure aria-label="Showcasing MacBook Air in four finishes: Silver, Starlight, Space Gray and Midnight" role="img" class="image image-hero double-invert xE15EC2"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S1 HERO-->
      <!--BEGIN S2 DESIGN-->
      <div class="section f1390a8">
        <div class="section-content">
          <div class="row t3eaab6" style="margin-top:100px !important;">
            <div class="column large-12 small-12 q0bfc78">
              <h3 class="copy r1eb62f channel-custom-font-custom-24-eyebrow">Design</h3>
              <div class="row small-hide d7BBAAB">
                <div class="column large-9 medium-10 i3A0691">
                  <p class="copy ca83cac channel-custom-font-custom-48-headline">Less to carry. More to </p>
                </div>
                <div class="column large-3 medium-2 lCF6EB7">
                  <figure aria-label="Love" role="img" class="image image-design_icon_tapback z5E0652"></figure>
                </div>
              </div>
              <div class="row o4A7DA7">
                <div class="column large-9 large-hide medium-10 small-12 small-show g58D187">
                  <p class="copy eE30D62 channel-custom-font-custom-48-headline">Less to carry. </p>
                </div>
                <div class="column large-12 large-hide small-8 small-show hBD7028">
                  <p class="copy kC0C97E channel-custom-font-custom-48-headline">More to </p>
                </div>
                <div class="column large-3 large-hide medium-2 small-4 small-show o12F71D">
                  <figure aria-label="Love" role="img" class="image image-design_icon_tapback p4F313A"></figure>
                </div>
              </div>
              <p class="copy helvetica-neue z9721c4 channel-custom-font-custom-21-intro">More portable than ever, MacBook Air comes in four gorgeous finishes — each with its own matching MagSafe charging cable.</p>
              <div class="row w566ADD">
                <div class="column large-6 hC70E18">
                  <p class="copy h537AA6 channel-custom-font-custom-40-badge">1.24<span class="channel-custom-font-custom-22-badge"> kg</span> </p>
                  <p class="copy helvetica-neue yCA1644 channel-custom-font-custom-14-body-reduced">(2.7 pounds)<span aria-hidden="true" style="top: -0.4em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                </div>
                <div class="column large-6 j967BCD">
                  <p class="copy lE81330 channel-custom-font-custom-40-badge">1.13<span class="channel-custom-font-custom-22-badge"> cm</span> </p>
                  <p class="copy helvetica-neue u17292B channel-custom-font-custom-14-body-reduced">thin </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row e7364CB">
            <div class="column large-6 small-12 ddb6fd4">
              <figure aria-hidden="true" class="image image-design_midnight double-invert z9459bf"></figure>
              <p class="copy helvetica-neue q0778E3 channel-custom-font-custom-14-body-reduced">Midnight</p>
            </div>
          </div>
          <div class="row f8E1F92">
            <div class="column large-3 l869F4C">
              <figure aria-hidden="true" class="image image-design_silver double-invert o378B63"></figure>
              <p class="copy helvetica-neue a9CA0CD channel-custom-font-custom-14-body-reduced">Silver</p>
            </div>
            <div class="column large-6 r70FAA9">
              <figure aria-hidden="true" class="image image-design_starlight double-invert vEC3C30"></figure>
              <p class="copy helvetica-neue m5E4E31 channel-custom-font-custom-14-body-reduced">Starlight</p>
            </div>
            <div class="column large-3 sEC07CB">
              <figure aria-hidden="true" class="image image-design_space_gray double-invert nA1A265"></figure>
              <p class="copy helvetica-neue kA6E915 channel-custom-font-custom-14-body-reduced">Space Grey</p>
            </div>
          </div>
        </div>
      </div>
      <!--END S2 DESIGN-->
      <!--BEGIN S3 PERFORMANCE-->
      <div class="section w752BF3">
        <div class="section-content">
          <div class="row h8AB5EA">
            <div class="column large-12 small-12 n06C15C">
              <h3 class="copy g9ACBA4 channel-custom-font-custom-24-eyebrow">Performance</h3>
              <p class="copy f493179 channel-custom-font-custom-48-headline">Prepare for <span style="white-space: nowrap;">take-off.</span></p>
              <p class="copy helvetica-neue r2FA8AA channel-custom-font-custom-21-intro">The M2 chip launches the next generation of fast and power-efficient Apple silicon. All your go-to apps run lightning fast, including Microsoft&nbsp;365 and many of your favourite iOS apps.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> The battery goes all day — and into the night. And macOS keeps everything safe and secure.</p>
            </div>
          </div>
          <div class="row jC7CFB9">
            <div class="column large-5 small-6 g1916E1">
              <p class="copy helvetica-neue iDA07F0 channel-custom-font-custom-14-body-reduced">Up to</p>
              <p class="copy t2E0F0E channel-custom-font-custom-40-badge">1.4x</p>
              <p class="copy helvetica-neue uAA966D channel-custom-font-custom-14-body-reduced">faster than M1&nbsp;model<span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
            </div>
            <div class="column large-3 medium-2 small-6 f518731">
              <p class="copy helvetica-neue nC34DFB channel-custom-font-custom-14-body-reduced">Up to</p>
              <p class="copy p50B923 channel-custom-font-custom-40-badge">15x</p>
              <p class="copy helvetica-neue o606BCD channel-custom-font-custom-14-body-reduced">faster than&nbsp;<br>Intel‑based model<span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
            </div>
            <div class="column large-4 medium-5 small-6 l637685">
              <p class="copy helvetica-neue aE3D7B7 channel-custom-font-custom-14-body-reduced">Up to</p>
              <p class="copy nA378C5 channel-custom-font-custom-40-badge">18 hours</p>
              <p class="copy helvetica-neue mCE67A3 channel-custom-font-custom-14-body-reduced">battery life<span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
            </div>
          </div>
          <div class="row w0F3AA4">
            <div class="column large-12 medium-12 small-12 s1D6168">
              <figure aria-label="Showcase of multiple apps running on the M2 chip" role="img" class="image image-performance double-invert g88461D"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S3 PERFORMANCE-->
      <!--BEGIN S4 DISPLAY-->
      <div class="section uA824E6">
        <div class="section-content">
          <div class="row a3E86EF">
            <div class="column large-6 small-12 d79FC31">
              <div class="row tA3B4A3">
                <div class="column large-12 small-12 pB12CFC">
                  <div class="row rD238D5">
                    <div class="column large-12 aA8006A">
                      <h3 class="copy i9BBC2E channel-custom-font-custom-24-eyebrow">Display</h3>
                      <p class="copy x59DA46 channel-custom-font-custom-48-headline">To be clear, it’s gorgeous.</p>
                    </div>
                  </div>
                  <div class="row dB6984D"></div>
                </div>
                <div class="column large-12 jDF7B26">
                  <p class="copy helvetica-neue iE51133 channel-custom-font-custom-21-intro">The breathtaking <span style="white-space: nowrap;">34.46-centimetre</span>&nbsp;<br> Liquid&nbsp;Retina display supports 1&nbsp;billion colours. Everything you do looks brilliant, with sharp detail.<span aria-hidden="true" style="top: -0.2em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span> </p>
                </div>
                <div class="column large-12 z8D0BBE">
                  <div class="row q6B110D">
                    <div class="column large-1 gE50C0C">
                      <figure aria-hidden="true" class="image image-display_icon_brightness zE9B20E"></figure>
                    </div>
                    <div class="column large-11 vC234BE">
                      <p class="copy helvetica-neue h69445F channel-custom-font-custom-17-body-tight">500 nits of brightness</p>
                    </div>
                  </div>
                  <div class="row a1E4039">
                    <div class="column large-1 v2D5FA1">
                      <figure aria-hidden="true" class="image image-display_icon_color g64E87B"></figure>
                    </div>
                    <div class="column large-11 fEF31AF">
                      <p class="copy helvetica-neue b029D1A channel-custom-font-custom-17-body-tight">P3 wide colour</p>
                    </div>
                  </div>
                  <div class="row pE56C19">
                    <div class="column large-1 xC2DCB3">
                      <figure aria-hidden="true" class="image image-display_icon_true_tone o13AE67"></figure>
                    </div>
                    <div class="column large-11 n7A4254">
                      <p class="copy helvetica-neue v4DCE83 channel-custom-font-custom-17-body-tight">True Tone technology</p>
                    </div>
                  </div>
                </div>
                <div class="column large-12 large-hide small-show t30DF41">
                  <figure aria-label="Showcasing 13.6-inch Liquid Retina display" role="img" class="image image-display double-invert p7CA32D"></figure>
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 small-hide fA76746">
              <figure aria-label="Showcasing 13.6-inch Liquid Retina display" role="img" class="image image-display double-invert v0BE3E3"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S4 DISPLAY-->
      <!--BEGIN S5 CAMERA AND AUDIO-->
      <div class="section kE80BCE">
        <div class="section-content">
          <div class="row oECCA25">
            <div class="column large-6 small-12 j2143C3">
              <h3 class="copy n7B7F65 channel-custom-font-custom-24-eyebrow">Camera and Audio</h3>
              <p class="copy i2A6910 channel-custom-font-custom-48-headline">Look sharp. Sound great.</p>
              <div class="row large-hide small-show tD3E45C">
                <div class="column large-6 small-12 g0ED212">
                  <figure aria-label="Showcasing FaceTime video call and other apps on MacBook Air" role="img" class="image image-camera_macbook double-invert d75CBDA"></figure>
                </div>
              </div>
              <div class="row tF10FEB">
                <div class="column large-1 h79965A">
                  <figure aria-hidden="true" class="image image-camera_icon_facetime c9AEDEB"></figure>
                </div>
                <div class="column large-11 kDD5808">
                  <p class="copy helvetica-neue zFDBADA channel-custom-font-custom-17-body-tight">1080p FaceTime HD camera</p>
                  <p class="copy helvetica-neue lB1FA63 channel-custom-font-custom-17-body-reduced">Look your best on video calls with a camera that doubles the resolution and low-light performance of the previous generation.</p>
                </div>
              </div>
              <div class="row cDE1D84">
                <div class="column large-1 c7A12F1">
                  <figure aria-hidden="true" class="image image-audio_icon_mic w0846E9"></figure>
                </div>
                <div class="column large-11 rE00FB9">
                  <p class="copy helvetica-neue nE12A19 channel-custom-font-custom-17-body-tight">Three-mic array</p>
                  <p class="copy helvetica-neue yB14C1E channel-custom-font-custom-17-body-reduced">Come through loud and clear on calls, thanks to the three-mic array with advanced beamforming algorithms to capture clean audio.</p>
                </div>
              </div>
              <div class="row o7CA997">
                <div class="column large-1 l2CB1C8">
                  <figure aria-hidden="true" class="image image-audio_icon_spatial l550E16"></figure>
                </div>
                <div class="column large-11 b956951">
                  <p class="copy helvetica-neue h67E66D channel-custom-font-custom-17-body-tight">Four-speaker sound system with Spatial Audio</p>
                  <p class="copy helvetica-neue q7A0509 channel-custom-font-custom-17-body-reduced">Immerse yourself in movies and music with improved stereo separation and vocal clarity.&nbsp;<br>And Spatial Audio with support for Dolby Atmos places sound all around you.</p>
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 small-hide z0755BE">
              <figure aria-label="Showcasing FaceTime video call and other apps on MacBook Air" role="img" class="image image-camera_macbook double-invert o77B131"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S5 CAMERA AND AUDIO-->
      <!--BEGIN S6 MAGIC KEYBOARD-->
      <div class="section a01498B">
        <div class="section-content">
          <div class="row jB81943">
            <div class="column large-5 medium-6 small-12 sF65741">
              <h3 class="copy cEF6E5C channel-custom-font-custom-24-eyebrow">Magic Keyboard</h3>
              <p class="copy u94DF5C channel-custom-font-custom-48-headline">Let your fingers fly.</p>
              <p class="copy helvetica-neue c1CC94D channel-custom-font-custom-21-intro">Comfortable and quiet, Magic&nbsp;Keyboard with Touch&nbsp;ID makes it fast and easy to unlock your Mac and enter passwords with the touch of a finger.</p>
              <div class="row dF6BDAD">
                <div class="column large-12 large-hide small-show x98EFBC">
                  <ul role="list" aria-labelledby="id1" class="list hAA6A49">
                    <li role="listitem" class="list-item r703A52">
                      <div class="row b3AB509">
                        <div class="column large-1 small-show aD63E45">
                          <figure aria-hidden="true" class="image image-keyboard_icon_touch_id f1FC02B"></figure>
                        </div>
                        <div class="column large-11 small-show fF80C74">
                          <p id="id1" class="copy helvetica-neue k191A76 channel-custom-font-custom-21-touch-id">Touch ID</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item e6A52E6">
                      <div class="row h0FBFC7">
                        <div class="column large-6 medium-12 small-show tA60939">
                          <div class="row s0596D3">
                            <div class="column large-2 hC613C3">
                              <figure aria-hidden="true" class="image image-keyboard_icon_unlock iB6BED6"></figure>
                            </div>
                            <div class="column large-10 o9ECBAB">
                              <p class="copy helvetica-neue x1BB37D channel-custom-font-custom-17-body-tight">Unlock your Mac</p>
                            </div>
                          </div>
                          <div class="row s160C15">
                            <div class="column large-2 y9C6FF3">
                              <figure aria-hidden="true" class="image image-keyboard_icon_password hAC8BDD"></figure>
                            </div>
                            <div class="column large-10 x4E0989">
                              <p class="copy helvetica-neue iC0E21E channel-custom-font-custom-17-body-tight">Open password-protected documents</p>
                            </div>
                          </div>
                        </div>
                        <div class="column large-6 medium-12 small-show k941F53">
                          <div class="row n2DDB75">
                            <div class="column large-3 medium-2 eC50E71">
                              <figure aria-hidden="true" class="image image-app_store z9D89A0"></figure>
                            </div>
                            <div class="column large-9 medium-10 f5BE498">
                              <p class="copy helvetica-neue v9B40AC channel-custom-font-custom-17-body-tight">Make purchases on the App Store</p>
                            </div>
                          </div>
                          <div class="row v466EF3">
                            <div class="column large-3 medium-2 mB46188">
                              <figure aria-hidden="true" class="image image-keyboard_icon_apple_tv p8A63D7"></figure>
                            </div>
                            <div class="column large-9 medium-10 eC8E4EE">
                              <p class="copy helvetica-neue p95B1FF channel-custom-font-custom-17-body-tight">Make purchases on the Apple TV app</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="column large-12 large-hide medium-hide small-show n1C9CD2">
                  <div class="bento-box m4E4BF0">
                    <div class="bentobox-item hED1235">
                      <figure aria-label="Magic Keyboard with Touch ID" role="img" class="image image-keyboard_touch_id rAD7FC9"></figure>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row small-hide w136505">
                <div class="column large-12 tD41637">
                  <ul role="list" aria-labelledby="id1" class="list z949518">
                    <li role="listitem" class="list-item i8B2285">
                      <div class="row z99EF64">
                        <div class="column large-1 small-hide p8E4340">
                          <figure aria-hidden="true" class="image image-keyboard_icon_touch_id wB6AF26"></figure>
                        </div>
                        <div class="column large-11 small-hide o275A62">
                          <p id="id1" class="copy helvetica-neue zFB5FB6 channel-custom-font-custom-21-touch-id">Touch ID</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item lE8848D">
                      <div class="row vD50387">
                        <div class="column large-6 medium-12 small-hide u18F3D1">
                          <div class="row rC10E92">
                            <div class="column large-2 g2596CA">
                              <figure aria-hidden="true" class="image image-keyboard_icon_unlock yB388FB"></figure>
                            </div>
                            <div class="column large-10 aAB7DA7">
                              <p class="copy helvetica-neue m678D3F channel-custom-font-custom-17-body-tight">Unlock your Mac</p>
                            </div>
                          </div>
                          <div class="row b345F01">
                            <div class="column large-2 sC2CD50">
                              <figure aria-hidden="true" class="image image-keyboard_icon_password cDC836E"></figure>
                            </div>
                            <div class="column large-10 p1CEC8F">
                              <p class="copy helvetica-neue oE48CE8 channel-custom-font-custom-17-body-tight">Open password-protected documents</p>
                            </div>
                          </div>
                        </div>
                        <div class="column large-6 medium-12 small-hide d31D717">
                          <div class="row y7507EC">
                            <div class="column large-3 medium-2 x419B24">
                              <figure aria-hidden="true" class="image image-app_store uD76FD0"></figure>
                            </div>
                            <div class="column large-9 medium-10 w7808F3">
                              <p class="copy helvetica-neue t42C63E channel-custom-font-custom-17-body-tight">Make purchases on the App Store</p>
                            </div>
                          </div>
                          <div class="row b19879B">
                            <div class="column large-3 medium-2 rC6A9E2">
                              <figure aria-hidden="true" class="image image-keyboard_icon_apple_tv y8188FA"></figure>
                            </div>
                            <div class="column large-9 medium-10 i3A3845">
                              <p class="copy helvetica-neue j9898B7 channel-custom-font-custom-17-body-tight">Make purchases on the Apple TV app</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column large-7 medium-6 small-12 small-hide h9055FD">
              <figure aria-label="Magic Keyboard with Touch ID" role="img" class="image image-keyboard_touch_id double-invert e89A54D"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S6 MAGIC KEYBOARD-->
      <!--BEGIN S7 CONNECTIVITY-->
      <div class="section f4B518F">
        <div class="section-content">
          <div class="row tC56E9B">
            <div class="column large-6 medium-8 small-12 zCD7C4C">
              <h3 class="copy lD48473 channel-custom-font-custom-24-eyebrow">Connectivity</h3>
              <p class="copy fAC48FF channel-custom-font-custom-48-headline">Keep plugging away.</p>
              <p class="copy helvetica-neue eBA2E21 channel-custom-font-custom-21-intro">The quick-release MagSafe power connector brings you peace of mind while freeing up two&nbsp;Thunderbolt&nbsp;ports for high-speed accessories — or you can connect up to a&nbsp;6K&nbsp;display. And the headphone jack <br>supports high-impedance headphones.</p>
            </div>
          </div>
          <div class="row s30C019">
            <div class="column large-6 small-12 zA6A381">
              <p class="copy helvetica-neue qDCD7F7 channel-custom-font-custom-17-body-tight">3.5 mm headphone jack</p>
              <figure aria-hidden="true" class="image image-connectivity_stroke_single b076BF0"></figure>
              <figure aria-label="Pointer showing 3.5 mm headphone jack on side view of MacBook Air" role="img" class="image image-connectivity_headphone_jack double-invert r628915"></figure>
            </div>
            <div class="column large-6 small-12 s7BB231">
              <figure aria-label="Pointer showing MagSafe and 2 Thunderbolt ports on side view of MacBook Air" role="img" class="image image-connectivity_magsafe double-invert yF401B9"></figure>
              <div class="row q323873">
                <div class="column large-6 small-5 d48852E">
                  <figure aria-hidden="true" class="image image-connectivity_stroke_single tEDFA2C"></figure>
                  <p class="copy helvetica-neue tE05092 channel-custom-font-custom-17-body-tight">MagSafe</p>
                </div>
                <div class="column large-6 small-7 r32BEA9">
                  <figure aria-hidden="true" class="image image-connectivity_stroke_double zEE6878"></figure>
                  <p class="copy helvetica-neue q4D47C3 channel-custom-font-custom-17-body-tight">Two Thunderbolt ports</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END S7 CONNECTIVITY-->
      <!--BEGIN S8 FLEX - WHY MAC-->
      <div class="section w6c736d">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed q0a3e94">
            <div class="column large-12 q02c985">
              <h2 class="copy f89a263 channel-custom-font-custom-21-eyebrow-reduced">Why Mac</h2>
              <p class="copy a0c7426 channel-custom-font-custom-40-headline-reduced">There’s more to love in every Mac.</p>
            </div>
            <div class="column large-4 small-12 ecd1114">
              <figure aria-hidden="true" class="image image-why_icon_powerful w6189bf"></figure>
              <h3 class="copy helvetica-neue s2fd10f channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is powerful. </h3>
              <p class="copy helvetica-neue z9a22cb channel-custom-font-custom-17-body-reduced-flex-why-mac">The combination of Apple silicon and macOS means Mac delivers incredible performance and phenomenal battery life. </p>
            </div>
            <div class="column large-4 small-12 c3c737c">
              <figure aria-hidden="true" class="image image-why_icon_connected x7471c6"></figure>
              <h3 class="copy helvetica-neue q05c363 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything works together. </h3>
              <p class="copy helvetica-neue t3cf362 channel-custom-font-custom-17-body-reduced-flex-why-mac">When you combine Mac with other Apple devices, connectivity is seamless and effortless. </p>
            </div>
            <div class="column large-4 small-12 ec88939">
              <figure aria-hidden="true" class="image image-why_icon_easy t34db34"></figure>
              <h3 class="copy helvetica-neue ea02c4b channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is easy.</h3>
              <p class="copy helvetica-neue c8278a9 channel-custom-font-custom-17-body-reduced-flex-why-mac">Starting projects is simple. Sign in to your iCloud account to access your photos, videos and music.</p>
            </div>
          </div>
        </div>
      </div>
      <!--END S8 FLEX - WHY MAC-->
      <!--BEGIN S9 FLEX - COMPARE-->
      <div class="section c3669a0">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed u4bd09c">
            <div class="column large-12 q0d85cf">
              <h2 class="copy s2eea35 channel-custom-font-custom-21-eyebrow-reduced">Compare</h2>
              <h3 class="copy y81e5d6 channel-custom-font-custom-40-headline-reduced">Find the right Mac for you. </h3>
            </div>
            <div class="nA6DD06">
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
                              <div index="5"> MacBook Pro (M2 Chip). (M1, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-6">
                              <div index="6"> MacBook Pro (M2 Chip). (Two Thunderbolt 3 ports, 2020)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-7">
                              <div index="7"> MacBook Pro (M2 Chip). (Two Thunderbolt 3 ports, 2016)</div>
                            </div>
                            <div role="cell" compare-column-header-static="" class="static-dropdown compare-column compare-static-8">
                              <div index="8"> MacBook Pro (M2 Chip). (Four Thunderbolt 3 ports, 2020)</div>
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
                              <div index="22">MacBook Pro  <br>(M2 Chip)</div>
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
                      <!--BEGIN > CATEGORY > BUY-->
                      <div role="rowgroup" class="compare-section section-buy no-padding-top">
                        
                      </div>
                      <!--END > CATEGORY > BUY-->
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
                                  <!----><span class="badge-caption copy">(13.3) Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
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
      <!--END S9 FLEX - COMPARE-->
      <!--BEGIN S10 FLEX ACCESSORIES-->
      <div class="section e49985d">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed bebb53d">
            <div class="column large-4 small-12 ab27272">
              <h2 class="copy s2d1062 channel-custom-font-custom-21-eyebrow-reduced">Accessories</h2>
              <p class="copy c41b14d channel-custom-font-custom-40-headline-reduced">Explore Mac accessories. </p>
              <p class="copy helvetica-neue ca33ec8 channel-custom-font-custom-17-body-reduced-flex">Explore keyboards, devices and other essentials. </p>
              <div class="row f917494">
<!--                <div class="column large-12 c58aa7e"><a href="#" aria-label="Shop Apple accesories" class="link-wrapper"><span class="b1e8cb9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced-flex"><span>Shop Apple accessories</span></span></a></div>-->
              </div>
            </div>
            <div class="column large-8 small-12 u4c208c">
              <figure aria-label="Top view of Air Pods, Studio display, Magic Keyboard, Magic Mouse and Magic Track Pad" role="img" class="image image-flex_accessories double-invert y8aa809"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S10 FLEX ACCESSORIES-->
      <!--BEGIN S11 FLEX APPLECARE+-->
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
                          <p class="copy helvetica-neue eDF67E3 channel-custom-font-custom-17-body-reduced-flex">Apple-certified service</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item x13CE33">
                      <div class="row e6D011D">
                        <div class="column large-0 v925DA3">
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care h011405"></figure>
                        </div>
                        <div class="column large-11 oF11AA6">
                          <p class="copy helvetica-neue h594938 channel-custom-font-custom-17-body-reduced-flex">Priority access to Apple experts</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item w018B0F">
                      <div class="row d96DCA4">
                        <div class="column large-0 w44500F">
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care r5B274C"></figure>
                        </div>
                        <div class="column large-11 lCA6884">
                          <p class="copy helvetica-neue a7D7BA1 channel-custom-font-custom-17-body-reduced-flex">Accidental damage coverage</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
<!--
              <div class="row q381EBA">
                <div class="column large-12 zAEA783"><a href="#" class="link-wrapper"><span class="y00CBF9 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced-flex"><span>Learn more about AppleCare+&nbsp;for Mac</span></span></a></div>
              </div>
-->
            </div>
            <div class="column large-6 small-12 x7b6000">
              <figure aria-label="MacBook Air and Apple Care plus." role="img" class="image image-flex_applecare double-invert t3f263f"></figure>
            </div>
          </div>
        </div>
      </div>
      <!--END S11 FLEX APPLECARE+-->
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
              <ul role="list" class="list mDD0219">
                <li role="listitem" class="list-item u86A4AE">
                  <div class="row nBAAB83">
                    <div class="column large-12 w076B92">
                      <p class="copy helvetica-neue rF00FC0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Weight:</span> Weight varies by configuration and manufacturing process.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item p32A7C3">
                  <div class="row e233D21">
                    <div class="column large-12 kF41620">
                      <p class="copy helvetica-neue bB18953 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">App Store:</span> Apps are available on the App Store. Title availability is subject to change.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item m590A4C">
                  <div class="row u8B52BF">
                    <div class="column large-12 k29A416">
                      <p class="copy helvetica-neue d79B737 channel-custom-font-custom-12-sosumi"><span class="copy helvetica-neue tBED2F5 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Performance:</span> Performance claims are based on comparison with the previous generation.</span></p>
					  <p class="copy helvetica-neue b5193E8 channel-custom-font-custom-12-sosumi">Testing conducted by Apple in May 2022 using <span style="white-space: nowrap;">pre-production</span> MacBook&nbsp;Air systems with Apple&nbsp;M2, <span style="white-space: nowrap;">8-core CPU</span>, 10-core GPU and 24GB of RAM, as well as production MacBook&nbsp;Air systems with Apple&nbsp;M1, 8-core CPU, 8-core GPU and 16GB of RAM, all configured with 2TB SSD, as well as production 1.6GHz dual-core Intel&nbsp;Core i5–based MacBook&nbsp;Air systems with Intel&nbsp;UHD Graphics 617, 16GB of RAM and 1TB SSD. Final Cut Pro 10.6.2 tested using a complex 2-minute project with 4K ProRes 422 media. Performance tests are conducted using specific computer systems and reflect the approximate performance of MacBook&nbsp;Air.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item zA4E40F">
                  <div class="row p073F6A">
                    <div class="column large-12 k77AA8F">
                      <p class="copy helvetica-neue tB8D724 channel-custom-font-custom-12-sosumi">
                      
                      <span style="font-weight: 500;" class="">Power and Battery:</span> Testing conducted by Apple in May 2022 using pre-production MacBook Air systems with Apple&nbsp;M2, 8-core CPU, 8-core GPU, 8GB of RAM and 256GB SSD.&nbsp;<br>The wireless web test measures battery life by wirelessly browsing 25 popular websites with display brightness set to 8 clicks from the bottom. The Apple&nbsp;TV app movie playback&nbsp;test&nbsp;measures battery life by playing back 1080p HD content with display brightness set to 8 clicks from the bottom. Battery life varies by use and configuration. See&nbsp;<a href="https://www.apple.com/in/batteries" class="footer-link __nah"><span style="color: #424245" class="__brief-edited" data-original-text="apple.com/in/batteries">apple.com/in/batteries</span></a> for more information.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item u39B84B">
                  <div class="row q0A3EF3">
                    <div class="column large-12 bF0BB83">
                      <p class="copy helvetica-neue aC90B8D channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Display:</span> Screen size is measured diagonally. The displays on MacBook&nbsp;Air (M2 chip) and MacBook&nbsp;Pro 41 cm and MacBook Pro 35 cm have rounded corners at the top. When measured as a standard rectangular shape, the screens are 34.46&nbsp;centimetres, 35.97&nbsp;centimetres and 41.05&nbsp;centimetres diagonally (actual viewable area is less).</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item t07666D">
                  <div class="row qB256B6">
                    <div class="column large-12 pA74251">
                      <p class="copy helvetica-neue qF8C7E0 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Storage:</span> 1GB = 1 billion bytes and 1TB = 1 trillion bytes; actual formatted capacity less.</p>
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