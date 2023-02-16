<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;
    protected $normalizers = ['Docker\\API\\Model\\Port' => 'Docker\\API\\Normalizer\\PortNormalizer', 'Docker\\API\\Model\\MountPoint' => 'Docker\\API\\Normalizer\\MountPointNormalizer', 'Docker\\API\\Model\\DeviceMapping' => 'Docker\\API\\Normalizer\\DeviceMappingNormalizer', 'Docker\\API\\Model\\DeviceRequest' => 'Docker\\API\\Normalizer\\DeviceRequestNormalizer', 'Docker\\API\\Model\\ThrottleDevice' => 'Docker\\API\\Normalizer\\ThrottleDeviceNormalizer', 'Docker\\API\\Model\\Mount' => 'Docker\\API\\Normalizer\\MountNormalizer', 'Docker\\API\\Model\\MountBindOptions' => 'Docker\\API\\Normalizer\\MountBindOptionsNormalizer', 'Docker\\API\\Model\\MountVolumeOptions' => 'Docker\\API\\Normalizer\\MountVolumeOptionsNormalizer', 'Docker\\API\\Model\\MountVolumeOptionsDriverConfig' => 'Docker\\API\\Normalizer\\MountVolumeOptionsDriverConfigNormalizer', 'Docker\\API\\Model\\MountTmpfsOptions' => 'Docker\\API\\Normalizer\\MountTmpfsOptionsNormalizer', 'Docker\\API\\Model\\RestartPolicy' => 'Docker\\API\\Normalizer\\RestartPolicyNormalizer', 'Docker\\API\\Model\\Resources' => 'Docker\\API\\Normalizer\\ResourcesNormalizer', 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem' => 'Docker\\API\\Normalizer\\ResourcesBlkioWeightDeviceItemNormalizer', 'Docker\\API\\Model\\ResourcesUlimitsItem' => 'Docker\\API\\Normalizer\\ResourcesUlimitsItemNormalizer', 'Docker\\API\\Model\\Limit' => 'Docker\\API\\Normalizer\\LimitNormalizer', 'Docker\\API\\Model\\ResourceObject' => 'Docker\\API\\Normalizer\\ResourceObjectNormalizer', 'Docker\\API\\Model\\GenericResourcesItem' => 'Docker\\API\\Normalizer\\GenericResourcesItemNormalizer', 'Docker\\API\\Model\\GenericResourcesItemNamedResourceSpec' => 'Docker\\API\\Normalizer\\GenericResourcesItemNamedResourceSpecNormalizer', 'Docker\\API\\Model\\GenericResourcesItemDiscreteResourceSpec' => 'Docker\\API\\Normalizer\\GenericResourcesItemDiscreteResourceSpecNormalizer', 'Docker\\API\\Model\\HealthConfig' => 'Docker\\API\\Normalizer\\HealthConfigNormalizer', 'Docker\\API\\Model\\Health' => 'Docker\\API\\Normalizer\\HealthNormalizer', 'Docker\\API\\Model\\HealthcheckResult' => 'Docker\\API\\Normalizer\\HealthcheckResultNormalizer', 'Docker\\API\\Model\\HostConfig' => 'Docker\\API\\Normalizer\\HostConfigNormalizer', 'Docker\\API\\Model\\HostConfigLogConfig' => 'Docker\\API\\Normalizer\\HostConfigLogConfigNormalizer', 'Docker\\API\\Model\\ContainerConfig' => 'Docker\\API\\Normalizer\\ContainerConfigNormalizer', 'Docker\\API\\Model\\ContainerConfigExposedPortsItem' => 'Docker\\API\\Normalizer\\ContainerConfigExposedPortsItemNormalizer', 'Docker\\API\\Model\\ContainerConfigVolumesItem' => 'Docker\\API\\Normalizer\\ContainerConfigVolumesItemNormalizer', 'Docker\\API\\Model\\NetworkingConfig' => 'Docker\\API\\Normalizer\\NetworkingConfigNormalizer', 'Docker\\API\\Model\\NetworkSettings' => 'Docker\\API\\Normalizer\\NetworkSettingsNormalizer', 'Docker\\API\\Model\\Address' => 'Docker\\API\\Normalizer\\AddressNormalizer', 'Docker\\API\\Model\\PortBinding' => 'Docker\\API\\Normalizer\\PortBindingNormalizer', 'Docker\\API\\Model\\GraphDriverData' => 'Docker\\API\\Normalizer\\GraphDriverDataNormalizer', 'Docker\\API\\Model\\Image' => 'Docker\\API\\Normalizer\\ImageNormalizer', 'Docker\\API\\Model\\ImageRootFS' => 'Docker\\API\\Normalizer\\ImageRootFSNormalizer', 'Docker\\API\\Model\\ImageMetadata' => 'Docker\\API\\Normalizer\\ImageMetadataNormalizer', 'Docker\\API\\Model\\ImageSummary' => 'Docker\\API\\Normalizer\\ImageSummaryNormalizer', 'Docker\\API\\Model\\AuthConfig' => 'Docker\\API\\Normalizer\\AuthConfigNormalizer', 'Docker\\API\\Model\\ProcessConfig' => 'Docker\\API\\Normalizer\\ProcessConfigNormalizer', 'Docker\\API\\Model\\Volume' => 'Docker\\API\\Normalizer\\VolumeNormalizer', 'Docker\\API\\Model\\VolumeStatusItem' => 'Docker\\API\\Normalizer\\VolumeStatusItemNormalizer', 'Docker\\API\\Model\\VolumeUsageData' => 'Docker\\API\\Normalizer\\VolumeUsageDataNormalizer', 'Docker\\API\\Model\\Network' => 'Docker\\API\\Normalizer\\NetworkNormalizer', 'Docker\\API\\Model\\IPAM' => 'Docker\\API\\Normalizer\\IPAMNormalizer', 'Docker\\API\\Model\\NetworkContainer' => 'Docker\\API\\Normalizer\\NetworkContainerNormalizer', 'Docker\\API\\Model\\BuildInfo' => 'Docker\\API\\Normalizer\\BuildInfoNormalizer', 'Docker\\API\\Model\\BuildCache' => 'Docker\\API\\Normalizer\\BuildCacheNormalizer', 'Docker\\API\\Model\\ImageID' => 'Docker\\API\\Normalizer\\ImageIDNormalizer', 'Docker\\API\\Model\\CreateImageInfo' => 'Docker\\API\\Normalizer\\CreateImageInfoNormalizer', 'Docker\\API\\Model\\PushImageInfo' => 'Docker\\API\\Normalizer\\PushImageInfoNormalizer', 'Docker\\API\\Model\\ErrorDetail' => 'Docker\\API\\Normalizer\\ErrorDetailNormalizer', 'Docker\\API\\Model\\ProgressDetail' => 'Docker\\API\\Normalizer\\ProgressDetailNormalizer', 'Docker\\API\\Model\\ErrorResponse' => 'Docker\\API\\Normalizer\\ErrorResponseNormalizer', 'Docker\\API\\Model\\IdResponse' => 'Docker\\API\\Normalizer\\IdResponseNormalizer', 'Docker\\API\\Model\\EndpointSettings' => 'Docker\\API\\Normalizer\\EndpointSettingsNormalizer', 'Docker\\API\\Model\\EndpointIPAMConfig' => 'Docker\\API\\Normalizer\\EndpointIPAMConfigNormalizer', 'Docker\\API\\Model\\PluginMount' => 'Docker\\API\\Normalizer\\PluginMountNormalizer', 'Docker\\API\\Model\\PluginDevice' => 'Docker\\API\\Normalizer\\PluginDeviceNormalizer', 'Docker\\API\\Model\\PluginEnv' => 'Docker\\API\\Normalizer\\PluginEnvNormalizer', 'Docker\\API\\Model\\PluginInterfaceType' => 'Docker\\API\\Normalizer\\PluginInterfaceTypeNormalizer', 'Docker\\API\\Model\\Plugin' => 'Docker\\API\\Normalizer\\PluginNormalizer', 'Docker\\API\\Model\\PluginSettings' => 'Docker\\API\\Normalizer\\PluginSettingsNormalizer', 'Docker\\API\\Model\\PluginConfig' => 'Docker\\API\\Normalizer\\PluginConfigNormalizer', 'Docker\\API\\Model\\PluginConfigInterface' => 'Docker\\API\\Normalizer\\PluginConfigInterfaceNormalizer', 'Docker\\API\\Model\\PluginConfigUser' => 'Docker\\API\\Normalizer\\PluginConfigUserNormalizer', 'Docker\\API\\Model\\PluginConfigNetwork' => 'Docker\\API\\Normalizer\\PluginConfigNetworkNormalizer', 'Docker\\API\\Model\\PluginConfigLinux' => 'Docker\\API\\Normalizer\\PluginConfigLinuxNormalizer', 'Docker\\API\\Model\\PluginConfigArgs' => 'Docker\\API\\Normalizer\\PluginConfigArgsNormalizer', 'Docker\\API\\Model\\PluginConfigRootfs' => 'Docker\\API\\Normalizer\\PluginConfigRootfsNormalizer', 'Docker\\API\\Model\\ObjectVersion' => 'Docker\\API\\Normalizer\\ObjectVersionNormalizer', 'Docker\\API\\Model\\NodeSpec' => 'Docker\\API\\Normalizer\\NodeSpecNormalizer', 'Docker\\API\\Model\\Node' => 'Docker\\API\\Normalizer\\NodeNormalizer', 'Docker\\API\\Model\\NodeDescription' => 'Docker\\API\\Normalizer\\NodeDescriptionNormalizer', 'Docker\\API\\Model\\Platform' => 'Docker\\API\\Normalizer\\PlatformNormalizer', 'Docker\\API\\Model\\EngineDescription' => 'Docker\\API\\Normalizer\\EngineDescriptionNormalizer', 'Docker\\API\\Model\\EngineDescriptionPluginsItem' => 'Docker\\API\\Normalizer\\EngineDescriptionPluginsItemNormalizer', 'Docker\\API\\Model\\TLSInfo' => 'Docker\\API\\Normalizer\\TLSInfoNormalizer', 'Docker\\API\\Model\\NodeStatus' => 'Docker\\API\\Normalizer\\NodeStatusNormalizer', 'Docker\\API\\Model\\ManagerStatus' => 'Docker\\API\\Normalizer\\ManagerStatusNormalizer', 'Docker\\API\\Model\\SwarmSpec' => 'Docker\\API\\Normalizer\\SwarmSpecNormalizer', 'Docker\\API\\Model\\SwarmSpecOrchestration' => 'Docker\\API\\Normalizer\\SwarmSpecOrchestrationNormalizer', 'Docker\\API\\Model\\SwarmSpecRaft' => 'Docker\\API\\Normalizer\\SwarmSpecRaftNormalizer', 'Docker\\API\\Model\\SwarmSpecDispatcher' => 'Docker\\API\\Normalizer\\SwarmSpecDispatcherNormalizer', 'Docker\\API\\Model\\SwarmSpecCAConfig' => 'Docker\\API\\Normalizer\\SwarmSpecCAConfigNormalizer', 'Docker\\API\\Model\\SwarmSpecCAConfigExternalCAsItem' => 'Docker\\API\\Normalizer\\SwarmSpecCAConfigExternalCAsItemNormalizer', 'Docker\\API\\Model\\SwarmSpecEncryptionConfig' => 'Docker\\API\\Normalizer\\SwarmSpecEncryptionConfigNormalizer', 'Docker\\API\\Model\\SwarmSpecTaskDefaults' => 'Docker\\API\\Normalizer\\SwarmSpecTaskDefaultsNormalizer', 'Docker\\API\\Model\\SwarmSpecTaskDefaultsLogDriver' => 'Docker\\API\\Normalizer\\SwarmSpecTaskDefaultsLogDriverNormalizer', 'Docker\\API\\Model\\ClusterInfo' => 'Docker\\API\\Normalizer\\ClusterInfoNormalizer', 'Docker\\API\\Model\\JoinTokens' => 'Docker\\API\\Normalizer\\JoinTokensNormalizer', 'Docker\\API\\Model\\Swarm' => 'Docker\\API\\Normalizer\\SwarmNormalizer', 'Docker\\API\\Model\\TaskSpec' => 'Docker\\API\\Normalizer\\TaskSpecNormalizer', 'Docker\\API\\Model\\TaskSpecPluginSpec' => 'Docker\\API\\Normalizer\\TaskSpecPluginSpecNormalizer', 'Docker\\API\\Model\\TaskSpecPluginSpecPluginPrivilegeItem' => 'Docker\\API\\Normalizer\\TaskSpecPluginSpecPluginPrivilegeItemNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpec' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecPrivileges' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecPrivilegesNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesCredentialSpec' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecPrivilegesCredentialSpecNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecPrivilegesSELinuxContext' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecPrivilegesSELinuxContextNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecDNSConfig' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecDNSConfigNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItem' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecSecretsItemNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecSecretsItemFile' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecSecretsItemFileNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItem' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecConfigsItemNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemFile' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecConfigsItemFileNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecConfigsItemRuntime' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecConfigsItemRuntimeNormalizer', 'Docker\\API\\Model\\TaskSpecContainerSpecUlimitsItem' => 'Docker\\API\\Normalizer\\TaskSpecContainerSpecUlimitsItemNormalizer', 'Docker\\API\\Model\\TaskSpecNetworkAttachmentSpec' => 'Docker\\API\\Normalizer\\TaskSpecNetworkAttachmentSpecNormalizer', 'Docker\\API\\Model\\TaskSpecResources' => 'Docker\\API\\Normalizer\\TaskSpecResourcesNormalizer', 'Docker\\API\\Model\\TaskSpecRestartPolicy' => 'Docker\\API\\Normalizer\\TaskSpecRestartPolicyNormalizer', 'Docker\\API\\Model\\TaskSpecPlacement' => 'Docker\\API\\Normalizer\\TaskSpecPlacementNormalizer', 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItem' => 'Docker\\API\\Normalizer\\TaskSpecPlacementPreferencesItemNormalizer', 'Docker\\API\\Model\\TaskSpecPlacementPreferencesItemSpread' => 'Docker\\API\\Normalizer\\TaskSpecPlacementPreferencesItemSpreadNormalizer', 'Docker\\API\\Model\\TaskSpecLogDriver' => 'Docker\\API\\Normalizer\\TaskSpecLogDriverNormalizer', 'Docker\\API\\Model\\Task' => 'Docker\\API\\Normalizer\\TaskNormalizer', 'Docker\\API\\Model\\TaskStatus' => 'Docker\\API\\Normalizer\\TaskStatusNormalizer', 'Docker\\API\\Model\\TaskStatusContainerStatus' => 'Docker\\API\\Normalizer\\TaskStatusContainerStatusNormalizer', 'Docker\\API\\Model\\ServiceSpec' => 'Docker\\API\\Normalizer\\ServiceSpecNormalizer', 'Docker\\API\\Model\\ServiceSpecMode' => 'Docker\\API\\Normalizer\\ServiceSpecModeNormalizer', 'Docker\\API\\Model\\ServiceSpecModeReplicated' => 'Docker\\API\\Normalizer\\ServiceSpecModeReplicatedNormalizer', 'Docker\\API\\Model\\ServiceSpecModeGlobal' => 'Docker\\API\\Normalizer\\ServiceSpecModeGlobalNormalizer', 'Docker\\API\\Model\\ServiceSpecModeReplicatedJob' => 'Docker\\API\\Normalizer\\ServiceSpecModeReplicatedJobNormalizer', 'Docker\\API\\Model\\ServiceSpecModeGlobalJob' => 'Docker\\API\\Normalizer\\ServiceSpecModeGlobalJobNormalizer', 'Docker\\API\\Model\\ServiceSpecUpdateConfig' => 'Docker\\API\\Normalizer\\ServiceSpecUpdateConfigNormalizer', 'Docker\\API\\Model\\ServiceSpecRollbackConfig' => 'Docker\\API\\Normalizer\\ServiceSpecRollbackConfigNormalizer', 'Docker\\API\\Model\\EndpointPortConfig' => 'Docker\\API\\Normalizer\\EndpointPortConfigNormalizer', 'Docker\\API\\Model\\EndpointSpec' => 'Docker\\API\\Normalizer\\EndpointSpecNormalizer', 'Docker\\API\\Model\\Service' => 'Docker\\API\\Normalizer\\ServiceNormalizer', 'Docker\\API\\Model\\ServiceEndpoint' => 'Docker\\API\\Normalizer\\ServiceEndpointNormalizer', 'Docker\\API\\Model\\ServiceEndpointVirtualIPsItem' => 'Docker\\API\\Normalizer\\ServiceEndpointVirtualIPsItemNormalizer', 'Docker\\API\\Model\\ServiceUpdateStatus' => 'Docker\\API\\Normalizer\\ServiceUpdateStatusNormalizer', 'Docker\\API\\Model\\ServiceServiceStatus' => 'Docker\\API\\Normalizer\\ServiceServiceStatusNormalizer', 'Docker\\API\\Model\\ServiceJobStatus' => 'Docker\\API\\Normalizer\\ServiceJobStatusNormalizer', 'Docker\\API\\Model\\ImageDeleteResponseItem' => 'Docker\\API\\Normalizer\\ImageDeleteResponseItemNormalizer', 'Docker\\API\\Model\\ServiceUpdateResponse' => 'Docker\\API\\Normalizer\\ServiceUpdateResponseNormalizer', 'Docker\\API\\Model\\ContainerSummaryItem' => 'Docker\\API\\Normalizer\\ContainerSummaryItemNormalizer', 'Docker\\API\\Model\\ContainerSummaryItemHostConfig' => 'Docker\\API\\Normalizer\\ContainerSummaryItemHostConfigNormalizer', 'Docker\\API\\Model\\ContainerSummaryItemNetworkSettings' => 'Docker\\API\\Normalizer\\ContainerSummaryItemNetworkSettingsNormalizer', 'Docker\\API\\Model\\Driver' => 'Docker\\API\\Normalizer\\DriverNormalizer', 'Docker\\API\\Model\\SecretSpec' => 'Docker\\API\\Normalizer\\SecretSpecNormalizer', 'Docker\\API\\Model\\Secret' => 'Docker\\API\\Normalizer\\SecretNormalizer', 'Docker\\API\\Model\\ConfigSpec' => 'Docker\\API\\Normalizer\\ConfigSpecNormalizer', 'Docker\\API\\Model\\Config' => 'Docker\\API\\Normalizer\\ConfigNormalizer', 'Docker\\API\\Model\\ContainerState' => 'Docker\\API\\Normalizer\\ContainerStateNormalizer', 'Docker\\API\\Model\\SystemVersion' => 'Docker\\API\\Normalizer\\SystemVersionNormalizer', 'Docker\\API\\Model\\SystemVersionPlatform' => 'Docker\\API\\Normalizer\\SystemVersionPlatformNormalizer', 'Docker\\API\\Model\\SystemVersionComponentsItem' => 'Docker\\API\\Normalizer\\SystemVersionComponentsItemNormalizer', 'Docker\\API\\Model\\SystemVersionComponentsItemDetails' => 'Docker\\API\\Normalizer\\SystemVersionComponentsItemDetailsNormalizer', 'Docker\\API\\Model\\SystemInfo' => 'Docker\\API\\Normalizer\\SystemInfoNormalizer', 'Docker\\API\\Model\\SystemInfoDefaultAddressPoolsItem' => 'Docker\\API\\Normalizer\\SystemInfoDefaultAddressPoolsItemNormalizer', 'Docker\\API\\Model\\PluginsInfo' => 'Docker\\API\\Normalizer\\PluginsInfoNormalizer', 'Docker\\API\\Model\\RegistryServiceConfig' => 'Docker\\API\\Normalizer\\RegistryServiceConfigNormalizer', 'Docker\\API\\Model\\IndexInfo' => 'Docker\\API\\Normalizer\\IndexInfoNormalizer', 'Docker\\API\\Model\\Runtime' => 'Docker\\API\\Normalizer\\RuntimeNormalizer', 'Docker\\API\\Model\\Commit' => 'Docker\\API\\Normalizer\\CommitNormalizer', 'Docker\\API\\Model\\SwarmInfo' => 'Docker\\API\\Normalizer\\SwarmInfoNormalizer', 'Docker\\API\\Model\\PeerNode' => 'Docker\\API\\Normalizer\\PeerNodeNormalizer', 'Docker\\API\\Model\\NetworkAttachmentConfig' => 'Docker\\API\\Normalizer\\NetworkAttachmentConfigNormalizer', 'Docker\\API\\Model\\ContainersCreatePostBody' => 'Docker\\API\\Normalizer\\ContainersCreatePostBodyNormalizer', 'Docker\\API\\Model\\ContainersCreatePostResponse201' => 'Docker\\API\\Normalizer\\ContainersCreatePostResponse201Normalizer', 'Docker\\API\\Model\\ContainersIdJsonGetResponse200' => 'Docker\\API\\Normalizer\\ContainersIdJsonGetResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdTopGetJsonResponse200' => 'Docker\\API\\Normalizer\\ContainersIdTopGetJsonResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdTopGetTextplainResponse200' => 'Docker\\API\\Normalizer\\ContainersIdTopGetTextplainResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdChangesGetResponse200Item' => 'Docker\\API\\Normalizer\\ContainersIdChangesGetResponse200ItemNormalizer', 'Docker\\API\\Model\\ContainersIdUpdatePostBody' => 'Docker\\API\\Normalizer\\ContainersIdUpdatePostBodyNormalizer', 'Docker\\API\\Model\\ContainersIdUpdatePostResponse200' => 'Docker\\API\\Normalizer\\ContainersIdUpdatePostResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdWaitPostResponse200' => 'Docker\\API\\Normalizer\\ContainersIdWaitPostResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdWaitPostResponse200Error' => 'Docker\\API\\Normalizer\\ContainersIdWaitPostResponse200ErrorNormalizer', 'Docker\\API\\Model\\ContainersIdArchiveGetResponse400' => 'Docker\\API\\Normalizer\\ContainersIdArchiveGetResponse400Normalizer', 'Docker\\API\\Model\\ContainersIdArchiveHeadJsonResponse400' => 'Docker\\API\\Normalizer\\ContainersIdArchiveHeadJsonResponse400Normalizer', 'Docker\\API\\Model\\ContainersIdArchiveHeadTextplainResponse400' => 'Docker\\API\\Normalizer\\ContainersIdArchiveHeadTextplainResponse400Normalizer', 'Docker\\API\\Model\\ContainersPrunePostResponse200' => 'Docker\\API\\Normalizer\\ContainersPrunePostResponse200Normalizer', 'Docker\\API\\Model\\BuildPrunePostResponse200' => 'Docker\\API\\Normalizer\\BuildPrunePostResponse200Normalizer', 'Docker\\API\\Model\\ImagesNameHistoryGetResponse200Item' => 'Docker\\API\\Normalizer\\ImagesNameHistoryGetResponse200ItemNormalizer', 'Docker\\API\\Model\\ImagesSearchGetResponse200Item' => 'Docker\\API\\Normalizer\\ImagesSearchGetResponse200ItemNormalizer', 'Docker\\API\\Model\\ImagesPrunePostResponse200' => 'Docker\\API\\Normalizer\\ImagesPrunePostResponse200Normalizer', 'Docker\\API\\Model\\AuthPostResponse200' => 'Docker\\API\\Normalizer\\AuthPostResponse200Normalizer', 'Docker\\API\\Model\\EventsGetResponse200' => 'Docker\\API\\Normalizer\\EventsGetResponse200Normalizer', 'Docker\\API\\Model\\EventsGetResponse200Actor' => 'Docker\\API\\Normalizer\\EventsGetResponse200ActorNormalizer', 'Docker\\API\\Model\\SystemDfGetJsonResponse200' => 'Docker\\API\\Normalizer\\SystemDfGetJsonResponse200Normalizer', 'Docker\\API\\Model\\SystemDfGetTextplainResponse200' => 'Docker\\API\\Normalizer\\SystemDfGetTextplainResponse200Normalizer', 'Docker\\API\\Model\\ContainersIdExecPostBody' => 'Docker\\API\\Normalizer\\ContainersIdExecPostBodyNormalizer', 'Docker\\API\\Model\\ExecIdStartPostBody' => 'Docker\\API\\Normalizer\\ExecIdStartPostBodyNormalizer', 'Docker\\API\\Model\\ExecIdJsonGetResponse200' => 'Docker\\API\\Normalizer\\ExecIdJsonGetResponse200Normalizer', 'Docker\\API\\Model\\VolumesGetResponse200' => 'Docker\\API\\Normalizer\\VolumesGetResponse200Normalizer', 'Docker\\API\\Model\\VolumesCreatePostBody' => 'Docker\\API\\Normalizer\\VolumesCreatePostBodyNormalizer', 'Docker\\API\\Model\\VolumesPrunePostResponse200' => 'Docker\\API\\Normalizer\\VolumesPrunePostResponse200Normalizer', 'Docker\\API\\Model\\NetworksCreatePostBody' => 'Docker\\API\\Normalizer\\NetworksCreatePostBodyNormalizer', 'Docker\\API\\Model\\NetworksCreatePostResponse201' => 'Docker\\API\\Normalizer\\NetworksCreatePostResponse201Normalizer', 'Docker\\API\\Model\\NetworksIdConnectPostBody' => 'Docker\\API\\Normalizer\\NetworksIdConnectPostBodyNormalizer', 'Docker\\API\\Model\\NetworksIdDisconnectPostBody' => 'Docker\\API\\Normalizer\\NetworksIdDisconnectPostBodyNormalizer', 'Docker\\API\\Model\\NetworksPrunePostResponse200' => 'Docker\\API\\Normalizer\\NetworksPrunePostResponse200Normalizer', 'Docker\\API\\Model\\PluginsPrivilegesGetJsonResponse200Item' => 'Docker\\API\\Normalizer\\PluginsPrivilegesGetJsonResponse200ItemNormalizer', 'Docker\\API\\Model\\PluginsPrivilegesGetTextplainResponse200Item' => 'Docker\\API\\Normalizer\\PluginsPrivilegesGetTextplainResponse200ItemNormalizer', 'Docker\\API\\Model\\PluginsPullPostBodyItem' => 'Docker\\API\\Normalizer\\PluginsPullPostBodyItemNormalizer', 'Docker\\API\\Model\\PluginsNameUpgradePostBodyItem' => 'Docker\\API\\Normalizer\\PluginsNameUpgradePostBodyItemNormalizer', 'Docker\\API\\Model\\SwarmInitPostBody' => 'Docker\\API\\Normalizer\\SwarmInitPostBodyNormalizer', 'Docker\\API\\Model\\SwarmJoinPostBody' => 'Docker\\API\\Normalizer\\SwarmJoinPostBodyNormalizer', 'Docker\\API\\Model\\SwarmUnlockkeyGetJsonResponse200' => 'Docker\\API\\Normalizer\\SwarmUnlockkeyGetJsonResponse200Normalizer', 'Docker\\API\\Model\\SwarmUnlockkeyGetTextplainResponse200' => 'Docker\\API\\Normalizer\\SwarmUnlockkeyGetTextplainResponse200Normalizer', 'Docker\\API\\Model\\SwarmUnlockPostBody' => 'Docker\\API\\Normalizer\\SwarmUnlockPostBodyNormalizer', 'Docker\\API\\Model\\ServicesCreatePostBody' => 'Docker\\API\\Normalizer\\ServicesCreatePostBodyNormalizer', 'Docker\\API\\Model\\ServicesCreatePostResponse201' => 'Docker\\API\\Normalizer\\ServicesCreatePostResponse201Normalizer', 'Docker\\API\\Model\\ServicesIdUpdatePostBody' => 'Docker\\API\\Normalizer\\ServicesIdUpdatePostBodyNormalizer', 'Docker\\API\\Model\\SecretsCreatePostBody' => 'Docker\\API\\Normalizer\\SecretsCreatePostBodyNormalizer', 'Docker\\API\\Model\\ConfigsCreatePostBody' => 'Docker\\API\\Normalizer\\ConfigsCreatePostBodyNormalizer', 'Docker\\API\\Model\\DistributionNameJsonGetResponse200' => 'Docker\\API\\Normalizer\\DistributionNameJsonGetResponse200Normalizer', 'Docker\\API\\Model\\DistributionNameJsonGetResponse200Descriptor' => 'Docker\\API\\Normalizer\\DistributionNameJsonGetResponse200DescriptorNormalizer', 'Docker\\API\\Model\\DistributionNameJsonGetResponse200PlatformsItem' => 'Docker\\API\\Normalizer\\DistributionNameJsonGetResponse200PlatformsItemNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Docker\\API\\Runtime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[\get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
