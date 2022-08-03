# [PWS Tabs jQuery Plugin](http://alexchizhov.com/pwstabs)<sup>[1.4.0](#version-140-06032016)</sup> [![Build Status](https://travis-ci.org/alexchizhovcom/pwstabs.svg?branch=master)](https://travis-ci.org/alexchizhovcom/pwstabs)

####PWS Tabs is a lightweight jQuery tabs plugin to create responsive flat style tabbed content panels with some cool transition effects powered by CSS3 animations.

## Nested tabs<sup>new feature</sup>
PWS Tabs jQuery Plugin supports multilevel nested tabs. You can add unlimited tabs inside of tabs with custom settings.

##PWS Tabs is Responsive

![Preview](http://alexchizhov.com/pwstabs/screenshots/pwstabsresponsive600.jpg) ![Preview](http://alexchizhov.com/pwstabs/screenshots/pwstabsresponsive600menu.jpg)

## Install with Bower

`$ bower install pwstabs`

## Demo

Online demo: [http://alexchizhov.com/pwstabs](http://alexchizhov.com/pwstabs)

![Preview](http://alexchizhov.com/pwstabs/screenshots/pwstabs1.2.0.jpg)

## Documentation

### Getting Started

1) Include jQuery library and jQuery PWS Tabs plugin in the <strong>`<head>`</strong> section.
```html
<script src="https://code.jquery.com/jquery-1.12.1.min.js"</script>

<link type="text/css" rel="stylesheet" href="jquery.pwstabs.css">
<script src="jquery.pwstabs.js"></script>
```

2) Create tabbed panels and use HTML5 `data-pws-*` attributes to specify the ID & Name for the tabs.

```html
<div class="hello_world">

   <div data-pws-tab="anynameyouwant1" data-pws-tab-name="Tab Title 1">Our first tab</div>
   <div data-pws-tab="anynameyouwant2" data-pws-tab-name="Tab Title 2">Our second tab</div>
   <div data-pws-tab="anynameyouwant3" data-pws-tab-name="Tab Title 3">Our third tab</div>

</div>
```

<strong>`data-pws-tab`</strong> is used to initiate the tab and as its ID.

<strong>`data-pws-tab-name`</strong> is used for a tab display name.


3) Call the plugin on the parent element to create a basic tabs interface with 100% width and 'scale' transition effect.
```js
jQuery(document).ready(function($){
   $('.hello_world').pwstabs();
});
```

4) Available parameters to customize the tabs plugin.
```js
jQuery(document).ready(function($){
   $('.hello_world').pwstabs({

      // scale / slideleft / slideright / slidetop / slidedown / none
      effect: 'scale', 
 
      // The tab to be opened by default
      defaultTab: 1,    
 
      // Set custom container width
      // Any size value (1,2,3.. / px,pt,em,%,cm..)
      containerWidth: '100%',

      // Tabs position: horizontal / vertical
      tabsPosition: 'horizontal',
 
      // Tabs horizontal position: top / bottom
      horizontalPosition: 'top',

      // Tabs vertical position: left / right
      verticalPosition: 'left',
      
      // BETA: Make tabs container responsive: true / false (!!! BETA)
      responsive: false,

      // Themes available: default: '' / pws_theme_violet / pws_theme_green / pws_theme_yellow
      // pws_theme_gold / pws_theme_orange / pws_theme_red / pws_theme_purple / pws_theme_grey
      theme: '',
      
      // Right to left support: true/ false
      rtl: false

   });        
});
```


<p>5) PWS Tabs Plugin supports <strong><a href="http://fortawesome.github.io/" title="Go to Font Awesome Website" target="_blank">Font Awesome 4.5.0</a></strong></p>

<p>5.1) Include Font Awesome stylesheet from assets directory:</p>

```html
<link type="text/css" rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
```

<p>5.2) Use HTML5 <strong>`data-pws-tab-icon`</strong> attribute to set an icon. Icon names you can find here: <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">Font Awesome Icons</a>.</p>

```html
<div class="hello_world">

<div data-pws-tab="anynameyouwant1" data-pws-tab-name="Tab Title 1" data-pws-tab-icon="fa-heart">Our first tab</div>;
<div data-pws-tab="anynameyouwant2" data-pws-tab-name="Tab Title 2" data-pws-tab-icon="fa-star">Our second tab</div>
<div data-pws-tab="anynameyouwant3" data-pws-tab-name="Tab Title 3" data-pws-tab-icon="fa-map-marker">Our third tab</div>

</div>
```


