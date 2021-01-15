# # JsonKubernetesEnclave

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ports** | [**\OpenAPI\Client\Model\JsonEnclavePort[]**](JsonEnclavePort.md) |  | [optional]
**wg_interface** | [**\OpenAPI\Client\Model\JsonWireguardInterface**](JsonWireguardInterface.md) |  | [optional]
**console_output** | **string** |  | [optional]
**startup_time** | **string** |  | [optional]
**wireguard_server** | **string** |  | [optional]
**ending_time** | **string** |  | [optional]
**port_mapping** | **map[string,string]** |  | [optional]
**enclave_ident** | **string** |  | [optional]
**public_ident** | **string** |  | [optional]
**remote_control_server** | **string** |  | [optional]
**wireguard_public_key** | **string** |  | [optional]
**kubernetes_enclave** | [**\OpenAPI\Client\Model\JsonKubernetesEnclave**](JsonKubernetesEnclave.md) |  | [optional]
**internal_attesation_server** | **string** |  | [optional]
**environment** | [**\OpenAPI\Client\Model\JsonEnvironment**](JsonEnvironment.md) |  | [optional]
**process** | [**\OpenAPI\Client\Model\JsonProcess**](JsonProcess.md) |  | [optional]
**internal_wireguard_server** | **string** |  | [optional]
**startup_cmd** | **string** |  | [optional]
**internal_remote_control_server** | **string** |  | [optional]
**status** | **string** |  | [optional]
**internal_ident** | **string** |  | [optional]
**signer_ident** | **string** |  | [optional]
**attestation_server** | **string** |  | [optional]
**enclave_inputstream** | **object** |  | [optional]
**remote_control_ip** | **string** |  | [optional]
**enclave_replica_set_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**enclave_deployment_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**pod_phase** | **string** |  | [optional]
**debug_info** | **string** |  | [optional]
**wireguard_port** | **int** |  | [optional]
**enclave_pod_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**is_using_init_container** | **bool** |  | [optional]
**attestation_port** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
