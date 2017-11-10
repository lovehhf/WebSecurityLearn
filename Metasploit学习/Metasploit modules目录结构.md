```
modules/
├── auxiliary
│   ├── admin
│   │   ├── 2wire
│   │   ├── android
│   │   ├── appletv
│   │   ├── atg
│   │   ├── backupexec
│   │   ├── chromecast
│   │   ├── cisco
│   │   ├── db2
│   │   ├── edirectory
│   │   ├── emc
│   │   ├── firetv
│   │   ├── hp
│   │   ├── http
│   │   ├── kerberos
│   │   ├── maxdb
│   │   ├── misc
│   │   ├── motorola
│   │   ├── ms
│   │   ├── mssql
│   │   ├── mysql
│   │   ├── natpmp
│   │   ├── netbios
│   │   ├── officescan
│   │   ├── oracle
│   │   │   └── post_exploitation
│   │   ├── pop2
│   │   ├── postgres
│   │   ├── sap
│   │   ├── scada
│   │   ├── serverprotect
│   │   ├── smb
│   │   ├── sunrpc
│   │   ├── tftp
│   │   ├── tikiwiki
│   │   ├── upnp
│   │   ├── vmware
│   │   ├── vnc
│   │   ├── vxworks
│   │   ├── webmin
│   │   └── zend
│   ├── analyze
│   ├── bnat
│   ├── client
│   │   ├── hwbridge
│   │   ├── mms
│   │   ├── sms
│   │   └── smtp
│   ├── crawler
│   ├── docx
│   ├── dos
│   │   ├── android
│   │   ├── cisco
│   │   ├── dhcp
│   │   ├── dns
│   │   ├── freebsd
│   │   │   └── nfsd
│   │   ├── hp
│   │   ├── http
│   │   ├── mdns
│   │   ├── misc
│   │   ├── ntp
│   │   ├── pptp
│   │   ├── samba
│   │   ├── sap
│   │   ├── scada
│   │   ├── smtp
│   │   ├── solaris
│   │   │   └── lpd
│   │   ├── ssl
│   │   ├── syslog
│   │   ├── tcp
│   │   ├── upnp
│   │   ├── windows
│   │   │   ├── appian
│   │   │   ├── browser
│   │   │   ├── ftp
│   │   │   ├── games
│   │   │   ├── http
│   │   │   ├── llmnr
│   │   │   ├── nat
│   │   │   ├── rdp
│   │   │   ├── smb
│   │   │   ├── smtp
│   │   │   ├── ssh
│   │   │   └── tftp
│   │   └── wireshark
│   ├── fuzzers
│   │   ├── dns
│   │   ├── ftp
│   │   ├── http
│   │   ├── ntp
│   │   ├── smb
│   │   ├── smtp
│   │   ├── ssh
│   │   └── tds
│   ├── gather
│   ├── parser
│   ├── pdf
│   │   └── foxit
│   ├── scanner
│   │   ├── acpp
│   │   ├── afp
│   │   ├── backdoor
│   │   ├── chargen
│   │   ├── couchdb
│   │   ├── db2
│   │   ├── dcerpc
│   │   ├── dect
│   │   ├── discovery
│   │   ├── dlsw
│   │   ├── dns
│   │   ├── elasticsearch
│   │   ├── emc
│   │   ├── finger
│   │   ├── ftp
│   │   ├── h323
│   │   ├── http
│   │   ├── ike
│   │   ├── imap
│   │   ├── ip
│   │   ├── ipmi
│   │   ├── jenkins
│   │   ├── kademlia
│   │   ├── llmnr
│   │   ├── lotus
│   │   ├── mdns
│   │   ├── misc
│   │   ├── mongodb
│   │   ├── motorola
│   │   ├── msf
│   │   ├── mssql
│   │   ├── mysql
│   │   ├── natpmp
│   │   ├── nessus
│   │   ├── netbios
│   │   ├── nexpose
│   │   ├── nfs
│   │   ├── ntp
│   │   ├── openvas
│   │   ├── oracle
│   │   ├── pcanywhere
│   │   ├── pop3
│   │   ├── portmap
│   │   ├── portscan
│   │   ├── postgres
│   │   ├── printer
│   │   ├── quake
│   │   ├── rdp
│   │   ├── redis
│   │   ├── rogue
│   │   ├── rservices
│   │   ├── rsync
│   │   ├── sap
│   │   ├── scada
│   │   ├── sip
│   │   ├── smb
│   │   ├── smtp
│   │   ├── snmp
│   │   ├── ssh
│   │   ├── ssl
│   │   ├── steam
│   │   ├── telephony
│   │   ├── telnet
│   │   ├── tftp
│   │   ├── udp
│   │   ├── upnp
│   │   ├── varnish
│   │   ├── vmware
│   │   ├── vnc
│   │   ├── voice
│   │   ├── vxworks
│   │   ├── winrm
│   │   └── x11
│   ├── server
│   │   ├── capture
│   │   └── dns
│   ├── sniffer
│   ├── spoof
│   │   ├── arp
│   │   ├── cisco
│   │   ├── dns
│   │   ├── llmnr
│   │   ├── mdns
│   │   ├── nbns
│   │   └── replay
│   ├── sqli
│   │   └── oracle
│   ├── voip
│   └── vsploit
│       ├── exploit
│       ├── malware
│       │   └── dns
│       └── pii
├── encoders
│   ├── cmd
│   ├── generic
│   ├── mipsbe
│   ├── mipsle
│   ├── php
│   ├── ppc
│   ├── sparc
│   ├── x64
│   └── x86
├── exploits
│   ├── aix
│   │   └── local
│   ├── android
│   │   ├── adb
│   │   ├── browser
│   │   ├── fileformat
│   │   └── local
│   ├── apple_ios
│   │   ├── browser
│   │   ├── email
│   │   └── ssh
│   ├── bsdi
│   │   └── softcart
│   ├── dialup
│   │   └── multi
│   │       └── login
│   ├── firefox
│   │   └── local
│   ├── freebsd
│   │   ├── ftp
│   │   ├── http
│   │   ├── local
│   │   ├── misc
│   │   ├── samba
│   │   ├── tacacs
│   │   └── telnet
│   ├── hpux
│   │   └── lpd
│   ├── irix
│   │   └── lpd
│   ├── linux
│   │   ├── antivirus
│   │   ├── browser
│   │   ├── ftp
│   │   ├── games
│   │   ├── http
│   │   ├── ids
│   │   ├── imap
│   │   ├── local
│   │   ├── misc
│   │   ├── mysql
│   │   ├── pop3
│   │   ├── postgres
│   │   ├── pptp
│   │   ├── proxy
│   │   ├── samba
│   │   ├── smtp
│   │   ├── ssh
│   │   ├── telnet
│   │   └── upnp
│   ├── mainframe
│   │   └── ftp
│   ├── multi
│   │   ├── browser
│   │   ├── elasticsearch
│   │   ├── fileformat
│   │   ├── ftp
│   │   ├── gdb
│   │   ├── http
│   │   ├── ids
│   │   ├── local
│   │   ├── misc
│   │   ├── ntp
│   │   ├── php
│   │   ├── postgres
│   │   ├── realserver
│   │   ├── samba
│   │   ├── sap
│   │   ├── script
│   │   ├── ssh
│   │   ├── svn
│   │   ├── upnp
│   │   ├── vnc
│   │   ├── vpn
│   │   └── wyse
│   ├── netware
│   │   ├── smb
│   │   └── sunrpc
│   ├── osx
│   │   ├── afp
│   │   ├── arkeia
│   │   ├── browser
│   │   ├── email
│   │   ├── ftp
│   │   ├── http
│   │   ├── local
│   │   ├── mdns
│   │   ├── misc
│   │   ├── rtsp
│   │   └── samba
│   ├── solaris
│   │   ├── dtspcd
│   │   ├── lpd
│   │   ├── samba
│   │   ├── sunrpc
│   │   └── telnet
│   ├── unix
│   │   ├── dhcp
│   │   ├── fileformat
│   │   ├── ftp
│   │   ├── http
│   │   ├── irc
│   │   ├── local
│   │   ├── misc
│   │   ├── smtp
│   │   ├── ssh
│   │   ├── webapp
│   │   └── x11
│   └── windows
│       ├── antivirus
│       ├── arkeia
│       ├── backdoor
│       ├── backupexec
│       ├── brightstor
│       ├── browser
│       ├── dcerpc
│       ├── email
│       ├── emc
│       ├── fileformat
│       ├── firewall
│       ├── ftp
│       ├── games
│       ├── http
│       ├── iis
│       ├── imap
│       ├── isapi
│       ├── ldap
│       ├── license
│       ├── local
│       ├── lotus
│       ├── lpd
│       ├── misc
│       ├── mmsp
│       ├── motorola
│       ├── mssql
│       ├── mysql
│       ├── nfs
│       ├── nntp
│       ├── novell
│       ├── oracle
│       ├── pop3
│       ├── postgres
│       ├── proxy
│       ├── scada
│       ├── sip
│       ├── smb
│       ├── smtp
│       ├── ssh
│       ├── ssl
│       ├── telnet
│       ├── tftp
│       ├── unicenter
│       ├── vnc
│       ├── vpn
│       ├── winrm
│       └── wins
├── nops
│   ├── armle
│   ├── mipsbe
│   ├── php
│   ├── ppc
│   ├── sparc
│   ├── tty
│   ├── x64
│   └── x86
├── payloads
│   ├── singles
│   │   ├── aix
│   │   │   └── ppc
│   │   ├── android
│   │   ├── bsd
│   │   │   ├── sparc
│   │   │   ├── x64
│   │   │   └── x86
│   │   ├── bsdi
│   │   │   └── x86
│   │   ├── cmd
│   │   │   ├── mainframe
│   │   │   ├── unix
│   │   │   └── windows
│   │   ├── firefox
│   │   ├── generic
│   │   ├── java
│   │   ├── linux
│   │   │   ├── aarch64
│   │   │   ├── armbe
│   │   │   ├── armle
│   │   │   ├── mips64
│   │   │   ├── mipsbe
│   │   │   ├── mipsle
│   │   │   ├── ppc
│   │   │   ├── ppc64
│   │   │   ├── ppc64le
│   │   │   ├── x64
│   │   │   ├── x86
│   │   │   └── zarch
│   │   ├── mainframe
│   │   ├── nodejs
│   │   ├── osx
│   │   │   ├── armle
│   │   │   ├── ppc
│   │   │   ├── x64
│   │   │   └── x86
│   │   ├── php
│   │   ├── python
│   │   ├── ruby
│   │   ├── solaris
│   │   │   ├── sparc
│   │   │   └── x86
│   │   ├── tty
│   │   │   └── unix
│   │   └── windows
│   │       └── x64
│   ├── stagers
│   │   ├── android
│   │   ├── bsd
│   │   │   └── x86
│   │   ├── bsdi
│   │   │   └── x86
│   │   ├── java
│   │   ├── linux
│   │   │   ├── armle
│   │   │   ├── mipsbe
│   │   │   ├── mipsle
│   │   │   ├── x64
│   │   │   └── x86
│   │   ├── multi
│   │   ├── netware
│   │   ├── osx
│   │   │   ├── armle
│   │   │   ├── ppc
│   │   │   ├── x64
│   │   │   └── x86
│   │   ├── php
│   │   ├── python
│   │   └── windows
│   │       └── x64
│   └── stages
│       ├── android
│       ├── bsd
│       │   └── x86
│       ├── bsdi
│       │   └── x86
│       ├── java
│       ├── linux
│       │   ├── armle
│       │   ├── mipsbe
│       │   ├── mipsle
│       │   ├── x64
│       │   └── x86
│       ├── multi
│       ├── netware
│       ├── osx
│       │   ├── armle
│       │   ├── ppc
│       │   ├── x64
│       │   └── x86
│       ├── php
│       ├── python
│       └── windows
│           └── x64
└── post
    ├── aix
    ├── android
    │   ├── capture
    │   └── manage
    ├── cisco
    │   └── gather
    ├── firefox
    │   ├── gather
    │   └── manage
    ├── hardware
    │   ├── automotive
    │   ├── rftransceiver
    │   └── zigbee
    ├── linux
    │   ├── busybox
    │   ├── dos
    │   ├── gather
    │   └── manage
    ├── multi
    │   ├── escalate
    │   ├── gather
    │   ├── general
    │   ├── manage
    │   └── recon
    ├── osx
    │   ├── admin
    │   ├── capture
    │   ├── gather
    │   └── manage
    ├── solaris
    │   └── gather
    └── windows
        ├── capture
        ├── escalate
        ├── gather
        │   ├── credentials
        │   └── forensics
        ├── manage
        │   └── powershell
        ├── recon
        └── wlan
```

