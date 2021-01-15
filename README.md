# MadanaAPIClient

<h1>Using the madana-api</h1>
       <p>This documentation contains a Quickstart Guide, relating client functionality and information about the available 
       endpoints and used datamodels.   </p>    

 <p> The madana-api and its implementations are still in heavy development. This means that there may be problems in our protocols, or there may be mistakes in our implementations. We take security vulnerabilities very seriously. If you discover a security issue, please bring it to our attention right away! If you find a vulnerability that may affect live deployments -- for example, by exposing a remote execution exploit -- please send your report privately to info@madana.io. Please DO NOT file a public issue. If the issue is a protocol weakness that cannot be immediately exploited or something not yet deployed, just discuss it openly   </p> 
 <br>
  <p> Note: Not all functionality might be acessible without having accquired and api-license token. For more information visit <a href=\"https://www.madana.io\">www.madana.io</a> </p>    
  <br>


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https:////.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MadanaAPIClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string

try {
    $result = $apiInstance->activateUser($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->activateUser: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://api.madana.io/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountServiceApi* | [**activateUser**](docs/Api/AccountServiceApi.md#activateuser) | **GET** /account/activation/{token} | 
*AccountServiceApi* | [**createPasswordReset**](docs/Api/AccountServiceApi.md#createpasswordreset) | **POST** /account/password | Sends an Password reset mail to the given MailAddress.
*AccountServiceApi* | [**requestVerificationMail**](docs/Api/AccountServiceApi.md#requestverificationmail) | **GET** /account/verifymail | Used to request a new  activation-mail for the user.
*AccountServiceApi* | [**updatePassword**](docs/Api/AccountServiceApi.md#updatepassword) | **PUT** /account/password | Receives the Password reset and tries to set the provided password for the user.
*AuthenticationServiceApi* | [**authenticateApplication**](docs/Api/AuthenticationServiceApi.md#authenticateapplication) | **POST** /authentication/application | Authenticates a new application and returns the token.
*AuthenticationServiceApi* | [**authenticateEthereumWallet**](docs/Api/AuthenticationServiceApi.md#authenticateethereumwallet) | **POST** /authentication/ethereum/{wallet} | 
*AuthenticationServiceApi* | [**authenticateUser**](docs/Api/AuthenticationServiceApi.md#authenticateuser) | **POST** /authentication | Authenticates a new user and returns the token (  forbidden if the credentials cannot be validated ).
*AuthenticationServiceApi* | [**authenticateWithEthereumChallenge**](docs/Api/AuthenticationServiceApi.md#authenticatewithethereumchallenge) | **POST** /authentication/ethereum/{wallet}/challenge | 
*AuthenticationServiceApi* | [**getFractalAuthenticationURL**](docs/Api/AuthenticationServiceApi.md#getfractalauthenticationurl) | **GET** /authentication/fractal | Returns the AUthorization URL to verify a Twitter Accounts.
*AuthenticationServiceApi* | [**getNonceForEthereumWallet**](docs/Api/AuthenticationServiceApi.md#getnonceforethereumwallet) | **GET** /authentication/ethereum/{wallet} | Returns a nonce for the client which is used as content for the to be created signature.
*AuthenticationServiceApi* | [**getObject**](docs/Api/AuthenticationServiceApi.md#getobject) | **GET** /authentication | Used to validate the active connection with the API.
*AuthenticationServiceApi* | [**getTwitterAuthenticationURL**](docs/Api/AuthenticationServiceApi.md#gettwitterauthenticationurl) | **GET** /authentication/twitter | Returns the AUthorization URL to verify a Twitter Accounts.
*AuthenticationServiceApi* | [**setFacebookUID**](docs/Api/AuthenticationServiceApi.md#setfacebookuid) | **POST** /authentication/facebook | Used as Callback URL when users have successfully authorized their facbeook account.
*AuthenticationServiceApi* | [**setFractalUID**](docs/Api/AuthenticationServiceApi.md#setfractaluid) | **POST** /authentication/fractal | 
*AuthenticationServiceApi* | [**setTwitterUID**](docs/Api/AuthenticationServiceApi.md#settwitteruid) | **POST** /authentication/twitter | 
*CertificateServiceApi* | [**authenticateCertificate**](docs/Api/CertificateServiceApi.md#authenticatecertificate) | **POST** /certificates | Issues certificates for logged-in users.
*CertificateServiceApi* | [**getCertificateByFingerprint**](docs/Api/CertificateServiceApi.md#getcertificatebyfingerprint) | **GET** /certificates/{fingerprint} | 
*CertificateServiceApi* | [**getRootCertificate**](docs/Api/CertificateServiceApi.md#getrootcertificate) | **GET** /certificates/root | 
*DataCollectionServiceApi* | [**getMethodsForType**](docs/Api/DataCollectionServiceApi.md#getmethodsfortype) | **GET** /datacollection/types/{name}/methods | 
*DataCollectionServiceApi* | [**getNodes**](docs/Api/DataCollectionServiceApi.md#getnodes) | **GET** /datacollection/methods | 
*DataCollectionServiceApi* | [**getTypes**](docs/Api/DataCollectionServiceApi.md#gettypes) | **GET** /datacollection/types | 
*EnclaveServiceApi* | [**addHistory**](docs/Api/EnclaveServiceApi.md#addhistory) | **POST** /enclaves/{uuid}/history | 
*EnclaveServiceApi* | [**approveEnclave**](docs/Api/EnclaveServiceApi.md#approveenclave) | **POST** /enclaves/{uuid}/approval | 
*EnclaveServiceApi* | [**assignEnclaveAgent**](docs/Api/EnclaveServiceApi.md#assignenclaveagent) | **POST** /enclaves/{uuid}/assign | 
*EnclaveServiceApi* | [**attestateEnclave**](docs/Api/EnclaveServiceApi.md#attestateenclave) | **POST** /enclaves/{uuid}/attestation | 
*EnclaveServiceApi* | [**createEnclaveRunRequest**](docs/Api/EnclaveServiceApi.md#createenclaverunrequest) | **POST** /enclaves | 
*EnclaveServiceApi* | [**getEnclave**](docs/Api/EnclaveServiceApi.md#getenclave) | **GET** /enclaves/{uuid} | 
*EnclaveServiceApi* | [**getEnclaveTypes**](docs/Api/EnclaveServiceApi.md#getenclavetypes) | **GET** /enclaves/types | 
*EnclaveServiceApi* | [**getEnclaves**](docs/Api/EnclaveServiceApi.md#getenclaves) | **GET** /enclaves | Returns UUIDs of existing analyses.
*EnclaveServiceApi* | [**killEnclave**](docs/Api/EnclaveServiceApi.md#killenclave) | **POST** /enclaves/{uuid}/kill | 
*EnvironmentServiceApi* | [**deleteEnvironment**](docs/Api/EnvironmentServiceApi.md#deleteenvironment) | **DELETE** /environments/{uuid} | 
*EnvironmentServiceApi* | [**deleteEnvironmentSubscription**](docs/Api/EnvironmentServiceApi.md#deleteenvironmentsubscription) | **DELETE** /environments/{uuid}/subscribe | 
*EnvironmentServiceApi* | [**getEnvironment**](docs/Api/EnvironmentServiceApi.md#getenvironment) | **GET** /environments/{uuid} | 
*EnvironmentServiceApi* | [**getEnvironments**](docs/Api/EnvironmentServiceApi.md#getenvironments) | **GET** /environments | Returns UUIDs of existing analyses.
*EnvironmentServiceApi* | [**getPublishedEnvironments**](docs/Api/EnvironmentServiceApi.md#getpublishedenvironments) | **GET** /environments/published | 
*EnvironmentServiceApi* | [**getSubscribedEnvironments**](docs/Api/EnvironmentServiceApi.md#getsubscribedenvironments) | **GET** /environments/subscriptions | 
*EnvironmentServiceApi* | [**publishEnvironment**](docs/Api/EnvironmentServiceApi.md#publishenvironment) | **POST** /environments | 
*EnvironmentServiceApi* | [**subscribeEnvironment**](docs/Api/EnvironmentServiceApi.md#subscribeenvironment) | **POST** /environments/{uuid}/subscribe | 
*EnvironmentServiceApi* | [**updateEnvironment**](docs/Api/EnvironmentServiceApi.md#updateenvironment) | **PUT** /environments/{uuid} | 
*InvoiceServiceApi* | [**getBillingPortalURL**](docs/Api/InvoiceServiceApi.md#getbillingportalurl) | **GET** /invoices/portal | 
*InvoiceServiceApi* | [**getInvoices**](docs/Api/InvoiceServiceApi.md#getinvoices) | **GET** /invoices | 
*NodeServiceApi* | [**getBootstrap**](docs/Api/NodeServiceApi.md#getbootstrap) | **GET** /nodes/bootstrap | 
*NodeServiceApi* | [**getNodes2**](docs/Api/NodeServiceApi.md#getnodes2) | **GET** /nodes | 
*NodeServiceApi* | [**postNodeInfo**](docs/Api/NodeServiceApi.md#postnodeinfo) | **POST** /nodes | 
*OrganizationServiceApi* | [**getNodes3**](docs/Api/OrganizationServiceApi.md#getnodes3) | **GET** /organizations | 
*RequestServiceApi* | [**addData**](docs/Api/RequestServiceApi.md#adddata) | **POST** /requests/{uuid}/data | Is used to upload and park the data till the AnalysisRequest gets processed.
*RequestServiceApi* | [**cancelProcessing**](docs/Api/RequestServiceApi.md#cancelprocessing) | **POST** /requests/{uuid}/cancel | Endpoint is called from the Analysis Processing entity to submit the result.
*RequestServiceApi* | [**createNewRequest**](docs/Api/RequestServiceApi.md#createnewrequest) | **POST** /requests | Endpoint used to create a new Analysis Request.
*RequestServiceApi* | [**getActions**](docs/Api/RequestServiceApi.md#getactions) | **GET** /requests/actions | 
*RequestServiceApi* | [**getAgent**](docs/Api/RequestServiceApi.md#getagent) | **GET** /requests/{uuid}/agent | Is called from the APE to request all parked datasets.
*RequestServiceApi* | [**getAllRequests**](docs/Api/RequestServiceApi.md#getallrequests) | **GET** /requests | Returns UUIDs of existing analyses.
*RequestServiceApi* | [**getData**](docs/Api/RequestServiceApi.md#getdata) | **GET** /requests/{uuid}/data | Is called from the APE to request all parked datasets.
*RequestServiceApi* | [**getRequest**](docs/Api/RequestServiceApi.md#getrequest) | **GET** /requests/{uuid} | Returns the details for certain Request.
*RequestServiceApi* | [**getResult**](docs/Api/RequestServiceApi.md#getresult) | **GET** /requests/{uuid}/result | Can be called from creator to request the AnalysisResult.
*RequestServiceApi* | [**getStatus**](docs/Api/RequestServiceApi.md#getstatus) | **GET** /requests/stats | 
*RequestServiceApi* | [**giveConsent**](docs/Api/RequestServiceApi.md#giveconsent) | **POST** /requests/{uuid}/consent | Used to give consent for request.
*RequestServiceApi* | [**initRequestParameters**](docs/Api/RequestServiceApi.md#initrequestparameters) | **POST** /requests/{uuid} | Endpoint used initialized addition datacollection parameters for requester.
*RequestServiceApi* | [**setAgent**](docs/Api/RequestServiceApi.md#setagent) | **POST** /requests/{uuid}/agent | Is called from the APE to request all parked datasets.
*RequestServiceApi* | [**setResult**](docs/Api/RequestServiceApi.md#setresult) | **POST** /requests/{uuid}/result | Endpoint is called from the Analysis Processing entity to submit the result.
*SocialPlatformServiceApi* | [**getPlatforms**](docs/Api/SocialPlatformServiceApi.md#getplatforms) | **GET** /platforms | Used to Handle Incoming Webhooks from Facebook.
*SocialPlatformServiceApi* | [**listenTwitterWebhook**](docs/Api/SocialPlatformServiceApi.md#listentwitterwebhook) | **POST** /platforms/twitter | Used to Handle Incoming Webhooks from Facebook.
*SocialPlatformServiceApi* | [**registerTwitterWebhook**](docs/Api/SocialPlatformServiceApi.md#registertwitterwebhook) | **GET** /platforms/twitter | Used to Handle Incoming Webhooks from Twitter.
*SocialServiceApi* | [**getMyProfile**](docs/Api/SocialServiceApi.md#getmyprofile) | **GET** /social/profiles/me | 
*SocialServiceApi* | [**getPlatforms2**](docs/Api/SocialServiceApi.md#getplatforms2) | **GET** /social | Returns all Platforms / Systems that can be Connected to the MADANA Service.
*SocialServiceApi* | [**getRanking**](docs/Api/SocialServiceApi.md#getranking) | **GET** /social/ranking | Returns the Ranking by PTS within the System.
*SocialServiceApi* | [**getSocialPlatformFeed**](docs/Api/SocialServiceApi.md#getsocialplatformfeed) | **GET** /social/feed/{platform} | 
*SocialServiceApi* | [**getUserProfile**](docs/Api/SocialServiceApi.md#getuserprofile) | **GET** /social/profiles/{username} | 
*SocialServiceApi* | [**getUserProfile_0**](docs/Api/SocialServiceApi.md#getuserprofile_0) | **GET** /social/profiles/{username}/simple | 
*SubscriptionServiceApi* | [**addFreeSubscription**](docs/Api/SubscriptionServiceApi.md#addfreesubscription) | **POST** /subscriptions/saas/free | 
*SubscriptionServiceApi* | [**addPassTrialSubscription**](docs/Api/SubscriptionServiceApi.md#addpasstrialsubscription) | **POST** /subscriptions/paas/trial | 
*SubscriptionServiceApi* | [**getApplication**](docs/Api/SubscriptionServiceApi.md#getapplication) | **GET** /subscriptions/active | 
*SystemServiceApi* | [**getAllObjects**](docs/Api/SystemServiceApi.md#getallobjects) | **GET** /system/health | 
*SystemServiceApi* | [**getApplication2**](docs/Api/SystemServiceApi.md#getapplication2) | **GET** /system/usage | Return the current application usage.
*UserServiceApi* | [**createObject**](docs/Api/UserServiceApi.md#createobject) | **POST** /users | Creates a new user object.
*UserServiceApi* | [**deleteObject**](docs/Api/UserServiceApi.md#deleteobject) | **DELETE** /users/{username} | Deletes an User based on the provided id and securitycontext.
*UserServiceApi* | [**deleteObject_0**](docs/Api/UserServiceApi.md#deleteobject_0) | **DELETE** /users/{username}/social/{platform}/{ident} | Deletes linked account from the user and securitycontext.
*UserServiceApi* | [**getAvatars**](docs/Api/UserServiceApi.md#getavatars) | **GET** /users/{username}/avatars | 
*UserServiceApi* | [**getCertificates**](docs/Api/UserServiceApi.md#getcertificates) | **GET** /users/{username}/certificates | 
*UserServiceApi* | [**getEnclaveHistory**](docs/Api/UserServiceApi.md#getenclavehistory) | **GET** /users/{username}/enclavehistory | 
*UserServiceApi* | [**getObject2**](docs/Api/UserServiceApi.md#getobject2) | **GET** /users/{username} | 
*UserServiceApi* | [**setAvatar**](docs/Api/UserServiceApi.md#setavatar) | **POST** /users/{username}/avatars | 
*UserServiceApi* | [**setSettings**](docs/Api/UserServiceApi.md#setsettings) | **POST** /users/{username}/settings | 
*UserServiceApi* | [**updateObject**](docs/Api/UserServiceApi.md#updateobject) | **PUT** /users/{username} | Updates Userproperties based on the provided user object.

## Models

- [JsonDiskConfig](docs/Model/JsonDiskConfig.md)
- [JsonEnclavePort](docs/Model/JsonEnclavePort.md)
- [JsonEnclaveProcess](docs/Model/JsonEnclaveProcess.md)
- [JsonEnclaveRunRequest](docs/Model/JsonEnclaveRunRequest.md)
- [JsonEnclaveRunningAttestation](docs/Model/JsonEnclaveRunningAttestation.md)
- [JsonEnclaveRunningAttestationApproval](docs/Model/JsonEnclaveRunningAttestationApproval.md)
- [JsonEnclaveRunningAttestationApprovalAllOf](docs/Model/JsonEnclaveRunningAttestationApprovalAllOf.md)
- [JsonEnvironment](docs/Model/JsonEnvironment.md)
- [JsonEnvironmentPublishingRequest](docs/Model/JsonEnvironmentPublishingRequest.md)
- [JsonIPFSSystemInfo](docs/Model/JsonIPFSSystemInfo.md)
- [JsonKubernetesEnclave](docs/Model/JsonKubernetesEnclave.md)
- [JsonKubernetesEnclaveAllOf](docs/Model/JsonKubernetesEnclaveAllOf.md)
- [JsonMDNAUserObject](docs/Model/JsonMDNAUserObject.md)
- [JsonMDNCertificate](docs/Model/JsonMDNCertificate.md)
- [JsonMDNData](docs/Model/JsonMDNData.md)
- [JsonMDNMailAddress](docs/Model/JsonMDNMailAddress.md)
- [JsonMDNOAuthToken](docs/Model/JsonMDNOAuthToken.md)
- [JsonMDNPasswordReset](docs/Model/JsonMDNPasswordReset.md)
- [JsonMDNSetting](docs/Model/JsonMDNSetting.md)
- [JsonMDNSocialUserObject](docs/Model/JsonMDNSocialUserObject.md)
- [JsonMDNToken](docs/Model/JsonMDNToken.md)
- [JsonMDNUser](docs/Model/JsonMDNUser.md)
- [JsonMDNUserAllOf](docs/Model/JsonMDNUserAllOf.md)
- [JsonMDNUserCredentials](docs/Model/JsonMDNUserCredentials.md)
- [JsonMDNUserProfileImage](docs/Model/JsonMDNUserProfileImage.md)
- [JsonMDNUserSetting](docs/Model/JsonMDNUserSetting.md)
- [JsonMDNUserSettingAllOf](docs/Model/JsonMDNUserSettingAllOf.md)
- [JsonNetworkInterface](docs/Model/JsonNetworkInterface.md)
- [JsonNodeInfo](docs/Model/JsonNodeInfo.md)
- [JsonProcess](docs/Model/JsonProcess.md)
- [JsonRunConfig](docs/Model/JsonRunConfig.md)
- [JsonSGXInfo](docs/Model/JsonSGXInfo.md)
- [JsonSignedData](docs/Model/JsonSignedData.md)
- [JsonSignedDataUtils](docs/Model/JsonSignedDataUtils.md)
- [JsonV1Event](docs/Model/JsonV1Event.md)
- [JsonV1EventList](docs/Model/JsonV1EventList.md)
- [JsonV1EventSeries](docs/Model/JsonV1EventSeries.md)
- [JsonV1EventSource](docs/Model/JsonV1EventSource.md)
- [JsonV1ListMeta](docs/Model/JsonV1ListMeta.md)
- [JsonV1ManagedFieldsEntry](docs/Model/JsonV1ManagedFieldsEntry.md)
- [JsonV1ObjectMeta](docs/Model/JsonV1ObjectMeta.md)
- [JsonV1ObjectReference](docs/Model/JsonV1ObjectReference.md)
- [JsonV1OwnerReference](docs/Model/JsonV1OwnerReference.md)
- [JsonWireguardInterface](docs/Model/JsonWireguardInterface.md)
- [JsonWireguardInterfaceAllOf](docs/Model/JsonWireguardInterfaceAllOf.md)
- [XmlNs0DiskConfig](docs/Model/XmlNs0DiskConfig.md)
- [XmlNs0DiskConfigAllOf](docs/Model/XmlNs0DiskConfigAllOf.md)
- [XmlNs0EnclavePort](docs/Model/XmlNs0EnclavePort.md)
- [XmlNs0EnclavePortAllOf](docs/Model/XmlNs0EnclavePortAllOf.md)
- [XmlNs0EnclaveProcess](docs/Model/XmlNs0EnclaveProcess.md)
- [XmlNs0EnclaveProcessAllOf](docs/Model/XmlNs0EnclaveProcessAllOf.md)
- [XmlNs0EnclaveRunningAttestation](docs/Model/XmlNs0EnclaveRunningAttestation.md)
- [XmlNs0EnclaveRunningAttestationAllOf](docs/Model/XmlNs0EnclaveRunningAttestationAllOf.md)
- [XmlNs0EnclaveRunningAttestationApproval](docs/Model/XmlNs0EnclaveRunningAttestationApproval.md)
- [XmlNs0EnclaveRunningAttestationApprovalAllOf](docs/Model/XmlNs0EnclaveRunningAttestationApprovalAllOf.md)
- [XmlNs0Environment](docs/Model/XmlNs0Environment.md)
- [XmlNs0EnvironmentAllOf](docs/Model/XmlNs0EnvironmentAllOf.md)
- [XmlNs0IPFSSystemInfo](docs/Model/XmlNs0IPFSSystemInfo.md)
- [XmlNs0IPFSSystemInfoAllOf](docs/Model/XmlNs0IPFSSystemInfoAllOf.md)
- [XmlNs0InputStream](docs/Model/XmlNs0InputStream.md)
- [XmlNs0KubernetesEnclave](docs/Model/XmlNs0KubernetesEnclave.md)
- [XmlNs0KubernetesEnclaveAllOf](docs/Model/XmlNs0KubernetesEnclaveAllOf.md)
- [XmlNs0MDNSetting](docs/Model/XmlNs0MDNSetting.md)
- [XmlNs0MDNSettingAllOf](docs/Model/XmlNs0MDNSettingAllOf.md)
- [XmlNs0MDNUserProfileImage](docs/Model/XmlNs0MDNUserProfileImage.md)
- [XmlNs0MDNUserProfileImageAllOf](docs/Model/XmlNs0MDNUserProfileImageAllOf.md)
- [XmlNs0MDNUserSetting](docs/Model/XmlNs0MDNUserSetting.md)
- [XmlNs0MDNUserSettingAllOf](docs/Model/XmlNs0MDNUserSettingAllOf.md)
- [XmlNs0NetworkInterface](docs/Model/XmlNs0NetworkInterface.md)
- [XmlNs0NetworkInterfaceAllOf](docs/Model/XmlNs0NetworkInterfaceAllOf.md)
- [XmlNs0NodeInfo](docs/Model/XmlNs0NodeInfo.md)
- [XmlNs0NodeInfoAllOf](docs/Model/XmlNs0NodeInfoAllOf.md)
- [XmlNs0Process](docs/Model/XmlNs0Process.md)
- [XmlNs0RunConfig](docs/Model/XmlNs0RunConfig.md)
- [XmlNs0RunConfigAllOf](docs/Model/XmlNs0RunConfigAllOf.md)
- [XmlNs0SGXInfo](docs/Model/XmlNs0SGXInfo.md)
- [XmlNs0SGXInfoAllOf](docs/Model/XmlNs0SGXInfoAllOf.md)
- [XmlNs0SignedData](docs/Model/XmlNs0SignedData.md)
- [XmlNs0SignedDataAllOf](docs/Model/XmlNs0SignedDataAllOf.md)
- [XmlNs0WireguardInterface](docs/Model/XmlNs0WireguardInterface.md)
- [XmlNs0WireguardInterfaceAllOf](docs/Model/XmlNs0WireguardInterfaceAllOf.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.5.0-master.34`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
