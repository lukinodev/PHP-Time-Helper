# Time helper

PHP Helper for time operations in **seconds**.

Please note that these values are approximate.
For example, `ONE_MONTH` wrongly assumes every month has 30 days and `ONE_YEAR` does not take leap years into account.

## Usage

		include 'time-helper.php';
		echo TWO_DAYS; // 172800 seconds
		echo SIX_WEEKS; // 3628800 seconds
		echo ONE_MONTH + FOUR_DAYS; // 2764800 seconds
		// etc...
