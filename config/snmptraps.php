<?php

/*
| !!!! DO NOT EDIT THIS FILE !!!!
|
| You can change settings by setting them in the environment or .env
| If there is something you need to change, but is not available as an environment setting,
| request an environment variable to be created upstream or send a pull request.
*/

return [
    'trap_handlers' => [
        'BGP4-MIB::bgpBackwardTransition' => \LibreNMS\Snmptrap\Handlers\BgpBackwardTransition::class,
        'BGP4-MIB::bgpEstablished' => \LibreNMS\Snmptrap\Handlers\BgpEstablished::class,
        'BGP4-V2-MIB-JUNIPER::jnxBgpM2BackwardTransition' => \LibreNMS\Snmptrap\Handlers\JnxBgpM2BackwardTransition::class,
        'BGP4-V2-MIB-JUNIPER::jnxBgpM2Established' => \LibreNMS\Snmptrap\Handlers\JnxBgpM2Established::class,
        'BRIDGE-MIB::newRoot' => \LibreNMS\Snmptrap\Handlers\BridgeNewRoot::class,
        'BRIDGE-MIB::topologyChange' => \LibreNMS\Snmptrap\Handlers\BridgeTopologyChanged::class,
        'CM-ALARM-MIB::cmNetworkElementAlmTrap' => \LibreNMS\Snmptrap\Handlers\AdvaNetworkElementAlmTrap::class,
        'CM-ALARM-MIB::cmSysAlmTrap' => \LibreNMS\Snmptrap\Handlers\AdvaSysAlmTrap::class,
        'CM-PERFORMANCE-MIB::cmEthernetAccPortThresholdCrossingAlert' => \LibreNMS\Snmptrap\Handlers\AdvaAccThresholdCrossingAlert::class,
        'CM-PERFORMANCE-MIB::cmEthernetNetPortThresholdCrossingAlert' => \LibreNMS\Snmptrap\Handlers\AdvaNetThresholdCrossingAlert::class,
        'CM-SYSTEM-MIB::cmAttributeValueChangeTrap' => \LibreNMS\Snmptrap\Handlers\AdvaAttributeChange::class,
        'CM-SYSTEM-MIB::cmObjectCreationTrap' => \LibreNMS\Snmptrap\Handlers\AdvaObjectCreation::class,
        'CM-SYSTEM-MIB::cmObjectDeletionTrap' => \LibreNMS\Snmptrap\Handlers\AdvaObjectDeletion::class,
        'CM-SYSTEM-MIB::cmSnmpDyingGaspTrap' => \LibreNMS\Snmptrap\Handlers\AdvaSnmpDyingGaspTrap::class,
        'CM-SYSTEM-MIB::cmStateChangeTrap' => \LibreNMS\Snmptrap\Handlers\AdvaStateChangeTrap::class,
        'CPS-MIB::lowBattery' => LibreNMS\Snmptrap\Handlers\CpLowBattery::class,
        'CPS-MIB::powerRestored' => \LibreNMS\Snmptrap\Handlers\CpPowerRestored::class,
        'CPS-MIB::returnFromChargerFailure' => \LibreNMS\Snmptrap\Handlers\CpUpsRtnChargerFailure::class,
        'CPS-MIB::returnFromLowBattery' => \LibreNMS\Snmptrap\Handlers\CpRtnLowBattery::class,
        'CPS-MIB::upsDiagnosticsFailed' => \LibreNMS\Snmptrap\Handlers\CpUpsDiagFailed::class,
        'CPS-MIB::returnFromDischarged' => \LibreNMS\Snmptrap\Handlers\CpRtnDischarge::class,
        'CPS-MIB::returnFromOverLoad' => \LibreNMS\Snmptrap\Handlers\CpUpsRtnOverload::class,
        'CPS-MIB::returnFromOverTemp' => \LibreNMS\Snmptrap\Handlers\CpUpsRtnOverTemp::class,
        'CPS-MIB::upsBatteryNotPresent' => \LibreNMS\Snmptrap\Handlers\CpUpsBatteryNotPresent::class,
        'CPS-MIB::upsChargerFailure' => \LibreNMS\Snmptrap\Handlers\CpUpsChargerFailure::class,
        'CPS-MIB::upsDiagnosticsPassed' => \LibreNMS\Snmptrap\Handlers\CpUpsDiagPassed::class,
        'CPS-MIB::upsDischarged' => \LibreNMS\Snmptrap\Handlers\CpUpsDischarged::class,
        'CPS-MIB::upsOnBattery' => \LibreNMS\Snmptrap\Handlers\CpUpsOnBattery::class,
        'CPS-MIB::upsOverload' => \LibreNMS\Snmptrap\Handlers\CpUpsOverload::class,
        'CPS-MIB::upsOverTemp' => \LibreNMS\Snmptrap\Handlers\CpUpsOverTemp::class,
        'CPS-MIB::upsRebootStarted' => \LibreNMS\Snmptrap\Handlers\CpUpsRebootStarted::class,
        'CPS-MIB::upsSleeping' => \LibreNMS\Snmptrap\Handlers\CpUpsSleeping::class,
        'CPS-MIB::upsStartBatteryTest' => \LibreNMS\Snmptrap\Handlers\CpUpsStartBatteryTest::class,
        'CPS-MIB::upsTurnedOff' => \LibreNMS\Snmptrap\Handlers\CpUpsTurnedOff::class,
        'CPS-MIB::upsWokeUp' => \LibreNMS\Snmptrap\Handlers\CpUpsWokeUp::class,
        'EKINOPS-MGNT2-NMS-MIB::mgnt2TrapNMSEvent' => \LibreNMS\Snmptrap\Handlers\Mgnt2TrapNmsEvent::class,
        'EKINOPS-MGNT2-NMS-MIB::mgnt2TrapNMSAlarm' => \LibreNMS\Snmptrap\Handlers\Mgnt2TrapNmsAlarm::class,
        'ENTITY-MIB::entConfigChange' => \LibreNMS\Snmptrap\Handlers\EntityDatabaseConfigChanged::class,
        'EQUIPMENT-MIB::equipStatusTrap' => \LibreNMS\Snmptrap\Handlers\EquipStatusTrap::class,
        'FORTINET-FORTIGATE-MIB::fgTrapAvOversize' => \LibreNMS\Snmptrap\Handlers\FgTrapAvOversize::class,
        'FORTINET-FORTIGATE-MIB::fgTrapIpsAnomaly' => \LibreNMS\Snmptrap\Handlers\FgTrapIpsAnomaly::class,
        'FORTINET-FORTIGATE-MIB::fgTrapIpsPkgUpdate' => \LibreNMS\Snmptrap\Handlers\FgTrapIpsPkgUpdate::class,
        'FORTINET-FORTIGATE-MIB::fgTrapIpsSignature' => \LibreNMS\Snmptrap\Handlers\FgTrapIpsSignature::class,
        'FORTINET-FORTIGATE-MIB::fgTrapVpnTunDown' => \LibreNMS\Snmptrap\Handlers\FgTrapVpnTunDown::class,
        'FORTINET-FORTIGATE-MIB::fgTrapVpnTunUp' => \LibreNMS\Snmptrap\Handlers\FgTrapVpnTunUp::class,
        'FORTINET-FORTIMANAGER-FORTIANALYZER-MIB::fmTrapLogRateThreshold' => \LibreNMS\Snmptrap\Handlers\FmTrapLogRateThreshold::class,
        'IF-MIB::linkDown' => \LibreNMS\Snmptrap\Handlers\LinkDown::class,
        'IF-MIB::linkUp' => \LibreNMS\Snmptrap\Handlers\LinkUp::class,
        'JUNIPER-CFGMGMT-MIB::jnxCmCfgChange' => \LibreNMS\Snmptrap\Handlers\JnxCmCfgChange::class,
        'JUNIPER-DOM-MIB::jnxDomAlarmCleared' => \LibreNMS\Snmptrap\Handlers\JnxDomAlarmCleared::class,
        'JUNIPER-DOM-MIB::jnxDomAlarmSet' => \LibreNMS\Snmptrap\Handlers\JnxDomAlarmSet::class,
        'JUNIPER-DOM-MIB::jnxDomLaneAlarmCleared' => \LibreNMS\Snmptrap\Handlers\JnxDomLaneAlarmCleared::class,
        'JUNIPER-DOM-MIB::jnxDomLaneAlarmSet' => \LibreNMS\Snmptrap\Handlers\JnxDomLaneAlarmSet::class,
        'JUNIPER-LDP-MIB::jnxLdpLspDown' => \LibreNMS\Snmptrap\Handlers\JnxLdpLspDown::class,
        'JUNIPER-LDP-MIB::jnxLdpLspUp' => \LibreNMS\Snmptrap\Handlers\JnxLdpLspUp::class,
        'JUNIPER-LDP-MIB::jnxLdpSesDown' => \LibreNMS\Snmptrap\Handlers\JnxLdpSesDown::class,
        'JUNIPER-LDP-MIB::jnxLdpSesUp' => \LibreNMS\Snmptrap\Handlers\JnxLdpSesUp::class,
        'JUNIPER-MIB::jnxPowerSupplyFailure' => \LibreNMS\Snmptrap\Handlers\JnxPowerSupplyFailure::class,
        'JUNIPER-MIB::jnxPowerSupplyOK' => \LibreNMS\Snmptrap\Handlers\JnxPowerSupplyOk::class,
        'JUNIPER-VPN-MIB::jnxVpnIfDown' => \LibreNMS\Snmptrap\Handlers\JnxVpnIfDown::class,
        'JUNIPER-VPN-MIB::jnxVpnIfUp' => \LibreNMS\Snmptrap\Handlers\JnxVpnIfUp::class,
        'JUNIPER-VPN-MIB::jnxVpnPwDown' => \LibreNMS\Snmptrap\Handlers\JnxVpnPwDown::class,
        'JUNIPER-VPN-MIB::jnxVpnPwUp' => \LibreNMS\Snmptrap\Handlers\JnxVpnPwUp::class,
        'LOG-MIB::logTrap' => \LibreNMS\Snmptrap\Handlers\LogTrap::class,
        'MG-SNMP-UPS-MIB::upsmgUtilityFailure' => \LibreNMS\Snmptrap\Handlers\UpsmgUtilityFailure::class,
        'MG-SNMP-UPS-MIB::upsmgUtilityRestored' => \LibreNMS\Snmptrap\Handlers\UpsmgUtilityRestored::class,
        'NETGEAR-SMART-SWITCHING-MIB::failedUserLoginTrap' => \LibreNMS\Snmptrap\Handlers\FailedUserLogin::class,
        'NETGEAR-SWITCHING-MIB::failedUserLoginTrap' => \LibreNMS\Snmptrap\Handlers\FailedUserLogin::class,
        'PowerNet-MIB::outletOff' => \LibreNMS\Snmptrap\Handlers\ApcPduOutletOff::class,
        'PowerNet-MIB::outletOn' => \LibreNMS\Snmptrap\Handlers\ApcPduOutletOn::class,
        'PowerNet-MIB::outletReboot' => \LibreNMS\Snmptrap\Handlers\ApcPduOutletReboot::class,
        'RUCKUS-EVENT-MIB::ruckusEventAssocTrap' => \LibreNMS\Snmptrap\Handlers\RuckusAssocTrap::class,
        'RUCKUS-EVENT-MIB::ruckusEventDiassocTrap' => \LibreNMS\Snmptrap\Handlers\RuckusDiassocTrap::class,
        'RUCKUS-EVENT-MIB::ruckusEventSetErrorTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSetError::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZAPMiscEventTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzApMiscEvent::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZAPConfUpdatedTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzApConf::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZAPRebootTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzApReboot::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZAPConnectedTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzApConnect::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZClusterInMaintenanceStateTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzClusterInMaintenance::class,
        'RUCKUS-SZ-EVENT-MIB::ruckusSZClusterBackToInServiceTrap' => \LibreNMS\Snmptrap\Handlers\RuckusSzClusterInService::class,
        'SNMPv2-MIB::authenticationFailure' => \LibreNMS\Snmptrap\Handlers\AuthenticationFailure::class,
        'SNMPv2-MIB::coldStart' => \LibreNMS\Snmptrap\Handlers\ColdBoot::class,
        'SNMPv2-MIB::warmStart' => \LibreNMS\Snmptrap\Handlers\WarmBoot::class,
        'TRIPPLITE-PRODUCTS::tlpNotificationsAlarmEntryAdded' => \LibreNMS\Snmptrap\Handlers\TrippliteAlarmAdded::class,
        'TRIPPLITE-PRODUCTS::tlpNotificationsAlarmEntryRemoved' => \LibreNMS\Snmptrap\Handlers\TrippliteAlarmRemoved::class,
        'VMWARE-VMINFO-MIB::vmwVmHBDetected' => \LibreNMS\Snmptrap\Handlers\VmwVmHBDetected::class,
        'VMWARE-VMINFO-MIB::vmwVmHBLost' => \LibreNMS\Snmptrap\Handlers\VmwVmHBLost::class,
        'VMWARE-VMINFO-MIB::vmwVmPoweredOn' => \LibreNMS\Snmptrap\Handlers\VmwVmPoweredOn::class,
        'VMWARE-VMINFO-MIB::vmwVmPoweredOff' => \LibreNMS\Snmptrap\Handlers\VmwVmPoweredOff::class,
        'VMWARE-VMINFO-MIB::vmwVmSuspended' => \LibreNMS\Snmptrap\Handlers\VmwVmSuspended::class,
        'OCCAM-SENSOR-MIB::occamExtAlarmRaised' => \LibreNMS\Snmptrap\Handlers\OccamSensorExtAlarmRaised::class,
        'OCCAM-KERNEL-MIB::fanTrayNotification' => \LibreNMS\Snmptrap\Handlers\OccamFanTrayNotification::class,
        'OCCAM-EPS-MIB::epsPathGroupHeartbeatNotification' => \LibreNMS\Snmptrap\Handlers\OccamEpsPathGroupHeartbeatNotification::class,
        'OCCAM-EPS-MIB::epsRingFailoverNotification' => \LibreNMS\Snmptrap\Handlers\OccamEpsRingNotification::class,
        'OCCAM-EPS-MIB::epsRingRevertNotification' => \LibreNMS\Snmptrap\Handlers\OccamEpsRingNotification::class,
        'OCCAM-KERNEL-MIB::overTempNotification' => \LibreNMS\Snmptrap\Handlers\OccamOverTempNotification::class,
        'OCCAM-KERNEL-MIB::thresholdExceededNotification' => \LibreNMS\Snmptrap\Handlers\OccamThresholdExceededNotification::class,
        'OCCAM-NOTIFICATION-MIB::ecfmNotification' => \LibreNMS\Snmptrap\Handlers\OccamEcfmNotification::class,
        'OCCAM-LEPS-MIB::epsLoopNotification' => \LibreNMS\Snmptrap\Handlers\OccamEpsLoopNotification::class,
        'OSPF-TRAP-MIB::ospfIfStateChange' => \LibreNMS\Snmptrap\Handlers\OspfIfStateChange::class,
        'OSPF-TRAP-MIB::ospfNbrStateChange' => \LibreNMS\Snmptrap\Handlers\OspfNbrStateChange::class,
        'UPS-MIB::upsTraps.0.1' => \LibreNMS\Snmptrap\Handlers\UpsTrapsOnBattery::class,
    ],
];
