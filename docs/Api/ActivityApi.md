# Pipeless\ActivityApi

All URIs are relative to *https://api.pipeless.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivityActionsFeed**](ActivityApi.md#getActivityActionsFeed) | **GET** /v1/apps/{app_id}/algos/activity/actions-feed | Get Activity Actions Feed
[**getActivityFeed**](ActivityApi.md#getActivityFeed) | **GET** /v1/apps/{app_id}/algos/activity/feed | Get Activity Feed
[**getActivityOnObject**](ActivityApi.md#getActivityOnObject) | **GET** /v1/apps/{app_id}/algos/activity/object | Get Activity on Object



## getActivityActionsFeed

> \Pipeless\Model\GetActivityActionsFeedResult getActivityActionsFeed($app_id, $params)

Get Activity Actions Feed

Fetch the activity feed for a user (or any other object type). This activity feed format will return acted upon entities as the main result. Ex. one item per post, article, product, etc. Each single item has associated actions. Ex. product a product

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [];

try {
    $result = $apiInstance->getActivityActionsFeed($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityActionsFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

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

> \Pipeless\Model\GetActivityFeedResult getActivityFeed($app_id, $params)

Get Activity Feed

Fetch the activity feed for a user (or any other object type). This activity feed format will return events in sequential descending order - there will be one activity item for each found action.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [];

try {
    $result = $apiInstance->getActivityFeed($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

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

> \Pipeless\Model\GetActivityOnObjectResult getActivityOnObject($app_id, $params)

Get Activity on Object

Get activity that has taken place on a target object.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123; // int | 
$params = [];

try {
    $result = $apiInstance->getActivityOnObject($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityOnObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**|  | [your app id]
 **params** | array

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

