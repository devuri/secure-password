<?php

namespace Urisoft;

namespace Urisoft;

class PasswordGenerator
{
    /**
     * Generate a cryptographically secure password.
     *
     * @param int  $length          The length of the password to generate.
     * @param bool $useSpecialChars Whether to include special characters in the password.
     *
     * @return string The generated password.
     */
    public static function generatePassword( $length = 8, $useSpecialChars = true )
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        if ( $useSpecialChars ) {
            $characters .= '!@#$%^&*()';
        }
        $charactersLength = \strlen( $characters );
        $password         = '';

        for ( $i = 0; $i < $length; $i++ ) {
            $password .= $characters[ random_int( 0, $charactersLength - 1 ) ];
        }

        return $password;
    }

    /**
     * Generate a cryptographically secure passcode consisting of digits.
     *
     * @param int $length The length of the passcode to generate.
     *
     * @return string The generated passcode.
     */
    public static function generatePasscode( $length = 6 )
    {
        $passcode = '';
        $digits   = range( 0, 9 );

        for ( $i = 0; $i < $length; $i++ ) {
            $passcode .= $digits[ random_int( 0, \count( $digits ) - 1 ) ];
        }

        return $passcode;
    }
}
