# # InlineObject14

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | [**\Pipeless\Model\ObjectLookup**](ObjectLookup.md) |  | 
**followed_relationship_type** | **string** | The relationship type used to represent a user following another user. If this value is not provided, then collabrative filtering will not be used for the algo. | [optional] [default to 'followed']
**content_tagged_relationship_type** | **string** | The relationship type that represents content (created by users) being tagged. If this value is not provided, then tag data will not be used for the algo. | [optional] [default to 'taggedWith']
**content_tagged_object_type** | **string** | The object tyoe that represents a tag for the content a user can publish. If this value is not set, and content tagged relationship type has been set, then this will default to \&quot;tag\&quot;. | [optional] 
**content_object_type** | **string** | Object type of the content users publish. If this value is not set, and content tagged relationship type has been set, then this value will default to \&quot;post\&quot;. | [optional] 
**content_published_relationship_type** | **string** | Teh relationship type that represents a user publishing content. If this value is not set, and content tagged relationship type has been set, then this value will default to \&quot;posted\&quot;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


