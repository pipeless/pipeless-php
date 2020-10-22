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

> \Pipeless\Model\RecommendationsResult getRecommendedContent($app_id, $inline_object10)

Get Recommended Content (for user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$inline_object10 = new \Pipeless\Model\InlineObject10(); // \Pipeless\Model\InlineObject10 | 

try {
    $result = $apiInstance->getRecommendedContent($app_id, $inline_object10);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRecommendedContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [default to &#39;123&#39;]
 **inline_object10** | [**\Pipeless\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

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


## getRecommendedUsersToFollow

> \Pipeless\Model\RecommendationsResult getRecommendedUsersToFollow($app_id, $inline_object11)

Get Recommended Users to Follow (for user)

For a given user (or any object type), get a list of recommended users for the target user to follow, based on their behavior/tastes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$inline_object11 = new \Pipeless\Model\InlineObject11(); // \Pipeless\Model\InlineObject11 | 

try {
    $result = $apiInstance->getRecommendedUsersToFollow($app_id, $inline_object11);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRecommendedUsersToFollow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [default to &#39;123&#39;]
 **inline_object11** | [**\Pipeless\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

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

> \Pipeless\Model\RecommendationsResult getRelatedContent($app_id, $inline_object13)

Get Related Content

Gets related content objects based on a specific piece of content of any type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$inline_object13 = new \Pipeless\Model\InlineObject13(); // \Pipeless\Model\InlineObject13 | 

try {
    $result = $apiInstance->getRelatedContent($app_id, $inline_object13);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [default to &#39;123&#39;]
 **inline_object13** | [**\Pipeless\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

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

> \Pipeless\Model\RecommendationsResult getRelatedTags($app_id, $inline_object12)

Get Related Tags

Gets related tags for a given tag (or any other object type, ex. category).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$inline_object12 = new \Pipeless\Model\InlineObject12(); // \Pipeless\Model\InlineObject12 | 

try {
    $result = $apiInstance->getRelatedTags($app_id, $inline_object12);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [default to &#39;123&#39;]
 **inline_object12** | [**\Pipeless\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

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

> \Pipeless\Model\RecommendationsResult getRelatedUsers($app_id, $inline_object14)

Get Related Users

Get related users based on a target user (or other type).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Pipeless\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Pipeless\Api\RecommendationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = '123'; // string | 
$inline_object14 = new \Pipeless\Model\InlineObject14(); // \Pipeless\Model\InlineObject14 | 

try {
    $result = $apiInstance->getRelatedUsers($app_id, $inline_object14);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecommendationsApi->getRelatedUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  | [default to &#39;123&#39;]
 **inline_object14** | [**\Pipeless\Model\InlineObject14**](../Model/InlineObject14.md)|  | [optional]

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

