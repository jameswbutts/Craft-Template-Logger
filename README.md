# Logger for Craft

Craft plugin to allow access to Craft's logging functionality from templates.

## Usage

`{{ craft.logger.log([message][type][force]) }}`

## Examples

`{{ craft.logger.log("A sample log message of type info") }}`
`{{ craft.logger.log("A logged warning", "warning") }}`
`{{ craft.logger.log("An info message that has been forced", "info", "true") }}`