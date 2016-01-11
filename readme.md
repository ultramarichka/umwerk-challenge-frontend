# Umwerk Challenge

In order to get an idea of the level and scope of your knowledge we have prepared a small test project. 
This test is designed for frontend developers.

Small [silex](http://silex.sensiolabs.org/) project to show [umwerk](http://www.umwerk.com) locations on a map.
Use the [Google Maps Api](https://developers.google.com/maps/?hl=de) to create a marker 
for each location. When one clicks on the location marker, it should open a modal window which 
shows all additional location info (name, address, zip, phone).

Query locations by using path */list*

Query detail of location by using path */detail/{id}*

Example : 
http://umwerk-challenge-frontend.dev/list

should return

```javascript
[
    {
        "id":"1",
        "name":"umwerk systems",
        "city":"Rosenheim",
        "zip":"83022",
        "phone":"+49 (0)8031 796887 0",
        "address":"Hechtseestra\u00dfe 5a",
        "lat":"47.8481",
        "lng":"12.1354"
    },
    {
        "id":"2",
        "name":"umwerk GmbH",
        "city":"M\u00fcnchen",
        "zip":"80538",
        "phone":"+49 (0)89 8 56 34 63 10",
        "address":"Thierschplatz 6",
        "lat":"48.1393",
        "lng":"11.5893"
    },
    {
        "id":"3",
        "name":"umwerk stuttgart",
        "city":"Stuttgart",
        "zip":"70190",
        "phone":"+49 (0)711 674 382 50",
        "address":"Metzstra\u00dfe 1",
        "lat":"48.7934",
        "lng":"9.20032"
    },
    {
        "id":"4",
        "name":"umwerk creative",
        "city":"M\u00fcnchen",
        "zip":"80538",
        "phone":"+49 (0)89 8 56 34 63 10",
        "address":"Thierschplatz 6",
        "lat":"48.1393",
        "lng":"11.5893"
    }
]
```



## Installation of silex project ##

### composer ###
project uses composer to install required libraries

```
$ curl -sS https://getcomposer.org/installer | php
```

```
$ composer.phar install
```
### vhost ###

create host entry which points to *web* folder

### database ###

see *umwerk_locations.sql* to create table with location entries


## Informations ##
[Silex Basic Usage](http://silex.sensiolabs.org/doc/usage.html)

[Twig Documentation](http://twig.sensiolabs.org/documentation)

[jQuery (if needed)](http://api.jquery.com/jquery.ajax/)



## TODOs ##

1. Add html structure & map to index.twig
2. Add javascript to query locations & append them to the dom ( create google maps marker with lat/lng )
3. Add click event to marker which opens a modal window
4. Add javascript to query detail of location & show them in the modal window

## The result ##
Please make sure you put everything that is necessary to run your project into a compressed file.