```
modules
├── auxiliary
│   ├── admin
│   │   ├── 2wire
│   │   │   └── xslt_password_reset.rb
│   │   ├── android
│   │   │   └── google_play_store_uxss_xframe_rce.rb
│   │   ├── appletv
│   │   │   ├── appletv_display_image.rb
│   │   │   └── appletv_display_video.rb
│   │   ├── atg
│   │   │   └── atg_client.rb
│   │   ├── backupexec
│   │   │   ├── dump.rb
│   │   │   └── registry.rb
│   │   ├── chromecast
│   │   │   ├── chromecast_reset.rb
│   │   │   └── chromecast_youtube.rb
│   │   ├── cisco
│   │   │   ├── cisco_asa_extrabacon.rb
│   │   │   ├── cisco_secure_acs_bypass.rb
│   │   │   └── vpn_3000_ftp_bypass.rb
│   │   ├── db2
│   │   │   └── db2rcmd.rb
│   │   ├── edirectory
│   │   │   ├── edirectory_dhost_cookie.rb
│   │   │   └── edirectory_edirutil.rb
│   │   ├── emc
│   │   │   ├── alphastor_devicemanager_exec.rb
│   │   │   └── alphastor_librarymanager_exec.rb
│   │   ├── firetv
│   │   │   └── firetv_youtube.rb
│   │   ├── hp
│   │   │   ├── hp_data_protector_cmd.rb
│   │   │   └── hp_imc_som_create_account.rb
│   │   ├── http
│   │   │   ├── allegro_rompager_auth_bypass.rb
│   │   │   ├── arris_motorola_surfboard_backdoor_xss.rb
│   │   │   ├── axigen_file_access.rb
│   │   │   ├── cfme_manageiq_evm_pass_reset.rb
│   │   │   ├── contentkeeper_fileaccess.rb
│   │   │   ├── dlink_dir_300_600_exec_noauth.rb
│   │   │   ├── dlink_dir_645_password_extractor.rb
│   │   │   ├── dlink_dsl320b_password_extractor.rb
│   │   │   ├── foreman_openstack_satellite_priv_esc.rb
│   │   │   ├── hp_web_jetadmin_exec.rb
│   │   │   ├── iis_auth_bypass.rb
│   │   │   ├── intersil_pass_reset.rb
│   │   │   ├── iomega_storcenterpro_sessionid.rb
│   │   │   ├── jboss_bshdeployer.rb
│   │   │   ├── jboss_deploymentfilerepository.rb
│   │   │   ├── jboss_seam_exec.rb
│   │   │   ├── joomla_registration_privesc.rb
│   │   │   ├── kaseya_master_admin.rb
│   │   │   ├── katello_satellite_priv_esc.rb
│   │   │   ├── limesurvey_file_download.rb
│   │   │   ├── linksys_e1500_e2500_exec.rb
│   │   │   ├── linksys_tmunblock_admin_reset_bof.rb
│   │   │   ├── linksys_wrt54gl_exec.rb
│   │   │   ├── manage_engine_dc_create_admin.rb
│   │   │   ├── manageengine_dir_listing.rb
│   │   │   ├── manageengine_file_download.rb
│   │   │   ├── manageengine_pmp_privesc.rb
│   │   │   ├── mutiny_frontend_read_delete.rb
│   │   │   ├── netflow_file_download.rb
│   │   │   ├── netgear_auth_download.rb
│   │   │   ├── netgear_soap_password_extractor.rb
│   │   │   ├── netgear_wnr2000_pass_recovery.rb
│   │   │   ├── nexpose_xxe_file_read.rb
│   │   │   ├── novell_file_reporter_filedelete.rb
│   │   │   ├── nuuo_nvrmini_reset.rb
│   │   │   ├── openbravo_xxe.rb
│   │   │   ├── rails_devise_pass_reset.rb
│   │   │   ├── scrutinizer_add_user.rb
│   │   │   ├── sophos_wpa_traversal.rb
│   │   │   ├── sysaid_admin_acct.rb
│   │   │   ├── sysaid_file_download.rb
│   │   │   ├── sysaid_sql_creds.rb
│   │   │   ├── telpho10_credential_dump.rb
│   │   │   ├── tomcat_administration.rb
│   │   │   ├── tomcat_utf8_traversal.rb
│   │   │   ├── trendmicro_dlp_traversal.rb
│   │   │   ├── typo3_sa_2009_001.rb
│   │   │   ├── typo3_sa_2009_002.rb
│   │   │   ├── typo3_sa_2010_020.rb
│   │   │   ├── typo3_winstaller_default_enc_keys.rb
│   │   │   ├── vbulletin_upgrade_admin.rb
│   │   │   ├── webnms_cred_disclosure.rb
│   │   │   ├── webnms_file_download.rb
│   │   │   ├── wp_custom_contact_forms.rb
│   │   │   ├── wp_easycart_privilege_escalation.rb
│   │   │   ├── wp_symposium_sql_injection.rb
│   │   │   ├── wp_wplms_privilege_escalation.rb
│   │   │   └── zyxel_admin_password_extractor.rb
│   │   ├── kerberos
│   │   │   └── ms14_068_kerberos_checksum.rb
│   │   ├── maxdb
│   │   │   └── maxdb_cons_exec.rb
│   │   ├── misc
│   │   │   ├── sercomm_dump_config.rb
│   │   │   └── wol.rb
│   │   ├── motorola
│   │   │   └── wr850g_cred.rb
│   │   ├── ms
│   │   │   └── ms08_059_his2006.rb
│   │   ├── mssql
│   │   │   ├── mssql_enum_domain_accounts.rb
│   │   │   ├── mssql_enum_domain_accounts_sqli.rb
│   │   │   ├── mssql_enum.rb
│   │   │   ├── mssql_enum_sql_logins.rb
│   │   │   ├── mssql_escalate_dbowner.rb
│   │   │   ├── mssql_escalate_dbowner_sqli.rb
│   │   │   ├── mssql_escalate_execute_as.rb
│   │   │   ├── mssql_escalate_execute_as_sqli.rb
│   │   │   ├── mssql_exec.rb
│   │   │   ├── mssql_findandsampledata.rb
│   │   │   ├── mssql_idf.rb
│   │   │   ├── mssql_ntlm_stealer.rb
│   │   │   ├── mssql_ntlm_stealer_sqli.rb
│   │   │   ├── mssql_sql_file.rb
│   │   │   └── mssql_sql.rb
│   │   ├── mysql
│   │   │   ├── mysql_enum.rb
│   │   │   └── mysql_sql.rb
│   │   ├── natpmp
│   │   │   └── natpmp_map.rb
│   │   ├── netbios
│   │   │   └── netbios_spoof.rb
│   │   ├── officescan
│   │   │   └── tmlisten_traversal.rb
│   │   ├── oracle
│   │   │   ├── oracle_login.rb
│   │   │   ├── oracle_sql.rb
│   │   │   ├── oraenum.rb
│   │   │   ├── ora_ntlm_stealer.rb
│   │   │   ├── osb_execqr2.rb
│   │   │   ├── osb_execqr3.rb
│   │   │   ├── osb_execqr.rb
│   │   │   ├── post_exploitation
│   │   │   │   ├── win32exec.rb
│   │   │   │   └── win32upload.rb
│   │   │   ├── sid_brute.rb
│   │   │   └── tnscmd.rb
│   │   ├── pop2
│   │   │   └── uw_fileretrieval.rb
│   │   ├── postgres
│   │   │   ├── postgres_readfile.rb
│   │   │   └── postgres_sql.rb
│   │   ├── sap
│   │   │   ├── sap_configservlet_exec_noauth.rb
│   │   │   └── sap_mgmt_con_osexec.rb
│   │   ├── scada
│   │   │   ├── advantech_webaccess_dbvisitor_sqli.rb
│   │   │   ├── ge_proficy_substitute_traversal.rb
│   │   │   ├── modicon_command.rb
│   │   │   ├── modicon_password_recovery.rb
│   │   │   ├── modicon_stux_transfer.rb
│   │   │   ├── multi_cip_command.rb
│   │   │   ├── phoenix_command.rb
│   │   │   └── yokogawa_bkbcopyd_client.rb
│   │   ├── serverprotect
│   │   │   └── file.rb
│   │   ├── smb
│   │   │   ├── check_dir_file.rb
│   │   │   ├── delete_file.rb
│   │   │   ├── download_file.rb
│   │   │   ├── list_directory.rb
│   │   │   ├── psexec_command.rb
│   │   │   ├── psexec_ntdsgrab.rb
│   │   │   ├── samba_symlink_traversal.rb
│   │   │   └── upload_file.rb
│   │   ├── sunrpc
│   │   │   └── solaris_kcms_readfile.rb
│   │   ├── tftp
│   │   │   └── tftp_transfer_util.rb
│   │   ├── tikiwiki
│   │   │   └── tikidblib.rb
│   │   ├── upnp
│   │   │   └── soap_portmapping.rb
│   │   ├── vmware
│   │   │   ├── poweroff_vm.rb
│   │   │   ├── poweron_vm.rb
│   │   │   ├── tag_vm.rb
│   │   │   └── terminate_esx_sessions.rb
│   │   ├── vnc
│   │   │   └── realvnc_41_bypass.rb
│   │   ├── vxworks
│   │   │   ├── apple_airport_extreme_password.rb
│   │   │   ├── dlink_i2eye_autoanswer.rb
│   │   │   ├── wdbrpc_memory_dump.rb
│   │   │   └── wdbrpc_reboot.rb
│   │   ├── webmin
│   │   │   ├── edit_html_fileaccess.rb
│   │   │   └── file_disclosure.rb
│   │   └── zend
│   │       └── java_bridge.rb
│   ├── analyze
│   │   ├── jtr_aix.rb
│   │   ├── jtr_crack_fast.rb
│   │   ├── jtr_linux.rb
│   │   ├── jtr_mssql_fast.rb
│   │   ├── jtr_mysql_fast.rb
│   │   ├── jtr_oracle_fast.rb
│   │   └── jtr_postgres_fast.rb
│   ├── bnat
│   │   ├── bnat_router.rb
│   │   └── bnat_scan.rb
│   ├── client
│   │   ├── hwbridge
│   │   │   └── connect.rb
│   │   ├── mms
│   │   │   └── send_mms.rb
│   │   ├── sms
│   │   │   └── send_text.rb
│   │   └── smtp
│   │       └── emailer.rb
│   ├── crawler
│   │   └── msfcrawler.rb
│   ├── docx
│   │   └── word_unc_injector.rb
│   ├── dos
│   │   ├── android
│   │   │   └── android_stock_browser_iframe.rb
│   │   ├── cisco
│   │   │   └── ios_http_percentpercent.rb
│   │   ├── dhcp
│   │   │   └── isc_dhcpd_clientid.rb
│   │   ├── dns
│   │   │   └── bind_tkey.rb
│   │   ├── freebsd
│   │   │   └── nfsd
│   │   │       └── nfsd_mount.rb
│   │   ├── hp
│   │   │   └── data_protector_rds.rb
│   │   ├── http
│   │   │   ├── 3com_superstack_switch.rb
│   │   │   ├── apache_commons_fileupload_dos.rb
│   │   │   ├── apache_mod_isapi.rb
│   │   │   ├── apache_range_dos.rb
│   │   │   ├── apache_tomcat_transfer_encoding.rb
│   │   │   ├── canon_wireless_printer.rb
│   │   │   ├── dell_openmanage_post.rb
│   │   │   ├── f5_bigip_apm_max_sessions.rb
│   │   │   ├── gzip_bomb_dos.rb
│   │   │   ├── hashcollision_dos.rb
│   │   │   ├── monkey_headers.rb
│   │   │   ├── ms15_034_ulonglongadd.rb
│   │   │   ├── nodejs_pipelining.rb
│   │   │   ├── novell_file_reporter_heap_bof.rb
│   │   │   ├── rails_action_view.rb
│   │   │   ├── rails_json_float_dos.rb
│   │   │   ├── sonicwall_ssl_format.rb
│   │   │   ├── webrick_regex.rb
│   │   │   ├── wordpress_long_password_dos.rb
│   │   │   └── wordpress_xmlrpc_dos.rb
│   │   ├── mdns
│   │   │   └── avahi_portzero.rb
│   │   ├── misc
│   │   │   ├── dopewars.rb
│   │   │   ├── ibm_sametime_webplayer_dos.rb
│   │   │   ├── ibm_tsm_dos.rb
│   │   │   └── memcached.rb
│   │   ├── ntp
│   │   │   └── ntpd_reserved_dos.rb
│   │   ├── pptp
│   │   │   └── ms02_063_pptp_dos.rb
│   │   ├── samba
│   │   │   ├── lsa_addprivs_heap.rb
│   │   │   ├── lsa_transnames_heap.rb
│   │   │   └── read_nttrans_ea_list.rb
│   │   ├── sap
│   │   │   └── sap_soap_rfc_eps_delete_file.rb
│   │   ├── scada
│   │   │   ├── beckhoff_twincat.rb
│   │   │   ├── d20_tftp_overflow.rb
│   │   │   ├── igss9_dataserver.rb
│   │   │   └── yokogawa_logsvr.rb
│   │   ├── smtp
│   │   │   └── sendmail_prescan.rb
│   │   ├── solaris
│   │   │   └── lpd
│   │   │       └── cascade_delete.rb
│   │   ├── ssl
│   │   │   ├── dtls_changecipherspec.rb
│   │   │   ├── dtls_fragment_overflow.rb
│   │   │   └── openssl_aesni.rb
│   │   ├── syslog
│   │   │   └── rsyslog_long_tag.rb
│   │   ├── tcp
│   │   │   ├── junos_tcp_opt.rb
│   │   │   └── synflood.rb
│   │   ├── upnp
│   │   │   └── miniupnpd_dos.rb
│   │   ├── windows
│   │   │   ├── appian
│   │   │   │   └── appian_bpm.rb
│   │   │   ├── browser
│   │   │   │   └── ms09_065_eot_integer.rb
│   │   │   ├── ftp
│   │   │   │   ├── filezilla_admin_user.rb
│   │   │   │   ├── filezilla_server_port.rb
│   │   │   │   ├── guildftp_cwdlist.rb
│   │   │   │   ├── iis75_ftpd_iac_bof.rb
│   │   │   │   ├── iis_list_exhaustion.rb
│   │   │   │   ├── solarftp_user.rb
│   │   │   │   ├── titan626_site.rb
│   │   │   │   ├── vicftps50_list.rb
│   │   │   │   ├── winftp230_nlst.rb
│   │   │   │   ├── xmeasy560_nlst.rb
│   │   │   │   └── xmeasy570_nlst.rb
│   │   │   ├── games
│   │   │   │   └── kaillera.rb
│   │   │   ├── http
│   │   │   │   ├── ms10_065_ii6_asp_dos.rb
│   │   │   │   └── pi3web_isapi.rb
│   │   │   ├── llmnr
│   │   │   │   └── ms11_030_dnsapi.rb
│   │   │   ├── nat
│   │   │   │   └── nat_helper.rb
│   │   │   ├── rdp
│   │   │   │   └── ms12_020_maxchannelids.rb
│   │   │   ├── smb
│   │   │   │   ├── ms05_047_pnp.rb
│   │   │   │   ├── ms06_035_mailslot.rb
│   │   │   │   ├── ms06_063_trans.rb
│   │   │   │   ├── ms09_001_write.rb
│   │   │   │   ├── ms09_050_smb2_negotiate_pidhigh.rb
│   │   │   │   ├── ms09_050_smb2_session_logoff.rb
│   │   │   │   ├── ms10_006_negotiate_response_loop.rb
│   │   │   │   ├── ms10_054_queryfs_pool_overflow.rb
│   │   │   │   ├── ms11_019_electbowser.rb
│   │   │   │   ├── rras_vls_null_deref.rb
│   │   │   │   └── vista_negotiate_stop.rb
│   │   │   ├── smtp
│   │   │   │   └── ms06_019_exchange.rb
│   │   │   ├── ssh
│   │   │   │   └── sysax_sshd_kexchange.rb
│   │   │   └── tftp
│   │   │       ├── pt360_write.rb
│   │   │       └── solarwinds.rb
│   │   └── wireshark
│   │       ├── capwap.rb
│   │       ├── chunked.rb
│   │       ├── cldap.rb
│   │       └── ldap.rb
│   ├── fuzzers
│   │   ├── dns
│   │   │   └── dns_fuzzer.rb
│   │   ├── ftp
│   │   │   ├── client_ftp.rb
│   │   │   └── ftp_pre_post.rb
│   │   ├── http
│   │   │   ├── http_form_field.rb
│   │   │   ├── http_get_uri_long.rb
│   │   │   └── http_get_uri_strings.rb
│   │   ├── ntp
│   │   │   └── ntp_protocol_fuzzer.rb
│   │   ├── smb
│   │   │   ├── smb2_negotiate_corrupt.rb
│   │   │   ├── smb_create_pipe_corrupt.rb
│   │   │   ├── smb_create_pipe.rb
│   │   │   ├── smb_negotiate_corrupt.rb
│   │   │   ├── smb_ntlm1_login_corrupt.rb
│   │   │   ├── smb_tree_connect_corrupt.rb
│   │   │   └── smb_tree_connect.rb
│   │   ├── smtp
│   │   │   └── smtp_fuzzer.rb
│   │   ├── ssh
│   │   │   ├── ssh_kexinit_corrupt.rb
│   │   │   ├── ssh_version_15.rb
│   │   │   ├── ssh_version_2.rb
│   │   │   └── ssh_version_corrupt.rb
│   │   └── tds
│   │       ├── tds_login_corrupt.rb
│   │       └── tds_login_username.rb
│   ├── gather
│   │   ├── advantech_webaccess_creds.rb
│   │   ├── alienvault_iso27001_sqli.rb
│   │   ├── alienvault_newpolicyform_sqli.rb
│   │   ├── android_browser_file_theft.rb
│   │   ├── android_browser_new_tab_cookie_theft.rb
│   │   ├── android_htmlfileprovider.rb
│   │   ├── android_object_tag_webview_uxss.rb
│   │   ├── android_stock_browser_uxss.rb
│   │   ├── apache_rave_creds.rb
│   │   ├── apple_safari_ftp_url_cookie_theft.rb
│   │   ├── apple_safari_webarchive_uxss.rb
│   │   ├── avtech744_dvr_accounts.rb
│   │   ├── browser_info.rb
│   │   ├── censys_search.rb
│   │   ├── checkpoint_hostname.rb
│   │   ├── citrix_published_applications.rb
│   │   ├── citrix_published_bruteforce.rb
│   │   ├── coldfusion_pwd_props.rb
│   │   ├── corpwatch_lookup_id.rb
│   │   ├── corpwatch_lookup_name.rb
│   │   ├── d20pass.rb
│   │   ├── darkcomet_filedownloader.rb
│   │   ├── doliwamp_traversal_creds.rb
│   │   ├── drupal_openid_xxe.rb
│   │   ├── eaton_nsm_creds.rb
│   │   ├── emc_cta_xxe.rb
│   │   ├── enum_dns.rb
│   │   ├── eventlog_cred_disclosure.rb
│   │   ├── external_ip.rb
│   │   ├── f5_bigip_cookie_disclosure.rb
│   │   ├── firefox_pdfjs_file_theft.rb
│   │   ├── flash_rosetta_jsonp_url_disclosure.rb
│   │   ├── hp_enum_perfd.rb
│   │   ├── hp_snac_domain_creds.rb
│   │   ├── huawei_wifi_info.rb
│   │   ├── ibm_sametime_enumerate_users.rb
│   │   ├── ibm_sametime_room_brute.rb
│   │   ├── ibm_sametime_version.rb
│   │   ├── ie_sandbox_findfiles.rb
│   │   ├── ie_uxss_injection.rb
│   │   ├── impersonate_ssl.rb
│   │   ├── java_rmi_registry.rb
│   │   ├── jenkins_cred_recovery.rb
│   │   ├── joomla_com_realestatemanager_sqli.rb
│   │   ├── joomla_contenthistory_sqli.rb
│   │   ├── joomla_weblinks_sqli.rb
│   │   ├── kerberos_enumusers.rb
│   │   ├── konica_minolta_pwd_extract.rb
│   │   ├── lansweeper_collector.rb
│   │   ├── mantisbt_admin_sqli.rb
│   │   ├── mcafee_epo_xxe.rb
│   │   ├── memcached_extractor.rb
│   │   ├── mongodb_js_inject_collection_enum.rb
│   │   ├── ms14_052_xmldom.rb
│   │   ├── mybb_db_fingerprint.rb
│   │   ├── natpmp_external_address.rb
│   │   ├── netgear_password_disclosure.rb
│   │   ├── opennms_xxe.rb
│   │   ├── qnap_backtrace_admin_hash.rb
│   │   ├── safari_file_url_navigation.rb
│   │   ├── search_email_collector.rb
│   │   ├── searchengine_subdomains_collector.rb
│   │   ├── shodan_honeyscore.rb
│   │   ├── shodan_search.rb
│   │   ├── snare_registry.rb
│   │   ├── solarwinds_orion_sqli.rb
│   │   ├── ssllabs_scan.rb
│   │   ├── trackit_sql_domain_creds.rb
│   │   ├── vbulletin_vote_sqli.rb
│   │   ├── windows_deployment_services_shares.rb
│   │   ├── wp_all_in_one_migration_export.rb
│   │   ├── wp_ultimate_csv_importer_user_extract.rb
│   │   ├── wp_w3_total_cache_hash_extract.rb
│   │   ├── xbmc_traversal.rb
│   │   ├── xerox_pwd_extract.rb
│   │   ├── xerox_workcentre_5xxx_ldap.rb
│   │   ├── zabbix_toggleids_sqli.rb
│   │   └── zoomeye_search.rb
│   ├── parser
│   │   └── unattend.rb
│   ├── pdf
│   │   └── foxit
│   │       └── authbypass.rb
│   ├── scanner
│   │   ├── acpp
│   │   │   └── login.rb
│   │   ├── afp
│   │   │   ├── afp_login.rb
│   │   │   └── afp_server_info.rb
│   │   ├── backdoor
│   │   │   └── energizer_duo_detect.rb
│   │   ├── chargen
│   │   │   └── chargen_probe.rb
│   │   ├── couchdb
│   │   │   ├── couchdb_enum.rb
│   │   │   └── couchdb_login.rb
│   │   ├── db2
│   │   │   ├── db2_auth.rb
│   │   │   ├── db2_version.rb
│   │   │   └── discovery.rb
│   │   ├── dcerpc
│   │   │   ├── endpoint_mapper.rb
│   │   │   ├── hidden.rb
│   │   │   ├── management.rb
│   │   │   ├── tcp_dcerpc_auditor.rb
│   │   │   └── windows_deployment_services.rb
│   │   ├── dect
│   │   │   ├── call_scanner.rb
│   │   │   └── station_scanner.rb
│   │   ├── discovery
│   │   │   ├── arp_sweep.rb
│   │   │   ├── empty_udp.rb
│   │   │   ├── ipv6_multicast_ping.rb
│   │   │   ├── ipv6_neighbor.rb
│   │   │   ├── ipv6_neighbor_router_advertisement.rb
│   │   │   ├── udp_probe.rb
│   │   │   └── udp_sweep.rb
│   │   ├── dlsw
│   │   │   └── dlsw_leak_capture.rb
│   │   ├── dns
│   │   │   └── dns_amp.rb
│   │   ├── elasticsearch
│   │   │   └── indices_enum.rb
│   │   ├── emc
│   │   │   ├── alphastor_devicemanager.rb
│   │   │   └── alphastor_librarymanager.rb
│   │   ├── finger
│   │   │   └── finger_users.rb
│   │   ├── ftp
│   │   │   ├── anonymous.rb
│   │   │   ├── bison_ftp_traversal.rb
│   │   │   ├── colorado_ftp_traversal.rb
│   │   │   ├── easy_file_sharing_ftp.rb
│   │   │   ├── ftp_login.rb
│   │   │   ├── ftp_version.rb
│   │   │   ├── konica_ftp_traversal.rb
│   │   │   ├── pcman_ftp_traversal.rb
│   │   │   └── titanftp_xcrc_traversal.rb
│   │   ├── h323
│   │   │   └── h323_version.rb
│   │   ├── http
│   │   │   ├── a10networks_ax_directory_traversal.rb
│   │   │   ├── accellion_fta_statecode_file_read.rb
│   │   │   ├── adobe_xml_inject.rb
│   │   │   ├── advantech_webaccess_login.rb
│   │   │   ├── allegro_rompager_misfortune_cookie.rb
│   │   │   ├── apache_activemq_source_disclosure.rb
│   │   │   ├── apache_activemq_traversal.rb
│   │   │   ├── apache_mod_cgi_bash_env.rb
│   │   │   ├── apache_userdir_enum.rb
│   │   │   ├── appletv_login.rb
│   │   │   ├── atlassian_crowd_fileaccess.rb
│   │   │   ├── axis_local_file_include.rb
│   │   │   ├── axis_login.rb
│   │   │   ├── backup_file.rb
│   │   │   ├── barracuda_directory_traversal.rb
│   │   │   ├── bavision_cam_login.rb
│   │   │   ├── binom3_login_config_pass_dump.rb
│   │   │   ├── bitweaver_overlay_type_traversal.rb
│   │   │   ├── blind_sql_query.rb
│   │   │   ├── bmc_trackit_passwd_reset.rb
│   │   │   ├── brute_dirs.rb
│   │   │   ├── buffalo_login.rb
│   │   │   ├── caidao_bruteforce_login.rb
│   │   │   ├── canon_wireless.rb
│   │   │   ├── cert.rb
│   │   │   ├── chef_webui_login.rb
│   │   │   ├── chromecast_webserver.rb
│   │   │   ├── chromecast_wifi.rb
│   │   │   ├── cisco_asa_asdm.rb
│   │   │   ├── cisco_device_manager.rb
│   │   │   ├── cisco_firepower_download.rb
│   │   │   ├── cisco_firepower_login.rb
│   │   │   ├── cisco_ios_auth_bypass.rb
│   │   │   ├── cisco_ironport_enum.rb
│   │   │   ├── cisco_nac_manager_traversal.rb
│   │   │   ├── cisco_ssl_vpn_priv_esc.rb
│   │   │   ├── cisco_ssl_vpn.rb
│   │   │   ├── clansphere_traversal.rb
│   │   │   ├── coldfusion_locale_traversal.rb
│   │   │   ├── coldfusion_version.rb
│   │   │   ├── concrete5_member_list.rb
│   │   │   ├── copy_of_file.rb
│   │   │   ├── crawler.rb
│   │   │   ├── dell_idrac.rb
│   │   │   ├── dir_listing.rb
│   │   │   ├── dir_scanner.rb
│   │   │   ├── dir_webdav_unicode_bypass.rb
│   │   │   ├── dlink_dir_300_615_http_login.rb
│   │   │   ├── dlink_dir_615h_http_login.rb
│   │   │   ├── dlink_dir_session_cgi_http_login.rb
│   │   │   ├── dlink_user_agent_backdoor.rb
│   │   │   ├── dnalims_file_retrieve.rb
│   │   │   ├── dolibarr_login.rb
│   │   │   ├── drupal_views_user_enum.rb
│   │   │   ├── ektron_cms400net.rb
│   │   │   ├── elasticsearch_traversal.rb
│   │   │   ├── enum_wayback.rb
│   │   │   ├── epmp1000_cmd_exec.rb
│   │   │   ├── epmp1000_dump_config.rb
│   │   │   ├── epmp1000_dump_hashes.rb
│   │   │   ├── epmp1000_web_login.rb
│   │   │   ├── error_sql_injection.rb
│   │   │   ├── etherpad_duo_login.rb
│   │   │   ├── f5_bigip_virtual_server.rb
│   │   │   ├── f5_mgmt_scanner.rb
│   │   │   ├── file_same_name_dir.rb
│   │   │   ├── files_dir.rb
│   │   │   ├── frontpage_login.rb
│   │   │   ├── gavazzi_em_login_loot.rb
│   │   │   ├── gitlab_login.rb
│   │   │   ├── gitlab_user_enum.rb
│   │   │   ├── git_scanner.rb
│   │   │   ├── glassfish_login.rb
│   │   │   ├── goahead_traversal.rb
│   │   │   ├── groupwise_agents_http_traversal.rb
│   │   │   ├── host_header_injection.rb
│   │   │   ├── hp_imc_bims_downloadservlet_traversal.rb
│   │   │   ├── hp_imc_faultdownloadservlet_traversal.rb
│   │   │   ├── hp_imc_ictdownloadservlet_traversal.rb
│   │   │   ├── hp_imc_reportimgservlt_traversal.rb
│   │   │   ├── hp_imc_som_file_download.rb
│   │   │   ├── hp_sitescope_getfileinternal_fileaccess.rb
│   │   │   ├── hp_sitescope_getsitescopeconfiguration.rb
│   │   │   ├── hp_sitescope_loadfilecontent_fileaccess.rb
│   │   │   ├── hp_sys_mgmt_login.rb
│   │   │   ├── httpbl_lookup.rb
│   │   │   ├── http_header.rb
│   │   │   ├── http_hsts.rb
│   │   │   ├── http_login.rb
│   │   │   ├── http_put.rb
│   │   │   ├── http_traversal.rb
│   │   │   ├── http_version.rb
│   │   │   ├── iis_internal_ip.rb
│   │   │   ├── influxdb_enum.rb
│   │   │   ├── infovista_enum.rb
│   │   │   ├── ipboard_login.rb
│   │   │   ├── jboss_status.rb
│   │   │   ├── jboss_vulnscan.rb
│   │   │   ├── jenkins_command.rb
│   │   │   ├── jenkins_enum.rb
│   │   │   ├── jenkins_login.rb
│   │   │   ├── joomla_bruteforce_login.rb
│   │   │   ├── joomla_ecommercewd_sqli_scanner.rb
│   │   │   ├── joomla_gallerywd_sqli_scanner.rb
│   │   │   ├── joomla_pages.rb
│   │   │   ├── joomla_plugins.rb
│   │   │   ├── joomla_version.rb
│   │   │   ├── kodi_traversal.rb
│   │   │   ├── linknat_vos_traversal.rb
│   │   │   ├── linksys_e1500_traversal.rb
│   │   │   ├── litespeed_source_disclosure.rb
│   │   │   ├── lucky_punch.rb
│   │   │   ├── majordomo2_directory_traversal.rb
│   │   │   ├── manageengine_desktop_central_login.rb
│   │   │   ├── manageengine_deviceexpert_traversal.rb
│   │   │   ├── manageengine_deviceexpert_user_creds.rb
│   │   │   ├── manageengine_securitymanager_traversal.rb
│   │   │   ├── mediawiki_svg_fileaccess.rb
│   │   │   ├── meteocontrol_weblog_extractadmin.rb
│   │   │   ├── mod_negotiation_brute.rb
│   │   │   ├── mod_negotiation_scanner.rb
│   │   │   ├── ms09_020_webdav_unicode_bypass.rb
│   │   │   ├── ms15_034_http_sys_memory_dump.rb
│   │   │   ├── mybook_live_login.rb
│   │   │   ├── netdecision_traversal.rb
│   │   │   ├── netgear_sph200d_traversal.rb
│   │   │   ├── nginx_source_disclosure.rb
│   │   │   ├── novell_file_reporter_fsfui_fileaccess.rb
│   │   │   ├── novell_file_reporter_srs_fileaccess.rb
│   │   │   ├── novell_mdm_creds.rb
│   │   │   ├── ntlm_info_enumeration.rb
│   │   │   ├── octopusdeploy_login.rb
│   │   │   ├── openmind_messageos_login.rb
│   │   │   ├── open_proxy.rb
│   │   │   ├── options.rb
│   │   │   ├── oracle_demantra_database_credentials_leak.rb
│   │   │   ├── oracle_demantra_file_retrieval.rb
│   │   │   ├── oracle_ilom_login.rb
│   │   │   ├── owa_ews_login.rb
│   │   │   ├── owa_iis_internal_ip.rb
│   │   │   ├── owa_login.rb
│   │   │   ├── pocketpad_login.rb
│   │   │   ├── prev_dir_same_name_file.rb
│   │   │   ├── radware_appdirector_enum.rb
│   │   │   ├── rails_json_yaml_scanner.rb
│   │   │   ├── rails_mass_assignment.rb
│   │   │   ├── rails_xml_yaml_scanner.rb
│   │   │   ├── replace_ext.rb
│   │   │   ├── rewrite_proxy_bypass.rb
│   │   │   ├── rfcode_reader_enum.rb
│   │   │   ├── rips_traversal.rb
│   │   │   ├── robots_txt.rb
│   │   │   ├── s40_traversal.rb
│   │   │   ├── sap_businessobjects_user_brute.rb
│   │   │   ├── sap_businessobjects_user_brute_web.rb
│   │   │   ├── sap_businessobjects_user_enum.rb
│   │   │   ├── sap_businessobjects_version_enum.rb
│   │   │   ├── scraper.rb
│   │   │   ├── sentry_cdu_enum.rb
│   │   │   ├── servicedesk_plus_traversal.rb
│   │   │   ├── sevone_enum.rb
│   │   │   ├── simple_webserver_traversal.rb
│   │   │   ├── smt_ipmi_49152_exposure.rb
│   │   │   ├── smt_ipmi_cgi_scanner.rb
│   │   │   ├── smt_ipmi_static_cert_scanner.rb
│   │   │   ├── smt_ipmi_url_redirect_traversal.rb
│   │   │   ├── soap_xml.rb
│   │   │   ├── sockso_traversal.rb
│   │   │   ├── splunk_web_login.rb
│   │   │   ├── squid_pivot_scanning.rb
│   │   │   ├── squiz_matrix_user_enum.rb
│   │   │   ├── ssl.rb
│   │   │   ├── ssl_version.rb
│   │   │   ├── support_center_plus_directory_traversal.rb
│   │   │   ├── svn_scanner.rb
│   │   │   ├── svn_wcdb_scanner.rb
│   │   │   ├── sybase_easerver_traversal.rb
│   │   │   ├── symantec_brightmail_ldapcreds.rb
│   │   │   ├── symantec_brightmail_logfile.rb
│   │   │   ├── symantec_web_gateway_login.rb
│   │   │   ├── titan_ftp_admin_pwd.rb
│   │   │   ├── title.rb
│   │   │   ├── tomcat_enum.rb
│   │   │   ├── tomcat_mgr_login.rb
│   │   │   ├── tplink_traversal_noauth.rb
│   │   │   ├── trace_axd.rb
│   │   │   ├── trace.rb
│   │   │   ├── typo3_bruteforce.rb
│   │   │   ├── vcms_login.rb
│   │   │   ├── verb_auth_bypass.rb
│   │   │   ├── vhost_scanner.rb
│   │   │   ├── wangkongbao_traversal.rb
│   │   │   ├── webdav_internal_ip.rb
│   │   │   ├── webdav_scanner.rb
│   │   │   ├── webdav_website_content.rb
│   │   │   ├── webpagetest_traversal.rb
│   │   │   ├── web_vulndb.rb
│   │   │   ├── wildfly_traversal.rb
│   │   │   ├── wordpress_content_injection.rb
│   │   │   ├── wordpress_cp_calendar_sqli.rb
│   │   │   ├── wordpress_ghost_scanner.rb
│   │   │   ├── wordpress_login_enum.rb
│   │   │   ├── wordpress_multicall_creds.rb
│   │   │   ├── wordpress_pingback_access.rb
│   │   │   ├── wordpress_scanner.rb
│   │   │   ├── wordpress_xmlrpc_login.rb
│   │   │   ├── wp_contus_video_gallery_sqli.rb
│   │   │   ├── wp_dukapress_file_read.rb
│   │   │   ├── wp_gimedia_library_file_read.rb
│   │   │   ├── wp_mobileedition_file_read.rb
│   │   │   ├── wp_mobile_pack_info_disclosure.rb
│   │   │   ├── wp_nextgen_galley_file_read.rb
│   │   │   ├── wp_simple_backup_file_read.rb
│   │   │   ├── wp_subscribe_comments_file_read.rb
│   │   │   ├── xpath.rb
│   │   │   ├── yaws_traversal.rb
│   │   │   ├── zabbix_login.rb
│   │   │   ├── zenworks_assetmanagement_fileaccess.rb
│   │   │   └── zenworks_assetmanagement_getconfig.rb
│   │   ├── ike
│   │   │   └── cisco_ike_benigncertain.rb
│   │   ├── imap
│   │   │   └── imap_version.rb
│   │   ├── ip
│   │   │   └── ipidseq.rb
│   │   ├── ipmi
│   │   │   ├── ipmi_cipher_zero.rb
│   │   │   ├── ipmi_dumphashes.rb
│   │   │   └── ipmi_version.rb
│   │   ├── jenkins
│   │   │   └── jenkins_udp_broadcast_enum.rb
│   │   ├── kademlia
│   │   │   └── server_info.rb
│   │   ├── llmnr
│   │   │   └── query.rb
│   │   ├── lotus
│   │   │   ├── lotus_domino_hashes.rb
│   │   │   ├── lotus_domino_login.rb
│   │   │   └── lotus_domino_version.rb
│   │   ├── mdns
│   │   │   └── query.rb
│   │   ├── misc
│   │   │   ├── cctv_dvr_login.rb
│   │   │   ├── clamav_control.rb
│   │   │   ├── dahua_dvr_auth_bypass.rb
│   │   │   ├── dvr_config_disclosure.rb
│   │   │   ├── easycafe_server_fileaccess.rb
│   │   │   ├── ib_service_mgr_info.rb
│   │   │   ├── java_rmi_server.rb
│   │   │   ├── oki_scanner.rb
│   │   │   ├── poisonivy_control_scanner.rb
│   │   │   ├── raysharp_dvr_passwords.rb
│   │   │   ├── rosewill_rxs3211_passwords.rb
│   │   │   ├── sercomm_backdoor_scanner.rb
│   │   │   ├── sunrpc_portmapper.rb
│   │   │   └── zenworks_preboot_fileaccess.rb
│   │   ├── mongodb
│   │   │   └── mongodb_login.rb
│   │   ├── motorola
│   │   │   └── timbuktu_udp.rb
│   │   ├── msf
│   │   │   ├── msf_rpc_login.rb
│   │   │   └── msf_web_login.rb
│   │   ├── mssql
│   │   │   ├── mssql_hashdump.rb
│   │   │   ├── mssql_login.rb
│   │   │   ├── mssql_ping.rb
│   │   │   └── mssql_schemadump.rb
│   │   ├── mysql
│   │   │   ├── mysql_authbypass_hashdump.rb
│   │   │   ├── mysql_file_enum.rb
│   │   │   ├── mysql_hashdump.rb
│   │   │   ├── mysql_login.rb
│   │   │   ├── mysql_schemadump.rb
│   │   │   ├── mysql_version.rb
│   │   │   └── mysql_writable_dirs.rb
│   │   ├── natpmp
│   │   │   └── natpmp_portscan.rb
│   │   ├── nessus
│   │   │   ├── nessus_ntp_login.rb
│   │   │   ├── nessus_rest_login.rb
│   │   │   ├── nessus_xmlrpc_login.rb
│   │   │   └── nessus_xmlrpc_ping.rb
│   │   ├── netbios
│   │   │   └── nbname.rb
│   │   ├── nexpose
│   │   │   └── nexpose_api_login.rb
│   │   ├── nfs
│   │   │   └── nfsmount.rb
│   │   ├── ntp
│   │   │   ├── ntp_monlist.rb
│   │   │   ├── ntp_nak_to_the_future.rb
│   │   │   ├── ntp_peer_list_dos.rb
│   │   │   ├── ntp_peer_list_sum_dos.rb
│   │   │   ├── ntp_readvar.rb
│   │   │   ├── ntp_req_nonce_dos.rb
│   │   │   ├── ntp_reslist_dos.rb
│   │   │   └── ntp_unsettrap_dos.rb
│   │   ├── openvas
│   │   │   ├── openvas_gsad_login.rb
│   │   │   ├── openvas_omp_login.rb
│   │   │   └── openvas_otp_login.rb
│   │   ├── oracle
│   │   │   ├── emc_sid.rb
│   │   │   ├── isqlplus_login.rb
│   │   │   ├── isqlplus_sidbrute.rb
│   │   │   ├── oracle_hashdump.rb
│   │   │   ├── oracle_login.rb
│   │   │   ├── sid_brute.rb
│   │   │   ├── sid_enum.rb
│   │   │   ├── spy_sid.rb
│   │   │   ├── tnslsnr_version.rb
│   │   │   ├── tnspoison_checker.rb
│   │   │   ├── xdb_sid_brute.rb
│   │   │   └── xdb_sid.rb
│   │   ├── pcanywhere
│   │   │   ├── pcanywhere_login.rb
│   │   │   ├── pcanywhere_tcp.rb
│   │   │   └── pcanywhere_udp.rb
│   │   ├── pop3
│   │   │   ├── pop3_login.rb
│   │   │   └── pop3_version.rb
│   │   ├── portmap
│   │   │   └── portmap_amp.rb
│   │   ├── portscan
│   │   │   ├── ack.rb
│   │   │   ├── ftpbounce.rb
│   │   │   ├── syn.rb
│   │   │   ├── tcp.rb
│   │   │   └── xmas.rb
│   │   ├── postgres
│   │   │   ├── postgres_dbname_flag_injection.rb
│   │   │   ├── postgres_hashdump.rb
│   │   │   ├── postgres_login.rb
│   │   │   ├── postgres_schemadump.rb
│   │   │   └── postgres_version.rb
│   │   ├── printer
│   │   │   ├── canon_iradv_pwd_extract.rb
│   │   │   ├── printer_delete_file.rb
│   │   │   ├── printer_download_file.rb
│   │   │   ├── printer_env_vars.rb
│   │   │   ├── printer_list_dir.rb
│   │   │   ├── printer_list_volumes.rb
│   │   │   ├── printer_ready_message.rb
│   │   │   ├── printer_upload_file.rb
│   │   │   └── printer_version_info.rb
│   │   ├── quake
│   │   │   └── server_info.rb
│   │   ├── rdp
│   │   │   └── ms12_020_check.rb
│   │   ├── redis
│   │   │   ├── file_upload.rb
│   │   │   ├── redis_login.rb
│   │   │   └── redis_server.rb
│   │   ├── rogue
│   │   │   ├── rogue_recv.rb
│   │   │   └── rogue_send.rb
│   │   ├── rservices
│   │   │   ├── rexec_login.rb
│   │   │   ├── rlogin_login.rb
│   │   │   └── rsh_login.rb
│   │   ├── rsync
│   │   │   └── modules_list.rb
│   │   ├── sap
│   │   │   ├── sap_ctc_verb_tampering_user_mgmt.rb
│   │   │   ├── sap_hostctrl_getcomputersystem.rb
│   │   │   ├── sap_icf_public_info.rb
│   │   │   ├── sap_icm_urlscan.rb
│   │   │   ├── sap_mgmt_con_abaplog.rb
│   │   │   ├── sap_mgmt_con_brute_login.rb
│   │   │   ├── sap_mgmt_con_extractusers.rb
│   │   │   ├── sap_mgmt_con_getaccesspoints.rb
│   │   │   ├── sap_mgmt_con_getenv.rb
│   │   │   ├── sap_mgmt_con_getlogfiles.rb
│   │   │   ├── sap_mgmt_con_getprocesslist.rb
│   │   │   ├── sap_mgmt_con_getprocessparameter.rb
│   │   │   ├── sap_mgmt_con_instanceproperties.rb
│   │   │   ├── sap_mgmt_con_listlogfiles.rb
│   │   │   ├── sap_mgmt_con_startprofile.rb
│   │   │   ├── sap_mgmt_con_version.rb
│   │   │   ├── sap_router_info_request.rb
│   │   │   ├── sap_router_portscanner.rb
│   │   │   ├── sap_service_discovery.rb
│   │   │   ├── sap_smb_relay.rb
│   │   │   ├── sap_soap_bapi_user_create1.rb
│   │   │   ├── sap_soap_rfc_brute_login.rb
│   │   │   ├── sap_soap_rfc_dbmcli_sxpg_call_system_command_exec.rb
│   │   │   ├── sap_soap_rfc_dbmcli_sxpg_command_exec.rb
│   │   │   ├── sap_soap_rfc_eps_get_directory_listing.rb
│   │   │   ├── sap_soap_rfc_pfl_check_os_file_existence.rb
│   │   │   ├── sap_soap_rfc_ping.rb
│   │   │   ├── sap_soap_rfc_read_table.rb
│   │   │   ├── sap_soap_rfc_rzl_read_dir.rb
│   │   │   ├── sap_soap_rfc_susr_rfc_user_interface.rb
│   │   │   ├── sap_soap_rfc_sxpg_call_system_exec.rb
│   │   │   ├── sap_soap_rfc_sxpg_command_exec.rb
│   │   │   ├── sap_soap_rfc_system_info.rb
│   │   │   ├── sap_soap_th_saprel_disclosure.rb
│   │   │   └── sap_web_gui_brute_login.rb
│   │   ├── scada
│   │   │   ├── digi_addp_reboot.rb
│   │   │   ├── digi_addp_version.rb
│   │   │   ├── digi_realport_serialport_scan.rb
│   │   │   ├── digi_realport_version.rb
│   │   │   ├── indusoft_ntwebserver_fileaccess.rb
│   │   │   ├── koyo_login.rb
│   │   │   ├── modbusclient.rb
│   │   │   ├── modbusdetect.rb
│   │   │   ├── modbus_findunitid.rb
│   │   │   ├── moxa_discover.rb
│   │   │   ├── profinet_siemens.rb
│   │   │   └── sielco_winlog_fileaccess.rb
│   │   ├── sip
│   │   │   ├── enumerator.rb
│   │   │   ├── enumerator_tcp.rb
│   │   │   ├── options.rb
│   │   │   ├── options_tcp.rb
│   │   │   └── sipdroid_ext_enum.rb
│   │   ├── smb
│   │   │   ├── pipe_auditor.rb
│   │   │   ├── pipe_dcerpc_auditor.rb
│   │   │   ├── psexec_loggedin_users.rb
│   │   │   ├── smb2_login.rb
│   │   │   ├── smb2.rb
│   │   │   ├── smb_enum_gpp.rb
│   │   │   ├── smb_enumshares.rb
│   │   │   ├── smb_enumusers_domain.rb
│   │   │   ├── smb_enumusers.rb
│   │   │   ├── smb_login.rb
│   │   │   ├── smb_lookupsid.rb
│   │   │   ├── smb_uninit_cred.rb
│   │   │   └── smb_version.rb
│   │   ├── smtp
│   │   │   ├── smtp_enum.rb
│   │   │   ├── smtp_ntlm_domain.rb
│   │   │   ├── smtp_relay.rb
│   │   │   └── smtp_version.rb
│   │   ├── snmp
│   │   │   ├── aix_version.rb
│   │   │   ├── arris_dg950.rb
│   │   │   ├── brocade_enumhash.rb
│   │   │   ├── cambium_snmp_loot.rb
│   │   │   ├── cisco_config_tftp.rb
│   │   │   ├── cisco_upload_file.rb
│   │   │   ├── netopia_enum.rb
│   │   │   ├── sbg6580_enum.rb
│   │   │   ├── snmp_enum_hp_laserjet.rb
│   │   │   ├── snmp_enum.rb
│   │   │   ├── snmp_enumshares.rb
│   │   │   ├── snmp_enumusers.rb
│   │   │   ├── snmp_login.rb
│   │   │   ├── snmp_set.rb
│   │   │   ├── ubee_ddw3611.rb
│   │   │   └── xerox_workcentre_enumusers.rb
│   │   ├── ssh
│   │   │   ├── apache_karaf_command_execution.rb
│   │   │   ├── cerberus_sftp_enumusers.rb
│   │   │   ├── detect_kippo.rb
│   │   │   ├── fortinet_backdoor.rb
│   │   │   ├── juniper_backdoor.rb
│   │   │   ├── karaf_login.rb
│   │   │   ├── ssh_enumusers.rb
│   │   │   ├── ssh_identify_pubkeys.rb
│   │   │   ├── ssh_login_pubkey.rb
│   │   │   ├── ssh_login.rb
│   │   │   └── ssh_version.rb
│   │   ├── ssl
│   │   │   ├── openssl_ccs.rb
│   │   │   └── openssl_heartbleed.rb
│   │   ├── steam
│   │   │   └── server_info.rb
│   │   ├── telephony
│   │   │   └── wardial.rb
│   │   ├── telnet
│   │   │   ├── brocade_enable_login.rb
│   │   │   ├── lantronix_telnet_password.rb
│   │   │   ├── lantronix_telnet_version.rb
│   │   │   ├── telnet_encrypt_overflow.rb
│   │   │   ├── telnet_login.rb
│   │   │   ├── telnet_ruggedcom.rb
│   │   │   └── telnet_version.rb
│   │   ├── tftp
│   │   │   ├── ipswitch_whatsupgold_tftp.rb
│   │   │   ├── netdecision_tftp.rb
│   │   │   └── tftpbrute.rb
│   │   ├── udp
│   │   │   └── udp_amplification.rb
│   │   ├── udp_scanner_template.rb
│   │   ├── upnp
│   │   │   ├── ssdp_amp.rb
│   │   │   └── ssdp_msearch.rb
│   │   ├── varnish
│   │   │   └── varnish_cli_login.rb
│   │   ├── vmware
│   │   │   ├── esx_fingerprint.rb
│   │   │   ├── vmauthd_login.rb
│   │   │   ├── vmauthd_version.rb
│   │   │   ├── vmware_enum_permissions.rb
│   │   │   ├── vmware_enum_sessions.rb
│   │   │   ├── vmware_enum_users.rb
│   │   │   ├── vmware_enum_vms.rb
│   │   │   ├── vmware_host_details.rb
│   │   │   ├── vmware_http_login.rb
│   │   │   ├── vmware_screenshot_stealer.rb
│   │   │   ├── vmware_server_dir_trav.rb
│   │   │   └── vmware_update_manager_traversal.rb
│   │   ├── vnc
│   │   │   ├── vnc_login.rb
│   │   │   └── vnc_none_auth.rb
│   │   ├── voice
│   │   │   └── recorder.rb
│   │   ├── vxworks
│   │   │   ├── wdbrpc_bootline.rb
│   │   │   └── wdbrpc_version.rb
│   │   ├── winrm
│   │   │   ├── winrm_auth_methods.rb
│   │   │   ├── winrm_cmd.rb
│   │   │   ├── winrm_login.rb
│   │   │   └── winrm_wql.rb
│   │   └── x11
│   │       └── open_x11.rb
│   ├── server
│   │   ├── android_browsable_msf_launch.rb
│   │   ├── android_mercury_parseuri.rb
│   │   ├── browser_autopwn2.rb
│   │   ├── browser_autopwn.rb
│   │   ├── capture
│   │   │   ├── drda.rb
│   │   │   ├── ftp.rb
│   │   │   ├── http_basic.rb
│   │   │   ├── http_javascript_keylogger.rb
│   │   │   ├── http_ntlm.rb
│   │   │   ├── http.rb
│   │   │   ├── imap.rb
│   │   │   ├── mssql.rb
│   │   │   ├── mysql.rb
│   │   │   ├── pop3.rb
│   │   │   ├── postgresql.rb
│   │   │   ├── printjob_capture.rb
│   │   │   ├── sip.rb
│   │   │   ├── smb.rb
│   │   │   ├── smtp.rb
│   │   │   ├── telnet.rb
│   │   │   └── vnc.rb
│   │   ├── dhclient_bash_env.rb
│   │   ├── dhcp.rb
│   │   ├── dns
│   │   │   └── spoofhelper.rb
│   │   ├── fakedns.rb
│   │   ├── ftp.rb
│   │   ├── http_ntlmrelay.rb
│   │   ├── icmp_exfil.rb
│   │   ├── jsse_skiptls_mitm_proxy.rb
│   │   ├── local_hwbridge.rb
│   │   ├── ms15_134_mcl_leak.rb
│   │   ├── netbios_spoof_nat.rb
│   │   ├── openssl_altchainsforgery_mitm_proxy.rb
│   │   ├── openssl_heartbeat_client_memory.rb
│   │   ├── pxeexploit.rb
│   │   ├── regsvr32_command_delivery_server.rb
│   │   ├── socks4a.rb
│   │   ├── socks_unc.rb
│   │   ├── tftp.rb
│   │   ├── tnftp_savefile.rb
│   │   ├── webkit_xslt_dropper.rb
│   │   ├── wget_symlink_file_write.rb
│   │   └── wpad.rb
│   ├── sniffer
│   │   └── psnuffle.rb
│   ├── spoof
│   │   ├── arp
│   │   │   └── arp_poisoning.rb
│   │   ├── cisco
│   │   │   ├── cdp.rb
│   │   │   └── dtp.rb
│   │   ├── dns
│   │   │   ├── bailiwicked_domain.rb
│   │   │   ├── bailiwicked_host.rb
│   │   │   └── compare_results.rb
│   │   ├── llmnr
│   │   │   └── llmnr_response.rb
│   │   ├── mdns
│   │   │   └── mdns_response.rb
│   │   ├── nbns
│   │   │   └── nbns_response.rb
│   │   └── replay
│   │       └── pcap_replay.rb
│   ├── sqli
│   │   └── oracle
│   │       ├── dbms_cdc_ipublish.rb
│   │       ├── dbms_cdc_publish2.rb
│   │       ├── dbms_cdc_publish3.rb
│   │       ├── dbms_cdc_publish.rb
│   │       ├── dbms_cdc_subscribe_activate_subscription.rb
│   │       ├── dbms_export_extension.rb
│   │       ├── dbms_metadata_get_granted_xml.rb
│   │       ├── dbms_metadata_get_xml.rb
│   │       ├── dbms_metadata_open.rb
│   │       ├── droptable_trigger.rb
│   │       ├── jvm_os_code_10g.rb
│   │       ├── jvm_os_code_11g.rb
│   │       ├── lt_compressworkspace.rb
│   │       ├── lt_findricset_cursor.rb
│   │       ├── lt_mergeworkspace.rb
│   │       ├── lt_removeworkspace.rb
│   │       └── lt_rollbackworkspace.rb
│   ├── voip
│   │   ├── asterisk_login.rb
│   │   ├── cisco_cucdm_call_forward.rb
│   │   ├── cisco_cucdm_speed_dials.rb
│   │   ├── sip_deregister.rb
│   │   ├── sip_invite_spoof.rb
│   │   └── telisca_ips_lock_control.rb
│   └── vsploit
│       ├── exploit
│       ├── malware
│       │   └── dns
│       │       ├── dns_mariposa.rb
│       │       ├── dns_query.rb
│       │       └── dns_zeus.rb
│       └── pii
│           ├── email_pii.rb
│           └── web_pii.rb
├── encoders
│   ├── cmd
│   │   ├── echo.rb
│   │   ├── generic_sh.rb
│   │   ├── ifs.rb
│   │   ├── perl.rb
│   │   ├── powershell_base64.rb
│   │   └── printf_php_mq.rb
│   ├── generic
│   │   ├── eicar.rb
│   │   └── none.rb
│   ├── mipsbe
│   │   ├── byte_xori.rb
│   │   └── longxor.rb
│   ├── mipsle
│   │   ├── byte_xori.rb
│   │   └── longxor.rb
│   ├── php
│   │   └── base64.rb
│   ├── ppc
│   │   ├── longxor.rb
│   │   └── longxor_tag.rb
│   ├── sparc
│   │   └── longxor_tag.rb
│   ├── x64
│   │   ├── xor.rb
│   │   └── zutto_dekiru.rb
│   └── x86
│       ├── add_sub.rb
│       ├── alpha_mixed.rb
│       ├── alpha_upper.rb
│       ├── avoid_underscore_tolower.rb
│       ├── avoid_utf8_tolower.rb
│       ├── bloxor.rb
│       ├── bmp_polyglot.rb
│       ├── call4_dword_xor.rb
│       ├── context_cpuid.rb
│       ├── context_stat.rb
│       ├── context_time.rb
│       ├── countdown.rb
│       ├── fnstenv_mov.rb
│       ├── jmp_call_additive.rb
│       ├── nonalpha.rb
│       ├── nonupper.rb
│       ├── opt_sub.rb
│       ├── service.rb
│       ├── shikata_ga_nai.rb
│       ├── single_static_bit.rb
│       ├── unicode_mixed.rb
│       └── unicode_upper.rb
├── exploits
│   ├── aix
│   │   ├── local
│   │   │   └── ibstat_path.rb
│   │   ├── rpc_cmsd_opcode21.rb
│   │   └── rpc_ttdbserverd_realpath.rb
│   ├── android
│   │   ├── adb
│   │   │   └── adb_server_exec.rb
│   │   ├── browser
│   │   │   ├── samsung_knox_smdm_url.rb
│   │   │   ├── stagefright_mp4_tx3g_64bit.rb
│   │   │   └── webview_addjavascriptinterface.rb
│   │   ├── fileformat
│   │   │   └── adobe_reader_pdf_js_interface.rb
│   │   └── local
│   │       ├── futex_requeue.rb
│   │       └── put_user_vroot.rb
│   ├── apple_ios
│   │   ├── browser
│   │   │   └── safari_libtiff.rb
│   │   ├── email
│   │   │   └── mobilemail_libtiff.rb
│   │   └── ssh
│   │       └── cydia_default_ssh.rb
│   ├── bsdi
│   │   └── softcart
│   │       └── mercantec_softcart.rb
│   ├── dialup
│   │   └── multi
│   │       └── login
│   │           └── manyargs.rb
│   ├── firefox
│   │   └── local
│   │       └── exec_shellcode.rb
│   ├── freebsd
│   │   ├── ftp
│   │   │   └── proftp_telnet_iac.rb
│   │   ├── http
│   │   │   └── watchguard_cmd_exec.rb
│   │   ├── local
│   │   │   ├── mmap.rb
│   │   │   └── watchguard_fix_corrupt_mail.rb
│   │   ├── misc
│   │   │   └── citrix_netscaler_soap_bof.rb
│   │   ├── samba
│   │   │   └── trans2open.rb
│   │   ├── tacacs
│   │   │   └── xtacacsd_report.rb
│   │   └── telnet
│   │       └── telnet_encrypt_keyid.rb
│   ├── hpux
│   │   └── lpd
│   │       └── cleanup_exec.rb
│   ├── irix
│   │   └── lpd
│   │       └── tagprinter_exec.rb
│   ├── linux
│   │   ├── antivirus
│   │   │   └── escan_password_exec.rb
│   │   ├── browser
│   │   │   └── adobe_flashplayer_aslaunch.rb
│   │   ├── ftp
│   │   │   ├── proftp_sreplace.rb
│   │   │   └── proftp_telnet_iac.rb
│   │   ├── games
│   │   │   └── ut2004_secure.rb
│   │   ├── http
│   │   │   ├── accellion_fta_getstatus_oauth.rb
│   │   │   ├── advantech_switch_bash_env_exec.rb
│   │   │   ├── airties_login_cgi_bof.rb
│   │   │   ├── alcatel_omnipcx_mastercgi_exec.rb
│   │   │   ├── alienvault_exec.rb
│   │   │   ├── alienvault_sqli_exec.rb
│   │   │   ├── apache_continuum_cmd_exec.rb
│   │   │   ├── astium_sqli_upload.rb
│   │   │   ├── atutor_filemanager_traversal.rb
│   │   │   ├── belkin_login_bof.rb
│   │   │   ├── centreon_sqli_exec.rb
│   │   │   ├── centreon_useralias_exec.rb
│   │   │   ├── cfme_manageiq_evm_upload_exec.rb
│   │   │   ├── cisco_firepower_useradd.rb
│   │   │   ├── ddwrt_cgibin_exec.rb
│   │   │   ├── dlink_authentication_cgi_bof.rb
│   │   │   ├── dlink_command_php_exec_noauth.rb
│   │   │   ├── dlink_dcs_930l_authenticated_remote_command_execution.rb
│   │   │   ├── dlink_dcs931l_upload.rb
│   │   │   ├── dlink_diagnostic_exec_noauth.rb
│   │   │   ├── dlink_dir300_exec_telnet.rb
│   │   │   ├── dlink_dir605l_captcha_bof.rb
│   │   │   ├── dlink_dir615_up_exec.rb
│   │   │   ├── dlink_dspw110_cookie_noauth_exec.rb
│   │   │   ├── dlink_dspw215_info_cgi_bof.rb
│   │   │   ├── dlink_hedwig_cgi_bof.rb
│   │   │   ├── dlink_hnap_bof.rb
│   │   │   ├── dlink_hnap_header_exec_noauth.rb
│   │   │   ├── dlink_hnap_login_bof.rb
│   │   │   ├── dlink_upnp_exec_noauth.rb
│   │   │   ├── dnalims_admin_exec.rb
│   │   │   ├── dolibarr_cmd_exec.rb
│   │   │   ├── dreambox_openpli_shell.rb
│   │   │   ├── efw_chpasswd_exec.rb
│   │   │   ├── empire_skywalker.rb
│   │   │   ├── esva_exec.rb
│   │   │   ├── f5_icall_cmd.rb
│   │   │   ├── f5_icontrol_exec.rb
│   │   │   ├── foreman_openstack_satellite_code_exec.rb
│   │   │   ├── fritzbox_echo_exec.rb
│   │   │   ├── github_enterprise_secret.rb
│   │   │   ├── gitlist_exec.rb
│   │   │   ├── gpsd_format_string.rb
│   │   │   ├── groundwork_monarch_cmd_exec.rb
│   │   │   ├── hp_system_management.rb
│   │   │   ├── ipfire_bashbug_exec.rb
│   │   │   ├── ipfire_proxy_exec.rb
│   │   │   ├── kaltura_unserialize_rce.rb
│   │   │   ├── kloxo_sqli.rb
│   │   │   ├── lifesize_uvc_ping_rce.rb
│   │   │   ├── linksys_apply_cgi.rb
│   │   │   ├── linksys_e1500_apply_exec.rb
│   │   │   ├── linksys_themoon_exec.rb
│   │   │   ├── linksys_wrt110_cmd_exec.rb
│   │   │   ├── linksys_wrt160nv2_apply_exec.rb
│   │   │   ├── linksys_wrt54gl_apply_exec.rb
│   │   │   ├── logsign_exec.rb
│   │   │   ├── multi_ncc_ping_exec.rb
│   │   │   ├── mutiny_frontend_upload.rb
│   │   │   ├── mvpower_dvr_shell_exec.rb
│   │   │   ├── nagios_xi_chained_rce.rb
│   │   │   ├── netgear_dgn1000b_setup_exec.rb
│   │   │   ├── netgear_dgn2200b_pppoe_exec.rb
│   │   │   ├── netgear_r7000_cgibin_exec.rb
│   │   │   ├── netgear_readynas_exec.rb
│   │   │   ├── netgear_wnr2000_rce.rb
│   │   │   ├── nginx_chunked_size.rb
│   │   │   ├── nuuo_nvrmini_auth_rce.rb
│   │   │   ├── nuuo_nvrmini_unauth_rce.rb
│   │   │   ├── op5_config_exec.rb
│   │   │   ├── openfiler_networkcard_exec.rb
│   │   │   ├── pandora_fms_exec.rb
│   │   │   ├── pandora_fms_sqli.rb
│   │   │   ├── peercast_url.rb
│   │   │   ├── pineapp_ldapsyncnow_exec.rb
│   │   │   ├── pineapple_bypass_cmdinject.rb
│   │   │   ├── pineapple_preconfig_cmdinject.rb
│   │   │   ├── pineapp_livelog_exec.rb
│   │   │   ├── pineapp_test_li_conn_exec.rb
│   │   │   ├── piranha_passwd_exec.rb
│   │   │   ├── raidsonic_nas_ib5220_exec_noauth.rb
│   │   │   ├── railo_cfml_rfi.rb
│   │   │   ├── realtek_miniigd_upnp_exec_noauth.rb
│   │   │   ├── riverbed_netprofiler_netexpress_exec.rb
│   │   │   ├── seagate_nas_php_exec_noauth.rb
│   │   │   ├── smt_ipmi_close_window_bof.rb
│   │   │   ├── sophos_wpa_iface_exec.rb
│   │   │   ├── sophos_wpa_sblistpack_exec.rb
│   │   │   ├── symantec_web_gateway_exec.rb
│   │   │   ├── symantec_web_gateway_file_upload.rb
│   │   │   ├── symantec_web_gateway_lfi.rb
│   │   │   ├── symantec_web_gateway_pbcontrol.rb
│   │   │   ├── symantec_web_gateway_restore.rb
│   │   │   ├── synology_dsm_sliceupload_exec_noauth.rb
│   │   │   ├── tiki_calendar_exec.rb
│   │   │   ├── tp_link_sc2020n_authenticated_telnet_injection.rb
│   │   │   ├── tr064_ntpserver_cmdinject.rb
│   │   │   ├── trend_micro_imsva_exec.rb
│   │   │   ├── trendmicro_sps_exec.rb
│   │   │   ├── trueonline_billion_5200w_rce.rb
│   │   │   ├── trueonline_p660hn_v1_rce.rb
│   │   │   ├── trueonline_p660hn_v2_rce.rb
│   │   │   ├── vap2500_tools_command_exec.rb
│   │   │   ├── vcms_upload.rb
│   │   │   ├── wanem_exec.rb
│   │   │   ├── webcalendar_settings_exec.rb
│   │   │   ├── webid_converter.rb
│   │   │   ├── zabbix_sqli.rb
│   │   │   ├── zen_load_balancer_exec.rb
│   │   │   └── zenoss_showdaemonxmlconfig_exec.rb
│   │   ├── ids
│   │   │   ├── alienvault_centerd_soap_exec.rb
│   │   │   └── snortbopre.rb
│   │   ├── imap
│   │   │   └── imap_uw_lsub.rb
│   │   ├── local
│   │   │   ├── bpf_priv_esc.rb
│   │   │   ├── cron_persistence.rb
│   │   │   ├── desktop_privilege_escalation.rb
│   │   │   ├── docker_daemon_privilege_escalation.rb
│   │   │   ├── hp_smhstart.rb
│   │   │   ├── kloxo_lxsuexec.rb
│   │   │   ├── netfilter_priv_esc_ipv4.rb
│   │   │   ├── ntfs3g_priv_esc.rb
│   │   │   ├── overlayfs_priv_esc.rb
│   │   │   ├── pkexec.rb
│   │   │   ├── recvmmsg_priv_esc.rb
│   │   │   ├── service_persistence.rb
│   │   │   ├── sock_sendpage.rb
│   │   │   ├── sophos_wpa_clear_keys.rb
│   │   │   ├── udev_netlink.rb
│   │   │   ├── vmware_mount.rb
│   │   │   └── zpanel_zsudo.rb
│   │   ├── misc
│   │   │   ├── accellion_fta_mpipe2.rb
│   │   │   ├── drb_remote_codeexec.rb
│   │   │   ├── gld_postfix.rb
│   │   │   ├── hikvision_rtsp_bof.rb
│   │   │   ├── hp_data_protector_cmd_exec.rb
│   │   │   ├── hplip_hpssd_exec.rb
│   │   │   ├── hp_nnmi_pmd_bof.rb
│   │   │   ├── hp_vsa_login_bof.rb
│   │   │   ├── ib_inet_connect.rb
│   │   │   ├── ib_jrd8_create_database.rb
│   │   │   ├── ib_open_marker_file.rb
│   │   │   ├── ib_pwd_db_aliased.rb
│   │   │   ├── jenkins_java_deserialize.rb
│   │   │   ├── lprng_format_string.rb
│   │   │   ├── mongod_native_helper.rb
│   │   │   ├── nagios_nrpe_arguments.rb
│   │   │   ├── netcore_udp_53413_backdoor.rb
│   │   │   ├── netsupport_manager_agent.rb
│   │   │   ├── novell_edirectory_ncp_bof.rb
│   │   │   ├── opennms_java_serialize.rb
│   │   │   ├── sercomm_exec.rb
│   │   │   └── zabbix_server_exec.rb
│   │   ├── mysql
│   │   │   ├── mysql_yassl_getname.rb
│   │   │   └── mysql_yassl_hello.rb
│   │   ├── pop3
│   │   │   └── cyrus_pop3d_popsubfolders.rb
│   │   ├── postgres
│   │   │   └── postgres_payload.rb
│   │   ├── pptp
│   │   │   └── poptop_negative_read.rb
│   │   ├── proxy
│   │   │   └── squid_ntlm_authenticate.rb
│   │   ├── samba
│   │   │   ├── chain_reply.rb
│   │   │   ├── lsa_transnames_heap.rb
│   │   │   ├── setinfopolicy_heap.rb
│   │   │   └── trans2open.rb
│   │   ├── smtp
│   │   │   ├── exim4_dovecot_exec.rb
│   │   │   ├── exim_gethostbyname_bof.rb
│   │   │   └── haraka.py
│   │   ├── ssh
│   │   │   ├── ceragon_fibeair_known_privkey.rb
│   │   │   ├── exagrid_known_privkey.rb
│   │   │   ├── f5_bigip_known_privkey.rb
│   │   │   ├── loadbalancerorg_enterprise_known_privkey.rb
│   │   │   ├── quantum_dxi_known_privkey.rb
│   │   │   ├── quantum_vmpro_backdoor.rb
│   │   │   ├── solarwinds_lem_exec.rb
│   │   │   ├── symantec_smg_ssh.rb
│   │   │   └── ubiquiti_airos_file_upload.rb
│   │   ├── telnet
│   │   │   └── telnet_encrypt_keyid.rb
│   │   └── upnp
│   │       ├── dlink_upnp_msearch_exec.rb
│   │       └── miniupnpd_soap_bof.rb
│   ├── mainframe
│   │   └── ftp
│   │       └── ftp_jcl_creds.rb
│   ├── multi
│   │   ├── browser
│   │   │   ├── adobe_flash_hacking_team_uaf.rb
│   │   │   ├── adobe_flash_nellymoser_bof.rb
│   │   │   ├── adobe_flash_net_connection_confusion.rb
│   │   │   ├── adobe_flash_opaque_background_uaf.rb
│   │   │   ├── adobe_flash_pixel_bender_bof.rb
│   │   │   ├── adobe_flash_shader_drawing_fill.rb
│   │   │   ├── adobe_flash_shader_job_overflow.rb
│   │   │   ├── adobe_flash_uncompress_zlib_uaf.rb
│   │   │   ├── firefox_escape_retval.rb
│   │   │   ├── firefox_pdfjs_privilege_escalation.rb
│   │   │   ├── firefox_proto_crmfrequest.rb
│   │   │   ├── firefox_proxy_prototype.rb
│   │   │   ├── firefox_queryinterface.rb
│   │   │   ├── firefox_svg_plugin.rb
│   │   │   ├── firefox_tostring_console_injection.rb
│   │   │   ├── firefox_webidl_injection.rb
│   │   │   ├── firefox_xpi_bootstrapped_addon.rb
│   │   │   ├── itms_overflow.rb
│   │   │   ├── java_atomicreferencearray.rb
│   │   │   ├── java_calendar_deserialize.rb
│   │   │   ├── java_getsoundbank_bof.rb
│   │   │   ├── java_jre17_driver_manager.rb
│   │   │   ├── java_jre17_exec.rb
│   │   │   ├── java_jre17_glassfish_averagerangestatisticimpl.rb
│   │   │   ├── java_jre17_jaxws.rb
│   │   │   ├── java_jre17_jmxbean_2.rb
│   │   │   ├── java_jre17_jmxbean.rb
│   │   │   ├── java_jre17_method_handle.rb
│   │   │   ├── java_jre17_provider_skeleton.rb
│   │   │   ├── java_jre17_reflection_types.rb
│   │   │   ├── java_rhino.rb
│   │   │   ├── java_rmi_connection_impl.rb
│   │   │   ├── java_setdifficm_bof.rb
│   │   │   ├── java_signed_applet.rb
│   │   │   ├── java_storeimagearray.rb
│   │   │   ├── java_trusted_chain.rb
│   │   │   ├── java_verifier_field_access.rb
│   │   │   ├── mozilla_compareto.rb
│   │   │   ├── mozilla_navigatorjava.rb
│   │   │   ├── opera_configoverwrite.rb
│   │   │   ├── opera_historysearch.rb
│   │   │   └── qtjava_pointer.rb
│   │   ├── elasticsearch
│   │   │   ├── script_mvel_rce.rb
│   │   │   └── search_groovy_script.rb
│   │   ├── fileformat
│   │   │   ├── adobe_u3d_meshcont.rb
│   │   │   ├── js_unpacker_eval_injection.rb
│   │   │   ├── maple_maplet.rb
│   │   │   ├── nodejs_js_yaml_load_code_exec.rb
│   │   │   ├── office_word_macro.rb
│   │   │   ├── peazip_command_injection.rb
│   │   │   └── swagger_param_inject.rb
│   │   ├── ftp
│   │   │   ├── pureftpd_bash_env_exec.rb
│   │   │   └── wuftpd_site_exec_format.rb
│   │   ├── gdb
│   │   │   └── gdb_server_exec.rb
│   │   ├── handler.rb
│   │   ├── http
│   │   │   ├── activecollab_chat.rb
│   │   │   ├── ajaxplorer_checkinstall_exec.rb
│   │   │   ├── apache_jetspeed_file_upload.rb
│   │   │   ├── apache_mod_cgi_bash_env_exec.rb
│   │   │   ├── apache_roller_ognl_injection.rb
│   │   │   ├── apprain_upload_exec.rb
│   │   │   ├── atutor_sqli.rb
│   │   │   ├── auxilium_upload_exec.rb
│   │   │   ├── axis2_deployer.rb
│   │   │   ├── bassmaster_js_injection.rb
│   │   │   ├── bolt_file_upload.rb
│   │   │   ├── caidao_php_backdoor_exec.rb
│   │   │   ├── cisco_dcnm_upload.rb
│   │   │   ├── coldfusion_rds.rb
│   │   │   ├── cups_bash_env_exec.rb
│   │   │   ├── cuteflow_upload_exec.rb
│   │   │   ├── dexter_casinoloader_exec.rb
│   │   │   ├── drupal_drupageddon.rb
│   │   │   ├── eaton_nsm_code_exec.rb
│   │   │   ├── eventlog_file_upload.rb
│   │   │   ├── extplorer_upload_exec.rb
│   │   │   ├── familycms_less_exec.rb
│   │   │   ├── freenas_exec_raw.rb
│   │   │   ├── gestioip_exec.rb
│   │   │   ├── git_client_command_exec.rb
│   │   │   ├── gitlab_shell_exec.rb
│   │   │   ├── gitorious_graph.rb
│   │   │   ├── glassfish_deployer.rb
│   │   │   ├── glossword_upload_exec.rb
│   │   │   ├── glpi_install_rce.rb
│   │   │   ├── horde_href_backdoor.rb
│   │   │   ├── hp_sitescope_issuesiebelcmd.rb
│   │   │   ├── hp_sitescope_uploadfileshandler.rb
│   │   │   ├── hp_sys_mgmt_exec.rb
│   │   │   ├── hyperic_hq_script_console.rb
│   │   │   ├── ispconfig_php_exec.rb
│   │   │   ├── jboss_bshdeployer.rb
│   │   │   ├── jboss_deploymentfilerepository.rb
│   │   │   ├── jboss_invoke_deploy.rb
│   │   │   ├── jboss_maindeployer.rb
│   │   │   ├── jboss_seam_upload_exec.rb
│   │   │   ├── jenkins_script_console.rb
│   │   │   ├── jira_hipchat_template.rb
│   │   │   ├── joomla_http_header_rce.rb
│   │   │   ├── kordil_edms_upload_exec.rb
│   │   │   ├── lcms_php_exec.rb
│   │   │   ├── log1cms_ajax_create_folder.rb
│   │   │   ├── magento_unserialize.rb
│   │   │   ├── manageengine_auth_upload.rb
│   │   │   ├── manage_engine_dc_pmp_sqli.rb
│   │   │   ├── manageengine_sd_uploader.rb
│   │   │   ├── manageengine_search_sqli.rb
│   │   │   ├── mantisbt_php_exec.rb
│   │   │   ├── mediawiki_thumb.rb
│   │   │   ├── metasploit_static_secret_key_base.rb
│   │   │   ├── metasploit_webui_console_command_execution.rb
│   │   │   ├── mma_backdoor_upload.rb
│   │   │   ├── mobilecartly_upload_exec.rb
│   │   │   ├── moodle_cmd_exec.rb
│   │   │   ├── movabletype_upgrade_exec.rb
│   │   │   ├── mutiny_subnetmask_exec.rb
│   │   │   ├── nas4free_php_exec.rb
│   │   │   ├── netwin_surgeftp_exec.rb
│   │   │   ├── nibbleblog_file_upload.rb
│   │   │   ├── novell_servicedesk_rce.rb
│   │   │   ├── op5_license.rb
│   │   │   ├── op5_welcome.rb
│   │   │   ├── openfire_auth_bypass.rb
│   │   │   ├── openmediavault_cmd_exec.rb
│   │   │   ├── openx_backdoor_php.rb
│   │   │   ├── opmanager_socialit_file_upload.rb
│   │   │   ├── oracle_ats_file_upload.rb
│   │   │   ├── oracle_reports_rce.rb
│   │   │   ├── pandora_upload_exec.rb
│   │   │   ├── phoenix_exec.rb
│   │   │   ├── php_cgi_arg_injection.rb
│   │   │   ├── phpfilemanager_rce.rb
│   │   │   ├── phpldapadmin_query_engine.rb
│   │   │   ├── phpmailer_arg_injection.rb
│   │   │   ├── phpmoadmin_exec.rb
│   │   │   ├── phpmyadmin_3522_backdoor.rb
│   │   │   ├── phpmyadmin_preg_replace.rb
│   │   │   ├── phpscheduleit_start_date.rb
│   │   │   ├── phptax_exec.rb
│   │   │   ├── php_utility_belt_rce.rb
│   │   │   ├── php_volunteer_upload_exec.rb
│   │   │   ├── phpwiki_ploticus_exec.rb
│   │   │   ├── plone_popen2.rb
│   │   │   ├── pmwiki_pagelist.rb
│   │   │   ├── polarcms_upload_exec.rb
│   │   │   ├── processmaker_exec.rb
│   │   │   ├── qdpm_upload_exec.rb
│   │   │   ├── rails_actionpack_inline_exec.rb
│   │   │   ├── rails_dynamic_render_code_exec.rb
│   │   │   ├── rails_json_yaml_code_exec.rb
│   │   │   ├── rails_secret_deserialization.rb
│   │   │   ├── rails_web_console_v2_code_exec.rb
│   │   │   ├── rails_xml_yaml_code_exec.rb
│   │   │   ├── rocket_servergraph_file_requestor_rce.rb
│   │   │   ├── sflog_upload_exec.rb
│   │   │   ├── simple_backdoors_exec.rb
│   │   │   ├── sit_file_upload.rb
│   │   │   ├── snortreport_exec.rb
│   │   │   ├── solarwinds_store_manager_auth_filter.rb
│   │   │   ├── sonicwall_gms_upload.rb
│   │   │   ├── sonicwall_scrutinizer_methoddetail_sqli.rb
│   │   │   ├── splunk_mappy_exec.rb
│   │   │   ├── splunk_upload_app_exec.rb
│   │   │   ├── spree_search_exec.rb
│   │   │   ├── spree_searchlogic_exec.rb
│   │   │   ├── struts2_content_type_ognl.rb
│   │   │   ├── struts_code_exec_classloader.rb
│   │   │   ├── struts_code_exec_exception_delegator.rb
│   │   │   ├── struts_code_exec_parameters.rb
│   │   │   ├── struts_code_exec.rb
│   │   │   ├── struts_default_action_mapper.rb
│   │   │   ├── struts_dev_mode.rb
│   │   │   ├── struts_dmi_exec.rb
│   │   │   ├── struts_dmi_rest_exec.rb
│   │   │   ├── struts_include_params.rb
│   │   │   ├── stunshell_eval.rb
│   │   │   ├── stunshell_exec.rb
│   │   │   ├── sun_jsws_dav_options.rb
│   │   │   ├── sysaid_auth_file_upload.rb
│   │   │   ├── sysaid_rdslogs_file_upload.rb
│   │   │   ├── testlink_upload_exec.rb
│   │   │   ├── tomcat_mgr_deploy.rb
│   │   │   ├── tomcat_mgr_upload.rb
│   │   │   ├── traq_plugin_exec.rb
│   │   │   ├── uptime_file_upload_1.rb
│   │   │   ├── uptime_file_upload_2.rb
│   │   │   ├── v0pcr3w_exec.rb
│   │   │   ├── vbseo_proc_deutf.rb
│   │   │   ├── vbulletin_unserialize.rb
│   │   │   ├── visual_mining_netcharts_upload.rb
│   │   │   ├── vtiger_install_rce.rb
│   │   │   ├── vtiger_php_exec.rb
│   │   │   ├── vtiger_soap_upload.rb
│   │   │   ├── webnms_file_upload.rb
│   │   │   ├── webpagetest_upload_exec.rb
│   │   │   ├── werkzeug_debug_rce.rb
│   │   │   ├── wikka_spam_exec.rb
│   │   │   ├── wp_ninja_forms_unauthenticated_file_upload.rb
│   │   │   ├── x7chat2_php_exec.rb
│   │   │   ├── zabbix_script_exec.rb
│   │   │   ├── zemra_panel_rce.rb
│   │   │   ├── zenworks_configuration_management_upload.rb
│   │   │   ├── zenworks_control_center_upload.rb
│   │   │   └── zpanel_information_disclosure_rce.rb
│   │   ├── ids
│   │   │   └── snort_dce_rpc.rb
│   │   ├── local
│   │   │   └── allwinner_backdoor.rb
│   │   ├── misc
│   │   │   ├── arkeia_agent_exec.rb
│   │   │   ├── batik_svg_java.rb
│   │   │   ├── hp_data_protector_exec_integutil.rb
│   │   │   ├── hp_vsa_exec.rb
│   │   │   ├── indesign_server_soap.rb
│   │   │   ├── java_jdwp_debugger.rb
│   │   │   ├── java_jmx_server.rb
│   │   │   ├── java_rmi_server.rb
│   │   │   ├── legend_bot_exec.rb
│   │   │   ├── openoffice_document_macro.rb
│   │   │   ├── openview_omniback_exec.rb
│   │   │   ├── pbot_exec.rb
│   │   │   ├── persistent_hpca_radexec_exec.rb
│   │   │   ├── ra1nx_pubcall_exec.rb
│   │   │   ├── veritas_netbackup_cmdexec.rb
│   │   │   ├── w3tw0rk_exec.rb
│   │   │   ├── wireshark_lwres_getaddrbyname_loop.rb
│   │   │   ├── wireshark_lwres_getaddrbyname.rb
│   │   │   ├── xdh_x_exec.rb
│   │   │   └── zend_java_bridge.rb
│   │   ├── ntp
│   │   │   └── ntp_overflow.rb
│   │   ├── php
│   │   │   └── php_unserialize_zval_cookie.rb
│   │   ├── postgres
│   │   │   └── postgres_createlang.rb
│   │   ├── realserver
│   │   │   └── describe.rb
│   │   ├── samba
│   │   │   ├── nttrans.rb
│   │   │   └── usermap_script.rb
│   │   ├── sap
│   │   │   ├── sap_mgmt_con_osexec_payload.rb
│   │   │   ├── sap_soap_rfc_sxpg_call_system_exec.rb
│   │   │   └── sap_soap_rfc_sxpg_command_exec.rb
│   │   ├── script
│   │   │   └── web_delivery.rb
│   │   ├── ssh
│   │   │   └── sshexec.rb
│   │   ├── svn
│   │   │   └── svnserve_date.rb
│   │   ├── upnp
│   │   │   └── libupnp_ssdp_overflow.rb
│   │   ├── vnc
│   │   │   └── vnc_keyboard_exec.rb
│   │   ├── vpn
│   │   │   └── tincd_bof.rb
│   │   └── wyse
│   │       └── hagent_untrusted_hsdata.rb
│   ├── netware
│   │   ├── smb
│   │   │   └── lsass_cifs.rb
│   │   └── sunrpc
│   │       └── pkernel_callit.rb
│   ├── osx
│   │   ├── afp
│   │   │   └── loginext.rb
│   │   ├── arkeia
│   │   │   └── type77.rb
│   │   ├── browser
│   │   │   ├── mozilla_mchannel.rb
│   │   │   ├── safari_file_policy.rb
│   │   │   ├── safari_metadata_archive.rb
│   │   │   ├── safari_user_assisted_applescript_exec.rb
│   │   │   ├── safari_user_assisted_download_launch.rb
│   │   │   └── software_update.rb
│   │   ├── email
│   │   │   └── mailapp_image_exec.rb
│   │   ├── ftp
│   │   │   └── webstar_ftp_user.rb
│   │   ├── http
│   │   │   └── evocam_webserver.rb
│   │   ├── local
│   │   │   ├── dyld_print_to_file_root.rb
│   │   │   ├── iokit_keyboard_root.rb
│   │   │   ├── nfs_mount_root.rb
│   │   │   ├── persistence.rb
│   │   │   ├── rootpipe_entitlements.rb
│   │   │   ├── rootpipe.rb
│   │   │   ├── rsh_libmalloc.rb
│   │   │   ├── setuid_tunnelblick.rb
│   │   │   ├── setuid_viscosity.rb
│   │   │   ├── sudo_password_bypass.rb
│   │   │   ├── tpwn.rb
│   │   │   └── vmware_bash_function_root.rb
│   │   ├── mdns
│   │   │   └── upnp_location.rb
│   │   ├── misc
│   │   │   └── ufo_ai.rb
│   │   ├── rtsp
│   │   │   └── quicktime_rtsp_content_type.rb
│   │   └── samba
│   │       ├── lsa_transnames_heap.rb
│   │       └── trans2open.rb
│   ├── solaris
│   │   ├── dtspcd
│   │   │   └── heap_noir.rb
│   │   ├── lpd
│   │   │   └── sendmail_exec.rb
│   │   ├── samba
│   │   │   ├── lsa_transnames_heap.rb
│   │   │   └── trans2open.rb
│   │   ├── sunrpc
│   │   │   ├── sadmind_adm_build_path.rb
│   │   │   ├── sadmind_exec.rb
│   │   │   └── ypupdated_exec.rb
│   │   └── telnet
│   │       ├── fuser.rb
│   │       └── ttyprompt.rb
│   ├── unix
│   │   ├── dhcp
│   │   │   └── bash_environment.rb
│   │   ├── fileformat
│   │   │   └── imagemagick_delegate.rb
│   │   ├── ftp
│   │   │   ├── proftpd_133c_backdoor.rb
│   │   │   ├── proftpd_modcopy_exec.rb
│   │   │   └── vsftpd_234_backdoor.rb
│   │   ├── http
│   │   │   ├── contentkeeperweb_mimencode.rb
│   │   │   ├── ctek_skyrouter.rb
│   │   │   ├── dell_kace_k1000_upload.rb
│   │   │   ├── freepbx_callmenum.rb
│   │   │   ├── lifesize_room.rb
│   │   │   ├── twiki_debug_plugins.rb
│   │   │   └── vmturbo_vmtadmin_exec_noauth.rb
│   │   ├── irc
│   │   │   └── unreal_ircd_3281_backdoor.rb
│   │   ├── local
│   │   │   ├── at_persistence.rb
│   │   │   ├── chkrootkit.rb
│   │   │   ├── exim_perl_startup.rb
│   │   │   ├── netbsd_mail_local.rb
│   │   │   └── setuid_nmap.rb
│   │   ├── misc
│   │   │   ├── distcc_exec.rb
│   │   │   ├── psh_auth_bypass.rb
│   │   │   ├── qnx_qconn_exec.rb
│   │   │   ├── spamassassin_exec.rb
│   │   │   ├── xerox_mfp.rb
│   │   │   └── zabbix_agent_exec.rb
│   │   ├── smtp
│   │   │   ├── clamav_milter_blackhole.rb
│   │   │   └── exim4_string_format.rb
│   │   ├── ssh
│   │   │   ├── array_vxag_vapv_privkey_privesc.rb
│   │   │   └── tectia_passwd_changereq.rb
│   │   ├── webapp
│   │   │   ├── actualanalyzer_ant_cookie_exec.rb
│   │   │   ├── arkeia_upload_exec.rb
│   │   │   ├── awstats_configdir_exec.rb
│   │   │   ├── awstats_migrate_exec.rb
│   │   │   ├── awstatstotals_multisort.rb
│   │   │   ├── barracuda_img_exec.rb
│   │   │   ├── base_qry_common.rb
│   │   │   ├── basilic_diff_exec.rb
│   │   │   ├── cacti_graphimage_exec.rb
│   │   │   ├── cakephp_cache_corruption.rb
│   │   │   ├── carberp_backdoor_exec.rb
│   │   │   ├── citrix_access_gateway_exec.rb
│   │   │   ├── clipbucket_upload_exec.rb
│   │   │   ├── coppermine_piceditor.rb
│   │   │   ├── datalife_preview_exec.rb
│   │   │   ├── dogfood_spell_exec.rb
│   │   │   ├── drupal_coder_exec.rb
│   │   │   ├── drupal_restws_exec.rb
│   │   │   ├── egallery_upload_exec.rb
│   │   │   ├── flashchat_upload_exec.rb
│   │   │   ├── foswiki_maketext.rb
│   │   │   ├── freepbx_config_exec.rb
│   │   │   ├── generic_exec.rb
│   │   │   ├── get_simple_cms_upload_exec.rb
│   │   │   ├── google_proxystylesheet_exec.rb
│   │   │   ├── graphite_pickle_exec.rb
│   │   │   ├── guestbook_ssi_exec.rb
│   │   │   ├── hastymail_exec.rb
│   │   │   ├── havalite_upload_exec.rb
│   │   │   ├── horde_unserialize_exec.rb
│   │   │   ├── hybridauth_install_php_exec.rb
│   │   │   ├── instantcms_exec.rb
│   │   │   ├── invision_pboard_unserialize_exec.rb
│   │   │   ├── joomla_akeeba_unserialize.rb
│   │   │   ├── joomla_comjce_imgmanager.rb
│   │   │   ├── joomla_contenthistory_sqli_rce.rb
│   │   │   ├── joomla_media_upload_exec.rb
│   │   │   ├── joomla_tinybrowser.rb
│   │   │   ├── kimai_sqli.rb
│   │   │   ├── libretto_upload_exec.rb
│   │   │   ├── maarch_letterbox_file_upload.rb
│   │   │   ├── mambo_cache_lite.rb
│   │   │   ├── mitel_awc_exec.rb
│   │   │   ├── moinmoin_twikidraw.rb
│   │   │   ├── mybb_backdoor.rb
│   │   │   ├── nagios3_history_cgi.rb
│   │   │   ├── nagios3_statuswml_ping.rb
│   │   │   ├── nagios_graph_explorer.rb
│   │   │   ├── narcissus_backend_exec.rb
│   │   │   ├── openemr_sqli_privesc_upload.rb
│   │   │   ├── openemr_upload_exec.rb
│   │   │   ├── open_flash_chart_upload_exec.rb
│   │   │   ├── opensis_modname_exec.rb
│   │   │   ├── openview_connectednodes_exec.rb
│   │   │   ├── openx_banner_edit.rb
│   │   │   ├── oracle_vm_agent_utl.rb
│   │   │   ├── oscommerce_filemanager.rb
│   │   │   ├── pajax_remote_exec.rb
│   │   │   ├── phpbb_highlight.rb
│   │   │   ├── php_charts_exec.rb
│   │   │   ├── php_eval.rb
│   │   │   ├── php_include.rb
│   │   │   ├── phpmyadmin_config.rb
│   │   │   ├── php_vbulletin_template.rb
│   │   │   ├── php_xmlrpc_eval.rb
│   │   │   ├── piwik_superuser_plugin_upload.rb
│   │   │   ├── projectpier_upload_exec.rb
│   │   │   ├── projectsend_upload_exec.rb
│   │   │   ├── qtss_parse_xml_exec.rb
│   │   │   ├── redmine_scm_exec.rb
│   │   │   ├── seportal_sqli_exec.rb
│   │   │   ├── simple_e_document_upload_exec.rb
│   │   │   ├── sixapart_movabletype_storable_exec.rb
│   │   │   ├── skybluecanvas_exec.rb
│   │   │   ├── sphpblog_file_upload.rb
│   │   │   ├── spip_connect_exec.rb
│   │   │   ├── squash_yaml_exec.rb
│   │   │   ├── squirrelmail_pgp_plugin.rb
│   │   │   ├── sugarcrm_rest_unserialize_exec.rb
│   │   │   ├── sugarcrm_unserialize_exec.rb
│   │   │   ├── tikiwiki_graph_formula_exec.rb
│   │   │   ├── tikiwiki_jhot_exec.rb
│   │   │   ├── tikiwiki_unserialize_exec.rb
│   │   │   ├── tikiwiki_upload_exec.rb
│   │   │   ├── trixbox_langchoice.rb
│   │   │   ├── tuleap_unserialize_exec.rb
│   │   │   ├── twiki_history.rb
│   │   │   ├── twiki_maketext.rb
│   │   │   ├── twiki_search.rb
│   │   │   ├── vbulletin_vote_sqli_exec.rb
│   │   │   ├── vicidial_manager_send_cmd_exec.rb
│   │   │   ├── webmin_show_cgi_exec.rb
│   │   │   ├── webtester_exec.rb
│   │   │   ├── wp_admin_shell_upload.rb
│   │   │   ├── wp_advanced_custom_fields_exec.rb
│   │   │   ├── wp_ajax_load_more_file_upload.rb
│   │   │   ├── wp_asset_manager_upload_exec.rb
│   │   │   ├── wp_creativecontactform_file_upload.rb
│   │   │   ├── wp_downloadmanager_upload.rb
│   │   │   ├── wp_easycart_unrestricted_file_upload.rb
│   │   │   ├── wp_foxypress_upload.rb
│   │   │   ├── wp_frontend_editor_file_upload.rb
│   │   │   ├── wp_google_document_embedder_exec.rb
│   │   │   ├── wp_holding_pattern_file_upload.rb
│   │   │   ├── wp_inboundio_marketing_file_upload.rb
│   │   │   ├── wp_infusionsoft_upload.rb
│   │   │   ├── wp_lastpost_exec.rb
│   │   │   ├── wp_ninja_forms_unauthenticated_file_upload.rb
│   │   │   ├── wp_nmediawebsite_file_upload.rb
│   │   │   ├── wp_optimizepress_upload.rb
│   │   │   ├── wp_photo_gallery_unrestricted_file_upload.rb
│   │   │   ├── wp_pixabay_images_upload.rb
│   │   │   ├── wp_platform_exec.rb
│   │   │   ├── wp_property_upload_exec.rb
│   │   │   ├── wp_reflexgallery_file_upload.rb
│   │   │   ├── wp_revslider_upload_execute.rb
│   │   │   ├── wp_slideshowgallery_upload.rb
│   │   │   ├── wp_symposium_shell_upload.rb
│   │   │   ├── wp_total_cache_exec.rb
│   │   │   ├── wp_worktheflow_upload.rb
│   │   │   ├── wp_wpshop_ecommerce_file_upload.rb
│   │   │   ├── wp_wptouch_file_upload.rb
│   │   │   ├── wp_wysija_newsletters_upload.rb
│   │   │   ├── xoda_file_upload.rb
│   │   │   ├── zeroshell_exec.rb
│   │   │   ├── zimbra_lfi.rb
│   │   │   ├── zoneminder_packagecontrol_exec.rb
│   │   │   └── zpanel_username_exec.rb
│   │   └── x11
│   │       └── x11_keyboard_exec.rb
│   └── windows
│       ├── antivirus
│       │   ├── ams_hndlrsvc.rb
│       │   ├── ams_xfr.rb
│       │   ├── symantec_endpoint_manager_rce.rb
│       │   ├── symantec_iao.rb
│       │   ├── symantec_rtvscan.rb
│       │   ├── symantec_workspace_streaming_exec.rb
│       │   ├── trendmicro_serverprotect_createbinding.rb
│       │   ├── trendmicro_serverprotect_earthagent.rb
│       │   └── trendmicro_serverprotect.rb
│       ├── arkeia
│       │   └── type77.rb
│       ├── backdoor
│       │   └── energizer_duo_payload.rb
│       ├── backupexec
│       │   ├── name_service.rb
│       │   └── remote_agent.rb
│       ├── brightstor
│       │   ├── ca_arcserve_342.rb
│       │   ├── discovery_tcp.rb
│       │   ├── discovery_udp.rb
│       │   ├── etrust_itm_alert.rb
│       │   ├── hsmserver.rb
│       │   ├── lgserver_multi.rb
│       │   ├── lgserver.rb
│       │   ├── lgserver_rxrlogin.rb
│       │   ├── lgserver_rxssetdatagrowthscheduleandfilter.rb
│       │   ├── lgserver_rxsuselicenseini.rb
│       │   ├── license_gcr.rb
│       │   ├── mediasrv_sunrpc.rb
│       │   ├── message_engine_72.rb
│       │   ├── message_engine_heap.rb
│       │   ├── message_engine.rb
│       │   ├── sql_agent.rb
│       │   ├── tape_engine_0x8a.rb
│       │   ├── tape_engine.rb
│       │   └── universal_agent.rb
│       ├── browser
│       │   ├── adobe_cooltype_sing.rb
│       │   ├── adobe_flash_avm2.rb
│       │   ├── adobe_flash_casi32_int_overflow.rb
│       │   ├── adobe_flash_copy_pixels_to_byte_array.rb
│       │   ├── adobe_flash_domain_memory_uaf.rb
│       │   ├── adobe_flash_filters_type_confusion.rb
│       │   ├── adobe_flash_mp4_cprt.rb
│       │   ├── adobe_flash_otf_font.rb
│       │   ├── adobe_flash_pcre.rb
│       │   ├── adobe_flashplayer_arrayindexing.rb
│       │   ├── adobe_flashplayer_avm.rb
│       │   ├── adobe_flashplayer_flash10o.rb
│       │   ├── adobe_flashplayer_newfunction.rb
│       │   ├── adobe_flash_regex_value.rb
│       │   ├── adobe_flash_rtmp.rb
│       │   ├── adobe_flash_sps.rb
│       │   ├── adobe_flash_uncompress_zlib_uninitialized.rb
│       │   ├── adobe_flash_worker_byte_array_uaf.rb
│       │   ├── adobe_flatedecode_predictor02.rb
│       │   ├── adobe_geticon.rb
│       │   ├── adobe_jbig2decode.rb
│       │   ├── adobe_media_newplayer.rb
│       │   ├── adobe_shockwave_rcsl_corruption.rb
│       │   ├── adobe_toolbutton.rb
│       │   ├── adobe_utilprintf.rb
│       │   ├── advantech_webaccess_dvs_getcolor.rb
│       │   ├── aim_goaway.rb
│       │   ├── aladdin_choosefilepath_bof.rb
│       │   ├── amaya_bdo.rb
│       │   ├── aol_ampx_convertfile.rb
│       │   ├── aol_icq_downloadagent.rb
│       │   ├── apple_itunes_playlist.rb
│       │   ├── apple_quicktime_marshaled_punk.rb
│       │   ├── apple_quicktime_mime_type.rb
│       │   ├── apple_quicktime_rdrf.rb
│       │   ├── apple_quicktime_rtsp.rb
│       │   ├── apple_quicktime_smil_debug.rb
│       │   ├── apple_quicktime_texml_font_table.rb
│       │   ├── ask_shortformat.rb
│       │   ├── asus_net4switch_ipswcom.rb
│       │   ├── athocgov_completeinstallation.rb
│       │   ├── autodesk_idrop.rb
│       │   ├── aventail_epi_activex.rb
│       │   ├── awingsoft_web3d_bof.rb
│       │   ├── awingsoft_winds3d_sceneurl.rb
│       │   ├── baofeng_storm_onbeforevideodownload.rb
│       │   ├── barcode_ax49.rb
│       │   ├── blackice_downloadimagefileurl.rb
│       │   ├── c6_messenger_downloaderactivex.rb
│       │   ├── ca_brightstor_addcolumn.rb
│       │   ├── chilkat_crypt_writefile.rb
│       │   ├── cisco_anyconnect_exec.rb
│       │   ├── cisco_playerpt_setsource.rb
│       │   ├── cisco_playerpt_setsource_surl.rb
│       │   ├── cisco_webex_ext.rb
│       │   ├── citrix_gateway_actx.rb
│       │   ├── clear_quest_cqole.rb
│       │   ├── communicrypt_mail_activex.rb
│       │   ├── creative_software_cachefolder.rb
│       │   ├── crystal_reports_printcontrol.rb
│       │   ├── dell_webcam_crazytalk.rb
│       │   ├── dxstudio_player_exec.rb
│       │   ├── ea_checkrequirements.rb
│       │   ├── ebook_flipviewer_fviewerloading.rb
│       │   ├── enjoysapgui_comp_download.rb
│       │   ├── enjoysapgui_preparetoposthtml.rb
│       │   ├── facebook_extractiptc.rb
│       │   ├── firefox_smil_uaf.rb
│       │   ├── foxit_reader_plugin_url_bof.rb
│       │   ├── getgodm_http_response_bof.rb
│       │   ├── gom_openurl.rb
│       │   ├── greendam_url.rb
│       │   ├── honeywell_hscremotedeploy_exec.rb
│       │   ├── honeywell_tema_exec.rb
│       │   ├── hp_alm_xgo_setshapenodetype_exec.rb
│       │   ├── hp_easy_printer_care_xmlcachemgr.rb
│       │   ├── hp_easy_printer_care_xmlsimpleaccessor.rb
│       │   ├── hp_loadrunner_addfile.rb
│       │   ├── hp_loadrunner_addfolder.rb
│       │   ├── hp_loadrunner_writefilebinary.rb
│       │   ├── hp_loadrunner_writefilestring.rb
│       │   ├── hpmqc_progcolor.rb
│       │   ├── hyleos_chemviewx_activex.rb
│       │   ├── ibmegath_getxmlvalue.rb
│       │   ├── ibmlotusdomino_dwa_uploadmodule.rb
│       │   ├── ibm_spss_c1sizer.rb
│       │   ├── ibm_tivoli_pme_activex_bof.rb
│       │   ├── ie_cbutton_uaf.rb
│       │   ├── ie_cgenericelement_uaf.rb
│       │   ├── ie_createobject.rb
│       │   ├── ie_execcommand_uaf.rb
│       │   ├── ie_iscomponentinstalled.rb
│       │   ├── ie_setmousecapture_uaf.rb
│       │   ├── ie_unsafe_scripting.rb
│       │   ├── imgeviewer_tifmergemultifiles.rb
│       │   ├── indusoft_issymbol_internationalseparator.rb
│       │   ├── inotes_dwa85w_bof.rb
│       │   ├── intrust_annotatex_add.rb
│       │   ├── java_basicservice_impl.rb
│       │   ├── java_cmm.rb
│       │   ├── java_codebase_trust.rb
│       │   ├── java_docbase_bof.rb
│       │   ├── java_mixer_sequencer.rb
│       │   ├── java_ws_arginject_altjvm.rb
│       │   ├── java_ws_double_quote.rb
│       │   ├── java_ws_vmargs.rb
│       │   ├── juniper_sslvpn_ive_setupdll.rb
│       │   ├── kazaa_altnet_heap.rb
│       │   ├── keyhelp_launchtripane_exec.rb
│       │   ├── logitechvideocall_start.rb
│       │   ├── lpviewer_url.rb
│       │   ├── macrovision_downloadandexecute.rb
│       │   ├── macrovision_unsafe.rb
│       │   ├── malwarebytes_update_exec.rb
│       │   ├── maxthon_history_xcs.rb
│       │   ├── mcafee_mcsubmgr_vsprintf.rb
│       │   ├── mcafee_mvt_exec.rb
│       │   ├── mcafeevisualtrace_tracetarget.rb
│       │   ├── mirc_irc_url.rb
│       │   ├── mozilla_attribchildremoved.rb
│       │   ├── mozilla_firefox_onreadystatechange.rb
│       │   ├── mozilla_firefox_xmlserializer.rb
│       │   ├── mozilla_interleaved_write.rb
│       │   ├── mozilla_mchannel.rb
│       │   ├── mozilla_nssvgvalue.rb
│       │   ├── mozilla_nstreerange.rb
│       │   ├── mozilla_reduceright.rb
│       │   ├── ms03_020_ie_objecttype.rb
│       │   ├── ms05_054_onload.rb
│       │   ├── ms06_001_wmf_setabortproc.rb
│       │   ├── ms06_013_createtextrange.rb
│       │   ├── ms06_055_vml_method.rb
│       │   ├── ms06_057_webview_setslice.rb
│       │   ├── ms06_067_keyframe.rb
│       │   ├── ms06_071_xml_core.rb
│       │   ├── ms07_017_ani_loadimage_chunksize.rb
│       │   ├── ms08_041_snapshotviewer.rb
│       │   ├── ms08_053_mediaencoder.rb
│       │   ├── ms08_070_visual_studio_msmask.rb
│       │   ├── ms08_078_xml_corruption.rb
│       │   ├── ms09_002_memory_corruption.rb
│       │   ├── ms09_043_owc_htmlurl.rb
│       │   ├── ms09_043_owc_msdso.rb
│       │   ├── ms09_072_style_object.rb
│       │   ├── ms10_002_aurora.rb
│       │   ├── ms10_002_ie_object.rb
│       │   ├── ms10_018_ie_behaviors.rb
│       │   ├── ms10_018_ie_tabular_activex.rb
│       │   ├── ms10_022_ie_vbscript_winhlp32.rb
│       │   ├── ms10_026_avi_nsamplespersec.rb
│       │   ├── ms10_042_helpctr_xss_cmd_exec.rb
│       │   ├── ms10_046_shortcut_icon_dllloader.rb
│       │   ├── ms10_090_ie_css_clip.rb
│       │   ├── ms11_003_ie_css_import.rb
│       │   ├── ms11_050_mshtml_cobjectelement.rb
│       │   ├── ms11_081_option.rb
│       │   ├── ms11_093_ole32.rb
│       │   ├── ms12_004_midi.rb
│       │   ├── ms12_037_ie_colspan.rb
│       │   ├── ms12_037_same_id.rb
│       │   ├── ms13_009_ie_slayoutrun_uaf.rb
│       │   ├── ms13_022_silverlight_script_object.rb
│       │   ├── ms13_037_svg_dashstyle.rb
│       │   ├── ms13_055_canchor.rb
│       │   ├── ms13_059_cflatmarkuppointer.rb
│       │   ├── ms13_069_caret.rb
│       │   ├── ms13_080_cdisplaypointer.rb
│       │   ├── ms13_090_cardspacesigninhelper.rb
│       │   ├── ms14_012_cmarkup_uaf.rb
│       │   ├── ms14_012_textrange.rb
│       │   ├── ms14_064_ole_code_execution.rb
│       │   ├── ms16_051_vbscript.rb
│       │   ├── msvidctl_mpeg2.rb
│       │   ├── mswhale_checkforupdates.rb
│       │   ├── msxml_get_definition_code_exec.rb
│       │   ├── nctaudiofile2_setformatlikesample.rb
│       │   ├── nis2004_antispam.rb
│       │   ├── nis2004_get.rb
│       │   ├── notes_handler_cmdinject.rb
│       │   ├── novell_groupwise_gwcls1_actvx.rb
│       │   ├── novelliprint_callbackurl.rb
│       │   ├── novelliprint_datetime.rb
│       │   ├── novelliprint_executerequest_dbg.rb
│       │   ├── novelliprint_executerequest.rb
│       │   ├── novelliprint_getdriversettings_2.rb
│       │   ├── novelliprint_getdriversettings.rb
│       │   ├── novelliprint_target_frame.rb
│       │   ├── ntr_activex_check_bof.rb
│       │   ├── ntr_activex_stopmodule.rb
│       │   ├── oracle_autovue_setmarkupmode.rb
│       │   ├── oracle_dc_submittoexpress.rb
│       │   ├── oracle_webcenter_checkoutandopen.rb
│       │   ├── orbit_connecting.rb
│       │   ├── ovftool_format_string.rb
│       │   ├── pcvue_func.rb
│       │   ├── persits_xupload_traversal.rb
│       │   ├── quickr_qp2_bof.rb
│       │   ├── real_arcade_installerdlg.rb
│       │   ├── realplayer_cdda_uri.rb
│       │   ├── realplayer_console.rb
│       │   ├── realplayer_import.rb
│       │   ├── realplayer_qcp.rb
│       │   ├── realplayer_smil.rb
│       │   ├── roxio_cineplayer.rb
│       │   ├── safari_xslt_output.rb
│       │   ├── samsung_neti_wiewer_backuptoavi_bof.rb
│       │   ├── samsung_security_manager_put.rb
│       │   ├── sapgui_saveviewtosessionfile.rb
│       │   ├── siemens_solid_edge_selistctrlx.rb
│       │   ├── softartisans_getdrivename.rb
│       │   ├── sonicwall_addrouteentry.rb
│       │   ├── symantec_altirisdeployment_downloadandinstall.rb
│       │   ├── symantec_altirisdeployment_runcmd.rb
│       │   ├── symantec_appstream_unsafe.rb
│       │   ├── symantec_backupexec_pvcalendar.rb
│       │   ├── symantec_consoleutilities_browseandsavefile.rb
│       │   ├── synactis_connecttosynactis_bof.rb
│       │   ├── systemrequirementslab_unsafe.rb
│       │   ├── teechart_pro.rb
│       │   ├── tom_sawyer_tsgetx71ex552.rb
│       │   ├── trendmicro_extsetowner.rb
│       │   ├── trendmicro_officescan.rb
│       │   ├── tumbleweed_filetransfer.rb
│       │   ├── ubisoft_uplay_cmd_exec.rb
│       │   ├── ultramjcam_openfiledig_bof.rb
│       │   ├── ultraoffice_httpupload.rb
│       │   ├── verypdf_pdfview.rb
│       │   ├── viscom_movieplayer_drawtext.rb
│       │   ├── vlc_amv.rb
│       │   ├── vlc_mms_bof.rb
│       │   ├── webdav_dll_hijacker.rb
│       │   ├── webex_ucf_newobject.rb
│       │   ├── wellintech_kingscada_kxclientdownload.rb
│       │   ├── winamp_playlist_unc.rb
│       │   ├── winamp_ultravox.rb
│       │   ├── windvd7_applicationtype.rb
│       │   ├── winzip_fileview.rb
│       │   ├── wmi_admintools.rb
│       │   ├── x360_video_player_set_text_bof.rb
│       │   ├── xmplay_asx.rb
│       │   ├── yahoomessenger_fvcom.rb
│       │   ├── yahoomessenger_server.rb
│       │   ├── zenturiprogramchecker_unsafe.rb
│       │   └── zenworks_helplauncher_exec.rb
│       ├── dcerpc
│       │   ├── ms03_026_dcom.rb
│       │   ├── ms05_017_msmq.rb
│       │   ├── ms07_029_msdns_zonename.rb
│       │   └── ms07_065_msmq.rb
│       ├── email
│       │   ├── ms07_017_ani_loadimage_chunksize.rb
│       │   ├── ms10_045_outlook_ref_only.rb
│       │   └── ms10_045_outlook_ref_resolve.rb
│       ├── emc
│       │   ├── alphastor_agent.rb
│       │   ├── alphastor_device_manager_exec.rb
│       │   ├── networker_format_string.rb
│       │   └── replication_manager_exec.rb
│       ├── fileformat
│       │   ├── abbs_amp_lst.rb
│       │   ├── acdsee_fotoslate_string.rb
│       │   ├── acdsee_xpm.rb
│       │   ├── actfax_import_users_bof.rb
│       │   ├── activepdf_webgrabber.rb
│       │   ├── adobe_collectemailinfo.rb
│       │   ├── adobe_cooltype_sing.rb
│       │   ├── adobe_flashplayer_button.rb
│       │   ├── adobe_flashplayer_newfunction.rb
│       │   ├── adobe_flatedecode_predictor02.rb
│       │   ├── adobe_geticon.rb
│       │   ├── adobe_illustrator_v14_eps.rb
│       │   ├── adobe_jbig2decode.rb
│       │   ├── adobe_libtiff.rb
│       │   ├── adobe_media_newplayer.rb
│       │   ├── adobe_pdf_embedded_exe_nojs.rb
│       │   ├── adobe_pdf_embedded_exe.rb
│       │   ├── adobe_reader_u3d.rb
│       │   ├── adobe_toolbutton.rb
│       │   ├── adobe_u3d_meshdecl.rb
│       │   ├── adobe_utilprintf.rb
│       │   ├── allplayer_m3u_bof.rb
│       │   ├── altap_salamander_pdb.rb
│       │   ├── aol_desktop_linktag.rb
│       │   ├── aol_phobos_bof.rb
│       │   ├── a_pdf_wav_to_mp3.rb
│       │   ├── apple_quicktime_pnsize.rb
│       │   ├── apple_quicktime_rdrf.rb
│       │   ├── apple_quicktime_texml.rb
│       │   ├── audio_coder_m3u.rb
│       │   ├── audiotran_pls_1424.rb
│       │   ├── audiotran_pls.rb
│       │   ├── audio_wkstn_pls.rb
│       │   ├── aviosoft_plf_buf.rb
│       │   ├── bacnet_csv.rb
│       │   ├── beetel_netconfig_ini_bof.rb
│       │   ├── blazedvd_hdtv_bof.rb
│       │   ├── blazedvd_plf.rb
│       │   ├── bpftp_client_bps_bof.rb
│       │   ├── bsplayer_m3u.rb
│       │   ├── ca_cab.rb
│       │   ├── cain_abel_4918_rdp.rb
│       │   ├── ccmplayer_m3u_bof.rb
│       │   ├── chasys_draw_ies_bmp_bof.rb
│       │   ├── coolpdf_image_stream_bof.rb
│       │   ├── corelpdf_fusion_bof.rb
│       │   ├── csound_getnum_bof.rb
│       │   ├── cutezip_bof.rb
│       │   ├── cyberlink_p2g_bof.rb
│       │   ├── cytel_studio_cy3.rb
│       │   ├── deepburner_path.rb
│       │   ├── destinymediaplayer16.rb
│       │   ├── digital_music_pad_pls.rb
│       │   ├── djstudio_pls_bof.rb
│       │   ├── djvu_imageurl.rb
│       │   ├── dvdx_plf_bof.rb
│       │   ├── easycdda_pls_bof.rb
│       │   ├── emc_appextender_keyworks.rb
│       │   ├── erdas_er_viewer_bof.rb
│       │   ├── erdas_er_viewer_rf_report_error.rb
│       │   ├── esignal_styletemplate_bof.rb
│       │   ├── etrust_pestscan.rb
│       │   ├── ezip_wizard_bof.rb
│       │   ├── fatplayer_wav.rb
│       │   ├── fdm_torrent.rb
│       │   ├── feeddemon_opml.rb
│       │   ├── foxit_reader_filewrite.rb
│       │   ├── foxit_reader_launch.rb
│       │   ├── foxit_title_bof.rb
│       │   ├── free_mp3_ripper_wav.rb
│       │   ├── galan_fileformat_bof.rb
│       │   ├── gsm_sim.rb
│       │   ├── gta_samp.rb
│       │   ├── hhw_hhp_compiledfile_bof.rb
│       │   ├── hhw_hhp_contentfile_bof.rb
│       │   ├── hhw_hhp_indexfile_bof.rb
│       │   ├── homm3_h3m.rb
│       │   ├── ht_mp3player_ht3_bof.rb
│       │   ├── ibm_forms_viewer_fontname.rb
│       │   ├── ibm_pcm_ws.rb
│       │   ├── icofx_bof.rb
│       │   ├── ideal_migration_ipj.rb
│       │   ├── iftp_schedule_bof.rb
│       │   ├── irfanview_jpeg2000_bof.rb
│       │   ├── ispvm_xcf_ispxcf.rb
│       │   ├── kingview_kingmess_kvl.rb
│       │   ├── lattice_pac_bof.rb
│       │   ├── lotusnotes_lzh.rb
│       │   ├── magix_musikmaker_16_mmm.rb
│       │   ├── mcafee_hercules_deletesnapshot.rb
│       │   ├── mcafee_showreport_exec.rb
│       │   ├── mediacoder_m3u.rb
│       │   ├── mediajukebox.rb
│       │   ├── microp_mppl.rb
│       │   ├── millenium_mp3_pls.rb
│       │   ├── mini_stream_pls_bof.rb
│       │   ├── mjm_coreplayer2011_s3m.rb
│       │   ├── mjm_quickplayer_s3m.rb
│       │   ├── moxa_mediadbplayback.rb
│       │   ├── mplayer_m3u_bof.rb
│       │   ├── mplayer_sami_bof.rb
│       │   ├── ms09_067_excel_featheader.rb
│       │   ├── ms10_004_textbytesatom.rb
│       │   ├── ms10_038_excel_obj_bof.rb
│       │   ├── ms10_087_rtf_pfragments_bof.rb
│       │   ├── ms11_006_createsizeddibsection.rb
│       │   ├── ms11_021_xlb_bof.rb
│       │   ├── ms12_005.rb
│       │   ├── ms12_027_mscomctl_bof.rb
│       │   ├── ms13_071_theme.rb
│       │   ├── ms14_017_rtf.rb
│       │   ├── ms14_060_sandworm.rb
│       │   ├── ms14_064_packager_python.rb
│       │   ├── ms14_064_packager_run_as_admin.rb
│       │   ├── ms15_020_shortcut_icon_dllloader.rb
│       │   ├── ms15_100_mcl_exe.rb
│       │   ├── ms_visual_basic_vbp.rb
│       │   ├── mswin_tiff_overflow.rb
│       │   ├── msworks_wkspictureinterface.rb
│       │   ├── mymp3player_m3u.rb
│       │   ├── netop.rb
│       │   ├── nuance_pdf_launch_overflow.rb
│       │   ├── office_ole_multiple_dll_hijack.rb
│       │   ├── office_word_macro.rb
│       │   ├── openoffice_ole.rb
│       │   ├── orbital_viewer_orb.rb
│       │   ├── orbit_download_failed_bof.rb
│       │   ├── ovf_format_string.rb
│       │   ├── proshow_cellimage_bof.rb
│       │   ├── proshow_load_bof.rb
│       │   ├── publishit_pui.rb
│       │   ├── real_networks_netzip_bof.rb
│       │   ├── real_player_url_property_bof.rb
│       │   ├── realplayer_ver_attribute_bof.rb
│       │   ├── safenet_softremote_groupname.rb
│       │   ├── sascam_get.rb
│       │   ├── scadaphone_zip.rb
│       │   ├── shadow_stream_recorder_bof.rb
│       │   ├── shaper_pdf_bof.rb
│       │   ├── somplplayer_m3u.rb
│       │   ├── subtitle_processor_m3u_bof.rb
│       │   ├── tfm_mmplayer_m3u_ppl_bof.rb
│       │   ├── total_video_player_ini_bof.rb
│       │   ├── tugzip.rb
│       │   ├── ultraiso_ccd.rb
│       │   ├── ultraiso_cue.rb
│       │   ├── ursoft_w32dasm.rb
│       │   ├── varicad_dwb.rb
│       │   ├── videocharge_studio.rb
│       │   ├── videolan_tivo.rb
│       │   ├── videospirit_visprj.rb
│       │   ├── visio_dxf_bof.rb
│       │   ├── visiwave_vwr_type.rb
│       │   ├── vlc_modplug_s3m.rb
│       │   ├── vlc_realtext.rb
│       │   ├── vlc_smb_uri.rb
│       │   ├── vlc_webm.rb
│       │   ├── vuplayer_cue.rb
│       │   ├── vuplayer_m3u.rb
│       │   ├── watermark_master.rb
│       │   ├── winamp_maki_bof.rb
│       │   ├── winrar_name_spoofing.rb
│       │   ├── wireshark_mpeg_overflow.rb
│       │   ├── wireshark_packet_dect.rb
│       │   ├── wm_downloader_m3u.rb
│       │   ├── xenorate_xpl_bof.rb
│       │   ├── xion_m3u_sehbof.rb
│       │   ├── xradio_xrl_sehbof.rb
│       │   └── zinfaudioplayer221_pls.rb
│       ├── firewall
│       │   ├── blackice_pam_icq.rb
│       │   └── kerio_auth.rb
│       ├── ftp
│       │   ├── 32bitftp_list_reply.rb
│       │   ├── 3cdaemon_ftp_user.rb
│       │   ├── aasync_list_reply.rb
│       │   ├── ability_server_stor.rb
│       │   ├── absolute_ftp_list_bof.rb
│       │   ├── bison_ftp_bof.rb
│       │   ├── cesarftp_mkd.rb
│       │   ├── comsnd_ftpd_fmtstr.rb
│       │   ├── dreamftp_format.rb
│       │   ├── easyfilesharing_pass.rb
│       │   ├── easyftp_cwd_fixret.rb
│       │   ├── easyftp_list_fixret.rb
│       │   ├── easyftp_mkd_fixret.rb
│       │   ├── filecopa_list_overflow.rb
│       │   ├── filewrangler_list_reply.rb
│       │   ├── freefloatftp_user.rb
│       │   ├── freefloatftp_wbem.rb
│       │   ├── freeftpd_pass.rb
│       │   ├── freeftpd_user.rb
│       │   ├── ftpgetter_pwd_reply.rb
│       │   ├── ftppad_list_reply.rb
│       │   ├── ftpshell51_pwd_reply.rb
│       │   ├── ftpsynch_list_reply.rb
│       │   ├── gekkomgr_list_reply.rb
│       │   ├── globalscapeftp_input.rb
│       │   ├── goldenftp_pass_bof.rb
│       │   ├── httpdx_tolog_format.rb
│       │   ├── kmftp_utility_cwd.rb
│       │   ├── leapftp_list_reply.rb
│       │   ├── leapftp_pasv_reply.rb
│       │   ├── ms09_053_ftpd_nlst.rb
│       │   ├── netterm_netftpd_user.rb
│       │   ├── odin_list_reply.rb
│       │   ├── open_ftpd_wbem.rb
│       │   ├── oracle9i_xdb_ftp_pass.rb
│       │   ├── oracle9i_xdb_ftp_unlock.rb
│       │   ├── pcman_put.rb
│       │   ├── pcman_stor.rb
│       │   ├── proftp_banner.rb
│       │   ├── quickshare_traversal_write.rb
│       │   ├── ricoh_dl_bof.rb
│       │   ├── sami_ftpd_list.rb
│       │   ├── sami_ftpd_user.rb
│       │   ├── sasser_ftpd_port.rb
│       │   ├── scriptftp_list.rb
│       │   ├── seagull_list_reply.rb
│       │   ├── servu_chmod.rb
│       │   ├── servu_mdtm.rb
│       │   ├── slimftpd_list_concat.rb
│       │   ├── trellian_client_pasv.rb
│       │   ├── turboftp_port.rb
│       │   ├── vermillion_ftpd_port.rb
│       │   ├── warftpd_165_pass.rb
│       │   ├── warftpd_165_user.rb
│       │   ├── wftpd_size.rb
│       │   ├── winaxe_server_ready.rb
│       │   ├── wing_ftp_admin_exec.rb
│       │   ├── wsftp_server_503_mkd.rb
│       │   ├── wsftp_server_505_xmd5.rb
│       │   ├── xftp_client_pwd.rb
│       │   ├── xlink_client.rb
│       │   └── xlink_server.rb
│       ├── games
│       │   ├── mohaa_getinfo.rb
│       │   ├── racer_503beta5.rb
│       │   └── ut2004_secure.rb
│       ├── http
│       │   ├── adobe_robohelper_authbypass.rb
│       │   ├── altn_securitygateway.rb
│       │   ├── altn_webadmin.rb
│       │   ├── amlibweb_webquerydll_app.rb
│       │   ├── apache_chunked.rb
│       │   ├── apache_modjk_overflow.rb
│       │   ├── apache_mod_rewrite_ldap.rb
│       │   ├── avaya_ccr_imageupload_exec.rb
│       │   ├── badblue_ext_overflow.rb
│       │   ├── badblue_passthru.rb
│       │   ├── bea_weblogic_jsessionid.rb
│       │   ├── bea_weblogic_post_bof.rb
│       │   ├── bea_weblogic_transfer_encoding.rb
│       │   ├── belkin_bulldog.rb
│       │   ├── ca_arcserve_rpc_authbypass.rb
│       │   ├── ca_igateway_debug.rb
│       │   ├── ca_totaldefense_regeneratereports.rb
│       │   ├── cogent_datahub_command.rb
│       │   ├── cogent_datahub_request_headers_bof.rb
│       │   ├── coldfusion_fckeditor.rb
│       │   ├── cyclope_ess_sqli.rb
│       │   ├── desktopcentral_file_upload.rb
│       │   ├── desktopcentral_statusupdate_upload.rb
│       │   ├── diskboss_get_bof.rb
│       │   ├── disk_pulse_enterprise_bof.rb
│       │   ├── disksavvy_get_bof.rb
│       │   ├── easyfilesharing_seh.rb
│       │   ├── easyftp_list.rb
│       │   ├── edirectory_host.rb
│       │   ├── edirectory_imonitor.rb
│       │   ├── efs_easychatserver_username.rb
│       │   ├── efs_fmws_userid_bof.rb
│       │   ├── ektron_xslt_exec.rb
│       │   ├── ektron_xslt_exec_ws.rb
│       │   ├── ericom_access_now_bof.rb
│       │   ├── ezserver_http.rb
│       │   ├── fdm_auth_header.rb
│       │   ├── generic_http_dll_injection.rb
│       │   ├── hp_autopass_license_traversal.rb
│       │   ├── hp_imc_bims_upload.rb
│       │   ├── hp_imc_mibfileupload.rb
│       │   ├── hp_loadrunner_copyfiletoserver.rb
│       │   ├── hp_mpa_job_acct.rb
│       │   ├── hp_nnm_getnnmdata_hostname.rb
│       │   ├── hp_nnm_getnnmdata_icount.rb
│       │   ├── hp_nnm_getnnmdata_maxage.rb
│       │   ├── hp_nnm_nnmrptconfig_nameparams.rb
│       │   ├── hp_nnm_nnmrptconfig_schdparams.rb
│       │   ├── hp_nnm_openview5.rb
│       │   ├── hp_nnm_ovalarm_lang.rb
│       │   ├── hp_nnm_ovas.rb
│       │   ├── hp_nnm_ovbuildpath_textfile.rb
│       │   ├── hp_nnm_ovwebhelp.rb
│       │   ├── hp_nnm_ovwebsnmpsrv_main.rb
│       │   ├── hp_nnm_ovwebsnmpsrv_ovutil.rb
│       │   ├── hp_nnm_ovwebsnmpsrv_uro.rb
│       │   ├── hp_nnm_snmp.rb
│       │   ├── hp_nnm_snmpviewer_actapp.rb
│       │   ├── hp_nnm_toolbar_01.rb
│       │   ├── hp_nnm_toolbar_02.rb
│       │   ├── hp_nnm_webappmon_execvp.rb
│       │   ├── hp_nnm_webappmon_ovjavalocale.rb
│       │   ├── hp_openview_insight_backdoor.rb
│       │   ├── hp_pcm_snac_update_certificates.rb
│       │   ├── hp_pcm_snac_update_domain.rb
│       │   ├── hp_power_manager_filename.rb
│       │   ├── hp_power_manager_login.rb
│       │   ├── hp_sitescope_dns_tool.rb
│       │   ├── hp_sitescope_runomagentcommand.rb
│       │   ├── httpdx_handlepeer.rb
│       │   ├── httpdx_tolog_format.rb
│       │   ├── ia_webmail.rb
│       │   ├── ibm_tivoli_endpoint_bof.rb
│       │   ├── ibm_tpmfosd_overflow.rb
│       │   ├── ibm_tsm_cad_header.rb
│       │   ├── icecast_header.rb
│       │   ├── integard_password_bof.rb
│       │   ├── intersystems_cache.rb
│       │   ├── intrasrv_bof.rb
│       │   ├── ipswitch_wug_maincfgret.rb
│       │   ├── jira_collector_traversal.rb
│       │   ├── kaseya_uploader.rb
│       │   ├── kaseya_uploadimage_file_upload.rb
│       │   ├── kolibri_http.rb
│       │   ├── landesk_thinkmanagement_upload_asp.rb
│       │   ├── lexmark_markvision_gfd_upload.rb
│       │   ├── mailenable_auth_header.rb
│       │   ├── manageengine_apps_mngr.rb
│       │   ├── manageengine_connectionid_write.rb
│       │   ├── manage_engine_opmanager_rce.rb
│       │   ├── maxdb_webdbm_database.rb
│       │   ├── maxdb_webdbm_get_overflow.rb
│       │   ├── mcafee_epolicy_source.rb
│       │   ├── mdaemon_worldclient_form2raw.rb
│       │   ├── minishare_get_overflow.rb
│       │   ├── miniweb_upload_wbem.rb
│       │   ├── navicopa_get_overflow.rb
│       │   ├── netdecision_http_bof.rb
│       │   ├── netgear_nms_rce.rb
│       │   ├── novell_imanager_upload.rb
│       │   ├── novell_mdm_lfi.rb
│       │   ├── novell_messenger_acceptlang.rb
│       │   ├── nowsms.rb
│       │   ├── oracle9i_xdb_pass.rb
│       │   ├── oracle_beehive_evaluation.rb
│       │   ├── oracle_beehive_prepareaudiotoplay.rb
│       │   ├── oracle_btm_writetofile.rb
│       │   ├── oracle_endeca_exec.rb
│       │   ├── oracle_event_processing_upload.rb
│       │   ├── osb_uname_jlist.rb
│       │   ├── peercast_url.rb
│       │   ├── php_apache_request_headers_bof.rb
│       │   ├── privatewire_gateway.rb
│       │   ├── psoproxy91_overflow.rb
│       │   ├── rabidhamster_r4_log.rb
│       │   ├── rejetto_hfs_exec.rb
│       │   ├── sambar6_search_results.rb
│       │   ├── sap_configservlet_exec_noauth.rb
│       │   ├── sapdb_webtools.rb
│       │   ├── sap_host_control_cmd_exec.rb
│       │   ├── savant_31_overflow.rb
│       │   ├── sepm_auth_bypass_rce.rb
│       │   ├── servu_session_cookie.rb
│       │   ├── shoutcast_format.rb
│       │   ├── shttpd_post.rb
│       │   ├── solarwinds_fsm_userlogin.rb
│       │   ├── solarwinds_storage_manager_sql.rb
│       │   ├── sonicwall_scrutinizer_sqli.rb
│       │   ├── steamcast_useragent.rb
│       │   ├── sws_connection_bof.rb
│       │   ├── sybase_easerver.rb
│       │   ├── sysax_create_folder.rb
│       │   ├── trackercam_phparg_overflow.rb
│       │   ├── trackit_file_upload.rb
│       │   ├── trendmicro_officescan.rb
│       │   ├── ultraminihttp_bof.rb
│       │   ├── umbraco_upload_aspx.rb
│       │   ├── vmware_vcenter_chargeback_upload.rb
│       │   ├── webster_http.rb
│       │   ├── xampp_webdav_upload_php.rb
│       │   ├── xitami_if_mod_since.rb
│       │   ├── zenworks_assetmgmt_uploadservlet.rb
│       │   └── zenworks_uploadservlet.rb
│       ├── iis
│       │   ├── iis_webdav_upload_asp.rb
│       │   ├── ms01_023_printer.rb
│       │   ├── ms01_026_dbldecode.rb
│       │   ├── ms01_033_idq.rb
│       │   ├── ms02_018_htr.rb
│       │   ├── ms02_065_msadc.rb
│       │   ├── ms03_007_ntdll_webdav.rb
│       │   └── msadc.rb
│       ├── imap
│       │   ├── eudora_list.rb
│       │   ├── imail_delete.rb
│       │   ├── ipswitch_search.rb
│       │   ├── mailenable_login.rb
│       │   ├── mailenable_status.rb
│       │   ├── mailenable_w3c_select.rb
│       │   ├── mdaemon_cram_md5.rb
│       │   ├── mdaemon_fetch.rb
│       │   ├── mercur_imap_select_overflow.rb
│       │   ├── mercur_login.rb
│       │   ├── mercury_login.rb
│       │   ├── mercury_rename.rb
│       │   ├── novell_netmail_append.rb
│       │   ├── novell_netmail_auth.rb
│       │   ├── novell_netmail_status.rb
│       │   └── novell_netmail_subscribe.rb
│       ├── isapi
│       │   ├── ms00_094_pbserver.rb
│       │   ├── ms03_022_nsiislog_post.rb
│       │   ├── ms03_051_fp30reg_chunked.rb
│       │   ├── rsa_webagent_redirect.rb
│       │   └── w3who_query.rb
│       ├── ldap
│       │   ├── imail_thc.rb
│       │   └── pgp_keyserver7.rb
│       ├── license
│       │   ├── calicclnt_getconfig.rb
│       │   ├── calicserv_getconfig.rb
│       │   ├── flexnet_lmgrd_bof.rb
│       │   └── sentinel_lm7_udp.rb
│       ├── local
│       │   ├── adobe_sandbox_adobecollabsync.rb
│       │   ├── agnitum_outpost_acs.rb
│       │   ├── always_install_elevated.rb
│       │   ├── applocker_bypass.rb
│       │   ├── ask.rb
│       │   ├── bthpan.rb
│       │   ├── bypassuac_eventvwr.rb
│       │   ├── bypassuac_injection.rb
│       │   ├── bypassuac.rb
│       │   ├── bypassuac_vbs.rb
│       │   ├── capcom_sys_exec.rb
│       │   ├── current_user_psexec.rb
│       │   ├── ikeext_service.rb
│       │   ├── ipass_launch_app.rb
│       │   ├── lenovo_systemupdate.rb
│       │   ├── mqac_write.rb
│       │   ├── ms10_015_kitrap0d.rb
│       │   ├── ms10_092_schelevator.rb
│       │   ├── ms11_080_afdjoinleaf.rb
│       │   ├── ms13_005_hwnd_broadcast.rb
│       │   ├── ms13_053_schlamperei.rb
│       │   ├── ms13_081_track_popup_menu.rb
│       │   ├── ms13_097_ie_registry_symlink.rb
│       │   ├── ms14_009_ie_dfsvc.rb
│       │   ├── ms14_058_track_popup_menu.rb
│       │   ├── ms14_070_tcpip_ioctl.rb
│       │   ├── ms15_004_tswbproxy.rb
│       │   ├── ms15_051_client_copy_image.rb
│       │   ├── ms15_078_atmfd_bof.rb
│       │   ├── ms16_016_webdav.rb
│       │   ├── ms16_032_secondary_logon_handle_privesc.rb
│       │   ├── ms_ndproxy.rb
│       │   ├── novell_client_nicm.rb
│       │   ├── novell_client_nwfs.rb
│       │   ├── ntapphelpcachecontrol.rb
│       │   ├── nvidia_nvsvc.rb
│       │   ├── panda_psevents.rb
│       │   ├── payload_inject.rb
│       │   ├── persistence.rb
│       │   ├── powershell_cmd_upgrade.rb
│       │   ├── powershell_remoting.rb
│       │   ├── ppr_flatten_rec.rb
│       │   ├── ps_persist.rb
│       │   ├── ps_wmi_exec.rb
│       │   ├── pxeexploit.rb
│       │   ├── registry_persistence.rb
│       │   ├── run_as.rb
│       │   ├── s4u_persistence.rb
│       │   ├── service_permissions.rb
│       │   ├── trusted_service_path.rb
│       │   ├── virtual_box_guest_additions.rb
│       │   ├── virtual_box_opengl_escape.rb
│       │   ├── vss_persistence.rb
│       │   └── wmi.rb
│       ├── lotus
│       │   ├── domino_http_accept_language.rb
│       │   ├── domino_icalendar_organizer.rb
│       │   ├── domino_sametime_stmux.rb
│       │   └── lotusnotes_lzh.rb
│       ├── lpd
│       │   ├── hummingbird_exceed.rb
│       │   ├── niprint.rb
│       │   ├── saplpd.rb
│       │   └── wincomlpd_admin.rb
│       ├── misc
│       │   ├── achat_bof.rb
│       │   ├── actfax_raw_server_bof.rb
│       │   ├── agentxpp_receive_agentx.rb
│       │   ├── allmediaserver_bof.rb
│       │   ├── altiris_ds_sqli.rb
│       │   ├── apple_quicktime_rtsp_response.rb
│       │   ├── asus_dpcproxy_overflow.rb
│       │   ├── avaya_winpmd_unihostrouter.rb
│       │   ├── avidphoneticindexer.rb
│       │   ├── bakbone_netvault_heap.rb
│       │   ├── bcaaa_bof.rb
│       │   ├── bigant_server_250.rb
│       │   ├── bigant_server_dupf_upload.rb
│       │   ├── bigant_server.rb
│       │   ├── bigant_server_sch_dupf_bof.rb
│       │   ├── bigant_server_usv.rb
│       │   ├── bomberclone_overflow.rb
│       │   ├── bopup_comm.rb
│       │   ├── borland_interbase.rb
│       │   ├── borland_starteam.rb
│       │   ├── citrix_streamprocess_data_msg.rb
│       │   ├── citrix_streamprocess_get_boot_record_request.rb
│       │   ├── citrix_streamprocess_get_footer.rb
│       │   ├── citrix_streamprocess_get_objects.rb
│       │   ├── citrix_streamprocess.rb
│       │   ├── doubletake.rb
│       │   ├── eiqnetworks_esa.rb
│       │   ├── eiqnetworks_esa_topology.rb
│       │   ├── enterasys_netsight_syslog_bof.rb
│       │   ├── eureka_mail_err.rb
│       │   ├── fb_cnct_group.rb
│       │   ├── fb_isc_attach_database.rb
│       │   ├── fb_isc_create_database.rb
│       │   ├── fb_svc_attach.rb
│       │   ├── gimp_script_fu.rb
│       │   ├── hp_dataprotector_cmd_exec.rb
│       │   ├── hp_dataprotector_crs.rb
│       │   ├── hp_dataprotector_dtbclslogin.rb
│       │   ├── hp_dataprotector_encrypted_comms.rb
│       │   ├── hp_dataprotector_exec_bar.rb
│       │   ├── hp_dataprotector_install_service.rb
│       │   ├── hp_dataprotector_new_folder.rb
│       │   ├── hp_dataprotector_traversal.rb
│       │   ├── hp_imc_uam.rb
│       │   ├── hp_loadrunner_magentproc.rb
│       │   ├── hp_magentservice.rb
│       │   ├── hp_omniinet_1.rb
│       │   ├── hp_omniinet_2.rb
│       │   ├── hp_omniinet_3.rb
│       │   ├── hp_omniinet_4.rb
│       │   ├── hp_operations_agent_coda_34.rb
│       │   ├── hp_operations_agent_coda_8c.rb
│       │   ├── hp_ovtrace.rb
│       │   ├── hta_server.rb
│       │   ├── ib_isc_attach_database.rb
│       │   ├── ib_isc_create_database.rb
│       │   ├── ibm_cognos_tm1admsd_bof.rb
│       │   ├── ibm_director_cim_dllinject.rb
│       │   ├── ibm_tsm_cad_ping.rb
│       │   ├── ibm_tsm_rca_dicugetidentify.rb
│       │   ├── ibm_websphere_java_deserialize.rb
│       │   ├── ib_svc_attach.rb
│       │   ├── itunes_extm3u_bof.rb
│       │   ├── landesk_aolnsrvr.rb
│       │   ├── lianja_db_net.rb
│       │   ├── manageengine_eventlog_analyzer_rce.rb
│       │   ├── mercury_phonebook.rb
│       │   ├── mini_stream.rb
│       │   ├── mirc_privmsg_server.rb
│       │   ├── ms07_064_sami.rb
│       │   ├── ms10_104_sharepoint.rb
│       │   ├── netcat110_nt.rb
│       │   ├── nettransport.rb
│       │   ├── nvidia_mental_ray.rb
│       │   ├── poisonivy_21x_bof.rb
│       │   ├── poisonivy_bof.rb
│       │   ├── poppeeper_date.rb
│       │   ├── poppeeper_uidl.rb
│       │   ├── realtek_playlist.rb
│       │   ├── regsvr32_applocker_bypass_server.rb
│       │   ├── sap_2005_license.rb
│       │   ├── sap_netweaver_dispatcher.rb
│       │   ├── shixxnote_font.rb
│       │   ├── solidworks_workgroup_pdmwservice_file_write.rb
│       │   ├── splayer_content_type.rb
│       │   ├── stream_down_bof.rb
│       │   ├── talkative_response.rb
│       │   ├── tiny_identd_overflow.rb
│       │   ├── trendmicro_cmdprocessor_addtask.rb
│       │   ├── ufo_ai.rb
│       │   ├── vmhgfs_webdav_dll_sideload.rb
│       │   ├── windows_rsh.rb
│       │   ├── wireshark_lua.rb
│       │   └── wireshark_packet_dect.rb
│       ├── mmsp
│       │   └── ms10_025_wmss_connect_funnel.rb
│       ├── motorola
│       │   └── timbuktu_fileupload.rb
│       ├── mssql
│       │   ├── lyris_listmanager_weak_pass.rb
│       │   ├── ms02_039_slammer.rb
│       │   ├── ms02_056_hello.rb
│       │   ├── ms09_004_sp_replwritetovarbin.rb
│       │   ├── ms09_004_sp_replwritetovarbin_sqli.rb
│       │   ├── mssql_clr_payload.rb
│       │   ├── mssql_linkcrawler.rb
│       │   ├── mssql_payload.rb
│       │   └── mssql_payload_sqli.rb
│       ├── mysql
│       │   ├── mysql_mof.rb
│       │   ├── mysql_payload.rb
│       │   ├── mysql_start_up.rb
│       │   ├── mysql_yassl_hello.rb
│       │   └── scrutinizer_upload_exec.rb
│       ├── nfs
│       │   └── xlink_nfsd.rb
│       ├── nntp
│       │   └── ms05_030_nntp.rb
│       ├── novell
│       │   ├── file_reporter_fsfui_upload.rb
│       │   ├── groupwisemessenger_client.rb
│       │   ├── netiq_pum_eval.rb
│       │   ├── nmap_stor.rb
│       │   ├── zenworks_desktop_agent.rb
│       │   ├── zenworks_preboot_op21_bof.rb
│       │   ├── zenworks_preboot_op4c_bof.rb
│       │   ├── zenworks_preboot_op6_bof.rb
│       │   └── zenworks_preboot_op6c_bof.rb
│       ├── oracle
│       │   ├── client_system_analyzer_upload.rb
│       │   ├── extjob.rb
│       │   ├── osb_ndmp_auth.rb
│       │   ├── tns_arguments.rb
│       │   ├── tns_auth_sesskey.rb
│       │   └── tns_service_name.rb
│       ├── pop3
│       │   └── seattlelab_pass.rb
│       ├── postgres
│       │   └── postgres_payload.rb
│       ├── proxy
│       │   ├── bluecoat_winproxy_host.rb
│       │   ├── ccproxy_telnet_ping.rb
│       │   ├── proxypro_http_get.rb
│       │   └── qbik_wingate_wwwproxy.rb
│       ├── scada
│       │   ├── abb_wserver_exec.rb
│       │   ├── advantech_webaccess_dashboard_file_upload.rb
│       │   ├── citect_scada_odbc.rb
│       │   ├── codesys_gateway_server_traversal.rb
│       │   ├── codesys_web_server.rb
│       │   ├── daq_factory_bof.rb
│       │   ├── factorylink_csservice.rb
│       │   ├── factorylink_vrn_09.rb
│       │   ├── ge_proficy_cimplicity_gefebt.rb
│       │   ├── iconics_genbroker.rb
│       │   ├── iconics_webhmi_setactivexguid.rb
│       │   ├── igss9_igssdataserver_listall.rb
│       │   ├── igss9_igssdataserver_rename.rb
│       │   ├── igss9_misc.rb
│       │   ├── igss_exec_17.rb
│       │   ├── indusoft_webstudio_exec.rb
│       │   ├── moxa_mdmtool.rb
│       │   ├── procyon_core_server.rb
│       │   ├── realwin_on_fc_binfile_a.rb
│       │   ├── realwin_on_fcs_login.rb
│       │   ├── realwin.rb
│       │   ├── realwin_scpc_initialize.rb
│       │   ├── realwin_scpc_initialize_rf.rb
│       │   ├── realwin_scpc_txtevent.rb
│       │   ├── scadapro_cmdexe.rb
│       │   ├── sunway_force_control_netdbsrv.rb
│       │   ├── winlog_runtime_2.rb
│       │   ├── winlog_runtime.rb
│       │   ├── yokogawa_bkbcopyd_bof.rb
│       │   ├── yokogawa_bkesimmgr_bof.rb
│       │   ├── yokogawa_bkfsim_vhfd.rb
│       │   └── yokogawa_bkhodeq_bof.rb
│       ├── sip
│       │   ├── aim_triton_cseq.rb
│       │   ├── sipxezphone_cseq.rb
│       │   └── sipxphone_cseq.rb
│       ├── smb
│       │   ├── generic_smb_dll_injection.rb
│       │   ├── group_policy_startup.rb
│       │   ├── ipass_pipe_exec.rb
│       │   ├── ms03_049_netapi.rb
│       │   ├── ms04_007_killbill.rb
│       │   ├── ms04_011_lsass.rb
│       │   ├── ms04_031_netdde.rb
│       │   ├── ms05_039_pnp.rb
│       │   ├── ms06_025_rasmans_reg.rb
│       │   ├── ms06_025_rras.rb
│       │   ├── ms06_040_netapi.rb
│       │   ├── ms06_066_nwapi.rb
│       │   ├── ms06_066_nwwks.rb
│       │   ├── ms06_070_wkssvc.rb
│       │   ├── ms07_029_msdns_zonename.rb
│       │   ├── ms08_067_netapi.rb
│       │   ├── ms09_050_smb2_negotiate_func_index.rb
│       │   ├── ms10_046_shortcut_icon_dllloader.rb
│       │   ├── ms10_061_spoolss.rb
│       │   ├── ms15_020_shortcut_icon_dllloader.rb
│       │   ├── netidentity_xtierrpcpipe.rb
│       │   ├── psexec_psh.rb
│       │   ├── psexec.rb
│       │   ├── smb_delivery.rb
│       │   ├── smb_relay.rb
│       │   └── timbuktu_plughntcommand_bof.rb
│       ├── smtp
│       │   ├── mailcarrier_smtp_ehlo.rb
│       │   ├── mercury_cram_md5.rb
│       │   ├── ms03_046_exchange2000_xexch50.rb
│       │   ├── njstar_smtp_bof.rb
│       │   ├── sysgauge_client_bof.rb
│       │   ├── wmailserver.rb
│       │   └── ypops_overflow1.rb
│       ├── ssh
│       │   ├── freeftpd_key_exchange.rb
│       │   ├── freesshd_authbypass.rb
│       │   ├── freesshd_key_exchange.rb
│       │   ├── putty_msg_debug.rb
│       │   ├── securecrt_ssh1.rb
│       │   └── sysax_ssh_username.rb
│       ├── ssl
│       │   └── ms04_011_pct.rb
│       ├── telnet
│       │   ├── gamsoft_telsrv_username.rb
│       │   └── goodtech_telnet.rb
│       ├── tftp
│       │   ├── attftp_long_filename.rb
│       │   ├── distinct_tftp_traversal.rb
│       │   ├── dlink_long_filename.rb
│       │   ├── futuresoft_transfermode.rb
│       │   ├── netdecision_tftp_traversal.rb
│       │   ├── opentftp_error_code.rb
│       │   ├── quick_tftp_pro_mode.rb
│       │   ├── tftpd32_long_filename.rb
│       │   ├── tftpdwin_long_filename.rb
│       │   ├── tftpserver_wrq_bof.rb
│       │   └── threectftpsvc_long_mode.rb
│       ├── unicenter
│       │   └── cam_log_security.rb
│       ├── vnc
│       │   ├── realvnc_client.rb
│       │   ├── ultravnc_client.rb
│       │   ├── ultravnc_viewer_bof.rb
│       │   └── winvnc_http_get.rb
│       ├── vpn
│       │   └── safenet_ike_11.rb
│       ├── winrm
│       │   └── winrm_script_exec.rb
│       └── wins
│           └── ms04_045_wins.rb
├── nops
│   ├── armle
│   │   └── simple.rb
│   ├── mipsbe
│   │   └── better.rb
│   ├── php
│   │   └── generic.rb
│   ├── ppc
│   │   └── simple.rb
│   ├── sparc
│   │   └── random.rb
│   ├── tty
│   │   └── generic.rb
│   ├── x64
│   │   └── simple.rb
│   └── x86
│       ├── opty2.rb
│       └── single_byte.rb
├── payloads
│   ├── singles
│   │   ├── aix
│   │   │   └── ppc
│   │   │       ├── shell_bind_tcp.rb
│   │   │       ├── shell_find_port.rb
│   │   │       ├── shell_interact.rb
│   │   │       └── shell_reverse_tcp.rb
│   │   ├── android
│   │   │   ├── meterpreter_reverse_http.rb
│   │   │   ├── meterpreter_reverse_https.rb
│   │   │   └── meterpreter_reverse_tcp.rb
│   │   ├── bsd
│   │   │   ├── sparc
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── x64
│   │   │   │   ├── exec.rb
│   │   │   │   ├── shell_bind_ipv6_tcp.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_bind_tcp_small.rb
│   │   │   │   ├── shell_reverse_ipv6_tcp.rb
│   │   │   │   ├── shell_reverse_tcp.rb
│   │   │   │   └── shell_reverse_tcp_small.rb
│   │   │   └── x86
│   │   │       ├── exec.rb
│   │   │       ├── metsvc_bind_tcp.rb
│   │   │       ├── metsvc_reverse_tcp.rb
│   │   │       ├── shell_bind_tcp_ipv6.rb
│   │   │       ├── shell_bind_tcp.rb
│   │   │       ├── shell_find_port.rb
│   │   │       ├── shell_find_tag.rb
│   │   │       ├── shell_reverse_tcp_ipv6.rb
│   │   │       └── shell_reverse_tcp.rb
│   │   ├── bsdi
│   │   │   └── x86
│   │   │       ├── shell_bind_tcp.rb
│   │   │       ├── shell_find_port.rb
│   │   │       └── shell_reverse_tcp.rb
│   │   ├── cmd
│   │   │   ├── mainframe
│   │   │   │   ├── generic_jcl.rb
│   │   │   │   └── reverse_shell_jcl.rb
│   │   │   ├── unix
│   │   │   │   ├── bind_awk.rb
│   │   │   │   ├── bind_inetd.rb
│   │   │   │   ├── bind_lua.rb
│   │   │   │   ├── bind_netcat_gaping_ipv6.rb
│   │   │   │   ├── bind_netcat_gaping.rb
│   │   │   │   ├── bind_netcat.rb
│   │   │   │   ├── bind_nodejs.rb
│   │   │   │   ├── bind_perl_ipv6.rb
│   │   │   │   ├── bind_perl.rb
│   │   │   │   ├── bind_ruby_ipv6.rb
│   │   │   │   ├── bind_ruby.rb
│   │   │   │   ├── bind_zsh.rb
│   │   │   │   ├── generic.rb
│   │   │   │   ├── interact.rb
│   │   │   │   ├── reverse_awk.rb
│   │   │   │   ├── reverse_bash.rb
│   │   │   │   ├── reverse_bash_telnet_ssl.rb
│   │   │   │   ├── reverse_lua.rb
│   │   │   │   ├── reverse_netcat_gaping.rb
│   │   │   │   ├── reverse_netcat.rb
│   │   │   │   ├── reverse_nodejs.rb
│   │   │   │   ├── reverse_openssl.rb
│   │   │   │   ├── reverse_perl.rb
│   │   │   │   ├── reverse_perl_ssl.rb
│   │   │   │   ├── reverse_php_ssl.rb
│   │   │   │   ├── reverse_python.rb
│   │   │   │   ├── reverse_python_ssl.rb
│   │   │   │   ├── reverse.rb
│   │   │   │   ├── reverse_ruby.rb
│   │   │   │   ├── reverse_ruby_ssl.rb
│   │   │   │   ├── reverse_ssl_double_telnet.rb
│   │   │   │   └── reverse_zsh.rb
│   │   │   └── windows
│   │   │       ├── adduser.rb
│   │   │       ├── bind_lua.rb
│   │   │       ├── bind_perl_ipv6.rb
│   │   │       ├── bind_perl.rb
│   │   │       ├── bind_ruby.rb
│   │   │       ├── download_eval_vbs.rb
│   │   │       ├── download_exec_vbs.rb
│   │   │       ├── generic.rb
│   │   │       ├── powershell_bind_tcp.rb
│   │   │       ├── powershell_reverse_tcp.rb
│   │   │       ├── reverse_lua.rb
│   │   │       ├── reverse_perl.rb
│   │   │       ├── reverse_powershell.rb
│   │   │       └── reverse_ruby.rb
│   │   ├── firefox
│   │   │   ├── exec.rb
│   │   │   ├── shell_bind_tcp.rb
│   │   │   └── shell_reverse_tcp.rb
│   │   ├── generic
│   │   │   ├── custom.rb
│   │   │   ├── debug_trap.rb
│   │   │   ├── shell_bind_tcp.rb
│   │   │   ├── shell_reverse_tcp.rb
│   │   │   └── tight_loop.rb
│   │   ├── java
│   │   │   ├── jsp_shell_bind_tcp.rb
│   │   │   ├── jsp_shell_reverse_tcp.rb
│   │   │   └── shell_reverse_tcp.rb
│   │   ├── linux
│   │   │   ├── aarch64
│   │   │   │   └── mettle_reverse_tcp.rb
│   │   │   ├── armbe
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   └── shell_bind_tcp.rb
│   │   │   ├── armle
│   │   │   │   ├── adduser.rb
│   │   │   │   ├── exec.rb
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── mips64
│   │   │   │   └── mettle_reverse_tcp.rb
│   │   │   ├── mipsbe
│   │   │   │   ├── exec.rb
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── reboot.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── mipsle
│   │   │   │   ├── exec.rb
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── reboot.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── ppc
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_port.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── ppc64
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_port.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── ppc64le
│   │   │   │   └── mettle_reverse_tcp.rb
│   │   │   ├── x64
│   │   │   │   ├── exec.rb
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── shell_bind_tcp_random_port.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_port.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── x86
│   │   │   │   ├── adduser.rb
│   │   │   │   ├── chmod.rb
│   │   │   │   ├── exec.rb
│   │   │   │   ├── metsvc_bind_tcp.rb
│   │   │   │   ├── metsvc_reverse_tcp.rb
│   │   │   │   ├── mettle_reverse_tcp.rb
│   │   │   │   ├── read_file.rb
│   │   │   │   ├── shell_bind_ipv6_tcp.rb
│   │   │   │   ├── shell_bind_tcp_random_port.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_port.rb
│   │   │   │   ├── shell_find_tag.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   └── zarch
│   │   │       └── mettle_reverse_tcp.rb
│   │   ├── mainframe
│   │   │   └── shell_reverse_tcp.rb
│   │   ├── nodejs
│   │   │   ├── shell_bind_tcp.rb
│   │   │   ├── shell_reverse_tcp.rb
│   │   │   └── shell_reverse_tcp_ssl.rb
│   │   ├── osx
│   │   │   ├── armle
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_reverse_tcp.rb
│   │   │   │   └── vibrate.rb
│   │   │   ├── ppc
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   ├── x64
│   │   │   │   ├── exec.rb
│   │   │   │   ├── say.rb
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_tag.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   └── x86
│   │   │       ├── exec.rb
│   │   │       ├── shell_bind_tcp.rb
│   │   │       ├── shell_find_port.rb
│   │   │       ├── shell_reverse_tcp.rb
│   │   │       ├── vforkshell_bind_tcp.rb
│   │   │       └── vforkshell_reverse_tcp.rb
│   │   ├── php
│   │   │   ├── bind_perl_ipv6.rb
│   │   │   ├── bind_perl.rb
│   │   │   ├── bind_php_ipv6.rb
│   │   │   ├── bind_php.rb
│   │   │   ├── download_exec.rb
│   │   │   ├── exec.rb
│   │   │   ├── meterpreter_reverse_tcp.rb
│   │   │   ├── reverse_perl.rb
│   │   │   ├── reverse_php.rb
│   │   │   └── shell_findsock.rb
│   │   ├── python
│   │   │   ├── meterpreter_bind_tcp.rb
│   │   │   ├── meterpreter_reverse_http.rb
│   │   │   ├── meterpreter_reverse_https.rb
│   │   │   ├── meterpreter_reverse_tcp.rb
│   │   │   ├── shell_reverse_tcp.rb
│   │   │   └── shell_reverse_tcp_ssl.rb
│   │   ├── ruby
│   │   │   ├── shell_bind_tcp_ipv6.rb
│   │   │   ├── shell_bind_tcp.rb
│   │   │   ├── shell_reverse_tcp.rb
│   │   │   └── shell_reverse_tcp_ssl.rb
│   │   ├── solaris
│   │   │   ├── sparc
│   │   │   │   ├── shell_bind_tcp.rb
│   │   │   │   ├── shell_find_port.rb
│   │   │   │   └── shell_reverse_tcp.rb
│   │   │   └── x86
│   │   │       ├── shell_bind_tcp.rb
│   │   │       ├── shell_find_port.rb
│   │   │       └── shell_reverse_tcp.rb
│   │   ├── tty
│   │   │   └── unix
│   │   │       └── interact.rb
│   │   └── windows
│   │       ├── adduser.rb
│   │       ├── dns_txt_query_exec.rb
│   │       ├── download_exec.rb
│   │       ├── exec.rb
│   │       ├── format_all_drives.rb
│   │       ├── loadlibrary.rb
│   │       ├── messagebox.rb
│   │       ├── meterpreter_bind_tcp.rb
│   │       ├── meterpreter_reverse_http.rb
│   │       ├── meterpreter_reverse_https.rb
│   │       ├── meterpreter_reverse_ipv6_tcp.rb
│   │       ├── meterpreter_reverse_tcp.rb
│   │       ├── metsvc_bind_tcp.rb
│   │       ├── metsvc_reverse_tcp.rb
│   │       ├── powershell_bind_tcp.rb
│   │       ├── powershell_reverse_tcp.rb
│   │       ├── shell_bind_tcp.rb
│   │       ├── shell_bind_tcp_xpfw.rb
│   │       ├── shell_hidden_bind_tcp.rb
│   │       ├── shell_reverse_tcp.rb
│   │       ├── speak_pwned.rb
│   │       └── x64
│   │           ├── exec.rb
│   │           ├── loadlibrary.rb
│   │           ├── meterpreter_bind_tcp.rb
│   │           ├── meterpreter_reverse_http.rb
│   │           ├── meterpreter_reverse_https.rb
│   │           ├── meterpreter_reverse_ipv6_tcp.rb
│   │           ├── meterpreter_reverse_tcp.rb
│   │           ├── powershell_bind_tcp.rb
│   │           ├── powershell_reverse_tcp.rb
│   │           ├── shell_bind_tcp.rb
│   │           └── shell_reverse_tcp.rb
│   ├── stagers
│   │   ├── android
│   │   │   ├── reverse_http.rb
│   │   │   ├── reverse_https.rb
│   │   │   └── reverse_tcp.rb
│   │   ├── bsd
│   │   │   └── x86
│   │   │       ├── bind_ipv6_tcp.rb
│   │   │       ├── bind_tcp.rb
│   │   │       ├── find_tag.rb
│   │   │       ├── reverse_ipv6_tcp.rb
│   │   │       └── reverse_tcp.rb
│   │   ├── bsdi
│   │   │   └── x86
│   │   │       ├── bind_tcp.rb
│   │   │       └── reverse_tcp.rb
│   │   ├── java
│   │   │   ├── bind_tcp.rb
│   │   │   ├── reverse_http.rb
│   │   │   ├── reverse_https.rb
│   │   │   └── reverse_tcp.rb
│   │   ├── linux
│   │   │   ├── armle
│   │   │   │   ├── bind_tcp.rb
│   │   │   │   └── reverse_tcp.rb
│   │   │   ├── mipsbe
│   │   │   │   └── reverse_tcp.rb
│   │   │   ├── mipsle
│   │   │   │   └── reverse_tcp.rb
│   │   │   ├── x64
│   │   │   │   ├── bind_tcp.rb
│   │   │   │   └── reverse_tcp.rb
│   │   │   └── x86
│   │   │       ├── bind_ipv6_tcp.rb
│   │   │       ├── bind_ipv6_tcp_uuid.rb
│   │   │       ├── bind_nonx_tcp.rb
│   │   │       ├── bind_tcp.rb
│   │   │       ├── bind_tcp_uuid.rb
│   │   │       ├── find_tag.rb
│   │   │       ├── reverse_ipv6_tcp.rb
│   │   │       ├── reverse_nonx_tcp.rb
│   │   │       ├── reverse_tcp.rb
│   │   │       └── reverse_tcp_uuid.rb
│   │   ├── multi
│   │   │   ├── reverse_http.rb
│   │   │   └── reverse_https.rb
│   │   ├── netware
│   │   │   └── reverse_tcp.rb
│   │   ├── osx
│   │   │   ├── armle
│   │   │   │   ├── bind_tcp.rb
│   │   │   │   └── reverse_tcp.rb
│   │   │   ├── ppc
│   │   │   │   ├── bind_tcp.rb
│   │   │   │   ├── find_tag.rb
│   │   │   │   └── reverse_tcp.rb
│   │   │   ├── x64
│   │   │   │   ├── bind_tcp.rb
│   │   │   │   └── reverse_tcp.rb
│   │   │   └── x86
│   │   │       ├── bind_tcp.rb
│   │   │       └── reverse_tcp.rb
│   │   ├── php
│   │   │   ├── bind_tcp_ipv6.rb
│   │   │   ├── bind_tcp_ipv6_uuid.rb
│   │   │   ├── bind_tcp.rb
│   │   │   ├── bind_tcp_uuid.rb
│   │   │   ├── reverse_tcp.rb
│   │   │   └── reverse_tcp_uuid.rb
│   │   ├── python
│   │   │   ├── bind_tcp.rb
│   │   │   ├── bind_tcp_uuid.rb
│   │   │   ├── reverse_http.rb
│   │   │   ├── reverse_https.rb
│   │   │   ├── reverse_tcp.rb
│   │   │   ├── reverse_tcp_ssl.rb
│   │   │   └── reverse_tcp_uuid.rb
│   │   └── windows
│   │       ├── bind_hidden_ipknock_tcp.rb
│   │       ├── bind_hidden_tcp.rb
│   │       ├── bind_ipv6_tcp.rb
│   │       ├── bind_ipv6_tcp_uuid.rb
│   │       ├── bind_nonx_tcp.rb
│   │       ├── bind_tcp.rb
│   │       ├── bind_tcp_rc4.rb
│   │       ├── bind_tcp_uuid.rb
│   │       ├── findtag_ord.rb
│   │       ├── reverse_hop_http.rb
│   │       ├── reverse_http_proxy_pstore.rb
│   │       ├── reverse_http.rb
│   │       ├── reverse_https_proxy.rb
│   │       ├── reverse_https.rb
│   │       ├── reverse_ipv6_tcp.rb
│   │       ├── reverse_nonx_tcp.rb
│   │       ├── reverse_ord_tcp.rb
│   │       ├── reverse_tcp_allports.rb
│   │       ├── reverse_tcp_dns.rb
│   │       ├── reverse_tcp.rb
│   │       ├── reverse_tcp_rc4_dns.rb
│   │       ├── reverse_tcp_rc4.rb
│   │       ├── reverse_tcp_uuid.rb
│   │       ├── reverse_winhttp.rb
│   │       ├── reverse_winhttps.rb
│   │       └── x64
│   │           ├── bind_ipv6_tcp.rb
│   │           ├── bind_ipv6_tcp_uuid.rb
│   │           ├── bind_tcp.rb
│   │           ├── bind_tcp_uuid.rb
│   │           ├── reverse_http.rb
│   │           ├── reverse_https.rb
│   │           ├── reverse_tcp.rb
│   │           ├── reverse_tcp_uuid.rb
│   │           ├── reverse_winhttp.rb
│   │           └── reverse_winhttps.rb
│   └── stages
│       ├── android
│       │   ├── meterpreter.rb
│       │   └── shell.rb
│       ├── bsd
│       │   └── x86
│       │       └── shell.rb
│       ├── bsdi
│       │   └── x86
│       │       └── shell.rb
│       ├── java
│       │   ├── meterpreter.rb
│       │   └── shell.rb
│       ├── linux
│       │   ├── armle
│       │   │   ├── mettle.rb
│       │   │   └── shell.rb
│       │   ├── mipsbe
│       │   │   ├── mettle.rb
│       │   │   └── shell.rb
│       │   ├── mipsle
│       │   │   ├── mettle.rb
│       │   │   └── shell.rb
│       │   ├── x64
│       │   │   ├── mettle.rb
│       │   │   └── shell.rb
│       │   └── x86
│       │       ├── meterpreter.rb
│       │       ├── mettle.rb
│       │       └── shell.rb
│       ├── multi
│       │   └── meterpreter.rb
│       ├── netware
│       │   └── shell.rb
│       ├── osx
│       │   ├── armle
│       │   │   ├── execute.rb
│       │   │   └── shell.rb
│       │   ├── ppc
│       │   │   └── shell.rb
│       │   ├── x64
│       │   │   └── dupandexecve.rb
│       │   └── x86
│       │       ├── bundleinject.rb
│       │       ├── isight.rb
│       │       └── vforkshell.rb
│       ├── php
│       │   └── meterpreter.rb
│       ├── python
│       │   └── meterpreter.rb
│       └── windows
│           ├── dllinject.rb
│           ├── meterpreter.rb
│           ├── patchupdllinject.rb
│           ├── patchupmeterpreter.rb
│           ├── shell.rb
│           ├── upexec.rb
│           ├── vncinject.rb
│           └── x64
│               ├── meterpreter.rb
│               ├── shell.rb
│               └── vncinject.rb
└── post
    ├── aix
    │   └── hashdump.rb
    ├── android
    │   ├── capture
    │   │   └── screen.rb
    │   └── manage
    │       ├── remove_lock.rb
    │       └── remove_lock_root.rb
    ├── cisco
    │   └── gather
    │       └── enum_cisco.rb
    ├── firefox
    │   ├── gather
    │   │   ├── cookies.rb
    │   │   ├── history.rb
    │   │   ├── passwords.rb
    │   │   └── xss.rb
    │   └── manage
    │       └── webcam_chat.rb
    ├── hardware
    │   ├── automotive
    │   │   ├── getvinfo.rb
    │   │   ├── identifymodules.rb
    │   │   └── malibu_overheat.rb
    │   ├── rftransceiver
    │   │   ├── rfpwnon.rb
    │   │   └── transmitter.rb
    │   └── zigbee
    │       └── zstumbler.rb
    ├── linux
    │   ├── busybox
    │   │   ├── enum_connections.rb
    │   │   ├── enum_hosts.rb
    │   │   ├── jailbreak.rb
    │   │   ├── ping_net.rb
    │   │   ├── set_dmz.rb
    │   │   ├── set_dns.rb
    │   │   ├── smb_share_root.rb
    │   │   └── wget_exec.rb
    │   ├── dos
    │   │   └── xen_420_dos.rb
    │   ├── gather
    │   │   ├── checkvm.rb
    │   │   ├── ecryptfs_creds.rb
    │   │   ├── enum_configs.rb
    │   │   ├── enum_network.rb
    │   │   ├── enum_protections.rb
    │   │   ├── enum_psk.rb
    │   │   ├── enum_system.rb
    │   │   ├── enum_users_history.rb
    │   │   ├── enum_xchat.rb
    │   │   ├── gnome_commander_creds.rb
    │   │   ├── hashdump.rb
    │   │   ├── mount_cifs_creds.rb
    │   │   ├── openvpn_credentials.rb
    │   │   └── pptpd_chap_secrets.rb
    │   └── manage
    │       ├── download_exec.rb
    │       └── sshkey_persistence.rb
    ├── multi
    │   ├── escalate
    │   │   ├── aws_create_iam_user.rb
    │   │   ├── cups_root_file_read.rb
    │   │   └── metasploit_pcaplog.rb
    │   ├── gather
    │   │   ├── apple_ios_backup.rb
    │   │   ├── aws_ec2_instance_metadata.rb
    │   │   ├── aws_keys.rb
    │   │   ├── check_malware.rb
    │   │   ├── dbvis_enum.rb
    │   │   ├── dns_bruteforce.rb
    │   │   ├── dns_reverse_lookup.rb
    │   │   ├── dns_srv_lookup.rb
    │   │   ├── enum_vbox.rb
    │   │   ├── env.rb
    │   │   ├── fetchmailrc_creds.rb
    │   │   ├── filezilla_client_cred.rb
    │   │   ├── find_vmx.rb
    │   │   ├── firefox_creds.rb
    │   │   ├── gpg_creds.rb
    │   │   ├── irssi_creds.rb
    │   │   ├── lastpass_creds.rb
    │   │   ├── multi_command.rb
    │   │   ├── netrc_creds.rb
    │   │   ├── pgpass_creds.rb
    │   │   ├── pidgin_cred.rb
    │   │   ├── ping_sweep.rb
    │   │   ├── remmina_creds.rb
    │   │   ├── resolve_hosts.rb
    │   │   ├── rsyncd_creds.rb
    │   │   ├── rubygems_api_key.rb
    │   │   ├── run_console_rc_file.rb
    │   │   ├── skype_enum.rb
    │   │   ├── ssh_creds.rb
    │   │   ├── thunderbird_creds.rb
    │   │   ├── tomcat_gather.rb
    │   │   └── wlan_geolocate.rb
    │   ├── general
    │   │   ├── close.rb
    │   │   ├── execute.rb
    │   │   └── wall.rb
    │   ├── manage
    │   │   ├── dbvis_add_db_admin.rb
    │   │   ├── dbvis_query.rb
    │   │   ├── multi_post.rb
    │   │   ├── play_youtube.rb
    │   │   ├── record_mic.rb
    │   │   ├── set_wallpaper.rb
    │   │   ├── shell_to_meterpreter.rb
    │   │   ├── sudo.rb
    │   │   ├── system_session.rb
    │   │   └── zip.rb
    │   └── recon
    │       ├── local_exploit_suggester.rb
    │       └── multiport_egress_traffic.rb
    ├── osx
    │   ├── admin
    │   │   └── say.rb
    │   ├── capture
    │   │   ├── keylog_recorder.rb
    │   │   └── screen.rb
    │   ├── gather
    │   │   ├── autologin_password.rb
    │   │   ├── enum_adium.rb
    │   │   ├── enum_airport.rb
    │   │   ├── enum_chicken_vnc_profile.rb
    │   │   ├── enum_colloquy.rb
    │   │   ├── enum_keychain.rb
    │   │   ├── enum_messages.rb
    │   │   ├── enum_osx.rb
    │   │   ├── hashdump.rb
    │   │   ├── password_prompt_spoof.rb
    │   │   └── safari_lastsession.rb
    │   └── manage
    │       ├── mount_share.rb
    │       ├── record_mic.rb
    │       ├── vpn.rb
    │       └── webcam.rb
    ├── solaris
    │   └── gather
    │       ├── checkvm.rb
    │       ├── enum_packages.rb
    │       ├── enum_services.rb
    │       └── hashdump.rb
    └── windows
        ├── capture
        │   ├── keylog_recorder.rb
        │   └── lockout_keylogger.rb
        ├── escalate
        │   ├── droplnk.rb
        │   ├── getsystem.rb
        │   ├── golden_ticket.rb
        │   ├── ms10_073_kbdlayout.rb
        │   └── screen_unlock.rb
        ├── gather
        │   ├── ad_to_sqlite.rb
        │   ├── arp_scanner.rb
        │   ├── bitcoin_jacker.rb
        │   ├── bitlocker_fvek.rb
        │   ├── cachedump.rb
        │   ├── checkvm.rb
        │   ├── credentials
        │   │   ├── avira_password.rb
        │   │   ├── bulletproof_ftp.rb
        │   │   ├── coreftp.rb
        │   │   ├── credential_collector.rb
        │   │   ├── domain_hashdump.rb
        │   │   ├── dynazip_log.rb
        │   │   ├── dyndns.rb
        │   │   ├── enum_cred_store.rb
        │   │   ├── enum_laps.rb
        │   │   ├── enum_picasa_pwds.rb
        │   │   ├── epo_sql.rb
        │   │   ├── filezilla_server.rb
        │   │   ├── flashfxp.rb
        │   │   ├── ftpnavigator.rb
        │   │   ├── ftpx.rb
        │   │   ├── gpp.rb
        │   │   ├── heidisql.rb
        │   │   ├── idm.rb
        │   │   ├── imail.rb
        │   │   ├── imvu.rb
        │   │   ├── mcafee_vse_hashdump.rb
        │   │   ├── mdaemon_cred_collector.rb
        │   │   ├── meebo.rb
        │   │   ├── mremote.rb
        │   │   ├── mssql_local_hashdump.rb
        │   │   ├── nimbuzz.rb
        │   │   ├── outlook.rb
        │   │   ├── razer_synapse.rb
        │   │   ├── razorsql.rb
        │   │   ├── rdc_manager_creds.rb
        │   │   ├── skype.rb
        │   │   ├── smartermail.rb
        │   │   ├── smartftp.rb
        │   │   ├── spark_im.rb
        │   │   ├── sso.rb
        │   │   ├── steam.rb
        │   │   ├── tortoisesvn.rb
        │   │   ├── total_commander.rb
        │   │   ├── trillian.rb
        │   │   ├── vnc.rb
        │   │   ├── windows_autologin.rb
        │   │   ├── winscp.rb
        │   │   └── wsftp_client.rb
        │   ├── dnscache_dump.rb
        │   ├── dumplinks.rb
        │   ├── enum_ad_bitlocker.rb
        │   ├── enum_ad_computers.rb
        │   ├── enum_ad_groups.rb
        │   ├── enum_ad_managedby_groups.rb
        │   ├── enum_ad_service_principal_names.rb
        │   ├── enum_ad_to_wordlist.rb
        │   ├── enum_ad_user_comments.rb
        │   ├── enum_ad_users.rb
        │   ├── enum_applications.rb
        │   ├── enum_artifacts.rb
        │   ├── enum_av_excluded.rb
        │   ├── enum_chrome.rb
        │   ├── enum_computers.rb
        │   ├── enum_db.rb
        │   ├── enum_devices.rb
        │   ├── enum_dirperms.rb
        │   ├── enum_domain_group_users.rb
        │   ├── enum_domain.rb
        │   ├── enum_domains.rb
        │   ├── enum_domain_tokens.rb
        │   ├── enum_domain_users.rb
        │   ├── enum_emet.rb
        │   ├── enum_files.rb
        │   ├── enum_hostfile.rb
        │   ├── enum_ie.rb
        │   ├── enum_logged_on_users.rb
        │   ├── enum_ms_product_keys.rb
        │   ├── enum_muicache.rb
        │   ├── enum_patches.rb
        │   ├── enum_powershell_env.rb
        │   ├── enum_prefetch.rb
        │   ├── enum_proxy.rb
        │   ├── enum_putty_saved_sessions.rb
        │   ├── enum_services.rb
        │   ├── enum_shares.rb
        │   ├── enum_snmp.rb
        │   ├── enum_termserv.rb
        │   ├── enum_tokens.rb
        │   ├── enum_tomcat.rb
        │   ├── enum_trusted_locations.rb
        │   ├── enum_unattend.rb
        │   ├── file_from_raw_ntfs.rb
        │   ├── forensics
        │   │   ├── browser_history.rb
        │   │   ├── duqu_check.rb
        │   │   ├── enum_drives.rb
        │   │   ├── imager.rb
        │   │   ├── nbd_server.rb
        │   │   └── recovery_files.rb
        │   ├── hashdump.rb
        │   ├── local_admin_search_enum.rb
        │   ├── lsa_secrets.rb
        │   ├── make_csv_orgchart.rb
        │   ├── memory_grep.rb
        │   ├── netlm_downgrade.rb
        │   ├── ntds_location.rb
        │   ├── outlook.rb
        │   ├── phish_windows_credentials.rb
        │   ├── resolve_sid.rb
        │   ├── reverse_lookup.rb
        │   ├── screen_spy.rb
        │   ├── smart_hashdump.rb
        │   ├── tcpnetstat.rb
        │   ├── usb_history.rb
        │   ├── win_privs.rb
        │   ├── wmic_command.rb
        │   └── word_unc_injector.rb
        ├── manage
        │   ├── add_user_domain.rb
        │   ├── archmigrate.md
        │   ├── archmigrate.rb
        │   ├── autoroute.rb
        │   ├── change_password.rb
        │   ├── clone_proxy_settings.rb
        │   ├── delete_user.rb
        │   ├── download_exec.rb
        │   ├── driver_loader.rb
        │   ├── enable_rdp.rb
        │   ├── enable_support_account.rb
        │   ├── exec_powershell.rb
        │   ├── forward_pageant.rb
        │   ├── hashcarve.rb
        │   ├── ie_proxypac.rb
        │   ├── inject_ca.rb
        │   ├── inject_host.rb
        │   ├── killav.rb
        │   ├── migrate.rb
        │   ├── mssql_local_auth_bypass.rb
        │   ├── multi_meterpreter_inject.rb
        │   ├── nbd_server.rb
        │   ├── payload_inject.rb
        │   ├── persistence_exe.rb
        │   ├── portproxy.rb
        │   ├── powershell
        │   │   ├── build_net_code.rb
        │   │   ├── exec_powershell.rb
        │   │   └── load_script.rb
        │   ├── pptp_tunnel.rb
        │   ├── priv_migrate.rb
        │   ├── pxeexploit.rb
        │   ├── reflective_dll_inject.rb
        │   ├── remove_ca.rb
        │   ├── remove_host.rb
        │   ├── rpcapd_start.rb
        │   ├── run_as_psh.rb
        │   ├── run_as.rb
        │   ├── sdel.rb
        │   ├── sticky_keys.rb
        │   ├── vss_create.rb
        │   ├── vss_list.rb
        │   ├── vss_mount.rb
        │   ├── vss_set_storage.rb
        │   ├── vss_storage.rb
        │   ├── wdigest_caching.rb
        │   └── webcam.rb
        ├── recon
        │   ├── computer_browser_discovery.rb
        │   ├── outbound_ports.rb
        │   └── resolve_ip.rb
        └── wlan
            ├── wlan_bss_list.rb
            ├── wlan_current_connection.rb
            ├── wlan_disconnect.rb
            └── wlan_profile.rb

509 directories, 3263 files
```