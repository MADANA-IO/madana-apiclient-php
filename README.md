# sampleclient-php
 The PHP JSON client-side library defines the PHP classes that can be (de)serialized to/from JSON. This is useful for accessing the resources that are published by this application, but only those that produce a JSON representation of their resources (content type "application/json"). This library requires the json_encode function which was included in PHP versions 5.2.0+. 

```
//read the resource in JSON:
$json = ...;

//read the json as an array.
$parsed = json_decode($json, true);

//read the json array as the object
$result = new Object($parsed);

//open a writer for the json
$json = $result->toJson();
```