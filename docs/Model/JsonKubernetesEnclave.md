# # JsonKubernetesEnclave

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_ident** | **string** |  | [optional]
**internal_wireguard_server** | **string** |  | [optional]
**wireguard_server** | **string** |  | [optional]
**wireguard_public_key** | **string** |  | [optional]
**enclave_inputstream** | **object** |  | [optional]
**environment** | [**\OpenAPI\Client\Model\JsonEnvironment**](JsonEnvironment.md) |  | [optional]
**status** | **string** |  | [optional]
**startup_cmd** | **string** |  | [optional]
**attestation_server** | **string** |  | [optional]
**console_output** | **string** |  | [optional]
**ending_time** | **string** |  | [optional]
**internal_attesation_server** | **string** |  | [optional]
**wg_interface** | [**\OpenAPI\Client\Model\JsonWireguardInterface**](JsonWireguardInterface.md) |  | [optional]
**remote_control_server** | **string** |  | [optional]
**internal_ident** | **string** |  | [optional]
**process** | [**\OpenAPI\Client\Model\JsonProcess**](JsonProcess.md) |  | [optional]
**enclave_ident** | **string** |  | [optional]
**port_mapping** | **map[string,string]** |  | [optional]
**startup_time** | **string** |  | [optional]
**kubernetes_enclave** | [**\OpenAPI\Client\Model\JsonKubernetesEnclave**](JsonKubernetesEnclave.md) |  | [optional]
**internal_remote_control_server** | **string** |  | [optional]
**public_ident** | **string** |  | [optional]
**ports** | [**\OpenAPI\Client\Model\JsonEnclavePort[]**](JsonEnclavePort.md) |  | [optional]
**enclave_pod_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**remote_control_ip** | **string** |  | [optional]
**enclave_replica_set_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]
**attestation_port** | **int** |  | [optional]
**debug_info** | **string** |  | [optional]
**pod_phase** | **string** |  | [optional]
**is_using_init_container** | **bool** |  | [optional]
**wireguard_port** | **int** |  | [optional]
**enclave_deployment_events** | [**\OpenAPI\Client\Model\JsonV1EventList**](JsonV1EventList.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
