# Pipeless\GeneralApi

All URIs are relative to *https://api.pipeless.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEvent**](GeneralApi.md#createEvent) | **POST** /v1/apps/{app_id}/events | Create Event
[**createEventsBatch**](GeneralApi.md#createEventsBatch) | **POST** /v1/apps/{app_id}/events/batch | Create Events Batch
[**deleteAllObjectsByType**](GeneralApi.md#deleteAllObjectsByType) | **DELETE** /v1/apps/{app_id}/objects/all | Delete All Objects by Type
[**deleteEvent**](GeneralApi.md#deleteEvent) | **DELETE** /v1/apps/{app_id}/events | Delete Event
[**deleteObject**](GeneralApi.md#deleteObject) | **DELETE** /v1/apps/{app_id}/objects | Delete Object
[**editObject**](GeneralApi.md#editObject) | **PATCH** /v1/apps/{app_id}/objects | Edit Object
[**getObject**](GeneralApi.md#getObject) | **GET** /v1/apps/{app_id}/objects | Get Object
[**getRecentEvents**](GeneralApi.md#getRecentEvents) | **GET** /v1/apps/{app_id}/recent-events | Get Recent Events
[**getRelationshipCounts**](GeneralApi.md#getRelationshipCounts) | **GET** /v1/apps/{app_id}/relationship-counts | Get Relationship Counts
[**getRelationshipExists**](GeneralApi.md#getRelationshipExists) | **GET** /v1/apps/{app_id}/relationship-exists | Get Relationship Exists



## createEvent

> object createEvent($app_id, $params)

Create Event

Create a single event.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'event' => [
        'start_object' => [
            'id' => 'Tim',
            'type' => 'user',
            'created_on' => '2020-09-20T21:57:06',
        ],
        'relationship' => [
            'type' => 'interestedIn',
            'created_on' => '2020-09-28T09:31:18',
        ],
        'end_object' => [
            'id' => 'photography',
            'type' => 'skill',
            'created_on' => '2020-06-03T15:40:22',
        ]
    ]
];

try {
    $result = $apiInstance->createEvent($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

**object**

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createEventsBatch

> object createEventsBatch($app_id, $params)

Create Events Batch

Create up to 10 events in one API call.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'events' => [
        [
            'start_object' => [
                'id' => 'Tim',
                'type' => 'user',
                'created_on' => '2020-09-20T21:57:06',
            ],
            'relationship' => [
                'type' => 'interestedIn',
                'created_on' => '2020-09-28T09:31:18',
            ],
            'end_object' => [
                'id' => 'photography',
                'type' => 'skill',
                'created_on' => '2020-06-03T15:40:22',
            ]
        ],
        [
            'start_object' => [
                'id' => 'Tim',
                'type' => 'user',
                'created_on' => '2020-09-20T21:57:06',
            ],
            'relationship' => [
                'type' => 'liked',
                'created_on' => '2020-09-24T014:20:11',
            ],
            'end_object' => [
                'id' => 'Article 123',
                'type' => 'article',
                'created_on' => '2020-07-05T05:51:02',
            ]
        ]
    ]
];

try {
    $result = $apiInstance->createEventsBatch($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->createEventsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

**object**

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAllObjectsByType

> object deleteAllObjectsByType($app_id, $params)

Delete All Objects by Type

Delete all objects (and associated events) of a specific object type.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'object_type' => 'user'
];

try {
    $result = $apiInstance->deleteAllObjectsByType($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteAllObjectsByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

**object**

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteEvent

> object deleteEvent($app_id, $params)

Delete Event

Delete one or more events.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'event' => [
        'start_object' => [
            'id' => 'Tim',
            'type' => 'user',
        ],
        'relationship' => [
            'type' => 'liked',
        ],
        'end_object' => [
            'id' => 'Article 123',
            'type' => 'article',
        ]
    ]   
];

try {
    $result = $apiInstance->deleteEvent($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

**object**

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteObject

> object deleteObject($app_id, $params)

Delete Object

Delete a single object and all the relationships/events it's connected to.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'id' => 'Tim',
    'type' => 'user',
];

try {
    $result = $apiInstance->deleteObject($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

**object**

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## editObject

> \Pipeless\Model\ObjectReadable editObject($app_id, $params)

Edit Object

Edit the properties of an existing object.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'object' => [
        'id' => '127.0.0.1',
        'type' => 'user',
    ],
    'new_props' => [
        'id' => 'Tim'
    ]
];

try {
    $result = $apiInstance->editObject($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->editObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\ObjectReadable**](../Model/ObjectReadable.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getObject

> \Pipeless\Model\ObjectReadable getObject($app_id, $params)

Get Object

Get basic info on a single object.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [
    'id' => 'McDonald\'s',
    'type' => 'company',
];

try {
    $result = $apiInstance->getObject($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\ObjectReadable**](../Model/ObjectReadable.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRecentEvents

> \Pipeless\Model\GetRecentEventsResultItem[] getRecentEvents($app_id, $get_recent_events_config)

Get Recent Events

Get recent events that have been sent to the specified app.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 

try {
    $result = $apiInstance->getRecentEvents($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getRecentEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **get_recent_events_config** | [**\Pipeless\Model\GetRecentEventsConfig**](../Model/GetRecentEventsConfig.md)|  | [optional]

### Return type

[**\Pipeless\Model\GetRecentEventsResultItem[]**](../Model/GetRecentEventsResultItem.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRelationshipCounts

> \Pipeless\Model\RelationshipCountsResult getRelationshipCounts($app_id, $params)

Get Relationship Counts

Get the counts of 1 or 2 relationships from/to a given object.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRelationshipCounts($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getRelationshipCounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RelationshipCountsResult**](../Model/RelationshipCountsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRelationshipExists

> \Pipeless\Model\RelationshipExistsResult getRelationshipExists($app_id, $params)

Get Relationship Exists

Determines if a given relationship of a specific type exists from the specified object to the specified end object.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRelationshipExists($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getRelationshipExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RelationshipExistsResult**](../Model/RelationshipExistsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

