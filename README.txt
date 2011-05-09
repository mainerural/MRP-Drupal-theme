// $Id$

ABOUT
-----------
This is an HTML5 starter theme for Drupal7. It's based on Less Framework (http://lessframework.com) CSS grid and Boron (http://drupal.org/project/boron), being it one of the best HTML5 base theme for Drupal7. So remember to install Boron before using this theme.

It's made to be used as a framework, a starting point for creating more complex themes without starting from scratch everytime.

It has not much styling, except enough CSS to arrange the page in a traditional "Header, Sidebars, Content, and Footer" composition in the default (10 columns) layout and to rearrange it for 8, 5 and 3 columns layouts. All this with Responsive Web Design and the Golden Ratio (http://en.wikipedia.org/wiki/Golden_ratio) in mind, showing different block regions and the grid in the background.

It uses mostly Boron's default HTML5 markup. You can also install the Elements (http://drupal.org/project/elements) module and the HTML5 Tools (http://drupal.org/project/html5_tools) module as companion modules of this theme to complement it.

Less Framework is a CSS grid system using Media Queries (http://www.w3.org/TR/css3-mediaqueries/) for Responsive Web Design (http://www.alistapart.com/articles/responsive-web-design/). 

It contains 4 layouts and a set of presets, all based on a single grid, composed of 68 px columns with 24 px gutters. What changes from layout to layout, is amount of columns, text size, and the width of the outer margins.

"The idea is to first code the Default Layout (992 px), and then use CSS3 media queries to code several child layouts: 768, 480, and 320 px. The Default Layout will be served to any browsers that do not support media queries, whereas the child layouts will be served, as appropriate, to browsers that do. They will also inherit all styles given to the Default Layout, so coding them is very fast.

To break it down, recent versions of Firefox, Chrome, Safari, Opera, Nokia Webkit, WebOS, Blackberry OS, as well as Internet Explorer 9, Android Webkit, and Mobile Safari (all iPhones, iPads and iPod Touches) will use the layout most appropriate to them. Internet Explorer 6–8 and most old mobile devices will only use the Default Layout.

The goal of Less Framework is to make building websites with multiple layouts efficient, and to make the layouts feel consistent. Since every layout is based on the same grid, elements used in one layout can often be reused in the others without changing them much at all. For example, simply adjusting the width or font-size of an element in one layout is often enough to make it work in another. And even if more changes are required, the common baseline grid and type presets will make the element fit in."