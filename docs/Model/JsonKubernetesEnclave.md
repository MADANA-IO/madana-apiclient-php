# # JsonKubernetesEnclave

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attestation_server** | **string** |  | [optional]
**startup_time** | **string** |  | [optional]
**wireguard_public_key** | **string** |  | [optional]
**wireguard_server** | **string** |  | [optional]
**status** | **string** |  | [optional]
**internal_ident** | **string** |  | [optional]
**environment** | [**\OpenAPI\Client\Model\JsonEnvironment**](JsonEnvironment.md) |  | [optional]
**signer_ident** | **string** |  | [optional]
**remote_control_server** | **string** |  | [optional]
**internal_wireguard_server** | **string** |  | [optional]
**startup_cmd** | **string** |  | [optional]
**wg_interface** | [**\OpenAPI\Client\Model\JsonWireguardInterface**](JsonWireguardInterface.md) |  | [optional]
**ending_time** | **string** |  | [optional]
**kubernetes_enclave** | [**\OpenAPI\Client\Model\JsonKubernetesEnclave**](JsonKubernetesEnclave.md) |  | [optional]
**ports** | [**\OpenAPI\Client\Model\JsonEnclavePort[]**](JsonEnclavePort.md) |  | [optional]
**internal_attesation_server** | **string** |  | [optional]
**console_output** | **string** |  | [optional]
**process** | [**\OpenAPI\Client\Model\JsonProcess**](JsonProcess.md) |  | [optional]
**enclave_inputstream** | **object** |  | [optional]
**internal_remote_control_server** | **string** |  | [optional]
**port_mapping** | **map[string,string]** |  | [optional]
**public_ident** | **string** |  | [optional]
**enclave_ident** | **string** |  | [optional]
**enclave_replica_set_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**enclave_deployment_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**enclave_pod_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**is_using_init_container** | **bool** |  | [optional]
**attestation_port** | **int** |  | [optional]
**wireguard_port** | **int** |  | [optional]
**remote_control_ip** | **string** |  | [optional]
**debug_info** | **string** |  | [optional]
**pod_phase** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
