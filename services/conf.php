<?php

class CONF {

    /* Flag for demo version */
    public $DEMO_VERSION = false;

    /* Data configuration for database */
    public $DB_SERVER   = "localhost";
    public $DB_USER     = "root";
    public $DB_PASSWORD = "shriGanesh@123";
    public $DB_NAME     = "markeet";

    /* FCM key for notification */
    public $FCM_KEY     = "AAAANNO9paw:APA91bEqUm0_vKH6NA4xxGK6NzN_nJ_Zzd4z-M9scT7M9hGdek8kbuT6lldPTlTeMlC8HEBs98fgwmhtpRyP4bGhmEUmp63OUoDlnclXKlkePMRTF52R2YzG4AEKLmDefpaWzH4FxJXs";


    /* [ IMPORTANT ] be careful when edit this security code, use AlphaNumeric only*/
    /* This string must be same with security code at Android, if its different android unable to submit order */
    public $SECURITY_CODE = "u6rqL2bGLwlBeQ7HAZg7GcCIjDJ96AXcpbApXl9IFnkJrj3vTIVp9o4UgUjMEeIW5gd6XCHooAFPKSclNQvX4qzeNYFSmW86nc5x";

    /* Mailer config ---------------------------------------------------- */

    // change with yours
    public $SMTP_EMAIL      = "sales@dotcorps.in";
    public $SMTP_PASSWORD   = "shriGanesh@ecom2020";
    public $SMTP_HOST       = "smtp.gmail.com";
    public $SMTP_PORT       = 465;

    // for administrator & for buyer
    public $SUBJECT_EMAIL_NEW_ORDER = "Market New Order";
    public $TITLE_REPORT_NEW_ORDER  = "Market New Order";

    // for buyer
    public $SUBJECT_EMAIL_ORDER_PROCESSED   = "Order PROCESSED";
    public $TITLE_REPORT_ORDER_PROCESSED    = "Order Status Change to PROCESSED";

    public $SUBJECT_EMAIL_ORDER_UPDATED     = "Order Data Updated";
    public $TITLE_REPORT_ORDER_UPDATED      = "Order Data Updated By Admin";
}

?>
