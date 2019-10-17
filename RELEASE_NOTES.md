# Release 2.0.0
The following new features/enhancements, changes, and fixes are included this release:
- Backward compatibility support for the outmoded Token Request flow has been discontinued. As a result:
  - **TokenRequestBuilder** can no longer be constructed directly from a **TokenPayload**. You must now set fields using the setters in `TokenRequestBuilder.php`. 
  - The `addOption` and `addAllOptions` methods have been removed. You must now use the `TokenRequestBuilder.php` setters for **bank ID**, **source account ID**, **from/to member**, and so forth.
- The `resolveAlias` method now returns a `TokenMember` object containing **member ID**
and the full alias with the appropriate type. It returns **null** if the alias does't exist. 
  >For example, `if (resolveAlias(alias)) { ... }` might be rewritten as  `if (!is_null(resolveAlias(alias))) { ... }`.
- Standing orders and scheduled payments are now supported.
  - Indicate execution of a transfer on a specific future date by using the `setExecutionDate` method in `TransferTokenRequestBuilder.php`. 
  - Construct a token request for a standing order with `StandingOrderTokenRequestBuilder.php`.
- The **build_proto.rb** script now recursively searches through subdirectories for proto files.  


# Release 1.0.0 (since 1.0.0-beta-3)
- Introduces new Token Request flow. `TokenRequest` consists of `TokenRequestPayload` 
(immutable fields) and `TokenRequestOptions` (mutable fields). It should no longer contain 
`TokenPayload`.
- Adds support for eIDAS certificates.
- Introduces `TransferDestination` object, which should be used for transfer destinations.
>TransferEndpoint is now deprecated as a transfer destination. (Though it can still be used 
as a transfer source.)
- Defaults `transferRefId` to `tokenRefId` if not set on token redemption.
- Removes address, trusted beneficiary APIs.
- Permits use of `TokenClient` without a developer key.
- Add samples/ file demonstrating common uses of the SDK.
- Sets the `token-sdk-version` header properly using the version in `composer.json`.
