# Pipeless\RecommendationsApi

All URIs are relative to *https://api.pipeless.io*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRecommendedContent**](RecommendationsApi.md#getRecommendedContent) | **GET** /v1/apps/{app_id}/algos/recommendations/content | Get Recommended Content (for user)
[**getRecommendedUsersToFollow**](RecommendationsApi.md#getRecommendedUsersToFollow) | **GET** /v1/apps/{app_id}/algos/recommendations/users-to-follow | Get Recommended Users to Follow (for user)
[**getRelatedContent**](RecommendationsApi.md#getRelatedContent) | **GET** /v1/apps/{app_id}/algos/recommendations/related-content | Get Related Content
[**getRelatedTags**](RecommendationsApi.md#getRelatedTags) | **GET** /v1/apps/{app_id}/algos/recommendations/related-tags | Get Related Tags
[**getRelatedUsers**](RecommendationsApi.md#getRelatedUsers) | **GET** /v1/apps/{app_id}/algos/recommendations/related-users | Get Related Users



## getRecommendedContent

> \Pipeless\Model\RecommendationsContentResult getRecommendedContent($app_id, $params)

Get Recommended Content (for user)

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRecommendedContent($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRecommendedContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RecommendationsContentResult**](../Model/RecommendationsContentResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRecommendedUsersToFollow

> \Pipeless\Model\RecommendationsResult getRecommendedUsersToFollow($app_id, $params)

Get Recommended Users to Follow (for user)

For a given user (or any object type), get a list of recommended users for the target user to follow, based on their behavior/tastes.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRecommendedUsersToFollow($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRecommendedUsersToFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RecommendationsResult**](../Model/RecommendationsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRelatedContent

> \Pipeless\Model\RecommendationsResult getRelatedContent($app_id, $params)

Get Related Content

Gets related content objects based on a specific piece of content of any type.

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRelatedContent($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RecommendationsResult**](../Model/RecommendationsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRelatedTags

> \Pipeless\Model\RecommendationsResult getRelatedTags($app_id, $params)

Get Related Tags

Gets related tags for a given tag (or any other object type, ex. category).

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRelatedTags($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RecommendationsResult**](../Model/RecommendationsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRelatedUsers

> \Pipeless\Model\RecommendationsResult getRelatedUsers($app_id, $params)

Get Related Users

Get related users based on a target user (or other type).

### Example

```php
<?php

// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$params = [];

try {
    $result = $apiInstance->getRelatedUsers($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [your app id]
 **params** | array

### Return type

[**\Pipeless\Model\RecommendationsResult**](../Model/RecommendationsResult.md)

### Authorization

[App_API_Key](../../README.md#App_API_Key)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

