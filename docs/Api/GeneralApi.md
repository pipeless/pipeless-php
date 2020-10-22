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



## createEvent

> object createEvent($app_id, $inline_object)

Create Event

Create a single event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object = new \Pipeless\Model\InlineObject(); // \Pipeless\Model\InlineObject | 

try {
    $result = $apiInstance->createEvent($app_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object** | [**\Pipeless\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

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

> object createEventsBatch($app_id, $inline_object2)

Create Events Batch

Create up to 10 events in one API call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object2 = new \Pipeless\Model\InlineObject2(); // \Pipeless\Model\InlineObject2 | 

try {
    $result = $apiInstance->createEventsBatch($app_id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->createEventsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object2** | [**\Pipeless\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

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

> object deleteAllObjectsByType($app_id, $inline_object9)

Delete All Objects by Type

Delete all objects (and associated events) of a specific object type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object9 = new \Pipeless\Model\InlineObject9(); // \Pipeless\Model\InlineObject9 | 

try {
    $result = $apiInstance->deleteAllObjectsByType($app_id, $inline_object9);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteAllObjectsByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object9** | [**\Pipeless\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

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

> object deleteEvent($app_id, $inline_object1)

Delete Event

Delete one or more events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object1 = new \Pipeless\Model\InlineObject1(); // \Pipeless\Model\InlineObject1 | 

try {
    $result = $apiInstance->deleteEvent($app_id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object1** | [**\Pipeless\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

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

> object deleteObject($app_id, $inline_object4)

Delete Object

Delete a single object and all the relationships/events it's connected to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object4 = new \Pipeless\Model\InlineObject4(); // \Pipeless\Model\InlineObject4 | 

try {
    $result = $apiInstance->deleteObject($app_id, $inline_object4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->deleteObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object4** | [**\Pipeless\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

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

> \Pipeless\Model\ObjectReadable editObject($app_id, $inline_object5)

Edit Object

Edit the properties of an existing object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object5 = new \Pipeless\Model\InlineObject5(); // \Pipeless\Model\InlineObject5 | 

try {
    $result = $apiInstance->editObject($app_id, $inline_object5);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->editObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object5** | [**\Pipeless\Model\InlineObject5**](../Model/InlineObject5.md)|  | [optional]

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

> \Pipeless\Model\ObjectReadable getObject($app_id, $inline_object3)

Get Object

Get basic info on a single object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object3 = new \Pipeless\Model\InlineObject3(); // \Pipeless\Model\InlineObject3 | 

try {
    $result = $apiInstance->getObject($app_id, $inline_object3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object3** | [**\Pipeless\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

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
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$get_recent_events_config = new \Pipeless\Model\GetRecentEventsConfig(); // \Pipeless\Model\GetRecentEventsConfig | 

try {
    $result = $apiInstance->getRecentEvents($app_id, $get_recent_events_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->getRecentEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
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

