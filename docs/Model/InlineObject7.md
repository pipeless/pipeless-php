# # InlineObject7

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | [**\Pipeless\Model\ObjectLookup**](ObjectLookup.md) |  | 
**follow_relationship_types** | **string[]** | An array of the relationship types that represent the concept of \&quot;following\&quot; in your data. If none provided, by default the relationship type \&quot;followed\&quot; will be used. | [optional] 
**follow_object_types** | **string[]** | An array of the object types that can be followed in your dataset and that you want to be used for this activity feed. If none provided, by default any object type that is found based on the allowed follow_relationship_types will be used. | [optional] 
**event_relationship_types** | **string[]** | An array of the relationship types of the actions you want to show up in the activity feed. If none provided, by default any relationships that are present in the resulting feed items will be returned. | [optional] 
**event_object_types** | **string[]** | An array of the object types that can appear as content in the feed. If none provided, any object type that results from the other settings will be shown in the feed. | [optional] 
**exclude_self_object** | **bool** | If this value is false (the default), then the user you are fetching the feed for can appear in the feed results as an acting user (if the user follows themself) or action user (object that is being acted on by users the user follows). If set to true, the user the feed is being fetched for will not appear in the results. | [optional] 
**limit** | **int** |  | [optional] 
**before** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


