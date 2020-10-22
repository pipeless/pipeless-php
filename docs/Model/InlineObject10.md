# # InlineObject10

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object** | [**\Pipeless\Model\ObjectLookup**](ObjectLookup.md) |  | 
**content_object_type** | **string** | The type of object that is being recommended. | 
**primary_positive_relationship_type** | **string** | The primary positive indicator a user can take on the content type that&#39;s being recommended. This should be the action a user can take that you consider most important to indicating that an object appeals to their tastes. If value is not provided, it will default to \&quot;liked\&quot;. | [optional] [default to 'liked']
**secondary_positive_relationship_type** | **string** | The secondary positive indicator a user can take on the content type that&#39;s being recommended. This should be the action a user can take that you consider to be important in indicating that an object appeals to their tastes. It will be weighted less than the primary positive relationship type, but still taken into account. If value is not provided, it will default to \&quot;viewed\&quot;. | [optional] [default to 'viewed']
**primary_negative_relationship_type** | **string** | The primary negative action a user can take on the content type. This should be the action a user can take that you consider to be important in indicating that an object does not appeal to their tastes. Content that the user marked with this type will not be returned in recommendation results. If value is not provided, it will default to \&quot;disliked\&quot;. | [optional] [default to 'disliked']
**content_tagged_relationship_type** | **string** | Set this relationship to the relationship you use to set tags on the content that is being recommended. If a value is not provided, \&quot;taggedWith\&quot; will be used by default. | [optional] [default to 'taggedWith']
**content_tag_object_type** | **string** | Set this relationship to the object you use for tags on the content that is being recommended. If a value is not provided, \&quot;tag\&quot; will be used by default. | [optional] [default to 'tag']
**coldstart_tag_ids** | **string[]** | You can use this option to provide some ids of tags you want to contribute to coldstart recommendations if no real recommendations are yet available for a user. If you provide one or more tag ids for this field, trending content from those tags will be used as coldstart recommendations when personalized recommendations are not available. | [optional] 
**limit** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


