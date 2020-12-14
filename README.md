# Pipeless PHP bindings

Power real-time personalized recommendations and activity feeds using a simple API. https://docs.pipeless.io

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
composer require pipeless/pipeless-php
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/pipeless-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: App_API_Key
$config = Pipeless\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'Bearer YOUR_API_KEY');

$apiInstance = new Pipeless\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 123;

$params = [

];

try {
    $result = $apiInstance->getActivityActionsFeed($app_id, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivityActionsFeed: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.pipeless.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**getActivityActionsFeed**](docs/Api/ActivityApi.md#getactivityactionsfeed) | **GET** /v1/apps/{app_id}/algos/activity/actions-feed | Get Activity Actions Feed
*ActivityApi* | [**getActivityFeed**](docs/Api/ActivityApi.md#getactivityfeed) | **GET** /v1/apps/{app_id}/algos/activity/feed | Get Activity Feed
*ActivityApi* | [**getActivityOnObject**](docs/Api/ActivityApi.md#getactivityonobject) | **GET** /v1/apps/{app_id}/algos/activity/object | Get Activity on Object
*GeneralApi* | [**createEvent**](docs/Api/GeneralApi.md#createevent) | **POST** /v1/apps/{app_id}/events | Create Event
*GeneralApi* | [**createEventsBatch**](docs/Api/GeneralApi.md#createeventsbatch) | **POST** /v1/apps/{app_id}/events/batch | Create Events Batch
*GeneralApi* | [**deleteAllObjectsByType**](docs/Api/GeneralApi.md#deleteallobjectsbytype) | **DELETE** /v1/apps/{app_id}/objects/all | Delete All Objects by Type
*GeneralApi* | [**deleteEvent**](docs/Api/GeneralApi.md#deleteevent) | **DELETE** /v1/apps/{app_id}/events | Delete Event
*GeneralApi* | [**deleteObject**](docs/Api/GeneralApi.md#deleteobject) | **DELETE** /v1/apps/{app_id}/objects | Delete Object
*GeneralApi* | [**editObject**](docs/Api/GeneralApi.md#editobject) | **PATCH** /v1/apps/{app_id}/objects | Edit Object
*GeneralApi* | [**getObject**](docs/Api/GeneralApi.md#getobject) | **GET** /v1/apps/{app_id}/objects | Get Object
*GeneralApi* | [**getRecentEvents**](docs/Api/GeneralApi.md#getrecentevents) | **GET** /v1/apps/{app_id}/recent-events | Get Recent Events
*GeneralApi* | [**getRelationshipCounts**](docs/Api/GeneralApi.md#getrelationshipcounts) | **GET** /v1/apps/{app_id}/relationship-counts | Get Relationship Counts
*GeneralApi* | [**getRelationshipExists**](docs/Api/GeneralApi.md#getrelationshipexists) | **GET** /v1/apps/{app_id}/relationship-exists | Get Relationship Exists
*RecommendationsApi* | [**getRecommendedContent**](docs/Api/RecommendationsApi.md#getrecommendedcontent) | **GET** /v1/apps/{app_id}/algos/recommendations/content | Get Recommended Content (for user)
*RecommendationsApi* | [**getRecommendedUsersToFollow**](docs/Api/RecommendationsApi.md#getrecommendeduserstofollow) | **GET** /v1/apps/{app_id}/algos/recommendations/users-to-follow | Get Recommended Users to Follow (for user)
*RecommendationsApi* | [**getRelatedContent**](docs/Api/RecommendationsApi.md#getrelatedcontent) | **GET** /v1/apps/{app_id}/algos/recommendations/related-content | Get Related Content
*RecommendationsApi* | [**getRelatedTags**](docs/Api/RecommendationsApi.md#getrelatedtags) | **GET** /v1/apps/{app_id}/algos/recommendations/related-tags | Get Related Tags
*RecommendationsApi* | [**getRelatedUsers**](docs/Api/RecommendationsApi.md#getrelatedusers) | **GET** /v1/apps/{app_id}/algos/recommendations/related-users | Get Related Users


## Documentation For Models

 - [Errors](docs/Model/Errors.md)
 - [GetActivityActionsFeedResult](docs/Model/GetActivityActionsFeedResult.md)
 - [GetActivityActionsFeedResultActions](docs/Model/GetActivityActionsFeedResultActions.md)
 - [GetActivityActionsFeedResultEvents](docs/Model/GetActivityActionsFeedResultEvents.md)
 - [GetActivityFeedResult](docs/Model/GetActivityFeedResult.md)
 - [GetActivityFeedResultEvents](docs/Model/GetActivityFeedResultEvents.md)
 - [GetActivityOnObjectResult](docs/Model/GetActivityOnObjectResult.md)
 - [GetActivityOnObjectResultEvents](docs/Model/GetActivityOnObjectResultEvents.md)
 - [GetRecentEventsConfig](docs/Model/GetRecentEventsConfig.md)
 - [GetRecentEventsResultItem](docs/Model/GetRecentEventsResultItem.md)
 - [GetRecentEventsResultItemEvent](docs/Model/GetRecentEventsResultItemEvent.md)
 - [ObjectReadable](docs/Model/ObjectReadable.md)
 - [ObjectType](docs/Model/ObjectType.md)
 - [PageInfo](docs/Model/PageInfo.md)
 - [RecommendationsContentResult](docs/Model/RecommendationsContentResult.md)
 - [RecommendationsContentResultItems](docs/Model/RecommendationsContentResultItems.md)
 - [RecommendationsResult](docs/Model/RecommendationsResult.md)
 - [RecommendationsResultItems](docs/Model/RecommendationsResultItems.md)
 - [RelationshipCountsResult](docs/Model/RelationshipCountsResult.md)
 - [RelationshipCountsResultStats](docs/Model/RelationshipCountsResultStats.md)
 - [RelationshipDirection](docs/Model/RelationshipDirection.md)
 - [RelationshipExistsResult](docs/Model/RelationshipExistsResult.md)
 - [RelationshipReadable](docs/Model/RelationshipReadable.md)
 - [RelationshipType](docs/Model/RelationshipType.md)
 - [RelationshipWriteable](docs/Model/RelationshipWriteable.md)


## Documentation For Authorization



## App_API_Key


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author



