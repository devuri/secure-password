<?php

use Urisoft\PasswordGenerator;

if ( ! \function_exists( 'generate_password' ) ) {
    /**
     * Generate a cryptographically secure password using the PasswordGenerator class.
     *
     * @param int  $length          The length of the password to generate.
     * @param bool $useSpecialChars Whether to include special characters in the password.
     *
     * @return string The generated password.
     */
    function generate_password( int $length = 8, bool $useSpecialChars = true )
    {
        $generator = new PasswordGenerator();

        return $generator->generatePassword( $length, $useSpecialChars );
    }
}

if ( ! \function_exists( 'generate_passcode' ) ) {
    /**
     * Generate a cryptographically secure passcode using the PasswordGenerator class.
     *
     * @param int $length The length of the passcode to generate.
     *
     * @return string The generated passcode.
     */
    function generate_passcode( $length = 6 )
    {
        $generator = new PasswordGenerator();

        return $generator->generatePasscode( $length );
    }
}
