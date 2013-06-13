<?php
#This is a simple script, it just modifies a standard iPCU-file based on HTML POST-input and gives it to the client browser.
$IMAP_SERVER = 'zimbra.local';
$SMTP_SERVER = 'zimbra.local';
$CAL_SERVER = 'zimbra.local';
$CARD_SERVER = 'zimbra.local';

$IMAP_PORT = '993';
$SMTP_PORT = '465';
$HTTP_MODE = 'https';
$PORTS_ARE_SSL= 'true';

$COMPANY_NAME = 'MyCompany';
$DESCRIBE_NAME = 'MyZimbraService';
$WEBSITE = 'http://mywebsite.local':


#The following XML-file was generated using Apples iPhone Configuration Utility:
$data = '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
<plist version="1.0">
<dict>
        <key>ConsentText</key>
        <dict>
                <key>default</key>
                <string>Sets up '.echo $DESCRIBE_NAME.'.</string>
        </dict>
        <key>PayloadContent</key>
        <array>
                <dict>
                        <key>EmailAccountDescription</key>
                        <string>'.echo $DESCRIBE_NAME.' IMAP %DESCRIPTION%</string>
                        <key>EmailAccountType</key>
                        <string>EmailTypeIMAP</string>
                        <key>EmailAddress</key>
                        <string>%EMAIL%</string>
                        <key>IncomingMailServerAuthentication</key>
                        <string>EmailAuthPassword</string>
                        <key>IncomingMailServerHostName</key>
                        <string>'.echo $IMAP_SERVER.'</string>
                        <key>IncomingMailServerPortNumber</key>
                        <integer>'.echo $IMAP_PORT.'</integer>
                        <key>IncomingMailServerUseSSL</key>
                        <'.echo $PORTS_ARE_SSL.'/>
                        <key>IncomingMailServerUsername</key>
                        <string>%EMAIL%</string>
                        <key>IncomingPassword</key>
                        <string>%PASSWORD%</string>
                        <key>OutgoingMailServerAuthentication</key>
                        <string>EmailAuthPassword</string>
                        <key>OutgoingMailServerHostName</key>
                        <string>'.echo $SMTP_SERVER.'</string>
                        <key>OutgoingMailServerPortNumber</key>
                        <integer>'.echo $SMTP_PORT.'</integer>
                        <key>OutgoingMailServerUseSSL</key>
                        <'.echo $PORTS_ARE_SSL.'/>
                        <key>OutgoingMailServerUsername</key>
                        <string>%EMAIL%</string>
                        <key>OutgoingPasswordSameAsIncomingPassword</key>
                        <true/>
                        <key>PayloadDescription</key>
                        <string>Configures email account.</string>
                        <key>PayloadDisplayName</key>
                        <string>'.echo $DESCRIBE_NAME.' %DESCRIPTION%</string>
                        <key>PayloadIdentifier</key>
                        <string>com.mail.%DESCRIPTION%.email1</string>
                        <key>PayloadOrganization</key>
                        <string>'.echo $COMPANY_NAME.'</string>
                        <key>PayloadType</key>
                        <string>com.apple.mail.managed</string>
                        <key>PayloadUUID</key>
                        <string>F38922FD-%DESCRIPTION%-471A-9347-9E938144E8D4</string>
                        <key>PayloadVersion</key>
                        <integer>1</integer>
                        <key>PreventAppSheet</key>
                        <false/>
                        <key>PreventMove</key>
                        <false/>
                        <key>SMIMEEnabled</key>
                        <false/>
                        <key>disableMailRecentsSyncing</key>
                        <false/>
                </dict>
                <dict>
                        <key>CalDAVAccountDescription</key>
                        <string>'.echo $DESCRIBE_NAME.' Calendar %DESCRIPTION%</string>
                        <key>CalDAVHostName</key>
                        <string>'.echo $CAL_SERVER.'/string>
                        <key>CalDAVPassword</key>
                        <string>%PASSWORD%</string>
                        <key>CalDAVPort</key>
                        <integer>'.echo $SMTP_PORT.'</integer>
                        <key>CalDAVPrincipalURL</key>
                        <string>'.echo $HTTP_MODE.'://'.echo $CAL_SERVER.'/principals/users/%EMAIL%/</string>
                        <key>CalDAVUseSSL</key>
                        <'.echo $PORTS_ARE_SSL.'/>
                        <key>CalDAVUsername</key>
                        <string>%EMAIL%</string>
                        <key>PayloadDescription</key>
                        <string>Configures CalDAV account.</string>
                        <key>PayloadDisplayName</key>
                        <string>CalDAV ('.echo $DESCRIBE_NAME.' CAL)</string>
                        <key>PayloadIdentifier</key>
                        <string>com.mail.%DESCRIPTION%.caldav2</string>
                        <key>PayloadOrganization</key>
                        <string>'.echo $COMPANY_NAME.'</string>
                        <key>PayloadType</key>
                        <string>com.apple.caldav.account</string>
                        <key>PayloadUUID</key>
                        <string>EB0BA3EB-%DESCRIPTION%-4164-97F5-1EA3840445C4</string>
                        <key>PayloadVersion</key>
                        <integer>1</integer>
                </dict>
                <dict>
                        <key>CardDAVAccountDescription</key>
                        <string>'.echo $DESCRIBE_NAME.' Contacts %DESCRIPTION%</string>
                        <key>CardDAVHostName</key>
                        <string>'.echo $CARD_SERVER.'</string>
                        <key>CardDAVPassword</key>
                        <string>%PASSWORD%</string>
                        <key>CardDAVPort</key>
                        <integer>443</integer>
                        <key>CardDAVPrincipalURL</key>
                        <string>'.echo $HTTP_MODE.'://'.echo $CARD_SERVER.'/principals/users/%EMAIL%/</string>
                        <key>CardDAVUseSSL</key>
                        <'.echo $PORTS_ARE_SSL.'/>
                        <key>CardDAVUsername</key>
                        <string>%EMAIL%</string>
                        <key>PayloadDescription</key>
                        <string>Configures CardDAV account.</string>
                        <key>PayloadDisplayName</key>
                        <string>CardDAV ('.echo $DESCRIBE_NAME.' Contacts) %DESCRIPTION%</string>
                        <key>PayloadIdentifier</key>
                        <string>com.mail.%DESCRIPTION%.carddav3</string>
                        <key>PayloadOrganization</key>
                        <string>'.echo $COMPANY_NAME.'</string>
                        <key>PayloadType</key>
                        <string>com.apple.carddav.account</string>
                        <key>PayloadUUID</key>
                        <string>76B461F1-%DESCRIPTION%-4006-97EA-391AE0D1D62B</string>
                        <key>PayloadVersion</key>
                        <integer>1</integer>
                </dict>
                <dict>
                        <key>FullScreen</key>
                        <true/>
                        <key>Icon</key>
                        <data>
                        </data>
                        <key>IsRemovable</key>
                        <false/>
                        <key>Label</key>
                        <string>'.echo $COMPANY_NAME.'</string>
                        <key>PayloadDescription</key>
                        <string>Adds a Web Clip.</string>
                        <key>PayloadDisplayName</key>
                        <string>Web Clip ('.echo $COMPANY_NAME.')</string>
                        <key>PayloadIdentifier</key>
                        <string>com.mail.%DESCRIPTION%.webclip4</string>
                        <key>PayloadOrganization</key>
                        <string>'.echo $COMPANY_NAME.' %DESCRIPTION%</string>
                        <key>PayloadType</key>
                        <string>com.apple.webClip.managed</string>
                        <key>PayloadUUID</key>
                        <string>6371432E-%DESCRIPTION%-4111-AE46-C23EDF4ADE9B</string>
                        <key>PayloadVersion</key>
                        <integer>1</integer>
                        <key>URL</key>
                        <string>'.echo $WEBSITE.'</string>
                </dict>
        </array>
        <key>PayloadDescription</key>
        <string>Detta ställer in ditt '.echo $DESCRIBE_NAME.'-konto på din enhet.</string>
        <key>PayloadDisplayName</key>
        <string>'.echo $DESCRIBE_NAME.' %DESCRIPTION%</string>
        <key>PayloadIdentifier</key>
        <string>com.mail.%DESCRIPTION%</string>
        <key>PayloadOrganization</key>
        <string>'.echo $COMPANY_NAME.' %DESCRIPTION%</string>
        <key>PayloadRemovalDisallowed</key>
        <false/>
        <key>PayloadType</key>
        <string>Configuration</string>
        <key>PayloadUUID</key>
        <string>E19075EE-%DESCRIPTION%-41A7-8514-2F0B5ABB3567</string>
        <key>PayloadVersion</key>
        <integer>1</integer>
</dict>
</plist>
';
#
#Configure what to replace (from POST):
$description = array_shift(explode('@', $_POST['email']));
$description = ucfirst(strtolower($description));
 $find ="%EMAIL%";
 $replace = $_POST['email'];

 $find2 ="%PASSWORD%";
 $replace2 = $_POST['password'];
 $find3 ="%DESCRIPTION%";
 $replace3 = $description;

#replace content
$run1=str_replace($find, $replace, $data);
$run2=str_replace ($find2, $replace2, $run1);
$run3=str_replace ($find3, $replace3, $run2);

#Let the download begin:
header("Content-type: plain/text");
header("Content-Disposition: attachment; filename='.echo $DESCRIBE_NAME.'AccountSetup.mobileconfig");
echo $run3;
 ?>

