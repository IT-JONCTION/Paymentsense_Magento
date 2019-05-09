# Paymentsense_Payments

Paymentsense is a financial technology company that operates credit and debit card payment services for small and medium-sized businesses. This module integrates Magento stores with the Paymentsense payment gateway allowing merchants to accept card payments online. With Paymentsense merchants can set merchant accounts online for 3 working days or over-the-phone in just 24 hours. For test cards please refer to the TestCardDetails.pdf document. There are no fees for using the test account, there is no limit to how long you can use a test account for.

## Account & Pricing
A Paymentsense account is required before the installation of this module and the merchant gateway credentials should be set in the module configuration page through the Magento Admin Panel. If you don't yet have a Paymentsense account, please Register for a Test Account as the module does not create accounts during the installation.  Additional fees apply. To take payments from live cards you will need a live account in order to do this please take a look at our Online payments page.

 
## Features
Process credit and debit card transactions from the Magento storefront and Admin Panel.
Support of the latest PCI DSS version 3.2 introduced by the PCI Security Standards Council to safeguard the transmission and storage of payment card data.
AVS protection by checking the billing address of the credit card provided by the customer with the address on file at the credit card issuer.
CVV protection reducing the fraud incidences.
3-D Secure-enabled payments supported by the Hosted and Direct payment methods.
Ability to configure the sales action to Authorize only or Authorize and Capture.
Online refund support.
Void/cancel authorizations.
 
## Payment Methods
The following payment methods are supported and can be enabled and used in any combination based on the specific merchant requirements:

## Hosted payment method redirects the customer to enter their card details on a secure payment form hosted by Paymentsense.
Direct payment method allows the customer to enter their card details directly in the Magento store.
MOTO payment method allows the merchant to enter customer's card details when placing an order from the Magento Admin Panel.
 
## Security
The customer data is handled in full compliance with the General Data Protection Regulation and PCI DSS* version 3.2. All communication with Paymentsense is done using SSL encryption, and no sensitive customer data is stored on the Magento server. Merchant credentials are stored on the Magento server and saved/retried by using the standard functionalities accessible on the Magento Admin Panel.

Paymentsense Direct and Paymentsense MOTO methods collect the customer card data on a secure SSL/TLS configured Magento server, which is a strict requirement for these payment methods to work. For more information, please see the Secure Checkout section in the readme file.

Paymentsense Hosted method is realized through redirect to a secure page, hosted on a Paymentsense server by using hash digests and individual merchant keys for data validation. The available hashing algorithms are MD5, SHA1, HMACSHA1 and HMACMD5 as per the specific merchant configuration. This approach assures secure communication without the use of tokenisation.

 
## How the Magento site will function and appear with this module?
This module is built with the aim to integrate its functionality with zero to minimal changes of the look and feel of the Magento shop.
At checkout using the Paymentsense Hosted Method customers will see a button that will redirect them to the Paymentsense secure payment page where they can enter their card details. Once the card details are entered customers will be redirected back to the Magento shop and will see the order status.
At checkout using the Paymentsense Direct Method (SSL/TLS secure connection is required) customers will have the option to enter their card details directly in the Magento shop. If the card is enrolled in a 3-D secure scheme, a verification dialog from the ACS (Access Control Server) will appear in an iframe as an extra security step before showing the order status.
Orders placed by the merchants at the Magento Admin Panel using the Paymentsense MOTO Method work the same way like the Paymentsense Direct Method explained above with the difference that the processing of cards enrolled in a 3-D secure scheme is not supported. Any attempts to process such cards will result in showing the respective message.
 

## Release Notes
1.9.3001:
Compatible with CE: 1.9.1 1.9.2 1.9.3 1.9.4
Stability: Stable Build
Description:
## Added:
- SERVER result delivery method (Paymentsense Hosted)
- Payment method status and gateway connection status on the payment methods settings pages
- Gateway connection status on the module information report
- Ability to disable the communication on port 4430 (Paymentsense Hosted)

## Fixed:
-Switching to the next gateway entry point when an unexpected response from the gateway is received

## 1.9.2:
Compatible with CE: 1.9.1 1.9.2 1.9.3 1.9.4
Stability: Stable Build
Description:
##### 1.9.2
### Added
- Module information reporting feature

## 1.9.1:
Compatible with CE: 1.9.1 1.9.2 1.9.3
Stability: Stable Build
Description:
### Changed
- Order email queued only after successful payment. Emails for failed payments are no longer sent to the customer.

## 1.9.0:
Compatible with CE: 1.9.1 1.9.2 1.9.3
Stability: Stable Build
Description:
Initial release
