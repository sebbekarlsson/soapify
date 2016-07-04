# Soapify
> Turn a key-value array into a soap object.


### Example
> Here is an example:

        $object = soapify(
            [
                'Test' => (String) 'yes',
                'Number_of_something' => (Int) 523,
                'cash' => (Double) 62.89
            ]
        );

> Currently only supports Double, String and Int.
> Casting the values is recommended!
