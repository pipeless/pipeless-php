# # InlineObject13

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | [**\Pipeless\Model\ObjectLookup**](ObjectLookup.md) |  | 
**content_tagged_relationship_type** | **string** | The relationship type that represents content being tagged with a tag in your data. If not provided, then tags will not be considered in this algo. | [optional] 
**content_tagged_object_type** | **string** | The object type that represents a tag in your data. If not provided, and content tagged relationship type was provided, this will default to \&quot;tag\&quot;. | [optional] 
**positive_rel** | **string** | The relationship of a positive action that users (or whatever actor type) can take on the content type. If the value is not provided, then collabrative filtering will not be used in the algo. | [optional] 
**actor_object_type** | **string** | The type of the object that acts on the target content (ex. user). If this value is not provided, and positive rel is set, then this will default to \&quot;user\&quot;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


