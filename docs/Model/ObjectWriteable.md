# # ObjectWriteable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of your object. The id can be a string (up to 40 characters) containing any number, alpha character, spaces, or the following special characters: @-!#%^&amp;()/+&#x3D;;:&#39;\&quot;?&lt;&gt;\\][{}., | 
**type** | [**\Pipeless\Model\ObjectType**](ObjectType.md) |  | 
**created_on** | [**\DateTime**](\DateTime.md) | An optional DateTime string in the format YYYY-MM-DDTHH:MM:SS in whatever timezone you use. If not set, and the object needs to be created, this value will be set to the current UTC time. | [optional] 
**modified_on** | [**\DateTime**](\DateTime.md) | An optional DateTime string in the format YYYY-MM-DDTHH:MM:SS in whatever timezone you use. If not set, the value will be set to the same value as created_on. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


