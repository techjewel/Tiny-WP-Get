# Description

A very tiny wordpress plugin to show and hide contents based on url get variable

### Show content based on url variable
Sample Shortcode: 

```sh 
 [url_get get="a" value="download"]Here is Secret Contents[/url_get] 
```

if your url have variable "a" and value "download" as an example http://domain.com/?a=download then the shortcode will show the "Here is Secret Contents" you can use any html content into there. even you can use any shortcode into your secret content area! Easy yah!

#### How to show and hide content based on if - else

```sh 
[url_get get="a" value=""]Subscribe here[/url_get] 
```
This code will show the content if there has no url variable named "a". So your users will show the content if they visit a page without url variable. and when they redirect into the url variable then they can see the secret content but in this case they can not see the "Subscribe here" content.

### Installation

Copy and paste the tiny_wp_get.php function and paste in function.php or any in your plugin file. or download the zip and install as a standalone plugin in your wordpress website