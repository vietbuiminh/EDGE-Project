<p align="center">
  <a href="https://augustana.edu/academics/core/edge" target="_blank">
    <img src="stuff/EDGE-bluegrey.gif" alt="Logo" width=auto height=72>
  </a>

  <h3 align="center">EDGE/Augustana Web Guild</h3>

  <p align="center">
    Resources, collections, projects made by Viet (Ethan) Bui.
    
```Entrepreneurial Development through Guided Experiences (which is a bit of a mouthful). EDGE connects students with community organizations in need of communications, marketing and creative services.```

The students learn technical skills, build soft skills, and gain experience to enhance their portfolios and resumes. Businesses and not-for-profit organizations gain a low-cost resource for their marketing needs.

The EDGE Center opened in 2010 as an expansion of the Augustana Web Guild model, originally founded in 1997. The Web Guild is a self-funding student organization that provides website development services for small businesses and nonprofit organizations.
<br>

<!--<a href="https://vietbuiminh/issues/new?template=bug.md">Report bug</a>
    ·
    <a href="https://reponame/issues/new?template=feature.md&labels=feature">Request feature</a>-->

  </p>
</p>

## Table of contents

- [Work flow](#work-flow)
- [Create folder](#create-folder)
- [Base code](#base-code)
- [Bugs and feature requests](#bugs-and-feature-requests)
- [Contributing](#contributing)
- [Creators](#creators)
- [Thanks](#thanks)
- [Copyright and license](#copyright-and-license)

## Work flow

Here is a short simplified workflow of coding in EDGE

- Set up folders in VSCode
- Create initial files for web project
- Inject core code
- Inject skeleton code
- Customize web into appropriate designs

## Create folder

```text
projectName/
├── css/
│   ├── responsiveNavBar.css
│   └── style.css
├── docs/
├── img/
├── js/
│   └── responsiveNavBar.js
└── index.html
```

## Base code

### `index.html`

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Google Fonts-->
    <link rel="" href="" />
    <link rel="" href="" crossorigin />
    <link href="" rel="" />
    <!--CSS Link-->
    <link rel="stylesheet" href="css/style.css" />
    <!--<link rel="stylesheet" href="css/responsiveNavBar.css">-->

    <title>Document</title>
  </head>

  <body>
    <header></header>
    <main></main>
    <footer></footer>
    <script src="js/responsiveNavBar.js"></script>
  </body>
</html>
```

### `responsiveNavBar.js`

```JavaScript
// Code written by Viet (Ethan) Bui
// This responsive nav bar is good for simple nav bar without the drop down nav
const mainNav = document.getElementById('menu');
const navBarToggle = document.getElementById('js-navbar-toggle');
const burger = document.querySelector(".burger");

navBarToggle.addEventListener('click', function () {
    burger.classList.toggle('toggle');
    mainNav.classList.toggle('active');
});
```

### `responsiveNavBar.css`

```css
:root {
  --col1: #d64045;
  --col2: #e9fff9;
  --col3: #9ed8db;
  --col4: #467599;
  --col5: #1d3354;
  --height-of-navbar: 186.48px;
}
/* Navigation bar */
.burger {
  display: none;
  cursor: pointer;
  padding: 8.5px 4px;
  z-index: 10;
  background-color: var(--col3);
  border-radius: 10px;
}
.burger div {
  background-color: var(--col5);
  width: 30px;
  height: 2px;
  margin: 7px;
  transition: all 0.3s ease;
}
.toggle .l1 {
  transform: rotate(-45deg) translate(-6.5px, 6.5px);
}
.toggle .l2 {
  opacity: 0;
}
.toggle .l3 {
  transform: rotate(45deg) translate(-6.5px, -6.5px);
}

@media screen and (max-width: 771px) {
  .mainnav {
    display: none;
  }
  .burger {
    display: block;
  }
  .navbar-toggle {
    position: absolute;
    top: 17px;
    right: 20px;
  }
  .active {
    display: block;
  }
}
```

### `style.css `

some base style, customized by coders

```css
* {
  margin: 0;
  padding: 0;
  /* For webkit */
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  font-family: "Montserrat", sans-serif;
  font-family: "Playfair Display", serif;
}

.justify {
  max-width: 1080px;
  margin-left: auto;
  margin-right: auto;
}

.adjust {
  margin-left: auto;
  margin-right: auto;
  padding-left: 10%;
  padding-right: 10%;
}
```

## Bugs and feature requests

Have a bug or a feature request? Please send connection with me through GitHub
https://github.com/vietbuiminh

## Contributing

Just fork this repo and I will check the contributions :D

## Creators

**Viet (Ethan) Bui | Augie**

- <https://github.com/vietbuiminh>

## Thanks

Thank you so checking my template. Hope you advance in web dev in Augustana Web Guild

## Copyright and license

Code and documentation copyright 2021-2022 the authors. Code released under the [MIT License](https://reponame/blob/master/LICENSE).

Enjoy :metal:
