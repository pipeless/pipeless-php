# # InlineObject11

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | [**\Pipeless\Model\ObjectLookup**](ObjectLookup.md) |  | 
**followed_relationship_type** | **string** | The relationship type in your data that is used to represent a user (or other type) following someone else. If this value is not provided, it will default to \&quot;followed\&quot;. | [optional] [default to 'followed']
**content_created_relationship_type** | **string** | A relationship type that represents a user creating content in your data. If no value is provided, this will default to \&quot;posted\&quot;. | [optional] [default to 'posted']
**positive_relationship_type** | **string** | The positive indicator a user can take on the content type that users can create. This should be the action a user can take that you consider most important to indicating that an object appeals to their tastes. If value is not provided, it will default to \&quot;liked\&quot;. | [optional] [default to 'liked']
**content_tagged_relationship_type** | **string** | Set this relationship to the relationship you use to set tags on the content that is created by users. If a value is not provided, \&quot;taggedWith\&quot; will be used by default. | [optional] [default to 'taggedWith']
**content_object_type** | **string** | The type of object that represents the content being created by users. If no value is provided, this defaults to \&quot;post\&quot;. | [optional] [default to 'article']
**content_tag_object_type** | **string** | Set this type to the object you use for tags on the content that is created by your users. If a value is not provided, \&quot;tag\&quot; will be used by default. | [optional] [default to 'tag']
**limit** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


