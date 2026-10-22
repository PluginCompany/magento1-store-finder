# Changelog: Store Finder for Magento 1 / OpenMage

All releases of this extension, newest first. This repository contains the latest release, tagged [`1.14.2`](https://github.com/PluginCompany/magento1-store-finder/releases/tag/1.14.2); earlier versions are listed for reference and have no tag.

## 1.14.2 — 2020-01-12

- Fix for attributes which are disabled for store location view page still being shown on front-end

## 1.14.1 — 2019-08-30

- Fixed JS conflict between PrototypeJS library Array.from() method and Google Maps JS API which caused an issue when trying to use Street View
- Extension now uses quarterly stable release of Google Maps JS library

## 1.14.0 — 2019-08-23

- Added smooth zoom functionality which makes the map zoom in to a location when it's contained in a store locations cluster and clicked on in the store locations list
- Fixed issue causing infinite page refresh when using the store locator in a product page tab

## 1.13.1 — 2019-08-17

- Fixed WYSIWYG editor functionality for custom attribute textarea fields with editor enabled
- Added support for widget, variable and block shortcodes in custom attribute values

## 1.13.0 — 2019-07-16

- Added marker clustering functionality which allows locations close to each other to be grouped in a cluster when the map is zoomed out.

## 1.12.1 — 2019-02-28

- Fixed issue where custom store marker wouldn't show when a global custom marker is set

## 1.12.0 — 2019-01-27

- New option to use OR filter condition for select attributes instead of AND filter condition

## 1.11.1 — 2018-12-01

- Added HTTPS URL support for external store location URLs

## 1.11.0 — 2018-09-26

- Added sitemap support for store locations. Store locations are now automatically added when generating a sitemap.

## 1.10.4 — 2018-07-15

- Store locations are now also sorted according to the sort order field in the store finder. (This is only applicable on page load, when no address or location has been entered by the user on the front-end)

## 1.10.3 — 2018-04-18

- Fixed ACL permissions for store locations cache flush button

## 1.10.2 — 2018-04-13

- Fixed issue where address picker didn't work in admin area when tab was opened by form validation
- Fixed issue causing custom attributes not to be saved when creating new store location
- Removed browser autocomplete from addess picker field

## 1.10.1 — 2018-04-11

- Added option to change store locations list page title through system config

## 1.10.0 — 2018-03-19

- New option to add multiple custom markers on the store locator page
- New option to display featured stores on top of the list on the store locator page
- Added possibility to add HTML code to the opening hours and store description fields on the store locator page

## 1.9.0 — 2018-02-12

- Added option to pre-select (multi)select attributes using GET parameters
- Added option to pre-fill Store Name search field using GET parameter

## 1.8.3 — 2017-12-23

- Minor code changes for Magento Marketplace

## 1.8.2 — 2017-09-07

- Added https to store locator URL (if applicable)

## 1.8.1 — 2017-07-27

- Fixed issue regarding importing multiple store IDs per store location

## 1.8.0 — 2017-03-16

- Added print directions functionality

## 1.7.1 — 2017-03-13

- Added possibility to prefill address bar using GET variable
- Fixed address format missing bug

## 1.7.0 — 2017-03-03

- Added preference for default country when entering postal code
- Added possibility to disable extension per store view

## 1.6.1 — 2017-02-14

- Fixed directions API issue
- Fixed caching issue during export in some Magento installations

## 1.6.0 — 2016-12-19

- Added store location name filter to Google Maps store locator page
- Store comments tab in front-end customer account is now hidden if comments are disabled

## 1.5.4 — 2016-12-12

- Fixed compatibility with some third party extensions

## 1.5.3 — 2016-11-04

- Fixed URL issue when store code is added

## 1.5.2 — 2016-11-04

- Fixed installer issue

## 1.5.1 — 2016-10-19

- Fixed issue regarding specific attribute labels
- Updated translate CSV file

## 1.5.0 — 2016-09-02

- Added option to enable custom attributes per store view
- When no store locations are found, customer location is now shown by default
- Fixed radius / maximum distance dropdown visibility issue
- Added translation strings
- Fixed store importing issue

## 1.4.3 — 2016-08-11

- Added option to enter Google API key

## 1.4.2 — 2016-05-22

- Opening hours and contact details are hidden on the front-end if not available
- Updated jQuery version

## 1.4.1 — 2016-05-17

- Added translation support to all front-end pages

## 1.4.0 — 2016-01-26

- Added Store Finder product page integration functionality
- Added option to manage product inventory per store location
- Updated store locator with latest Google Maps library
- Fixed store locator filter bug
- Added config options for the radius selection filter
- Added options to configure the default map location, zoom level and maximum amount of store locations
- Added options to add custom map themes and upload marker icons
- Added config options for the Store Locations page filter

## 1.3.1 — 2016-01-04

- Fixed store count / pagination bug on store locations overview page

## 1.3.0 — 2015-12-18

- Added review functionality with star rating to store comments
- Added option to add Store Finder header and footer links
- Added store location caching options
- Fixed semicolon bug when no region is specified for some locales

## 1.2.2 — 2015-11-18

- Fixed minor bug

## 1.2.1 — 2015-11-16

- Fixed issue with https enabled webshops
- Fixed compilation issue

## 1.2.0 — 2015-09-15

- Added Iframe embed option in configuration screen

## 1.1.2 — 2015-09-08

- Added meta title, description and keywords for store finder page
- Fixed meta title, description and keywords for store locations list page

## 1.1.1 — 2015-08-25

- Fixed bug

## 1.1.0 — 2015-07-26

- Added custom store attribute functionality
- Added store locations CSV import/export functionality
- Added Google Geocode API to import menu
- Added auto-geocoding and radius selection options for store locator
- Added tag style filter menu to front-end store locator
- Added Font Awesome contact icons
- Improved address formatting

## 1.0.1 — 2015-03-23

- Integrated directions functionality into store locator page
- Improved responsive design
- Improved store locator search bar style
- Added extra config options for store locator page title and description
- Fixed compatibility with latest Google Maps API version

## 1.0.0 — 2014-10-31

- First release of Magento Store Finder extension by Plugin Company.
