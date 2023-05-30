# Go API client for edgenode

Azion Orchestration

## Overview
This API client was generated by the [OpenAPI Generator](https://openapi-generator.tech) project.  By using the [OpenAPI-spec](https://www.openapis.org/) from a remote server, you can easily generate an API client.

- API version: 2.0.0
- Package version: 1.0.0
- Build package: org.openapitools.codegen.languages.GoClientCodegen

## Installation

Install the following dependencies:

```shell
go get github.com/stretchr/testify/assert
go get golang.org/x/net/context
```

Put the package under your project folder and add the following in import:

```golang
import edgenode "github.com/GIT_USER_ID/GIT_REPO_ID"
```

To use a proxy, set the environment variable `HTTP_PROXY`:

```golang
os.Setenv("HTTP_PROXY", "http://proxy_name:proxy_port")
```

## Configuration of Server URL

Default configuration comes with `Servers` field that contains server objects as defined in the OpenAPI specification.

### Select Server Configuration

For using other server than the one defined on index 0 set context value `sw.ContextServerIndex` of type `int`.

```golang
ctx := context.WithValue(context.Background(), edgenode.ContextServerIndex, 1)
```

### Templated Server URL

Templated server URL is formatted using default variables from configuration or from context value `sw.ContextServerVariables` of type `map[string]string`.

```golang
ctx := context.WithValue(context.Background(), edgenode.ContextServerVariables, map[string]string{
	"basePath": "v2",
})
```

Note, enum values are always validated and all unused variables are silently ignored.

### URLs Configuration per Operation

Each operation can use different server URL defined using `OperationServers` map in the `Configuration`.
An operation is uniquely identified by `"{classname}Service.{nickname}"` string.
Similar rules for overriding default operation server index and variables applies by using `sw.ContextOperationServerIndices` and `sw.ContextOperationServerVariables` context maps.

```golang
ctx := context.WithValue(context.Background(), edgenode.ContextOperationServerIndices, map[string]int{
	"{classname}Service.{nickname}": 2,
})
ctx = context.WithValue(context.Background(), edgenode.ContextOperationServerVariables, map[string]map[string]string{
	"{classname}Service.{nickname}": {
		"port": "8443",
	},
})
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost:3001*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**AuthorizeEdgeNode**](docs/DefaultApi.md#authorizeedgenode) | **Patch** /edge_nodes/authorize | Authorize edge-node
*DefaultApi* | [**CreateEdgeNodeSvcs**](docs/DefaultApi.md#createedgenodesvcs) | **Post** /edge_nodes/{edgenodeId}/services | Create an edge-node Service association
*DefaultApi* | [**DelEdgeNode**](docs/DefaultApi.md#deledgenode) | **Delete** /edge_nodes/{edgenodeId} | Delete edge-node by ID
*DefaultApi* | [**DelEdgeNodeSvc**](docs/DefaultApi.md#deledgenodesvc) | **Delete** /edge_nodes/{edgenodeId}/services/{bindId} | Delete an edge-node Service association
*DefaultApi* | [**GetEdgeNode**](docs/DefaultApi.md#getedgenode) | **Get** /edge_nodes/{edgenodeId} | Return edge-node by ID
*DefaultApi* | [**GetEdgeNodeGroups**](docs/DefaultApi.md#getedgenodegroups) | **Get** /edge_nodes/groups | Return edge-node groups
*DefaultApi* | [**GetEdgeNodeSvcDetail**](docs/DefaultApi.md#getedgenodesvcdetail) | **Get** /edge_nodes/{edgenodeId}/services/{bindId} | Return edge-node Service association by ID
*DefaultApi* | [**GetEdgeNodeSvcs**](docs/DefaultApi.md#getedgenodesvcs) | **Get** /edge_nodes/{edgenodeId}/services | Return edge-node Services association
*DefaultApi* | [**GetEdgeNodes**](docs/DefaultApi.md#getedgenodes) | **Get** /edge_nodes | Return edge-nodes
*DefaultApi* | [**UpdateEdgeNode**](docs/DefaultApi.md#updateedgenode) | **Patch** /edge_nodes/{edgenodeId} | Update edge-node
*DefaultApi* | [**UpdateEdgeNodeSvcDetail**](docs/DefaultApi.md#updateedgenodesvcdetail) | **Patch** /edge_nodes/{edgenodeId}/services/{bindId} | Update edge-node Service association by ID


## Documentation For Models

 - [AuthorizeEdgeNodesRequest](docs/AuthorizeEdgeNodesRequest.md)
 - [AuthorizeEdgeNodesResponse](docs/AuthorizeEdgeNodesResponse.md)
 - [EdgeNodeDetailResponse](docs/EdgeNodeDetailResponse.md)
 - [EdgeNodeModules](docs/EdgeNodeModules.md)
 - [EdgeNodeResponse](docs/EdgeNodeResponse.md)
 - [EdgeNodeResponseWithTotal](docs/EdgeNodeResponseWithTotal.md)
 - [NodeGroup](docs/NodeGroup.md)
 - [NodeGroupResponse](docs/NodeGroupResponse.md)
 - [ServiceBindDetailResponse](docs/ServiceBindDetailResponse.md)
 - [ServiceBindRequest](docs/ServiceBindRequest.md)
 - [ServiceResponse](docs/ServiceResponse.md)
 - [ServiceResponseWithTotal](docs/ServiceResponseWithTotal.md)
 - [UnauthorizedEdgeNodeInfo](docs/UnauthorizedEdgeNodeInfo.md)
 - [UpdateEdgeNodeResponse](docs/UpdateEdgeNodeResponse.md)
 - [UpdateServiceBindRequest](docs/UpdateServiceBindRequest.md)
 - [Variable](docs/Variable.md)


## Documentation For Authorization


Authentication schemes defined for the API:
### bearerAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

Note, each API key must be added to a map of `map[string]APIKey` where the key is: Authorization and passed in as the auth context for each request.


## Documentation for Utility Methods

Due to the fact that model structure members are all pointers, this package contains
a number of utility functions to easily obtain pointers to values of basic types.
Each of these functions takes a value of the given basic type and returns a pointer to it:

* `PtrBool`
* `PtrInt`
* `PtrInt32`
* `PtrInt64`
* `PtrFloat`
* `PtrFloat32`
* `PtrFloat64`
* `PtrString`
* `PtrTime`

## Author


