# Release 2.0.0
This release of the Token SDK for PHP adds the following new features, enhanced capabilities, and changes/fixes:
> * Backward compatibility support for the outmoded Token Request flow is discountinued.
>
>     * A `TokenRequestBuilder` can no longer be constructed directly from a `TokenPayload`. Set the necessary fields using >the **set*XYZ*()** methods (i.e., setters) in `TokenRequestBuilder.php`. 
>
>     * The `addOption` and `addAllOptions` methods have likewise been removed. Use the
>`TokenRequestBuilder.php` setters for `BankId`, `SourceAccountId`, `fromMemberId`, etc.

> * The `resolveAlias` method now returns a `TokenMember` object containing **member ID**
and the full alias with its appropriate type; returns **null** if the alias doesn't exist.
>   For example, `if (resolveAlias(alias)) { ... }` might be rewritten as
>   `if (!is_null(resolveAlias(alias))) { ... }`.

> * Support added for standing orders and scheduled payments.
>     * To indicate that a transfer should be executed on a specific future date, use the
>`setExecutionDate` method in `TransferTokenRequestBuilder`. 
>
>     * To construct a token request for a standing (recurring) order, use `StandingOrderTokenRequestBuilder.php`.

> * The **build_proto.rb** script is enhanced to recursively search through subdirectories for proto files.
 
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
