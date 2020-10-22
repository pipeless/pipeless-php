# Pipeless\ActivityApi

All URIs are relative to *https://api.pipeless.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivityActionsFeed**](ActivityApi.md#getActivityActionsFeed) | **GET** /v1/apps/{app_id}/algos/activity/actions-feed | Get Activity Actions Feed
[**getActivityFeed**](ActivityApi.md#getActivityFeed) | **GET** /v1/apps/{app_id}/algos/activity/feed | Get Activity Feed
[**getActivityOnObject**](ActivityApi.md#getActivityOnObject) | **GET** /v1/apps/{app_id}/algos/activity/object | Get Activity on Object



## getActivityActionsFeed

> \Pipeless\Model\GetActivityActionsFeedResult getActivityActionsFeed($app_id, $inline_object8)

Get Activity Actions Feed

Fetch the activity feed for a user (or any other object type). This activity feed format will return acted upon entities as the main result. Ex. one item per post, article, product, etc. Each single item has associated actions. Ex. product a product

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object8 = new \Pipeless\Model\InlineObject8(); // \Pipeless\Model\InlineObject8 | 

try {
    $result = $apiInstance->getActivityActionsFeed($app_id, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityActionsFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object8** | [**\Pipeless\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

[**\Pipeless\Model\GetActivityActionsFeedResult**](../Model/GetActivityActionsFeedResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getActivityFeed

> \Pipeless\Model\GetActivityFeedResult getActivityFeed($app_id, $inline_object7)

Get Activity Feed

Fetch the activity feed for a user (or any other object type). This activity feed format will return events in sequential descending order - there will be one activity item for each found action.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object7 = new \Pipeless\Model\InlineObject7(); // \Pipeless\Model\InlineObject7 | 

try {
    $result = $apiInstance->getActivityFeed($app_id, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object7** | [**\Pipeless\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

### Return type

[**\Pipeless\Model\GetActivityFeedResult**](../Model/GetActivityFeedResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json, application/xml
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getActivityOnObject

> \Pipeless\Model\GetActivityOnObjectResult getActivityOnObject($app_id, $inline_object6)

Get Activity on Object

Get activity that has taken place on a target object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$inline_object6 = new \Pipeless\Model\InlineObject6(); // \Pipeless\Model\InlineObject6 | 

try {
    $result = $apiInstance->getActivityOnObject($app_id, $inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityOnObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [default to 123]
 **inline_object6** | [**\Pipeless\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

### Return type

[**\Pipeless\Model\GetActivityOnObjectResult**](../Model/GetActivityOnObjectResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

