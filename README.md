# Logger for Craft

Craft plugin to allow access to Craft's logging functionality from templates.

## Usage

`{{ craft.logger.log([message][force]) }}` (defaults to info)

`{{ craft.logger.info([message][force]) }}`

`{{ craft.logger.error([message][force]) }}`

`{{ craft.logger.warning([message][force]) }}`

`{{ craft.logger.profile([message][force]) }}`

## Examples

`{{ craft.logger.info("Info message here.") }}`

`{{ craft.logger.warning("Warning message here.") }}`

`{{ craft.logger.error("Error message here.") }}`

`{{ craft.logger.profile("Profile message here.") }}`

`{{ craft.logger.info("Info message here (forced).", "true") }}`

## Changelog

### 1.0.1 (2015-07-09)

Add template guess to error messages

### 1.0.0 (2015-07-07)

Initial Release