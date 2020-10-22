# # RelationshipWriteable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | [**\Pipeless\Model\RelationshipType**](RelationshipType.md) |  | 
**created_on** | [**\DateTime**](\DateTime.md) | An optional DateTime string in the format YYYY-MM-DDTHH:MM:SS in whatever timezone you use. If not set, and the relationship needs to be created, this value will be set to the current UTC time. | [optional] 
**single** | **bool** | Whether the relationship can be duplicated or not. If single is true (default), then a relationship of each type can only exist once between the same start and end objects. If false, a relationship of the same type can exist multiple times between the same start and end objects. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