## Options

<table>
<thead>
<tr>
<th>Option</th>
<th>Default</th>
<th>Description</th>
<th>Available options</th>
<th>Type</th>
</tr>
</thead>
<tbody>
<tr>
<td>effect</td>
<td>scale</td>
<td>Transition effect</td>
<td>scale / slideleft / slideright / slidetop / slidedown / none</td>
<td>string</td>
</tr>
<tr>
<td>defaultTab</td>
<td>1</td>
<td>Which tab is chosen by default</td>
<td>Tab ID number starts with 1 (1,2,3..)</td>
<td>number</td>
</tr>
<tr>
<td>containerWidth</td>
<td>100%</td>
<td>Tabs container width</td>
<td>Any size value (1,2,3.. / px,pt,em,%,cm..)</td>
<td>string</td>
</tr>
<tr>
<td>tabsPosition</td>
<td>horizontal</td>
<td>Define tabs position</td>
<td>horizontal / vertical</td>
<td>string</td>
</tr>
<tr>
<td>horizontalPosition</td>
<td>top</td>
<td>Define Horizontal tabs position</td>
<td>top / bottom</td>
<td>string</td>
</tr>
<tr>
<td>verticalPosition</td>
<td>left</td>
<td>Define Vertical tabs position</td>
<td>left / right</td>
<td>string</td>
</tr>
<tr>
<td>theme</td>
<td>''</td>
<td>Change tabs theme</td>
<td>pws_theme_violet / pws_theme_green<br> pws_theme_yellow / pws_theme_gold<br> pws_theme_orange / pws_theme_red<br> pws_theme_purple / pws_theme_grey<br>pws_theme_dark_violet / pws_theme_dark_green<br> pws_theme_dark_yellow / pws_theme_dark_gold<br> pws_theme_dark_orange / pws_theme_dark_red<br> pws_theme_dark_purple / pws_theme_dark_grey</td>
<td>string</td>
</tr>
<tr>
<td>responsive</td>
<td>false</td>
<td>!!BETA!! Make tabs responsive</td>
<td>true / false</td>
<td>boolean</td>
</tr>
<tr>
<td>rtl</td>
<td>false</td>
<td>Right to left support</td>
<td>true / false</td>
<td>boolean</td>
</tr>
</tbody>
</table>


## Changelog

### Version 1.4.0 (06.03.2016)
1) Nested tabs feature added<br>
2) iPhone tabs font-size issue fixed<br>
3) Tabs positioning changed from absolute to relative<br>
4) Container height is now handled with CSS not jQuery<br>
5) Font awesome is version 4.5.0 now

### Version 1.3.0 (20.08.2015)
1) Main CSS and JS file doesn't have verison number in its name now<br>
2) Code refactored and cleaned<br>
3) Tabs now have pws_show & pws_hide classes instead of a long named classes<br>
4) Styles classes are now added to the container not tabs<br>
5) New dark themes added, they are a little bit darker than white to use on a websites with white background<br>
6) Fixed vertical tabs width with icons<br>
7) Fixed margins and paddings for tabs controlls<br>
8) Font awesome folder renamed to /font-awesome/<br>
9) Font awesome is version 4.4.0 now

### Version 1.2.1 (23.01.2015)
1) To facilitate the creation of new color schemes for developers SASS files added to /assets/sass/ directory.<br>
2) Plugins StyleSheet /assets/jquery.pwstabs-1.2.1.css was generated from new SASS files (Very few changes from previous version)

### Version 1.2.0 (21.01.2015)
1) Made plugin responsive.<br>
2) Added themes support. 9 color schemes are available.<br>
3) Optimized code a bit.<br>
4) Added responsive.html file in /examples/ directory.<br>
5) Added colors examples in /examples/examples.html

### Version 1.1.4 (19.01.2015)
1) Added new effect: none. Good for eCommerce websites. Customers don't like to wait :)<br>
2) Font Awesome 4.2.0 Support => Tabs Icons


### Version 1.1.3 (18.01.2015)
1) Added tabsPosition settings: horizontal / vertical.<br>
2) Added verticalPosition settings: left / right.<br>
3) Updated stylesheets.<br>
4) Updated examples.

### Version 1.1.2 (17.01.2015)
1) Added RTL support.<br>
2) Added horizontalPosition settings: top / bottom.<br>
3) New examples with video, Google Maps and mixed content.

### Version 1.1.1 (16.01.2015)
1) Bug fix: added class selector to tabs controller ul element. Solved issue with ul elements in tabs content.
