<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1">

    <meta version="0.2.5" content="build:version">
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
        color: rgb(0, 102, 204);
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
      .channel-html pre,
      .channel-html button {
        margin: 0;
        padding: 0;
      }

      .channel-html pre,
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
        background-color: rgb(255, 255, 255);
        color: rgb(29, 29, 31);
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
        color: rgb(29, 29, 31);
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
        color: rgb(0, 102, 204);
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
        color: rgb(0, 102, 204);
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

      .channel-html .large-order-0 {
        order: 0;
      }

      .channel-html .large-1 {
        flex-basis: 8.3333333333%;
        max-width: 8.3333333333%;
      }

      .channel-html .large-order-1 {
        order: 1;
      }

      .channel-html .large-2 {
        flex-basis: 16.6666666667%;
        max-width: 16.6666666667%;
      }

      .channel-html .large-order-2 {
        order: 2;
      }

      .channel-html .large-3 {
        flex-basis: 25%;
        max-width: 25%;
      }

      .channel-html .large-order-3 {
        order: 3;
      }

      .channel-html .large-4 {
        flex-basis: 33.3333333333%;
        max-width: 33.3333333333%;
      }

      .channel-html .large-order-4 {
        order: 4;
      }

      .channel-html .large-5 {
        flex-basis: 41.6666666667%;
        max-width: 41.6666666667%;
      }

      .channel-html .large-order-5 {
        order: 5;
      }

      .channel-html .large-6 {
        flex-basis: 50%;
        max-width: 50%;
      }

      .channel-html .large-order-6 {
        order: 6;
      }

      .channel-html .large-7 {
        flex-basis: 58.3333333333%;
        max-width: 58.3333333333%;
      }

      .channel-html .large-order-7 {
        order: 7;
      }

      .channel-html .large-8 {
        flex-basis: 66.6666666667%;
        max-width: 66.6666666667%;
      }

      .channel-html .large-order-8 {
        order: 8;
      }

      .channel-html .large-9 {
        flex-basis: 75%;
        max-width: 75%;
      }

      .channel-html .large-order-9 {
        order: 9;
      }

      .channel-html .large-10 {
        flex-basis: 83.3333333333%;
        max-width: 83.3333333333%;
      }

      .channel-html .large-order-10 {
        order: 10;
      }

      .channel-html .large-11 {
        flex-basis: 91.6666666667%;
        max-width: 91.6666666667%;
      }

      .channel-html .large-order-11 {
        order: 11;
      }

      .channel-html .large-12 {
        flex-basis: 100%;
        max-width: 100%;
      }

      .channel-html .large-order-12 {
        order: 12;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .medium-order-0 {
          order: 0;
        }

        .channel-html .medium-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .medium-order-1 {
          order: 1;
        }

        .channel-html .medium-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .medium-order-2 {
          order: 2;
        }

        .channel-html .medium-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .medium-order-3 {
          order: 3;
        }

        .channel-html .medium-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .medium-order-4 {
          order: 4;
        }

        .channel-html .medium-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .medium-order-5 {
          order: 5;
        }

        .channel-html .medium-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .medium-order-6 {
          order: 6;
        }

        .channel-html .medium-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .medium-order-7 {
          order: 7;
        }

        .channel-html .medium-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .medium-order-8 {
          order: 8;
        }

        .channel-html .medium-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .medium-order-9 {
          order: 9;
        }

        .channel-html .medium-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .medium-order-10 {
          order: 10;
        }

        .channel-html .medium-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .medium-order-11 {
          order: 11;
        }

        .channel-html .medium-12 {
          flex-basis: 100%;
          max-width: 100%;
        }

        .channel-html .medium-order-12 {
          order: 12;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .small-order-0 {
          order: 0;
        }

        .channel-html .small-1 {
          flex-basis: 8.3333333333%;
          max-width: 8.3333333333%;
        }

        .channel-html .small-order-1 {
          order: 1;
        }

        .channel-html .small-2 {
          flex-basis: 16.6666666667%;
          max-width: 16.6666666667%;
        }

        .channel-html .small-order-2 {
          order: 2;
        }

        .channel-html .small-3 {
          flex-basis: 25%;
          max-width: 25%;
        }

        .channel-html .small-order-3 {
          order: 3;
        }

        .channel-html .small-4 {
          flex-basis: 33.3333333333%;
          max-width: 33.3333333333%;
        }

        .channel-html .small-order-4 {
          order: 4;
        }

        .channel-html .small-5 {
          flex-basis: 41.6666666667%;
          max-width: 41.6666666667%;
        }

        .channel-html .small-order-5 {
          order: 5;
        }

        .channel-html .small-6 {
          flex-basis: 50%;
          max-width: 50%;
        }

        .channel-html .small-order-6 {
          order: 6;
        }

        .channel-html .small-7 {
          flex-basis: 58.3333333333%;
          max-width: 58.3333333333%;
        }

        .channel-html .small-order-7 {
          order: 7;
        }

        .channel-html .small-8 {
          flex-basis: 66.6666666667%;
          max-width: 66.6666666667%;
        }

        .channel-html .small-order-8 {
          order: 8;
        }

        .channel-html .small-9 {
          flex-basis: 75%;
          max-width: 75%;
        }

        .channel-html .small-order-9 {
          order: 9;
        }

        .channel-html .small-10 {
          flex-basis: 83.3333333333%;
          max-width: 83.3333333333%;
        }

        .channel-html .small-order-10 {
          order: 10;
        }

        .channel-html .small-11 {
          flex-basis: 91.6666666667%;
          max-width: 91.6666666667%;
        }

        .channel-html .small-order-11 {
          order: 11;
        }

        .channel-html .small-12 {
          flex-basis: 100%;
          max-width: 100%;
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

      .channel-html .icon-chevrondown::before,
      .channel-html .icon-chevrondown::after {
        content: "\f303";
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

      .channel-html [class*=typography-eyebrow] {
        display: block;
        margin-bottom: 0.4em;
      }

      .channel-html [class*=typography-eyebrow]+* {
        margin-top: 0;
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
        background: rgb(0, 113, 227);
        color: rgb(255, 255, 255);
        --sk-button-margin-horizontal: 14px;
        --sk-button-margin-vertical: 14px;
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
        background: rgb(0, 113, 227);
        color: rgb(255, 255, 255);
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
        --sk-button-margin-horizontal: 22px;
        --sk-button-margin-vertical: 22px;
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
        --sk-button-margin-horizontal: 18px;
        --sk-button-margin-vertical: 18px;
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
        --sk-button-margin-horizontal: 10px;
        --sk-button-margin-vertical: 10px;
      }

      .channel-html .badge {
        margin-right: 2em;
        box-sizing: border-box;
        display: inline-block;
        font-size: 20px;
        min-width: 5em;
        position: relative;
        z-index: 1;
        color: rgb(29, 29, 31);
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
        color: rgb(29, 29, 31);
      }

      .channel-html .badge .badge-value {
        font-size: 48px;
        line-height: 1;
        font-weight: 600;
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
        font-weight: 600;
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
        font-weight: 600;
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
        font-weight: 600;
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
        color: rgb(29, 29, 31);
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
        border-color: rgb(0, 113, 227);
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
        background: rgb(245, 245, 247) center center;
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
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
      }

      .channel-html .section-background .section-background-img {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
      }

      .channel-html .section-background .section-background-caption {
        position: absolute;
      }

      .channel-html .section-background .section-background-caption.bottom-right {
        right: 0;
        bottom: 0;
      }

      .channel-html .section-background .section-background-caption.top-right {
        top: 0;
        right: 0;
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

      .channel-html .button:focus {
        box-shadow: 0 0 0 4px var(--focus-color);
      }

      .channel-html .button-channel {
        background: transparent;
        border: 1px solid rgb(29, 29, 31);
        color: rgb(29, 29, 31);
      }

      .channel-html .button-channel:hover {
        background: transparent;
        border: 1px solid rgb(110, 110, 115);
        color: rgb(110, 110, 115);
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

      @media only screen and (max-width: 734px) {
        .channel-html .section .section-compare-table {
          overflow: initial;
        }
      }

      .channel-compare .compare-wrapper {
        position: relative;
        overflow: hidden;
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare-wrapper {
          overflow: initial;
        }
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
        width: 164px;
      }

      @media only screen and (max-width: 734px) {

        .channel-compare .compare.with-fullwidthrowheader .compare-columnheader,
        .channel-compare .compare.with-fullwidthrowheader .compare-column {
          width: 131px;
        }
      }

      .channel-compare .compare.with-fullwidthrowheader .compare-columnheader-span,
      .channel-compare .compare.with-fullwidthrowheader .compare-column-span {
        width: 100%;
      }

      .channel-compare .compare.with-fullwidthrowheader .mdash-container {
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash {
        font-size: 17px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash {
          font-size: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash {
          font-size: 12px;
        }
      }

      .channel-compare .compare .copy.helvetica-neue {
        font-weight: 500;
        line-height: 1.235;
      }

      .channel-compare--hidden {
        opacity: 0;
      }

      .compare-wrapper {
        width: 100%;
      }



      .channel-compare [compare-header-hide] {
        display: none;
      }

      .channel-compare [compare-header-show] {
        display: grid;
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

      .channel-compare .selector-element {
        position: relative;
        width: 100%;
        border: none;
        border-bottom: 1px solid #d6d6d6;
        border-radius: 0px;
        transition: border-color 200ms ease;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-element {
          border: none;
          border-bottom: 1px solid #d6d6d6;
          border-radius: 0px;
        }
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
        width: 40px;
        position: absolute;
        background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgb(255, 255, 255) 60%, rgb(255, 255, 255) 100%);
        top: 0;
        right: 0px;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .selector-element::before {
          width: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-element::before {
          height: 100%;
          width: 40px;
          right: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-element {
          margin-right: 0;
        }
      }

      .channel-compare .selector-dropdown {
        font-size: 14px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        width: 100%;
        margin: 0;
        color: rgb(0, 0, 0);
        background: transparent;
        border: 0;
        border-radius: 0;
        overflow: hidden;
        -webkit-appearance: none;
        appearance: none;
        cursor: pointer;
        outline: none;
        padding: 12px 0;
        padding-right: 15px;
      }

      .channel-compare .selector-dropdown:focus {
        border-radius: 0px;
        box-shadow: 0 0 0 4px var(--focus-color);
        width: 166px;
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-dropdown:focus {
          box-sizing: content-box;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-compare .selector-dropdown {
          width: 100%;
          padding-bottom: 11px;
          padding-left: 0px;
          padding-top: 11px;
        }

        .channel-compare .selector-dropdown:focus {
          width: 122px;
          border-radius: 0px;
          border: none;
        }
      }

      .channel-compare .selector-icon {
        display: block;
        position: absolute;
        top: 1px;
        right: 0;
        font-size: 19px;
        line-height: 1;
        color: rgb(0, 102, 204);
        padding-right: 0px;
        padding-top: 10px;
        pointer-events: none;
        right: 0;
      }

      .channel-compare .selector-icon:after {
        pointer-events: none;
      }

      .channel-compare .static-dropdown {
        font-size: 14px;
        line-height: 1.4285914286;
        font-weight: 600;
        letter-spacing: 0em;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", "Helvetica", "Arial", sans-serif, "SF Pro Icons";
        border-bottom: 1px solid #d6d6d6;
        text-align: center;
        width: 100%;
        margin: 0;
        padding-bottom: 7px;
      }



      .channel-compare .badge {
        min-width: 0;
        margin: 0 auto;
      }

      .channel-compare .badge .badge-content {
        margin: 0;
        padding: 0;
      }

      .channel-compare .compare.with-fullwidthrowheader .mdash-container {
        margin-top: 0px;
      }

      .channel-compare .compare.with-fullwidthrowheader .mdash-container .mdash {
        font-weight: 600;
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
        color: rgb(29, 29, 31);
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
      }

      .channel-compare .badge-content .badge-caption.copy {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        font-weight: 500;
        line-height: 1.4;
      }

      .channel-compare .badge-content .badge-caption.copy.mdash {
        font-weight: 600;
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
        color: rgb(134, 134, 139);
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
        padding: 0 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-compare .badge-content .badge-row {
          padding: 0 10px;
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
        border: 1px solid rgb(29, 29, 31);
        color: rgb(29, 29, 31);
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

      .channel-compare .button:focus {
        outline: none;
        box-shadow: 0 0 0 4px var(--focus-color);
      }

      .channel-compare .button:hover {
        background: transparent;
        border: 1px solid rgb(110, 110, 115);
        color: rgb(110, 110, 115);
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



      .mdash-container:first-child {
        height: 100%;
      }



      .channel-html .copy {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        word-break: break-word;
      }

      .channel-html .copy.helvetica-neue {
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        letter-spacing: normal;
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

      .channel-html .link-wrapper:focus {
        outline: 4px solid var(--focus-color);
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

      .image-compare_imac_21_5_silver {
        width: 126px;
        height: 106px;
        background-size: 126px 106px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_21_5_silver_large.png?1673036829674);
      }

      .image-hero_b_s {
        width: 342px;
        height: 94px;
        background-size: 342px 94px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_large.png?1673036829674);
      }

      .image-keyboard_icon_unlock {
        width: 21px;
        height: 25px;
        background-size: 21px 25px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_large.png?1673036829674);
      }

      .image-keyboard_icon_apple_tv {
        width: 25px;
        height: 25px;
        background-size: 25px 25px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_large.png?1673036829674);
      }

      .image-hero_a_l {
        width: 1243px;
        height: 362px;
        background-size: 1243px 362px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_large.png?1673036829675);
      }

      .image-icon_chip_m1_pro_m1_max {
        width: 80px;
        height: 41px;
        background-size: 80px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_pro_m1_max_large.png?1673036829675);
      }

      .image-compare_macbook_pro_m2_13_spacegray {
        width: 151px;
        height: 89px;
        background-size: 151px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_13_spacegray_large.png?1673036829675);
      }

      .image-flex_accessories_s {
        width: 563px;
        height: 190px;
        background-size: 563px 190px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_large.png?1673036829675);
      }

      .image-connectivity_icon_card {
        width: 19px;
        height: 24px;
        background-size: 19px 24px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_large.png?1673036829675);
      }

      .image-why_icon_icloud {
        width: 48px;
        height: 43px;
        background-size: 48px 43px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_large.png?1673036829676);
      }

      .image-performance_m2_blue_glow {
        width: 1068px;
        height: 652px;
        background-size: 1068px 652px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_large.png?1673036829676);
      }

      .image-compare_macbook_pro_16_spacegray {
        width: 173px;
        height: 100px;
        background-size: 173px 100px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_16_spacegray_large.png?1673036829677);
      }

      .image-icon_chip_m1 {
        width: 38px;
        height: 41px;
        background-size: 38px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_large.png?1673036829677);
      }

      .image-keyboard_icon_passkey {
        width: 28px;
        height: 25px;
        background-size: 28px 25px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_large.png?1673036829677);
      }

      .image-performance_icon_battery {
        width: 31px;
        height: 17px;
        background-size: 31px 17px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_large.png?1673036829677);
      }

      .image-compare_macbook_air_2017_silver {
        width: 153px;
        height: 89px;
        background-size: 153px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_2017_silver_large.png?1673036829677);
      }

      .image-keyboard_m {
        width: 517px;
        height: 305px;
        background-size: 517px 305px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_large.png?1673036829678);
      }

      .image-camera_icon_spatial {
        width: 29px;
        height: 31px;
        background-size: 29px 31px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_large.png?1673036829678);
      }

      .image-icon_chip_m2_m2_pro_final {
        width: 80px;
        height: 41px;
        background-size: 80px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_m2_pro_final_large.png?1673036829678);
      }

      .image-hero_a_s {
        width: 342px;
        height: 115px;
        background-size: 342px 115px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_large.png?1673036829678);
      }

      .image-why_icon_connectivity {
        width: 54px;
        height: 32px;
        background-size: 54px 32px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_large.png?1673036829678);
      }

      .image-connectivity_icon_magsafe {
        width: 17px;
        height: 26px;
        background-size: 17px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_large.png?1673036829678);
      }

      .image-flex_checkmark_apple_care {
        width: 14px;
        height: 14px;
        background-size: 14px 14px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_large.png?1673036829679);
      }

      .image-icon_keyboard_touch_id {
        width: 38px;
        height: 38px;
        background-size: 38px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_keyboard_touch_id_large.png?1673036829679);
      }

      .image-display_s {
        width: 266px;
        height: 164px;
        background-size: 266px 164px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_large.png?1673036829679);
      }

      .image-display_icon_brightness {
        width: 40px;
        height: 40px;
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_large.png?1673036829679);
      }

      .image-flex_accessories_lm {
        width: 628px;
        height: 288px;
        background-size: 628px 288px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_large.png?1673036829679);
      }

      .image-camera_l {
        width: 562px;
        height: 294px;
        background-size: 562px 294px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_large.png?1673036829679);
      }

      .image-camera_icon_mic {
        width: 20px;
        height: 30px;
        background-size: 20px 30px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_large.png?1673036829680);
      }

      .image-icon_touch_id_final {
        width: 42px;
        height: 41px;
        background-size: 42px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_id_final_large.png?1673036829680);
      }

      .image-icon_magic_keyboard_Lock_key {
        width: 38px;
        height: 38px;
        background-size: 38px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_Lock_key_large.png?1673036829680);
      }

      .image-compare_macbook_air_m1_spacegray {
        width: 153px;
        height: 89px;
        background-size: 153px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m1_spacegray_large.png?1673036829680);
      }

      .image-connectivity_icon_headphone {
        width: 25px;
        height: 26px;
        background-size: 25px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_large.png?1673036829680);
      }

      .image-display_lm {
        width: 470px;
        height: 288px;
        background-size: 470px 288px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_large.png?1673036829681);
      }

      .image-compare_imac_27_silver {
        width: 153px;
        height: 123px;
        background-size: 153px 123px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_27_silver_large.png?1673036829681);
      }

      .image-compare_macbook_air_m2_13_midnight {
        width: 146px;
        height: 89px;
        background-size: 146px 89px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m2_13_midnight_large.png?1673036829681);
      }

      .image-why_icon_performance {
        width: 80px;
        height: 38px;
        background-size: 80px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_large.png?1673036829681);
      }

      .image-display_icon_peak {
        width: 40px;
        height: 40px;
        background-size: 40px 40px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_large.png?1673036829681);
      }

      .image-icon_touch_bar_id_final {
        width: 38px;
        height: 41px;
        background-size: 38px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_bar_id_final_large.png?1673036829681);
      }

      .image-hero_a_m {
        width: 727px;
        height: 231px;
        background-size: 727px 231px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_large.png?1673036829681);
      }

      .image-performance_m2_pro {
        width: 163px;
        height: 163px;
        background-size: 163px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_large.png?1673036829681);
      }

      .image-compare_mac_mini_m2_4port_silver_final {
        width: 173px;
        height: 126px;
        background-size: 173px 126px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m2_4port_silver_final_large.png?1673036829682);
      }

      .image-keyboard_l {
        width: 1558px;
        height: 485px;
        background-size: 1558px 485px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_large.png?1673036829682);
      }

      .image-camera_s {
        width: 322px;
        height: 181px;
        background-size: 322px 181px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_large.png?1673036829682);
      }

      .image-compare_mac_mini_m1_2020_silver {
        width: 72px;
        height: 15px;
        background-size: 72px 15px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m1_2020_silver_large.png?1673036829682);
      }

      .image-icon_chip_m1_max_m1_ultra {
        width: 80px;
        height: 38px;
        background-size: 80px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_max_m1_ultra_large.png?1673036829682);
      }

      .image-keyboard_icon_touch_id {
        width: 40px;
        height: 39px;
        background-size: 40px 39px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_large.png?1673036829682);
      }

      .image-icon_touch_bar_id {
        width: 38px;
        height: 38px;
        background-size: 38px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_bar_id_large.png?1673036829683);
      }

      .image-compare_mac_studio_silver_final {
        width: 173px;
        height: 126px;
        background-size: 173px 126px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_studio_silver_final_large.png?1673036829683);
      }

      .image-display_icon_contrast {
        width: 29px;
        height: 29px;
        background-size: 29px 29px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_large.png?1673036829683);
      }

      .image-compare_macbook_pro_13_m1_spacegray {
        width: 149px;
        height: 87px;
        background-size: 149px 87px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_13_m1_spacegray_large.png?1673036829683);
      }

      .image-compare_macbook_pro_m1_16_spacegray {
        width: 166px;
        height: 102px;
        background-size: 166px 102px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_16_spacegray_large.png?1673036829684);
      }

      .image-compare_macbook_pro_m2_16_spacegray_final {
        width: 173px;
        height: 126px;
        background-size: 173px 126px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_16_spacegray_final_large.png?1673036829684);
      }

      .image-hero_b_l {
        width: 1243px;
        height: 395px;
        background-size: 1243px 395px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_large.png?1673036829684);
      }

      .image-camera_icon_facetime {
        width: 31px;
        height: 21px;
        background-size: 31px 21px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_large.png?1673036829684);
      }

      .image-compare_mac_mini_2018_spacegray {
        width: 72px;
        height: 15px;
        background-size: 72px 15px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_2018_spacegray_large.png?1673036829684);
      }

      .image-compare_imac_pro_spacegray {
        width: 153px;
        height: 123px;
        background-size: 153px 123px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_pro_spacegray_large.png?1673036829684);
      }

      .image-compare_macbook_pro_m2_14_spacegray_final {
        width: 173px;
        height: 126px;
        background-size: 173px 126px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_14_spacegray_final_large.png?1673036829684);
      }

      .image-connectivity {
        width: 2223px;
        height: 82px;
        background-size: 2223px 82px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_large.png?1673036829685);
      }

      .image-hero_logo {
        width: 289px;
        height: 38px;
        background-size: 289px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_large.png?1673036829685);
      }

      .image-hero_b_m {
        width: 727px;
        height: 212px;
        background-size: 727px 212px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_large.png?1673036829685);
      }

      .image-icon_chip_intel {
        width: 38px;
        height: 38px;
        background-size: 38px 38px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_intel_large.png?1673036829685);
      }

      .image-keyboard_icon_apple_pay {
        width: 24px;
        height: 20px;
        background-size: 24px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_large.png?1673036829685);
      }

      .image-flex_applecare {
        width: 411px;
        height: 247px;
        background-size: 411px 247px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_large.png?1673036829685);
      }

      .image-camera_m {
        width: 371px;
        height: 195px;
        background-size: 371px 195px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_large.png?1673036829686);
      }

      .image-performance_m2_max {
        width: 163px;
        height: 163px;
        background-size: 163px 163px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_large.png?1673036829686);
      }

      .image-keyboard_s {
        width: 540px;
        height: 184px;
        background-size: 540px 184px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_large.png?1673036829687);
      }

      .image-icon_chip_m2_pro_m2_max_final {
        width: 80px;
        height: 41px;
        background-size: 80px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_pro_m2_max_final_large.png?1673036829687);
      }

      .image-icon_magic_keyboard_keypad {
        width: 83px;
        height: 24px;
        background-size: 83px 24px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_keypad_large.png?1673036829688);
      }

      .image-icon_magic_keyboard {
        width: 47px;
        height: 24px;
        background-size: 47px 24px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_large.png?1673036829688);
      }

      .image-connectivity_icon_hdmi {
        width: 26px;
        height: 12px;
        background-size: 26px 12px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_large.png?1673036829688);
      }

      .image-compare_imac_24_m1_2020_TwoPort_blue {
        width: 129px;
        height: 109px;
        background-size: 129px 109px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_24_m1_2020_TwoPort_blue_large.png?1673036829689);
      }

      .image-performance_m2_purple_glow {
        width: 1068px;
        height: 652px;
        background-size: 1068px 652px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_large.png?1673036829689);
      }

      .image-compare_macbook_pro_m1_14_spacegray {
        width: 151px;
        height: 92px;
        background-size: 151px 92px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_14_spacegray_large.png?1673036829689);
      }

      .image-connectivity_icon_thunderbolt {
        width: 12px;
        height: 26px;
        background-size: 12px 26px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_large.png?1673036829689);
      }

      .image-compare_mac_pro_silver {
        width: 54px;
        height: 127px;
        background-size: 54px 127px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_pro_silver_large.png?1673036829690);
      }

      .image-icon_chip_m2 {
        width: 38px;
        height: 41px;
        background-size: 38px 41px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_large.png?1673036829690);
      }

      .image-connectivity_icon_wifi {
        width: 27px;
        height: 20px;
        background-size: 27px 20px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_large.png?1673036829690);
      }

      .image-performance_icon_swirl {
        width: 31px;
        height: 28px;
        background-size: 31px 28px;
        background-repeat: no-repeat;
        background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_large.png?1673036829690);
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m1_pro_m1_max {
          width: 80px;
          height: 41px;
          background-size: 80px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_pro_m1_max_large_2x.png?1673036829673);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_m2_pro {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_large_2x.png?1673036829674);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_m {
          width: 371px;
          height: 195px;
          background-size: 371px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_large_2x.png?1673036829674);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_icon_mic {
          width: 20px;
          height: 30px;
          background-size: 20px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_large_2x.png?1673036829674);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_logo {
          width: 289px;
          height: 38px;
          background-size: 289px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_large_2x.png?1673036829674);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_13_spacegray_large_2x.png?1673036829675);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_large_2x.png?1673036829675);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_imac_21_5_silver {
          width: 126px;
          height: 106px;
          background-size: 126px 106px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_21_5_silver_large_2x.png?1673036829675);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity {
          width: 2223px;
          height: 82px;
          background-size: 2223px 82px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_large_2x.png?1673036829675);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m2_13_midnight_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_accessories_s {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 26px;
          background-size: 12px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_m2_blue_glow {
          width: 1068px;
          height: 652px;
          background-size: 1068px 652px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_connectivity {
          width: 54px;
          height: 32px;
          background-size: 54px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_13_m1_spacegray {
          width: 149px;
          height: 87px;
          background-size: 149px 87px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_13_m1_spacegray_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_magic_keyboard_keypad {
          width: 83px;
          height: 24px;
          background-size: 83px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_keypad_large_2x.png?1673036829676);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_icon_swirl {
          width: 31px;
          height: 28px;
          background-size: 31px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_large_2x.png?1673036829677);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_touch_id_final {
          width: 42px;
          height: 41px;
          background-size: 42px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_id_final_large_2x.png?1673036829677);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_air_m1_spacegray {
          width: 153px;
          height: 89px;
          background-size: 153px 89px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m1_spacegray_large_2x.png?1673036829677);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_headphone {
          width: 25px;
          height: 26px;
          background-size: 25px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_large_2x.png?1673036829677);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_peak {
          width: 40px;
          height: 40px;
          background-size: 40px 40px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_large_2x.png?1673036829678);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_applecare {
          width: 411px;
          height: 247px;
          background-size: 411px 247px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_large_2x.png?1673036829678);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-flex_accessories_lm {
          width: 628px;
          height: 288px;
          background-size: 628px 288px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_large_2x.png?1673036829678);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_touch_bar_id_final {
          width: 38px;
          height: 41px;
          background-size: 38px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_bar_id_final_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_s {
          width: 540px;
          height: 184px;
          background-size: 540px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_imac_24_m1_2020_TwoPort_blue {
          width: 129px;
          height: 109px;
          background-size: 129px 109px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_24_m1_2020_TwoPort_blue_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_passkey {
          width: 28px;
          height: 25px;
          background-size: 28px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_unlock {
          width: 21px;
          height: 25px;
          background-size: 21px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_large_2x.png?1673036829679);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 166px;
          height: 102px;
          background-size: 166px 102px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_16_spacegray_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_magsafe {
          width: 17px;
          height: 26px;
          background-size: 17px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_a_s {
          width: 342px;
          height: 115px;
          background-size: 342px 115px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_imac_pro_spacegray {
          width: 153px;
          height: 123px;
          background-size: 153px 123px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_pro_spacegray_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m2_m2_pro_final {
          width: 80px;
          height: 41px;
          background-size: 80px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_m2_pro_final_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_magic_keyboard_Lock_key {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_Lock_key_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m2_16_spacegray_final {
          width: 173px;
          height: 126px;
          background-size: 173px 126px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_16_spacegray_final_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m2 {
          width: 38px;
          height: 41px;
          background-size: 38px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_large_2x.png?1673036829680);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_icon_spatial {
          width: 29px;
          height: 31px;
          background-size: 29px 31px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_large_2x.png?1673036829681);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_large_2x.png?1673036829682);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_a_l {
          width: 1243px;
          height: 362px;
          background-size: 1243px 362px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_large_2x.png?1673036829682);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_touch_id {
          width: 40px;
          height: 39px;
          background-size: 40px 39px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_large_2x.png?1673036829682);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 72px;
          height: 15px;
          background-size: 72px 15px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m1_2020_silver_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_imac_27_silver {
          width: 153px;
          height: 123px;
          background-size: 153px 123px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_27_silver_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_intel {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_intel_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m1_14_spacegray {
          width: 151px;
          height: 92px;
          background-size: 151px 92px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_14_spacegray_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_touch_bar_id {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_touch_bar_id_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_m2_purple_glow {
          width: 1068px;
          height: 652px;
          background-size: 1068px 652px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_b_s {
          width: 342px;
          height: 94px;
          background-size: 342px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_large_2x.png?1673036829683);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_air_2017_silver {
          width: 153px;
          height: 89px;
          background-size: 153px 89px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_2017_silver_large_2x.png?1673036829684);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_lm {
          width: 470px;
          height: 288px;
          background-size: 470px 288px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_large_2x.png?1673036829684);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_b_l {
          width: 1243px;
          height: 395px;
          background-size: 1243px 395px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_large_2x.png?1673036829684);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_card {
          width: 19px;
          height: 24px;
          background-size: 19px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_large_2x.png?1673036829684);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_a_m {
          width: 727px;
          height: 231px;
          background-size: 727px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_large_2x.png?1673036829685);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_mini_m2_4port_silver_final {
          width: 173px;
          height: 126px;
          background-size: 173px 126px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m2_4port_silver_final_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_keyboard_touch_id {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_keyboard_touch_id_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m1 {
          width: 38px;
          height: 41px;
          background-size: 38px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_hdmi {
          width: 26px;
          height: 12px;
          background-size: 26px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-performance_m2_max {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_large_2x.png?1673036829685);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_s {
          width: 322px;
          height: 181px;
          background-size: 322px 181px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_large_2x.png?1673036829685);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_large_2x.png?1673036829686);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-connectivity_icon_wifi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_large_2x.png?1673036829686);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_icloud {
          width: 48px;
          height: 43px;
          background-size: 48px 43px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_large_2x.png?1673036829686);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_l {
          width: 1558px;
          height: 485px;
          background-size: 1558px 485px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-hero_b_m {
          width: 727px;
          height: 212px;
          background-size: 727px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_icon_contrast {
          width: 29px;
          height: 29px;
          background-size: 29px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m2_pro_m2_max_final {
          width: 80px;
          height: 41px;
          background-size: 80px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m2_pro_m2_max_final_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_chip_m1_max_m1_ultra {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_chip_m1_max_m1_ultra_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_icon_apple_pay {
          width: 24px;
          height: 20px;
          background-size: 24px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-display_s {
          width: 266px;
          height: 164px;
          background-size: 266px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_large_2x.png?1673036829687);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-keyboard_m {
          width: 517px;
          height: 305px;
          background-size: 517px 305px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_large_2x.png?1673036829688);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_mini_2018_spacegray {
          width: 72px;
          height: 15px;
          background-size: 72px 15px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_2018_spacegray_large_2x.png?1673036829688);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_studio_silver_final {
          width: 173px;
          height: 126px;
          background-size: 173px 126px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_studio_silver_final_large_2x.png?1673036829688);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_m2_14_spacegray_final {
          width: 173px;
          height: 126px;
          background-size: 173px 126px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_14_spacegray_final_large_2x.png?1673036829689);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-why_icon_performance {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_large_2x.png?1673036829689);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_macbook_pro_16_spacegray {
          width: 173px;
          height: 100px;
          background-size: 173px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_16_spacegray_large_2x.png?1673036829689);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-icon_magic_keyboard {
          width: 47px;
          height: 24px;
          background-size: 47px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/icon_magic_keyboard_large_2x.png?1673036829689);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-compare_mac_pro_silver {
          width: 54px;
          height: 127px;
          background-size: 54px 127px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_pro_silver_large_2x.png?1673036829690);
        }
      }

      @media (-webkit-min-device-pixel-ratio:1.5),
      (min-resolution:144dpi),
      only screen and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (min-resolution:1.5dppx) {
        .image-camera_l {
          width: 562px;
          height: 294px;
          background-size: 562px 294px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_large_2x.png?1673036829690);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_b_l {
          width: 1243px;
          height: 395px;
          background-size: 1243px 395px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_medium.png?1673036829674);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity {
          width: 1638px;
          height: 66px;
          background-size: 1638px 66px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_hdmi {
          width: 26px;
          height: 12px;
          background-size: 26px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_pay {
          width: 24px;
          height: 20px;
          background-size: 24px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_icloud {
          width: 48px;
          height: 43px;
          background-size: 48px 43px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_brightness {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_a_s {
          width: 342px;
          height: 115px;
          background-size: 342px 115px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_applecare {
          width: 280px;
          height: 169px;
          background-size: 280px 169px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_medium.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_unlock {
          width: 21px;
          height: 25px;
          background-size: 21px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_medium.png?1673036829676);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_icon_swirl {
          width: 32px;
          height: 29px;
          background-size: 32px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_medium.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_m2_pro {
          width: 164px;
          height: 164px;
          background-size: 164px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_medium.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_m {
          width: 517px;
          height: 305px;
          background-size: 517px 305px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_medium.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_card {
          width: 20px;
          height: 25px;
          background-size: 20px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_medium.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_b_m {
          width: 727px;
          height: 212px;
          background-size: 727px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_medium.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_lm {
          width: 309px;
          height: 189px;
          background-size: 309px 189px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_medium.png?1673036829678);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_medium.png?1673036829678);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_s {
          width: 540px;
          height: 184px;
          background-size: 540px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_medium.png?1673036829678);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_b_s {
          width: 342px;
          height: 94px;
          background-size: 342px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_medium.png?1673036829678);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_logo {
          width: 248px;
          height: 33px;
          background-size: 248px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_medium.png?1673036829679);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_passkey {
          width: 28px;
          height: 25px;
          background-size: 28px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_medium.png?1673036829679);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_peak {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_medium.png?1673036829679);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_l {
          width: 562px;
          height: 294px;
          background-size: 562px 294px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_medium.png?1673036829679);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_facetime {
          width: 30px;
          height: 20px;
          background-size: 30px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_medium.png?1673036829680);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_l {
          width: 1558px;
          height: 485px;
          background-size: 1558px 485px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_medium.png?1673036829681);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_wifi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_medium.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_s {
          width: 322px;
          height: 181px;
          background-size: 322px 181px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_medium.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_performance {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_medium.png?1673036829683);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_a_m {
          width: 727px;
          height: 231px;
          background-size: 727px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_medium.png?1673036829683);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_magsafe {
          width: 17px;
          height: 26px;
          background-size: 17px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_medium.png?1673036829684);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_headphone {
          width: 25px;
          height: 26px;
          background-size: 25px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_medium.png?1673036829684);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_mic {
          width: 20px;
          height: 29px;
          background-size: 20px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_medium.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-connectivity_icon_thunderbolt {
          width: 12px;
          height: 25px;
          background-size: 12px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_medium.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_apple_tv {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_medium.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_m2_purple_glow {
          width: 1068px;
          height: 635px;
          background-size: 1068px 635px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_medium.png?1673036829686);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories_s {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_medium.png?1673036829686);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_m2_max {
          width: 164px;
          height: 164px;
          background-size: 164px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_medium.png?1673036829687);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_icon_spatial {
          width: 28px;
          height: 30px;
          background-size: 28px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_medium.png?1673036829687);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_s {
          width: 266px;
          height: 164px;
          background-size: 266px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_medium.png?1673036829687);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-display_icon_contrast {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_medium.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-camera_m {
          width: 371px;
          height: 195px;
          background-size: 371px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_medium.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-flex_accessories_lm {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_medium.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-why_icon_connectivity {
          width: 54px;
          height: 32px;
          background-size: 54px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_medium.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-keyboard_icon_touch_id {
          width: 37px;
          height: 36px;
          background-size: 37px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_medium.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-hero_a_l {
          width: 1243px;
          height: 362px;
          background-size: 1243px 362px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_medium.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) {
        .image-performance_m2_blue_glow {
          width: 1068px;
          height: 635px;
          background-size: 1068px 635px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_medium.png?1673036829690);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_l {
          width: 1558px;
          height: 485px;
          background-size: 1558px 485px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_medium_2x.png?1673036829673);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_icon_spatial {
          width: 28px;
          height: 30px;
          background-size: 28px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_medium_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_m {
          width: 517px;
          height: 305px;
          background-size: 517px 305px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_medium_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_connectivity {
          width: 54px;
          height: 32px;
          background-size: 54px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_medium_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_m2_purple_glow {
          width: 1068px;
          height: 635px;
          background-size: 1068px 635px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_medium_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_icloud {
          width: 48px;
          height: 43px;
          background-size: 48px 43px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_medium_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_s {
          width: 540px;
          height: 184px;
          background-size: 540px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_medium_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_accessories_s {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_medium_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 280px;
          height: 169px;
          background-size: 280px 169px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_medium_2x.png?1673036829677);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_wifi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_s {
          width: 266px;
          height: 164px;
          background-size: 266px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 37px;
          height: 36px;
          background-size: 37px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_m2_max {
          width: 164px;
          height: 164px;
          background-size: 164px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_medium_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_b_m {
          width: 727px;
          height: 212px;
          background-size: 727px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_medium_2x.png?1673036829678);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 248px;
          height: 33px;
          background-size: 248px 33px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_medium_2x.png?1673036829679);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_medium_2x.png?1673036829679);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_s {
          width: 322px;
          height: 181px;
          background-size: 322px 181px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_medium_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_a_m {
          width: 727px;
          height: 231px;
          background-size: 727px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_medium_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 1638px;
          height: 66px;
          background-size: 1638px 66px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_medium_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_icon_facetime {
          width: 30px;
          height: 20px;
          background-size: 30px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_medium_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_unlock {
          width: 21px;
          height: 25px;
          background-size: 21px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_medium_2x.png?1673036829681);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_medium_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_medium_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_a_s {
          width: 342px;
          height: 115px;
          background-size: 342px 115px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_hdmi {
          width: 26px;
          height: 12px;
          background-size: 26px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_passkey {
          width: 28px;
          height: 25px;
          background-size: 28px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_card {
          width: 20px;
          height: 25px;
          background-size: 20px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_contrast {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-why_icon_performance {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_medium_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-flex_accessories_lm {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_medium_2x.png?1673036829684);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_b_s {
          width: 342px;
          height: 94px;
          background-size: 342px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_medium_2x.png?1673036829684);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_lm {
          width: 309px;
          height: 189px;
          background-size: 309px 189px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_medium_2x.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-display_icon_peak {
          width: 38px;
          height: 38px;
          background-size: 38px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_medium_2x.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_magsafe {
          width: 17px;
          height: 26px;
          background-size: 17px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_medium_2x.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_a_l {
          width: 1243px;
          height: 362px;
          background-size: 1243px 362px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_medium_2x.png?1673036829685);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_m2_pro {
          width: 164px;
          height: 164px;
          background-size: 164px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_medium_2x.png?1673036829687);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_medium_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-hero_b_l {
          width: 1243px;
          height: 395px;
          background-size: 1243px 395px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_medium_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_icon_swirl {
          width: 32px;
          height: 29px;
          background-size: 32px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_medium_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-performance_m2_blue_glow {
          width: 1068px;
          height: 635px;
          background-size: 1068px 635px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_medium_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_m {
          width: 371px;
          height: 195px;
          background-size: 371px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_medium_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-connectivity_icon_headphone {
          width: 25px;
          height: 26px;
          background-size: 25px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_medium_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 24px;
          height: 20px;
          background-size: 24px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_medium_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:1068px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:1068px) and (min-resolution:1.5dppx),
      only screen and (max-width:1068px) and (min-resolution:144dpi) {
        .image-camera_l {
          width: 562px;
          height: 294px;
          background-size: 562px 294px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_medium_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_studio_silver_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_studio_silver_final_small.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_pro_silver {
          width: 42px;
          height: 100px;
          background-size: 42px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_pro_silver_small.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_applecare {
          width: 275px;
          height: 166px;
          background-size: 275px 166px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_small.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_imac_24_m1_2020_TwoPort_blue {
          width: 104px;
          height: 88px;
          background-size: 104px 88px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_24_m1_2020_TwoPort_blue_small.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_2017_silver {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_2017_silver_small.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m1_spacegray {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m1_spacegray_small.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_b_l {
          width: 1243px;
          height: 395px;
          background-size: 1243px 395px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_small.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_a_l {
          width: 1243px;
          height: 362px;
          background-size: 1243px 362px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_small.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_card {
          width: 19px;
          height: 24px;
          background-size: 19px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_small.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_air_m2_13_midnight {
          width: 118px;
          height: 72px;
          background-size: 118px 72px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m2_13_midnight_small.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_s {
          width: 266px;
          height: 164px;
          background-size: 266px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_small.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_imac_27_silver {
          width: 123px;
          height: 99px;
          background-size: 123px 99px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_27_silver_small.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_contrast {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_small.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_magsafe {
          width: 17px;
          height: 26px;
          background-size: 17px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_thunderbolt {
          width: 13px;
          height: 26px;
          background-size: 13px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_spatial {
          width: 30px;
          height: 32px;
          background-size: 30px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_l {
          width: 562px;
          height: 294px;
          background-size: 562px 294px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity {
          width: 803px;
          height: 36px;
          background-size: 803px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_passkey {
          width: 28px;
          height: 25px;
          background-size: 28px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m2_14_spacegray_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_14_spacegray_final_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_a_m {
          width: 727px;
          height: 231px;
          background-size: 727px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_small.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_peak {
          width: 36px;
          height: 36px;
          background-size: 36px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_small.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_connectivity {
          width: 54px;
          height: 32px;
          background-size: 54px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_small.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_checkmark_apple_care {
          width: 14px;
          height: 14px;
          background-size: 14px 14px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_small.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_m {
          width: 517px;
          height: 305px;
          background-size: 517px 305px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_small.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m2_13_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_13_spacegray_small.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_m2_purple_glow {
          width: 734px;
          height: 633px;
          background-size: 734px 633px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_small.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_battery {
          width: 31px;
          height: 17px;
          background-size: 31px 17px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_small.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_wifi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_small.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_hdmi {
          width: 26px;
          height: 12px;
          background-size: 26px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_small.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_performance {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_small.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_s {
          width: 540px;
          height: 184px;
          background-size: 540px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_small.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_l {
          width: 1558px;
          height: 485px;
          background-size: 1558px 485px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_small.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) {
        .image-why_icon_icloud {
          width: 48px;
          height: 43px;
          background-size: 48px 43px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_small.png?1673036829682);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_m2_pro {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_tv {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_16_spacegray {
          width: 133px;
          height: 82px;
          background-size: 133px 82px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_16_spacegray_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_lm {
          width: 309px;
          height: 189px;
          background-size: 309px 189px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_m2_blue_glow {
          width: 734px;
          height: 633px;
          background-size: 734px 633px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-display_icon_brightness {
          width: 37px;
          height: 37px;
          background-size: 37px 37px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_small.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories_s {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_small.png?1673036829684);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_13_m1_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_13_m1_spacegray_small.png?1673036829685);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_imac_21_5_silver {
          width: 100px;
          height: 85px;
          background-size: 100px 85px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_21_5_silver_small.png?1673036829685);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_icon_swirl {
          width: 30px;
          height: 28px;
          background-size: 30px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_touch_id {
          width: 42px;
          height: 41px;
          background-size: 42px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_s {
          width: 322px;
          height: 181px;
          background-size: 322px 181px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m1_2020_silver_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_b_s {
          width: 342px;
          height: 94px;
          background-size: 342px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-performance_m2_max {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_small.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m1_14_spacegray {
          width: 121px;
          height: 74px;
          background-size: 121px 74px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_14_spacegray_small.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_apple_pay {
          width: 28px;
          height: 24px;
          background-size: 28px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_small.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_mic {
          width: 20px;
          height: 30px;
          background-size: 20px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_small.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_a_s {
          width: 342px;
          height: 115px;
          background-size: 342px 115px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_small.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) {
        .image-flex_accessories_lm {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_small.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_m2_16_spacegray_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_16_spacegray_final_small.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_logo {
          width: 150px;
          height: 21px;
          background-size: 150px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_small.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 27px;
          background-size: 26px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_small.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) {
        .image-hero_b_m {
          width: 727px;
          height: 212px;
          background-size: 727px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_small.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_icon_facetime {
          width: 31px;
          height: 21px;
          background-size: 31px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_small.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_mini_m2_4port_silver_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m2_4port_silver_final_small.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) {
        .image-keyboard_icon_unlock {
          width: 24px;
          height: 29px;
          background-size: 24px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_small.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_macbook_pro_16_spacegray {
          width: 139px;
          height: 81px;
          background-size: 139px 81px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_16_spacegray_small.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) {
        .image-camera_m {
          width: 371px;
          height: 195px;
          background-size: 371px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_small.png?1673036829690);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_imac_pro_spacegray {
          width: 123px;
          height: 99px;
          background-size: 123px 99px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_pro_spacegray_small.png?1673036829690);
        }
      }

      @media only screen and (max-width:734px) {
        .image-compare_mac_mini_2018_spacegray {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_2018_spacegray_small.png?1673036829690);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_mini_2018_spacegray {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_2018_spacegray_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_studio_silver_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_studio_silver_final_small_2x.png?1673036829674);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_16_spacegray_small_2x.png?1673036829674);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m2_13_midnight_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_m {
          width: 517px;
          height: 305px;
          background-size: 517px 305px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_16_spacegray {
          width: 139px;
          height: 81px;
          background-size: 139px 81px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_16_spacegray_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_magsafe {
          width: 17px;
          height: 26px;
          background-size: 17px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_magsafe_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_passkey {
          width: 28px;
          height: 25px;
          background-size: 28px 25px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_passkey_small_2x.png?1673036829674);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_accessories_s {
          width: 563px;
          height: 190px;
          background-size: 563px 190px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_small_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_tv {
          width: 26px;
          height: 26px;
          background-size: 26px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_tv_small_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_hdmi {
          width: 26px;
          height: 12px;
          background-size: 26px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_hdmi_small_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_s {
          width: 266px;
          height: 164px;
          background-size: 266px 164px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_s_small_2x.png?1673036829675);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_m2_pro {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_small_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_brightness {
          width: 37px;
          height: 37px;
          background-size: 37px 37px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_brightness_small_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_imac_27_silver {
          width: 123px;
          height: 99px;
          background-size: 123px 99px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_27_silver_small_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_m2_14_spacegray_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_14_spacegray_final_small_2x.png?1673036829676);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_headphone {
          width: 26px;
          height: 27px;
          background-size: 26px 27px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_headphone_small_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_icon_spatial {
          width: 30px;
          height: 32px;
          background-size: 30px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_spatial_small_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_mini_m1_2020_silver {
          width: 58px;
          height: 12px;
          background-size: 58px 12px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m1_2020_silver_small_2x.png?1673036829677);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m1_14_spacegray_small_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_contrast {
          width: 32px;
          height: 32px;
          background-size: 32px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_contrast_small_2x.png?1673036829677);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_13_m1_spacegray {
          width: 121px;
          height: 71px;
          background-size: 121px 71px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_13_m1_spacegray_small_2x.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_logo {
          width: 150px;
          height: 21px;
          background-size: 150px 21px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_small_2x.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_b_l {
          width: 1243px;
          height: 395px;
          background-size: 1243px 395px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_l_small_2x.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_connectivity {
          width: 54px;
          height: 32px;
          background-size: 54px 32px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_connectivity_small_2x.png?1673036829678);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_imac_pro_spacegray {
          width: 123px;
          height: 99px;
          background-size: 123px 99px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_pro_spacegray_small_2x.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_card {
          width: 19px;
          height: 24px;
          background-size: 19px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_card_small_2x.png?1673036829679);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_s {
          width: 540px;
          height: 184px;
          background-size: 540px 184px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_small_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_m2_blue_glow {
          width: 734px;
          height: 633px;
          background-size: 734px 633px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_blue_glow_small_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_icon_mic {
          width: 20px;
          height: 30px;
          background-size: 20px 30px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_mic_small_2x.png?1673036829680);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_thunderbolt {
          width: 13px;
          height: 26px;
          background-size: 13px 26px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_thunderbolt_small_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_icloud {
          width: 48px;
          height: 43px;
          background-size: 48px 43px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_icloud_small_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_a_m {
          width: 727px;
          height: 231px;
          background-size: 727px 231px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_small_2x.png?1673036829681);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_icon_facetime_small_2x.png?1673036829681);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_battery_small_2x.png?1673036829681);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_unlock {
          width: 24px;
          height: 29px;
          background-size: 24px 29px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_unlock_small_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_imac_24_m1_2020_TwoPort_blue {
          width: 104px;
          height: 88px;
          background-size: 104px 88px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_24_m1_2020_TwoPort_blue_small_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_lm {
          width: 309px;
          height: 189px;
          background-size: 309px 189px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_small_2x.png?1673036829682);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_m2_max {
          width: 163px;
          height: 163px;
          background-size: 163px 163px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_air_2017_silver {
          width: 119px;
          height: 69px;
          background-size: 119px 69px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_2017_silver_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_macbook_pro_m2_16_spacegray_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_16_spacegray_final_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_s {
          width: 322px;
          height: 181px;
          background-size: 322px 181px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_pro_silver {
          width: 42px;
          height: 100px;
          background-size: 42px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_pro_silver_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-display_icon_peak {
          width: 36px;
          height: 36px;
          background-size: 36px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/display_icon_peak_small_2x.png?1673036829683);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_m {
          width: 371px;
          height: 195px;
          background-size: 371px 195px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_small_2x.png?1673036829684);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_apple_pay {
          width: 28px;
          height: 24px;
          background-size: 28px 24px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_apple_pay_small_2x.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_l {
          width: 1558px;
          height: 485px;
          background-size: 1558px 485px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_small_2x.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-camera_l {
          width: 562px;
          height: 294px;
          background-size: 562px 294px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_small_2x.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_accessories_lm {
          width: 462px;
          height: 212px;
          background-size: 462px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_small_2x.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-keyboard_icon_touch_id {
          width: 42px;
          height: 41px;
          background-size: 42px 41px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_icon_touch_id_small_2x.png?1673036829686);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_a_s {
          width: 342px;
          height: 115px;
          background-size: 342px 115px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_small_2x.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-flex_applecare {
          width: 275px;
          height: 166px;
          background-size: 275px 166px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_small_2x.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_imac_21_5_silver {
          width: 100px;
          height: 85px;
          background-size: 100px 85px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_imac_21_5_silver_small_2x.png?1673036829687);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity {
          width: 803px;
          height: 36px;
          background-size: 803px 36px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_small_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_b_m {
          width: 727px;
          height: 212px;
          background-size: 727px 212px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_m_small_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_m2_purple_glow {
          width: 734px;
          height: 633px;
          background-size: 734px 633px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_purple_glow_small_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_a_l {
          width: 1243px;
          height: 362px;
          background-size: 1243px 362px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_small_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-connectivity_icon_wifi {
          width: 27px;
          height: 20px;
          background-size: 27px 20px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_icon_wifi_small_2x.png?1673036829688);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-performance_icon_swirl {
          width: 30px;
          height: 28px;
          background-size: 30px 28px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/performance_icon_swirl_small_2x.png?1673036829688);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/flex_checkmark_apple_care_small_2x.png?1673036829688);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_pro_m2_13_spacegray_small_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-hero_b_s {
          width: 342px;
          height: 94px;
          background-size: 342px 94px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/hero_b_s_small_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-compare_mac_mini_m2_4port_silver_final {
          width: 139px;
          height: 100px;
          background-size: 139px 100px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_mac_mini_m2_4port_silver_final_small_2x.png?1673036829689);
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
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/compare_macbook_air_m1_spacegray_small_2x.png?1673036829689);
        }
      }

      @media only screen and (max-width:734px) and (-webkit-min-device-pixel-ratio:1.5),
      only screen and (max-width:734px) and (min-resolution:1.5dppx),
      only screen and (max-width:734px) and (min-resolution:144dpi) {
        .image-why_icon_performance {
          width: 80px;
          height: 38px;
          background-size: 80px 38px;
          background-repeat: no-repeat;
          background-image: url(./files/uploads/products/macbook-pro-m2-pro-chip/why_icon_performance_small_2x.png?1673036829690);
        }
      }

      .o682106 {
        /* But you can break out of scoping via SCSS "@at-root" feature */
      }

      .channel-html {
        background-color: #000000;
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
          font-size: 40px;
          line-height: 44px;
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

      .channel-html .channel-custom-font-custom-19-touts {
        font-size: 17px;
        line-height: 21px;
        font-weight: 500;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-19-touts {
          font-size: 14px;
          line-height: 18px;
        }
      }

      .channel-html .channel-custom-font-custom-34-badges {
        font-size: 34px;
        line-height: 40px;
        font-weight: 600;
      }

      .channel-html .channel-custom-font-custom-14-keyboard-callouts {
        font-size: 14px;
        line-height: 20px;
        font-weight: 400;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .channel-custom-font-custom-14-keyboard-callouts {
          font-weight: 400;
        }
      }

      .channel-html .pCE45DE {
        background-color: #000000;
      }

      .channel-html .t582A28 {
        background-color: #000000;
        margin-top: 64px;
        margin-bottom: 64px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t582A28 {
          margin-top: 47px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t582A28 {
          margin-top: 49px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t582A28 {
          margin-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t582A28 {
          margin-bottom: 20px;
        }
      }

      .channel-html .t582A28.large-display-bleed::before,
      .channel-html .t582A28.large-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .t582A28.medium-display-bleed::before,
      .channel-html .t582A28.medium-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .t582A28.small-display-bleed::before,
      .channel-html .t582A28.small-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .rD91AAA {
        margin-bottom: 0px;
        text-align: center;
        z-index: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rD91AAA {
          margin-bottom: 0px;
        }
      }

      .channel-html .r47EB0D {
        justify-content: center;
      }

      .channel-html .v663730 {
        margin-left: 1px;
        margin-bottom: 38px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v663730 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v663730 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v663730 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v663730 {
          margin-bottom: 0px;
        }
      }

      .channel-html .v56646B {
        margin-top: 34px;
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v56646B {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v56646B {
          margin-top: 37px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v56646B {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v56646B {
          margin-left: -31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v56646B {
          margin-bottom: 0px;
        }
      }

      .channel-html .vDD5221 {
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vDD5221 {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vDD5221 {
          margin-left: -31px;
        }
      }

      .channel-html .h4BAD0A {
        margin-top: 34px;
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4BAD0A {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4BAD0A {
          margin-top: 37px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4BAD0A {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4BAD0A {
          margin-left: -31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4BAD0A {
          margin-bottom: 0px;
        }
      }

      .channel-html .v7E9ED6 {
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v7E9ED6 {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v7E9ED6 {
          margin-left: -31px;
        }
      }

      .channel-html .b75D172 {
        margin-top: 34px;
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b75D172 {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b75D172 {
          margin-top: 37px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b75D172 {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b75D172 {
          margin-left: -31px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b75D172 {
          margin-bottom: 0px;
        }
      }

      .channel-html .y5E6AE1 {
        margin-left: -130px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .y5E6AE1 {
          margin-left: -18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y5E6AE1 {
          margin-left: -31px;
        }
      }

      .channel-html .cC7E9BF {
        color: #f5f5f7;
        margin-top: -355px;
        margin-bottom: 40px;
        padding-left: 82px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC7E9BF {
          margin-top: -170px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          margin-top: -73px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC7E9BF {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC7E9BF {
          padding-left: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cC7E9BF {
          padding-right: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cC7E9BF {
          padding-right: 0px;
        }
      }

      .channel-html .u0EA586 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-bottom: 0px;
        padding-left: 50px;
        padding-right: 50px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0EA586 {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0EA586 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0EA586 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0EA586 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0EA586 {
          padding-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0EA586 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u0EA586 {
          padding-right: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u0EA586 {
          padding-right: 0px;
        }
      }

      .channel-html .x725E57 {
        color: #f5f5f7;
        margin-top: 49px;
        margin-bottom: 22px;
        padding-left: 164px;
        padding-right: 164px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x725E57 {
          margin-top: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x725E57 {
          margin-top: 29px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x725E57 {
          margin-bottom: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x725E57 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x725E57 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x725E57 {
          padding-right: 0px;
        }
      }

      .channel-html .s0A25DA {
        color: #86868b;
        border: solid 1px #6e6e73;
      }

      .channel-html .t78B4CB {
        background-color: #000000;
      }

      .channel-html .l601C0E {
        background-color: #000000;
        margin-top: 67px;
        margin-bottom: 54px;
        position: relative;
        z-index: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l601C0E {
          margin-top: 80px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l601C0E {
          margin-top: 88.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l601C0E {
          margin-bottom: 56px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l601C0E {
          margin-bottom: 41px;
        }
      }

      .channel-html .l601C0E.large-display-bleed::before,
      .channel-html .l601C0E.large-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .l601C0E.medium-display-bleed::before,
      .channel-html .l601C0E.medium-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .l601C0E.small-display-bleed::before,
      .channel-html .l601C0E.small-display-bleed::after {
        background-color: #000000;
      }

      .channel-html .gF4EF1E {
        text-align: center;
        z-index: 2;
      }

      .channel-html .b0E8197 {
        position: relative;
        z-index: 1;
      }

      .channel-html .b4C67A4 {
        color: #ffffff;
        margin-left: 3px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b4C67A4 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b4C67A4 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b4C67A4 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b4C67A4 {
          margin-bottom: 0px;
        }
      }

      .channel-html .d163EFC {
        color: #f5f5f7;
        margin-top: 10px;
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d163EFC {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d163EFC {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d163EFC {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d163EFC {
          margin-left: -10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d163EFC {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d163EFC {
          margin-right: -10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d163EFC {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d163EFC {
          padding-right: 0px;
        }
      }

      .channel-html .tD0B8BA {
        color: #f5f5f7;
        margin-top: 24px;
        padding-left: 48px;
        padding-right: 48px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD0B8BA {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD0B8BA {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD0B8BA {
          padding-left: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tD0B8BA {
          padding-right: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tD0B8BA {
          padding-right: 0px;
        }
      }

      .channel-html .fFD821C {
        margin-top: 56px;
        position: relative;
        z-index: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fFD821C {
          margin-top: 66px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fFD821C {
          margin-top: 0px;
        }
      }

      .channel-html .jF27CED {
        margin-top: 0px;
        z-index: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jF27CED {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jF27CED {
          margin-top: 59px;
        }
      }

      .channel-html .uC019C2 {
        position: relative;
        z-index: 1;
      }

      .channel-html .aCF214A {
        margin-top: 0px;
        margin-left: 236px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aCF214A {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aCF214A {
          margin-left: 111px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aCF214A {
          margin-left: 59px;
        }
      }

      .channel-html .bE69B45 {
        margin-top: 0px;
        margin-bottom: 0px;
        position: relative;
        z-index: 0;
      }

      .channel-html .z6842CA {
        margin-top: -410px;
        margin-left: -30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z6842CA {
          margin-top: -390px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z6842CA {
          margin-top: -400px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z6842CA {
          margin-left: -180px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z6842CA {
          margin-left: -215px;
        }
      }

      .channel-html .x2C7CFF {
        margin-top: -208px;
        position: relative;
        z-index: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x2C7CFF {
          margin-top: -212px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x2C7CFF {
          margin-top: -198px;
        }
      }

      .channel-html .u1535E0 {
        margin-top: 0px;
        margin-left: 146px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u1535E0 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u1535E0 {
          margin-left: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u1535E0 {
          margin-left: 0px;
        }
      }

      .channel-html .zBDB507 {
        color: #ffffff;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zBDB507 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zBDB507 {
          padding-right: 0px;
        }
      }

      .channel-html .zBDB507 {
        background: linear-gradient(90deg, #CCEFFF 18%, #60CAFC 44%, #3D71FF 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .zBDB507 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .zBDB507 * {
        background: inherit;
      }

      .channel-html .yC2ACF7 {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yC2ACF7 {
          margin-top: 6px;
        }
      }

      .channel-html .gD9701D {
        color: #ffffff;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gD9701D {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gD9701D {
          padding-right: 0px;
        }
      }

      .channel-html .gD9701D {
        background: linear-gradient(90deg, #CCEFFF 18%, #60CAFC 44%, #3D71FF 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .gD9701D [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .gD9701D * {
        background: inherit;
      }

      .channel-html .z4E5380 {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4E5380 {
          margin-top: 6px;
        }
      }

      .channel-html .i81B9BD {
        color: #ffffff;
        padding-left: 24px;
        padding-right: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i81B9BD {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i81B9BD {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i81B9BD {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i81B9BD {
          padding-right: 0px;
        }
      }

      .channel-html .i81B9BD {
        background: linear-gradient(90deg, #CCEFFF 18%, #60CAFC 50%, #3D71FF 94%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .i81B9BD [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .i81B9BD * {
        background: inherit;
      }

      .channel-html .i4D7C16 {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4D7C16 {
          margin-top: 6px;
        }
      }

      .channel-html .jE0DB6A {
        color: #ffffff;
        padding-left: 24px;
        padding-right: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jE0DB6A {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jE0DB6A {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jE0DB6A {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jE0DB6A {
          padding-right: 0px;
        }
      }

      .channel-html .jE0DB6A {
        background: linear-gradient(90deg, #CCEFFF 18%, #60CAFC 50%, #3D71FF 94%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .jE0DB6A [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .jE0DB6A * {
        background: inherit;
      }

      .channel-html .eF728E0 {
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eF728E0 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eF728E0 {
          margin-top: 55px;
        }
      }

      .channel-html .fF5A073 {
        position: relative;
        z-index: 1;
      }

      .channel-html .x86EE18 {
        margin-top: 0px;
        margin-left: 93px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x86EE18 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x86EE18 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x86EE18 {
          margin-left: 70px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x86EE18 {
          margin-left: 59px;
        }
      }

      .channel-html .p1B0457 {
        position: relative;
        z-index: 0;
      }

      .channel-html .h783020 {
        margin-top: -410px;
        margin-left: -530px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h783020 {
          margin-top: -390px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h783020 {
          margin-top: -400px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h783020 {
          margin-left: -530px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h783020 {
          margin-left: -215px;
        }
      }

      .channel-html .e36D031 {
        margin-top: -208px;
        position: relative;
        z-index: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e36D031 {
          margin-top: -212px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e36D031 {
          margin-top: -198px;
        }
      }

      .channel-html .aEEC3D8 {
        margin-top: 0px;
        margin-left: 0px;
        padding-right: 141px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aEEC3D8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aEEC3D8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aEEC3D8 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aEEC3D8 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aEEC3D8 {
          padding-right: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aEEC3D8 {
          padding-right: 0px;
        }
      }

      .channel-html .u2D53C0 {
        color: #ffffff;
      }

      .channel-html .u2D53C0 {
        background: linear-gradient(90deg, #E1CDFF 26%, #AD68FF 60%, #9D4DFF 74%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .u2D53C0 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .u2D53C0 * {
        background: inherit;
      }

      .channel-html .e770DE5 {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e770DE5 {
          margin-top: 6px;
        }
      }

      .channel-html .xE02CC0 {
        color: #ffffff;
      }

      .channel-html .xE02CC0 {
        background: linear-gradient(90deg, #E1CDFF 22%, #AD68FF 60%, #9D4DFF 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .xE02CC0 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .xE02CC0 * {
        background: inherit;
      }

      .channel-html .p4823AC {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p4823AC {
          margin-top: 6px;
        }
      }

      .channel-html .d849F89 {
        color: #ffffff;
        padding-left: 24px;
        padding-right: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d849F89 {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d849F89 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d849F89 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d849F89 {
          padding-right: 0px;
        }
      }

      .channel-html .d849F89 {
        background: linear-gradient(90deg, #E1CDFF 20%, #AD68FF 57%, #9D4DFF 90%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .d849F89 [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .d849F89 * {
        background: inherit;
      }

      .channel-html .b7E8AE1 {
        margin-top: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b7E8AE1 {
          margin-top: 6px;
        }
      }

      .channel-html .sF9725F {
        color: #ffffff;
        padding-left: 24px;
        padding-right: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sF9725F {
          padding-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sF9725F {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sF9725F {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sF9725F {
          padding-right: 0px;
        }
      }

      .channel-html .sF9725F {
        background: linear-gradient(90deg, #E1CDFF 22%, #AD68FF 54%, #9D4DFF 87%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .channel-html .sF9725F [data-no-gradient] {
        background: none;
        -webkit-text-fill-color: #1d1d1f;
      }

      .channel-html .sF9725F * {
        background: inherit;
      }

      .channel-html .uF28A80 {
        align-items: center;
        margin-top: 49px;
        position: relative;
        z-index: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uF28A80 {
          margin-top: 39px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uF28A80 {
          margin-top: 37px;
        }
      }

      .channel-html .z134F6F {
        margin-bottom: 23px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z134F6F {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z134F6F {
          margin-bottom: 25px;
        }
      }

      .channel-html .d30A22D {
        justify-content: center;
      }

      .channel-html .d30A22D .liner {
        background-color: #424245;
        width: 540px;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d30A22D .liner {
          width: 540px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d30A22D .liner {
          width: 280px;
        }
      }

      .channel-html .w135059 {
        padding-left: 6px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w135059 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w135059 {
          padding-left: 0px;
        }
      }

      .channel-html .zB1DBBC {
        align-items: center;
      }

      .channel-html .q34C58C {
        padding-left: 252px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q34C58C {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q34C58C {
          padding-left: 0px;
        }
      }

      .channel-html .f1B09EA {
        margin-top: -1px;
        margin-left: 4px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f1B09EA {
          margin-left: 120px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f1B09EA {
          margin-left: 33px;
        }
      }

      .channel-html .w4A346F {
        padding-right: 0px;
        text-align: start;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4A346F {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4A346F {
          padding-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4A346F {
          padding-left: 16px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4A346F {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4A346F {
          text-align: start;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4A346F {
          text-align: start;
        }
      }

      .channel-html .o93DF6F {
        color: #f5f5f7;
        margin-left: 18px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .o93DF6F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w6FD54F {
          margin-top: 25px;
        }
      }

      .channel-html .j991F86 {
        align-items: center;
      }

      .channel-html .fAB71E7 {
        padding-left: 0px;
      }

      .channel-html .xD1D13A {
        margin-left: 27px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xD1D13A {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xD1D13A {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xD1D13A {
          margin-left: 33px;
        }
      }

      .channel-html .m266136 {
        margin-left: -10px;
        padding-right: 17px;
        text-align: start;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m266136 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m266136 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m266136 {
          padding-left: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m266136 {
          padding-left: 16px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m266136 {
          padding-right: 0px;
        }
      }

      .channel-html .eCD11DC {
        color: #f5f5f7;
        padding-right: 200px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eCD11DC {
          padding-right: 68px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCD11DC {
          padding-right: 0px;
        }
      }

      .channel-html .mC5FDF8 {
        background-color: #000000;
      }

      .channel-html .wF86376 {
        margin-top: 78px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wF86376 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wF86376 {
          margin-top: 79px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wF86376 {
          margin-top: 87px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wF86376 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wF86376 {
          margin-bottom: 0px;
        }
      }

      .channel-html .t2B0C4B {
        order: 1;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t2B0C4B {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t2B0C4B {
          margin-bottom: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t2B0C4B {
          order: 2;
        }
      }

      .channel-html .n555E46 {
        color: #f5f5f7;
        margin-left: -1.5px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n555E46 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n555E46 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n555E46 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n555E46 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n555E46 {
          padding-right: 0px;
        }
      }

      .channel-html .f82C027 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -2px;
        padding-right: 100px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f82C027 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f82C027 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f82C027 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f82C027 {
          padding-right: 57px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f82C027 {
          padding-right: 20px;
        }
      }

      .channel-html .e9EFB37 {
        margin-top: 60px;
        padding-left: 87px;
        order: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e9EFB37 {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9EFB37 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e9EFB37 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9EFB37 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e9EFB37 {
          order: 3;
        }
      }

      .channel-html .d60F7AF {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -6px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d60F7AF {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d60F7AF {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d60F7AF {
          padding-right: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d60F7AF {
          padding-right: 0px;
        }
      }

      .channel-html .y48DE05 {
        margin-top: 51px;
        order: 3;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y48DE05 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .y48DE05 {
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .nFF1753 {
          margin-left: 7px;
        }
      }

      .channel-html .z4CD272 {
        align-items: center;
        margin-top: 51px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z4CD272 {
          margin-top: 46px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z4CD272 {
          margin-top: 40px;
        }
      }

      .channel-html .xBE365B {
        order: 3;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xBE365B {
          order: 1;
        }
      }

      .channel-html .oEDA2E1 {
        margin-left: 13px;
        margin-bottom: 7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oEDA2E1 {
          margin-left: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oEDA2E1 {
          margin-bottom: 1px;
        }
      }

      .channel-html .a2D85B7 {
        padding-bottom: 11px;
        order: 4;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a2D85B7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a2D85B7 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a2D85B7 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a2D85B7 {
          order: 4;
        }
      }

      .channel-html .d208585 {
        align-items: flex-start;
        margin-top: 0px;
      }

      .channel-html .a9C0933 {
        padding-left: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a9C0933 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a9C0933 {
          padding-left: 0px;
        }
      }

      .channel-html .mE4DC00 {
        align-items: center;
      }

      .channel-html .t71EE19 {
        margin-top: 3px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t71EE19 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t71EE19 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t71EE19 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t71EE19 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i719CFA {
          margin-top: 6px;
        }
      }

      .channel-html .hE44983 {
        color: #f5f5f7;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .hE44983 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .hE44983 {
          margin-left: 1px;
        }
      }

      .channel-html .d7AF2C0 {
        color: #f5f5f7;
        margin-top: 4px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d7AF2C0 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d7AF2C0 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d7AF2C0 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d7AF2C0 {
          margin-left: 2px;
        }
      }

      .channel-html .j97D694 {
        align-items: center;
        margin-top: 16px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j97D694 {
          align-items: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j97D694 {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j97D694 {
          margin-top: 28px;
        }
      }

      .channel-html .q941075 {
        margin-top: 4px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q941075 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q941075 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q941075 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q941075 {
          margin-left: 0px;
        }
      }

      .channel-html .q82611A {
        color: #f5f5f7;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q82611A {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q82611A {
          margin-left: 1px;
        }
      }

      .channel-html .wDDFA4A {
        color: #f5f5f7;
        margin-top: 4px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDDFA4A {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDDFA4A {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wDDFA4A {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wDDFA4A {
          margin-left: 2px;
        }
      }

      .channel-html .r113FAD {
        align-items: center;
        margin-top: 16px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r113FAD {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r113FAD {
          margin-top: 28px;
        }
      }

      .channel-html .x743369 {
        margin-top: 3px;
        margin-left: 5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x743369 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x743369 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x743369 {
          margin-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x743369 {
          margin-left: 2px;
        }
      }

      .channel-html .j8FBDFC {
        color: #f5f5f7;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j8FBDFC {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j8FBDFC {
          margin-left: 1px;
        }
      }

      .channel-html .gC9CD8F {
        color: #f5f5f7;
        margin-top: 4px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gC9CD8F {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gC9CD8F {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gC9CD8F {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gC9CD8F {
          margin-left: 2px;
        }
      }

      .channel-html .u878B23 {
        background-color: #000000;
      }

      .channel-html .l932B65 {
        align-items: center;
        margin-top: 127px;
        margin-bottom: 57px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l932B65 {
          align-items: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l932B65 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l932B65 {
          margin-top: 136px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l932B65 {
          margin-top: 104px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l932B65 {
          margin-bottom: 102px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l932B65 {
          margin-bottom: 43px;
        }
      }

      .channel-html .aBA1C16 {
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aBA1C16 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aBA1C16 {
          padding-right: 0px;
        }
      }

      .channel-html .x176075 {
        color: #f5f5f7;
        margin-left: -1px;
        margin-bottom: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x176075 {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x176075 {
          margin-bottom: 0px;
        }
      }

      .channel-html .vAB2CA0 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -2px;
        margin-bottom: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vAB2CA0 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vAB2CA0 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vAB2CA0 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vAB2CA0 {
          margin-bottom: 0px;
        }
      }

      .channel-html .v5EBBE8 {
        color: #f5f5f7;
        margin-top: 24px;
        margin-left: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5EBBE8 {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5EBBE8 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5EBBE8 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5EBBE8 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5EBBE8 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5EBBE8 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v5EBBE8 {
          padding-right: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v5EBBE8 {
          padding-right: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fC48268 {
          margin-top: 52px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .fC48268 {
          margin-left: -1px;
        }
      }

      .channel-html .eCF264A {
        width: 322px;
        height: 181px;
        background-size: 100% 100%;
        background-position: 0% 0%;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCF264A {
          margin-left: -19px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eCF264A {
          width: 392px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCF264A {
          width: 319px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eCF264A {
          height: 181px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCF264A {
          height: 181px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eCF264A {
          background-size: 100% 100%;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCF264A {
          background-size: 100% 100%;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eCF264A {
          background-position: 0% 0%;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eCF264A {
          background-position: 0% 0%;
        }
      }

      .channel-html .c007CED {
        margin-top: 44px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c007CED {
          margin-top: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c007CED {
          margin-top: 36px;
        }
      }

      .channel-html .a79C6D4 {
        align-items: center;
      }

      .channel-html .r5C2E72 {
        margin-top: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r5C2E72 {
          margin-left: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r5C2E72 {
          margin-left: 0px;
        }
      }

      .channel-html .aB2FDB8 {
        color: #f5f5f7;
        padding-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aB2FDB8 {
          padding-left: 22px;
        }
      }

      .channel-html .gA886D2 {
        align-items: center;
        margin-top: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gA886D2 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gA886D2 {
          margin-top: 30px;
        }
      }

      .channel-html .f4E65E8 {
        margin-top: 0px;
        margin-left: 5.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f4E65E8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f4E65E8 {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f4E65E8 {
          margin-left: 6px;
        }
      }

      .channel-html .xE62C5E {
        color: #f5f5f7;
        padding-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xE62C5E {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .xE62C5E {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .xE62C5E {
          padding-left: 23px;
        }
      }

      .channel-html .vEBE0D2 {
        align-items: center;
        margin-top: 20px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vEBE0D2 {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vEBE0D2 {
          margin-top: 22px;
        }
      }

      .channel-html .kDA158F {
        margin-top: -2px;
        margin-left: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kDA158F {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kDA158F {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kDA158F {
          margin-left: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kDA158F {
          margin-left: 1px;
        }
      }

      .channel-html .yC8C7DB {
        color: #f5f5f7;
        padding-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yC8C7DB {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yC8C7DB {
          padding-left: 23px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .yC8C7DB {
          padding-right: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yC8C7DB {
          padding-right: 41px;
        }
      }

      .channel-html .v4770FF {
        margin-top: 6px;
        margin-left: -36px;
        width: 562px;
        height: 294px;
        background-size: 100% 100%;
        background-position: 0% 0%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          margin-left: -4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          width: 371px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          height: 195px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          background-size: 100% 100%;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v4770FF {
          background-position: 0% 0%;
        }
      }

      .channel-html .v96CC88 {
        margin-top: 6px;
        margin-left: -36px;
        width: 562px;
        height: 294px;
        background-size: 100% 100%;
        background-position: 0% 0%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          margin-left: -4px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          width: 371px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          height: 195px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          background-size: 100% 100%;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v96CC88 {
          background-position: 0% 0%;
        }
      }

      .channel-html .u43550D {
        background-color: #000000;
      }

      .channel-html .u9BE054 {
        margin-top: 102px;
        margin-left: 0px;
        margin-bottom: 78px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u9BE054 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u9BE054 {
          margin-top: 49px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u9BE054 {
          margin-top: 77px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .u9BE054 {
          margin-bottom: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .u9BE054 {
          margin-bottom: 45px;
        }
      }

      .channel-html .tA48119 {
        margin-top: 30px;
        order: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tA48119 {
          margin-top: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tA48119 {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tA48119 {
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .tA48119 {
          order: 2;
        }
      }

      .channel-html .aBC82FA {
        margin-top: 26px;
        margin-bottom: 58px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aBC82FA {
          margin-top: 27px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aBC82FA {
          margin-bottom: 53px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aBC82FA {
          margin-bottom: 38px;
        }
      }

      .channel-html .q878CD2 {
        padding-right: 180px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q878CD2 {
          margin-bottom: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q878CD2 {
          padding-right: 0px;
        }
      }

      .channel-html .d7AC26B {
        color: #f5f5f7;
        margin-left: -1px;
        margin-bottom: 10px;
        padding-right: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d7AC26B {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d7AC26B {
          margin-bottom: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d7AC26B {
          margin-bottom: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d7AC26B {
          padding-right: 0px;
        }
      }

      .channel-html .gDFFF88 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: -2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gDFFF88 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gDFFF88 {
          margin-left: 0px;
        }
      }

      .channel-html .gE4B91F {
        color: #f5f5f7;
        margin-top: 24px;
        margin-left: 0px;
        margin-right: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gE4B91F {
          margin-top: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gE4B91F {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gE4B91F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gE4B91F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gE4B91F {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gE4B91F {
          padding-right: 84px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gE4B91F {
          padding-right: 0px;
        }
      }

      .channel-html .h7A6D90 {
        margin-top: 120px;
        margin-right: 0px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h7A6D90 {
          margin-top: 112px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h7A6D90 {
          margin-top: 34px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h7A6D90 {
          padding-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h7A6D90 {
          padding-left: 0px;
        }
      }

      .channel-html .vF6DD04 {
        margin-left: 0px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
      }

      .channel-html .n65867D {
        flex-basis: 50%;
      }

      .channel-html .t483FEB {
        align-items: center;
      }

      .channel-html .jDDDA89 {
        margin-top: 1px;
        margin-left: 2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jDDDA89 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jDDDA89 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jDDDA89 {
          margin-left: -3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jDDDA89 {
          margin-left: 2px;
        }
      }

      .channel-html .sDC2234 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .eE20E94 {
        color: #f5f5f7;
        margin-top: 1px;
        margin-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eE20E94 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eE20E94 {
          margin-left: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eE20E94 {
          margin-left: 22px;
        }
      }

      .channel-html .eE26821 {
        flex-basis: 50%;
      }

      .channel-html .lF5D0F3 {
        align-items: center;
      }

      .channel-html .zC85EFB {
        margin-top: -0.5px;
        margin-left: -4px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zC85EFB {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zC85EFB {
          margin-top: -2.5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zC85EFB {
          margin-left: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zC85EFB {
          margin-left: 2px;
        }
      }

      .channel-html .j295C70 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .m5D986F {
        color: #f5f5f7;
        margin-top: -1px;
        padding-top: 0px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m5D986F {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m5D986F {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m5D986F {
          margin-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m5D986F {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m5D986F {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m5D986F {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m5D986F {
          padding-left: 0px;
        }
      }

      .channel-html .d042B97 {
        margin-top: 17px;
        flex-basis: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d042B97 {
          margin-top: 18.5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d042B97 {
          margin-top: 7px;
        }
      }

      .channel-html .q0315E2 {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q0315E2 {
          align-items: center;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q0315E2 {
          margin-top: 0px;
        }
      }

      .channel-html .lED21A6 {
        margin-top: -2px;
        margin-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lED21A6 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lED21A6 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lED21A6 {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lED21A6 {
          margin-left: 9px;
        }
      }

      .channel-html .fB523A4 {
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 30px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .fB523A4 {
          padding-right: 0px;
        }
      }

      .channel-html .cE1F34B {
        color: #f5f5f7;
        margin-left: 10px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cE1F34B {
          margin-left: 15px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cE1F34B {
          margin-left: 22px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cE1F34B {
          padding-right: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cE1F34B {
          padding-right: 9px;
        }
      }

      .channel-html .kD63C89 {
        margin-top: 23.5px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        flex-basis: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .kD63C89 {
          margin-top: 25px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .kD63C89 {
          margin-top: 23.5px;
        }
      }

      .channel-html .eFE7E41 {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eFE7E41 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eFE7E41 {
          margin-top: 0px;
        }
      }

      .channel-html .h337193 {
        margin-left: -7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h337193 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h337193 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h337193 {
          margin-left: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h337193 {
          margin-left: -1px;
        }
      }

      .channel-html .oBA4AC7 {
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 0px;
      }

      .channel-html .k13D4A5 {
        color: #f5f5f7;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k13D4A5 {
          margin-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k13D4A5 {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k13D4A5 {
          margin-right: -7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k13D4A5 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k13D4A5 {
          padding-left: 0px;
        }
      }

      .channel-html .oD89280 {
        margin-top: 19.5px;
        flex-basis: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oD89280 {
          margin-top: 18px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oD89280 {
          margin-top: 6px;
        }
      }

      .channel-html .sF656DB {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sF656DB {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sF656DB {
          margin-top: 0px;
        }
      }

      .channel-html .h60A999 {
        margin-top: -1px;
        margin-left: 3px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h60A999 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h60A999 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h60A999 {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h60A999 {
          margin-left: 2px;
        }
      }

      .channel-html .lDB6252 {
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 30px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lDB6252 {
          padding-right: 0px;
        }
      }

      .channel-html .d710C39 {
        color: #f5f5f7;
        margin-left: 9px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d710C39 {
          margin-left: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d710C39 {
          margin-left: 22px;
        }
      }

      .channel-html .g7A1271 {
        margin-top: 17.5px;
        flex-basis: 50%;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g7A1271 {
          margin-top: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g7A1271 {
          margin-top: -1px;
        }
      }

      .channel-html .f918317 {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f918317 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f918317 {
          margin-top: 0px;
        }
      }

      .channel-html .eF00A12 {
        margin-top: -1px;
        margin-left: -3px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eF00A12 {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eF00A12 {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eF00A12 {
          margin-left: 4px;
        }
      }

      .channel-html .e17AFCA {
        margin-left: 0px;
        padding-left: 0px;
        padding-right: 0px;
      }

      .channel-html .w4E4899 {
        color: #f5f5f7;
        margin-right: -10px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4E4899 {
          margin-left: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4E4899 {
          margin-left: 18px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4E4899 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4E4899 {
          margin-right: -5px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w4E4899 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w4E4899 {
          padding-left: 0px;
        }
      }

      .channel-html .d005D95 {
        order: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .d005D95 {
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d005D95 {
          order: 1;
        }
      }

      .channel-html .x566CC1 {
        margin-left: -621px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x566CC1 {
          margin-left: -472px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x566CC1 {
          margin-left: -262px;
        }
      }

      .channel-html .t1369BD {
        background-color: #000000;
        padding-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t1369BD {
          padding-bottom: 148px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t1369BD {
          padding-bottom: 80px;
        }
      }

      .channel-html .h4108A1 {
        align-items: flex-start;
        justify-content: start;
        margin-top: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4108A1 {
          justify-content: center;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4108A1 {
          margin-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4108A1 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h4108A1 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h4108A1 {
          margin-bottom: 0px;
        }
      }

      .channel-html .f854F69 {
        padding-left: 0px;
        order: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f854F69 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f854F69 {
          padding-left: 0px;
        }
      }

      .channel-html .gD9DF9D {
        color: #f5f5f7;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gD9DF9D {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gD9DF9D {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gD9DF9D {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gD9DF9D {
          margin-bottom: 0px;
        }
      }

      .channel-html .c96DDD8 {
        color: #f5f5f7;
        margin-top: 10px;
        margin-left: -2px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c96DDD8 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c96DDD8 {
          margin-top: 7px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c96DDD8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c96DDD8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c96DDD8 {
          margin-bottom: 0px;
        }
      }

      .channel-html .k2A5D27 {
        color: #f5f5f7;
        margin-top: 24px;
        margin-left: 0px;
        margin-right: -7px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k2A5D27 {
          margin-top: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2A5D27 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k2A5D27 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2A5D27 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k2A5D27 {
          margin-right: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2A5D27 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k2A5D27 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k2A5D27 {
          padding-right: 20px;
        }
      }

      .channel-html .lFBED12 {
        align-items: flex-start;
        margin-top: -148px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .lFBED12 {
          margin-top: -119px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .lFBED12 {
          margin-top: 0px;
        }
      }

      .channel-html .i5D56F6 {
        order: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i5D56F6 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i5D56F6 {
          padding-right: 0px;
        }
      }

      .channel-html .z2C955E {
        margin-top: 1px;
        margin-left: -1014px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2C955E {
          margin-top: 57px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z2C955E {
          margin-left: -188px;
        }
      }

      .channel-html .eFFCD08 {
        margin-top: 100px;
        padding-left: 0px;
        order: 2;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eFFCD08 {
          margin-top: 100px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eFFCD08 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eFFCD08 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .eFFCD08 {
          padding-left: 0px;
        }
      }

      .channel-html .p11B3A7 {
        margin-top: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p11B3A7 {
          margin-top: 0px;
        }
      }

      .channel-html .n43A50A {
        order: 1;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n43A50A {
          margin-left: -20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n43A50A {
          order: 1;
        }
      }

      .channel-html .pDD3019 {
        margin-top: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pDD3019 {
          margin-top: 52px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pDD3019 {
          margin-left: -207px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s61C219 {
          order: 2;
        }
      }

      .channel-html .c48B5C4 {
        align-items: center;
        margin-top: 39px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c48B5C4 {
          margin-top: 32px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c48B5C4 {
          margin-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c48B5C4 {
          margin-bottom: 19.5px;
        }
      }

      .channel-html .g64AA71 {
        margin-top: 1px;
        margin-left: -1px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g64AA71 {
          margin-top: 0px;
        }
      }

      .channel-html .t4825F5 {
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t4825F5 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .t4825F5 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t4825F5 {
          margin-left: 0px;
        }
      }

      .channel-html .z87FDDC {
        color: #f5f5f7;
        margin-left: 0px;
        padding-top: 1px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z87FDDC {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z87FDDC {
          margin-left: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z87FDDC {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z87FDDC {
          padding-left: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z87FDDC {
          padding-left: 0px;
        }
      }

      .channel-html .rC11C42 {
        justify-content: flex-start;
      }

      .channel-html .rC11C42 .liner {
        background-color: #424245;
        width: 100%;
        height: 1px;
        opacity: 1;
      }

      .channel-html .l950BB3 {
        margin-left: 0px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l950BB3 {
          margin-top: 13px;
        }
      }

      .channel-html .uC1A541 {
        align-items: center;
        margin-top: 38px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uC1A541 {
          margin-top: 24px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uC1A541 {
          margin-top: 0px;
        }
      }

      .channel-html .a9789FA {
        margin-top: 0px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a9789FA {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a9789FA {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .a9789FA {
          margin-left: 8px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .a9789FA {
          margin-left: 6px;
        }
      }

      .channel-html .b370FB1 {
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b370FB1 {
          margin-top: 0px;
        }
      }

      .channel-html .g2213C6 {
        color: #f5f5f7;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g2213C6 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g2213C6 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g2213C6 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k3B579D {
          margin-top: 18px;
        }
      }

      .channel-html .oB1DDB5 {
        align-items: center;
        margin-top: 4px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oB1DDB5 {
          margin-top: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oB1DDB5 {
          margin-top: 0px;
        }
      }

      .channel-html .b8AD1F3 {
        margin-top: 0px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b8AD1F3 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b8AD1F3 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b8AD1F3 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b8AD1F3 {
          margin-left: 5px;
        }
      }

      .channel-html .uF82A07 {
        color: #f5f5f7;
        margin-right: -10px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uF82A07 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uF82A07 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uF82A07 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uF82A07 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uF82A07 {
          padding-right: 55px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oD9B06D {
          margin-top: 21px;
        }
      }

      .channel-html .aF19A83 {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aF19A83 {
          margin-top: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aF19A83 {
          margin-top: 0px;
        }
      }

      .channel-html .w1DA787 {
        margin-top: 0px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w1DA787 {
          margin-top: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w1DA787 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w1DA787 {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w1DA787 {
          margin-left: 5px;
        }
      }

      .channel-html .r559915 {
        padding-left: 0px;
        padding-right: 20px;
      }

      .channel-html .p8ECDEB {
        color: #f5f5f7;
        margin-left: 0px;
        padding-left: 19px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p8ECDEB {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p8ECDEB {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p8ECDEB {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r60742F {
          margin-top: 21px;
        }
      }

      .channel-html .e3356FD {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e3356FD {
          margin-top: 27px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e3356FD {
          margin-top: 0px;
        }
      }

      .channel-html .aCFFD26 {
        margin-top: 0px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aCFFD26 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aCFFD26 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .aCFFD26 {
          margin-left: 3px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .aCFFD26 {
          margin-left: 6px;
        }
      }

      .channel-html .r462857 {
        padding-left: 0px;
      }

      .channel-html .g6A2852 {
        color: #f5f5f7;
        margin-left: 0px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g6A2852 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g6A2852 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g6A2852 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g6A2852 {
          padding-right: 58px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g6A2852 {
          padding-right: 87px;
        }
      }

      .channel-html .l614236 {
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l614236 {
          margin-top: 0px;
        }
      }

      .channel-html .q5460F4 {
        align-items: center;
        margin-top: 64px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .q5460F4 {
          margin-top: 66px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q5460F4 {
          margin-top: 41px;
        }
      }

      .channel-html .e0309F6 {
        margin-top: 1px;
        margin-left: -1px;
        padding-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e0309F6 {
          margin-top: 0px;
        }
      }

      .channel-html .x5DDA5A {
        margin-top: 1px;
        margin-left: 1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x5DDA5A {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x5DDA5A {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x5DDA5A {
          margin-left: 0px;
        }
      }

      .channel-html .cCE3CA7 {
        margin-top: 3px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cCE3CA7 {
          margin-top: -1px;
        }
      }

      .channel-html .n318572 {
        color: #f5f5f7;
        margin-top: 0px;
        margin-left: 0px;
        padding-top: 0px;
        padding-left: 35px;
        padding-bottom: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n318572 {
          padding-left: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .n318572 {
          padding-left: 24px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n318572 {
          padding-bottom: 0px;
        }
      }

      .channel-html .i9FDD76 {
        justify-content: flex-start;
        margin-top: 14px;
        margin-left: 0px;
        margin-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9FDD76 {
          justify-content: flex-start;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9FDD76 {
          margin-top: 9px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9FDD76 {
          margin-left: 0px;
        }
      }

      .channel-html .i9FDD76 .liner {
        background-color: #424245;
        width: 400px;
        height: 1px;
        opacity: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i9FDD76 .liner {
          width: 300px;
        }
      }

      .channel-html .i26C662 {
        margin-top: 16px;
        margin-left: 0px;
        padding-left: 0px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i26C662 {
          margin-top: 4px;
        }
      }

      .channel-html .n18CFBD {
        flex-basis: 50%;
        flex-grow: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .n18CFBD {
          flex-basis: 50%;
        }
      }

      .channel-html .l1335FB {
        align-items: center;
        margin-top: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l1335FB {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l1335FB {
          margin-top: 31px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tF13FC1 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .tF13FC1 {
          margin-right: 0px;
        }
      }

      .channel-html .vB21AC5 {
        margin-top: -1px;
        margin-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vB21AC5 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vB21AC5 {
          margin-left: 7px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vB21AC5 {
          margin-left: 6px;
        }
      }

      .channel-html .h06274F {
        padding-left: 7px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h06274F {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h06274F {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h06274F {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h06274F {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h06274F {
          padding-right: 0px;
        }
      }

      .channel-html .p03B483 {
        color: #f5f5f7;
        padding-left: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p03B483 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p03B483 {
          padding-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p03B483 {
          padding-left: 1px;
        }
      }

      .channel-html .oF605E6 {
        flex-basis: 50%;
        flex-grow: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oF605E6 {
          flex-basis: 50%;
        }
      }

      .channel-html .m19B5D3 {
        align-items: center;
        margin-top: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m19B5D3 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m19B5D3 {
          margin-top: 18px;
        }
      }

      .channel-html .b521762 {
        margin-top: 0px;
        margin-left: -5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b521762 {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b521762 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .b521762 {
          margin-left: 4px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .b521762 {
          margin-left: -1px;
        }
      }

      .channel-html .x503818 {
        color: #f5f5f7;
        margin-right: 0px;
        padding-left: 4px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x503818 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x503818 {
          padding-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x503818 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x503818 {
          padding-right: 12px;
        }
      }

      .channel-html .mB3B838 {
        flex-basis: 50%;
        flex-grow: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mB3B838 {
          margin-top: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mB3B838 {
          flex-basis: 50%;
        }
      }

      .channel-html .m599B8C {
        align-items: center;
        margin-top: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .m599B8C {
          margin-top: 5px;
        }
      }

      .channel-html .l83D062 {
        margin-top: 0px;
        margin-left: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l83D062 {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l83D062 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .l83D062 {
          margin-left: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .l83D062 {
          margin-left: 4px;
        }
      }

      .channel-html .eB530B7 {
        padding-left: 0px;
        padding-right: 20px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .eB530B7 {
          padding-right: 0px;
        }
      }

      .channel-html .r95B93A {
        color: #f5f5f7;
        margin-left: 0px;
        padding-left: 16px;
        padding-right: 22px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r95B93A {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r95B93A {
          padding-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .r95B93A {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .r95B93A {
          padding-right: 14px;
        }
      }

      .channel-html .h14364D {
        flex-basis: 50%;
        flex-grow: 0;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h14364D {
          margin-top: 10px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h14364D {
          flex-basis: 50%;
        }
      }

      .channel-html .v81DA5D {
        align-items: center;
        margin-top: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .v81DA5D {
          margin-top: 5px;
        }
      }

      .channel-html .j9BD80D {
        margin-top: -2px;
        margin-left: -3px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j9BD80D {
          margin-top: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j9BD80D {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j9BD80D {
          margin-left: 5px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .j9BD80D {
          margin-left: 2px;
        }
      }

      .channel-html .q465A7C {
        padding-left: 0px;
      }

      .channel-html .bC7F188 {
        color: #f5f5f7;
        margin-left: 0px;
        padding-left: 4px;
        padding-right: 24px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bC7F188 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bC7F188 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bC7F188 {
          margin-right: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bC7F188 {
          padding-left: 22px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bC7F188 {
          padding-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bC7F188 {
          padding-right: 0px;
        }
      }

      .channel-html .z170348 {
        order: 1;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z170348 {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z170348 {
          padding-right: 0px;
        }
      }

      .channel-html .wB46539 {
        margin-top: 0px;
        margin-left: -1014px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wB46539 {
          margin-top: 54px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wB46539 {
          margin-left: -188px;
        }
      }

      .channel-html .q9ED72F {
        background-color: #f5f5f7;
        overflow: hidden;
      }

      .channel-html .i4E6C6E {
        background-color: #ffffff;
        margin-top: 50px;
        padding-top: 60px;
        padding-bottom: 58px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i4E6C6E {
          margin-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          margin-top: 48px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i4E6C6E {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          padding-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .i4E6C6E {
          padding-bottom: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          padding-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .i4E6C6E {
          padding-right: 50vw;
        }
      }

      .channel-html .i4E6C6E.large-display-bleed::before,
      .channel-html .i4E6C6E.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .i4E6C6E.medium-display-bleed::before,
      .channel-html .i4E6C6E.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .i4E6C6E.small-display-bleed::before,
      .channel-html .i4E6C6E.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .h724CB4 {
        margin-bottom: 38px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h724CB4 {
          margin-bottom: 38px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h724CB4 {
          margin-bottom: 30px;
        }
      }

      .channel-html .zBBD217 {
        color: #1d1d1f;
        margin-left: -0.5px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zBBD217 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zBBD217 {
          margin-bottom: 7px;
        }
      }

      .channel-html .dC5BA64 {
        color: #1d1d1f;
        margin-top: 7px;
        margin-left: -1.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dC5BA64 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dC5BA64 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dC5BA64 {
          margin-left: 0px;
        }
      }

      .channel-html .sF38496 {
        padding-right: 41px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .sF38496 {
          padding-right: 29px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .sF38496 {
          padding-right: 10px;
        }
      }

      .channel-html .dDA7FD8 {
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dDA7FD8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dDA7FD8 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dDA7FD8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dDA7FD8 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dDA7FD8 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dDA7FD8 {
          margin-bottom: 0px;
        }
      }

      .channel-html .w324F14 {
        color: #1d1d1f;
        margin-top: 17px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w324F14 {
          margin-top: 17px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w324F14 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w324F14 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w324F14 {
          margin-bottom: 0px;
        }
      }

      .channel-html .j0BE4DA {
        color: #86868b;
        margin-top: 1px;
        margin-left: 0px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j0BE4DA {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j0BE4DA {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .j0BE4DA {
          padding-right: 0px;
        }
      }

      .channel-html .c233635 {
        padding-right: 41px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c233635 {
          margin-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c233635 {
          margin-bottom: 43px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c233635 {
          padding-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c233635 {
          padding-right: 23px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c233635 {
          padding-right: 5px;
        }
      }

      .channel-html .k3E74A0 {
        margin-top: 3px;
        margin-left: 0px;
        margin-bottom: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k3E74A0 {
          margin-top: 3px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k3E74A0 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k3E74A0 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k3E74A0 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k3E74A0 {
          margin-bottom: 14px;
        }
      }

      .channel-html .s5B68BE {
        color: #1d1d1f;
        margin-top: 20px;
        margin-left: 1px;
        margin-bottom: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s5B68BE {
          margin-top: 20px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s5B68BE {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s5B68BE {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s5B68BE {
          margin-bottom: 0px;
        }
      }

      .channel-html .mB555BE {
        color: #86868b;
        margin-top: 0px;
        margin-left: 1px;
        padding-right: 72px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mB555BE {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mB555BE {
          margin-right: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .mB555BE {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .mB555BE {
          padding-right: 31px;
        }
      }

      .channel-html .f6D5CD4 {
        padding-right: 32px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f6D5CD4 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f6D5CD4 {
          padding-right: 10px;
        }
      }

      .channel-html .dD3FDBE {
        margin-top: -2px;
        margin-left: -1.5px;
        margin-bottom: 2px;
        margin-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dD3FDBE {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dD3FDBE {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dD3FDBE {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dD3FDBE {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .dD3FDBE {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .dD3FDBE {
          margin-bottom: 0px;
        }
      }

      .channel-html .p854421 {
        color: #1d1d1f;
        margin-top: 14px;
        margin-left: 0px;
        margin-bottom: 1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p854421 {
          margin-top: 14px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p854421 {
          margin-top: 15px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p854421 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .p854421 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .p854421 {
          margin-bottom: 0px;
        }
      }

      .channel-html .z411273 {
        color: #86868b;
        margin-top: 0px;
        margin-left: 0px;
        margin-bottom: -2px;
        padding-right: 61px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z411273 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z411273 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z411273 {
          margin-left: -1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .z411273 {
          padding-right: 9px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z411273 {
          padding-right: 43px;
        }
      }

      .channel-html .r2999FC {
        background-color: #f5f5f7;
        overflow: hidden;
      }

      .channel-html .oC7868E {
        background-color: #ffffff;
        margin-top: 10px;
        padding-top: 60px;
        padding-bottom: 60px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oC7868E {
          padding-top: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          padding-top: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .oC7868E {
          padding-bottom: 50px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          padding-bottom: 42px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .oC7868E {
          padding-right: 50vw;
        }
      }

      .channel-html .oC7868E.large-display-bleed::before,
      .channel-html .oC7868E.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .oC7868E.medium-display-bleed::before,
      .channel-html .oC7868E.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .oC7868E.small-display-bleed::before,
      .channel-html .oC7868E.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .rB03E7E {
        margin-bottom: 42px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rB03E7E {
          margin-bottom: 28px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rB03E7E {
          margin-bottom: 18px;
        }
      }

      .channel-html .gB660DD {
        color: #1d1d1f;
        margin-left: -1px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .gB660DD {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .gB660DD {
          margin-bottom: 7px;
        }
      }

      .channel-html .wECFB8B {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .wECFB8B {
          margin-left: -2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .wECFB8B {
          margin-left: -1.5px;
        }
      }

      .tA28B5F {
        width: 100%;
        --columns: 5;
        --grid-column: 5;
        --static-enabled: false;
        --column-data: 1, 0, 2, 3, 4, 2, 3, 4, 3, 4;
        --allowed-columns: 5, 3, 2;
      }

      .tA28B5F .compare-column-0 {
        display: flex;
        order: 1;
      }

      .tA28B5F .compare-column-1 {
        display: flex;
        order: 2;
      }

      .tA28B5F .compare-column-2 {
        display: flex;
        order: 3;
      }

      .tA28B5F .compare-column-3 {
        display: flex;
        order: 4;
      }

      .tA28B5F .compare-column-4 {
        display: flex;
        order: 5;
      }

      .tA28B5F .compare-static-1 {
        display: flex;
        order: 1;
      }

      .tA28B5F .compare-static-0 {
        display: flex;
        order: 2;
      }

      .tA28B5F .compare-static-2 {
        display: flex;
        order: 3;
      }

      .tA28B5F .compare-static-3 {
        display: flex;
        order: 4;
      }

      .tA28B5F .compare-static-4 {
        display: flex;
        order: 5;
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F {
          --columns: 3;
          --grid-column: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F .compare-column-2 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 1068px) {
        .tA28B5F {
          --static-enabled: false;
        }

        .tA28B5F .compare-static-1 {
          display: none;
        }

        .tA28B5F .compare-static-0 {
          display: none;
        }

        .tA28B5F .compare-static-2 {
          display: flex;
          order: 1;
        }

        .tA28B5F .compare-static-3 {
          display: flex;
          order: 2;
        }

        .tA28B5F .compare-static-4 {
          display: flex;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F {
          --columns: 2;
          --grid-column: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F .compare-column-0 {
          display: flex;
          order: 1;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F .compare-column-1 {
          display: flex;
          order: 2;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F .compare-column-2 {
          display: none;
          order: 3;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F .compare-column-3 {
          display: none;
          order: 4;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F .compare-column-4 {
          display: none;
          order: 5;
        }
      }

      @media only screen and (max-width: 734px) {
        .tA28B5F {
          --static-enabled: false;
        }

        .tA28B5F .compare-static-1 {
          display: none;
        }

        .tA28B5F .compare-static-0 {
          display: none;
        }

        .tA28B5F .compare-static-2 {
          display: none;
        }

        .tA28B5F .compare-static-2 {
          display: none;
        }

        .tA28B5F .compare-static-3 {
          display: flex;
          order: 1;
        }

        .tA28B5F .compare-static-4 {
          display: flex;
          order: 2;
        }
      }

      .channel-html .q412764 {
        background-color: #f5f5f7;
        overflow: hidden;
      }

      .channel-html .e4D69AE {
        background-color: #ffffff;
        align-items: center;
        margin-top: 10px;
        padding-top: 64px;
        padding-bottom: 64px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e4D69AE {
          padding-top: 72px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e4D69AE {
          padding-bottom: 72px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          padding-bottom: 44px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e4D69AE {
          padding-right: 50vw;
        }
      }

      .channel-html .e4D69AE.large-display-bleed::before,
      .channel-html .e4D69AE.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .e4D69AE.medium-display-bleed::before,
      .channel-html .e4D69AE.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .e4D69AE.small-display-bleed::before,
      .channel-html .e4D69AE.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .w7EB945 {
        margin-top: 1px;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 0px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7EB945 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7EB945 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7EB945 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7EB945 {
          margin-bottom: 44px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7EB945 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7EB945 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7EB945 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .w7EB945 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .w7EB945 {
          padding-right: 0px;
        }
      }

      .channel-html .pD65740 {
        color: #1d1d1f;
        margin-left: -1.5px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pD65740 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .pD65740 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pD65740 {
          margin-bottom: 7px;
        }
      }

      .channel-html .zC069DB {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2.5px;
        margin-bottom: 18px;
        padding-right: 10px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zC069DB {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zC069DB {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .zC069DB {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .zC069DB {
          margin-bottom: 13px;
        }
      }

      .channel-html .s0E6C79 {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -1px;
        margin-bottom: 13px;
        padding-right: 83px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s0E6C79 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s0E6C79 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s0E6C79 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .s0E6C79 {
          padding-right: 16px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .s0E6C79 {
          padding-right: 36px;
        }
      }

      .channel-html .pC60B78 {
        margin-top: 0px;
      }

      .channel-html .jCD90DD {
        margin-left: -1.5px;
        padding-right: 120px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jCD90DD {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .jCD90DD {
          padding-right: 30px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .jCD90DD {
          padding-right: 66px;
        }
      }

      .channel-html .yEFFF34 {
        color: #0066cc;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .q1437DB {
          margin-left: -47px;
        }
      }

      .channel-html .h0A5339 {
        margin-top: -1px;
        margin-left: 69.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h0A5339 {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h0A5339 {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h0A5339 {
          margin-left: -82px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .h0A5339 {
          margin-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d4FAF05 {
          margin-left: -47px;
        }
      }

      .channel-html .e383B6E {
        margin-top: -1px;
        margin-left: 69.5px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e383B6E {
          margin-top: -2px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e383B6E {
          margin-left: 21px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .e383B6E {
          margin-left: -82px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .e383B6E {
          margin-bottom: 0px;
        }
      }

      .channel-html .b859975 {
        background-color: #f5f5f7;
        overflow: hidden;
      }

      .channel-html .rD8AD2D {
        background-color: #ffffff;
        align-items: center;
        margin-top: 10px;
        padding-top: 82px;
        padding-bottom: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rD8AD2D {
          align-items: center;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rD8AD2D {
          padding-top: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          padding-top: 41px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rD8AD2D {
          padding-bottom: 60px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          padding-bottom: 56px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rD8AD2D {
          padding-right: 50vw;
        }
      }

      .channel-html .rD8AD2D.large-display-bleed::before,
      .channel-html .rD8AD2D.large-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .rD8AD2D.medium-display-bleed::before,
      .channel-html .rD8AD2D.medium-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .rD8AD2D.small-display-bleed::before,
      .channel-html .rD8AD2D.small-display-bleed::after {
        background-color: #ffffff;
      }

      .channel-html .bD6B050 {
        margin-top: 0px;
        padding-top: 0px;
        padding-bottom: 0px;
        padding-right: 82px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bD6B050 {
          margin-top: 1px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bD6B050 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bD6B050 {
          margin-bottom: 42px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bD6B050 {
          padding-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bD6B050 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bD6B050 {
          padding-bottom: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .bD6B050 {
          padding-right: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .bD6B050 {
          padding-right: 0px;
        }
      }

      .channel-html .uDD02A8 {
        color: #1d1d1f;
        margin-left: 0px;
        margin-bottom: 8px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uDD02A8 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .uDD02A8 {
          margin-bottom: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .uDD02A8 {
          margin-bottom: 7px;
        }
      }

      .channel-html .x12281A {
        color: #1d1d1f;
        margin-top: 0px;
        margin-left: -2px;
        margin-bottom: 18px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x12281A {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x12281A {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .x12281A {
          margin-bottom: 19px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .x12281A {
          margin-bottom: 13px;
        }
      }

      .channel-html .cCD3236 {
        margin-top: 0px;
        margin-bottom: 13px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cCD3236 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cCD3236 {
          margin-left: 1px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .cCD3236 {
          margin-bottom: 13px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cCD3236 {
          margin-bottom: 14px;
        }
      }

      .channel-html .y0979D7 {
        margin-left: -1px;
      }

      .channel-html .c131931 {
        margin-left: 0px;
      }

      .channel-html .yF175B6 {
        margin-top: 5.5px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yF175B6 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .yF175B6 {
          margin-left: -1px;
        }
      }

      .channel-html .rE1D296 {
        margin-left: 11px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .rE1D296 {
          margin-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rE1D296 {
          margin-left: 7px;
        }
      }

      .channel-html .t5DDD25 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t5DDD25 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .t5DDD25 {
          padding-left: 2px;
        }
      }

      .channel-html .rED1BF4 {
        margin-top: 0px;
      }

      .channel-html .h6B00D9 {
        margin-top: 5.5px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h6B00D9 {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .h6B00D9 {
          margin-left: -1px;
        }
      }

      .channel-html .g5A9126 {
        margin-left: 11px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g5A9126 {
          margin-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g5A9126 {
          margin-left: 7px;
        }
      }

      .channel-html .z67857B {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z67857B {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z67857B {
          padding-left: 2px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .z67857B {
          padding-right: 40px;
        }
      }

      .channel-html .cB0676A {
        margin-top: 5.5px;
        margin-left: 0px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cB0676A {
          margin-top: 6px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .cB0676A {
          margin-left: -1px;
        }
      }

      .channel-html .vDB61D5 {
        margin-left: 11px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .vDB61D5 {
          margin-left: 10px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .vDB61D5 {
          margin-left: 7px;
        }
      }

      .channel-html .pAB6963 {
        margin-left: -1px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pAB6963 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .pAB6963 {
          padding-left: 2px;
        }
      }

      .channel-html .g8B3F7D {
        margin-top: 0px;
        margin-left: -2px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .g8B3F7D {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .g8B3F7D {
          margin-left: 0px;
        }
      }

      .channel-html .c1D8B79 {
        margin-left: 1px;
        padding-right: 80px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c1D8B79 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .c1D8B79 {
          padding-right: 40px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .c1D8B79 {
          padding-right: 60px;
        }
      }

      .channel-html .d33BD06 {
        color: #0066cc;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .rE4525C {
          margin-left: -47px;
        }
      }

      .channel-html .k75B889 {
        margin-top: -4px;
        margin-left: 57px;
        pointer-events: none;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k75B889 {
          margin-top: 0px;
        }
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .k75B889 {
          margin-left: 36px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .k75B889 {
          margin-left: 53px;
        }
      }

      .channel-html .s5EE615 {
        background-color: #f5f5f7;
        overflow: hidden;
      }

      .channel-html .iA055B7 {
        background-color: #f5f5f7;
        margin-top: 46px;
        margin-bottom: 7px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA055B7 {
          margin-left: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA055B7 {
          margin-right: -50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA055B7 {
          padding-left: 50vw;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .iA055B7 {
          padding-right: 50vw;
        }
      }

      .channel-html .iA055B7.large-display-bleed::before,
      .channel-html .iA055B7.large-display-bleed::after {
        background-color: #f5f5f7;
      }

      .channel-html .iA055B7.medium-display-bleed::before,
      .channel-html .iA055B7.medium-display-bleed::after {
        background-color: #f5f5f7;
      }

      .channel-html .iA055B7.small-display-bleed::before,
      .channel-html .iA055B7.small-display-bleed::after {
        background-color: #f5f5f7;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f69F044 {
          margin-left: 0;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f69F044 {
          margin-left: 0px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f69F044 {
          margin-right: 0px;
        }
      }

      .channel-html .q15A022 {
        margin-bottom: 9px;
      }

      .channel-html .n818C47 {
        color: #6E6E73;
        margin-left: 0px;
      }

      .channel-html .j9A92B4 {
        margin-left: 0px;
        padding-left: 0px;
      }

      .channel-html .zF95362 {
        margin-bottom: 9px;
      }

      .channel-html .d64C6A7 {
        color: #6E6E73;
        margin-left: -0.5px;
        padding-right: 2px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d64C6A7 {
          padding-right: 0px;
        }
      }

      .channel-html .gA90E8D {
        margin-bottom: 9px;
      }

      .channel-html .m77C23C {
        color: #6E6E73;
        margin-left: -0.5px;
        padding-right: 2px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .m77C23C {
          padding-right: 0px;
        }
      }

      .channel-html .v809FBE {
        margin-bottom: 9px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .v809FBE {
          margin-top: 9px;
        }
      }

      .channel-html .a0E3BA6 {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      .channel-html .cD9DFE7 {
        margin-bottom: 9px;
      }

      .channel-html .f81D434 {
        color: #6E6E73;
        margin-left: -0.5px;
        padding-right: 28px;
      }

      @media only screen and (max-width: 1068px) {
        .channel-html .f81D434 {
          padding-right: 83px;
        }
      }

      @media only screen and (max-width: 734px) {
        .channel-html .f81D434 {
          padding-right: 9px;
        }
      }

      .channel-html .v8E49D3 {
        margin-bottom: 9px;
      }

      .channel-html .d8A313F {
        color: #6E6E73;
        margin-left: -0.5px;
      }

      @media only screen and (max-width: 734px) {
        .channel-html .d8A313F {
          padding-right: 9px;
        }
      }
    </style>
  </head>

  <body>
    <div class="channel-html">
      <!--BEGIN > SECTION 1 - HERO-->
      <div class="section pCE45DE">
        <div class="section-content">
          <div class="row t582A28">
            <!---->
            <div class="column large-12 rD91AAA">
              <div>
                <!---->
              </div>
              <div class="row r47EB0D">
                <!---->
                <div class="column p456268">
                  <div>
                    <!---->
                  </div>
                  <h2><img alt="MacBook Pro" src="./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_large_2x.png?1673036829674" sizes="(min-width: 1069px) 289px, (min-width: 735px) 248px, 150px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_large_2x.png?1673036829674 578w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_small_2x.png?1673036829678 300w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_medium.png?1673036829679 248w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_medium_2x.png?1673036829679 496w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_large.png?1673036829685 289w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_logo_small.png?1673036829688 150w" class="image v663730"></h2>
                </div>
              </div>
              <div class="row z3F269D">
                <!---->
                <div class="column large-12 medium-hide j512FF1">
                  <div>
                    <!---->
                  </div>
                  <div><img alt="Side view of two MacBook Pros that are halfway open." src="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_large_2x.png?1673036829682" sizes="(min-width: 1069px) 1243px, (min-width: 735px) 1243px, 1243px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_large.png?1673036829675 1243w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_small.png?1673036829676 1243w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_large_2x.png?1673036829682 2486w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_medium_2x.png?1673036829685 2486w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_small_2x.png?1673036829688 2486w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_l_medium.png?1673036829689 1243w" class="image double-invert v56646B"></div>
                  <figure aria-hidden="true" class="image image-hero_b_l vDD5221"></figure>
                </div>
                <div class="column large-12 large-hide medium-show small-hide t3322A2">
                  <div>
                    <!---->
                  </div>
                  <div><img alt="Side view of two MacBook Pros that are halfway open." src="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_large_2x.png?1673036829685" sizes="(min-width: 1069px) 727px, (min-width: 735px) 727px, 727px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_small.png?1673036829678 727w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_medium_2x.png?1673036829680 1454w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_small_2x.png?1673036829681 1454w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_large.png?1673036829681 727w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_medium.png?1673036829683 727w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_m_large_2x.png?1673036829685 1454w" class="image double-invert h4BAD0A"></div>
                  <figure aria-hidden="true" class="image image-hero_b_m v7E9ED6"></figure>
                </div>
                <div class="column large-12 large-hide small-show t0019C3">
                  <div>
                    <!---->
                  </div>
                  <div><img alt="Side view of two MacBook Pros that are halfway open." src="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_large_2x.png?1673036829680" sizes="(min-width: 1069px) 342px, (min-width: 735px) 342px, 342px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_medium.png?1673036829675 342w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_large.png?1673036829678 342w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_large_2x.png?1673036829680 684w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_medium_2x.png?1673036829682 684w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_small_2x.png?1673036829687 684w,./files/uploads/products/macbook-pro-m2-pro-chip/hero_a_s_small.png?1673036829687 342w" class="image double-invert b75D172"></div>
                  <figure aria-hidden="true" class="image image-hero_b_s y5E6AE1"></figure>
                </div>
              </div>
              <p class="copy cC7E9BF channel-custom-font-custom-80-headline-super">Mover. Maker. Boundary breaker.</p>
              <p class="copy helvetica-neue u0EA586 channel-custom-font-custom-24-intro-elevated">Supercharged by M2&nbsp;Pro or M2&nbsp;Max, MacBook&nbsp;Pro takes its power and efficiency further than ever. With all-day battery life, a stunning Liquid Retina XDR display and all the ports you need — this is the pro laptop you’ve been waiting for.</p>
              <!-- <p class="copy helvetica-neue x725E57 channel-custom-font-custom-17-body-tight">[Your message]</p>
             
              <a href="#" aria-label="Buy now, MacBook Pro 14- and 16-inch" class="button button-channel button-base s0A25DA" style="--focus-color: rgba(0, 125, 250, 0.6);"> Buy now </a> -->
              <!--END CHANNEL-BUTTON-->
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 1 - HERO-->
      <!--BEGIN > SECTION 2 - PERFORMANCE-->
      <div class="section t78B4CB">
        <div class="section-content">
          <div class="row l601C0E">
            <!---->
            <div class="column large-12 gF4EF1E">
              <div>
                <!---->
              </div>
              <div class="row b0E8197">
                <!---->
                <div class="column large-12 hA554BC">
                  <div>
                    <!---->
                  </div>
                  <h3 class="copy b4C67A4 channel-custom-font-custom-24-eyebrow">Performance</h3>
                  <p class="copy d163EFC channel-custom-font-custom-48-headline">Supercharged by M2&nbsp;Pro and M2&nbsp;Max.</p>
                  <p class="copy helvetica-neue tD0B8BA channel-custom-font-custom-21-intro">Tackle ambitious projects with the lightning-fast M2&nbsp;Pro, or crush the most graphics-heavy workflows with the extraordinary M2&nbsp;Max. The next generation of Apple&nbsp;silicon for pros brings more power and efficiency to push the boundaries of creativity.</p>
                </div>
              </div>
              <div class="row fFD821C">
                <!---->
                <div class="column large-6 small-12 jF27CED">
                  <div>
                    <!---->
                  </div>
                  <div class="row uC019C2">
                    <!---->
                    <div class="column large-12 s02EC49">
                      <div>
                        <!---->
                      </div>
                      <h4><img alt="Apple M2 Pro chip" src="./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_large_2x.png?1673036829674" sizes="(min-width: 1069px) 163px, (min-width: 735px) 164px, 163px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_large_2x.png?1673036829674 326w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_small_2x.png?1673036829676 326w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_medium.png?1673036829677 164w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_large.png?1673036829681 163w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_small.png?1673036829683 163w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_pro_medium_2x.png?1673036829687 328w" class="image aCF214A"></h4>
                    </div>
                  </div>
                  <div class="row bE69B45">
                    <!---->
                    <div class="column large-12 v71C486">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-performance_m2_blue_glow z6842CA"></figure>
                    </div>
                  </div>
                  <div class="row x2C7CFF">
                    <!---->
                    <div class="column large-12 h5DA1C3">
                      <div>
                        <!---->
                      </div>
                      <ul role="list" aria-label="M2 Pro chip features" class="list u1535E0">
                        <li role="listitem" class="list-item zC2B99E">
                          <div class="row sC631D1">
                            <!---->
                            <div class="column large-12 p542702">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue zBDB507 channel-custom-font-custom-19-touts">Up to 12-core CPU</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item yC2ACF7">
                          <div class="row xF93450">
                            <!---->
                            <div class="column large-12 o7E5655">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue gD9701D channel-custom-font-custom-19-touts">Up to 19-core GPU</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item z4E5380">
                          <div class="row a5ABEEC">
                            <!---->
                            <div class="column large-12 nEFC138">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue i81B9BD channel-custom-font-custom-19-touts">Up to 32GB unified memory</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item i4D7C16">
                          <div class="row y5E5588">
                            <!---->
                            <div class="column large-12 r8CB23C">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue jE0DB6A channel-custom-font-custom-19-touts">200GB/s memory bandwidth</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="column large-6 small-12 eF728E0">
                  <div>
                    <!---->
                  </div>
                  <div class="row fF5A073">
                    <!---->
                    <div class="column large-12 c0D3E23">
                      <div>
                        <!---->
                      </div>
                      <h4><img alt="Apple M2 Max chip" src="./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_large_2x.png?1673036829685" sizes="(min-width: 1069px) 163px, (min-width: 735px) 164px, 163px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_medium_2x.png?1673036829677 328w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_small_2x.png?1673036829683 326w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_large_2x.png?1673036829685 326w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_large.png?1673036829686 163w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_small.png?1673036829686 163w,./files/uploads/products/macbook-pro-m2-pro-chip/performance_m2_max_medium.png?1673036829687 164w" class="image x86EE18"></h4>
                    </div>
                  </div>
                  <div class="row p1B0457">
                    <!---->
                    <div class="column large-12 e26B110">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-performance_m2_purple_glow h783020"></figure>
                    </div>
                  </div>
                  <div class="row e36D031">
                    <!---->
                    <div class="column large-12 hDEE0A2">
                      <div>
                        <!---->
                      </div>
                      <ul role="list" aria-label="M2 Max chip features" class="list aEEC3D8">
                        <li role="listitem" class="list-item p99A8D5">
                          <div class="row r331E0B">
                            <!---->
                            <div class="column large-12 t684D46">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue u2D53C0 channel-custom-font-custom-19-touts">12-core CPU</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item e770DE5">
                          <div class="row b0B9673">
                            <!---->
                            <div class="column large-12 v7D13EA">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue xE02CC0 channel-custom-font-custom-19-touts">Up to 38-core GPU</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item p4823AC">
                          <div class="row w32199A">
                            <!---->
                            <div class="column large-12 c2CE5C2">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue d849F89 channel-custom-font-custom-19-touts">Up to 96GB unified memory</p>
                            </div>
                          </div>
                        </li>
                        <li role="listitem" class="list-item b7E8AE1">
                          <div class="row v2D2DEC">
                            <!---->
                            <div class="column large-12 eF38FF3">
                              <div>
                                <!---->
                              </div>
                              <p class="copy helvetica-neue sF9725F channel-custom-font-custom-19-touts">400GB/s memory bandwidth</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row uF28A80">
                <!---->
                <div class="column large-12 z134F6F">
                  <div>
                    <!---->
                  </div>
                  <div class="key-line d30A22D">
                    <div class="liner"></div>
                  </div>
                </div>
                <div class="column large-6 small-12 w135059">
                  <div>
                    <!---->
                  </div>
                  <div class="row zB1DBBC">
                    <!---->
                    <div class="column large-7 medium-5 small-3 q34C58C">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-performance_icon_battery f1B09EA"></figure>
                    </div>
                    <div class="column large-5 medium-7 small-9 w4A346F">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue o93DF6F channel-custom-font-custom-14-body-reduced">Up to 22 hours battery life<span aria-hidden="true" style="top: -0.4em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                    </div>
                  </div>
                </div>
                <div class="column large-6 small-12 w6FD54F">
                  <div>
                    <!---->
                  </div>
                  <div class="row j991F86">
                    <!---->
                    <div class="column large-2 small-3 fAB71E7">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-performance_icon_swirl xD1D13A"></figure>
                    </div>
                    <div class="column large-10 small-9 m266136">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue eCD11DC channel-custom-font-custom-14-body-reduced">Active cooling sustains blazing-fast performance</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 2 - PERFORMANCE-->
      <!--BEGIN > SECTION 3 - DISPLAY-->
      <div class="section mC5FDF8">
        <div class="section-content">
          <div class="row wF86376">
            <!---->
            <div class="column large-6 small-12 t2B0C4B">
              <div>
                <!---->
              </div>
              <h3 class="copy n555E46 channel-custom-font-custom-24-eyebrow">Display</h3>
              <p class="copy f82C027 channel-custom-font-custom-48-headline">Feast your eyes on XDR.</p>
            </div>
            <div class="column large-6 small-12 e9EFB37">
              <div>
                <!---->
              </div>
              <p class="copy helvetica-neue d60F7AF channel-custom-font-custom-21-intro">The ultimate display for creators on the&nbsp;move. With Extreme Dynamic Range, incredible contrast and true-to-life colours.</p>
            </div>
            <div class="column large-6 large-hide small-12 small-show y48DE05">
              <div>
                <!---->
              </div>
              <div><img alt="A colorful photographic image of a person showcases the brilliance of the MacBook Pro's XDR display." src="./files/uploads/products/macbook-pro-m2-pro-chip/display_s_large_2x.png?1673036829687" sizes="(min-width: 1069px) 266px, (min-width: 735px) 266px, 266px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/display_s_small_2x.png?1673036829675 532w,./files/uploads/products/macbook-pro-m2-pro-chip/display_s_small.png?1673036829677 266w,./files/uploads/products/macbook-pro-m2-pro-chip/display_s_medium_2x.png?1673036829677 532w,./files/uploads/products/macbook-pro-m2-pro-chip/display_s_large.png?1673036829679 266w,./files/uploads/products/macbook-pro-m2-pro-chip/display_s_large_2x.png?1673036829687 532w,./files/uploads/products/macbook-pro-m2-pro-chip/display_s_medium.png?1673036829687 266w" class="image double-invert nFF1753"></div>
            </div>
          </div>
          <div class="row z4CD272">
            <!---->
            <div class="column large-6 small-12 small-hide xBE365B">
              <div>
                <!---->
              </div>
              <div><img alt="A colorful photographic image of a person showcases the brilliance of the MacBook Pro's XDR display." src="./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_large_2x.png?1673036829684" sizes="(min-width: 1069px) 470px, (min-width: 735px) 309px, 309px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_medium.png?1673036829678 309w,./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_large.png?1673036829681 470w,./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_small_2x.png?1673036829682 618w,./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_small.png?1673036829683 309w,./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_large_2x.png?1673036829684 940w,./files/uploads/products/macbook-pro-m2-pro-chip/display_lm_medium_2x.png?1673036829685 618w" class="image double-invert oEDA2E1"></div>
            </div>
            <div class="column large-6 small-12 a2D85B7">
              <div>
                <!---->
              </div>
              <div class="row d208585">
                <!---->
                <div class="column large-12 a9C0933">
                  <div>
                    <!---->
                  </div>
                  <div class="row mE4DC00">
                    <!---->
                    <div class="column large-2 c302F56">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-display_icon_brightness t71EE19"></figure>
                    </div>
                    <div class="column large-10 i719CFA">
                      <div>
                        <!---->
                      </div>
                      <p class="copy hE44983 channel-custom-font-custom-34-badges">1,000</p>
                      <p class="copy helvetica-neue d7AF2C0 channel-custom-font-custom-14-body-reduced">nits sustained brightness</p>
                    </div>
                  </div>
                  <div class="row j97D694">
                    <!---->
                    <div class="column large-2 f6403B9">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-display_icon_peak q941075"></figure>
                    </div>
                    <div class="column large-10 x991590">
                      <div>
                        <!---->
                      </div>
                      <p class="copy q82611A channel-custom-font-custom-34-badges">1,600</p>
                      <p class="copy helvetica-neue wDDFA4A channel-custom-font-custom-14-body-reduced">nits peak brightness<span aria-hidden="true" style="top: -0.4em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                    </div>
                  </div>
                  <div class="row r113FAD">
                    <!---->
                    <div class="column large-2 z4651E0">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-display_icon_contrast x743369"></figure>
                    </div>
                    <div class="column large-10 b615055">
                      <div>
                        <!---->
                      </div>
                      <p class="copy j8FBDFC channel-custom-font-custom-34-badges">10,00,000<span style="top: 0.0em; position: relative; vertical-align: top;" class="">:</span>1</p>
                      <p class="copy helvetica-neue gC9CD8F channel-custom-font-custom-14-body-reduced">contrast ratio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 3 - DISPLAY-->
      <!--BEGIN > SECTION 4 - CAMERA, MICS, AND SPEAKERS-->
      <div class="section u878B23">
        <div class="section-content">
          <div class="row l932B65">
            <!---->
            <div class="column large-6 small-12 aBA1C16">
              <div>
                <!---->
              </div>
              <h3 class="copy x176075 channel-custom-font-custom-24-eyebrow">Camera, Mics and Speakers</h3>
              <p class="copy vAB2CA0 channel-custom-font-custom-48-headline">Far and away your sharpest look.</p>
              <p class="copy helvetica-neue v5EBBE8 channel-custom-font-custom-21-intro">Look sharp and sound clear anywhere with better performance in low light, minimal background noise and cinematic sound.</p>
              <div class="row fC48268">
                <!---->
                <div class="column large-12 large-hide small-show v4A578A">
                  <div>
                    <!---->
                  </div>
                  <div><img alt="Showcasing FaceTime video call on the MacBook Pro." src="./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_large_2x.png?1673036829685" sizes="(min-width: 1069px) 322px, (min-width: 735px) 322px, 322px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_medium_2x.png?1673036829680 644w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_large.png?1673036829682 322w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_medium.png?1673036829682 322w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_small_2x.png?1673036829683 644w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_large_2x.png?1673036829685 644w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_s_small.png?1673036829686 322w" class="image double-invert eCF264A"></div>
                </div>
              </div>
              <div class="row c007CED">
                <!---->
                <div class="column large-12 aA96D44">
                  <div>
                    <!---->
                  </div>
                  <div class="row a79C6D4">
                    <!---->
                    <div class="column large-1 l68A8C3">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-camera_icon_facetime r5C2E72"></figure>
                    </div>
                    <div class="column large-11 mD7ECEE">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue aB2FDB8 channel-custom-font-custom-14-keyboard-callouts">1080p FaceTime HD camera</p>
                    </div>
                  </div>
                  <div class="row gA886D2">
                    <!---->
                    <div class="column large-1 y5AC69F">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-camera_icon_mic f4E65E8"></figure>
                    </div>
                    <div class="column large-11 q93BF10">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue xE62C5E channel-custom-font-custom-14-keyboard-callouts">Studio-quality three-mic array</p>
                    </div>
                  </div>
                  <div class="row vEBE0D2">
                    <!---->
                    <div class="column large-1 sCB96A7">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-camera_icon_spatial kDA158F"></figure>
                    </div>
                    <div class="column large-11 gC36407">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue yC8C7DB channel-custom-font-custom-14-keyboard-callouts">Six-speaker sound system with Spatial&nbsp;Audio</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column large-6 medium-hide small-12 small-hide k1514C1">
              <div>
                <!---->
              </div>
              <div><img alt="Showcasing FaceTime video call on the MacBook Pro." src="./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_large_2x.png?1673036829690" sizes="(min-width: 1069px) 562px, (min-width: 735px) 562px, 562px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_small.png?1673036829678 562w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_large.png?1673036829679 562w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_medium.png?1673036829679 562w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_small_2x.png?1673036829686 1124w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_medium_2x.png?1673036829689 1124w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_l_large_2x.png?1673036829690 1124w" class="image double-invert v4770FF"></div>
            </div>
            <div class="column large-6 large-hide medium-show small-12 small-hide fC29DEF">
              <div>
                <!---->
              </div>
              <div><img alt="Showcasing FaceTime video call on the MacBook Pro." src="./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_large_2x.png?1673036829674" sizes="(min-width: 1069px) 371px, (min-width: 735px) 371px, 371px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_large_2x.png?1673036829674 742w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_small_2x.png?1673036829684 742w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_large.png?1673036829686 371w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_medium.png?1673036829688 371w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_medium_2x.png?1673036829689 742w,./files/uploads/products/macbook-pro-m2-pro-chip/camera_m_small.png?1673036829690 371w" class="image double-invert v96CC88"></div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 4 - CAMERA, MICS, AND SPEAKERS-->
      <!--BEGIN > SECTION 5 - CONNECTIVITY-->
      <div class="section u43550D">
        <div class="section-content">
          <div class="row u9BE054">
            <!---->
            <div class="column large-12 tA48119">
              <div>
                <!---->
              </div>
              <div class="row aBC82FA">
                <!---->
                <div class="column large-7 medium-6 small-12 q878CD2">
                  <div>
                    <!---->
                  </div>
                  <h3 class="copy d7AC26B channel-custom-font-custom-24-eyebrow">Connectivity</h3>
                  <p class="copy gDFFF88 channel-custom-font-custom-48-headline">Plug and play.</p>
                  <p class="copy helvetica-neue gE4B91F channel-custom-font-custom-21-intro">Use a wide array of accessories, quickly transfer footage from an SDXC card or connect to high-resolution displays.</p>
                </div>
                <div class="column large-5 medium-6 small-12 h7A6D90">
                  <div>
                    <!---->
                  </div>
                  <ul role="list" aria-label="connectivity features" class="list vF6DD04">
                    <li role="listitem" class="list-item n65867D">
                      <div class="row t483FEB">
                        <!---->
                        <div class="column large-2 l6938D2">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_wifi jDDDA89"></figure>
                        </div>
                        <div class="column large-10 sDC2234">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue eE20E94 channel-custom-font-custom-14-keyboard-callouts">Wi-Fi 6E<span aria-hidden="true" style="top: -0.3em; position: relative; font-size: .6em;vertical-align: top;">◊</span><span class="visuallyhidden">Refer to legal disclaimers</span></p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item eE26821">
                      <div class="row lF5D0F3">
                        <!---->
                        <div class="column large-2 cA50FE2">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_card zC85EFB"></figure>
                        </div>
                        <div class="column large-10 j295C70">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue m5D986F channel-custom-font-custom-14-keyboard-callouts">SDXC card slot</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item d042B97">
                      <div class="row q0315E2">
                        <!---->
                        <div class="column large-2 bE40493">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_thunderbolt lED21A6"></figure>
                        </div>
                        <div class="column large-10 fB523A4">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue cE1F34B channel-custom-font-custom-14-keyboard-callouts">Three Thunderbolt 4 ports</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item kD63C89">
                      <div class="row eFE7E41">
                        <!---->
                        <div class="column large-2 aA6C3CC">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_headphone h337193"></figure>
                        </div>
                        <div class="column large-10 oBA4AC7">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue k13D4A5 channel-custom-font-custom-14-keyboard-callouts">Headphone jack</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item oD89280">
                      <div class="row sF656DB">
                        <!---->
                        <div class="column large-2 zB9A2D7">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_hdmi h60A999"></figure>
                        </div>
                        <div class="column large-10 lDB6252">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue d710C39 channel-custom-font-custom-14-keyboard-callouts">HDMI port</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item g7A1271">
                      <div class="row f918317">
                        <!---->
                        <div class="column large-2 t26CEB8">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-connectivity_icon_magsafe eF00A12"></figure>
                        </div>
                        <div class="column large-10 e17AFCA">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue w4E4899 channel-custom-font-custom-14-keyboard-callouts">MagSafe 3 charging port</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column large-12 d005D95">
              <div>
                <!---->
              </div>
              <div><img alt="Side view of the MacBook Pro, showing the SDXC card slot, three Thunderbolt 4 ports, HDMI port, MagSafe 3 charging port, and  headphone jack." src="./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_large_2x.png?1673036829675" sizes="(min-width: 1069px) 2223px, (min-width: 735px) 1638px, 803px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_medium.png?1673036829675 1638w,./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_large_2x.png?1673036829675 4446w,./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_small.png?1673036829678 803w,./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_medium_2x.png?1673036829680 3276w,./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_large.png?1673036829685 2223w,./files/uploads/products/macbook-pro-m2-pro-chip/connectivity_small_2x.png?1673036829688 1606w" class="image double-invert x566CC1"></div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 5 - CONNECTIVITY-->
      <!--BEGIN > SECTION 6 - MAGIC KEYBOARD-->
      <div class="section t1369BD">
        <div class="section-content">
          <div class="row h4108A1">
            <!---->
            <div class="column large-7 medium-6 small-0 hD40DCD">
              <div>
                <!---->
              </div>
            </div>
            <div class="column large-5 medium-6 small-12 f854F69">
              <div>
                <!---->
              </div>
              <h3 class="copy gD9DF9D channel-custom-font-custom-24-eyebrow">Magic Keyboard</h3>
              <p class="copy c96DDD8 channel-custom-font-custom-48-headline">The magic touch.</p>
              <p class="copy helvetica-neue k2A5D27 channel-custom-font-custom-21-intro">Type on a comfortable, quiet keyboard, with a full-height function key row and Touch ID for a quicker, more secure way to unlock your Mac and sign in to apps and sites.</p>
            </div>
          </div>
          <div class="row lFBED12">
            <!---->
            <div class="column large-7 medium-6 medium-hide small-12 small-hide i5D56F6">
              <div>
                <!---->
              </div>
              <div><img alt="Pointer showing the Touch ID key on the Magic Keyboard." src="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_large_2x.png?1673036829687" sizes="(min-width: 1069px) 1558px, (min-width: 735px) 1558px, 1558px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_medium_2x.png?1673036829673 3116w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_medium.png?1673036829681 1558w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_small.png?1673036829681 1558w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_large.png?1673036829682 1558w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_small_2x.png?1673036829686 3116w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_l_large_2x.png?1673036829687 3116w" class="image double-invert z2C955E"></div>
            </div>
            <div class="column large-5 medium-6 small-12 eFFCD08">
              <div>
                <!---->
              </div>
              <div class="row p11B3A7">
                <!---->
                <div class="column large-12 large-hide medium-hide small-show n43A50A">
                  <div>
                    <!---->
                  </div>
                  <div><img alt="Top view of Magic Keyboard with Touch ID." src="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_large_2x.png?1673036829679" sizes="(min-width: 1069px) 540px, (min-width: 735px) 540px, 540px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_medium_2x.png?1673036829676 1080w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_medium.png?1673036829678 540w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_large_2x.png?1673036829679 1080w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_small_2x.png?1673036829680 1080w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_small.png?1673036829681 540w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_s_large.png?1673036829687 540w" class="image double-invert pDD3019"></div>
                </div>
                <div class="column large-12 large-hide small-show s61C219">
                  <div>
                    <!---->
                  </div>
                  <div class="row c48B5C4">
                    <!---->
                    <div class="column large-1 small-2 small-show g64AA71">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-keyboard_icon_touch_id t4825F5"></figure>
                    </div>
                    <div class="column large-11 small-10 w09B6EB">
                      <div>
                        <!---->
                      </div>
                      <h4 id="id1" class="copy helvetica-neue z87FDDC channel-custom-font-custom-14-keyboard-callouts"><span style="font-weight: 500;">Touch ID</span></h4>
                    </div>
                  </div>
                  <div class="key-line rC11C42">
                    <div class="liner"></div>
                  </div>
                  <ul role="list" aria-labelledby="id1" class="list l950BB3">
                    <li role="listitem" class="list-item oDAF58E">
                      <div class="row uC1A541">
                        <!---->
                        <div class="column large-2 mE9C02B">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_unlock a9789FA"></figure>
                        </div>
                        <div class="column large-10 b370FB1">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue g2213C6 channel-custom-font-custom-14-keyboard-callouts">Unlock your Mac</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item k3B579D">
                      <div class="row oB1DDB5">
                        <!---->
                        <div class="column large-3 medium-2 l6B2143">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_passkey b8AD1F3"></figure>
                        </div>
                        <div class="column large-9 medium-10 zA4FBC6">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue uF82A07 channel-custom-font-custom-14-keyboard-callouts">Sign in to apps and websites with passkeys</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item oD9B06D">
                      <div class="row aF19A83">
                        <!---->
                        <div class="column large-2 aA5FA18">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_apple_pay w1DA787"></figure>
                        </div>
                        <div class="column large-10 r559915">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue p8ECDEB channel-custom-font-custom-14-keyboard-callouts">Make purchases on the&nbsp;App&nbsp;Store</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item r60742F">
                      <div class="row e3356FD">
                        <!---->
                        <div class="column large-3 medium-2 yE62750">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_apple_tv aCFFD26"></figure>
                        </div>
                        <div class="column large-9 medium-10 r462857">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue g6A2852 channel-custom-font-custom-14-keyboard-callouts">Make purchases on the Apple TV app</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row small-hide l614236">
                <!---->
                <div class="column large-12 iAFEF07">
                  <div>
                    <!---->
                  </div>
                  <div class="row q5460F4">
                    <!---->
                    <div class="column large-1 small-hide e0309F6">
                      <div>
                        <!---->
                      </div>
                      <figure aria-hidden="true" class="image image-keyboard_icon_touch_id x5DDA5A"></figure>
                    </div>
                    <div class="column large-11 small-hide cCE3CA7">
                      <div>
                        <!---->
                      </div>
                      <h4 id="id1" class="copy helvetica-neue n318572 channel-custom-font-custom-14-keyboard-callouts"><span style="font-weight: 500;">Touch ID</span></h4>
                    </div>
                  </div>
                  <div class="key-line i9FDD76">
                    <div class="liner"></div>
                  </div>
                  <ul role="list" aria-labelledby="id1" class="list i26C662">
                    <li role="listitem" class="list-item n18CFBD">
                      <div class="row l1335FB">
                        <!---->
                        <div class="column large-2 medium-2 tF13FC1">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_unlock vB21AC5"></figure>
                        </div>
                        <div class="column large-10 h06274F">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue p03B483 channel-custom-font-custom-14-keyboard-callouts">Unlock your Mac</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item oF605E6">
                      <div class="row m19B5D3">
                        <!---->
                        <div class="column large-2 medium-2 z72A9DC">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_passkey b521762"></figure>
                        </div>
                        <div class="column large-10 medium-10 h09998A">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue x503818 channel-custom-font-custom-14-keyboard-callouts">Sign in to apps and websites with passkeys</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item mB3B838">
                      <div class="row m599B8C">
                        <!---->
                        <div class="column large-2 wA45F3B">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_apple_pay l83D062"></figure>
                        </div>
                        <div class="column large-10 eB530B7">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue r95B93A channel-custom-font-custom-14-keyboard-callouts">Make purchases on the App Store</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item h14364D">
                      <div class="row v81DA5D">
                        <!---->
                        <div class="column large-2 medium-2 v8CCE7A">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-keyboard_icon_apple_tv j9BD80D"></figure>
                        </div>
                        <div class="column large-10 medium-10 q465A7C">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue bC7F188 channel-custom-font-custom-14-keyboard-callouts">Make purchases on the Apple TV app</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="column large-7 large-hide medium-6 medium-show small-12 small-hide z170348">
              <div>
                <!---->
              </div>
              <div><img alt="Pointer showing the Touch ID key on the Magic Keyboard." src="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_large_2x.png?1673036829688" sizes="(min-width: 1069px) 517px, (min-width: 735px) 517px, 517px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_small_2x.png?1673036829674 1034w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_medium_2x.png?1673036829674 1034w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_medium.png?1673036829677 517w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_large.png?1673036829678 517w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_small.png?1673036829679 517w,./files/uploads/products/macbook-pro-m2-pro-chip/keyboard_m_large_2x.png?1673036829688 1034w" class="image double-invert wB46539"></div>
            </div>
          </div>
        </div>
      </div>
      <!--END > SECTION 6 - MAGIC KEYBOARD-->
      <!--BEGIN > FLEX 7 - WHY MAC-->
      <div class="section q9ED72F">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed i4E6C6E">
            <!---->
            <div class="column large-12 h724CB4">
              <div>
                <!---->
              </div>
              <h2 class="copy zBBD217 channel-custom-font-custom-21-eyebrow-reduced">Why Mac</h2>
              <p class="copy dC5BA64 channel-custom-font-custom-40-headline-reduced">There’s more to love in every Mac.</p>
            </div>
            <div class="column large-4 small-12 sF38496">
              <div>
                <!---->
              </div>
              <figure aria-hidden="true" class="image image-why_icon_performance dDA7FD8"></figure>
              <h3 class="copy helvetica-neue w324F14 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is powerful. </h3>
              <p class="copy helvetica-neue j0BE4DA channel-custom-font-custom-17-body-reduced-flex">Apple silicon and macOS are engineered together to deliver incredible performance and phenomenal battery life.</p>
            </div>
            <div class="column large-4 small-12 c233635">
              <div>
                <!---->
              </div>
              <figure aria-hidden="true" class="image image-why_icon_connectivity k3E74A0"></figure>
              <h3 class="copy helvetica-neue s5B68BE channel-custom-font-custom-17-body-reduced-flex-subhead">Everything works together. </h3>
              <p class="copy helvetica-neue mB555BE channel-custom-font-custom-17-body-reduced-flex">When you combine Mac with other Apple devices, connectivity is seamless and effortless.</p>
            </div>
            <div class="column large-4 small-12 f6D5CD4">
              <div>
                <!---->
              </div>
              <figure aria-hidden="true" class="image image-why_icon_icloud dD3FDBE"></figure>
              <h3 class="copy helvetica-neue p854421 channel-custom-font-custom-17-body-reduced-flex-subhead">Everything is easy. </h3>
              <p class="copy helvetica-neue z411273 channel-custom-font-custom-17-body-reduced-flex">Starting projects is simple. Sign in to your iCloud account to access your photos, videos and music.</p>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 7 - WHY MAC-->
      <!--BEGIN > FLEX 8 - COMPARE-->
      <div class="section r2999FC">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed oC7868E">
            <!---->
            <div class="column large-12 rB03E7E">
              <div>
                <!---->
              </div>
              <h2 class="copy gB660DD channel-custom-font-custom-21-eyebrow-reduced">Compare</h2>
              <h3 class="copy wECFB8B channel-custom-font-custom-40-headline-reduced">Find the right Mac laptop for you.</h3>
            </div>
            <div class="tA28B5F" style="--focus-color: rgba(0, 125, 250, 0.6);">
              <div data-export-class="channel-compare--hidden" data-channel-html-compare="{&quot;order&quot;:{&quot;small&quot;:[3,4,3,1,2],&quot;medium&quot;:[2,3,4,0,1],&quot;large&quot;:[1,0,2,3,4],&quot;max&quot;:{&quot;large&quot;:5,&quot;medium&quot;:3,&quot;small&quot;:2}},&quot;useStatic&quot;:false,&quot;selectorEls&quot;:&quot;[selector-dropdown]&quot;,&quot;labelEls&quot;:&quot;[compare-column-interactive]&quot;,&quot;swapEls&quot;:&quot;[data-column-group]&quot;,&quot;headerEl&quot;:&quot;[compare-header-row]&quot;,&quot;staticEl&quot;:&quot;[compare-column-header-static]&quot;}" class="channel-compare channel-compare--hidden">
                <div class="section section-compare-table">
                  <div class="compare-wrapper">
                    <div role="table" aria-label="Compare models" class="compare compare-table with-fullwidthrowheader compare-column-range-large-5 compare-column-range-medium-3 compare-column-range-small-2">
                      <div>
                        <div role="rowgroup">
                          <div role="row" compare-header-row="" class="compare-row visuallyhidden">
                            <div role="columnheader">&nbsp;</div>
                            <div role="columnheader">MacBook Air (M1)</div>
                            <div role="columnheader">MacBook Air (M2)</div>
                            <div role="columnheader">MacBook Pro (M2)</div>
                            <div role="columnheader">MacBook Pro (M2 Pro or M2 Max)</div>
                            <div role="columnheader">MacBook Pro (M2 Pro or M2 Max)</div>
                          </div>
                        </div>
                        <div role="rowgroup" class="compare selector-table with-fullwidthrowheader">
                          <div id="static-compare-header" role="row" data-column-group="" class="compare-row" style="display: none;">
                            <div role="rowheader" aria-rowspan="0" class="compare-rowheader" style="order: unset; visibility: hidden; display: none;">
                              <div class="visuallyhidden">Choose models to compare.</div>
                            </div>
                            <div id="hidden-columnheader" role="columnheader" class="visuallyhidden">&nbsp;</div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-0 first-child">
                              <div index="0">MacBook Air (M2)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-1">
                              <div index="1">MacBook Air (M1)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-2">
                              <div index="2">MacBook Pro (M2)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-3">
                              <div index="3">MacBook Pro (M2 Pro or M2 Max)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-4">
                              <div index="4">MacBook Pro (M2 Pro or M2 Max)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-5">
                              <div index="5">MacBook Air (Intel, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-6">
                              <div index="6">MacBook Air (Intel, 2017)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-7">
                              <div index="7">MacBook Pro (M1, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-8">
                              <div index="8">MacBook Pro (Intel, two ports, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-9">
                              <div index="9">MacBook Pro (Intel, four ports, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-10">
                              <div index="10">MacBook Pro (M1 Pro or M1 Max, 2021)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-11">
                              <div index="11">MacBook Pro (M1 Pro or M1 Max, 2021)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-12">
                              <div index="12">MacBook Pro (Intel, 2019)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-13">
                              <div index="13">iMac (M1, two ports)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-14">
                              <div index="14">iMac (M1, four ports)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-15">
                              <div index="15">Mac mini (M2 or M2 Pro)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-16">
                              <div index="16">Mac Studio (M1 Max or M1 Ultra)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-17">
                              <div index="17">Mac Pro (Intel)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-18">
                              <div index="18">iMac (Intel, 2019)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-19">
                              <div index="19">iMac (Intel, 2017)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-20">
                              <div index="20">iMac (Intel, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-21">
                              <div index="21">iMac Pro (Intel, 2017)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-22">
                              <div index="22">Mac mini (M1, 2020)</div>
                            </div>
                            <div role="columnheader" compare-column-header-static="" class="static-dropdown compare-column compare-static-23">
                              <div index="23">Mac mini (Intel, 2018)</div>
                            </div>
                          </div>
                          <div id="interactive-compare-header" role="row" class="compare-row">
                            <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                              <div class="visuallyhidden">Choose models to compare.</div>
                            </div>
                            <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column compare-column-0  first-child">
                              <form autocomplete="off" class="selector-element"><label for="0" class="visuallyhidden">Select a model</label><select id="0" selector-dropdown="true" class="selector-dropdown">
                                  <optgroup label="Laptops">
                                    <option value="0">MacBook Air (M2)</option>
                                    <option value="1" aria-selected="true" selected="true">MacBook Air (M1)</option>
                                    <option value="2">MacBook Pro (M2)</option>
                                    <option value="3">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="4">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="5">MacBook Air (Intel, 2020)</option>
                                    <option value="6">MacBook Air (Intel, 2017)</option>
                                    <option value="7">MacBook Pro (M1, 2020)</option>
                                    <option value="8">MacBook Pro (Intel, two ports, 2020)</option>
                                    <option value="9">MacBook Pro (Intel, four ports, 2020)</option>
                                    <option value="10">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="11">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="12">MacBook Pro (Intel, 2019)</option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </optgroup>
                                  <optgroup label="Desktops">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="13">iMac (M1, two ports)</option>
                                    <option value="14">iMac (M1, four ports)</option>
                                    <option value="15">Mac mini (M2 or M2 Pro)</option>
                                    <option value="16">Mac Studio (M1 Max or M1 Ultra)</option>
                                    <option value="17">Mac Pro (Intel)</option>
                                    <option value="18">iMac (Intel, 2019)</option>
                                    <option value="19">iMac (Intel, 2017)</option>
                                    <option value="20">iMac (Intel, 2020)</option>
                                    <option value="21">iMac Pro (Intel, 2017)</option>
                                    <option value="22">Mac mini (M1, 2020)</option>
                                    <option value="23">Mac mini (Intel, 2018)</option>
                                    <!---->
                                  </optgroup>
                                </select><span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span></form>
                            </div>
                            <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column compare-column-1 ">
                              <form autocomplete="off" class="selector-element"><label for="1" class="visuallyhidden">Select a model</label><select id="1" selector-dropdown="true" class="selector-dropdown">
                                  <optgroup label="Laptops">
                                    <option value="0" aria-selected="true" selected="true">MacBook Air (M2)</option>
                                    <option value="1">MacBook Air (M1)</option>
                                    <option value="2">MacBook Pro (M2)</option>
                                    <option value="3">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="4">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="5">MacBook Air (Intel, 2020)</option>
                                    <option value="6">MacBook Air (Intel, 2017)</option>
                                    <option value="7">MacBook Pro (M1, 2020)</option>
                                    <option value="8">MacBook Pro (Intel, two ports, 2020)</option>
                                    <option value="9">MacBook Pro (Intel, four ports, 2020)</option>
                                    <option value="10">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="11">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="12">MacBook Pro (Intel, 2019)</option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </optgroup>
                                  <optgroup label="Desktops">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="13">iMac (M1, two ports)</option>
                                    <option value="14">iMac (M1, four ports)</option>
                                    <option value="15">Mac mini (M2 or M2 Pro)</option>
                                    <option value="16">Mac Studio (M1 Max or M1 Ultra)</option>
                                    <option value="17">Mac Pro (Intel)</option>
                                    <option value="18">iMac (Intel, 2019)</option>
                                    <option value="19">iMac (Intel, 2017)</option>
                                    <option value="20">iMac (Intel, 2020)</option>
                                    <option value="21">iMac Pro (Intel, 2017)</option>
                                    <option value="22">Mac mini (M1, 2020)</option>
                                    <option value="23">Mac mini (Intel, 2018)</option>
                                    <!---->
                                  </optgroup>
                                </select><span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span></form>
                            </div>
                            <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column compare-column-2 ">
                              <form autocomplete="off" class="selector-element"><label for="2" class="visuallyhidden">Select a model</label><select id="2" selector-dropdown="true" class="selector-dropdown">
                                  <optgroup label="Laptops">
                                    <option value="0">MacBook Air (M2)</option>
                                    <option value="1">MacBook Air (M1)</option>
                                    <option value="2" aria-selected="true" selected="true">MacBook Pro (M2)</option>
                                    <option value="3">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="4">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="5">MacBook Air (Intel, 2020)</option>
                                    <option value="6">MacBook Air (Intel, 2017)</option>
                                    <option value="7">MacBook Pro (M1, 2020)</option>
                                    <option value="8">MacBook Pro (Intel, two ports, 2020)</option>
                                    <option value="9">MacBook Pro (Intel, four ports, 2020)</option>
                                    <option value="10">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="11">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="12">MacBook Pro (Intel, 2019)</option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </optgroup>
                                  <optgroup label="Desktops">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="13">iMac (M1, two ports)</option>
                                    <option value="14">iMac (M1, four ports)</option>
                                    <option value="15">Mac mini (M2 or M2 Pro)</option>
                                    <option value="16">Mac Studio (M1 Max or M1 Ultra)</option>
                                    <option value="17">Mac Pro (Intel)</option>
                                    <option value="18">iMac (Intel, 2019)</option>
                                    <option value="19">iMac (Intel, 2017)</option>
                                    <option value="20">iMac (Intel, 2020)</option>
                                    <option value="21">iMac Pro (Intel, 2017)</option>
                                    <option value="22">Mac mini (M1, 2020)</option>
                                    <option value="23">Mac mini (Intel, 2018)</option>
                                    <!---->
                                  </optgroup>
                                </select><span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span></form>
                            </div>
                            <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column compare-column-3 ">
                              <form autocomplete="off" class="selector-element"><label for="3" class="visuallyhidden">Select a model</label><select id="3" selector-dropdown="true" class="selector-dropdown">
                                  <optgroup label="Laptops">
                                    <option value="0">MacBook Air (M2)</option>
                                    <option value="1">MacBook Air (M1)</option>
                                    <option value="2">MacBook Pro (M2)</option>
                                    <option value="3" aria-selected="true" selected="true">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="4">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="5">MacBook Air (Intel, 2020)</option>
                                    <option value="6">MacBook Air (Intel, 2017)</option>
                                    <option value="7">MacBook Pro (M1, 2020)</option>
                                    <option value="8">MacBook Pro (Intel, two ports, 2020)</option>
                                    <option value="9">MacBook Pro (Intel, four ports, 2020)</option>
                                    <option value="10">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="11">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="12">MacBook Pro (Intel, 2019)</option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </optgroup>
                                  <optgroup label="Desktops">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="13">iMac (M1, two ports)</option>
                                    <option value="14">iMac (M1, four ports)</option>
                                    <option value="15">Mac mini (M2 or M2 Pro)</option>
                                    <option value="16">Mac Studio (M1 Max or M1 Ultra)</option>
                                    <option value="17">Mac Pro (Intel)</option>
                                    <option value="18">iMac (Intel, 2019)</option>
                                    <option value="19">iMac (Intel, 2017)</option>
                                    <option value="20">iMac (Intel, 2020)</option>
                                    <option value="21">iMac Pro (Intel, 2017)</option>
                                    <option value="22">Mac mini (M1, 2020)</option>
                                    <option value="23">Mac mini (Intel, 2018)</option>
                                    <!---->
                                  </optgroup>
                                </select><span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span></form>
                            </div>
                            <div role="cell" compare-column-interactive="true" class="compare-column-interactive compare-column compare-column-4 ">
                              <form autocomplete="off" class="selector-element"><label for="4" class="visuallyhidden">Select a model</label><select id="4" selector-dropdown="true" class="selector-dropdown">
                                  <optgroup label="Laptops">
                                    <option value="0">MacBook Air (M2)</option>
                                    <option value="1">MacBook Air (M1)</option>
                                    <option value="2">MacBook Pro (M2)</option>
                                    <option value="3">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="4" aria-selected="true" selected="true">MacBook Pro (M2 Pro or M2 Max)</option>
                                    <option value="5">MacBook Air (Intel, 2020)</option>
                                    <option value="6">MacBook Air (Intel, 2017)</option>
                                    <option value="7">MacBook Pro (M1, 2020)</option>
                                    <option value="8">MacBook Pro (Intel, two ports, 2020)</option>
                                    <option value="9">MacBook Pro (Intel, four ports, 2020)</option>
                                    <option value="10">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="11">MacBook Pro (M1 Pro or M1 Max, 2021)</option>
                                    <option value="12">MacBook Pro (Intel, 2019)</option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                  </optgroup>
                                  <optgroup label="Desktops">
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="13">iMac (M1, two ports)</option>
                                    <option value="14">iMac (M1, four ports)</option>
                                    <option value="15">Mac mini (M2 or M2 Pro)</option>
                                    <option value="16">Mac Studio (M1 Max or M1 Ultra)</option>
                                    <option value="17">Mac Pro (Intel)</option>
                                    <option value="18">iMac (Intel, 2019)</option>
                                    <option value="19">iMac (Intel, 2017)</option>
                                    <option value="20">iMac (Intel, 2020)</option>
                                    <option value="21">iMac Pro (Intel, 2017)</option>
                                    <option value="22">Mac mini (M1, 2020)</option>
                                    <option value="23">Mac mini (Intel, 2018)</option>
                                    <!---->
                                  </optgroup>
                                </select><span aria-hidden="true" class="selector-icon icon icon-chevrondown"></span></form>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <div class="l70F8F0 embed-image" index="0">
                              <figure role="img" aria-label="MacBook Air (M2)" class="compare-image image-compare_macbook_air_m2_13_midnight"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <div class="wBB21B5 embed-image" index="1">
                              <figure role="img" aria-label="MacBook Air (M1)" class="compare-image image-compare_macbook_air_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <div class="t9176CD embed-image" index="2">
                              <figure role="img" aria-label="MacBook Pro (M2)" class="compare-image image-compare_macbook_pro_m2_13_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <div class="o0DFC89 embed-image" index="3">
                              <figure role="img" aria-label="MacBook Pro (M2 Pro or M2 Max)" class="compare-image image-compare_macbook_pro_m2_14_spacegray_final"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <div class="e7AD456 embed-image" index="4">
                              <figure role="img" aria-label="MacBook Pro (M2 Pro or M2 Max)" class="compare-image image-compare_macbook_pro_m2_16_spacegray_final"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-5">
                            <div class="d1CE626 embed-image" index="5">
                              <figure role="img" aria-label="MacBook Air (Intel, 2020)" class="compare-image image-compare_macbook_air_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <div class="l9A8E16 embed-image" index="6">
                              <figure role="img" aria-label="MacBook Air (Intel, 2017)" class="compare-image image-compare_macbook_air_2017_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <div class="xD2A157 embed-image" index="7">
                              <figure role="img" aria-label="MacBook Pro (M1, 2020)" class="compare-image image-compare_macbook_pro_13_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-8">
                            <div class="y92ECC6 embed-image" index="8">
                              <figure role="img" aria-label="MacBook Pro (Intel, two ports, 2020)" class="compare-image image-compare_macbook_pro_13_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <div class="nCA3363 embed-image" index="9">
                              <figure role="img" aria-label="MacBook Pro (Intel, four ports, 2020)" class="compare-image image-compare_macbook_pro_13_m1_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <div class="aB1C9FA embed-image" index="10">
                              <figure role="img" aria-label="MacBook Pro (M1 Pro or M1 Max, 2021)" class="compare-image image-compare_macbook_pro_m1_14_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-11">
                            <div class="m4A6974 embed-image" index="11">
                              <figure role="img" aria-label="MacBook Pro (M1 Pro or M1 Max, 2021)" class="compare-image image-compare_macbook_pro_m1_16_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-12">
                            <div class="p16E0E5 embed-image" index="12">
                              <figure role="img" aria-label="MacBook Pro (Intel, 2019)" class="compare-image image-compare_macbook_pro_16_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <div class="w112F46 embed-image" index="13">
                              <figure role="img" aria-label="iMac (M1, two ports)" class="compare-image image-compare_imac_24_m1_2020_TwoPort_blue"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <div class="z1C6612 embed-image" index="14">
                              <figure role="img" aria-label="iMac (M1, four ports)" class="compare-image image-compare_imac_24_m1_2020_TwoPort_blue"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <div class="c4E1880 embed-image" index="15">
                              <figure role="img" aria-label="Mac mini (M2 or M2 Pro)" class="compare-image image-compare_mac_mini_m2_4port_silver_final"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <div class="c7EA70B embed-image" index="16">
                              <figure role="img" aria-label="Mac Studio (M1 Max or M1 Ultra)" class="compare-image image-compare_mac_studio_silver_final"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <div class="h6ACEC6 embed-image" index="17">
                              <figure role="img" aria-label="Mac Pro (Intel)" class="compare-image image-compare_mac_pro_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <div class="vFD0746 embed-image" index="18">
                              <figure role="img" aria-label="iMac (Intel, 2019)" class="compare-image image-compare_imac_21_5_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <div class="tD0D9E5 embed-image" index="19">
                              <figure role="img" aria-label="iMac (Intel, 2017)" class="compare-image image-compare_imac_21_5_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <div class="sBCD1CB embed-image" index="20">
                              <figure role="img" aria-label="iMac (Intel, 2020)" class="compare-image image-compare_imac_27_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <div class="tCAB0B6 embed-image" index="21">
                              <figure role="img" aria-label="iMac Pro (Intel, 2017)" class="compare-image image-compare_imac_pro_spacegray"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <div class="vD18518 embed-image" index="22">
                              <figure role="img" aria-label="Mac mini (M1, 2020)" class="compare-image image-compare_mac_mini_m1_2020_silver"></figure>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <div class="wCFAAB9 embed-image" index="23">
                              <figure role="img" aria-label="Mac mini (Intel, 2018)" class="compare-image image-compare_mac_mini_2018_spacegray"></figure>
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <div product-name="MacBook Air (M2)" class="row-colors" index="0">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Air (M2)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <div product-name="MacBook Air (M1)" class="row-colors" index="1">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Air (M1)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(125, 126, 128);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Gold" class="colornav-swatch" style="background-color: rgb(249, 212, 194);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <div product-name="MacBook Pro (M2)" class="row-colors" index="2">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M2)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <div product-name="MacBook Pro (M2 Pro or M2 Max)" class="row-colors" index="3">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M2 Pro or M2 Max)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <div product-name="MacBook Pro (M2 Pro or M2 Max)" class="row-colors" index="4">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M2 Pro or M2 Max)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-5">
                            <div product-name="MacBook Air (Intel, 2020)" class="row-colors" index="5">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Air (Intel, 2020)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-6">
                            <div product-name="MacBook Air (Intel, 2017)" class="row-colors" index="6">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Air (Intel, 2017)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(227, 228, 229);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <div product-name="MacBook Pro (M1, 2020)" class="row-colors" index="7">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M1, 2020)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-8">
                            <div product-name="MacBook Pro (Intel, two ports, 2020)" class="row-colors" index="8">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (Intel, two ports, 2020)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-9">
                            <div product-name="MacBook Pro (Intel, four ports, 2020)" class="row-colors" index="9">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (Intel, four ports, 2020)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-10">
                            <div product-name="MacBook Pro (M1 Pro or M1 Max, 2021)" class="row-colors" index="10">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M1 Pro or M1 Max, 2021)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-11">
                            <div product-name="MacBook Pro (M1 Pro or M1 Max, 2021)" class="row-colors" index="11">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (M1 Pro or M1 Max, 2021)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-12">
                            <div product-name="MacBook Pro (Intel, 2019)" class="row-colors" index="12">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for MacBook Pro (Intel, 2019)" class="colornav-items">
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
                          <div role="cell" class="compare-column product-13">
                            <div product-name="iMac (M1, two ports)" class="row-colors" index="13">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac (M1, two ports)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Blue" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(38, 71, 109) 50%, rgb(168, 190, 210) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Green" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(16, 80, 91) 50%, rgb(163, 190, 180) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Pink" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(182, 44, 49) 50%, rgb(237, 185, 175) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <div product-name="iMac (M1, four ports)" class="row-colors" index="14">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac (M1, four ports)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Blue" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(38, 71, 109) 50%, rgb(168, 190, 210) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Green" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(16, 80, 91) 50%, rgb(163, 190, 180) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Pink" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(182, 44, 49) 50%, rgb(237, 185, 175) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Yellow" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(224, 144, 26) 50%, rgb(233, 202, 149) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Orange" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(232, 103, 64) 50%, rgb(233, 170, 149) 50%);"></figure>
                                    </div>
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Purple" class="colornav-swatch" style="background-image: linear-gradient(90deg, rgb(53, 59, 113) 50%, rgb(172, 172, 203) 50%);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <div product-name="Mac mini (M2 or M2 Pro)" class="row-colors" index="15">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for Mac mini (M2 or M2 Pro)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <div product-name="Mac Studio (M1 Max or M1 Ultra)" class="row-colors" index="16">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for Mac Studio (M1 Max or M1 Ultra)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <div product-name="Mac Pro (Intel)" class="row-colors" index="17">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for Mac Pro (Intel)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <div product-name="iMac (Intel, 2019)" class="row-colors" index="18">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac (Intel, 2019)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <div product-name="iMac (Intel, 2017)" class="row-colors" index="19">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac (Intel, 2017)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <div product-name="iMac (Intel, 2020)" class="row-colors" index="20">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac (Intel, 2020)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <div product-name="iMac Pro (Intel, 2017)" class="row-colors" index="21">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for iMac Pro (Intel, 2017)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(122, 123, 128);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <div product-name="Mac mini (M1, 2020)" class="row-colors" index="22">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for Mac mini (M1, 2020)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Silver" class="colornav-swatch" style="background-color: rgb(199, 200, 202);"></figure>
                                    </div>
                                  </div>
                                  <!---->
                                </div>
                              </div>
                            </div>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <div product-name="Mac mini (Intel, 2018)" class="row-colors" index="23">
                              <!---->
                              <div class="colornav">
                                <div role="list" aria-label="Available colors for Mac mini (Intel, 2018)" class="colornav-items">
                                  <div class="colornav-item-row">
                                    <div role="listitem" class="colornav-item">
                                      <figure role="img" aria-label="Space Gray" class="colornav-swatch" style="background-color: rgb(122, 123, 128);"></figure>
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
                      <div role="rowgroup" class="compare-section section-buy no-padding-top" style="display:none;">
                        <!--BEGIN > CATEGORY > BUY > FEATURE > BUY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-button">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Buy</div>
                          </div>
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <div class="button-container" index="0" product-name="MacBook Air (M2)"><a id="MacBook Air (M2)" href="#" aria-label="Buy now, MacBook Air (M2)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <div class="button-container" index="1" product-name="MacBook Air (M1)"><a id="MacBook Air (M1)" href="#" aria-label="Buy now, MacBook Air (M1)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <div class="button-container" index="2" product-name="MacBook Pro (M2)"><a id="MacBook Pro (M2)" href="#" aria-label="Buy now, MacBook Pro (M2)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <div class="button-container" index="3" product-name="MacBook Pro (M2 Pro or M2 Max)"><a id="MacBook Pro (M2 Pro or M2 Max)" href="#" aria-label="Buy now, MacBook Pro (M2 Pro or M2 Max)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <div class="button-container" index="4" product-name="MacBook Pro (M2 Pro or M2 Max)"><a id="MacBook Pro (M2 Pro or M2 Max)" href="#" aria-label="Buy now, MacBook Pro (M2 Pro or M2 Max)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-5">
                            <div class="button-container" index="5" product-name="MacBook Air (Intel, 2020)"><a id="MacBook Air (Intel, 2020)" href="#" aria-label="Buy now, MacBook Air (Intel, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <div class="button-container" index="6" product-name="MacBook Air (Intel, 2017)"><a id="MacBook Air (Intel, 2017)" href="#" aria-label="Buy now, MacBook Air (Intel, 2017)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <div class="button-container" index="7" product-name="MacBook Pro (M1, 2020)"><a id="MacBook Pro (M1, 2020)" href="#" aria-label="Buy now, MacBook Pro (M1, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-8">
                            <div class="button-container" index="8" product-name="MacBook Pro (Intel, two ports, 2020)"><a id="MacBook Pro (Intel, two ports, 2020)" href="#" aria-label="Buy now, MacBook Pro (Intel, two ports, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <div class="button-container" index="9" product-name="MacBook Pro (Intel, four ports, 2020)"><a id="MacBook Pro (Intel, four ports, 2020)" href="#" aria-label="Buy now, MacBook Pro (Intel, four ports, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <div class="button-container" index="10" product-name="MacBook Pro (M1 Pro or M1 Max, 2021)"><a id="MacBook Pro (M1 Pro or M1 Max, 2021)" href="#" aria-label="Buy now, MacBook Pro (M1 Pro or M1 Max, 2021)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-11">
                            <div class="button-container" index="11" product-name="MacBook Pro (M1 Pro or M1 Max, 2021)"><a id="MacBook Pro (M1 Pro or M1 Max, 2021)" href="#" aria-label="Buy now, MacBook Pro (M1 Pro or M1 Max, 2021)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-12">
                            <div class="button-container" index="12" product-name="MacBook Pro (Intel, 2019)"><a id="MacBook Pro (Intel, 2019)" href="#" aria-label="Buy now, MacBook Pro (Intel, 2019)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <div class="button-container" index="13" product-name="iMac (M1, two ports)"><a id="iMac (M1, two ports)" href="#" aria-label="Buy now, iMac (M1, two ports)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <div class="button-container" index="14" product-name="iMac (M1, four ports)"><a id="iMac (M1, four ports)" href="#" aria-label="Buy now, iMac (M1, four ports)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <div class="button-container" index="15" product-name="Mac mini (M2 or M2 Pro)"><a id="Mac mini (M2 or M2 Pro)" href="#" aria-label="Buy now, Mac mini (M2 or M2 Pro)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <div class="button-container" index="16" product-name="Mac Studio (M1 Max or M1 Ultra)"><a id="Mac Studio (M1 Max or M1 Ultra)" href="#" aria-label="Buy now, Mac Studio (M1 Max or M1 Ultra)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <div class="button-container" index="17" product-name="Mac Pro (Intel)"><a id="Mac Pro (Intel)" href="#" aria-label="Buy now, Mac Pro (Intel)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <div class="button-container" index="18" product-name="iMac (Intel, 2019)"><a id="iMac (Intel, 2019)" href="#" aria-label="Buy now, iMac (Intel, 2019)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <div class="button-container" index="19" product-name="iMac (Intel, 2017)"><a id="iMac (Intel, 2017)" href="#" aria-label="Buy now, iMac (Intel, 2017)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <div class="button-container" index="20" product-name="iMac (Intel, 2020)"><a id="iMac (Intel, 2020)" href="#" aria-label="Buy now, iMac (Intel, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <div class="button-container" index="21" product-name="iMac Pro (Intel, 2017)"><a id="iMac Pro (Intel, 2017)" href="#" aria-label="Buy now, iMac Pro (Intel, 2017)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <div class="button-container" index="22" product-name="Mac mini (M1, 2020)"><a id="Mac mini (M1, 2020)" href="#" aria-label="Buy now, Mac mini (M1, 2020)" class="button compare-button">Buy now</a></div>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <div class="button-container" index="23" product-name="Mac mini (Intel, 2018)"><a id="Mac mini (Intel, 2018)" href="#" aria-label="Buy now, Mac mini (Intel, 2018)" class="button compare-button">Buy now</a></div>
                          </div>
                        </div>
                        <!--END > CATEGORY > BUY > FEATURE > BUY-->
                      </div>
                      <!--END > CATEGORY > BUY-->
                      <!--BEGIN > CATEGORY > QUICK-LOOK-->
                      <div role="rowgroup" class="compare-section section-quick-look no-padding-top multi-row">
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Quick look</div>
                          </div>
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">34.46 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy"> Liquid Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">35.97 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">41.05 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">33.74 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">35.97 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">41.05 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Liquid Retina<br> XDR display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">40.65 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">60.96 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">4.5K Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">60.96 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">4.5K Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge mdash-container copy" index="15">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge mdash-container copy" index="16">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge mdash-container copy" index="17">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">54.61 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy"> 4K Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">54.61 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy"> display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">68.58 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">5K Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-value">68.58 cm</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">5K Retina display<sup aria-hidden="true">◊</sup><span class="visuallyhidden">Refer to legal disclaimers</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <figure role="presentation" class="badge mdash-container copy" index="22">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge mdash-container copy" index="23">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > DISPLAY-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CHIP-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Chip</div>
                          </div>
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper i5615D8 embed-image">
                                    <figure class="compare-image image-icon_chip_m2"></figure>
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper k6901E1 embed-image">
                                    <figure class="compare-image image-icon_chip_m1"></figure>
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper l7071E3 embed-image">
                                    <figure class="compare-image image-icon_chip_m2"></figure>
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper eB2875A embed-image">
                                    <figure class="compare-image image-icon_chip_m2_pro_m2_max_final"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M2 Pro chip or<br>Apple M2 Max chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper d28B8AA embed-image">
                                    <figure class="compare-image image-icon_chip_m2_pro_m2_max_final"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M2 Pro chip or<br>Apple M2 Max chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper c1AEB08 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper l8FCA33 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper o2A7B39 embed-image">
                                    <figure class="compare-image image-icon_chip_m1"></figure>
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
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper m38B894 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper b42A7C2 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper d038B6D embed-image">
                                    <figure class="compare-image image-icon_chip_m1_pro_m1_max"></figure>
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper d6ACAA8 embed-image">
                                    <figure class="compare-image image-icon_chip_m1_pro_m1_max"></figure>
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper eFF4B32 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i9 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper yA10182 embed-image">
                                    <figure class="compare-image image-icon_chip_m1"></figure>
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
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper tB07D61 embed-image">
                                    <figure class="compare-image image-icon_chip_m1"></figure>
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
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge" index="15">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper aE468D0 embed-image">
                                    <figure class="compare-image image-icon_chip_m2_m2_pro_final"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M2 chip or<br>Apple M2 Pro chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper tFDA6E2 embed-image">
                                    <figure class="compare-image image-icon_chip_m1_max_m1_ultra"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Apple M1 Max chip or<br>Apple M1 Ultra chip</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge" index="17">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span>
                                    <!---->
                                  </div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper rDE302C embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Xeon W processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper aAF0B70 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span>
                                    <!---->
                                  </div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper rBD86D3 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i5 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper oC3E1F4 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i9 processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span>
                                    <!---->
                                  </div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper j415A4E embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Xeon W processor</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <figure role="presentation" class="badge" index="22">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                  <div><span aria-hidden="true" class="badge-caption copy">&nbsp;</span><span class="visuallyhidden"></span></div>
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper j993FF9 embed-image">
                                    <figure class="compare-image image-icon_chip_m1"></figure>
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
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge" index="23">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper p31CC66 embed-image">
                                    <figure class="compare-image image-icon_chip_intel"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Core i7 processor</span>
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">12-core</span>
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">12-core</span>
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">4-core</span>
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
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2-core</span>
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
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
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
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">4-core</span>
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
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">4-core</span>
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
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
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
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
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
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
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
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge" index="15">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">12-core</span>
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
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">20-core</span>
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
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge" index="17">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">28-core</span>
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
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">6-core</span>
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
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">2-core</span>
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
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
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
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">18-core</span>
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
                          <div role="cell" class="compare-column product-22">
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
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge" index="23">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">6-core</span>
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <figure role="presentation" class="badge" index="0">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
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
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">38-core</span>
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">38-core</span>
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy"> Iris Plus Graphics GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">HD Graphics 6000 GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
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
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Iris Plus Graphics 645 GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Iris Plus Graphics GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro 5600M GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
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
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
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
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge" index="15">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">19-core</span>
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
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">64-core</span>
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
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge" index="17">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro W6800X Duo GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro Vega 20 GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Iris Plus Graphics 640 GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro 5700 XT GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">AMD </span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Radeon Pro Vega 64X GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
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
                                  <!----><span class="badge-caption copy">GPU</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge" index="23">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">Intel</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">UHD Graphics 630 GPU</span>
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <figure role="presentation" class="badge" index="0">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">96GB</span>
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">96GB</span>
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
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
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">&nbsp;</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">8GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
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
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
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
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">32GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
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
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
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
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
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
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge" index="15">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">32GB</span>
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
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge" index="16">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">128GB</span>
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
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge" index="17">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">1.5TB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">32GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
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
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">128GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">256GB</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">memory</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <figure role="presentation" class="badge" index="22">
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
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge" index="23">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to </span>
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
                                  <!----><span class="badge-caption copy">memory</span>
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
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
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
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">512GB</span>
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
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
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
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
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
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">4TB</span>
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
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
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
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">1TB</span>
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
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
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
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge" index="15">
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
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge" index="16">
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
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge" index="17">
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
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">1TB</span>
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
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">1TB</span>
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
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
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
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">4TB</span>
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
                          <div role="cell" class="compare-column product-22">
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
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge" index="23">
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
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > HD-CAPACITY-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > BATTERY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Battery</div>
                          </div>
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
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
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">22 hours</span>
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">12 hours</span>
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
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge" index="6">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">12 hours</span>
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
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
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
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10 hours</span>
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
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">10 hours</span>
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
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Up to</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-value">11 hours</span>
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
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge mdash-container copy" index="13">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge mdash-container copy" index="14">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge mdash-container copy" index="15">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge mdash-container copy" index="16">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge mdash-container copy" index="17">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge mdash-container copy" index="18">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge mdash-container copy" index="19">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge mdash-container copy" index="20">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge mdash-container copy" index="21">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <figure role="presentation" class="badge mdash-container copy" index="22">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge mdash-container copy" index="23">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                        </div>
                        <!--END > CATEGORY > QUICK-LOOK > FEATURE > BATTERY-->
                        <!--BEGIN > CATEGORY > QUICK-LOOK > FEATURE > CONNECTIVITY-->
                        <div role="row" data-column-group="" class="compare-row compare-template-preview-item-badge">
                          <div role="rowheader" aria-rowspan="0" class="compare-rowheader">
                            <div class="visuallyhidden">Connectivity</div>
                          </div>
                          <div role="cell" class="first-child compare-column product-0 compare-column-1">
                            <figure role="presentation" class="badge" index="0">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper hF5A376 embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-1 compare-column-0">
                            <figure role="presentation" class="badge" index="1">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper a100337 embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-2 compare-column-2">
                            <figure role="presentation" class="badge" index="2">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper q2FA53F embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id_final"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and Touch&nbsp;ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-3 compare-column-3">
                            <figure role="presentation" class="badge" index="3">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper f655FF5 embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-4 compare-column-4">
                            <figure role="presentation" class="badge" index="4">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper o5DBB64 embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-5">
                            <figure role="presentation" class="badge" index="5">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper u041B8F embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-6">
                            <figure role="presentation" class="badge mdash-container copy" index="6">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-7">
                            <figure role="presentation" class="badge" index="7">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper hF2D80F embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and Touch&nbsp;ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-8">
                            <figure role="presentation" class="badge" index="8">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper k69A67C embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and Touch&nbsp;ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-9">
                            <figure role="presentation" class="badge" index="9">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper kAE4C9E embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and Touch&nbsp;ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-10">
                            <figure role="presentation" class="badge" index="10">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper c66C2CE embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-11">
                            <figure role="presentation" class="badge" index="11">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper r9A8CFB embed-image">
                                    <figure class="compare-image image-icon_touch_id_final"></figure>
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
                          <div role="cell" class="compare-column product-12">
                            <figure role="presentation" class="badge" index="12">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper oCFEB66 embed-image">
                                    <figure class="compare-image image-icon_touch_bar_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Touch Bar and Touch&nbsp;ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-13">
                            <figure role="presentation" class="badge" index="13">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper p142025 embed-image">
                                    <figure class="compare-image image-icon_magic_keyboard_Lock_key"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard with Lock Key<br><span style="color: #86868b">Available with Touch ID</span></span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-14">
                            <figure role="presentation" class="badge" index="14">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper k3D5AAA embed-image">
                                    <figure class="compare-image image-icon_keyboard_touch_id"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard with Touch ID</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-15">
                            <figure role="presentation" class="badge mdash-container copy" index="15">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-16">
                            <figure role="presentation" class="badge mdash-container copy" index="16">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-17">
                            <figure role="presentation" class="badge mdash-container copy" index="17">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-18">
                            <figure role="presentation" class="badge" index="18">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper f61AC74 embed-image">
                                    <figure class="compare-image image-icon_magic_keyboard"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-19">
                            <figure role="presentation" class="badge" index="19">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper eF1D799 embed-image">
                                    <figure class="compare-image image-icon_magic_keyboard"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-20">
                            <figure role="presentation" class="badge" index="20">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper oD23DAA embed-image">
                                    <figure class="compare-image image-icon_magic_keyboard"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-21">
                            <figure role="presentation" class="badge" index="21">
                              <div class="badge-content">
                                <div class="badge-row">
                                  <div aria-hidden="true" class="image-icon-wrapper m23CC48 embed-image">
                                    <figure class="compare-image image-icon_magic_keyboard_keypad"></figure>
                                  </div>
                                  <!---->
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                                <div class="badge-row">
                                  <!----><span class="badge-caption copy">Magic Keyboard with Numeric&nbsp;Keypad</span>
                                  <!---->
                                  <!---->
                                  <!---->
                                </div>
                              </div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-22">
                            <figure role="presentation" class="badge mdash-container copy" index="22">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
                            </figure>
                          </div>
                          <div role="cell" class="compare-column product-23">
                            <figure role="presentation" class="badge mdash-container copy" index="23">
                              <div class="badge-content"><span class="badge-caption"><p aria-hidden="true" class="mdash badge-caption">—</p><p class="visuallyhidden">Not Applicable</p></span></div>
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
      <!--END > FLEX 8 - COMPARE-->
      <!--BEGIN > FLEX 9 - ACCESSORIES-->
      <div class="section q412764">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed e4D69AE">
            <!---->
            <div class="column large-4 small-12 w7EB945">
              <div>
                <!---->
              </div>
              <h2 class="copy pD65740 channel-custom-font-custom-21-eyebrow-reduced">Accessories</h2>
              <p class="copy zC069DB channel-custom-font-custom-40-headline-reduced">Explore Mac accessories.</p>
              <p class="copy helvetica-neue s0E6C79 channel-custom-font-custom-17-body-reduced">Explore keyboards, devices and other essentials. </p>
              <div class="row pC60B78">
                <!---->
                <div class="column large-12 jCD90DD">
                  <div>
                    <!---->
                  </div>
                  <!-- <a href="#" class="link-wrapper" style="--focus-color: rgba(0, 125, 250, 0.6);"><span class="yEFFF34 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Shop Apple accessories</span></span></a> -->
                </div>
              </div>
            </div>
            <div class="column large-8 small-12 small-hide q1437DB">
              <div>
                <!---->
              </div>
              <div><img alt="Top view of AirPods, Studio Display, Magic Keyboard, Magic Mouse, and Magic Trackpad" src="./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_large_2x.png?1673036829678" sizes="(min-width: 1069px) 628px, (min-width: 735px) 462px, 462px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_large_2x.png?1673036829678 1256w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_large.png?1673036829679 628w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_medium_2x.png?1673036829684 924w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_small_2x.png?1673036829686 924w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_small.png?1673036829688 462w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_lm_medium.png?1673036829688 462w" class="image double-invert h0A5339"></div>
            </div>
            <div class="column large-8 large-hide small-12 small-show d4FAF05">
              <div>
                <!---->
              </div>
              <div><img alt="Top view of AirPods, Studio Display, Magic Keyboard, Magic Mouse, and Magic Trackpad" src="./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_large_2x.png?1673036829676" sizes="(min-width: 1069px) 563px, (min-width: 735px) 563px, 563px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_small_2x.png?1673036829675 1126w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_large.png?1673036829675 563w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_large_2x.png?1673036829676 1126w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_medium_2x.png?1673036829676 1126w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_small.png?1673036829684 563w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_accessories_s_medium.png?1673036829686 563w" class="image double-invert e383B6E"></div>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 9 - ACCESSORIES-->
      <!--BEGIN > FLEX 10 - APPLECARE+-->
      <div class="section b859975">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed rD8AD2D">
            <!---->
            <div class="column large-6 small-12 bD6B050">
              <div>
                <!---->
              </div>
              <h2 class="copy uDD02A8 channel-custom-font-custom-21-eyebrow-reduced">AppleCare+</h2>
              <p class="copy x12281A channel-custom-font-custom-40-headline-reduced">Expert support, enhanced coverage.</p>
              <div class="row cCD3236">
                <!---->
                <div class="column large-12 y0979D7">
                  <div>
                    <!---->
                  </div>
                  <ul role="list" aria-label="Apple care plus support and coverage" class="list c131931">
                    <li role="listitem" class="list-item bA35C37">
                      <div class="row y16F050">
                        <!---->
                        <div class="column large-0 yF175B6">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care eBAD4B3"></figure>
                        </div>
                        <div class="column large-11 rE1D296">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue t5DDD25 channel-custom-font-custom-17-body-reduced">Apple-certified service</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item m576166">
                      <div class="row rED1BF4">
                        <!---->
                        <div class="column large-0 h6B00D9">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care hFB1E44"></figure>
                        </div>
                        <div class="column large-11 g5A9126">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue z67857B channel-custom-font-custom-17-body-reduced">Priority access to Apple experts</p>
                        </div>
                      </div>
                    </li>
                    <li role="listitem" class="list-item s18EFE7">
                      <div class="row a999AF6">
                        <!---->
                        <div class="column large-0 cB0676A">
                          <div>
                            <!---->
                          </div>
                          <figure aria-hidden="true" class="image image-flex_checkmark_apple_care oE192B2"></figure>
                        </div>
                        <div class="column large-11 vDB61D5">
                          <div>
                            <!---->
                          </div>
                          <p class="copy helvetica-neue pAB6963 channel-custom-font-custom-17-body-reduced">Accidental damage coverage</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row g8B3F7D">
                <!---->
                <div class="column large-12 c1D8B79">
                  <div>
                    <!---->
                  </div>
                  <!-- <a href="#" class="link-wrapper" style="--focus-color: rgba(0, 125, 250, 0.6);"><span class="d33BD06 icon icon-chevronright icon-after channel-custom-font-custom-17-body-reduced"><span>Learn more about AppleCare+&nbsp;for Mac</span></span></a> -->
                </div>
              </div>
            </div>
            <div class="column large-6 small-12 rE4525C">
              <div>
                <!---->
              </div>
              <div><img alt="MacBook Pro and AppleCare+" src="./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_large_2x.png?1673036829678" sizes="(min-width: 1069px) 411px, (min-width: 735px) 280px, 275px" srcset="./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_small.png?1673036829675 275w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_medium.png?1673036829675 280w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_medium_2x.png?1673036829677 560w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_large_2x.png?1673036829678 822w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_large.png?1673036829685 411w,./files/uploads/products/macbook-pro-m2-pro-chip/flex_applecare_small_2x.png?1673036829687 550w" class="image double-invert k75B889"></div>
            </div>
          </div>
        </div>
      </div>
      <!--END > FLEX 10 - APPLECARE+-->
      <!--BEGIN > LEGAL-->
      <div class="section s5EE615">
        <div class="section-content">
          <div class="row large-display-bleed medium-display-bleed iA055B7">
            <!---->
            <aside aria-labelledby="comp" role="complimentary" class="column large-12 medium-12 f69F044">
              <div>
                <!---->
              </div>
              <div class="row q15A022">
                <!---->
                <div class="column large-12 u7F4634">
                  <div>
                    <!---->
                  </div>
                  <h2 id="comp" class="copy helvetica-neue n818C47 channel-custom-font-custom-12-sosumi"><span id="footnote-diamond-1">◊</span>Legal Disclaimers</h2>
                </div>
              </div>
              <ul role="list" class="list j9A92B4">
                <li role="listitem" class="list-item hB2E0D1">
                  <div class="row zF95362">
                    <!---->
                    <div class="column large-12 a131BAC">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue d64C6A7 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Power and Battery:</span> Battery life varies by use and configuration. See <a href="https://www.apple.com/in/batteries" class="footer-link"><span style="color: #424245">apple.com/in/batteries</span></a> for more information.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item q585BC4">
                  <div class="row gA90E8D">
                    <!---->
                    <div class="column large-12 y9C1640">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue m77C23C channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">XDR Brightness:</span> In temperatures less than 25° C.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item zEECDDC">
                  <div class="row v809FBE">
                    <!---->
                    <div class="column large-12 aA5A2B5">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue a0E3BA6 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Wireless:</span> Wi‑Fi 6E is not available in China mainland. Requires macOS 13.2 or later in Japan.</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item r7EE83E">
                  <div class="row cD9DFE7">
                    <!---->
                    <div class="column large-12 qD288D3">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue f81D434 channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Display:</span> Screen size is measured diagonally. The displays on the  MacBook&nbsp;Air and the MacBook&nbsp;Pro have rounded corners at the top. When measured as a standard rectangular shape, the screens are 34.46&nbsp;centimetres, 35.97&nbsp;centimetres and 41.05&nbsp;centimetres diagonally (actual viewable area is less).</p>
                    </div>
                  </div>
                </li>
                <li role="listitem" class="list-item y0BC993">
                  <div class="row v8E49D3">
                    <!---->
                    <div class="column large-12 r249355">
                      <div>
                        <!---->
                      </div>
                      <p class="copy helvetica-neue d8A313F channel-custom-font-custom-12-sosumi"><span style="font-weight: 500;">Storage:</span> 1GB = 1 billion bytes and 1TB = 1 trillion bytes; actual formatted capacity less.</p>
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


    <!--BEGIN > SCRIPTS:BASE -->
    <script type="text/javascript">"use strict";const reorderDOM={selectorEls:null,headerEl:null,capturedEls:null,capturedElsQuery:null,clonedEls:[],cOrder:null,cMax:null,useStatic:null,selectorElsQuery:null,staticEl:null,staticElQuery:null,addListeners(){window.addEventListener("channel:reorder-dom",e=>{if(this.useStatic=e.detail.useStatic,this.cOrder=e.detail.order,this.cMax=e.detail.max,this.updateElements(),void 0!==e.detail.selectorIndex){document.querySelectorAll(this.selectorElsQuery).item(e.detail.selectorIndex).focus()}})},updateElements(){!this.useStatic&&this.updateSelectors(),!this.useStatic&&this.updateHeadersAX(),!this.useStatic&&this.updateRows(),this.useStatic&&this.updateStatic()},arrayFromNodeList(e){const t=[];return e.forEach(e=>{t.push(e)}),t},updateStatic(){this.clonedEls.forEach((e,t)=>{const i=this.capturedEls[t],r=e.cloneNode(!0),n=r.querySelector("[role=rowheader]"),s=r.querySelector("[id=hidden-columnheader]");let o=[];this.cOrder.forEach((e,t)=>{const i=`[index="${e}"]`,n=r.querySelector(i).parentElement;o.push(n)}),o.reverse().forEach((e,t)=>{e.setAttribute("added",!0),r.prepend(e)});for(let e=0;e<r.children.length;e++){const t=r.children[e];"rowheader"!==t.getAttribute("role")&&"hidden-columnheader"!==t.getAttribute("id")&&(t.style.order="unset",this.toggleVisibility(t,e<this.cMax))}s&&r.prepend(s),r.prepend(n),r.setAttribute("added",!0),i.innerHTML=r.innerHTML})},updateHeadersAX(){let e='<div role="columnheader">&nbsp;</div>';document.querySelectorAll(this.selectorElsQuery).forEach((t,i)=>{const r=t.querySelector("[selected=true]").innerText.trim();"flex"===t.parentElement.parentElement.style.display&&(e+=`<div role="columnheader">${r}</div>`)}),this.headerEl.innerHTML=e},updateSelectors(){document.querySelectorAll(this.selectorElsQuery).forEach((e,t)=>{e.replaceWith(this.selectorEls[t])}),this.cOrder.forEach((e,t)=>{const i=this.selectorEls[t];let r=0;for(let t=0;t<i.options.length;t++){const n=i.options[t],s=Number(n.value)===e;s&&(r=t),n.removeAttribute("selected"),n.setAttribute("selected",s),n.removeAttribute("aria-selected"),n.setAttribute("aria-selected",s)}i.selectedIndex=r});for(var e=0;e<this.selectorEls.length;e++){const t=this.selectorEls[e],i=e<this.cMax;this.toggleVisibility(t.parentElement.parentElement,i)}},updateRows(){this.clonedEls.forEach((e,t)=>{const i=this.capturedEls[t],r=e.cloneNode(!0),n=r.querySelector("[role=rowheader]"),s=[];this.cOrder.forEach(e=>{const t=`[index="${e}"]`,i=r.querySelector(t).parentElement;s.push(i)}),s.reverse().forEach(e=>{r.prepend(e)});for(let e=0;e<r.children.length;e++){const t=r.children[e];"rowheader"!==t.getAttribute("role")&&(t.style.order="unset",this.toggleVisibility(t,e<this.cMax))}r.prepend(n),i.innerHTML=r.innerHTML})},toggleVisibility(e,t){e.style.visibility=t?"visible":"hidden",e.style.display=t?"flex":"none",e.style.order="unset"},init(e,t,i,r,n){this.useStatic=n,this.capturedEls=document.querySelectorAll(e),this.capturedElsQuery=e,this.headerEl=document.querySelector(i),this.selectorEls=document.querySelectorAll(t),this.selectorElsQuery=t,this.staticElQuery=r,this.staticEl=this.useStatic&&document.querySelector(this.staticElQuery).cloneNode(!0),this.useStatic=n,this.clonedEls=this.arrayFromNodeList(this.capturedEls),this.addListeners()}},viewportManager={nState:null,cState:null,init:function(){this.addListeners()},addListeners:function(){const e={small:window.matchMedia("(max-width: 734px)"),medium:window.matchMedia("(min-width: 735px) and (max-width: 1068px)"),large:window.matchMedia("(min-width: 1069px)")};Object.keys(e).forEach(t=>{const i=e[t];"function"!=typeof i.addEventListener?i.addListener(()=>{i.matches&&this.viewportObserve(t)}):i.addEventListener("change",()=>{i.matches&&this.viewportObserve(t)}),i.matches&&this.viewportObserve(t)})},viewportObserve:function(e){this.nState=e,this.cState!==this.nState&&(this.cState=this.nState,this.dispatch(this.cState))},dispatch:function(e){const t=new CustomEvent("channel:viewport-change",{detail:e});window.dispatchEvent(t)}},orientationManager={orienation:null,init:function(){window.matchMedia("(orientation: portrait)").addEventListener("change",e=>{e.matches?this.orienation="portrait":this.orienation="landscape",this.dispatch(this.orienation)})},dispatch:function(e){const t=new CustomEvent("channel:orientation-change",{detail:e});window.dispatchEvent(t)}},selectorManager={init:function(e,t){const i=document.querySelectorAll(e);i.forEach((e,t)=>{e.addEventListener("change",()=>{const r=e.selectedIndex,n=e.value,s=Number(e.options[r].getAttribute("value"));this.dispatch({elIndex:t,selectedIndex:s,value:n,selectorEls:i}),e.focus()})})},dispatch:function(e){const t=new CustomEvent("channel:pre-user-select",{detail:e});window.dispatchEvent(t)}},buyButtonManager={buyButtonQuery:null,init:function(e){this.buyButtonQuery=e,this.addListeners(),this.attachButtonListeners()},addListeners:function(){window.addEventListener("channel:reorder-dom",()=>{console.log,this.attachButtonListeners()})},attachButtonListeners:function(){document.querySelectorAll(this.buyButtonQuery).forEach(e=>{e.addEventListener("click",t=>{const i=0===t.screenX&&0===t.screenY?"Keyboard Interaction":"Mouse Click";this.dispatch({productName:e.id,eventSource:i})})})},dispatch:function(e){const t=new CustomEvent("channel:buy-button-click",{detail:e});window.dispatchEvent(t)}},dataManager={order:null,viewportKey:null,viewportOrder:null,viewportMax:null,init:function(e,t){this.order=e,this.useStatic=t,this.addListeners()},viewportChange(e){this.viewportKey=e,this.viewportOrder=this.order[this.viewportKey],this.viewportMax=this.order.max[this.viewportKey],this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic})},blurSelects(e){document.querySelectorAll(e).forEach(e=>{e.blur()})},flattenOrders(){this.viewportOrder=this.order[this.viewportKey],this.viewportMax=this.order.max[this.viewportKey],["small","medium","large"].forEach(e=>{this.order[e]=this.viewportOrder})},getLineupInfo(e,t){const i={};return e.forEach((e,r)=>{i[r]={columnIndex:r,deviceName:e.options[e.selectedIndex].text,hasChanged:r===t}}),i},userSelect(e){const{elIndex:t,selectedIndex:i}=e,r=this.viewportOrder[t],n=this.viewportOrder.find(e=>e===i),s=this.viewportOrder.indexOf(n);void 0!==n?(this.viewportOrder[s]=r,this.viewportOrder[t]=n):this.viewportOrder[t]=i,this.flattenOrders(),this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic,selectorIndex:t}),e.deviceLineup=this.getLineupInfo(e.selectorEls,t),delete e.selectorEls;const o=Object.keys(e.deviceLineup).slice(0,this.viewportMax).reduce((t,i)=>(t[i]=e.deviceLineup[i],t),{});this.dispatchPostUserSelect({deviceLineup:o})},addListeners:function(){window.addEventListener("channel:pre-user-select",e=>{this.userSelect(e.detail)}),window.addEventListener("channel:user-refresh",e=>{this.dispatch({order:this.viewportOrder,max:this.viewportMax,useStatic:this.useStatic})}),window.addEventListener("channel:viewport-change",e=>{this.viewportChange(e.detail),this.blurSelects(this.selectorElsQuery)}),window.addEventListener("change:orientation-change",()=>{this.blurSelects(this.selectorElsQuery)}),window.addEventListener("channel:buy-button-click",e=>{console.log(e.detail)})},dispatch:function(e){const t=new CustomEvent("channel:reorder-dom",{detail:e});window.dispatchEvent(t)},dispatchPostUserSelect:function(e){const t=new CustomEvent("channel:user-select",{detail:e});window.dispatchEvent(t)}},channelCompare={inited:!1,init:function(e=null){if(this.inited)return;let t;if(this.isDev=window.location.host.indexOf("127.0.0.1")>-1,e)t=e;else if(!e){const e=document.querySelector("[data-channel-html-compare]");if(!e)return void console.warn("channelCompare: element[data-channel-html-compare not found]");try{const i=e.getAttribute("data-channel-html-compare");t=JSON.parse(i)}catch(e){return void console.warn("channelCompare: error parsing JSON",e)}}const i=t.order,r=t.headerEl,n=t.selectorEls,s=t.swapEls,o=t.staticEl,a=t.useStatic;reorderDOM.init(s,n,r,o,a),!a&&selectorManager.init(n),buyButtonManager.init(".compare-button"),dataManager.init(i,a),viewportManager.init(),orientationManager.init(),this.inited=!0}};window.addEventListener("pageshow",e=>{const{persisted:t}=e;if(t)window.addEventListener("scroll",()=>{const e=new CustomEvent("channel:user-refresh");window.dispatchEvent(e)});else{channelCompare.init(),document.querySelector(".channel-compare").classList.remove("channel-compare--hidden")}});</script>
    <!--END > SCRIPTS:BASE -->
  </body>

</html>