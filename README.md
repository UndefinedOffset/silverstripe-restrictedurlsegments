Restricted URL Segments
=================
Augments the SiteTree URL Segment validation to restrict some segments from being used on pages

## Requirements
* SilverStripe 3.1.x+

## Installation
Install using composer:
```
composer require undefinedoffset/silverstripe-restrictedurlsegments
```

If you prefer you may also install manually:
* Download the module from [here](https://github.com/UndefinedOffset/silverstripe-restrictedurlsegments/archive/master.zip)
* Extract the downloaded archive into your site root so that the destination folder is called restrictedurlsegments, opening the extracted folder should contain _config.php in the root along with other files/folders
* Run dev/build?flush=all to regenerate the manifest

## Configuration
You can add restricted segments by simply adding them to you're site's yaml config typically this is mysite/_config/config.yml:

```yml
RestrictedURLSegments:
    restricted:
        - "my-restricted-segment"
```



## Reporting an issue
When you're reporting an issue please ensure you specify what version of SilverStripe you are using i.e. 3.1.3, 3.2beta, master etc. Also be sure to include any JavaScript or PHP errors you receive, for PHP errors please ensure you include the full stack trace. Also please include how you produced the issue. You may also be asked to provide some of the classes to aid in re-producing the issue. Stick with the issue, remember that you seen the issue not the maintainer of the module so it may take allot of questions to arrive at a fix or answer.
